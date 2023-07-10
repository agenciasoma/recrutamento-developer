<?php

/**
 * Display navigation to next/previous set of posts when applicable.
 * Based on paging nav function from Twenty Fourteen
 */

function pagination() {
  // Don't print empty markup if there's only one page.
  if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
    return;
  }

  $paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
  $pagenum_link = html_entity_decode( get_pagenum_link() );
  $query_args   = array();
  $url_parts    = explode( '?', $pagenum_link );

  if ( isset( $url_parts[1] ) ) {
    wp_parse_str( $url_parts[1], $query_args );
  }

  $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
  $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

  $format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
  $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

  // Set up paginated links.
  $links = paginate_links( array(
    'base'     => $pagenum_link,
    'format'   => $format,
    'total'    => $GLOBALS['wp_query']->max_num_pages,
    'current'  => $paged,
    'mid_size' => 3,
    'add_args' => array_map( 'urlencode', $query_args ),
    'prev_text' => __( '<span class="title-left">Anterior</span>', 'somadev' ),
    'next_text' => __( '<span class="title-right">Próximo</span>', 'somadev' ),
    'type'      => 'list',
  ) );

  if ( $links ) :

  ?>
<div class="pagination">
  <nav class="navigation paging-navigation" role="navigation">
      <?php echo $links; ?>
  </nav>
</div>
  <?php
  endif;
}
