<?php
/**
 * Table Definition for agloa_active_team_competitions
 */
require_once 'DB/DataObject.php';

class Agloa_active_team_competitions extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_active_team_competitions';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $team_name;                      // varchar(64)
    public $created_id;                     // int(4) unsigned
    public $created_by;                     // varchar(128)
    public $modified_id;                    // int(4) unsigned
    public $modified_by;                    // varchar(128)
    public $registration_group_id;          // int(4) unsigned
    public $registration_group;             // varchar(64)
    public $EQ;                             // varchar(3)
    public $OS;                             // varchar(3)
    public $LI;                             // varchar(3)
    public $PROP;                           // varchar(3)
    public $PREZ;                           // varchar(3)
    public $WE;                             // varchar(3)
    public $WFF;                            // varchar(3)
    public $CE;                             // varchar(255)
    public $district_equations_seed;        // int(4) default_1
    public $league_equations_seed;          // int(4) default_9
    public $district_on_sets_seed;          // int(4) default_1
    public $league_on_sets_seed;            // int(4) default_9
    public $district_linguishtik_seed;      // int(4) default_1
    public $league_linguishtik_seed;        // int(4) default_9
    public $district_wff_n_proof_seed;      // int(4) default_1
    public $league_wff_n_proof_seed;        // int(4) default_9
    public $equations_section;              // int(4)
    public $on_sets_section;                // int(4)
    public $linguishtik_section;            // int(4)
    public $wff_n_proof_section;            // int(4)
    public $competition_key;                // varchar(8)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
