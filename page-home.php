<?php get_header() ?>

<!-- ****************************************
	mv
**************************************** -->
<div class="mv_wrap">
	<!-- <img class="yasu" src="<?php bloginfo('template_directory'); ?>/img/webdara.png" alt=""> -->
	<div class="mv_greek">
		<div class="mvg_mds">Webノート</div>
		<div class="mvg_sub">HP制作してて、色々悩んだことを<br />備忘録変わりに書き留めるサイト</div>
	</div>

	<ul class="slick02">
		<li>
			<div style="background-image: url('<?php bloginfo('template_directory'); ?>/img/nmv01.jpg');" class="mv_photo"></div>
		</li>
		<li>
			<div style="background-image: url('<?php bloginfo('template_directory'); ?>/img/nmv02.jpg');" class="mv_photo"></div>
		</li>
	</ul>
</div>

<!-- ****************************************
	当店の特徴
**************************************** -->
<div class="w01 top_add">
	<div class="tomi_mds mb40"><p>このサイト<br />について</p></div>
	<div class="ymds01">ホームページ制作での、日々のメモ書き</div>
	<div style="text-align: center;" class="tm_bun">管理人はホームページ会社に数年勤務し、<br class="brsp">そこで日々気づいたこと、気になったことを備忘録変わりにここで紹介していきます。<br />
	更新頻度はまちまちですが、どうかご容赦のほどを…。</div>

	<div class="flow_box40"></div>

	<!-- 取り扱う商品 -->
	<div class="tm_mds">ぼちぼちと書いた記事はこちら</div>

	<!-- list -->
	<ul class="jima clfix mb20">
		<!-- 投稿を自動取得する -->
		<?php
		global $post;
		$cat_id = get_category_by_slug("info");
		$cat_id = $cat_id->cat_ID;
		$my_posts= get_posts(array(
		'category' => $cat_id,
		'numberposts' => 6
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

		<!-- <li>
			<a href="">
				<div style="background-image: url('<?php bloginfo('template_directory'); ?>/img/food03.jpg');" class="i_photo"></div>
				<div class="i_name">香川のすっぽんうどん</div>
				<div class="i_bun">太陽の恵みを浴びて育った天然の美味しさは格別です。</div>
				<div class="i_value">illustrator</div>
			</a>
		</li> -->
	</ul>

	<a href="<?php echo home_url(); ?>/list" class="kengaku hv_a">過去の記事を見る</a>
</div>

<!-- ****************************************
	コンセプト
**************************************** -->
<div class="tacw mtm">
	<img src="<?php bloginfo('template_directory'); ?>/img/arrow_white.png" alt="">
</div>

<div class="bg_wrap">

<div class="w01 tomi_concept">
	<div class="tomi_mds mb20"><p>主な<br />カテゴリ</p></div>
	<div class="yp2">大体この辺りの事について、<br class="brnon">記事を書いてます</div>
	<!-- <div style="text-align: center;" class="tm_bun mb30">ホントは他にもいろいろと試したりはしてるんだけど、<br class="brsp">結果が芳しくなかったり、イマイチ使いこなせてないツールなどはほっとく</div> -->

	<!-- list -->
	<ul class="jima clfix">
		<li>
			<img class="jima_c" src="<?php bloginfo('template_directory'); ?>/img/cate01.png" alt="">
			<h3>HTML・CSS<br />jQuery・PHPなど</h3>
		</li>
		<li>
			<img class="jima_c" src="<?php bloginfo('template_directory'); ?>/img/cate02.png" alt="">
			<h3>Wordpressや<br />サーバ情報</h3>
		</li>
		<li>
			<img class="jima_c" src="<?php bloginfo('template_directory'); ?>/img/cate03.png" alt="">
			<h3>photoshop・illustratorなど<br />作成ツールのこと</h3>
		</li>
	</ul>
</div>

</div>

<div class="flow_box50"></div>

<!-- ****************************************
	作成したHP
**************************************** -->
<div id="link01"></div>
<div class="w00">
	<div class="tomi_mds mb20"><p>手掛けた<br />サイト</p></div>
	<div class="yp2 ">主な制作に関わったホームページです</div>
	<div style="text-align: center;" class="tm_bun mb30">静的なサイト、Wordpressのサイトなど多数作成に携わっております。<br class="brsp">Wordpressのサイトは、動的な構築も自ら行っています。</div>
</div>

<!-- 制限slick -->
<div class="wib01">
	<ul class="slick01">
		<?php
		    global $post;
		    $my_posts= get_posts(array(
		    'post_type' => 'hp_build' ,
		    'posts_per_page' => -1
		    ));
		?>

		<!-- ループ開始 -->
		<?php foreach($my_posts as $post):setup_postdata($post); ?>
		
		<?php $cftimg = wp_get_attachment_image_src(get_post_meta($post->ID, 'hp_img', true), 'full'); ?>
		<li><a href="<?php the_permalink(); ?>"><img class="object-fit-img" src="<?php echo $cftimg[0]; ?>" alt="<?php the_title(); ?>"></a></li>

		<?php endforeach; ?>
		<!-- ループ終了 -->

		<!-- <li><a href=""><img src="<?php bloginfo('template_directory'); ?>/img/eri01.jpg" alt=""></a></li> -->
	</ul>

	<!-- 左右の矢印 -->
	<ul class="arrow_ul">
		<li class="prev"><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_slide-prev.png" alt=""></a></li>
		<li class="next"><a href="javascript:void(0);"><img src="<?php bloginfo('template_directory'); ?>/img/arrow_slide-next.png" alt=""></a></li>
	</ul>

<div class="pdd1">
	<div class="slider-for">
		<?php
		    global $post;
		    $my_posts= get_posts(array(
		    'post_type' => 'hp_build' ,
		    'posts_per_page' => -1
		    ));
		?>

		<!-- ループ開始 -->
		<?php foreach($my_posts as $post):setup_postdata($post); ?>

		<table class="aji">
			<tr>
				<th><p><?php echo nl2br(post_custom('hp_ttl'));?></p></th>
				<td><p>
					<?php $moji = get_field('hp_greek'); ?>
					<?php echo mb_strimwidth("$moji", 0, 200, "[…]"); ?>
				</p></td>
			</tr>
		</table>

		<?php endforeach; ?>
		<!-- ループ終了 -->

		<!-- <table class="aji">
			<tr>
				<th><p>愛媛の<br />カラマンダリン</p></th>
				<td><p>光に包まれる空間は、住む人も訪れる人も幸せな気分にしてくれます。私たちはしっかりした打ち合わせで、お客様の納得の行く家を作ります。そして立ててからが本当のお付き合い。アフターメンテナンスもしっかりサポートします。</p></td>
			</tr>
		</table> -->
	</div>
</div>

</div>

<div class="flow_box50 pc"></div>

<?php get_footer(); ?>