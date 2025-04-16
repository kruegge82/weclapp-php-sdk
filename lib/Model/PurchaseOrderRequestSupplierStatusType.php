<?php
/**
 * PurchaseOrderRequestSupplierStatusType
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
 * PurchaseOrderRequestSupplierStatusType Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PurchaseOrderRequestSupplierStatusType
{
    /**
     * Possible values of this enum
     */
    public const ACCEPTED = 'ACCEPTED';

    public const DECLINED = 'DECLINED';

    public const OFFER_RECEIVED = 'OFFER_RECEIVED';

    public const OPEN = 'OPEN';

    public const REQUESTED = 'REQUESTED';

    public const REVISED = 'REVISED';

    public const REVISED_REQUEST = 'REVISED_REQUEST';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCEPTED,
            self::DECLINED,
            self::OFFER_RECEIVED,
            self::OPEN,
            self::REQUESTED,
            self::REVISED,
            self::REVISED_REQUEST
        ];
    }
}


