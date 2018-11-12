<?php
/**
 * Table Definition for civicrm_mailing_bounce_pattern
 */
require_once 'DB/DataObject.php';

class Civicrm_mailing_bounce_pattern extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mailing_bounce_pattern';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $bounce_type_id;                 // int(4) not_null unsigned
    public $pattern;                        // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
