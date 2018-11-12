<?php
/**
 * Table Definition for civicrm_acl
 */
require_once 'DB/DataObject.php';

class Civicrm_acl extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_acl';         // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64)
    public $deny;                           // tinyint(1) not_null
    public $entity_table;                   // varchar(64) not_null
    public $entity_id;                      // int(4) unsigned
    public $operation;                      // varchar(8) not_null
    public $object_table;                   // varchar(64)
    public $object_id;                      // int(4) unsigned
    public $acl_table;                      // varchar(64)
    public $acl_id;                         // int(4) unsigned
    public $is_active;                      // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
