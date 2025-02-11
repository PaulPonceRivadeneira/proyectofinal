<?php
session_start();
if(isset($_REQUEST['enviar']))
{
        if(!empty($_POST['e-mail']and !empty($_POST['Contraseña'])))
        { 
            $usuario=$_POST['e-mail'];
            $clave=$_POST['Contraseña'];
            $sql=$conexion->query("select*from col_paul where Per_email='$usuario'and Per_Clave='$clave'");
            if(mysqli_num_rows($sql) > 0)
            {
                while ($fila=mysqli_fetch_array($sql))
                {$_SESSION["usu"]=$fila['Per_email'];
                 $_SESSION["cla"]=$fila['Per_Clave'];}
            mysqli_free_result($sql);
            header("");
            }
            else
            {
                echo"Alerta error de usuario o contraseña"
            }
        }
    }
?>