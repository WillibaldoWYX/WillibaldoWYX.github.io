<!----------------- llama otros archivos php ---------------------------------> 
<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>
<!-----------------Fin llama otros archivos php ---------------------------------> 

<!------------------ Metodo para conectar con la base de datos el carrito de compra ---------------------------------> 
<?php
//<!---Hace la conexion con la bd---> 
if ($_POST) {
    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];

    //<!---Recorre todos los elementos de la BD---> 

    foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
    }

    //<!---Sentencia SQL para insertar datos---> 

    $sentencia=$pdo->prepare("INSERT INTO `tblventas` 
        (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`)
        VALUES (null,:ClaveTransaccion , '',NOW() ,:Correo,:Total, 'pendiente');");

    //<!---Sentencia para obtener los datos ingresados en la pagina---> 

    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":Correo",$Correo);
    $sentencia->bindParam(":Total",$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();

    //<!---Sentencia SQL para insertar datos en el SQL en una nueva tabla--->  

    foreach ($_SESSION['CARRITO'] as $indice=>$producto) {
        $sentencia=$pdo->prepare("INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGANDO`) 
        VALUES (NULL,:IDVENTA ,:IDPRODUCTO ,:PRECIOUNITARIO,:CANTIDAD, '0');");
    
        //<!---Sentencia para obtener los datos ingresados en la pagina y guardarlos en la nueva BD--->

        $sentencia->bindParam(":IDVENTA",$idVenta);
        $sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
        $sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
        $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
        $sentencia->execute();
        
    }    

    echo "<h3>" .$total."</h3>";
}
?>
<!------------------ Fin Metodo para conectar con la base de datos el carrito de compra ---------------------------------> 

<!------------------ Pagina final de pago ---------------------------------> 

<div class="jumbotron text-center">
    <h1 class="display-4">!Paso Final!</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con paypal la cantidad de:
    <h4>$<?php echo number_format($total,2); ?>   </h4>    
    </p>
    
    <p>Los productos seran enviados a la direccion ingresada </br>
    <strong>(Para aclaraciones : 459 101 82 17 / 459 123 36 18) </strong>
    </p>
</div>

                            <button class="boton dos"
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit" >  
                            <span>Aceptar
                            </span> </button></div>

    

<!----------------- LLamada al pie de Pagina ---------------------------------> 

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>


<?php


include 'templates/pie.php';
?>
<!----------------- Fin LLamada al pie de Pagina ---------------------------------> 