<?php
/**
 * Table Definition for wp_mtouchquiz_ratings
 */
require_once 'DB/DataObject.php';

class Wp_mtouchquiz_ratings extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'wp_mtouchquiz_ratings';    // table name
    public $ID;                             // int(4) primary_key not_null unsigned
    public $quiz_id;                        // int(4) not_null unsigned
    public $score_rating;                   // varchar(1024) not_null
    public $min_points;                     // int(4) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
