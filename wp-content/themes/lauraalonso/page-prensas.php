<?php
   /*
   Template Name: prensas
   */


   ?>


<body>
   <?php get_header(); ?>

<div class="container">
  <div class="row text-center " style="justify-content: space-around;">
    <div class="tab-bar-prensa">
      <h1 class="color-primary titulo-landing mb-5">En la Prensa</h1>

<nav class="prensa mb-4">
  <div class="nav flex-column nav-tabs" style="justify-content: center;" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-todos-tab" data-toggle="tab" href="#nav-todos" role="tab" aria-controls="nav-todos" aria-selected="true">Todas</a>
    <a class="nav-item nav-link" id="nav-opinion-tab" data-toggle="tab" href="#nav-opinion" role="tab" aria-controls="nav-opinion" aria-selected="false">Opinión</a>
    <a class="nav-item nav-link" id="nav-television-tab" data-toggle="tab" href="#nav-television" role="tab" aria-controls="nav-television" aria-selected="false">En TV</a>
    <a class="nav-item nav-link" id="nav-internacionales-tab" data-toggle="tab" href="#nav-internacionales" role="tab" aria-controls="nav-internacionales" aria-selected="false">Entrevistas</a>
    <a class="nav-item nav-link" id="nav-conferencias-tab" data-toggle="tab" href="#nav-conferencias" role="tab" aria-controls="nav-conferencias" aria-selected="false">Conferencias</a>



  </div>
</nav>

</div>
</div>
</div>

<div class="container">
  <div class="row">
  <div class="col-lg-12 text-center">

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-todos" role="tabpanel" aria-labelledby="nav-todos-tab">  <!--Tab Todas las notas!-->


<?php 
$args = array('showposts' => -1, 'post_type' => 'prensa');
$wp_query->query($args); ?>

<div class="container">
  <div class="row justify-content-center" style="align-items: stretch;display:flex"> 


<?php if ( have_posts() ) : // Si existen resultados ?>
    <?php while (have_posts()) : the_post(); // Mientra haya resultados, repite lo siguiente: 
          $thumbID = get_post_thumbnail_id( $post->ID );
          $url = wp_get_attachment_url( $thumbID );?>




              <div class="card-prensa" style="position:relative">
                 <!--<div class="large" style="height:200px;background-image:url(<?php echo $url; ?>);background-repeat:no-repeat;background-position:center center;background-size:cover;"></div>!-->
                
                 <div class="p-3">
                    <div class="data-cursos"><p class="label-data-cursos"><?php echo get_post_meta($post->ID, 'diario', true); ?></p></div>
                    <h2 class="description"><?php the_title(); // El título ?></h2>
                    <div class="text-body-m text-left" style="margin-bottom:50px"><?php echo get_post_meta($post->ID, 'descripcion', true); ?></div>
                    <span><?php $link = get_post_meta($post->ID, 'link', true); ?></span>
                    <a href="<?php echo $link['url']?>" target="_blank"><button  class="button-submit-small" style="margin-left:0px;position:absolute;bottom:0px;margin-bottom:20px;">Ver publicación</button></a>
                  </div>
              </div>



  <?php endwhile; ?>
<?php endif; ?>



    </div>  
  </div> 






  </div>
  <div class="tab-pane fade" id="nav-opinion" role="tabpanel" aria-labelledby="nav-opinion-tab"><!-- Tab Opinion y medios gráficos!-->







<div class="container">
  <div class="row justify-content-center" style="align-items: stretch;display:flex"> 
<?php 
$args = array('showposts' => -1, 'post_type' => 'prensa','category_name' => 'opinion',);

$wp_query->query($args);
            if(have_posts()) : 
        while (have_posts()) : the_post(); ?>    






     <div class="card-prensa">
       <div class="p-3">
        <div class="data-cursos"><p class="label-data-cursos"><?php echo get_post_meta($post->ID, 'diario', true); ?></p></div>

                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>

                <div class="text-body-m text-left" style="margin-bottom:50px"><?php echo get_post_meta($post->ID, 'descripcion', true); ?></div>
                  <span><?php $link = get_post_meta($post->ID, 'link', true); ?></span>
                  
                  <a href="<?php echo $link['url']?>" target="_blank"><button  class="button-submit-small" style="margin-left:0px;position:absolute;bottom:0px;margin-bottom:20px;">Ver publicación</button></a>
        </div>
    </div> 


       <?php endwhile;    
          endif; ?>
  </div>

</div>




  </div> 
  <div class="tab-pane fade" id="nav-television" role="tabpanel" aria-labelledby="nav-television-tab"><!-- Tab Television!-->




<div class="container">
  <div class="row justify-content-center" style="align-items: stretch;display:flex"> 
<?php 
$args = array('showposts' => -1, 'post_type' => 'prensa','category_name' => 'television',);

$wp_query->query($args);
            if(have_posts()) : 
        while (have_posts()) : the_post(); ?>    






     <div class="card-prensa">
       <div class="p-3">
        <div class="data-cursos"><p class="label-data-cursos"><?php echo get_post_meta($post->ID, 'diario', true); ?></p></div>

                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>

                <div class="text-body-m text-left" style="margin-bottom:50px"><?php echo get_post_meta($post->ID, 'descripcion', true); ?></div>
                  <span><?php $link = get_post_meta($post->ID, 'link', true); ?></span>
                  
                  <a href="<?php echo $link['url']?>" target="_blank"><button  class="button-submit-small" style="margin-left:0px;position:absolute;bottom:0px;margin-bottom:20px;">Ver publicación</button></a>
        </div>
    </div> 


       <?php endwhile;    
          endif; ?>
  </div>

