<?php

class usuario
{
    public $nom_cli;
    public $ape_cli;
    public $cor_cli;
    public $pas_cli;
    public $fch_cli;
    public $cel_cli;
    public $dir_cli;

    private $pdo;
    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    function obtenerxuser($user_cli)
    {
        $sql =  $this->pdo->prepare('SELECT user_cli, pas_cli FROM cliente WHERE user_cli=?');
        $res = $sql->execute(array($user_cli));

        if ($sql->rowCount() != 0) {
            return $sql->fetch(PDO::FETCH_OBJ);
        } else {
            return false;
        }
    }
   
    function Registro(usuario $data){
        try {
            //Sentencia SQL.8
            $sql = "INSERT INTO cliente (nom_cli,ape_cli,cor_cli,pas_cli,fch_cli,cel_cli,dir_cli)
                                    VALUES (?, ?, ?, ?, ?, ?, ?)";
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->nom_cli,
                        $data->ape_cli,
                        $data->cor_cli,
                        $data->pas_cli,
                        $data->fch_cli,
                        $data->cel_cli,
                        $data->dir_cli,
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
