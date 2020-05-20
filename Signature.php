<?php
class Petition{
    private $IDS;
	private $Nom;
	private $Prenom;
	private $Email;
	private $Pays;
	private $Date;
	private $Heure;
	private $IDP;

	public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }
}
?>