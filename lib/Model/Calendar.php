<?php
/**
 * Calendar
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

use \ArrayAccess;
use \kruegge82\weclapp\ObjectSerializer;

/**
 * Calendar Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Calendar implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'calendar';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_date' => 'int',
        'last_modified_date' => 'int',
        'version' => 'string',
        'caldav_account_id' => 'string',
        'calendar_color' => 'string',
        'calendar_key' => 'string',
        'calendar_sharing_permissions' => '\kruegge82\weclapp\Model\CalendarSharingPermissions[]',
        'last_events_sync_token' => 'string',
        'mail_account_id' => 'string',
        'name' => 'string',
        'owner_id' => 'string',
        'share_private_events' => 'bool',
        'synchronize' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_date' => 'timestamp',
        'last_modified_date' => 'timestamp',
        'version' => null,
        'caldav_account_id' => null,
        'calendar_color' => null,
        'calendar_key' => null,
        'calendar_sharing_permissions' => null,
        'last_events_sync_token' => null,
        'mail_account_id' => null,
        'name' => null,
        'owner_id' => null,
        'share_private_events' => null,
        'synchronize' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'created_date' => false,
        'last_modified_date' => false,
        'version' => false,
        'caldav_account_id' => false,
        'calendar_color' => false,
        'calendar_key' => false,
        'calendar_sharing_permissions' => false,
        'last_events_sync_token' => false,
        'mail_account_id' => false,
        'name' => false,
        'owner_id' => false,
        'share_private_events' => false,
        'synchronize' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_date' => 'createdDate',
        'last_modified_date' => 'lastModifiedDate',
        'version' => 'version',
        'caldav_account_id' => 'caldavAccountId',
        'calendar_color' => 'calendarColor',
        'calendar_key' => 'calendarKey',
        'calendar_sharing_permissions' => 'calendarSharingPermissions',
        'last_events_sync_token' => 'lastEventsSyncToken',
        'mail_account_id' => 'mailAccountId',
        'name' => 'name',
        'owner_id' => 'ownerId',
        'share_private_events' => 'sharePrivateEvents',
        'synchronize' => 'synchronize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_date' => 'setCreatedDate',
        'last_modified_date' => 'setLastModifiedDate',
        'version' => 'setVersion',
        'caldav_account_id' => 'setCaldavAccountId',
        'calendar_color' => 'setCalendarColor',
        'calendar_key' => 'setCalendarKey',
        'calendar_sharing_permissions' => 'setCalendarSharingPermissions',
        'last_events_sync_token' => 'setLastEventsSyncToken',
        'mail_account_id' => 'setMailAccountId',
        'name' => 'setName',
        'owner_id' => 'setOwnerId',
        'share_private_events' => 'setSharePrivateEvents',
        'synchronize' => 'setSynchronize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_date' => 'getCreatedDate',
        'last_modified_date' => 'getLastModifiedDate',
        'version' => 'getVersion',
        'caldav_account_id' => 'getCaldavAccountId',
        'calendar_color' => 'getCalendarColor',
        'calendar_key' => 'getCalendarKey',
        'calendar_sharing_permissions' => 'getCalendarSharingPermissions',
        'last_events_sync_token' => 'getLastEventsSyncToken',
        'mail_account_id' => 'getMailAccountId',
        'name' => 'getName',
        'owner_id' => 'getOwnerId',
        'share_private_events' => 'getSharePrivateEvents',
        'synchronize' => 'getSynchronize'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('caldav_account_id', $data ?? [], null);
        $this->setIfExists('calendar_color', $data ?? [], null);
        $this->setIfExists('calendar_key', $data ?? [], null);
        $this->setIfExists('calendar_sharing_permissions', $data ?? [], null);
        $this->setIfExists('last_events_sync_token', $data ?? [], null);
        $this->setIfExists('mail_account_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('owner_id', $data ?? [], null);
        $this->setIfExists('share_private_events', $data ?? [], null);
        $this->setIfExists('synchronize', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['calendar_color']) && (mb_strlen($this->container['calendar_color']) > 7)) {
            $invalidProperties[] = "invalid value for 'calendar_color', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['calendar_key']) && (mb_strlen($this->container['calendar_key']) > 2000)) {
            $invalidProperties[] = "invalid value for 'calendar_key', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['last_events_sync_token']) && (mb_strlen($this->container['last_events_sync_token']) > 1000)) {
            $invalidProperties[] = "invalid value for 'last_events_sync_token', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 200)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 200.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return int|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param int|null $created_date created_date
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        if (is_null($created_date)) {
            throw new \InvalidArgumentException('non-nullable created_date cannot be null');
        }
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return int|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param int|null $last_modified_date last_modified_date
     *
     * @return self
     */
    public function setLastModifiedDate($last_modified_date)
    {
        if (is_null($last_modified_date)) {
            throw new \InvalidArgumentException('non-nullable last_modified_date cannot be null');
        }
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets caldav_account_id
     *
     * @return string|null
     */
    public function getCaldavAccountId()
    {
        return $this->container['caldav_account_id'];
    }

    /**
     * Sets caldav_account_id
     *
     * @param string|null $caldav_account_id caldav_account_id
     *
     * @return self
     */
    public function setCaldavAccountId($caldav_account_id)
    {
        if (is_null($caldav_account_id)) {
            throw new \InvalidArgumentException('non-nullable caldav_account_id cannot be null');
        }
        $this->container['caldav_account_id'] = $caldav_account_id;

        return $this;
    }

    /**
     * Gets calendar_color
     *
     * @return string|null
     */
    public function getCalendarColor()
    {
        return $this->container['calendar_color'];
    }

    /**
     * Sets calendar_color
     *
     * @param string|null $calendar_color calendar_color
     *
     * @return self
     */
    public function setCalendarColor($calendar_color)
    {
        if (is_null($calendar_color)) {
            throw new \InvalidArgumentException('non-nullable calendar_color cannot be null');
        }
        if ((mb_strlen($calendar_color) > 7)) {
            throw new \InvalidArgumentException('invalid length for $calendar_color when calling Calendar., must be smaller than or equal to 7.');
        }

        $this->container['calendar_color'] = $calendar_color;

        return $this;
    }

    /**
     * Gets calendar_key
     *
     * @return string|null
     */
    public function getCalendarKey()
    {
        return $this->container['calendar_key'];
    }

    /**
     * Sets calendar_key
     *
     * @param string|null $calendar_key calendar_key
     *
     * @return self
     */
    public function setCalendarKey($calendar_key)
    {
        if (is_null($calendar_key)) {
            throw new \InvalidArgumentException('non-nullable calendar_key cannot be null');
        }
        if ((mb_strlen($calendar_key) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $calendar_key when calling Calendar., must be smaller than or equal to 2000.');
        }

        $this->container['calendar_key'] = $calendar_key;

        return $this;
    }

    /**
     * Gets calendar_sharing_permissions
     *
     * @return \kruegge82\weclapp\Model\CalendarSharingPermissions[]|null
     */
    public function getCalendarSharingPermissions()
    {
        return $this->container['calendar_sharing_permissions'];
    }

    /**
     * Sets calendar_sharing_permissions
     *
     * @param \kruegge82\weclapp\Model\CalendarSharingPermissions[]|null $calendar_sharing_permissions calendar_sharing_permissions
     *
     * @return self
     */
    public function setCalendarSharingPermissions($calendar_sharing_permissions)
    {
        if (is_null($calendar_sharing_permissions)) {
            throw new \InvalidArgumentException('non-nullable calendar_sharing_permissions cannot be null');
        }
        $this->container['calendar_sharing_permissions'] = $calendar_sharing_permissions;

        return $this;
    }

    /**
     * Gets last_events_sync_token
     *
     * @return string|null
     */
    public function getLastEventsSyncToken()
    {
        return $this->container['last_events_sync_token'];
    }

    /**
     * Sets last_events_sync_token
     *
     * @param string|null $last_events_sync_token last_events_sync_token
     *
     * @return self
     */
    public function setLastEventsSyncToken($last_events_sync_token)
    {
        if (is_null($last_events_sync_token)) {
            throw new \InvalidArgumentException('non-nullable last_events_sync_token cannot be null');
        }
        if ((mb_strlen($last_events_sync_token) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $last_events_sync_token when calling Calendar., must be smaller than or equal to 1000.');
        }

        $this->container['last_events_sync_token'] = $last_events_sync_token;

        return $this;
    }

    /**
     * Gets mail_account_id
     *
     * @return string|null
     */
    public function getMailAccountId()
    {
        return $this->container['mail_account_id'];
    }

    /**
     * Sets mail_account_id
     *
     * @param string|null $mail_account_id mail_account_id
     *
     * @return self
     */
    public function setMailAccountId($mail_account_id)
    {
        if (is_null($mail_account_id)) {
            throw new \InvalidArgumentException('non-nullable mail_account_id cannot be null');
        }
        $this->container['mail_account_id'] = $mail_account_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 200)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Calendar., must be smaller than or equal to 200.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id owner_id
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        if (is_null($owner_id)) {
            throw new \InvalidArgumentException('non-nullable owner_id cannot be null');
        }
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets share_private_events
     *
     * @return bool|null
     */
    public function getSharePrivateEvents()
    {
        return $this->container['share_private_events'];
    }

    /**
     * Sets share_private_events
     *
     * @param bool|null $share_private_events share_private_events
     *
     * @return self
     */
    public function setSharePrivateEvents($share_private_events)
    {
        if (is_null($share_private_events)) {
            throw new \InvalidArgumentException('non-nullable share_private_events cannot be null');
        }
        $this->container['share_private_events'] = $share_private_events;

        return $this;
    }

    /**
     * Gets synchronize
     *
     * @return bool|null
     */
    public function getSynchronize()
    {
        return $this->container['synchronize'];
    }

    /**
     * Sets synchronize
     *
     * @param bool|null $synchronize synchronize
     *
     * @return self
     */
    public function setSynchronize($synchronize)
    {
        if (is_null($synchronize)) {
            throw new \InvalidArgumentException('non-nullable synchronize cannot be null');
        }
        $this->container['synchronize'] = $synchronize;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


