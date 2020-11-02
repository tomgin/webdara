<?php get_header() ?>

<div class="w01">
	<dic class="confo_mds">お問い合わせフォーム</dic>
	<div class="confo_sub">ホームページ作成に関するご相談がございましたら、こちらのフォームからご送信ください。<br />
	<!-- また、電話によるお問い合わせは、<a href="tel:01200000000" onclick="gtag('event', 'タップ', {'event_category': '電話click','event_label': 'tel'});">0120-000-0000</a>からお問い合わせください。<br /> -->
	<span class="shokai_sub">※内容を確認してご連絡いたします。なお、悪戯・商品勧誘・意味不明な内容などはご返事しかねる場合がございます。ご了承お願いします。</span></div>

	<!-- content start ============================== -->
	<?php the_post(); ?>
	<?php the_content(); ?>
	<!-- content end ============================== -->
</div>

<div class="flow_box100"></div>

<?php get_footer(); ?>
