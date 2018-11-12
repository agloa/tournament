<?php
/**
 * Table Definition for civicrm_domain
 */
require_once 'DB/DataObject.php';

class Civicrm_domain extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_domain';      // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $description;                    // varchar(255)
    public $version;                        // varchar(32)
    public $contact_id;                     // int(4) unsigned
    public $locales;                        // text
    public $locale_custom_strings;          // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
