<?php
/**
 * PurchaseOrderRequestItem
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
 * PurchaseOrderRequestItem Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PurchaseOrderRequestItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'purchaseOrderRequestItem';

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
        'custom_attributes' => '\kruegge82\weclapp\Model\CustomAttribute[]',
        'article_id' => 'string',
        'note' => 'string',
        'position_number' => 'int',
        'quantity' => 'float',
        'description' => 'string',
        'description_fixed' => 'bool',
        'item_type' => '\kruegge82\weclapp\Model\ItemType',
        'manual_quantity' => 'bool',
        'parent_item_id' => 'string',
        'title' => 'string',
        'unit_id' => 'string',
        'deleted' => 'bool',
        'price_scale_type' => '\kruegge82\weclapp\Model\PriceScaleType',
        'scale_values' => '\kruegge82\weclapp\Model\PurchaseOrderRequestItemScaleValue[]'
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
        'custom_attributes' => null,
        'article_id' => null,
        'note' => null,
        'position_number' => 'int32',
        'quantity' => 'decimal',
        'description' => 'html',
        'description_fixed' => null,
        'item_type' => null,
        'manual_quantity' => null,
        'parent_item_id' => null,
        'title' => null,
        'unit_id' => null,
        'deleted' => null,
        'price_scale_type' => null,
        'scale_values' => null
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
        'custom_attributes' => false,
        'article_id' => false,
        'note' => false,
        'position_number' => false,
        'quantity' => false,
        'description' => false,
        'description_fixed' => false,
        'item_type' => false,
        'manual_quantity' => false,
        'parent_item_id' => false,
        'title' => false,
        'unit_id' => false,
        'deleted' => false,
        'price_scale_type' => false,
        'scale_values' => false
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
        'custom_attributes' => 'customAttributes',
        'article_id' => 'articleId',
        'note' => 'note',
        'position_number' => 'positionNumber',
        'quantity' => 'quantity',
        'description' => 'description',
        'description_fixed' => 'descriptionFixed',
        'item_type' => 'itemType',
        'manual_quantity' => 'manualQuantity',
        'parent_item_id' => 'parentItemId',
        'title' => 'title',
        'unit_id' => 'unitId',
        'deleted' => 'deleted',
        'price_scale_type' => 'priceScaleType',
        'scale_values' => 'scaleValues'
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
        'custom_attributes' => 'setCustomAttributes',
        'article_id' => 'setArticleId',
        'note' => 'setNote',
        'position_number' => 'setPositionNumber',
        'quantity' => 'setQuantity',
        'description' => 'setDescription',
        'description_fixed' => 'setDescriptionFixed',
        'item_type' => 'setItemType',
        'manual_quantity' => 'setManualQuantity',
        'parent_item_id' => 'setParentItemId',
        'title' => 'setTitle',
        'unit_id' => 'setUnitId',
        'deleted' => 'setDeleted',
        'price_scale_type' => 'setPriceScaleType',
        'scale_values' => 'setScaleValues'
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
        'custom_attributes' => 'getCustomAttributes',
        'article_id' => 'getArticleId',
        'note' => 'getNote',
        'position_number' => 'getPositionNumber',
        'quantity' => 'getQuantity',
        'description' => 'getDescription',
        'description_fixed' => 'getDescriptionFixed',
        'item_type' => 'getItemType',
        'manual_quantity' => 'getManualQuantity',
        'parent_item_id' => 'getParentItemId',
        'title' => 'getTitle',
        'unit_id' => 'getUnitId',
        'deleted' => 'getDeleted',
        'price_scale_type' => 'getPriceScaleType',
        'scale_values' => 'getScaleValues'
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
        $this->setIfExists('custom_attributes', $data ?? [], null);
        $this->setIfExists('article_id', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('position_number', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_fixed', $data ?? [], null);
        $this->setIfExists('item_type', $data ?? [], null);
        $this->setIfExists('manual_quantity', $data ?? [], null);
        $this->setIfExists('parent_item_id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('unit_id', $data ?? [], null);
        $this->setIfExists('deleted', $data ?? [], null);
        $this->setIfExists('price_scale_type', $data ?? [], null);
        $this->setIfExists('scale_values', $data ?? [], null);
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

        if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 1000)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['quantity'])) {
            $invalidProperties[] = "invalid value for 'quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 1000)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 1000.";
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
     * Gets custom_attributes
     *
     * @return \kruegge82\weclapp\Model\CustomAttribute[]|null
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param \kruegge82\weclapp\Model\CustomAttribute[]|null $custom_attributes custom_attributes
     *
     * @return self
     */
    public function setCustomAttributes($custom_attributes)
    {
        if (is_null($custom_attributes)) {
            throw new \InvalidArgumentException('non-nullable custom_attributes cannot be null');
        }
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }

    /**
     * Gets article_id
     *
     * @return string|null
     */
    public function getArticleId()
    {
        return $this->container['article_id'];
    }

    /**
     * Sets article_id
     *
     * @param string|null $article_id article_id
     *
     * @return self
     */
    public function setArticleId($article_id)
    {
        if (is_null($article_id)) {
            throw new \InvalidArgumentException('non-nullable article_id cannot be null');
        }
        $this->container['article_id'] = $article_id;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        if ((mb_strlen($note) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $note when calling PurchaseOrderRequestItem., must be smaller than or equal to 1000.');
        }

        $this->container['note'] = $note;

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
            throw new \InvalidArgumentException("invalid value for \$quantity when calling PurchaseOrderRequestItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling PurchaseOrderRequestItem., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_fixed
     *
     * @return bool|null
     */
    public function getDescriptionFixed()
    {
        return $this->container['description_fixed'];
    }

    /**
     * Sets description_fixed
     *
     * @param bool|null $description_fixed description_fixed
     *
     * @return self
     */
    public function setDescriptionFixed($description_fixed)
    {
        if (is_null($description_fixed)) {
            throw new \InvalidArgumentException('non-nullable description_fixed cannot be null');
        }
        $this->container['description_fixed'] = $description_fixed;

        return $this;
    }

    /**
     * Gets item_type
     *
     * @return \kruegge82\weclapp\Model\ItemType|null
     */
    public function getItemType()
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     *
     * @param \kruegge82\weclapp\Model\ItemType|null $item_type item_type
     *
     * @return self
     */
    public function setItemType($item_type)
    {
        if (is_null($item_type)) {
            throw new \InvalidArgumentException('non-nullable item_type cannot be null');
        }
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /**
     * Gets manual_quantity
     *
     * @return bool|null
     */
    public function getManualQuantity()
    {
        return $this->container['manual_quantity'];
    }

    /**
     * Sets manual_quantity
     *
     * @param bool|null $manual_quantity manual_quantity
     *
     * @return self
     */
    public function setManualQuantity($manual_quantity)
    {
        if (is_null($manual_quantity)) {
            throw new \InvalidArgumentException('non-nullable manual_quantity cannot be null');
        }
        $this->container['manual_quantity'] = $manual_quantity;

        return $this;
    }

    /**
     * Gets parent_item_id
     *
     * @return string|null
     */
    public function getParentItemId()
    {
        return $this->container['parent_item_id'];
    }

    /**
     * Sets parent_item_id
     *
     * @param string|null $parent_item_id parent_item_id
     *
     * @return self
     */
    public function setParentItemId($parent_item_id)
    {
        if (is_null($parent_item_id)) {
            throw new \InvalidArgumentException('non-nullable parent_item_id cannot be null');
        }
        $this->container['parent_item_id'] = $parent_item_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $title when calling PurchaseOrderRequestItem., must be smaller than or equal to 1000.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return string|null
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param string|null $unit_id unit_id
     *
     * @return self
     */
    public function setUnitId($unit_id)
    {
        if (is_null($unit_id)) {
            throw new \InvalidArgumentException('non-nullable unit_id cannot be null');
        }
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        if (is_null($deleted)) {
            throw new \InvalidArgumentException('non-nullable deleted cannot be null');
        }
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets price_scale_type
     *
     * @return \kruegge82\weclapp\Model\PriceScaleType|null
     */
    public function getPriceScaleType()
    {
        return $this->container['price_scale_type'];
    }

    /**
     * Sets price_scale_type
     *
     * @param \kruegge82\weclapp\Model\PriceScaleType|null $price_scale_type price_scale_type
     *
     * @return self
     */
    public function setPriceScaleType($price_scale_type)
    {
        if (is_null($price_scale_type)) {
            throw new \InvalidArgumentException('non-nullable price_scale_type cannot be null');
        }
        $this->container['price_scale_type'] = $price_scale_type;

        return $this;
    }

    /**
     * Gets scale_values
     *
     * @return \kruegge82\weclapp\Model\PurchaseOrderRequestItemScaleValue[]|null
     */
    public function getScaleValues()
    {
        return $this->container['scale_values'];
    }

    /**
     * Sets scale_values
     *
     * @param \kruegge82\weclapp\Model\PurchaseOrderRequestItemScaleValue[]|null $scale_values scale_values
     *
     * @return self
     */
    public function setScaleValues($scale_values)
    {
        if (is_null($scale_values)) {
            throw new \InvalidArgumentException('non-nullable scale_values cannot be null');
        }
        $this->container['scale_values'] = $scale_values;

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


