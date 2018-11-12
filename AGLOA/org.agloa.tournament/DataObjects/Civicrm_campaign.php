<?php
/**
 * Table Definition for civicrm_campaign
 */
require_once 'DB/DataObject.php';

class Civicrm_campaign extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_campaign';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(255) not_null
    public $title;                          // varchar(255)
    public $description;                    // text
    public $start_date;                     // datetime
    public $end_date;                       // datetime
    public $campaign_type_id;               // int(4) unsigned
    public $status_id;                      // int(4) unsigned
    public $external_identifier;            // varchar(32) unique_key
    public $parent_id;                      // int(4) unsigned
    public $is_active;                      // tinyint(1) default_1
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $last_modified_id;               // int(4) unsigned
    public $last_modified_date;             // datetime
    public $goal_general;                   // text
    public $goal_revenue;                   // decimal(20,2)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
