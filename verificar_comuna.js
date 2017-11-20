function verifica_comuna() {
    var comunad = $('#comunad').val();
    if ($('#dom').is(':checked') || comunad=="Selecciona") { 
       alert("Debe selecionar una Comuna")
       return false
    }		
}