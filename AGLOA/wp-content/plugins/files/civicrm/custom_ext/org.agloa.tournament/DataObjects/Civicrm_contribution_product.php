<?php
/**
 * Table Definition for civicrm_contribution_product
 */
require_once 'DB/DataObject.php';

class Civicrm_contribution_product extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_contribution_product';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $product_id;                     // int(4) not_null unsigned
    public $contribution_id;                // int(4) not_null unsigned
    public $product_option;                 // varchar(255)
    public $quantity;                       // int(4)
    public $fulfilled_date;                 // date
    public $start_date;                     // date
    public $end_date;                       // date
    public $comment;                        // text
    public $financial_type_id;              // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
