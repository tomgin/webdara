<?php get_header() ?>

<div class="w01">
	<div class="tomi_mds mb40"><p>記事の<br />一覧</p></div>

	<div class="tm_mds">ぼちぼちと書いた記事の一覧</div>

	<!-- list -->
	<ul class="jima clfix mb20">
		<!-- 投稿を自動取得する -->
		<?php
		global $post;
		$cat_id = get_category_by_slug("info");
		$cat_id = $cat_id->cat_ID;
		$my_posts= get_posts(array(
		'category' => $cat_id,
		'numberposts' => -1
		));
		foreach($my_posts as $post):setup_postdata($post);
		?>

		<li>
			<a href="<?php the_permalink(); ?>">
				<?php
				$first_img = 'http://siroyama.lolipop.jp/works/img/abo_noimg.jpg';
				$thumbnail_id = get_post_thumbnail_id();
				$image = wp_get_attachment_image_src($thumbnail_id, 'full');
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
				<div class="i_bun"><?php $d = str_replace('-','',strip_tags(get_the_content())); echo mb_strlen($d) > 95 ? mb_substr($d, 0, 95).'[…]' : $d; ?></div>
				<?php
				foreach((get_the_tags()) as $tag) {
				echo '<div class="i_value">' . $tag->name . '</div>' . ' ';
				}
				?>
			</a>
		</li>

		<?php endforeach; ?>
		<!-- 投稿を自動取得するここまで -->

	</ul>
</div>

<div class="flow_box50 pc"></div>

<?php get_footer(); ?>