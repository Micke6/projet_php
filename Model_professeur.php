<?php
require_once 'connex.php';
class Profesor{
    private $id_prof, $Name, $Firstname, $Grade;
    public $connect;

    public function __construct( $id_prof, $Name=null, $Firstname=null, $Grade=null ){
        $this->id_prof = $id_prof;
        $this->Name = $Name;
        $this->Firstname = $Firstname;
        $this->Grade = $Grade;

        $this->connect = new Connection_base();
    }

    public function insert_prof(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("INSERT INTO PROFESSEUR VALUES(?,?,?,?)");
        $requete->execute([$this->id_prof,$this->Name,$this->Firstname,$this->Grade]);
        $this->connect->end_connection();
    }

    public function list_prof(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->query("SELECT * FROM PROFESSEUR");
        $list=$requete->fetchAll(PDO::FETCH_ASSOC);
        print_r($list);
        $this->connect->end_connection();
    }

    public function update_prof(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("UPDATE professeur SET Nom = ?, Prenom = ?,Grade = ?  WHERE idprof=?");
        $requete->execute([$this->Name,$this->Firstname,$this->Grade,$this->id_prof]);
        $this->connect->end_connection();
    }

    public function delete_prof(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("DELETE FROM professeur WHERE idprof=?");
        $requete->execute([$this->id_prof]);
        $this->connect->end_connection();
    }




};

?>