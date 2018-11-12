<?php
/**
 * Table Definition for latest_active_tournament_players
 */
require_once 'DB/DataObject.php';

class Latest_active_tournament_players extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'latest_active_tournament_players';    // table name
    public $id;                             // int(4) not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $sort_name;                      // varchar(128)
    public $display_name;                   // varchar(128)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
