<?php
/**
 * Table Definition for civicrm_pcp
 */
require_once 'DB/DataObject.php';

class Civicrm_pcp extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_pcp';         // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $status_id;                      // int(4) not_null unsigned
    public $title;                          // varchar(255)
    public $intro_text;                     // text
    public $page_text;                      // text
    public $donate_link_text;               // varchar(255)
    public $page_id;                        // int(4) not_null unsigned
    public $page_type;                      // varchar(64) default_contribute
    public $pcp_block_id;                   // int(4) not_null unsigned
    public $is_thermometer;                 // int(4) unsigned
    public $is_honor_roll;                  // int(4) unsigned
    public $goal_amount;                    // decimal(20,2)
    public $currency;                       // varchar(3)
    public $is_active;                      // tinyint(1)
    public $is_notify;                      // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
