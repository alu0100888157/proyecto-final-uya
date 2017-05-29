<? include("seguridad.php"); ?>
<!DOCTYPE html>
<meta charset="utf-8">
<html lang="es">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    
    <!--Add UyASwap.css-->
    <link media="screen" href="./css/UyASwap.css" type="text/css" rel="stylesheet">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  </head>
  <body>
    <!-- Menu Navegador -->
    <nav>
      <div class="nav-wrapper center-on-small-only">
        <a href="apuntes.php" class="brand-logo">UyASwap</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"> 
            <i class="material-icons">menu</i></a>           
            <ul role=”menubar” class="right hide-on-med-and-down">
              <li><a href="apuntes.php">Apuntes</a></li>
              <li><a href="profesora.php">Profesora</a></li>
              <li><a href="alumnos.php">Alumnos</a></li>
              <li><a href="novedades.php">Novedades</a></li>
              <li><a href="novedades_crear.php">Crear Notificacion</a></li>
              <li><a href="calendario.php">Calendario</a></li>
              <li><a href="salir.php">Salir</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li role=”menuitem”><a href="apuntes.php" tabindex="-1">Apuntes</a></li>
            <li role=”menuitem”><a href="profesora.php" tabindex="-1">Profesora</a></li>
            <li role=”menuitem”><a href="alumnos.php" tabindex="-1">Alumnos</a></li>
            <li role=”menuitem”><a href="novedades.php" tabindex="-1">Novedades</a></li>
            <li role=”menuitem”><a href="novedades_crear.php" tabindex="-1">Crear Notificacion</a></li>
            <li role=”menuitem”><a href="calendario.php" tabindex="-1">Calendario</a></li>
            <li role=”menuitem”><a href="salir.php" tabindex="-1">Salir</a></li>
          </ul>
        </div>
    </nav>

    <div class="container">
      <div class="row">

      <div class="col s12 m4 l3"> 
        <div class="card-panel amber lighten-5 black-text">
        <p><b>Bienvenido/a: <?php echo $_SESSION["usuarioactual"];  ?></b></p>
          <!--
          <h5 class="left" tabindex="0">Registrarse</h5>
          <form onsubmit="return Verifica2();" action="" method="get">
              <input type="text" name="nombre" placeholder="Nombre..." id="nombre" aria-required=”true”>
              <input type="text" name="apellidos" placeholder="Apellidos..." id="apellido" aria-required=”true”>
              <input type="text" name="dni" placeholder="DNI..." id="dni" aria-required=”true”>
              <input type="email" name="email" placeholder="Correo..." id="email" aria-required=”true”>
              <input type="password" name="password" placeholder="Contraseña..." id="password" aria-required=”true”>
              <button class="btn waves-effect waves-light" title="Pincha para registrar" aria-describedby="Pincha para registrar" type="submit" name="action">Registrar
              <i class="material-icons right">send</i>
              </button>
          </form><br>-->
          <h5 class="left" tabindex="0">Buscar Novedades</h5>
          <form id="buscador" name="buscador" method="post" action="novedades.php"> 
              <input id="buscar" name="buscar" type="search" placeholder="Buscar por alumno..." size="20px">
              <input class="btn" title="Pincha para buscar" aria-describedby="Pincha para buscar" aria-required=”true” type="submit" name="buscador" value="buscar">
          </form>
        </div>
      </div>

      <div class="col s12 m8 l9"> 
        <div class="card-panel foro">
            <div class="central">
              <?php
              if($_POST){
                  $conexion=mysqli_connect("mysql.hostinger.es", "u445728939_uya", "uya112233", "u445728939_uya") or
                    die("Problemas con la conexión");

                  $nombre = $_POST['buscar'];

                  $registros=mysqli_query($conexion,"SELECT * 
                                    FROM mensajes 
                                    WHERE nombre='$nombre';") or
                    die("Problemas en el select:".mysqli_error($conexion));
                  if(!$row = mysqli_fetch_row($registros)){
                    echo "<h5>La busqueda no ha encontrado coincidencias</h5><br><br>";
                  }else{
                  echo "<h5>Resultados de la búsqueda:</h5>";
                  echo "<table>";  
                  echo "<tr>";
                  echo "<th>Autor</th>";  
                  echo "<th>Mensaje</th>";
                  echo "<th>Fecha</th>";
                  echo "</tr>";  
                  do{   
                      echo "<tr>"; 
                      echo "<td>$row[1]</td>";  
                      echo "<td>$row[2]</td>"; 
                      echo "<td>$row[3]</td>";  
                      echo "</tr>";  
                  }while($row = mysqli_fetch_row($registros));
                  echo "</table><br><br>";
                }
                  mysqli_close($conexion);
                }
              ?>

        			<h3 class="center grey-text text-darken-2"><strong tabindex="0">Novedades</strong></h3><hr>
              <?php
                $conexion=mysqli_connect("mysql.hostinger.es", "u445728939_uya", "uya112233", "u445728939_uya") or
                  die("Problemas con la conexión");

                $registros=mysqli_query($conexion,"SELECT * 
                                  FROM mensajes") or
                  die("Problemas en el select:".mysqli_error($conexion));
                if(!$row = mysqli_fetch_row($registros)){
                  echo "<h4 tabindex='0'>Actualmente no hay mensajes.</h4>";
                }else{
                  do{   
                      echo "<br><b tabindex='0'>$row[1] - $row[3]</b>";
                      echo "<p tabindex='0'>$row[2]</p>";   
                  }while($row = mysqli_fetch_row($registros));
                }
                mysqli_close($conexion);
              ?>
              <br><br>
        		</div>     
        </div>
        </div>
      </div>
    </div> 
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".button-collapse").sideNav();
      });
    </script>
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>   
    <script type="text/javascript" src="./js/javascript.js"></script>
  </body>
</html>
      