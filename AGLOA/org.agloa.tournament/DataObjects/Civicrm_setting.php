<?php
/**
 * Table Definition for civicrm_setting
 */
require_once 'DB/DataObject.php';

class Civicrm_setting extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_setting';     // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(255) unique_key
    public $value;                          // text
    public $domain_id;                      // int(4) unique_key not_null unsigned
    public $contact_id;                     // int(4) unique_key unsigned
    public $is_domain;                      // tinyint(1)
    public $component_id;                   // int(4) unsigned
    public $created_date;                   // datetime
    public $created_id;                     // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
