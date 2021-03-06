﻿<!DOCTYPE html> 
<html>
	
	<head>
	
		<title>WildFriends</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script src="js/jquery-1.11.1.js" type="text/javascript"></script> <!--Jquery-->
		<script src="js/jquery.mobile-1.4.2.min.js" type="text/javascript"></script> <!--Jquery mobile-->
		<link href="css/jquery.mobile.structure-1.4.2.min.css" rel="stylesheet" type="text/css"/> <!--Estructura de Jquery mobile-->
		<link href="css/jquery.mobile-1.4.2.min.css" rel="stylesheet" type="text/css"/><!--CSS Jquery mobile-->
		<link rel="stylesheet" href="themes/wfmobile.min.css" />
		<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
		
	</head>

	<body onLoad="saludo()">
	<script type="text/javascript">
	var i=1;
		function cambiarImagen(){
		
		if (i<=4){
		var img=document.getElementById("imagen").src="imagenes/acu"+i+".jpg";
		i++;
		}
		else {
		
		i=1;
		document.getElementById("imagen").src="imagenes/acu"+i+".jpg";
		i++;
		}
		
		}
		function saludo()
		{setInterval("cambiarImagen()", 2000)}
	</script>
	
<!-- Primera página | Quiénes somos -->
		<div data-role="page" id="somos" data-title="Conócenos">	 
		
			<div data-role="header" data-role>
				
				<a href="" data-role="button" data-rel="back" data-icon="back" data-iconpos="notext" style=" margin-left: 15px;"></a>
				<h1>WildFriends</h1>
			</div>
			
			<div data-role="content">
				<h3 style="text-align: center; background-color: #778959; color: beige;">Conócenos</h3>
				<p style="text-align: justify">Somos una empresa dedicada a servicios especializados de consultoría e investigación en ecología e impacto ambiental, aplicando un enfoque científico-técnico, y cuyo objetivo es estudiar los distintos ecosistemas con el fin de ayudar a la conservación de los mismos.</p>
				<img src="imagenes/acu1.jpg" id="imagen" style="width: 100%; border-radius: 10px;"></img>
				<p style="text-align: justify">Nuestro cometido es realizar estudios ambientales y/o de conservación del hábitat. </p>
				<p style="text-align: justify">Trabajando todos juntos podamos encontrar las mejores soluciones para salvar la naturaleza. Éste es nuestro compromiso para con el mundo.</p>
			</div>
			
			<div data-role="footer" data-position="fixed"> 
				<div id="btnpie" data-role="navbar">
					<ul>
						<!-- <li><a href="#somos" data-icon="user">Conócenos</a></li> -->
						<li><a href="#proyectos" data-icon="bullets" data-transition="slide">Proyectos</a></li>
						<li><a href="#eventos" data-icon="calendar" data-transition="slide">Eventos</a></li>
						<li><a href="#colabora" data-icon="heart" data-transition="slide">Colabora</a></li>
						<li><a href="#contacto" data-rel="dialog" data-icon="mail" data-transition="flow">Contacto</a></li>
					</ul>
				</div>
			</div>
			
		</div>
		
		
