<?php
/**
 * Catégorie
 */
class categorie
{
  public $id_categorie;
  public $Libelle;
  function __construct($id,$lib)
  {
    // code...
    $this->$id_categorie=$id;
    $this->$Libelle=$lib;
  }
  function GetID()
  {
    return $this->$id_categorie;
  }
  function GetLib()
  {
    return $this->$Libelle;
  }
  function SetID($id_cat)
  {
    $this->$id_categorie=$id_cat;
  }
  function SetLib($lib)
  {
    $this->$Libelle=$lib;
  }
}

/**
 * Produit
 */
class produit
{
  private $id_produit;
  private $Libelle;
  private $PrixHT;
  private $TTVA;
  private $Stock;
  private $Description;
  private $Categorie;
  private $Image;
  function __construct($id,$lib,$pht,$tva,$stk,$des,$cat,$img)
  {
    $this->$id_produit=$id;
    $this->$Libelle=$lib;
    $this->$PrixHT=$pht;
    $this->$TTVA=$tva;
    $this->$Stock=$stk;
    $this->$Description=$des;
    $this->$Categorie=$cat;
    $this->$Image=$img;
  }
  /*Getter*/
  function GetID()
  {
    return $this->$id_produit;
  }
  function GetLib()
  {
    return $this->$Libelle;
  }
  //etc....
  function GetImg()
  {
    return $this->$Image;
  }
  /*Getter*/
  /*Setter*/
  function SetID($id_prd)
  {
    $this->$id_produit=$id_prd;
  }
  //etc....
  function SetImg($img)
  {
    return $this->$Image=$img;
  }
  /*Setter*/
}

/**
 * Client
 */
class client
{
  private $id_client;
  private $Nom;
  private $Prenom;
  private $Adresse;
  private $Telephone;
  private $Mail;
  private $Password;
  private $Bancaire;
  function __construct($id,$nom,$pre,$adr,$tel,$mail,$mdp,$cb)
  {
    $this->$id_client=$id;
    $this->$Nom=$nom;
    $this->$Prenom=$pre;
    $this->$Adresse=$adr;
    $this->$Telephone=$tel;
    $this->$Mail=$mail;
    $this->$Bancaire=$cb;
  }
  //Répétion .....
}

?>
