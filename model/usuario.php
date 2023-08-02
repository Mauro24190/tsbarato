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
    public $id_cli;

    private $pdo;
    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
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

    function Registro(usuario $data)
    {
        try {
            $sql = "INSERT INTO cliente (nom_cli,ape_cli,cor_cli,pas_cli,fch_cli,cel_cli,dir_cli,user_cli)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
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
                        $data->user_cli,
                        // Privilegios::User
                    )
                );
            $usuario_id = $this->pdo->lastInsertId();

            $rol_id = 1;
            $sqlClientexRol = "INSERT INTO clientexrol (cli_id, rol_id) VALUES (?, ?)";
            $stmtClientexRol = $this->pdo->prepare($sqlClientexRol);
            $stmtClientexRol->execute(array($usuario_id, $rol_id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    function obtenerRolIdPorClienteId($cliente_id)
    {
        try {
            $sql = "SELECT rol_id FROM clientexrol WHERE cli_id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$cliente_id]);

            if ($stmt->rowCount() > 0) {
                $items = [];
                while ($item = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    array_push($items, $item);
                }
                return $items;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            die("Error al obtener el ID del rol del cliente: " . $e->getMessage());
        }
    }


    public function Tabla()
    {
        try {
            $result = array();
            $stm = $this->pdo->prepare('SELECT * FROM cliente');
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id_cli)
    {
        try {
            $stm = $this->pdo->prepare('SELECT * FROM cliente WHERE id_cli = ?');
            $stm->execute(array($id_cli));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_cli)
    {
        try {
            $stm = $this->pdo
                ->prepare('DELETE FROM cliente WHERE id_cli = ?');
            $stm->execute(array($id_cli));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = 'UPDATE cliente SET
                nom_art = ?,
                 pre_art = ?,
                des_art = ?
                WHERE id_cli = ?';
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->nom_art,
                        $data->pre_art,
                        $data->des_art,
                        $data->id_cli
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

//     public function Registrar(usuario $data)
//     {
//         try {
//             $sql = 'INSERT INTO cliente (nom_art,cod_art,des_art,pre_art,img_art,cat_id)
//  VALUES (?,?,?,?,?,?)';
//             $this->pdo->prepare($sql)
//                 ->execute(
//                     array(
//                         $data->nom_art,
//                         $data->cod_art,
//                         $data->des_art,
//                         $data->pre_art,
//                         "ci",
//                         $data->cat_id
//                     )
//                 );
//         } catch (Exception $e) {
//             die($e->getMessage());
//         }
//     }
}
