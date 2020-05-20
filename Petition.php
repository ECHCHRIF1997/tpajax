<?php
class Petition{
	private $IDP;
	private $Titre;
	private $Description;
	private $DatePublic;

   public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }
}
?>