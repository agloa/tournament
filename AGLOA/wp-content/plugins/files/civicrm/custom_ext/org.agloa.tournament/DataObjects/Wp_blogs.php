<?php
/**
 * Table Definition for wp_blogs
 */
require_once 'DB/DataObject.php';

class Wp_blogs extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_blogs';            // table name
    public $blog_id;                        // bigint(8) primary_key not_null
    public $site_id;                        // bigint(8) not_null
    public $domain;                         // varchar(200) multiple_key not_null
    public $path;                           // varchar(100) multiple_key not_null
    public $registered;                     // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $last_updated;                   // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $public;                         // tinyint(1) not_null default_1
    public $archived;                       // tinyint(1) not_null
    public $mature;                         // tinyint(1) not_null
    public $spam;                           // tinyint(1) not_null
    public $deleted;                        // tinyint(1) not_null
    public $lang_id;                        // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
