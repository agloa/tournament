<?php
/**
 * Table Definition for civicrm_volunteer_need
 */
require_once 'DB/DataObject.php';

class Civicrm_volunteer_need extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_volunteer_need';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $project_id;                     // int(4) unsigned
    public $start_time;                     // datetime
    public $duration;                       // int(4)
    public $is_flexible;                    // tinyint(1) not_null
    public $quantity;                       // int(4)
    public $visibility_id;                  // int(4) unsigned
    public $role_id;                        // int(4)
    public $is_active;                      // tinyint(1) not_null default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
