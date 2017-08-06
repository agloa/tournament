<?php
/**
 * Table Definition for civicrm_cache
 */
require_once 'DB/DataObject.php';

class Civicrm_cache extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_cache';       // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $group_name;                     // varchar(32) unique_key not_null
    public $path;                           // varchar(255) unique_key
    public $data;                           // longtext
    public $component_id;                   // int(4) unsigned
    public $created_date;                   // datetime unique_key
    public $expired_date;                   // datetime

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
