
 <script>console.log("Registre pelo menos um administrador para o sistema")</script>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <meta http-equiv="refresh" content="14390;url=http://172.17.119.40/operacional/index.php/login/logout" />
    
    <link rel="icon" href="http://172.17.119.40/operacional/images/favicon.ico">

    <title>COD</title>

    <!-- Bootstrap core CSS -->
    <link href="http://172.17.119.40/operacional/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap core CSS -->
    <link href="http://172.17.119.40/operacional/assets/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://172.17.119.40/operacional/assets/bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="http://172.17.119.40/operacional/assets/bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="http://172.17.119.40/operacional/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- JQuery -->
    <script src="http://172.17.119.40/operacional/assets/jquery/jquery-3.2.1.min.js"></script>
    <!-- 
    <script src="http://172.17.119.40/operacional/assets/jquery/jquery.mask.min.js"></script>
     -->
    
    <!-- InputMask -->
    <script src="http://172.17.119.40/operacional/assets/jquery/jquery.inputmask.min.js"></script>
    <!-- 
    <script src="http://172.17.119.40/operacional/assets/jquery/inputmask.date.extensions.js"></script>
    <script src="http://172.17.119.40/operacional/assets/jquery/inputmask.extensions.js"></script>
     -->

    
    <!-- Bootstrap core JavaScript -->
    <script src="http://172.17.119.40/operacional/assets/bootstrap/js/bootstrap.min.js"></script>
    
     
    <!-- DataTables -->
    <link href="http://172.17.119.40/operacional/assets/datatables/datatables.min.css" rel="stylesheet">
	<script src="http://172.17.119.40/operacional/assets/datatables/datatables.min.js"></script>
	<script src="http://172.17.119.40/operacional/assets/datatables/datatables_plugin_date_euro.js"></script>
	
	<link href="http://172.17.119.40/operacional/assets/bootstrap/css/bootstrap-select.css" rel="stylesheet">
	<script src="http://172.17.119.40/operacional/assets/bootstrap/js/bootstrap-select-1.13.14.min.js"></script>
	<script src="http://172.17.119.40/operacional/assets/bootstrap/js/i18n/defaults-pt_BR.min.js"></script>
	

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://172.17.119.40/operacional/assets/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

	<style type="text/css">
        .topo, #topo{
           background-image: url('http://172.17.119.40/operacional/images/bg_top.jpg') !important;
           background-color: #009C49 !important;
        }
    </style>
    
  </head>
  
  <body>
  
    <div class="header">
	
	    <!--  Topo EM TELAS GRANDES-->
	    <div class="row hidden-xs topo" id="topo">
	
	        <div id="topo_center">
	
	            <div class="col-lg-2 visible-lg text-center">
	                Quarta-feira, 04/11/2020	            </div>
	
	            <div class="col-sm-12 col-md-10 col-lg-10">
	
	            </div>
	
	        </div>
	
	        <div class="visible-sm visible-md visible-lg text-right" style="position: absolute; top: 0px; right: 0px;">
	            <div id="topo_right" class="text-right"></div>
	        </div>
	
	    </div>
	    <!-- Fim do Topo -->
	    
	    
	    <!--  Topo MOBILE-->
	    <div class="row visible-xs-block topo" id="topo">
	    
	    	
	    	<div class="col-xs-12 visible-xs text-right" style="color: #FFF; margin-top: 13px; padding-right: 23px;">
            	  <span style="font-size: 1.7rem;">Controle Operacional Diário</span>
           	</div>
          
            	            
	       <img class="img-responsive" src="http://172.17.119.40/operacional/images/logomar cbmce texto governo do estado 2019.redimensionado.png" style="max-height: 73px; z-index: 1; position: absolute; left: 23px; top: 27px;">
	    </div>
	    <!-- Fim do Topo mobile -->
	    
	
	    <!--  Logo -->
	    <div class="row" style="background-color: #FFF;">
	
	        <div class="col-md-6 col-lg-6 visible-md visible-lg">
	            <img src="http://172.17.119.40/operacional/images/cabecalho_aplicacao.png" style="max-height: 76px;">
	        </div>
	
	        <div class="col-sm-12 col-md-6 col-lg-6 text-right hidden-xs hidden-sm" id="logo_right" style="padding-right:25px;">
				Controle Operacional Diário<br><span style="font-size: 1.3rem;">Versão 2.0 alfa 2</span>
	        </div>
	
	    </div>
	    <!-- Fim do Logo -->
	
	</div>
       
  
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        <!-- 
          <a class="navbar-brand" href="http://172.17.119.40/operacional/">SGP-AESP</a>
           -->
           
        </div>
        
        
        <div id="navbar" class="collapse navbar-collapse"  style="marging-top: 70px; ">
          <ul class="nav navbar-nav navbar-left">
          
            <li class=""><a href="http://172.17.119.40/operacional/index.php/dashboard/limpar" class="loading"><i class="fa fa-home fa-lg" aria-hidden="true"></i> Início</a></li>
            
            
            <li class="dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog fa-lg" aria-hidden="true"></i> Serviço <span class="caret"></span></a>
              <ul class="dropdown-menu">

				<li class=""><a href="http://172.17.119.40/operacional/index.php/servico" class="loading">Meus Serviços</a></li>
				<li class=""><a href="http://172.17.119.40/operacional/index.php/servico/form_1_identificacao" class="loading">Registrar Serviço</a></li>
                
              </ul>
            </li>
            

                        
            <li><a href="#modalSobre" data-toggle="modal"><i class="fa fa-question-circle-o fa-lg" aria-hidden="true"></i> Sobre</a></li>

          </ul>
          
          
          <ul class="nav navbar-nav navbar-right">

           
            <li class="dropdown  ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> CAIRO SILVA <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <!-- 
                <li class=""><a href="http://172.17.119.40/operacional/index.php/usuario/perfil">Meu cadastro</a></li>
                <li class=""><a href="http://172.17.119.40/operacional/index.php/usuario/alt_senha">Minha senha</a></li>
                 -->
                <li><a href="http://172.17.119.40/operacional/index.php/login/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>
                
                

              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
        
      </div>
    </nav>
   
    
