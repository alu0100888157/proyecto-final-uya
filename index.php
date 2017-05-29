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
        <a href="index.html" class="brand-logo">UyASwap</a>
      </div>
    </nav>

    <div class="container">
      <div class="row">

      <div class="col s12 m4 l3"> 
        <div class="card-panel amber lighten-5 black-text">
          <h5 class="left" tabindex="0">Registrarse</h5>
          <?php
            if($_GET){
                $conexion=mysqli_connect("mysql.hostinger.es", "u445728939_uya", "uya112233", "u445728939_uya") or
                  die("Problemas con la conexión");

                $nombre = $_GET['nombre'];
                $apellidos = $_GET['apellidos'];
                $dni = $_GET['dni'];
                $email = $_GET['email'];
                $password = $_GET['password'];
                if($nombre != '' && $apellidos != '' && $dni != '' && $email != '' && $password != ''){
                  $registros=mysqli_query($conexion,"INSERT INTO usuarios (name, pass, apellido, correo, dni) VALUES('$nombre' ,'$password', '$apellidos', '$email', '$dni')") or
                    die("Problemas en el select:".mysqli_error($conexion));
                }else{
                  header("Location: error_registro.php");
                }
                mysqli_close($conexion);
              }
            ?>
            
            <form method='get' action='index.php'>
              <input onblur="Verifica_nom()" type='text' name='nombre' placeholder='Nombre...' id='nombre' aria-required='true'>
              <div id="capa2"> </div>
              <input onblur="Verifica_ap()" type='text' name='apellidos' placeholder='Apellidos...' id='apellido' aria-required='true'>
              <div id="capa3"> </div>
              <input  onblur="Verifica2();" type='text' name='dni' placeholder='DNI...' id='dni' aria-required='true'>
              <div id="capa"> </div>
              <input type='email' name='email' placeholder='Correo...' id='email' aria-required='true'>
              <input onblur="Verifica_pass()" onkeypress="Verifica_pass()" onfocus="Verifica_pass()" type='password' name='password' placeholder='Contraseña...' id='password' aria-required='true'>
              <div id="capa4"> </div>
              <button class='btn waves-effect waves-light' title='Pincha para registrar' aria-describedby='Pincha para registrar' type='submit' name='action'>Registrar
              <i class='material-icons right'>send</i>
              </button>
            </form>
        </div>
      </div>
      <div class="col s12 m8 l9"> 
        <div class="card-panel foro">
            <div class="central">

              <!-- Informacion Central -->

              <h3 class="center grey-text text-darken-2"><strong tabindex="0">[Bienvenido a UyASwaps]</strong></h3><hr><br>

              <p align="justify" tabindex="0">
                UyASwap es una plataforma online de la asignatura de Usabilidad y Accesibilidad del 3º Curso 2017 de Ingeniería Informática de la Universidad de La Laguna.
              </p>

              <p align="justify" tabindex="0">
                En UyASwap podrá estar al día de las ultimas novedades de la asignatura, podrá gestionar los apuntes, gestionar su propio calendario, crear incidencias y poder conocer las noticias de ultima hora.
              </p>

              <p align="justify" tabindex="0">
                Para poder usar la plataforma necesita estar matriculado en la asignatura, y estar registrado en la plataforma.
              </p>

              <p align="justify" tabindex="0">
                Si ya se encuentra registrado, inicie sesión a continuación.
              </p>


              <form action="control.php" method="post" id="form"><br>
                Usuario: <input type="text" name="usuario" id="usuario" placeholder="Inserte usuario..." /><br>
                Contraseña: <input type="password" name="clave" id="clave" placeholder="Inserte contraseña..." /><br>
                <button class='btn waves-effect waves-light' title='Iniciar Sesion' aria-describedby='Pincha para iniciar sesion' type='submit' name='action'>Iniciar Sesion
                <i class='material-icons right'>send</i>
                </button>
              </form>

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
      