
<div class="footer">
	<div class="footer_logo_card">
        <img src="<?php bloginfo('template_directory'); ?>/images/footer_logo.png" class="footer_logo">
	</div>
	<div class="footer_p">
		<span>Copyright © <?php echo date("Y")?>  <a  href="<?php echo site_url('/','relative'); ?>"> <?php echo get_bloginfo('name'); ?></a></span>
	</div>
	<div class="footer_p">
		<span>Powered by <a href="http://www.wordpress.org/" target="_blank">WordPress</a> Themes by <a href="https://www.wubo.net.cn/download_wubonetcn_theme/" target="_blank">物博网主题</a></span>
	</div>
    <div class="footer_p">
        <span>
            <a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank">
                <?php echo get_option( 'zh_cn_l10n_icp_num' );?>
            </a>
        </span>
    </div>
</div>
<?php wp_footer(); ?>

</body>
</html>