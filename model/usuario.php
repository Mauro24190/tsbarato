<?php

class usuario{

    private $pdo;
    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    function obtenerxuser($user_cli){
        $sql=  $this->pdo->prepare('SELECT user_cli, pas_cli FROM cliente WHERE user_cli=?');
        $res= $sql->execute(array($user_cli)); 

        if($sql->rowCount()!= 0)  {
            return $sql->fetch(PDO::FETCH_OBJ);
        }else{
            return false;
        }
    }

}
