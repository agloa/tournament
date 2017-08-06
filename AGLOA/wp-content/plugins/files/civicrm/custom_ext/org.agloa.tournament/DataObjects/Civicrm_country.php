<?php
/**
 * Table Definition for civicrm_country
 */
require_once 'DB/DataObject.php';

class Civicrm_country extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_country';     // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $iso_code;                       // char(2) unique_key
    public $country_code;                   // varchar(4)
    public $address_format_id;              // int(4) unsigned
    public $idd_prefix;                     // varchar(4)
    public $ndd_prefix;                     // varchar(4)
    public $region_id;                      // int(4) not_null unsigned
    public $is_province_abbreviated;        // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
