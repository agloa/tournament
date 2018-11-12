<?php
/**
 * Table Definition for civicrm_uf_match
 */
require_once 'DB/DataObject.php';

class Civicrm_uf_match extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_uf_match';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) unique_key not_null unsigned
    public $uf_id;                          // int(4) not_null unsigned
    public $uf_name;                        // varchar(128) unique_key
    public $contact_id;                     // int(4) unique_key unsigned
    public $language;                       // varchar(5)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
