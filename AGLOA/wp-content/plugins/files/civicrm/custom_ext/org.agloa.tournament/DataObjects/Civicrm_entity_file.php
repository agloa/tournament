<?php
/**
 * Table Definition for civicrm_entity_file
 */
require_once 'DB/DataObject.php';

class Civicrm_entity_file extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_entity_file';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) multiple_key
    public $entity_id;                      // int(4) multiple_key not_null unsigned
    public $file_id;                        // int(4) multiple_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
