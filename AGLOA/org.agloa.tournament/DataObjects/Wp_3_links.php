<?php
/**
 * Table Definition for wp_3_links
 */
require_once 'DB/DataObject.php';

class Wp_3_links extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_3_links';          // table name
    public $link_id;                        // bigint(8) primary_key not_null unsigned
    public $link_url;                       // varchar(255) not_null
    public $link_name;                      // varchar(255) not_null
    public $link_image;                     // varchar(255) not_null
    public $link_target;                    // varchar(25) not_null
    public $link_description;               // varchar(255) not_null
    public $link_visible;                   // varchar(20) not_null default_Y
    public $link_owner;                     // bigint(8) not_null unsigned default_1
    public $link_rating;                    // int(4) not_null
    public $link_updated;                   // datetime not_null default_0000-00-00%2000%3A00%3A00
    public $link_rel;                       // varchar(255) not_null
    public $link_notes;                     // mediumtext not_null
    public $link_rss;                       // varchar(255) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
