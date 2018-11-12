<?php
/**
 * Table Definition for civicrm_discount
 */
require_once 'DB/DataObject.php';

class Civicrm_discount extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_discount';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) multiple_key
    public $entity_id;                      // int(4) multiple_key not_null unsigned
    public $price_set_id;                   // int(4) multiple_key not_null unsigned
    public $start_date;                     // date
    public $end_date;                       // date

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
