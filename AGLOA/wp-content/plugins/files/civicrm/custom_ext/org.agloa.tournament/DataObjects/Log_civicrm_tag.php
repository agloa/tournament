<?php
/**
 * Table Definition for log_civicrm_tag
 */
require_once 'DB/DataObject.php';

class Log_civicrm_tag extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_tag';     // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(64)
    public $description;                    // varchar(255)
    public $parent_id;                      // int(4) unsigned
    public $is_selectable;                  // tinyint(1) default_1
    public $is_reserved;                    // tinyint(1)
    public $is_tagset;                      // tinyint(1)
    public $used_for;                       // varchar(64)
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)
    public $color;                          // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
