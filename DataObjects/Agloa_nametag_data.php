<?php
/**
 * Table Definition for agloa_nametag_data
 */
require_once 'DB/DataObject.php';

class Agloa_nametag_data extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_nametag_data';    // table name
    public $display_name;                   // varchar(128)
    public $ID;                             // int(4) not_null unsigned
    public $role;                           // varchar(512)
    public $Meals;                          // varchar(3) not_null
    public $group_name;                     // varchar(64)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
