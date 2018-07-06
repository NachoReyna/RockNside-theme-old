<?php get_header(); ?>

<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
        <br><br>
        <h2 class="col s12 center titulos-dos grey darken-4 lighten-2-text">Este mes en RockNside</h2>
      <div class="row center">
        <a class="waves-effect waves-light btn" href="/road-hh">Hell and Heaven Fest</a>


      </div>
      <br><br>
    </div>
  </div>
  <div class="parallax">
    <img src="<?php echo get_template_directory_uri(); ?>/img/elvis.jpg" alt="Unsplashed background img 1">
  </div>
</div>

<div class=" white-text">
  <div class="container ">
    
    
   <div class="section ">
      <h2 class="black-text center titulos-dos">Noticias Recientes</h2>
          <div class="row">
            <?php $the_query = new WP_Query( array( 'category_name' => 'noticias', 'posts_per_page' => 6 ) );?>
                <?php if ( $the_query->have_posts() ) : ?>
                	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col s12 m4">
                      <div class="card z-depth-5">
                        <div class="card-image">
                          <img src="<?php the_post_thumbnail_url(); ?>">
                          <span class="card-title"><a class="fondo-title"><?php the_title(); ?></a></span>
                        </div>
                        <div class="card-content black-text">
                          <p><?php echo get_excerpt(150); ?> ...</p>
                        </div>
                        <div class="card-action center">
                          <a class="waves-effect waves-light btn  red darken-4" href="<?php the_permalink(); ?>"> <i class=" material-icons ">queue_play_next</i></a>
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
    
   <!-- <div class="section">
      <h2 class="black-text center titulos-dos">Conoce a la banda del mes</h2>
          <div class="row">
            <?php $the_query = new WP_Query( array( 'category_name' => 'banda-mes-marzo' ) );?>
                <?php if ( $the_query->have_posts() ) : ?>
                	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col s12 m4">
                      <div class="card z-depth-5">
                        <div class="card-image">
                          <img src="<?php the_post_thumbnail_url(); ?>">
                          <span class="card-title"><p class="ondo-title"><?php the_title(); ?></p></span>
                        </div>
                        <div class="card-content black-text">
                          <p><?php echo get_excerpt(150); ?> ...</p>
                        </div>
                        <div class="card-action center">
                          <a class="waves-effect waves-light btn  red darken-4" href="<?php the_permalink(); ?>"> <i class=" material-icons ">queue_play_next</i></a>
                        </div>
                      </div>
                    </div>
                	<?php endwhile; ?>
                	<?php wp_reset_postdata(); ?>
                <?php else : ?>
                	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
        </div>
    </div>-->
  </div>
</div>

<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
    </div>
  </div>
  <div class="parallax">
    <img src="http://rocknside.com/wp-content/themes/rocknsidetheme/img/fest.png" alt="Unsplashed background img 2">
  </div>
</div>

<div class="teal darken-4" style="background-color:#592e36 !important">
  <div class="container">
    <div class="section">
      <div class="row center">
        <h3 class="header col s12 white-text accent-1 titulos-dos"><strong>Force Fest 2018 en RockNside</strong></h3>
        <p class="left-align center white-text flow-text">Por primera vez en el estado de México nos traen este festival directo de Guadalajara y aquí te traeremos la cobertura de este gran evento.</p>
        <a class="waves-effect waves-light btn deep-orange accent-3" href="road-hh">Ver más</a>
      </div>
    </div>
  </div>
</div>


<div class="parallax-container valign-wrapper">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row center">
        <h5 class="header col s12 light"></h5>
      </div>
    </div>
  </div>
  <div class="parallax">
    <img src="http://rocknside.com/wp-content/themes/rocknsidetheme/img/coronabanner.png" alt="corona capital 2018">
  </div>
</div>

<div class="teal darken-4" style="background-color:#0f253f !important">
  <div class="container">
    <div class="section">
      <div class="row center">
        <h3 class="header col s12 white-text accent-1 titulos-dos"><strong>Corona Capital 2018 en RockNside</strong></h3>
        <p class="left-align center white-text flow-text">EL cartel del Festival Corona Capital 2018, se revelo hace unas semanas y aquí te traeremos la cobertura de este gran evento.</p>
        <a class="waves-effect waves-light btn deep-orange accent-3" href="road-hh">Ver más</a>
      </div>
    </div>
  </div>
</div>


<?php include("http://rocknside.com/wp-content/themes/rocknsidetheme/seccion-rock.php"); ?>
<?php get_footer(); ?>
<style>
.fondo-title{
    color: white;
    background: #00000061;
}
</style>