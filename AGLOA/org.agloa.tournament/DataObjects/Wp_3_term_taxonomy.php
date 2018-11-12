<?php
/**
 * Table Definition for wp_3_term_taxonomy
 */
require_once 'DB/DataObject.php';

class Wp_3_term_taxonomy extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_3_term_taxonomy';    // table name
    public $term_taxonomy_id;               // bigint(8) primary_key not_null unsigned
    public $term_id;                        // bigint(8) unique_key not_null unsigned
    public $taxonomy;                       // varchar(32) unique_key not_null
    public $description;                    // longtext not_null
    public $parent;                         // bigint(8) not_null unsigned
    public $count;                          // bigint(8) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
