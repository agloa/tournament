<?php
/**
 * Table Definition for prefix
 */
require_once 'Tournament_DataObject.php';

class Prefix extends Tournament_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'prefix';              // table name
    public $value;                          // varchar(20) primary_key not_null
    public $label;                          // varchar(20) not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    
    function keys()
    {
    	/* Fib: return empty array since:
    	 *       1) DB_DataObject interprets unique keys as primary
    	 *       2) This table doesn't auto-increment id
    	*/
    	return;// array("id");
    }
}
