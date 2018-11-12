<?php
/**
 * Table Definition for active_team_data
 */
require_once 'DB/DataObject.php';

class Active_team_data extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'active_team_data';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $title;                          // varchar(64)
    public $created_id;                     // int(4) unsigned
    public $created_by;                     // varchar(128)
    public $modified_id;                    // int(4) unsigned
    public $modified_by;                    // varchar(128)
    public $registration_group_id;          // int(4) unsigned
    public $registration_group;             // varchar(64)
    public $id;                             // int(4) unsigned
    public $entity_id;                      // int(4) unsigned
    public $equations_21;                   // varchar(3)
    public $on_sets_22;                     // varchar(3)
    public $linguishtik_23;                 // varchar(3)
    public $propaganda_24;                  // varchar(3)
    public $presidents_25;                  // varchar(3)
    public $world_events_26;                // varchar(3)
    public $wff_n_proof_27;                 // varchar(3)
    public $district_equations_seed_29;     // int(4) default_1
    public $league_equations_seed_30;       // int(4) default_9
    public $district_on_sets_seed_31;       // int(4) default_1
    public $league_on_sets_seed_32;         // int(4) default_9
    public $district_linguishtik_seed_33;   // int(4) default_1
    public $league_linguishtik_seed_34;     // int(4) default_9
    public $district_wff_n_proof_seed_35;   // int(4) default_1
    public $league_wff_n_proof_seed_36;     // int(4) default_9
    public $current_events_74;              // varchar(255)
    public $equations_section_75;           // int(4)
    public $on_sets_section_76;             // int(4)
    public $linguishtik_section_77;         // int(4)
    public $wff_n_proof_section_78;         // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
