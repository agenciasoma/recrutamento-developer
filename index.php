<?php get_header();
$botao = 'Continue lendo';
?>
<?php
	global $wpdb;

	$categorySlug = 'blog';
	$startDate = '2019-09-10';
	$endDate = '2019-09-20';
	$metaValue = 'free';

	$query = $wpdb->prepare("
		SELECT $wpdb->posts.*
		FROM $wpdb->posts
		INNER JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id)
		INNER JOIN $wpdb->terms ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->terms.term_id)
		INNER JOIN $wpdb->postmeta ON ($wpdb->posts.ID = $wpdb->postmeta.post_id)
		WHERE $wpdb->terms.slug = %s
		AND $wpdb->posts.post_date >= %s
		AND $wpdb->posts.post_date <= %s
		AND $wpdb->postmeta.meta_value = %s
		ORDER BY $wpdb->posts.post_date DESC
	");
?>
<div class="container-page">
	<div class="header-page" style="background: url('<?php bloginfo('template_url'); ?>/src/images/bg-blog.jpg') no-repeat center center;background-size: cover;">
		<div class="center">
			<img src="<?php bloginfo('template_url'); ?>/src/images/icone-blog.png">
			<h1 class="title">Blog</h1>
		</div>
	</div>
	<div class="content-page">
		<div class="center-small">
			<div class="top-itens">
				<div class="center-small">
					<?php 
						foreach($posts as $post) {
					?>
						<div class="col">
							<div class="item item-small">
								<a href="#" title=<?php $post->post_title ?>>
									<img src="<?php bloginfo('template_url'); ?>/src/images/no-thumb-post-small.jpg" alt="image">
								</a>
								<div class="wrapper">
									<div class="category">
										<?php
											echo date("d/m/Y", strtotime($post->post_date));
										?>
									</div>
									<div class="text">
										<h2 class="title">
											<a href="./blanditiis-velit-esse-cumque-minima-consequatur/" title=<?php $post->post_title ?>><?php echo $post->post_title ?></a>
										</h2>
										<div class="text-mobile">
											<p><?php 
												$excerpt = $post->post_content;
												echo substr($excerpt, 0, 100);
											?></p>
										</div>
										<a href="./blanditiis-velit-esse-cumque-minima-consequatur/" class="link-more" title=<?php "Continue lendo " . $post->post_title ?>>Continue lendo</a>
									</div>
								</div>
							</div>
						</div>
					<?php
						}
					?>
				</div>
			</div>
			<div class="itens-post">
				<?php 
					foreach($posts as $post) {
				?>
					<div class="item">
						<div class="wrapper">
							<div class="image">
								<img src="<?php bloginfo('template_url'); ?>/src/images/no-thumb-post-small.jpg" alt="image">
							</div>
							<div class="text">
								<h2>
									<a href="#" title=<?php $post->post_title ?>><?php echo $post->post_title ?></a>
								</h2>
								<span class="icons-post icon-date">
									<i class="icon-calendar"></i><?php echo date("d/m/Y", strtotime($post->post_date)) ?>
								</span>
								<a href="#" class="icons-post icon-coment-count">
									<i class="icon-comment-alt"></i><?php echo $post->comment_count ?>
								</a>
								<p><?php 
									$excerpt = $post->post_content;
									echo substr($excerpt, 0, 100);
								?></p>
								<a class="link-more" href="#" title=<?php "Continue lendo " . $post->post_title ?>>Continue lendo</a>
							</div>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
