<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<p class="comment-title">评论已被密码保护</p>
<p class="how-many-comment">请输入密码以查看或发表评论。</p>

<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->



<div class='splash'>
          <div class='splashline'></div>
        </div>

<?php if ('open' == $post->comment_status) : ?>

		<p class="comment-title">评论</p>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p class="loggined">需要<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">登录</a>后才能发表评论。</p>

<?php else : ?>

  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">

<div class="form-control-border">
  <textarea placeholder="添加评论…" name="comment" id="comment" rows="6" tabindex="2" class="form-control-material"></textarea>
</div>
  <div class="row commentbtnborder">
    <div class="col-md-2 pull-right">
      <button name="submit" type="submit" id="submit" class="sendbutton" >添加评论</button>
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
    </div>
    <?php if ( $user_ID ) : ?>
<div class="loggined col-md-10">
<p>已登录为 <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>。<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">不是你？</a></p>
</div>
<?php else : ?>
    <div class="col-md-6">
<div class="row commentprofile">
  <div class="col-md-6">
    <div class="form-group-underline">
      <input class="form-control-material" placeholder="尊姓大名" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group-underline">
      <input class="form-control-material" placeholder="电邮地址" type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
    </div>
</div>
  </div>
      </div>

<?php endif; ?>
  </div>

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php if ($comments) : ?>
	<p class="how-many-comment">这篇文章<?php comments_number('没有', '有一条', '有 % 条' );?>评论。</p>

<div class="commentlist">
<?php foreach ($comments as $comment) : ?>

	<div class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

<div class="commentmetadata">
  <p><strong><?php comment_author_link() ?></strong> &middot; 发表于 <a id="comment-<?php comment_ID() ?>-time" href="#comment-<?php comment_ID() ?>" title="<?php comment_date('Y/m/d H:i:s') ?>"></a><?php edit_comment_link('编辑',' &middot; ',''); ?>
  </p>
  <script>
    var commenttime = moment("<?php comment_date('Y/m/d H:i:s') ?>");
    $("#comment-<?php comment_ID() ?>-time").text(commenttime.fromNow());
  </script>
 		<?php if ($comment->comment_approved == '0') : ?>
		<em><?php _e('Your comment is awaiting moderation.'); ?></em>
 		<?php endif; ?>
</div>

<?php comment_text() ?>
	</div>

<?php /* Changes every other comment to a different class */
	if ('alt' == $oddcomment) $oddcomment = '';
	else $oddcomment = 'alt';
?>

<?php endforeach; /* end for each comment */ ?>
	</div>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="how-many-comment">该文章的评论已被关闭。</p>

	<?php endif; ?>
<?php endif; ?>




<?php endif; // if you delete this the sky will fall on your head ?>