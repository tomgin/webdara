<?php get_header() ?>

<!-- ループ開始 -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="hp_build">

<div class="wib01">
	<div class="tm_mds"><?php the_title(); ?></div>
	<div class="hpb_txt"><?php echo post_custom('hp_greek');?></div>


	<!-- <table class="aji">
		<tr>
			<th><p><?php echo nl2br(post_custom('hp_ttl'));?></p></th>
			<td><p><?php echo post_custom('hp_greek');?></p></td>
		</tr>
	</table> -->

	<?php $cftimg = wp_get_attachment_image_src(get_post_meta($post->ID, 'hp_img', true), 'full'); ?>
	<a href="<?php echo post_custom('hp_link');?>" target="_blank"><img class="hpd_img img100" src="<?php echo $cftimg[0]; ?>" alt="<?php the_title(); ?>"></a>

	
	<a href="<?php echo home_url(); ?>/hp" class="kengaku hv_a">作成HP一覧へ</a>
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
