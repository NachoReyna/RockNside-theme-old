<?php get_header(); ?>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3 class="header col s12 cyan-text accent-1"><strong>Hell en RockNside</strong></h3>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="http://rocknside.com/wp-content/themes/rocknsidetheme/img/hell.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <div class=" white-text">
    <div class="container">
      <div class="section">
        <div class="row">
          <h3 class="black-text centrar-texto titulos-dos">Corona Hell And Heaven</h3>
           <div class="col s12">
              <p class="black-text text-justificado tamano-secciones-camino">
              Estamos a pocas semanas del festival corona hell and heaven por eso RockNside 
              abre su sección "HELL EN ROCKNSIDE" la cual tendrá una cobertura especial del evento 
              y de las bandas que estarán participando en él. Traeremos un poco de historia, 
              contenido especial y algunos posibles set list que interpretarían las agrupaciones.
              </p>
           </div>
         </div>
         <div class=" center">
           <div class="fb-video" data-href="https://www.facebook.com/RNside/videos/412877155829362/" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/RNside/videos/412877155829362/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RNside/videos/412877155829362/">Hell &amp; Heaven 2018</a><p>#RockNsideMúsica
Se acerca el &#064;Hell And Heaven Fest 2018, sigue toda la cobertura en RockNside.
RockNside</p>Posted by <a href="https://www.facebook.com/RNside/">RockNside</a> on jueves, 22 de marzo de 2018</blockquote></div>
         </div>
       <div class="center">
         
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
                   <?php $the_query = new WP_Query( array( 'category_name' => 'hell', 'posts_per_page' => -1 ) );?>
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
