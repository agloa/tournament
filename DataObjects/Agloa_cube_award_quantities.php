<?php
/**
 * Table Definition for agloa_cube_award_quantities
 */
require_once 'DB/DataObject.php';

class Agloa_cube_award_quantities extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_cube_award_quantities';    // table name
    public $competition;                    // varchar(257)
    public $Teams;                          // int(4) not_null
    public $Sections;                       // int(4) not_null
    public $PlayoffTeams;                   // int(4) not_null
    public $Trophies;                       // int(4) not_null
    public $Medals;                         // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
