<?php
/**
 * Table Definition for civicrm_msg_template
 */
require_once 'DB/DataObject.php';

class Civicrm_msg_template extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_msg_template';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $msg_title;                      // varchar(255)
    public $msg_subject;                    // text
    public $msg_text;                       // longtext
    public $msg_html;                       // longtext
    public $is_active;                      // tinyint(1) default_1
    public $workflow_id;                    // int(4) unsigned
    public $is_default;                     // tinyint(1) default_1
    public $is_reserved;                    // tinyint(1)
    public $is_sms;                         // tinyint(1)
    public $pdf_format_id;                  // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
