<?php
/**
 * Table Definition for civicrm_component
 */
require_once 'DB/DataObject.php';

class Civicrm_component extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_component';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) not_null
    public $namespace;                      // varchar(128)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
