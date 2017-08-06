<?php
/**
 * Table Definition for civicrm_contribution_widget
 */
require_once 'DB/DataObject.php';

class Civicrm_contribution_widget extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_contribution_widget';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $contribution_page_id;           // int(4) unsigned
    public $is_active;                      // tinyint(1)
    public $title;                          // varchar(255)
    public $url_logo;                       // varchar(255)
    public $button_title;                   // varchar(255)
    public $about;                          // text
    public $url_homepage;                   // varchar(255)
    public $color_title;                    // varchar(10)
    public $color_button;                   // varchar(10)
    public $color_bar;                      // varchar(10)
    public $color_main_text;                // varchar(10)
    public $color_main;                     // varchar(10)
    public $color_main_bg;                  // varchar(10)
    public $color_bg;                       // varchar(10)
    public $color_about_link;               // varchar(10)
    public $color_homepage_link;            // varchar(10)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
