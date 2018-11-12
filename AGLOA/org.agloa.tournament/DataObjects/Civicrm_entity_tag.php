<?php
/**
 * Table Definition for civicrm_entity_tag
 */
require_once 'DB/DataObject.php';

class Civicrm_entity_tag extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_entity_tag';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) unique_key
    public $entity_id;                      // int(4) unique_key not_null unsigned
    public $tag_id;                         // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
