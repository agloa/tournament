<?php
/**
 * Table Definition for wp_cptch_images
 */
require_once 'DB/DataObject.php';

class Wp_cptch_images extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_cptch_images';     // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // char(100) not_null
    public $package_id;                     // int(4) not_null
    public $number;                         // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
