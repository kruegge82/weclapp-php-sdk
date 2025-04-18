<?php
/**
 * SalesOrderPaymentType
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
 * SalesOrderPaymentType Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SalesOrderPaymentType
{
    /**
     * Possible values of this enum
     */
    public const ADVANCE_PAYMENT = 'ADVANCE_PAYMENT';

    public const COUNTER_SALES = 'COUNTER_SALES';

    public const PART_PAYMENT = 'PART_PAYMENT';

    public const PREPAYMENT = 'PREPAYMENT';

    public const STANDARD = 'STANDARD';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADVANCE_PAYMENT,
            self::COUNTER_SALES,
            self::PART_PAYMENT,
            self::PREPAYMENT,
            self::STANDARD
        ];
    }
}


