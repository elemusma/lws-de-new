<?php
$post_id = get_the_ID();
$title_slug = sanitize_title_with_dashes(get_the_title());

$excerpt = get_the_excerpt();
$yoast_meta = get_post_meta( get_the_ID(), '_yoast_wpseo_metadesc', true );
?>
<div class="col-lg-4 col-md-6 col-12 blog-query-col post-id-<?php echo esc_attr($post_id); ?> post-<?php echo esc_attr($title_slug); ?>" style="margin-bottom: 50px;" data-aos="fade-up" data-aos-delay="">
<div class="w-100 h-100 blog-content position-relative overflow-hidden" style="border-top-left-radius: 16px;
    border-top-right-radius: 16px;">
	<div style="border-radius:25px;">
	<div style="" class="blog-query-card">
	<div class="img-hover overflow-hidden" style="overflow:hidden;border-top-left-radius: 16px;
    border-top-right-radius: 16px;">
		<a href="<?php echo esc_url(get_permalink()); ?>" style="text-decoration:none;" title="<?php echo esc_attr('Read more for article ' . get_the_title()); ?>">
			<?php
			the_post_thumbnail(
				'full',
				array(
					'class' => 'w-100 d-block',
					'style' => 'height:200px;object-fit:cover;object-position:center;border-top-left-radius: 16px;
    border-top-right-radius: 16px;'
				)
			);
			?>
		</a>
	</div>
	<div class="position-relative z-1 blog-query-content" style="">
		<a href="<?php echo esc_url(get_permalink()); ?>" class="d-block" style="text-decoration:none;padding:15px 15px 40px;" title="<?php echo esc_attr('Read more for article ' . get_the_title()); ?>">
			<h3 class="bold text-accent-secondary" style="font-size:18px;line-height:1.5;margin:0px;padding:15px 0px;"><?php echo esc_html(get_the_title()); ?></h3>
		</a>
	</div>
	<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr('Read more for article ' . get_the_title()); ?>" class="z-3 bold d-block position-absolute" style="bottom:15px;left:15px;">
		Read More <?php echo chevronRight(); ?>
	</a>
	<div class="w-100 bg-accent blog-query-bottom-border position-absolute w-100" style="height:5px;opacity:.5;bottom:0;left:0;z-index:2;"></div>
	
</div>
</div>
</div>
</div>