<?php
/**
 * Table Definition for civicrm_activity
 */
require_once 'DB/DataObject.php';

class Civicrm_activity extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_activity';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $source_record_id;               // int(4) unsigned
    public $activity_type_id;               // int(4) not_null unsigned default_1
    public $subject;                        // varchar(255)
    public $activity_date_time;             // datetime
    public $duration;                       // int(4) unsigned
    public $location;                       // varchar(255)
    public $phone_id;                       // int(4) unsigned
    public $phone_number;                   // varchar(64)
    public $details;                        // longtext
    public $status_id;                      // int(4) unsigned
    public $priority_id;                    // int(4) unsigned
    public $parent_id;                      // int(4) unsigned
    public $is_test;                        // tinyint(1)
    public $medium_id;                      // int(4) unsigned
    public $is_auto;                        // tinyint(1)
    public $relationship_id;                // int(4) unsigned
    public $is_current_revision;            // tinyint(1) default_1
    public $original_id;                    // int(4) unsigned
    public $result;                         // varchar(255)
    public $is_deleted;                     // tinyint(1)
    public $campaign_id;                    // int(4) unsigned
    public $engagement_level;               // int(4) unsigned
    public $weight;                         // int(4)
    public $is_star;                        // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
