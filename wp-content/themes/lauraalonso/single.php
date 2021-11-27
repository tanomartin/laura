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
    				<a href="<?php echo SITE_URL."/ladob";?>"> <p class="button-o text" style="display:inline-block;margin-left:0px;text-align:left">Volver a las notas</p></a>
		      		<!--<span style="float:right"><?php echo get_the_date('M d, Y'); ?></span>  La fecha la sacamos por el momento 
		      		<hr style="margin-top:40px;">  !-->
		      		
		      		<h1 class="color-primary text-left mb-4 mt-4"><?php the_title();?></h1>
		      		<p class="sub-text text-left" style="margin:0;width:100%"><?php echo get_post_meta($post->ID, 'bajada', true); ?></p>
		      		<!--<p class="text-body text-left"><?php echo get_post_meta($post->ID, 'resumen', true); ?></p>!--> <!--este es para resumen, para la otra pagina, acá no va!-->

		      		<div class="mt-5" style="width:50px;height:5px;background-color:#FF9300;margin-bottom:40px"></div>
		       		<span class="text-body-m text-left"><?php the_content(); ?> </span>
    			</div><!--Fin de la primera columna!-->



		<div class="col-md-4 offset-md-1 text-center border-left-news">

 <hr class="divider-mobile">
			<img src="<?php echo THEME_URL ?>/img/img-sidebar-laura-alonso.jpg" class="w-100">
			<h3 class="color-primary mb-2 mt-5">Suscribite a mi newsletter:</h3>
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
        <p class="text">Publicación siguiente <a href="<?php echo SITE_URL."/ladob";?>" style="text-decoration:none"> <span class="button-o">Ver todas</span></a></p>
      </div>
      <div class="col-md-8 offset-md-2">
        <div style="background-color:#FFF5E8;margin-bottom:42px;padding:30px;border-radius:10px">

<?php  

$next_post = get_next_post();

 ?> 


<!--<div class="id-post-nota color-primary"><span>Nro #</span><?php echo $recent_posts[0]['ID'];?></div> lo saco porque no estaba trayendo ID!-->

<div  class="titulo-nota mb-2"><?php echo ($next_post->post_title);?></div>
 <div class="text-body-m mb-2"><?php echo get_post_meta($next_post->ID, 'bajada', true);?></div>

    <a class="text-body" href="<?php the_permalink();?>" style="color:#ff9300!important;text-decoration:underline;font-weight:bold">Mirá la publicación</a>       

        </div>
      </div>







    </div>


  <hr class="mb-1" style="width:100%">
  </div>
</section>
  
<section class="bifurcador">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-4 cards-bifurcador">
        <h3 class="color-primary mb-4">Cursos</h3>
        <p class="text-body">Asesoramiento profesional y capacitaciones</p>
        <a href="<?php echo SITE_URL."/curso";?>"><button  class="button-submit-small">Conocé más</button></a>
      </div>
      <div class="col-lg-4 border-left cards-bifurcador" style="border-left:1px solid rgba(0,0,0,0.1)">
        <h3 class="color-primary mb-4">En la Prensa</h3>
        <p class="text-body">Columnas, entrevistas y conferencias</p>
        <a href="<?php echo SITE_URL."/prensas";?>"><button  class="button-submit-small">Enterate</button></a>
      </div>
      <div class="col-lg-4 border-left" style="border-left:1px solid rgba(0,0,0,0.1)">
        <h3 class="color-primary mb-4">Tienda L</h3>
        <p class="text-body">Libros, objetos y accesorios que me encantan</p>
        <a href="#" ><button class="button-submit-small">Entrá y mirá</button></a>
      </div>
    </div>

  </div>

</section>

<?php get_footer(); ?>

</body>
</html>