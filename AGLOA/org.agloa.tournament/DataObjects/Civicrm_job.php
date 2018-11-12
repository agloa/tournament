<?php
/**
 * Table Definition for civicrm_job
 */
require_once 'DB/DataObject.php';

class Civicrm_job extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_job';         // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) not_null unsigned
    public $run_frequency;                  // varchar(8) default_Daily
    public $last_run;                       // datetime
    public $scheduled_run_date;             // timestamp
    public $name;                           // varchar(255)
    public $description;                    // varchar(255)
    public $api_entity;                     // varchar(255)
    public $api_action;                     // varchar(255)
    public $parameters;                     // text
    public $is_active;                      // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
