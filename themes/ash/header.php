<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
  $logoObj = get_field('logo', 'options');
?>
<header class="header">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="hdr-lft">
              <div class="logo">
                <?php 
                  if( is_array($logoObj) ){
                      $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
                  ?>
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo $logo_tag; ?>
                  </a>
                <?php } ?>
              </div>
            </div>
            <div class="hdr-rgt">
              <nav class="main-nav">
                <?php 
                  $mmenuOptions = array( 
                      'theme_location' => 'cbv_main_menu', 
                      'menu_class' => 'clearfix ulc',
                      'container' => 'mnav',
                      'container_class' => 'mnav'
                    );
                  wp_nav_menu( $mmenuOptions ); 
                ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
  </div>
</header>