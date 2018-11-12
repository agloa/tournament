<?php
/**
 * Table Definition for agloa_group_shirts
 */
require_once 'DB/DataObject.php';

class Agloa_group_shirts extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_group_shirts';    // table name
    public $registration_group;             // varchar(64)
    public $size;                           // varchar(255)
    public $qty;                            // decimal(42,2)
    public $order_type;                     // varchar(5) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
