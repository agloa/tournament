<?php
/**
 * Table Definition for civirule_rule_tag
 */
require_once 'DB/DataObject.php';

class Civirule_rule_tag extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civirule_rule_tag';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $rule_id;                        // int(4) unsigned
    public $rule_tag_id;                    // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
