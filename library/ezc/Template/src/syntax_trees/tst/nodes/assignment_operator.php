<?php
/**
 * File containing the ezcTemplateAssignmentOperatorTstNode class
 *
 * @package Template
 * @version 1.3
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */
/**
 * Fetching of property value in an expression.
 *
 * @package Template
 * @version 1.3
 * @access private
 */
class ezcTemplateAssignmentOperatorTstNode extends ezcTemplateModifyingOperatorTstNode
{
    /**
     * Constructs a new ezcTemplateAssignmentOperatorTstNode
     *
     * @param ezcTemplateSourceCode $source
     * @param ezcTemplateCursor $start
     * @param ezcTemplateCursor $end
     */
    public function __construct( ezcTemplateSourceCode $source, /*ezcTemplateCursor*/ $start, /*ezcTemplateCursor*/ $end )
    {
        parent::__construct( $source, $start, $end,
                             1, 1, self::RIGHT_ASSOCIATIVE,
                             '=' );
    }
}
?>
