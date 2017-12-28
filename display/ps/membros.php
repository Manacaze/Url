
<?php 
	$sql = "SELECT*FROM frl_cadastro_de_membros";
	$sql_prov = "SELECT*FROM sms_provincias";
	$sql_distrito = "SELECT*FROM sms_distritos";
	$sql_posto_administrativo = "SELECT*FROM sms_postos_administrativos";
	$sql_zona = "SELECT*FROM frl_zona";
	$sql_circulo = "SELECT*FROM frl_circulo";
	$sql_celula = "SELECT*FROM frl_celula";
	$sql_paises =  "SELECT*FROM frl_paises";
	$sql_local_trabalho = "SELECT*FROM frl_cadastro_de_membros";
	$sql_profisao = "SELECT*FROM frl_cadstro_de_profissoes";
	$sql_ocupacao = "SELECT*FROM frl_cadastro_de_ocupacao_profi";
	$sql_formacao_academica = "SELECT*FROM frl_cadastro_de_ocupacao_profi";
	$sql_funcoes_partido = "SELECT*FROM frl_funcoes_membro";
	$sql_orgaos_partido = "SELECT*FROM frl_cadastro_de_orgaos";
?>
<div class="padding">
<div class="box">
	<div class="box-header row">
	  <div class="row">
	   <div class="col-md-6 col-xs-6 col-sm-6">
		<h2>Pesquisas</h2>
		<small>Pesquisa de membros</small>
	   </div>
		<button style="width: 40px;" class="md-btn md-raised m-b-sm white col-md-6 col-xs-6 col-sm-6 pull-right" onClick="imprimir_pesquisaMembro()" data-toggle="tooltip" title="Imprimir"><i class="fa fa-print"></i></button>
	 </div>
	<div class="box-body">
        <div class="form-group row">
            <div class="pull-left" data-toggle="collapse" data-target="#demo" style="cursor: pointer;" data-toggle="tooltip" title="Pesquisas Avan&ccedil;adas"><i class="fa fa-plus"></i> Pesquisa Avançada</div>
            <!--Todas actividades INICIO-->
            <div class="row pull-right">
                <div class="col-md-12 form-group">
                    <label for="todasAct">Todos Membros: </label><br>
                    <label class="ui-switch m-t-xs m-r blue-700">
                        <input type="checkbox" id="todosMembros" class="pesquisa" name="todosMembros">
                        <i></i>
                    </label>
                </div>
            </div>
        </div>
		  <div id="demo" class="collapse">
		    	<form>
		    		<fieldset style="border: 1px solid #ccc">
		    			<legend class="text-center h6"><small>Dados Pessoais</small></legend>
		    		<div class="form-group col-md-3">
		    		<label>Nome</label>
		    		<select class="form-control select2 pesquisa pesquisa_like" style="width: 100%;" id="nome_membro">
		    				<option value="0">Todos Nomes</option>
		    				<?php 
		    					$dados_nome = mysqli_query($con, $sql);
		    					while($nome_membro = mysqli_fetch_assoc($dados_nome)){
		    						$id_membro = $nome_membro['frl_cad_id'];
		    						$nome = $nome_membro['nome'];

		    				?>
		    				<option value="<?=$id_membro ?>"><?= $nome ?></option>	
		    				<?php		
		    					}
		    				?>
		    		</select>
		    		</div>
		    		<div class="form-group col-md-3" id="provincias">
		    		<label>Provincia</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="nome_provincia">
		    				<option value="0">Todas Provincias</option>
		    				<?php 
		    					$dados_prov = mysqli_query($con, $sql_prov);
		    					while($provincia = mysqli_fetch_assoc($dados_prov)){
		    						$id_prov = $provincia['sms_pro_id'];
		    						$nome_prov= $provincia['provincia'];

		    				?>
		    				<option value="<?=$id_prov?>"><?= $nome_prov ?></option>	
		    				<?php		
		    					}
		    				?>
		    		</select>
		    		</div>
		    		<div class="form-group col-md-3" >
		    		<label>Distrito</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="distrito">
		    				<option value="0">Todos distritos</option>	
							<?php 
		    					$dados_distrito = mysqli_query($con, $sql_distrito);
		    					while($provincia = mysqli_fetch_assoc($dados_distrito)){
		    						$id_distrito = $provincia['sms_dis_id'];
		    						$nome_distrito= $provincia['distrito'];

		    				?>
		    						<option value="<?=$id_distrito?>"><?= $nome_distrito ?></option>	
		    				<?php		
		    					}
		    				?>	    			
		    		</select>
		    		</div>
		    		<div class="form-group col-md-3">
		    		<label>Posto Administrativo</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="posto_administrativo">
		    			<option value="0">Todos postos</option>	
							<?php 
		    					$dados_postos = mysqli_query($con, $sql_posto_administrativo);
		    					while($postos = mysqli_fetch_assoc($dados_postos)){
		    						$id_posto = $postos['sms_pos_id'];
		    						$nome_posto= $postos['posto_administrativo'];

		    				?>
		    						<option value="<?=$id_posto?>"><?= $nome_posto ?></option>	
		    				<?php		
		    					}
		    				?>
		    		</select>
		    		</div>
		    		<div class="form-group col-md-3">
		    		<label>Tipo de documento de Identificação 	</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="tipo_doc">
		    			<option value="0">todo tipo de documento</option>
		    			<?php
		    				$sql_doc = "SELECT tipodoc, frl_tip_id FROM frl_tipo_de_documento_de_ident";
							$query_doc = mysqli_query($con, $sql_doc);


							while($nome_doc = mysqli_fetch_assoc($query_doc)){
									$id_documento = $nome_doc['frl_tip_id'];
									$nome_documento = $nome_doc['tipodoc'];
							?>

							
							<option value="<?=$id_documento?>"><?= $nome_documento?></option>	
						

							
							<?php
							
							}

		    				?>
		    		</select>
		    		</div>
		    		<div class="form-group col-md-3">
		    		<label>Nr de documento de Identificação</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="nr_doc">
		    			<option value="0">Todos</option>
		    			<?php
		    				$sql_nr_doc = "SELECT*FROM frl_cadastro_de_membros";
							$query_doc = mysqli_query($con, $sql_nr_doc);


							while($nr_doc = mysqli_fetch_assoc($query_doc)){
									
									$nr_documento = $nr_doc['documento_numero'];
									
							?>

							
							<option value="<?=$nr_documento?>"><?= $nr_documento ?></option>	
						

							
							<?php
							
							}

		    				?>
		    		</select>
		    		</div>
		    		 <div class="form-group col-md-3">
		    		<label>Cartão de membro</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="nr_cartao_membro">
		    			<option value="0">Todos</option>
		    			<?php
		    				$sql_nr_cartao_membro = "SELECT*FROM frl_cadastro_de_membros";
							$query_doc = mysqli_query($con, $sql_nr_cartao_membro);


							while($nr_cartao_membro = mysqli_fetch_assoc($query_doc)){
									
									$nr_cartao_membro = $nr_cartao_membro['numero_cartao'];
									
							?>

							
							<option value="<?=$nr_cartao_membro?>"><?= $nr_cartao_membro?></option>	
						

							
							<?php
							
							}

		    				?>
		    		</select>
		    		</div>
		    		<div class="form-group col-md-3">
		    		<label>Cartão de Eleitor</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="nr_cartao_eleitor">
		    			<option value="0">Todos</option>
		    			<?php
		    				$sql_nr_cartao_eleitor = "SELECT*FROM frl_cadastro_de_membros";
							$query_cartao_eleitor = mysqli_query($con, $sql_nr_cartao_eleitor);


							while($nr_cartao_eleitor = mysqli_fetch_assoc($query_cartao_eleitor)){
									
									$nr_cartao_eleitor = $nr_cartao_eleitor['numero_cartao_eleitor'];
									
							?>

							
							<option value="<?=$nr_cartao_eleitor?>"><?= $nr_cartao_eleitor ?></option>	
						

							
							<?php
							
							}

		    				?>
		    		</select>
		    		</div>

		    		<div class="form-group col-md-3">
		    		<label>Estado Civil</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="id_estado_civil">
		    			<option value="0">Todos</option>
		    			<?php
		    				$sql_estado_civil = "SELECT*FROM frl_estado_civil";
							$query_estado_civil = mysqli_query($con, $sql_estado_civil);


							while($nr_estado_c = mysqli_fetch_assoc($query_estado_civil)){
									$id_estado_civil = $nr_estado_c['frl_id'];
									$estado_civil = $nr_estado_c['nome'];
									
							?>

							
								<option value="<?=$id_estado_civil?>"><?=$estado_civil?></option>	
						

							
							<?php
							
							}

		    				?>
		    		</select>
		    		</div>


		    		<div class="form-group col-md-3">
		    		<label>Sexo</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="id_sexo">
		    			<option value="0">Todos</option>
		    			<?php
		    				$sql_sexo = "SELECT*FROM frl_sexo";
							$query_sexo = mysqli_query($con, $sql_sexo);


							while($dados_sexo = mysqli_fetch_assoc($query_sexo)){
									$id_sexo = $dados_sexo['frl_id'];
									$nome_sexo = $dados_sexo['nome'];
									
							?>

							
								<option value="<?=$id_sexo?>"><?=$nome_sexo?></option>	
						

							
							<?php
							
							}

		    				?>
		    		</select>
		    		</div>


		    		
		    		</fieldset>
		    		<fieldset style="border: 1px solid #ccc">
		    		<legend class="text-center h6"><small>Localização Geográfica (Militância)</small></legend>

		    		<div class="form-group col-md-3" id="provincias">
		    		<label>Provincia</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="nome_provincia_militancia">
		    				<?php
		    					 if(!($nivelAcesso == 3 || $nivelAcesso == 4 || $nivelAcesso == 5)){// se for registrador so pode registrar membros da sua provincia, se for um supervisor a nivel Distrital so mostra a sua provincia
		    				?>
		    					<option value="0">Todas Provinciass</option>
		    				<?php	 	
		    					 }	
		    				?>
		    				<?php 
		    					$dados_prov = mysqli_query($con, $sql_prov);
		    					while($provincia = mysqli_fetch_assoc($dados_prov)){
		    						$id_prov = $provincia['sms_pro_id'];
		    						$nome_prov= $provincia['provincia'];
		    						 if($nivelAcesso == 3 && $usu_provincia == $id_prov || $nivelAcesso == 4 && $usu_provincia == $id_prov || $nivelAcesso == 5 && $usu_provincia == $id_prov){// se for registrador so pode registrar membros da sua provincia, se for um supervisor a nivel Distrital so mostra a sua provincia
		    				?>
		    								<option value="<?=$id_prov?>"><?= $nome_prov ?></option>	
		    				<?php		
		    							}else
		    							 if($nivelAcesso != 3 && $nivelAcesso != 4 && $nivelAcesso != 5){// se nao for um registador
		    				?>
		    								<option value="<?=$id_prov?>"><?= $nome_prov ?></option>	
		    				<?php		
		    							}	 		
		    					}
		    				?>1
		    		</select>
		    		</div>

		    		<div class="form-group col-md-3" >
		    		<label>Distrito</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="distrito_militancia">
		    				<?php
		    					if(!($nivelAcesso == 3 || $nivelAcesso == 4 || $nivelAcesso == 5)){// se for registrador so pode registrar membros da sua provincia, se for um supervisor a nivel Distrital so mostra a sua provincia
		    				?>
		    					<option value="0">Todos distritos</option>
		    				<?php 
		    					}else{
		    						if($nivelAcesso == 5){
		    							$sql_distrito = "SELECT*FROM sms_distritos WHERE cod_provincia = $usu_provincia";
		    				?>
		    							<option value="0">Todos distritos da provincia</option>
		    				<?php		
		    						}
		    					}


		    				?>	

							<?php 
		    					$dados_distrito = mysqli_query($con, $sql_distrito);
		    					while($provincia = mysqli_fetch_assoc($dados_distrito)){
		    						$id_distrito = $provincia['sms_dis_id'];
		    						$nome_distrito= $provincia['distrito'];
		    						$nome_prov= $provincia['provincia'];
		    						 if($nivelAcesso == 3 && $usu_distrito == $id_distrito || $nivelAcesso == 4 && $usu_distrito == $id_distrito){// se for registrador so pode registrar membros da sua provincia, se for um supervisor a nivel Distrital so mostra a sua provincia	
		    				?>
		    						<option value="<?=$id_distrito?>"><?= $nome_distrito ?></option>	
		    				<?php		
		    						}else
		    						 if($nivelAcesso != 3 && $nivelAcesso != 4){// se nao for um registador
		    				?>
		    							<option value="<?=$id_distrito?>"><?= $nome_distrito ?></option>
		    				<?php		 	
		    						 }	
		    					}
		    				?>	    			
		    		</select>
		    		</div>

		    		<div class="form-group col-md-3" >
		    		<label>Zona</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="zona_militancia">
		    				
		    				<?php 
		    						if($nivelAcesso == 4){// se for um supervisor distrital so ve zonas do seu distrito
		    							$sql_zona = "SELECT*FROM frl_zona WHERE cod_distrito = $usu_distrito";
		    				?>
		    							<option value="0">Todas zonas do distrito</option>
		    				<?php			
		    						}else
		    							if($nivelAcesso == 5){
		    								$sql_zona = "SELECT*FROM frl_zona WHERE cod_provincia = $usu_provincia";
		    						?>
		    								<option value="0">Todas zonas da provincia</option>
		    						<?php		
		    							}

		    						else{
		    				?>			
		    							<option value="0">Todas zonas</option>	
		    				<?php			
		    						}

		    				?>
							<?php 
		    					$dados_zona = mysqli_query($con, $sql_zona);
		    					while($zona = mysqli_fetch_assoc($dados_zona)){
		    						$id_zona = $zona['frl_zon_id'];
		    						$nome_zona= $zona['zona'];

		    				?>
		    						<option value="<?=$id_zona?>"><?= $nome_zona ?></option>	
		    				<?php		
		    					}
		    				?>	    			
		    		</select>
		    		</div>

		    		<div class="form-group col-md-3" >
		    		<label>Circulo</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="circulo_militancia">
		    					
		    				<?php 
		    						if($nivelAcesso == 4){
		    							$sql_circulo = "SELECT*FROM frl_circulo WHERE cod_distrito = $usu_distrito";	
		    				?>			
		    						<option value="0">Todos circulos do distrito</option>
		    				<?php
		    						}else
		    							if($nivelAcesso == 5){
		    								$sql_circulo = "SELECT*FROM frl_circulo WHERE cod_provincia = $usu_provincia";
		    				?>
		    								<option value="0">Todos circulos da provincia</option>
		    				<?php				
		    							}
		    						else{
		    				?>			
		    							<option value="0">Todos Circulos</option>
		    				<?php			
		    						}
		    				?>
							<?php 
		    					$dados_circulo = mysqli_query($con, $sql_circulo);
		    					while($circulo = mysqli_fetch_assoc($dados_circulo)){
		    						$id_circulo = $circulo['frl_cir_id'];
		    						$nome_circulo= $circulo['circulo'];


		    				?>
		    						<option value="<?=$id_circulo?>"><?= $nome_circulo ?></option>	
		    				<?php		
		    					}
		    				?>	    			
		    		</select>
		    		</div>

		    		<div class="form-group col-md-3" >
		    		<label>Celula</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="celula_militancia">
		    					
		    				<?php 
		    						if($nivelAcesso == 4){
		    							$sql_celula = "SELECT*FROM frl_celula WHERE cod_distrito = $usu_distrito";
		    				?>
		    						<option value="0">Todas celulas do distrito</option>
		    				<?php			
		    						}else
		    							if($nivelAcesso == 5){
		    								$sql_celula = "SELECT*FROM frl_celula WHERE cod_provincia = $usu_provincia";
		    				?>
		    						<option value="0">Todas celulas da provincia</option>
		    				<?php				
		    							}

		    						else{
		    				?>			
		    							<option value="0">Todas Celulas</option>
		    				<?php			
		    						}

		    				?>
							<?php 
		    					$dados_celula = mysqli_query($con, $sql_celula);
		    					while($celula = mysqli_fetch_assoc($dados_celula)){
		    						$id_celula = $celula['frl_cel_id'];
		    						$nome_celula = $celula['celula'];

		    				?>
		    						<option value="<?=$id_celula?>"><?= $nome_celula ?></option>	
		    				<?php		
		    					}
		    				?>	    			
		    		</select>
		    		</div>


		    		<div class="form-group col-md-3" >
		    		<label>País onde vai votar</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="pais_militancia">
		    				<option value="0">Todos países</option>	
							<?php 
		    					$dados_paises = mysqli_query($con, $sql_paises);
		    					while($pais = mysqli_fetch_assoc($dados_paises)){
		    						$id_pais = $pais['frl_pai_id'];
		    						$nome_pais = $pais['pais'];

		    				?>
		    						<option value="<?=$id_pais?>"><?= $nome_pais ?></option>	
		    				<?php		
		    					}
		    				?>	    			
		    		</select>
		    		</div>
		    		</fieldset>
		    		<fieldset style="border: 1px solid #ccc">
		    			<legend class="text-center h6"><small>Dados Profissionais</small></legend>


		    		<div class="form-group col-md-3" >
		    		<label>Local de trabalho</label>
		    			<input type="text" name="local_trabalho" class="form-control pesquisa_like" id="local_trabalho">
		    		</div>

		    		<div class="form-group col-md-3" >
		    		<label>Profissão</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="profissao">
		    				<option value="0">Todas profissões</option>	
							<?php 
		    					$dados_prof = mysqli_query($con, $sql_profisao);
		    					while($dados_profissao = mysqli_fetch_assoc($dados_prof)){
		    						$id_profissao = $dados_profissao['frl_cad_id'];
		    						$nome_profissao = $dados_profissao['profissao'];

		    				?>
		    						<option value="<?=$id_profissao?>"><?= $nome_profissao ?></option>	
		    				<?php		
		    					}
		    				?>	    			
		    		</select>
		    		</div>

		    		<div class="form-group col-md-3" >
		    		<label>Ocupação actual</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="ocupacao">
		    				<option value="0">Todas ocupações</option>	
							<?php 
		    					$dados_ocup = mysqli_query($con, $sql_ocupacao);
		    					while($ocupacao = mysqli_fetch_assoc($dados_ocup)){
		    						$id_ocupacao  = $ocupacao['frl_cad_id'];
		    						$nome_ocupacao  = $ocupacao['ocupacao_profissional'];

		    				?>
		    						<option value="<?=$id_ocupacao?>"><?= $nome_ocupacao  ?></option>	
		    				<?php		
		    					}
		    				?>	    			
		    		</select>
		    		</div>

		    		<div class="form-group col-md-3" >
		    		<label>Formação academica</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="pais_militancia">
		    				<option value="0">Todas formações</option>	
							<?php 
		    					$dados_paises = mysqli_query($con, $sql_paises);
		    					while($pais = mysqli_fetch_assoc($dados_paises)){
		    						$id_pais = $pais['frl_pai_id'];
		    						$nome_pais = $pais['pais'];

		    				?>
		    						<option value="<?=$id_pais?>"><?= $nome_pais ?></option>	
		    				<?php		
		    					}
		    				?>	    			
		    		</select>
		    		</div>
		    		</fieldset>
		    		<fieldset style="border: 1px solid #ccc">
		    		<legend class="text-center h6"><small>Dados Geográficos da Residência</small></legend>
		    		<div class="form-group col-md-3" >
			    		<label>Província da Residência</label>
			    			<select class="form-control select2 pesquisa" style="width: 100%;" id="nome_provincia_residencia">
			    				<option value="0">Todas Provincias</option>
			    				<?php 
			    					$dados_prov = mysqli_query($con, $sql_prov);
			    					while($provincia = mysqli_fetch_assoc($dados_prov)){
			    						$id_prov = $provincia['sms_pro_id'];
			    						$nome_prov= $provincia['provincia'];

			    				?>
			    				<option value="<?=$id_prov?>"><?= $nome_prov ?></option>	
			    				<?php		
			    					}
			    				?>
			    		</select>
		    		</div>
		    		<div class="form-group col-md-3" >
		    		<label>Distrito da Residência</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="distrito_residencia">
		    				<option value="0">Todos distritos</option>	
							<?php 
		    					$dados_distrito = mysqli_query($con, $sql_distrito);
		    					while($provincia = mysqli_fetch_assoc($dados_distrito)){
		    						$id_distrito = $provincia['sms_dis_id'];
		    						$nome_distrito= $provincia['distrito'];

		    				?>
		    						<option value="<?=$id_distrito?>"><?= $nome_distrito ?></option>	
		    				<?php		
		    					}
		    				?>	    			
		    		</select>
		    		</div>
		    		<div class="form-group col-md-3" >
		    		<label>Posto Administrativo da Residência</label>
		    		<select class="form-control select2 pesquisa" style="width: 100%;" id="posto_administrativo_residencia">
		    			<option value="0">Todos postos</option>	
							<?php 
		    					$dados_postos = mysqli_query($con, $sql_posto_administrativo);
		    					while($postos = mysqli_fetch_assoc($dados_postos)){
		    						$id_posto = $postos['sms_pos_id'];
		    						$nome_posto= $postos['posto_administrativo'];

		    				?>
		    						<option value="<?=$id_posto?>"><?= $nome_posto ?></option>	
		    				<?php		
		    					}
		    				?>
		    		</select>
		    		</div>

		    		</fieldset>
		    		<fieldset style="border: 1px solid #ccc">
		    			<legend class="text-center h6"><small>Contactos</small></legend>
		    		<div class="form-group col-md-3" >
				    		<label>Email</label>
				    		<input type="email" name="email" class="form-control pesquisa_like" id="email">
		    		</div>
		    		<div class="form-group col-md-3" >
				    		<label>Telefone Fixo</label>
				    		<input type="text" name="tell" class="form-control pesquisa_like" id="tel_fixo">  		
		    		</div>
		    		<div class="form-group col-md-3" >
				    		<label>Celular</label>
				    		<input type="text" name="cell" class="form-control pesquisa_like" id="cell">  		
		    		</div>
		    		</fieldset>
		    		<fieldset style="border: 1px solid #ccc">
		    			<legend class="text-center h6"><small>Funções e Órgãos a que pertence no Partido</small></legend>
		    			<div class="form-group col-md-3" >
		    			<label>Funções do Partido</label>
			    		<select class="form-control select2 pesquisa" style="width: 100%;" id="funcao_partido">
			    			<option value="0">Todas Funções</option>	
								<?php 
			    					$dados_funcoes = mysqli_query($con, $sql_funcoes_partido);
			    					while($funcoes = mysqli_fetch_assoc($dados_funcoes)){
			    						$id_funcoes = $funcoes['funcao_id'];
			    						$nome_funcoes= $funcoes['funcao_nome'];

			    				?>
			    						<option value="<?=$id_funcoes?>"><?= $nome_funcoes ?></option>	
			    				<?php		
			    					}
			    				?>
			    			</select>
		    			</div>
		    			<div class="form-group col-md-3" >
		    			<label>Órgãos no Partido</label>
			    		<select class="form-control select2 pesquisa" style="width: 100%;" id="orgao_partido">
			    			<option value="0">Todos Órgãos</option>	
								<?php 
			    					$dados_orgao = mysqli_query($con, $sql_orgaos_partido);
			    					while($orgao = mysqli_fetch_assoc($dados_orgao)){
			    						$id_orgao = $orgao['frl_cad_id'];
			    						$nome_orgao = $orgao['orgaos'];

			    				?>
			    						<option value="<?=$id_orgao?>"><?= $nome_orgao ?></option>	
			    				<?php		
			    					}
			    				?>
			    			</select>
		    			</div>
		    			<div class="form-group col-md-3" >
		    			<label>Membro da ACLLN</label>
			    		<select class="form-control select2 pesquisa" style="width: 100%;" id="ACLLN">
			    			<option value="2">Todos</option>	
								<option value="1">SIM</option>
								<option value="0">Não</option>
			    			</select>
		    			</div>
		    			<div class="form-group col-md-3" >
		    			<label>Membro da OMM</label>
			    		<select class="form-control select2 pesquisa" style="width: 100%;" id="OMM">
			    			<option value="2">Todos</option>	
								<option value="1">SIM</option>
								<option value="0">Não</option>
			    			</select>
		    			</div>
		    			<div class="form-group col-md-3" >
		    			<label>Membro da OJM</label>
			    		<select class="form-control select2 pesquisa" style="width: 100%;" id="OJM">
			    			<option value="2">Todos</option>	
								<option value="1">SIM</option>
								<option value="0">Não</option>
			    			</select>
		    			</div>
		    			<div class="form-group col-md-3" >
		    			<label>Inactivo</label>
			    		<select class="form-control select2 pesquisa" style="width: 100%;" id="inativo">
			    				<option value="2">Todos</option>
								<option value="0">Não</option>
								<option value="1">SIM</option>
								
			    		</select>
		    			</div>
		    		</fieldset>
                    <div class="pull-left" data-toggle="collapse" data-target="#demo" style="cursor: pointer;" data-toggle="tooltip" title="Pesquisas Avan&ccedil;adas"><i class="fa fa-minus"></i> Ocultar</div>
		    	</form>
		  </div>
		 </div> 
	</div>
