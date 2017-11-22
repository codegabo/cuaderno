<?php
require 'model/readall.php';
$idguia=$data['id_guia'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Cuaderno</title>
   <meta name="title" content="Gabo's Web Page">
   <meta name="description" content="Gabo's Web Page the best as is possible">
   <meta name="author" content="Juan Gabriel Mogollón Martínez">
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="google-site-verification" content="uxyOjfseMlhhDOK5lcxJRCqvKwUN9wCZ824LAaWii7w" />
   <!--<link rel="canonical" href="http://gabrielmogollon.com/index.html" />-->
   <!--<base href="https://www.gabrielmogollon.com/index.html"/>-->
   <link href="https://file.myfontastic.com/6GwqSE8XRsXZbF4AF8dQHB/icons.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
   <link rel="stylesheet" href="css/prism.css">
   <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<input type="checkbox" id="show-menu"/>
<header class="header-container">
   <div class="title-container">
      <h1 class="title-course">
          <?php
          $conexion=mysql_connect("localhost","root","");
          mysql_select_db("cuaderno",$conexion);
          $sql=mysql_query("SELECT * FROM guia WHERE id = '$idguia'");
          while($res=mysql_fetch_array($sql)){
             echo $res['nombre'];
          }
          ?></h1>
      <label for="show-menu" class="label-menu">
         <div class="icon-menu"></div>
      </label>
   </div>
   <div class="widgets-header">
      <button class="new-note widget"><p>Agregar notas</p> <div class="icon-add"></div></button>
      <input type="radio" id="mostrar-modal" name="modal"/>
      <label for="mostrar-modal" class="new-entry">
         <div class="icon-add"></div>
         Agregar entrada
      </label>
      <div id="modal">
         <div class="modal-info">
            <?php
               echo '<iframe src="new_entry.php?id='.$idguia.'" frameborder="0"></iframe>';
            ?>
         </div>
      </div>

      <input type="radio" id="cerrar-modal" name="modal"/>
      <label for="cerrar-modal" class="hide-entry">
         <div class="icon-hide"></div>
         Ocultar nueva entrada
      </label>
   </div>
</header>
<div class="menu-container">
   <div class="menu-container__titulo">
      <h1 class="menu-container__titulo__courses">Guías</h1>
      <button class="menu-container__titulo__new-course widget">Nueva Guía</button>
   </div>
   <nav class="menu">
      <ul class="menu__list">
          <?php
          $pdo = Database::connect();
          $sql = 'SELECT * FROM guia ORDER BY id ASC';
          foreach ($pdo->query($sql) as $row) {
              echo'<a href="guia.php?id='.$row['id'].'" class="clear_link"><li class="menu__list__item"><h2 class="subtitle__item">'.$row['nombre'].'</h2></li></a>';
          }
//          ?>
      </ul>
   </nav>
</div>
<article class="notes">
   <details class="notes__details">
      <summary class="notes__details__titulo">Notas del contenido</summary>
      <ul class="notes__details__list">
         <li class="notes__details__list__item">Notas en lista</li>
         <li class="notes__details__list__item">Notas en listaNotas en listaNotas en lista Notas en listaNotas en lista Notas en lista Notas en lista Notas en lista</li>
         <li class="notes__details__list__item">Notas en listaNotas en listaNotas en lista Notas en listaNotas en lista Notas en lista Notas en lista Notas en lista</li>
         <li class="notes__details__list__item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias animi blanditiis, culpa cupiditate eum necessitatibus non odit, quaerat totam vel velit vero, voluptatum. Alias cumque error explicabo laudantium molestiae!</li>
      </ul>
   </details>
</article>
<main class="main-container">
   <div class="entry-container">
       <?php
       $sql=mysql_query("SELECT * FROM entrada WHERE id_guia = '$idguia' ORDER BY id DESC");
       while($res=mysql_fetch_array($sql)){  ?>
      <h2 class="title-entry"><?php echo $res['titulo']; ?></h2>
      <p class="title-info"><?php echo $res['descr']; ?></p>
      <p class="subtitle-info"><?php echo $res['cont']; ?></p>
       <?php   }  ?>
   </div>
</main>
<script src="js/prism.js"></script>
</body>
</html>