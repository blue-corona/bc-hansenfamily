<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
                                   <h1 class="entry-title">Missing Page</h1>
                                    <div class="entry-content">
                                    <p>Oops! We can't find the page you are looking for.<br> Try using the Site Search bar in the top right to find the page you are looking for!</p>
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
