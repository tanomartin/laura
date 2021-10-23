    <div class="row text-left mb-5">
      <div class="col-md-8 offset-md-2 mb-4">
        <p class="text">Última publicación <span class="button-o">Ver todas</span></p>




      </div>
      <div class="col-md-8 offset-md-2">
        <div style="width:100%;height:300px;background-color:#FFF5E8;border-radius:10px">

<?php  

$args = array( 
    'numberposts' => '1', 
);
$recent_posts = wp_get_recent_posts( $args );

echo $recent_posts[0]['ID'];
echo $recent_posts[0]['post_title'];
echo get_post_meta($recent_posts[0]['ID'], 'bajada', true);



 ?> 

        </div>
      </div>


    </div>