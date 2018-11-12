<?php
/**
 * Table Definition for log_civicrm_uf_match
 */
require_once 'DB/DataObject.php';

class Log_civicrm_uf_match extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_uf_match';    // table name
    public $id;                             // int(4) unsigned
    public $domain_id;                      // int(4) unsigned
    public $uf_id;                          // int(4) unsigned
    public $uf_name;                        // varchar(128)
    public $contact_id;                     // int(4) unsigned
    public $language;                       // varchar(5)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
