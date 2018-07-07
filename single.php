<?php get_header(); ?>
  <div class=" black-text single-color">
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col white z-depth-5 s12 m8 l9 " style="text-align: justify;font-size: 18px;">
            <br>
       <?php
              if ( have_posts() ) {
              	while ( have_posts() ) {
              		the_post(); ?>

              		<div class="col s12 m12 l12">
                    <img src="<?php the_post_thumbnail_url(); ?> " class="center img-responsive" width="100%" alt="">
                  </div>
   					<h4 class="center"><?php echo the_title(); ?></h4>
   					<h6><?php echo the_date(); ?> | <?php the_author(); ?> </h6>

               				<p><?php echo the_content(); ?></p>
               				<div><p><?php the_tags(); ?></p></div>
                  </div>
              	<?php } // end while
              } // end if
        ?>


            <div class="col s12 m4 l3">
              <div class="row">
                <?php $the_query = new WP_Query( array( 'category_name' => 'noticias', 'posts_per_page' => 3) );?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col s12 m12">
                          <div class="card z-depth-5">
                            <div class="card-image">
                              <img src="<?php the_post_thumbnail_url(); ?>">
                              <span class="card-title"><?php the_title(); ?></span>
                            </div>
                            <div class="card-content black-text text-justificado">
                              <p><?php echo get_excerpt(50); ?> ...</p>
                            </div>
                            <div class="card-action center">
                              <a class="waves-effect waves-light btn" href="<?php the_permalink(); ?>"> <i class=" material-icons ">queue_play_next</i></a>
                            </div>
                          </div>
                        </div>
                    	<?php endwhile; ?>
                    	<?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

               <div class="col s12 m12">
                 <div class="card-panel teal">
                   <figure class="op-ad">
   <iframe width="300" height="250" style="border:0; margin:0;" src="https://www.facebook.com/adnw_request?placement=PLACEMENT_ID&adtype=banner300x250"></iframe>
</figure>
<figure class="op-ad">
   <!-- Use this for your ads -->
   <iframe src="https://www.adserver.com/ss;adtype=banner300x250" height="250" width="300"></iframe>
</figure>
<iframe width="300" height="250" style="border:0; margin:0;" src="https://www.facebook.com/adnw_request?placement=PLACEMENT_ID&adtype=banner300x250"></iframe>

                 </div>
               </div>
            </div>

            <div class="row">
              <?php $the_query = new WP_Query( array( 'category_name' => 'noticias', 'posts_per_page' => 2 ) );?>
                  <?php if ( $the_query->have_posts() ) : ?>
                  	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <div class="col s12 m12">
                        <div class="card z-depth-5">
                          <div class="card-image">
                            <img src="<?php the_post_thumbnail_url(); ?>">
                            <span class="card-title"><?php the_title(); ?></span>
                          </div>
                          <div class="card-content black-text text-justificado">
                            <p><?php echo get_excerpt(50); ?> ...</p>
                          </div>
                          <div class="card-action center">
                            <a class="waves-effect waves-light btn" href="<?php the_permalink(); ?>"> <i class=" material-icons ">queue_play_next</i></a>
                          </div>
                        </div>
                      </div>
                  	<?php endwhile; ?>
                  	<?php wp_reset_postdata(); ?>
                  <?php else : ?>
                  	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                  <?php endif; ?>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("http://localhost:8080/rocknside/wp-content/themes/rocknsidetheme/seccion-rock.php");?>
<?php get_footer();?>
<style>
.card .card-image .card-title {

    font-size: 15px;
}

 div>p>a {
    background: #e53935;
    color: #fff;
    padding: 3px 8px;
    border-radius: 10px;
    font-size: 20px;
}
</style>
