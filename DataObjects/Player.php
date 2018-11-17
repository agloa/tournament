<?php
/**
 * Table Definition for player
 */
require_once 'DB/DataObject.php';

class Player extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'player';              // table name
    public $id;                             // int(4) primary_key not_null unsigned
    public $external_identifier;            // varchar(64)
    public $first_name;                     // varchar(64) unique_key not_null
    public $middle_name;                    // varchar(64) unique_key
    public $last_name;                      // varchar(64) unique_key not_null
    public $prefix;                         // varchar(10) unique_key
    public $suffix;                         // varchar(10) unique_key
    public $gender;                         // varchar(10) unique_key
    public $birth_date;                     // date unique_key

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
    /**
     * get/set an  array of table primary keys
     *
     * set usage: $do->keys('id','code');
     *
     * This is defined in the table definition if it gets it wrong,
     * or you do not want to use ini tables, you can override this.
     * @param  string optional set the key
     * @param  *   optional  set more keys
     * @access private
     * @return array
     */
    function keys()
    {
    	/* Fib: return empty array since:
    	 *       1) DB_DataObject interprets unique keys as primary
    	 *       2) This table doesn't auto-increment id
    	 */
    	return;// array("id");
    }
    
    // does the query based on the value of $this->name
/*     function find() {
    	global $db;
    	$this->result = $db->query('SELECT * FROM player WHERE last_name LIKE ' . $db->quote('%'.$this->name.'%'));
    } */
    
    // fetches a row of data and sets the object variables to match it.
/*     function fetch() {
    	$array = $this->result->fetchRow();
    	if (empty($array)) {
    		return false;
    	}
    	foreach ($array as $key=>$value) {
    		$this->$key = $value;
    	}
    	return true;
    }
     */
    
    function getAge() {
    	return date('Y') - date('Y', strtotime($this->$birth_date));
    }
    
    // gets an array of data about the seleted person
    function getPlayer($id)
    {
    	global $db;
    	$result = $db->query('SELECT * FROM player WHERE id=' . $db->quote($id));
    	return $result->fetchRow();
    }
    
    // example of checking a password.
    function checkPassword($username, $password)
    {
    	global $db;
    
    	$hashed = md5($password);
    	$hashed = '';
    	$result = $db->query(
    			'SELECT * FROM wp_users WHERE user_login=' . $db->quote($username)
    			. ' AND user_pass = ' . $db->quote($hashed)
    	);
    	return $result->fetchRow();
    }
}
