<?php
/**
 * Table Definition for civicrm_file
 */
require_once 'DB/DataObject.php';

class Civicrm_file extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'civicrm_file';        // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $file_type_id;                   // int(4) unsigned
    public $mime_type;                      // varchar(255)
    public $uri;                            // varchar(255)
    public $document;                       // mediumblob
    public $description;                    // varchar(255)
    public $upload_date;                    // datetime

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
