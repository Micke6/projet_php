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
        $requete=$this->connect->connex->prepare("INSERT INTO classe VALUES(?,?)");
        $requete->execute([$this->id_classe,$this->level]);
        $this->connect->end_connection();
    }

    public function list_classe(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->query("SELECT * FROM classe");
        $list=$requete->fetchAll(PDO::FETCH_ASSOC);
        print_r($list);
        $this->connect->end_connection();
    }

    public function update_classe(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("UPDATE classe SET niveau = ?  WHERE idclasse=?");
        $requete->execute([$this->level,$this->id_classe]);
        $this->connect->end_connection();
    }

    public function delete_classe(){
        $this->connect->start_connection();
        $requete=$this->connect->connex->prepare("DELETE FROM classe WHERE idclasse=?");
        $requete->execute([$this->id_classe]);
        $this->connect->end_connection();
    }

};
$C1= new Maclasse(1);
$C1->delete_classe();

?>