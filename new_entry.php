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
   <link href="https://file.myfontastic.com/6GwqSE8XRsXZbF4AF8dQHB/icons.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
   <link rel="stylesheet" href="css/prism.css">
   <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<main class="main-form">
   <fieldset class="form-container">
      <legend class="form__new-entry"><h2>Nueva entrada</h2></legend>
      <form action="controller/entrada.php" method="post" class="form" autocomplete="off">
         <label class="guia_entry-label">
            Guia<input type="text" name="id_guia" class="input" value="<?php echo $idguia; ?>"  readonly>
         </label>
         <label class="title_entry-label">
            Titulo de la entrada<input type="text" name="titulo" class="title-entry-input" required>
         </label>
         <label class="desc_entry-label">
            Breve descripción de la entrada
            <em class="content-warning">
               Describe de manera breve el contenido que presentaras en esta entrada.
            </em>
            <textarea name="descr" id="desc_entry-textarea" class="desc_entry-textarea" required></textarea>
         </label>
         <label class="cont_entry-label">
            Contenido de la entrada
            <em class="content-warning">
               <ul class="warning__list">
                  <li class="warning__list__item">Este recuadro puede ser usado como editor de codigo HTML y CSS</li>
                  <li class="warning__list__item">Para introducir fragmentos de codigo utiliza este orden de etiquetas <code>&lt;pre&gt;&lt;code&gt; &lt;/code&gt; &lt;/pre&gt;</code> .</li>
                  <li class="warning__list__item">Para entidades HTML reemplaza < y > por & lt; y & gt;
                  <li class="warning__list__item">Para los subtitulos de tu contenido usa la etiqueta <code>&lt;h3&gt; &lt;/h3&gt;</code> y para su contenido usa  <code>&lt;p&gt; &lt;/p&gt;</code> , no insertes clases o identificadores en estas etiquetas.</li>
                  <li class="warning__list__item">Si deseas insertar contenido embedido eres libre de hacerlo.</li>
               </ul>
            </em>
            <textarea name="cont" id="cont_entry-textarea" class="cont_entry-textarea" required><h3></h3>
<p></p>
<pre class="language-"><code></code></pre>
            </textarea>
         </label>
         <div class="buttons-form">
            <button type="submit" class="widget publish-botton">Publicar entrada</button>
            <input type="reset" class="widget" value="Limpiar publicación">
         </div>
      </form>
      <div class="success-warning"></div>
   </fieldset>
</main>
<script src="js/prism.js"></script>
</body>
</html>