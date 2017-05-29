
<?php
    if($_POST){
        $conexion=mysqli_connect("mysql.hostinger.es", "u445728939_uya", "uya112233", "u445728939_uya") or
          die("Problemas con la conexión");

        $nombre = htmlentities($_POST["usuario"]);
        $pass = htmlentities($_POST["clave"]);

        $registros=mysqli_query($conexion,"SELECT * 
                          FROM usuarios 
                          WHERE name='$nombre';") or
          die("Problemas en el select:".mysqli_error($conexion));

        if(($row = mysqli_fetch_row($registros)) && $row[2] == $pass){ 
          session_start();
          $_SESSION["autentica"] = "SIP";
          $_SESSION["usuarioactual"] = $nombre;
          header ("Location: apuntes.php");
        }else{
          header ("Location: error.php");
        }
        mysqli_close($conexion);
      }
?>
