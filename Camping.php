<?php
/**
 * Created by PhpStorm.
 * User: bontemps
 * Date: 14/11/18
 * Time: 11:04
 */
// création classe camping
class Camping {

    //Attributs
    private $nom;
    private $adresse;
    private $ville;
    

    // constructeur
    public function __construct($n,$a,$v)
    {
        $this->setNom($n);
        $this->setAdresse($a);
        $this->setVille($v);
    }


    //méthodes : setters = mutateurs
    public function setNom($nouveau_nom){
        $this->nom=$nouveau_nom;
    }

    public function setAdresse($nouveau_adresse){
        $this->adresse=$nouveau_adresse;
    }

    public function setVille($nouveau_ville){
        $this->ville=$nouveau_ville;
    }

    // methodes : getters = accesseurs
    public function getNom(){
        return $this->nom;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function getVille(){
        return $this->ville;
    }


    public function toString(){
        
        print_r($this->nom . ' ' . $this->adresse . ' ' . $this->ville);
        
    }



}

