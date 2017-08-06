<?php
/**
 * Table Definition for civicrm_events_in_carts
 */
require_once 'DB/DataObject.php';

class Civicrm_events_in_carts extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_events_in_carts';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $event_id;                       // int(4) unsigned
    public $event_cart_id;                  // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
