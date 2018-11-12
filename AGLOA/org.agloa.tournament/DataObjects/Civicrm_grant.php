<?php
/**
 * Table Definition for civicrm_grant
 */
require_once 'DB/DataObject.php';

class Civicrm_grant extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_grant';       // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $application_received_date;      // date
    public $decision_date;                  // date
    public $money_transfer_date;            // date
    public $grant_due_date;                 // date
    public $grant_report_received;          // tinyint(1)
    public $grant_type_id;                  // int(4) not_null unsigned
    public $amount_total;                   // decimal(20,2) not_null
    public $amount_requested;               // decimal(20,2)
    public $amount_granted;                 // decimal(20,2)
    public $currency;                       // varchar(3) not_null
    public $rationale;                      // text
    public $status_id;                      // int(4) not_null unsigned
    public $financial_type_id;              // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
