<?php
/**
 * Table Definition for log_civicrm_saved_search
 */
require_once 'DB/DataObject.php';

class Log_civicrm_saved_search extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_saved_search';    // table name
    public $id;                             // int(4) unsigned
    public $form_values;                    // text
    public $mapping_id;                     // int(4) unsigned
    public $search_custom_id;               // int(4) unsigned
    public $where_clause;                   // text
    public $select_tables;                  // text
    public $where_tables;                   // text
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
