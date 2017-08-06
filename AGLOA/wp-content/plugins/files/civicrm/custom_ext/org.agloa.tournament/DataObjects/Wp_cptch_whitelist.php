<?php
/**
 * Table Definition for wp_cptch_whitelist
 */
require_once 'DB/DataObject.php';

class Wp_cptch_whitelist extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_cptch_whitelist';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $ip;                             // char(31) unique_key not_null
    public $ip_from_int;                    // bigint(8)
    public $ip_to_int;                      // bigint(8)
    public $add_time;                       // datetime

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
