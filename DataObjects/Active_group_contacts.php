<?php
/**
 * Table Definition for active_group_contacts
 */
require_once 'DB/DataObject.php';

class Active_group_contacts extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'active_group_contacts';    // table name
    public $group_id;                       // int(4) not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
