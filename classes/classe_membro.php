<?php

class Membro extends Connection {
	private $nomeMembro = "";
	private $docIdentificacao = "";
	private $documentoNr = "";
	private $fotoMembro = "";
	private $cartaoMembroNr = "";
	private $cartEleitorNr = "";
	private $dataEmissaoDoc = "";
	private $dataEmissaoCarEl = "";
	private $dataEmissaoCardEl = "";
	private $localEmissaoDoc = "";
	private $localEmissaoCartMem = "";
	private $localEmissaoCartEl = "";
	private $dataNascimento = "";
	private $idadeMembro = "";
	private $sexo = "";
	private $provinciaNascimento = "";
	private $distritoNascimento = "";
	private $postoAdminNascimento = "";
	private $estadoCivil = "";
	private $localTrabalho = "";
	private $profissao = "";
	private $ocupacaoActual = "";
	private $formacaoAcademica = "";
	private $provinciaResidencia = "";
	private $distritoResidencia = "";
	private $postoAdminResidencia = "";
	private $email1 = "";
	private $email2 = "";
	private $telefoneFixo = "";
	private $cel1 = "";
	private $cel2 = "";
	private $cel3 = "";
	private $funcoesPartido = "";
	private $orgaoPartido = "";
	private $membroAclln = "";
	private $membroOmm = "";
	private $membroOjm = "";
	private $valorQuota = "";
	private $inactivo = 0;
	private $razoesInactivo = "";
	private $provincia2 = "";
	private $distrito = "";
	private $zona = "";
	private $circulo = "";
	private $celula = "";
	private $paisVotar = "";
	
	public function setNomeMembro($nomeMembro)
	{
		$this-> nomeMembro = $nomeMembro;
	}
	public function setDocIdentificacao($docIdentificacao)
	{
		$this-> docIdentificacao = $docIdentificacao;
	}
	public function setDocumentoNr($documentoNr)
	{
		$this-> documentoNr = $documentoNr;
	}
	public function setFotoMembro($fotoMembro)
	{
		$this-> fotoMembro = $fotoMembro;
	}public function setCartaoMembroNr($cartaoMembroNr)
	{
		$this-> cartaoMembroNr = $cartaoMembroNr;
	}
	public function setCartEleitorNr($cartEleitorNr)
	{
		$this-> cartEleitorNr = $cartEleitorNr;
	}
	public function setDataEmissaoDoc($dataEmissaoDoc)
	{
		$this-> dataEmissaoDoc = $dataEmissaoDoc;
	}
	public function setDataEmissaoCarEl($dataEmissaoCarEl)
	{
		$this-> dataEmissaoCarEl = $dataEmissaoCarEl;
	}
	public function setDataEmissaoCardEl($dataEmissaoCardEl)
	{
		$this-> dataEmissaoCardEl = $dataEmissaoCardEl;
	}public function setLocalEmissaoDoc($localEmissaoDoc)
	{
		$this-> localEmissaoDoc = $localEmissaoDoc;
	}
	public function setLocalEmissaoCartMem($localEmissaoCartMem)
	{
		$this-> localEmissaoCartMem = $localEmissaoCartMem;
	}public function setLocalEmissaoCartEl($localEmissaoCartEl)
	{
		$this-> localEmissaoCartEl = $localEmissaoCartEl;
	}
	public function setDataNascimento($dataNascimento)
	{
		$this-> dataNascimento = $dataNascimento;
	}
	public function setIdadeMembro($idadeMembro)
	{
		$this-> idadeMembro = $idadeMembro;
	}
	public function setSexo($sexo)
	{
		$this-> sexo = $sexo;
	}
	public function setProvinciaNascimento($provinciaNascimento)
	{
		$this-> provinciaNascimento = $provinciaNascimento;
	}
	public function setDistritoNascimento($distritoNascimento)
	{
		$this-> distritoNascimento = $distritoNascimento;
	}
	public function setPostoAdminNascimento($postoAdminNascimento)
	{
		$this-> postoAdminNascimento = $postoAdminNascimento;
	}
	public function setEstadoCivil($estadoCivil)
	{
		$this-> estadoCivil = $estadoCivil;
	}
	public function setLocalTrabalho($localTrabalho)
	{
		$this-> localTrabalho = $localTrabalho;
	}
	public function setProfissao($profissao)
	{
		$this-> profissao = $profissao;
	}
	public function setOcupacaoActual($ocupacaoActual)
	{
		$this-> ocupacaoActual = $ocupacaoActual;
	}
	public function setFormacaoAcademica($formacaoAcademica)
	{
		$this-> formacaoAcademica = $formacaoAcademica;
	}
	public function setProvinciaResidencia($provinciaResidencia)
	{
		$this-> provinciaResidencia = $provinciaResidencia;
	}
	public function setDistritoResidencia($distritoResidencia)
	{
		$this-> distritoResidencia = $distritoResidencia;
	}
	public function setPostoAdminResidencia($postoAdminResidencia)
	{
		$this-> postoAdminResidencia = $postoAdminResidencia;
	}
	public function setEmail1($email1)
	{
		$this-> email1 = $email1;
	}
	public function setEmail2($email2)
	{
		$this-> email2 = $email2;
	}
	public function setTelefoneFixo($telefoneFixo)
	{
		$this-> telefoneFixo = $telefoneFixo;
	}
	public function setCel1($cel1)
	{
		$this-> cel1 = $cel1;
	}
	public function setCel2($cel2)
	{
		$this-> cel2 = $cel2;
	}
	public function setCel3($cel3)
	{
		$this-> cel3 = $cel3;
	}
	public function setFuncoesPartido($funcoesPartido)
	{
		$this-> funcoesPartido = $funcoesPartido;
	}
	public function setOrgaoPartido($orgaoPartido)
	{
		$this-> orgaoPartido = $orgaoPartido;
	}
	public function setMembroAclln($membroAclln)
	{
		$this-> membroAclln = $membroAclln;
	}
	public function setMembroOmm($membroOmm)
	{
		$this-> membroOmm = $membroOmm;
	}
	public function setMembroOjm($membroOjm)
	{
		$this-> membroOjm = $membroOjm;
	}
	public function setValorQuota($valorQuota)
	{
		$this-> valorQuota = $valorQuota;
	}
	public function setInactivo($inactivo)
	{
		$this-> inactivo = $inactivo;
	}
	public function setRazoesInactivo($razoesInactivo)
	{
		$this-> razoesInactivo = $razoesInactivo;
	}
	public function setProvincia2($provincia2)
	{
		$this-> provincia2 = $provincia2;
	}
	public function setDistrito($distrito)
	{
		$this-> distrito = $distrito;
	}
	public function setZona($zona)
	{
		$this-> zona = $zona;
	}
	public function setCirculo($circulo)
	{
		$this-> circulo = $circulo;
	}
	public function setCelula($celula)
	{
		$this-> celula = $celula;
	}
	public function setPaisVotar($paisVotar)
	{
		$this-> paisVotar = $paisVotar;
	}
	
