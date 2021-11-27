    <div class="row text-left mb-5">
      <div class="col-md-8 offset-md-2 mb-4 mt-4">
        <a href="<?php echo SITE_URL."/ladob";?>" style="text-decoration:none"><p class="text">Última publicación <span class="button-o">Ver todas</span></p></a>




      </div>
      <div class="col-md-8 offset-md-2">
        <div style="background-color:#FFF5E8;padding:30px;border-radius:10px">


<div class="col-lg-12 text-left" >
  <?php  

    $args = array( 
        'numberposts' => '1', 
    );
    $recent_posts = wp_get_recent_posts( $args );
  ?> 

    <!-- <div class="id-post-nota color-primary"><span>Nro #</span><?php echo $recent_posts[0]['ID'];?></div> !-->


    <div class="titulo-nota mb-2"><?php echo $recent_posts[0]['post_title'];?></div>
    <div class="text-body-m mb-2"><?php echo get_post_meta($recent_posts[0]['ID'], 'bajada', true);?></div>
    <a class="text-body" href="<?php the_permalink();?>" style="color:#ff9300!important;text-decoration:underline;font-weight:bold">Mirá la publicación</a>       


</div>


<!--
          <div class="id-post-nota color-primary"><span>Nro #</span><?php echo $post->ID ; ?></div>
          <div class="titulo-nota mb-2"><?php echo the_title();?></div>
          <div class="text-body-m mb-2"><?php echo get_post_meta($post->ID, 'resumen', true); ?></div>    
            <a class="text-body" href="<?php the_permalink();?>" style="color:#ff9300!important;text-decoration:underline;font-weight:bold">Mirá la publicación</a>        


!-->

        </div>
      </div>


    </div>