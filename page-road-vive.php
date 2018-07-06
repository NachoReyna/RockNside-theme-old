<?php get_header(); ?>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3 class="header col s12 pink-text accent-1 textoborde"><strong>Road To Vive Latino 2018</strong></h3>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="http://rocknside.com/wp-content/themes/rocknsidetheme/img/vive.png" alt="Unsplashed background img 2"></div>
  </div>
  <div class=" white-text">
    <div class="container">
      <div class="section">
        <div class="row">
          <h3 class="black-text centrar-texto titulos-dos">Festival Iberoamericano De Cultura Musical</h3>
           <div class="col s12">
            <p class="black-text text-justificado tamano-secciones-camino tamano-secciones-camino">
            Nuevamente y como cada a√±o el festival iberoamericano de cultura musical,
            mezcla diversos generos musicales, para a si crear una fusion
            donde distintos generos se unen en una sola voz para gritar y expresar con esa
            fuerza un solo sentimiento.
            Ven con nosotros y te llevaremos de la mano semana a semana previo al concierto,
            para que conozcas lo mas relevante de este festival
            </p>
           </div>
         </div>
        <div class="center">
          <div class="fb-video" data-href="https://www.facebook.com/RNside/videos/402092953574449/" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/RNside/videos/402092953574449/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RNside/videos/402092953574449/">Vive Latino 2018 #rocknside</a><p>#RockNsideEventos #RockNsideVideos
Ya se acerca el Vive Latino, alguien que ya tenga sus boletos?
RockNside.</p>Posted by <a href="https://www.facebook.com/RNside/">RockNside</a> on sè´°bado, 24 de febrero de 2018</blockquote></div>
             <div class="row">
                  <div class="col s4 m4">
                    <div class="card-panel teal">
                      <span class="white-text">
                        Publicidad
                      </span>
                    </div>
                  </div>
                   <div class="col s4 m4">
                     <div class="card-panel teal">
                       <span class="white-text">
                         Publicidad
                       </span>
                     </div>
                   </div>
                    <div class="col s4 m4">
                      <div class="card-panel teal">
                        <span class="white-text">
                          Publicidad
                        </span>
                      </div>
                    </div>
                  </div>
               <div class="row">
                 <?php $the_query = new WP_Query( array( 'category_name' => 'vive', 'posts_per_page' => 3 ) );?>
                     <?php if ( $the_query->have_posts() ) : ?>
                       <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                         <div class="col s12 m4">
                           <div class="card z-depth-5">
                             <div class="card-image">
                               <img src="<?php the_post_thumbnail_url(); ?>">
                               <span class="card-title"><?php the_title(); ?></span>
                             </div>
                             <div class="card-content black-text text-justificado">
                               <p><?php echo get_excerpt(150); ?> ...</p>
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

<?php include("http://rocknside.com/wp-content/themes/rocknsidetheme/seccion-rock.php"); ?>
<?php get_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.12&appId=1760624033968233&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>