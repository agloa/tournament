<?php
/**
 * Table Definition for civicrm_mailing_job
 */
require_once 'DB/DataObject.php';

class Civicrm_mailing_job extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mailing_job';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $mailing_id;                     // int(4) not_null unsigned
    public $scheduled_date;                 // datetime
    public $start_date;                     // datetime
    public $end_date;                       // datetime
    public $status;                         // varchar(12)
    public $is_test;                        // tinyint(1)
    public $job_type;                       // varchar(255)
    public $parent_id;                      // int(4) unsigned
    public $job_offset;                     // int(4)
    public $job_limit;                      // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
