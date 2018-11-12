<?php
/**
 * Table Definition for wp_signups
 */
require_once 'DB/DataObject.php';

class Wp_signups extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_signups';          // table name
    public $signup_id;                      // bigint(8) primary_key not_null
    public $domain;                         // varchar(200) multiple_key not_null
    public $path;                           // varchar(100) multiple_key not_null
    public $title;                          // longtext not_null
    public $user_login;                     // varchar(60) multiple_key not_null
    public $user_email;                     // varchar(100) multiple_key not_null
    public $registered;                     // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $activated;                      // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $active;                         // tinyint(1) not_null
    public $activation_key;                 // varchar(50) not_null
    public $meta;                           // longtext

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
