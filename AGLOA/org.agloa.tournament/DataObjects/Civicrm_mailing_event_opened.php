<?php
/**
 * Table Definition for civicrm_mailing_event_opened
 */
require_once 'DB/DataObject.php';

class Civicrm_mailing_event_opened extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mailing_event_opened';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $event_queue_id;                 // int(4) not_null unsigned
    public $time_stamp;                     // datetime not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
