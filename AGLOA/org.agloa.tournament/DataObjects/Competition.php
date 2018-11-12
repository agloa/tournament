<?php
/**
 * Table Definition for competition
 */
require_once 'DB/DataObject.php';

class Competition extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'competition';         // table name
    public $id;                             // varchar(20) primary_key not_null
    public $tournament_age_group;           // varchar(20) unique_key not_null
    public $title;                          // varchar(512) not_null
    public $description;                    // text
    public $type;                           // varchar(20) unique_key not_null
    public $nRounds;                        // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
