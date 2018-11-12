<?php
/**
 * Table Definition for civicrm_log
 */
require_once 'DB/DataObject.php';

class Civicrm_log extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_log';         // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) multiple_key not_null
    public $entity_id;                      // int(4) multiple_key not_null unsigned
    public $data;                           // text
    public $modified_id;                    // int(4) unsigned
    public $modified_date;                  // datetime

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
