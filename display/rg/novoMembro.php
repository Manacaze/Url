<?php
include_once ("display/rg/insertIntoMembro.php");    //insercao do membro
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
?>
<div class="padding">
  <div class="box">
    <div class="box-header row">
		<div class="col-md-12 col-xs-12 col-sm-12">
			<div class="col-md-6 col-xs-6 col-sm-6">
			  <h2 >Cadastro</h2>
			  <small>Cadastro do Membro</small>
			</div>
		  <button onclick="imprimir_fichamembro_view()" style="width: 40px;" class="md-btn md-raised m-b-sm white col-md-6 pull-right" data-toggle="tooltip" title="Imprimir"><i class="fa fa-print"></i></button>
		</div>
		<div class="col-md-12">
			<p class="nav-text col-md-12 text-warning">Campos Obrigatorios: <b class="obrigatorio">*</b></p>
		</div>
    </div>
	<div class="form-group table-responsive">
<form action="<?=principal?>novoMembro" method="post" enctype="multipart/form-data" name="rgMembro" id="rgMembro">
  <p align="center" class="midnight-blue"><span class="_500"><strong>I.Localiza&ccedil;&atilde;o Geogr&aacute;fica (Milit&acirc;ncia)</strong></span></p>
  <table width="90%" height="148" align="center" class="table-sm table-striped table-hover white">
      <tr>
        <td width="217" height="68" nowrap="nowrap"><label for="provincia2">Prov&iacute;ncias <b class="obrigatorio">*</b></label>
          <select required  name="provincia2" class="form-control" id="provincia2">

			       <option value="">Selecione aqui...</option>
			<?php 
             while($linhaP = mysqli_fetch_array($result)){
               $id_provincia = $linhaP['sms_pro_id']; 
              if($nivelAcesso == 3 && $usu_provincia == $id_provincia || $nivelAcesso == 4 && $usu_provincia == $id_provincia || $nivelAcesso == 5 && $usu_provincia == $id_provincia){// se for registrador so pode registrar membros da sua provincia, se for um supervisor a nivel Distrital so mostra a sua provincia, se for um 
			?>
				        <option value="<?=$linhaP['sms_pro_id']?>"><?=$linhaP['provincia']?></option>

			<?php
                }else
                  if($nivelAcesso != 3 && $nivelAcesso != 4 && $nivelAcesso != 5){// se nao for um registador
      ?>              
                    <option value="<?=$linhaP['sms_pro_id']?>"><?=$linhaP['provincia']?></option>
      <?php                
                  }
                }
			     

      ?>
          </select></td>
        <td width="255"><label for="distrito">Distrito <b class="obrigatorio">*</b></label>
          <select required  name="distrito" class="form-control" id="distrito">
			<option value="">Selecione Prov&iacute;ncia...</option>
          </select></td>
        <td width="243"><label for="zona">Zona <b class="obrigatorio">*</b></label>
          <select required  name="zona" class="form-control" id="zona">
			<option value="">Selecione Distrito...</option>
          </select></td>
    </tr>
      <tr>
        <td height="35"><label for="circulo">C&iacute;rculo <b class="obrigatorio">*</b></label>
          <select required  name="circulo" class="form-control" id="circulo">
			<option value="">Selecione Zona...</option>
          </select></td>
        <td><label for="celula">C&eacute;lula <b class="obrigatorio">*</b></label>
          <select required  name="celula" class="form-control" id="celula">
			<option value="">Selecione C&iacute;rculo...</option>
          </select></td>
        <td><label for="paisVotar">Pa&iacute;s Onde Vai Votar <b class="obrigatorio">*</b></label>
          <select required  name="paisVotar" class="form-control" id="paisVotar">
			<option value="">Selecione aqui...</option>
			<?php while($linhaP2 = mysqli_fetch_array($result2)){
			?>
				<option value="<?=$linhaP2['frl_pai_id']?>"><?=$linhaP2['pais']?></option>
			<?php
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
        <td colspan="4"><label for="nomeMembro">Nome <b class="obrigatorio">*</b></label>
          <input required name="nomeMembro" type="text" class="form-control" id="nomeMembro" style="width: 600px" min="0" /></td>
        </tr>
      <tr >
        <td colspan="2" style="border-right: solid 1px #ccc">
		<div class="row">
			<label for="docIdentificacao" class="form-control-label col-md-8">Documento de Identifica&ccedil;&atilde;o</label>
			  <select name="docIdentificacao" class="form-control col-md-4" id="docIdentificacao" style="width:100px">
				<option value="">Selecione aqui...</option>
				<?php while($linhaP3 = mysqli_fetch_array($result3)){
				?>
					<option value="<?=$linhaP3['frl_tip_id']?>"><?=$linhaP3['tipodoc']?></option>
				<?php
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
				  <img id="dvPreview" src="assets/images/uploads/avatarHomem.jpg">
				</div>
				<div class="p-a-lg">
				  <div class="row m-t text-left">
					  <div class="text-left">
						<span class="avatar w-96" >
							<div class="form-file text-left">
							  <input type="file" name="fotoMembro" value="" id="fileupload" style="height: 25px; width: 25px; cursor: pointer;">
							  <button type="button" class="btn btn-sm info text-white " style="height: 30px; width: 30px; cursor: pointer;"><i class="fa fa-file-photo-o"></i></button>
							</div>
						</span>
					  </div>
				  </div>
				</div>
			</div></a>
		</td>
        </tr>
      <tr style="border: solid 1px #ccc;">
        <td width="12%" ><label>N&uacute;mero </label>&nbsp;</td>
        <td width="24%" style="border-right: solid 1px #ccc"><input name="documentoNr" type="text" class="form-control" id="documentoNr" style="width:210px"/></td>
        <td style="border-right: solid 1px #ccc">
          <div class='input-group text'><span id="setNumber"><input name="cartaoMembroNr" type="text" class="form-control" id="cartaoMembroNr" style="width:100px"/></span>
            <span class="btn btn-defaut grey-500" id="btnCartaoMembroNr">
              <span>Gerar N&ordm;</span>
              </span>
            </div>
          </td>
        <td style="border-right: solid 1px #ccc"><input name="cartEleitorNr" type="text" class="form-control" id="cartEleitorNr" style="width:210px"/></td>
        </tr>
      <tr >
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
				  }"><input name="dataEmissaoDoc" type="text" class="form-control" id="dataEmissaoDoc" style="width:160px" />
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
				  }"><input name="dataEmissaoCarEl" type="text" class="form-control" id="dataEmissaoCarEl" style="width:160px"/>
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
				  }"><input name="dataEmissaoCardEl" type="text" class="form-control" id="dataEmissaoCardEl" style="width:160px"/>
          <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
            </span>
          </div>
          </td>
        </tr>
      <tr  style="border: solid 1px #ccc;">
        <td><label>Local Emiss&atilde;o</label>
          &nbsp;</td>
        <td style="border-right: solid 1px #ccc"><input name="localEmissaoDoc" type="text" class="form-control" id="localEmissaoDoc" style="width:210px"/></td>
        <td style="border-right: solid 1px #ccc"><input name="localEmissaoCartMem" type="text" class="form-control" id="localEmissaoCartMem" style="width:210px"/></td>
        <td style="border-right: solid 1px #ccc"><input name="localEmissaoCartEl" type="text" class="form-control" id="localEmissaoCartEl" style="width:210px"/></td>
        </tr>
    </table>
    <table width="90%" align="center" class="table-sm table-sm table-hover white">
      <tr>
        <td width="26%">
        <label for="dataNascimento">Data de Nascimento <b class="obrigatorio">*</b></label>
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
          }"><input required  name="dataNascimento" type="text" class="form-control" id="dataNascimento" />
          <span class="input-group-addon">
            <span class="fa fa-calendar"></span>
            </span>
          </div>
          </td>
        <td width="19%"><label for="idadeMembro">Idade</label>
          <input name="idadeMembro" type="text" class="form-control" id="idadeMembro" readonly="readonly" /></td>
        <td width="17%"><label for="sexo">Sexo <b class="obrigatorio">*</b></label>
          <select required  name="sexo" class="form-control" id="sexo">
			<option value="">Selecione aqui...</option>
			<?php while($linhaP9 = mysqli_fetch_array($result9)){
			?>
				<option value="<?=$linhaP9['frl_id']?>"><?=$linhaP9['nome']?></option>
			<?php
			}?>
          </select></td>
        <td width="38%"><label for="provinciaNascimento">Prov&iacute;ncia do Nascimento <b class="obrigatorio">*</b></label>
          <select required  name="provinciaNascimento" class="form-control" id="provinciaNascimento">
			<option value="">Selecione aqui...</option>
			<?php while($linhaP1 = mysqli_fetch_array($result1)){
			?>
				<option value="<?=$linhaP1['sms_pro_id']?>"><?=$linhaP1['provincia']?></option>
			<?php
			}?>
          </select></td>
        </tr>
      <tr>
        <td><label for="distritoNascimento">Distrito do Nascimento <b class="obrigatorio">*</b></label>
          <select required  name="distritoNascimento" class="form-control" id="distritoNascimento">
			<option value="">Selecione Provincia...</option>
          </select></td>
        <td colspan="2"><label for="postoAdminNascimento">Posto Administrativo do Nascimento <b class="obrigatorio">*</b></label>
          <select required  name="postoAdminNascimento" class="form-control" id="postoAdminNascimento">
			<option value="">Selecione Distrito...</option>
          </select></td>
        <td><label for="estadoCivil">Estado Civil <b class="obrigatorio">*</b></label>
          <select required  name="estadoCivil" class="form-control" id="estadoCivil" style="width:200px;">
			<option value="">Selecione aqui...</option>
			<?php while($linhaP10 = mysqli_fetch_array($result10)){
			?>
				<option value="<?=$linhaP10['frl_id']?>"><?=$linhaP10['nome']?></option>
			<?php
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
          <input name="localTrabalho" type="text" class="form-control" id="localTrabalho" /></td>
        <td width="24%"><label for="profissao">Profiss&atilde;o</label>
          <select name="profissao" class="form-control" id="profissao">
			<option value="">Selecione aqui...</option>
			<?php while($linhaP4 = mysqli_fetch_array($result4)){
			?>
				<option value="<?=$linhaP4['frl_cad_id']?>"><?=$linhaP4['profissao']?></option>
			<?php
			}?>
          </select></td>
        <td width="24%"><label for="ocupacaoActual">Ocupa&ccedil;&atilde;o Actual <b class="obrigatorio">*</b></label>
          <select required  name="ocupacaoActual" class="form-control" id="ocupacaoActual">
			<option value="">Selecione aqui...</option>
			<?php while($linhaP5 = mysqli_fetch_array($result5)){
			?>
				<option value="<?=$linhaP5['frl_cad_id']?>"><?=$linhaP5['ocupacao_profissional']?></option>
			<?php
			}?>
          </select></td>
        <td width="26%"><label for="formacaoAcademica">Forma&ccedil;&atilde;o Acad&ecirc;mica</label>
          <select name="formacaoAcademica" class="form-control" id="formacaoAcademica">
			<option value="">Selecione aqui...</option>
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
        <td width="33%"><label for="provinciaResidencia">Prov&iacute;ncia da Resid&ecirc;ncia <b class="obrigatorio">*</b></label>
          <select required  name="provinciaResidencia" class="form-control" id="provinciaResidencia">
			<option value="">Selecione aqui...</option>
			<?php while($linhaP6 = mysqli_fetch_array($result6)){
			?>
				<option value="<?=$linhaP6['sms_pro_id']?>"><?=$linhaP6['provincia']?></option>
			<?php
			}?>
          </select></td>
        <td width="34%"><label for="distritoResidencia">Distrito da Resid&ecirc;ncia <b class="obrigatorio">*</b></label>
          <select required  name="distritoResidencia" class="form-control" id="distritoResidencia">
			<option value="">Selecione Provincia...</option>
          </select></td>
        <td width="33%"><label for="postoAdminResidencia">Posto Administrativo da Resid&ecirc;ncia <b class="obrigatorio">*</b></label>
          <select required  name="postoAdminResidencia" class="form-control" id="postoAdminResidencia">
			<option value="">Selecione Distrito...</option>
          </select></td>
        </tr>
    </table>
  </div>
  <p align="center" class="midnight-blue"><span class="_500"><strong>V.Contactos</strong></span></p>
  <div align="center">
    <table width="90%" class="table-sm table-sm table-striped table-hover white">    
        <tr>
          <td colspan="2" ><label for="email1">Email Prim&aacute;rio</label>
            <input name="email1" type="text" class="form-control" id="email1" /></td>
          <td colspan="2" ><label for="email2">Email Secund&aacute;rio </label>
            <input name="email2" type="text" class="form-control" id="email2" /></td>
        </tr>
        <tr>
          <td width="25%"><label for="telefoneFixo">Telefone Fixo</label>
            <input oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="telefoneFixo" type="text" class="form-control" id="telefoneFixo" /></td>
          <td width="25%"><label for="cel1">Celular 1 <b class="obrigatorio">*</b></label>
            <input required  name="cel1" type="text" class="form-control" id="cel1" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" /></td>
          <td width="25%"><label for="cel2">Celular 2</label>
            <input name="cel2" type="text" class="form-control" id="cel2" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" /></td>
          <td width="25%"><label for="cel3">Celular 3</label>
            <input name="cel3" type="text" class="form-control" id="cel3" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" /></td>
        </tr>
    </table>
  </div>
  <p align="center" class="midnight-blue"><span class="_500"><strong>VI.Fun&ccedil;&otilde;es e &Oacute;rg&atilde;os a que pertence no Partido</strong></span></p>
  <div align="center">
	<table width="90%" class="table-sm table-sm table-striped table-hover white">    
        <tr>
          <td width="27%"><label for="funcoesPartido">Fun&ccedil;&otilde;es do Partido</label>
            <select name="funcoesPartido" class="form-control" id="funcoesPartido">
				<option value="">Selecione aqui...</option>
				<?php while($linhaP11 = mysqli_fetch_array($result11)){
				?>
					<option value="<?=$linhaP11['funcao_id']?>"><?=$linhaP11['funcao_nome']?></option>
				<?php
				}?>
            </select> </td>
          <td width="25%"><label for="orgaoPartido">&Oacute;rg&atilde;os no Partido</label>
            <select name="orgaoPartido" class="form-control" id="orgaoPartido">
				<option value="">Selecione aqui...</option>
				<?php while($linhaP7 = mysqli_fetch_array($result7)){
				?>
					<option value="<?=$linhaP7['frl_cad_id']?>"><?=$linhaP7['orgaos']?></option>
				<?php
				}?>
            </select> </td>
		  <td width="19%">
		    <label >Membro da ACLLN</label>
             <div class="form-control">
		      <label>
		        <input required type="radio" name="membroAclln" value="1" id="membroAclln_0" />
		        Sim</label>
		      <label>
		        <input required  type="radio" name="membroAclln" value="0" id="membroAclln_1" checked/>
		        N&atilde;o</label>
             </div></td>
		  <td width="15%"> 
            <label >Membro da OMM</label>
             <div class="form-control">
		      <label>
		        <input required  type="radio" name="membroOmm" value="1" id="membroOmm_0" />
		        Sim</label>
		      <label>
		        <input required  type="radio" name="membroOmm" value="0" id="membroOmm_1" checked/>
		        N&atilde;o</label>
            </div>
          </td>
		  <td width="14%">
            <label >Membro da OJM</label>
             <div class="form-control">
		      <label>
		        <input required  type="radio" name="membroOjm" value="1" id="membroOjm_0" />
		        Sim</label>
		      <label>
		        <input required  type="radio" name="membroOjm" value="0" id="membroOjm_1" checked/>
		        N&atilde;o</label>
            </div>
          </td>
        </tr>
        <tr>
          <td>
			<label for="valorQuota">Valor da Quota</label>
			<input type="text" name="valorQuota" value="0" id="valorQuota" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"/>
		  </td>
          <td>&nbsp;</td>
          <td><p>
			<label style="width: 100%">&nbsp;</label>
            <label class="pull-right">
              <input type="checkbox" name="inactivo" value="1" id="inactivo_0" />
              Inactivo</label>
          </p></td>
          <td colspan="2"><label for="razoesInactivo">Raz&otilde;oes do Inactivo</label>
            <select name="razoesInactivo" class="form-control" id="razoesInactivo" required disabled>
				<option value="">Selecione aqui...</option>
				<?php while($linhaP8 = mysqli_fetch_array($result8)){
				?>
					<option value="<?=$linhaP8['frl_raz_id']?>"><?=$linhaP8['motivo']?></option>
				<?php
				}?>
            </select></td>
        </tr>
    </table>
	<p>&nbsp;</p>
	<div class="btn-group pull-left">
		<button name="submit" type="submit" class="btn btn-info" style="margin: 0 4px 0 15px">Guardar Dados</button>
		<button name="cancel" type="reset" class="btn btn-danger " style="margin: 0 0 0 4px">Cancelar</button>
	</div>
	<br/>
	<br/>
	<br/>
  </div>
</form>
    </div>
  </div>
</div>

