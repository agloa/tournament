<?php
/**
 * Table Definition for log_civicrm_tell_friend
 */
require_once 'DB/DataObject.php';

class Log_civicrm_tell_friend extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_tell_friend';    // table name
    public $id;                             // int(4) unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $title;                          // varchar(255)
    public $intro;                          // text
    public $suggested_message;              // text
    public $general_link;                   // varchar(255)
    public $thankyou_title;                 // varchar(255)
    public $thankyou_text;                  // text
    public $is_active;                      // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
