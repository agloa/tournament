<?php
/**
 * Table Definition for wp_2_stoutgc
 */
require_once 'DB/DataObject.php';

class Wp_2_stoutgc extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_2_stoutgc';        // table name
    public $id;                             // mediumint(3) unique_key not_null
    public $name;                           // tinytext not_null
    public $googlecalcode;                  // text not_null
    public $color0;                         // varchar(32) not_null
    public $color1;                         // varchar(32) not_null
    public $color2;                         // varchar(32) not_null
    public $color3;                         // varchar(32) not_null
    public $color4;                         // varchar(32) not_null
    public $color5;                         // varchar(32) not_null
    public $color6;                         // varchar(32) not_null
    public $bkgrdTransparent;               // tinyint(1) not_null
    public $bkgrdImage;                     // mediumint(3) not_null
    public $bubble_width;                   // varchar(32) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
