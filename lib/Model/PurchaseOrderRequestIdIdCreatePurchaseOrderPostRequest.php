<?php
/**
 * PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest
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
 * PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_purchaseOrderRequest_id__id__createPurchaseOrder_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offer_id' => 'string',
        'offer_item_to_update_supplier_information' => '\kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequestOfferItemToUpdateSupplierInformationInner[]',
        'sales_order_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offer_id' => null,
        'offer_item_to_update_supplier_information' => null,
        'sales_order_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offer_id' => false,
        'offer_item_to_update_supplier_information' => false,
        'sales_order_id' => false
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
        'offer_id' => 'offerId',
        'offer_item_to_update_supplier_information' => 'offerItemToUpdateSupplierInformation',
        'sales_order_id' => 'salesOrderId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_id' => 'setOfferId',
        'offer_item_to_update_supplier_information' => 'setOfferItemToUpdateSupplierInformation',
        'sales_order_id' => 'setSalesOrderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_id' => 'getOfferId',
        'offer_item_to_update_supplier_information' => 'getOfferItemToUpdateSupplierInformation',
        'sales_order_id' => 'getSalesOrderId'
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
        $this->setIfExists('offer_id', $data ?? [], null);
        $this->setIfExists('offer_item_to_update_supplier_information', $data ?? [], null);
        $this->setIfExists('sales_order_id', $data ?? [], null);
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

        if ($this->container['offer_id'] === null) {
            $invalidProperties[] = "'offer_id' can't be null";
        }
        if ($this->container['offer_item_to_update_supplier_information'] === null) {
            $invalidProperties[] = "'offer_item_to_update_supplier_information' can't be null";
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
     * Gets offer_id
     *
     * @return string
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param string $offer_id offer_id
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        if (is_null($offer_id)) {
            throw new \InvalidArgumentException('non-nullable offer_id cannot be null');
        }
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets offer_item_to_update_supplier_information
     *
     * @return \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequestOfferItemToUpdateSupplierInformationInner[]
     */
    public function getOfferItemToUpdateSupplierInformation()
    {
        return $this->container['offer_item_to_update_supplier_information'];
    }

    /**
     * Sets offer_item_to_update_supplier_information
     *
     * @param \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequestOfferItemToUpdateSupplierInformationInner[] $offer_item_to_update_supplier_information offer_item_to_update_supplier_information
     *
     * @return self
     */
    public function setOfferItemToUpdateSupplierInformation($offer_item_to_update_supplier_information)
    {
        if (is_null($offer_item_to_update_supplier_information)) {
            throw new \InvalidArgumentException('non-nullable offer_item_to_update_supplier_information cannot be null');
        }
        $this->container['offer_item_to_update_supplier_information'] = $offer_item_to_update_supplier_information;

        return $this;
    }

    /**
     * Gets sales_order_id
     *
     * @return string|null
     */
    public function getSalesOrderId()
    {
        return $this->container['sales_order_id'];
    }

    /**
     * Sets sales_order_id
     *
     * @param string|null $sales_order_id sales_order_id
     *
     * @return self
     */
    public function setSalesOrderId($sales_order_id)
    {
        if (is_null($sales_order_id)) {
            throw new \InvalidArgumentException('non-nullable sales_order_id cannot be null');
        }
        $this->container['sales_order_id'] = $sales_order_id;

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


