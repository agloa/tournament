<?php
/**
 * Table Definition for tournament_age_group
 */
require_once 'DB/DataObject.php';

class Tournament_age_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'tournament_age_group';    // table name
    public $id;                             // varchar(20) primary_key not_null
    public $title;                          // varchar(512) not_null
    public $description;                    // text
    public $tournament;                     // varchar(20) unique_key not_null
    public $age_group;                      // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
