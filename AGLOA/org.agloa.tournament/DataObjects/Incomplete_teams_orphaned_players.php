<?php
/**
 * Table Definition for incomplete_teams_orphaned_players
 */
require_once 'DB/DataObject.php';

class Incomplete_teams_orphaned_players extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'incomplete_teams_orphaned_players';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $team_name;                      // varchar(64)
    public $num_players;                    // bigint(8) not_null
    public $competition;                    // varchar(257)
    public $contact_id;                     // int(4) not_null unsigned
    public $registration_group;             // varchar(64)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
