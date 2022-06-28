<!----------------- llama otros archivos php ---------------------------------> 
<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';


?>
<!-----------------Fin llama otros archivos php ---------------------------------> 
        <br>
        
        <?php if ($mensaje!= "") { ?>
        <div class="alert alert-success" >
        <?php echo $mensaje; ?>
            
            <a href="mostrarcarrito.php" class="badge badge-sucess"> Ver carrito </a>
            
        </div> 
        <?php }?>
        <hr>
        
        <h3> Pañales Estanpados </h3>

        
    <!----------------- Fin Barra verde para ver el carrito ---------------------------------> 

    <!----------------- Estructura para mostrar los Productos en "cartas de informacion" ---------------------------------> 
    
    <!----------------- La estructura se va a dividir en 4 espacios el 5 inicia otra fila abajo ---------------------------------> 
       <div class="row">
        <?php
            $sentencia=$pdo ->prepare("SELECT * FROM `tblproductos`");
            $sentencia->execute();
            $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
           // print_r($listaProductos);
           
        ?>

            <!-- Producto  --> 
            <?php foreach($listaProductos as $producto){ ?>    <!-- Esta linea agarra toda la informacion del producto y lo guarda en una sola variable --> 

                <div class="col-3">
                <div class="card">
                <img 
                title="<?php echo $producto['Descripcion'];?>"
                alt="<?php echo $producto['Nombre'];?>"
                src="<?php echo $producto['Imagen'];?>"
                class="card-img-top" 
                data-bs-toggle="popover" 
                data-trigger="hover"
                data-content="<?php echo $producto['Descipcion'];?>"
                height="280px"
                
                

                >           
                <!-- Cuerpo donde viene la infor de cada producto --> 
                <div class="card-body">
                    <h5 class="card-title"><?php echo $producto['Nombre'];?>"</h5>    
                    
                    <h5 class="card-title">$<?php echo $producto['Precio'];?>"</h5>
                    <!-- boton del carrito Aqui tambien se encripto la info del carrito--> 
                    <form action="" method="post">

                    <input type="hidden" name="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                    <input type="hidden" name="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
                    <input type="hidden" name="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
                    <input type="hidden" name="cantidad" value="<?php echo openssl_encrypt(1 ,COD,KEY);?>">

                        <button class="boton dos"
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit" >  
                            <span>Agregar al carrito
                            </span> </button></div>

                    </form>
                    <!-- Fin boton del carrito --> 

                <!-- Fin Cuerpo donde viene la infor de cada producto --> 

            </div>
            </div>
            <?php } ?>

            <!-- Fin Producto  --> 
            
            

    <!----------------- Fin Estructura para mostrar los Productos en "cartas de informacion ---------------------------------> 

    </div>  


    <script>

        $(function () {
        $('[data-toggle="popover"]').popover()
        })

    </script>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>


<?php


include 'templates/pie.php';
?>
