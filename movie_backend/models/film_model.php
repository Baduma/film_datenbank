<?php 

//Klasse Benutzer
class userModel{
	
	protected $con = null;
	
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
	
	//-----------------Benutzerdaten auf Übereinstimmung prüfen/schutz vor Mysql Injections-------------------------
	public function loginAdmin($pname,$ppasswort){
			$stmt = $this->con->prepare("select * from benutzer where pname = :pname and ppasswort = :ppasswort");
			$stmt->bindParam(':pname',$pname);
			$stmt->bindParam(':ppasswort',$ppasswort);
			$stmt->execute();
			$data = $stmt->rowcount();
			return $stmt->rowcount() ;
	}
}


//Klasse Filme
class filmModel extends userModel{
	
	//-------------Daten auslesen----------------------------	
	public function selectData($table){
		
		$stmt =  $this->con->query("select * from" ." " .$table);
		$stmt->execute();
		$rows = $stmt->rowcount();
		return $filme = $stmt->fetchAll();
			
		 
	}
	
	//----------------Neue Daten in Db einfügen/schutz vor Mysql Injections-----------------------------------
	public function insertData($table,$titel,$regie,$schauspieler,$genre,$beschreibung,$land,$jahr,$laufzeit){
		
		$stmt = $this->con->prepare("insert into" ." " .$table ." " ."(titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit)values(:titel,:regie, :schauspieler, :genre, :beschreibung, :land, :jahr, :laufzeit)");
		$stmt->bindparam(':titel',$titel);
		$stmt->bindparam(':regie',$regie);
		$stmt->bindparam(':schauspieler',$schauspieler);
		$stmt->bindparam(':genre',$genre);
		$stmt->bindparam(':beschreibung',$beschreibung);
		$stmt->bindparam(':land',$land);
		$stmt->bindparam(':jahr',$jahr);
		$stmt->bindparam(':laufzeit',$laufzeit);
		return $stmt->execute();
	}
	
	//-----------Daten in Db löschen-------------------------------------------------
	public function deleteData($table,$id){
		
		$stmt = $this->con->prepare("delete from" ." " .$table ." " ."where id = :id ");
		$stmt->bindparam(':id',$id);
		return $stmt->execute();
	}
	
	//-----------Datensatz selektieren---------------------------------------------
	public function selectOne($table,$id){
		$stmt = $this->con->prepare("select * from" ." " .$table ." " ."where id = ? ");
		$stmt->execute(array($id));
		$anz = $stmt->rowcount();
		return $rows= $stmt->fetch();
		
		
	}
	
	//----------------Update Daten/schutz vor Mysql Injections------------------------
	public function updateData($table,$id,$titel,$regie,$schauspieler,$genre,$beschreibung,$land,$jahr,$laufzeit){
		$stmt = $this->con->prepare("update"." " .$table ." " ."set titel = :titel, regie = :regie, schauspieler = :schauspieler, genre = :genre, beschreibung = :beschreibung, land = :land, jahr = :jahr, laufzeit = :laufzeit where id = :id");
		$stmt->bindparam(':titel',$titel);
		$stmt->bindparam(':regie',$regie);
		$stmt->bindparam(':schauspieler',$schauspieler);
		$stmt->bindparam(':genre',$genre);
		$stmt->bindparam(':beschreibung',$beschreibung);
		$stmt->bindparam(':land',$land);
		$stmt->bindparam(':jahr',$jahr);
		$stmt->bindparam(':laufzeit',$laufzeit);
		$stmt->bindparam(':id', $id);
		$stmt->execute();
		
	}
}

?>