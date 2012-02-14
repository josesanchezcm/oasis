$(document).ready(function(){
    $('#cd_tipo_documentacao').change(extensoesDocumentoProposta);
    $('#cd_contrato_documentacao').change(montaComboProjetoContrato);

    $('#cd_projeto_documentacao').change(function(){
        if($(this).val() != "0"){
            montaGridDocumentacaoAcompanhamento();
        } else {
            $('#gridDocumentacaoAcompanhamento').hide();
        }
    });
});

function _fnUploadDocumentacaoAcompanhamentoFiscalizacao(){
    if( validaDadosDocumentacao() ){
        ajaxFileUpload({
            "url"           : systemName + '/acompanhamento-fiscalizacao-documentacao/upload-file',
            "inputFile"     : $('#tx_arq_documentacao_projeto'),
            "data"          : $('#cd_tipo_documentacao').add('#cd_projeto_documentacao'),
            "fileSize"      : '209715200',
            "uploadDir"     : '/public/documentacao/projeto',
            "uploadUp"      : '/public/documentacao/projeto',
            "imgLoader"     : $("#imgLoadDocumentacaoProjetoControle"),
            "callback"      : montaGridDocumentacaoAcompanhamento
        });
    }else{
        return false;
    }
}

function validaDadosDocumentacao(){
	if($('#cd_contrato_documentacao').val() == "0" || $('#cd_contrato_documentacao').val() == null){
		showToolTip('Campo obrigatório',$('#cd_contrato_documentacao'));
		$('#cd_contrato_documentacao').focus();
		return false;
	}else if($('#cd_tipo_documentacao').val() == "0" || $('#cd_tipo_documentacao').val() == null){
		showToolTip('Campo obrigatório',$('#cd_tipo_documentacao'));
		$('#cd_tipo_documentacao').focus();
		return false;
	}else if($('#cd_projeto_documentacao').val() == "0" || $('#cd_projeto_documentacao').val() == null){
		showToolTip('Campo obrigatório',$('#cd_projeto_documentacao'));
		$('#cd_projeto_documentacao').focus();
		return false; 
	}else if($('#tx_arq_documentacao_projeto').val() == ""){
		showToolTip('Campo obrigatório',$('#tx_arq_documentacao_projeto'));
		$('#tx_arq_documentacao_projeto').focus();
		return false;
	}
	return true;
}

function montaComboProjetoContrato(){
	$.ajax({
		type	: "POST",
		url		: systemName+"/associar-projeto-contrato/pesquisa-projeto-contrato",
		data	: "cd_contrato="+$("#cd_contrato_documentacao").val(),
		success	: function(retorno){
			$('#cd_projeto_documentacao').html(retorno);
		}
	});
}

function montaGridDocumentacaoAcompanhamento(){
	$.ajax({
		type	: "POST",
		url		: systemName+"/acompanhamento-fiscalizacao-documentacao/grid-documentacao-acompanhamento",
		data	: {"cd_projeto" : $("#cd_projeto_documentacao").val()},
		success	: function(retorno){
			$('#gridDocumentacaoAcompanhamento').html(retorno);
			$('#gridDocumentacaoAcompanhamento').fadeIn(1000);
		}
	});
}

function extensoesDocumentoProposta(){
    if($('#cd_tipo_documentacao').val() != "0"){
        $.ajax({
            type	: "POST",
            url		: systemName+"/acompanhamento-fiscalizacao-documentacao/extensoes-permitidas",
            data	: {"cd_tipo_documentacao" : $("#cd_tipo_documentacao").val()},
            success	: function(retorno){
                $('#extensoesDocumentacaoProjetoControle').html(retorno);
                $('#divExtensaoDocumentacaoProjetoControle').fadeIn(1250);
            }
        });
    } else {
        $('#divExtensaoDocumentacaoProjetoControle').hide();
    }
}