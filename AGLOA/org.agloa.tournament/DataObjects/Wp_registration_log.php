<?php
/**
 * Table Definition for wp_registration_log
 */
require_once 'DB/DataObject.php';

class Wp_registration_log extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_registration_log';    // table name
    public $ID;                             // bigint(8) primary_key not_null
    public $email;                          // varchar(255) not_null
    public $IP;                             // varchar(30) not_null
    public $blog_id;                        // bigint(8) not_null
    public $date_registered;                // datetime not_null default_0000-00-00%2000%3A00%3A00

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
