<?php
/**
 * Table Definition for civicrm_case_contact
 */
require_once 'DB/DataObject.php';

class Civicrm_case_contact extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_case_contact';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $case_id;                        // int(4) multiple_key not_null unsigned
    public $contact_id;                     // int(4) multiple_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
