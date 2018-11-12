<?php
/**
 * Table Definition for civicrm_status_pref
 */
require_once 'DB/DataObject.php';

class Civicrm_status_pref extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_status_pref';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) not_null unsigned
    public $name;                           // varchar(255) not_null
    public $hush_until;                     // date
    public $ignore_severity;                // int(4) unsigned default_1
    public $prefs;                          // varchar(255)
    public $check_info;                     // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
