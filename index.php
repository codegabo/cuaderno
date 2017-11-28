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
   <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
   <header class="header-container hcindex">
      <div class="title-container tcindex">
         <h1 class="title-guide">Web Design Guides</h1>
         <div class="new-guide widget">Nueva Guía</div>
      </div>
   </header>
   <main class="mcindex">
      <div class="guides-container">
         <?php
           include 'model/db.php';
           $pdo = Database::connect();
           $sql = 'SELECT * FROM guia ORDER BY id ASC';
           foreach ($pdo->query($sql) as $row) {
            echo '<div class="box-container">';
            echo '<div class="name-guide">'.$row['nombre'].'</div>';
            echo '<img src="'.$row['img'].'" class="img-guide">';
            echo '<div class="date-guide">Fecha:</div>';
            echo '<div class="author-guide">Autor:</div>';
            echo '<a href="guia.php?id='.$row['id'].'" class="widget link-guide">Aprender de esta Guía</a>';
            echo '</div>';
         }
         Database::disconnect();
         ?>
      </div>
   </main>
   <section class="disqus-comments">
      <script id="dsq-count-scr" src="//gabrielmogollon.disqus.com/count.js" async></script>
      <div id="disqus_thread"></div>
      <script>

          /**
           *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
           *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
              var d = document, s = d.createElement('script');
              s.src = 'https://gabrielmogollon.disqus.com/embed.js';
              s.setAttribute('data-timestamp', +new Date());
              (d.head || d.body).appendChild(s);
          })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


   </section>
</body>
</html>