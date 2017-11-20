<script type="text/javascript">

function verifica_comuna() {
	var comunad = $('#comunad').val();
	
    if ($('#dom').is(':checked') || comunad=="") { 
       alert("Debe selecionar una Comuna");
       return false
	}else{
		alert(comunad);
	}
}


		var totales = $('#normal').val();   
		var can = $('#can').val();
		var total = parseFloat(totales);



$('.convenio').change(function(){
	if ($('#conv[value="si"]').is(':checked')){
		var totales = $('#descuento').val();   
		var can = $('#can').val();
		var total = parseFloat(totales);
	} else {
		var totales = $('#normal').val();   
		var can = $('#can').val();
		var total = parseFloat(totales);
	}
});
          
    
    
$('#comunad').change(function() {

	if ($('#conv[value="si"]').is(':checked')){
		var totales = $('#descuento').val();   
		var can = $('#can').val();
		var total = parseFloat(totales);
	} else {
		var totales = $('#normal').val();   
		var can = $('#can').val();
		var total = parseFloat(totales);
	}

if ($('#dom').is(':checked')) {

var comunad = $('#comunad').val();

switch(comunad) {

case "ACHAO":
	var comunaprecio = 6400;
	break;
case "ALGARROBO":
	var comunaprecio = 5600;
	break;
case "ALTO HOSPICIO":
	var comunaprecio = 9600;
	break;
case "ALTO HOSPICIO":
	var comunaprecio = 10500;
	break;
case "ALTO JAHUEL":
	var comunaprecio = 3800;
	break;
case "ANCUD":
	var comunaprecio = 6400;
	break;
case "ANDACOLLO":
	var comunaprecio = 5700;
	break;
case "ANGOL":
	var comunaprecio = 6000;
	break;
case "ANTOFAGASTA":
	var comunaprecio = 8500;
	break;
case "ARAUCO":
	var comunaprecio = 5800;
	break;
case "ARICA":
	var comunaprecio = 8900;
	break;
case "ARTIFICIO":
	var comunaprecio = 5600;
	break;
case "BALMACEDA":
	var comunaprecio = 11000;
	break;
case "BARRANCAS":
	var comunaprecio = 5600;
	break;
case "BATUCO":
	var comunaprecio = 3800;
	break;
case "BUIN":
	var comunaprecio = 3800;
	break;
case "BULNES":
	var comunaprecio = 5800;
	break;
case "CABILDO":
	var comunaprecio = 5500;
	break;
case "CABRERO":
	var comunaprecio = 5800;
	break;
case "CALAMA":
	var comunaprecio = 9800;
	break;
case "CALBUCO":
	var comunaprecio = 6400;
	break;
case "CALDERA":
	var comunaprecio = 5600;
	break;
case "CANETE":
	var comunaprecio = 5800;
	break;
case "CARAHUE":
	var comunaprecio = 6000;
	break;
case "CARTAGENA":
	var comunaprecio = 5600;
	break;
case "CASABLANCA":
	var comunaprecio = 5600;
	break;
case "CASTRO":
	var comunaprecio = 6300;
	break;
case "CAUQUENES":
	var comunaprecio = 5800;
	break;
case "CERRILLOS":
	var comunaprecio = 3000;
	break;
case "CERRO NAVIA":
	var comunaprecio = 3000;
	break;
case "CHANARAL":
	var comunaprecio = 5600;
	break;
case "CHEPICA":
	var comunaprecio = 5800;
	break;
case "CHICUREO":
	var comunaprecio = 3200;
	break;
case "CHIGUAYANTE":
	var comunaprecio = 5000;
	break;
case "CHILE CHICO":
	var comunaprecio = 11000;
	break;
case "CHILLAN":
	var comunaprecio = 5000;
	break;
case "CHIMBARONGO":
	var comunaprecio = 5800;
	break;
case "CHOLGUAN":
	var comunaprecio = 5800;
	break;
case "CHONCHI":
	var comunaprecio = 6200;
	break;
case "COCHRANE":
	var comunaprecio = 11000;
	break;
case "CODELCO RADOMIRO TOMIC":
	var $comunaprecio = 9800;
	break;
case "COELEMU":
	var comunaprecio = 5800;
	break;
case "COINCO":
	var comunaprecio = 5800;
	break;
case "COLBUN":
	var comunaprecio = 5800;
	break;
case "COLINA":
	var comunaprecio = 3200;
	break;
case "COLLIPULLI":
	var comunaprecio = 6000;
	break;
case "COLTAUCO":
	var comunaprecio = 6000;
	break;
case "COMBARBALA":
	var comunaprecio = 5700;
	break;
case "CONCEPCION":
	var comunaprecio = 4800;
	break;
case "CONCHALI":
	var comunaprecio = 3000;
	break;
case "CONCON":
	var comunaprecio = 5600;
	break;
case "CONSTITUCION":
	var comunaprecio = 5800;
	break;
case "COPIAPO":
	var comunaprecio = 4600;
	break;
case "COQUIMBO":
	var comunaprecio = 4800;
	break;
case "CORONEL":
	var comunaprecio = 5800;
	break;
case "COYHAIQUE":
	var comunaprecio = 9000;
	break;
case "CURACAVI":
	var comunaprecio = 5600;
	break;
case "CURANILAHUE":
	var comunaprecio = 5800;
	break;
case "CURICO":
	var comunaprecio = 4800;
	break;
case "DALCAHUE":
	var comunaprecio = 6200;
	break;
case "DONIHUE":
	var comunaprecio = 5800;
	break;
case "EL BELLOTO":
	var comunaprecio = 5600;
	break;
case "EL BOSQUE":
	var comunaprecio = 3000;
	break;
case "EL MELON":
	var comunaprecio = 5600;
	break;
case "EL MONTE":
	var comunaprecio = 3800;
	break;
case "EL PAICO":
	var comunaprecio = 3800;
	break;
case "EL QUISCO":
	var comunaprecio = 5600;
	break;
case "EL TABITO":
	var comunaprecio = 5600;
	break;
case "EL TABO":
	var comunaprecio = 5600;
	break;
case "ENTRE LAGOS":
	var comunaprecio = 5900;
	break;
case "ESTACION CENTRAL":
	var comunaprecio = 3000;
	break;
case "ESTACION PAIPOTE":
	var comunaprecio = 5600;
	break;
case "FREIRE":
	var comunaprecio = 6000;
	break;
case "FREIRINA":
	var comunaprecio = 5600;
	break;
case "FRUTILLAR":
	var comunaprecio = 6400;
	break;
case "FUERTE BAQUEDANO":
	var comunaprecio = 9600;
	break;
case "FUTRONO":
	var comunaprecio = 6000;
	break;
case "GORBEA":
	var comunaprecio = 6000;
	break;
case "GRANEROS":
	var comunaprecio = 5700;
	break;
case "HIJUELAS":
	var comunaprecio = 5500;
	break;
case "HUALPEN":
	var comunaprecio = 5700;
	break;
case "HUASCO":
	var comunaprecio = 5700;
	break;
case "HUECHURABA":
	var comunaprecio = 3000;
	break;
case "HUEPIL":
	var comunaprecio = 5700;
	break;
case "ILLAPEL":
	var comunaprecio = 5700;
	break;
case "INDEPENDENCIA":
	var comunaprecio = 3000;
	break;
case "IQUIQUE":
	var comunaprecio = 8800;
	break;
case "ISLA DE MAIPO":
	var comunaprecio = 3800;
	break;
case "ISLA NEGRA":
	var comunaprecio = 5500;
	break;
case "ISLA TEJA":
	var comunaprecio = 6000;
	break;
case "ITAHUE":
	var comunaprecio = 5700;
	break;
case "LA CALERA":
	var comunaprecio = 4600;
	break;
case "LA CISTERNA":
	var comunaprecio = 3000;
	break;
case "LA CRUZ":
	var comunaprecio = 5500;
	break;
case "LA FLORIDA":
	var comunaprecio = 3000;
	break;
case "LA GRANJA":
	var comunaprecio = 3000;
	break;
case "LA JUNTA":
	var comunaprecio = 11000;
	break;
case "LA LIGUA":
	var comunaprecio = 5500;
	break;
case "LA PINTANA":
	var comunaprecio = 3000;
	break;
case "LA REINA":
	var comunaprecio = 3000;
	break;
case "LA SERENA":
	var comunaprecio = 4800;
	break;
case "LA UNION":
	var comunaprecio = 5900;
	break;
case "LAGO RANCO":
	var comunaprecio = 5900;
	break;
case "LAJA":
	var comunaprecio = 5700;
	break;
case "LAMPA":
	var comunaprecio = 3800;
	break;
case "LANCO":
	var comunaprecio = 6000;
	break;
case "LAS CABRAS":
	var comunaprecio = 5700;
	break;
case "LAS CONDES":
	var comunaprecio = 3000;
	break;
case "LAS CRUCES":
	var comunaprecio = 5500;
	break;
case "LAUTARO":
	var comunaprecio = 6000;
	break;
case "LIMACHE":
	var comunaprecio = 5500;
	break;
case "LINARES":
	var comunaprecio = 4800;
	break;
case "LLANQUIHUE":
	var comunaprecio = 6200;
	break;
case "LLAY LLAY":
	var comunaprecio = 5500;
	break;
case "LLO LLEO":
	var comunaprecio = 5500;
	break;
case "LO BARNECHEA":
	var comunaprecio = 3000;
	break;
case "LO ESPEJO":
	var comunaprecio = 3000;
	break;
case "LO MIRANDA":
	var comunaprecio = 5700;
	break;
case "LO PRADO":
	var comunaprecio = 3000;
	break;
case "LOLOL":
	var comunaprecio = 5700;
	break;
case "LONCOCHE":
	var comunaprecio = 6000;
	break;
case "LONGAVI":
	var comunaprecio = 5700;
	break;
case "LONGOVILO":
	var comunaprecio = 5700;
	break;
case "LONQUEN":
	var comunaprecio = 3800;
	break;
case "LONTUE":
	var comunaprecio = 5700;
	break;
case "LOS ANDES":
	var comunaprecio = 5500;
	break;
case "LOS ANGELES":
	var comunaprecio = 4800;
	break;
case "LOS LAGOS":
	var comunaprecio = 6000;
	break;
case "LOS VILOS":
	var comunaprecio = 5700;
	break;
case "LOTA":
	var comunaprecio = 5700;
	break;
case "MACHALI":
	var comunaprecio = 5700;
	break;
case "MACUL":
	var comunaprecio = 3000;
	break;
case "MAIPU":
	var comunaprecio = 3000;
	break;
case "MALLOA":
	var comunaprecio = 5700;
	break;
case "MALLOCO":
	var comunaprecio = 3800;
	break;
case "MARCHIGUE":
	var comunaprecio = 5700;
	break;
case "MARIA ELENA":
	var comunaprecio = 8800;
	break;
case "MAULLIN":
	var comunaprecio = 6200;
	break;
case "MEJILLONES":
	var comunaprecio = 8800;
	break;
case "MEJILLONES":
	var comunaprecio = 9800;
	break;
case "MELIPILLA":
	var comunaprecio = 3800;
	break;
case "MININCO":
	var comunaprecio = 6000;
	break;
case "MOLINA":
	var comunaprecio = 5700;
	break;
case "MONTE PATRIA":
	var comunaprecio = 5700;
	break;
case "MULCHEN":
	var comunaprecio = 5700;
	break;
case "NACIMIENTO":
	var comunaprecio = 5700;
	break;
case "NANCAGUA":
	var comunaprecio = 5700;
	break;
case "NOGALES":
	var comunaprecio = 5500;
	break;
case "NOS":
	var comunaprecio = 3800;
	break;
case "NUEVA ALDEA":
	var comunaprecio = 5700;
	break;
case "NUEVA IMPERIAL":
	var comunaprecio = 6000;
	break;
case "NUNOA":
	var comunaprecio = 3000;
	break;
case "OLIVAR":
	var comunaprecio = 5700;
	break;
case "OLMUE":
	var comunaprecio = 5500;
	break;
case "OSORNO":
	var comunaprecio = 5000;
	break;
case "OVALLE":
	var comunaprecio = 4800;
	break;
case "PADRE HURTADO":
	var comunaprecio = 3100;
	break;
case "PADRE LAS CASAS":
	var comunaprecio = 5000;
	break;
case "PAILLACO":
	var comunaprecio = 6000;
	break;
case "PAINE":
	var comunaprecio = 3800;
	break;
case "PAIPOTE":
	var comunaprecio = 5500;
	break;
case "PALMILLA":
	var comunaprecio = 5700;
	break;
case "PANGUIPULLI":
	var comunaprecio = 6000;
	break;
case "PARGUA":
	var comunaprecio = 6200;
	break;
case "PARRAL":
	var comunaprecio = 5700;
	break;
case "PEDRO AGUIRRE CERDA":
	var $comunaprecio = 3000;
	break;
case "PELEQUEN":
	var comunaprecio = 5700;
	break;
case "PEMUCO":
	var comunaprecio = 5700;
	break;
case "PENABLANCA":
	var comunaprecio = 5500;
	break;
case "PENAFLOR":
	var comunaprecio = 3100;
	break;
case "PENALOLEN":
	var comunaprecio = 3000;
	break;
case "PENCO":
	var comunaprecio = 5700;
	break;
case "PERALILLO":
	var comunaprecio = 5700;
	break;
case "PEUMO":
	var comunaprecio = 5700;
	break;
case "PICHIDEGUA":
	var comunaprecio = 5700;
	break;
case "PICHILEMU":
	var comunaprecio = 5700;
	break;
case "PIRQUE":
	var comunaprecio = 3100;
	break;
case "PITRUFQUEN":
	var comunaprecio = 6000;
	break;
case "PLACILLA QUINTA REGION":
	var $comunaprecio = 5500;
	break;
case "PLACILLA SEXTA REGION":
	var $comunaprecio = 5700;
	break;
case "POZO ALMONTE":
	var comunaprecio = 9600;
	break;
case "PROVIDENCIA":
	var comunaprecio = 3000;
	break;
case "PUCHUNCAVI":
	var comunaprecio = 5500;
	break;
case "PUCON":
	var comunaprecio = 6000;
	break;
case "PUDAHUEL":
	var comunaprecio = 3000;
	break;
case "PUEBLO SECO":
	var comunaprecio = 5700;
	break;
case "PUENTE ALTO":
	var comunaprecio = 3000;
	break;
case "PUERTO AGUIRRE":
	var comunaprecio = 11000;
	break;
case "PUERTO MONTT":
	var comunaprecio = 5200;
	break;
case "PUERTO VARAS":
	var comunaprecio = 6200;
	break;
case "PUNITAQUI":
	var comunaprecio = 5700;
	break;
case "PUNTA ARENAS":
	var comunaprecio = 9000;
	break;
case "PUREN":
	var comunaprecio = 6000;
	break;
case "PURRANQUE":
	var comunaprecio = 5900;
	break;
case "PUYUHUAPI":
	var comunaprecio = 11000;
	break;
case "QUEMCHI":
	var comunaprecio = 6200;
	break;
case "QUEPE":
	var comunaprecio = 6000;
	break;
case "QUILICURA":
	var comunaprecio = 3000;
	break;
case "QUILLON":
	var comunaprecio = 5700;
	break;
case "QUILLOTA":
	var comunaprecio = 5500;
	break;
case "QUILPUE":
	var comunaprecio = 5500;
	break;
case "QUINTA DE TILCOCO":
	var $comunaprecio = 5700;
	break;
case "QUINTA NORMAL":
	var comunaprecio = 3000;
	break;
case "QUINTERO":
	var comunaprecio = 5500;
	break;
case "QUIRIHUE":
	var comunaprecio = 5700;
	break;
case "QUIRIQUINA":
	var comunaprecio = 5700;
	break;
case "RANCAGUA":
	var comunaprecio = 4800;
	break;
case "RECOLETA":
	var comunaprecio = 3000;
	break;
case "RENACA":
	var comunaprecio = 5500;
	break;
case "RENAICO":
	var comunaprecio = 6000;
	break;
case "RENCA":
	var comunaprecio = 3000;
	break;
case "RENGO":
	var comunaprecio = 5700;
	break;
case "REQUINOA":
	var comunaprecio = 5700;
	break;
case "RIO BUENO":
	var comunaprecio = 5900;
	break;
case "RIO NEGRO":
	var comunaprecio = 5900;
	break;
case "ROSARIO":
	var comunaprecio = 5700;
	break;
case "SALAMANCA":
	var comunaprecio = 5700;
	break;
case "SAN ANTONIO":
	var comunaprecio = 4600;
	break;
case "SAN BERNARDO":
	var comunaprecio = 3000;
	break;
case "SAN CARLOS":
	var comunaprecio = 5700;
	break;
case "SAN CLEMENTE":
	var comunaprecio = 5700;
	break;
case "SAN FELIPE":
	var comunaprecio = 5500;
	break;
case "SAN FERNANDO":
	var comunaprecio = 4800;
	break;
case "SAN JAVIER":
	var comunaprecio = 5700;
	break;
case "SAN JOAQUIN":
	var comunaprecio = 3000;
	break;
case "SAN MIGUEL":
	var comunaprecio = 3000;
	break;
case "SAN PABLO":
	var comunaprecio = 5900;
	break;
case "SAN PEDRO DE ATACAMA":
	var $comunaprecio = 9800;
	break;
case "SAN PEDRO DE LA PAZ":
	var $comunaprecio = 4800;
	break;
case "SAN PEDRO QUINTA REGION":
	$comunaprecio = 5500;
	var reak;
case "SAN RAMON":
	var comunaprecio = 3000;
	break;
case "SAN ROSENDO":
	var comunaprecio = 5700;
	break;
case "SAN SEBASTIAN":
	var comunaprecio = 5500;
	break;
case "SANTA CRUZ":
	var comunaprecio = 5700;
	break;
case "SANTIAGO CENTRO":
	var comunaprecio = 3000;
	break;
case "SANTO DOMINGO":
	var comunaprecio = 5500;
	break;
case "SIERRA GORDA":
	var comunaprecio = 7400;
	break;
case "TALAGANTE":
	var comunaprecio = 3100;
	break;
case "TALCA":
	var comunaprecio = 4800;
	break;
case "TALCAHUANO":
	var comunaprecio = 4800;
	break;
case "TALTAL":
	var comunaprecio = 5500;
	break;
case "TEMUCO":
	var comunaprecio = 5000;
	break;
case "TENO":
	var comunaprecio = 5700;
	break;
case "TIERRA AMARILLA":
	var comunaprecio = 5500;
	break;
case "TIL TIL":
	var comunaprecio = 3800;
	break;
case "TOCOPILLA":
	var comunaprecio = 8800;
	break;
case "TOME":
	var comunaprecio = 5700;
	break;
case "TRAIGUEN":
	var comunaprecio = 6000;
	break;
case "TUCAPEL":
	var comunaprecio = 5700;
	break;
case "VALDIVIA":
	var comunaprecio = 5000;
	break;
case "VALLENAR":
	var comunaprecio = 5700;
	break;
case "VALPARAISO":
	var comunaprecio = 4600;
	break;
case "VICTORIA":
	var comunaprecio = 6000;
	break;
case "VICUNA":
	var comunaprecio = 5700;
	break;
case "VILLA ALEMANA":
	var comunaprecio = 5500;
	break;
case "VILLARRICA":
	var comunaprecio = 6000;
	break;
case "VINA DEL MAR":
	var comunaprecio = 4600;
	break;
case "VITACURA":
	var comunaprecio = 3000;
	break;
case "YUMBEL":
	var comunaprecio = 5700;
	break;
case "YUNGAY":
	var comunaprecio = 5700;
	break;
default:
	var comunaprecio = 0;
}


//formula para envio por 6 productos

var i = can / 6;


	i = i + 1;


if (i % 1 == 0 ) {

} else {
	var i = parseInt(i);
}

//envio
var com = parseFloat(comunaprecio);

var en = com * i;

var result = total + en;




$('#com').text(en);
$('input[name="envio"]').val(en);
$('#result').text(result);
$('#total').val(result);     


} else {
	
$('#com').text('0');
$('input[name="envio"]').val('0');
$('#result').text(total);

$('#total').val(total);

}


});

