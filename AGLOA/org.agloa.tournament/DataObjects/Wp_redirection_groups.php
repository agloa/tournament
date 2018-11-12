<?php
/**
 * Table Definition for wp_redirection_groups
 */
require_once 'DB/DataObject.php';

class Wp_redirection_groups extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_redirection_groups';    // table name
    public $id;                             // int(4) primary_key not_null
    public $name;                           // varchar(50) not_null
    public $tracking;                       // int(4) not_null default_1
    public $module_id;                      // int(4) not_null unsigned
    public $status;                         // enum(8) not_null default_enabled
    public $position;                       // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
