<?php
/**
 * Table Definition for civicrm_saved_search
 */
require_once 'DB/DataObject.php';

class Civicrm_saved_search extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_saved_search';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $form_values;                    // text
    public $mapping_id;                     // int(4) unsigned
    public $search_custom_id;               // int(4) unsigned
    public $where_clause;                   // text
    public $select_tables;                  // text
    public $where_tables;                   // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
