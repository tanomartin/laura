<?php
/*
Template Name: home
*/
?>

<body>

    <?php get_header(); ?>


<div class="container"> <!-- h-100 ver si sacamos este container !-->
	<div class="row" style="height:100vh" > <!--h-100!-->
        <div class="col-lg-6 mt-0" style="padding-right:0px;padding-left:0px">
          <div class="img-hero-laura" style="position:relative">

        <div class="col-lg-8 col-md-8" style="position:absolute;bottom:20px;text-align:center;z-index:100">
          
          <h1 class="title-mobile">Laura Alonso</h1>
        

        </div>
  <div class="overlay"></div>
          </div>
          <!--
          <div class="masthead-content text-white py-5 py-md-0">
            <img class="w-100"src="<?php echo THEME_URL ?>/img/img-home.jpg">
          </div>
          !-->


        </div>



        <div class="col-lg-6 my-auto text-center" >
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-4 titulo color-primary">Laura Alonso</h1>
            <p class="sub-text text-center p-mobile">Consultora especializada en políticas de buen gobierno y transformaciones institucionales. Acompaño líderes, gobiernos y empresas. Analista política. Docente y tallerista.</span> 
            </p>
            <button class="text-submit mt-5">Conoceme</button>
          </div>
        </div>


      <div class="social-icons">
        <ul class="list-unstyled text-center mb-0">
          <li class="list-unstyled-item">
            <a href="https://twitter.com/lauritalonso" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="40.625" height="40.625" viewBox="0 0 40.625 40.625">
                  <g>
                      <path fill="#fff" stroke="#bababa" stroke-linecap="round" stroke-linejoin="round" d="M813.02 960.278q0 5.751-.133 8.27a16.711 16.711 0 0 1-.752 4.378 10.353 10.353 0 0 1-6.28 6.28 16.721 16.721 0 0 1-4.378.752q-2.521.132-8.27.133t-8.27-.133a14.462 14.462 0 0 1-4.378-.84 9.44 9.44 0 0 1-3.848-2.344 10.282 10.282 0 0 1-2.432-3.848 16.662 16.662 0 0 1-.751-4.378q-.133-2.521-.133-8.27t.133-8.27a16.667 16.667 0 0 1 .751-4.378 10.352 10.352 0 0 1 6.28-6.279 16.715 16.715 0 0 1 4.378-.752q2.52-.132 8.27-.132t8.27.132a16.715 16.715 0 0 1 4.378.752 10.352 10.352 0 0 1 6.28 6.279 18.1 18.1 0 0 1 .8 4.423q.083 2.477.085 8.225z" transform="translate(-43.5 -384.719) translate(-729.395 -555.247)"/>
                      <path fill="#ff9300" d="M818.715 977.933a2.175 2.175 0 0 1 .036.463 10.553 10.553 0 0 1-1.245 4.945 10.159 10.159 0 0 1-3.593 4.02 10.767 10.767 0 0 1-11.526 0q.391.036.889.036a7.406 7.406 0 0 0 4.66-1.6 3.471 3.471 0 0 1-2.187-.729 3.707 3.707 0 0 1-1.3-1.832 6.661 6.661 0 0 0 .676.036 4.737 4.737 0 0 0 1-.107 3.761 3.761 0 0 1-2.135-1.316 3.584 3.584 0 0 1-.854-2.348v-.071a3.509 3.509 0 0 0 1.672.5 4.141 4.141 0 0 1-1.209-1.352 3.622 3.622 0 0 1 .071-3.664 10.451 10.451 0 0 0 7.684 3.913 5.17 5.17 0 0 1-.071-.854 3.7 3.7 0 0 1 .5-1.868 3.659 3.659 0 0 1 1.351-1.37 3.611 3.611 0 0 1 1.85-.5 3.56 3.56 0 0 1 1.512.32 4.225 4.225 0 0 1 1.227.854 7.592 7.592 0 0 0 2.383-.889 3.708 3.708 0 0 1-1.636 2.063 8 8 0 0 0 2.135-.6 8.207 8.207 0 0 1-1.89 1.95z" transform="translate(-43.5 -384.719) translate(-747.058 -575.821)"/>
                  </g>
              </svg>
            </a>
            <li class="list-unstyled-item">
              <a href="https://www.instagram.com/lauritalonso/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40.625" height="40.625" viewBox="0 0 40.625 40.625">
                    <defs>
                        <style>
                            .cls-2{fill:#ff9300}
                        </style>
                    </defs>
                    <g id="Group_34" transform="translate(-43.5 -455.22)">
                        <path id="Path_3" fill="#fff" stroke="#bababa" stroke-linecap="round" stroke-linejoin="round" d="M506.02 960.278q0 5.751-.133 8.27a16.712 16.712 0 0 1-.752 4.378 10.353 10.353 0 0 1-6.28 6.28 16.719 16.719 0 0 1-4.378.752q-2.521.132-8.27.133t-8.27-.133a14.461 14.461 0 0 1-4.378-.84 9.44 9.44 0 0 1-3.848-2.344 10.286 10.286 0 0 1-2.432-3.848 16.665 16.665 0 0 1-.751-4.378q-.133-2.521-.133-8.27t.133-8.27a16.669 16.669 0 0 1 .751-4.378 10.352 10.352 0 0 1 6.28-6.279 16.714 16.714 0 0 1 4.378-.752q2.52-.132 8.27-.132t8.27.132a16.713 16.713 0 0 1 4.378.752 10.352 10.352 0 0 1 6.28 6.279 18.105 18.105 0 0 1 .8 4.423q.083 2.477.085 8.225z" transform="translate(-422.395 -484.745)"/>
                        <g id="Group_2" transform="translate(53.641 462.922)">
                            <path id="Path_4" d="M510.04 971.224a10.231 10.231 0 0 0-3.715-3.715 10.118 10.118 0 0 0-10.172 0 10.214 10.214 0 0 0-3.715 3.715 10.12 10.12 0 0 0 0 10.172 10.19 10.19 0 0 0 3.715 3.715 10.12 10.12 0 0 0 10.172 0 10.207 10.207 0 0 0 3.715-3.715 10.117 10.117 0 0 0 0-10.172zM505.927 981a6.62 6.62 0 1 1 1.946-4.688 6.392 6.392 0 0 1-1.946 4.688z" class="cls-2" transform="translate(-491.068 -963.308)"/>
                            <path id="Path_5" d="M542.219 959.6a2.377 2.377 0 1 0-1.681 4.069 2.15 2.15 0 0 0 1.636-.708 2.754 2.754 0 0 0 .752-1.68 2.3 2.3 0 0 0-.707-1.681z" class="cls-2" transform="translate(-519.753 -958.895)"/>
                        </g>
                    </g>
                </svg>
              </a>
            </li>	
          </li>

          <li class="list-unstyled-item">
            <a href="https://www.facebook.com/lauritalonso" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="40.625" height="40.625" viewBox="0 0 40.625 40.625">
                  <g>
                      <path fill="#fff" stroke="#bababa" stroke-linecap="round" stroke-linejoin="round" d="M342.02 960.278q0 5.751-.133 8.27a16.708 16.708 0 0 1-.752 4.378 10.353 10.353 0 0 1-6.28 6.28 16.72 16.72 0 0 1-4.378.752q-2.521.132-8.27.133t-8.27-.133a14.461 14.461 0 0 1-4.378-.84 9.441 9.441 0 0 1-3.848-2.344 10.286 10.286 0 0 1-2.432-3.848 16.662 16.662 0 0 1-.751-4.378q-.133-2.521-.133-8.27t.133-8.27a16.667 16.667 0 0 1 .751-4.378 10.351 10.351 0 0 1 6.28-6.279 16.714 16.714 0 0 1 4.378-.752q2.52-.132 8.27-.132t8.27.132a16.714 16.714 0 0 1 4.378.752 10.352 10.352 0 0 1 6.28 6.279 18.1 18.1 0 0 1 .8 4.423q.083 2.477.085 8.225z" transform="translate(-43.5 -527.004) translate(-258.395 -412.962)"/>
                      <path fill="#ff9300" d="M344.565 986.4v-7.628H342v-3.031h2.565v-2.4a3.948 3.948 0 0 1 1.066-2.948 3.859 3.859 0 0 1 2.831-1.05 16.6 16.6 0 0 1 2.332.133v2.7h-1.6a1.547 1.547 0 0 0-1.233.4 1.708 1.708 0 0 0-.266 1.066v2.1h2.832l-.4 3.031H347.7v7.627z" transform="translate(-43.5 -527.004) translate(-282.524 -430.557)"/>
                  </g>
              </svg>
            </a>
          </li>

          <li class="list-unstyled-item">
            <a href="https://www.linkedin.com/in/lauraalonsoarg/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="40.625" height="40.625" viewBox="0 0 40.625 40.625">
                  <g>
                      <path fill="#fff" stroke="#bababa" stroke-linecap="round" stroke-linejoin="round" d="M668.02 960.278q0 5.751-.133 8.27a16.711 16.711 0 0 1-.752 4.378 10.352 10.352 0 0 1-6.28 6.28 16.719 16.719 0 0 1-4.378.752q-2.521.132-8.27.133t-8.27-.133a14.461 14.461 0 0 1-4.378-.84 9.44 9.44 0 0 1-3.848-2.344 10.287 10.287 0 0 1-2.432-3.848 16.667 16.667 0 0 1-.751-4.378q-.133-2.521-.133-8.27t.133-8.27a16.672 16.672 0 0 1 .751-4.378 10.352 10.352 0 0 1 6.28-6.279 16.714 16.714 0 0 1 4.378-.752q2.52-.132 8.27-.132t8.27.132a16.713 16.713 0 0 1 4.378.752 10.352 10.352 0 0 1 6.28 6.279 18.1 18.1 0 0 1 .8 4.423q.083 2.477.085 8.225z" transform="translate(-43.5 -598.788) translate(-584.395 -341.178)"/>
                      <path fill="#ff9300" d="M662.455 974.672a1.82 1.82 0 1 1 1.266-.533 1.726 1.726 0 0 1-1.266.533zM663.987 986h-3.1v-9.96h3.1zm11.592 0h-3.1v-4.863a5.383 5.383 0 0 0-.2-1.732 1.4 1.4 0 0 0-1.432-.9 1.559 1.559 0 0 0-1.5.8 3.717 3.717 0 0 0-.333 1.766V986h-3.065v-9.96h2.965v1.36h.033a2.662 2.662 0 0 1 1.066-1.1 3.847 3.847 0 0 1 4.9.833 6.741 6.741 0 0 1 .666 3.4z" transform="translate(-43.5 -598.788) translate(-604.05 -359.827)"/>
                  </g>
              </svg>
            </a>
          </li>
        </ul>
      </div> <!--FIN SOCIAL ICONS!-->



  </div>
     <hr class="mb-5" style="width:100%">

</div>


<section class="MiLadoB">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2 class="color-primary">Mi Lado B</h2>
        <p class="sub-text text-center">Un costado diferente</p>
      </div>
    </div>

    <div class="row text-left mb-5">
      <div class="col-md-8 offset-md-2 mb-4">
        <p class="text">Última publicación <span class="button-o">Ver todas</span></p>
      </div>
      <div class="col-md-8 offset-md-2">
        <div style="width:100%;height:300px;background-color:#FFF5E8;border-radius:10px">
        </div>
      </div>


    </div>

    <div class="row mb-5">
      <div class="col-lg-12 mt-4" style="background-color:#F6F6F6;border-radius:10px;padding:40px;margin-left:15px;margin-right:15px">
        <div class="row">
        
          <div class="col-md-5 offset-md-1">
            <h3 class="color-primary mb-4">Suscribite a mi newsletter</h3>
            <p class="text-body news">Registrate para empezar a recibir adelantos y artículos exclusivos en tu casilla de correo.</p>
          </div>

          <div class="col-lg-6 text-center align-self-center">
            <button type="button" data-toggle="modal" data-target="#modal-suscribirme" class="text-submit btn-primary ">Suscribirme</button>



          </div>
        </div>
      </div>
    </div>


  <hr class="mb-5" style="width:100%">
  </div>
</section>


</section>


  
<section class="bifurcador">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-4">
        <h3 class="color-primary mb-4">Cursos</h3>
        <p class="text-body">Asesoramiento profesional y capacitaciones</p>
        <button class="button-submit-small">Conocé más</button>
      </div>
      <div class="col-lg-4" style="border-left:1px solid rgba(0,0,0,0.1)">
        <h3 class="color-primary mb-4">En la Prensa</h3>
        <p class="text-body">Columnas, entrevistas y conferencias</p>
        <button class="button-submit-small">Enterate</button>
      </div>
      <div class="col-lg-4" style="border-left:1px solid rgba(0,0,0,0.1)">
        <h3 class="color-primary mb-4">Tienda L</h3>
        <p class="text-body">Libros, objetos y accesorios que me encantan</p>
        <button class="button-submit-small">Entrá y mirá</button>
      </div>
    </div>

  </div>

</section>


<section id="form-contact" class="Contacto mt-5" style="background-color: #F6F6F6">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 text-center" style="margin-top:70px">
        <img style="width:50%" src="<?php echo THEME_URL ?>/img/laura-alonso-contact.png">
        <p class="text-body-m color-primary mt-4 mb-2" style="font-weight:bold"><b>Laura Alonso</b></p>
        <p class="text-body-m">Conferencista, mentora, consultora, escritora y motivadora de transformaciones y liderazgos</p>
      </div>
      <div class="col-lg-9" style="margin-top:70px">
         <h3 class="color-primary mb-2">Escribime</h3>
        <p class="text-body mb-4">Contactame para saber más sobre mis servicios de asesoramiento profesional y conocer la programación de mis cursos y talleres.</p>
        <form>
          <div class="row">
            <div class="col-lg-6">
              <input class="input-form" type="text" placeholder="Nombre y Apellido" style="width:100%;background-color:#fff">
            </div>
            <div class="col-lg-6">
              <input class="input-form" type="email" placeholder="E-mail"  style="width:100%;background-color:#fff">
            </div>
            <div class="col-lg-12 mt-4">
              <textarea class="input-form" type="text" placeholder="Escribí tu mensaje"  style="width:100%;min-height:100px;background-color:#fff"></textarea>
            </div>
            <div class="col-lg-12">
              <button  class="text-submit mt-4 mb-5" style="width:50%!important">Enviar mensaje</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>







<?php get_footer(); ?>







</body>