<!-- Segunda página | Proyectos -->
		<div data-role="page" id="proyectos" data-title="Proyectos">	 
		
			<div data-role="header" data-role>
				
				<a href="" data-role="button" data-rel="back" data-icon="back" data-iconpos="notext" style=" margin-left: 15px;"></a>
				<h1>WildFriends</h1>
			</div>
			
			<div data-role="content">
				<h3 style="text-align: center; background-color: #778959; color: beige;">Proyectos</h3>
				<div data-role="collapsible-set" >
					<div class="colap" data-role="collapsible" data-collapsed="false">
						<h3>Sistemas acuáticos</h3>
						<div class="colap" data-role="collapsible">
						<h4>Galicia (ES)</h4>
						<p style="text-align: justify;">Situadas en la costa noroeste de la Península Ibérica, las rías bajas gallegas forman parte de una región costera que alberga una importante biodiversidad marina, la cual a su vez soporta una potente economía de extracción de los recursos marinos, que dan empleo y alimento a miles de personas. Se ha realizado un estudio de la fauna y flora intermareal del litoral gallego, se han censado gran parte de las especies de interés comercial registradas en la lonja de O Grove y se han recogido muestras de plancton de la ría de Arosa, además de realizar visitas a ciertos lugares de interés biológico.</p>
						</div>
						<div class="colap" data-role="collapsible">
						<h4>Madrid (ES)</h4>
						<p style="text-align: justify;">El objetivo principal de este estudio es comprender el funcionamiento general y estructura de los ecosistemas acuáticos y de las comunidades que albergan. Se compara el funcionamiento y estructura general de sistemas lénticos, localizados en distintas condiciones ambientales, y de sistemas lóticos, el tramo alto y tramo bajo del río Jarama y tramo alto del Manzanares.</p>
						</div> 
						<div class="colap" data-role="collapsible">
						<h4>Castilla y León (ES)</h4>
						<p style="text-align: justify;">En este trabajo se va a realizar la caracterización ecológica del lago de Sanabria y de algunos sistemas acuáticos cercanos (río Tera, río de la Forcadura, laguna de los Peces, laguna de las Yeguas), además de un análisis limnológico de otros dos sistemas: las lagunas de Villafáfila y el lago de Carucedo.</p>
						</div> 
						<div class="colap" data-role="collapsible">
						<h4>Baden-Württemberg (DE)</h4>
						<p style="text-align: justify;">Una segunda especie del anteriormente monotípico género Stenodactylina, <i>Stenodactylina rogerfurzei</i>, ha sido datada en el Aaleniense superior en la zona del río Wutach (Baden-Württemberg , SW Alemania). Al igual que la especie tipo, la nueva especie se basa sólo en una pinza simple.</p>
						</div> 
					</div> 
				
					<div class="colap" data-role="collapsible">
						<h3>Sistemas terrestres</h3>
						<div class="colap" data-role="collapsible">
						<h4>Madrid (ES)</h4>
						<p style="text-align: justify;">Los sistemas agrarios extensivos son el hábitat principal de muchos organismos, entre ellos las aves esteparias. La composición en mosaico que muestran estos sistemas (con cereales, labrados y barbechos) presentan una variabilidad a macro y micro escala de la estructura horizontal y vertical de la vegetación que tiene influencia sobre la disponibilidad de alimento y refugio.</p>
						</div> 
						<div class="colap" data-role="collapsible">
						<h4>Castilla y León (ES)</h4>
						<p style="text-align: justify;">Este territorio está caracterizado por sus grandes contrastes litológicos, que pueden determinar las comunidades de flora y fauna que nos encontramos. Para la realización del estudio se han elegido una serie de enclaves característicos del terreno, en cada uno de los cuales se ha llevado a cabo un diseño de muestreo específico.</p>
						</div> 
						<div class="colap" data-role="collapsible">
						<h4>California (US)</h4>
						<p style="text-align: justify;">Los modelos de nicho ecológico pueden ser herramientas útiles para identificar sitios de reintroducción para especies en peligro pero rara vez son usados para este fin. En este estudio hemos desarrollado modelos de nicho específicos (nidificación, refugio y alimentación) para el Cóndor de California para su reintrodución en California, Oregón y Washington.</p>
						</div> 
						<div class="colap" data-role="collapsible">
						<h4>Brasil (BR)</h4>
						<p style="text-align: justify;">Las actividades humanas afectan a los grandes carnívoros por todo el mundo incrementando su mortalidad destruyendo y fragmentando su hábitat, disminuyendo la presencia de presas y presión de caza. El jaguar es un carnívoro influenciado por estas amenazas, además de la caza furtiva.</p>
						</div> 
						<div class="colap" data-role="collapsible">
						<h4>Sudáfrica (ZA)</h4>
						<p style="text-align: justify;">Aunque la comunicación es vital para los miembros de las especies sociales, los sexos pueden diferir en el tipo y grado de información que se busca. En este estudio se observó el comportamiento de los elefantes africanos y se investigó las señales químicas conespecíficas de heces y orina entre ellos.</p>
						</div> 
						<div class="colap" data-role="collapsible">
						<h4>China (CN)</h4>
						<p style="text-align: justify;">Hemos investigado el desarrollo relativo de los sesamoideos radiales para desenrredar la evolución de esta estructura icónica. En los pandas este falso pulgar es conocido por realizar la función de agarre durante la alimentación.</p>
						</div> 
					</div>
				
				</div>
				
				
			
			</div>
			
			
			
			<div data-role="footer" data-position="fixed"> 
				<div id="btnpie" data-role="navbar">
					<ul>
						<li><a href="#somos" data-icon="user" data-transition="slide">Conócenos</a></li>
						<!-- <li><a href="#proyectos" data-icon="bullets">Proyectos</a></li> -->
						<li><a href="#eventos" data-icon="calendar" data-transition="slide">Eventos</a></li>
						<li><a href="#colabora" data-icon="heart" data-transition="slide">Colabora</a></li>
						<li><a href="#contacto" data-rel="dialog" data-icon="mail" data-transition="flow">Contacto</a></li>
					</ul>
				</div>
			</div>
			
		</div>

