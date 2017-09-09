<?php
/**
 * Custom Comment Display
 *
 * @package   Tetris WordPress Theme
 * @author    Alexander Clarke
 * @copyright Copyright (c) 2015, WPExplorer.com
 * @link      http://www.wpexplorer.com
 * @since     1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    return;
}

function wpex_comments_output($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comment-body <?php if ($comment->comment_approved == '0') echo 'pending-comment'; ?> clearfix">
                <div class="comment-details">
                    <div class="comment-avatar">
                        <?php echo get_avatar($comment, $size = '45'); ?>
                    </div><!-- /comment-avatar -->
                    <section class="comment-author vcard">
						<?php printf(__('<cite class="author">%s</cite>'), get_comment_author_link()) ?>
						<span class="comment-date"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"> &middot; <?php echo get_comment_date(); ?></a></span>
                        <span class="reply"><?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply','tetris') ,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></span>
                    </section><!-- /comment-meta -->
                    <section class="comment-content">
    	                <div class="comment-text">
    	                    <?php comment_text() ?>
    	                </div><!-- /comment-text -->
                    </section><!-- /comment-content -->
				</div><!-- /comment-details -->
		</div><!-- /comment -->
<?php
} //end wpex_comments_output()
?>