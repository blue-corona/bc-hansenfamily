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

get_header();
?>
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
