<?php
/**
 * Table Definition for latest_active_tournament_participant_price_field_fee_levels
 */
require_once 'DB/DataObject.php';

class Latest_active_tournament_participant_price_field_fee_levels extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'latest_active_tournament_participant_price_field_fee_levels';    // table name
    public $id;                             // int(4) not_null unsigned
    public $label;                          // varchar(255) not_null
    public $contact_id;                     // int(4) not_null unsigned
    public $sort_name;                      // varchar(128)
    public $fee_level;                      // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
