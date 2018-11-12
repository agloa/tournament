<?php
/**
 * Table Definition for agloa_sections
 */
require_once 'DB/DataObject.php';

class Agloa_sections extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_sections';      // table name
    public $division;                       // varchar(3)
    public $section;                        // int(4)
    public $registration_group;             // varchar(64)
    public $team_id;                        // int(4) not_null unsigned
    public $team_name;                      // varchar(64)
    public $game;                           // varchar(4) not_null
    public $district_seed;                  // int(4)
    public $league_seed;                    // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
