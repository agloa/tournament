<?php
/**
 * Table Definition for player_contact_xref
 */
require_once 'DB/DataObject.php';

class Player_contact_xref extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'player_contact_xref';    // table name
    public $player;                         // int(4) primary_key not_null unsigned
    public $contact;                        // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
