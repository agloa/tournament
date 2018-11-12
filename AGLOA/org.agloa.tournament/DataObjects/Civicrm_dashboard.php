<?php
/**
 * Table Definition for civicrm_dashboard
 */
require_once 'DB/DataObject.php';

class Civicrm_dashboard extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_dashboard';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) not_null unsigned
    public $name;                           // varchar(64)
    public $label;                          // varchar(255)
    public $url;                            // varchar(255)
    public $permission;                     // varchar(255)
    public $permission_operator;            // varchar(3)
    public $fullscreen_url;                 // varchar(255)
    public $is_active;                      // tinyint(1)
    public $is_reserved;                    // tinyint(1)
    public $cache_minutes;                  // int(4) not_null unsigned default_60

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