<!-- Tercera página | Eventos -->
		<div data-role="page" id="eventos" data-title="Eventos">
		
		
			<div data-role="header" data-role>
				
				<a href="" data-role="button" data-rel="back" data-icon="back" data-iconpos="notext" style=" margin-left: 15px;"></a>
				<h1>WildFriends</h1>
			</div>
			
			<div data-role="content">
				<h3 style="text-align: center; background-color: #778959; color: beige;">Eventos 2015</h3>
				
				<div data-role="tabs">
					<div data-role="navbar">
						<ul>
							<li><a href="#agosto" class="ui-btn-active">Ago</a></li>
							<li><a href="#septiembre">Sep</a></li>
							<li><a href="#octubre">Oct</a></li>
							<li><a href="#noviembre">Nov</a></li>
							<li><a href="#diciembre">Dic</a></li>
						</ul>
					</div>
					<div id="agosto">
						<h4>FINLANDIA Y VARANGER (NORUEGA) - 3 al 12 de agosto</h4>
						<p style="text-align: justify;">Desde los inabarcables bosques finlandeses hasta los fiordos y pastos de la península de Varanger, ya en el Círculo Polar, el contraste de estas tierras arrastra un drástico cambio en su fauna, van quedando atrás búhos y pájaros carpinteros para ser protagonistas las aves marinas.</p>
						<p><a href="http://www.seo.org/wp-content/uploads/2012/12/viajeFinlandiaNoruegaSEOagosto2015.pdf" target="_blank"><strong>+ Info</strong></a></p><br/>
						<h4>RUTA “NOCHE EN EL GUADARRAMA. MARIPOSAS, BÚHOS Y ESTRELLAS” (MADRID) – 15 de agosto</h4>
						<p style="text-align: justify;">Descubre los habitantes crepusculares del Parque Nacional del la Sierra de Guadarrama, los pequeños mochuelos, los cárabos que habitan en las faldas y dehesas del macizo y, ya en el cielo, sus constelaciones y la mitología, que nos acompañaran para finalizar la noche.</p>
						<p><a href="http://www.seo.org/wp-content/uploads/2012/12/RUTANocheGuadarramaVerano20151.pdf" target="_blank"><strong>+ Info</strong></a></p>
					</div>
					<div id="septiembre">
						<h4>ESTRECHO DE GIBRALTAR Y LA JANDA (CÁDIZ) - 11 al 14 de septiembre</h4>
						<p style="text-align: justify;">Para observar algunos de nuestros fenómenos naturales más impactantes nos acercaremos a los confines de Europa: la migración de miles de aves hacia África, la escapada del atún rojo hacia el Atlántico y las cacerías de las orcas o la llegada de los paíños de Wilson desde la lejana Antártida.</p>
						<p><a href="http://www.seo.org/wp-content/uploads/2012/12/excursionEstrechoGibraltarTarifaJandaSEOseptiembre2015.pdf" target="_blank"><strong>+ Info</strong></a></p>
						<h4>PARQUE NACIONAL DE CABAÑEROS (TOLEDO-CIUDAD REAL) – 19 de septiembre</h4>
						<p style="text-align: justify;">A fines de verano las lluvias encienden al ciervo. Bramidos, luchas, harenes con docenas de hembras o carreras por la Raña son los ingredientes de su espectacular berrea. Todo bajo la mirada de águilas imperiales, buitres negros o elanios azules en las sierras y el monte de Cabañeros.</p>
						<p><a href="http://www.seo.org/wp-content/uploads/2012/12/excursionCabanerosSEOjseptiembre2015.pdf" target="_blank"><strong>+ Info</strong></a></p>
					</div>
					<div id="octubre">
						<h4>HOCES DEL DURATÓN Y BOSQUE DE RIOFRÍO (SEGOVIA) - 4 de octubre</h4>
						<p style="text-align: justify;">Desde los cañones del río Duratón, escavados en el páramo castellano, hasta las dehesas de encina de Riofrío. Agradables paseos otoñales entre buitres leonados y negros para acercarse a la naturaleza, con especial atención al celo y las peleas de ciervos y gamos.</p>
						
						<p><a href="http://www.seo.org/wp-content/uploads/2012/12/excursionHocesDuratonBosqueRiofrioSEOoctubre2015.pdf" target="_blank"><strong>+ Info</strong></a></p>
							
							<br/>
							
						<h4>EXPO MILÁN 2015 "NUTRIR AL PLANETA. ENERGÍA PARA LA VIDA" (MILÁN)- Hasta el 31 de octubre</h4>
						<p style="text-align: justify;">La Expo de Milán de 2015 viene a abrir un nuevo concepto de Expo Mundial en el que se quiere dar prioridad a los legados inmateriales: a descubrimientos inspiracionales para el progreso de la humanidad. Su objetivo es animar a particulares, empresas y gobiernos a actuar y convertirse en un evento que mueve algo más que visitantes y conciencias.</p>
						
						<p><a href="http://www.expo2015.org/en/" target="_blank"><strong>+ Info</strong></a></p>
					</div>
						
					<div id="noviembre">
						<h4>IV JORNADAS DE EDUCACIÓN PARA LA SOSTENIBILIDAD DE EUSKADI "EDUCACIÓN Y SOSTENIBILIDAD HACIA EL FUTURO" (EUSKADI)- 26 al 28 de Noviembre</h4>
							<p style="text-align: justify;">Tras la conclusión de la Década de Naciones Unidas de la Educación para el Desarrollo Sostenible, nos encontramos ante una nueva etapa en la que van a consolidarse como elementos clave el trabajo en red de instituciones y agentes sociales, las propias redes sociales, la implementación de la educación hacia la sostenibilidad en las políticas medioambientales de los diferentes departamentos, el trabajo en competencias medioambientales, el protagonismo y la movilización de los y las jóvenes, la formación de capacitadores, la implicación institucional local en programas de base comunitaria…</p>
							
							<p><a href="http://www.magrama.gob.es/es/ceneam/formacion-ambiental/congresos/11-jornadas-educacion-sostenibilidad-euskadi.aspx" target="_blank"><strong>+ Info</strong></a></p>
					</div>
					
					<div id="diciembre">
						<h4>INICIACIÓN A LA FOTOGRAFÍA DE LA NATURALEZA (VALENCIA) - 6 de Diciembre</h4>
							<p style="text-align: justify;">El curso se basará en aprender el manejo de la cámara réflex o compacta en modo manual. Estará estructurado en una primera parte de más o menos una hora de teoría, y a continuación una sesión practica por grupos dirigidos por socios del Foto Club Ifach, a desarrollar en el entorno del Área Recreativa del Parque, donde se enseñará el manejo de la cámara y se practicará la teoría antes impartida.</p>
							
							<p><a href="http://www.citma.gva.es/web/pn-penyal-d-ifac/noticias-actividades/-/asset_publisher/M7IsHUdrIsnh/content/iniciacion-a-la-fotografia-de-la-naturaleza/80305041" target="_blank"><strong>+ Info</strong></a></p>
					</div>
				</div>
			</div>
			
			<div data-role="footer" data-position="fixed"> 
				<div id="btnpie" data-role="navbar">
					<ul>
						<li><a href="#somos" data-icon="user" data-transition="slide">Conócenos</a></li>
						<li><a href="#proyectos" data-icon="bullets" data-transition="slide">Proyectos</a></li>
						<!-- <li><a href="#eventos" data-icon="calendar">Eventos</a></li> -->
						<li><a href="#colabora" data-icon="heart" data-transition="slide">Colabora</a></li>
						<li><a href="#contacto" data-rel="dialog" data-icon="mail" data-transition="flow">Contacto</a></li>
					</ul>
				</div>
			</div>
			
		</div>

