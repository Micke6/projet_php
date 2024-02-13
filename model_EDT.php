<?php
require_once 'connex.php';
class EDT{
    private $id_prof, $idsalle, $idclasse, $cours,$date_edt;
    public $connect;

    public function __construct($idsalle=null,$id_prof=null, $idclasse=null, $cours=null, $date_edt ){
        $this->id_prof = $id_prof;
        $this->idsalle = $idsalle;
        $this->idclasse = $idclasse;
        $this->cours = $cours;
        $this->date_edt = $date_edt;

        $this->connect = new Connection_base();
    }

    public function insert_edt(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("INSERT INTO EMPLOIS_DU_TEMPS VALUES(?,?,?,?,?)");
        $requete->execute([$this->idsalle,$this->id_prof,$this->idclasse,$this->cours,$this->date_edt]);
        $this->connect->end_connection();
    }

    public function list_edt(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->query("SELECT * FROM EMPLOIS_DU_TEMPS");
        $list=$requete->fetchAll(PDO::FETCH_ASSOC);
        print_r($list);
        $this->connect->end_connection();
    }

    public function update_edt(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("UPDATE EMPLOIS_DU_TEMPS SET idsalle = ?, idprof = ?,idclasse= ?, cours=? WHERE date_edt = ?");
        $requete->execute([$this->idsalle,$this->id_prof,$this->idclasse,$this->cours,$this->date_edt]);
        $this->connect->end_connection();
    }

    public function delete_edt(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("DELETE FROM EMPLOIS_DU_TEMPS WHERE date_edt=?");
        $requete->execute([$this->date_edt]);
        $this->connect->end_connection();
    }
};
// $EDT1= new EDT(1,"P001","C001","MERISE","2024-02-11 14-00-03");
// $EDT1->insert_edt();

?>