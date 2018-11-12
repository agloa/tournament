<?php
/**
 * Table Definition for PlayerCompetitionNullTeam
 */
require_once 'DB/DataObject.php';

class PlayerCompetitionNullTeam extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'PlayerCompetitionNullTeam';    // table name
    public $player;                         // int(4) not_null unsigned
    public $competition;                    // varchar(20) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
