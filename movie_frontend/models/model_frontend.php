<?php
class frontendModel{
	
	private $con = null;
	
	//------------------Verbindung zur Datenbank herstellen----------------
	public function __construct(){
		 $this->con = new PDO("mysql:HOST=localhost;dbname=filmdatenbank_baduma",'root',
	'',array(
			PDO::ATTR_PERSISTENT				=> true,
			PDO::ATTR_ERRMODE					=> PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE		=> PDO::FETCH_ASSOC,
			PDO::MYSQL_ATTR_USE_BUFFERED_QUERY 	=> true
		));
		$this->con->query('SET NAMES utf8');
	}

	//-----------Film aus der Db auslesen-------------
	public function sucheFilm($table,$regie){
		
		$stmt =  $this->con->query("select * from" ." " .$table ." " ."where regie = '$regie'");
		$stmt->execute();
		$rows = $stmt->rowcount();
		
		return $contacts = $stmt->fetchAll();
	}
	
	//-----------Film aus der Db auslesen/schutz vor Mysql Injections-------------
	public function showFilm($table,$id){
		$stmt = $this->con->prepare("select * from" ." " .$table ." " ."where id = ? ");
		$stmt->execute(array($id));
		$anz = $stmt->rowcount();
		return $rows = $stmt->fetchALL();
	}
	
	//-----------Anzahl der gefundenen Filme----------------------------
	public function countRegie($table,$regie){
		
		$stmt =  $this->con->query("select * from" ." " .$table ." " ."where regie = '$regie'");
		$stmt->execute();
		return $rows = $stmt->rowcount();
	}
	
	//Daten aus der DB auslesen-----------------------------------
	public function bildData($table,$bild){
		
		$stmt =  $this->con->query("select * from" ." " .$table ." " ."where bild = '$bild'");
		$stmt->execute();
		$rows = $stmt->rowcount();
		return $contacts = $stmt->fetchAll();
	}
	
	//----------Alle Filme in DB selektieren------------------------------
	public function selectData($table){
		
		$stmt =  $this->con->query("select * from" ." " .$table);
		$stmt->execute();
		$rows = $stmt->rowcount();
		return $contacts = $stmt->fetchAll();
	}
}
?>

