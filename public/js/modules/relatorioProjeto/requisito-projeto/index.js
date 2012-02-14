var strOption = "<option value=\"0\">"+i18n.L_VIEW_SCRIPT_SELECIONE+"</option>";

$(document).ready(  function() {
	
	if($("#cd_contrato").val() != 0){
		getProjeto();
	}

	$("#cd_contrato").change(function() {
		if($(this).val() != 0){
			getProjeto();		
		}else{
			$("#cd_projeto").html(strOption);
		}
	});
	
    $('#btn_gerar').click( function(){
    	
        if( !validaForm() ){ return false; }
        gerarRelatorio( $('#formRelatorioProjetoRequisito') , 'requisito-projeto/requisito-projeto' );
        return true;
    });
});

function getProjeto()
{
	$.ajax({
		type: "POST",
		url: systemName+"/"+systemNameModule+"/ata-de-reuniao/pesquisa-projeto",
		data: "cd_contrato="+$("#cd_contrato").val(),
		success: function(retorno){
			$("#cd_projeto").html(retorno);
		}
	});
}