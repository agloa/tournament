<?php
/**
 * Table Definition for civicrm_recurring_entity
 */
require_once 'DB/DataObject.php';

class Civicrm_recurring_entity extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_recurring_entity';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $parent_id;                      // int(4) not_null unsigned
    public $entity_id;                      // int(4) unsigned
    public $entity_table;                   // varchar(64) not_null
    public $mode;                           // tinyint(1) not_null default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
