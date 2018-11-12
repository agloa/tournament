<?php
/**
 * Table Definition for agloa_latest_active_team_players
 */
require_once 'DB/DataObject.php';

class Agloa_latest_active_team_players extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_latest_active_team_players';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $team_name;                      // varchar(64)
    public $created_by;                     // varchar(128)
    public $modified_by;                    // varchar(128)
    public $EQ;                             // varchar(3)
    public $OS;                             // varchar(3)
    public $LING;                           // varchar(3)
    public $PROP;                           // varchar(3)
    public $PRES;                           // varchar(3)
    public $Theme;                          // varchar(3)
    public $CE;                             // varchar(255)
    public $Wff;                            // varchar(3)
    public $player_id;                      // int(4) not_null unsigned
    public $player_name;                    // varchar(128)
    public $registration_group;             // varchar(64)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
