﻿<html>
	<head>
	
		<title>WildFriends | Cuéntanos</title>
		<link rel="stylesheet" href="css/WFestilo.css" type="text/css"/>
		<link rel="stylesheet" href="css/formulario.css" type="text/css"/>
		
		<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
		
		
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<link type="text/css" href="css/jquery-ui.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
<!--	 <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
		<link rel="shortcut icon" href="favicon.ico">
		
		<script type="text/javascript">
    var device = navigator.userAgent

if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
 { 
window.location = "http://www.wildfriends.hol.es/mobile/";

}
</script>
	
	</head>
	
	<body>
	
		<script type="text/javascript">
							
			var x;
			x=$(document);
			x.ready(inicializar);
			
						
			function inicializar ()	{
				var x;
				x=$("#cabizq");
				x.fadeIn(2000);
				
				var x;
				x=$("#aviso");
				x.click(mostrarAviso);
				
				var x;
				x=$("#privacidad");
				x.click(mostrarPriv);
				
								
			}
				function mostrarAviso(){
					var x;
					x=$("#textoaviso");
					x.dialog({modal:true, "title":"Aviso legal", "width": "800px"});
				}
				
				function mostrarPriv(){
					var x;
					x=$("#textoprivacidad");
					x.dialog({modal:true, "title":"Política de privacidad", "width": "800px", "height": "auto"});
				}
				
			var nombre = document.getElementById("nom").value;
			var lnombre = nombre.length;
			var apellidos = document.getElementById("apel").value;
			var lapellidos = apellidos.length;
			var correo = document.getElementById("correo").value;
			var lcorreo = correo.length;
			
			
		</script>	
				
				
		
		
			<div id="contenedor">
				
				<div id="cabecera">
				
					<div id="cabsup">
				<!-- 	Menú -->
						<div id="menu">
						 <ul class="navegacion">
													
						
							<li><a>Conócenos</a>
							
								<ul>
									<li><a href="index.html">Quiénes somos</a></li><br/>
									<li><a href="quienessomos_historia.html">Historia</a></li><br/>
									<li><a href="quienessomos_mundo.html">WF en el mundo</a></li><br/>
								
								</ul>		
													
							
							</li>				
						
							
							<li><a>Proyectos</a>
							
								<ul>
								
									<li><a href="proyectos_acuaticos.html">Sist. acuáticos</a></li><br/>
									<li><a href="proyectos_terrestres.html">Sist. terrestres</a></li><br/>
									<li><a href="proyectos_galeria.html">Galería</a></li><br/>
									<li><a href="proyectos_ninos.html">Para niños</a></li>
								</ul>		
							
							</li>
							
							<li><a>Infórmate</a>
							
								<ul>
								
									<li><a href="informate_eventos.html">Eventos</a></li><br/>
									<li><a href="informate_noticias.html">Noticias</a></li><br/>
									<li><a href="informate_trabaja.html">Trabajo</a></li><br/>
									<li><a href="informate_listaroja.html">Lista Roja IUCN</a></li><br/>
									<li><a href="informate_faq.html">FAQ</a></li>
								</ul>		
							
							</li>
							
							<li><a>Colabora</a>
							
								<ul>
									<li><a href="colabora_donaciones.html">Donaciones</a></li><br/>
									<li><a href="colabora_voluntariado.html">Voluntariado</a></li><br/>
									<li><a href="colabora_tienda.html">Tienda</a></li>
								</ul>		
							
							</li>
							
							<li><a>Contacto</a>
									
									<ul>
									<li><a href="contacto_cuentanos.php">Cuéntanos</a></li>
									</ul>
												
								</li>
						
						</ul>
						<!-- Redes sociales -->
							<div id="fb"><a href="https://es-es.facebook.com/" target="_blank"><img src="imagenes/facebook.jpg" width="25px"/></a></div>
							<div id="tw"><a href="https://twitter.com/?lang=es" target="_blank"><img src="imagenes/twitter.jpg" width="28px"/></a></div>
							<div id="gp"><a href="https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/?gpsrc%3Dgplp0#identifier" target="_blank"><img src="imagenes/gplus.jpg" width="25px"/></a></div>
							<div id="yt"><a href="https://www.youtube.com/?hl=es&gl=ES" target="_blank"><img src="imagenes/youtube.jpg" width="28px"/></a></div>
						
						</div>
					</div>
					<!-- Logo -->
					<div id="cabizq">
						<a href="index.html"><img src="imagenes/logo.jpg" id="imagenlogo" height="150px"></a>
					</div>
					<!-- Nombre -->
					<div id="cabder">
						WildFriends
					</div>
					
											
				</div>
			<!-- 	Contenido -->
				<div id="contenido">
					<div class="seccion">Cuéntanos</div>
				

					<div id="info">
						<p>En "WildFriends" queremos que no te quedes con dudas. Si después de visitar nuestra sección <a href="informate_faq.html">FAQ</a> sigues teniendo más preguntas, ponte en contacto con nosotros a través del siguiente formulario. </p>
					
					</div>
					<br/>
					
					<div id="formular">
						<form action="" method="post">
							<label for="nom">Nombre</label><br/>
							<input type="text" id="nom" name="nombre" size="53"><br/><br/>
							
							<label for="apel">Apellidos</label><br/>
							<input type="text" id="apel" name="apellidos" size="53"><br/><br/>
							
							<label for="correo">Correo electrónico</label><br/>
							<input type="text" id="correo" name="email" size="53"><br/><br/>
							
							<label for="coment">Comentarios</label><br/>
							<textarea id="coment" name="comentarios" rows="10" cols="40"></textarea><br/><br/>
							
							<div id="enviar">
								<div id="privac">
									<input type="checkbox" id="priva" value="">Acepto la política de protección de datos y las condiciones del servicio.</input>
								</div>
								<div id="botones">
									<input id="boton"  type="submit" value="Enviar"/>
								</div>
							</div>
						</form>
					</div>
				
			
				</div>
				<!-- Pie -->
				<div class="pie">
					<div id="menupie">
						<div class="conoc">
							<ul><h3>Conócenos</h3><br/>
								<li><a href="index.html">Quiénes somos</a></li><br/>
								<li><a href="quienessomos_historia.html">Historia</a></li><br/>
								<li><a href="quienessomos_mundo.html">WF en el mundo</a></li><br/>
							</ul>
						</div>
						<div class="proy">
							<ul><h3>Proyectos</h3><br/>
								<li><a href="proyectos_acuaticos.html">Sist. acuáticos</a></li><br/>
								<li><a href="proyectos_terrestres.html">Sist. terrestres</a></li><br/>
								<li><a href="proyectos_galeria.html">Galería</a></li><br/>
								<li><a href="proyectos_ninos.html">Para niños</a></li><br/>
							</ul>
						</div>
						<div class="infor">
							<ul><h3>Infórmate</h3><br/>
								<li><a href="informate_eventos.html">Eventos</a></li><br/>
								<li><a href="informate_noticias.html">Noticias</a></li><br/>
								<li><a href="informate_trabaja.html">Trabajo</a></li><br/>
								<li><a href="informate_listaroja.html">Lista Roja IUCN</a></li><br/>
								<li><a href="informate_faq.html">FAQ</a></li><br/>
							</ul>
							
						</div>
						<div class="colab">
							<ul><h3>Colabora</h3><br/>
								<li><a href="colabora_donaciones.html">Donaciones</a></li><br/>
								<li><a href="colabora_voluntariado.html">Voluntariado</a></li><br/>
								<li><a href="colabora_tienda.html">Tienda</a></li><br/>
							</ul>
						</div>
						<div class="contac">
							<ul><h3>Contacto</h3><br/>
								<li><a href="contacto_cuentanos.php">Cuéntanos</a></li><br/>
							</ul>
						</div>
					</div>
					<div id="btnspie">
						<span id="aviso">Aviso legal</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span id="privacidad">Política de privacidad</span>
						<div id="textoaviso">
							<p>DATOS IDENTIFICATIVOS: En cumplimiento con el deber de información recogido en artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico, a continuación se reflejan los siguientes datos: La empresa titular de WildFriends (en adelante, el Site) es WildFriends S.L, con domicilio en C/Miguel Yuste, 40 - 28037 Madrid, con número de C.I.F: B-85635910, inscrita en el Registro Mercantil de Madrid en el tomo 26.455, folio 157, sección 8, hoja M-476760, inscripción 1.</p>
							<p>USUARIOS: El acceso y/o uso de los portales de WildFriends atribuye la condición de USUARIO, que acepta, desde dicho acceso y/o uso, las Condiciones Generales de Uso aquí reflejadas. Las citadas Condiciones serán de aplicación independientemente de las Condiciones Generales de Contratación que en su caso resulten de obligado cumplimiento.</p>

							<p>USO DEL PORTAL: el Site de WildFriends proporciona el acceso a multitud de informaciones, servicios, programas o datos (en adelante, "los contenidos") en Internet pertenecientes a WildFriends o a sus licenciantes, a los que el USUARIO puede tener acceso. El USUARIO asume la responsabilidad del uso del Site. Dicha responsabilidad se extiende al registro que fuese necesario para acceder a determinados servicios o contenidos. En dicho registro el USUARIO será responsable de aportar información veraz y lícita. Como consecuencia de este registro, al USUARIO se le puede proporcionar una contraseña de la que será responsable, comprometiéndose a hacer un uso diligente y confidencial de la misma. El USUARIO se compromete a hacer un uso adecuado de los contenidos y servicios (como por ejemplo servicios de chat, foros de discusión o grupos de noticias) que WildFriends ofrece a través de su Site y con carácter enunciativo pero no limitativo, a no emplearlos para (i) incurrir en actividades ilícitas, ilegales o contrarias a la buena fe y al orden público; (ii) difundir contenidos o propaganda de carácter racista, xenófobo, pornográfico-ilegal, de apología del terrorismo o atentatorio contra los derechos humanos; (iii) provocar daños en los sistemas físicos y lógicos de WildFriends, de sus proveedores o de terceras personas, introducir o difundir en la red virus informáticos o cualesquiera otros sistemas físicos o lógicos que sean susceptibles de provocar los daños anteriormente mencionados; (iv) intentar acceder y, en su caso, utilizar las cuentas de correo electrónico de otros usuarios y modificar o manipular sus mensajes. WildFriends se reserva el derecho de retirar todos aquellos comentarios y aportaciones que vulneren el respeto a la dignidad de la persona, que sean discriminatorios, xenófobos, racistas, pornográficos, que atenten contra la juventud o la infancia, el orden o la seguridad pública o que, a su juicio, no resultaran adecuados para su publicación. En cualquier caso, WildFriends no será responsable de las opiniones vertidas por los usuarios a través de los foros, chats, u otras herramientas de participación.</p>

							<p>PROTECCIÓN DE DATOS: WildFriends cumple con las directrices de la Ley Orgánica 15/1999 de 13 de diciembre de Protección de Datos de Carácter Personal, el Real Decreto 1720/2007 de 21 de diciembre por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica y demás normativa vigente en cada momento, y vela por garantizar un correcto uso y tratamiento de los datos personales del usuario. Para ello, junto a cada formulario de recabo de datos de carácter personal, en los servicios que el USUARIO pueda solicitar a WildFriends, hará saber al USUARIO de la existencia y aceptación de las condiciones particulares del tratamiento de sus datos en cada caso, informándole de la responsabilidad del fichero creado, la dirección del responsable, la posibilidad de ejercer sus derechos de acceso, rectificación, cancelación u oposición, la finalidad del tratamiento y las comunicaciones de datos a terceros en su caso. Asimismo, WildFriends informa que da cumplimiento a la Ley 34/2002 de 11 de julio, de Servicios de la Sociedad de la Información y el Comercio Electrónico y le solicitará su consentimiento al tratamiento de su correo electrónico con fines comerciales en cada momento. </p>
						</div>
						<div id="textoprivacidad">
							<p>Este sitio Web es propiedad de WildFriends, una organización española dedicada a conservación de la naturaleza.</p>
							<p>La política de privacidad, y con ella este texto, es actualizada periódicamente para su adaptación a la normativa vigente y para la mejora de nuestros sistemas, por lo que recomendamos consultarla periódicamente.</p>
							<p>El uso continuado de este sitio siguiendo la publicación de los cambios en la política de privacidad implica su aceptación.</p>
							<p>• WildFriends solo recoge la información personal necesaria para el servicio que presta, solicitada de forma específica y facilitada por el usuario de forma voluntaria.<br/>
							• WildFriends está comprometida con el cumplimiento de la normativa sobre privacidad y seguridad de datos personales.<br/>
							• No venderemos o entregaremos tu información a otra organización externa a WildFriends, a menos que nos des autorización expresa y específica para hacerlo.<br/>
							• Siempre te daremos la opción de terminar tu suscripción con nuestras listas de correo.<br/>
							• Si tienes menos de 18 años de edad, deberás consultar con tus padres o tutores antes de registrarte en este sitio.</p>
							<p>Privacidad de información<br/>
								a) Información personal - como nombre, dirección, número telefónico, dirección de correo electrónico y fecha de nacimiento (donde sea apropiado). Recogemos esta información sólo en relación a actividades específicas. No es necesario que reveles este tipo de información si no lo deseas.<br/>

								b) Información no personal. WildFriends recoge datos tales como direcciones IP (la ubicación del computador en Internet), páginas visitadas y archivos descargados. Esto nos ayuda a determinar cuántas personas usan nuestro sitio, cuántas personas nos visitan de forma regular, qué páginas son más populares y qué páginas lo son menos. Esta información no nos dice nada acerca de tu identidad, sólo nos permite administrar mejorar nuestro servicio.</p>
							<p>La información personal enviada a través de los formularios en este sitio es almacenada sólo en una base de datos de WildFriends. Aseguramos que WildFriends no compartirá la información que nos entregues en este sitio con organización alguna externa a WildFriends, a menos que nos hayas permitido específicamente hacerlo.</p>
							<p>Si eres menor de 14 años, necesitas obtener permiso de tus padres o tutores antes de enviar información personal (tu nombre, dirección, correo electrónico, etc.) a nosotros o cualquier otra persona a través de Internet. Animamos a los padres a involucrarse en el uso de Internet de sus hijos y a estar informados acerca de las actividades en las que están participando.</p>
							<p>Tienes derecho, en cualquier momento, a acceder, pedir una copia de tu información, cancelar o rectificar sus datos, así como a oponerte a su tratamiento, rellenando el <a href="contacto_cuentanos.php">formulario<a> presente en nuestra página</p>
							<p>Puede haber enlaces en este sitio Web que dirijan a otros sitios Web fuera de nuestro servicio. Cualquier enlace a sitios externos está previsto nada más que para tu referencia y conveniencia. La gestión y contenido de esos sitios está más allá de nuestro control, y no nos hacemos responsables de su contenido u otro material o cualquier producto o servicio publicitado o vendido a través de alguno de esos sitios Web. No seremos responsables bajo circunstancia alguna por daños, directos o indirectos, causados por cualquier uso de ese sitio Web externo vinculado a este sitio Web, seamos o no informados respecto a la posibilidad de esos daños.</p>

							<p>Si tienes alguna pregunta respecto a nuestra política de privacidad, por favor <a href="contacto_cuentanos.php">contáctanos<a>.</p>
							
						</div>
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


