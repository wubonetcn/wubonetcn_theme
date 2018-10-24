<?php get_header(); ?>

<div class="post_main">
	<div class="content">
		<div class="content-item">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="archive_post_card ">
					<div>
						<a href="<?php the_permalink(); ?>" class="archive_post_card_a">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(200,120),array('alt'=> trim(strip_tags( $post->post_title ))));} else {?><img src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" width="200px" height="120px"/><?php }?>
						</a>
					</div>

					<div>
						<div class="archive_post_card_title">
							<p style="font-size: 14px;font-weight: 700;"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?> </a></p>
						</div>
						<div class="">
							<p class="archive_post_card_content_p"><?php echo wp_trim_words(get_the_content(), 80); ?></p>
						</div>
						<div class="small_post_card_time">
							<img src="<?php bloginfo('template_directory'); ?>/images/clock.png" width="10px" height="10px">
							<small><?php the_time('Y年n月j日') ?></small>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
				<p >未添加文章。</p>
			<?php endif; ?>

			<div class="pagination">
				<div class="page_navi"><?php par_pagenavi(9); ?></div>
			</div>
		</div>


	</div>
	<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>



