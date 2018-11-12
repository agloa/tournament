<?php
/**
 * Table Definition for civicrm_membership
 */
require_once 'DB/DataObject.php';

class Civicrm_membership extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_membership';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $membership_type_id;             // int(4) not_null unsigned
    public $join_date;                      // date
    public $start_date;                     // date
    public $end_date;                       // date
    public $source;                         // varchar(128)
    public $status_id;                      // int(4) not_null unsigned
    public $is_override;                    // tinyint(1)
    public $owner_membership_id;            // int(4) unsigned
    public $max_related;                    // int(4)
    public $is_test;                        // tinyint(1)
    public $is_pay_later;                   // tinyint(1)
    public $contribution_recur_id;          // int(4) unsigned
    public $campaign_id;                    // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
