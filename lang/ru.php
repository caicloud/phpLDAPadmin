<?php

// Translate to russian Dmitry Gorpinenko dima at uz.energy.gov.ua
$lang = array();

// Search form
$lang['simple_search_form_str'] = 'Простая форма поиска';
$lang['advanced_search_form_str'] = 'Разширеная форма поиска';
$lang['server'] = 'Сервер';
$lang['search_for_entries_whose'] = 'Search for entries whose';
$lang['base_dn'] = 'Основной DN (Base DN)'; // 'Base DN';
$lang['search_scope'] = 'Search Scope';
$lang['search_ filter'] = 'Поисковый фильтр';//'Search Filter';
$lang['show_attributes'] = 'Показать атрибуты';//'Show Attributtes';
$lang['Search'] = 'Поиск';//'Search';
$lang['equals'] = 'ровно';//'equals';
$lang['starts_with'] = 'запускать с';//'starts with';
$lang['contains'] = 'содержит';//'contains';
$lang['ends_with'] = 'заканчивать с';//'ends with';
$lang['sounds_like'] = 'звучит подобно';//'sounds like';

// Tree browser
$lang['request_new_feature'] = 'Попросить новую возможность';//'Request a new feature';
$lang['see_open_requests'] = 'посмотреть запрошеные возможности';//'see open requests';
$lang['report_bug'] = 'Сообщить об ошибках ';//'Report a bug';
$lang['see_open_bugs'] = 'просмотреть текущее ошибки';//'see open bugs';
$lang['schema'] = 'схема';//'schema';
$lang['search'] = 'поиск';//'search';
$lang['refresh'] = 'обновить';//'refresh';
$lang['create'] = 'создать';//'create';
$lang['info'] = 'инфа';//'info';
$lang['import'] = 'импорт';//'import';
$lang['logout'] = 'выйти';//'logout';
$lang['create_new'] = 'Создать новую';//'Create New';
$lang['view_schema_for'] = 'Просмотреть схему для';//'View schema for';
$lang['refresh_expanded_containers'] = 'Refresh all expanded containers for';
$lang['create_new_entry_on'] = 'Создать новую запись на';//'Create a new entry on';
$lang['view_server_info'] = 'Просмотреть информацию о возможностях сервера';//'View server-supplied information';
$lang['import_from_ldif'] = 'Импорт записей из LDIF файла';//'Import entries from an LDIF file';
$lang['logout_of_this_server'] = 'Отключиться от этого сервера';//'Logout of this server';
$lang['logged_in_as'] = 'Поключен как:';//'Logged in as: ';
$lang['read_only'] = 'только для чтения';//'read only';
$lang['could_not_determine_root'] = 'Не могу определить корень Вашего LDAP дерева';//'Could not determin the root of your LDAP tree.';
$lang['ldap_refuses_to_give_root'] = 'It appears that the LDAP server has been configured to not reveal its root.';
$lang['please_specify_in_config'] = 'Пожалуста определите это в config.php';//'Please specify it in config.php';
$lang['create_new_entry_in'] = 'Создайте новую запись в';//'Create a new entry in';

