<?php get_header();
$botao = 'Continue lendo';
?>

<?php 
$posts = getBlogPosts();
?>

<div class="container-page">
	<div class="header-page" style="background: url('<?php bloginfo('template_url'); ?>/src/images/bg-blog.jpg') no-repeat center center;background-size: cover;">
		<div class="center">
			<?php if ($image != ""): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php single_cat_title(); ?>">
			<?php else: ?>
				<img src="<?php bloginfo('template_url'); ?>/src/images/icone-blog.png">
			<?php endif ?>
			<h1 class="title">Blog</h1>
		</div>
	</div>
	<div class="content-page">
		<div class="center-small">
			<div class="top-itens">
				<div class="center-small">
					<div class="col">
						<div class="item">
							<a href="./blanditiis-velit-esse-cumque-minima-consequatur/" title="Blanditiis velit esse cumque minima consequatur">
								<img src="./wp-content/themes/somadev-theme/src/images/no-thumb-post-big.jpg">
							</a>
							<div class="wrapper">
								<div class="category">
									Blog
								</div>
								<div class="text">
									<h2 class="title">
										<a href="<?php echo $posts[0]->guid ?>" title="<?php echo $posts[0]->post_title ?>"><?php echo $posts[0]->post_title ?></a>
									</h2>
									<div class="text-mobile">
										<p><?php echo substr($posts[0]->post_content, 0, 200).'...' ?></p>
									</div>
									<a href="<?php echo $posts[0]->guid ?>" class="link-more" title="Continue lendo <?php echo $posts[0]->post_title ?>">Continue lendo</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="item item-small">
							<a href="./atque-enim-consectetur-quod/" title="Atque enim consectetur quod">
								<img src="./wp-content/themes/somadev-theme/src/images/no-thumb-post-small.jpg">
							</a>
							<div class="wrapper">
								<div class="category">
									Blog
								</div>
								<div class="text">
									<h2 class="title">
										<a href="<?php echo $posts[1]->guid ?>" title="<?php echo $posts[1]->post_title ?>"><?php echo $posts[1]->post_title ?></a>
									</h2>
									<p><?php echo substr($posts[1]->post_content, 0, 200).'...' ?></p>
									<a href="<?php echo $posts[1]->guid ?>" class="link-more" title="Continue lendo <?php echo $posts[1]->post_title ?>">Continue lendo</a>
								</div>
							</div>
						</div>
						<div class="item item-small">
							<a href="./lorem-ipsum-dolor-sit-amet/" title="Lorem ipsum dolor sit amet">
								<img src="./wp-content/themes/somadev-theme/src/images/no-thumb-post-small.jpg">
							</a>
							<div class="wrapper">
								<div class="category">
									Blog
								</div>
								<div class="text">
									<h2 class="title">
										<a href="<?php echo $posts[2]->guid ?>" title="<?php echo $posts[2]->post_title ?>"><?php echo $posts[2]->post_title ?></a>
									</h2>
									<p><?php echo substr($posts[2]->post_content, 0, 200).'...' ?></p>
									<a href="<?php echo $posts[2]->guid ?>" class="link-more" title="Continue lendo <?php echo $posts[2]->post_title ?>">Continue lendo</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="itens-post">
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<img src="./wp-content/themes/somadev-theme/src/images/no-thumb-big.jpg">
						</div>
						<div class="text">
							<h2>
								<a href="#" title="<?php echo $posts[3]->post_title ?>"><?php echo $posts[3]->post_title ?></a>
							</h2>
							<span class="icons-post icon-date">
								<i class="icon-calendar"></i><?php echo substr($posts[3]->post_date, 0, 10); ?>
							</span>
							<a href="#" class="icons-post icon-coment-count">
								<i class="icon-comment-alt"></i>0
							</a>
							<p><?php echo substr($posts[3]->post_content, 0, 200).'...' ?></p>
							<a class="link-more" href="#" title="<?php echo $posts[3]->post_title ?>">Continue lendo</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="wrapper">
						<div class="image">
							<img src="./wp-content/themes/somadev-theme/src/images/no-thumb-big.jpg">
						</div>
						<div class="text">
							<h2><a href="#" title="<?php echo $posts[4]->post_title ?>"><?php echo $posts[4]->post_title ?></a></h2>
							<span class="icons-post icon-date"><i class="icon-calendar"></i><?php echo substr($posts[4]->post_date, 0, 10); ?></span>
							<a href="#" class="icons-post icon-coment-count"><i class="icon-comment-alt"></i>0</a>
							<p><?php echo substr($posts[4]->post_content, 0, 200).'...' ?></p>
							<a class="link-more" href="#" title="<?php echo $posts[4]->post_title ?>">Continue lendo</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
