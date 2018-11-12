<?php
/**
 * Table Definition for civicrm_prevnext_cache
 */
require_once 'DB/DataObject.php';

class Civicrm_prevnext_cache extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_prevnext_cache';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) multiple_key
    public $entity_id1;                     // int(4) multiple_key not_null unsigned
    public $entity_id2;                     // int(4) multiple_key not_null unsigned
    public $cacheKey;                       // varchar(255) multiple_key
    public $data;                           // longtext
    public $is_selected;                    // tinyint(1) multiple_key

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
