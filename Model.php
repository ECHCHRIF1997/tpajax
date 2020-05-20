<?php
class Model{
	private $type="mysql";
	private $dsn;
	
	private $username = "root";
	private $password ="";
	private $pdo;
	function __construct(){
		$this->dsn=$this->type.':dbname=petitionbd;host=localhost';
		$this->pdo = new PDO($this->dsn,$this->username,$this->password);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	function listePetitions(){
		$petitions = $this->pdo->query("select * from petition");
		$petitions->setFetchMode(PDO::FETCH_CLASS,'Petition');
		return $petitions;
	}
	function ids(){
		$ids = $this->pdo->query("select IDP from petition");
		$ids->setFetchMode(PDO::FETCH_ASSOC);
		return $ids;
	}

	function ajouterPetition($titre,$description){
		$ajouter = $this->pdo->prepare("insert into petition(Titre,Description,DatePublic) values(?,?,?)");
		$ajouter->execute(array($titre,$description,date("Y-m-d H:i:s")));
	}
	

	function signer($idp,$nom,$prenom,$email,$pays){
		$signer = $this->pdo->prepare("insert into signature(IDP,Nom,Prenom,Email,Pays,Date,Heure) values(?,?,?,?,?,?,?)");
		$signer->execute(array($idp,$nom,$prenom,$email,$pays,date('Y-m-d'),date('H:i:s')));  }
	
	}
	function hotPetition(){
		$hot = $this->pdo->query("select p.nom from petition p,signature s where p.IDP=s.IDP group by s.idp order by count(s.idp) desc limit 1");
		return $hot;
	}

	
	function fiveLastSigns(){
		$five = $this->pdo->query("select * from signature order by Heure DESC limit 5");
		$five->setFetchMode(PDO::FETCH_CLASS,'Signature');
		return $five;
	}

?>