<?php
/**
 * Table Definition for player_data
 */
require_once 'DB/DataObject.php';

class Player_data extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'player_data';         // table name
    public $id;                             // int(4) not_null unsigned
    public $entity_id;                      // int(4) not_null unsigned
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

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
