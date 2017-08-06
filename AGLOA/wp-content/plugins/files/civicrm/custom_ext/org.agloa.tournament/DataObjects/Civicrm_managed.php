<?php
/**
 * Table Definition for civicrm_managed
 */
require_once 'DB/DataObject.php';

class Civicrm_managed extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_managed';     // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $module;                         // varchar(127) multiple_key not_null
    public $name;                           // varchar(127) multiple_key
    public $entity_type;                    // varchar(64) multiple_key not_null
    public $entity_id;                      // int(4) multiple_key not_null unsigned
    public $cleanup;                        // varchar(32)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
