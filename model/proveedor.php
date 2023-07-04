<?php
class proveedor
{
//Atributo para conexión a SGBD
private $pdo;
//Atributos del objeto proveedor 
public $nit_pro;
public $rzs_pro;
public $cor_pro;
 public $dir_pro;
 public $cel_pro;

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
 //Sentencia SQL para selección de datos.
 $stm = $this->pdo->prepare("SELECT * FROM proveedor");
 //Ejecución de la sentencia SQL.
 $stm->execute();
 //fetchAll — Devuelve un array que contiene todas las filas del conjunto
 //de resultados
 return $stm->fetchAll(PDO::FETCH_OBJ);
 }
 catch(Exception $e)
 {
 //Obtener mensaje de error.
 die($e->getMessage());
 }
}

//Este método obtiene los datos del proveedor a partir del nit_pro
//utilizando SQL.
public function Obtener($nit_pro)
{
 try
 {
 //Sentencia SQL para selección de datos utilizando
 //la cláusula Where para especificar el nit_pro del proveedor.
 $stm = $this->pdo->prepare("SELECT * FROM proveedor WHERE nit_pro = ?");
 //Ejecución de la sentencia SQL utilizando el parámetro nit_pro.
 $stm->execute(array($nit_pro));
 return $stm->fetch(PDO::FETCH_OBJ);
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}

//Este método elimina la tupla proveedor dado un nit_pro.
public function Eliminar($nit_pro)
{
 try
 {
 //Sentencia SQL para eliminar una tupla utilizando
 //la cláusula Where.
 $stm = $this->pdo->prepare("DELETE FROM proveedor WHERE nit_pro = ?");
 $stm->execute(array($nit_pro));
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}

//Método que actualiza una tupla a partir de la cláusula
//Where y el nit_pro del proveedor.
public function Actualizar($data)
{
 try
 {
 //Sentencia SQL para actualizar los datos.
 $sql = "UPDATE proveedor SET
 	rzs_pro = ?,
	dir_pro = ?,
 	cel_pro = ?
 	WHERE nit_pro = ?";
 //Ejecución de la sentencia a partir de un arreglo.
 $this->pdo->prepare($sql)
 ->execute(
 array(
 $data->rzs_pro,
 $data->dir_pro,
 $data->cel_pro,
 $data->nit_pro
 )
 );
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}

//Método que registra un nuevo proveedor a la tabla.
public function Registrar(proveedor $data)
{
 try
 {
 //Sentencia SQL.
 $sql = "INSERT INTO proveedor (nit_pro,rzs_pro,cor_pro,dir_pro,cel_pro)
 VALUES (?, ?, ?, ?, ?)";
 $this->pdo->prepare($sql)
 ->execute(
 	array(
		 $data->nit_pro,
		 $data->rzs_pro,
		 $data->cor_pro,
		 $data->dir_pro,
		 $data->cel_pro,
		 )
 );
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}
}

