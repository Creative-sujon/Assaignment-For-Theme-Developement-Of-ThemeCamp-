<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Js_Bangladesh
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<?php
            the_comments_navigation();
            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() ) :
		?>
		    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'js-bangladesh' ); ?></p>
        
    <?php
		endif;

        endif; // Check for have_comments().

    ?>

                </div><!-- #comments -->
                    <div class="widget mb-50">
                        <div class="title">
                            <h5 class="comment-count">
                                <!-- Comments-Count-Number -->
                                <?php echo get_comments_number(). '&nbsp;' . 'Comments';?>
                            </h5>
                        </div>
                        
                        <ul class="widget-comments">
                            <?php
                            wp_list_comments(
                                array(
                                    'style'      => 'ol',
                                    'short_ping' => true,
                                )
                            );
                            ?>
                        </ul><!-- .comment-list -->

                        <?php comment_form(); ?> 

                       <!--Leave-comments--> 
                    </div>


