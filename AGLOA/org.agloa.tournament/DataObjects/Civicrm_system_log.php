<?php
/**
 * Table Definition for civicrm_system_log
 */
require_once 'DB/DataObject.php';

class Civicrm_system_log extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_system_log';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $message;                        // varchar(128) not_null
    public $context;                        // longtext
    public $level;                          // varchar(9) default_info
    public $timestamp;                      // timestamp not_null default_CURRENT_TIMESTAMP
    public $contact_id;                     // int(4) unsigned
    public $hostname;                       // varchar(128)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
