<?php get_header();
$botao = 'Continue lendo';
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
										<a href="./blanditiis-velit-esse-cumque-minima-consequatur/" title="Blanditiis velit esse cumque minima consequatur">Blanditiis velit esse cumque minima consequatur</a>
									</h2>
									<div class="text-mobile">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam delectus sed molestias deserunt. Assumenda illum eum placeat cum repellat quisquam cumque doloribus distinctio, dol...</p>
									</div>
									<a href="./blanditiis-velit-esse-cumque-minima-consequatur/" class="link-more" title="Continue lendo Blanditiis velit esse cumque minima consequatur">Continue lendo</a>
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
										<a href="./atque-enim-consectetur-quod/" title="Atque enim consectetur quod">Atque enim consectetur quod</a>
									</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea non dolorem, a consequatur debitis voluptas accusantium veritatis. Itaque officia veniam maiores commodi, atque enim...</p>
									<a href="./atque-enim-consectetur-quod/" class="link-more" title="Continue lendo Atque enim consectetur quod">Continue lendo</a>
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
										<a href="./lorem-ipsum-dolor-sit-amet/" title="Lorem ipsum dolor sit amet">Lorem ipsum dolor sit amet</a>
									</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea non dolorem, a consequatur debitis voluptas accusantium veritatis. Itaque officia veniam maiores commodi, atque enim...</p>
									<a href="./lorem-ipsum-dolor-sit-amet/" class="link-more" title="Continue lendo Lorem ipsum dolor sit amet">Continue lendo</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="itens-post">

				<?php
					global $wpdb;
					$result = $wpdb->get_results("SELECT DISTINCT post_title, post_content, post_date FROM egddy_posts INNER JOIN egddy_postmeta ON (egddy_posts.ID = egddy_postmeta.post_id AND egddy_postmeta.meta_value = 'free') INNER JOIN  egddy_term_relationships ON ( egddy_term_relationships.term_taxonomy_id = 8 AND egddy_term_relationships.object_id = egddy_posts.ID) WHERE post_date BETWEEN '2019/09/10' and '2019/09/20'  ORDER BY post_date DESC");
					foreach($result as $row) {
						echo '<div class="item">';
							echo '<div class="wrapper">';
								echo '<div class="image">';
									echo '<img src="./wp-content/themes/somadev-theme/src/images/no-thumb-big.jpg">';
								echo '</div>';
								echo '<div class="text">';
									echo '<h2>';
										echo '<a href="#" title="novo teste de conteúdo">'.$row->post_title.'</a>';
									echo '</h2>';
									echo '<span class="icons-post icon-date">';
										echo '<i class="icon-calendar"></i>'.substr($row->post_date, 0, 10);
									echo '</span>';
									echo '<a href="#" class="icons-post icon-coment-count">';
										echo '<i class="icon-comment-alt"></i>0';
									echo '</a>';
									echo '<p>'.substr($row->post_content,0 ,200).' ...</p>';
									echo '<a class="link-more" href="#" title="novo teste de conteúdo">Continue lendo</a>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					}
				?>	

			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
