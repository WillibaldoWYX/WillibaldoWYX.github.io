<?php
// <!-- El session star es para mantener los datos en el carrito y cuando se quiera pagar se pasara a una BD --> 
session_start();

$mensaje="";


// <!-- Funcion al boton agregar y desencriptar los datos --> 
if(isset($_POST['btnAccion'])){
    switch ($_POST['btnAccion']){
        case 'Agregar':

            // <!-- Primer Dato --> 
            if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje.="  ID correcto  ".$ID."<br/>" ;
            }else{
                $mensaje.="  Ijole yo creo que no se va a poder... ID incorrecto".$ID."<br/>";
            }

            // <!-- Segundo Dato --> 
            if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
                $mensaje.="  Nombre correcto  ".$NOMBRE."<br/>";
            }else{
                $mensaje.="  Ijole yo creo que no se va a poder... Nombre incorrecto".$NOMBRE."<br/>";
            }

            // <!-- Tercer Dato --> 
            if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
                $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
                $mensaje.="  OK cantidad correcta  ".$CANTIDAD."<br/>";
            }else{
                $mensaje.="  Ijole yo creo que no se va a poder... cantidad incorrecta".$CANTIDAD."<br/>";
            }

            // <!-- Cuarto Dato --> 
            if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
                $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje.="  OK precio correcto  ".$PRECIO."<br/>";
            }else{
                $mensaje.="  Ijole yo creo que no se va a poder... precio incorrecto".$PRECIO."<br/>";
            }
            
            // <!-- Fin de los Dato --> 

    // <!-- guardar la informacion del boton en el Session start carrito --> 
        if(!isset($_SESSION['CARRITO'])){
            $producto=array(
                'ID' => $ID,
                'NOMBRE' => $NOMBRE,
                'CANTIDAD' => $CANTIDAD,
                'PRECIO' => $PRECIO,
            );
            $_SESSION['CARRITO'][0]=$producto;
            $mensaje= "producto agregado al carrito";
        }
        else{
            $NumeroProductos=count($_SESSION['CARRITO']);
            $producto=array(
                'ID' => $ID,
                'NOMBRE' => $NOMBRE,
                'CANTIDAD' => $CANTIDAD,
                'PRECIO' => $PRECIO,               
            );
            $_SESSION['CARRITO'][$NumeroProductos]=$producto;
            $mensaje= "producto agregado al carrito";
        }
     // <!--Fin guardar la informacion del boton en el Session start carrito --> 
        // $mensaje=print_r( $_SESSION,true);
        

    break;
// <!-- Funcion eliminar, recibe los datos y los desencripta  --> 
    case "Eliminar":

        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
            $ID=openssl_decrypt($_POST['id'],COD,KEY);
            
            foreach($_SESSION['CARRITO'] as $indice=>$producto){
                if ($producto['ID']==$ID) {
                    unset($_SESSION['CARRITO'][$indice]);
                    echo "<script>alert('Elemento borrado ... '); </script>";
                }
            }

        } else{
            $mensaje.="  Ijole yo creo que no se va a poder... ID incorrecto".$ID."<br/>";
        }
// <!-- Fin Funcion eliminar, recibe los datos y los desencripta  --> 
    break;

   }
}
// <!--Fin Funcion al boton agregar y desencriptar los datos --> 










?>