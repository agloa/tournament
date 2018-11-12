<?php
/**
 * Table Definition for agloa_latest_active_team_player_data
 */
require_once 'DB/DataObject.php';

class Agloa_latest_active_team_player_data extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_latest_active_team_player_data';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $team_name;                      // varchar(64)
    public $created_by;                     // varchar(128)
    public $modified_by;                    // varchar(128)
    public $team_EQ;                        // varchar(3)
    public $team_OS;                        // varchar(3)
    public $team_LI;                        // varchar(3)
    public $team_PROP;                      // varchar(3)
    public $team_PREZ;                      // varchar(3)
    public $team_THEME;                     // varchar(3)
    public $team_CE;                        // varchar(255)
    public $team_WFF;                       // varchar(3)
    public $player_id;                      // int(4) not_null unsigned
    public $player_name;                    // varchar(128)
    public $player_EQ;                      // varchar(3)
    public $Player_OS;                      // varchar(3)
    public $player_LI;                      // varchar(3)
    public $player_PROP;                    // varchar(3)
    public $player_PREZ;                    // varchar(3)
    public $player_theme;                   // varchar(3)
    public $player_CE;                      // varchar(3)
    public $player_WFF;                     // varchar(3)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
