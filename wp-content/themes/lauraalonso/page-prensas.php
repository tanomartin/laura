<?php
   /*
   Template Name: prensas
   */


   ?>


<body>

<section style="background: #F0F0F0;padding-top:0px;position:relative;">
<?php 
$args = array('showposts' => -1, 'post_type' => 'prensa');
$wp_query->query($args); ?>

<div class="container" style="padding-bottom:100px;">
  <div class="row">

<?php if ( have_posts() ) : // Si existen resultados ?>
    <?php while (have_posts()) : the_post(); // Mientra haya resultados, repite lo siguiente: 
          $thumbID = get_post_thumbnail_id( $post->ID );
          $url = wp_get_attachment_url( $thumbID );?>
      <div class="large" style="height:200px;background-image:url(<?php echo $url; ?>);background-repeat:no-repeat;background-position:center center;background-size:cover;"></div>
            <div class="caption">
            <h2 class="description"><?php the_title(); // El título ?></h2>
          <span><?php echo get_post_meta($post->ID, 'diario', true); ?></span>
          <br/>
              <span><?php echo get_post_meta($post->ID, 'descripcion', true); ?></span>
              <br/>
              <span><?php $link = get_post_meta($post->ID, 'link', true); ?></span>
              <a href="<?php echo $link['url']?>">Link</a>

          </div>

    </div>  
  </div> <!-- fin col !-->


  <?php endwhile; ?>
<?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
</section>


</body>