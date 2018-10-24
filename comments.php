<?php
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');
?>
<!– Comment’s List –>
<h3>精彩留言</h3>

<ol class="commentlist">
	<?php
	if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
		// if there's a password
		// and it doesn't match the cookie
		?>
		<li class="decmt-box">
			<p><a href="#addcomment">请输入密码再查看评论内容.</a></p>
		</li>
		<?php
	} else if ( !comments_open() ) {
		?>
		<li class="decmt-box">
			<p><a href="#addcomment">评论功能已经关闭!</a></p>
		</li>
		<?php
	} else if ( !have_comments() ) {
		?>
		<li class="decmt-box">
			<p><a href="#addcomment">还没有任何评论，你来说两句吧</a></p>
		</li>
		<?php
	} else {
		wp_list_comments('type=comment&callback=aurelius_comment');
	}
	?>
</ol>

<!– Comment Form –>


<?php comment_form(); ?>