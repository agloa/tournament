<?php
/**
 * Table Definition for civicrm_uf_join
 */
require_once 'DB/DataObject.php';

class Civicrm_uf_join extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_uf_join';     // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $is_active;                      // tinyint(1) default_1
    public $module;                         // varchar(64) not_null
    public $entity_table;                   // varchar(64) multiple_key
    public $entity_id;                      // int(4) multiple_key unsigned
    public $weight;                         // int(4) not_null default_1
    public $uf_group_id;                    // int(4) not_null unsigned
    public $module_data;                    // longtext

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
