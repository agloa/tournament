<?php
/**
 * Table Definition for civicrm_relationship_type
 */
require_once 'DB/DataObject.php';

class Civicrm_relationship_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_relationship_type';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name_a_b;                       // varchar(64) unique_key
    public $label_a_b;                      // varchar(64)
    public $name_b_a;                       // varchar(64) unique_key
    public $label_b_a;                      // varchar(64)
    public $description;                    // varchar(255)
    public $contact_type_a;                 // varchar(12)
    public $contact_type_b;                 // varchar(12)
    public $contact_sub_type_a;             // varchar(64)
    public $contact_sub_type_b;             // varchar(64)
    public $is_reserved;                    // tinyint(1)
    public $is_active;                      // tinyint(1) default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
