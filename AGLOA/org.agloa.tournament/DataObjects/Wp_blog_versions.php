<?php
/**
 * Table Definition for wp_blog_versions
 */
require_once 'DB/DataObject.php';

class Wp_blog_versions extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_blog_versions';    // table name
    public $blog_id;                        // bigint(8) primary_key not_null
    public $db_version;                     // varchar(20) not_null
    public $last_updated;                   // datetime not_null default_0000-00-00%2000%3A00%3A00

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
