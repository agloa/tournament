<?php
/**
 * Table Definition for civicrm_im
 */
require_once 'DB/DataObject.php';

class Civicrm_im extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_im';          // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) unsigned
    public $location_type_id;               // int(4) unsigned
    public $name;                           // varchar(64)
    public $provider_id;                    // int(4) unsigned
    public $is_primary;                     // tinyint(1)
    public $is_billing;                     // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
