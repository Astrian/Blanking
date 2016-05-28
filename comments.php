<div class='splash'>
          <div class='splashline'></div>
        </div>

<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
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
<p class="comment-title">评论</p>

	<?php if ( have_comments() ) : ?>
		<p class="how-many-comment">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					echo '这篇文章有 1 条评论。';
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'这篇文章有 %1$s 条评论。',
							'这篇文章有 %1$s 条评论。',
							$comments_number,
              '',
              ''
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</p>

		<?php the_comments_navigation(); ?>

  

		<div class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'div',
					'short_ping'  => true,
					'avatar_size' => 0,
				) );
			?>
		</div><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentysixteen' ); ?></p>
	<?php endif; ?>

	<?php
		comment_form( array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		) );
	?>