<?php
/**
 * Table Definition for civicrm_openid
 */
require_once 'DB/DataObject.php';

class Civicrm_openid extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_openid';      // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id;                     // int(4) unsigned
    public $location_type_id;               // int(4) unsigned
    public $openid;                         // varchar(255) unique_key
    public $allowed_to_login;               // tinyint(1) not_null
    public $is_primary;                     // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