// Entry display
$lang['delete_this_entry'] = 'Удалить эту запись';//'Delete this entry';
$lang['delete_this_entry_tooltip'] = 'You will be prompted to confirm this decision';
$lang['copy_this_entry'] = 'Скопировать эту запись';//'Copy this entry';
$lang['copy_this_entry_tooltip'] = 'Скопировать этот обьект в другое место, новый DN, или другой сервер';//'Copy this object to another location, a new DN, or another server';
$lang['export_to_ldif'] = 'Экспорт в LDIF';//'Export to LDIF';
$lang['export_to_ldif_tooltip'] = 'Сохранить дамп LDIF этого обьекта';//'Save an LDIF dump of this object';
$lang['export_subtree_to_ldif_tooltip'] = 'Save an LDIF dump of this object and all of its children';
$lang['export_subtree_to_ldif'] = 'Экспорт поддерева в LDIF';//'Export subtree to LDIF';
$lang['export_to_ldif_mac'] = 'Конец строки в стиле Macintosh';//'Macintosh style line ends';
$lang['export_to_ldif_win'] = 'Конец строки в стиле Windows';
$lang['export_to_ldif_unix'] = 'Конец строки в стиле Windows';//'Unix style line ends';
$lang['create_a_child_entry'] = 'Создать запись-потомок';//'Create a child entry';
$lang['add_a_jpeg_photo'] = 'Добавить jpeg-фото';//'Add a jpegPhoto';
$lang['rename_entry'] = 'Переимеовать запись';//'Rename Entry';
$lang['rename'] = 'Переименовать';//'Rename';
$lang['login_link'] = 'Login...';
$lang['add'] = 'Добавить';//'Add';
$lang['view'] = 'Просмотреть';//'View';
$lang['add_new_attribute'] = 'Довавить новый атрибут';//'Add New Attribute';
$lang['add_new_attribute_tooltip'] = 'Добавить новый атрибут/значение в эту запись';//'Add a new attribute/value to this entry';
$lang['internal_attributes'] = 'Внешний атрибуты';//'Internal Attributes';
$lang['hide_internal_attrs'] = 'Скрыть внешний атрибуты';//'Hide internal attributes';
$lang['show_internal_attrs'] = 'Показать внешний атрибуты';//'Show internal attributes';
$lang['internal_attrs_tooltip'] = 'Атрибуты устанавливаються автоматически системой';//'Attributes set automatically by the system';
$lang['entry_attributes'] = 'Атрибуты записи';//'Entry Attributes'; 
$lang['click_to_display'] = 'нажать для просмотра';//'click to display'; 
$lang['hidden'] = 'скрытый';//'hidden'; 
$lang['none'] = 'нет';//'none'; 
$lang['save_changes'] = 'Сохранить изменение';//'Save Changes';
$lang['add_value'] = 'добавить значение';//'add value';
$lang['add_value_tooltip'] = 'Добавить дополнительные значение к этому атрибуту';//'Add an additional value to this attribute';
$lang['refresh'] = 'обновить';//'refresh';
$lang['refresh_this_entry'] = 'Обновить эту запись';//'Refresh this entry';
$lang['delete_hint'] = 'Совет: <b>Удалить атрибут</b>, очистите текстовое поле и нажмите сохрнить.';//'Hint: <b>To delete an attribute</b>, empty the text field and click save.';
$lang['viewing_read_only'] = 'Просмотреть запись в режиме только для чтения';//'Viewing entry in read-only mode.';
$lang['change_entry_rdn'] = 'Change this entry\'s RDN';
$lang['no_new_attrs_available'] = 'нет новых атрибутов для этой записи';//'no new attributes available for this entry';
$lang['binary_value'] = 'Бинарное значение';//'Binary value';
$lang['add_new_binary_attr'] = 'Добавить новый бинарный атрибут';//'Add New Binary Attribute';
$lang['add_new_binary_attr_tooltip'] = 'Добавить новый бинарный атрибут/значение с файла';//'Add a new binary attribute/value from a file';
$lang['alias_for'] = 'Алиас для';//'Alias for';
$lang['download_value'] = 'загрузить значение';//'download value';
$lang['delete_attribute'] = 'удалить атрибут';//'delete attribute';
$lang['true'] = 'да';//'true';
$lang['false'] = 'нет';//'false';
$lang['none_remove_value'] = 'нет, удалите значение';//'none, remove value';
$lang['really_delete_attribute'] = 'Really delete attribute';

// Schema browser
$lang['the_following_objectclasses'] = 'Следующий <b>objectClasses</b> поддерживаеться этим LDAP сервером.';;//'The following <b>objectClasses</b> are supported by this LDAP server.';
$lang['the_following_attributes'] = 'Следующий <b>attributeTypes</b> поддерживаеться этим LDAP севером.';//The following <b>attributeTypes</b> are supported by this LDAP server.';
$lang['the_following_matching'] = 'Следующий <b>matching rules</b> поддерживаеться этим LDAP севером.';//'The following <b>matching rules</b> are supported by this LDAP server.';
$lang['the_following_syntaxes'] = 'Следующий <b>syntaxes</b> поддерживаеться этим LDAP сервером.';//'The following <b>syntaxes</b> are supported by this LDAP server.';
$lang['jump_to_objectclass'] =  'Перейти к objectClass';//'Jump to an objectClass';
$lang['jump_to_attr'] = 'Перейти к атрибутам';//'Jump to an attribute';
$lang['schema_for_server'] = 'Схема для сервера';//'Schema for server';
$lang['required_attrs'] = 'Запрошеные атрибуты';//'Required Attributes';
$lang['optional_attrs'] = 'Оптимальные отрибуты';//'Optional Attributes';
$lang['OID'] = 'OID';
$lang['desc'] = 'Описание';//'Description';
$lang['is_obsolete'] =  'Этот objectClass есть <b>obsolete</b>';//'This objectClass is <b>obsolete</b>';
$lang['inherits'] = 'Наследование';
$lang['jump_to_this_oclass'] =  'Перейти к этому objectClass описанию';//'Jump to this objectClass definition';
$lang['matching_rule_oid'] = 'Matching Rule OID';
$lang['syntax_oid'] = 'Syntax OID';

