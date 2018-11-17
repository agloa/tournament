<?php
/**
 * Table Definition for tournament_sponsor
 */
require_once 'Tournament_DataObject.php';

class Tournament_sponsor extends Tournament_DataObject
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'tournament_sponsor';    // table name
    public $id;                             // varchar(20) primary_key not_null
    public $label;                          // varchar(50) unique_key not_null
    public $description;                    // text not_null

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    
    function columnHeaders(){    	
    	$columnHeaders[] = "ID";
    	$columnHeaders[] = "Label";
    	$columnHeaders[] = "Description";
    	return $columnHeaders;
    }
    
    function columns(){
    	$columns[] = "id";
    	$columns[] = "label";
    	$columns[] = "description";
    	return $columns;
    }
}