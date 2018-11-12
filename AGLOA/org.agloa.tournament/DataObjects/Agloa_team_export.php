<?php
/**
 * Table Definition for agloa_team_export
 */
require_once 'DB/DataObject.php';

class Agloa_team_export extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_team_export';    // table name
    public $ID;                             // int(4) not_null unsigned
    public $Name;                           // varchar(64)
    public $created_id;                     // int(4) unsigned
    public $DistrictID;                     // int(4) unsigned
    public $DistrictName;                   // varchar(64)
    public $E;                              // varchar(3)
    public $O;                              // varchar(3)
    public $L;                              // varchar(3)
    public $P;                              // varchar(3)
    public $M;                              // varchar(3)
    public $A;                              // varchar(3)
    public $W;                              // varchar(3)
    public $C;                              // varchar(255)
    public $P1;                             // bigint(8) unsigned
    public $P2;                             // bigint(8) unsigned
    public $P3;                             // bigint(8) unsigned
    public $P4;                             // bigint(8) unsigned
    public $P5;                             // bigint(8) unsigned
    public $SBE;                            // int(4)
    public $SBO;                            // int(4)
    public $SBL;                            // int(4)
    public $SBW;                            // int(4)
    public $ESEED;                          // int(4) default_1
    public $OSEED;                          // int(4) default_1
    public $LSEED;                          // int(4) default_1
    public $WSEED;                          // int(4) default_1
    public $league_equations_seed;          // int(4) default_9
    public $league_on_sets_seed;            // int(4) default_9
    public $league_linguishtik_seed;        // int(4) default_9
    public $league_wff_n_proof_seed;        // int(4) default_9

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
