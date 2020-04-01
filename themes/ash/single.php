<?php 
get_header(); 
get_template_part('templates/page', 'banner');
?>
<?php while( have_posts() ): the_post();
 $showhide_sidebar = get_field('sidebarshowhide', get_the_ID());
  if( @$showhide_sidebar[0] == 1 )
    $col = 'col-lg-12 order-lg-1';
  else
  $col = 'col-lg-8 order-lg-2';

?>
<section class="main-content section-divider single-con-cntlr">
 <div class="posts-section">
    <div class="container">
      <div class="row">
        <div class="<?php echo $col; ?>"> 
          <div class="post-items">
            <article class="post-item clearfix">
              <div class="post-des">
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
              </div>
            </article>
          </div>
        </div>
        <?php if( @$showhide_sidebar[0] !=1 ): ?>
        <div class="col-lg-4 order-lg-1">
          <?php get_sidebar(); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>     
  </div><!-- end of .posts-section -->   
</section><!-- end of .main-content -->
<?php endwhile; ?>
<?php get_footer(); ?>