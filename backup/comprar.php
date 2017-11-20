<?php 
session_start();
include('header.php');


	 if (!isset($_SESSION['usuario'])) {
 			header('location:inicio_sesion.php');
 		}
 ?>

 <section>
	<h2>COMPRAR</h2>
</section>

<article>
	<h2>Carrito de Compras</h2>
	<div class="tabla">
	<table>
		<tr>
			<th>Nombre</th>
			<th>Categoria</th>
			<th>Precio</th>
			<th>Cantidad</th>
			<th>SubTotal</th>
			<th style="color:#9271c9;">SubTotal con Convenio</th>
		</tr>


<?php 
	$total=0;
	$can = 0;
	if (isset($_SESSION['objeto'])) {
		$vacio = false;
		$datos = $_SESSION['objeto'];
		for ($i=0; $i <count($datos) ; $i++) { 
			$a = $datos[$i]['precio'] - 2550;
			$e = $datos[$i]['cantidad'] * $a;
?>

		<tr>
			<td><?php echo $datos[$i]['nombre'] ?></td>
			<td style="text-transform: capitalize;"><?php echo $datos[$i]['categoria']; ?></td>
			<td><?php echo '$ ' . $datos[$i]['precio'] ?></td>
			<td><?php echo $datos[$i]['cantidad'] ?></td>
			<?php $sub = $datos[$i]['cantidad'] * $datos[$i]['precio'];?>
			<td><?php echo '$ ' . $sub ?></td>

			<td style="color:#9271c9;"><?php echo '$ ' . $e ?></td>

<?php
			$can = $datos[$i]['cantidad'] + $can;
			$total = $sub + $total;
			$a = $datos[$i]['precio'] - 2550;
			$e = $datos[$i]['cantidad'] * $a;
			$desc = $e + $desc;
		}
	} else {
		$vacio = "El carrito se encuentra vacío";
	}

