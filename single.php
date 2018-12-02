<?php get_header(); ?>

<div class="post_main">
	<div class="content">
		<div class="content-item">
			<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
			<div class="single_title">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="hr"></div>
			<div class="single_content">
				<?php the_content(); ?>
			</div>

		</div>
        <div class="single_content_tags">
            <span>Tags:</span><?php if ( has_tag() ) {
				the_tags( 'Tags', ', ', '' );
			} else {
				echo "<span>无标签</span>";
			} ?>
        </div>
		<?php else : ?>
			<div class="errorbox">
				没有文章！
			</div>

		<?php endif; ?>

		<div class="single_content_nav">
		<?php
		$categories = get_the_category();
		$categoryIDS = array();
		foreach ($categories as $category) {
			array_push($categoryIDS, $category->term_id);
		}
		$categoryIDS = implode(",", $categoryIDS);
		?>
		<?php if (get_previous_post()) {} else {echo '<a class="single_content_nav_left">
					上一篇<br>没有了，已经是第一篇了
				</a>';} ?>

		<?php
		$prev_post = get_previous_post();
		if (!empty( $prev_post )):
			?>
			<a title="<?php echo $prev_post->post_title; ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>" rel="prev" class="single_content_nav_left p_overflow">
				上一篇<br><?php echo $prev_post->post_title; ?>
			</a>
		<?php endif; ?>
		<?php
		$next_post = get_next_post();
		if (!empty( $next_post )): ?>
			<a title="<?php echo $next_post->post_title; ?>" href="<?php echo get_permalink( $next_post->ID ); ?>" rel="next" class="single_content_nav_right p_overflow">
				下一篇<br><?php echo $next_post->post_title; ?>
			</a>

		<?php endif; ?>
		<?php if (get_next_post()) { } else {echo '<a class="single_content_nav_right">
					下一篇<br>没有了，已经是最新一篇了
				</a>';} ?>

	</div>
		<div class="content-item comments">
			<?php comments_template(); ?>
		</div>
	</div>
	<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>



