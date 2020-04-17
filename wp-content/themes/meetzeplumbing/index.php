<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                                    <h1 class="entry-title">Our Blog</h1>
                                    <div class="entry-content">
                                      
            <?php if ( have_posts() ) : ?>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" class="post_single">
               <?php if ( is_sticky() ) : ?>
               <hgroup>
                  <h2><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?></a></h2>
                  <h3 class="entry-format"><?php _e( 'Featured', 'meetzeplumbing' ); ?></h3>
               </hgroup>
               <?php else : ?>
               <h2><a href="<?php the_permalink(); ?>"  rel="bookmark"><?php the_title(); ?></a></h2>
               <?php endif; ?>
               
               <?php the_excerpt(); ?>
               <a href="<?php the_permalink(); ?>" class="button-default button-primary-shadow">Read More</a></br></br> 
            </div>
            <!-- #post-<?php the_ID(); ?> -->
            <?php endwhile; ?>
            <?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
            <?php else : ?>
            <article id="post-0" class="post no-results not-found">
               <header class="entry-header">
                  <h1 class="entry-title"><?php _e( 'Nothing Found', 'meetzeplumbing' ); ?></h1>
               </header>
               <!-- .entry-header -->
               <div class="entry-content">
                  <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'meetzeplumbing' ); ?></p>
               </div>
               <!-- .entry-content -->
            </article>
            <!-- #post-0 -->
            <?php endif; ?>
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
