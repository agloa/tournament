<?php
/**
 * Table Definition for tournament_event_xref
 */
require_once 'DB/DataObject.php';

class Tournament_event_xref extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'tournament_event_xref';    // table name
    public $tournament;                     // varchar(20) primary_key not_null
    public $event;                          // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
