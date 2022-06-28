<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecopipo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <!----------------- Estilos de los botones ---------------------------------> 


	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="Estilos.css">

    <!----------------- Estilos de los botones ---------------------------------> 

</head>

<body> 

    <!----------------- Menu principal donde va el logo y botones para las paginas ---------------------------------> 

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a href="home.php" class="logo me-auto"><img src="https://i0.wp.com/ecopipo.com/wp-content/uploads/2020/01/logo-2020.png?fit=400%2C148&ssl=1"  alt="" height="50"></a>
            <a class="navbar-brand" href="home.php">                 .             </a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">  -  </span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Productos <span class="sr-only">  -  </span></a>
                </li> 


                <li class="nav-item active">
                    <a class="nav-link " href="mostrarcarrito.php" tabindex="-1" aria-disabled="true">Carrito <?php
                        
                        ?></a>
                </li>
            </ul>
        </div>
    </nav>
    <!----------------- Fin Menu principal donde va el logo y botones para las paginas ---------------------------------> 

    <!----------------- Barra verde para ver el carrito ---------------------------------> 
    <br/>
    <br/>
    <div class="container ">