<?php
//Constantes do OASIS
//Constantes de Configuração
//Definindo a constante com endereço do sistema...
$systemName = str_ireplace('/public/index.php', '', $_SERVER['PHP_SELF']);
define('SYSTEM_PATH', "http://{$_SERVER['HTTP_HOST']}{$systemName}");
define('SYSTEM_PATH_ABSOLUTE', "{$_SERVER['DOCUMENT_ROOT']}{$systemName}");
//Constante para verificação se o sistema já esta instalado.
define("K_INSTALL", "S");
//TODO colocar na instalacao
define("K_LANGUAGE","pt_br");
// Constante para o endereço de rodapé
define('SYSTEM_NAME',str_replace('/','',$systemName));
define("K_NOME_ORGAO","OASIS");
define("K_ADDRES_ORGAO","OASIS <br /> Endereço do OASIS<br /> Brasília, DF, 70000-000 Brasil +55 (61) 0000-0000 ");
define("K_DDD_PREFIXO_TELEFONE","(61) 0000");
define("K_TELEFONE_ORGAO","(61) 0000-0000");
define('K_ANO_INICIO_COMBOS', 2006); //ano inicial para exibicao nos combos

//Constantes do Sistema
// Constante indica se será enviado Email pelo sistema ou não
define('K_EDITOR',805368827);
//constante indicando o tamanho maximo do aquivo de log
define('K_SIZE_FILE_LOG',524288); // Default 500KB
//constante indicando a quantidade máxima de arquivos de log por mês
define('K_MAX_FILE_LOG',1000); // Default mil arquivos de log

//Constantes de Configuração das telas
// Constante indicando qual o perfil técnico cadastrado para disponibilização de funcionalidades
define('K_CODIGO_PERFIL_GERENTE_PROJETO', 3);//Código do Perfil Gerente de Projeto
define('K_CODIGO_PERFIL_TECNICO', 4);//Código do Perfil Técnico
define('K_CODIGO_PERFIL_CONTROLE', 2);//Código do Perfil Controle
define('K_CODIGO_PERFIL_COORDENADOR', 1);//Código do Perfil Coordenador
//Constante para indicação da unidade default da área de TI
define('K_CD_UNIDADE', 1); //Código da unidade SE/SPOA/CGMI (COORDENAÇÃO-GERAL DE MODERNIZAÇÃO E INFORMÁTICA)

//Constantes para o relatório
define('K_HEADER_LOGO_RETRATO', 'logoRetrato.png');//Definindo imagem para o papel Retrato  (537x30)
define('K_HEADER_LOGO_PAISAGEM', 'logoPaisagem.png');//Defininfo imagem para o papel Paisagem  (795x30)
define('K_PATH_IMAGEM',SYSTEM_PATH_ABSOLUTE."/public/img/");
define('K_CREATOR_SYSTEM','OASIS');
define('K_TITLE_SYSTEM','Sistema de Gestão de Projetos, Demanda e Serviços de TI');
define('K_HEADER_TOP',33);
define("K_HEADER_COORDENACAO","Área de TI");

//Constantes de E-mail
define("K_ENVIAR_EMAIL","N");
define("K_DOMINIO_EMAIL_PADRAO","@oasis.com.br");
define("K_EMAIL_OASIS","");
define('K_NOME_CABECALHO_EMAIL', 'OASIS'); // Nome do cabecalho do e-mail enviado
define("K_SERVIDOR_EMAIL","");
define("K_PORTA_EMAIL","");

