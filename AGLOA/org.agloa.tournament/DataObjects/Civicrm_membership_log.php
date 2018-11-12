<?php
/**
 * Table Definition for civicrm_membership_log
 */
require_once 'DB/DataObject.php';

class Civicrm_membership_log extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_membership_log';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $membership_id;                  // int(4) not_null unsigned
    public $status_id;                      // int(4) not_null unsigned
    public $start_date;                     // date
    public $end_date;                       // date
    public $modified_id;                    // int(4) unsigned
    public $modified_date;                  // date
    public $membership_type_id;             // int(4) unsigned
    public $max_related;                    // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
