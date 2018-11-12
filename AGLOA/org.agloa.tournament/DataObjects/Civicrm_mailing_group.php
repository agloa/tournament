<?php
/**
 * Table Definition for civicrm_mailing_group
 */
require_once 'DB/DataObject.php';

class Civicrm_mailing_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mailing_group';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $mailing_id;                     // int(4) not_null unsigned
    public $group_type;                     // varchar(8)
    public $entity_table;                   // varchar(64) not_null
    public $entity_id;                      // int(4) not_null unsigned
    public $search_id;                      // int(4)
    public $search_args;                    // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
