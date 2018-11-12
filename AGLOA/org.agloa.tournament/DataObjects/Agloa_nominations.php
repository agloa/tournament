<?php
/**
 * Table Definition for agloa_nominations
 */
require_once 'DB/DataObject.php';

class Agloa_nominations extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_nominations';    // table name
    public $contact_id;                     // int(4) not_null unsigned
    public $Nominee;                        // varchar(128)
    public $nominators;                     // varchar(255)
    public $Relationship;                   // varchar(255)
    public $NationalTournaments;            // int(4)
    public $Years;                          // int(4)
    public $Divisions;                      // varchar(60)
    public $Games;                          // varchar(255)
    public $Successes;                      // text
    public $Titles;                         // text
    public $Examples;                       // text
    public $Anectdote;                      // text
    public $Comments;                       // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
