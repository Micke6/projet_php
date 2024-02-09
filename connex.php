<?php
  class connection_base{
    private $server_base,$user,$password;
    public $connex;

    public function __construct($server_base="mysql:dbname=EDT;host=localhost",$user="root",$password=""){
        $this->server_base=$server_base;
        $this->user=$user;
        $this->password=$password;
    }

    public function start_connection(){
        try {
              $this->connex= new PDO("mysql:host=localhost;dbname=EDT",$this->user,$this->password);
        echo "Connection established";
        } catch (PDOException $e) {
            var_dump($e);
        }
    }

    public function end_connection() {
        $this->connex=null;
    }
}
$connex=new Connection_base();
$connex->start_connection();

?>