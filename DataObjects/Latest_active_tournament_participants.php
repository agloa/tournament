<?php
/**
 * Table Definition for latest_active_tournament_participants
 */
require_once 'DB/DataObject.php';

class Latest_active_tournament_participants extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'latest_active_tournament_participants';    // table name
    public $id;                             // int(4) not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $sort_name;                      // varchar(128)
    public $display_name;                   // varchar(128)
    public $status_id;                      // int(4) not_null unsigned default_1
    public $status;                         // varchar(255)
    public $role_id;                        // varchar(128)
    public $role;                           // varchar(512)
    public $fee_level;                      // text
    public $register_date;                  // datetime

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
