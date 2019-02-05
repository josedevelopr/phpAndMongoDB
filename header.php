<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <?php if(usuarioActivo()):?>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">       
            
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item mr-auto ">
                        <a href="./" class="nav-link text-light">Inicio</a>                    
                    </li>
                    <li class="nav-item mr-auto">
                        <a href="marcas.php" class="nav-link text-light">Marcas</a>                    
                    </li>
                    <li class="nav-item mr-auto">
                        <a href="./" class="nav-link text-light">Vehiculos</a>                    
                    </li>      
                    <li class="nav-item mr-auto">
                        <a href="usuarios.php" class="nav-link text-light">Usuarios</a>                    
                    </li>          
                </ul>            
                <a href="salir.php" class="btn btn-dark">Salir</a>               
            </div>
        </nav>
    <?php endif;?>

    

