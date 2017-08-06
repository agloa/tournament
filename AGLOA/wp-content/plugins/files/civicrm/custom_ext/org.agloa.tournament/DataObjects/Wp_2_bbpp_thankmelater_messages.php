<?php
/**
 * Table Definition for wp_2_bbpp_thankmelater_messages
 */
require_once 'DB/DataObject.php';

class Wp_2_bbpp_thankmelater_messages extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_2_bbpp_thankmelater_messages';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $from_name;                      // varchar(255) not_null
    public $from_email;                     // varchar(100) not_null
    public $subject;                        // varchar(255) not_null
    public $message;                        // longtext not_null
    public $min_delay;                      // double not_null unsigned
    public $min_delay_unit;                 // enum(7) not_null
    public $target_tags;                    // longtext not_null
    public $target_categories;              // longtext not_null
    public $target_posts;                   // longtext not_null
    public $max_sends_per_email;            // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
