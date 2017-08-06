<?php
/**
 * Table Definition for civicrm_county
 */
require_once 'DB/DataObject.php';

class Civicrm_county extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_county';      // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $abbreviation;                   // varchar(4)
    public $state_province_id;              // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
