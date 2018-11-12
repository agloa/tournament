<?php
/**
 * Table Definition for wp_redirection_logs
 */
require_once 'DB/DataObject.php';

class Wp_redirection_logs extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_redirection_logs';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $created;                        // datetime not_null
    public $url;                            // mediumtext not_null
    public $sent_to;                        // mediumtext
    public $agent;                          // mediumtext not_null
    public $referrer;                       // mediumtext
    public $redirection_id;                 // int(4) unsigned
    public $ip;                             // varchar(17) not_null
    public $module_id;                      // int(4) not_null unsigned
    public $group_id;                       // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
