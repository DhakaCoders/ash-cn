<?php 
get_header(); 
get_template_part('templates/page', 'banner');
?>
<?php while( have_posts() ): the_post(); ?>
<section class="main-content section-divider single-con-cntlr">
 <div class="posts-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-lg-2"> 
          <div class="post-items">
            <article class="post-item clearfix">
              <div class="post-des">
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
              </div>
            </article>
          </div>
        </div>
        <div class="col-lg-4 order-lg-1">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>     
  </div><!-- end of .posts-section -->   
</section><!-- end of .main-content -->
<?php endwhile; ?>
<?php get_footer(); ?>