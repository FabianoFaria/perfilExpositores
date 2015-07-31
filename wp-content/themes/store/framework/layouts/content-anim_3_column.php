<?php
/**
 * @package Store
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-4 grid grid_2_column grid_3_column anim'); ?>>

		<div class="featured-thumb col-md-12">
			<?php if (has_post_thumbnail()) : ?>	
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_post_thumbnail('store-thumb'); ?></a>
			<?php else: ?>
				<a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>"></a>
			<?php endif; ?>
			
			<header class="entry-header">
					<h1 class="entry-title title-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<span class="entry-excerpt"><p><?php echo substr(get_the_excerpt(),0,90).(get_the_excerpt() ? "..." : "" ); ?></p></span>
				</header><!-- .entry-header -->
			
			<div class="out-thumb">
				
				<span class="readmore"><a href="<?php the_permalink() ?>"><i class="fa fa-hand-o-right"></i></a></span>
				
			</div><!--.out-thumb-->
			
		</div><!--.featured-thumb-->
		
</article><!-- #post-## -->