<?php
/**
 * Table Definition for civicrm_group_contact
 */
require_once 'DB/DataObject.php';

class Civicrm_group_contact extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_group_contact';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $group_id;                       // int(4) unique_key not_null unsigned
    public $contact_id;                     // int(4) unique_key not_null unsigned
    public $status;                         // varchar(8)
    public $location_id;                    // int(4) unsigned
    public $email_id;                       // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
