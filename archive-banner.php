<?php get_header() ?>

<script type="text/javascript">
$(function(){
    $('select[name="cat-dropdown"]').change(function() {
      loadList();
    });
    function loadList() {
      var type = $('select[name="cat-dropdown"]').val();
      if (type.length == 0 || type == 'all') {
        $('.jima li').show();
      }
      else {
        $('.jima li').hide();
        if (type.length > 0) {
          type = '|' + type + '|';
        }
        $('.jima li').each(function() {
            if ($(this).data('type').indexOf(type) > -1) {
              $(this).show();
            }
        });
      }
    }
});
</script>

<div class="w01">
	<div class="tomi_mds mb40"><p>参考<br />バナー</p></div>

	<div class="tm_mds">参考にしたいバナー一覧</div>

	<div class="ksl_wrap">
		<!-- <select name="cat-dropdown" id="kiji_sel">
			<option value="">All</option>
			<option value="">2018年</option>
			<option value="">2017年</option>
		</select> -->
		<select name="cat-dropdown" id="kiji_sel">
			<option value="">すべて</option>
			<?php
			$terms = get_terms( 'bn_tax', 'get=all&hide_empty=0' ); 
			foreach ($terms as $term): ?>
			<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
			<?php endforeach; ?>
		</select>

	</div>

	<!-- list -->
	<ul class="jima clfix mb20">
		<!-- ループ開始 -->
		<?php
		    global $query_string;
		    query_posts( $query_string . '&posts_per_page=-1' );
		?>
		<!-- ループ開始 -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php
		$currentterms = get_the_terms(get_the_ID(), 'bn_tax');
		$result = '';
		if (!empty($currentterms)) {
			$types = array();
			foreach ($currentterms as $term) {
				$types[] = $term->slug;
			}
			$result = '|' . join('|', $types) . '|';
		}
		?>

		<li class="ii_li" data-type="<?php echo $result; ?>">
			<a href="<?php the_permalink(); ?>">
				<!-- 特定の画像なければnoimage出す -->
				<?php
				$first_img = 'https://webdara.info/wp-content/themes/webdara/img/abo_noimg.jpg';
				$image = wp_get_attachment_image_src(get_post_meta($post->ID, 'bn_img', true),'full');
				if ( $image[0] ) {
				    $first_img = $image[0];
				}
				?>
				<div style="background-image: url('<?php echo esc_attr( $first_img ); ?>');" class="i_photo"></div>
				<div style="margin-bottom: 5px" class="i_name"><?php the_title(); ?></div>
				<!-- <div class="ii">
					<object><a href="<?php echo post_custom('att_link');?>" target="_blank"><?php echo post_custom('att_link');?></a></object>
				</div> -->
				<div class="i_bun">
					<?php if($post->post_content=="") : ?>
					<!-- ここに記事本文が空だった場合のソース  -->
					※この投稿に解説はありません
					<?php else : ?>
					<?php $d = str_replace('-','',strip_tags(get_the_content())); echo mb_strlen($d) > 40 ? mb_substr($d, 0, 40).'[…]' : $d; ?>
					<?php endif; ?>
				</div>
			</a>
		</li>

		<?php endwhile; endif; ?>
		<!-- ループ終了 -->
	</ul>
</div>

<div class="flow_box50 pc"></div>

<?php get_footer(); ?>