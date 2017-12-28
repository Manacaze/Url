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
	$titulo = "Lista dos Inquéritos Feitos";
	include("cabecalho.php");
	
if(isset($_GET['idd']))
{
	$idMembro = $_GET['idd'];
	///Provincias
	$sql = "SELECT * FROM `sms_provincias`";
	$result = mysqli_query($con, $sql);

	///Provincias Nascimento
	$sql1 = "SELECT * FROM `sms_provincias`";
	$result1 = mysqli_query($con, $sql1);

	//Provincia Residencia
	$sql6 = "SELECT * FROM `sms_provincias`";
	$result6 = mysqli_query($con, $sql6);

	//Pais que ira votar
	$sql2 = "SELECT * FROM `frl_paises`";
	$result2 = mysqli_query($con, $sql2);

	//Tipo de documento dados pessoais
	$sql3 = "SELECT * FROM `frl_tipo_de_documento_de_ident`";
	$result3 = mysqli_query($con, $sql3);

	//Profissao
	$sql4 = "SELECT * FROM `frl_cadstro_de_profissoes`";
	$result4 = mysqli_query($con, $sql4);

	//Ocupacao actual
	$sql5 = "SELECT * FROM `frl_cadastro_de_ocupacao_profi`";
	$result5 = mysqli_query($con, $sql5);

	//Orgao
	//Ocupacao actual
	$sql7 = "SELECT * FROM `frl_cadastro_de_orgaos`";
	$result7 = mysqli_query($con, $sql7);

	////Razoes do Inactivo
	$sql8 = "SELECT * FROM `frl_razoes_de_inactivo`";
	$result8 = mysqli_query($con, $sql8);

	////Sexo
	$sql9 = "SELECT * FROM `frl_sexo`";
	$result9 = mysqli_query($con, $sql9);

	////Estado Civil
	$sql10 = "SELECT * FROM `frl_estado_civil`";
	$result10 = mysqli_query($con, $sql10);

	////Funcoes do Partido
	$sql11 = "SELECT * FROM `frl_funcoes_membro`";
	$result11 = mysqli_query($con, $sql11);
	
/////Pesquisa do Membro Selecionado
	$simAclln = '';
	$naoAclln = '';
	$simOmm = '';
	$naoOmm = '';
	$simOjm = '';
	$naoOjm = '';
	$dataActual= date('Y');
	$sqlMembro = "SELECT *, YEAR(data_nascimento) as ano FROM `frl_cadastro_de_membros`
	WHERE `frl_cadastro_de_membros`.`frl_cad_id`='$idMembro'";
	$resultMembro = mysqli_query($con, $sqlMembro);
	$rowMembro = mysqli_fetch_assoc($resultMembro);
	$aclln = $rowMembro['aclln'];
	$omm = $rowMembro['omm'];
	$ojm = $rowMembro['ojm'];
	$inactivo = $rowMembro['inactivo'];
	$membroId = $rowMembro['frl_cad_id'];
	$idade = ($dataActual - $rowMembro['ano']);
	////Distrito Loxalizacao Geografica
	$sqll = "SELECT * FROM `sms_distritos` WHERE `cod_provincia`=".$rowMembro['cod_provincia']." ORDER BY sms_dis_id ASC";
	$resultt = mysqli_query($con, $sqll);
	
	
	if($inactivo == 1)
	{
		$inactivoV = 'checked';
	}
	else
	{
		$inactivoV = '';
	}
	if($aclln == 1)
	{
		$simAclln = 'checked';
	}
	else
	{
		$naoAclln = 'checked';
	}
	if($omm == 1)
	{
		$simOmm = 'checked';
	}
	else
	{
		$naoOmm = 'checked';
	}
	if($ojm == 1)
	{
		$simOjm = 'checked';
	}
	else
	{
		$naoOjm = 'checked';
	}
	
?>
    <br>
  <div style="font-size: 12px; font-family: Times New Roman">
	  <p align="center" class=""><span class="_500"><strong><u>I. Localiza&ccedil;&atilde;o Geogr&aacute;fica (Milit&acirc;ncia)</u></strong></span></p>
	  <table width="100%" align="center" class="table-sm " style="font-size: 10px; font-family: Times New Roman">
		  <tr>
			<td ><label for="provincia2">Prov&iacute;ncias</label>
				<input value="<?=getRow("sms_provincias", "provincia", "sms_pro_id", $rowMembro['cod_provincia'])?>" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px"/>
			</td>
			<td ><label for="distrito">Distrito</label>
			  	<input value="<?=getRow("sms_distritos", "distrito", "sms_dis_id", $rowMembro['cod_distrito'])?>" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px" />
			</td> 	
			<td ><label for="zona">Zona</label>
				<input value="<?=getRow("frl_zona", "zona", "frl_zon_id", $rowMembro['cod_zona'])?>" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px" />
			</td>
		</tr>
		  <tr>
			<td ><label for="circulo">C&iacute;rculo</label>
			 	<input value="<?=getRow("frl_circulo", "circulo", "frl_cir_id", $rowMembro['cod_circulo'])?>" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px" />
			</td>
			<td><label for="celula">C&eacute;lula</label>
				<input value="<?=getRow("frl_celula", "celula", "frl_cel_id", $rowMembro['cod_celula'])?>" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px" />
			</td>
			<td><label for="paisVotar">Pa&iacute;s Onde Vai Votar</label>
			 	<input value="<?=getRow("frl_paises", "pais", "frl_pai_id", $rowMembro['cod_pais'])?>" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px" />
			</td>
		  </tr>
	  </table>
	  <br/>
	  <p align="center" class=""><span class="_500"><strong><u>II. Identificacao do Membro</u></strong></span></p>
	  <div align="center">
		<table width="100%" align="center" class="table-sm table-sm " style="font-size: 10px; font-family: Times New Roman">
		  <tr>
			<td colspan="4"><label for="nomeMembro">Nome</label>
			  <input value="<?=$rowMembro['nome']?>" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width: 300px" />
			</td>
		  </tr>
		  <tr >
			<td colspan="2" style="border: solid 1px #ccc;">
			<div class="row">
				<label for="docIdentificacao" class="form-control-label col-md-8">Documento de Identifica&ccedil;&atilde;o</label>
				 	 <input  value="<?=getRow("frl_tipo_de_documento_de_ident", "tipodoc", "frl_tip_id", $rowMembro['id_tipo_doc'])?>" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width: 200px" min="0" />
			 </div>
			 </td>
			<td width="25%" style="border: solid 1px #ccc;"><label>Cart&atilde;o de Membro</label>
			  &nbsp;</td>
			<td width="24%" style="border: solid 1px #ccc;"><label>Cart&atilde;o de Eleitor</label>
			  &nbsp;</td>
			<td rowspan="4" align="center" style="border: solid 1px #ccc;">
				<a><div class="item " >
					<div class="item-bg gray-200" >
						<img style="width: 95px; height: 113px;" src="../../assets/images/uploads/<?=$rowMembro['foto']?>">
					</div>
					<div class="p-a-lg gray-200" >
					  <div class="row m-t text-left red-200" >
					  </div>
					</div>
				</div></a>
			</td>
			</tr>
		  <tr style="border: solid 1px #ccc;">
			<td width="12%"><label>N&uacute;mero</label>
			  &nbsp;</td>
			<td width="24%"><input value="<?=$rowMembro['documento_numero']?>" name="documentoNr" type="text" class="form-control" id="documentoNr" style="width:130px" /></td>
			<td>
			  <div class='input-group text'><input value="<?=$rowMembro['numero_cartao']?>" name="cartaoMembroNr" type="text" class="form-control" id="cartaoMembroNr" style="width:130px" />
			  </div>
			</td>
			<td><input value="<?=$rowMembro['numero_cartao_eleitor']?>" name="cartEleitorNr" type="text" class="form-control" id="cartEleitorNr" style="width:130px" /></td>
			</tr>
		  <tr  style="border: solid 1px #ccc;">
			<td><label>Data Emiss&atilde;o</label>
			  &nbsp;</td>
			<td>
			  <div class='input-group date'><input value="<?=convertDate($rowMembro['data_emissao_bi'])?>" name="dataEmissaoDoc" type="text" class="form-control" id="dataEmissaoDoc" style="width:130px" />
				<span class="input-group-addon">
				  <span class="fa fa-calendar"></span>
				  </span>
				</div>
			  </td>
			<td>
			  <div class='input-group date'><input value="<?=convertDate($rowMembro['data_emissao_cartao_membro'])?>" name="dataEmissaoCarEl" type="text" class="form-control" id="dataEmissaoCarEl" style="width:130px" />
				<span class="input-group-addon">
				  <span class="fa fa-calendar"></span>
				  </span>
				</div>
			  </td>
			<td ><div class='input-group date'><input value="<?=convertDate($rowMembro['data_emissao_cartao_eleitor'])?>" name="dataEmissaoCardEl" type="text" class="form-control" id="dataEmissaoCardEl" style="width:130px" />
			  <span class="input-group-addon">
				<span class="fa fa-calendar"></span>
				</span>
			  </div>
			  </td>
			</tr>
		  <tr  style="border: solid 1px #ccc;">
			<td><label>Local Emiss&atilde;o</label>
			  &nbsp;</td>
			<td><input value="<?=$rowMembro['local_emissao_bi']?>" name="localEmissaoDoc" type="text" class="form-control" id="localEmissaoDoc" style="width:130px" /></td>
			<td><input value="<?=$rowMembro['local_emissao_cartao_membro']?>" name="localEmissaoCartMem" type="text" class="form-control" id="localEmissaoCartMem" style="width:130px" /></td>
			<td><input value="<?=$rowMembro['local_emissao_cartao_eleitor']?>" name="localEmissaoCartEl" type="text" class="form-control" id="localEmissaoCartEl" style="width:130px" /></td>
			</tr>
		</table>
		<table width="100%" align="center" class="table-sm table-sm" style="font-size: 10px; font-family: Times New Roman">
		  <tr>
			<td>
			<label for="dataNascimento">Data de Nascimento</label>
			<div class='input-group date'><input value="<?=convertDate($rowMembro['data_nascimento'])?>" name="localEmissaoCartEl" type="text" class="form-control" id="localEmissaoCartEl" style="width:150px" />
			  <span class="input-group-addon">
				<span class="fa fa-calendar"></span>
				</span>
			  </div>
			</td>
			<td ><label for="idadeMembro">Idade</label>
			  <input name="idadeMembro" value="<?=$idade?>" type="text" class="form-control" id="idadeMembro" style="width:150px" /></td>
			<td width="17%"><label for="sexo">Sexo</label>
				<input type="text" value="<?=getRow("frl_sexo", "nome", "frl_id", $rowMembro['id_sexo'])?>" class="form-control" style="width:90px" > 	
			 </td>
			<td ><label for="provinciaNascimento">Prov&iacute;ncia do Nascimento</label>
			<input type="text" value="<?=getRow("sms_provincias", "provincia", "sms_pro_id", $rowMembro['cod_provincia_nasc'])?>" class="form-control" style="width:150px" > 	
			 </td>
		  </tr>
		  <tr>
			<td><label for="distritoNascimento">Distrito do Nascimento</label>
				<input type="text" value="<?=getRow("sms_distritos", "distrito", "sms_dis_id", $rowMembro['cod_distrito_nasc'])?>" class="form-control" style="width:150px"> 
			</td>
			<td colspan="2"><label for="postoAdminNascimento">Posto Administrativo do Nascimento</label>
				<input type="text" value="<?=getRow("sms_postos_administrativos", "posto_administrativo", "sms_pos_id", $rowMembro['cod_pa_nasc'])?>" class="form-control" style="width:250px" >
			 </td>
			<td><label for="estadoCivil">Estado Civil</label>
				<input type="text" value="<?=getRow("frl_estado_civil", "nome", "frl_id", $rowMembro['id_estado_civil'])?>" class="form-control" style="width:150px" >
			</td>
			</tr>
		</table>
	  </div>
	  <br/>
	  <p align="center" class=""><span class="_500"><strong><u>III. Dados Profissionais</u></strong></span></p>
	  <div align="center">
		<table  width="100%" align="center" class="table-sm table-sm" style="font-size: 10px; font-family: Times New Roman">
		  <tr>
			<td width="26%"><label for="localTrabalho">Local de Trabalho</label>
			  <input value="<?=$rowMembro['local_trabalho']?>" name="localTrabalho" type="text" class="form-control" id="localTrabalho" style="width:150px"/></td>
			<td width="24%"><label for="profissao">Profiss&atilde;o</label>
				<input type="text" value="<?=getRow("frl_cadstro_de_profissoes", "profissao", "frl_cad_id", $rowMembro['cod_profissao'])?>" class="form-control" style="width:130px">	
			 </td>
			<td width="24%"><label for="ocupacaoActual">Ocupa&ccedil;&atilde;o Actual</label>
				<input type="text" value="<?=getRow("frl_cadastro_de_ocupacao_profi", "ocupacao_profissional", "frl_cad_id", $rowMembro['cod_ocupacao'])?>" class="form-control" style="width:130px">	
			 </td>
			<td width="26%"><label for="formacaoAcademica">Forma&ccedil;&atilde;o Acad&ecirc;mica</label>
				<input  type="text" class="form-control" value="<?=getRow("frl_formacaoacademica", "formacao_nome", "formacao_id", $rowMembro['cod_escolaridade'])?>" style="width:130px"/>
			  </td>
			</tr>
		</table>
	  </div>
	  <br/>
	  <p align="center" class=""><span class="_500"><strong><u>IV. Dados Geogr&aacute;ficos da Resid&ecirc;ncia</u></strong></span></p>
	  <div align="center">
		<table width="100%" class="table-sm" style="font-size: 10px; font-family: Times New Roman">
		  <tr>
			<td width="33%"><label >Prov&iacute;ncia da Resid&ecirc;ncia</label>
				<input type="text" value="<?=getRow("sms_provincias", "provincia", "sms_pro_id", $rowMembro['cod_provincia_ender'])?>" class="form-control " style="width:160px"/>
			</td>
			<td width="34%"><label >Distrito da Resid&ecirc;ncia</label>
				<input type="text" value="<?=getRow("sms_distritos", "distrito", "sms_dis_id", $rowMembro['cod_distrito_ender'])?>" class="form-control" style="width:160px"/>
			 </td>
			<td width="33%"><label >Posto Administrativo da Resid&ecirc;ncia</label>
				<input type="text" value="<?=getRow("sms_postos_administrativos", "posto_administrativo", "sms_pos_id", $rowMembro['cod_pa_ender'])?>" class="form-control" style="width:160px"/>
			 </td>
		  </tr>
		</table>
	  </div>
	  <br/>
	  <p align="center" class=""><span class="_500"><strong><u>V. Contactos</u></strong></span></p>
	  <div align="center">
		<table width="100%" class="table-sm table-sm" style="font-size: 10px; font-family: Times New Roman">    
			<tr>
			  <td colspan="2" ><label for="email1">Email Prim&aacute;rio</label>
				<input  value="<?=$rowMembro['email']?>" name="email1" type="text" class="form-control" id="email1" style="width:270px"/></td>
			  <td colspan="2" ><label for="email2">Email Secund&aacute;rio </label>
				<input value="<?=$rowMembro['email2']?>" name="email2" type="text" class="form-control" id="email2" style="width:270px"/></td>
			</tr>
			<tr>
			  <td width="25%"><label for="telefoneFixo">Telefone Fixo</label>
				<input value="<?=$rowMembro['telefone']?>" name="telefoneFixo" type="text" class="form-control" id="telefoneFixo" style="width:130px"/></td>
			  <td width="25%"><label for="cel1">Celular 1</label>
				<input  value="<?=$rowMembro['fone1']?>" name="cel1" type="text" class="form-control" id="cel1" style="width:130px"/></td>
			  <td width="25%"><label for="cel2">Celular 2</label>
				<input value="<?=$rowMembro['fone2']?>" name="cel2" type="text" class="form-control" id="cel2" style="width:130px"/></td>
			  <td width="25%"><label for="cel3">Celular 3</label>
				<input value="<?=$rowMembro['fone3']?>" name="cel3" type="text" class="form-control" id="cel3" style="width:130px"/></td>
			</tr>
		</table>
	  </div>
	  <br/>
	  <p align="center" class=""><span class="_500"><strong><u>VI. Fun&ccedil;&otilde;es e &Oacute;rg&atilde;os a que pertence no Partido</u></strong></span></p>
	  <div align="center">
		<table width="100%" class="table-sm table-sm" style="font-size: 10px; font-family: Times New Roman">    
			<tr>
			  <td width="27%"><label for="funcoesPartido">Fun&ccedil;&otilde;es do Partido</label>
			  	<input type="text" value="<?=getRow("frl_funcoes_membro", "funcao_nome", "funcao_id", $rowMembro['cod_cargo'])?>" class="form-control" style="width:130px">
			 </td>
			  <td width="25%"><label for="orgaoPartido">&Oacute;rg&atilde;os no Partido</label>
			  	<input type="text" value="<?=getRow("frl_cadastro_de_orgaos", "orgaos", "frl_cad_id", $rowMembro['cod_orgpartido'])?>" class="form-control" style="width:130px">
			 </td>
			  <td width="19%">
				<label >Membro da ACLLN</label>
				 <div class="" style="width:100px">
 <?php if($simAclln != ''){?>
				  <label>
					<b>Sim</b></label>
<?php }
	else if($naoAclln != ''){
?>
				  <label>
					<b>N&atilde;o</b></label>
<?php }
?>
				 </div></td>
			  <td width="15%"> 
				<label >Membro da OMM</label>
				 <div class="" style="width:100px">
 <?php if($simOmm != ''){?>
				  <label>
					<b>Sim</b></label>
<?php }
	else if($naoOmm != ''){
?>
				  <label>
					<b>N&atilde;o</b></label>
<?php }
?>
				</div>
			  </td>
			  <td width="14%">
				<label >Membro da OJM</label>
				 <div class="" style="width:100px">
 <?php if($simOjm != ''){?>
				  <label style="background: black">
					<b>Sim</b></label>
<?php }
else if($naoOjm != ''){
?>
				  <label>
					<b>N&atilde;o</b></label>
<?php }
?>
				</div>
			  </td>
			</tr>
			<tr>
			  <td>
				<label for="valorQuota">Valor da Quota</label>
				<i class="fa fa-save"></i>
				<input style="text-align: right;" value="<?=number_format($rowMembro['valor'],2,",", ".")?>" type="text" name="valorQuota" id="valorQuota" class="form-control" style="width:130px"/>
			  </td>
 <?php if($inactivoV != ''){?>
			  <td align="right"><p>
				<label style="width: 100%">&nbsp;</label>
				<label class="pull-right">
				  Inactivo</label>
			  </p></td>
			  <td colspan="3"><label for="razoesInactivo">Raz&otilde;oes do Inactivo</label>
			  	<input type="text" value="<?=getRow("frl_razoes_de_inactivo", "motivo", "frl_raz_id", $rowMembro['id_raz_inactivo'])?>" class="form-control" style="width:250px">
			</td>
<?php }
?>
			</tr>
		</table>
	  </div>
  </div>
</body>
</html>
<?php 
}
?>