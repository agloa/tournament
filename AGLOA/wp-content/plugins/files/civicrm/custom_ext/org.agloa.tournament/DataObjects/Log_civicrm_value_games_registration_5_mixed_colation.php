<?php
/**
 * Table Definition for log_civicrm_value_games_registration_5_mixed_colation
 */
require_once 'DB/DataObject.php';

class Log_civicrm_value_games_registration_5_mixed_colation extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'log_civicrm_value_games_registration_5_mixed_colation';    // table name
    public $id;                             // int(4) unsigned
    public $entity_id;                      // int(4) unsigned
    public $equations_11;                   // varchar(3)
    public $on_sets_12;                     // varchar(3)
    public $linguishtik_13;                 // varchar(3)
    public $propaganda_14;                  // varchar(3)
    public $presidents_15;                  // varchar(3)
    public $world_events_16;                // varchar(3)
    public $wff_n_proof_17;                 // varchar(3)
    public $geocode_20;                     // varchar(2)
    public $scheulding_code_28;             // varchar(255)
    public $current_events_56;              // varchar(3)
    public $log_date;                       // timestamp not_null default_CURRENT_TIMESTAMP
    public $log_conn_id;                    // varchar(17)
    public $log_user_id;                    // int(4)
    public $log_action;                     // enum(14)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
