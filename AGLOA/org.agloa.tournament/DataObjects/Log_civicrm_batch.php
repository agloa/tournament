<?php
/**
 * Table Definition for log_civicrm_batch
 */
require_once 'DB/DataObject.php';

class Log_civicrm_batch extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_batch';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(64)
    public $title;                          // varchar(64)
    public $description;                    // text
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $modified_id;                    // int(4) unsigned
    public $modified_date;                  // datetime
    public $saved_search_id;                // int(4) unsigned
    public $status_id;                      // int(4) unsigned
    public $type_id;                        // int(4) unsigned
    public $mode_id;                        // int(4) unsigned
    public $total;                          // decimal(20,2)
    public $item_count;                     // int(4) unsigned
    public $payment_instrument_id;          // int(4) unsigned
    public $exported_date;                  // datetime
    public $data;                           // longtext
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