$('input[name="metodo"]').change(function() {

	if ($('#conv[value="si"]').is(':checked')){
		var totales = $('#descuento').val();   
		var can = $('#can').val();
		var total = parseFloat(totales);
	} else {
		var totales = $('#normal').val();   
		var can = $('#can').val();
		var total = parseFloat(totales);
	}


if ($('#dom').is(':checked')) {

var comunad = $('#comunad').val();

switch(comunad) {

case "ACHAO":
	var comunaprecio = 6400;
	break;
case "ALGARROBO":
	var comunaprecio = 5600;
	break;
case "ALTO HOSPICIO":
	var comunaprecio = 9600;
	break;
case "ALTO HOSPICIO":
	var comunaprecio = 10500;
	break;
case "ALTO JAHUEL":
	var comunaprecio = 3800;
	break;
case "ANCUD":
	var comunaprecio = 6400;
	break;
case "ANDACOLLO":
	var comunaprecio = 5700;
	break;
case "ANGOL":
	var comunaprecio = 6000;
	break;
case "ANTOFAGASTA":
	var comunaprecio = 8500;
	break;
case "ARAUCO":
	var comunaprecio = 5800;
	break;
case "ARICA":
	var comunaprecio = 8900;
	break;
case "ARTIFICIO":
	var comunaprecio = 5600;
	break;
case "BALMACEDA":
	var comunaprecio = 11000;
	break;
case "BARRANCAS":
	var comunaprecio = 5600;
	break;
case "BATUCO":
	var comunaprecio = 3800;
	break;
case "BUIN":
	var comunaprecio = 3800;
	break;
case "BULNES":
	var comunaprecio = 5800;
	break;
case "CABILDO":
	var comunaprecio = 5500;
	break;
case "CABRERO":
	var comunaprecio = 5800;
	break;
case "CALAMA":
	var comunaprecio = 9800;
	break;
case "CALBUCO":
	var comunaprecio = 6400;
	break;
case "CALDERA":
	var comunaprecio = 5600;
	break;
case "CANETE":
	var comunaprecio = 5800;
	break;
case "CARAHUE":
	var comunaprecio = 6000;
	break;
case "CARTAGENA":
	var comunaprecio = 5600;
	break;
case "CASABLANCA":
	var comunaprecio = 5600;
	break;
case "CASTRO":
	var comunaprecio = 6300;
	break;
case "CAUQUENES":
	var comunaprecio = 5800;
	break;
case "CERRILLOS":
	var comunaprecio = 3000;
	break;
case "CERRO NAVIA":
	var comunaprecio = 3000;
	break;
case "CHANARAL":
	var comunaprecio = 5600;
	break;
case "CHEPICA":
	var comunaprecio = 5800;
	break;
case "CHICUREO":
	var comunaprecio = 3200;
	break;
case "CHIGUAYANTE":
	var comunaprecio = 5000;
	break;
case "CHILE CHICO":
	var comunaprecio = 11000;
	break;
case "CHILLAN":
	var comunaprecio = 5000;
	break;
case "CHIMBARONGO":
	var comunaprecio = 5800;
	break;
case "CHOLGUAN":
	var comunaprecio = 5800;
	break;
case "CHONCHI":
	var comunaprecio = 6200;
	break;
case "COCHRANE":
	var comunaprecio = 11000;
	break;
case "CODELCO RADOMIRO TOMIC":
	var $comunaprecio = 9800;
	break;
case "COELEMU":
	var comunaprecio = 5800;
	break;
case "COINCO":
	var comunaprecio = 5800;
	break;
case "COLBUN":
	var comunaprecio = 5800;
	break;
case "COLINA":
	var comunaprecio = 3200;
	break;
case "COLLIPULLI":
	var comunaprecio = 6000;
	break;
case "COLTAUCO":
	var comunaprecio = 6000;
	break;
case "COMBARBALA":
	var comunaprecio = 5700;
	break;
case "CONCEPCION":
	var comunaprecio = 4800;
	break;
case "CONCHALI":
	var comunaprecio = 3000;
	break;
case "CONCON":
	var comunaprecio = 5600;
	break;
case "CONSTITUCION":
	var comunaprecio = 5800;
	break;
case "COPIAPO":
	var comunaprecio = 4600;
	break;
case "COQUIMBO":
	var comunaprecio = 4800;
	break;
case "CORONEL":
	var comunaprecio = 5800;
	break;
case "COYHAIQUE":
	var comunaprecio = 9000;
	break;
case "CURACAVI":
	var comunaprecio = 5600;
	break;
case "CURANILAHUE":
	var comunaprecio = 5800;
	break;
case "CURICO":
	var comunaprecio = 4800;
	break;
case "DALCAHUE":
	var comunaprecio = 6200;
	break;
case "DONIHUE":
	var comunaprecio = 5800;
	break;
case "EL BELLOTO":
	var comunaprecio = 5600;
	break;
case "EL BOSQUE":
	var comunaprecio = 3000;
	break;
case "EL MELON":
	var comunaprecio = 5600;
	break;
case "EL MONTE":
	var comunaprecio = 3800;
	break;
case "EL PAICO":
	var comunaprecio = 3800;
	break;
case "EL QUISCO":
	var comunaprecio = 5600;
	break;
case "EL TABITO":
	var comunaprecio = 5600;
	break;
case "EL TABO":
	var comunaprecio = 5600;
	break;
case "ENTRE LAGOS":
	var comunaprecio = 5900;
	break;
case "ESTACION CENTRAL":
	var comunaprecio = 3000;
	break;
case "ESTACION PAIPOTE":
	var comunaprecio = 5600;
	break;
case "FREIRE":
	var comunaprecio = 6000;
	break;
case "FREIRINA":
	var comunaprecio = 5600;
	break;
case "FRUTILLAR":
	var comunaprecio = 6400;
	break;
case "FUERTE BAQUEDANO":
	var comunaprecio = 9600;
	break;
case "FUTRONO":
	var comunaprecio = 6000;
	break;
case "GORBEA":
	var comunaprecio = 6000;
	break;
case "GRANEROS":
	var comunaprecio = 5700;
	break;
case "HIJUELAS":
	var comunaprecio = 5500;
	break;
case "HUALPEN":
	var comunaprecio = 5700;
	break;
case "HUASCO":
	var comunaprecio = 5700;
	break;
case "HUECHURABA":
	var comunaprecio = 3000;
	break;
case "HUEPIL":
	var comunaprecio = 5700;
	break;
case "ILLAPEL":
	var comunaprecio = 5700;
	break;
case "INDEPENDENCIA":
	var comunaprecio = 3000;
	break;
case "IQUIQUE":
	var comunaprecio = 8800;
	break;
case "ISLA DE MAIPO":
	var comunaprecio = 3800;
	break;
case "ISLA NEGRA":
	var comunaprecio = 5500;
	break;
case "ISLA TEJA":
	var comunaprecio = 6000;
	break;
case "ITAHUE":
	var comunaprecio = 5700;
	break;
case "LA CALERA":
	var comunaprecio = 4600;
	break;
case "LA CISTERNA":
	var comunaprecio = 3000;
	break;
case "LA CRUZ":
	var comunaprecio = 5500;
	break;
case "LA FLORIDA":
	var comunaprecio = 3000;
	break;
case "LA GRANJA":
	var comunaprecio = 3000;
	break;
case "LA JUNTA":
	var comunaprecio = 11000;
	break;
case "LA LIGUA":
	var comunaprecio = 5500;
	break;
case "LA PINTANA":
	var comunaprecio = 3000;
	break;
case "LA REINA":
	var comunaprecio = 3000;
	break;
case "LA SERENA":
	var comunaprecio = 4800;
	break;
case "LA UNION":
	var comunaprecio = 5900;
	break;
case "LAGO RANCO":
	var comunaprecio = 5900;
	break;
case "LAJA":
	var comunaprecio = 5700;
	break;
case "LAMPA":
	var comunaprecio = 3800;
	break;
case "LANCO":
	var comunaprecio = 6000;
	break;
case "LAS CABRAS":
	var comunaprecio = 5700;
	break;
case "LAS CONDES":
	var comunaprecio = 3000;
	break;
case "LAS CRUCES":
	var comunaprecio = 5500;
	break;
case "LAUTARO":
	var comunaprecio = 6000;
	break;
case "LIMACHE":
	var comunaprecio = 5500;
	break;
case "LINARES":
	var comunaprecio = 4800;
	break;
case "LLANQUIHUE":
	var comunaprecio = 6200;
	break;
case "LLAY LLAY":
	var comunaprecio = 5500;
	break;
case "LLO LLEO":
	var comunaprecio = 5500;
	break;
case "LO BARNECHEA":
	var comunaprecio = 3000;
	break;
case "LO ESPEJO":
	var comunaprecio = 3000;
	break;
case "LO MIRANDA":
	var comunaprecio = 5700;
	break;
case "LO PRADO":
	var comunaprecio = 3000;
	break;
case "LOLOL":
	var comunaprecio = 5700;
	break;
case "LONCOCHE":
	var comunaprecio = 6000;
	break;
case "LONGAVI":
	var comunaprecio = 5700;
	break;
case "LONGOVILO":
	var comunaprecio = 5700;
	break;
case "LONQUEN":
	var comunaprecio = 3800;
	break;
case "LONTUE":
	var comunaprecio = 5700;
	break;
case "LOS ANDES":
	var comunaprecio = 5500;
	break;
case "LOS ANGELES":
	var comunaprecio = 4800;
	break;
case "LOS LAGOS":
	var comunaprecio = 6000;
	break;
case "LOS VILOS":
	var comunaprecio = 5700;
	break;
case "LOTA":
	var comunaprecio = 5700;
	break;
case "MACHALI":
	var comunaprecio = 5700;
	break;
case "MACUL":
	var comunaprecio = 3000;
	break;
case "MAIPU":
	var comunaprecio = 3000;
	break;
case "MALLOA":
	var comunaprecio = 5700;
	break;
case "MALLOCO":
	var comunaprecio = 3800;
	break;
case "MARCHIGUE":
	var comunaprecio = 5700;
	break;
case "MARIA ELENA":
	var comunaprecio = 8800;
	break;
case "MAULLIN":
	var comunaprecio = 6200;
	break;
case "MEJILLONES":
	var comunaprecio = 8800;
	break;
case "MEJILLONES":
	var comunaprecio = 9800;
	break;
case "MELIPILLA":
	var comunaprecio = 3800;
	break;
case "MININCO":
	var comunaprecio = 6000;
	break;
case "MOLINA":
	var comunaprecio = 5700;
	break;
case "MONTE PATRIA":
	var comunaprecio = 5700;
	break;
case "MULCHEN":
	var comunaprecio = 5700;
	break;
case "NACIMIENTO":
	var comunaprecio = 5700;
	break;
case "NANCAGUA":
	var comunaprecio = 5700;
	break;
case "NOGALES":
	var comunaprecio = 5500;
	break;
case "NOS":
	var comunaprecio = 3800;
	break;
case "NUEVA ALDEA":
	var comunaprecio = 5700;
	break;
case "NUEVA IMPERIAL":
	var comunaprecio = 6000;
	break;
case "NUNOA":
	var comunaprecio = 3000;
	break;
case "OLIVAR":
	var comunaprecio = 5700;
	break;
case "OLMUE":
	var comunaprecio = 5500;
	break;
case "OSORNO":
	var comunaprecio = 5000;
	break;
case "OVALLE":
	var comunaprecio = 4800;
	break;
case "PADRE HURTADO":
	var comunaprecio = 3100;
	break;
case "PADRE LAS CASAS":
	var comunaprecio = 5000;
	break;
case "PAILLACO":
	var comunaprecio = 6000;
	break;
case "PAINE":
	var comunaprecio = 3800;
	break;
case "PAIPOTE":
	var comunaprecio = 5500;
	break;
case "PALMILLA":
	var comunaprecio = 5700;
	break;
case "PANGUIPULLI":
	var comunaprecio = 6000;
	break;
case "PARGUA":
	var comunaprecio = 6200;
	break;
case "PARRAL":
	var comunaprecio = 5700;
	break;
case "PEDRO AGUIRRE CERDA":
	var $comunaprecio = 3000;
	break;
case "PELEQUEN":
	var comunaprecio = 5700;
	break;
case "PEMUCO":
	var comunaprecio = 5700;
	break;
case "PENABLANCA":
	var comunaprecio = 5500;
	break;
case "PENAFLOR":
	var comunaprecio = 3100;
	break;
case "PENALOLEN":
	var comunaprecio = 3000;
	break;
case "PENCO":
	var comunaprecio = 5700;
	break;
case "PERALILLO":
	var comunaprecio = 5700;
	break;
case "PEUMO":
	var comunaprecio = 5700;
	break;
case "PICHIDEGUA":
	var comunaprecio = 5700;
	break;
case "PICHILEMU":
	var comunaprecio = 5700;
	break;
case "PIRQUE":
	var comunaprecio = 3100;
	break;
case "PITRUFQUEN":
	var comunaprecio = 6000;
	break;
case "PLACILLA QUINTA REGION":
	var $comunaprecio = 5500;
	break;
case "PLACILLA SEXTA REGION":
	var $comunaprecio = 5700;
	break;
case "POZO ALMONTE":
	var comunaprecio = 9600;
	break;
case "PROVIDENCIA":
	var comunaprecio = 3000;
	break;
case "PUCHUNCAVI":
	var comunaprecio = 5500;
	break;
case "PUCON":
	var comunaprecio = 6000;
	break;
case "PUDAHUEL":
	var comunaprecio = 3000;
	break;
case "PUEBLO SECO":
	var comunaprecio = 5700;
	break;
case "PUENTE ALTO":
	var comunaprecio = 3000;
	break;
case "PUERTO AGUIRRE":
	var comunaprecio = 11000;
	break;
case "PUERTO MONTT":
	var comunaprecio = 5200;
	break;
case "PUERTO VARAS":
	var comunaprecio = 6200;
	break;
case "PUNITAQUI":
	var comunaprecio = 5700;
	break;
case "PUNTA ARENAS":
	var comunaprecio = 9000;
	break;
case "PUREN":
	var comunaprecio = 6000;
	break;
case "PURRANQUE":
	var comunaprecio = 5900;
	break;
case "PUYUHUAPI":
	var comunaprecio = 11000;
	break;
case "QUEMCHI":
	var comunaprecio = 6200;
	break;
case "QUEPE":
	var comunaprecio = 6000;
	break;
case "QUILICURA":
	var comunaprecio = 3000;
	break;
case "QUILLON":
	var comunaprecio = 5700;
	break;
case "QUILLOTA":
	var comunaprecio = 5500;
	break;
case "QUILPUE":
	var comunaprecio = 5500;
	break;
case "QUINTA DE TILCOCO":
	var $comunaprecio = 5700;
	break;
case "QUINTA NORMAL":
	var comunaprecio = 3000;
	break;
case "QUINTERO":
	var comunaprecio = 5500;
	break;
case "QUIRIHUE":
	var comunaprecio = 5700;
	break;
case "QUIRIQUINA":
	var comunaprecio = 5700;
	break;
case "RANCAGUA":
	var comunaprecio = 4800;
	break;
case "RECOLETA":
	var comunaprecio = 3000;
	break;
case "RENACA":
	var comunaprecio = 5500;
	break;
case "RENAICO":
	var comunaprecio = 6000;
	break;
case "RENCA":
	var comunaprecio = 3000;
	break;
case "RENGO":
	var comunaprecio = 5700;
	break;
case "REQUINOA":
	var comunaprecio = 5700;
	break;
case "RIO BUENO":
	var comunaprecio = 5900;
	break;
case "RIO NEGRO":
	var comunaprecio = 5900;
	break;
case "ROSARIO":
	var comunaprecio = 5700;
	break;
case "SALAMANCA":
	var comunaprecio = 5700;
	break;
case "SAN ANTONIO":
	var comunaprecio = 4600;
	break;
case "SAN BERNARDO":
	var comunaprecio = 3000;
	break;
case "SAN CARLOS":
	var comunaprecio = 5700;
	break;
case "SAN CLEMENTE":
	var comunaprecio = 5700;
	break;
case "SAN FELIPE":
	var comunaprecio = 5500;
	break;
case "SAN FERNANDO":
	var comunaprecio = 4800;
	break;
case "SAN JAVIER":
	var comunaprecio = 5700;
	break;
case "SAN JOAQUIN":
	var comunaprecio = 3000;
	break;
case "SAN MIGUEL":
	var comunaprecio = 3000;
	break;
case "SAN PABLO":
	var comunaprecio = 5900;
	break;
case "SAN PEDRO DE ATACAMA":
	var $comunaprecio = 9800;
	break;
case "SAN PEDRO DE LA PAZ":
	var $comunaprecio = 4800;
	break;
case "SAN PEDRO QUINTA REGION":
	var $comunaprecio = 5500;
	break;
case "SAN RAMON":
	var comunaprecio = 3000;
	break;
case "SAN ROSENDO":
	var comunaprecio = 5700;
	break;
case "SAN SEBASTIAN":
	var comunaprecio = 5500;
	break;
case "SANTA CRUZ":
	var comunaprecio = 5700;
	break;
case "SANTIAGO CENTRO":
	var comunaprecio = 3000;
	break;
case "SANTO DOMINGO":
	var comunaprecio = 5500;
	break;
case "SIERRA GORDA":
	var comunaprecio = 7400;
	break;
case "TALAGANTE":
	var comunaprecio = 3100;
	break;
case "TALCA":
	var comunaprecio = 4800;
	break;
case "TALCAHUANO":
	var comunaprecio = 4800;
	break;
case "TALTAL":
	var comunaprecio = 5500;
	break;
case "TEMUCO":
	var comunaprecio = 5000;
	break;
case "TENO":
	var comunaprecio = 5700;
	break;
case "TIERRA AMARILLA":
	var comunaprecio = 5500;
	break;
case "TIL TIL":
	var comunaprecio = 3800;
	break;
case "TOCOPILLA":
	var comunaprecio = 8800;
	break;
case "TOME":
	var comunaprecio = 5700;
	break;
case "TRAIGUEN":
	var comunaprecio = 6000;
	break;
case "TUCAPEL":
	var comunaprecio = 5700;
	break;
case "VALDIVIA":
	var comunaprecio = 5000;
	break;
case "VALLENAR":
	var comunaprecio = 5700;
	break;
case "VALPARAISO":
	var comunaprecio = 4600;
	break;
case "VICTORIA":
	var comunaprecio = 6000;
	break;
case "VICUNA":
	var comunaprecio = 5700;
	break;
case "VILLA ALEMANA":
	var comunaprecio = 5500;
	break;
case "VILLARRICA":
	var comunaprecio = 6000;
	break;
case "VINA DEL MAR":
	var comunaprecio = 4600;
	break;
case "VITACURA":
	var comunaprecio = 3000;
	break;
case "YUMBEL":
	var comunaprecio = 5700;
	break;
case "YUNGAY":
	var comunaprecio = 5700;
	break;
default:
	var comunaprecio = 0;
}

//formula para envio por 6 productos

var i = can / 6;


	i = i + 1;


if (i % 1 == 0 ) {

} else {
	var i = parseInt(i);
}


//envio
var com = parseFloat(comunaprecio);


var en = com * i;


var result = total + en;

$('#com').text(en);
$('input[name="envio"]').val(en);
$('#result').text(result);
$('#total').val(result);

} else {

$('#com').text('0');
$('input[name="envio"]').val('0');

$('#result').text(total);
$('#total').val(total);
}

});




</script>