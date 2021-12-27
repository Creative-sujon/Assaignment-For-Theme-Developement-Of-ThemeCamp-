<?php
/**
 * Template Name: about Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Js_Bangladesh
 */

get_header();
?>


  
    <!--About-us-->
    <section class="section pt-50">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5> <?php the_title( ) ?> </h5>
                    </div>
                </div>
            </div>
        

            <!-- About Content Area -->
            <div class="row ">
                <div class="col-lg-8 mt-30">
                    <div class="about-us">
                        <div class="about-us-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-us.jpg" />
                        </div>
                        <div class="description">
                            <h6> <?php esc_html_e( 'Thank you for checking out our blog website. ', 'js-bangladesh' ) ?></h6>
                            <p><?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                perferendis minima accusamus aliquam reprehenderit autem ', 'js-bangladesh' ) ?>
                            </p>
                            <p> <?php esc_html_e( 'praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
                                perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.', 'js-bangladesh' ) ?>
                                
                            </p>
                            <div class="quote">
                                <div>
                                    <i class="icon_quotations_alt"></i>
                                </div>
                                <p> <?php esc_html_e( '"My website’s kind of fun for me. I get to do drawings on that. 
                                     It’s kind of fun.”', 'js-bangladesh' ) ?>
                                     
                                </p>
                                <small> <?php esc_html_e( 'Jeff Bridges.', 'js-bangladesh' ) ?> </small>
                            </div>
                           <p> <?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor
                            quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum.
                            Interdum malesuada fames ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. cursus leo ultricies
                            magna faucibus id.', 'js-bangladesh' ) ?>
                             
                           </p>
                        </div>
                    </div>
                </div>


                <!-- Sidebar Area -->
                <div class="col-lg-4 max-width">
                    <?php get_template_part('sidebar') ?>
                </div>

            </div>
                
                   



<?php 

    get_footer();    
?>

