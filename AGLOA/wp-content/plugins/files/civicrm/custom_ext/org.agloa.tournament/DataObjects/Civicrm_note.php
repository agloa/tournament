<?php
/**
 * Table Definition for civicrm_note
 */
require_once 'DB/DataObject.php';

class Civicrm_note extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_note';        // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_table;                   // varchar(64) multiple_key not_null
    public $entity_id;                      // int(4) multiple_key not_null unsigned
    public $note;                           // text
    public $contact_id;                     // int(4) unsigned
    public $modified_date;                  // date
    public $subject;                        // varchar(255)
    public $privacy;                        // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
