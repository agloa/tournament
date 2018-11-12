<?php
/**
 * Table Definition for civicrm_campaign_group
 */
require_once 'DB/DataObject.php';

class Civicrm_campaign_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_campaign_group';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $campaign_id;                    // int(4) not_null unsigned
    public $group_type;                     // varchar(8)
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
