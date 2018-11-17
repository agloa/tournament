<?php
/**
 * Table Definition for scheduling_group
 */
require_once 'DB/DataObject.php';

class Scheduling_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'scheduling_group';    // table name
    public $id;                             // varchar(20) primary_key not_null
    public $label;                          // varchar(64) unique_key not_null
    public $description;                    // text not_null
    public $sponsor_org;                    // varchar(20) not_null
    public $region;                         // varchar(5) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