<div class="modal" id="modal_loading" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h3 class="modal-title" id="myModalLabel"><span class="label label-primary">Aguarde</span></h3>
      </div>
      <div class="modal-body">
          <div class="text-center" style="padding-top: 50px; padding-bottom: 50px;">
                    	<img src="http://172.17.119.40/operacional/images/preloader_3.gif">
      	  </div>
      </div>
    </div>
  </div>
</div>
	

<div class="modal" id="modalSobre" tabindex="-1" role="dialog" aria-labelledby="modalSobre" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
        <h4 class="modal-title">
        	Controle Operacional Diário        </h4>
      </div>
      <div class="modal-body modal-guts">
			<p><strong>Objetivo:</strong></p>
			<p class="text-justify">
			
				Proporcionar ao Comando de Bombeiros da Capital uma ferramenta de fácil utilização, que permita o cadastro de informações padronizadas acerca dos serviços operacionais e que possibilite consultas ágeis, proporcionando aos gestores da instituição uma melhor visão para planejamento, adequação e tomada de decisões.
			
			</p>
      </div>
      <div class="modal-footer">
      
		<div class="col-md-6 text-left" style="color:#888">
			<!-- 
			<a href="files/COD_manual.pdf" target="_blank" class="btn btn-primary">Leia o manual</a>
			 -->
			
		</div>
		      
		<div class="col-md-6 text-right">
			<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>      
		</div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid conteudo"> 
<link href="http://172.17.119.40/operacional/assets/bootstrap/css/AdminLTE.css" rel="stylesheet">
<link href="http://172.17.119.40/operacional/assets/google_maps/maps.css" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="http://172.17.119.40/operacional/assets/datepicker/datepicker3.css" rel="stylesheet">
<script src="http://172.17.119.40/operacional/assets/datepicker/bootstrap-datepicker.js"></script>
<script src="http://172.17.119.40/operacional/assets/datepicker/locales/bootstrap-datepicker.pt-BR.js"></script>

<!-- highcharts -->
<script src="http://172.17.119.40/operacional/assets/highcharts/code/highcharts.js"></script>
<script src="http://172.17.119.40/operacional/assets/highcharts/code/modules/exporting.js"></script>

<link href="http://172.17.119.40/operacional/assets/lib/datatables/buttons.dataTables.min.css" rel="stylesheet">
<script src="http://172.17.119.40/operacional/assets/lib/datatables/dataTables.buttons.min.js"></script>
<script src="http://172.17.119.40/operacional/assets/lib/datatables/jszip.min.js"></script>
<script src="http://172.17.119.40/operacional/assets/lib/datatables/buttons.html5.min.js"></script>
<script src="http://172.17.119.40/operacional/assets/lib/datatables/buttons.print.min.js"></script>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<style>


</style>

<section class="content">

<div class="row">

		<div class="col-md-12">
		 
		<div class="box box-primary" id="boxEstatisticas">

			<div class="box-header with-border">
				
				<h3 class="box-title"><i class="fa fa-map-marker"></i> Estatísticas mapeadas</h3>


			</div>
			<!-- /.box-header -->

			<div class="box-body">
			
        <div class="row">
              
            <div class="col-md-2 col-sm-3">
              
              <div class="pad box-pane-left col-sm-12" style="min-height: 380px; background-color: #e2e4e9;" id="painelControle">
                        
                <form role="form" action="http://172.17.119.40/operacional/index.php/statistics" method="post">
               
                                                <div class="row" >
                          <div class="col-sm-12 text-center">
                                <a href="http://172.17.119.40/operacional/index.php/dashboard/limpar" class="btn btn-app loading " style="margin: 0px 10px 10px 10px">
                                  <i class="fa fa-dashboard"></i> Equipes
                                </a>
                              
                                <a href="http://172.17.119.40/operacional/index.php/statistics" class="btn btn-app loading bg-blue" style="margin: 0px 10px 10px 10px;">
                                  <i class="fa fa-map-marker"></i> Ocorrências
                                </a>
                            </div>
                        </div>
                    
                            <ul class="list-group">
                            
                            	<li class="list-group-item ">

                                    <label class="control-label" for="campoDataIni">Data inicial:</label>
                                    <input type="text" class="form-control datepicker"  name="campoDataIni" placeholder="Data inicial" value="04/11/2020">

                            	</li>
                            	
                            	<li class="list-group-item ">

                                    <label class="control-label" for="campoDataFim">Data final</label>
                                    <input type="text" class="form-control datepicker" name="campoDataFim" placeholder="Data final" value="04/11/2020">
 
                            	</li>
                            	
                            	<li class="list-group-item">
                			          <label class="control-label">Região</label>
                			   
                                  <select name="campoRegiao" id="campoRegiao" class="selectpicker show-tick" data-live-search="false" data-width="100%" data-container="body">
