<?php
/**
 * Table Definition for civicrm_group_organization
 */
require_once 'DB/DataObject.php';

class Civicrm_group_organization extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_group_organization';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $group_id;                       // int(4) unique_key not_null unsigned
    public $organization_id;                // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
