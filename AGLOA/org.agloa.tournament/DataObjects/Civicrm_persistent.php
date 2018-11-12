<?php
/**
 * Table Definition for civicrm_persistent
 */
require_once 'DB/DataObject.php';

class Civicrm_persistent extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_persistent';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $context;                        // varchar(255) not_null
    public $name;                           // varchar(255) not_null
    public $data;                           // longtext
    public $is_config;                      // tinyint(1) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
