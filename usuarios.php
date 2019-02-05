<?php

    include 'libreria/motor.php';
    include 'header.php';

    verificarSesion();
?>
    <div class="container" style="margin-top:1%;">
        <h1>Formulario de usuarios</h1>
        <form action="" method="POST">        

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">         
                        <label for="email" >Email</label>           
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">         
                        <label for="nombre" >Nombre</label>           
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">         
                        <label for="clave" >Clave</label>           
                        <input type="text" name="clave" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Guardar"> 
                </div>
            </div>
            <fieldset style="margin-top:1%;">
                <legend>Usuarios registrados</legend>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Nombre</th>
                            <th>Clave</th>                            
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </fieldset>
        
        </form>
    </div>
    <?php
        include 'footer.php'
    ?>