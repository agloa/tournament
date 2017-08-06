<?php
/**
 * Table Definition for agloa_competition_team_count
 */
require_once 'DB/DataObject.php';

class Agloa_competition_team_count extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_competition_team_count';    // table name
    public $competition;                    // varchar(257)
    public $teams;                          // bigint(8) not_null
    public $cube;                           // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
