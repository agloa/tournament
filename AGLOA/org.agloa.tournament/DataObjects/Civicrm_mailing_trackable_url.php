<?php
/**
 * Table Definition for civicrm_mailing_trackable_url
 */
require_once 'DB/DataObject.php';

class Civicrm_mailing_trackable_url extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mailing_trackable_url';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $url;                            // text not_null
    public $mailing_id;                     // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
