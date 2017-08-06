<?php
/**
 * Table Definition for civicrm_mailing_bounce_type
 */
require_once 'DB/DataObject.php';

class Civicrm_mailing_bounce_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mailing_bounce_type';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(24) not_null
    public $description;                    // varchar(255)
    public $hold_threshold;                 // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