<option value="1">CAPITAL</option>
<option value="2">CAPITAL + REGIÃO METROPOLITANA</option>
<option value="3" selected="selected">CEARÁ</option>
</select>
                              </li>
                            
                            	<li class="list-group-item">
                			          <label class="control-label">Categoria de ocorrência</label>
                			   
                                  <select name="campoCategoriaOco" id="campoCategoriaOco" class="selectpicker show-tick" data-live-search="false"  data-size="5" data-width="100%" data-container="body">
<option value="all" selected="selected"> TODAS</option>
<option value="7">ADMINISTRATIVA</option>
<option value="4">APH</option>
<option value="1">INCÊNDIO</option>
<option value="3">INCÊNDIO E/OU SALVAMENTO</option>
<option value="5">PREVENÇÃO</option>
<option value="2">SALVAMENTO</option>
<option value="6">VISTORIA</option>
</select>
                              </li>
                            
                            	<li class="list-group-item">
                    			    <label class="control-label">Tipo de ocorrência</label>
                                  <select name="campoTipoOco" id="campoTipoOco" class="selectpicker show-tick" data-live-search="true"  data-size="7" data-width="100%" data-container="body">
<option value="all" selected="selected"> TODAS</option>
<option value="25">ABASTECIMENTO</option>
<option value="126">ADMINISTRATIVA</option>
<option value="127">ADMINISTRATIVA ENVOLVENDO FUNCIONÁRIO TERCEIRIZADO</option>
<option value="94">AFOGAMENTO EM ÁGUA DOCE</option>
<option value="95">AFOGAMENTO EM ÁGUA SALGADA</option>
<option value="72">AQUECIMENTO DE CALDEIRA</option>
<option value="73">AQUECIMENTO DE CILINDRO </option>
<option value="74">AQUECIMENTO DE ELETRODOMÉSTICO/ELETROELETRÔNICO/PANELA</option>
<option value="23">AQUECIMENTO DE EQUIPAMENTO</option>
<option value="118">ARROMBAMENTO EM COMPARTIMENTO</option>
<option value="106">ATAQUE DE ENXAME</option>
<option value="102">CAPTURA/CONTENSÃO/RETIRADA DA VIA DE ANIMAL</option>
<option value="80">COLISÃO DE AERONAVE</option>
<option value="82">COLISÃO DE EMBARCAÇÃO</option>
<option value="81">COLISÃO DE TREM/METRÔ</option>
<option value="79">COLISÃO DE VEÍCULO</option>
<option value="84">COLISÃO DE VEÍCULO COM ANIMAL PRESO EM FERRAGEM</option>
<option value="119">COLOCAÇÃO DE MATERIAL (ADRIÇA/LUMINÁRIA/OUTROS)</option>
<option value="103">CONDUÇÃO/REMOÇÃO/RESGATE DE ANIMAL DOMESTICO</option>
<option value="105">CONDUÇÃO/REMOÇÃO/RESGATE DE ANIMAL MARINHO</option>
<option value="104">CONDUÇÃO/REMOÇÃO/RESGATE DE ANIMAL SELVAGEM</option>
<option value="93">CONTENÇÃO/CONDUÇÃO DE PACIENTE NEUROLÓGICO</option>
<option value="110">CORTE/PODA DE ÁRVORE EM PERIGO</option>
<option value="24">CORTEJO</option>
<option value="99">DESABAMENTO</option>
<option value="97">DESMORONAMENTO/DESLIZAMENTO/SOTERRAMENTO</option>
<option value="125">DISCIPLINAR</option>
<option value="101">ESTIAGEM/SECA</option>
<option value="13">EXPLOSÃO</option>
<option value="71">EXPLOSÃO DE ARTEFATO/MUNIÇÃO</option>
<option value="70">EXPLOSÃO DE CALDEIRA</option>
<option value="69">EXPLOSÃO DE GÁS</option>
<option value="107">EXTERMÍNIO DE ENXAME</option>
<option value="77">FALSO AVISO DE OCORRÊNCIA (TROTE)</option>
<option value="15">FOGO EM MONTURO</option>
<option value="17">GÁS</option>
<option value="18">INCÊNDIO EM AERONAVE</option>
<option value="37">INCÊNDIO EM AGÊNCIA BANCÁRIA</option>
<option value="30">INCÊNDIO EM ASILO</option>
<option value="45">INCÊNDIO EM AUDITÓRIO</option>
<option value="49">INCÊNDIO EM CASA</option>
<option value="43">INCÊNDIO EM CINEMA</option>
<option value="46">INCÊNDIO EM CIRCO</option>
<option value="48">INCÊNDIO EM CLUBE</option>
<option value="9">INCÊNDIO EM CLÍNICA</option>
<option value="40">INCÊNDIO EM CLÍNICA/CONSULTÓRIO</option>
<option value="5">INCÊNDIO EM CRECHE</option>
<option value="12">INCÊNDIO EM DEPÓSITO INFLAMÁVEL</option>
<option value="55">INCÊNDIO EM DISTRIBUIDORA DE GLP</option>
<option value="33">INCÊNDIO EM EDIFICAÇÃO COMERCIAL </option>
<option value="34">INCÊNDIO EM EDIFICAÇÃO INDUSTRIAL</option>
<option value="35">INCÊNDIO EM EDIFICAÇÃO MISTA (RESIDENCIAL E COLETIVA)</option>
<option value="36">INCÊNDIO EM EDIFICAÇÃO PÚBLICA</option>
<option value="19">INCÊNDIO EM EMBARCAÇÃO</option>
<option value="4">INCÊNDIO EM ESCOLA</option>
<option value="51">INCÊNDIO EM ESTÁDIO</option>
<option value="10">INCÊNDIO EM GARAGEM</option>
<option value="52">INCÊNDIO EM GINÁSIO</option>
<option value="7">INCÊNDIO EM HOSPITAL</option>
<option value="38">INCÊNDIO EM HOSPITAL</option>
<option value="31">INCÊNDIO EM HOTEL </option>
<option value="8">INCÊNDIO EM LABORATÓRIO</option>
<option value="11">INCÊNDIO EM LOCAL DE REUNIÃO DE PÚBLICO</option>
<option value="50">INCÊNDIO EM MICARETA</option>
<option value="61">INCÊNDIO EM MONTURO</option>
<option value="47">INCÊNDIO EM PARQUE DIVERSÃO</option>
<option value="29">INCÊNDIO EM PENSIONATO </option>
<option value="2">INCÊNDIO EM PONTO COMERCIAL</option>
<option value="54">INCÊNDIO EM POSTO DE COMBUSTÍVEL</option>
<option value="32">INCÊNDIO EM POUSADA</option>
<option value="22">INCÊNDIO EM PRESÍDIO</option>
<option value="6">INCÊNDIO EM PRÉDIO PÚBLICO</option>
<option value="44">INCÊNDIO EM TEATRO</option>
<option value="53">INCÊNDIO EM TEMPLO RELIGIOSO</option>
<option value="3">INCÊNDIO EM UNIDADE MISTA (RESIDENCIAL E COLETIVA)</option>
<option value="16">INCÊNDIO EM VEGETAÇÃO</option>
<option value="60">INCÊNDIO EM VEGETAÇÃO EM LOCAL PRIVADO</option>
<option value="59">INCÊNDIO EM VEGETAÇÃO EM LOCAL PÚBLICO</option>
<option value="58">INCÊNDIO EM VEGETAÇÃO EM ÁREA DE PRESERVAÇÃO AMBIENTAL</option>
<option value="14">INCÊNDIO EM VEÍCULO</option>
<option value="57">INCÊNDIO EM VEÍCULO DE TRANSPORTADORA </option>
<option value="56">INCÊNDIO EM VEÍCULO PARTICULAR</option>
<option value="20">INCÊNDIO FERROVIÁRIO</option>
<option value="28">INCÊNDIO MULTIFAMILIAR</option>
<option value="1">INCÊNDIO RESIDENCIAL</option>
<option value="27">INCÊNDIO UNIFAMILIAR</option>
<option value="100">INUNDAÇÃO/ENCHENTE</option>
<option value="78">OCORRÊNCIA CANCELADA</option>
<option value="121">OCORRÊNCIA COM BOMBEIRO MILITAR SENDO ACUSADO</option>
<option value="120">OCORRÊNCIA COM BOMBEIRO MILITAR SENDO VÍTIMA</option>
<option value="26">OUTROS</option>
<option value="122">PREVENÇÃO AQUÁTICA </option>
<option value="75">PREVENÇÃO CONTRA INCÊNDIO EM EVENTOS</option>
<option value="123">PREVENÇÃO DE BUSCA E SALVAMENTO EM EVENTOS</option>
<option value="21">PRODUTOS PERIGOSOS</option>
<option value="114">QUEDA DE FIO ENERGIZADO EM IMÓVEL</option>
<option value="113">QUEDA DE FIO ENERGIZADO EM VIA PÚBLICA</option>
<option value="109">QUEDA DE ÁRVORE EM IMÓVEL</option>
<option value="108">QUEDA DE ÁRVORE EM VIA PÚBLICA</option>
<option value="115">RECUPERAÇÃO DE BENS</option>
<option value="116">RECUPERAÇÃO DE BENS EM ALTURA</option>
<option value="117">RECUPERAÇÃO DE BENS EM MEIO AQUÁTICO</option>
<option value="92">RESGATE DE CADÁVER</option>
<option value="90">RESGATE DE VÍTIMA ADULTA DESAPARECIDO</option>
<option value="91">RESGATE DE VÍTIMA CRIANÇA/ADOLESCENTE DESAPARECIDO</option>
<option value="88">RESGATE DE VÍTIMA DE SUICÍDIO</option>
<option value="86">RESGATE DE VÍTIMA EM POÇO/CACIMBA/VALA/GALERIA</option>
<option value="89">RESGATE DE VÍTIMA EM REGIÃO INÓSPITA</option>
<option value="87">RESGATE DE VÍTIMA EM TENTATIVA DE SUICÍDIO</option>
<option value="85">RESGATE DE VÍTIMA PRESA EM ELEVADOR</option>
<option value="98">RISCO DE DESABAMENTO</option>
<option value="96">RISCO DE DESMORONAMENTO/DESLIZAMENTO/SOTERRAMENTO</option>
<option value="124">SIMULADO DE BUSCA E SALVAMENTO</option>
<option value="76">SIMULADO EM COMBATE A INCÊNDIO</option>
<option value="66">VAZAMENTO DE GLP COM FOGO</option>
<option value="67">VAZAMENTO DE GNV COM FOGO</option>
<option value="68">VAZAMENTO DE GÁS OUTROS COM FOGO</option>
<option value="112">VERIFICAÇÃO DE ÁRVORE EM IMÓVEL</option>
<option value="111">VERIFICAÇÃO DE ÁRVORE EM VIA PÚBLICA</option>
<option value="129">VISTORIA FISCALIZADORA</option>
<option value="128">VISTORIA PREVENTIVA</option>
<option value="83">VÍTIMA PRESA EM MAQUINÁRIO/EQUIPAMENTO</option>
</select>
                              	</li>
                            
                                <li class="list-group-item">
                                                                    <label class="control-label">Unidades CTDH </label>
                                  <div class="material-switch pull-right">
                                      <input id="quarteisSwitch" name="quarteisSwitch" type="checkbox" />
                                      <label for="quarteisSwitch" class="label-primary"></label>
                                  </div>
                                </li>
                			  
                                <li class="list-group-item">
                                                                      <label class="control-label">JBV</label>
                                    <div class="material-switch pull-right">
                                        <input id="hidrantesSwitch" name="hidrantesSwitch" type="checkbox" />
                                        <label for="hidrantesSwitch" class="label-primary"></label>
                                    </div>
                                </li>
                              
                                <li class="list-group-item">
                                                                        <label class="control-label">Projeto Saúde</label>
                                    <div class="material-switch pull-right">
                                        <input id="municipiosSwitch" name="municipiosSwitch" type="checkbox" />
                                        <label for="municipiosSwitch" class="label-primary"></label>
                                    </div>
                                </li>
                              
                                <li class="list-group-item">
                                                                        <label class="control-label">AIS Ceará</label>
                                    <div class="material-switch pull-right">
                                        <input id="aisCESwitch" name="aisCESwitch" type="checkbox" />
                                        <label for="aisCESwitch" class="label-primary"></label>
                                    </div>
                                </li>
                			  	
                                <li class="list-group-item">
                                  <div class="row">
                                      <div class="col-md-6 text-center">
                                          <a href="http://172.17.119.40/operacional/index.php/statistics/limpar" class="btn btn-default loading"><i class="fa fa-eraser" aria-hidden="true"></i> Limpar filtros</a>
                                      </div>
                                  
                                      <div class="col-md-6 text-center">
                                          <button type="submit" class="btn btn-primary loading">Filtrar <i class="fa fa-filter" aria-hidden="true"></i></button>
                                      </div>
                                  </div>
                                </li>

                			     </ul>
 
                        </form>
                      </div>

                </div>
                <!-- /.col -->

                <div class="col-md-7 col-sm-6">
	
                  <div id="map" style="max-height: 450px;">
                    <!-- Map will be created here -->
                  </div>
                </div>
                <!-- /.col -->


                <div class="col-md-3 col-sm-3">

                      <div class="row">
                          <div class="col-xs-12">
                              <!-- STEP WIZARD -->
                              <div id="stepWizard" style="margin-bottom: 4px;">
                                  <div class="row bs-wizard" style="border-bottom:0; display: flex; justify-content: center;">
                                  
                                          <div class="col-xs-6 bs-wizard-step complete">
                                            <div class="text-center bs-wizard-stepnum">Data inicial</div>
                                            <div class="progress"><div class="progress-bar"></div></div>
                                            <a href="#" class="bs-wizard-dot"></a>
                                            <div class="bs-wizard-info text-center" style="color: #333;">04/11/2020</div>
                                          </div>
                                          
                                          <div class="col-xs-6 bs-wizard-step active"><!-- complete -->
                                            <div class="text-center bs-wizard-stepnum">Data final</div>
                                            <div class="progress"><div class="progress-bar"></div></div>
                                            <a href="#" class="bs-wizard-dot"></a>
                                            <div class="bs-wizard-info text-center">04/11/2020</div>
                                          </div>
                                          
                                  </div>
                              </div>
                              <!-- FIM DO WIZARD -->
                          </div>
                      </div>

                      <div class="row">

                       <div class="col-xs-12">


						<div class="table-responsive">
                        <table class="table table-hover table-striped table-condensed" id="tabela_municipios" style="font-size: 0.9em">
                          <thead>
                            <tr>
                              <th class="col-xs-1">#</th>
                              <th class="col-xs-5">Município</th>
                              <th class="col-xs-4 text-center">Qtd.</th>
                              <th class="col-xs-2 text-center">%</th>
                            </tr>
                          </thead>

                          <tbody>
                        
                          <tr>
                                                        <td class="col-xs-1">1</td>
                                                        <td class="col-xs-5"> FORTALEZA </td>
                                                        <td class="col-xs-2 text-center">1</td>
                                                        <td class="col-xs-4 text-center"><span class="badge bg-red">100%</span></td>
                                                      </tr>                          </tbody>
                      </table>
                      </div>

                    </div>

                  </div>

                  <div class="row">
                    <div class="col-xs-12">
                      <div class="well well-sm text-center lead">TOTAL: 1</div>
                    </div>
                  </div>
               
                  <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <!--
                        <p>
                          <strong>Categorias e quantidades de ocorrências</strong>
                        </p>
                          -->
                                                    <div class="progress-group">
                            <span class="progress-text"><img src="http://172.17.119.40/operacional/images/flame.png" style="max-height: 16px;"> INCÊNDIO</span>
                            <span class="progress-number"><b>1</b>/1</span>

                            <div class="progress sm">
                              <div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 100%; background-color: #EC0101 !important; background-image: none"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            <span class="progress-text"><i class="fa fa-lg fa-map-marker text-orange"></i> SALVAMENTO</span>
                            <span class="progress-number"><b>0</b>/1</span>

                            <div class="progress sm">
                              <div class="progress-bar progress-bar-warning" style="width: 0%; background-color: #E77E3E !important;"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            <span class="progress-text"><i class="fa fa-lg fa-map-marker text-light-blue"></i> VISTORIAS</span>
                            <span class="progress-number"><b>0</b>/1</span>

                            <div class="progress sm">
                              <div class="progress-bar progress-bar-primary" style="width: 0%; background-color: #3c8dbc !important; background-image: none"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            <span class="progress-text"><i class="fa fa-lg fa-map-marker text-red"></i> OUTRAS</span>
                            <span class="progress-number"><b>0</b>/1</span>

                            <div class="progress sm">
                              <div class="progress-bar" style="width: 0%; background-color: #dd4b39 !important; background-image: none"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                    </div>
                  </div>
            
                </div>
                
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            
            
            
            <div class="box-footer">
              <div class="row">
               
              </div>
              <!-- /.row -->
            </div>
			

		</div>
		
		</div>

