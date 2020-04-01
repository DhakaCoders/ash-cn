<?php
$thisID = get_the_ID();
$standaardbanner = get_field('pagebanner', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-banner.jpg';
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