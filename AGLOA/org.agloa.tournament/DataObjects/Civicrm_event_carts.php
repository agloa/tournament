<?php
/**
 * Table Definition for civicrm_event_carts
 */
require_once 'DB/DataObject.php';

class Civicrm_event_carts extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_event_carts';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $user_id;                        // int(4) unsigned
    public $completed;                      // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