// Adding objectClass form
$lang['new_required_attrs'] = 'Новые запрошеные параметры';// 'New Required Attributes';
$lang['requires_to_add'] = 'Это действие запрошено вами к добавлению';//'This action requires you to add';
$lang['new_attributes'] = 'новые атрибуты';//'new attributes';
$lang['new_required_attrs_instructions'] = 'Instructions: In order to add this objectClass to this entry, you must specify';
$lang['that_this_oclass_requires'] = 'that this objectClass requires. You can do so in this form.';
$lang['add_oclass_and_attrs'] = 'И ObjectClass и Attributes';//'Add ObjectClass and Attributes';

// General
$lang['chooser_link_tooltip'] = 'Click to popup a dialog to select an entry (DN) graphically';
$lang['no_updates_in_read_only_mode'] = 'You cannot perform updates while server is in read-only mode';
$lang['bad_server_id'] = 'Плохой сервера id';//'Bad server id';
$lang['not_enough_login_info'] = 'Не достаточно информации для подключения к серверу. Пожалуста проверте Вашу конфигулацию.';//'Not enough information to login to server. Please check your configuration.';
$lang['could_not_connect'] = 'Не могу подключиться к LDAP сервером';//'Could not connect to LDAP server.';
$lang['could_not_perform_ldap_mod_add'] = 'Could not perform ldap_mod_add operation.';

// Add value form
$lang['add_new'] = 'Добавить новый';//'Add new';
$lang['value_to'] = 'Значение к';//'value to';
$lang['server'] = 'Сервер';//'Server';
$lang['distinguished_name'] = 'Distinguished Name';
$lang['current_list_of'] = 'Текущий список';//'Current list of';
$lang['values_for_attribute'] = 'значение для атрибута';//'values for attribute';
$lang['inappropriate_matching_note'] = 'Note: You will get an "inappropriate matching" error if you have not<br />' .
			'setup an <tt>EQUALITY</tt> rule on your LDAP server for this attribute.';
$lang['enter_value_to_add'] = 'Enter the value you would like to add:';
$lang['new_required_attrs_note'] = 'Note: you may be required to enter new attributes<br />that this objectClass requires.';
$lang['syntax'] = 'Синтаксис';//'Syntax';

