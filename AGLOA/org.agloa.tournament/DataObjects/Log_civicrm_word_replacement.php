<?php
/**
 * Table Definition for log_civicrm_word_replacement
 */
require_once 'DB/DataObject.php';

class Log_civicrm_word_replacement extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_word_replacement';    // table name
    public $id;                             // int(4) unsigned
    public $find_word;                      // varchar(255)
    public $replace_word;                   // varchar(255)
    public $is_active;                      // tinyint(1) default_1
    public $match_type;                     // varchar(16) default_wildcardMatch
    public $domain_id;                      // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
