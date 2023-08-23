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
    public $pri_cli;
    public $newpass1;
    public $newpass2;
    public $oldpass;

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
            $sql = "INSERT INTO cliente (nom_cli,ape_cli,cor_cli,pas_cli,fch_cli,cel_cli,dir_cli,user_cli, pri_cli)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
                        Privilegios::User->get()
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function almacenar ($id_cli)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM cliente WHERE id_cli = ?");
			$stm->execute(array($id_cli));
			return $stm->fetch(PDO::FETCH_OBJ);
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



    public function existeUsuario($user_cli)
    {
        $sql = 'SELECT COUNT(*) as total FROM cliente WHERE user_cli = :user_cli';
        $statement = $this->pdo->prepare($sql);
        $statement->bindParam(':user_cli', $user_cli);
        $statement->execute();

        $resultado = $statement->fetch(PDO::FETCH_ASSOC);
        return $resultado['total'] > 0;
     
    }

    public function existeContra()
    {
        $statement = $this->pdo->prepare('SELECT pas_cli FROM cliente WHERE id_cli = ?');
        $statement->execute(array($_SESSION["cliente_id"]));

        return $statement->fetchAll(PDO::FETCH_OBJ);
        // return $resultado['total'] > 0;
     
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

    public function Actualizar($user)
    {
        try {
            $sql = 'UPDATE cliente SET
                nom_cli = ?,             
                ape_cli = ?,             
                user_cli = ?,                
                cor_cli = ?,                         
                pri_cli = ?          
                WHERE id_cli = ?';
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $user->nom_cli,
                        $user->ape_cli,
                        $user->user_cli,
                        $user->cor_cli,
                        $user->pri_cli,
                        $user->id_cli
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

    public function Profile()
	{
		try {
			$result = array();
			$stm = $this->pdo->prepare('SELECT * FROM cliente WHERE id_cli = ? 
            
            ');
			$stm->execute( array($_SESSION['cliente_id']));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

    public function getByUser($texto) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM cliente WHERE user_cli LIKE ?");
            $stmt->execute(["%" . $texto . "%"]);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            return false;    
        }
    }

    public function cambioContra(){
        $hashContrasena = password_hash($_REQUEST['confirnNewpass'], PASSWORD_DEFAULT);
        try {
            $sql = 'UPDATE cliente SET pas_cli = ?    WHERE id_cli = ?';
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $hashContrasena,
                        $_SESSION['cliente_id']
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
