<?php get_header();
$botao = 'Continue lendo';
?>
<?php
	global $wpdb;

	$query = $wpdb->prepare("
		SELECT p.*
		FROM {$wpdb->posts} AS p
		INNER JOIN {$wpdb->term_relationships} AS tr ON p.ID = tr.object_id
		INNER JOIN {$wpdb->term_taxonomy} AS tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
		INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
		LEFT JOIN {$wpdb->postmeta} AS pm ON p.ID = pm.post_id
		WHERE p.post_type = 'post'
		AND p.post_status = 'publish'
		AND t.slug = 'blog'
		AND p.post_date >= %s
		AND p.post_date <= %s
		AND (pm.meta_key = 'status' AND pm.meta_value = 'free')
		ORDER BY p.post_date DESC
	", '2019-09-10', '2019-09-20');
	
	$posts = $wpdb->get_results($query);
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