</div>
 
   
<div class="box box-success">

    <div class="box-header with-border">
        <h3 class="box-title" style="font-size: 1.7rem;">Ocorrências em <strong>04/11/2020</strong>, <span>11:46.</span></h3>
    </div>

    <div class="box-body">

        <div class="table-responsive">
        
            <table class="table table-bordered table-hover table-striped table-condensed" id="tabela_oco">

                <thead class="bg-verde text-center">

                    <tr class="text-center">
                    	  <th scope="col" class="text-center">Data</th>
                        <th scope="col" class="text-center" style="width: 150px;">Região</th>
                        <th scope="col" class="text-center" style="width: 250px;">Município</th>
                        <th scope="col" class="text-center" style="width: 150px;">OBM</th>
                        <th scope="col" class="text-center" style="width: 300px;">Guarnição</th>
                        <th scope="col" class="text-center" >Categoria</th>
                        <th scope="col" class="text-center" >Tipo</th>
                    </tr>

                </thead>

                <tbody role="alert" aria-live="polite" aria-relevant="all">

                    <tr>

                      <td class="text-center">04/11/2020</td>

                      <td> METROPOLITANA </td>

                      <td>FORTALEZA</td>
                          
                      <td>1ºBBM</td>
                          
                      <td>1ª CIA - QUARTEL CENTRAL 1º SOS</td>

                      <td class="text-center"><span class="label label-danger">INCÊNDIO</span></td>
                          
                      <td class="text-center">INCÊNDIO RESIDENCIAL</td>

                    </tr>
                </tbody>

                <tfoot>
                    <tr class="bg-orange-active">
                        <td colspan="5" class="text-right"><strong>TOTAL</strong></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="bg-verde text-center" style="font-weight: bold;">
                    	  <td class="text-center">Data</td>
                        <td class="text-center">Região</td>
                        <td class="text-center">Município</td>
                        <td class="text-center">OBM</td>
                        <td class="text-center">Guarnição</td>
                        <td class="text-center">Categoria</td>
                        <td class="text-center">Tipo</td>
                    </tr>
                </tfoot>

            </table>

        </div>

    </div>
    <!-- /.box-header -->
    <div class="box-body">

    </div>
    <!-- /.box-body -->
