<?php

class portal_redis
{
    public $redis;

    public function __construct()
    {
        $config = new config();
        $this->redis = new Redis();
        $connect = $this->redis->connect($config->custom_portal_params['redis']['host'], $config->custom_portal_params['redis']['port']);

        if (!$connect) {
            throw new Exception('redis conntection fail');
        }
        $this->redis->auth($config->custom_portal_params['redis']['auth']);
    }
}