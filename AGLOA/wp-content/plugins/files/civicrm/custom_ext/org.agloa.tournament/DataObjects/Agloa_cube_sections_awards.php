<?php
/**
 * Table Definition for agloa_cube_sections_awards
 */
require_once 'DB/DataObject.php';

class Agloa_cube_sections_awards extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_cube_sections_awards';    // table name
    public $Teams;                          // int(4) primary_key not_null
    public $Sections;                       // int(4) not_null
    public $PlayoffTeams;                   // int(4) not_null
    public $Trophies;                       // int(4) not_null
    public $Medals;                         // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
