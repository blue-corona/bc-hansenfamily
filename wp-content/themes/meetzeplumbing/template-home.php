<?php
   /*
   *
   * Template Name: Home
   */ 
   global $setting_post_id;
   global $phonnum;
   get_header() ; ?>
<main id="main" class="site-main top-offset">
   <article>
   <section class="main-site-banner">
      <div class="row no-gutters">
         <div class="col-12">
            <div class="d-flex flex-wrap align-items-center main-banner-col" style="background-image:url('<?php the_field('add_banner_image') ; ?>');">
               <div class="container">
                  <div class="main-caption-panel">
                     <div class="banner-caption"><?php the_field('banner_head') ; ?></div>
                     <div class="banner-sub-caption"><?php the_field('banner_subhead') ; ?></div>
                     <div class="banner-mobile-content mb-4 d-md-none">
                    <div class="text-center mb-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/meetze-van.png" alt=""/> </div>
                     <?php $link = get_field('header_button', $setting_post_id) ; ?> 
                              <?php $link_url = $link['url'];
                                $link_title = $link['title']; ?>
                    <div class="text-center"> <a href="<?php echo $link_url ; ?>" class="button-default button-primary-shadow"><?php echo $link_title ; ?></a> </div>
                    <div class="calendar-button"> <a href="<?php echo $link_url ; ?>" class="button-default button-white ">Schedule Service Now!</a><i class="calendar-icon bg-secondary icon-layer-2"></i></div>
                     </div>
                     <div class="affiliate-logo-sec">
                     <?php if (have_rows('add_logos', $setting_post_id) ) : ?>
                        <?php while ( have_rows('add_logos', $setting_post_id) ) : the_row() ; ?>
                           <div class="affiliate-logo"><img src="<?php the_sub_field('add_logo') ; ?>"></div>
                        <?php endwhile ; ?>
                     <?php endif  ;?>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="benefits-content-sec">
      <div class="container">
         <div class="row">
            <div class="col-12 col-xl-8">
               <div class="row text-center">
                  <?php if (have_rows('add_benefits') ) : ?>
                     <?php while (have_rows('add_benefits') ) : the_row() ; ?>
                        <div class="col-12 col-md-4 benefits-panel">
                        <div class="row align-items-center">
                        <div class="col-3 col-md-12"> <i class="benefit-icon <?php the_sub_field('add_icon_class') ; ?>" aria-hidden="true"></i></div>
                        <div class="col-9 col-md-12"><div class="benefits-title"><?php the_sub_field('add_title') ; ?></div></div>
                           </div>
                        </div>
                     <?php endwhile ; ?>
                  <?php endif ;?>
               </div>
            </div>
            <div class="col-12 col-xl-3 offset-xl-1 p-xl-0 side-offset ">
               <div class="form-panel">
                  <div class="form-title bg-secondary pattern-right">Schedule Now!</div>
                  <div class="form-panel-in">
                     <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=false tabindex=01]')?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="main-content-sec">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-10 text-center m-auto ">
               <h1><?php the_title(); ?></h1>
               <div class="entry-content d-none d-md-block">
                  <?php while (have_posts() ) : the_post() ; ?>
                        <?php the_content() ; ?>
                  <?php endwhile ; ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="bg-primary-after-gradient services-content-sec">
      <div class="down-arrow d-md-none"><span><i class="fa fa-angle-down" aria-hidden="true"></i></span></div>  
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="row justify-content-center services-content-row">
                  <?php if (have_rows('add_services') ) : ?>
                     <?php while (have_rows('add_services') ) : the_row() ; ?>
                        <div class="col-6 col-lg-3 flex-column d-flex flex-wrap mb-4 m-lg-0">
                           <div class="d-flex flex-wrap flex-column services-panel">
                              
                                 <div class="services-img"><a  href="<?php the_sub_field('add_link') ; ?>"><img src="<?php the_sub_field('add_image') ; ?>"/> </a></div>
                                 <div class="services-title"><a  href="<?php the_sub_field('add_link') ; ?>"><?php the_sub_field('add_name') ; ?> </a></div>
                             
                           </div>
                        </div>
                     <?php endwhile ; ?>
                  <?php endif ; ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="bg-secondary section_padding_48 d-none d-md-block cta-content-sec ">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-10 text-center m-auto ">
               <div class="cta-content-panel">
                  <button type="button" class="button-default button-border button-default-disable">Call: <?php echo preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2 $3", $phonnum); ?></button>
                  <div class="or-text"><span>or</span></div>
                  <?php $link = get_field('header_button', $setting_post_id) ; ?>
                              <?php $link_url = $link['url'];
   $link_title = $link['title']; ?>
                  <a class="button-default button-white " href="<?php echo $link_url ; ?>"><?php echo $link_title ; ?></a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section_padding_75 promotions-sec">
      <div class="container">
         <div class="row align-items-lg-center">
            <div class="col-12 col-lg-4 text-center text-md-left mb-5 mb-lg-0">
               <div class="promotion-left-title"><?php the_field('add_section_heading') ; ?></div>
               <?php the_field('add_section_content') ; ?>
            </div>
            <?php $args = array ('post_type'=> 'coupon', 'posts_per_page'=> 2 ) ; ?>
               <?php $loop = new WP_Query($args) ; ?>
                  <?php while ($loop->have_posts() ) : $loop->the_post(); ?>
                     <div class="col-12 col-md-6 col-lg-4 promotions-panel">
                        <div class="promotions-block bg-secondary-after-gradient text-center">
                           <div class="promotions-title"><?php the_field('coupon_title') ; ?></div>
                           <div class="promotions-price"><?php the_field('coupon_price') ; ?></div>
                           <div class="promotions-subtitle"><?php the_field('coupon_subtitle') ; ?></div>
                           <p><?php the_field('coupon_text') ; ?></p>
                        </div>
                     </div>
               <?php endwhile ; ?>
            <?php wp_reset_postdata() ; ?>
         </div>
      </div>
   </section>
   <section class="section_padding_65 bg-primary-gradient text-center testimonial-sec ">
      <div class="container">
         <div class="row align-items-lg-center">
            <div class="col-12">
               <div class="title white-color">Our Testimonials</div>
               <div class="testimonial-panel">
                  <div class="review-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/review-logo.png" alt=""/></div>
                  <div class="review-star">  <img src="<?php echo get_template_directory_uri(); ?>/images/review-star.png" alt=""/></div>
                  <div class="testimonial-slider">
                     <?php $args = array ('post_type'=> 'testimonial', 'posts_per_page'=> 3 ) ; ?>
                        <?php $loop = new WP_Query($args) ; ?>
                           <?php while ($loop->have_posts() ) : $loop->the_post(); ?>
                           <div class="testimonial-slide">
                             <?php the_content() ; ?>
                           </div>
                        <?php endwhile ; ?>
                     <?php wp_reset_postdata() ; ?>
                  </div>
                  <a class="button-default button-secondary-gradient button-mobile" href="<?php echo home_url( '/meetze-plumbing-reviews' ); ?>">MORE TESTIMONIALS</a>
               </div>
              
            </div>
         </div>
      </div>
   </section>
   <section class="section_padding_65 services-middle-sec">
      <div class="container">
         <div class="row">
            <div class="col-12 text-center mb-5">
               <div class="title">Why Choose Us?</div>
               <?php the_field('add_choose_us_content') ; ?>
            </div>
            <div class="col-12">
               <div class="row outer-services">
                  <?php if (have_rows('choose_steps') ) : ?>
                     <?php $cnt = 1 ; ?>
                     <?php while (have_rows('choose_steps') ) : the_row() ; ?>
                        <div class="col-12 col-md-4 mb-4 m-lg-0">
                           <div class="outer-services-block">
                              <div class="outer-icon-img"><span><?php echo $cnt ; ?></span><img src="<?php echo get_template_directory_uri(); ?>/images/counter-img.png"/ alt=""> </div>
                              <div class="outer-services-body">
                                 <div class="outer-services-body-in">
                                    <div class="outer-services-title"><?php the_sub_field('add_steps_head') ; ?></div>
                                    <?php the_sub_field('add_steps_content') ; ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php $cnt ++ ;?>
                     <?php endwhile ; ?>
                  <?php endif ; ?>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php get_footer() ;?>

