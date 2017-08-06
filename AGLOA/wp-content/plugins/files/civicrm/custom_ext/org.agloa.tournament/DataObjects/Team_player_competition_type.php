<?php
/**
 * Table Definition for team_player_competition_type
 */
require_once 'DB/DataObject.php';

class Team_player_competition_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'team_player_competition_type';    // table name
    public $team_id;                        // int(4) unique_key not_null
    public $player_id;                      // int(4) unique_key not_null
    public $competition_type;               // varchar(16) unique_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
