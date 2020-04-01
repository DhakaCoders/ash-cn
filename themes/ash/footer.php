<?php 
  $ftcontent = get_field('ftcontent', 'options');
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $spacialArry = array(".", "/", "+", "-", " ");$replaceArray = '';
  $e_mailadres = get_field('email_address', 'options');
  $show_telefoon = get_field('telephone', 'options');
  $whatsapp = get_field('whatsapp', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));
  $copyright_text = get_field('copyright', 'options');
  $adres = get_field('address', 'options');
  $gmapsurl = get_field('google_maps', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
?>
<footer class="footer-wrp">
  <div class="ftr-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="ftr-top-lft-col">
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="ftr-top-rgt-col">
            <div class="ftr-info-cntlr hide-sm">
              <ul class="ulc clearfix">
                <?php if( !empty( $adres ) ): ?>
                <li>
                  <div class="ftr-info-item">
                    <a href="<?php echo $gmaplink; ?>">
                      <i><img src="<?php echo THEME_URI; ?>/assets/images/location-icon.png"></i>
                      <span><?php echo $adres;?></span>
                    </a>
                  </div>
                </li>
                <?php endif; ?>
                <li>
                  <?php if( !empty($telefoon) ): ?>
                  <div class="ftr-info-item">
                    <a href="tel:<?php echo $telefoon; ?>">
                      <i><img src="<?php echo THEME_URI; ?>/assets/images/tel-icon.png"></i>
                      <span><?php echo $show_telefoon; ?></span>
                    </a>
                  </div>
                  <?php endif; ?>
                  <?php if( !empty($e_mailadres) ): ?>
                  <div class="ftr-info-item">
                    <a href="mailto:<?php echo $e_mailadres; ?>">
                      <i><img src="<?php echo THEME_URI; ?>/assets/images/mail-icon.png"></i>
                      <span><?php echo $e_mailadres; ?></span>
                    </a>
                  </div>
                  <?php endif; ?>
                </li>
              </ul>
            </div>
            <?php if( $ftcontent ): ?>
            <div class="show-sm">
              <div class="sm-ftr-content">
                <p class="text-uppercase"><?php echo $ftcontent; ?></p>
              </div>
            </div>
           <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ftr-btm hide-sm">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright">
            <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sticy-menu-sm show-sm">
    <div class="sticy-menubar">
      <div class="clearfix sticy-menubar-inner">
        <div class="sticy-menubar-social">
          <ul class="clearfix ulc">
            <?php if( !empty($whatsapp) ) printf('<li class="whatsapp-sm"><a href="%s"></a></li>', $whatsapp); ?>
            <?php if( !empty($e_mailadres) ) printf('<li class="mail-sm"><a href="mailto:%s"></a></li>', $e_mailadres); ?>
            <?php if( !empty($telefoon) ) printf('<li class="tel-sm"><a href="tel:%s"></a></li>', $telefoon); ?>
          </ul>
        </div>
        <div class="sticy-menubar-btn">
          <div class="sticy-menubar-btn-inr">
            <strong>Menu</strong>
            <div class="sticy-menubar-btn-line">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="show-sm">
    <nav class="main-nav-sm">
      <div class="main-nav-sm-inr clearfix">
        <span class="close-btn"><img src="<?php echo THEME_URI; ?>/assets/images/close-btn-icon.png"></span>
        <?php 
          $mmenuOptions = array( 
              'theme_location' => 'cbv_main_menu', 
              'menu_class' => 'clearfix ulc',
              'container' => 'nav',
              'container_class' => 'nav'
            );
          wp_nav_menu( $mmenuOptions ); 
        ?>
      </div>
    </nav>
  </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>