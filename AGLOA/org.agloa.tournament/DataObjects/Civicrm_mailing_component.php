<?php
/**
 * Table Definition for civicrm_mailing_component
 */
require_once 'DB/DataObject.php';

class Civicrm_mailing_component extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_mailing_component';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64)
    public $component_type;                 // varchar(12)
    public $subject;                        // varchar(255)
    public $body_html;                      // text
    public $body_text;                      // text
    public $is_default;                     // tinyint(1)
    public $is_active;                      // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