// Incomplete or Erroneous Language Files
$lang['attr_name_tooltip'] = 'attr_name_tooltip';
$lang['refresh_entry']= 'обновить запись';
$lang['attr_schema_hint']='атрибут схемы подсказки';
$lang['attrs_modified']='атрибуты изменены';
$lang['attr_modified']='атрибут изменен';
$lang['name']='имя';
$lang['not_applicable']='не применимый';
$lang['not_specified']='не орпеделенный';
$lang['entry_deleted_successfully']='запись удалена успешно';
$lang['you_must_specify_a_dn']='вы должны определить DN';
$lang['could_not_delete_entry']='не возможно удалить запись';
$lang['bad_server_id_underline']='неверный id сервера подчеркивать';
$lang['success']='успешно';
$lang['server_colon_pare']='вырезать двоеточие севера';
$lang['look_in']='рассматривать';
$lang['missing_server_id_in_query_string']='отсутсвует id сервера в строке запроса';
$lang['missing_dn_in_query_string']='отсутсвует dn в строке запроса';
$lang['back_up_p']='back up p';
$lang['no_entries']='нет записей';
$lang['not_logged_in']='не зарагестрирован в';
$lang['could_not_det_base_dn']='не возможно определить Base DN';
$lang['copy_server_read_only']='корировать сервер только для чтения';
$lang['copy_dest_dn_blank']='копировать в расположение  пустого DN';
$lang['copy_dest_already_exists']='копировать в расположение уже существующее';
$lang['copy_dest_container_does_not_exist']='копировать в расположение которое не существует';
$lang['copy_source_dest_dn_same']='копировать с исходного расположения в тот же DN ';
$lang['copy_copying']='копировать копирование';
$lang['copy_recursive_copy_progress']='копирование процес рекурсивного копирования';
$lang['copy_building_snapshot']='копирование кадра построение';
$lang['copy_successful_like_to']='копирование успешно подобно до ';
$lang['copy_view_new_entry']='копирование просмотр новых записей';
$lang['copy_failed']='копирование неудачно';
$lang['missing_template_file']='нет временого файла';
$lang['using_default']='использовать по умолчанию';
$lang['copyf_title_copy']='копировать заголовок копировать';
$lang['copyf_to_new_object']='копировать новый объект';
$lang['copyf_dest_dn']='копировать расположение DN';
$lang['copyf_dest_dn_tooltip']='копировать расположение DN toolip';
$lang['copyf_dest_server']='копировать расположение сервера';
$lang['copyf_note']='копировать записку';
$lang['copyf_recursive_copy']='копирование рекурсивное копирование';
$lang['create_required_attribute']='создать необходимый атрибут';
$lang['create_redirecting']='создать переназначение';
$lang['create_here']='создать сдесь';
$lang['create_could_not_add']='создание не может добавление';
$lang['createf_create_object']='создать объект';
$lang['createf_choose_temp']='выбрать шаблон';
$lang['createf_select_temp']='выбрать шаблон';
$lang['createf_proceed']='обработаный';
$lang['ctemplate_on_server']='на сервер';
$lang['ctemplate_no_template']='нет шаблона';
$lang['ctemplate_config_handler']='скофигурировать инструктора';
$lang['ctemplate_handler_does_not_exist']='конструктор не существует';
$lang['you_have_not_logged_into_server']='Вы не зарегестрировались на сервере';
$lang['click_to_go_to_login_form']='нажмите для регистрации';
$lang['unrecognized_criteria_option']='неизвесна опция критерия';
$lang['if_you_want_to_add_criteria']='если Вы хотите добавить критерий';
$lang['entries_found']='записи найдены';
$lang['filter_performed']='фильтер выполнен';
$lang['search_duration']='поиск длительный';
$lang['seconds']='секунды';
$lang['scope_in_which_to_search']='в которой искать';
$lang['scope_sub']='под';
$lang['scope_one']='одна область';
$lang['scope_base']='база';
$lang['standard_ldap_search_filter']='стандартный ldap поисковый фильтер';
$lang['search_filter']='фильтер поиска';
$lang['list_of_attrs_to_display_in_results']='список атрибутов показать в результате';
$lang['starts with']='начинать с';
$lang['ends with']='заканчивать с';
$lang['sounds like']='звучит подобно';
$lang['could_not_fetch_server_info']='не могу получить информацию с сервера';
$lang['server_info_for']='инфа сервера для';
$lang['server_reports_following']='отчет сервера следует';
$lang['nothing_to_report']='нечего показать для отчета';
$lang['update_array_malformed']='update_array_malformed';
$lang['could_not_perform_ldap_modify']='нельзя разрешить изменение ldap';
$lang['do_you_want_to_make_these_changes']='хотите сделать эти изменения';
$lang['attribute']='атрибут';
$lang['old_value']='старое значение';
$lang['new_value']='новое значение';
$lang['attr_deleted']='атрибут удален';
$lang['commit']='подтвердить';
$lang['cancel']='отменить';
$lang['you_made_no_changes']='Вы ничего не изменили ';
$lang['go_back']='назад';
$lang['welcome_note']='пригасительная запись';
$lang['unsafe_file_name']='ненадежное имя файла';
$lang['no_such_file']='нет такого файла';
$lang['auto_update_not_setup']='авто-обновление не устанавливать';
$lang['uidpool_not_set']='uidpool не указан';
$lang['uidpool_not_exist']='uidpool не существует';
$lang['specified_uidpool']='определите uidpool';
$lang['auto_uid_invalid_value']='auto uid неправильное значение';
$lang['error_auth_type_config']='error_auth_type_config';
$lang['php_install_not_supports_tls']='установленый PHP не поддерживает tls';
$lang['could_not_start_tls']='нельзя начать tls';
$lang['auth_type_not_valid']='тип авторизации не правильный';
$lang['ldap_said']='ldap сказал';
$lang['ferror_error']='ошибка';
$lang['fbrowse']='просмотреть';
$lang['delete_photo']='удалить фото';
$lang['install_not_support_blowfish']='установка не поддерживает blowfish';
$lang['install_no_mash']='install_no_mash';
$lang['jpeg_contains_errors']='jpeg содержит ошибки';
$lang['ferror_number']='номер ошибки';
$lang['ferror_discription']='ошибка описания';
$lang['ferror_number_short']='число короткое';
$lang['ferror_discription_short']='описание короткое';
$lang['ferror_submit_bug']='подтвердите баг';
$lang['ferror_unrecognized_num']='неивесный номер ошибки ';
$lang['ferror_nonfatil_bug']='не фатальная ошибка';
$lang['ferror_congrats_found_bug']='поздравление нашедшим баг';

?>
