<?php
/**
 * Table Definition for civicrm_group_contact_cache
 */
require_once 'DB/DataObject.php';

class Civicrm_group_contact_cache extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_group_contact_cache';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $group_id;                       // int(4) unique_key not_null unsigned
    public $contact_id;                     // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
