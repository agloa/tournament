<?php
/**
 * Table Definition for civirule_rule_action
 */
require_once 'DB/DataObject.php';

class Civirule_rule_action extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civirule_rule_action';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $rule_id;                        // int(4) unsigned
    public $action_id;                      // int(4) unsigned
    public $action_params;                  // text
    public $delay;                          // text
    public $ignore_condition_with_delay;    // tinyint(1)
    public $is_active;                      // tinyint(1) default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
