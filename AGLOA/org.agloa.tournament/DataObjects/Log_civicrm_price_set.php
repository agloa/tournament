<?php
/**
 * Table Definition for log_civicrm_price_set
 */
require_once 'DB/DataObject.php';

class Log_civicrm_price_set extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_price_set';    // table name
    public $id;                             // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $name;                           // varchar(255)
    public $title;                          // varchar(255)
    public $is_active;                      // tinyint(1) default_1
    public $help_pre;                       // text
    public $help_post;                      // text
    public $javascript;                     // varchar(64)
    public $extends;                        // varchar(255)
    public $financial_type_id;              // int(4) unsigned
    public $is_quick_config;                // tinyint(1)
    public $is_reserved;                    // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $min_amount;                     // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
