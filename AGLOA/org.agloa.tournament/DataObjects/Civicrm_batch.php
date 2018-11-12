<?php
/**
 * Table Definition for civicrm_batch
 */
require_once 'DB/DataObject.php';

class Civicrm_batch extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_batch';       // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $title;                          // varchar(255)
    public $description;                    // text
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $modified_id;                    // int(4) unsigned
    public $modified_date;                  // datetime
    public $saved_search_id;                // int(4) unsigned
    public $status_id;                      // int(4) not_null unsigned
    public $type_id;                        // int(4) unsigned
    public $mode_id;                        // int(4) unsigned
    public $total;                          // decimal(20,2)
    public $item_count;                     // int(4) unsigned
    public $payment_instrument_id;          // int(4) unsigned
    public $exported_date;                  // datetime
    public $data;                           // longtext

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
