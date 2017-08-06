<?php
/**
 * Table Definition for team_group_xref
 */
require_once 'DB/DataObject.php';

class Team_group_xref extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'team_group_xref';     // table name
    public $team_id;                        // int(4) primary_key not_null unsigned
    public $group_id;                       // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
