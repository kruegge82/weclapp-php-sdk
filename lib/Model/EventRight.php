<?php
/**
 * EventRight
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
 * EventRight Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EventRight
{
    /**
     * Possible values of this enum
     */
    public const CAN_MODIFY_EVERYTHING = 'CAN_MODIFY_EVERYTHING';

    public const CAN_MODIFY_EVERYTHING_BUT_NOT_PARTICIPIENT_LIST = 'CAN_MODIFY_EVERYTHING_BUT_NOT_PARTICIPIENT_LIST';

    public const CAN_MODIFY_ONLY_PARTICIPIENT_LIST = 'CAN_MODIFY_ONLY_PARTICIPIENT_LIST';

    public const CAN_NOT_MODIFY_ANYTHING = 'CAN_NOT_MODIFY_ANYTHING';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAN_MODIFY_EVERYTHING,
            self::CAN_MODIFY_EVERYTHING_BUT_NOT_PARTICIPIENT_LIST,
            self::CAN_MODIFY_ONLY_PARTICIPIENT_LIST,
            self::CAN_NOT_MODIFY_ANYTHING
        ];
    }
}


