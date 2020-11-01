<?php

add_action('wp_enqueue_scripts', 'soma_enqueue_scripts_input');
function soma_enqueue_scripts_input(){
	$postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';
?>

	<?php

		$js = array(
			'js_global' => [
				'jquery-3.2.1.min',
				'script',
				'jquery.mask',
				'swiper',
				'modal',
				'wow.min'
			],
			'js_home' => [
			]
		);

		$css = array(
			'css_global' => [
				'footer',
				'fonts',
				'default',
				'fonts',
				'social',
				'header',
				'instagram',
				'reset',
				'fonts-google',
				'archive',
				'pagination',
				'page',
				'cta',
				'depoimentos',
				'formulario',
				'slider',
				'posts',
				'comments',
				'modal',
				'animate',
				'consultoria'
			],
			'css_home' => [
				'about-home',
				'blog',
				'parceiros',
				'materiais'

			]

		);

	?>

	<?php
		if((is_home())){
			foreach ($js['js_home'] as $item) {
				wp_enqueue_script( $item, get_template_directory_uri() . "/build/js/" . "$item.js", array(), '' );
			}
			foreach ($css['css_home'] as $item) {
				wp_enqueue_style( $item, get_template_directory_uri() . "/build/css/" . "$item.css", array(), '' );
			}
		}

		foreach ($js['js_global'] as $item) {
				wp_enqueue_script( $item, get_template_directory_uri() . "/build/js/" . "$item.js", array(), '' );
			}

		foreach ($css['css_global'] as $item) {
			wp_enqueue_style( $item, get_template_directory_uri() . "/build/css/" . "$item.css", array(), '' );
		}
	?>

<?php }	?>

<?php
add_action('wp_footer', 'soma_activate_scripts');
function soma_activate_scripts(){ ?>

		<!--[if gt IE 8]>
		<script>
			new WOW().init()
		</script>
       	<![endif]-->

       <!--[if !IE]> -->
		<script>
			setTimeout(function() {
				var wow = new WOW({
					boxClass:     'wow',      // animated element css class (default is wow)
					animateClass: 'animated', // animation css class (default is animated)
					offset:       0,          // distance to the element when triggering the animation (default is 0)
					mobile:       false       // trigger animations on mobile devices (true is default)
				}
		    );
		    wow.init();
		 }, 2000);
		</script>
       <!-- <![endif]-->

	<script type="text/javascript">

		window.onload = function() {

			$("input[type=tel]").mask("(99) 99999-9999");
			$("input[name='telefone']").mask("(99) 999999999");
			$("input[name='celular']").mask("(99) 99999-9999");

	    }
	</script>

	<?php if (is_singular()): ?>
		<script>

			window.onload = function() {

				var swiper_depoimentos = new Swiper('.swiper-depoimentos', {
		            slidesPerView: 2,
		            loop: false,
		            autoplay: {
		               delay: 80000,
		               disableOnInteraction: false,
		            },
		            paginationClickable: true,
		            spaceBetween: 10,
		            breakpoints: {
		               780: {
		                  slidesPerView: 1,
		                  spaceBetween: 5
		              },
		               480: {
		                  slidesPerView: 1,
		                  spaceBetween: 5
		               }
		            },
		            pagination: {
		               el: '.swiper-pagination-depoimentos',
		               clickable: true,
		            },
		 		});
		 	}
		 </script>
	<?php endif ?>

	<?php if (is_home()): ?>
		<script>
			window.onload = function() {

			    var galleryThumbs = new Swiper('.gallery-thumbs', {
					spaceBetween: 10,
					slidesPerView: 7,
					freeMode: true,
					watchSlidesVisibility: true,
					watchSlidesProgress: true,
			    });

			    var galleryTop = new Swiper('.gallery-top', {
					spaceBetween: 10,
					thumbs: {
						swiper: galleryThumbs
					}
			    });

			    var swiper_slider = new Swiper('.swiper-slider', {
		            slidesPerView: 1,
		            loop: false,
		            autoplay: {
		               delay: 80000,
		               disableOnInteraction: false,
		            },
		            paginationClickable: true,
		            spaceBetween: 10,
		            pagination: {
		               el: '.swiper-pagination-slider',
		               clickable: true,
		            },
		            navigation: {
		               nextEl: '.swiper-button-next-s',
		               prevEl: '.swiper-button-prev-s',
		            },
		         });

			    var swiper_logos = new Swiper('.swiper-container-logos', {
		            slidesPerView: 4,
		            loop: false,
		            autoplay: {
		               delay: 80000,
		               disableOnInteraction: false,
		            },
		            paginationClickable: true,
		            spaceBetween: 10,
		            breakpoints: {
		               780: {
		                  slidesPerView: 1,
		                  spaceBetween: 5
		              },
		               480: {
		                  slidesPerView: 1,
		                  spaceBetween: 5
		               }
		            },
		            navigation: {
		               nextEl: '.swiper-button-next',
		               prevEl: '.swiper-button-prev',
		            },
         		});

			}
		</script>
	<?php endif ?>

<?php } ?>