	function AddMembro(){
		global $con;
		
		if($this->VerificaErroImg($this->fotoMembro == false))
		{
			$this->fotoMembro = '';
		}
		else
		{
			$caminhoImage = "../assets/images/uploads/";
			$nomeImagem = $this->fotoMembro['name'];
			$guardarImg = $caminhoImage.$nomeImagem;
			$diretorioImagem = $this->fotoMembro['tmp_name'];
			
			//faz o upload da imagem para o caminho
			if(move_uploaded_file($diretorioImagem, $guardarImg))
				$this->fotoMembro = $nomeImagem;
			else
				$this->fotoMembro = "avatarHomem.jpg";
		}
		
		 $sql="INSERT INTO `frl_cadastro_de_membros`(nome,id_tipo_doc,documento_numero,numero_cartao,numero_cartao_eleitor,data_emissao_bi,local_emissao_bi,data_emissao_cartao_membro,local_emissao_cartao_membro,data_emissao_cartao_eleitor,local_emissao_cartao_eleitor,data_nascimento,foto,id_sexo,cod_provincia_nasc,cod_distrito_nasc,cod_pa_nasc,id_estado_civil,cod_provincia,cod_distrito,cod_zona,cod_circulo,cod_celula,cod_pais,local_trabalho,cod_profissao,cod_ocupacao,cod_escolaridade,cod_provincia_ender,cod_distrito_ender,cod_pa_ender,email,email2,telefone,fone1,fone2,fone3,cod_cargo,cod_orgpartido,aclln,omm,ojm,inactivo,id_raz_inactivo,valor_quota) 
		VALUES('".$this->nomeMembro."','".$this->docIdentificacao."','".$this->documentoNr."','".$this->cartaoMembroNr."','".$this->cartEleitorNr."','".$this->dataEmissaoDoc."','".$this->localEmissaoDoc."','".$this->dataEmissaoCarEl."','".$this->localEmissaoCartMem."','".$this->dataEmissaoCardEl."','".$this->localEmissaoCartEl."','".$this->dataNascimento."','".$this->fotoMembro."','".$this->sexo."','".$this->provinciaNascimento."','".$this->distritoNascimento."','".$this->postoAdminNascimento."','".$this->estadoCivil."','".$this->provincia2."','".$this->distrito."','".$this->zona."','".$this->circulo."','".$this->celula."','".$this->paisVotar."','".$this->localTrabalho."','".$this->profissao."','".$this->ocupacaoActual."'
		,'".$this->formacaoAcademica."','".$this->provinciaResidencia."','".$this->distritoResidencia."','".$this->postoAdminResidencia."','".$this->email1."','".$this->email2."','".$this->telefoneFixo."','".$this->cel1."','".$this->cel2."','".$this->cel3."','".$this->funcoesPartido."','".$this->orgaoPartido."','".$this->membroAclln."','".$this->membroOmm."','".$this->membroOjm."','".$this->inactivo."','".$this->razoesInactivo."','".$this->valorQuota."')";
		
		$result = mysqli_query($con, $sql);
		
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function updateMembro($idMembro)
	{
		global $con;
		
		if($this->VerificaErroImg($this->fotoMembro == false))
		{
			$this->fotoMembro = '';
		}
		else
		{
			$caminhoImage = "../assets/images/uploads/";
			$nomeImagem = $this->fotoMembro['name'];
			$guardarImg = $caminhoImage.$nomeImagem;
			$diretorioImagem = $this->fotoMembro['tmp_name'];
			
			//faz o upload da imagem para o caminho
			if(move_uploaded_file($diretorioImagem, $guardarImg))
			{
				$this->fotoMembro = $nomeImagem;
				$foto= "',foto='".$this->fotoMembro;
			}
			else
				$foto = '';
		}
		  $sql="UPDATE `frl_cadastro_de_membros` SET nome='".$this->nomeMembro."',id_tipo_doc='".$this->docIdentificacao."',documento_numero='".$this->documentoNr."'
		,numero_cartao='".$this->cartaoMembroNr."',numero_cartao_eleitor='".$this->cartEleitorNr."',data_emissao_bi='".$this->dataEmissaoDoc."',local_emissao_bi='".$this->localEmissaoDoc."',
		data_emissao_cartao_membro='".$this->dataEmissaoCarEl."',local_emissao_cartao_membro='".$this->localEmissaoCartMem."',data_emissao_cartao_eleitor='".$this->dataEmissaoCardEl."'
		,local_emissao_cartao_eleitor='".$this->localEmissaoCartEl."',data_nascimento='".$this->dataNascimento.$foto."',id_sexo='".$this->sexo."'
		,cod_provincia_nasc='".$this->provinciaNascimento."',cod_distrito_nasc='".$this->distritoNascimento."',cod_pa_nasc='".$this->postoAdminNascimento."'
		,id_estado_civil='".$this->estadoCivil."',cod_provincia='".$this->provincia2."',cod_distrito='".$this->distrito."',cod_zona='".$this->zona."',cod_circulo='".$this->circulo."'
		,cod_celula='".$this->celula."',cod_pais='".$this->paisVotar."',local_trabalho='".$this->localTrabalho."',cod_profissao='".$this->profissao."',cod_ocupacao='".$this->ocupacaoActual."'
		,cod_escolaridade='".$this->formacaoAcademica."',cod_provincia_ender='".$this->provinciaResidencia."',cod_distrito_ender='".$this->distritoResidencia."'
		,cod_pa_ender='".$this->postoAdminResidencia."',email='".$this->email1."',email2='".$this->email2."',telefone='".$this->telefoneFixo."',fone1='".$this->cel1."'
		,fone2='".$this->cel2."',fone3='".$this->cel3."',cod_cargo='".$this->funcoesPartido."',cod_orgpartido='".$this->orgaoPartido."',aclln='".$this->membroAclln."'
		,omm='".$this->membroOmm."',ojm='".$this->membroOjm."',inactivo='".$this->inactivo."',id_raz_inactivo='".$this->razoesInactivo."',valor_quota='".$this->valorQuota."'
		WHERE frl_cad_id = $idMembro";
		
		
		$result = mysqli_query($con, $sql);
		
		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function VerificaErroImg($foto){
		$tamanho = 10000000;
		$error = array();

		//verifica se o arquivo e uma imagem
		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp|jpg)$/", $foto['type'])){
			return false;
			$error[1]="Erro";
		}

		//pega as dimensoes da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);

		/*//verifica se a largura da imagem e maior que a permitida
		if($dimensoes[0] > $largura){
			$error[2] = 'a largura da imagem nao deve ultrapassar'.$largura.'pixels';
		}*/

		

		//senao ouvi nenhum erro
		if(count($error) == 0){
			return true;
		}

		if(count($error)!=0){
			return false;
		}
	}
}

?>