<?php get_header(); ?>

<div class="grid">
    <div class="grid-fluid"></div>
    <div class="grid-center">
        <div class="main">

            <div class="content">
                <div class="crumb-box">
				    <?php if ( function_exists( 'cmp_breadcrumbs' ) ) {
					    cmp_breadcrumbs();
				    } ?>
                </div>

			    <?php if ( get_option( 'Y_pc_post_top_ad_btn' ) == 'Display' ) { ?>
                    <div class="pc_post_top_ad show_lg_only">
					    <?php echo stripslashes( get_option( 'Y_pc_post_top_ad_code' ) ); ?>
                    </div>
			    <?php } ?>

                <div class="content-item">
				    <?php if ( have_posts() ) :
				    the_post();
				    update_post_caches( $posts ); ?>


                    <div class="single_title">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <h6>发表于<?php the_time( 'Y年n月j日' ) ?>&nbsp;&nbsp;&nbsp;分类：<?php $category = get_the_category();
						    echo '<a href="' . get_category_link( $category[0]->cat_ID ) . '">' . $category[0]->cat_name . '</a>'; ?>
                            &nbsp;&nbsp;&nbsp;<?php comments_popup_link( '0 条评论', '1 条评论', '% 条评论', '', '评论已关闭' ); ?></h6>
                    </div>
                    <div class="hr"></div>

                    <div class="single_content">
					    <?php the_content(); ?>
                        <div>
                            <div class="reward">
                                <div class="reward-button">
                                    赏
                                    <span class="reward-code">
                                <span class="alipay-code">
                                <img class="alipay-img" src="<?php echo stripslashes( get_option( 'Y_zhifubao' ) ); ?>">
                                <b>支付宝打赏</b>
                            </span>
                                <span class="wechat-code">
                                    <img class="wechat-img"
                                         src="<?php echo stripslashes( get_option( 'Y_weixin' ) ); ?>">
                                    <b>微信打赏</b>
                                </span>
                                </span>
                                </div>
                                <div class="reward-notice">&nbsp;喜欢作者</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="single_content_tags">
                    <span>Tags:</span><?php if ( has_tag() ) {
					    the_tags( 'Tags', ', ', '' );
				    } else {
					    echo "<span>无标签</span>";
				    } ?>
                </div>
			    <?php if ( get_option( 'Y_pc_post_bot_ad_btn' ) == 'Display' ) { ?>
                    <div class="pc_post_bot_ad show_lg_only">
					    <?php echo stripslashes( get_option( 'Y_pc_post_bot_ad_code' ) ); ?>
                    </div>
			    <?php } ?>
			    <?php if ( get_option( 'Y_mobile_post_bot_ad_btn' ) == 'Display' ) { ?>
                    <div class="mobile_post_bot_ad show_sm_only">
					    <?php echo stripslashes( get_option( 'Y_mobile_post_bot_ad_code' ) ); ?>
                    </div>
			    <?php } ?>
			    <?php else : ?>
                <div class="errorbox">
                    没有文章！
                </div>
            </div>
		    <?php endif; ?>


            <div class="single_content_nav">
			    <?php
			    $categories  = get_the_category();
			    $categoryIDS = array();
			    foreach ( $categories as $category ) {
				    array_push( $categoryIDS, $category->term_id );
			    }
			    $categoryIDS = implode( ",", $categoryIDS );
			    ?>
			    <?php if ( get_previous_post() ) {
			    } else {
				    echo '<a class="single_content_nav_left">
					上一篇<br>没有了，已经是第一篇了
				</a>';
			    } ?>

			    <?php
			    $prev_post = get_previous_post();
			    if ( ! empty( $prev_post ) ):
				    ?>
                    <a title="<?php echo $prev_post->post_title; ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>"
                       rel="prev" class="single_content_nav_left p_overflow">
                        上一篇<br><?php echo $prev_post->post_title; ?>
                    </a>
			    <?php endif; ?>
			    <?php
			    $next_post = get_next_post();
			    if ( ! empty( $next_post ) ): ?>
                    <a title="<?php echo $next_post->post_title; ?>" href="<?php echo get_permalink( $next_post->ID ); ?>"
                       rel="next" class="single_content_nav_right p_overflow">
                        下一篇<br><?php echo $next_post->post_title; ?>
                    </a>

			    <?php endif; ?>
			    <?php if ( get_next_post() ) {
			    } else {
				    echo '<a class="single_content_nav_right">
					下一篇<br>没有了，已经是最新一篇了
				</a>';
			    } ?>

            </div>
            <div class="single_content_same">
                <h3>相关文章</h3>
                <div class="single_content_same_content">
				    <?php
				    global $post;
				    $cats = wp_get_post_categories( $post->ID );
				    if ( $cats ) {
					    $args = array(
						    'category__in'     => array( $cats[0] ),
						    'post__not_in'     => array( $post->ID ),
						    'showposts'        => 12,
						    'caller_get_posts' => 1
					    );
					    query_posts( $args );

					    if ( have_posts() ) {
						    while ( have_posts() ) {
							    the_post();
							    update_post_caches( $posts ); ?>
                                <div class="single_content_same_content_item">
                                    <div class="p_overflow ">
                                        * <a href="<?php the_permalink(); ?>" rel="bookmark"
                                             title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <div class="p_overflow ">
                                        &nbsp;<a style="color: #9f9e9d;"
                                                 href="<?php the_permalink(); ?>"><?php the_time( 'm月d日' ); ?></a>
                                    </div>
                                </div>
							    <?php
						    }
					    } else {
						    echo '<div>* 暂无相关文章</div>';
					    }
					    wp_reset_query();
				    } else {
					    echo '<div>* 暂无相关文章</div>';
				    }
				    ?>
                </div>

            </div>
            <div class="content-item comments">
			    <?php comments_template(); ?>

            </div>


        </div>
	    <?php get_sidebar() ?>

    </div>
    </div>
    <div class="grid-fluid"></div>
</div>

<?php get_footer(); ?>



