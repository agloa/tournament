<?php
/**
 * Table Definition for latest_active_tourament_participant_meals
 */
require_once 'DB/DataObject.php';

class Latest_active_tourament_participant_meals extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'latest_active_tourament_participant_meals';    // table name
    public $display_name;                   // varchar(128)
    public $role;                           // varchar(512)
    public $ID;                             // int(4) not_null unsigned
    public $Meals;                          // varchar(3) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
