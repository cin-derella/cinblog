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
 * @package cin.derel.la
 */

get_header();?>

<div id="primary" class="content-area">    

		<main id="main" class="site-main">

        <!----Start homepage content------->
        
        <div class="wrapper">

                <section id ="articles">
                   
                    
  
            <?php $myquery = new WP_Query('category_name=blog&posts_per_page=4');?>
			<?php while ($myquery->have_posts() ) : $myquery->the_post();?>
		<ul>
                    <li id="title">
                
                            <a href="<?php the_permalink()?>"><?php the_title();?></a>
                    
                    </li>
                        
                    <li id="time">
                        
                                <?php  the_time('Y-m-d'); ?>
                
                    </li>
                        
                    <li id="author">
                      
                            <span>By</span><a href="<?php the_permalink()?>"><?php the_author();?></a>
               
                    </li>
                        
                    <li>
                        <a href="<?php the_permalink()?>"><?php the_post_thumbnail();?></a>
                    </li>
                        
                    <li id="excerpt" style="width: 600px; float: left">
                    
                        <?php the_excerpt();?>
                        <span style="float: right"><a href="<?php the_permalink()?>">阅读全文>></a></span>
               
                    </li>
                    
		</ul>                        

			<?php endwhile;?>

                </section>

        </div>
        <!----End homepage content------->   

		</main><!-- #maintime()/div><!-- #primary -->

    
<?php get_footer();?>
