<?php
/**
 * Table Definition for civicrm_dedupe_exception
 */
require_once 'DB/DataObject.php';

class Civicrm_dedupe_exception extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_dedupe_exception';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_id1;                    // int(4) unique_key unsigned
    public $contact_id2;                    // int(4) unique_key unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
