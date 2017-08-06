<?php
/**
 * Table Definition for sponsor_org_xref
 */
require_once 'DB/DataObject.php';

class Sponsor_org_xref extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'sponsor_org_xref';    // table name
    public $sponsor;                        // varchar(20) primary_key not_null
    public $organization;                   // int(4) not_null unsigned

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
