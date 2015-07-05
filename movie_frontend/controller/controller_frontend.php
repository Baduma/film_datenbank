<?php
	require_once('../views/title.tpl.php');
	require_once('../models/model_frontend.php');

	class controllerModel{
	
		private $frontendModel = null;
		
		public function __construct(){
			$this->frontendModel = new frontendModel();
		}
	
		
		public function showRegie(){
			//Variablen Inhalt prüfen
			if(isset($_GET['action']) && $_GET['action'] =='anzeigen'){
				if(!empty($_GET['id'])){
					//leere Zeichen entfernen und  html Sondernzeichen umwandelt
					$id = trim(htmlspecialchars($_GET['id']));
					$data = $data = $this->frontendModel->showFilm('filme',$id);
					require_once('../views/show_regie.php');
					require_once('../views/footer.tpl.php');
				}
			}
		}
	
	
		public function zeigeRegie(){
		
			if(!empty($_GET['regie'])){
				//leere Zeichen entfernen und  html Sondernzeichen umwandelt
				$regie = trim(htmlspecialchars($_GET['regie']));
				$data = $data = $this->frontendModel->sucheFilm('filme',$regie);
				$anz = $this->frontendModel->countRegie('filme',$regie);
				require_once('../views/content_suche.tpl.php');
				require_once('../views/footer.tpl.php');
				exit();
			}	
		}
	
		public function bildData(){
		
			if(isset($_GET['bild'])){
				//leere Zeichen entfernen und  html Sondernzeichen umwandelt
				$bild = $_GET['bild'];
				$data = $data = $this->frontendModel->bildData('filme',$bild);
				require_once('../views/show_regie.php');
				require_once('../views/footer.tpl.php');
			}
		}
	
		public function showAllFilme(){
			//Variablen Inhalt prüfen
			if(isset($_GET['action']) && $_GET['action'] =='showFilm'){
				$data = $data = $this->frontendModel->selectData('filme');
				require_once('../views/show_all_film.tpl.php');
			}
		}
	
	}

	//--------------Objekteinstanz erzeugen----------------------------
	$controller= new controllerModel();
	$controller-> zeigeRegie();
	$controller-> showRegie();
	$controller-> bildData();
	$controller-> showAllFilme();

?>

	</diV>
</body>
</html>

