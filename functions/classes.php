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
		
	}
	public function  set_names()
	{
		return $this->dbh->query("SET NAMES 'utf-8'");
	} 
}

class Usuarios
{
	public function  add_usuario()
	{
		$this->dbh = new DB;
		//self::set_names();
		$sql = "INSERT INTO usuario values (null, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = $this->dbh->dbh->prepare($sql);
		$stmt->bindValue(1, $_POST["nombre"], PDO::PARAM_STR);
		$stmt->bindValue(2, $_POST["correo"], PDO::PARAM_STR);
		$stmt->bindValue(3, $_POST["pass"], PDO::PARAM_STR);
		$stmt->bindValue(4, $_POST["user"], PDO::PARAM_STR);
		$stmt->bindValue(5, $_POST["comuna"], PDO::PARAM_STR);
		$stmt->bindValue(6, "0", PDO::PARAM_INT);
		$stmt->bindValue(7, "0", PDO::PARAM_INT);
		$stmt->bindValue(8, "Activo", PDO::PARAM_STR);
		$stmt->bindValue(9, $_POST["perfil"], PDO::PARAM_STR);
		$stmt->execute();
		$this->dbh = null;
	}
}

?>