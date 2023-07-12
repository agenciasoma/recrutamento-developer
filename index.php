<?php
get_header();
$botao = 'Continue lendo';
?>
<div class="container-page">
    <div class="header-page" style="background: url('<?php bloginfo('template_url'); ?>/src/images/bg-blog.jpg') no-repeat center center;background-size: cover;">
        <div class="center">
            <img src="<?php bloginfo('template_url'); ?>/src/images/icone-blog.png">
            <h1 class="title">Blog</h1>
        </div>
    </div>
    <div class="center-small">
        <?php
        $args = array(
            'category_name'   => 'BLOG',
            'date_query'      => array(
                array(
                    'after'     => '2019-09-10',
                    'before'    => '2019-09-20',
                    'inclusive' => true,
                ),
            ),
            'meta_query'      => array(
                array(
                    'key'     => 'status',
                    'value'   => 'free',
                    'compare' => '=',
                ),
            ),
            'posts_per_page'  => 8,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            $post_count = 0;
            $col_count  = 0;
            $first_post = null;
            $small_posts = array();
            $itens_posts = array();

            while ($query->have_posts()) {
                $query->the_post();
                if ($post_count === 0) {
                    $first_post = get_post();
                } elseif ($post_count <= 2) {
                    $small_posts[] = get_post();
                } else {
                    $itens_posts[] = get_post();
                }
                $post_count++;
            }

            if ($first_post) {
                setup_postdata($first_post);
        ?>
                <div class="content-page">
                    <div class="center-small">
                        <div class="top-itens">
                            <div class="center-small">
                                <div class="col">
                                    <div class="item">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                        <div class="wrapper">
                                            <div class="category">
                                                <?php the_category(); ?>
                                            </div>
                                            <div class="text">
                                                <h2 class="title">
                                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                                </h2>
                                                <div class="text-mobile">
                                                    <?php the_excerpt(); ?>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="link-more" title="Continue lendo <?php the_title_attribute(); ?>"><?php echo $botao; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <?php

                                    foreach ($small_posts as $post) {
                                        setup_postdata($post);
                                    ?>
                                        <div class="item item-small">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                            <div class="wrapper">
                                                <div class="category">
                                                    <?php the_category(); ?>
                                                </div>
                                                <div class="text">
                                                    <h2 class="title">
                                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                                    </h2>
                                                    <p><?php the_excerpt(); ?></p>
                                                    <a href="<?php the_permalink(); ?>" class="link-more" title="Continue lendo <?php the_title_attribute(); ?>"><?php echo $botao; ?></a>
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
                </div>
            <?php
            }


            if (!empty($itens_posts)) {
            ?>
                <div class="itens-post">
                    <?php
                    foreach ($itens_posts as $post) {
                        setup_postdata($post);
                    ?>
                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="text">
                                    <h2>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <span class="icons-post icon-date">
                                        <i class="icon-calendar"></i><?php the_date(); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>" class="icons-post icon-coment-count">
                                        <i class="icon-comment-alt"></i><?php comments_number('0', '1', '%'); ?>
                                    </a>
                                    <p><?php the_excerpt(); ?></p>
                                    <a class="link-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo $botao; ?></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
        <?php
            }
        } else {
            echo 'Nenhum post encontrado.';
        }

        wp_reset_postdata();
        ?>
    </div>
</div>

<?php
get_footer();
?>