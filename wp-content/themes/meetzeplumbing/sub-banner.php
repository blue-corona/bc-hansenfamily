               
                  <section class="subpage-site-banner ">
                     <div class="row no-gutters">
                        <div class="col-12">
                           <?php $ban_image = get_field('add_banner_image');?>              
                           <div class="d-flex flex-wrap align-items-center pattern-right sub-banner-col" style="background-image:url('<?php if ($ban_image) { ?> <?php the_field('add_banner_image') ?><?php } else { ?><?php echo get_template_directory_uri() ?>/images/sub-banner.jpg <?php } ?>');">
                              <div class="container">
                                 <div class="main-caption-panel">
                                    <div class="banner-caption">
                                    <?php if(is_home() ){ ?>
                                       <?php single_post_title();?>
                                     <?php } elseif( is_404() ){?>
                                        404 Page
                                    <?php } else { ?>  
                                       <?php if(get_field('banner_title')) { ?>
                                          <?php the_field('banner_title') ; ?>
                                       <?php } else { ?>
                                          <?php the_title();?>
                                       <?php } ?>
                                     <?php } ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="sub-meetze-van"><img src="<?php echo get_template_directory_uri(); ?>/images/meetze-van.png" alt=""/></div>
                        </div>
                     </div>
                  </section>
              