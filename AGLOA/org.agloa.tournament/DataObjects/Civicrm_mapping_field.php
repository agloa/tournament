<?php
/**
 * Table Definition for civicrm_mapping_field
 */
require_once 'DB/DataObject.php';

class Civicrm_mapping_field extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mapping_field';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $mapping_id;                     // int(4) not_null unsigned
    public $name;                           // varchar(255)
    public $contact_type;                   // varchar(64)
    public $column_number;                  // int(4) not_null unsigned
    public $location_type_id;               // int(4) unsigned
    public $phone_type_id;                  // int(4) unsigned
    public $im_provider_id;                 // int(4) unsigned
    public $website_type_id;                // int(4) unsigned
    public $relationship_type_id;           // int(4) unsigned
    public $relationship_direction;         // varchar(6)
    public $grouping;                       // int(4) unsigned default_1
    public $operator;                       // varchar(16)
    public $value;                          // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
