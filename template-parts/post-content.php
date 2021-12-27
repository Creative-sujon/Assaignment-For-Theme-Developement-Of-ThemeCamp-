<section class="masonry-layout col2-layout mt-120">
        <div class="container-fluid">
            <div class="row">

                <!-- Post Area -->
                <div class="col-lg-8 mt--10 ">
                    <!--cards-->
                    <div class="card-columns">
                        
                        <?php
                            if ( have_posts() ) :
                                

                                /* Start the Loop */
                                while ( have_posts() ) :
                                    the_post();

                                    /*
                                    * Include the Post-Type-specific template for the content.
                                    * If you want to override this in a child theme, then include a file
                                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                    */
                                    get_template_part( 'template-parts/posts/post', get_post_type() );


                                endwhile;
                            endif;
                        ?>  
                                                                           
                    </div>


                    <!--pagination-->
                    <div class=" pagination mt-30">
                        <?php 
                            the_posts_pagination( array(
                            'prev_text' =>__( '<<', 'js-bangladesh' ),
                            'next_text' =>__( '>>', 'js-bangladesh' ),) ); 
                        ?>
                    </div><!--/-->
                </div>



                <!-- Sidebar Area -->
                <div class="col-lg-4 max-width">
                    <?php get_template_part('sidebar') ?>
                </div>

            </div>
        </div>
    </section>