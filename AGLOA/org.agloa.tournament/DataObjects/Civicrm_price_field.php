<?php
/**
 * Table Definition for civicrm_price_field
 */
require_once 'DB/DataObject.php';

class Civicrm_price_field extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_price_field';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $price_set_id;                   // int(4) not_null unsigned
    public $name;                           // varchar(255) not_null
    public $label;                          // varchar(255) not_null
    public $html_type;                      // varchar(12) not_null
    public $is_enter_qty;                   // tinyint(1)
    public $help_pre;                       // text
    public $help_post;                      // text
    public $weight;                         // int(4) default_1
    public $is_display_amounts;             // tinyint(1) default_1
    public $options_per_line;               // int(4) unsigned default_1
    public $is_active;                      // tinyint(1) default_1
    public $is_required;                    // tinyint(1) default_1
    public $active_on;                      // datetime
    public $expire_on;                      // datetime
    public $javascript;                     // varchar(255)
    public $visibility_id;                  // int(4) unsigned default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
