<?php
/**
 * Table Definition for latest_active_tourament_participant_line_items
 */
require_once 'DB/DataObject.php';

class Latest_active_tourament_participant_line_items extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'latest_active_tourament_participant_line_items';    // table name
    public $id;                             // int(4) not_null unsigned
    public $participant_id;                 // int(4) not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $price_field;                    // varchar(255)
    public $qty;                            // decimal(20,2) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
