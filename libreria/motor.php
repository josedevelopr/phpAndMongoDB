<?php session_start();


    function verificarSesion()
    {   
        if(!isset($_SESSION['facil_app_user']))
        {
            echo '<script> window.location="login.php"; </script>';
            exit();
        }
        
    }

    function usuarioActivo()
    {
        $rs = false;
        if(isset($_SESSION['facil_app_user']))
        {
            $rs = $_SESSION['facil_app_user'];
        }
        return $rs;
    }

    function verificarUsuario($datos)
    {
        //Instanciando un objeto de mongoDB
        $m = new MongoClient();
        //La conexion 
        $usuarios = $m->selectCollection('lareal','usuarios');
        //cuando encuentre datos 
        $usrs = $usuarios->find($datos);

        $usr = $usrs->getNext();

        if($usrs)
        {
            $_SESSION['facil_app_user'] = $usr;
            return true;
        }
        return false;
    }
?>

