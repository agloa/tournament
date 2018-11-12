<?php
/**
 * Table Definition for civicrm_subscription_history
 */
require_once 'DB/DataObject.php';

class Civicrm_subscription_history extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_subscription_history';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $group_id;                       // int(4) unsigned
    public $date;                           // datetime not_null
    public $method;                         // varchar(8)
    public $status;                         // varchar(8)
    public $tracking;                       // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
