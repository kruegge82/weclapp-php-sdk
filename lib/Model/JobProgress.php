<?php
/**
 * JobProgress
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
 * JobProgress Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JobProgress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'jobProgress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'failed_create_count' => 'int',
        'failed_update_count' => 'int',
        'last_modified_date' => 'int',
        'succeeded_create_count' => 'int',
        'succeeded_update_count' => 'int',
        'total_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'failed_create_count' => 'int32',
        'failed_update_count' => 'int32',
        'last_modified_date' => 'timestamp',
        'succeeded_create_count' => 'int32',
        'succeeded_update_count' => 'int32',
        'total_count' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'failed_create_count' => false,
        'failed_update_count' => false,
        'last_modified_date' => false,
        'succeeded_create_count' => false,
        'succeeded_update_count' => false,
        'total_count' => false
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
        'failed_create_count' => 'failedCreateCount',
        'failed_update_count' => 'failedUpdateCount',
        'last_modified_date' => 'lastModifiedDate',
        'succeeded_create_count' => 'succeededCreateCount',
        'succeeded_update_count' => 'succeededUpdateCount',
        'total_count' => 'totalCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'failed_create_count' => 'setFailedCreateCount',
        'failed_update_count' => 'setFailedUpdateCount',
        'last_modified_date' => 'setLastModifiedDate',
        'succeeded_create_count' => 'setSucceededCreateCount',
        'succeeded_update_count' => 'setSucceededUpdateCount',
        'total_count' => 'setTotalCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'failed_create_count' => 'getFailedCreateCount',
        'failed_update_count' => 'getFailedUpdateCount',
        'last_modified_date' => 'getLastModifiedDate',
        'succeeded_create_count' => 'getSucceededCreateCount',
        'succeeded_update_count' => 'getSucceededUpdateCount',
        'total_count' => 'getTotalCount'
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
        $this->setIfExists('failed_create_count', $data ?? [], null);
        $this->setIfExists('failed_update_count', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('succeeded_create_count', $data ?? [], null);
        $this->setIfExists('succeeded_update_count', $data ?? [], null);
        $this->setIfExists('total_count', $data ?? [], null);
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
     * Gets failed_create_count
     *
     * @return int|null
     */
    public function getFailedCreateCount()
    {
        return $this->container['failed_create_count'];
    }

    /**
     * Sets failed_create_count
     *
     * @param int|null $failed_create_count failed_create_count
     *
     * @return self
     */
    public function setFailedCreateCount($failed_create_count)
    {
        if (is_null($failed_create_count)) {
            throw new \InvalidArgumentException('non-nullable failed_create_count cannot be null');
        }
        $this->container['failed_create_count'] = $failed_create_count;

        return $this;
    }

    /**
     * Gets failed_update_count
     *
     * @return int|null
     */
    public function getFailedUpdateCount()
    {
        return $this->container['failed_update_count'];
    }

    /**
     * Sets failed_update_count
     *
     * @param int|null $failed_update_count failed_update_count
     *
     * @return self
     */
    public function setFailedUpdateCount($failed_update_count)
    {
        if (is_null($failed_update_count)) {
            throw new \InvalidArgumentException('non-nullable failed_update_count cannot be null');
        }
        $this->container['failed_update_count'] = $failed_update_count;

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
     * Gets succeeded_create_count
     *
     * @return int|null
     */
    public function getSucceededCreateCount()
    {
        return $this->container['succeeded_create_count'];
    }

    /**
     * Sets succeeded_create_count
     *
     * @param int|null $succeeded_create_count succeeded_create_count
     *
     * @return self
     */
    public function setSucceededCreateCount($succeeded_create_count)
    {
        if (is_null($succeeded_create_count)) {
            throw new \InvalidArgumentException('non-nullable succeeded_create_count cannot be null');
        }
        $this->container['succeeded_create_count'] = $succeeded_create_count;

        return $this;
    }

    /**
     * Gets succeeded_update_count
     *
     * @return int|null
     */
    public function getSucceededUpdateCount()
    {
        return $this->container['succeeded_update_count'];
    }

    /**
     * Sets succeeded_update_count
     *
     * @param int|null $succeeded_update_count succeeded_update_count
     *
     * @return self
     */
    public function setSucceededUpdateCount($succeeded_update_count)
    {
        if (is_null($succeeded_update_count)) {
            throw new \InvalidArgumentException('non-nullable succeeded_update_count cannot be null');
        }
        $this->container['succeeded_update_count'] = $succeeded_update_count;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int|null $total_count total_count
     *
     * @return self
     */
    public function setTotalCount($total_count)
    {
        if (is_null($total_count)) {
            throw new \InvalidArgumentException('non-nullable total_count cannot be null');
        }
        $this->container['total_count'] = $total_count;

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


