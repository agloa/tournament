<?php
/**
 * Table Definition for civicrm_survey
 */
require_once 'DB/DataObject.php';

class Civicrm_survey extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_survey';      // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $title;                          // varchar(255) not_null
    public $campaign_id;                    // int(4) unsigned
    public $activity_type_id;               // int(4) unsigned
    public $recontact_interval;             // text
    public $instructions;                   // text
    public $release_frequency;              // int(4) unsigned
    public $max_number_of_contacts;         // int(4) unsigned
    public $default_number_of_contacts;     // int(4) unsigned
    public $is_active;                      // tinyint(1) default_1
    public $is_default;                     // tinyint(1)
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $last_modified_id;               // int(4) unsigned
    public $last_modified_date;             // datetime
    public $result_id;                      // int(4) unsigned
    public $bypass_confirm;                 // tinyint(1)
    public $thankyou_title;                 // varchar(255)
    public $thankyou_text;                  // text
    public $is_share;                       // tinyint(1) default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
