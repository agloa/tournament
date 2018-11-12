<?php
/**
 * Table Definition for civicrm_membership_payment
 */
require_once 'DB/DataObject.php';

class Civicrm_membership_payment extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_membership_payment';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $membership_id;                  // int(4) unique_key not_null unsigned
    public $contribution_id;                // int(4) unique_key unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
