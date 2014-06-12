<?php


class DB{
	protected $host;
	public $dbh;
	protected $user;
	protected $password;
	protected $database;
	
	public function __construct(){
		$this->host = 'localhost';
		$this->user = 'root';
		$this->password = '';
		$this->database = 'buscatumascota';
		$this->dbh=new PDO("mysql:host=".$this->host.";dbname=".$this->database.";",$this->user,$this->password,array(
    PDO::ATTR_PERSISTENT => true
));
		return $this->dbh;
		echo 'chupalo'; 
	}
}



?>