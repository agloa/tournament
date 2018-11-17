<?php
/**
 * Table Definition for tournament
 */
require_once 'Tournament_DataObject.php';

class Tournament extends Tournament_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'tournament';          // table name
    public $id;                             // varchar(20) primary_key not_null
    public $title;                          // varchar(255) not_null
    public $description;                    // text not_null
    public $sponsor;                        // varchar(20) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
