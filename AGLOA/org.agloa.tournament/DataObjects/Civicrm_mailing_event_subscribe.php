<?php
/**
 * Table Definition for civicrm_mailing_event_subscribe
 */
require_once 'DB/DataObject.php';

class Civicrm_mailing_event_subscribe extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mailing_event_subscribe';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $group_id;                       // int(4) not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $hash;                           // varchar(255) not_null
    public $time_stamp;                     // datetime not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
