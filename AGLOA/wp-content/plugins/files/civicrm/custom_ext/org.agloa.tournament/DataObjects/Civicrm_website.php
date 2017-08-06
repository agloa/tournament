<?php
/**
 * Table Definition for civicrm_website
 */
require_once 'DB/DataObject.php';

class Civicrm_website extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_website';     // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) unsigned
    public $url;                            // varchar(128)
    public $website_type_id;                // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
