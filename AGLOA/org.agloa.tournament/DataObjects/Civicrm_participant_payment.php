<?php
/**
 * Table Definition for civicrm_participant_payment
 */
require_once 'DB/DataObject.php';

class Civicrm_participant_payment extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_participant_payment';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $participant_id;                 // int(4) unique_key not_null unsigned
    public $contribution_id;                // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
