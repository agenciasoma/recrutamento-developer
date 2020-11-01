<?php

add_action( 'widgets_init', 'somadev_widgets_init' );


 function somadev_widgets_init() {

    register_sidebar ( array (
        'name' => __( 'Telefones e email', 'somadev' ),
        'id' => 'telefonesemail',
        'description' => __( 'Área para adicionar telefones e email', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar( array(
        'name' => __( 'Sidebar do Blog', 'somadev' ),
        'id' => 'sidebar',
        'description' => __( 'Área para adicionar na lateral do site.', 'somadev' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      ) );


    register_sidebar( array(
        'name' => __( 'Endereços', 'somadev' ),
        'id' => 'enderecos',
        'description' => __( 'Área para adicionar endereços no rodapé', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

    register_sidebar ( array (
        'name' => __( 'Telefone topo', 'somadev' ),
        'id' => 'telefonetopo',
        'description' => __( 'Área para adicionar telefones ao topo', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar ( array (
        'name' => __( 'Instagram', 'somadev' ),
        'id' => 'instagram',
        'description' => __( 'Área para adicionar o feed do Instagram', 'somadev' ),
        'before_widget' => '<div class="group-instagram">',
        'after_widget' => '</div>',
        'before_title' => '<span class="title-instagram">',
        'after_title' => '</span>',
    ));

    register_sidebar ( array (
        'name' => __( 'Redes sociais e email', 'somadev' ),
        'id' => 'redessociais',
        'description' => __( 'Área para adicionar as redes sociais', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar ( array (
        'name' => __( 'Idioma', 'somadev' ),
        'id' => 'idioma',
        'description' => __( 'Área para adicionar opção de idioma', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar ( array (
        'name' => __( 'Home', 'somadev' ),
        'id' => 'home',
        'description' => __( 'Área para adicionar elementos na Home', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar ( array (
        'name' => __( 'Blog Destaque', 'somadev' ),
        'id' => 'blogdestaque',
        'description' => __( 'Área para adicionar elementos em destaque no Blog', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar ( array (
        'name' => __( 'Materiais para download', 'somadev' ),
        'id' => 'materiais',
        'description' => __( 'Área para adicionar elementos em materiais para download na Home', 'somadev' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));


}