<section id="Comments">
  <div class="container">
    <div class="row">
        <p class="comments"> <img style="margin-right: 10px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/comment-icon.png" alt="">Coment&aacute;rios</p>
              <?php echo do_shortcode('[wpdevart_facebook_comment curent_url="<?php the_permalink(); ?>" order_type="social" title_text="" title_text_color="#000000" title_text_font_size="0" title_text_font_famely="monospace" title_text_position="left" width="100%" bg_color="#d4d4d4" animation_effect="random" count_of_comments="3" ]'); ?>
    </div>
  </div>
  