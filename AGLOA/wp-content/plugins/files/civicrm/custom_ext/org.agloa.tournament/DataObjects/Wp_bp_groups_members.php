<?php
/**
 * Table Definition for wp_bp_groups_members
 */
require_once 'DB/DataObject.php';

class Wp_bp_groups_members extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bp_groups_members';    // table name
    public $id;                             // bigint(8) primary_key not_null
    public $group_id;                       // bigint(8) not_null
    public $user_id;                        // bigint(8) not_null
    public $inviter_id;                     // bigint(8) not_null
    public $is_admin;                       // tinyint(1) not_null
    public $is_mod;                         // tinyint(1) not_null
    public $user_title;                     // varchar(100) not_null
    public $date_modified;                  // datetime not_null
    public $comments;                       // longtext not_null
    public $is_confirmed;                   // tinyint(1) not_null
    public $is_banned;                      // tinyint(1) not_null
    public $invite_sent;                    // tinyint(1) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
