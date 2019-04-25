<?php
class portal_entry_callback
{
    private $dn;
    private $config;

    public function __construct($dn)
    {
        $this->dn = $dn;
        $this->config = new config();
    }

    public function addCallback($entry)
    {
        foreach ($entry['objectclass'] as $objectclass) {

            if ($objectclass == 'inetOrgPerson') {
                $this->addUser();
                break;
            } elseif ($objectclass == 'groupOfUniqueNames') {

                // 区分是邮件组还是组织架构
                if (strpos($this->dn, $this->config->custom_portal_params['mail_list_group']['dn']) !== false) {
                    $this->addMailListGroup();
                    break;
                }
            }
        }
    }

    public function updateCallback($entry)
    {
        if (strpos($this->dn, $this->config->custom_portal_params['users_group']['dn']) !== false) {

            foreach ($entry as $attr_name => $val) {

                // 更新用户 (sn, givename, passwd) 字段信息时调用
                if (($attr_name == 'userpassword' || $attr_name == 'sn' || $attr_name == 'givenname' || $attr_name == 'displayname')) {
                    $this->updateuser();
                    break;
                }
            }
        } elseif (strpos($this->dn, $this->config->custom_portal_params['mail_list_group']['dn']) !== false) {

            // 判断变更的是否是 member 字段，其他字段暂时不做处理
            if (!empty($entry['uniquemember'])) {
                $this->updateMailListGroup();
            }
        }
    }

    public function deleteCallback()
    {
        if (strpos($this->dn, $this->config->custom_portal_params['users_group']['dn']) !== false) {
            // 删除用户
            $this->deleteuser();
        } elseif (strpos($this->dn, $this->config->custom_portal_params['mail_list_group']['dn']) !== false) {
            // 删除邮件组
            $this->deleteMailListGroup();
        }
    }

    // 添加用户
    private function addUser()
    {
        $portal_redis = new portal_redis();
        $portal_redis->redis->lPush('ldap-sync-account-task', '{"event":"add-user", "dn":"' . $this->dn . '"}');
        file_put_contents(__DIR__ . '/../logs/log.txt', '{"event":"add", "dn":"' . $this->dn . '"}');
    }

    // 删除用户
    private function deleteuser()
    {
        $portal_redis = new portal_redis();
        $portal_redis->redis->lPush('ldap-sync-account-task', '{"event":"delete-user", "dn":"' . $this->dn . '"}');
        file_put_contents(__DIR__ . '/../logs/log.txt', '{"event":"delete", "dn":"' . $this->dn . '"}');
    }

    // 编辑用户
    private function updateuser()
    {
        $portal_redis = new portal_redis();
        $portal_redis->redis->lPush('ldap-sync-account-task', '{"event":"update-user", "dn":"' . $this->dn . '"}');
        file_put_contents(__DIR__ . '/../logs/log.txt', '{"event":"update", "dn":"' . $this->dn . '"}');
    }

    // 添加邮件组
    private function addMailListGroup()
    {
        $portal_redis = new portal_redis();
        $portal_redis->redis->lPush('ldap-sync-account-task', '{"event":"add-maillist", "dn":"' . $this->dn . '"}');
        file_put_contents(__DIR__ . '/../logs/log.txt', '{"event":"add", "dn":"' . $this->dn . '"}');
    }

    // 修改邮件组成员（成员添加，成员删除）
    private function updateMailListGroup()
    {
        $portal_redis = new portal_redis();
        $portal_redis->redis->lPush('ldap-sync-account-task', '{"event":"update-maillist-member", "dn":"' . $this->dn . '"}');
        file_put_contents(__DIR__ . '/../logs/log.txt', '{"event":"update", "dn":"' . $this->dn . '"}');
    }

    // 删除邮件组
    private function deleteMailListGroup()
    {
        $portal_redis = new portal_redis();
        $portal_redis->redis->lPush('ldap-sync-account-task', '{"event":"delete-maillist", "dn":"' . $this->dn . '"}');
        file_put_contents(__DIR__ . '/../logs/log.txt', '{"event":"delete", "dn":"' . $this->dn . '"}');
    }

}