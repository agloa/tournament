<?php
/**
 * Table Definition for civicrm_dedupe_rule
 */
require_once 'DB/DataObject.php';

class Civicrm_dedupe_rule extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_dedupe_rule';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $dedupe_rule_group_id;           // int(4) not_null unsigned
    public $rule_table;                     // varchar(64) not_null
    public $rule_field;                     // varchar(64) not_null
    public $rule_length;                    // int(4) unsigned
    public $rule_weight;                    // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
