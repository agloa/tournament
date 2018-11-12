<?php
/**
 * Table Definition for civicrm_value_civivolunteer_13
 */
require_once 'DB/DataObject.php';

class Civicrm_value_civivolunteer_13 extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_value_civivolunteer_13';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_id;                      // int(4) unique_key not_null unsigned
    public $volunteer_need_id_86;           // int(4)
    public $volunteer_role_id_87;           // varchar(64)
    public $time_scheduled_in_minutes_88;   // int(4)
    public $time_completed_in_minutes_89;   // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
