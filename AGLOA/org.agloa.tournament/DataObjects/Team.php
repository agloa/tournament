<?php
/**
 * Table Definition for team
 */
require_once 'DB/DataObject.php';

class Team extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'team';                // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(64) unique_key
    public $title;                          // varchar(64) unique_key
    public $description;                    // text
    public $is_active;                      // tinyint(1)
    public $created_id;                     // int(4) unsigned
    public $modified_id;                    // int(4) unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
