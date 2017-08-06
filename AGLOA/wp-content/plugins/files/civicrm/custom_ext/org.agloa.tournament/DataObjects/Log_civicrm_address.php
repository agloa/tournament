<?php
/**
 * Table Definition for log_civicrm_address
 */
require_once 'DB/DataObject.php';

class Log_civicrm_address extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_address';    // table name
    public $id;                             // int(4) unsigned
    public $contact_id;                     // int(4) unsigned
    public $location_type_id;               // int(4) unsigned
    public $is_primary;                     // tinyint(1)
    public $is_billing;                     // tinyint(1)
    public $street_address;                 // varchar(96)
    public $street_number;                  // int(4)
    public $street_number_suffix;           // varchar(8)
    public $street_number_predirectional;   // varchar(8)
    public $street_name;                    // varchar(64)
    public $street_type;                    // varchar(8)
    public $street_number_postdirectional;   // varchar(8)
    public $street_unit;                    // varchar(16)
    public $supplemental_address_1;         // varchar(96)
    public $supplemental_address_2;         // varchar(96)
    public $supplemental_address_3;         // varchar(96)
    public $city;                           // varchar(64)
    public $county_id;                      // int(4) unsigned
    public $state_province_id;              // int(4) unsigned
    public $postal_code_suffix;             // varchar(12)
    public $postal_code;                    // varchar(64)
    public $usps_adc;                       // varchar(32)
    public $country_id;                     // int(4) unsigned
    public $geo_code_1;                     // double
    public $geo_code_2;                     // double
    public $manual_geo_code;                // tinyint(1)
    public $timezone;                       // varchar(8)
    public $name;                           // varchar(255)
    public $master_id;                      // int(4) unsigned
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
