<?php
/**
 * Table Definition for civicrm_relationship
 */
require_once 'DB/DataObject.php';

class Civicrm_relationship extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_relationship';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id_a;                   // int(4) not_null unsigned
    public $contact_id_b;                   // int(4) not_null unsigned
    public $relationship_type_id;           // int(4) not_null unsigned
    public $start_date;                     // date
    public $end_date;                       // date
    public $is_active;                      // tinyint(1) default_1
    public $description;                    // varchar(255)
    public $is_permission_a_b;              // tinyint(1)
    public $is_permission_b_a;              // tinyint(1)
    public $case_id;                        // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
