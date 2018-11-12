<?php
/**
 * Table Definition for wp_2_comments
 */
require_once 'DB/DataObject.php';

class Wp_2_comments extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_2_comments';       // table name
    public $comment_ID;                     // bigint(8) primary_key not_null unsigned
    public $comment_post_ID;                // bigint(8) not_null unsigned
    public $comment_author;                 // tinytext not_null
    public $comment_author_email;           // varchar(100) not_null
    public $comment_author_url;             // varchar(200) not_null
    public $comment_author_IP;              // varchar(100) not_null
    public $comment_date;                   // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $comment_date_gmt;               // datetime multiple_key not_null default_0000-00-00%2000%3A00%3A00
    public $comment_content;                // text not_null
    public $comment_karma;                  // int(4) not_null
    public $comment_approved;               // varchar(20) multiple_key not_null default_1
    public $comment_agent;                  // varchar(255) not_null
    public $comment_type;                   // varchar(20) not_null
    public $comment_parent;                 // bigint(8) not_null unsigned
    public $user_id;                        // bigint(8) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
