<?php
/**
 * Table Definition for wp_redirection_modules
 */
require_once 'DB/DataObject.php';

class Wp_redirection_modules extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_redirection_modules';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $type;                           // varchar(20) not_null
    public $name;                           // varchar(50) not_null
    public $options;                        // mediumtext

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
