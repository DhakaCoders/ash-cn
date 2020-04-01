<div class="right-sidebar">
  <?php 
  if ( is_active_sidebar( 'post-widget' ) ) : 
    dynamic_sidebar( 'post-widget' );
  endif; 
  ?>
</div>