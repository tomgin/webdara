<!doctype html>
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KF9DZC6');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120212082-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120212082-1');
</script> -->

<meta charset="utf-8">
<meta name="description" content="Webノート | HP制作の備忘録">
<meta name="keywords" content="ホームページ,ホームページ制作,ウェブ,webデザイン,html,css,コーディング">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0" />
<!-- <title>Webノート</title> -->
<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico" />

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

<!-- js -->
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/autopager.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ofi.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.heightLine.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/link2.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/link.js"></script>

<!-- webfont -->
<script>
  (function(d) {
    var config = {
      kitId: 'sir6eud',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php wp_head(); ?>

<!-- wovn -->
<script src="//j.wovn.io/1" data-wovnio="key=nOS0v-" async></script>

<!-- お問い合わせコンバージョン設定 -->
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  gtag('event', 'submit', {
    'event_category': 'shokai',
    'event_label': 'contact'
  });
}, false );
</script>

<?php wp_head(); ?>
</head>

<body>

<!-- ****************************************
	header
**************************************** -->
<div class="fixed_wrap fixed">
	<div class="header_wrap">
	<div class="w01">
		<ul class="head_ul clfix">
			<li><a href="<?php echo home_url(); ?>/">トップ</a></li>
			<li><a href="<?php echo home_url(); ?>/list">記事の一覧</a></li>
			<!-- <?php $cat = get_category_by_slug('info'); ?>
			<li><a href="<?php echo get_category_link( $cat->cat_ID );?>">記事の詳細</a></li> -->
			<li><a href="<?php echo home_url(); ?>/hp">制作したサイト</a></li>
			<li><a href="<?php echo home_url(); ?>/attention">注目サイト</a></li>
			<li><a href="<?php echo home_url(); ?>/banner">参考バナー</a></li>
			<!-- <li><a href="<?php echo home_url(); ?>/shokai">お問合わせ(予定)</a></li> -->
		</ul>
	</div>
	</div>
</div>

<!-- spメニュー -->
<div class="menu_wrap">
	<div class="menu_btn clfix">
		<a href="<?php echo home_url(); ?>/"><div class="sp_logo fl">Webノート<span>web production report</span></div></a>
		<a href=""><img class="bg_menu fr" src="<?php bloginfo('template_directory'); ?>/img/menu.png" alt=""></a>
	</div>
	<ul class="sp_menu">
		<li><a href="<?php echo home_url(); ?>/">トップ</a></li>
		<li><a href="<?php echo home_url(); ?>/list">記事の一覧</a></li>
		<!-- <li><a href="<?php echo home_url(); ?>/detail">記事の詳細</a></li> -->
		<li><a href="<?php echo home_url(); ?>/hp">制作したサイト</a></li>
		<li><a href="<?php echo home_url(); ?>/attention">注目サイト</a></li>
		<li><a href="<?php echo home_url(); ?>/banner">参考バナー</a></li>
		<!-- <li><a href="<?php echo home_url(); ?>/shokai">お問合わせ(予定)</a></li> -->
	</ul>
</div>