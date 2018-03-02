<!-- Section title Page -->
<section class="page-post heelj">
  <div class="container" style="width:100%;max-width:950px; margin:0 auto;">
    <div class="row">
      <article>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="dark-blue"><?php the_title(); ?></h1>
        <div class="postMeta">
          <abbr class="published updated" title="<?php the_time('j/m/Y'); ?>"><span class="clock"></span><?php the_time('j/m/Y'); ?></abbr> <span class="tag"></span>
          <?php the_category( ', ' ); ?>
          <p></p>
        </div>
        <div class="postContent">
          <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
      </article>
      <div class="share">
        <p class="share-text" style="color:#333; width:auto; float: left; display:inline-block;">
          Compartilhe:
          <?php echo do_shortcode('[addthis tool="addthis_inline_share_toolbox_dwab"]') ?>
        </p>
    </div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
      <!-- Read Too -->
      <div>
        <p class="read-too"> <img style="margin-right: 10px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/read-too-icon.png" alt="">Leia tamb&eacute;m</p>
      </div>
      <!-- Primeira Not�cia -->
      <?php
        global $post;
        $tags = wp_get_post_tags($post->ID);
        if ($tags) {
          $tag_ids = array();
          foreach($tags as $individual_tag)
            $tag_ids[] = $individual_tag->term_id;
            $args=array(
              'tag__in' => $tag_ids,
              'post__not_in' => array($post->ID),
              'posts_per_page' => 2 // Number of related posts that will be shown.
            );
            $my_query = new wp_query($args);
            if( $my_query->have_posts() ) {
              while ($my_query->have_posts()){
                $my_query->the_post();
        ?>
      <div class="col-md-6">
        <article>
          <div class="col-md-12">
            <?php the_post_thumbnail('noticias-home-heelj', array( 'class' => 'img-responsive thumb-related-post' )); ?>
          </div>
          <div class="col-md-8">
            <div class="postMeta">
            <h3 class="postTitle entry-title postTitle-readmore"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="postSummary entry-content">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </article>
      </div>
      <?php }?><?php } } wp_reset_query();?>
    </div>
  </div>
</section>
<section id="Comments">
  <div class="container">
    <div class="row">
      <div>
        <p class="comments"> <img style="margin-right: 10px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/comment-icon.png" alt="">Coment&aacute;rios</p>
      </div>
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];

        if (d.getElementById(id)) return;

        js = d.createElement(s); js.id = id;

        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=341023886028029";

        fjs.parentNode.insertBefore(js, fjs);

        }(document, 'script', 'facebook-jssdk'));
      </script>
      <div class="fb-comments" data-href="" data-width="100%" data-numposts="10"></div>
    </div>
  </div>
</section>
<section id="numeros-full" class="ghost" style="background-color: #f2f2f2;">
  <div class="container">
    <div class="row">
      <?php include 'includes/heelj-section_numbers_full.php'; ?>
    </div>
  </div>
</section>
