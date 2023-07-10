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
						<h5>Consultoria</h5>
						<ul>
							<li><a href="http://">Item 1</a></li>
							<li><a href="http://">Item 2</a></li>
							<li><a href="http://">Item 3</a></li>
						</ul>
					</div>
					<div class="col col-last">
						<h5>Siga-nos</h5>
						<span>Nos acompanhe nas redes sociais</span>
					</div>
				</div>
			</div>
			<div class="description-footer">
				<div class="center">
					<span>Todos os direitos reservados - 2019</span>
				</div>
			</div>
			<span class="top-button"></span>
		</footer>
	</main>
</body>
</html>