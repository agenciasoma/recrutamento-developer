<?php class socialWidgets extends WP_Widget {

  function __construct()
  {
    $widget_ops = array('classname' => 'socialWidgets', 'description' => 'Social Widgets' );
    parent::__construct('socialWidgets', 'Social Widgets', $widget_ops);
  }

  function widget( $args, $instance ) {
    extract( $args ); ?>

    <div class="widget">

    <?php if ($instance['titulo']): ?>
      <h3 class="widget-title"><?php echo $instance['titulo']; ?></h3>
    <?php endif ?>

      <ul class="share-social">
        <?php if ($instance['whatsapp']): ?>
          <li><a class="icon-whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $instance['whatsapp']; ?>" target="_blank" title="<?php echo $instance['whatsapp']; ?>"><span>Whats App</span></a></li>
        <?php endif ?>
        <?php if ($instance['mail']): ?>
          <li><a class="icon-mail" href="<?php echo $instance['mail']; ?>" title="Email"><span>Email</span></a></li>
        <?php endif ?>
        <?php if ($instance['instagram']): ?>
          <li><a class="icon-instagram" href="<?php echo $instance['instagram']; ?>" target="_blank" title="Instagram"><span>Instagram</span></a></li>
        <?php endif ?>
        <?php if ($instance['linkedin']): ?>
          <li><a class="icon-linkedin" href="<?php echo $instance['linkedin']; ?>" target="_blank" title="Linkedin"><span>Linkedin</span></a></li>
        <?php endif ?>
        <?php if ($instance['twitter']): ?>
          <li><a class="icon-twitter" href="<?php echo $instance['twitter']; ?>" target="_blank" title="Twitter"><span>Twitter</span></a></li>
        <?php endif ?>
        <?php if ($instance['facebook']): ?>
          <li><a class="icon-facebook" href="<?php echo $instance['facebook']; ?>" target="_blank" title="Facebook"><span>Facebook</span></a></li>
        <?php endif ?>
        <?php if ($instance['youtube']): ?>
          <li><a class="icon-youtube" href="<?php echo $instance['youtube']; ?>" target="_blank" title="Youtube"><span>Youtube</span></a></li>
        <?php endif ?>
      </ul>

    </div>

  <?php }

function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    //Strip tags from title and name to remove HTML
    $instance['titulo'] = strip_tags( $new_instance['titulo'] );
    $instance['whatsapp'] = strip_tags( $new_instance['whatsapp'] );
    $instance['mail'] = strip_tags( $new_instance['mail'] );
    $instance['twitter'] = strip_tags( $new_instance['twitter'] );
    $instance['facebook'] = strip_tags( $new_instance['facebook'] );
    $instance['youtube'] = strip_tags( $new_instance['youtube'] );
    $instance['instagram'] = strip_tags( $new_instance['instagram'] );
    $instance['linkedin'] = strip_tags( $new_instance['linkedin'] );

    return $instance;
}

  function form( $instance ) {
 ?>

    <p>Preencha com os links correspondente de cada rede social</p>
    <p>
        <label for="<?php echo $this->get_field_id( 'titulo' ); ?>"><?php _e('Título:', 'example'); ?></label>
        <input id="<?php echo $this->get_field_id( 'titulo' ); ?>" name="<?php echo $this->get_field_name( 'titulo' ); ?>" value="<?php echo $instance['titulo']; ?>" style="width:100%;" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'whatsapp' ); ?>"><?php _e('WhatsApp:', 'example'); ?></label>
        <input id="<?php echo $this->get_field_id( 'whatsapp' ); ?>" name="<?php echo $this->get_field_name( 'whatsapp' ); ?>" value="<?php echo $instance['whatsapp']; ?>" style="width:100%;" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'mail' ); ?>"><?php _e('Email:', 'example'); ?></label>
        <input id="<?php echo $this->get_field_id( 'mail' ); ?>" name="<?php echo $this->get_field_name( 'mail' ); ?>" value="<?php echo $instance['mail']; ?>" style="width:100%;" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook:', 'example'); ?></label>
        <input id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" style="width:100%;" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'instagram' ); ?>"><?php _e('Instagram:', 'example'); ?></label>
        <input id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" value="<?php echo $instance['instagram']; ?>" style="width:100%;" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('Youtube:', 'example'); ?></label>
        <input id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo $instance['youtube']; ?>" style="width:100%;" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter:', 'example'); ?></label>
        <input id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" style="width:100%;" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('Linkedin:', 'example'); ?></label>
        <input id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" style="width:100%;" />
    </p>
<?php
  }
}

function myplugin_register_widgets() {
  register_widget( 'socialWidgets' );
}

add_action( 'widgets_init', 'myplugin_register_widgets' );