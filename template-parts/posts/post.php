        
        
        
        <div class="card">
            <div class="post-card">
                <div class="post-card-image">
                    <a href="post-default.html">
                        <?php  
                            if (has_post_thumbnail()){
                                the_post_thumbnail('medium');
                            }
                        ?>
                    </a>
                </div>
                <div class="post-card-content">

                    <a href="" class="categorie">
                            <!-- Single Category Name -->
                        <?php     
                            $category = get_the_category(); 
                            echo $category[0]->cat_name;      
                        ?>
                    </a> 

                    <h5><a href=" <?php the_permalink() ?> "> <?php the_title( ) ?> </a> </h5>
                    <p>
                        <?php
                            $excerpt = get_the_excerpt(); 
                                
                            $excerpt = substr( $excerpt, 0, 160 ); // Only display first 250 characters of excerpt
                            $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                            echo $result;  
                        ?>
                    </p>
                    <div class="post-card-info">
                        <ul class="list-inline">

                            <!-- Author Image -->
                            <li><a href=" <?php the_permalink() ?> "> <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?> </a></li>
                            <li>
                                <a href="<?php echo get_author_posts_url( get_the_author_meta('ID'))?>"> <?php the_author( ) ?></a>
                            </li>
                            <li class="dot"></li>
                            <li> <?php the_time( 'F j, Y' ) ?></li>
                        </ul>
                    </div>
                </div>
            </div><!--/-->
        </div>


        