<?php
	include_once "modelo/usuario.php";

	$usuario = new Usuario();
	$usuario->setIdUsuario(1);
	$usuario->setNombre("Johants");
	$usuario->setApellido("Coreas");
	$usuario->setEmail("johants@gmail.com");
	$usuario->setTelefono(777777);
	$usuario->setUsuario("lloolol");
	$usuario->setDireccion("niD");
	$usuario->setClave(12123);
	$usuario->setFecha_mod("21-02-12");
	$usuario->setFecha_creacion("19-01-12");

	echo $usuario->getIdUsuario()." ".$usuario->getNombre()." ".$usuario->getApellido()." ".$usuario->getEmail()." ".$usuario->getTelefono()." ".$usuario->getUsuario()." ".$usuario->getDireccion()." ".$usuario->getClave()." ".$usuario->getFecha_mod()." ".$usuario->getFecha_creacion();

	echo "<br>--------------</br>"

?>

<!--esta fue la forma que yo entendi que lo completaramos jajajaaj xD y si pues ni modo xD -->

<?php
include_once "modelo/categoria.php";

$categoria = new Categoria();
	$categoria->setIdCategoria(2);
	$categoria->setNombre("Edgardo");
	$categoria->setDescripcion("blablabla");
	$categoria->setFecha_creacion("11-11-12");
	$categoria->setFecha_mod("10-10-13");
	echo $categoria->getIdCategoria()." ".$categoria->getNombre()." ".$categoria->getDescripcion()." ".$categoria->getFecha_creacion()." ".$categoria->getFecha_mod();
	echo "<br>--------------</br>"
?>

<?php
include_once "modelo/venta.php";
	$venta = new Venta();
	$venta->setIdVenta(3);
	$venta->setIdUsuario(5);
	$venta->setFecha("01-01-13");
	echo $venta->getIdVenta()." ".$venta->getIdUsuario()." ".$venta->getFecha();
	echo "<br>--------------</br>"
?>

<?php
include_once "modelo/detalleventa.php";
	$detalleventa = new DetalleVenta();
	$detalleventa->setIdDetalleVenta(33);
	$detalleventa->setIdVenta(13);
	$detalleventa->setIdProducto(31);
	$detalleventa->setPrecio("$45.55");
	$detalleventa->setCantida(455);
	$detalleventa->setFecha("12-01-10");	
	echo $detalleventa->getIdDetalleVenta()." ".$detalleventa->getPrecio()."".$detalleventa->getFecha()." ".$detalleventa->getCantida()." ".$detalleventa->getIdVenta()." ".$detalleventa->getIdProducto();
	echo "<br>--------------</br>"
?>
<?php
include_once "modelo/producto.php";
	$producto = new Producto();
	$producto->setIdProducto(22);
	$producto->setNombre("producto");
	$producto->setFecha_creacion("12-12-12");
	$producto->setPrecio("$75.54");
	$producto->setFecha_mod("01-01-13");
	$producto->setIdCategoria(12);
	echo $producto->getIdProducto()." ".$producto->getNombre()." ".$producto->getFecha_creacion()." ".$producto->getPrecio()." ".$producto->getFecha_mod()." ".$producto->getIdCategoria(); 
?>