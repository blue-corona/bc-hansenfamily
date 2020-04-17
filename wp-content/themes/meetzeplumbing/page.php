<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Meetze_Plumbing
 * @since 1.0.0
 */
get_header(); ?>
<main id="main" class="site-main top-offset">
            <article>
               <?php include('sub-banner.php');?>
               <section class="sub-content-sec">
                  <div class="container">
                     <div class="row">
                              <div class="col-12 col-lg-8 d-flex flex-wrap content-area">
                                 <div class="content-area-inner">
                                    <h1 class="entry-title"><?php the_title() ; ?></h1>
                                    <div class="entry-content">
                                       <?php while (have_posts() ) : the_post() ; ?>
                                          <?php the_content() ; ?>
                                        <?php endwhile ; ?>
                                    </div>
                                    <?php if (get_field('add_steps_section') ) { ?>
                                    <div class="outer-services sub-outer-services">
                                      <?php if (have_rows('add_steps') ) : ?>
                                        <?php $cnt = 1 ; ?>
                                        <?php while (have_rows('add_steps') )  :  the_row() ; ?>
                                       <div class="outer-services-row">
                                          <div class="row no-gutters">
                                             <div class="col-12 col-sm-4 mb-4 mb-sm-0 p-0">
                                                <div class="outer-services-img"><img src="<?php the_sub_field('add_image') ; ?>"> </div>
                                             </div>
                                             <div class="col-12 col-sm-8 ">
                                                <div class="outer-services-block">
                                                   <div class="outer-icon-img"><span><?php echo $cnt ; ?></span><img src="<?php echo get_template_directory_uri(); ?>/images/counter-img.png"/ alt=""> </div>
                                                   <div class="outer-services-body">
                                                      <div class="outer-services-body-in">
                                                         <div class="outer-services-title"><?php the_sub_field('add_title') ; ?></div>
                                                         <p><?php the_sub_field('add_content') ; ?></p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <?php $cnt++ ; ?>
                                       <?php endwhile ; ?>
                                      <?php endif ; ?>
                                    </div>
                                  <?php } ?>
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
get_footer();
