<?php
/**
 * Table Definition for wp_revisr
 */
require_once 'DB/DataObject.php';

class Wp_revisr extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_revisr';           // table name
    public $id;                             // mediumint(3) unique_key not_null
    public $time;                           // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $message;                        // text
    public $event;                          // varchar(42) not_null
    public $user;                           // varchar(60)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
