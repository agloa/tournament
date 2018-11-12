<?php
/**
 * Table Definition for civicrm_state_province
 */
require_once 'DB/DataObject.php';

class Civicrm_state_province extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_state_province';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $abbreviation;                   // varchar(4)
    public $country_id;                     // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
