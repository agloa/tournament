<?php
/**
 * Table Definition for civicrm_dashboard_contact
 */
require_once 'DB/DataObject.php';

class Civicrm_dashboard_contact extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_dashboard_contact';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $dashboard_id;                   // int(4) unique_key not_null unsigned
    public $contact_id;                     // int(4) unique_key not_null unsigned
    public $column_no;                      // tinyint(1)
    public $is_active;                      // tinyint(1)
    public $weight;                         // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
