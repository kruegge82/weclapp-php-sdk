<?php
/**
 * CustomAttributeDefinitionUpdateOrderPostRequest
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
 * CustomAttributeDefinitionUpdateOrderPostRequest Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomAttributeDefinitionUpdateOrderPostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_customAttributeDefinition_updateOrder_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'entity_type' => 'string',
        'order' => '\kruegge82\weclapp\Model\CustomAttributeDefinitionUpdateOrderPostRequestOrderInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'entity_type' => null,
        'order' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'entity_type' => false,
        'order' => false
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
        'entity_type' => 'entityType',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entity_type' => 'setEntityType',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entity_type' => 'getEntityType',
        'order' => 'getOrder'
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

    public const ENTITY_TYPE_ARTICLE = 'article';
    public const ENTITY_TYPE_ARTICLE_SUPPLY_SOURCE = 'articleSupplySource';
    public const ENTITY_TYPE_BATCH_NUMBER = 'batchNumber';
    public const ENTITY_TYPE_BLANKET_PURCHASE_ORDER = 'blanketPurchaseOrder';
    public const ENTITY_TYPE_BLANKET_SALES_ORDER = 'blanketSalesOrder';
    public const ENTITY_TYPE_CAMPAIGN = 'campaign';
    public const ENTITY_TYPE_COMPETITOR = 'competitor';
    public const ENTITY_TYPE_CONTRACT = 'contract';
    public const ENTITY_TYPE_CONTRACT_ITEM = 'contractItem';
    public const ENTITY_TYPE_CRM_EVENT = 'crmEvent';
    public const ENTITY_TYPE_CUSTOMER = 'customer';
    public const ENTITY_TYPE_INCOMING_GOODS = 'incomingGoods';
    public const ENTITY_TYPE_INCOMING_GOODS_ITEM = 'incomingGoodsItem';
    public const ENTITY_TYPE_OPPORTUNITY = 'opportunity';
    public const ENTITY_TYPE_PARTY = 'party';
    public const ENTITY_TYPE_PERFORMANCE_RECORD = 'performanceRecord';
    public const ENTITY_TYPE_PERFORMANCE_RECORD_ITEM = 'performanceRecordItem';
    public const ENTITY_TYPE_PRODUCTION_ORDER = 'productionOrder';
    public const ENTITY_TYPE_PRODUCTION_ORDER_ITEM = 'productionOrderItem';
    public const ENTITY_TYPE_PROJECT = 'project';
    public const ENTITY_TYPE_PURCHASE_INVOICE = 'purchaseInvoice';
    public const ENTITY_TYPE_PURCHASE_INVOICE_ITEM = 'purchaseInvoiceItem';
    public const ENTITY_TYPE_PURCHASE_ORDER = 'purchaseOrder';
    public const ENTITY_TYPE_PURCHASE_ORDER_ITEM = 'purchaseOrderItem';
    public const ENTITY_TYPE_PURCHASE_ORDER_REQUEST = 'purchaseOrderRequest';
    public const ENTITY_TYPE_PURCHASE_ORDER_REQUEST_ITEM = 'purchaseOrderRequestItem';
    public const ENTITY_TYPE_PURCHASE_REQUISITION = 'purchaseRequisition';
    public const ENTITY_TYPE_QUOTATION = 'quotation';
    public const ENTITY_TYPE_QUOTATION_ITEM = 'quotationItem';
    public const ENTITY_TYPE_RECURRING_INVOICE = 'recurringInvoice';
    public const ENTITY_TYPE_RECURRING_INVOICE_ITEM = 'recurringInvoiceItem';
    public const ENTITY_TYPE_SALES_INVOICE = 'salesInvoice';
    public const ENTITY_TYPE_SALES_INVOICE_ITEM = 'salesInvoiceItem';
    public const ENTITY_TYPE_SALES_ORDER = 'salesOrder';
    public const ENTITY_TYPE_SALES_ORDER_ITEM = 'salesOrderItem';
    public const ENTITY_TYPE_SERIAL_NUMBER = 'serialNumber';
    public const ENTITY_TYPE_SHIPMENT = 'shipment';
    public const ENTITY_TYPE_SHIPMENT_ITEM = 'shipmentItem';
    public const ENTITY_TYPE_STORAGE_LOCATION = 'storageLocation';
    public const ENTITY_TYPE_STORAGE_PLACE = 'storagePlace';
    public const ENTITY_TYPE_SUPPLIER = 'supplier';
    public const ENTITY_TYPE_TASK = 'task';
    public const ENTITY_TYPE_TICKET = 'ticket';
    public const ENTITY_TYPE_TIME_RECORD = 'timeRecord';
    public const ENTITY_TYPE_TRANSPORTATION_ORDER = 'transportationOrder';
    public const ENTITY_TYPE_USER = 'user';
    public const ENTITY_TYPE_WAREHOUSE = 'warehouse';
    public const ENTITY_TYPE_WAREHOUSE_STOCK_MOVEMENT = 'warehouseStockMovement';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntityTypeAllowableValues()
    {
        return [
            self::ENTITY_TYPE_ARTICLE,
            self::ENTITY_TYPE_ARTICLE_SUPPLY_SOURCE,
            self::ENTITY_TYPE_BATCH_NUMBER,
            self::ENTITY_TYPE_BLANKET_PURCHASE_ORDER,
            self::ENTITY_TYPE_BLANKET_SALES_ORDER,
            self::ENTITY_TYPE_CAMPAIGN,
            self::ENTITY_TYPE_COMPETITOR,
            self::ENTITY_TYPE_CONTRACT,
            self::ENTITY_TYPE_CONTRACT_ITEM,
            self::ENTITY_TYPE_CRM_EVENT,
            self::ENTITY_TYPE_CUSTOMER,
            self::ENTITY_TYPE_INCOMING_GOODS,
            self::ENTITY_TYPE_INCOMING_GOODS_ITEM,
            self::ENTITY_TYPE_OPPORTUNITY,
            self::ENTITY_TYPE_PARTY,
            self::ENTITY_TYPE_PERFORMANCE_RECORD,
            self::ENTITY_TYPE_PERFORMANCE_RECORD_ITEM,
            self::ENTITY_TYPE_PRODUCTION_ORDER,
            self::ENTITY_TYPE_PRODUCTION_ORDER_ITEM,
            self::ENTITY_TYPE_PROJECT,
            self::ENTITY_TYPE_PURCHASE_INVOICE,
            self::ENTITY_TYPE_PURCHASE_INVOICE_ITEM,
            self::ENTITY_TYPE_PURCHASE_ORDER,
            self::ENTITY_TYPE_PURCHASE_ORDER_ITEM,
            self::ENTITY_TYPE_PURCHASE_ORDER_REQUEST,
            self::ENTITY_TYPE_PURCHASE_ORDER_REQUEST_ITEM,
            self::ENTITY_TYPE_PURCHASE_REQUISITION,
            self::ENTITY_TYPE_QUOTATION,
            self::ENTITY_TYPE_QUOTATION_ITEM,
            self::ENTITY_TYPE_RECURRING_INVOICE,
            self::ENTITY_TYPE_RECURRING_INVOICE_ITEM,
            self::ENTITY_TYPE_SALES_INVOICE,
            self::ENTITY_TYPE_SALES_INVOICE_ITEM,
            self::ENTITY_TYPE_SALES_ORDER,
            self::ENTITY_TYPE_SALES_ORDER_ITEM,
            self::ENTITY_TYPE_SERIAL_NUMBER,
            self::ENTITY_TYPE_SHIPMENT,
            self::ENTITY_TYPE_SHIPMENT_ITEM,
            self::ENTITY_TYPE_STORAGE_LOCATION,
            self::ENTITY_TYPE_STORAGE_PLACE,
            self::ENTITY_TYPE_SUPPLIER,
            self::ENTITY_TYPE_TASK,
            self::ENTITY_TYPE_TICKET,
            self::ENTITY_TYPE_TIME_RECORD,
            self::ENTITY_TYPE_TRANSPORTATION_ORDER,
            self::ENTITY_TYPE_USER,
            self::ENTITY_TYPE_WAREHOUSE,
            self::ENTITY_TYPE_WAREHOUSE_STOCK_MOVEMENT,
        ];
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
        $this->setIfExists('entity_type', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
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

        if ($this->container['entity_type'] === null) {
            $invalidProperties[] = "'entity_type' can't be null";
        }
        $allowedValues = $this->getEntityTypeAllowableValues();
        if (!is_null($this->container['entity_type']) && !in_array($this->container['entity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'entity_type', must be one of '%s'",
                $this->container['entity_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
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
     * Gets entity_type
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string $entity_type entity_type
     *
     * @return self
     */
    public function setEntityType($entity_type)
    {
        if (is_null($entity_type)) {
            throw new \InvalidArgumentException('non-nullable entity_type cannot be null');
        }
        $allowedValues = $this->getEntityTypeAllowableValues();
        if (!in_array($entity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'entity_type', must be one of '%s'",
                    $entity_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \kruegge82\weclapp\Model\CustomAttributeDefinitionUpdateOrderPostRequestOrderInner[]
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \kruegge82\weclapp\Model\CustomAttributeDefinitionUpdateOrderPostRequestOrderInner[] $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

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


