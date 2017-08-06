<?php
/**
 * Table Definition for civicrm_mailing_spool
 */
require_once 'DB/DataObject.php';

class Civicrm_mailing_spool extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mailing_spool';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $job_id;                         // int(4) not_null unsigned
    public $recipient_email;                // text
    public $headers;                        // text
    public $body;                           // text
    public $added_at;                       // datetime
    public $removed_at;                     // datetime

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
