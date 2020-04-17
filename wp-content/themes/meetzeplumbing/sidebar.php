<?php 
/***Sidebar***/
  global $setting_post_id;
global $phonnum;
?>
<div class="sidebar-area-inner">
                                       <?php if ( get_field('hide_form') == true ) { ?>
                                    
                                       <?php } else { ?>

                                          <div class="form-panel  mb-5">
                                       <div class="form-title bg-secondary pattern-right">Schedule Now!</div>
                                       <div class="form-panel-in">
                                        <?php echo do_shortcode('[gravityform id=2 title=false description=false ajax=false tabindex=01]')?>
                                       </div>
                                    </div>

                                       <?php } ?>
                                   


                                    <div class="section_padding_75 promotions-sec">
                                       <div class="row">
                                          <div class="col-12 mb-5">
                                             <div class="promotion-left-title"><?php the_field('promotion_section_heading', $setting_post_id) ;?></div>
                                             <p><?php the_field('promotion_section_content', $setting_post_id) ;?></p>
                                          </div>
                                          <?php $args = array ('post_type'=> 'coupon', 'posts_per_page'=> 2 ) ; ?>
               <?php $loop = new WP_Query($args) ; ?>
                  <?php while ($loop->have_posts() ) : $loop->the_post(); ?>
                                          <div class="col-12 col-md-6 col-lg-12 mb-5">
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
                                 </div>