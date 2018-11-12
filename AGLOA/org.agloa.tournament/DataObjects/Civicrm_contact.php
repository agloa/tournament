<?php
/**
 * Table Definition for civicrm_contact
 */
require_once 'DB/DataObject.php';

class Civicrm_contact extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_contact';     // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contact_type;                   // varchar(64)
    public $contact_sub_type;               // varchar(255)
    public $do_not_email;                   // tinyint(1)
    public $do_not_phone;                   // tinyint(1)
    public $do_not_mail;                    // tinyint(1)
    public $do_not_sms;                     // tinyint(1)
    public $do_not_trade;                   // tinyint(1)
    public $is_opt_out;                     // tinyint(1) not_null
    public $legal_identifier;               // varchar(32)
    public $external_identifier;            // varchar(64) unique_key
    public $sort_name;                      // varchar(128) multiple_key
    public $display_name;                   // varchar(128)
    public $nick_name;                      // varchar(128)
    public $legal_name;                     // varchar(128)
    public $image_URL;                      // text
    public $preferred_communication_method;   // varchar(255)
    public $preferred_language;             // varchar(5)
    public $preferred_mail_format;          // varchar(8) default_Both
    public $hash;                           // varchar(32)
    public $api_key;                        // varchar(32)
    public $source;                         // varchar(255)
    public $first_name;                     // varchar(64)
    public $middle_name;                    // varchar(64)
    public $last_name;                      // varchar(64)
    public $prefix_id;                      // int(4) unsigned
    public $suffix_id;                      // int(4) unsigned
    public $formal_title;                   // varchar(64)
    public $communication_style_id;         // int(4) unsigned
    public $email_greeting_id;              // int(4) unsigned
    public $email_greeting_custom;          // varchar(128)
    public $email_greeting_display;         // varchar(255)
    public $postal_greeting_id;             // int(4) unsigned
    public $postal_greeting_custom;         // varchar(128)
    public $postal_greeting_display;        // varchar(255)
    public $addressee_id;                   // int(4) unsigned
    public $addressee_custom;               // varchar(128)
    public $addressee_display;              // varchar(255)
    public $job_title;                      // varchar(255)
    public $gender_id;                      // int(4) unsigned
    public $birth_date;                     // date
    public $is_deceased;                    // tinyint(1)
    public $deceased_date;                  // date
    public $household_name;                 // varchar(128)
    public $primary_contact_id;             // int(4) unsigned
    public $organization_name;              // varchar(128)
    public $sic_code;                       // varchar(8)
    public $user_unique_id;                 // varchar(255)
    public $employer_id;                    // int(4) unsigned
    public $is_deleted;                     // tinyint(1) multiple_key not_null
    public $created_date;                   // timestamp
    public $modified_date;                  // timestamp default_CURRENT_TIMESTAMP

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
