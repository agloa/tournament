<?php
/**
 * Table Definition for civicrm_case
 */
require_once 'DB/DataObject.php';

class Civicrm_case extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_case';        // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $case_type_id;                   // int(4) not_null unsigned
    public $subject;                        // varchar(128)
    public $start_date;                     // date
    public $end_date;                       // date
    public $details;                        // text
    public $status_id;                      // int(4) not_null unsigned
    public $is_deleted;                     // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
