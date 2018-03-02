<form class="busca-transparencia" role="search" id="busca-transparencia" method="get" action="<?php echo get_site_url(); ?>/transparencia-resultado/">
	<div class="input-group">
		<div class="input-group-btn">
			<?php 
				$busca_unidade_id  = get_categories('post_type=post&parent=0&hide_empty=1&hierarchical=1&depth=1&order=ASC');
				$busca_unidade_id = wp_list_pluck($busca_unidade_id,'slug');
				$busca_unidade_id =  implode(",", $busca_unidade_id);
				?>
			<select name="unidadeSelect" id="unidadeSelect" class="btn btn-default dropdown-toggle filtro-label" onchange="alteraActionImpresa(this.value)">
				<option value="ibgh,unidades">Filtrar por</option>
				<option class="level-0" value="ibgh">IBGH</option>
				<option class="level-1" value="heelj">Hospital Estadual Ernestina Lopes Jaime</option>
				<option class="level-1" value="hma">Hospital Municipal de Aragua&iacute;na</option>
				<option class="level-1" value="upa-araguaina">UPA Walter Fernandes de Goian&eacute;sia</option>
				<option class="level-1" value="upa-goianesia">UPA Anat&oacute;lio Dias Carneiro de Aragua&iacute;na</option>
				<option class="level-1" value="upa-goianesia">UPA Zona Sul de Macapá</option>

			</select>
		</div>
		<input type="text" class="form-control input-label" aria-label="..." type="search" name="pesquisa_imprensa" id="pesquisa_imprensa">
		<span class="input-group-btn">
		<button class="btn btn-default pesquisa-label" type="submit">Pesquisar</button>
		</span>
	</div>
</form>