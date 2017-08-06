<?php
/**
 * Table Definition for wp_redirection_404
 */
require_once 'DB/DataObject.php';

class Wp_redirection_404 extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_redirection_404';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $created;                        // datetime not_null
    public $url;                            // varchar(255) not_null
    public $agent;                          // varchar(255)
    public $referrer;                       // varchar(255)
    public $ip;                             // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
