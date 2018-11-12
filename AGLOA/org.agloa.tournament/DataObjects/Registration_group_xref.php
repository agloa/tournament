<?php
/**
 * Table Definition for registration_group_xref
 */
require_once 'DB/DataObject.php';

class Registration_group_xref extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'registration_group_xref';    // table name
    public $registration_group;             // varchar(20) primary_key not_null
    public $civicrm_group;                  // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
