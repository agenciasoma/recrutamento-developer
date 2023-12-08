<?php get_header();
$botao = 'Continue lendo';
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
						$args = ['category_name' => 'BLOG',
								'date_query' => [
										['day' => 10, 'mouth' => 9, 'year' => 2019, 'compare' => '>=', 'day' => 20, 'mouth' => 9, 'year' => 2019, 'compare' => '<=']
									],
								'meta_key' => 'status',
								'meta_value' => 'free'
								];
						$the_query = new WP_Query( $args );
						if ($the_query->have_posts()){
							$postCount = 0;
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								if ($postCount < 3) {
									if ($postCount == 0 || $postCount % 2 != 0){
										echo '<div class="col">';
									}
										if ($postCount == 0){
											echo '<div class="item">';
										}
										else{
											echo '<div class="item item-small">';
										}
											echo '<a href="'. get_the_permalink() .'" title="'. get_the_title() .'">';
												echo '<img src="'. get_the_post_thumbnail();
											echo '</a>';
											echo '<div class="wrapper">';
												echo '<div class="category">';
													echo 'Blog';
												echo '</div>';
												echo '<div class="text">';
													echo '<h2 class="title">';
														echo '<a href="'. get_the_permalink() .'" title="'. get_the_title() .'">'. get_the_title() .'</a>';
													echo '</h2>';
													echo '<div class="text-mobile">';
														echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam delectus sed molestias deserunt. Assumenda illum eum placeat cum repellat quisquam cumque doloribus distinctio, dol...</p>';
													echo '</div>';
														echo '<a href="'. get_the_permalink() .'"  class="link-more" title="'. get_the_title() .'">Continue lendo</a>';
													echo '</div>';
											echo '</div>';
										echo '</div>';
										if ($postCount == 0 || $postCount % 2 == 0){
											echo '</div>';
										}
								}
								else{
									if ($postCount == 3) {
											echo '</div>';
										echo '</div>';
										echo '<div class="itens-post">';
									}
									echo '<div class="item">';
										echo '<div class="wrapper">';
											echo '<div class="image">';
												echo '<img src="'. get_the_post_thumbnail();
											echo '</div>';
										echo '<div class="text">';
											echo '<h2>';
												echo '<a href="'. get_the_permalink() .'" title="'. get_the_title() .'">'. get_the_title() .'</a>';
											echo '</h2>';
											echo '<span class="icons-post icon-date">';
												echo '<i class="icon-calendar"></i>'. get_the_date('d.m.Y');
											echo '</span>';
											echo '<a href="'. apply_filters('get_comments_link', get_the_permalink().'#comments', $post) .'" class="icons-post icon-coment-count">';
												echo '<i class="icon-comment-alt"></i>' . comments_number(false,false,false, $post);
											echo '</a>';
											echo '<p>'. substr(get_the_content(), 0, 180) .'</p>';
											echo '<a class="link-more" href="'. get_the_permalink() .'" title="novo teste de conteúdo">Continue lendo</a>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
								}
								$postCount++;
							}
						}
						else {
							echo 'no posts found';
						}
					?>
				</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
