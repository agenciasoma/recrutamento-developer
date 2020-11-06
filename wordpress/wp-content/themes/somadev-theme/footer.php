<?php
/**
 * The template for displaying the footer.
 *
 * @package SOMA Dev
 * @since 0.0.1
 */
wp_footer(); ?>
		<footer class="footer">
			<div class="wrapper-footer">
				<div class="center center-footer">
					<div class="logo">
						<img width="140px" src="<?php bloginfo('template_url'); ?>/src/images/logo-somadev.png" alt="logo <?php wp_title(); ?>">
					</div>
					<div class="col">
						<h5>Blog</h5>
						<?php
							if(has_nav_menu('bottom-pages-menu')){
							   wp_nav_menu(array('theme_location' => 'bottom-pages-menu'));
							}
						?>
					</div>
					<div class="col">
						<?php if(ICL_LANGUAGE_CODE == 'es'): ?>
							<h5>Consultoría</h5>
						<?php else: ?>
							<h5>Consultoria</h5>
						<?php endif; ?>
						<ul>
							<?php
								$current_page_ids = array( get_the_ID());
								$post_id = get_post($post->ID)->ID;
								$query = new WP_Query(array(
									'post_type' => 'consultoria',
									'posts_per_page' => 6,
									'order' => 'DESC'
								));
							?>
							<?php while ( $query->have_posts() ) : $query->the_post();
								?>
							<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						</ul>
					</div>
					<div class="col col-last">
						<?php if(ICL_LANGUAGE_CODE == 'es'): ?>
							<h5>Siga la Organa</h5>
							<span>Nos acompañe en las redes sociales</span>
						<?php else: ?>
							<h5>Siga a Organa</h5>
							<span>Nos acompanhe nas redes sociais</span>
						<?php endif; ?>
						<?php if ( ! dynamic_sidebar( 'redessociais' ) ) : endif; ?>
					</div>
				</div>
			</div>
			<div class="description-footer">
				<div class="center">
					<?php if(ICL_LANGUAGE_CODE == 'es'): ?>
						<span>Todos los derechos reservados - 2019</span>
					<?php else: ?>
						<span>Todos os direitos reservados - 2019</span>
					<?php endif; ?>
				</div>
			</div>
			<span class="top-button"></span>
		</footer>
	</main>
</body>
</html>