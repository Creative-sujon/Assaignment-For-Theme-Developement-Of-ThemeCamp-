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

<div class="container">
    <div class="row">

        <div class="col-lg-8 mt-5"> 

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
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-next-post">
                                    <div class="small-post">
                                        <div class="image">
                                            
                                            <?php $prevPost = get_previous_post(true);
                                                if($prevPost) {
                                                    $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) ); 
                                                } 
                                                previous_post_link('%link',"$prevthumbnail", TRUE); 
                                            ?>

                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="post-default.html"><i class="arrow_left"></i>Preview post</a>
                                            </div>
                                            <a href="post-default.html"> <?php previous_post_link( ) ?> </a>
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

                                                    <?php $nextPost = get_next_post(true);
                                                        if (isset($nextPost))  {
                                                            $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) ); 
                                                        } 
                                                        next_post_link('%link',"$nextthumbnail", TRUE);
                                                    ?>                   
                                            
                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="  ">
                                                    <span> Next post</span>
                                                    <span class="arrow_right"></span>
                                                </a>
                                            </div>
                                            <a href=""> <?php next_post_link( ); ?> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>


         <!-- Post Comment Link -->
         <div>
            <?php comments_template(); ?> 
         </div>



        </div>


        <!-- Sidebar -->
         <div class="col-lg-4 mt-5">
            <?php get_template_part('sidebar') ?>
        </div>

        
    </div>
                     
        




<?php 
    get_footer();
?>