<!-- Cuarta página | Colabora -->
		<div data-role="page" id="colabora" data-title="Colabora">	 
		
			<div data-role="header" data-role>
				
				<a href="" data-role="button" data-rel="back" data-icon="back" data-iconpos="notext" style=" margin-left: 15px;"></a>
				<h1>WildFriends</h1>
			</div>
			
			<div data-role="content">
				<h3 style="text-align: center; background-color: #778959; color: beige;">Colabora</h3>
				
				<div data-role="collapsible-set" >
					<div class="colap" data-role="collapsible" data-collapsed="false">
						<h3>Donaciones</h3>
						<p style="text-align: justify;">Para realizar una donación, ponte en contacto con nosotros a través del siguiente <a href="#contacto" data-rel="dialog">formulario</a> o visita la sección Donaciones en la versión para ordenador de nuestra página web.</p>
					</div> 
				
					<div class="colap" data-role="collapsible">
						<h3>Voluntariado</h3>
						<p style="text-align: justify;">Si necesitas más información sobre los voluntariados, ponte en contacto con nosotros a través del siguiente <a href="#contacto" data-rel="dialog">formulario.</a></p>
						<div class="colap" data-role="collapsible">
						
						<h4>Voluntariado en Parques Nacionales</h4>
						<p><strong>Voluntariado en Parques Nacionales</strong></p>
						<p style="text-align: justify;">Únete a las más de 7.000 personas que cada año participan en nuestros proyectos de voluntariado repartidos por todo el territorio nacional.</p>
						<img src="imagenes/pn.jpg" style="width: 50%; margin-left: 75px;"><br/>
						<a href="http://www.seo.org/voluntariado-parques-nacionales-2015/" target="_blank">+ Info</a>
						</div> 
						<div class="colap" data-role="collapsible">
						<h4>Voluntariado Corporativo</h4>
						<p><strong>Voluntariado Corporativo</strong></p>
						<p style="text-align: justify;">Mediante este tipo de colaboración pretendermos canalizar el potencial humano en beneficio del medio ambiente fomentando valores de cohesión y solidaridad.</p>
						<img src="imagenes/corp.jpg" style="width: 50%; margin-left: 75px;"><br/>
						<a href="http://www.seo.org/voluntariado-corporativo/" target="_blank">+ Info</a>
						</div> 
						<div class="colap" data-role="collapsible">
						<h4>Colaboración en eventos, ferias, oficinas y delegaciones</h4>
						<p><strong>Colaboración en eventos, ferias, oficinas y delegaciones</strong></p>
						<p style="text-align: justify;">Necesitamos apoyo para oficinas y delegaciones, volcado de información a bases de datos, procesado de imágenes en oficinas...</p>
						<img src="imagenes/carpa.jpg" style="width: 50%; margin-left: 75px;"><br/>
						<a href="http://www.seo.org/colaboracion-en-eventos-ferias-oficinas-y-delegaciones/" target="_blank">+ Info</a>
						</div> 
						
					</div>
				
				</div>
				
				
			</div>
			
			<div data-role="footer" data-position="fixed"> 
				<div id="btnpie" data-role="navbar">
					<ul>
						<li><a href="#somos" data-icon="user" data-transition="slide">Conócenos</a></li>
						<li><a href="#proyectos" data-icon="bullets" data-transition="slide">Proyectos</a></li>
						<li><a href="#eventos" data-icon="calendar" data-transition="slide">Eventos</a></li>
						<!-- <li><a href="#colabora" data-icon="heart">Colabora</a></li> -->
						<li><a href="#contacto" data-rel="dialog" data-icon="mail" data-transition="flow">Contacto</a></li>
					</ul>
				</div>
			</div>
			
		</div>

