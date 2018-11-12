<?php
/**
 * Table Definition for civirule_rule_condition
 */
require_once 'DB/DataObject.php';

class Civirule_rule_condition extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civirule_rule_condition';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $rule_id;                        // int(4) unsigned
    public $condition_link;                 // varchar(3)
    public $condition_id;                   // int(4) unsigned
    public $condition_params;               // text
    public $is_active;                      // tinyint(1) default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
