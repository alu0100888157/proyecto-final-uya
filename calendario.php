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
              <li><a href="apuntes.php" aria-required='true'>Apuntes</a></li>
              <li><a href="profesora.php" aria-required='true'>Profesora</a></li>
              <li><a href="alumnos.php" aria-required='true'>Alumnos</a></li>
              <li><a href="novedades.php" aria-required='true'>Novedades</a></li>
              <li><a href="novedades_crear.php" aria-required='true'>Crear Notificacion</a></li>
              <li><a href="calendario.php" aria-required='true'>Calendario</a></li>
              <li><a href="salir.php" aria-required='true'>Salir</a></li>
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

              <!-- Informacion Central -->

              <h3 class="center grey-text text-darken-2"><strong tabindex="0">Calendario Académico</strong></h3><hr><br>

              <h5>mayo de 2017</h5>
              <!--Creamos un contenedor aquí, con s7-->
              <table class="bordered" class="col s12 m8 l9">
                <thead>
                  <tr>
                    <!-- cada uno de los th ponemos que sea bloque 1-->
                      <th class="col s2 m2 l2">Lun</th>
                      <th class="col s2 m2 l2">Mar</th>
                      <th class="col s2 m2 l2">Mié</th>
                      <th class="col s2 m2 l2">Jue</th>
                      <th class="col s2 m2 l2">Vie</th>
                      <th class="col s1 m1 l1">Sáb</th>
                      <th class="col s1 m1 l1">Dom</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="col s2 m2 l2" tabindex="0">1 
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">2 
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">3 
                      <br>
                        <p>Entrega PHP</p>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">4 
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">5 
                      <br>
                      <br>
                    </th>
                    <th class="col s1 m1 l1" tabindex="0">6 
                      <br>
                      <br>
                    </th>
                    <th class="col s1 m1 l1" tabindex="0">7 
                      <br>
                      <br>
                    </th>
                  </tr>
                  <tr>
                    <th class="col s2 m2 l2" tabindex="0">8 
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">9 
                      <br>
                        <p>Revisión proyecto</p>

                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">10  
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">11  
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">12  
                      <br>
                      <br>
                    </th>
                    <th class="col s1 m1 l1" tabindex="0">13  
                      <br>
                      <br>
                    </th>
                    <th class="col s1 m1 l1" tabindex="0">14  
                      <br>
                      <br>
                    </th>
                  </tr>
                  <tr>
                    <th class="col s2 m2 l2" tabindex="0">15  
                      <br>
                      <p>Entrega test A/B</p>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">16  
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">17  
                      <br>
                      <p>Examen UyA</p>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">18
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">19  
                      <br>
                      <br>
                    </th>
                    <th class="col s1 m1 l1" tabindex="0">20  
                      <br>
                      <br>
                    </th>
                    <th class="col s1 m1 l1" tabindex="0">21  
                      <br>
                      <br>
                    </th>
                  </tr>
                  <tr>
                    <th class="col s2 m2 l2" tabindex="0">22
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">23  
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">24  
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">25
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">26  
                      <br>
                        <p>Entrega de nota</p>
                      <br>
                    </th>
                    <th class="col s1 m1 l1" tabindex="0">27
                      <br>
                      <br>
                    </th>
                    <th class="col s1 m1 l1" tabindex="0">28  
                      <br>
                      <br>
                    </th>
                    <tr>
                    <th class="col s2 m2 l2" tabindex="0">29  
                      <br>
                        <p>1º Convocatoria UyA</p>

                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">30  
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2" tabindex="0">31
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2">  
                      <br>
                      <br>
                    </th>
                    <th class="col s2 m2 l2">  
                      <br>
                      <br>
                    </th>
                    <th class="col s1 m1 l1">  
                      <br>
                      <br>
                    </th>
                    <th class="col s1 m1 l1">  
                      <br>
                      <br>
                    </th>
                  </tr>
                  </tr>
                </tbody>
              </table>
              </div>
              </div>
            </div>
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
      