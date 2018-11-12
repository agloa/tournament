<?php
/**
 * Table Definition for civicrm_membership_block
 */
require_once 'DB/DataObject.php';

class Civicrm_membership_block extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_membership_block';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) not_null unsigned
    public $membership_types;               // varchar(1024)
    public $membership_type_default;        // int(4) unsigned
    public $display_min_fee;                // tinyint(1) default_1
    public $is_separate_payment;            // tinyint(1) default_1
    public $new_title;                      // varchar(255)
    public $new_text;                       // text
    public $renewal_title;                  // varchar(255)
    public $renewal_text;                   // text
    public $is_required;                    // tinyint(1)
    public $is_active;                      // tinyint(1) default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
