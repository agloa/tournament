<?php
/**
 * Table Definition for civicrm_job_log
 */
require_once 'DB/DataObject.php';

class Civicrm_job_log extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_job_log';     // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) not_null unsigned
    public $run_time;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $job_id;                         // int(4) unsigned
    public $name;                           // varchar(255)
    public $command;                        // varchar(255)
    public $description;                    // varchar(255)
    public $data;                           // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
