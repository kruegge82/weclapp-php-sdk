<?php
/**
 * Pick
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
 * Pick Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Pick implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pick';

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
        'batch_number' => 'string',
        'confirmed_by_user_id' => 'string',
        'confirmed_date' => 'int',
        'internal_transport_reference_id' => 'string',
        'quantity' => 'float',
        'serial_numbers' => 'string[]',
        'storage_place_id' => 'string',
        'booked_date' => 'int',
        'order_item_id' => 'string',
        'source_internal_transport_reference_id' => 'string',
        'source_storage_place_id' => 'string',
        'packaging_unit_base_article_id' => 'string',
        'position_number' => 'int',
        'production_order_item_id' => 'string',
        'sales_order_item_id' => 'string',
        'shipment_item_id' => 'string',
        'transportation_order_id' => 'string'
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
        'batch_number' => null,
        'confirmed_by_user_id' => null,
        'confirmed_date' => 'timestamp',
        'internal_transport_reference_id' => null,
        'quantity' => 'decimal',
        'serial_numbers' => null,
        'storage_place_id' => null,
        'booked_date' => 'timestamp',
        'order_item_id' => null,
        'source_internal_transport_reference_id' => null,
        'source_storage_place_id' => null,
        'packaging_unit_base_article_id' => null,
        'position_number' => 'int32',
        'production_order_item_id' => null,
        'sales_order_item_id' => null,
        'shipment_item_id' => null,
        'transportation_order_id' => null
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
        'batch_number' => false,
        'confirmed_by_user_id' => false,
        'confirmed_date' => false,
        'internal_transport_reference_id' => false,
        'quantity' => false,
        'serial_numbers' => false,
        'storage_place_id' => false,
        'booked_date' => false,
        'order_item_id' => false,
        'source_internal_transport_reference_id' => false,
        'source_storage_place_id' => false,
        'packaging_unit_base_article_id' => false,
        'position_number' => false,
        'production_order_item_id' => false,
        'sales_order_item_id' => false,
        'shipment_item_id' => false,
        'transportation_order_id' => false
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
        'batch_number' => 'batchNumber',
        'confirmed_by_user_id' => 'confirmedByUserId',
        'confirmed_date' => 'confirmedDate',
        'internal_transport_reference_id' => 'internalTransportReferenceId',
        'quantity' => 'quantity',
        'serial_numbers' => 'serialNumbers',
        'storage_place_id' => 'storagePlaceId',
        'booked_date' => 'bookedDate',
        'order_item_id' => 'orderItemId',
        'source_internal_transport_reference_id' => 'sourceInternalTransportReferenceId',
        'source_storage_place_id' => 'sourceStoragePlaceId',
        'packaging_unit_base_article_id' => 'packagingUnitBaseArticleId',
        'position_number' => 'positionNumber',
        'production_order_item_id' => 'productionOrderItemId',
        'sales_order_item_id' => 'salesOrderItemId',
        'shipment_item_id' => 'shipmentItemId',
        'transportation_order_id' => 'transportationOrderId'
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
        'batch_number' => 'setBatchNumber',
        'confirmed_by_user_id' => 'setConfirmedByUserId',
        'confirmed_date' => 'setConfirmedDate',
        'internal_transport_reference_id' => 'setInternalTransportReferenceId',
        'quantity' => 'setQuantity',
        'serial_numbers' => 'setSerialNumbers',
        'storage_place_id' => 'setStoragePlaceId',
        'booked_date' => 'setBookedDate',
        'order_item_id' => 'setOrderItemId',
        'source_internal_transport_reference_id' => 'setSourceInternalTransportReferenceId',
        'source_storage_place_id' => 'setSourceStoragePlaceId',
        'packaging_unit_base_article_id' => 'setPackagingUnitBaseArticleId',
        'position_number' => 'setPositionNumber',
        'production_order_item_id' => 'setProductionOrderItemId',
        'sales_order_item_id' => 'setSalesOrderItemId',
        'shipment_item_id' => 'setShipmentItemId',
        'transportation_order_id' => 'setTransportationOrderId'
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
        'batch_number' => 'getBatchNumber',
        'confirmed_by_user_id' => 'getConfirmedByUserId',
        'confirmed_date' => 'getConfirmedDate',
        'internal_transport_reference_id' => 'getInternalTransportReferenceId',
        'quantity' => 'getQuantity',
        'serial_numbers' => 'getSerialNumbers',
        'storage_place_id' => 'getStoragePlaceId',
        'booked_date' => 'getBookedDate',
        'order_item_id' => 'getOrderItemId',
        'source_internal_transport_reference_id' => 'getSourceInternalTransportReferenceId',
        'source_storage_place_id' => 'getSourceStoragePlaceId',
        'packaging_unit_base_article_id' => 'getPackagingUnitBaseArticleId',
        'position_number' => 'getPositionNumber',
        'production_order_item_id' => 'getProductionOrderItemId',
        'sales_order_item_id' => 'getSalesOrderItemId',
        'shipment_item_id' => 'getShipmentItemId',
        'transportation_order_id' => 'getTransportationOrderId'
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
        $this->setIfExists('batch_number', $data ?? [], null);
        $this->setIfExists('confirmed_by_user_id', $data ?? [], null);
        $this->setIfExists('confirmed_date', $data ?? [], null);
        $this->setIfExists('internal_transport_reference_id', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('serial_numbers', $data ?? [], null);
        $this->setIfExists('storage_place_id', $data ?? [], null);
        $this->setIfExists('booked_date', $data ?? [], null);
        $this->setIfExists('order_item_id', $data ?? [], null);
        $this->setIfExists('source_internal_transport_reference_id', $data ?? [], null);
        $this->setIfExists('source_storage_place_id', $data ?? [], null);
        $this->setIfExists('packaging_unit_base_article_id', $data ?? [], null);
        $this->setIfExists('position_number', $data ?? [], null);
        $this->setIfExists('production_order_item_id', $data ?? [], null);
        $this->setIfExists('sales_order_item_id', $data ?? [], null);
        $this->setIfExists('shipment_item_id', $data ?? [], null);
        $this->setIfExists('transportation_order_id', $data ?? [], null);
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

        if (!is_null($this->container['batch_number']) && (mb_strlen($this->container['batch_number']) > 1000)) {
            $invalidProperties[] = "invalid value for 'batch_number', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['quantity'])) {
            $invalidProperties[] = "invalid value for 'quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
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
     * Gets batch_number
     *
     * @return string|null
     */
    public function getBatchNumber()
    {
        return $this->container['batch_number'];
    }

    /**
     * Sets batch_number
     *
     * @param string|null $batch_number batch_number
     *
     * @return self
     */
    public function setBatchNumber($batch_number)
    {
        if (is_null($batch_number)) {
            throw new \InvalidArgumentException('non-nullable batch_number cannot be null');
        }
        if ((mb_strlen($batch_number) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $batch_number when calling Pick., must be smaller than or equal to 1000.');
        }

        $this->container['batch_number'] = $batch_number;

        return $this;
    }

    /**
     * Gets confirmed_by_user_id
     *
     * @return string|null
     */
    public function getConfirmedByUserId()
    {
        return $this->container['confirmed_by_user_id'];
    }

    /**
     * Sets confirmed_by_user_id
     *
     * @param string|null $confirmed_by_user_id confirmed_by_user_id
     *
     * @return self
     */
    public function setConfirmedByUserId($confirmed_by_user_id)
    {
        if (is_null($confirmed_by_user_id)) {
            throw new \InvalidArgumentException('non-nullable confirmed_by_user_id cannot be null');
        }
        $this->container['confirmed_by_user_id'] = $confirmed_by_user_id;

        return $this;
    }

    /**
     * Gets confirmed_date
     *
     * @return int|null
     */
    public function getConfirmedDate()
    {
        return $this->container['confirmed_date'];
    }

    /**
     * Sets confirmed_date
     *
     * @param int|null $confirmed_date confirmed_date
     *
     * @return self
     */
    public function setConfirmedDate($confirmed_date)
    {
        if (is_null($confirmed_date)) {
            throw new \InvalidArgumentException('non-nullable confirmed_date cannot be null');
        }
        $this->container['confirmed_date'] = $confirmed_date;

        return $this;
    }

    /**
     * Gets internal_transport_reference_id
     *
     * @return string|null
     */
    public function getInternalTransportReferenceId()
    {
        return $this->container['internal_transport_reference_id'];
    }

    /**
     * Sets internal_transport_reference_id
     *
     * @param string|null $internal_transport_reference_id internal_transport_reference_id
     *
     * @return self
     */
    public function setInternalTransportReferenceId($internal_transport_reference_id)
    {
        if (is_null($internal_transport_reference_id)) {
            throw new \InvalidArgumentException('non-nullable internal_transport_reference_id cannot be null');
        }
        $this->container['internal_transport_reference_id'] = $internal_transport_reference_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$quantity when calling Pick., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets serial_numbers
     *
     * @return string[]|null
     */
    public function getSerialNumbers()
    {
        return $this->container['serial_numbers'];
    }

    /**
     * Sets serial_numbers
     *
     * @param string[]|null $serial_numbers serial_numbers
     *
     * @return self
     */
    public function setSerialNumbers($serial_numbers)
    {
        if (is_null($serial_numbers)) {
            throw new \InvalidArgumentException('non-nullable serial_numbers cannot be null');
        }
        $this->container['serial_numbers'] = $serial_numbers;

        return $this;
    }

    /**
     * Gets storage_place_id
     *
     * @return string|null
     */
    public function getStoragePlaceId()
    {
        return $this->container['storage_place_id'];
    }

    /**
     * Sets storage_place_id
     *
     * @param string|null $storage_place_id storage_place_id
     *
     * @return self
     */
    public function setStoragePlaceId($storage_place_id)
    {
        if (is_null($storage_place_id)) {
            throw new \InvalidArgumentException('non-nullable storage_place_id cannot be null');
        }
        $this->container['storage_place_id'] = $storage_place_id;

        return $this;
    }

    /**
     * Gets booked_date
     *
     * @return int|null
     */
    public function getBookedDate()
    {
        return $this->container['booked_date'];
    }

    /**
     * Sets booked_date
     *
     * @param int|null $booked_date booked_date
     *
     * @return self
     */
    public function setBookedDate($booked_date)
    {
        if (is_null($booked_date)) {
            throw new \InvalidArgumentException('non-nullable booked_date cannot be null');
        }
        $this->container['booked_date'] = $booked_date;

        return $this;
    }

    /**
     * Gets order_item_id
     *
     * @return string|null
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id
     *
     * @param string|null $order_item_id order_item_id
     *
     * @return self
     */
    public function setOrderItemId($order_item_id)
    {
        if (is_null($order_item_id)) {
            throw new \InvalidArgumentException('non-nullable order_item_id cannot be null');
        }
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets source_internal_transport_reference_id
     *
     * @return string|null
     */
    public function getSourceInternalTransportReferenceId()
    {
        return $this->container['source_internal_transport_reference_id'];
    }

    /**
     * Sets source_internal_transport_reference_id
     *
     * @param string|null $source_internal_transport_reference_id source_internal_transport_reference_id
     *
     * @return self
     */
    public function setSourceInternalTransportReferenceId($source_internal_transport_reference_id)
    {
        if (is_null($source_internal_transport_reference_id)) {
            throw new \InvalidArgumentException('non-nullable source_internal_transport_reference_id cannot be null');
        }
        $this->container['source_internal_transport_reference_id'] = $source_internal_transport_reference_id;

        return $this;
    }

    /**
     * Gets source_storage_place_id
     *
     * @return string|null
     */
    public function getSourceStoragePlaceId()
    {
        return $this->container['source_storage_place_id'];
    }

    /**
     * Sets source_storage_place_id
     *
     * @param string|null $source_storage_place_id source_storage_place_id
     *
     * @return self
     */
    public function setSourceStoragePlaceId($source_storage_place_id)
    {
        if (is_null($source_storage_place_id)) {
            throw new \InvalidArgumentException('non-nullable source_storage_place_id cannot be null');
        }
        $this->container['source_storage_place_id'] = $source_storage_place_id;

        return $this;
    }

    /**
     * Gets packaging_unit_base_article_id
     *
     * @return string|null
     */
    public function getPackagingUnitBaseArticleId()
    {
        return $this->container['packaging_unit_base_article_id'];
    }

    /**
     * Sets packaging_unit_base_article_id
     *
     * @param string|null $packaging_unit_base_article_id packaging_unit_base_article_id
     *
     * @return self
     */
    public function setPackagingUnitBaseArticleId($packaging_unit_base_article_id)
    {
        if (is_null($packaging_unit_base_article_id)) {
            throw new \InvalidArgumentException('non-nullable packaging_unit_base_article_id cannot be null');
        }
        $this->container['packaging_unit_base_article_id'] = $packaging_unit_base_article_id;

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
     * Gets production_order_item_id
     *
     * @return string|null
     */
    public function getProductionOrderItemId()
    {
        return $this->container['production_order_item_id'];
    }

    /**
     * Sets production_order_item_id
     *
     * @param string|null $production_order_item_id production_order_item_id
     *
     * @return self
     */
    public function setProductionOrderItemId($production_order_item_id)
    {
        if (is_null($production_order_item_id)) {
            throw new \InvalidArgumentException('non-nullable production_order_item_id cannot be null');
        }
        $this->container['production_order_item_id'] = $production_order_item_id;

        return $this;
    }

    /**
     * Gets sales_order_item_id
     *
     * @return string|null
     */
    public function getSalesOrderItemId()
    {
        return $this->container['sales_order_item_id'];
    }

    /**
     * Sets sales_order_item_id
     *
     * @param string|null $sales_order_item_id sales_order_item_id
     *
     * @return self
     */
    public function setSalesOrderItemId($sales_order_item_id)
    {
        if (is_null($sales_order_item_id)) {
            throw new \InvalidArgumentException('non-nullable sales_order_item_id cannot be null');
        }
        $this->container['sales_order_item_id'] = $sales_order_item_id;

        return $this;
    }

    /**
     * Gets shipment_item_id
     *
     * @return string|null
     */
    public function getShipmentItemId()
    {
        return $this->container['shipment_item_id'];
    }

    /**
     * Sets shipment_item_id
     *
     * @param string|null $shipment_item_id shipment_item_id
     *
     * @return self
     */
    public function setShipmentItemId($shipment_item_id)
    {
        if (is_null($shipment_item_id)) {
            throw new \InvalidArgumentException('non-nullable shipment_item_id cannot be null');
        }
        $this->container['shipment_item_id'] = $shipment_item_id;

        return $this;
    }

    /**
     * Gets transportation_order_id
     *
     * @return string|null
     */
    public function getTransportationOrderId()
    {
        return $this->container['transportation_order_id'];
    }

    /**
     * Sets transportation_order_id
     *
     * @param string|null $transportation_order_id transportation_order_id
     *
     * @return self
     */
    public function setTransportationOrderId($transportation_order_id)
    {
        if (is_null($transportation_order_id)) {
            throw new \InvalidArgumentException('non-nullable transportation_order_id cannot be null');
        }
        $this->container['transportation_order_id'] = $transportation_order_id;

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


