<?php
/**
 * Table Definition for billing_organization_contacts
 */
require_once 'DB/DataObject.php';

class Billing_organization_contacts extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'billing_organization_contacts';    // table name
    public $org_id;                         // int(4) not_null unsigned
    public $org_name;                       // varchar(128)
    public $contact_id;                     // int(4) not_null unsigned
    public $contact_name;                   // varchar(128)
    public $email;                          // varchar(254)
    public $phone;                          // varchar(32)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
