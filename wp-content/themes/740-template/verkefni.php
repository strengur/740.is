<?php
	/* Template Name: Verkefni */
?>

<?php get_header(); ?>

<div class="list-of-posts">
<?php
$args = array( 'posts_per_page' => 10, 'order'=> 'DESC', 'orderby' => 'date' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 

		<div class="list-of-posts-background list-of-posts-content">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><i style="font-size: 14px;"><?php the_date(); ?> </i>
			<?php the_excerpt(); ?>
			<div class="button-gray"><a href="<?php the_permalink(); ?>">Skoða Nánar</a></div>
		</div>
  	
<?php
endforeach; 
wp_reset_postdata();
?>
</div>
<?php get_footer(); ?>