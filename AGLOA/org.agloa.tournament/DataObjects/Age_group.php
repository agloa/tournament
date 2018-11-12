<?php
/**
 * Table Definition for age_group
 */
require_once 'DB/DataObject.php';

class Age_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'age_group';           // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $label;                          // varchar(512) not_null
    public $name;                           // varchar(512) not_null
    public $Description;                    // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
