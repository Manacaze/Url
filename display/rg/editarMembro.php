<?php
include_once 'display/rg/updateIntoMembro.php';
if(isset($_GET['id']))
{
	$idMembro = $_GET['id'];
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
	
	////Formacao Academica
	$sql12 = "SELECT * FROM `frl_formacaoacademica`";
	$result12 = mysqli_query($con, $sql12);
	
/////Pesquisa do Membro Selecionado
	$simAclln = '';
	$naoAclln = '';
	$simOmm = '';
	$naoOmm = '';
	$simOjm = '';
	$naoOjm = '';
	$sqlMembro = "SELECT * FROM `frl_cadastro_de_membros`
	WHERE `frl_cadastro_de_membros`.`frl_cad_id`='$idMembro'";
	$resultMembro = mysqli_query($con, $sqlMembro);
	$rowMembro = mysqli_fetch_assoc($resultMembro);
	$aclln = $rowMembro['aclln'];
	$omm = $rowMembro['omm'];
	$ojm = $rowMembro['ojm'];
	$inactivo = $rowMembro['inactivo'];
	
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
	<div class="padding">
	  <div class="box">
		<div class="box-header row">
			<div class="col-md-6">
			  <h2 >Cadastro</h2>
			  <small>Cadastro do Membro</small>
			</div>
		  <button style="width: 40px;" class="md-btn md-raised m-b-sm white col-md-6 pull-right" onClick="imprimir_bancos()" data-toggle="tooltip" title="Imprimir"><i class="fa fa-print"></i></button>
		</div>
		<div class="form-group table-responsive">
	<form action="<?=principal?>editarMembro" method="post" enctype="multipart/form-data" name="rgMembro" id="rgMembro">
	  <input type="hidden" name="idMembro" value="<?=$rowMembro['frl_cad_id']?>">
	  <p align="center" class="midnight-blue"><span class="_500"><strong>I.Localiza&ccedil;&atilde;o Geogr&aacute;fica (Milit&acirc;ncia)</strong></span></p>
	  <table width="90%" height="148" align="center" class="table-sm table-striped table-hover white">
		  <tr>
			<td width="217" height="68" nowrap="nowrap"><label for="provincia2">Prov&iacute;ncias</label>
			  <select required  name="provincia2" class="form-control" id="provincia2">
				<option value="<?=$rowMembro['cod_provincia']?>"><?=getRow("sms_provincias", "provincia", "sms_pro_id", $rowMembro['cod_provincia'])?></option>
				<?php while($linhaP = mysqli_fetch_array($result)){
					if($linhaP['sms_pro_id'] !=  $rowMembro['cod_provincia'])
					{
				?>
					<option value="<?=$linhaP['sms_pro_id']?>"><?=$linhaP['provincia']?></option>
				<?php
					}
				}?>
			  </select></td>
			<td width="255"><label for="distrito">Distrito</label>
			  <select required  name="distrito" class="form-control" id="distrito">
				<option value="<?=$rowMembro['cod_distrito']?>"><?=getRow("sms_distritos", "distrito", "sms_dis_id", $rowMembro['cod_distrito'])?></option>
			  </select></td>
			<td width="243"><label for="zona">Zona</label>
			  <select required  name="zona" class="form-control" id="zona">
				<option value="<?=$rowMembro['cod_zona']?>"><?=getRow("frl_zona", "zona", "frl_zon_id", $rowMembro['cod_zona'])?></option>
			  </select></td>
		</tr>
		  <tr>
			<td height="35"><label for="circulo">C&iacute;rculo</label>
			  <select required  name="circulo" class="form-control" id="circulo">
				<option value="<?=$rowMembro['cod_circulo']?>"><?=getRow("frl_circulo", "circulo", "frl_cir_id", $rowMembro['cod_circulo'])?></option>
			  </select></td>
			<td><label for="celula">C&eacute;lula</label>
			  <select required  name="celula" class="form-control" id="celula">
				<option value="<?=$rowMembro['cod_celula']?>"><?=getRow("frl_celula", "celula", "frl_cel_id", $rowMembro['cod_celula'])?></option>
			  </select></td>
			<td><label for="paisVotar">Pa&iacute;s Onde Vai Votar</label>
			  <select required  name="paisVotar" class="form-control" id="paisVotar">
				<option value="<?=$rowMembro['cod_pais']?>"><?=getRow("frl_paises", "pais", "frl_pai_id", $rowMembro['cod_pais'])?></option>
				<?php while($linhaP2 = mysqli_fetch_array($result2)){
					if($linhaP2['frl_pai_id'] != $rowMembro['cod_pais'])
					{
				?>
					<option value="<?=$linhaP2['frl_pai_id']?>"><?=$linhaP2['pais']?></option>
				<?php
					}
				}?>
			  </select></td>
		  </tr>
		  <tr>
			<td height="35">&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		  </tr>
	  </table>
	  <p align="center" class="midnight-blue"><span class="_500"><strong>II.Identificacao do Membro</strong></span></p>
	  <div align="center">
		<table width="90%" align="center" class="table-sm table-sm table-striped table-hover white" style="border: solid 1px #ccc">
		  <tr>
			<td colspan="4"><label for="nomeMembro">Nome</label>
			  <input required  value="<?=$rowMembro['nome']?>" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width: 400px" min="0"/>
			</td>
			<!--<td width="15%" > <label for="inMembro">Id</label>
			  <input name="inMembro" type="text" class="form-control" id="inMembro"  style="width: 100px"/></td>-->
		  </tr>
		  <tr >
			<td colspan="2" style="border-right: solid 1px #ccc">
			<div class="row">
				<label for="docIdentificacao" class="form-control-label col-md-8">Documento de Identifica&ccedil;&atilde;o</label>
				  <select required  name="docIdentificacao" class="form-control col-md-4" id="docIdentificacao" style="width:100px">
					<option value="<?=$rowMembro['id_tipo_doc']?>"><?=getRow("frl_tipo_de_documento_de_ident", "tipodoc", "frl_tip_id", $rowMembro['id_tipo_doc'])?></option>
					<?php while($linhaP3 = mysqli_fetch_array($result3)){
						if($rowMembro['id_tipo_doc'] != $linhaP3['frl_tip_id'])
						{
					?>
						<option value="<?=$linhaP3['frl_tip_id']?>"><?=$linhaP3['tipodoc']?></option>
					<?php
						}
					}?>
				  </select>
			  </div></td>
			<td width="25%" style="border-right: solid 1px #ccc"><label>Cart&atilde;o de Membro</label>
			  &nbsp;</td>
			<td width="24%" style="border-right: solid 1px #ccc"><label>Cart&atilde;o de Eleitor</label>
			  &nbsp;</td>
			<td rowspan="4">
				<a><div class="item">
				<div class="item-bg">
				  <img id="dvPreview" src="../assets/images/uploads/<?=$rowMembro['foto']?>">
				</div>
				<div class="p-a-lg">
				  <div class="row m-t text-left">
					  <div class="text-left">
						<span class="avatar w-96" >
							<div class="form-file text-left">
							  <input type="file" name="fotoMembro" value="" id="fileupload" style="height: 25px; width: 25px; cursor: pointer;">
							  <button class="btn btn-sm info text-white " style="height: 30px; width: 30px; cursor: pointer;"><i class="fa fa-file-photo-o"></i></button>
							</div>
						</span>
					  </div>
				  </div>
				</div>
			</div></a>
			</td>
			</tr>
		  <tr style="border: solid 1px #ccc;">
			<td width="12%"><label>N&uacute;mero</label>
			  &nbsp;</td>
			<td width="24%" style="border-right: solid 1px #ccc"><input required value="<?=$rowMembro['documento_numero']?>" name="documentoNr" type="text" class="form-control" id="documentoNr" style="width:210px"/></td>
			<td style="border-right: solid 1px #ccc">
			  <div class='input-group text'><input required readonly value="<?=$rowMembro['numero_cartao']?>" name="cartaoMembroNr" type="text" class="form-control" id="cartaoMembroNr" style="width:100px"/>
				<button type="button" class="btn btn-defaut grey-500" disabled >
				  <span>Gerar N&ordm;</span>
				  </button>
				</div>
			  </td>
			<td style="border-right: solid 1px #ccc"><input required value="<?=$rowMembro['numero_cartao_eleitor']?>" name="cartEleitorNr" type="text" class="form-control" id="cartEleitorNr" style="width:210px"/></td>
			</tr>
		  <tr style="border: solid 1px #ccc;">
			<td><label>Data Emiss&atilde;o</label>
			  &nbsp;</td>
			<td style="border-right: solid 1px #ccc">
			  <div class='input-group date' ui-jp="datetimepicker" ui-options="{
						format: 'DD/MM/YYYY',
						viewMode: 'months',
						icons: {
						  time: 'fa fa-clock-o',
						  date: 'fa fa-calendar',
						  up: 'fa fa-chevron-up',
						  down: 'fa fa-chevron-down',
						  previous: 'fa fa-chevron-left',
						  next: 'fa fa-chevron-right',
						  today: 'fa fa-screenshot',
						  clear: 'fa fa-trash',
						  close: 'fa fa-remove'
						}
					  }"><input required value="<?=convertDate($rowMembro['data_emissao_bi'])?>" name="dataEmissaoDoc" type="text" class="form-control" id="dataEmissaoDoc" style="width:160px" />
				<span class="input-group-addon">
				  <span class="fa fa-calendar"></span>
				  </span>
				</div>
			  </td>
			<td style="border-right: solid 1px #ccc">
			  <div class='input-group date' ui-jp="datetimepicker" ui-options="{
						format: 'DD/MM/YYYY',
						viewMode: 'months',
						icons: {
						  time: 'fa fa-clock-o',
						  date: 'fa fa-calendar',
						  up: 'fa fa-chevron-up',
						  down: 'fa fa-chevron-down',
						  previous: 'fa fa-chevron-left',
						  next: 'fa fa-chevron-right',
						  today: 'fa fa-screenshot',
						  clear: 'fa fa-trash',
						  close: 'fa fa-remove'
						}
					  }"><input required value="<?=convertDate($rowMembro['data_emissao_cartao_membro'])?>" name="dataEmissaoCarEl" type="text" class="form-control" id="dataEmissaoCarEl" style="width:160px"/>
				<span class="input-group-addon">
				  <span class="fa fa-calendar"></span>
				  </span>
				</div>
			  </td>
			<td style="border-right: solid 1px #ccc"><div class='input-group date' ui-jp="datetimepicker" ui-options="{
						format: 'DD/MM/YYYY',
						viewMode: 'months',
						icons: {
						  time: 'fa fa-clock-o',
						  date: 'fa fa-calendar',
						  up: 'fa fa-chevron-up',
						  down: 'fa fa-chevron-down',
						  previous: 'fa fa-chevron-left',
						  next: 'fa fa-chevron-right',
						  today: 'fa fa-screenshot',
						  clear: 'fa fa-trash',
						  close: 'fa fa-remove'
						}
					  }"><input required value="<?=convertDate($rowMembro['data_emissao_cartao_eleitor'])?>" name="dataEmissaoCardEl" type="text" class="form-control" id="dataEmissaoCardEl" style="width:160px"/>
			  <span class="input-group-addon">
				<span class="fa fa-calendar"></span>
				</span>
			  </div>
			  </td>
			</tr>
		  <tr style="border: solid 1px #ccc;">
			<td><label>Local Emiss&atilde;o</label>
			  &nbsp;</td>
			<td style="border-right: solid 1px #ccc"><input required value="<?=$rowMembro['local_emissao_bi']?>" name="localEmissaoDoc" type="text" class="form-control" id="localEmissaoDoc" style="width:210px"/></td>
			<td style="border-right: solid 1px #ccc"><input required value="<?=$rowMembro['local_emissao_cartao_membro']?>" name="localEmissaoCartMem" type="text" class="form-control" id="localEmissaoCartMem" style="width:210px"/></td>
			<td style="border-right: solid 1px #ccc"><input required value="<?=$rowMembro['local_emissao_cartao_eleitor']?>" name="localEmissaoCartEl" type="text" class="form-control" id="localEmissaoCartEl" style="width:210px"/></td>
			</tr>
		</table>
		<table width="90%" align="center" class="table-sm table-sm table-hover white">
		  <tr>
			<td width="26%">
			<label for="dataNascimento">Data de Nascimento</label>
			<div class='input-group date' ui-jp="datetimepicker" ui-options="{
				format: 'DD/MM/YYYY',
				viewMode: 'months',
				icons: {
				  time: 'fa fa-clock-o',
				  date: 'fa fa-calendar',
				  up: 'fa fa-chevron-up',
				  down: 'fa fa-chevron-down',
				  previous: 'fa fa-chevron-left',
				  next: 'fa fa-chevron-right',
				  today: 'fa fa-screenshot',
				  clear: 'fa fa-trash',
				  close: 'fa fa-remove'
				}
			  }"><input required value="<?=convertDate($rowMembro['data_nascimento'])?>" name="dataNascimento" type="text" class="form-control" id="dataNascimento" />
			  <span class="input-group-addon">
				<span class="fa fa-calendar"></span>
				</span>
			  </div>
			  </td>
			<td width="19%"><label for="idadeMembro">Idade</label>
			  <input name="idadeMembro" type="text" class="form-control" id="idadeMembro" readonly="readonly" /></td>
			<td width="17%"><label for="sexo">Sexo</label>
			  <select required  name="sexo" class="form-control" id="sexo">
				<option value="<?=$rowMembro['id_sexo']?>"><?=getRow("frl_sexo", "nome", "frl_id", $rowMembro['id_sexo'])?></option>
				<?php while($linhaP9 = mysqli_fetch_array($result9)){
					if($linhaP9['frl_id'] != $rowMembro['id_sexo'])
					{
				?>
					<option value="<?=$linhaP9['frl_id']?>"><?=$linhaP9['nome']?></option>
				<?php
					}
				}?>
			  </select></td>
			<td width="38%"><label for="provinciaNascimento">Prov&iacute;ncia do Nascimento</label>
			  <select required  name="provinciaNascimento" class="form-control" id="provinciaNascimento">
				<option value="<?=$rowMembro['cod_provincia_nasc']?>"><?=getRow("sms_provincias", "provincia", "sms_pro_id", $rowMembro['cod_provincia_nasc'])?></option>
				<?php while($linhaP1 = mysqli_fetch_array($result1)){
					if($linhaP1['sms_pro_id'] != $rowMembro['cod_provincia_nasc'])
					{
				?>
					<option value="<?=$linhaP1['sms_pro_id']?>"><?=$linhaP1['provincia']?></option>
				<?php
					}
				}?>
			  </select></td>
			</tr>
		  <tr>
			<td><label for="distritoNascimento">Distrito do Nascimento</label>
			  <select required  name="distritoNascimento" class="form-control" id="distritoNascimento">
				<option value="<?=$rowMembro['cod_distrito_nasc']?>"><?=getRow("sms_distritos", "distrito", "sms_dis_id", $rowMembro['cod_distrito_nasc'])?></option>
			  </select></td>
			<td colspan="2"><label for="postoAdminNascimento">Posto Administrativo do Nascimento</label>
			  <select required  name="postoAdminNascimento" class="form-control" id="postoAdminNascimento">
				<option value="<?=$rowMembro['cod_pa_nasc']?>"><?=getRow("sms_postos_administrativos", "posto_administrativo", "sms_pos_id", $rowMembro['cod_pa_nasc'])?></option>
			  </select></td>
			<td><label for="estadoCivil">Estado Civil</label>
			  <select required  name="estadoCivil" class="form-control" id="estadoCivil" style="width:200px;">
				<option value="<?=$rowMembro['id_estado_civil']?>"><?=getRow("frl_estado_civil", "nome", "frl_id", $rowMembro['id_estado_civil'])?></option>
				<?php while($linhaP10 = mysqli_fetch_array($result10)){
					if($rowMembro['id_estado_civil'] != $linhaP10['frl_id'])
					{
				?>
					<option value="<?=$linhaP10['frl_id']?>"><?=$linhaP10['nome']?></option>
				<?php
					}
				}?>
			  </select></td>
			</tr>
		</table>
		<p>&nbsp;</p>
	  </div>
	  <p align="center" class="midnight-blue"><span class="_500"><strong>III.Dados Profissionais</strong></span></p>
	  <div align="center">
		<table  width="90%" align="center" class="table-sm table-sm table-striped table-hover white">
		  <tr>
			<td width="26%"><label for="localTrabalho">Local de Trabalho</label>
			  <input required value="<?=$rowMembro['local_trabalho']?>" name="localTrabalho" type="text" class="form-control" id="localTrabalho" /></td>
			<td width="24%"><label for="profissao">Profiss&atilde;o</label>
			  <select required  name="profissao" class="form-control" id="profissao">
				<option value="<?=$rowMembro['cod_profissao']?>"><?=getRow("frl_cadstro_de_profissoes", "profissao", "frl_cad_id", $rowMembro['cod_profissao'])?></option>
				<?php while($linhaP4 = mysqli_fetch_array($result4)){
					if($rowMembro['cod_profissao'] != $linhaP4['frl_cad_id'])
					{
				?>
					<option value="<?=$linhaP4['frl_cad_id']?>"><?=$linhaP4['profissao']?></option>
				<?php
					}
				}?>
			  </select></td>
			<td width="24%"><label for="ocupacaoActual">Ocupa&ccedil;&atilde;o Actual</label>
			  <select required  name="ocupacaoActual" class="form-control" id="ocupacaoActual">
				<option value="<?=$rowMembro['cod_ocupacao']?>"><?=getRow("frl_cadastro_de_ocupacao_profi", "ocupacao_profissional", "frl_cad_id", $rowMembro['cod_ocupacao'])?></option>
				<?php while($linhaP5 = mysqli_fetch_array($result5)){
					if($rowMembro['cod_ocupacao'] != $linhaP5['frl_cad_id'])
					{
				?>
					<option value="<?=$linhaP5['frl_cad_id']?>"><?=$linhaP5['ocupacao_profissional']?></option>
				<?php
					}
				}?>
			  </select></td>
			<td width="26%"><label for="formacaoAcademica">Forma&ccedil;&atilde;o Acad&ecirc;mica</label>
			  <select required  name="formacaoAcademica" class="form-control" id="formacaoAcademica">
				<option value="<?=$rowMembro['cod_escolaridade']?>"><?=getRow("frl_formacaoacademica", "formacao_nome", "formacao_id", $rowMembro['cod_escolaridade'])?></option>
					<?php while($linhaP12 = mysqli_fetch_array($result12)){
					?>
						<option value="<?=$linhaP12['formacao_id']?>"><?=$linhaP12['formacao_nome']?></option>
					<?php
					}?>
			  </select></td>
			</tr>
		</table>
	  </div>
	  <p align="center" class="midnight-blue"><span class="_500"><strong>IV.Dados Geogr&aacute;ficos da Resid&ecirc;ncia</strong></span></p>
	  <div align="center">
		<table width="90%" class="table-sm table-sm table-striped table-hover white">
		  <tr>
			<td width="33%"><label for="provinciaResidencia">Prov&iacute;ncia da Resid&ecirc;ncia</label>
			  <select required  name="provinciaResidencia" class="form-control" id="provinciaResidencia">
				<option value="<?=$rowMembro['cod_provincia_ender']?>"><?=getRow("sms_provincias", "provincia", "sms_pro_id", $rowMembro['cod_provincia_ender'])?></option>
				<?php while($linhaP6 = mysqli_fetch_array($result6)){
					if($rowMembro['cod_provincia_ender'] != $linhaP5['sms_pro_id'])
					{
				?>
					<option value="<?=$linhaP6['sms_pro_id']?>"><?=$linhaP6['provincia']?></option>
				<?php
					}
				}?>
			  </select></td>
			<td width="34%"><label for="distritoResidencia">Distrito da Resid&ecirc;ncia</label>
			  <select required  name="distritoResidencia" class="form-control" id="distritoResidencia">
				<option value="<?=$rowMembro['cod_distrito_ender']?>"><?=getRow("sms_distritos", "distrito", "sms_dis_id", $rowMembro['cod_distrito_ender'])?></option>
			  </select></td>
			<td width="33%"><label for="postoAdminResidencia">Posto Administrativo da Resid&ecirc;ncia</label>
			  <select required  name="postoAdminResidencia" class="form-control" id="postoAdminResidencia">
				<option value="<?=$rowMembro['cod_pa_ender']?>"><?=getRow("sms_postos_administrativos", "posto_administrativo", "sms_pos_id", $rowMembro['cod_pa_ender'])?></option>
			  </select></td>
			</tr>
		</table>
	  </div>
	  <p align="center" class="midnight-blue"><span class="_500"><strong>V.Contactos</strong></span></p>
	  <div align="center">
		<table width="90%" class="table-sm table-sm table-striped table-hover white">    
			<tr>
			  <td colspan="2" ><label for="email1">Email Prim&aacute;rio</label>
				<input required value="<?=$rowMembro['email']?>" name="email1" type="text" class="form-control" id="email1" /></td>
			  <td colspan="2" ><label for="email2">Email Secund&aacute;rio </label>
				<input value="<?=$rowMembro['email2']?>" name="email2" type="text" class="form-control" id="email2" /></td>
			</tr>
			<tr>
			  <td width="25%"><label for="telefoneFixo">Telefone Fixo</label>
				<input value="<?=$rowMembro['telefone']?>" name="telefoneFixo" type="text" class="form-control" id="telefoneFixo" /></td>
			  <td width="25%"><label for="cel1">Celular 1</label>
				<input required value="<?=$rowMembro['fone1']?>" name="cel1" type="text" class="form-control" id="cel1" /></td>
			  <td width="25%"><label for="cel2">Celular 2</label>
				<input value="<?=$rowMembro['fone2']?>" name="cel2" type="text" class="form-control" id="cel2" /></td>
			  <td width="25%"><label for="cel3">Celular 3</label>
				<input value="<?=$rowMembro['fone3']?>" name="cel3" type="text" class="form-control" id="cel3" /></td>
			</tr>
		</table>
	  </div>
	  <p align="center" class="midnight-blue"><span class="_500"><strong>VI.Fun&ccedil;&otilde;es e &Oacute;rg&atilde;os a que pertence no Partido</strong></span></p>
	  <div align="center">
		<table width="90%" class="table-sm table-sm table-striped table-hover white">    
			<tr>
			  <td width="27%"><label for="funcoesPartido">Fun&ccedil;&otilde;es do Partido</label>
				<select required  name="funcoesPartido" class="form-control" id="funcoesPartido">
				  <option value="<?=$rowMembro['cod_cargo']?>"><?=getRow("frl_funcoes_membro", "funcao_nome", "funcao_id", $rowMembro['cod_cargo'])?></option>
					<?php while($linhaP11 = mysqli_fetch_array($result11)){
						if($rowMembro['cod_cargo'] != $linhaP11['funcao_id'])
						{
					?>
						<option value="<?=$linhaP11['funcao_id']?>"><?=$linhaP11['funcao_nome']?></option>
					<?php
						}
					}?>
				</select> </td>
			  <td width="25%"><label for="orgaoPartido">&Oacute;rg&atilde;os no Partido</label>
				<select required  name="orgaoPartido" class="form-control" id="orgaoPartido">
				   <option value="<?=$rowMembro['cod_orgpartido']?>"><?=getRow("frl_cadastro_de_orgaos", "orgaos", "frl_cad_id", $rowMembro['cod_orgpartido'])?></option>
					<?php while($linhaP7 = mysqli_fetch_array($result7)){
						if($rowMembro['cod_orgpartido'] != $linhaP11['frl_cad_id'])
						{
					?>
						<option value="<?=$linhaP7['frl_cad_id']?>"><?=$linhaP7['orgaos']?></option>
					<?php
						}
					}?>
				</select> </td>
			  <td width="19%">
				<label >Membro da ACLLN</label>
				 <div class="form-control">
				  <label>
					<input required  type="radio" name="membroAclln" value="1" id="membroAclln_0" <?=$simAclln?> />
					Sim</label>
				  <label>
					<input required  type="radio" name="membroAclln" value="0" id="membroAclln_1" <?=$naoAclln?> />
					N&atilde;o</label>
				 </div></td>
			  <td width="15%"> 
				<label >Membro da OMM</label>
				 <div class="form-control">
				  <label>
					<input required  type="radio" name="membroOmm" value="1" id="membroOmm_0" <?=$simOmm?> />
					Sim</label>
				  <label>
					<input required  type="radio" name="membroOmm" value="0" id="membroOmm_1" <?=$naoOmm?> />
					N&atilde;o</label>
				</div>
			  </td>
			  <td width="14%">
				<label >Membro da OJM</label>
				 <div class="form-control">
				  <label>
					<input required  type="radio" name="membroOjm" value="1" id="membroOjm_0" <?=$simOjm?> />
					Sim</label>
				  <label>
					<input required  type="radio" name="membroOjm" value="0" id="membroOjm_1" <?=$naoOjm?> />
					N&atilde;o</label>
				</div>
			  </td>
			</tr>
			<tr>
			  <td>
				<label for="valorQuota">Valor da Quota</label>
				<input style="text-align: right;" value="<?=number_format($rowMembro['valor_quota'],2,",", ".")?>" type="text" name="valorQuota" id="valorQuota" class="form-control" />
			  </td>
			  <td>&nbsp;</td>
			  <td><p>
				<label style="width: 100%">&nbsp;</label>
				<label class="pull-right">
				  <input type="checkbox" name="inactivo" value="1" id="inactivo" <?=$inactivoV?>/>
				  Inactivo</label>
			  </p></td>
			  <td colspan="2"><label for="razoesInactivo">Raz&otilde;oes do Inactivo</label>
				<select required  name="razoesInactivo" class="form-control" id="razoesInactivo">
					<option value="<?=$rowMembro['id_raz_inactivo']?>"><?=getRow("frl_razoes_de_inactivo", "motivo", "frl_raz_id", $rowMembro['id_raz_inactivo'])?></option>
					<?php while($linhaP8 = mysqli_fetch_array($result8)){
						if($rowMembro['id_raz_inactivo'] != $linhaP8['frl_raz_id'])
						{
					?>
						<option value="<?=$linhaP8['frl_raz_id']?>"><?=$linhaP8['motivo']?></option>
					<?php
						}
					}?>
				</select></td>
			</tr>
		</table>
		<p>&nbsp;</p>
		<div class="btn-group pull-left">
			<button name="submit" type="submit" class="btn btn-info" style="margin: 0 4px 0 15px">Actualizar</button>
			<a name="cancel" type="reset" class="btn btn-danger " style="margin: 0 0 0 4px" href="<?=principal?>membros">Cancelar</a>
		</div>
		<br/>
		<br/>
		<br/>
	  </div>
	</form>
   </div>
  </div>
 </div>
<?php 
}
?>