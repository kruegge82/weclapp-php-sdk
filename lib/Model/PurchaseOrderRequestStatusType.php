<?php
/**
 * PurchaseOrderRequestStatusType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * weclapp API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2
 * Contact: support@weclapp.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\weclapp\Model;
use \kruegge82\weclapp\ObjectSerializer;

/**
 * PurchaseOrderRequestStatusType Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PurchaseOrderRequestStatusType
{
    /**
     * Possible values of this enum
     */
    public const CANCELLED = 'CANCELLED';

    public const CLOSED = 'CLOSED';

    public const DOCUMENT_PRINTED = 'DOCUMENT_PRINTED';

    public const _NEW = 'NEW';

    public const OFFER_RECEIVED = 'OFFER_RECEIVED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CANCELLED,
            self::CLOSED,
            self::DOCUMENT_PRINTED,
            self::_NEW,
            self::OFFER_RECEIVED
        ];
    }
}


