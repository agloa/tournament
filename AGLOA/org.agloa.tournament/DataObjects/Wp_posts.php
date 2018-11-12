<?php
/**
 * Table Definition for wp_posts
 */
require_once 'DB/DataObject.php';

class Wp_posts extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_posts';            // table name
    public $ID;                             // bigint(8) primary_key not_null unsigned
    public $post_author;                    // bigint(8) not_null unsigned
    public $post_date;                      // datetime multiple_key not_null default_0000-00-00%2000%3A00%3A00
    public $post_date_gmt;                  // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $post_content;                   // longtext not_null
    public $post_title;                     // text not_null
    public $post_excerpt;                   // text not_null
    public $post_status;                    // varchar(20) multiple_key not_null default_publish
    public $comment_status;                 // varchar(20) not_null default_open
    public $ping_status;                    // varchar(20) not_null default_open
    public $post_password;                  // varchar(255) not_null
    public $post_name;                      // varchar(200) not_null
    public $to_ping;                        // text not_null
    public $pinged;                         // text not_null
    public $post_modified;                  // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $post_modified_gmt;              // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $post_content_filtered;          // longtext not_null
    public $post_parent;                    // bigint(8) not_null unsigned
    public $guid;                           // varchar(255) not_null
    public $menu_order;                     // int(4) not_null
    public $post_type;                      // varchar(20) multiple_key not_null default_post
    public $post_mime_type;                 // varchar(100) not_null
    public $comment_count;                  // bigint(8) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
