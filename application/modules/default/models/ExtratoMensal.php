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

class ExtratoMensal extends Base_Db_Table_Abstract
{
	protected $_name 	 = KT_S_EXTRATO_MENSAL;
	protected $_primary  = array('ni_mes_extrato', 
								 'ni_ano_extrato',
								 'cd_contrato');
	protected $_schema   = K_SCHEMA;
	protected $_sequence = false;
	
	public function getExtratoMensal($cd_contrato, $mes, $ano)
	{
		$select = $this->select()
                       ->where("cd_contrato    = ?", $cd_contrato, Zend_Db::INT_TYPE)
                       ->where("ni_mes_extrato = ?", $mes, Zend_Db::INT_TYPE)
                       ->where("ni_ano_extrato = ?", $ano, Zend_Db::INT_TYPE);
		
		return $this->fetchAll($select)->toArray();
	}
}