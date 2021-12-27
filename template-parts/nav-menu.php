        
    <!-- Navigation-->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!--logo-->
                <div class="logo">
                    <a href=" <?php site_url()?>">
                        <?php
                            the_custom_logo();
                            if ( is_home() && ! is_front_page() ) : ?>
                        <?php endif; ?>
                    </a>
                </div>
                <!--/-->


                <!--navbar-collapse-->
                <div class="collapse navbar-collapse" id="main_nav">
                    <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_id'        => 'primary-menu',
                                    'menu_class'     => 'navbar-nav ml-auto mr-auto',
                                    'container'      => 'div',
                                    'container_class'=> 'collapse navbar-collapse'
                                )
                            );
                    ?> 
                </div>
                <!--/-->
        
                <!--navbar-right-->
                <div class="navbar-right ml-auto">
                    <div class="theme-switch-wrapper">
                    <label class="theme-switch" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>
                    </div>
                    <div class="social-icones">
                        <ul class="list-inline">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="search-icon">
                        <i class="icon_search"></i>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    <!--/-->