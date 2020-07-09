<?php get_header() ?>
	
<!-- ブログ本体 -->
<div class="blog_wrap clfix">
	<div class="blog_once">
		<!-- ループ開始 -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h4><?php the_title(); ?></h4>
		<h6>投稿日：<?php the_time('Y年m月d日'); ?></h6>
		<div class="thumb">
			<?php the_content(); ?>
		</div>
	</div>
	
	<div class="sidebar_wrap">
		<?php dynamic_sidebar(sidebar); ?>
	</div>
</div>

<!-- 次へ前へ -->
<div class="blog_pager">
	<?php the_date(); ?> 投稿｜
	&nbsp;
	<?php previous_post_link('%link','&laquo;&nbsp;前の記事',TRUE); ?>
	&nbsp;&nbsp;
	<?php next_post_link('%link','次の記事&nbsp;&raquo;',TRUE); ?>
</div>

<!-- ページャー追加 -->
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

<?php endwhile;endif; ?>
<!-- ループここまで -->

<div class="flow_box3"></div>
	
<?php get_footer(); ?>
