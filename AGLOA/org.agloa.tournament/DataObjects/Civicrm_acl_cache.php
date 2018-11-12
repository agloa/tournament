<?php
/**
 * Table Definition for civicrm_acl_cache
 */
require_once 'DB/DataObject.php';

class Civicrm_acl_cache extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_acl_cache';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) unsigned
    public $acl_id;                         // int(4) not_null unsigned
    public $modified_date;                  // timestamp

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
