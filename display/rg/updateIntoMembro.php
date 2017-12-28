<?php

if(isset($_POST['submit']))
{
	$idMembro = $_POST['idMembro'];
	
	$valorQuota = 0;
	$valorQta=explode("." , $_POST['valorQuota']);
	for($i=0;$i<count($valorQta);$i++)
	{
		$valorQuota .= $valorQta[$i];
	}
	
	$mbr = new Membro();
	$mbr->setNomeMembro($_POST['nomeMembro']);
	$mbr->setDocIdentificacao($_POST['docIdentificacao']);
	$mbr->setDocumentoNr($_POST['documentoNr']);
	$mbr->setFotoMembro(@$_FILES['fotoMembro']);
	$mbr->setCartaoMembroNr($_POST['cartaoMembroNr']);
	$mbr->setCartEleitorNr($_POST['cartEleitorNr']);
	$mbr->setDataEmissaoDoc(date("Y-m-d", strtotime($_POST['dataEmissaoDoc'])));
	$mbr->setDataEmissaoCarEl(date("Y-m-d", strtotime($_POST['dataEmissaoCarEl'])));
	$mbr->setDataEmissaoCardEl(date("Y-m-d", strtotime($_POST['dataEmissaoCardEl'])));
	$mbr->setLocalEmissaoDoc($_POST['localEmissaoDoc']);
	$mbr->setLocalEmissaoCartMem($_POST['localEmissaoCartMem']);
	$mbr->setLocalEmissaoCartEl($_POST['localEmissaoCartEl']);
	$mbr->setDataNascimento(date("Y-m-d", strtotime($_POST['dataNascimento'])));
	$mbr->setIdadeMembro($_POST['idadeMembro']);
	$mbr->setSexo($_POST['sexo']);
	$mbr->setProvinciaNascimento($_POST['provinciaNascimento']);
	$mbr->setDistritoNascimento($_POST['distritoNascimento']);
	$mbr->setPostoAdminNascimento($_POST['postoAdminNascimento']);
	$mbr->setEstadoCivil($_POST['estadoCivil']);
	$mbr->setLocalTrabalho($_POST['localTrabalho']);
	$mbr->setProfissao($_POST['profissao']);
	$mbr->setOcupacaoActual($_POST['ocupacaoActual']);
	$mbr->setFormacaoAcademica($_POST['formacaoAcademica']);
	$mbr->setProvinciaResidencia($_POST['provinciaResidencia']);
	$mbr->setDistritoResidencia($_POST['distritoResidencia']);
	$mbr->setPostoAdminResidencia($_POST['postoAdminResidencia']);
	$mbr->setEmail1($_POST['email1']);
	$mbr->setEmail2($_POST['email2']);
	$mbr->setTelefoneFixo($_POST['telefoneFixo']);
	$mbr->setCel1($_POST['cel1']);
	$mbr->setCel2($_POST['cel2']);
	$mbr->setCel3($_POST['cel3']);
	$mbr->setFuncoesPartido($_POST['funcoesPartido']);
	$mbr->setOrgaoPartido($_POST['orgaoPartido']);
	$mbr->setMembroAclln($_POST['membroAclln']);
	$mbr->setMembroOmm($_POST['membroOmm']);
	$mbr->setMembroOjm($_POST['membroOjm']);
	$mbr->setValorQuota($valorQuota);
	$mbr->setInactivo(@$_POST['inactivo']);
	$mbr->setRazoesInactivo($_POST['razoesInactivo']);
	$mbr->setProvincia2($_POST['provincia2']);
	$mbr->setDistrito($_POST['distrito']);
	$mbr->setZona($_POST['zona']);
	$mbr->setCirculo($_POST['circulo']);
	$mbr->setCelula($_POST['celula']);
	$mbr->setPaisVotar($_POST['paisVotar']);

	if($mbr->updateMembro($idMembro))
	{
		echo '
		<script language="JavaScript"> 
		window.location="'.principal.'membros"; 
		</script>
		';
	}
	else
	{
		echo '
		<script language="JavaScript"> 
		alert("Falha na Actualizacao");
		</script>
		';
	}
}
?>