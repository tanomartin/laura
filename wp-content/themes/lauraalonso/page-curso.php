<?php
/*
Template Name: curso
*/
?>


<body>
   <?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center" style="padding-top:150px;">
      <h1 class="color-primary titulo-landing">Consultoría</h1>
	  <p class="sub-text mt-4 mb-4" style="width:80%">Asesoro instituciones públicas, empresas, ONGs y líderes en las mejores prácticas internacionales de buen gobierno, transparencia, integridad, nuevas tecnologías e inteligencia artificial. </p>
<p class="sub-text mt-4 mb-4" style="width:80%">Escribime y trabajemos juntos una propuesta adaptada para vos.</p>

			<a href="#form-contact"><button class="text-submit mt-3 mb-5" style="width:auto!important;padding:0 2.5rem">Necesito asesoramiento</button></a>

<hr>


    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center mt-5">
      <h1 class="color-primary titulo-landing">Cursos y talleres</h1>
	  <p class="sub-text mt-4 mb-4" style="width:80%">Diseñé varios cursos y talleres sobre ideas políticas, instituciones, historia y liderazgo. Y además, sobre buen gobierno y políticas públicas. Pueden ser online o presencial, grupales o personalizados.</p>
<p class="sub-text mt-4 mb-4" style="width:80%">Además de los horarios pre-establecidos, pueden coordinarse otros especiales para un grupo particular, una empresa o una familia. </p>



    </div>
  </div>
</div>


<?php 
$args = array('showposts' => -1, 'post_type' => 'cursos');
$wp_query->query($args); ?>

<div class="container mt-5 ">
  <div class="row ">



<?php if ( have_posts() ) : // Si existen resultados ?>
    <?php while (have_posts()) : the_post(); // Mientra haya resultados, repite lo siguiente: 
          $thumbID = get_post_thumbnail_id( $post->ID );
          $url = wp_get_attachment_url( $thumbID );?>

 <!-- <div class="col-lg-6"> !-->
  	<div class="card-curso">
      <div class="large" style="height:200px;background-image:url(<?php echo $url; ?>);background-repeat:no-repeat;background-position:center center;background-size:cover;"></div>
            <div class="caption">
            <div class="p-3">
            	<h2 class="description"><?php the_title(); // El título ?></h2>
            	<div class="text-body-m text-left"><?php echo get_post_meta($post->ID, 'bajada', true); ?></div>
            	<a href="#"><button  class="button-submit-small" style="margin-left:0px;">Me interesa esta capacitación</button></a>

            </div>


          	<hr style="width:95%;margin-top:0px;margin-bottom:0px">

<div class="row p-3">

          	<div class="col-lg-6 mt-2">
          	
	          	<div class="data-cursos"><p class="label-data-cursos" style="display:inline-block">País: </p> <?php echo get_post_meta($post->ID, 'pais', true); ?></div>
            </div>
          	<div class="col-lg-6 mt-2">
	            <div class="data-cursos"><p class="label-data-cursos" style="display:inline-block">Inicio: </p> <?php echo get_post_meta($post->ID, 'inicio', true); ?></div>
	         </div>   

          	<div class="col-lg-6 mt-2">

	            <div class="data-cursos"><p class="label-data-cursos" style="display:inline-block">Duración: </p> <?php echo get_post_meta($post->ID, 'duracion', true); ?></div>
	          </div>  

	          <div class="col-lg-6 mt-2">
	            <div class="data-cursos"><p class="label-data-cursos" style="display:inline-block">Modalidad y Lugar: </p> <?php echo get_post_meta($post->ID, 'modalidad_y_lugar', true); ?></div>
	             </div>  

</div>



          </div>
		</div>
  	<!--</div>!-->
  <?php endwhile; ?>
<?php endif; ?>


    </div>  
    <hr>
  </div> <!-- fin col !-->




<section class="bifurcador">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-4 cards-bifurcador">
        <h3 class="color-primary mb-4">Quien soy</h3>
        <p class="text-body">Consultora, analista política, docente y tallerista</p>
        <a href="<?php echo SITE_URL."/quien-soy";?>"><button  class="button-submit-small">Conoceme</button></a>
      </div>
      <div class="col-lg-4 border-left cards-bifurcador" style="border-left:1px solid rgba(0,0,0,0.1)">
        <h3 class="color-primary mb-4">Mi Lado B</h3>
        <p class="text-body">Ideas, política, liderazgo, cultura y temas de interés</p>
        <a href="<?php echo SITE_URL."/ladob";?>"><button  class="button-submit-small">Descubrime</button></a>
      </div>
      <div class="col-lg-4 border-left" style="border-left:1px solid rgba(0,0,0,0.1)">
        <h3 class="color-primary mb-4">Prensa</h3>
        <p class="text-body">Columnas, entrevistas y conferencias</p>
        <a href="<?php echo SITE_URL."/prensas";?>" ><button class="button-submit-small">Enterate</button></a>
      </div>
    </div>

  </div>

</section>




 <?php include ('contact.php') ?>


<?php get_footer(); ?>



</body>