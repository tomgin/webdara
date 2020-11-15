<?php get_header() ?>

<!-- ブログ本体 -->
<div class="att_wrap">
	<div class="blog_wrap clfix">
		<div class="blog_once">
			<!-- ループ開始 -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h4><?php the_title(); ?></h4>
			<!-- <h6>投稿日：<?php the_time('Y年m月d日'); ?></h6> -->
			<!-- <div class="att_link"><a href="<?php echo post_custom('att_link');?>" target="_blank"><?php echo post_custom('att_link');?></a></div> -->
			<div class="thumb">
				<?php if($post->post_content=="") : ?>
				<!-- ここに記事本文が空だった場合のソース  -->
				※この投稿に解説はありません
				<?php else : ?>
				<?php the_content() ;?>
				<?php endif; ?>
			</div>
			<?php $cftimg = wp_get_attachment_image_src(get_post_meta($post->ID, 'bn_img', true), 'full'); ?>
			<div class="bn_img">
				<img style="max-width: 100%;" src="<?php echo $cftimg[0]; ?>" alt="<?php the_title(); ?>">
			</div>
		</div>

		<!-- <div class="sidebar_wrap">
			<?php dynamic_sidebar(sidebar); ?>
		</div> -->
	</div>
</div>

<!-- 次へ前へ -->
<div class="blog_pager">
	<?php the_date(); ?> 投稿｜
	&nbsp;
	<?php previous_post_link('%link','&laquo;&nbsp;前の記事'); ?>
	&nbsp;&nbsp;
	<?php next_post_link('%link','次の記事&nbsp;&raquo;'); ?>
</div>

<!-- ページャー追加 -->
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

<?php endwhile;endif; ?>
<!-- ループここまで -->

<div class="flow_box3"></div>

<?php get_footer(); ?>
