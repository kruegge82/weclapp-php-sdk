<?php
/**
 * TicketStatusColor
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
 * TicketStatusColor Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TicketStatusColor
{
    /**
     * Possible values of this enum
     */
    public const BLUE = 'BLUE';

    public const BROWN = 'BROWN';

    public const DARK_BLUE = 'DARK_BLUE';

    public const DARK_GREEN = 'DARK_GREEN';

    public const DARK_RED = 'DARK_RED';

    public const GREEN = 'GREEN';

    public const LIGHT_BLUE = 'LIGHT_BLUE';

    public const ORANGE = 'ORANGE';

    public const PINK = 'PINK';

    public const PURPLE = 'PURPLE';

    public const RED = 'RED';

    public const VIOLET = 'VIOLET';

    public const YELLOW = 'YELLOW';

    public const YELLOW_GREEN = 'YELLOW_GREEN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BLUE,
            self::BROWN,
            self::DARK_BLUE,
            self::DARK_GREEN,
            self::DARK_RED,
            self::GREEN,
            self::LIGHT_BLUE,
            self::ORANGE,
            self::PINK,
            self::PURPLE,
            self::RED,
            self::VIOLET,
            self::YELLOW,
            self::YELLOW_GREEN
        ];
    }
}


