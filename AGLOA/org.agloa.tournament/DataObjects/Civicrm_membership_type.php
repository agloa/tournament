<?php
/**
 * Table Definition for civicrm_membership_type
 */
require_once 'DB/DataObject.php';

class Civicrm_membership_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_membership_type';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) not_null unsigned
    public $name;                           // varchar(128)
    public $description;                    // varchar(255)
    public $member_of_contact_id;           // int(4) not_null unsigned
    public $financial_type_id;              // int(4) not_null unsigned
    public $minimum_fee;                    // decimal(20,2) default_0.00
    public $duration_unit;                  // varchar(8)
    public $duration_interval;              // int(4)
    public $period_type;                    // varchar(8)
    public $fixed_period_start_day;         // int(4)
    public $fixed_period_rollover_day;      // int(4)
    public $relationship_type_id;           // varchar(64)
    public $relationship_direction;         // varchar(128)
    public $max_related;                    // int(4)
    public $visibility;                     // varchar(64)
    public $weight;                         // int(4)
    public $receipt_text_signup;            // varchar(255)
    public $receipt_text_renewal;           // varchar(255)
    public $auto_renew;                     // tinyint(1)
    public $is_active;                      // tinyint(1) default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
