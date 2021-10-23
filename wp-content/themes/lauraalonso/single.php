    <!-- Masthead -->
    <div class="container" >
	<?php get_header(); ?>

   </div>




<!-- seccion noticias -->
<?php  
if( have_posts() ){
	the_post();
	$parent_id = get_the_ID(); ?>
	<section class="nota" style="background-color:#red;padding-top:150px;position:relative">
		<div class="container" style="padding-bottom:40px;">
  			<div class="row">
    			<div class="col-md-6 offset-md-1 ">
    				<a href="#"><p class="button-o text" style="display:inline-block;margin-left:0px;text-align:left">Volver a las notas</p></a>
		      		<!--<span style="float:right"><?php echo get_the_date('M d, Y'); ?></span>  La fecha la sacamos por el momento 
		      		<hr style="margin-top:40px;">  !-->
		      		
		      		<h1 class="color-primary text-left mb-4 mt-4"><?php the_title();?></h1>
		      		<p class="sub-text text-left" style="margin:0;width:100%"><?php echo get_post_meta($post->ID, 'bajada', true); ?></p>
		      		<!--<p class="text-body text-left"><?php echo get_post_meta($post->ID, 'resumen', true); ?></p>!--> <!--este es para resumen, para la otra pagina, acá no va!-->

		      		<div class="mt-5" style="width:50px;height:5px;background-color:#FF9300;margin-bottom:40px"></div>
		       		<span class="text-body-m text-left"><?php the_content(); ?> </span>
    			</div><!--Fin de la primera columna!-->



		<div class="col-md-4 offset-md-1 text-center border-left" style="padding-left:50px">


			<img src="<?php echo THEME_URL ?>/img/img-sidebar-laura-alonso.jpg" class="w-100">
			<h3 class="color-primary mb-2 mt-4">Suscribite a mi newsletter:</h3>
            <p class="text-body mb-4">Registrate para recibir adelantos y artículos exclusivos en tu casilla de correo.</p>


          	<div>
            <?php echo do_shortcode('[mc4wp_form id="5"]') ?>  
            </div>
          </div>


  			</div>


<hr class="mt-4 mb-4">

		</div> 



	</section>
<?php } ?>

<section class="MiLadoB">
  <div class="container">

    <div class="row text-left mb-5">
      <div class="col-md-8 offset-md-2 mb-4">
        <p class="text">Publicación siguiente <span class="button-o">Ver todas</span></p>
      </div>
      <div class="col-md-8 offset-md-2">
        <div style="width:100%;height:300px;background-color:#FFF5E8;border-radius:10px">
        </div>
      </div>


    </div>


  <hr class="mb-5" style="width:100%">
  </div>
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

<?php get_footer(); ?>

</body>
</html>