</div>

          


  </div> 
  <div class="tab-pane fade" id="nav-internacionales" role="tabpanel" aria-labelledby="nav-internacionales-tab"><!-- Tab internacionales!-->



<div class="container">
  <div class="row justify-content-center" style="align-items: stretch;display:flex"> 
<?php 
$args = array('showposts' => -1, 'post_type' => 'prensa','category_name' => 'internacionales',);

$wp_query->query($args);
            if(have_posts()) : 
        while (have_posts()) : the_post(); ?>    






     <div class="card-prensa">
       <div class="p-3">
        <div class="data-cursos"><p class="label-data-cursos"><?php echo get_post_meta($post->ID, 'diario', true); ?></p></div>

                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>

                <div class="text-body-m text-left" style="margin-bottom:50px"><?php echo get_post_meta($post->ID, 'descripcion', true); ?></div>
                  <span><?php $link = get_post_meta($post->ID, 'link', true); ?></span>
                  
                  <a href="<?php echo $link['url']?>" target="_blank"><button  class="button-submit-small" style="margin-left:0px;position:absolute;bottom:0px;margin-bottom:20px;">Ver publicación</button></a>
        </div>
    </div> 


       <?php endwhile;    
          endif; ?>
  </div>

</div>




  </div>


 <div class="tab-pane fade" id="nav-conferencias" role="tabpanel" aria-labelledby="nav-conferencias-tab"><!-- Tab conferencias!-->




<div class="container">
  <div class="row justify-content-center" style="align-items: stretch;display:flex"> 
<?php 
$args = array('showposts' => -1, 'post_type' => 'prensa','category_name' => 'conferencias',);

$wp_query->query($args);
            if(have_posts()) : 
        while (have_posts()) : the_post(); ?>    






     <div class="card-prensa">
       <div class="p-3">
        <div class="data-cursos"><p class="label-data-cursos"><?php echo get_post_meta($post->ID, 'diario', true); ?></p></div>

                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>

                <div class="text-body-m text-left" style="margin-bottom:50px"><?php echo get_post_meta($post->ID, 'descripcion', true); ?></div>
                  <span><?php $link = get_post_meta($post->ID, 'link', true); ?></span>
                  
                  <a href="<?php echo $link['url']?>" target="_blank"><button  class="button-submit-small" style="margin-left:0px;position:absolute;bottom:0px;margin-bottom:20px;">Ver publicación</button></a>
        </div>
    </div> 


       <?php endwhile;    
          endif; ?>
  </div>

</div>





 </div>



</div>


    </div>
  </div>
</div>
















<div class="container mt-5">
  <div class="row">
    <div class="col-lg-12">
      <p class="sub-text text-center" style="width:100%">Llegaste al final de mis publicaciones, pero podés seguir conociéndome en:</p>

    </div>
  </div>
</div>




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
        <h3 class="color-primary mb-4">Cursos</h3>
        <p class="text-body">Asesoramiento profesional y capacitaciones</p>
        <a href="<?php echo SITE_URL."/cursos";?>"><button class="button-submit-small">Conocé más</button></a>
      </div>
    </div>

  </div>

</section>






 <?php include ('contact.php') ?>


<?php get_footer(); ?>


</body>


<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script type="text/javascript">
$('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});

</script>




<!--
<?php 
$args = array('showposts' => -1, 'post_type' => 'prensa');
$wp_query->query($args); ?>

<div class="container" style="padding-bottom:100px;">
  <div class="row" style="align-items: flex-start;display:flex;justify-content: flex-start"> 


<?php if ( have_posts() ) : // Si existen resultados ?>
    <?php while (have_posts()) : the_post(); // Mientra haya resultados, repite lo siguiente: 
          $thumbID = get_post_thumbnail_id( $post->ID );
          $url = wp_get_attachment_url( $thumbID );?>




              <div style="width:20%;border-radius:6px;background-color:red;margin-right:20px;margin-bottom:20px;display:inline-block">
                 <div class="large" style="height:200px;background-image:url(<?php echo $url; ?>);background-repeat:no-repeat;background-position:center center;background-size:cover;"></div>
                

                  <h2 class="description"><?php the_title(); // El título ?></h2>
                  <?php echo get_post_meta($post->ID, 'diario', true); ?>
                  <br/>

                  <span><?php echo get_post_meta($post->ID, 'descripcion', true); ?></span>
                  <span><?php $link = get_post_meta($post->ID, 'link', true); ?></span>
                  <a href="<?php echo $link['url']?>">Link</a>



            </div>



  <?php endwhile; ?>
<?php endif; ?>



    </div>  
  </div> 

!-->



<!--


<section style="background: red;padding-top:0px;position:relative;"> 

<?php 
$args = array('showposts' => -1, 'post_type' => 'prensa','category_name' => 'conferencias',);

$wp_query->query($args);
            if(have_posts()) : 
        while (have_posts()) : the_post(); ?>        
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p> 

       <?php endwhile;    
          endif; ?>
</section>

!-->


!-->