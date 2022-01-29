<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Js_Bangladesh
 */

get_header();
?>


    <!--post-default-->
    <section class="section pt-55 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mb-20">
                    <!-- Single Content Area -->
            <div class="post-single">
                <div class="post-single-image">
                    <?php  
                        if (has_post_thumbnail()){
                            the_post_thumbnail('full');
                        }
                    ?>
                </div>
                <div class="post-single-content">
                    <a href="blog-grid.html" class="categorie">
                        <?php 
                            $categories = get_the_category();
    
                            if ( ! empty( $categories ) ) {
                                echo esc_html( $categories[0]->name );   
                            }
                        ?>
                    </a> 
                    <h4><?php the_title( ) ?></h4>
                    <p class='post-content'> <?php the_content() ?> </p>                    
                    <div class="post-single-info">
                        <ul class="list-inline">
                            <li><a href="author.html">

                                <?php
                                    $user = wp_get_current_user();
                        
                                    if ( $user ) :
                                ?>
                                    <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
                                <?php endif; ?>

                            </a></li>
                            <!-- <li> <a href=""> <?php the_author_meta( 'user_email',25 ); ?></a> </li> -->
                            <li class="dot"></li>
                            <li><?php the_time( 'F j, Y' ) ?></li>
                            <li class="dot"></li>
                            <li>
                            <a
                                href="<?php echo get_author_posts_url( get_the_author_meta('ID'))?> "> <?php the_author( ) ?></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>                                                             
            </div> 

            <!-- Next & Previous Post Link -->


    


                    <div class="row">
                        <?php
                            $prevPost= get_previous_post();
                            if(is_a($prevPost, 'WP_Post')):
                        ?>
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-next-post">
                                    <div class="small-post">
                                        
                                        <div class="image">
										    <a href="<?php echo get_permalink($prevPost->ID); ?>">
											    <!-- <img src="assets/img/latest/1.jpg" alt="..."> -->
											    <?php echo get_the_post_thumbnail($prevPost->ID); ?>
										    </a>
									    </div>

                                        <div class="content">
                                            <div>
                                                <a class="link" href=" <?php echo get_permalink($prevPost->ID); ?> ">
                                                <i class="arrow_left"></i>Preview post</a>
                                            </div>
                                            <a href="<?php echo get_permalink($prevPost->ID); ?>"><?php echo get_the_title($prevPost->ID); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    

                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-previous-post">
                                    <div class="small-post">

                                        <div class="image">
                                            <a href="<?php echo get_permalink($nextPost->ID); ?>">
                                                <?php echo get_the_post_thumbnail($nextPost->ID); ?>
                                            </a>
                                        </div>

                                        <div class="content">
                                            <div>
                                                <a class="link" href=" <?php echo get_permalink($nextPost->ID); ?> ">
                                                    <span> Next post</span>
                                                    <span class="arrow_right"></span>
                                                </a>
                                            </div>
                                            <a href=" <?php echo get_permalink($nextPost->ID); ?> "><?php echo get_the_title($nextPost->ID); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php
						endif; ?>
            </div>


         <!-- Post Comment Link -->
         <div>
            <?php comments_template(); ?> 
         </div>
                </div>


                <div class="col-lg-4 max-width">
                    <?php get_template_part('sidebar') ?>
                    <!--/-->
                </div> 
            </div>
        </div>
    </section><!--/-->
        




<?php 
    get_footer();
?>













