<?php 
get_header(); 
?>
<?php
$thisID = get_option( 'page_for_posts' );
$standaardbanner = get_field('pagebanner', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-banner.jpg';

 $showhide_sidebar = get_field('sidebarshowhide', $thisID);
  if( @$showhide_sidebar[0] == 1 )
    $col = 'col-lg-12 order-lg-1';
  else
  $col = 'col-lg-8 order-lg-2';
?>
<section class="page-banner">
  <div class="page-banner-controller" style="overflow: hidden;">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
  </div>
</section>
<section class="breadcrumbs-sec">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumbs">
            <?php cbv_breadcrumbs(); ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<section class="main-content section-divider">
 <div class="posts-section">
    <div class="container">
      <div class="row">
        <div class="<?php echo $col; ?>"> 
          <?php if( have_posts() ): ?>
          <div class="post-items">
            <?php 
              while(have_posts()): the_post(); 
              $attach_id = get_post_thumbnail_id(get_the_ID());
              if( !empty($attach_id) )
                $blog_tag = cbv_get_image_tag($attach_id,'bloggrid');
              else
                $blog_tag = '<img src="'.THEME_URI .'/assets/images/blogdef.png" alt="'.get_the_title().'">';
            ?>
            <article class="post-item clearfix">
              <div class="post-img">
                <a href="<?php the_permalink(); ?>">
                  <?php echo $blog_tag; ?>
                </a>
              </div>
              <div class="post-des">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php the_excerpt(); ?>
              </div>
            </article>
            <?php endwhile; ?>
          </div>
          <div class="pagi-select-area clearfix">
            <div class="fl-pagi-pagi-ctlr">
            <?php
              global $wp_query;

              $big = 999999999; // need an unlikely integer
              $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

              echo paginate_links( array(
                'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'type'      => 'list',
                'prev_text' => __('«'),
                'next_text' => __('»'),
                'format'    => '?paged=%#%',
                'current'   => $current,
                'total'     => $wp_query->max_num_pages
              ) );
            ?>
            </div>
          </div>
        <?php else: ?>
          <div class="notfound">No result!</div>
        <?php endif; ?>
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
<?php get_footer(); ?>