<?php
/**
 * Table Definition for civicrm_primary_email
 */
require_once 'DB/DataObject.php';

class Civicrm_primary_email extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_primary_email';    // table name
    public $contact_id;                     // int(4) unsigned
    public $email;                          // varchar(254)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
