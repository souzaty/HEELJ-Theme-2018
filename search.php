<?php
   /* Template Name: SEARCH */
?>
<?php
   global $post;
   $url = get_permalink($post->ID);
   $sel_head = 'ibgh/';
   $post = strpos($url, $sel_head);
   if ($post === false) { ?>
<div id="pagina-interna-heelj">
   <?php get_header(); ?>
</div>
<section class="interna-ibgh title-page">
   <div class="container">
      <div class="row">
         <h1>Resultados</h1>
      </div>
   </div>
</section>
<?php
   } else { ?>
<?php get_header(); ?>
<section class="interna-ibgh title-page">
   <div class="container">
      <div class="row">
         <h1>Resultados</h1>
      </div>
   </div>
</section>
<? } ?>
<section id="posts">
   <div class="container gutter-0">
      <div class="row">
         <div class="col-md-9">
            <!-- Main Blog Content -->
            <?php
               // Start the Loop.
               while ( have_posts() ) : the_post();
               ?>
            <div class="postResume">
               <article>
                  <div class="col-md-5 gutter-30 no-gutter-30-right">
                     <?php the_post_thumbnail('noticias-home-heelj'); ?>
                  </div>
                  <div class="col-md-7 gutter-30">
                     <div class="postMeta">
                        <abbr class="published updated" title="<?php the_time('j/m/Y'); ?>"><span class="clock"></span><?php the_time('j/m/Y'); ?></abbr> <span class="tag"></span>
                        <?php
                           $categories = get_the_category();
                           $category_names = array();
                           foreach ($categories as $category)
                           {
                           $category_names[] = $category->cat_name;
                           }
                           echo implode(', ', $category_names);
                           ?>
                     </div>
                     <h3 class="postTitle entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                     <div class="postSummary entry-content">
                        <p><?php the_excerpt_lenght('','','true', 270); ?></p>
                        <a href="<?php echo get_permalink(); ?>"><button style="margin-right:20px" type="button" class="btn btn-default btn-blue" aria-label="Left Align">Leia mais</button></a>
                     </div>
                  </div>
               </article>
            </div>
            <?php endwhile; ?>
            <!-- Pagintation -->
            <?php
               if ( function_exists('wp_bootstrap_pagination') )
                 wp_bootstrap_pagination();
               ?>
            <?php wp_reset_query(); ?>
         </div>
         <!-- End col-md-9 -->
         <div class="col-md-3">
            <?php
               if(is_active_sidebar('eventos-treinamentos-ibgh')){
                  dynamic_sidebar('eventos-treinamentos-ibgh');
               }
               ?>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>
