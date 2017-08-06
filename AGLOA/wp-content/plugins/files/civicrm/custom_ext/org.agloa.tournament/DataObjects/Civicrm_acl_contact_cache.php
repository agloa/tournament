<?php
/**
 * Table Definition for civicrm_acl_contact_cache
 */
require_once 'DB/DataObject.php';

class Civicrm_acl_contact_cache extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_acl_contact_cache';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $user_id;                        // int(4) unique_key unsigned
    public $contact_id;                     // int(4) unique_key not_null unsigned
    public $operation;                      // varchar(8) unique_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