</div>
<div class="box">
	<div class="box-header row">
		<div class="col-md-6">
			<h2>Listagem</h2>
			<small>Listagem de membros</small>
		</div>
	</div> 

	<div class="table-responsive">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Nr° de indentificação</th>
					<th>Sexo</th>
					<th>Email</th>
					<th>Cartão Nr°</th>
					<th>Nr° de Cartão de Eleitor</th>
					<th>Celular</th>
					<th>Ac&ccedil;&otilde;es</th>
				</tr>
			</thead>
			<tbody id="Pesquisa_tabela_corpo">
			<?php 
/*
				   
				   $dados = mysqli_query($con, $sql);
				   while($dadosMembros = mysqli_fetch_assoc($dados)){
					    $idMember = $dadosMembros['frl_cad_id'];
				   		$nome = $dadosMembros['nome'];
				   		$bi = $dadosMembros['documento_numero'];
				   		$id_sexo = $dadosMembros['id_sexo'];
				   		$email = $dadosMembros['email'];
				   		$numero_cartao = $dadosMembros['numero_cartao'];
				   		$cartao_eleitor = $dadosMembros['numero_cartao_eleitor'];
				   		$cel =  $dadosMembros['telefone'];

				   		$sql_sexo = "SELECT*FROM frl_sexo WHERE frl_id = '$id_sexo'";
				   		$query_sexo = mysqli_query($con, $sql_sexo);
				   		while($nome_s = mysqli_fetch_assoc($query_sexo)){
				   			$nome_sexo = $nome_s['nome'];
				   		}
			?>
					<tr>
						<td><?=$nome ?></td>
						<td><?=$bi ?></td>
						<td><?=$nome_sexo?></td>
						<td><?=$email ?></td>
						<td><?=$numero_cartao ?></td>
						<td><?=$cartao_eleitor?></td>
						<td><?=$cel?></td>
						<td style="width: 120px;">
						  <div class="btn-group">
						  	<a href="./functions.php?ps_DMbr&idd=<?=$idMember?>">
							<button class="btn btn-sm btn-info" data-toggle="tooltip" title="Detalhes"><i class="fa fa-search-plus"></i></button>
							</a>
							<a href="./functions.php?rg_UMbr&id=<?=$idMember?>" style="padding-left: 5px">
								<button class="btn btn-sm btn-info" data-toggle="tooltip" title="Editar"><i class="fa fa-edit"></i></button>
							</a>
						  </div>
						</td>
					</tr>
			<?php	   		

				   }
				   */
			?>
			<tr>
				<td colspan="8" align="center">Selecione o Mecanismo de Pesquisa</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>

</div>