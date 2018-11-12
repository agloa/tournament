<?php
/**
 * Table Definition for civicrm_dedupe_rule_group
 */
require_once 'DB/DataObject.php';

class Civicrm_dedupe_rule_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_dedupe_rule_group';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_type;                   // varchar(12)
    public $threshold;                      // int(4) not_null
    public $used;                           // varchar(12) not_null
    public $name;                           // varchar(64)
    public $title;                          // varchar(255)
    public $is_reserved;                    // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
