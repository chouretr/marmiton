<?php
	
class Database{

	private $db_name;

	private $db_user;

	private $db_pass;

	private $db_host;

	private $pdo;

	public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost')
	{
		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;

	}
	
	public function getPDO()
	{
		try
		{
			$pdo = new PDO("mysql:dbname=$this->db_name;host=localhost", 'root', '');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo $show . "<br>" . $e->getMessage();
		}

		$this->pdo = $pdo;
		return $this->pdo;
	}

	public function query($sql)
	{
		$req = $this->getPDO()->query($sql);
		$data = $req->fetchall(PDO::FETCH_OBJ);

		return $data;
	}
}
?>