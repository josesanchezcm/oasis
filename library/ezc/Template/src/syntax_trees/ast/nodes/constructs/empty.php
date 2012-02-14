<?php
/**
 * File containing the ezcTemplateEmptyAstNode class
 *
 * @package Template
 * @version 1.3
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
/**
 * Represents an empty construct.
 *
 * @package Template
 * @version 1.3
 * @access private
 */
class ezcTemplateEmptyAstNode extends ezcTemplateStatementAstNode
{
    /**
     * The expression to output when evaluated.
     * @var ezcTemplateAstNode
     */
    public $expression;

    /**
     * Initialize with function name code and optional arguments
     *
     * @param ezcTemplateAstNode $expression
     */
    public function __construct( ezcTemplateAstNode $expression = null )
    {
        parent::__construct();
        $this->expression = $expression;
    }

    /**
     * Validates the expression against its constraints.
     *
     * @throws ezcTemplateInternalException if the constraints are not met.
     * @return void
     */
    public function validate()
    {
        if ( $this->expression === null )
        {
            throw new ezcTemplateInternalException( "Missing expression for class <" . get_class( $this ) . ">." );
        }
    }
}
?>
