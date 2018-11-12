<?php
/**
 * Table Definition for civicrm_sms_provider
 */
require_once 'DB/DataObject.php';

class Civicrm_sms_provider extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_sms_provider';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64)
    public $title;                          // varchar(64)
    public $username;                       // varchar(255)
    public $password;                       // varchar(255)
    public $api_type;                       // int(4) not_null unsigned
    public $api_url;                        // varchar(128)
    public $api_params;                     // text
    public $is_default;                     // tinyint(1)
    public $is_active;                      // tinyint(1)
    public $domain_id;                      // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
