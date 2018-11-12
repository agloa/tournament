<?php
/**
 * Table Definition for team_section
 */
require_once 'DB/DataObject.php';

class Team_section extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'team_section';        // table name
    public $team;                           // int(4) unique_key not_null unsigned
    public $section;                        // varchar(20) unique_key not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
