<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Meetze_Plumbing
 * @since 1.0.0
 */
global $setting_post_id;
global $phonnum;
?>
<div class="footer-service"><?php echo do_shortcode('[city_state]'); ?></div>
<footer class="site-footer">
            <div class="bg-secondary-gradient pattern-right footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-12 col-lg-6">
                        <div class="footer-col-1">
                           <div class="footer-logo"><a href="<?php echo home_url( '/' ); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/></a></div>
                           <div class="footer-contact">
                              <div class="footer-phone">Call: <span><?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2 $3", $phonnum); ?></span></div>
                               <?php $link = get_field('header_button', $setting_post_id) ; ?>
                              <?php $link_url = $link['url'];
   $link_title = $link['title']; ?>
                              <a href="<?php echo $link_url ; ?>" class="button-default"><?php echo $link_title ; ?></a>
                           </div>
                        </div>
                        <p>© <?php echo date('Y') ; ?> - Meetze Plumbing. All rights reserved. <a href="<?php the_field('terms_link', $setting_post_id) ; ?>"> Terms & Conditions </a></p>
                     </div>
                     <div class="col-12 col-lg-6">
                        <div class="row">
                           <div class="col-12 col-lg-4 d-none d-lg-block footer-col">
                              <div class="footer-col-in">
                                 <div class="footer-title">Company</div>
                                 <?php
                                    wp_nav_menu( array(
                                    'menu'   => 'Footer Company Menu',
                                    'container' => false
                                    ) );
                                 ?>   
                              </div>
                           </div>
                           <div class="col-12 col-lg-4 d-none d-lg-block footer-col">
                              <div class="footer-col-in">
                                 <div class="footer-title">Services</div>
                                 <?php
                                    wp_nav_menu( array(
                                    'menu'   => 'Footer Services Menu',
                                    'container' => false
                                    ) );
                                 ?>
                              </div>
                           </div>
                           <div class="col-12 col-lg-4 footer-col">
                              <div class="footer-title d-none d-lg-block">Follow Us</div>
                              <div class="social-icon">
                                 <ul>
                                    <li><a href="<?php the_field('facebook_link', $setting_post_id) ; ?>" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="sr-only">Facebook</span></a></li>
                                    <li><a href="<?php the_field('twitter_link', $setting_post_id) ; ?>" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="sr-only">Twitter</span></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-12 mt-5 d-none d-lg-block footer-logos text-lg-right"> 
                              <ul>
                                <?php if (have_rows('add_logos', $setting_post_id) ) : ?>
   									<?php while ( have_rows('add_logos', $setting_post_id) ) : the_row() ; ?>
       									<li><img src="<?php the_sub_field('add_logo') ; ?>"></li>
									<?php endwhile ; ?>
 								<?php endif  ;?> 
                              </ul>
						   </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <script>
      jQuery( document ).ready(function() {
  jQuery(".custom-class-Columbia a").attr("href", "https://www.meetzeplumbing.com/commercial-plumbing-columbia-south-carolina")

});
</script>
<?php wp_footer(); ?>

</body>
</html>
