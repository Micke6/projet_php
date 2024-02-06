<?php
require_once 'connex.php';
class Salle{
    private $id_salle, $Design, $occupation;
    public $connect;

    public function __construct( $id_salle, $Design=null, $occupation=null){
        $this->id_salle = $id_salle;
        $this->Design = $Design;
        $this->occupation = $occupation;

        $this->connect = new Connection_base();
    }

    public function insert_salle(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("INSERT INTO salle VALUES(?,?,?)");
        $requete->execute([$this->id_salle,$this->Design,$this->occupation]);
        $this->connect->end_connection();
    }

    public function list_salle(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->query("SELECT * FROM salle");
        $list=$requete->fetchAll(PDO::FETCH_ASSOC);
        print_r($list);
        $this->connect->end_connection();
    }

    public function update_salle(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("UPDATE salle SET Design = ?, occupation = ? WHERE idsalle=?");
        $requete->execute([$this->Design,$this->occupation,$this->id_salle]);
        $this->connect->end_connection();
    }

    public function delete_salle(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("DELETE FROM salle WHERE idsalle=?");
        $requete->execute([$this->id_salle]);
        $this->connect->end_connection();
    }
};


?>