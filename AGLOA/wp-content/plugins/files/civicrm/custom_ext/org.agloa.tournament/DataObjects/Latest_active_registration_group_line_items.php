<?php
/**
 * Table Definition for latest_active_registration_group_line_items
 */
require_once 'DB/DataObject.php';

class Latest_active_registration_group_line_items extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'latest_active_registration_group_line_items';    // table name
    public $registration_group;             // varchar(64)
    public $price_field;                    // varchar(255)
    public $qty;                            // decimal(42,2)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
