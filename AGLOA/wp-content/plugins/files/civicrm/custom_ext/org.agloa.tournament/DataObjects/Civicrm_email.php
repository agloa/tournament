<?php
/**
 * Table Definition for civicrm_email
 */
require_once 'DB/DataObject.php';

class Civicrm_email extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_email';       // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) unsigned
    public $location_type_id;               // int(4) unsigned
    public $email;                          // varchar(254)
    public $is_primary;                     // tinyint(1)
    public $is_billing;                     // tinyint(1)
    public $on_hold;                        // tinyint(1) not_null
    public $is_bulkmail;                    // tinyint(1) not_null
    public $hold_date;                      // datetime
    public $reset_date;                     // datetime
    public $signature_text;                 // text
    public $signature_html;                 // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
