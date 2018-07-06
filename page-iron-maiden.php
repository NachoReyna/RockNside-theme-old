<?php include("header.php"); ?>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3 class="header col s12 cyan-text accent-1"><strong></strong></h3>
          <p class="left-align center flow-text"></p>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="http://rocknside.com/wp-content/themes/rocknsidetheme/img/irons.jpg"></div>
  </div>
  <div class=" white-text">
    <div class="container ">
      <div class="section ">
<h2 class="black-text">La Dama de Hierro.</h2>
        <div class="row ">



   <div class="col s12">
<p class="black-text">
La historia de Iron Maiden parte en el año 1971, cuando Steve Harris inspirado en bandas como Wishbone Ash, Thin Lizzy, UFO, Black Sabbath, Jethro Tull, Genesis, King Crimson, The Who y Deep Purple, entre otros, adquiere un bajo Fender Precision Bass por unas 40 libras esterlinas, y tras dejar atrás la opción de la batería, para la cual no contaba con el espacio suficiente. Inicialmente Steve también tuvo la ilusión de ser jugador de fútbol del West Ham, sin embargo, tras meditarlo comenzó a dedicar todos sus esfuerzos a su otra gran pasión, la música. Esto condujo a la formación de una agrupación musical que llamó Gypsy's Kiss en 1972, cuyo primer concierto fue en el mítico reducto "Cart & Horses" en Maryland Point, Stratford.
La historia de Iron Maiden parte en el año 1971, cuando Steve Harris inspirado en bandas como Wishbone Ash, Thin Lizzy, UFO, Black Sabbath, Jethro Tull, Genesis, King Crimson, The Who y Deep Purple, entre otros, adquiere un bajo Fender Precision Bass por unas 40 libras esterlinas, y tras dejar atrás la opción de la batería, para la cual no contaba con el espacio suficiente. Inicialmente Steve también tuvo la ilusión de ser jugador de fútbol del West Ham, sin embargo, tras meditarlo comenzó a dedicar todos sus esfuerzos a su otra gran pasión, la música. Esto condujo a la formación de una agrupación musical que llamó Gypsy's Kiss en 1972, cuyo primer concierto fue en el mítico reducto "Cart & Horses" en Maryland Point, Stratford.
</p>


   </div>


 </div>
 <div class="center">
<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FRNside%2Fvideos%2F382000105583734%2F&show_text=0&width=476" width="476" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>  </div>
            
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
               <?php $the_query = new WP_Query( array( 'category_name' => 'iron-maiden' ) );?>
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

<?php include("seccion-rock.php"); ?>
<?php include("footer.php"); ?>
