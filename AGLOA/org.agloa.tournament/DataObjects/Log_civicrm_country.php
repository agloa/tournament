<?php
/**
 * Table Definition for log_civicrm_country
 */
require_once 'DB/DataObject.php';

class Log_civicrm_country extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_country';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(64)
    public $iso_code;                       // char(2)
    public $country_code;                   // varchar(4)
    public $address_format_id;              // int(4) unsigned
    public $idd_prefix;                     // varchar(4)
    public $ndd_prefix;                     // varchar(4)
    public $region_id;                      // int(4) unsigned
    public $is_province_abbreviated;        // tinyint(1)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
