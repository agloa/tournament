<?php
/**
 * Table Definition for wp_commentmeta
 */
require_once 'DB/DataObject.php';

class Wp_commentmeta extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_commentmeta';      // table name
    public $meta_id;                        // bigint(8) primary_key not_null unsigned
    public $comment_id;                     // bigint(8) not_null unsigned
    public $meta_key;                       // varchar(255)
    public $meta_value;                     // longtext

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
