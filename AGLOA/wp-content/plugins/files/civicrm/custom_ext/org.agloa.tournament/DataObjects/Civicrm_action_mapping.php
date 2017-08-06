<?php
/**
 * Table Definition for civicrm_action_mapping
 */
require_once 'DB/DataObject.php';

class Civicrm_action_mapping extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_action_mapping';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity;                         // varchar(64)
    public $entity_value;                   // varchar(64)
    public $entity_value_label;             // varchar(64)
    public $entity_status;                  // varchar(64)
    public $entity_status_label;            // varchar(64)
    public $entity_date_start;              // varchar(64)
    public $entity_date_end;                // varchar(64)
    public $entity_recipient;               // varchar(64)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
