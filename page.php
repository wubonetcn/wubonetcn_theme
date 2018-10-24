<?php get_header(); ?>

<div style="margin: 30px;">
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
		<?php else : ?>
			<div class="errorbox">
				没有文章！
			</div>

		<?php endif; ?>


		<div class="content-item comments">
			<?php comments_template(); ?>
		</div>
	</div>


</div>
<?php get_footer(); ?>



