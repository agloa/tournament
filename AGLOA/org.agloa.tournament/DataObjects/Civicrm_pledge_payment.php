<?php
/**
 * Table Definition for civicrm_pledge_payment
 */
require_once 'DB/DataObject.php';

class Civicrm_pledge_payment extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_pledge_payment';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $pledge_id;                      // int(4) multiple_key not_null unsigned
    public $contribution_id;                // int(4) multiple_key unsigned
    public $scheduled_amount;               // decimal(20,2) not_null
    public $actual_amount;                  // decimal(20,2)
    public $currency;                       // varchar(3)
    public $scheduled_date;                 // datetime not_null
    public $reminder_date;                  // datetime
    public $reminder_count;                 // int(4) unsigned
    public $status_id;                      // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
