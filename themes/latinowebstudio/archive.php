<?php 
get_header(); ?>
<section class="pt-5 pb-5 body" style="padding:50px 0px;">
<div class="position-absolute w-100 h-100" style="clip-path: polygon(100% 0, 0 0, 100% 100%);
background: #FFF;
background: linear-gradient(30deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 25%, rgba(163, 29, 33, 0.5) 50%, rgba(163, 29, 33, 0.75) 75%, rgba(163, 29, 33, 1) 100%);
background: #FFF;
background: linear-gradient(25deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 60%, rgba(163, 29, 33, 1) 100%);
top:0;
left:0;"></div>
<div class="container">
<div class="row">
<div class="col-12">
    <div class="row">

        <?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 10, 'post_type' => 'post','paged' => $paged, 'date_query' => array(
    'year' => get_the_time( 'Y' ),
    'month' => get_the_time( 'n' )
    )
);
query_posts($args); ?>
<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post();
echo get_template_part('partials/blogs-query');
endwhile; ?>
<!-- pagination -->
<div class="col-md-12 text-center pt-5">
<?php echo paginate_links(array(
'show_all' => true,
'prev_text' => '&#60;',
'next_text' => '&#62;'
)); ?>
</div>
</div>
</div>
<?php 
// get_template_part('partials/sidebar'); 
?>

<?php else : ?>
<!-- No posts found -->
<?php endif; ?>
</div>
</div>
</section>
<?php get_footer(); ?>