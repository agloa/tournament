<?php
/**
 * Table Definition for registration_group
 */
require_once 'DB/DataObject.php';

class Registration_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'registration_group';    // table name
    public $id;                             // varchar(20) primary_key not_null
    public $label;                          // varchar(64) unique_key not_null
    public $description;                    // text not_null
    public $scheduling_group;               // varchar(20) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
