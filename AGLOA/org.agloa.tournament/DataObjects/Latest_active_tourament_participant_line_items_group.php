<?php
/**
 * Table Definition for latest_active_tourament_participant_line_items_group
 */
require_once 'DB/DataObject.php';

class Latest_active_tourament_participant_line_items_group extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'latest_active_tourament_participant_line_items_group';    // table name
    public $id;                             // int(4) not_null unsigned
    public $participant_id;                 // int(4) not_null unsigned
    public $contact_id;                     // int(4) not_null unsigned
    public $price_field;                    // varchar(255)
    public $qty;                            // decimal(20,2) not_null
    public $registration_group;             // varchar(64)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
