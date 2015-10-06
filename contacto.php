<?php if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = 'Por favor ingrese su nombre.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }
    if(trim($_POST['email']) === '')  {
        $emailError = 'Por favor ingrese su email.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'Dirreción de email invalida.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
    if(trim($_POST['telefono']) === '') {
        $telError = 'Por favor ingrese su teléfono.';
        $hasError = true;
    } else {
        $telefono = trim($_POST['telefono']);
    }
    if(trim($_POST['asunto']) === '') {
        $asuntoError = 'Por favor ingrese un asunto.';
        $hasError = true;
    } else {
        $asunto = trim($_POST['asunto']);
    }
    if(trim($_POST['comments']) === '') {
        $commentError = 'Por favor ingresa un mensaje.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }
    if(!isset($hasError)) {
        $subject = '[Contacto balones Cosmos] - '.$name;
        $body = "Nombre: $name \n\nEmail: $email \n\nTeléfono: $telefono \n\nAsunto: $asunto \n\nComentario: $comments";
        $headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
        mail("info@balonescosmos.com", $subject, $body, $headers);
        $emailSent = true;
    }
} ?>

<!-- Google Code for Form-COTIZA-BCosmos Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 940467947;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "HNIRCLK6h2AQ6825wAM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/940467947/?label=HNIRCLK6h2AQ6825wAM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cosmos</title>
	
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/jquery.rondell.css" type="text/css" media="all" title="Screen">
	<link rel="stylesheet" href="assets/css/styles.css" />
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		<div id="header" class="header-top">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-default" id="menu-header">
					  	<div class="container-fluid">
					  		<div class="col-sm-3 col-md-2">
					  			<div id="logo" class="logo hidden-xs visible-sm-block visible-md-block visible-lg-block">
									<a href="index.html"><img src="assets/img/logo_cosmos.png"></a>
								</div>
								<div id="logo2" class="logo visible-xs-block hidden-sm hidden-md hidden-lg">
									<a href="index.html"><img src="assets/img/logo_cosmos.png"></a>
								</div>
					  		</div>							
							<div class="col-sm-9 col-md-10">							
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-header-collapse" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							    </div>
							    <!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse" id="menu-header-collapse">
							      <ul class="nav navbar-nav navbar-right" id="menu-top">
							        <li class="li-inicio"><a href="index.html">INICIO</a></li>

							        <li class="dropdown visible-xs-block hidden-sm hidden-md hidden-lg">
								         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FÚTBOL <span class="caret"></span></a>
								         <ul class="dropdown-menu futbol-dropdown">
								            <li class="li-futbol"><a href="futbol.html?type=no_5">NÚMERO CINCO</a></li>
									        <li class="li-fsala"><a href="futbol.html?type=no_4">NÚMERO CUATRO</a></li>
									        <li class="li-fsalon"><a href="futbol.html?type=no_3_infantil">NÚMERO TRES</a></li>
									        <li class="li-micro"><a href="futbol.html?type=no_1_infantil">NÚMERO UNO</a></li>
								         </ul>
							        </li>

							        <li class="li-futbol hidden-xs visible-sm-block visible-md-block visible-lg-block">
							        	
							        	<a href="futbol.html">FÚTBOL </a>
								         <ul class="futbol-submenu item-submenu">
								            <li class="sub-item">
								            	<a class="btn btn-default btn-green btn-tipo" href="futbol.html?type=no_5" data-type="no_5">NÚMERO CINCO</a>
								            </li>
									        <li class="sub-item">
									        	<a class="btn btn-default btn-green btn-tipo" href="futbol.html?type=no_4" data-type="no_4">NÚMERO CUATRO</a>
									        </li>
									        <li class="sub-item">
									        	<a class="btn btn-default btn-green btn-tipo" href="futbol.html?type=no_3_infantil" data-type="no_3_infantil">NÚMERO TRES</a>
									        </li>
									        <li class="sub-item">
									        	<a class="btn btn-default btn-green btn-tipo" href="futbol.html?type=no_1_infantil" data-type="no_1_infantil">NÚMERO UNO</a>
									        </li>
								         </ul>
							        </li>

							        <li class="li-fsala visible-xs-block hidden-sm visible-md-block visible-lg-block">
							        	<a href="fsala.html">FÚTBOL SALA</a>
							        </li>

							         <li class="dropdown visible-xs-block hidden-sm hidden-md hidden-lg">
								         <a href="fsalon.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FÚTBOL SALÓN<span class="caret"></span></a>
								         <ul class="dropdown-menu futbol-dropdown">
								            <li class="sub-item">
								            	<a href="fsalon.html?type=masculino" data-type="masculino">MASCULINO</a>
								            </li>
									        <li class="sub-item">
									        	<a href="fsalon.html?type=femenino" data-type="femenino">FEMENINO</a>
									        </li>
									        <li class="sub-item">
									        	<a href="fsalon.html?type=infantil" data-type="infantil">INFANTIL</a>
									        </li>
								         </ul>
							        </li>

							        <li class="li-fsalon hidden-xs visible-sm-block visible-md-block visible-lg-block">
							        	<a href="fsalon.html">FÚTBOL SALÓN</a>
							        	<ul class="fsala-submenu item-submenu">
								            <li class="sub-item">
								            	<a class="btn btn-default btn-green btn-tipo" href="fsalon.html?type=masculino" data-type="masculino">MASCULINO</a>
								            </li>
									        <li class="sub-item">
									        	<a class="btn btn-default btn-green btn-tipo" href="fsalon.html?type=femenino" data-type="femenino">FEMENINO</a>
									        </li>
									        <li class="sub-item">
									        	<a class="btn btn-default btn-green btn-tipo" href="fsalon.html?type=infantil" data-type="infantil">INFANTIL</a>
									        </li>									        
								         </ul>
							        </li>

							        <li class="dropdown visible-xs-block hidden-sm hidden-md hidden-lg">
								         <a href="micro.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MICRO<span class="caret"></span></a>
								         <ul class="dropdown-menu futbol-dropdown">
								            <li class="sub-item">
								            	<a href="micro.html?type=normal" data-type="masculino">MICROFÚTBOL</a>
								            </li>
									        <li class="sub-item">
									        	<a href="micro.html?type=m_aficionado" data-type="femenino">M. AFICIONADO</a>
									        </li>
								         </ul>
							        </li>

							        <li class="li-micro hidden-xs visible-sm-block visible-md-block visible-lg-block">
							        	<a href="micro.html">MICRO</a>
							        	<ul class="microfutbol-submenu item-submenu">
								            <li class="sub-item">
								            	<a class="btn btn-default btn-green" href="micro.html?type=normal">MICROFÚTBOL</a>
								            </li>
									        <li class="sub-item">
									        	<a class="btn btn-default btn-green" href="micro.html?type=m_aficionado">M. AFICIONADO</a>
									        </li>									        
								         </ul>
							        </li>

							        <li class="dropdown visible-xs-block hidden-sm hidden-md hidden-lg">
								         <a href="volleyball.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VOLLEYBALL<span class="caret"></span></a>
								         <ul class="dropdown-menu futbol-dropdown">
								            <li class="sub-item">
								            	<a href="volleyball.html?type=pvc">PVC</a>
								            </li>
									        <li class="sub-item">
									        	<a href="volleyball.html?type=piel_durazno">PIEL DE DURAZNO</a>
									        </li>
								         </ul>
							        </li>

							        <li class="li-volleyball hidden-xs visible-sm-block visible-md-block visible-lg-block">
							        	<a href="volleyball.html">VOLLEYBALL</a>
							        	<ul class="volleyball-submenu item-submenu">
								            <li class="sub-item">
								            	<a class="btn btn-default btn-green" href="volleyball.html?type=pvc">PVC</a>
								            </li>
									        <li class="sub-item">
									        	<a class="btn btn-default btn-green" href="volleyball.html?type=piel_durazno">PIEL DE DURAZNO</a>
									        </li>									        
								         </ul>
							        </li>

							        <li class="dropdown visible-xs-block hidden-sm hidden-md hidden-lg">
								         <a href="baloncesto.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BALONCESTO<span class="caret"></span></a>
								         <ul class="dropdown-menu futbol-dropdown">
								            <li class="sub-item">
								            	<a href="baloncesto.html?type=no_7">NÚMERO SIETE</a>
								            </li>
									        <li class="sub-item">
									        	<a href="baloncesto.html?type=no_6">NÚMERO SEIS</a>
									        </li>
									        <li class="sub-item">
								            	<a href="baloncesto.html?type=no_5">NÚMERO CINCO</a>
								            </li>
									        <li class="sub-item">
									        	<a href="baloncesto.html?type=no_3">NÚMERO TRES</a>
									        </li>
								         </ul>
							        </li>

							        <li class="li-baloncesto hidden-xs visible-sm-block visible-md-block visible-lg-block">
							        	<a href="baloncesto.html">BALONCESTO</a>
							        	<ul class="baloncesto-submenu item-submenu">
								            <li class="sub-item">
								            	<a class="btn btn-default btn-green btn-tipo" data-type="no_7" href="baloncesto.html?type=no_7">NÚMERO SIETE</a>
								            </li>
									        <li class="sub-item">
									        	<a class="btn btn-default btn-green btn-tipo" data-type="no_6" href="baloncesto.html?type=no_6">NÚMERO SEIS</a>
									        </li>	
									        <li class="sub-item">
								            	<a class="btn btn-default btn-green btn-tipo" data-type="no_5" href="baloncesto.html?type=no_5">NÚMERO CINCO</a>
								            </li>
									        <li class="sub-item">
									        	<a class="btn btn-default btn-green btn-tipo" data-type="no_3" href="baloncesto.html?type=no_3">NÚMERO TRES</a>
									        </li>								        
								         </ul>
							        </li>
							        <li class="li-publicitarios"><a href="publicitarios.html">PUBLICITARIOS</a></li>
							        <li class="li-contactenos"><a href="contacto.php">CONTÁCTENOS</a></li>						        
							      </ul>
					
							    </div><!-- /.navbar-collapse -->								
						  	</div><!-- /.container-fluid -->
						</div>
					</nav>
				</div>
			</div>
		</div>

		<div id="body" class="">
			<div id="seccion4">
				<div class="container">	
					<div class="row">
						<div class="col-xs-12" id="titulo-contacto">
							<hr class="line-gray">					
							<label>
								<span class="circle mini-circle-green"></span>
								CONTÁCTENOS
							</label>
							<span class="circle mini-circle-gray"></span>
						</div>
						<div class="col-xs-12">
							<div id="form-content">
								<form class="form-horizontal" id="form-contacto" action="" method="post">

									<?php if(isset($emailSent) && $emailSent == true) { ?>
										
										<div class="col-xs-12">
								  			<div class="row">
								             	<div class="alert alert-success">
								                	<p>Gracias, su mensaje ha sido bien recibido.</p>
								            	</div>
								            </div>
								        </div>

							        <?php } ?>

							        <?php if(isset($hasError) || isset($captchaError)) { ?>

							        	<div class="col-xs-12">
								        	<div class="row">
									       		<div class="alert alert-danger alert-dismissable">
									            	<a class="close" data-dismiss="alert">×</a>
									            	<h4 class="alert-heading">Disculpe, existen algunos errores.</h4>
									            	<p class="error">Por favor inténtalo de nuevo!</p>
									            </div>
									        </div>
								        </div>

							        <?php } ?>

									<div class="col-xs-12">
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
											    	<label class="col-xs-12 col-sm-2 control-label">Nombre</label>
											    	<div class="col-xs-11 col-sm-9">
											      		<input type="text" class="form-control" id="nombre" name="contactName">
											    	</div>											    	
											    	<span class="glyphicon glyphicon-asterisk"></span>									    	
											  	</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label class="col-xs-12 col-sm-2 control-label">Teléfono</label>
											    	<div class="col-xs-11 col-sm-9">
											      		<input type="text" class="form-control" id="telefono" name="telefono">
											    	</div>
											    	<span class="glyphicon glyphicon-asterisk"></span>									    	
											    </div>
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
											    	<label class="col-xs-12 col-sm-2 control-label">Email</label>
											    	<div class="col-xs-11 col-sm-9">
											      		<input type="email" class="form-control" id="email" name="email">
											    	</div>
											    	<span class="glyphicon glyphicon-asterisk"></span>									    	
											  	</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label class="col-xs-12 col-sm-2 control-label">Asunto</label>
											    	<div class="col-xs-11 col-sm-9">
											      		<input type="text" class="form-control" id="asunto" name="asunto">
											    	</div>
											    	<span class="glyphicon glyphicon-asterisk"></span>									    	
											    </div>
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="row" id="form-info-contacto">
													<div class="col-xs-11 col-xs-offset-1 col-sm-9 col-sm-offset-3">	
														<label>
															<span class="glyphicon glyphicon-map-marker"></span>
															Cra. 17 A # 54 – 57 Sur
														</label>
													</div>
													<div class="col-xs-11 col-xs-offset-1 col-sm-9 col-sm-offset-3">	
														<label>
															<span class="glyphicon glyphicon-earphone"></span>
															(571) 7141985 – 2794891 – 3144448829 
														</label>
													</div>
													<div class="col-xs-11 col-xs-offset-1 col-sm-9 col-sm-offset-3">
														<label>
															<span class="glyphicon glyphicon-envelope"></span>
															info@balonescosmos.com
														</label>
													</div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label class="col-xs-12 col-sm-2 control-label">Mensaje</label>
											    	<div class="col-xs-11 col-sm-9">
											      		<textarea class="form-control" id="mensaje" name="comments" rows="6"></textarea>
											    	</div>
											    	<span class="glyphicon glyphicon-asterisk"></span>
												</div>												
											</div>
										</div>
									</div>
									<div class="col-xs-12">
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-sm-offset-6">
												<div class="form-group">
													<div class="col-xs-12">
														<label class="col-xs-12 col-sm-5 control-label required">REQUERIDOS<span class="glyphicon glyphicon-asterisk"></span></label>
														<div class="col-xs-12 col-sm-6" id="boton-cotizar-content">
													    	<button type="submit" class="btn btn-cot" name="submitted">ENVIAR</button>
												    	</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-xs-12" id="scroll-content">
							<div class="scroll-img">
								<img src="assets/img/scroll.png">
							</div>
							<label class="col-xs-12">SCROLL DOWN</label>
						</div>	
					</div>				
				</div>
			</div>
			<div id="seccion5">
				<div class="container">
					<div class="col-xs-12" id="titulo-centro-content">
						<div class="titulo-centro">
							<span class="mini-circle circle-green2 left"></span>
							<span class="mini-circle circle-green2 right"></span>
							<label>FÚTBOL COSMOS</label>
						</div>
					</div>
					<div id="seccion2-cabecera">
					  	<div class="col-xs-12 col-sm-4 col-md-3" id="icons-balls">
					  		<div class="col-xs-8 trapecio-gris">
					  			<label>FÚTBOL</label>
					  			<span class="circle mini-circle-gray"></span>
					  		</div>						  		
					  		<div class="col-xs-4 logo-content">
					  			<img src="assets/img/icono_balon10.png">
					  		</div>
					  	</div>
					  	<div class="col-xs-12 col-sm-8 col-md-9" id="panel-menu3">
						  	<ul class="nav nav-tabs" role="tablist" id="publicitarios">
							    <li role="presentation">
							    	<a class="items-menu3" href="futbol.html?type=no_5">NÚMERO CINCO</a>
							    </li>
							    <li role="presentation">
							    	<a class="items-menu3" href="futbol.html?type=no_4">NÚMERO CUATRO</a>
							    </li>
							    <li role="presentation">
							    	<a class="items-menu3" href="futbol.html?type=no_3_infantil">NÚMERO TRES INFANTIL</a>
							    </li>
							    <li role="presentation">
							    	<a class="items-menu3" href="futbol.html?type=no_1_infantil">NÚMERO UNO INFANTIL</a>
							    </li>							    
						  	</ul>
					  	</div>
				  	</div>

				  	<!-- Tab panes -->
					<div class="col-xs-12" id="tab-items3">
						<div class="row">
						    <div class="col-md-6 col-sm-12 col-xs-12 item-ball3 fdsalon">
						    	<div class="row">
							    	<div class="col-xs-12" id="carousel-content">
							    		<div id="balon-carousel">
							    			<div class="option-balon2">
												<img src="assets/img/icono_balon5.png">
												<div class="option-caption">
													<img class="balon-selected" src="assets/img/icono_selected.png">
													<div class="img-info">
														<div class="info-center">
															<span class="circle micro-circle-green"></span>
															<label>CARIOCA</label>
															<span class="circle micro-circle-green"></span>
														</div>
													</div>
												</div>	
													
											</div>
											<div class="option-balon2">
												<img src="assets/img/icono_balon6.png">
												<div class="option-caption">
													<img class="balon-selected" src="assets/img/icono_selected.png">
													<div class="img-info">
														<div class="info-center">
															<span class="circle micro-circle-green"></span>
															<label>GALAXY</label>
															<span class="circle micro-circle-green"></span>
														</div>
													</div>
												</div>	
											</div>
											<div class="option-balon2">
												<img src="assets/img/icono_balon7.png">
												<div class="option-caption">
													<img class="balon-selected" src="assets/img/icono_selected.png">
													<div class="img-info">
														<div class="info-center">
															<span class="circle micro-circle-green"></span>
															<label>CRIPTON</label>
															<span class="circle micro-circle-green"></span>
														</div>
													</div>
												</div>	
											</div>
											<div class="option-balon2">
												<img src="assets/img/icono_balon8.png">
												<div class="option-caption">
													<img class="balon-selected" src="assets/img/icono_selected.png">
													<div class="img-info">
														<div class="info-center">
															<span class="circle micro-circle-green"></span>
															<label>BORDEAUX</label>
															<span class="circle micro-circle-green"></span>
														</div>
													</div>
												</div>	
											</div>
											<div class="option-balon2">
												<img src="assets/img/icono_balon9.png">
												<div class="option-caption">
													<img class="balon-selected" src="assets/img/icono_selected.png">
													<div class="img-info">
														<div class="info-center">
															<span class="circle micro-circle-green"></span>
															<label>ESCUDOS</label>
															<span class="circle micro-circle-green"></span>
														</div>
													</div>
												</div>	
											</div>
							    		</div>
							    	</div>
							    	<div class="col-xs-12">
								    	<p class="info-cotizar">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 				    		
								    	</p>
							    	</div>
						    	</div>
						    </div>	
						    
						    <div class="col-md-3 col-sm-4 col-xs-12 item-ball3 volleiyball">
						    	<div class="img-cover">
						    		<img src="assets/img/futbol/no_5/carioca/amarillo.png">
						    		<div class="img-info2">
						    			<div class="img-info2-content">
						    				<span class="circle micro-circle-green"></span>
						    				<label>CARIOCA</label>
						    				<span class="circle micro-circle-green"></span>
						    			</div>							    			
						    		</div>
						    	</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-xs-12 item-ball3 baloncesto">
						    	<div class="img-cover top-right">
						    		<img class="" src="assets/img/futbol/no_5/galaxy/blanco.png">
						    		<div class="img-info2">
						    			<div class="img-info2-content">
						    				<span class="circle micro-circle-green"></span>
						    				<label>GALAXY</label>
						    				<span class="circle micro-circle-green"></span>
						    			</div>							    			
						    		</div>
						    	</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-xs-12 item-ball3 volleiyball">
						    	<div class="img-cover bottom-left">
						    		<img class="" src="assets/img/futbol/no_5/cripton/blanco.png">
						    		<div class="img-info2">
						    			<div class="img-info2-content">
						    				<span class="circle micro-circle-green"></span>
						    				<label>CRIPTON</label>
						    				<span class="circle micro-circle-green"></span>
						    			</div>							    			
						    		</div>
						    	</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-xs-12 item-ball3 baloncesto">
						    	<div class="img-cover">
						    		<img src="assets/img/futbol/no_5/bordeaux/bordeaux.png">
						    		<div class="img-info2">
						    			<div class="img-info2-content">
						    				<span class="circle micro-circle-green"></span>
						    				<label>BORDEAUX</label>
						    				<span class="circle micro-circle-green"></span>
						    			</div>							    			
						    		</div>
						    	</div>
						    </div>										
							
						    <div class="col-md-3 col-sm-4 col-xs-12 item-ball3 fdsalon">
						    	<div class="img-cover">
						    		<img src="assets/img/futbol/no_5/escudos/real-madrid.png">
						    		<div class="img-info2">
						    			<div class="img-info2-content">
						    				<span class="circle micro-circle-green"></span>
						    				<label>ESCUDOS</label>
						    				<span class="circle micro-circle-green"></span>
						    			</div>							    			
						    		</div>
						    	</div>
						    </div>
						    <div class="col-md-3 col-sm-4 col-xs-12 item-ball3 maficionados">
						    	<div class="img-cover bottom-right">
						    		<img class="" src="assets/img/futbol/no_5/escudos/millonarios.png">
						    		<div class="img-info2">
						    			<div class="img-info2-content">
						    				<span class="circle micro-circle-green"></span>
						    				<label>ESCUDOS</label>
						    				<span class="circle micro-circle-green"></span>
						    			</div>							    			
						    		</div>
						    	</div>
						    </div>
						</div>
					</div>  
					
				</div>
			</div>
			<div id="seccion6">
				<div class="container">
					<div class="row">
					  	<!-- Nav tabs -->
					  	<div class="col-xs-12" id="tab-items2">
							<div class="row">
							  	<div class="col-xs-12" id="seccion2-cabecera">
								  	<div class="col-xs-12 col-sm-4 col-md-3" id="icons-balls">
								  		<div class="col-xs-4 logo-content">
								  			<img src="assets/img/icono_balon1.png">
								  		</div>
								  		<div class="col-xs-4 logo-content">
								  			<img src="assets/img/icono_balon2.png">
								  		</div>
								  		<div class="col-xs-4 logo-content">
								  			<img src="assets/img/icono_balon3.png">
								  		</div>
								  	</div>
								  	<div class="col-xs-12 col-sm-8 col-md-9" id="panel-menu">
									  	<ul class="nav nav-tabs" role="tablist" id="otros-cosmos">
										    <li role="presentation">
										    	<a class="items-menu1" href="volleyball.html">VOLLEYBALL</a>
										    </li>
										    <li role="presentation">
										    	<a class="items-menu1" href="baloncesto.html">BALONCESTO</a>
										    </li>
										    <li role="presentation">
										    	<a class="items-menu1" href="fsalon.html">FÚTBOL DE SALÓN</a>
										    </li>
										    <li role="presentation">
										    	<a class="items-menu1" href="micro.html?type=m_aficionado">M. AFICIONADO</a>
										    </li>
										    <li role="presentation">
										    	<a class="items-menu1" href="medicinal.html">MEDICINALES</a>
										    </li>
									  	</ul>
								  	</div>
							  	</div>

							  	<!-- Tab panes -->
								<div class="col-xs-12" id="tab-items">
									<div class="row">
										
									    <div class="col-md-3 col-sm-4 col-xs-12 item-ball volleiyball" data-prueba="volleiyball">
									    	<div class="img-cover top-left bottom-left">
									    		<img class="" src="assets/img/volleyball/pvc/pvc.png">
									    		<div class="img-info2">
									    			<div class="img-info2-content">
									    				<a href="volleyball.html">
										    				<span class="circle micro-circle-green"></span>
										    				<label>PVC</label>
										    				<span class="circle micro-circle-green"></span>
									    				</a>
									    			</div>							    			
									    		</div>
									    	</div>
									    </div>
									    <div class="col-md-3 col-sm-4 col-xs-12 item-ball baloncesto" data-prueba="baloncesto">
									    	<div class="img-cover">								    		
									    		<img src="assets/img/baloncesto/no_7/galaxy.png">
									    		<div class="img-info1">
									    			<div class="col-xs-5">
									    				<label>BALONCESTO</label>
									    			</div>
									    			<div class="col-xs-7">
									    				<div class="row">
									    					<div class="circle-space">
									    						<a href="baloncesto.html?type=no_7">
									    							<span class="circle2 circle-green">7</span>
									    						</a>
									    					</div>
									    					<div class="circle-space">
									    						<a href="baloncesto.html?type=no_6">
										    						<span class="circle2 circle-green">6</span>
										    					</a>
									    					</div>
									    					<div class="circle-space">
									    						<a href="baloncesto.html?type=no_5">
									    							<span class="circle2 circle-green">5</span>
									    						</a>
									    					</div>
									    					<div class="circle-space">
									    						<a href="baloncesto.html?type=no_3">
									    							<span class="circle2 circle-green">3</span>
									    						</a>
									    					</div>
									    				</div>
									    			</div>
									    		</div>
									    	</div>
									    </div>
																				
									    <div class="col-md-3 col-sm-4 col-xs-12 item-ball fdsalon" data-prueba="fdsalon">
									    	<div class="img-cover">
									    		<img src="assets/img/futbol_sala/cripton/amarillo.png">
									    		<div class="img-info1">
									    			<div class="col-xs-5">
									    				<label>F SALÓN</label>
									    			</div>
									    			<div class="col-xs-7">
									    				<div class="row">
									    					<div class="circle-space">
									    						<a href="fsalon.html?type=masculino">
										    						<span class="circle2 circle-green">M</span>
										    					</a>
									    					</div>
									    					<div class="circle-space">
									    						<a href="fsalon.html?type=femenino">
									    							<span class="circle2 circle-green">F</span>
									    						</a>
									    					</div>
									    					<div class="circle-space">
									    						<a href="fsalon.html?type=infantil">
									    							<span class="circle2 circle-green">I</span>
									    						</a>
									    					</div>
									    				</div>
									    			</div>
									    		</div>
									    	</div>
									    </div>
									    <div class="col-md-3 col-sm-4 col-xs-12 item-ball maficionados" data-prueba="maficionados">
									    	<div class="img-cover top-right bottom-right">								    		
									    		<img class="" src="assets/img/microfutbol/m_aficionado/blanco.png">
									    		<div class="img-info2">
									    			<div class="img-info2-content">
									    				<a href="micro.html?type=m_aficionado">
									    					<span class="circle micro-circle-green"></span>
									    					<label>M. AFICIONADO</label>
									    					<span class="circle micro-circle-green"></span>
									    				</a>
									    			</div>							    			
									    		</div>
									    	</div>
									    </div>
											
									</div>
								</div>   
						  	</div>
						</div> 				  	 	

					</div>
					
				</div>
			</div>
		</div>		
		<div id="footer">
			<div class="seccion3">
				<div class="container">
					<div class="col-xs-12" id="titulo-contacto">					
						<label>
							<span class="circle mini-circle-green"></span>
							CONTÁCTENOS
						</label>
					</div>
					<div id ="info-contacto" class="col-xs-12">
						<div class="hidden-xs hidden-sm visible-md-block visible-lg-block">
							<div class="col-md-3">						
								<label>
									<span class="glyphicon glyphicon-map-marker"></span>
									Cra. 17 A # 54 – 57 Sur
								</label>
							</div>
							<div class="col-md-4">						
								<label>
									<span class="glyphicon glyphicon-earphone"></span>
									(571) 7141985 – 2794891 – 3144448829 
								</label>
							</div>
							<div class="col-md-4">						
								<label>
									<span class="glyphicon glyphicon-envelope"></span>
									info@balonescosmos.com
								</label>
							</div>
						</div>
						<div class="hidden-xs visible-sm-block hidden-md hidden-lg">
							<div class="col-sm-5">						
								<label>
									<span class="glyphicon glyphicon-map-marker"></span>
									Cra. 17 A # 54 – 57 Sur
								</label>
							</div>
							<div class="col-sm-6">						
								<label>
									<span class="glyphicon glyphicon-earphone"></span>
									(571) 7141985 – 2794891 – 3144448829 
								</label>
							</div>
							<div class="col-sm-4">						
								<label>
									<span class="glyphicon glyphicon-envelope"></span>
									info@balonescosmos.com
								</label>
							</div>
						</div>
						<div class="visible-xs-block hidden-sm hidden-md hidden-lg">
							<div class="col-xs-12">						
								<label>
									<span class="glyphicon glyphicon-map-marker"></span>
									Cra. 17 A # 54 – 57 Sur
								</label>
							</div>
							<div class="col-xs-12">						
								<label>
									<span class="glyphicon glyphicon-earphone"></span>
									(571) 7141985 – 2794891 – 3144448829 
								</label>
							</div>
							<div class="col-xs-12">						
								<label>
									<span class="glyphicon glyphicon-envelope"></span>
									info@balonescosmos.com
								</label>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="seccion2">
				<div id="cuadro-lateral-content">
					<div id="cuadro-lateral">
						<div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1 col-md-7" id="social-logo-content">
							<div class="row">
								<div class="col-xs-12">
									<div class="social-logo" >
										<img src="assets/img/logo_facebook.png">
									</div>
									<div class="social-logo">
										<img src="assets/img/logo_twitter.png">
									</div>
									<a class="move-up btn-up hidden-xs visible-sm-block visible-md-block visible-lg-block" href="#">
										<span class="glyphicon glyphicon-chevron-up"></span>
									</a>
									<a class="move-up btn-up2 visible-xs-block hidden-sm hidden-md hidden-lg" href="#">
										<span class="glyphicon glyphicon-chevron-up"></span>
									</a>
								</div>								
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<div class="row">
										<div class="col-xs-6">
											<label class="title-foot">
												<a href="#">FÚTBOL</a>
											</label>
											<label class="text-foot"><a href="futbol.html?type=no_5">Fútbol cinco</a></label>
											<label class="text-foot"><a href="futbol.html?type=no_4">Fútbol cuatro</a></label>
											<label class="text-foot"><a href="futbol.html?type=no_3_infantil">Fútbol tres infantil</a></label>
											<label class="text-foot"><a href="futbol.html?type=no_1_infantil">Fútbol uno infantil</a></label>
										</div>
										<div class="col-xs-6">
											<label class="title-foot">
												<a href="#">FÚTBOL SALA</a>
											</label>
											<label class="text-foot"><a href="fsala.html">Carioca</a></label>
											<label class="text-foot"><a href="fsala.html">Galaxy</a></label>
											<label class="text-foot"><a href="fsala.html">Cripton</a></label>
											<label class="text-foot"><a href="fsala.html">Bordeaux</a></label>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="row">
										<div class="col-xs-6">
											<label class="title-foot">
												<a href="#">FÚTBOL SALÓN</a>
											</label>
											<label class="text-foot"><a href="fsalon.html">Carioca</a></label>
											<label class="text-foot"><a href="fsalon.html">Galaxy</a></label>
											<label class="text-foot"><a href="fsalon.html">Cripton</a></label>
											<label class="text-foot"><a href="fsalon.html">Bordeaux</a></label>
										</div>
										<div class="col-xs-6">
											<label class="title-foot">
												<a href="#">MICRO FÚTBOL</a>
											</label>
											<label class="text-foot"><a href="micro.html?type=m_aficionado">Microfútbol Aficionado</a></label>
											<label class="text-foot"><a href="micro.html">Carioca</a></label>
											<label class="text-foot"><a href="micro.html">Galaxy</a></label>
											<label class="text-foot"><a href="micro.html">Cripton</a></label>
											<label class="text-foot"><a href="micro.html">Bordeaux</a></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="row">
								<div class="col-xs-12 col-sm-6">
									<div class="row">						
										<div class="col-xs-6">
											<label class="title-foot">
												<a href="#">VOLLEYBALL</a>
											</label>
											<label class="text-foot"><a href="volleyball.html?type=piel_durazno">Piel de durazno</a></label>
											<label class="text-foot"><a href="volleyball.html?type=pvc">PVC</a></label>
										</div>
										<div class="col-xs-6">
											<label class="title-foot">
												<a href="#">BALONCESTO</a>
											</label>
											<label class="text-foot"><a href="baloncesto.html?type=no_7">Tamaño N. 7</a></label>
											<label class="text-foot"><a href="baloncesto.html?type=no_6">Tamaño N. 6</a></label>
											<label class="text-foot"><a href="baloncesto.html?type=no_5">Tamaño N. 5</a></label>
											<label class="text-foot"><a href="baloncesto.html?type=no_3">Tamaño N. 3</a></label>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="row">
										<div class="col-xs-6">
											<label class="title-foot">
												<a href="#">PUBLICITARIOS</a>
											</label>
											<label class="text-foot"><a href="publicitarios.html">Fútbol 5 - 4 - 3 - 1</a></label>
											<label class="text-foot"><a href="publicitarios.html">Fútbol sala</a></label>
											<label class="text-foot"><a href="publicitarios.html">Fútbol de salón</a></label>
											<label class="text-foot"><a href="publicitarios.html">Microfútbol N. 3</a></label>
											<label class="text-foot"><a href="publicitarios.html">Baloncesto</a></label>
											<label class="text-foot"><a href="publicitarios.html">Volleiball</a></label>
										</div>
										<div class="col-xs-6">
											<label class="title-foot">
												<a href="medicinal.html">MEDICINAL</a>
											</label>
											<label class="text-foot"><a href="medicinal.html">kilos - 1 a 12</a></label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer-barra">
			<div class="container">
				<div class="row">
					<label class="col-xs-12">
						<span class="glyphicon glyphicon-copyright-mark"></span>
						<span class="strong">BALONES COSMOS</span>
						<a href="http://suwwweb.com/" target="_blank">Hecho con <span class="glyphicon glyphicon-heart"></span> por suWWWeb S.A.S.</a>
					</label>
				</div>
			</div>
		</div>
		<div class="modal fade" id="ModalCotizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  	<div class="modal-dialog" role="document">
			    <div class="modal-content">
			      	<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">
				        	<span class="centrar">
				        		<SPAN class="circle modal-circle-green left"></SPAN>
				        		<SPAN class="circle modal-circle-green right"></SPAN>
				        		<span class="texto">SOLICITAR COTIZACIÓN</span>
				        	</span>
				        </h4>
				    </div>
				    <div class="modal-body">
			        	<form class="form-horizontal" id="form-cotizacion">
			        		<div id="message-section">
								<div class="row">
									<div id="success" class="col-xs-12">                            
						            	<p class="bg bg-success">Cotización enviada exitosamente.</p>
							        </div>
							        <div id="danger" class="col-xs-12">
							            <p class="bg bg-danger"></p>
							        </div>
							        <div id="wait" class="col-xs-12">
							            <p class="bg bg-warning">Cargando...</p>				            
							        </div>
								</div>
							</div>
		        			<div class="col-xs-12">
								<div class="form-group">
									<label class="col-xs-12">Asunto</label>
							    	<div class="col-xs-12">
							      		<input type="text" class="form-control" id="asunto" name="asunto">
							    	</div>					    	
							    </div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
							    	<label class="col-xs-12">Nombre</label>
							    	<div class="col-xs-12">
							      		<input type="text" class="form-control" id="nombre" name="nombre">
							    	</div>		
							  	</div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
							    	<label class="col-xs-12">Email</label>
							    	<div class="col-xs-12">
							      		<input type="email" class="form-control" id="email" name="email">
							    	</div>	
							  	</div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-xs-12">Teléfono</label>
							    	<div class="col-xs-12">
							      		<input type="text" class="form-control" id="telefono" name="telefono">
							    	</div>
							    </div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
									<div class="col-xs-12" id="boton-cotizar-content">
								    	<button class="btn btn-cot" type="submit">ENVIAR</button>
							    	</div>
								</div>
							</div>
			        	</form>
				    </div>				    
			    </div>
		  	</div>
		</div>
		<script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.mousewheel-3.0.6.min.js"></script>
    	<script src="assets/js/jquery.rondell.js"></script>
		<script type="text/javascript" src="assets/js/funciones.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				
				$(".li-contactenos").addClass("active");

				$("#balon-carousel").rondell({
			      	preset: "carousel",
			      	size: {
			      		width: 300,
			      		height: 100
			      	},
			     	center: {
				      	left: 150,
				      	top: 40
				    }, 
			      	scaling: 1,
			      	radius: {
				      	x: 70,
				      	y: 0
			      	},
			      	lightbox: {
				    	enabled: false,
				    	displayReferencedImages: false
					},
			      	itemProperties: {
				      	delay: 1,
					    size: {
					        width: 62,
					        height: 62
					    },
					    sizeFocused: {
					        width: 0,
					        height: 0
					    }
					},
				    controls: {
				    	enabled: false,
				    	fadeTime: 40000000,
						margin: {
						    x: 0,
						    y: 0
						}
				    },
				    visibleItems: 2
			    });
			    
			})
		</script>
	</body>
</html>