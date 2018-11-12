<?php
/**
 * Table Definition for log_civicrm_uf_group
 */
require_once 'DB/DataObject.php';

class Log_civicrm_uf_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_uf_group';    // table name
    public $id;                             // int(4) unsigned
    public $is_active;                      // tinyint(1) default_1
    public $group_type;                     // varchar(255)
    public $title;                          // varchar(64)
    public $description;                    // text
    public $help_pre;                       // text
    public $help_post;                      // text
    public $limit_listings_group_id;        // int(4) unsigned
    public $post_URL;                       // varchar(255)
    public $add_to_group_id;                // int(4) unsigned
    public $add_captcha;                    // tinyint(1)
    public $is_map;                         // tinyint(1)
    public $is_edit_link;                   // tinyint(1)
    public $is_uf_link;                     // tinyint(1)
    public $is_update_dupe;                 // tinyint(1)
    public $cancel_URL;                     // varchar(255)
    public $is_cms_user;                    // tinyint(1)
    public $notify;                         // text
    public $is_reserved;                    // tinyint(1)
    public $name;                           // varchar(64)
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $is_proximity_search;            // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
