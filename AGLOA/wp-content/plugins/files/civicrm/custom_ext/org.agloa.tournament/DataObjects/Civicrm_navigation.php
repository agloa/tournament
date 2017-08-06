<?php
/**
 * Table Definition for civicrm_navigation
 */
require_once 'DB/DataObject.php';

class Civicrm_navigation extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_navigation';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) not_null unsigned
    public $label;                          // varchar(255)
    public $name;                           // varchar(255)
    public $url;                            // varchar(255)
    public $permission;                     // varchar(255)
    public $permission_operator;            // varchar(3)
    public $parent_id;                      // int(4) unsigned
    public $is_active;                      // tinyint(1)
    public $has_separator;                  // tinyint(1)
    public $weight;                         // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
