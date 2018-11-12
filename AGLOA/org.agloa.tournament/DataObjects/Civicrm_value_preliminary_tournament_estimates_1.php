<?php
/**
 * Table Definition for civicrm_value_preliminary_tournament_estimates_1
 */
require_once 'DB/DataObject.php';

class Civicrm_value_preliminary_tournament_estimates_1 extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_value_preliminary_tournament_estimates_1';    // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $entity_id;                      // int(4) not_null unsigned
    public $tournament_year_1;              // int(4) default_2017
    public $elementary_up_to_grade_6__2;    // int(4)
    public $middle_up_to_grade_6__3;        // int(4)
    public $junior_up_to_grade_10__4;       // int(4)
    public $senior_up_to_grade_12__5;       // int(4)
    public $coaches_6;                      // int(4)
    public $other_adults_9;                 // int(4)
    public $notes_comments_54;              // text

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
