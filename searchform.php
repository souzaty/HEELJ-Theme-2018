<?php
/** Template Name: Search Form **/
?>
<form role='search' method='get' class='search-form' action='" . esc_url(home_url('/')) . "'>
	<div class='box box-header navbar-custom-hospital clearColor'>
		<div><span class='icon'>
			<i class='fa fa-search'></i>
			</span><input class="input-404" type='search' id='search' placeholder='pesquisar...' value=' .get_search_query(). ' name='s' />
		</div>
	</div>
</form>
<hr>
<form role="search" method="get" id="searchform" action=''" . esc_url(home_url('/')) . "'' >
	<div>
    	<input class="input-404" type="text" value="" name="s" id="s" placeholder="Pesquisar" />
    	<input class="submit-404" type="submit" id="searchsubmit" value="Ir" />
	</div>
</form>

<style type="text/css">
.input-404 {
padding: 10px 20px;
border: 1px solid #333;
font-size: 1.1em;
margin: 0;
border-right: 0;
height: 45px;
width: 300px;
float: left;
}
.submit-404 {
height: 45px;
border:1px solid #000;
background: #000;
color: #fff;
padding: 20px;
margin: 0;
float: left;
}
</style>
