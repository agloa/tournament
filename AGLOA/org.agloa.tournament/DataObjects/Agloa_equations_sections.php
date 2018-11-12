<?php
/**
 * Table Definition for agloa_equations_sections
 */
require_once 'DB/DataObject.php';

class Agloa_equations_sections extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_equations_sections';    // table name
    public $division;                       // varchar(3)
    public $section;                        // int(4)
    public $registration_group;             // varchar(64)
    public $team_id;                        // int(4) not_null unsigned
    public $team_name;                      // varchar(64)
    public $district_seed;                  // int(4) default_1
    public $league_seed;                    // int(4) default_9

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
