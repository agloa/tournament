<?php
/**
 * Table Definition for civicrm_phone
 */
require_once 'DB/DataObject.php';

class Civicrm_phone extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_phone';       // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) unsigned
    public $location_type_id;               // int(4) unsigned
    public $is_primary;                     // tinyint(1)
    public $is_billing;                     // tinyint(1)
    public $mobile_provider_id;             // int(4) unsigned
    public $phone;                          // varchar(32)
    public $phone_ext;                      // varchar(16)
    public $phone_numeric;                  // varchar(32)
    public $phone_type_id;                  // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
