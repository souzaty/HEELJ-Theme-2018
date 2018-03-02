<?php

/**
 * @package WordPress
 * @subpackage IBGH
 * @since IBGH 1.3
 */

global $post;
$wp_query = new WP_Query();
$wp_query->query('post_type=indicadores-ibgh&posts_per_page=1&orderby=title&order=ASC');
$count = 0;
?>
            <?php
if($wp_query->have_posts()):
            while($wp_query->have_posts()):
                        $wp_query->the_post();
?>
            <div class="col-md-2">
               <!-- Leitos -->
               <table class="numeros-tabela numeros-tabela-firt" style="border-left:2px solid #c8c8c8">
                  <tr>
                     <td>
                        <p class="right"><img src="<?php
                        echo get_template_directory_uri();
?>/img/icon_001.png" alt=""></p>
                     </td>
                     <td>
                        <h1 class="number-counter">
                           <?php
                        $value_indicador_heelj_1 = get_post_meta($post->ID, 'value_indicador_heelj_1', true);
?>
                           <?php
                        echo $value_indicador_heelj_1;
?>
                        </h1>
                        <p class="text-counter">
                           <?php
                        $label_indicador_heelj_1 = get_post_meta($post->ID, 'label_indicador_heelj_1', true);
?>
                           <?php
                        echo $label_indicador_heelj_1;
?>
                        </p>
                     </td>
                  </tr>
               </table>
            </div>
            <div class="col-md-2">
               <!-- Centros cirurgicos -->
               <table class="numeros-tabela">
                  <tr>
                     <td>
                        <p class="right"><img src="<?php
                        echo get_template_directory_uri();
?>/img/icon_002.png" alt=""></p>
                     </td>
                     <td>
                        <h1 class="number-counter">
                           <?php
                        $value_indicador_heelj_2 = get_post_meta($post->ID, 'value_indicador_heelj_2', true);
?>
                           <?php
                        echo $value_indicador_heelj_2;
?>
                        </h1>
                        <p class="text-counter">
                           <?php
                        $label_indicador_heelj_2 = get_post_meta($post->ID, 'label_indicador_heelj_2', true);
?>
                           <?php
                        echo $label_indicador_heelj_2;
?>
                        </p>
                     </td>
                  </tr>
               </table>
            </div>
            <div class="col-md-2">
               <!-- Centros colaboradores -->
               <table class="numeros-tabela">
                  <tr>
                     <td>
                        <p class="right"><img src="<?php
                        echo get_template_directory_uri();
?>/img/icon_003.png" alt=""></p>
                     </td>
                     <td>
                        <h1 class="number-counter">
                           <?php
                        $value_indicador_heelj_3 = get_post_meta($post->ID, 'value_indicador_heelj_3', true);
?>
                           <?php
                        echo $value_indicador_heelj_3;
?>
                        </h1>
                        <p class="text-counter">
                           <?php
                        $label_indicador_heelj_3 = get_post_meta($post->ID, 'label_indicador_heelj_3', true);
?>
                           <?php
                        echo $label_indicador_heelj_3;
?>
                        </p>
                     </td>
                  </tr>
               </table>
            </div>
            <div class="col-md-2">
               <!-- procedimentos -->
               <table class="numeros-tabela">
                  <tr>
                     <td>
                        <p class="right"><img src="<?php
                        echo get_template_directory_uri();
?>/img/icon_004.png" alt=""></p>
                     </td>
                     <td>
                        <h1 class="number-counter">
                           <?php
                        $value_indicador_heelj_4 = get_post_meta($post->ID, 'value_indicador_heelj_4', true);
?>
                           <?php
                        echo $value_indicador_heelj_4;
?>
                        </h1>
                        <p class="text-counter">
                           <?php
                        $label_indicador_heelj_4 = get_post_meta($post->ID, 'label_indicador_heelj_4', true);
?>
                           <?php
                        echo $label_indicador_heelj_4;
?>
                        </p>
                     </td>
                  </tr>
               </table>
            </div>
            <!-- especialidades -->
            <div class="col-md-2">
               <table class="numeros-tabela">
                  <tr>
                     <td>
                        <p class="right"><img src="<?php
                        echo get_template_directory_uri();
?>/img/icon_005.png" alt=""></p>
                     </td>
                     <td>
                        <h1 class="number-counter">
                           <?php
                        $value_indicador_heelj_5 = get_post_meta($post->ID, 'value_indicador_heelj_5', true);
?>
                           <?php
                        echo $value_indicador_heelj_5;
?>
                        </h1>
                        <p class="text-counter">
                           <?php
                        $label_indicador_heelj_5 = get_post_meta($post->ID, 'label_indicador_heelj_5', true);
?>
                           <?php
                        echo $label_indicador_heelj_5;
?>
                        </p>
                     </td>
                  </tr>
               </table>
            </div>
            <div class="col-md-2">
               <!-- horario -->
               <table class="numeros-tabela">
                  <tr>
                     <td>
                        <p class="right"><img src="<?php
                        echo get_template_directory_uri();
?>/img/icon_006.png" alt=""></p>
                     </td>
                     <td>
                        <h1 class="number-counter">
                           <?php
                        $value_indicador_heelj_6 = get_post_meta($post->ID, 'value_indicador_heelj_6', true);
?>
                           <?php
                        echo $value_indicador_heelj_6;
?>
                        </h1>
                        <p class="text-counter">
                           <?php
                        $label_indicador_heelj_6 = get_post_meta($post->ID, 'label_indicador_heelj_6', true);
?>
                           <?php
                        echo $label_indicador_heelj_6;
?>
                        </p>
                     </td>
                  </tr>
               </table>
            </div>
            <?php
            endwhile;
endif;
wp_reset_query();
?>
