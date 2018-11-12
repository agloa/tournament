<?php
/**
 * Table Definition for agloa_team_competition_type
 */
require_once 'DB/DataObject.php';

class Agloa_team_competition_type extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_team_competition_type';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $competition;                    // varchar(257)
    public $competition_type;               // varchar(14) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
