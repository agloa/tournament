<?php
/**
 * Table Definition for log_civicrm_value_team_data_7_2017_04_21
 */
require_once 'DB/DataObject.php';

class Log_civicrm_value_team_data_7_2017_04_21 extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_value_team_data_7_2017_04_21';    // table name
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
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // varchar(17)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
