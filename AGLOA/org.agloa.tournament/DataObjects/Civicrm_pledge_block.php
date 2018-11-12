<?php
/**
 * Table Definition for civicrm_pledge_block
 */
require_once 'DB/DataObject.php';

class Civicrm_pledge_block extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_pledge_block';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) multiple_key
    public $entity_id;                      // int(4) multiple_key not_null unsigned
    public $pledge_frequency_unit;          // varchar(128)
    public $is_pledge_interval;             // tinyint(1)
    public $max_reminders;                  // int(4) unsigned default_1
    public $initial_reminder_day;           // int(4) unsigned default_5
    public $additional_reminder_day;        // int(4) unsigned default_5
    public $pledge_start_date;              // varchar(64)
    public $is_pledge_start_date_visible;   // tinyint(1) not_null
    public $is_pledge_start_date_editable;   // tinyint(1) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
