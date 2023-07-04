<?php
class articulo
{
//Atributo para conexión a SGBD
 private $pdo;
//Atributos del objeto proveedor 
 public $id_art;
 public $nit;
public $cat_id;
 public $nom_art;
 public $cod_art;
 public $pre_art;
 public $des_art;
//Método de conexión a SGBD.
 public function __CONSTRUCT()
 {
	 try
	 {
	 $this->pdo = Database::Conectar();
	 }
	 catch(Exception $e)
	 {
	 die($e->getMessage());
	 }
 }

 public function Listar()
 {
	 try
	 {
	 $result = array();
	  $stm = $this->pdo->prepare('SELECT * FROM articulo');
	 $stm->execute();

	 return $stm->fetchAll(PDO::FETCH_OBJ);
	 }
	 catch(Exception $e)
	 {
	 die($e->getMessage());
	 }
 }

 public function Obtener($id_art)
 {
 try
 {
 $stm = $this->pdo->prepare('SELECT * FROM articulo WHERE id_art = ?');
 $stm->execute(array($id_art));
 return $stm->fetch(PDO::FETCH_OBJ);
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
 }

 public function Eliminar($id_art)
 {
 try
 {
 $stm = $this->pdo
 ->prepare('DELETE FROM articulo WHERE id_art = ?');
 $stm->execute(array($id_art));
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
 }

 public function Actualizar($data)
 {
 try
 {
 $sql = 'UPDATE articulo SET
 nom_art = ?,
 pre_art = ?,
 des_art = ?
 WHERE id_art = ?';
 $this->pdo->prepare($sql)
  ->execute(
 array(
 $data->nom_art,
 $data->pre_art,
 $data->des_art,
 $data->id_art
 )
 );
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
 }

 public function Registrar(articulo $data)
 {
 try
 {
 $sql = 'INSERT INTO articulo (nom_art,cod_art,des_art,pre_art,img_art,cat_id)
 VALUES (?,?,?,?,?,?)';
 $this->pdo->prepare($sql)
 ->execute(
 array(
 $data->nom_art,
 $data->cod_art,
 $data->des_art,
 $data->pre_art,
 "ci",
 $data->cat_id
 )
 );
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
 }

}