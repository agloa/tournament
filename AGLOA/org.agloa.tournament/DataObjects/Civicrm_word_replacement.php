<?php
/**
 * Table Definition for civicrm_word_replacement
 */
require_once 'DB/DataObject.php';

class Civicrm_word_replacement extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_word_replacement';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $find_word;                      // varchar(255) unique_key
    public $replace_word;                   // varchar(255)
    public $is_active;                      // tinyint(1) default_1
    public $match_type;                     // varchar(16) default_wildcardMatch
    public $domain_id;                      // int(4) unique_key unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
