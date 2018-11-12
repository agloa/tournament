<?php
/**
 * Table Definition for wp_term_relationships
 */
require_once 'DB/DataObject.php';

class Wp_term_relationships extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_term_relationships';    // table name
    public $object_id;                      // bigint(8) primary_key not_null unsigned
    public $term_taxonomy_id;               // bigint(8) primary_key not_null unsigned
    public $term_order;                     // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
