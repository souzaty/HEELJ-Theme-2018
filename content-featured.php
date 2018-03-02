<div class="postResume">
   <article>
      <div class="col-md-5" style="padding-left:0">
         <?php the_post_thumbnail('noticias-home-heelj'); ?>
      </div>
      <div class="col-md-7" style="padding-left:0">
         <div class="postMeta">
            <abbr class="published updated" title="<?php the_time('j/m/Y'); ?>"><span class="clock"></span><?php the_time('j/m/Y'); ?></abbr> <span class="tag"></span>
            <?php the_category( ', ' ); ?>
         </div>
         <h3 class="postTitle entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
         <div class="postSummary entry-content">
            <p><?php the_excerpt_lenght('','','true', 170); ?></p>
            <a href="<?php echo get_permalink(); ?>"><button type="button" class="btn btn-default btn-blue" aria-label="Left Align">Leia mais</button></a>
         </div>
      </div>
   </article>
</div>
