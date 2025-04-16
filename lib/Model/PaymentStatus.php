<?php
/**
 * PaymentStatus
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
 * PaymentStatus Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentStatus
{
    /**
     * Possible values of this enum
     */
    public const CLEARED_WITH_CREDIT_NOTE = 'CLEARED_WITH_CREDIT_NOTE';

    public const CREDIT_NOTE_CLEARED = 'CREDIT_NOTE_CLEARED';

    public const NO_OPEN_ITEM = 'NO_OPEN_ITEM';

    public const OPEN = 'OPEN';

    public const PAID = 'PAID';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLEARED_WITH_CREDIT_NOTE,
            self::CREDIT_NOTE_CLEARED,
            self::NO_OPEN_ITEM,
            self::OPEN,
            self::PAID,
            self::UNKNOWN
        ];
    }
}


