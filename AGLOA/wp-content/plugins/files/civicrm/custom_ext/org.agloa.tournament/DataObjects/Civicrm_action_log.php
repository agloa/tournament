<?php
/**
 * Table Definition for civicrm_action_log
 */
require_once 'DB/DataObject.php';

class Civicrm_action_log extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_action_log';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) unsigned
    public $entity_id;                      // int(4) not_null unsigned
    public $entity_table;                   // varchar(255)
    public $action_schedule_id;             // int(4) not_null unsigned
    public $action_date_time;               // datetime
    public $is_error;                       // tinyint(1)
    public $message;                        // text
    public $repetition_number;              // int(4) unsigned
    public $reference_date;                 // date

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
