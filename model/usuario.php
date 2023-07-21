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
    public $user_cli;

    private $pdo;
    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function obtenerxuser($user_cli)
    {
        // $sql = $this->pdo->prepare('SELECT user_cli, pas_cli FROM cliente WHERE user_cli = ?');
        // $res = $sql->execute(array($user_cli));
    
        // if ($sql->rowCount() != 0) {
        //     $usuario = $sql->fetch(PDO::FETCH_OBJ);
        //     $usuario->pas_cli = $usuario->pas_cli; // Asigna el valor a la propiedad "pas_cli"
        //     return $usuario;
        // } else {
        //     return false;
        // }


        // if ($sql->rowCount() != 0) {
        //     return $sql->fetch(PDO::FETCH_OBJ);
        // } else {
        //     return false;
        // }

        
    }

    public function obtenerPorUsuario($nombreUsuario)
    {
        $sql = 'SELECT * FROM cliente WHERE user_cli = :nombreUsuario';
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':nombreUsuario', $nombreUsuario);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function guardarUsuario($nombreUsuario, $contrasena)
    {
        $hashContrasena = password_hash($contrasena, PASSWORD_DEFAULT);

        $sql = 'INSERT INTO cliente (user_cli, pas_cli) VALUES (:nombreUsuario, :contrasena)';
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':nombreUsuario', $nombreUsuario);
        $statement->bindParam(':contrasena', $hashContrasena);
        $statement->execute();
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
