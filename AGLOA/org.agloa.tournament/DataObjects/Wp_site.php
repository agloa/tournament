<?php
/**
 * Table Definition for wp_site
 */
require_once 'DB/DataObject.php';

class Wp_site extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_site';             // table name
    public $id;                             // bigint(8) primary_key not_null
    public $domain;                         // varchar(200) multiple_key not_null
    public $path;                           // varchar(100) multiple_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
