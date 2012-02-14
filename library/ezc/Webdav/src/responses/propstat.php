<?php
/**
 * File containing the ezcWebdavPropStatResponse class.
 *
 * @package Webdav
 * @version 1.0
 * @copyright Copyright (C) 2005-2007 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 */
/**
 * Class generated by the backend to respond to PROPSTAT requests.
 *
 * If a {@link ezcWebdavBackend} receives an instance of {@link
 * ezcWebdavPropStatRequest} it might react with an instance of {@link
 * ezcWebdavPropStatResponse} or with producing an error.
 *
 * @version 1.0
 * @package Webdav
 */
class ezcWebdavPropStatResponse extends ezcWebdavResponse
{
    /**
     * Creates a new response object.
     *
     * Creates PROPSTAT response, which will be aggregated in a {@link
     * ezcWebdavPropFindResponse} from a property storage ($storage) and
     * optionally an error stutus code, which will default to 200(OK).
     * 
     * @param ezcWebdavPropertyStorage $storage
     * @param int $status 
     * @return void
     */
    public function __construct( ezcWebdavPropertyStorage $storage, $status = ezcWebdavResponse::STATUS_200 )
    {
        parent::__construct( $status );

        $this->storage = $storage;
    }

    /**
     * Sets a property.
     *
     * This method is called when an property is to be set.
     * 
     * @param string $propertyName The name of the property to set.
     * @param mixed $propertyValue The property value.
     * @ignore
     *
     * @throws ezcBasePropertyNotFoundException
     *         if the given property does not exist.
     * @throws ezcBaseValueException
     *         if the value to be assigned to a property is invalid.
     * @throws ezcBasePropertyPermissionException
     *         if the property to be set is a read-only property.
     */
    public function __set( $propertyName, $propertyValue )
    {
        switch ( $propertyName )
        {
            case 'storage':
                if ( ! $propertyValue instanceof ezcWebdavPropertyStorage )
                {
                    throw new ezcBaseValueException( $propertyName, $propertyValue, 'ezcWebdavPropertyStorage' );
                }

                $this->properties[$propertyName] = $propertyValue;
                break;

            default:
                parent::__set( $propertyName, $propertyValue );
        }
    }
}

?>
