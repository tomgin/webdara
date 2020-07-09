<?php get_header() ?>

<!-- ブログ本体 -->
<div class="blog_wrap clfix">
	<!-- ループ開始 -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="blog_all">
		<h4><?php the_title(); ?></h4>
		<h6>投稿日：<?php the_time('Y年m月d日'); ?></h6>
		<div class="thumb">
			<?php the_content(); ?>
		</div>
		<div class="dot_line"></div>
	</div>
	<?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
    <!-- ループ終了 -->
</div>

<!-- ページャー追加 -->
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

<div class="flow_box40"></div>

<?php get_footer(); ?>