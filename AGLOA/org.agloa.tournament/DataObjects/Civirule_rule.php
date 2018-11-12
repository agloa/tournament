<?php
/**
 * Table Definition for civirule_rule
 */
require_once 'DB/DataObject.php';

class Civirule_rule extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civirule_rule';       // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $name;                           // varchar(80)
    public $label;                          // varchar(128)
    public $trigger_id;                     // int(4) unsigned
    public $trigger_params;                 // text
    public $is_active;                      // tinyint(1) default_1
    public $description;                    // varchar(256)
    public $help_text;                      // text
    public $created_date;                   // date
    public $created_user_id;                // int(4)
    public $modified_date;                  // date
    public $modified_user_id;               // int(4)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
