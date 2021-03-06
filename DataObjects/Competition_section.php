<?php
/**
 * Table Definition for competition_section
 */
require_once 'DB/DataObject.php';

class Competition_section extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'competition_section';    // table name
    public $id;                             // varchar(20) primary_key not_null
    public $competition;                    // varchar(20) unique_key not_null
    public $title;                          // varchar(512) not_null
    public $description;                    // text
    public $ordinal;                        // int(4) unique_key not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
