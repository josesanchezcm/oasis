<?php
/**
 * File containing the ezcCacheMemoryVarStruct class.
 *
 * @package Cache
 * @version 1.4
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @filesource
 */

/**
 * Defines a memory var structure.
 *
 * @package Cache
 * @version 1.4
 */
class ezcCacheMemoryVarStruct extends ezcBaseStruct
{
	/**
     * Holds the cache key.
     *
	 * @var string
	 */
	public $key;

	/**
     * Holds the data associated with the key.
     *
	 * @var mixed
	 */
	public $var;

	/**
     * Holds the TTL value of the cache.
     *
	 * @var int
	 */
	public $ttl;

    /**
     * Constructs a new ezcCacheMemoryVarStruct object.
     *
	 * @param string $key
	 * @param mixed $var
	 * @param int $ttl
     */
    public function __construct( $key, $var, $ttl )
    {
		$this->key = $key;
		$this->var = $var;
		$this->ttl = $ttl;
    }
}
?>