?>
	<!--<?php //echo $can; ?>-->

		</tr>
		</table>
		</div>

	<form id="este" action="#" method="post">


		<?php 

			include('conexion.php');

			$email = $_SESSION['email'];

			$sql = "SELECT * FROM `convenios` WHERE con_usuario='$email'";

			$acentos = $conn->query("SET NAMES 'utf8'");
			$result = $conn->query($sql);
			
			$row = $result->fetch_assoc();

			if ($_GET['conv']) {
				$select = 'checked';
			}
		 ?>


		<!--Dirección de Envío-->
		<br><br>
		<h2 id="letraconv">Convenios</h2>


		<input <?php echo $select ?> required type="radio" class="convenio" name="convenio" id="conv" value="si">

		<label id="convletra">Seleccione si tiene convenio</label><br><br>

		<input required type="radio" id="conv" name="convenio" class="convenio" value="no">
		<label id="convletra2">No tengo convenio</label><br>

		<div class="fullconv">
			<label for="">Nombre de la Empresa</label>
				 <input name="nombre_empresa" list="empresa" type="text" value="<?php echo $row['nombre_empresa']; ?>"><br><br>
				 	<datalist id="empresa">
				 		<option value="MUTUALIDAD DEL EJÉRCITO DE AVIACIÓN">
				 		<option value="UNIVERSIDAD CENTRAL">
				 	</datalist>
				
			<label for="nombre_socio">Nombre del Socio o Funcionario</label>
				<input name="nombre_socio" type="text" value="<?php echo $row['nombre_socio']; ?>"><br><br>
				
			<label for="rut">Rut</label>
				<input name="rut" type="text" value="<?php echo $row['rut']; ?>"><br><br>
				
			<label for="telefono_conv">Teléfono</label>
				<input name="telefono_conv" type="text" value="<?php echo $row['telefono']; ?>"><br><br>
				
			<label for="email_conv">Correo electronico</label>
				<input name="email_conv" type="text" value="<?php echo $row['email']; ?>">
		</div>	



		<div class="metodo" style="display: none;">
		<h2>Despacho o Retiro<br>
			<font style="font-size:14px;">(De lunes a viernes)</font>
		</h2>
			<ul>
				<li>
					<input required type="radio" value="despacho" id="dom" name="metodo">
					
					<label>Despacho a domicilio</label><br>

					<img src="img/correosdechile.jpg" alt="">
					<img src="img/chilexpress.jpg" alt="">
					<p style="color:#9271c9;font-size: 12px;margin: 0;">(Puedes incluir hasta 5 frascos por el valor de un solo despacho)</p>	
					<p style="color:#9271c9;font-size: 12px;margin: 0;">(Si compra más de 12 frascos, le recomendamos contactarse via correo)</p>	
				</li>
				<li>
					<input required type="radio" id="retiro" value="retiro" name="metodo">
					
					<label>Retiro en el sector de ñuñoa con previo acuerdo via email</label>	
				</li>
			<div class="clear"></div>
			</ul>
		</div>		
		
		<div class="metodoform">
			<label for="nombre">Nombre</label><br>
				<input name="nombre" type="text" value="<?php echo $_SESSION['usuario']; ?>"><br><br>
			
			<label for="apellido">Apellidos</label><br>
				<input name="apellido" type="text" value="<?php echo $_SESSION['apellido']; ?>"><br><br>
			
			<label for="nombre">Dirección de Despacho</label><br>
			<input name="direccion_despacho" type="text" value="<?php echo $row['direccion_despacho']; ?>"><br><br>

			<label for="nombre">Comuna Destino</label><br>
			<select name="comunadestino" id="comunad" >
				<?php include('doc/comunadestino.txt'); ?>
			</select>
		</div>
		
		<div class="envio_total">
			<h3>+ Envío: $ </h3>
			<h3 id="com">0</h3><br>
			
			
			<!-- Hiddens -->
			<input type="hidden" name="envio">
			<input  type="Hidden" name="monto" id="total" value="0">
			<input  type="hidden" name="normal" id="normal" value="<?php echo $total; ?>">
			<input  type="hidden" name="desc" id="descuento" value="<?php echo $desc; ?>">			           <input  type="hidden" name="cantidad" id="can" value="<?php echo $can; ?>">
			<!-- fin Hiddens -->

			<h3 class="conv" style="display: none;">% Convenio</h3>

			<hr>
			<h2 class="convcolor" >Total a pagar: $ </h2>
			<h2 class="convcolor" id="result" ><?php echo $total; ?></h2>
		</div>
		<br><br><br>
		
		<div class="pago">
			<h2>Método de Pago</h2>

			<input id="pago_webpay" required type="radio" name="pago" value="webpay">
				<label for="webpay">
				Webpay (Débito y crédito)
				Será re-direccionado a Webpay Webservices para realizar su pago seguro</label><br><br>
			<img src="img/webpay-banner.png" alt=""><br><br>
			
			<input id="pago_transf"  type="radio" name="pago" value="transferencia">
				<label for="transferencia">Transferencia Electrónica</label>
				<label >(Nos contactaremos vía correo)</label>
			<br><br>

		</div>
		<input class="boton" type="submit" value="Comprar">
	</form>
</article>

<?php 
include('doc/comuna_codigo.php');
include('footer.php');
?>



