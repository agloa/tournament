<?php
/**
 * Table Definition for log_civicrm_note
 */
require_once 'DB/DataObject.php';

class Log_civicrm_note extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_note';    // table name
    public $id;                             // int(4) unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $note;                           // text
    public $contact_id;                     // int(4) unsigned
    public $modified_date;                  // date
    public $subject;                        // varchar(255)
    public $privacy;                        // varchar(255)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
