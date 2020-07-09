
<!-- ****************************************
	footer
**************************************** -->
<div class="tacw mtm2">
	<a class="top_btn" href=""><img src="<?php bloginfo('template_directory'); ?>/img/arrow_green.png" alt=""></a>
</div>

<div class="footer">
	<div class="ft_mds">Webノート</div>
	<div class="ft_p">HP制作してて、色々悩んだことを<br class="brnon">備忘録変わりに書き留めるサイトみたいな</div>
</div>

<script>
//  最大ページ数取得(global $my_queryの記述がないと、max_num_pagesを正確に読まない！！)
var maxpage = <?php global $my_query; echo $my_query->max_num_pages; ?>;

$('#loading').css('display', 'none');
$.autopager({
    content: '.new_post',// 読み込むコンテンツ
    link: '#next a', // 次ページへのリンク
    autoLoad: false,// スクロールの自動読込み解除

    start: function(current, next){
      $('#loading').css('display', 'block');
      $('#next a').css('display', 'none');
    },

    load: function(current, next){
        $('#loading').css('display', 'none');
        $('#next a').css('display', 'block');
        //最後のページが出ると、ボタン消す
        if( current.page >= maxpage ){ 
            $('#next a').hide(); 
        }
    }
});

$('#next a').click(function(){ // 次ページへのリンクボタン
    $.autopager('load'); // 次ページを読み込む
    return false;
});
</script>

<?php wp_footer(); ?>
<script type="text/javascript">
  objectFitImages('img.object-fit-img');
</script>
</body>
</html>