//Constantes do Banco de Dados
define("K_SCHEMA","oasis");
define("K_USER","postgres");
//Constantes dos nomes das tabelas do sistema
define("KT_A_BASELINE_ITEM_CONTROLE","a_baseline_item_controle");
define("KT_A_CONHECIMENTO_PROJETO","a_conhecimento_projeto");
define("KT_A_CONJUNTO_MEDIDA_MEDICAO","a_conjunto_medida_medicao");
define("KT_A_CONTRATO_DEFINICAO_METRICA","a_contrato_definicao_metrica");
define("KT_A_CONTRATO_EVENTO","a_contrato_evento");
define("KT_A_CONTRATO_PROJETO","a_contrato_projeto");
define("KT_A_CONTROLE","a_controle");
define("KT_A_DEFINICAO_PROCESSO","a_definicao_processo");
define("KT_A_DEMANDA_PROFISSIONAL","a_demanda_profissional");
define("KT_A_DEMANDA_PROF_NIVEL_SERVICO","a_demanda_prof_nivel_servico");
define("KT_A_DISPONIBILIDADE_SERVICO_DOC","a_disponibilidade_servico_doc");
define("KT_A_DOCUMENTACAO_CONTRATO","a_documentacao_contrato");
define("KT_A_DOCUMENTACAO_PROFISSIONAL","a_documentacao_profissional");
define("KT_A_DOCUMENTACAO_PROJETO","a_documentacao_projeto");
define("KT_A_FUNCIONALIDADE_MENU","a_funcionalidade_menu");
define("KT_A_GERENCIA_MUDANCA","a_gerencia_mudanca");
define("KT_A_INFORMACAO_TECNICA","a_informacao_tecnica");
define("KT_A_ITEM_TESTE_CASO_DE_USO","a_item_teste_caso_de_uso");
define("KT_A_ITEM_TESTE_CASO_DE_USO_DOC","a_item_teste_caso_de_uso_doc");
define("KT_A_ITEM_TESTE_REGRA_NEGOCIO","a_item_teste_regra_negocio");
define("KT_A_ITEM_TESTE_REGRA_NEGOCIO_DOC","a_item_teste_regra_negocio_doc");
define("KT_A_ITEM_TESTE_REQUISITO","a_item_teste_requisito");
define("KT_A_ITEM_TESTE_REQUISITO_DOC","a_item_teste_requisito_doc");
define("KT_A_MEDICAO_MEDIDA","a_medicao_medida");
define("KT_A_OBJETO_CONTRATO_ATIVIDADE","a_objeto_contrato_atividade");
define("KT_A_OBJETO_CONTRATO_PAPEL_PROF","a_objeto_contrato_papel_prof");
define("KT_A_OBJETO_CONTRATO_PERFIL_PROF","a_objeto_contrato_perfil_prof");
define("KT_A_PARECER_TECNICO_PARCELA","a_parecer_tecnico_parcela");
define("KT_A_PARECER_TECNICO_PROPOSTA","a_parecer_tecnico_proposta");
define("KT_A_PERFIL_BOX_INICIO","a_perfil_box_inicio");
define("KT_A_PERFIL_MENU","a_perfil_menu");
define("KT_A_PERFIL_MENU_SISTEMA","a_perfil_menu_sistema");
define("KT_A_PERFIL_PROF_PAPEL_PROF","a_perfil_prof_papel_prof");
define("KT_A_PLANEJAMENTO","a_planejamento");
define("KT_A_PROFISSIONAL_CONHECIMENTO","a_profissional_conhecimento");
define("KT_A_PROFISSIONAL_MENSAGERIA","a_profissional_mensageria");
define("KT_A_PROFISSIONAL_MENU","a_profissional_menu");
define("KT_A_PROFISSIONAL_OBJETO_CONTRATO","a_profissional_objeto_contrato");
define("KT_A_PROFISSIONAL_PRODUTO","a_profissional_produto");
define("KT_A_PROFISSIONAL_PROJETO","a_profissional_projeto");
define("KT_A_PROFISSIONAL_PROJETO_BKP","a_profissional_projeto_bkp");
define("KT_A_PROPOSTA_DEFINICAO_METRICA","a_proposta_definicao_metrica");
define("KT_A_PROPOSTA_MODULO","a_proposta_modulo");
define("KT_A_PROPOSTA_SUB_ITEM_METRICA","a_proposta_sub_item_metrica");
define("KT_A_QUESTIONARIO_ANALISE_RISCO","a_questionario_analise_risco");
define("KT_A_QUEST_AVALIACAO_QUALIDADE","a_quest_avaliacao_qualidade");
define("KT_A_REGRA_NEGOCIO_REQUISITO","a_regra_negocio_requisito");
define("KT_A_REQUISITO_CASO_DE_USO","a_requisito_caso_de_uso");
define("KT_A_REQUISITO_DEPENDENTE","a_requisito_dependente");
define("KT_A_REUNIAO_PROFISSIONAL","a_reuniao_profissional");
define("KT_A_TREINAMENTO_PROFISSIONAL","a_treinamento_profissional");
define("KT_B_AREA_ATUACAO_TI","b_area_atuacao_ti");
define("KT_B_AREA_CONHECIMENTO","b_area_conhecimento");
define("KT_B_ATIVIDADE","b_atividade");
define("KT_B_BOX_INICIO","b_box_inicio");
define("KT_B_CONDICAO_SUB_ITEM_METRICA","b_condicao_sub_item_metrica");
define("KT_B_CONHECIMENTO","b_conhecimento");
define("KT_B_CONJUNTO_MEDIDA","b_conjunto_medida");
define("KT_B_DEFINICAO_METRICA","b_definicao_metrica");
define("KT_B_ETAPA","b_etapa");
define("KT_B_EVENTO","b_evento");
define("KT_B_FUNCIONALIDADE","b_funcionalidade");
define("KT_B_GRUPO_FATOR","b_grupo_fator");
define("KT_B_ITEM_CONTROLE_BASELINE","b_item_controle_baseline");
define("KT_B_ITEM_GRUPO_FATOR","b_item_grupo_fator");
define("KT_B_ITEM_INVENTARIO","b_item_inventario");
define("KT_B_ITEM_METRICA","b_item_metrica");
define("KT_B_ITEM_PARECER_TECNICO","b_item_parecer_tecnico");
define("KT_B_ITEM_RISCO","b_item_risco");
define("KT_B_ITEM_TESTE","b_item_teste");
define("KT_B_MEDIDA","b_medida");
define("KT_B_MENU","b_menu");
define("KT_B_MSG_EMAIL","b_msg_email");
define("KT_B_NIVEL_SERVICO","b_nivel_servico");
define("KT_B_PAPEL_PROFISSIONAL","b_papel_profissional");
define("KT_B_PENALIDADE","b_penalidade");
define("KT_B_PERFIL","b_perfil");
define("KT_B_PERFIL_PROFISSIONAL","b_perfil_profissional");
define("KT_B_QUESTAO_ANALISE_RISCO","b_questao_analise_risco");
define("KT_B_RELACAO_CONTRATUAL","b_relacao_contratual");
define("KT_B_STATUS","b_status");
define("KT_B_SUB_ITEM_METRICA","b_sub_item_metrica");
define("KT_B_TIPO_CONHECIMENTO","b_tipo_conhecimento");
define("KT_B_TIPO_DADO_TECNICO","b_tipo_dado_tecnico");
define("KT_B_TIPO_DOCUMENTACAO","b_tipo_documentacao");
define("KT_B_TIPO_PRODUTO","b_tipo_produto");
define("KT_B_TIPO_INVENTARIO","b_tipo_inventario");
define("KT_B_TREINAMENTO","b_treinamento");
define("KT_B_UNIDADE","b_unidade");
define("KT_S_ACOMPANHAMENTO_PROPOSTA","s_acompanhamento_proposta");
define("KT_S_AGENDA_PLANO_IMPLANTACAO","s_agenda_plano_implantacao");
define("KT_S_ANALISE_EXECUCAO_PROJETO","s_analise_execucao_projeto");
define("KT_S_ANALISE_MATRIZ_RASTREAB","s_analise_matriz_rastreab");
define("KT_S_ANALISE_MEDICAO","s_analise_medicao");
define("KT_S_ANALISE_PEDIDO_USUARIO","s_analise_pedido_usuario");
define("KT_S_ANALISE_RISCO","s_analise_risco");
define("KT_S_ATOR","s_ator");
define("KT_S_BASE_CONHECIMENTO","s_base_conhecimento");
define("KT_S_BASELINE","s_baseline");
define("KT_S_CASO_DE_USO","s_caso_de_uso");
define("KT_S_COLUNA","s_coluna");
define("KT_S_COMPLEMENTO","s_complemento");
define("KT_S_CONDICAO","s_condicao");
define("KT_S_CONFIG_BANCO_DE_DADOS","s_config_banco_de_dados");
define("KT_S_CONTATO_EMPRESA","s_contato_empresa");
define("KT_S_CONTRATO","s_contrato");
define("KT_S_CUSTO_CONTRATO_DEMANDA","s_custo_contrato_demanda");
define("KT_S_DEMANDA","s_demanda");
define("KT_S_DISPONIBILIDADE_SERVICO","s_disponibilidade_servico");
define("KT_S_EMPRESA","s_empresa");
define("KT_S_EXTRATO_MENSAL","s_extrato_mensal");
define("KT_S_EXTRATO_MENSAL_PARCELA","s_extrato_mensal_parcela");
define("KT_S_FALE_CONOSCO","s_fale_conosco");
define("KT_S_GERENCIA_QUALIDADE","s_gerencia_qualidade");
define("KT_S_HISTORICO","s_historico");
define("KT_S_HISTORICO_EXECUCAO_DEMANDA","s_historico_execucao_demanda");
define("KT_S_HISTORICO_PROJETO_CONTINUADO","s_historico_projeto_continuado");
define("KT_S_HISTORICO_PROPOSTA","s_historico_proposta");
define("KT_S_HISTORICO_PROPOSTA_METRICA","s_historico_proposta_metrica");
define("KT_S_HISTORICO_PROPOSTA_METRICA_PMD","s_historico_proposta_metrica_pmd");
define("KT_S_HISTORICO_PROPOSTA_PARCELA","s_historico_proposta_parcela");
define("KT_S_HISTORICO_PROPOSTA_PRODUTO","s_historico_proposta_produto");
define("KT_S_HIST_PROP_SUB_ITEM_METRICA","s_hist_prop_sub_item_metrica");
define("KT_S_HW_INVENTARIO","s_hw_inventario");
define("KT_S_INTERACAO","s_interacao");
define("KT_S_LOG","s_log");
define("KT_S_MEDICAO","s_medicao");
define("KT_S_MENSAGERIA","s_mensageria");
define("KT_S_METRICA_PMD","s_metrica_pmd");
define("KT_S_MODULO","s_modulo");
define("KT_S_MODULO_CONTINUADO","s_modulo_continuado");
define("KT_S_OBJETO_CONTRATO","s_objeto_contrato");
define("KT_S_OCORRENCIA_ADMINISTRATIVA","s_ocorrencia_administrativa");
define("KT_S_PARCELA","s_parcela");
define("KT_S_PENALIZACAO","s_penalizacao");
define("KT_S_PLANO_IMPLANTACAO","s_plano_implantacao");
define("KT_S_PRE_DEMANDA","s_pre_demanda");
define("KT_S_PRE_PROJETO","s_pre_projeto");
define("KT_S_PRE_PROJETO_EVOLUTIVO","s_pre_projeto_evolutivo");
define("KT_S_PREVISAO_PROJETO_DIARIO","s_previsao_projeto_diario");
define("KT_S_PROCESSAMENTO_PARCELA","s_processamento_parcela");
define("KT_S_PROCESSAMENTO_PROPOSTA","s_processamento_proposta");
define("KT_S_PRODUTO_PARCELA","s_produto_parcela");
define("KT_S_PROFISSIONAL","s_profissional");
define("KT_S_PROJETO","s_projeto");
define("KT_S_PROJETO_CONTINUADO","s_projeto_continuado");
define("KT_S_PROJETO_PREVISTO","s_projeto_previsto");
define("KT_S_PROPOSTA","s_proposta");
define("KT_S_REGRA_NEGOCIO","s_regra_negocio");
define("KT_S_REQUISITO","s_requisito");
define("KT_S_REUNIAO","s_reuniao");
define("KT_S_SITUACAO_PROJETO","s_situacao_projeto");
define("KT_S_SOLICITACAO","s_solicitacao");
define("KT_S_TABELA","s_tabela");
/**** Tabelas Módulo Pedido *****/
define("KT_A_SOLICITACAO_RESPOSTA_PEDIDO","a_solicitacao_resposta_pedido");
define("KT_A_OPCAO_RESP_PERGUNTA_PEDIDO","a_opcao_resp_pergunta_pedido");
define("KT_A_PERGUNTA_DEPENDE_RESP_PEDIDO","a_pergunta_depende_resp_pedido");
define("KT_B_RESPOSTA_PEDIDO","b_resposta_pedido");
define("KT_B_PERGUNTA_PEDIDO","b_pergunta_pedido");
define("KT_S_ARQUIVO_PEDIDO","s_arquivo_pedido");
define("KT_S_SOLICITACAO_PEDIDO","s_solicitacao_pedido");
define("KT_S_HISTORICO_PEDIDO","s_historico_pedido");
define("KT_S_USUARIO_PEDIDO","s_usuario_pedido");