<!-- Quinta página | Contacto -->
		<div data-role="page" id="contacto" data-title="Contacto">	 
		
			<div data-role="header" data-role>
				
				
				<h1>WildFriends</h1>
			</div>
			
			<div data-role="content">
				<h3 style="text-align: center; background-color: #778959; color: beige;">Formulario</h3>
				<p>En "WildFriends" queremos que no te quedes con dudas. Si tienes alguna pregunta y/o sugerencia , ponte en contacto con nosotros a través del siguiente formulario.</p>
				
				<form action="" method="post">
							<label for="nom">Nombre</label>
							<input type="text" id="nom" name="nombre" size="53"><br/>
							
							<label for="apel">Apellidos</label>
							<input type="text" id="apel" name="apellidos" size="53"><br/>
							
							<label for="correo">Correo electrónico</label>
							<input type="text" id="correo" name="email" size="53"><br/>
							
							<label for="coment">Comentarios</label>
							<textarea id="coment" name="comentarios" rows="10" cols="40"></textarea><br/>
							
							<div id="enviar">
								<div id="privac">
								<fieldset data-role="controlgroup">
									<!-- <legend><h4>Sexo</h4></legend> -->
									<!-- <label for="hombre">Hombre<input type="radio" id="hombre" name="sexo"></label> -->
									<label for="priva" style="font-size: 15px;"> Acepto la política de protección de datos y las condiciones del servicio.<input type="checkbox" id="priva" name="priva"></label>
									</fieldset>
								<!-- <fieldset data-role="controlgroup">
									<input type="checkbox" id="priva" value="" name="priva">Acepto la política de protección de datos y las condiciones del servicio.</input>
								</fieldset> -->
								</div>
								<div id="botones">
									<input id="boton"  type="submit" value="Enviar"/>
								</div>
							</div>
				</form>
			</div>
			
			<div data-role="footer" data-position="fixed"> 
				<div id="btnpie" data-role="navbar">
					<ul>
						<li><a href="#somos" data-icon="user" data-transition="slide">Conócenos</a></li>
						<li><a href="#proyectos" data-icon="bullets" data-transition="slide">Proyectos</a></li>
						<li><a href="#eventos" data-icon="calendar" data-transition="slide">Eventos</a></li>
						<li><a href="#colabora" data-icon="heart" data-transition="slide">Colabora</a></li>
						<!-- <li><a href="#contacto" data-rel="dialog" data-icon="mail">Contacto</a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</body>
	
