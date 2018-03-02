<footer> 
    <div id="heelj-footer">
       <div class="container">
          <div class="row">
             <div class="col-md-3">
             	<?php
    				if(is_active_sidebar('heelj-footer-sidebar-1')){
    					dynamic_sidebar('heelj-footer-sidebar-1');
    				}
    			?>
             </div>
             <div class="col-md-3">
                <?php
    				if(is_active_sidebar('heelj-footer-sidebar-2')){
    					dynamic_sidebar('heelj-footer-sidebar-2');
    				}
    			?>
             </div>
             <div class="col-md-3">
               <?php
    				if(is_active_sidebar('heelj-footer-sidebar-3')){
    					dynamic_sidebar('heelj-footer-sidebar-3');
    				}
    			?>
             </div>
             <div class="col-md-3">
             	<?php
    				if(is_active_sidebar('heelj-footer-sidebar-4')){
    					dynamic_sidebar('heelj-footer-sidebar-4');
    				}
    			?>
             </div>
          </div>
       </div>
    </div>
</footer>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script src='<?php echo esc_url( get_template_directory_uri() ); ?>/js/listnav.js'></script>

<!-- Modal theme -->
<script type="text/javascript">
    $(document).ready(function() {
    $('#menu-item-3634').find('a').attr('data-toggle', 'modal');
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
