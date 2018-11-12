<?php
/**
 * Table Definition for log_civicrm_premiums
 */
require_once 'DB/DataObject.php';

class Log_civicrm_premiums extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_premiums';    // table name
    public $id;                             // int(4) unsigned
    public $entity_table;                   // varchar(64)
    public $entity_id;                      // int(4) unsigned
    public $premiums_active;                // tinyint(1)
    public $premiums_intro_title;           // varchar(255)
    public $premiums_intro_text;            // text
    public $premiums_contact_email;         // varchar(100)
    public $premiums_contact_phone;         // varchar(50)
    public $premiums_display_min_contribution;   // tinyint(1)
    public $premiums_nothankyou_label;      // varchar(255)
    public $premiums_nothankyou_position;   // int(4) unsigned default_1
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // int(4)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
