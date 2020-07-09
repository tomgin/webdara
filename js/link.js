// js
$(function(){
	// ナビゲーションの問い合わせを押した時
	$("a.alert").click(function(){
	    alert("申し訳ありません、ただいま準備中です");
	    return false;
	});

	// バーガーメニュー
    // $(".menu_wrap ul").hide();
    $(".menu_btn .bg_menu").click(function(){
		$(".menu_wrap ul").slideToggle();
		return false;
	});
	
    // 制限slick2 Topのmv
	$('.slick02').slick({
		autoplay: true,
		autoplaySpeed: 3500,
		speed:1000,
		// variableWidth: true,
		slidesToShow: 1,
		arrows: false,
		// fade:true,
		dots:true,

		responsive:[{
			breakpoint: 641,
			settings :{
				slidesToShow: 1,
				variableWidth: false,
				draggable: true,
				infinite:false,
			}
		}]
    });

    // 制限slick-下部のHP紹介
	$('.slick01').slick({
		variableWidth: true,
		slidesToShow: 1,
		arrows: true,
		prevArrow:'.wib01 .arrow_ul .prev',
		nextArrow:'.wib01 .arrow_ul .next',
		asNavFor: '.slider-for',

		responsive:[{
			breakpoint: 768,
			settings :{
				slidesToShow: 1,
				variableWidth: false,
				draggable: true,
				infinite:true,
			}
		}]
    });

    $('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		asNavFor: '.slick01',
		infinite:true,
	});

    // 商品詳細(detail.php)のスライド
    $('.bx_it').bxSlider({
         // slideWidth: 900, 
        maxSlides: 1,
        minSlides: 1,
        // slideMargin: 10,
        auto: false,
        speed: 700,
        // pager:false,
        pagerCustom: '.bx_pager'
    });

	// ナビ固定
 //    var nav    = $('.fixed_wrap'),
 //    offset = nav.offset();

	// $(window).scroll(function () {
	//   if($(window).scrollTop() > offset.top) {
	//     nav.addClass('fixed');
	//   } else {
	//     nav.removeClass('fixed');
	//   }
	// });

    // レスポンシブ画像切り替え
	var wid = $(window).width();
	if( wid < 640 ){
	     $('.imgChange').each(function(){
	          $(this).attr("src",$(this).attr("src").replace('_pc', '_sp'));
	     });
	}

		$(function(){
	   // #で始まるアンカーをクリックした場合に処理
	   $('a[href^=#]').click(function() {
	      // スクロールの速度
	      var speed = 400; // ミリ秒
	      // アンカーの値取得
	      var href= $(this).attr("href");
	      // 移動先を取得
	      var target = $(href == "#" || href == "" ? 'html' : href);
	      // 移動先を数値で取得
	      var position = target.offset().top;
	      // スムーススクロール
	      $('body,html').animate({scrollTop:position}, speed, 'swing');
	      return false;
	   });
	});

	// top戻るボタン押すと、Topに
	$(".top_btn").click(function () {
          $('html,body').animate({ scrollTop: 0 }, 'fast');
          return false;
     });

});