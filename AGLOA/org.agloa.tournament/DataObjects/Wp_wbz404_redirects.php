<?php
/**
 * Table Definition for wp_wbz404_redirects
 */
require_once 'DB/DataObject.php';

class Wp_wbz404_redirects extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_wbz404_redirects';    // table name
    public $id;                             // bigint(8) primary_key not_null
    public $url;                            // varchar(512) not_null
    public $status;                         // bigint(8) not_null
    public $type;                           // bigint(8) not_null
    public $final_dest;                     // varchar(512) not_null
    public $code;                           // bigint(8) not_null
    public $disabled;                       // int(4) not_null
    public $timestamp;                      // bigint(8) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
