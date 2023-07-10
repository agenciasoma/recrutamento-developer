<?php get_header(); ?>
<div class="container-page">
	<div class="header-page" style="background: url('<?php bloginfo('template_url'); ?>/src/images/bg-portfolio.jpg') no-repeat center center;background-size: cover;">
		<div class="center">
			<img src="<?php bloginfo('template_url'); ?>/src/images/icone-portfolio.png" alt="<?php post_type_archive_title(); ?>">
			<h2 class="title">Blog</h2>
			<?php if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('<span class="breadcrumb">','</span>');
			} ?>
		</div>
	</div>
	<div class="content-page content-single">
		<div class="center">
			<div class="wrapper-page">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<div class="date-post">
						<div class="i icon-date"><?php the_time('j \d\e F \d\e Y') ?></div>
						<div class="i icon-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author_meta('display_name'); ?></a></div>
						<?php if ($categories != ""): ?>
							<div class="i icon-category">
							<?php
							$categories = get_the_category();
							$separator = ', ';
							$output = '';
								if($categories){
								    foreach($categories as $category) {
									if($category->name !== 'Blog'){
									        $output .= '<span class="post-category-info"><a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "Ver todos os posts %s" ), $category->name ) ) . '">'.$category->cat_name.'</a></span>'.$separator;}
									    }
									echo trim($output, $separator);
								}
							?>
							</div>
						<?php endif ?>
						<a class="i icon-comment arrow-down-js" href="#comentarios"><?php echo get_comments_number(); ?></a>
					</div>
					<?php the_content(); ?>
					<?php get_template_part( 'content/content', 'like-post' ); ?>
					<?php wpb_set_post_views(get_the_ID()); ?>
					<?php get_template_part( 'content/content', 'share' ); ?>
					<div id="comentarios" class="comments">
						<?php comments_template( '', true ); ?>
					</div>
				<?php endwhile; endif; ?>
			</div
			><aside>
				<?php if ( ! dynamic_sidebar( 'sidebar' ) ) : endif; ?>
			</aside>
		</div>
	</div>
</div>
<?php get_footer(); ?>
