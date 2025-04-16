<?php
/**
 * SalesInvoiceOrigin
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
 * SalesInvoiceOrigin Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SalesInvoiceOrigin
{
    /**
     * Possible values of this enum
     */
    public const ADVANCE_PAYMENT_INVOICE = 'ADVANCE_PAYMENT_INVOICE';

    public const CONTRACT = 'CONTRACT';

    public const FINAL_INVOICE = 'FINAL_INVOICE';

    public const PART_PAYMENT_INVOICE = 'PART_PAYMENT_INVOICE';

    public const PREPAYMENT_INVOICE = 'PREPAYMENT_INVOICE';

    public const RECURRING_INVOICE = 'RECURRING_INVOICE';

    public const RETAIL_INVOICE = 'RETAIL_INVOICE';

    public const SALES_ORDER = 'SALES_ORDER';

    public const STANDARD_INVOICE = 'STANDARD_INVOICE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADVANCE_PAYMENT_INVOICE,
            self::CONTRACT,
            self::FINAL_INVOICE,
            self::PART_PAYMENT_INVOICE,
            self::PREPAYMENT_INVOICE,
            self::RECURRING_INVOICE,
            self::RETAIL_INVOICE,
            self::SALES_ORDER,
            self::STANDARD_INVOICE
        ];
    }
}


