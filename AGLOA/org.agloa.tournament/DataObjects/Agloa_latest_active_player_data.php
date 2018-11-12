<?php
/**
 * Table Definition for agloa_latest_active_player_data
 */
require_once 'DB/DataObject.php';

class Agloa_latest_active_player_data extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_latest_active_player_data';    // table name
    public $participant_id;                 // int(4) not_null unsigned
    public $player_id;                      // int(4) not_null unsigned
    public $player_name;                    // varchar(128)
    public $EQ;                             // varchar(3)
    public $OS;                             // varchar(3)
    public $LI;                             // varchar(3)
    public $PROP;                           // varchar(3)
    public $PREZ;                           // varchar(3)
    public $WE;                             // varchar(3)
    public $WFF;                            // varchar(3)
    public $CE;                             // varchar(3)
    public $competition_key;                // varchar(8)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
