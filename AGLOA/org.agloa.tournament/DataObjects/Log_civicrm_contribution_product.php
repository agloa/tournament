<?php
/**
 * Table Definition for log_civicrm_contribution_product
 */
require_once 'DB/DataObject.php';

class Log_civicrm_contribution_product extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_contribution_product';    // table name
    public $id;                             // int(4) unsigned
    public $product_id;                     // int(4) unsigned
    public $contribution_id;                // int(4) unsigned
    public $product_option;                 // varchar(255)
    public $quantity;                       // int(4)
    public $fulfilled_date;                 // date
    public $start_date;                     // date
    public $end_date;                       // date
    public $comment;                        // text
    public $financial_type_id;              // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
