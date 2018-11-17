<?php
require_once 'DB/DataObject.php';

class Tournament_DataObject extends DB_DataObject
{
	public function table_title() {
		return str_replace("tournament_", "", $this->tableName());
	}

	public function rows(){
		$this->query("SELECT * FROM " . $this->tableName());
		while ($this->fetch()) {
			$rows[] = $this->toArray();
		}
		return $rows;
	}
}
