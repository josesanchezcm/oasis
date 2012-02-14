<?php
/**
 * File containing the ezcAuthenticationOpenidAssociation structure.
 *
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @filesource
 * @package Authentication
 * @version 1.2
 */

/**
 * Structure for defining an OpenID association between the server and the
 * OpenID provider.
 *
 * @package Authentication
 * @version 1.2
 */
class ezcAuthenticationOpenidAssociation extends ezcBaseStruct
{
    /**
     * The handle given by the OpenID provider to this association.
     *
     * @var string
     */
    public $handle;

    /**
     * The shared secret generated by the OpenID provider.
     *
     * @var string
     */
    public $secret;

    /**
     * The UNIX timestamp when the secret was generated.
     *
     * @var int
     */
    public $issued;

    /**
     * The amount of seconds the association is valid.
     *
     * @var int
     */
    public $validity;

    /**
     * The type of the association. Currently only 'HMAC-SHA1' is supported
     * by the OpenID implementations.
     *
     * @var string
     */
    public $type;

    /**
     * Constructs a new ezcAuthenticationOpenidAssociation object.
     *
     * @param string $handle Handle given by the OpenID provider to the association
     * @param string $secret The shared secret generated by the OpenID provider
     * @param int $issued The UNIX timestamp when the secret was generated
     * @param int $validity The amount of seconds the aasociation is valid
     * @param string $type The type of the association. Default is 'HMAC-SHA1'
     */
    public function __construct( $handle, $secret, $issued, $validity, $type = 'HMAC-SHA1' )
    {
        $this->handle = $handle;
        $this->secret = $secret;
        $this->issued = $issued;
        $this->validity = $validity;
        $this->type = $type;
    }

    /**
     * Returns a new instance of this class with the data specified by $array.
     *
     * $array contains all the data members of this class in the form:
     * array('member_name'=>value).
     *
     * __set_state makes this class exportable with var_export.
     * var_export() generates code, that calls this method when it
     * is parsed with PHP.
     *
     * @param array(string=>mixed) $array Associative array of data members for this class
     * @return ezcAuthenticationOpenidAssociation
     */
    static public function __set_state( array $array )
    {
        return new ezcAuthenticationOpenidAssociation( $array['handle'], $array['secret'], $array['issued'], $array['validity'], $array['type'] );
    }
}
?>
