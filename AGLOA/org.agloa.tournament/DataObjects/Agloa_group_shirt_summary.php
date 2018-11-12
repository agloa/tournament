<?php
/**
 * Table Definition for agloa_group_shirt_summary
 */
require_once 'DB/DataObject.php';

class Agloa_group_shirt_summary extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'agloa_group_shirt_summary';    // table name
    public $org_id;                         // int(4) unsigned
    public $registration_group;             // varchar(64)
    public $contact_id;                     // int(4) unsigned
    public $contact_name;                   // varchar(128)
    public $email;                          // varchar(254)
    public $phone;                          // varchar(32)
    public $YXS;                            // decimal(64,2)
    public $YS;                             // decimal(64,2)
    public $YM;                             // decimal(64,2)
    public $YL;                             // decimal(64,2)
    public $YXL;                            // decimal(64,2)
    public $S;                              // decimal(64,2)
    public $M;                              // decimal(64,2)
    public $L;                              // decimal(64,2)
    public $XL;                             // decimal(64,2)

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
