<?php
require_once 'connex.php';
class  Maclasse{
    private $id_classe, $level;
    public $connect;

    public function __construct( $id_classe, $level=null){
        $this->id_classe = $id_classe;
        $this->level = $level;

        $this->connect = new Connection_base();
    }

    public function insert_classe(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("INSERT INTO CLASSE VALUES(?,?)");
        $requete->execute([$this->id_classe,$this->level]);
        $this->connect->end_connection();
    }

    public function list_classe(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->query("SELECT * FROM CLASSE");
        $list=$requete->fetchAll(PDO::FETCH_ASSOC);
        print_r($list);
        $this->connect->end_connection();
    }

    public function update_classe(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("UPDATE CLASSE SET niveau = ?  WHERE idclasse=?");
        $requete->execute([$this->level,$this->id_classe]);
        $this->connect->end_connection();
    }

    public function delete_classe(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("DELETE FROM CLASSE WHERE idclasse=?");
        $requete->execute([$this->id_classe]);
        $this->connect->end_connection();
    }

};
// $C1= new Maclasse("C001","L1 GB G1 ");
// $C1->update_classe();


?>