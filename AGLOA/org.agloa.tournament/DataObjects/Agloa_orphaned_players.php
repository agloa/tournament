<?php
/**
 * Table Definition for agloa_orphaned_players
 */
require_once 'DB/DataObject.php';

class Agloa_orphaned_players extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_orphaned_players';    // table name
    public $player_id;                      // int(4) not_null unsigned
    public $player_name;                    // varchar(128)
    public $competition_key;                // varchar(8)
    public $registration_group;             // varchar(64)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
