<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                                <main id="main" class="site-main content-area-inner">

                                        <?php if ( have_posts() ) : ?>
                                
                                            <header class="page-header">
                                                <h1 class="page-title">
                                                    <?php _e( 'Search results for:', 'meetzeplumbing' ); ?>
                                                </h1>
                                                <div class="page-description"><?php echo get_search_query(); ?></div>
                                            </header><!-- .page-header -->
                                
                                            <?php
                                            // Start the Loop.
                                            while ( have_posts() ) :
                                                the_post();
                                
                                                ?>
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
												<?php
                                            endwhile;
											if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif;
                                
                                            // If no content, include the "No posts found" template.
                                        else :
                                            get_template_part( 'template-parts/content/content', 'none' );
                                
                                        endif;
                                        ?>
                                        </main><!-- #main -->
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
