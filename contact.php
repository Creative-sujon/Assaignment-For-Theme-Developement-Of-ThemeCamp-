<?php
/**
 * Template Name: Contact Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Js_Bangladesh
 */

get_header();
?>



    <!--contact us-->
    <section class="section pt-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5> <?php the_title( ) ?> </h5>
                    </div>
                </div>
            </div>
            
            <div class="row mb-20">
                <div class="col-lg-8 mt-30">
                    <div class="contact">
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.5761533072873!2d-78.19644468515456!3d38.91080675375955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b5c5dc680d0b2b%3A0x1e9ff0b6bb7a2f87!2s1000%20Proctor%20Ln%2C%20Front%20Royal%2C%20VA%2022630%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sma!4v1578068093888!5m2!1sfr!2sma"
                                allowfullscreen="">
                            </iframe>
                        </div>
                        <form action="https://noonpost.netlify.app/html/template/assets/php/mail.php" class="widget-form contact_form " method="POST" id="main_contact_form">
                            <h6> <?php esc_html_e( 'Feel free to contact any time.', 'js-bangladesh' ) ?> </h6>
                            <p> <?php esc_html_e( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, repudiandae.', 'js-bangladesh' ) ?> </p>
                            <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                <?php esc_html_e( 'Your message was sent successfully.', 'js-bangladesh' ) ?>
                            </div>
                        </form>

                        <?php echo do_shortcode( '[contact-form-7 id="162" title="Untitled"]' ); ?>

                    </div> 
                </div>



                <!-- Sidebar Area -->
                <div class="col-lg-4 max-width">
                    <?php get_template_part('sidebar') ?>
                </div>
                
            
                </div>
            </div>
           
        </div>
    </section>        


<?php 

    get_footer();    
?>


