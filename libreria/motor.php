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
?>