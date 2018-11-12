<?php
/**
 * Table Definition for civicrm_event
 */
require_once 'DB/DataObject.php';

class Civicrm_event extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_event';       // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $title;                          // varchar(255)
    public $summary;                        // text
    public $description;                    // text
    public $event_type_id;                  // int(4) unsigned
    public $participant_listing_id;         // int(4) unsigned
    public $is_public;                      // tinyint(1) default_1
    public $start_date;                     // datetime
    public $end_date;                       // datetime
    public $is_online_registration;         // tinyint(1)
    public $registration_link_text;         // varchar(255)
    public $registration_start_date;        // datetime
    public $registration_end_date;          // datetime
    public $max_participants;               // int(4) unsigned
    public $event_full_text;                // text
    public $is_monetary;                    // tinyint(1)
    public $financial_type_id;              // int(4) unsigned
    public $payment_processor;              // varchar(128)
    public $is_map;                         // tinyint(1)
    public $is_active;                      // tinyint(1)
    public $fee_label;                      // varchar(255)
    public $is_show_location;               // tinyint(1) default_1
    public $loc_block_id;                   // int(4) unsigned
    public $default_role_id;                // int(4) unsigned default_1
    public $intro_text;                     // text
    public $footer_text;                    // text
    public $confirm_title;                  // varchar(255)
    public $confirm_text;                   // text
    public $confirm_footer_text;            // text
    public $is_email_confirm;               // tinyint(1)
    public $confirm_email_text;             // text
    public $confirm_from_name;              // varchar(255)
    public $confirm_from_email;             // varchar(255)
    public $cc_confirm;                     // varchar(255)
    public $bcc_confirm;                    // varchar(255)
    public $default_fee_id;                 // int(4) unsigned
    public $default_discount_fee_id;        // int(4) unsigned
    public $thankyou_title;                 // varchar(255)
    public $thankyou_text;                  // text
    public $thankyou_footer_text;           // text
    public $is_pay_later;                   // tinyint(1)
    public $pay_later_text;                 // text
    public $pay_later_receipt;              // text
    public $is_partial_payment;             // tinyint(1)
    public $initial_amount_label;           // varchar(255)
    public $initial_amount_help_text;       // text
    public $min_initial_amount;             // decimal(20,2)
    public $is_multiple_registrations;      // tinyint(1)
    public $max_additional_participants;    // int(4) unsigned
    public $allow_same_participant_emails;   // tinyint(1)
    public $has_waitlist;                   // tinyint(1)
    public $requires_approval;              // tinyint(1)
    public $expiration_time;                // int(4) unsigned
    public $waitlist_text;                  // text
    public $approval_req_text;              // text
    public $is_template;                    // tinyint(1) not_null
    public $template_title;                 // varchar(255)
    public $created_id;                     // int(4) unsigned
    public $created_date;                   // datetime
    public $currency;                       // varchar(3)
    public $campaign_id;                    // int(4) unsigned
    public $is_share;                       // tinyint(1) default_1
    public $is_confirm_enabled;             // tinyint(1) default_1
    public $parent_event_id;                // int(4) unsigned
    public $slot_label_id;                  // int(4) unsigned
    public $dedupe_rule_group_id;           // int(4) unsigned
    public $is_billing_required;            // tinyint(1)
    public $selfcancelxfer_time;            // int(4) unsigned
    public $allow_selfcancelxfer;           // tinyint(1)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
