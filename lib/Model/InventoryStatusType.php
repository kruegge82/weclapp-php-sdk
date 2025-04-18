<?php
/**
 * InventoryStatusType
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
 * InventoryStatusType Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InventoryStatusType
{
    /**
     * Possible values of this enum
     */
    public const BOOKED = 'BOOKED';

    public const CANCELLED = 'CANCELLED';

    public const CLOSED = 'CLOSED';

    public const COMPLETE = 'COMPLETE';

    public const DIFFERENCE_CHECKED = 'DIFFERENCE_CHECKED';

    public const DOCUMENTS_PRINTED = 'DOCUMENTS_PRINTED';

    public const _NEW = 'NEW';

    public const PLANNED = 'PLANNED';

    public const STARTED = 'STARTED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOOKED,
            self::CANCELLED,
            self::CLOSED,
            self::COMPLETE,
            self::DIFFERENCE_CHECKED,
            self::DOCUMENTS_PRINTED,
            self::_NEW,
            self::PLANNED,
            self::STARTED
        ];
    }
}


