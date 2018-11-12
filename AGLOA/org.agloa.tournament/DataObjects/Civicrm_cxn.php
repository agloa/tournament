<?php
/**
 * Table Definition for civicrm_cxn
 */
require_once 'DB/DataObject.php';

class Civicrm_cxn extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_cxn';         // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $app_guid;                       // varchar(128) unique_key
    public $app_meta;                       // text
    public $cxn_guid;                       // varchar(128) unique_key
    public $secret;                         // text
    public $perm;                           // text
    public $options;                        // text
    public $is_active;                      // tinyint(1) default_1
    public $created_date;                   // timestamp
    public $modified_date;                  // timestamp default_CURRENT_TIMESTAMP
    public $fetched_date;                   // timestamp

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
