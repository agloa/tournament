<?php
/**
 * Table Definition for registered_players_not_on_team
 */
require_once 'DB/DataObject.php';

class Registered_players_not_on_team extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'registered_players_not_on_team';    // table name
    public $contact_id;                     // int(4) not_null unsigned
    public $sort_name;                      // varchar(128)
    public $competition;                    // varchar(7)
    public $competition_type;               // varchar(14) not_null
    public $registration_group;             // varchar(64)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
