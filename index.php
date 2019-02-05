<?php
    
    include 'libreria/motor.php';
    include 'header.php';

    verificarSesion();

?>
    <div class="container" style="margin-top:1%;">
        <h1>Formulario de vehiculo</h1>
        <form action="" method="POST">        

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">         
                        <label for="matricula" >Matricula</label>           
                        <input type="text" name="matricula" class="form-control">
                    </div>
                    <div class="form-group">         
                        <label for="matricula" >Marca</label>           
                        <select name="marca" id="marca" class="form-control">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">         
                        <label for="transmision" >Transmision</label>           
                        <div class="form-control">
                            <label><input type="radio" name="transmision" value="atm">Automatico</label>
                            <label><input type="radio" name="transmision" value="mcn">Mecanico</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comentario">Comentario</label>
                        <textarea name="comentario" id="comentario" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Guardar"> 
                </div>
            </div>
            <fieldset style="margin-top:1%;">
                <legend>Vehiculo agregado</legend>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Transimision</th>
                            <th>Comentario</th>
                        </tr>
                    </thead>
                </table>
            </fieldset>
        
        </form>
    </div>
    <?php
        include 'footer.php'
    ?>