<?php get_header() ?>

<div class="w01">
	<dic class="confo_mds">お問い合わせフォーム(テスト公開中)</dic>
	<div class="confo_sub">御用のある方は、こちらのフォームからご送信ください。<br />
	<!-- また、電話によるお問い合わせは、<a href="tel:01200000000" onclick="gtag('event', 'タップ', {'event_category': '電話click','event_label': 'tel'});">0120-000-0000</a>からお問い合わせください。<br /> -->
	<span style="color: red;">※現在テスト中です。送信されてもお返事は致しませんので、ご了承ください。</span></div>
	
	<!-- content start ============================== -->
	<?php the_post(); ?>
	<?php the_content(); ?>
	<!-- content end ============================== -->
</div>

<div class="flow_box100"></div>

<?php get_footer(); ?>