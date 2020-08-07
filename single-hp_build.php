<?php get_header() ?>

<!-- ループ開始 -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="hp_build">

<div class="wib01">
	<div class="tm_mds"><?php the_title(); ?></div>
	<div class="att_link"><a href="<?php echo post_custom('hp_link');?>" target="_blank"><?php echo post_custom('hp_link');?></a></div>
	<div class="hpb_txt"><?php echo nl2br(post_custom('hp_greek'));?></div>

	<?php $cftimg = wp_get_attachment_image_src(get_post_meta($post->ID, 'hp_img', true), 'full'); ?>
	<img class="hpd_img img100" src="<?php echo $cftimg[0]; ?>" alt="<?php the_title(); ?>">

	
	<a href="<?php echo home_url(); ?>/hp" class="kengaku hv_a">一覧へ戻る</a>
</div>

<!-- 次へ前へ -->
<div class="blog_pager">
	<?php the_date(); ?> 投稿｜
	&nbsp;
	<?php previous_post_link('%link','&laquo;&nbsp;前の記事'); ?>
	&nbsp;&nbsp;
	<?php next_post_link('%link','次の記事&nbsp;&raquo;'); ?>
</div>

</div><!-- .hp_build -->
<?php endwhile;endif; ?>
<!-- ループここまで -->

<?php get_footer(); ?>
