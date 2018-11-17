<?php
/**
 * Table Definition for EligibleTeamPlayerCompetitionMatching
 */
require_once 'DB/DataObject.php';

class EligibleTeamPlayerCompetitionMatching extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'EligibleTeamPlayerCompetitionMatching';    // table name
    public $Team;                           // int(4) not_null unsigned
    public $Player;                         // int(4) not_null unsigned
    public $nMatching;                      // bigint(8) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
