<?php
/**
 * TicketStatus
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
 * TicketStatus Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TicketStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ticketStatus';

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
        'auto_change_days' => 'int',
        'auto_change_ticket_status_id' => 'string',
        'color' => '\kruegge82\weclapp\Model\TicketStatusColor',
        'default_for_internal' => 'bool',
        'internal_ticket_status' => '\kruegge82\weclapp\Model\InternalTicketStatus',
        'name' => 'string',
        'position_number' => 'int',
        'target_status_id' => 'string'
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
        'auto_change_days' => 'int32',
        'auto_change_ticket_status_id' => null,
        'color' => null,
        'default_for_internal' => null,
        'internal_ticket_status' => null,
        'name' => null,
        'position_number' => 'int32',
        'target_status_id' => null
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
        'auto_change_days' => false,
        'auto_change_ticket_status_id' => false,
        'color' => false,
        'default_for_internal' => false,
        'internal_ticket_status' => false,
        'name' => false,
        'position_number' => false,
        'target_status_id' => false
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
        'auto_change_days' => 'autoChangeDays',
        'auto_change_ticket_status_id' => 'autoChangeTicketStatusId',
        'color' => 'color',
        'default_for_internal' => 'defaultForInternal',
        'internal_ticket_status' => 'internalTicketStatus',
        'name' => 'name',
        'position_number' => 'positionNumber',
        'target_status_id' => 'targetStatusId'
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
        'auto_change_days' => 'setAutoChangeDays',
        'auto_change_ticket_status_id' => 'setAutoChangeTicketStatusId',
        'color' => 'setColor',
        'default_for_internal' => 'setDefaultForInternal',
        'internal_ticket_status' => 'setInternalTicketStatus',
        'name' => 'setName',
        'position_number' => 'setPositionNumber',
        'target_status_id' => 'setTargetStatusId'
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
        'auto_change_days' => 'getAutoChangeDays',
        'auto_change_ticket_status_id' => 'getAutoChangeTicketStatusId',
        'color' => 'getColor',
        'default_for_internal' => 'getDefaultForInternal',
        'internal_ticket_status' => 'getInternalTicketStatus',
        'name' => 'getName',
        'position_number' => 'getPositionNumber',
        'target_status_id' => 'getTargetStatusId'
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
        $this->setIfExists('auto_change_days', $data ?? [], null);
        $this->setIfExists('auto_change_ticket_status_id', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('default_for_internal', $data ?? [], null);
        $this->setIfExists('internal_ticket_status', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('position_number', $data ?? [], null);
        $this->setIfExists('target_status_id', $data ?? [], null);
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
     * Gets auto_change_days
     *
     * @return int|null
     */
    public function getAutoChangeDays()
    {
        return $this->container['auto_change_days'];
    }

    /**
     * Sets auto_change_days
     *
     * @param int|null $auto_change_days auto_change_days
     *
     * @return self
     */
    public function setAutoChangeDays($auto_change_days)
    {
        if (is_null($auto_change_days)) {
            throw new \InvalidArgumentException('non-nullable auto_change_days cannot be null');
        }
        $this->container['auto_change_days'] = $auto_change_days;

        return $this;
    }

    /**
     * Gets auto_change_ticket_status_id
     *
     * @return string|null
     */
    public function getAutoChangeTicketStatusId()
    {
        return $this->container['auto_change_ticket_status_id'];
    }

    /**
     * Sets auto_change_ticket_status_id
     *
     * @param string|null $auto_change_ticket_status_id auto_change_ticket_status_id
     *
     * @return self
     */
    public function setAutoChangeTicketStatusId($auto_change_ticket_status_id)
    {
        if (is_null($auto_change_ticket_status_id)) {
            throw new \InvalidArgumentException('non-nullable auto_change_ticket_status_id cannot be null');
        }
        $this->container['auto_change_ticket_status_id'] = $auto_change_ticket_status_id;

        return $this;
    }

    /**
     * Gets color
     *
     * @return \kruegge82\weclapp\Model\TicketStatusColor|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param \kruegge82\weclapp\Model\TicketStatusColor|null $color color
     *
     * @return self
     */
    public function setColor($color)
    {
        if (is_null($color)) {
            throw new \InvalidArgumentException('non-nullable color cannot be null');
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets default_for_internal
     *
     * @return bool|null
     */
    public function getDefaultForInternal()
    {
        return $this->container['default_for_internal'];
    }

    /**
     * Sets default_for_internal
     *
     * @param bool|null $default_for_internal default_for_internal
     *
     * @return self
     */
    public function setDefaultForInternal($default_for_internal)
    {
        if (is_null($default_for_internal)) {
            throw new \InvalidArgumentException('non-nullable default_for_internal cannot be null');
        }
        $this->container['default_for_internal'] = $default_for_internal;

        return $this;
    }

    /**
     * Gets internal_ticket_status
     *
     * @return \kruegge82\weclapp\Model\InternalTicketStatus|null
     */
    public function getInternalTicketStatus()
    {
        return $this->container['internal_ticket_status'];
    }

    /**
     * Sets internal_ticket_status
     *
     * @param \kruegge82\weclapp\Model\InternalTicketStatus|null $internal_ticket_status internal_ticket_status
     *
     * @return self
     */
    public function setInternalTicketStatus($internal_ticket_status)
    {
        if (is_null($internal_ticket_status)) {
            throw new \InvalidArgumentException('non-nullable internal_ticket_status cannot be null');
        }
        $this->container['internal_ticket_status'] = $internal_ticket_status;

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
            throw new \InvalidArgumentException('invalid length for $name when calling TicketStatus., must be smaller than or equal to 200.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets position_number
     *
     * @return int|null
     */
    public function getPositionNumber()
    {
        return $this->container['position_number'];
    }

    /**
     * Sets position_number
     *
     * @param int|null $position_number position_number
     *
     * @return self
     */
    public function setPositionNumber($position_number)
    {
        if (is_null($position_number)) {
            throw new \InvalidArgumentException('non-nullable position_number cannot be null');
        }
        $this->container['position_number'] = $position_number;

        return $this;
    }

    /**
     * Gets target_status_id
     *
     * @return string|null
     */
    public function getTargetStatusId()
    {
        return $this->container['target_status_id'];
    }

    /**
     * Sets target_status_id
     *
     * @param string|null $target_status_id target_status_id
     *
     * @return self
     */
    public function setTargetStatusId($target_status_id)
    {
        if (is_null($target_status_id)) {
            throw new \InvalidArgumentException('non-nullable target_status_id cannot be null');
        }
        $this->container['target_status_id'] = $target_status_id;

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


