<?php
/**
 * Table Definition for RegistrationSignup
 */
require_once 'DB/DataObject.php';

class RegistrationSignup extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'RegistrationSignup';    // table name
    public $ID;                             // int(4) primary_key not_null
    public $Name;                           // varchar(64) not_null
    public $Description;                    // text
    public $Email;                          // varchar(254) not_null
    public $Last;                           // varchar(64) not_null
    public $First;                          // varchar(64) not_null
    public $Middle;                         // varchar(64)
    public $Birthdate;                      // date
    public $Gender;                         // varchar(1)
    public $Scheduler;                      // tinyint(1) not_null default_1

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
