<?php wp_head(); ?>

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178495677-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-178495677-1');
  </script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Laura Alonso</title>

<link rel="icon" href="<?php echo THEME_URL ?>/favicon.ico" sizes="16x16" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&display=swap" rel="stylesheet">



  <!-- Bootstrap core CSS -->


<link href="<?php echo THEME_URL ?>/resourse/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo THEME_URL ?>/resourse/fontawesome-free/css/all.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->

<link href="<?php echo THEME_URL ?>/css/coming-soon.css" rel="stylesheet">
<link href="<?php echo THEME_URL ?>/style.css" rel="stylesheet">


<script type="text/javascript">
window.cookieconsent_options = {"message":"Utilizamos cookies propias y de terceros para mejorar la experiencia del usuario a través de su navegación. Si continúas navegando aceptas su uso.","dismiss":"Entendido","theme":"dark-bottom"};
</script>
<script src="<?php echo THEME_URL ?>/resourse/jquery/cookieconsent.min.js"></script>

</head>

<body>


    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#"><b class="color-primary">Laura Alonso</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav" style="margin:auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Quien soy <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mi lado B</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cursos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">En la prensa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tienda L</a>
            </li>
        </ul>
          <span class="navbar-text">
            <a href="" type="button" data-toggle="modal" data-target="#modal-suscribirme" >Newsletter</a>
          </span>
          <span class="navbar-text">
            |
          </span>
          <span class="navbar-text">
            <a href="#form-contact">Contacto</a>
          </span>
      </div>
      </div>
    </nav>


   <div class="modal fade" id="modal-suscribirme" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 text-center">
                        <h2 class="color-primary mb-3">Mi Lado B</h2>
                        <p class="text-body">Un costado diferente con ideas, política internacional y nacional, liderazgo, cultura, literatura y sobre otros temas de interés.</p>
                        <hr class="mb-5 mt-5" style="width:50%">
                        <h3 class="color-primary mb-3">Suscribite a mi newsletter:</h3>
                        <p class="text-body news">Registrate para recibir adelanto y artículos exclusivos en tu casilla de correo.</p>
                        <div align="center" class="mt-4">
                           <?php echo do_shortcode('[mc4wp_form id="5"]') ?>  
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <img class="w-100 img-modal-news" src="<?php echo THEME_URL ?>/img/img-modal-newsletter.png">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

      <script type="text/javascript">
      $('#modal-suscribirme').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
   </script>

</body>