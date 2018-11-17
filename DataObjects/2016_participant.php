<?php
/**
 * Table Definition for 2016_participant
 */
require_once 'DB/DataObject.php';

class 2016_participant extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = '2016_participant';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $event_id;                       // int(4) not_null unsigned
    public $status_id;                      // int(4) not_null unsigned default_1
    public $role_id;                        // varchar(128)
    public $register_date;                  // datetime
    public $source;                         // varchar(128)
    public $fee_level;                      // text
    public $is_test;                        // tinyint(1)
    public $is_pay_later;                   // tinyint(1)
    public $fee_amount;                     // decimal(20,2)
    public $registered_by_id;               // int(4) unsigned
    public $discount_id;                    // int(4) unsigned
    public $fee_currency;                   // varchar(3)
    public $campaign_id;                    // int(4) unsigned
    public $discount_amount;                // int(4) unsigned
    public $cart_id;                        // int(4) unsigned
    public $must_wait;                      // int(4)
    public $transferred_to_contact_id;      // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
