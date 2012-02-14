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

class UnidadeForm extends Zend_Form
{
	public function __construct($options = null)
	{
		parent::__construct($options);
		$this->generate();
	}
	
	private function generate()
	{
		$this->setName('unidade');
        $this->addDecorator('FormElements')
        ->addDecorator('HtmlTag', array('tag'=>'div', 'class'=>'span-20'))
        ->addDecorator('Form');
        
		$cd_unidade       = new Base_Form_Element_Hidden('cd_unidade');
		
		$tx_sigla_unidade = new Base_Form_Element_Text('tx_sigla_unidade', array('class'=>'span-10 flat-l'));
		$tx_sigla_unidade->setLabel(Base_Util::getTranslator('L_VIEW_SIGLA_UNIDADE').':')
                         ->addDecorator('Label', array('class'=>'span-3 right float-l'))
                         ->setRequired(true)
                         ->addFilter('StripTags')
                         ->addFilter('StringTrim')
                         ->addValidator('NotEmpty');
		
		$submit = new Base_Form_Element_Button('submit');
		$submit->setAttrib('id', 'submitbutton')
               ->setAttrib('class', 'verde buttonBar');
        
		$this->addElements(array($cd_unidade,
								 $tx_sigla_unidade,
								 $submit));
	}
}