<?php
/**
 * Table Definition for civicrm_menu
 */
require_once 'DB/DataObject.php';

class Civicrm_menu extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_menu';        // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) unique_key not_null unsigned
    public $path;                           // varchar(255) unique_key
    public $path_arguments;                 // text
    public $title;                          // varchar(255)
    public $access_callback;                // varchar(255)
    public $access_arguments;               // text
    public $page_callback;                  // varchar(255)
    public $page_arguments;                 // text
    public $breadcrumb;                     // text
    public $return_url;                     // varchar(255)
    public $return_url_args;                // varchar(255)
    public $component_id;                   // int(4) unsigned
    public $is_active;                      // tinyint(1)
    public $is_public;                      // tinyint(1)
    public $is_exposed;                     // tinyint(1)
    public $is_ssl;                         // tinyint(1)
    public $weight;                         // int(4) not_null default_1
    public $type;                           // int(4) not_null default_1
    public $page_type;                      // int(4) not_null default_1
    public $skipBreadcrumb;                 // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
