<?php
/**
 * Table Definition for civicrm_report_instance
 */
require_once 'DB/DataObject.php';

class Civicrm_report_instance extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_report_instance';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $domain_id;                      // int(4) not_null unsigned
    public $title;                          // varchar(255)
    public $report_id;                      // varchar(64) not_null
    public $name;                           // varchar(255)
    public $args;                           // varchar(255)
    public $description;                    // varchar(255)
    public $permission;                     // varchar(255)
    public $grouprole;                      // varchar(1024)
    public $form_values;                    // text
    public $is_active;                      // tinyint(1)
    public $email_subject;                  // varchar(255)
    public $email_to;                       // text
    public $email_cc;                       // text
    public $header;                         // text
    public $footer;                         // text
    public $navigation_id;                  // int(4) unsigned
    public $drilldown_id;                   // int(4) unsigned
    public $is_reserved;                    // tinyint(1)
    public $created_id;                     // int(4) unsigned
    public $owner_id;                       // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
