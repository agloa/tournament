<?php
/**
 * Table Definition for civicrm_value_volunteer_8
 */
require_once 'DB/DataObject.php';

class Civicrm_value_volunteer_8 extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_value_volunteer_8';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_id;                      // int(4) unique_key not_null unsigned
    public $social_committee_37;            // tinyint(1)
    public $game_manager_39;                // varchar(255)
    public $division_coordinator_40;        // varchar(255)
    public $head_judge_for_cube_game_41;    // varchar(255)
    public $judge_for_cube_game_42;         // varchar(255)
    public $reader_43;                      // varchar(255)
    public $monitor_for_reading_game_44;    // varchar(255)
    public $awards_assistant_45;            // tinyint(1)
    public $head_scorer_46;                 // tinyint(1)
    public $assistant_scorer_47;            // tinyint(1)
    public $registration_assistant_48;      // tinyint(1)
    public $other_49;                       // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
