<?php 
class Etudiant  {
    // Attributs
    protected $id;
    protected $prenom;
    protected $nom;

    // methodes
    public function __construct($row = null){
        if($row != null){
            $this->id =$row["id"];
            $this->prenom =$row["prenom"];
            $this->nom =$row["nom"];
        }
    }
    ///GETTERS
    public function getId(){
        return $this->id;
    } 

    // SETTERS
    public function setId($id){
        $this->id = $id;
    }
     // SETTERS
     public function setPrenom($prenom){
        $this->prenom = $prenom;
    }


}




