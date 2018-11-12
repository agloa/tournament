<?php
/**
 * Table Definition for civicrm_activity_contact
 */
require_once 'DB/DataObject.php';

class Civicrm_activity_contact extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_activity_contact';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $activity_id;                    // int(4) unique_key not_null unsigned
    public $contact_id;                     // int(4) unique_key not_null unsigned
    public $record_type_id;                 // int(4) unique_key unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
