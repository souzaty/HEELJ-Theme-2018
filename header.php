<?php
	/**
	 * @package WordPress
	 * @subpackage HEELJ
	 * @since HEELJ 1.0 Beta
	*/
	?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title><?php wp_title(''); ?></title>
		<meta charset="UTF-8">
        <!-- Google Fonts -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
        <!-- Function load styles -->
        <?php wp_enqueue_script("jquery");?>
		<?php wp_head(); ?>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/template.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115028585-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-115028585-1');
        </script>
        <!-- Hotjar Tracking Code for http://heelj.org.br -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:800557,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
	</head>
	<body <?php body_class(); ?> >
        <!-- ### Menu Principal ### -->
        <div class="container-fluid clearHeader">
        	<div class="row">
        		<!-- ### Menu Principal ### -->
        		<nav id="mainNav" class="navbar navbar-default navbar-custom-heelj">
        			<div class="container gutter-0">
        				<div class="row gutter-0">
        					<div class="col-md-4">
        						<div class="navbar-header" style="width: 100%">
        							<button type="button" class="navbar-toggle collapsed navbar-toggle-heelj" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3" aria-expanded="false" style="z-index: 9999 !important; right: 25px; top:20px; margin-top:0;">
        							<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        							</button>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                                if ( has_custom_logo() ) {
                                                        echo '<img class="" src="'. esc_url( $logo[0] ) .'">';
                                                } else {
                                                        echo '<h1 class="header-logo-big">'. get_bloginfo( 'name' ) .'</h1>';
                                                } ?>
                                    </a>
        							</span>
        						</div>
        					</div>
        					<div class="col-md-8">
        						<?php wp_nav_menu ( array(

        							'menu' => 'menu_principal_heelj',

        							'theme_location' => 'menu_principal_heelj',

        							'container' => 'div',

        							'container_class' => 'collapse navbar-collapse',

        							'container_id' => 'bs-example-navbar-collapse-3',

        							'menu_class' => 'nav navbar-nav navbar-right',

        							'echo' => true,

        							'menu_id' => 'id-menu',

        							'before' => "",

        							'after' => "",

        							'link_before' => "",

        							'link_after' => "",

        							'depth' => 0,

        							'walker' => ""

        							) );
        						?>
        						<!-- /.navbar-collapse -->
        					</div>
        				</div>
        			</div>
        		</nav>
        		<div class="modal fade bg-modal-menu" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
        			<div class="modal-dialog" role="document">
        				<div class="modal-content">
        					<div class="modal-header">
        						<button type="button" class="close" data-dismiss="modal"
        							aria-label="Close">
        						<span aria-hidden="true">&times;</span>
        						</button>
        					</div>
        					<div class="modal-body">
        						<div class="row row-modal">
        							<div class="container">
        								<div class="col-md-12">
        									<h1>O Hospital</h1>
        								</div>
        								<div class="col-md-4 separator">
        									<?php wp_nav_menu ( array(

        										'menu' => 'menu_principal_modal_ohospital_heelj_c1',

        										'theme_location' => 'menu_principal_modal_ohospital_heelj_c1',

        										'container' => 'div',

        										'container_class' => 'mega-menu',

        										'container_id' => '',

        										'menu_class' => '',

        										'echo' => true,

        										'menu_id' => 'id-menu',

        										'before' => "",

        										'after' => "",

        										'link_before' => "",

        										'link_after' => "",

        										'depth' => 0,

        										'walker' => ""

        										) );
        									?>
        								</div>
        								<!-- coluna 2 -->
        								<div class="col-md-4 separator-duplo">
        									<?php wp_nav_menu ( array(

        										'menu' => 'menu_principal_modal_ohospital_heelj_c2',

        										'theme_location' => 'menu_principal_modal_ohospital_heelj_c2',

        										'container' => 'div',

        										'container_class' => 'mega-menu',

        										'container_id' => '',

        										'menu_class' => '',

        										'echo' => true,

        										'menu_id' => 'id-menu',

        										'before' => "",

        										'after' => "",

        										'link_before' => "",

        										'link_after' => "",

        										'depth' => 0,

        										'walker' => ""

        										) );
        									?>
        								</div>
        								<!-- coluna 3 -->
        								<div class="col-md-4 separator last">
        									<?php wp_nav_menu ( array(

        										'menu' => 'menu_principal_modal_ohospital_heelj_c3',

        										'theme_location' => 'menu_principal_modal_ohospital_heelj_c3',

        										'container' => 'div',

        										'container_class' => 'mega-menu',

        										'container_id' => '',

        										'menu_class' => '',

        										'echo' => true,

        										'menu_id' => 'id-menu',

        										'before' => "",

        										'after' => "",

        										'link_before' => "",

        										'link_after' => "",

        										'depth' => 0,

        										'walker' => ""

        										) );
        									?>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div><!-- /#modal1 -->
        </div>
        </div>
