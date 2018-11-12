<?php
/**
 * Table Definition for civicrm_mapping
 */
require_once 'DB/DataObject.php';

class Civicrm_mapping extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mapping';     // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64)
    public $description;                    // varchar(255)
    public $mapping_type_id;                // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