</div>

</section>

<input type="hidden" id="kmlUnidades" value="" /> 

<script>


		var campoRegiao = document.getElementById('campoRegiao').value;

        var zoomDefault = '12'; 
        var centerLatDefault = -3.77; 
        var centerLngDefault = -38.53;
     
        function initMap(unidades = false, hidrantes = false, municipios = false, aisce = false, mapZoom = zoomDefault, centerLat = centerLatDefault, centerLng = centerLngDefault) {

          var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng(centerLat, centerLng),
            zoom: parseFloat(mapZoom)
          });

          if(unidades != false){
            var kmlLayer = new google.maps.KmlLayer({
             // url: 'http://sentinela.cb.ce.gov.br/operacional/js/unidades_cbmce.kmz',
              url: 'https://github.com/cairorib/mapa2/raw/master/psbs.kmz',
              suppressInfoWindows: false,
              preserveViewport: true,
              map: map
            });
          }

          if(hidrantes != false){
            var kmlLayer = new google.maps.KmlLayer({
              url: 'https://github.com/cairorib/mapa2/raw/master/jbv.kmz',
              suppressInfoWindows: false,
              preserveViewport: false,
              map: map
            });
          }

          if(municipios != false){
            var kmlLayer = new google.maps.KmlLayer({
              url: 'https://github.com/cairorib/mapa2/raw/master/projeto%20cbmce.kmz',
              suppressInfoWindows: false,
              preserveViewport: true,
              map: map
            });
          }

          if(aisce != false){
            var kmlLayer = new google.maps.KmlLayer({
              url: 'http://sentinela.cb.ce.gov.br/operacional/js/AIS_CEARA.kmz',
              suppressInfoWindows: false,
              preserveViewport: false,
              map: map
            });
          }


        var infoWindow = new google.maps.InfoWindow;


        function addMarker(lat, lng) {
            var myLatLng = new google.maps.LatLng(lat, lng);
                    marker = new google.maps.Marker({
                    position: myLatLng,
                            map: map
                    });
            }
        $.getJSON('http://172.17.119.40/operacional/index.php/statistics/get_markers_ajax', function(json){

                    $.each(json, function(id, data){
                        
                    	  var id = data.id;
                          var name = data.name;
                          var address = data.address;
                          var type = data.type;
                          var point = new google.maps.LatLng(
                                parseFloat(data.lat),
                                parseFloat(data.lng)
                          );
                       
                         var iconBase = 'http://172.17.119.40/operacional/images/' + type;

                         var imageUrl = 'http://172.17.119.40/operacional/images/pin_red_4.png';
                         if(type != ''){
                           var imageUrl = iconBase;
                         }
                         const image = {
                           url: imageUrl,
                         }

                         var site_url = 'http://172.17.119.40/operacional/index.php/ocorrencia/view';

                         const contentString =
                           '<div id="content">' +
                             '<div id="siteNotice">' +
                             "</div>" +
                             '<h5 id="firstHeading" class="firstHeading"><a href="'+ site_url +'/' + id + '">'+name+'</a></h5>' +
                             '<div id="bodyContent">' +
                               "<p>"+address+"</p>" +
                             "</div>" +
                           "</div>";
                           
                         const infowindow = new google.maps.InfoWindow({
                           content: contentString,
                         });
                         
                         var marker = new google.maps.Marker({
                           map: map,
                           position: point,
                           icon: image,
                         });

                         marker.addListener('click', function() {
                           infowindow.open(map, marker);
                         });
                    
                    });
             });
        
            // Change this depending on the name of your PHP or XML file
            /*
            downloadUrl('http://172.17.119.40/operacional/index.php/statistics/get_markers', function(data) {
                
                var xml = data.responseXML;
                var markers = xml.documentElement.getElementsByTagName('marker');
    
                Array.prototype.forEach.call(markers, function(markerElem) {

                var id = markerElem.getAttribute('id');
                var name = markerElem.getAttribute('name');
                var address = markerElem.getAttribute('address');
                var type = markerElem.getAttribute('type');
                var point = new google.maps.LatLng(
                      parseFloat(markerElem.getAttribute('lat')),
                      parseFloat(markerElem.getAttribute('lng'))
                );

                var iconBase = 'http://172.17.119.40/operacional/images/' + type;

                var imageUrl = 'http://172.17.119.40/operacional/images/pin_red_4.png';
                if(type != ''){
                  var imageUrl = iconBase;
                }
                const image = {
                  url: imageUrl,
                }

                var site_url = 'http://172.17.119.40/operacional/index.php/ocorrencia/view';

                const contentString =
                  '<div id="content">' +
                    '<div id="siteNotice">' +
                    "</div>" +
                    '<h5 id="firstHeading" class="firstHeading"><a href="'+ site_url +'/' + id + '">'+name+'</a></h5>' +
                    '<div id="bodyContent">' +
                      "<p>"+address+"</p>" +
                    "</div>" +
                  "</div>";
                  
                const infowindow = new google.maps.InfoWindow({
                  content: contentString,
                });
                
                var marker = new google.maps.Marker({
                  map: map,
                  position: point,
                  icon: image,
                });

                marker.addListener('click', function() {
                  infowindow.open(map, marker);
                });

            });

          });
        */
   
        }

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}