<style>
	.tabla {
		width: 100%;
		overflow: scroll;
	}
	.fullconv {
		display: none;
	}

	.metodoform {
		display: none;
	}
	.clear {clear: left;}
	.metodo img {
		width: 100px;
	}

	.metodo {
		margin-bottom: 40px;
		display: block;
	}

	.metodo ul {
		padding: 0;
	}

	.metodo ul li {
    	display: block;
    	width: 237px;
    	padding: 10px;
    	border: 1px solid rgba(0,0,0,0.3);
    	height: 105px;
    	float: left;
	}

	.conv {
		color: #9271c9;
	}
	.pago {
		background: #FFE082;
		max-width: 500px;
		padding:20px;
		margin-bottom: 40px;
	}

	.pago img {
		width: 100%;
	}

	.pago label {
		display: inline-table;
		max-width:340px;
	}

	.boton {
		font-size: 24px;
		font-weight: normal;
		border-radius: 6px ;
		border: 0px solid;
		background: #FF9800;
		color: white;
		display: inline-block;
		cursor: pointer;
		transition: background 0.1s;
	}

	section {
		margin-bottom: 0 !important;
	}

	article {
		padding-top: 0 !important;
	}

	.boton:hover {
		background: #E65100;
	}


	form input[type='text']{
		width: 100%;
		font-size: 14px;
		
	}
	article {
		padding-top: 100px;
		max-width: 1200px;
		padding-left: 7%;
		padding-right: 7%;
		margin:auto;
	}

	article h2 {
		color:rgba(0,0,0,0.8);
		font-weight: normal;
	}
	
	table {
		overflow: scroll;
	    font-family: 'helvetica';
	    border-collapse: collapse;
	    width: 100%;
	}
	
	.enviar {
		font-size: 24px;
		font-weight: normal;
		border-radius: 6px ;
		border: 0px solid;
		margin:6px;
		padding: 5px 10px;
		background: #8DAD6B;
		color: white;
		display: inline-block;
		cursor: pointer;
	
	}
	
	form h1, form h2 {
		color:rgba(0,0,0,0.8);
		font-weight: normal;
	}
	
	hr {opacity: 0.4;}
	
	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	}
	
	tr:nth-child(even) {
	    background-color: #dddddd;
	}
	
	footer {
		margin-top: 100px;
	}
	
	label {
		font-size: 16px;
		font-weight: normal;
	
	}  

	
	#text {
		padding: 3px 5px;
		width: 100%;
		font-size: 14px;
		border: 1px solid rgba(0,0,0,0.4);
	}

	.envio_total {
		margin-top: 40px;
	}
	
	.envio_total h3, .envio_total h2 {
		display: inline;
		font-weight: normal;
	}
	
	
	@media screen and (max-width: 1080px) {
	}
</style>
<script type="text/javascript">
	//document.getElementById("comunad").value = "<?php //echo $row['comuna']; ?>";

	//Metodo Despacho
	$('input[name="metodo"]').change(function(){

		if ($('#dom').is(':checked')) {
			$('.metodoform').fadeIn();
			$('#e').attr("required", true);
            if ($('#conv[value="si"]').is(':checked')){
                $('#total').attr('value','<?php echo $desc; ?>');
            } else {
                $('#total').attr('value','<?php echo $total; ?>');
            }
		} else {
			$('.metodoform').fadeOut();
			$('#e').attr("required", false);
		}
	});

	$('input[name="pago"]').change(function(){
		if ($('#pago_webpay').is(':checked')) {
			$('#este').attr('action','webpay/sample/tbk-normal.php');
		} else {
			$('#este').attr('action','comprar_mail.php');
		}
	});

	$('.convenio').change(function(){
		if ($('#conv[value="si"]').is(':checked')){
			$('.fullconv').fadeIn();
			$('.conv').fadeIn();
			$('.metodo').fadeIn();
			$('#total').attr('value','<?php echo $desc; ?>');
			$('#result').text('<?php echo $desc; ?>');
			$('#conv').css('opacity','0.0');
			$('#convletra2').css('opacity','0.0');
			$('#conv[value="no"]').css('opacity','0.0');
			$('#convletra').text('Rellene el formulario');
			$('.convcolor').css('color','#9271c9');
		} else {
			$('.metodo').fadeIn();
			$('#conv').css('opacity','0.0');
			$('#letraconv').css('opacity','0.0');
			$('#convletra').css('opacity','0.0');
			$('#convletra2').css('opacity','0.0');
			$('#conv[value="no"]').css('opacity','0.0');
		}
	});


/*Falta redacción de mail----------------------------------------
	$('input[name="pago"]').change(function(){

		if ($('#pago_transf').is(':checked')) {
			$('#este').attr('action','comprar_mail.php');
		} else {
			$('#este').attr('action','webpay/sample/tbk-normal.php');
		}
	});
*/
</script>


<!--script type="text/javascript">
	var nombre_empresa = $('input[name="nombre_empresa"]').val();
	var nombre_socio = $('input[name="nombre_socio"]').val();
	var rut = $('input[name="rut"]').val();
	var telefono_conv = $('input[name="telefono_conv"]').val();
	var email_conv = $('input[name="email_conv"]').val();

$('#a').click(function(){

	if (nombre_empresa!=' ' && nombre_socio!=' ' && rut!=' ' && telefono_conv!=' '  && email_conv!=' ') {
		$('.conv').css('color','#9271c9');
		$('.conv').text('% Convenio: Aplicado');
	}

});

</script-->