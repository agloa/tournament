<?php
/**
 * Table Definition for wp_cptch_packages
 */
require_once 'DB/DataObject.php';

class Wp_cptch_packages extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_cptch_packages';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // char(100) not_null
    public $folder;                         // char(100) not_null
    public $settings;                       // longtext not_null
    public $user_settings;                  // longtext not_null
    public $add_time;                       // datetime not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
