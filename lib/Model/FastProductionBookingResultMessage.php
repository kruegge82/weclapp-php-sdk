<?php
/**
 * FastProductionBookingResultMessage
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
 * FastProductionBookingResultMessage Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FastProductionBookingResultMessage
{
    /**
     * Possible values of this enum
     */
    public const INVALID_ORDER = 'INVALID_ORDER';

    public const INVALID_ORDER_NUMBER = 'INVALID_ORDER_NUMBER';

    public const INVALID_QUANTITY = 'INVALID_QUANTITY';

    public const SUCCESS = 'SUCCESS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVALID_ORDER,
            self::INVALID_ORDER_NUMBER,
            self::INVALID_QUANTITY,
            self::SUCCESS
        ];
    }
}


