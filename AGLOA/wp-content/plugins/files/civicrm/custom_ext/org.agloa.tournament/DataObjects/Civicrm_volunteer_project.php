<?php
/**
 * Table Definition for civicrm_volunteer_project
 */
require_once 'DB/DataObject.php';

class Civicrm_volunteer_project extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_volunteer_project';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) unique_key not_null
    public $entity_id;                      // int(4) unique_key not_null unsigned
    public $target_contact_id;              // int(4) unsigned
    public $is_active;                      // tinyint(1) not_null default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
