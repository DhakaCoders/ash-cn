<?php 
get_header(); 
get_template_part('templates/page', 'banner');
?>
<?php while( have_posts() ): the_post(); ?>
<section class="page-content">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-con-cntlr">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endwhile; ?>
<?php get_footer(); ?>