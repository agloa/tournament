<?php
/**
 * Table Definition for wp_users
 */
require_once 'DB/DataObject.php';

class Wp_users extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_users';            // table name
    public $ID;                             // bigint(8) primary_key not_null unsigned
    public $user_login;                     // varchar(60) not_null
    public $user_pass;                      // varchar(255) not_null
    public $user_nicename;                  // varchar(50) not_null
    public $user_email;                     // varchar(100) not_null
    public $user_url;                       // varchar(100) not_null
    public $user_registered;                // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $user_activation_key;            // varchar(255) not_null
    public $user_status;                    // int(4) not_null
    public $display_name;                   // varchar(250) not_null
    public $spam;                           // tinyint(1) not_null
    public $deleted;                        // tinyint(1) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
