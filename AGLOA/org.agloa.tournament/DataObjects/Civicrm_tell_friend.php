<?php
/**
 * Table Definition for civicrm_tell_friend
 */
require_once 'DB/DataObject.php';

class Civicrm_tell_friend extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_tell_friend';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) not_null
    public $entity_id;                      // int(4) not_null unsigned
    public $title;                          // varchar(255)
    public $intro;                          // text
    public $suggested_message;              // text
    public $general_link;                   // varchar(255)
    public $thankyou_title;                 // varchar(255)
    public $thankyou_text;                  // text
    public $is_active;                      // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
