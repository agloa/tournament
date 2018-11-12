<?php
/**
 * Table Definition for latest_active_agloa_team_data
 */
require_once 'DB/DataObject.php';

class Latest_active_agloa_team_data extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'latest_active_agloa_team_data';    // table name
    public $team_id;                        // int(4) not_null unsigned
    public $title;                          // varchar(64)
    public $created_by;                     // varchar(128)
    public $modified_by;                    // varchar(128)
    public $EQ;                             // varchar(3)
    public $OS;                             // varchar(3)
    public $LI;                             // varchar(3)
    public $PROP;                           // varchar(3)
    public $PREZ;                           // varchar(3)
    public $WE;                             // varchar(3)
    public $WFF;                            // varchar(3)
    public $CE;                             // varchar(255)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
