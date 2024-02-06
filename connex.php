<?php
  class connection_base{
    private $server_base,$user,$password;
    public $connex;

    public function __construct($server_base="mysql:dbname=EDT;host=127.0.0.1",$user="root",$password=""){
        $this->server_base=$server_base;
        $this->user=$user;
        $this->password=$password;
    }

    public function start_connection(){
        try {
              $this->connex= new PDO($this->server_base,$this->user,$this->password);
              echo "Connection established";
        } catch (PDOException $e) {
            var_dump($e);
        }

    }

    public function end_connection() {
        $this->connex=null;
    }
}


?>