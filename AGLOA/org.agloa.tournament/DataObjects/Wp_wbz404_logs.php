<?php
/**
 * Table Definition for wp_wbz404_logs
 */
require_once 'DB/DataObject.php';

class Wp_wbz404_logs extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_wbz404_logs';      // table name
    public $id;                             // bigint(8) primary_key not_null
    public $redirect_id;                    // bigint(8) not_null
    public $timestamp;                      // bigint(8) not_null
    public $remote_host;                    // varchar(512) not_null
    public $referrer;                       // varchar(512) not_null
    public $action;                         // varchar(512) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
