  <link rel="stylesheet" href="../../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="../../assets/styles/app.css" type="text/css" />

<body style="font-size: 12pt; font-family: arial; background: white">
<div class="padding white">
 <div class="">
<?php
	$titulo = "Lista dos Inquéritos Feitos";
	include("cabecalho.php");
?>
    <br>
  <div style="font-size: 12px; font-family: Times New Roman">
	  <p align="center" class=""><span class="_500"><strong><u>I. Localiza&ccedil;&atilde;o Geogr&aacute;fica (Milit&acirc;ncia)</u></strong></span></p>
	  <table width="100%" align="center" class="table-sm " style="font-size: 10px; font-family: Times New Roman">
		  <tr>
			<td ><label for="provincia2">Prov&iacute;ncias</label>
				<input value="" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px"/>
			</td>
			<td ><label for="distrito">Distrito</label>
			  	<input value="" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px" />
			</td> 	
			<td ><label for="zona">Zona</label>
				<input value="" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px" />
			</td>
		</tr>
		  <tr>
			<td ><label for="circulo">C&iacute;rculo</label>
			 	<input value="" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px" />
			</td>
			<td><label for="celula">C&eacute;lula</label>
				<input value="" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px" />
			</td>
			<td><label for="paisVotar">Pa&iacute;s Onde Vai Votar</label>
			 	<input value="" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width:200px" />
			</td>
		  </tr>
	  </table>
	  <br/>
	  <p align="center" class=""><span class="_500"><strong><u>II. Identificacao do Membro</u></strong></span></p>
	  <div align="center">
		<table width="100%" align="center" class="table-sm table-sm " style="font-size: 10px; font-family: Times New Roman">
		  <tr>
			<td colspan="4"><label for="nomeMembro">Nome</label>
			  <input value="" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width: 300px" />
			</td>
		  </tr>
		  <tr >
			<td colspan="2" style="border: solid 1px #ccc;">
			<div class="row">
				<label for="docIdentificacao" class="form-control-label col-md-8">Documento de Identifica&ccedil;&atilde;o</label>
				 	 <input  value="" name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width: 200px" min="0" />
			 </div>
			 </td>
			<td width="25%" style="border: solid 1px #ccc;"><label>Cart&atilde;o de Membro</label>
			  &nbsp;</td>
			<td width="24%" style="border: solid 1px #ccc;"><label>Cart&atilde;o de Eleitor</label>
			  &nbsp;</td>
			<td rowspan="4" align="center" style="border: solid 1px #ccc;">
				<a><div class="item " >
					<div class="item-bg gray-200" >
						FOTO
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
			<td width="24%"><input value="" name="documentoNr" type="text" class="form-control" id="documentoNr" style="width:130px" /></td>
			<td>
			  <div class='input-group text'><input  value="" name="cartaoMembroNr" type="text" class="form-control" id="cartaoMembroNr" style="width:130px" />
			  </div>
			</td>
			<td><input  value="" name="cartEleitorNr" type="text" class="form-control" id="cartEleitorNr" style="width:130px" /></td>
			</tr>
		  <tr  style="border: solid 1px #ccc;">
			<td><label>Data Emiss&atilde;o</label>
			  &nbsp;</td>
			<td>
			  <div class='input-group date'><input  value="" name="dataEmissaoDoc" type="text" class="form-control" id="dataEmissaoDoc" style="width:130px" />
				<span class="input-group-addon">
				  <span class="fa fa-calendar"></span>
				  </span>
				</div>
			  </td>
			<td>
			  <div class='input-group date'><input  value="" name="dataEmissaoCarEl" type="text" class="form-control" id="dataEmissaoCarEl" style="width:130px" />
				<span class="input-group-addon">
				  <span class="fa fa-calendar"></span>
				  </span>
				</div>
			  </td>
			<td ><div class='input-group date'><input  value="" name="dataEmissaoCardEl" type="text" class="form-control" id="dataEmissaoCardEl" style="width:130px" />
			  <span class="input-group-addon">
				<span class="fa fa-calendar"></span>
				</span>
			  </div>
			  </td>
			</tr>
		  <tr  style="border: solid 1px #ccc;">
			<td><label>Local Emiss&atilde;o</label>
			  &nbsp;</td>
			<td><input  value="" name="localEmissaoDoc" type="text" class="form-control" id="localEmissaoDoc" style="width:130px" /></td>
			<td><input  value="" name="localEmissaoCartMem" type="text" class="form-control" id="localEmissaoCartMem" style="width:130px" /></td>
			<td><input  value="" name="localEmissaoCartEl" type="text" class="form-control" id="localEmissaoCartEl" style="width:130px" /></td>
			</tr>
		</table>
		<table width="100%" align="center" class="table-sm table-sm" style="font-size: 10px; font-family: Times New Roman">
		  <tr>
			<td>
			<label for="dataNascimento">Data de Nascimento</label>
			<div class='input-group date'><input value="" name="localEmissaoCartEl" type="text" class="form-control" id="localEmissaoCartEl" style="width:150px" />
			  <span class="input-group-addon">
				<span class="fa fa-calendar"></span>
				</span>
			  </div>
			</td>
			<td ><label for="idadeMembro">Idade</label>
			  <input name="idadeMembro" type="text" class="form-control" id="idadeMembro" style="width:150px" /></td>
			<td width="17%"><label for="sexo">Sexo</label>
				<input type="text" value="" class="form-control" style="width:90px" > 	
			 </td>
			<td ><label for="provinciaNascimento">Prov&iacute;ncia do Nascimento</label>
			<input type="text" value="" class="form-control" style="width:150px" > 	
			 </td>
		  </tr>
		  <tr>
			<td><label for="distritoNascimento">Distrito do Nascimento</label>
				<input type="text" value="" class="form-control" style="width:150px"> 
			</td>
			<td colspan="2"><label for="postoAdminNascimento">Posto Administrativo do Nascimento</label>
				<input type="text" value="" class="form-control" style="width:250px" >
			 </td>
			<td><label for="estadoCivil">Estado Civil</label>
				<input type="text" value="" class="form-control" style="width:150px" >
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
			  <input  value="" name="localTrabalho" type="text" class="form-control" id="localTrabalho" style="width:150px"/></td>
			<td width="24%"><label for="profissao">Profiss&atilde;o</label>
				<input type="text" value="" class="form-control" style="width:130px">	
			 </td>
			<td width="24%"><label for="ocupacaoActual">Ocupa&ccedil;&atilde;o Actual</label>
				<input type="text" value="" class="form-control" style="width:130px">	
			 </td>
			<td width="26%"><label for="formacaoAcademica">Forma&ccedil;&atilde;o Acad&ecirc;mica</label>
				<input  type="text" class="form-control" value="" style="width:130px"/>
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
				<input type="text" value="" class="form-control " style="width:160px"/>
			</td>
			<td width="34%"><label >Distrito da Resid&ecirc;ncia</label>
				<input type="text" value="" class="form-control" style="width:160px"/>
			 </td>
			<td width="33%"><label >Posto Administrativo da Resid&ecirc;ncia</label>
				<input type="text" value="" class="form-control" style="width:160px"/>
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
				<input  value="" name="email1" type="text" class="form-control" id="email1" style="width:270px"/></td>
			  <td colspan="2" ><label for="email2">Email Secund&aacute;rio </label>
				<input value="" name="email2" type="text" class="form-control" id="email2" style="width:270px"/></td>
			</tr>
			<tr>
			  <td width="25%"><label for="telefoneFixo">Telefone Fixo</label>
				<input value="" name="telefoneFixo" type="text" class="form-control" id="telefoneFixo" style="width:130px"/></td>
			  <td width="25%"><label for="cel1">Celular 1</label>
				<input  value="" name="cel1" type="text" class="form-control" id="cel1" style="width:130px"/></td>
			  <td width="25%"><label for="cel2">Celular 2</label>
				<input value="" name="cel2" type="text" class="form-control" id="cel2" style="width:130px"/></td>
			  <td width="25%"><label for="cel3">Celular 3</label>
				<input value="" name="cel3" type="text" class="form-control" id="cel3" style="width:130px"/></td>
			</tr>
		</table>
	  </div>
	  <br/>
	  <p align="center" class=""><span class="_500"><strong><u>VI. Fun&ccedil;&otilde;es e &Oacute;rg&atilde;os a que pertence no Partido</u></strong></span></p>
	  <div align="center">
		<table width="100%" class="table-sm table-sm" style="font-size: 10px; font-family: Times New Roman">    
			<tr>
			  <td width="27%"><label for="funcoesPartido">Fun&ccedil;&otilde;es do Partido</label>
			  	<input type="text" value="" class="form-control" style="width:130px">
			 </td>
			  <td width="25%"><label for="orgaoPartido">&Oacute;rg&atilde;os no Partido</label>
			  	<input type="text" value="" class="form-control" style="width:130px">
			 </td>
			  <td width="19%">
				<label >Membro da ACLLN</label>
				 <div class="form-control" style="width:100px">
				  <label>
					<input  type="radio" name="membroAclln" value="1" id="membroAclln_0" />
					Sim</label>
				  <label>
					<input   type="radio" name="membroAclln" value="0" id="membroAclln_1" />
					N&atilde;o</label>
				 </div></td>
			  <td width="15%"> 
				<label >Membro da OMM</label>
				 <div class="form-control" style="width:100px">
				  <label>
					<input   type="radio" name="membroOmm" value="1" id="membroOmm_0" />
					Sim</label>
				  <label>
					<input   type="radio" name="membroOmm" value="0" id="membroOmm_1" />
					N&atilde;o</label>
				</div>
			  </td>
			  <td width="14%">
				<label >Membro da OJM</label>
				 <div class="form-control" style="width:100px">
				  <label>
					<input   type="radio" name="membroOjm" value="1" id="membroOjm_0" />
					Sim</label>
				  <label>
					<input   type="radio" name="membroOjm" value="0" id="membroOjm_1" />
					N&atilde;o</label>
				</div>
			  </td>
			</tr>
			<tr>
			  <td>
				<label for="valorQuota">Valor da Quota</label>
				<input style="text-align: right;" value="" type="text" name="valorQuota" id="valorQuota" class="form-control" style="width:130px"/>
			  </td>
			  <td align="right"><p>
				<label style="width: 100%">&nbsp;</label>
				<label class="pull-right">
				  <input type="checkbox" name="inactivo" value="1" id="inactivo" style="width:50px" />
				  Inactivo</label>
			  </p></td>
			  <td colspan="3"><label for="razoesInactivo">Raz&otilde;oes do Inactivo</label>
			  	<input type="text" value="" class="form-control" style="width:250px">
			</td>
			</tr>
		</table>
		<br/>
	  </div>
  </div>
</body>