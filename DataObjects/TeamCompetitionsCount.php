<?php
/**
 * Table Definition for TeamCompetitionsCount
 */
require_once 'DB/DataObject.php';

class TeamCompetitionsCount extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'TeamCompetitionsCount';    // table name
    public $Team;                           // int(4) not_null unsigned
    public $competitions;                   // bigint(8) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
