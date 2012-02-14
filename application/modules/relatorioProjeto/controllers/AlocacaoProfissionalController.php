<?php
/**
 * @Copyright Copyright 2006, 2007, 2008, 2009 MDIC - Ministério do Desenvolvimento, da Industria e do Comércio Exterior, Brasil.
 * @tutorial  Este arquivo é parte do programa OASIS - Sistema de Gestão de Demanda, Projetos e Serviços de TI.
 *			  O OASIS é um software livre; você pode redistribui-lo e/ou modifica-lo dentro dos termos da Licença
 *			  Pública Geral GNU como publicada pela Fundação do Software Livre (FSF); na versão 2 da Licença,
 *			  ou (na sua opnião) qualquer versão.
 *			  Este programa é distribuido na esperança que possa ser util, mas SEM NENHUMA GARANTIA;
 *			  sem uma garantia implicita de ADEQUAÇÂO a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR.
 *			  Veja a Licença Pública Geral GNU para maiores detalhes.
 *			  Você deve ter recebido uma cópia da Licença Pública Geral GNU, sob o título "LICENCA.txt",
 *			  junto com este programa, se não, escreva para a Fundação do Software Livre(FSF) Inc., 51 Franklin St,
 *			  Fifth Floor, Boston, MA 02110-1301 USA.
 */

class RelatorioProjeto_AlocacaoProfissionalController extends Base_Controller_Action
{
	private $objRelProfissional;
	
	public function init()
	{
		parent::init();
		$this->objRelProfissional = new RelatorioProjetoProfissional();
	}
	
	public function indexAction()
	{
        $this->view->headTitle(Base_Util::setTitle('L_TIT_REL_ALOCACAO_PROFISSIONAL'));

        $objContrato = new ObjetoContrato($this->_request->getControllerName());
        $this->view->arrComboObjeto = $objContrato->getObjetoContratoAtivo('P',true,false,true);

	}
	
	public function generateAction()
	{
		$this->_helper->layout->disableLayout();
		
		$tipo_relatorio = $this->_request->getParam('tipo_relatorio');

		if($tipo_relatorio == 1){
			$this->view->tipo_relatorio = $tipo_relatorio;
			$this->view->desc_relatorio = Base_Util::getTranslator('L_VIEW_PROJETO_PROFISSIONAL');
			$arrProfissional = $this->objRelProfissional->relProjetoPorProfissional();
			$this->view->arrProfissional = $arrProfissional;
		} else {
			$this->view->tipo_relatorio = $tipo_relatorio;
			$this->view->desc_relatorio = Base_Util::getTranslator('L_VIEW_PROFISSIONAL_PROJETO');
			$arrProfissional = $this->objRelProfissional->relProfissionalPorProjeto();
			$this->view->arrProfissional = $arrProfissional;
		}
	}
}