</html>

<?php
error_reporting (E_ERROR  |E_WARNING |E_PARSE );

		
		if(isset($_POST[nombre]))
		{			
					$nombre=$_POST[nombre];
					$mail=$_POST[email];
					$apellidos=$_POST[apellidos];
					$consulta=$_POST[comentarios];
				
					

					$destinatario = "l.arribas.sanchez@gmail.com";//email de la persona que quiero enviar
					$asunto = "Solicitud de Informacion  ";
					$cuerpo = '
					<html>
					<head>
					   <title>Datos de contacto</title>
					</head>
					<body>
					
					<p style="font-size:50px; color:#BDB76B; background-color: #556B2F; width: 300px; height: 60px; text-align: center; ">WildFriends</p>
					<p>Gracias por ponerte en contacto con nosotros. En breve recibirás una respuesta.</p>		
					<p>Por favor, no respondas a este correo.</p>	
					
					<h3 style="color:#556B2F; font-size:30px ">Datos de contacto</h3>
					
					<p><b style=" color:#556B2F;">Nombre:</b> '.$nombre.'</p>
					<p><b style=" color:#556B2F;">Apellidos:</b> '.$apellidos.'</p>
					
					<p><b style=" color:#556B2F;">Mail:</b> '.$mail.'</p>
					
				
					<p><b style=" color:#556B2F;">Comentario:</b></p>
					<p>'.$consulta.'</p>
					<img src="http://cdn.800noticias.com/cms/wp-content/uploads/2015/03/elefante.jpg" style="border-radius: 50%; width:200px" />
					

					</body>
					</html>
					';

					//para el envio en formato HTML
					$headers = "MIME-Version: 1.0\r\n";
					$headers .= "Content-type: text/html; charset=UTF-8 \r\n";

					//dirección del remitente, el nuestro o de la pagina web
					$headers .= "From: info@info.es\r\n";

					//dirección de respuesta, si queremos que sea distinta que la del remitente
					$headers .= "Reply-To: info@info.com\r\n";

					//ruta del mensaje desde origen a destino
					$headers .= "Return-path: info@info.com\r\n";

					//direcciones que recibiran copia
					$headers .= "Cc: info@info.com\r\n";

					///direcciones que recibiran copia oculta
				/*	$headers .= "Bcc:\r\n";*/

					mail($destinatario,$asunto,$cuerpo,$headers);
		}
					 
					
						
	?>	