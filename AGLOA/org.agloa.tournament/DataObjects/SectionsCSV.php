<?php
/**
 * Table Definition for SectionsCSV
 */
require_once 'DB/DataObject.php';

class SectionsCSV extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'SectionsCSV';         // table name
    public $division;                       // varchar(3) unique_key not_null
    public $game;                           // varchar(4) unique_key not_null
    public $section;                        // varchar(1) not_null
    public $team_id;                        // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
