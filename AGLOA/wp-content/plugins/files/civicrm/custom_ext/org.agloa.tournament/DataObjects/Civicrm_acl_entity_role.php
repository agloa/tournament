<?php
/**
 * Table Definition for civicrm_acl_entity_role
 */
require_once 'DB/DataObject.php';

class Civicrm_acl_entity_role extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_acl_entity_role';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $acl_role_id;                    // int(4) not_null unsigned
    public $entity_table;                   // varchar(64) multiple_key not_null
    public $entity_id;                      // int(4) multiple_key not_null unsigned
    public $is_active;                      // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
