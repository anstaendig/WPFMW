<?php

class DatenBank {
	
	private $host = 'localhost', $user="root", $pw = "", $db = "wpfdb";
	private $mysqli;
	
	public function connect() {
		$this->mysqli = new mysqli($this->host, $this->user, $this->pw, $this->db);
		return $this->mysqli;
	}
	
	public function close() {
		$this->mysqli->close();
	}
}
?>