$(document).ready(function() {

    var unidades = false;
    if ($('#quarteisSwitch').is(':checked') == true) {
      unidades = true;
    }else{
      unidades = false;
    }

    var hidrantes = false;
    if ($('#hidrantesSwitch').is(':checked') == true) {
      hidrantes = true;
    }else{
      hidrantes = false;
    }

    var municipios = false;
    if ($('#municipiosSwitch').is(':checked') == true) {
      municipios = true;
    }else{
      municipios = false;
    }

    var aisce = false;
    if ($('#aisCESwitch').is(':checked') == true) {
      aisce = true;
    }else{
      aisce = false;
    }

    $("#quarteisSwitch").change(function() {
      if(this.checked) {
        unidades = true;
      }else{
        unidades = false;
      }
      initMap(unidades, hidrantes, municipios, aisce);
    });

    $("#hidrantesSwitch").change(function() {
      if(this.checked) {
        hidrantes = true;
      }else{
        hidrantes = false;
      }
      initMap(unidades, hidrantes, municipios, aisce);
    });

    $("#municipiosSwitch").change(function() {
      if(this.checked) {
        municipios = true;
      }else{
        municipios = false;
      }
      // alert(municipios);
      initMap(unidades, hidrantes, municipios, aisce);
    });

    $("#aisCESwitch").change(function() {
      if(this.checked) {
        aisce = true;
      }else{
        aisce = false;
      }
      // alert(municipios);
      initMap(unidades, hidrantes, municipios, aisce);
    });

      var regiao =  $('#campoRegiao').val();

      if(regiao == '1') {
        zoom = '12';
        centerLat = -3.77;
        centerLng = -38.53;
      }

      if(regiao == '2') {
        zoom = '10';
        centerLat = -3.83;
        centerLng = -38.57;
      }

      if(regiao == '3') {
        zoom = '7.5';
        centerLat = -5.07;
        centerLng = -39.27;
      }
      
    $('#campoRegiao').on('change', function() {

      var regiao = this.value;

      var zoom = '12';
      var centerLat = -3.77;
      var centerLng = -38.53;

      if(regiao == '1') {
        zoom = '12';
        centerLat = -3.77;
        centerLng = -38.53;
      }

      if(regiao == '2') {
        zoom = '10';
        centerLat = -3.83;
        centerLng = -38.57;
      }

      if(regiao == '3') {
        zoom = '7.5';
        centerLat = -5.07;
        centerLng = -39.27;
      }
    
    	initMap(unidades, hidrantes, municipios, aisce, zoom, centerLat, centerLng);
    });


    initMap(unidades, hidrantes, municipios, aisce, zoom, centerLat, centerLng);

    var d = new Date(Date.UTC(2020,11,4,11,46,08));
    setInterval(function() {
        d.setSeconds(d.getSeconds() + 1);

        var hora = 11;
        if(hora < 10){
        	hora = '0' + hora;
        }

        var minuto = d.getMinutes();
        if(minuto < 10){
        	minuto = '0' + minuto;
        }

        var segundo = d.getSeconds();
        if(segundo < 10){
        	segundo = '0' + segundo;
        }
        
        $('.time').text((hora +':' + minuto + ':' + segundo ));
    }, 1000);

});

