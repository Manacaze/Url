<!--Consultas-->
<?php
//Nome da Provincia
$sql="SELECT cod_provincia_ender FROM `frl_cadastro_de_membros` GROUP BY cod_provincia_ender ASC";
$query0 = mysqli_query($con, $sql);
$num0 = mysqli_num_rows($query0);

//Nome da Provincia
$query1 = mysqli_query($con, $sql);
//getRow($table, $line, $reference, $valueLike)

//Total de Membros
$sqlT="SELECT frl_cad_id FROM `frl_cadastro_de_membros`";
$queryT = mysqli_query($con, $sqlT);
$numT = mysqli_num_rows($queryT);

//Total de Membros com Numero
$sqlTN="SELECT numero_cartao FROM `frl_cadastro_de_membros` WHERE numero_cartao != ''";
$queryTN = mysqli_query($con, $sqlTN);
$numTN = mysqli_num_rows($queryTN);
//Total de Membros com Numero Provincias
$sqlTN1="SELECT numero_cartao, cod_provincia_ender FROM `frl_cadastro_de_membros` WHERE numero_cartao != '' GROUP BY cod_provincia_ender ASC ";
$queryTN1 = mysqli_query($con, $sqlTN1);
$queryTN2 = mysqli_query($con, $sqlTN1);
$numTN1 = mysqli_num_rows($queryTN1);

//Total de Membros com Cartao de Eleitor
$sqlTCE="SELECT numero_cartao_eleitor FROM `frl_cadastro_de_membros` WHERE numero_cartao_eleitor != ''";
$queryTCE = mysqli_query($con, $sqlTCE);
$numTCE = mysqli_num_rows($queryTCE);
//Total de Membros com Cartao de Eleitor Provincia
$sqlTCE1="SELECT numero_cartao_eleitor, cod_provincia_ender FROM `frl_cadastro_de_membros` WHERE numero_cartao_eleitor != '' GROUP BY cod_provincia_ender ASC";
$queryTCE1 = mysqli_query($con, $sqlTCE1);
$queryTCE2 = mysqli_query($con, $sqlTCE1);
$numTCE1 = mysqli_num_rows($queryTCE1);
?>
<!--Consultas FIM-->


<!--Primeiros Graficos-->
<div class="row">
    <div class="col-xs-12 col-sm-4">
        <div class="box p-a">
            <div class="pull-left m-r">
	            <span class="w-48 rounded blue-800">
	              <i class="fa fa-users"></i>
	            </span>
            </div>
            <div class="clear">
                <h4 class="m-a-0 text-lg _300"><a href><?=$numT?> <span class="text-sm">Membros Cadastrados</span></a></h4>
                <small class="text-muted">&nbsp;</small>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="box p-a">
            <div class="pull-left m-r">
	            <span class="w-48 rounded primary">
	              <i class="material-icons">&#xe54f;</i>
	            </span>
            </div>
            <div class="clear">
                <h4 class="m-a-0 text-lg _300"><a href><?=$numTN?> <span class="text-sm">Membros com N&uacute;mero</span></a></h4>
                <small class="text-muted">&nbsp;</small>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="box p-a">
            <div class="pull-left m-r">
	            <span class="w-48 rounded warn">
	              <i class="material-icons">&#xe8d3;</i>
	            </span>
            </div>
            <div class="clear">
                <h4 class="m-a-0 text-lg _300"><a href><?=$numTCE?> <span class="text-sm">Membros com Cartao de Eleitor</span></a></h4>
                <small class="text-muted">&nbsp;</small>
            </div>
        </div>
    </div>
</div>
<!--Primeiros Graficos Fim-->
<div class="row">
    <?php if($num0 !=0)
    { ?>
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h3>Gr&aacute;fico de Membros cadastrados</h3>
                    <small class="block text-muted">Gr&aacute;fico de total de Membros cadastrados por distritos</small>
                </div>
                <div class="box-body tabelaPie">
                </div>
            </div>
        </div>
    <?php }?>
    <?php if($numTN1 !=0)
    { ?>
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h3>Membros com N&uacute;mero</h3>
                    <small class="block text-muted">Gr&aacute;fico de total de Membros com o numero de membro por distrito</small>
                </div>
                <div class="box-body tabelaPie">
                </div>
            </div>
        </div>
    <?php }?>
    <?php if($numTCE1 !=0)
    { ?>
        <div class="col-sm-6">
            <div class="box">
                <div class="box-header">
                    <h3>Membros com cart&atilde;o de eleitor</h3>
                    <small class="block text-muted">Gr&aacute;fico de total de Membros com cart&atilde;o de eleitor por Distrito</small>
                </div>
                <div class="box-body tabelaPie">
                </div>
            </div>
        </div>
    <?php }?>
</div>