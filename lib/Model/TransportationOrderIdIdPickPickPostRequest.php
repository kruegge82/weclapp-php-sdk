<?php
/**
 * TransportationOrderIdIdPickPickPostRequest
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
 * TransportationOrderIdIdPickPickPostRequest Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransportationOrderIdIdPickPickPostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_transportationOrder_id__id__pickPick_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'book_loading_equipment_on_dissolve_of_preferred' => 'bool',
        'input_quantity' => 'float',
        'input_serial_numbers' => 'string[]',
        'pick_id' => 'string',
        'preferred_packaging_unit_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'book_loading_equipment_on_dissolve_of_preferred' => null,
        'input_quantity' => 'decimal',
        'input_serial_numbers' => null,
        'pick_id' => null,
        'preferred_packaging_unit_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'book_loading_equipment_on_dissolve_of_preferred' => false,
        'input_quantity' => false,
        'input_serial_numbers' => false,
        'pick_id' => false,
        'preferred_packaging_unit_id' => false
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
        'book_loading_equipment_on_dissolve_of_preferred' => 'bookLoadingEquipmentOnDissolveOfPreferred',
        'input_quantity' => 'inputQuantity',
        'input_serial_numbers' => 'inputSerialNumbers',
        'pick_id' => 'pickId',
        'preferred_packaging_unit_id' => 'preferredPackagingUnitId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'book_loading_equipment_on_dissolve_of_preferred' => 'setBookLoadingEquipmentOnDissolveOfPreferred',
        'input_quantity' => 'setInputQuantity',
        'input_serial_numbers' => 'setInputSerialNumbers',
        'pick_id' => 'setPickId',
        'preferred_packaging_unit_id' => 'setPreferredPackagingUnitId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'book_loading_equipment_on_dissolve_of_preferred' => 'getBookLoadingEquipmentOnDissolveOfPreferred',
        'input_quantity' => 'getInputQuantity',
        'input_serial_numbers' => 'getInputSerialNumbers',
        'pick_id' => 'getPickId',
        'preferred_packaging_unit_id' => 'getPreferredPackagingUnitId'
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
        $this->setIfExists('book_loading_equipment_on_dissolve_of_preferred', $data ?? [], null);
        $this->setIfExists('input_quantity', $data ?? [], null);
        $this->setIfExists('input_serial_numbers', $data ?? [], null);
        $this->setIfExists('pick_id', $data ?? [], null);
        $this->setIfExists('preferred_packaging_unit_id', $data ?? [], null);
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

        if ($this->container['book_loading_equipment_on_dissolve_of_preferred'] === null) {
            $invalidProperties[] = "'book_loading_equipment_on_dissolve_of_preferred' can't be null";
        }
        if ($this->container['input_quantity'] === null) {
            $invalidProperties[] = "'input_quantity' can't be null";
        }
        if ($this->container['pick_id'] === null) {
            $invalidProperties[] = "'pick_id' can't be null";
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
     * Gets book_loading_equipment_on_dissolve_of_preferred
     *
     * @return bool
     */
    public function getBookLoadingEquipmentOnDissolveOfPreferred()
    {
        return $this->container['book_loading_equipment_on_dissolve_of_preferred'];
    }

    /**
     * Sets book_loading_equipment_on_dissolve_of_preferred
     *
     * @param bool $book_loading_equipment_on_dissolve_of_preferred book_loading_equipment_on_dissolve_of_preferred
     *
     * @return self
     */
    public function setBookLoadingEquipmentOnDissolveOfPreferred($book_loading_equipment_on_dissolve_of_preferred)
    {
        if (is_null($book_loading_equipment_on_dissolve_of_preferred)) {
            throw new \InvalidArgumentException('non-nullable book_loading_equipment_on_dissolve_of_preferred cannot be null');
        }
        $this->container['book_loading_equipment_on_dissolve_of_preferred'] = $book_loading_equipment_on_dissolve_of_preferred;

        return $this;
    }

    /**
     * Gets input_quantity
     *
     * @return float
     */
    public function getInputQuantity()
    {
        return $this->container['input_quantity'];
    }

    /**
     * Sets input_quantity
     *
     * @param float $input_quantity input_quantity
     *
     * @return self
     */
    public function setInputQuantity($input_quantity)
    {
        if (is_null($input_quantity)) {
            throw new \InvalidArgumentException('non-nullable input_quantity cannot be null');
        }
        $this->container['input_quantity'] = $input_quantity;

        return $this;
    }

    /**
     * Gets input_serial_numbers
     *
     * @return string[]|null
     */
    public function getInputSerialNumbers()
    {
        return $this->container['input_serial_numbers'];
    }

    /**
     * Sets input_serial_numbers
     *
     * @param string[]|null $input_serial_numbers input_serial_numbers
     *
     * @return self
     */
    public function setInputSerialNumbers($input_serial_numbers)
    {
        if (is_null($input_serial_numbers)) {
            throw new \InvalidArgumentException('non-nullable input_serial_numbers cannot be null');
        }
        $this->container['input_serial_numbers'] = $input_serial_numbers;

        return $this;
    }

    /**
     * Gets pick_id
     *
     * @return string
     */
    public function getPickId()
    {
        return $this->container['pick_id'];
    }

    /**
     * Sets pick_id
     *
     * @param string $pick_id pick_id
     *
     * @return self
     */
    public function setPickId($pick_id)
    {
        if (is_null($pick_id)) {
            throw new \InvalidArgumentException('non-nullable pick_id cannot be null');
        }
        $this->container['pick_id'] = $pick_id;

        return $this;
    }

    /**
     * Gets preferred_packaging_unit_id
     *
     * @return string|null
     */
    public function getPreferredPackagingUnitId()
    {
        return $this->container['preferred_packaging_unit_id'];
    }

    /**
     * Sets preferred_packaging_unit_id
     *
     * @param string|null $preferred_packaging_unit_id preferred_packaging_unit_id
     *
     * @return self
     */
    public function setPreferredPackagingUnitId($preferred_packaging_unit_id)
    {
        if (is_null($preferred_packaging_unit_id)) {
            throw new \InvalidArgumentException('non-nullable preferred_packaging_unit_id cannot be null');
        }
        $this->container['preferred_packaging_unit_id'] = $preferred_packaging_unit_id;

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


