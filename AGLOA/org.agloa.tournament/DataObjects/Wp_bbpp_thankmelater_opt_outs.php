<?php
/**
 * Table Definition for wp_bbpp_thankmelater_opt_outs
 */
require_once 'DB/DataObject.php';

class Wp_bbpp_thankmelater_opt_outs extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_bbpp_thankmelater_opt_outs';    // table name
    public $email;                          // varchar(255) primary_key not_null
    public $date_gmt;                       // datetime not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
