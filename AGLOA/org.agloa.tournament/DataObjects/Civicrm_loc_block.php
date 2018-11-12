<?php
/**
 * Table Definition for civicrm_loc_block
 */
require_once 'DB/DataObject.php';

class Civicrm_loc_block extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_loc_block';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $address_id;                     // int(4) unsigned
    public $email_id;                       // int(4) unsigned
    public $phone_id;                       // int(4) unsigned
    public $im_id;                          // int(4) unsigned
    public $address_2_id;                   // int(4) unsigned
    public $email_2_id;                     // int(4) unsigned
    public $phone_2_id;                     // int(4) unsigned
    public $im_2_id;                        // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
