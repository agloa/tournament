<?php
/**
 * Table Definition for wp_2_terms
 */
require_once 'DB/DataObject.php';

class Wp_2_terms extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_2_terms';          // table name
    public $term_id;                        // bigint(8) primary_key not_null unsigned
    public $name;                           // varchar(200) not_null
    public $slug;                           // varchar(200) not_null
    public $term_group;                     // bigint(8) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
