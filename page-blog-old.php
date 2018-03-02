<?php
    /**
    * @package WordPress
    * @subpackage HEELJ
    * @since HEELJ 1.0
    * Template Name: Página de Notícias Old */
?>

<div id="pagina-interna-heelj">
   <?php get_header(); ?>
</div>
<section class="interna-unidades title-page">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="white"><?php the_title(); ?></h1>
         </div>
      </div>
   </div>
</section>
<section id="posts">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <!-- Main Blog Content -->
                <?php
                $op_content = 'featured';

                $itens = get_categories(array('include' =>'2'));

                foreach($itens as $item):

                $args = array(
                    'category__in'      => $item->cat_ID,
                    'posts_per_page'    => 4
                );
                $consulta = new WP_Query($args);

                if($consulta->have_posts()):
                    while($consulta->have_posts()):
                        $consulta->the_post();
                ?>
                <div class="<?php echo $size; ?>">
                    <?php get_template_part('content-featured', $op_content) ?>
                </div>
                <?php
                    $size   = '';
                    $op_content = 'secondary';

                    endwhile;
                    wp_reset_postdata();
                endif;
                endforeach;
                ?>
            </div>
            <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();?>
            <?php endwhile; ?>
            <!-- Pagintation -->
            <?php if ( function_exists('wp_bootstrap_pagination') )
                 wp_bootstrap_pagination();
               ?>
            <?php endif; wp_reset_query(); ?>
         <!-- End col-md-9 -->
         <div class="col-md-3">
            <?php if(is_active_sidebar('eventos-treinamentos-heelj')){

                  dynamic_sidebar('eventos-treinamentos-heelj');
               }
               ?>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>
