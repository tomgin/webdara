<?php get_header() ?>

<div class="w01">
	<div class="tomi_mds mb40"><p>制作した<br />サイト</p></div>

	<div class="tm_mds">これまでに制作に関わった主なHPです</div>

	<!-- list -->
	<ul class="jima clfix mb20">
		<!-- 投稿を自動取得する -->
		<?php
		    global $post;
		    $my_posts= get_posts(array(
		    'post_type' => 'hp_build' ,
		    'posts_per_page' => -1
		    ));
		?>

		<!-- ループ開始 -->
		<?php foreach($my_posts as $post):setup_postdata($post); ?>

		<li>
			<a href="<?php the_permalink(); ?>">
				<!-- 特定の画像なければnoimage出す -->
				<?php
				$first_img = 'http://siroyama.lolipop.jp/works/img/abo_noimg.jpg';
				$image = wp_get_attachment_image_src(get_post_meta($post->ID, 'hp_img', true),'full');
				if ( $image[0] ) {
				    $first_img = $image[0];
				}
				 else {
				if ( preg_match( '/<img.*src\s*=\s*[\'\"]([^\'\"]*(\.jpg|\.jpeg|\.png)+[^\"\']*)[\'\"].*?>/i', get_the_content(), $matches ) ) {
				        $first_img = $matches[1];
				    }
				}
				?>
				<div style="background-image: url('<?php echo esc_attr( $first_img ); ?>');" class="i_photo"></div>
				<div class="i_name"><?php the_title(); ?></div>
				<?php $moji = get_field('hp_greek'); ?>
				<div class="i_bun"><?php echo mb_strimwidth("$moji", 0, 80, "[…]"); ?></div>
				<!-- <div class="i_value"><?php echo post_custom('cate_name');?></div> -->
			</a>
		</li>

		<?php endforeach; ?>
		<!-- ループ終了 -->

	</ul>
</div>

<div class="flow_box50 pc"></div>

<?php get_footer(); ?>