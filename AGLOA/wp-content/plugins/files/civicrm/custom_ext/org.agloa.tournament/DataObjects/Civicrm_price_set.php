<?php
/**
 * Table Definition for civicrm_price_set
 */
require_once 'DB/DataObject.php';

class Civicrm_price_set extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_price_set';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) unsigned
    public $name;                           // varchar(255) unique_key not_null
    public $title;                          // varchar(255) not_null
    public $is_active;                      // tinyint(1) default_1
    public $help_pre;                       // text
    public $help_post;                      // text
    public $javascript;                     // varchar(64)
    public $extends;                        // varchar(255) not_null
    public $financial_type_id;              // int(4) unsigned
    public $is_quick_config;                // tinyint(1)
    public $is_reserved;                    // tinyint(1)
    public $min_amount;                     // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
