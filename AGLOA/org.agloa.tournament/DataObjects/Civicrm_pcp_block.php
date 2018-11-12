<?php
/**
 * Table Definition for civicrm_pcp_block
 */
require_once 'DB/DataObject.php';

class Civicrm_pcp_block extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_pcp_block';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) not_null unsigned
    public $target_entity_type;             // varchar(255) not_null default_contribute
    public $target_entity_id;               // int(4) not_null unsigned
    public $supporter_profile_id;           // int(4) unsigned
    public $owner_notify_id;                // int(4) unsigned
    public $is_approval_needed;             // tinyint(1)
    public $is_tellfriend_enabled;          // tinyint(1)
    public $tellfriend_limit;               // int(4) unsigned
    public $link_text;                      // varchar(255)
    public $is_active;                      // tinyint(1) default_1
    public $notify_email;                   // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
