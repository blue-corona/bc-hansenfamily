<?php
   /*
   *
   * Template Name: Search Page
   */ 
   global $setting_post_id;
   global $phonnum;
   get_header() ; ?>

   <main id="main" class="site-main top-offset">
         <article>
            <?php include('sub-banner.php');?>
            <section class="sub-content-sec">
               <div class="container">
                  <div class="row">
                           <div class="col-12 col-lg-8 d-flex flex-wrap content-area">
							<div class="content-area-inner">
                              <div class="search-form-sec">
                                 <form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
                                    <label>
                                    <span class="offscreen"><?php echo _x( 'Search for:', 'label' ) ?></span>
                                    <input type="search" class="search-field"
                                    meetzeplumbing="<?php echo esc_attr_x( 'Search', 'meetzeplumbing' ) ?>"
                                    value="<?php echo get_search_query() ?>" name="s"
                                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                                    </label>
                                    <input type="submit" alt="Submit" value="Submit"
                                    src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png" class="button-default button-secondary-gradient button-mobile">
                                   </form>
                                 </div>
								 </div>
                           </div>
                           <div class="col-12 col-lg-4 sidebar-area">
                              <?php get_sidebar() ;?>
                           </div>
                        </div>
                     </div>
            </section>
         </article>
      </main>

<?php
get_footer();?>