const base_url = "http://172.17.119.40/operacional/";
</script>
<script src="http://172.17.119.40/operacional/js/statistics.js"></script>
<script defer 
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDy5JaVo8RAaEP-9LJH46iboro-J_LFTrM&callback=initMap">
</script></div>

    <footer class="footer" style="z-index: 99999 !important;">
    
      <div class="hidden-xs container text-center" style="font-size: 9pt; line-height: 150%; padding-top: 9px;">
      
      	<span style="color: #ffffff;">Assessoria de Tecnologia da Informação - ATI - (85) 3101-6586</span>
<br><span><strong><a style="color: #ffffcc;" href="http://www.cb.ce.gov.br" target="_blank">Corpo de Bombeiros Militar - CBMCE</a></strong></span>       	
      </div>
      
      <div class="visible-xs container text-center" style="padding-top:7px; z-index: 99999; line-height: 125%; font-size: 0.9em;">
      
      	<div class="col-xs-4">
      		<a href="http://172.17.119.40/operacional/index.php/dashboard" class="loading" style="color: white;"><i class="fa fa-home fa-2x" aria-hidden="true" ></i><br><strong>Início</strong></a>
      	</div>
      	
      	<div class="col-xs-4">
      		<a href="http://172.17.119.40/operacional/index.php/servico" class="loading" style="color: white;"><i class="fa fa-users fa-2x" aria-hidden="true" style="color: white;"></i><br><strong>Serviços</strong></a>
      	</div>
      	
      	<div class="col-xs-4">
      		<a href="#" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="color: white;"><i class="fa fa-bars fa-2x" aria-hidden="true" ></i><br><strong>Menu</strong></a>
      	</div>
      	
      </div>
      
    </footer>
    
	<script>
	    $(document).ready(function(){
		    $('.loading').click(function () {
	    		 $("#modal_loading").modal('show');
	    	});
	    });
    </script>
    
  </body>
</html>