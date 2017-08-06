<?php
/**
 * Table Definition for civirule_rule_log
 */
require_once 'DB/DataObject.php';

class Civirule_rule_log extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civirule_rule_log';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $rule_id;                        // int(4) multiple_key unsigned
    public $contact_id;                     // int(4) multiple_key unsigned
    public $log_date;                       // datetime not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
