<?php
/**
 * PurchaseInvoiceStatusType
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
 * PurchaseInvoiceStatusType Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PurchaseInvoiceStatusType
{
    /**
     * Possible values of this enum
     */
    public const CANCELLED = 'CANCELLED';

    public const DOCUMENT_CREATED = 'DOCUMENT_CREATED';

    public const ENTRY_COMPLETED = 'ENTRY_COMPLETED';

    public const INVOICE_CHECKED = 'INVOICE_CHECKED';

    public const INVOICE_RECEIVED = 'INVOICE_RECEIVED';

    public const INVOICE_VERIFICATION = 'INVOICE_VERIFICATION';

    public const _NEW = 'NEW';

    public const OCR_VERIFICATION = 'OCR_VERIFICATION';

    public const OPEN_ITEM_CREATED = 'OPEN_ITEM_CREATED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CANCELLED,
            self::DOCUMENT_CREATED,
            self::ENTRY_COMPLETED,
            self::INVOICE_CHECKED,
            self::INVOICE_RECEIVED,
            self::INVOICE_VERIFICATION,
            self::_NEW,
            self::OCR_VERIFICATION,
            self::OPEN_ITEM_CREATED
        ];
    }
}


