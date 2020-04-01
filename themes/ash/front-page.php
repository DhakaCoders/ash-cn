<?php get_header(); ?>
<?php
$caption = get_field('caption', HOMEID);
$standaardbanner = get_field('banner_image', HOMEID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/main-bnr-img-01.jpg';
?>
<section class="main-bnr-section">
  <div class="main-banner mainBnrSlider" id="mainBnrSlider">
    <div class="main-bnr-item" style="background: url(<?php echo $standaardbanner; ?>); height: 720px;">
      <div class="main-bnr-des">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="main-bnr-des-inr">
                <?php if( !empty($caption) ) printf('<strong class="main-bnr-title">%s</strong>', $caption); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
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


<?php while( have_posts() ): the_post(); ?>
<section class="hm-main-content">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hm-main-con-cntlr">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endwhile; ?>
<?php get_footer(); ?>