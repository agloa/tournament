<?php
/**
 * Table Definition for civicrm_mailing_recipients
 */
require_once 'DB/DataObject.php';

class Civicrm_mailing_recipients extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mailing_recipients';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $mailing_id;                     // int(4) not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $email_id;                       // int(4) unsigned
    public $phone_id;                       // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
