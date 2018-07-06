<?php get_header(); ?>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3 class="header col s12 cyan-text accent-1"><strong></strong></h3>
          <p class="left-align center flow-text"></p>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="http://rocknside.com/wp-content/themes/rocknsidetheme/img/realdecatorce_fondo.jpg"></div>
  </div>
  <div class=" white-text">
    <div class="container ">
      <div class="section ">
	        <h2 class="black-text centrar-texto">Real de Catorce, una mirada al misticismo Mexicano</h2>
        <div class="row ">
           <div class="col s12">
              <p class="black-text text-justificado tamano-secciones-camino">
                Y es que el hablar de “real de catorce”, es hablar de estas bandas 
                que llamamos en la escena nacional, una banda de culto, una banda 
                que llega a nuestros oídos como una pequeña droga, rolada por algún 
                camarada, que más tarde se convertirá en una cicatriz en nuestra 
                historia, y así es como ha llegado real de catorce y su blues.
              </p>
           </div>
         </div>
                     <div class="col s10 center" >

        <div class="fb-video" data-href="https://www.facebook.com/RNside/videos/412075752576169/" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/RNside/videos/412075752576169/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RNside/videos/412075752576169/">Real De Catorce</a><p>#RockNsideBandaDelMes
Este mes en RockNside, Real de Catorce banda mexicana de blues la cual llenara la pagina de ese misticismo y esa magia que solo Real sabe.
RockNside
Real de Catorce (Sitio Oficial)</p>Posted by <a href="https://www.facebook.com/RNside/">RockNside</a> on martes, 20 de marzo de 2018</blockquote></div>
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
               <?php $the_query = new WP_Query( array( 'category_name' => 'banda-mes-marzo' ) );?>
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
