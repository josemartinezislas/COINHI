<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
  <title>Corporación Internacional Hidalgo</title>
  <meta name="robots" content="index, follow">
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta name="google-site-verification" content="ez2smFUdSS1Bmr56O5OrtD2qzYdQKvWN9q6kSLG2z24" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="shortcut icon" type="image/x-icon" href="http://cdn.hidalgo.gob.mx/logo.png">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="description" content="Portal oficial de la Corporación Internacional Hidalgo" />
  <meta name="csrf-token" content="5xMoMUPoxaKcR6F4kMAIHKMhqEy7uq2ElUYOTPTmfvP/KWGMvokFGg7iExRxu1+BRxioDGTS+Pc9n9giF6U3fA==" />
  <link href= "https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" media="all" href="./assets/application.css" data-turbolinks-track="true" />
  <link rel="stylesheet" media="all" href="./assets/comunicacionSocial.css" data-turbolinks-track="true" />  
</head>
<body data-no-turbolink="true">
<?php 
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
    
    require_once 'navbars.php';

    require_once 'pag/' . $pagina . '.php';

    require_once 'footer.php';
 ?>

  <div id="fb-root"></div>
  
  <script src="/assets/application.js"></script>		
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132937718-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-132937718-1');
  </script>  
  <script type="text/javascript">
    $.ajax({
      type: "POST",
      url: "http://comunicacion-a.hidalgo.gob.mx/traer/notas",
      data: {},
      success: function(res){
        res.success.notas.forEach( function({title,descripcion,id,content,date,secretaria}, index) {
          let activ ="";
          if(index===0){
            activ = "active";
          }
          let img = "";
          content.forEach( function({type,urls},index){
            if(type==="Gallery" && urls.length === 1){
              img = urls[0];
            }
          });
          $('#innerCarousel').append('<div class="item '+activ+'"><a class="noticiasLink"  href="http://comunicacion-a.hidalgo.gob.mx/detalles/'+id+'" target="_blank"><div style="min-height:500px"><div class="noticiasBanner" style="background-image: url('+img+');background-size: cover;background-repeat: no-repeat; max-height:500px; min-height: 500px;width: 100%;background-color:#092432;background-position:center"><div class="informacionNoticia"><h5>'+title+'</h5><p>'+descripcion+'</p><p>Ir a Nota</p></div></div></div></a></div>');
        });
      },
      dataType: 'json'
    });
  </script>   
</body>
</html>