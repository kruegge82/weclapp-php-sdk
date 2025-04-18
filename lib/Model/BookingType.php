<?php
/**
 * BookingType
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
 * BookingType Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BookingType
{
    /**
     * Possible values of this enum
     */
    public const CARRY_FORWARD = 'CARRY_FORWARD';

    public const CREDIT_ADVICE = 'CREDIT_ADVICE';

    public const IMPERSONAL = 'IMPERSONAL';

    public const INCOMING_CREDIT_NOTE = 'INCOMING_CREDIT_NOTE';

    public const INCOMING_INVOICE = 'INCOMING_INVOICE';

    public const INCOMING_MANUAL_ENTRY = 'INCOMING_MANUAL_ENTRY';

    public const INCOMING_PAYMENT = 'INCOMING_PAYMENT';

    public const OUTGOING_CREDIT_NOTE = 'OUTGOING_CREDIT_NOTE';

    public const OUTGOING_INVOICE = 'OUTGOING_INVOICE';

    public const OUTGOING_MANUAL_ENTRY = 'OUTGOING_MANUAL_ENTRY';

    public const OUTGOING_PAYMENT = 'OUTGOING_PAYMENT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CARRY_FORWARD,
            self::CREDIT_ADVICE,
            self::IMPERSONAL,
            self::INCOMING_CREDIT_NOTE,
            self::INCOMING_INVOICE,
            self::INCOMING_MANUAL_ENTRY,
            self::INCOMING_PAYMENT,
            self::OUTGOING_CREDIT_NOTE,
            self::OUTGOING_INVOICE,
            self::OUTGOING_MANUAL_ENTRY,
            self::OUTGOING_PAYMENT
        ];
    }
}


