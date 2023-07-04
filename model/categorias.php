<?php
class categoria
{
    //Atributo para conexión a SGBD
    private $pdo;
    //Atributos del objeto proveedor 
    public $nom_cat;
    //Método de conexión a SGBD.
    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $result = array();
            $stm = $this->pdo->prepare('SELECT * FROM categoria');
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id_cat)
    {
        try {
            $stm = $this->pdo->prepare('SELECT * FROM categoria WHERE id_cat = ?');
            $stm->execute(array($id_cat));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id_cat)
    {
        try {
            $stm = $this->pdo
                ->prepare('DELETE FROM categoria WHERE id_cat = ?');
            $stm->execute(array($id_cat));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = 'UPDATE categoria SET
 nom_cat = ?
 WHERE id_cat = ?';
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->nom_cat,
                        
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(categoria $data)
    {
        try {
            $sql = 'INSERT INTO categoria (nom_cat)
 VALUES (?,?,?,?,?,?)';
            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->nom_cat,
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}