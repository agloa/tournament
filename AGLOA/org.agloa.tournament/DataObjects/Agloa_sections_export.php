<?php
/**
 * Table Definition for agloa_sections_export
 */
require_once 'DB/DataObject.php';

class Agloa_sections_export extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_sections_export';    // table name
    public $division;                       // varchar(3)
    public $game;                           // varchar(4) not_null
    public $section;                        // int(4)
    public $registration_group;             // varchar(64)
    public $team_id;                        // int(4) not_null unsigned
    public $team_name;                      // varchar(64)
    public $district_seed;                  // int(4)
    public $league_seed;                    // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
