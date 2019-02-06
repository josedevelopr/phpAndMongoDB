<?php

    include 'libreria/motor.php';
    include 'header.php';

    $mensaje="";
    if($_POST)
    {
        
        if(verificarUsuario($_POST))
        {
            echo '<script> window.location="./" </script>';
            exit();
        }
        else
        {
            $mensaje = "Usuario o clave no validos";
        }
        
    }

    
?>
    <form action="" method="POST" style="margin-top:50px;">        
        <div class="container" id="divLogin" style="margin:0 auto;">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" >
            </div>
            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="password" class="form-control" name="clave">
            </div>
            <div class="error" style="color:red;font-weight:bold;">
                <?php echo $mensaje; ?>
            </div>            
            <input type="submit" class="btn btn-primary" value="Entrar">
        </div>
    
    </form>    
<?php
        include 'footer.php'
?>