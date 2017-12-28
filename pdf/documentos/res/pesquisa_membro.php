  <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="../../assets/styles/app.css" type="text/css" />
  <link rel="stylesheet" href="../../assets/styles/app.css" type="text/css" />
<html>
<head>
  <meta charset="utf-8" />
</head>
<body style="font-size: 10px; font-family: arial; background: white">
<div class="padding white">
 <div class="">
<?php
	$titulo = "Resultado da Pesquisa de Membros";
	include("cabecalho.php");
	echo "<br/><br/>";
	
	if(isset($_GET['id_membro']) && isset($_GET['id_provincia']) && isset($_GET['id_distrito']) && isset($_GET['id_posto']) && isset($_GET['id_tipo_doc']) && isset($_GET['nr_doc']) && isset($_GET['nr_cartao_membro']) && isset($_GET['nr_cartao_eleitor']) && isset($_GET['id_estado_civil']) && isset($_GET['id_sexo']) && isset($_GET['id_provincia_militancia']) && isset($_GET['id_distrito_militancia']) && isset($_GET['id_zona_militancia']) && isset($_GET['id_circulo_militancia']) && isset($_GET['id_celula_militancia']) && isset($_GET['id_pais_militancia']) && isset($_GET['id_profissao']) && isset($_GET['id_ocupacao']) && isset($_GET['id_nome_provincia_residencia']) && isset($_GET['id_distrito_residencia']) && isset($_GET['id_posto_administrativo_residencia']) && isset($_GET['id_funcao_partido']) && isset($_GET['id_orgao_partido']) && isset($_GET['id_ACLLN']) && isset($_GET['id_OMM']) && isset($_GET['id_OJM']) && isset($_GET['id_inativo']) && isset($_GET['email']) && isset($_GET['tel_fixo']) && isset($_GET['cell']) && isset($_GET['local_trabalho'])){
		$id_membro = $_GET['id_membro'];
		$id_provincia = $_GET['id_provincia'];
		$id_distrito = $_GET['id_distrito'];
		$id_posto = $_GET['id_posto'];
		$id_tipo_doc = $_GET['id_tipo_doc'];
		$nr_doc = $_GET['nr_doc'];
		$nr_cartao_membro = $_GET['nr_cartao_membro'];
		$nr_cartao_eleitor = $_GET['nr_cartao_eleitor'];
		$id_estado_civil = $_GET['id_estado_civil'];
		$id_sexo = $_GET['id_sexo'];
		$id_provincia_militancia = $_GET['id_provincia_militancia'];
		$id_distrito_militancia = $_GET['id_distrito_militancia'];
		$id_zona_militancia = $_GET['id_zona_militancia'];
		$id_circulo_militancia = $_GET['id_circulo_militancia'];
		$id_celula_militancia = $_GET['id_celula_militancia'];
		$id_pais_militancia = $_GET['id_pais_militancia'];
		$id_profissao = $_GET['id_profissao'];
		$id_ocupacao = $_GET['id_ocupacao'];
		$id_nome_provincia_residencia = $_GET['id_nome_provincia_residencia'];
		$id_distrito_residencia = $_GET['id_distrito_residencia'];
		$id_posto_administrativo_residencia = $_GET['id_posto_administrativo_residencia'];
		$id_funcao_partido = $_GET['id_funcao_partido'];
		$id_orgao_partido = $_GET['id_orgao_partido'];
		$id_ACLLN = $_GET['id_ACLLN'];
		$id_OMM = $_GET['id_OMM'];
		$id_OJM = $_GET['id_OJM'];
		$id_inativo = $_GET['id_inativo'];
		$email = $_GET['email'];
		$tel_fixo = $_GET['tel_fixo'];
		$cell = $_GET['cell'];
		$local_trabalho = $_GET['local_trabalho'];
		$query = "";
		if($id_membro !=0){
			$query .="AND frl_cad_id = '$id_membro'";
			
		}
		if($id_provincia !=0){
			$query .=" AND cod_provincia_nasc = '$id_provincia'";
			
		}
		if($id_distrito!=0){
			$query .=" AND cod_distrito_nasc = '$id_distrito'";
		}

		if($id_posto != 0){
			$query .=" AND cod_posto_nasc = '$id_posto'";
		}

		if($id_tipo_doc != 0){
			$query .=" AND id_tipo_doc = '$id_tipo_doc'";
		}
		
		if($nr_doc != 0){
			$query .=" AND documento_numero = '$nr_doc'";
		}
		if($nr_cartao_membro != 0){
			$query .=" AND numero_cartao = '$nr_cartao_membro '";
		}

		if($nr_cartao_eleitor  != 0){
			$query .=" AND numero_cartao_eleitor = '$nr_cartao_eleitor '";
		}

		if($id_estado_civil != 0){
			$query .=" AND id_estado_civil = '$id_estado_civil'";
		}

		if($id_sexo != 0){
			$query .=" AND id_sexo = '$id_sexo'";
		}

		if($id_provincia_militancia != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_provincia` = '$id_provincia_militancia'";
		}

		if($id_distrito_militancia != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_distrito` = '$id_distrito_militancia'";
		}

		if($id_zona_militancia != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_zona` = '$id_zona_militancia'";
		}
		if($id_circulo_militancia != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_circulo` = '$id_circulo_militancia'";
		}

		if($id_celula_militancia != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_celula` = '$id_celula_militancia'";
		}

		if($id_pais_militancia != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_pais` = '$id_pais_militancia'";
		}

		if($id_profissao != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_profissao` = '$id_profissao'";
		}

		if($id_ocupacao != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_ocupacao` = '$id_ocupacao'";
		}

		if($id_nome_provincia_residencia != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_provincia_ender` = '$id_nome_provincia_residencia'";
		}

		if($id_distrito_residencia != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_distrito_ender` = '$id_distrito_residencia'";
		
		}

		if($id_posto_administrativo_residencia != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_pa_ender` = '$id_posto_administrativo_residencia '";
		}

		if($id_funcao_partido != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_cargo` = '$id_funcao_partido'";
		}

		if($id_orgao_partido != 0){
			$query .=" AND `frl_cadastro_de_membros`.`cod_orgpartido` = '$id_orgao_partido'";
		}
		if($id_ACLLN == 0 || $id_ACLLN == 1){
			$query .=" AND `frl_cadastro_de_membros`.`aclln` = '$id_ACLLN'";
		}

		if($id_OMM == 0 || $id_OMM == 1){
			$query .=" AND `frl_cadastro_de_membros`.`omm` = '$id_OMM'";
		}

		if($id_OJM == 0 || $id_OJM == 1){
			$query .=" AND `frl_cadastro_de_membros`.`ojm` = '$id_OJM'";
		}

		if($id_inativo == 0 || $id_inativo == 1){
			$query .=" AND `frl_cadastro_de_membros`.`inactivo` = '$id_inativo'";
		}

		if($email != null){
			$query .=" AND (`frl_cadastro_de_membros`.`email` LIKE '$email%' OR `frl_cadastro_de_membros`.`email2` LIKE '$email%')";
		}
			
		if($tel_fixo != null){
			$query .=" AND `frl_cadastro_de_membros`.`telefone` LIKE '$tel_fixo%'";
		}	

		if($cell != null){
			$query .=" AND (`frl_cadastro_de_membros`.`fone1` LIKE '$cell%' OR `frl_cadastro_de_membros`.`fone2` LIKE '$cell%' OR `frl_cadastro_de_membros`.`fone3` LIKE '$cell%')";
		}	

		if($local_trabalho != null){
			$query .=" AND `frl_cadastro_de_membros`.`local_trabalho` LIKE '$local_trabalho%'";
		}

		  $sql = "SELECT*FROM frl_cadastro_de_membros, frl_celula WHERE frl_cadastro_de_membros.cod_celula LIKE frl_celula.frl_cel_id ".$query;
?>
	<div class="">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Nr° de indentificação</th>
					<th>Sexo</th>
					<th>Email</th>
					<th>Cartão Nr°</th>
					<th>Nr° de Cartão de Eleitor</th>
					<th>Celular</th>
				</tr>
			</thead>
			<tbody id="Pesquisa_tabela_corpo">
			<?php 
				   $dados = mysqli_query($con, $sql);
					 while($dadosMembros = mysqli_fetch_assoc($dados))
					 {
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
					</tr>
			<?php	   		
					}
			?>
			</tbody>
		</table>
	</div>
    <br>
<?php 
}
?>
</body>
</html>
