<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div id="content" class="col" role="main">
      <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        else :
          _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>