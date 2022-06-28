<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

<br>
<h3> Lista del carrito </h3>

<!----------------- IF para mostrar cuando el carrito tiene elementos ---------------------------------> 

<?php  if(!empty($_SESSION['CARRITO'])){  ?>

<!--- Creacion de la tabla del carrito ---> 

<table class="table table-light table-bordered">
    <tbody>
        <!--- Creacion de la Primera Fila tabla del carrito ---> 

        <tr>    
            <th width="40%">Descripcion</th>
            <th width="15%" class="text-center">cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Total</th>
            <th width="5%">--</th>
        </tr>

            <!--- Fin  Creacion de la Primera Fila tabla del carrito ---> 

        <?php $total=0; ?> 

        <!--- Ciclo Foreach para las demas Filas tabla del carrito --->   

        <?php foreach ($_SESSION['CARRITO'] as $indice=>$producto){   ?>
        
            <tr>
            <td width="40%"><?php echo $producto ['NOMBRE'] ?></td>
            <td width="15%" class="text-center"><?php echo $producto ['CANTIDAD'] ?></td>
            <td width="20%" class="text-center">$ <?php echo $producto ['PRECIO'] ?></td>
            <td width="20%" class="text-center">$ <?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
            <td width="5%">
            <!--- Formulario para que el boton elimine, de aqui lo mandamos a carrito.php --->   
            <form action="" method="post">

            <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
            
            <button 
            class="btn btn-danger" 
            type="submit"
            name="btnAccion"
            value="Eliminar"
            >Eliminar</button></td>
            </form>
            <!--- Fin Formulario para que el boton elimine, de aqui lo mandamos a carrito.php --->   

        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);  ?>
        
        <?php } ?>

        <!--- Ciclo Foreach para las demas Filas tabla del carrito --->   
        
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
            <td></td>
        </tr>

            <!--- Metodo para iniciar el proceso de pago con un boton--->   
                <tr>
                   <td colspan="5">  
                    <form action="pagar.php" method="post">
                        <div class="alert alert-success">
                                <div class="form-group">
                                    <label for="my-input">Direccion de Envio: </label>
                                    <input id="email" 
                                            name="email" 
                                            class="form-control" 
                                            type="address"
                                            placeholder="Escribe tu Domicilio"
                                            required
                                            >
                                </div>
                            <small id="emailHelp"
                            class="form-text text-muted"
                            >
                            ingresar Domicilio
                            </small>
                        </div> 
                    
                        <button class="btn btn-primary btn-lg btn-block" type="submit" value="proceder" name="btnAccion">
                        Pagar    
                        </button>

                    </form>
                   </td>
                </tr>

            <!--- Metodo para iniciar el proceso de pago con un boton --->   
    </tbody>
</table>
<?php }

//<!--- Fin Creacion de la tabla del carrito ---> 

//<! IF else para mostrar cuando el carrito no tiene elementos > 

else{ ?>
    <div class="alert alert-success" role="alert">
    <div class="  col-12 text-center" >No hay productos en el carrito...
    </div>        
<?php }

// <!----------------- Fin IF para mostrar cuando el carrito tiene elementos ---------------------------------> 

include 'templates/pie.php';
?>
