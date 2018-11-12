<?php
/**
 * Table Definition for civicrm_premiums_product
 */
require_once 'DB/DataObject.php';

class Civicrm_premiums_product extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_premiums_product';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $premiums_id;                    // int(4) not_null unsigned
    public $product_id;                     // int(4) not_null unsigned
    public $weight;                         // int(4) not_null unsigned
    public $financial_type_id;              // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
