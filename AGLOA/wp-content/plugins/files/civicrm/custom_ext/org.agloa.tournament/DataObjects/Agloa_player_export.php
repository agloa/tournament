<?php
/**
 * Table Definition for agloa_player_export
 */
require_once 'DB/DataObject.php';

class Agloa_player_export extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_player_export';    // table name
    public $PlayerID;                       // int(4) not_null unsigned
    public $last_name;                      // varchar(64)
    public $first_name;                     // varchar(64)
    public $DistrictID;                     // int(4) unsigned
    public $DistrictName;                   // varchar(64)
    public $E;                              // varchar(3)
    public $O;                              // varchar(3)
    public $L;                              // varchar(3)
    public $P;                              // varchar(3)
    public $M;                              // varchar(3)
    public $A;                              // varchar(3)
    public $W;                              // varchar(3)
    public $C;                              // varchar(3)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
