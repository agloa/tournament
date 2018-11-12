<?php
/**
 * Table Definition for EligibleTeamPlayers
 */
require_once 'DB/DataObject.php';

class EligibleTeamPlayers extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'EligibleTeamPlayers';    // table name
    public $Team;                           // int(4) not_null unsigned
    public $Player;                         // int(4) not_null unsigned
    public $registration_group;             // varchar(20)
    public $scheduling_group;               // varchar(20) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
