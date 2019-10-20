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

						<?php
						$start = '2019-09-10';
						$end = '2019-09-20';
						$args = array(
							'post_type' => 'post',
							'cat' => 8,
							'meta_key'	=> 'status',
							'meta_value' => 'free',
							'date_query' => array(
						        array(
						            'after'     => $start,
						            'before'    => $end,
						            'inclusive' => true,
						        ),
						    ),
						);
						$query = new WP_Query( $args ); ?>
							<?php if($query->have_posts()) :
								$postitem = "";
								$i = 1;
					    		$count = $query->post_count;

					        	while($query->have_posts()) :
					        	$query->the_post();
					        	if($count >= 4) {
					        		if($i == 1 || $count == 1) { ?>
						        		<div class="col">
											<div class="item">
												<?php hasThumbnail("'post-category-big'", "no-thumb-post-big"); ?>
												<div class="wrapper">
													<div class="category">
														<?php nameCategory(); ?>
													</div>
													<div class="text">
														<?php postShow(); ?>
													</div>
												</div>
											</div>
										</div>
						        	<?php }
						        	if($i == 2 || $count == 2) { ?>
						        		<div class="col"><!-- open div col -->
											<div class="item item-small">
											<?php hasThumbnail("'post-category-small'", "no-thumb-post-small"); ?>
												<div class="wrapper">
													<div class="category">
														<?php nameCategory(); ?>
													</div>
													<div class="text">
														<?php postShow(); ?>
													</div>
												</div>
											</div>
						        	<?php }
						        	if($i == 3 || $count == 3) { ?>
										<div class="item item-small">
											<?php hasThumbnail("'post-category-small'", "no-thumb-post-small"); ?>
											<div class="wrapper">
												<div class="category">
													<?php nameCategory(); ?>
												</div>
												<div class="text">
													<?php postShow(); ?>
												</div>
											</div>
										</div>
										</div><!-- close div col -->
						        	<?php } }

						        	if($i >= 1) {
						        		$day = get_the_date('d');
						        		$month = get_the_date('m');
						        		$year = get_the_date('Y');

					            		$postitem .= '<div class="item">';
											$postitem .= '<div class="wrapper">';
												$postitem .= '<div class="image">';
													if (has_post_thumbnail()) {
									                  	$postitem .= '<a href="'. get_the_permalink() .' title="' . get_the_title() . '">';
									                  	$postitem .= '<img src="' . get_the_post_thumbnail_url(get_the_ID(), 'post-category-list') . '" alt="' . get_the_title() .'">';
									                  $postitem .= '</a>';
									                } else {
									                  	$postitem .= '<a href="'. get_the_permalink() .'" title="' . get_the_title() . '">';
									                  	$postitem .= '<img src="'. get_template_directory_uri() .'/src/images/no-thumb-big.jpg" alt="' . get_the_title() .'">';
									                  	$postitem .= '</a>';
									                }
												$postitem .= '</div>';
												$postitem .= '<div class="text">';
													$postitem .= '<h2>';
													$postitem .= '<a href="'. get_the_permalink() .'" title="' . get_the_title() . '">' . get_the_title() .'</a>';
													$postitem .= '</h2>';
													$postitem .= '<span class="icons-post icon-date">';
													$postitem .= '<i class="icon-calendar"></i>'. $day .'.' . $month . '.' . $year . '</span>';
													$postitem .= '<a href="'. get_the_permalink() .'" class="icons-post icon-coment-count"><i class="icon-comment-alt"></i>'
													. get_comments_number() . '</a>';
														if ($post->post_content != "") {
															$postitem .=  '<p>'. mb_strimwidth( get_the_excerpt(), 0, 150, '...') .'</p>';
														}
													$postitem .= '<a class="link-more" href="' . get_the_permalink() . '" title="' . get_the_title() . '">Continue lendo</a>';
												$postitem .= '</div>';
											$postitem .= '</div>';
										$postitem .= '</div>';
					            	}
					            	$i++;
					            	endwhile;
					            endif; ?>

				</div>
			</div>
			<?php if($postitem !=""){ ?>
	    		<div class="itens-post">
			        <?php echo $postitem; ?>
			    </div>
		    <?php } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
