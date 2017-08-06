<?php
/**
 * Table Definition for agloa_active_team_competitions_pivoted
 */
require_once 'DB/DataObject.php';

class Agloa_active_team_competitions_pivoted extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_active_team_competitions_pivoted';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $competition;                    // varchar(257)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
