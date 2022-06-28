<!----------------- llama otros archivos php ---------------------------------> 
<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';


?>
<!----------------- Fin llama otros archivos php ---------------------------------> 

<!----------------- Linea verde debajo del menu ---------------------------------> 
<br>
        
        <?php if ($mensaje!= "") { ?>
        <div class="alert alert-success" >
        <?php echo $mensaje; ?>
            
            <a href="mostrarcarrito.php" class="badge badge-sucess"> Ver carrito </a>
            
        </div> 
        <?php }?>

        <hr>
<!----------------- Fin Linea verde debajo del menu ---------------------------------> 

<h3>  Ecopipo </h3>

<table class="table table-light table-bordered  text-center">
    <tbody>
        <tr>
            <th width="40%">¿Quíenes Somos?</th>
            
        </tr>
        <tr>
            <a href="home.php" class="logo me-auto text-center"><img src="https://i0.wp.com/ecopipo.com/wp-content/uploads/2020/01/logo-2020.png?fit=400%2C148&ssl=1  "  alt="" height="100"></a>
            <th width="30%">
            Ecopipo es una empresa 100% mexicana y 100% familiar. Apoyando el ambiente y a tu bolsillo    </br>
            </br>
            Los pañales ecológicos no solo son una excelente opción para el cuidado del medio ambiente, sino para tu bolsillo y las pompis de tu bebé. </br>
            </br>
A lo largo de sus primeros meses de desarrollo, un bebé necesita unos 6 mil pañales desechables antes de que sepa ir al baño. </br>
</br>
Sin embargo, todo el gasto y la contaminación por pañales desechables se pueden reducir al adquirir pañales ecológicos de tela. </br>
</br>
Estas prendas están diseñadas para retener las necesidades fisiológicas del bebé y son hechas de materiales reutilizables. </br>
</br>
Dentro del mercado, hay variedad de pañales ecológico; la mayoría es maquilada en el extranjero. </br>
</br>
Sin embargo, los productos de Ecopipo son 100 por ciento mexicanos y son exportados a Ecuador, Perú, Argentina, Guatemala y en todas las ciudades de Reino Unido.</th>
           
        </tr>
        <tr>
        <th width="40%">  <a href="home.php" class="img-center"><img src=" https://mujermexico.com/wp-content/uploads/2020/10/Ecopipo-la-empresa-mexicana-de-pa%C3%B1ales-ecol%C3%B3gicos.jpg     "  alt="" height="600"></a> </th>
        </tr>
        </tbody>


</table>








<!----------------- LLamada al pie de Pagina ---------------------------------> 

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>


<?php


include 'templates/pie.php';
?>
<!----------------- Fin LLamada al pie de Pagina ---------------------------------> 