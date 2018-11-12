<?php
/**
 * Table Definition for civicrm_queue_item
 */
require_once 'DB/DataObject.php';

class Civicrm_queue_item extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_queue_item';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $queue_name;                     // varchar(64) multiple_key not_null
    public $weight;                         // int(4) multiple_key not_null
    public $submit_time;                    // datetime not_null
    public $release_time;                   // datetime
    public $data;                           // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
