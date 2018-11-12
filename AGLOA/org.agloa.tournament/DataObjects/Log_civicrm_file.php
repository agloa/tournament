<?php
/**
 * Table Definition for log_civicrm_file
 */
require_once 'DB/DataObject.php';

class Log_civicrm_file extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_file';    // table name
    public $id;                             // int(4) unsigned
    public $file_type_id;                   // int(4) unsigned
    public $mime_type;                      // varchar(255)
    public $uri;                            // varchar(255)
    public $document;                       // mediumblob
    public $description;                    // varchar(255)
    public $upload_date;                    // datetime
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
