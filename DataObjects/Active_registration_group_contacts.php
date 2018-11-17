<?php
/**
 * Table Definition for active_registration_group_contacts
 */
require_once 'DB/DataObject.php';

class Active_registration_group_contacts extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'active_registration_group_contacts';    // table name
    public $group_id;                       // int(4) not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $id;                             // int(4) not_null unsigned
    public $title;                          // varchar(64)
    public $created_id;                     // int(4) unsigned
    public $created_by;                     // varchar(128)
    public $modified_id;                    // int(4) unsigned
    public $modified_by;                    // varchar(128)
    public $group_type;                     // varchar(128)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
