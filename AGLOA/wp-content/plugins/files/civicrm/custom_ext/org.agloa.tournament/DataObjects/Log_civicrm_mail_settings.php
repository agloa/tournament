<?php
/**
 * Table Definition for log_civicrm_mail_settings
 */
require_once 'DB/DataObject.php';

class Log_civicrm_mail_settings extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_mail_settings';    // table name
    public $id;                             // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $name;                           // varchar(255)
    public $is_default;                     // tinyint(1)
    public $domain;                         // varchar(255)
    public $localpart;                      // varchar(255)
    public $return_path;                    // varchar(255)
    public $protocol;                       // varchar(255)
    public $server;                         // varchar(255)
    public $port;                           // int(4) unsigned
    public $username;                       // varchar(255)
    public $password;                       // varchar(255)
    public $is_ssl;                         // tinyint(1)
    public $source;                         // varchar(255)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $activity_status;                // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
