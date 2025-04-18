<?php
/**
 * OnlineAccountType
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
 * OnlineAccountType Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OnlineAccountType
{
    /**
     * Possible values of this enum
     */
    public const AMAZON = 'AMAZON';

    public const BLOG = 'BLOG';

    public const EBAY = 'EBAY';

    public const FACEBOOK = 'FACEBOOK';

    public const GOOGLE_DRIVE = 'GOOGLE_DRIVE';

    public const INSTAGRAM = 'INSTAGRAM';

    public const LINKEDIN = 'LINKEDIN';

    public const OTHER = 'OTHER';

    public const PINTEREST = 'PINTEREST';

    public const SKYPE = 'SKYPE';

    public const SLIDESHARE = 'SLIDESHARE';

    public const TWITTER = 'TWITTER';

    public const WIKIPEDIA = 'WIKIPEDIA';

    public const XING = 'XING';

    public const YELP = 'YELP';

    public const YOUTUBE = 'YOUTUBE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON,
            self::BLOG,
            self::EBAY,
            self::FACEBOOK,
            self::GOOGLE_DRIVE,
            self::INSTAGRAM,
            self::LINKEDIN,
            self::OTHER,
            self::PINTEREST,
            self::SKYPE,
            self::SLIDESHARE,
            self::TWITTER,
            self::WIKIPEDIA,
            self::XING,
            self::YELP,
            self::YOUTUBE
        ];
    }
}


