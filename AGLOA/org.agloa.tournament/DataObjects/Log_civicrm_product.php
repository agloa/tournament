<?php
/**
 * Table Definition for log_civicrm_product
 */
require_once 'DB/DataObject.php';

class Log_civicrm_product extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_product';    // table name
    public $id;                             // int(4) unsigned
    public $name;                           // varchar(255)
    public $description;                    // text
    public $sku;                            // varchar(50)
    public $options;                        // text
    public $image;                          // varchar(255)
    public $thumbnail;                      // varchar(255)
    public $price;                          // decimal(20,2)
    public $currency;                       // varchar(3)
    public $financial_type_id;              // int(4) unsigned
    public $min_contribution;               // decimal(20,2)
    public $cost;                           // decimal(20,2)
    public $is_active;                      // tinyint(1)
    public $period_type;                    // varchar(8) default_rolling
    public $fixed_period_start_day;         // int(4) default_101
    public $duration_unit;                  // varchar(8) default_year
    public $duration_interval;              // int(4)
    public $frequency_unit;                 // varchar(8) default_month
    public $frequency_interval;             // int(4)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
