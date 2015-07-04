<?php
require_once('../views/title.tpl.php');
require_once('../models/film_model.php');

class filmController{
		
	private $filmModel = null;
	private $userModel = null;
			  
	public function __construct(){
		
		$this->filmModel = new filmModel();
		$this->userModel = new userModel();
	}
		
	//--------Filme aus der Datenbank auflisten falls der Login erfolgreich-------	
	public function getFilme(){
		
		session_start();
		if(!isset($_SESSION['pname']) && !isset($_SESSION['ppasswort'])){
			header("Location: ../views/user_views.php");
		}
		
		$data = $this->filmModel->selectData('filme');
		
		require_once('../views/readAll_film.php');
		
		}
	
	//-------------------Adminlogin/Sessionstart--------------------
	public function login(){
		
		if(isset($_POST['abschicken'])){
			session_start();
			require_once('../views/user_views.php');
			
			//Formularvalidierung
			if(isset($_POST['pname']) && isset($_POST['ppasswort'])){
				//leere Zeichen entfernen und  html Sondernzeichen umwandelt
				$pname = trim(htmlspecialchars($_POST['pname']));
				$ppasswort =trim(htmlspecialchars($_POST['ppasswort']));
 
				if( $this->userModel->loginAdmin($pname,$ppasswort)){
					$_SESSION["pname"] = $pname;
					$_SESSION["ppasswort"] = $ppasswort;
					header("Location:  ../controller/film_controller.php");
					exit();
				}
			}
		}
	}
	
	//-----------------------Filme einfügen-------------------------------------
	public function editContact(){
		if(isset($_POST['absenden'])){
			
			//Inhalt der Variablen prüfen
			if(isset($_POST['titel']) && !empty($_POST['regie'])&& !empty($_POST['schauspieler']) && !empty($_POST['genre']) && !empty($_POST['beschreibung']) && !empty($_POST['land']) && !empty($_POST['jahr']) && is_numeric($_POST['jahr']) && !empty($_POST['laufzeit']) && is_numeric($_POST['laufzeit'])){
				
				//leere Zeichen entfernen und  html Sondernzeichen umwandelt
				$titel = trim(htmlspecialchars($_POST['titel']));
				$regie = trim(htmlspecialchars($_POST['regie']));
				$schauspieler = trim(htmlspecialchars($_POST['schauspieler']));
				$genre = trim(htmlspecialchars($_POST['genre']));
				$beschreibung = trim(htmlspecialchars($_POST['beschreibung']));
				$land = trim(htmlspecialchars($_POST['land']));
				$jahr = trim(htmlspecialchars($_POST['jahr']));
				$laufzeit = trim(htmlspecialchars($_POST['laufzeit']));
				if($data = $this->filmModel->insertData('filme',$titel,$regie,$schauspieler,$genre,$beschreibung,$land,$jahr,$laufzeit)) {
					header("Location:  ../controller/film_controller.php");
					exit();
				}
			}    
		}
		
	}
	
	//--------------Film löschen-------------------------------------
	public function deleteFilm(){
				
		if(!empty($_GET['id'])){
			$id = trim(htmlspecialchars($_GET['id']));
			$data = $this->filmModel->deleteData('filme',$id);
		}
	}
	
	//------------------Film Informationen anzeigen-------------------
	public function getFilm(){
	
		if(isset($_GET['action']) && $_GET['action'] =='read'){
			if(!empty($_GET['id'])){
				$id = trim(htmlspecialchars($_GET['id']));
				$data = $this->filmModel->selectOne('filme',$id);
				require_once('../views/read_views.php');
				exit();
			}
		}	
	}
	
	//-----------------Daten zu ändern anzeigen------------------
	public function dataToUpdate(){
		
		if(isset($_GET['action']) && $_GET['action'] =='update'){
			if(!empty($_GET['id'])){
				$id = trim(htmlspecialchars($_GET['id']));
				$data = $data = $this->filmModel->selectOne('filme',$id);
				require_once('../views/update_views.php');
				exit();
			}
		}
	}
	
	//------------------Filme updaten---------------------------------
	public function updateFilm(){
		
		//Inhalt der Variablen prüfen/leere Zeichen entfernen und  html Sondernzeichen umwandelt
		if(!empty($_GET['titel']) && !empty($_GET['regie']) && !empty($_GET['schauspieler']) && !empty($_GET['beschreibung']) && !empty($_GET['genre']) && !empty($_GET['land']) && !empty($_GET['jahr']) && !empty($_GET['laufzeit']) && !empty($_GET['id'])){
			
			//leere Zeichen entfernen und  html Sondernzeichen umwandelt
			$titel = trim(htmlspecialchars($_GET['titel']));
			$regie = trim(htmlspecialchars($_GET['regie']));
			$schauspieler = trim(htmlspecialchars($_GET['schauspieler']));
			$genre = trim(htmlspecialchars($_GET['genre']));
			$beschreibung = trim(htmlspecialchars($_GET['beschreibung']));
			$land = trim(htmlspecialchars($_GET['land']));
			$jahr = trim(htmlspecialchars($_GET['jahr']));
			$laufzeit = trim(htmlspecialchars($_GET['laufzeit']));
			$id = trim(htmlspecialchars($_GET['id']));
			$data = $this->filmModel->updateData('filme',$id,$titel,$regie,$schauspieler,$genre,$beschreibung,$land,$jahr,$laufzeit);
			header("Location: ../controller/film_controller.php");
			exit();
		}
	}
	
	//------------------------Logout----------------------
	public function logout(){
		
		if(isset($_GET['action']) && $_GET['action'] =='logout'){
			session_unset();            // Sessionvariable loeschen
			session_destroy();          // Session zerstoeren
			echo '<h2>Logout bitte beststaetigen: <a href="../views/user_views.php">Bestaetigen</a>';
			exit();
			//require_once('../views/user_views.php');
		}
	}


}

//--------Objekte erzeugen--------------------------
$obj8 = new filmController();								
$obj8->login();
$obj8->getFilm();
$obj8->editContact();
$obj8->dataToUpdate();
$obj8->updateFilm();
$obj8->deleteFilm();
$obj8->getFilme();
$obj8->logout();

?>