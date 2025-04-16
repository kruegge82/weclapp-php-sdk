<?php
/**
 * ArticleSupplySource
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
 * ArticleSupplySource Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ArticleSupplySource implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'articleSupplySource';

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
        'article_number' => 'string',
        'description' => 'string',
        'ean' => 'string',
        'fixed_purchase_quantity' => 'float',
        'internal_note' => 'string',
        'manufacturer_part_number' => 'string',
        'match_code' => 'string',
        'minimum_purchase_quantity' => 'float',
        'name' => 'string',
        'short_description1' => 'string',
        'short_description2' => 'string',
        'tax_rate_type' => '\kruegge82\weclapp\Model\TaxRateType',
        'unit_id' => 'string',
        'article_prices' => '\kruegge82\weclapp\Model\ArticlePriceWithoutSalesChannel[]',
        'dropshipping_possible' => 'bool',
        'ignore_in_dropshipping_automation' => 'bool',
        'procurement_lead_days' => 'int',
        'supplier_id' => 'string',
        'supplier_stock_quantity' => 'float'
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
        'article_number' => null,
        'description' => 'html',
        'ean' => null,
        'fixed_purchase_quantity' => 'decimal',
        'internal_note' => 'html',
        'manufacturer_part_number' => null,
        'match_code' => null,
        'minimum_purchase_quantity' => 'decimal',
        'name' => null,
        'short_description1' => null,
        'short_description2' => null,
        'tax_rate_type' => null,
        'unit_id' => null,
        'article_prices' => null,
        'dropshipping_possible' => null,
        'ignore_in_dropshipping_automation' => null,
        'procurement_lead_days' => 'int32',
        'supplier_id' => null,
        'supplier_stock_quantity' => 'decimal'
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
        'article_number' => false,
        'description' => false,
        'ean' => false,
        'fixed_purchase_quantity' => false,
        'internal_note' => false,
        'manufacturer_part_number' => false,
        'match_code' => false,
        'minimum_purchase_quantity' => false,
        'name' => false,
        'short_description1' => false,
        'short_description2' => false,
        'tax_rate_type' => false,
        'unit_id' => false,
        'article_prices' => false,
        'dropshipping_possible' => false,
        'ignore_in_dropshipping_automation' => false,
        'procurement_lead_days' => false,
        'supplier_id' => false,
        'supplier_stock_quantity' => false
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
        'article_number' => 'articleNumber',
        'description' => 'description',
        'ean' => 'ean',
        'fixed_purchase_quantity' => 'fixedPurchaseQuantity',
        'internal_note' => 'internalNote',
        'manufacturer_part_number' => 'manufacturerPartNumber',
        'match_code' => 'matchCode',
        'minimum_purchase_quantity' => 'minimumPurchaseQuantity',
        'name' => 'name',
        'short_description1' => 'shortDescription1',
        'short_description2' => 'shortDescription2',
        'tax_rate_type' => 'taxRateType',
        'unit_id' => 'unitId',
        'article_prices' => 'articlePrices',
        'dropshipping_possible' => 'dropshippingPossible',
        'ignore_in_dropshipping_automation' => 'ignoreInDropshippingAutomation',
        'procurement_lead_days' => 'procurementLeadDays',
        'supplier_id' => 'supplierId',
        'supplier_stock_quantity' => 'supplierStockQuantity'
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
        'article_number' => 'setArticleNumber',
        'description' => 'setDescription',
        'ean' => 'setEan',
        'fixed_purchase_quantity' => 'setFixedPurchaseQuantity',
        'internal_note' => 'setInternalNote',
        'manufacturer_part_number' => 'setManufacturerPartNumber',
        'match_code' => 'setMatchCode',
        'minimum_purchase_quantity' => 'setMinimumPurchaseQuantity',
        'name' => 'setName',
        'short_description1' => 'setShortDescription1',
        'short_description2' => 'setShortDescription2',
        'tax_rate_type' => 'setTaxRateType',
        'unit_id' => 'setUnitId',
        'article_prices' => 'setArticlePrices',
        'dropshipping_possible' => 'setDropshippingPossible',
        'ignore_in_dropshipping_automation' => 'setIgnoreInDropshippingAutomation',
        'procurement_lead_days' => 'setProcurementLeadDays',
        'supplier_id' => 'setSupplierId',
        'supplier_stock_quantity' => 'setSupplierStockQuantity'
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
        'article_number' => 'getArticleNumber',
        'description' => 'getDescription',
        'ean' => 'getEan',
        'fixed_purchase_quantity' => 'getFixedPurchaseQuantity',
        'internal_note' => 'getInternalNote',
        'manufacturer_part_number' => 'getManufacturerPartNumber',
        'match_code' => 'getMatchCode',
        'minimum_purchase_quantity' => 'getMinimumPurchaseQuantity',
        'name' => 'getName',
        'short_description1' => 'getShortDescription1',
        'short_description2' => 'getShortDescription2',
        'tax_rate_type' => 'getTaxRateType',
        'unit_id' => 'getUnitId',
        'article_prices' => 'getArticlePrices',
        'dropshipping_possible' => 'getDropshippingPossible',
        'ignore_in_dropshipping_automation' => 'getIgnoreInDropshippingAutomation',
        'procurement_lead_days' => 'getProcurementLeadDays',
        'supplier_id' => 'getSupplierId',
        'supplier_stock_quantity' => 'getSupplierStockQuantity'
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
        $this->setIfExists('article_number', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('fixed_purchase_quantity', $data ?? [], null);
        $this->setIfExists('internal_note', $data ?? [], null);
        $this->setIfExists('manufacturer_part_number', $data ?? [], null);
        $this->setIfExists('match_code', $data ?? [], null);
        $this->setIfExists('minimum_purchase_quantity', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('short_description1', $data ?? [], null);
        $this->setIfExists('short_description2', $data ?? [], null);
        $this->setIfExists('tax_rate_type', $data ?? [], null);
        $this->setIfExists('unit_id', $data ?? [], null);
        $this->setIfExists('article_prices', $data ?? [], null);
        $this->setIfExists('dropshipping_possible', $data ?? [], null);
        $this->setIfExists('ignore_in_dropshipping_automation', $data ?? [], null);
        $this->setIfExists('procurement_lead_days', $data ?? [], null);
        $this->setIfExists('supplier_id', $data ?? [], null);
        $this->setIfExists('supplier_stock_quantity', $data ?? [], null);
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

        if (!is_null($this->container['article_number']) && (mb_strlen($this->container['article_number']) > 1000)) {
            $invalidProperties[] = "invalid value for 'article_number', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['ean']) && (mb_strlen($this->container['ean']) > 18)) {
            $invalidProperties[] = "invalid value for 'ean', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['fixed_purchase_quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['fixed_purchase_quantity'])) {
            $invalidProperties[] = "invalid value for 'fixed_purchase_quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['internal_note']) && (mb_strlen($this->container['internal_note']) > 1000)) {
            $invalidProperties[] = "invalid value for 'internal_note', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['manufacturer_part_number']) && (mb_strlen($this->container['manufacturer_part_number']) > 300)) {
            $invalidProperties[] = "invalid value for 'manufacturer_part_number', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['match_code']) && (mb_strlen($this->container['match_code']) > 1000)) {
            $invalidProperties[] = "invalid value for 'match_code', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['minimum_purchase_quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['minimum_purchase_quantity'])) {
            $invalidProperties[] = "invalid value for 'minimum_purchase_quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 300)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['short_description1']) && (mb_strlen($this->container['short_description1']) > 255)) {
            $invalidProperties[] = "invalid value for 'short_description1', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['short_description2']) && (mb_strlen($this->container['short_description2']) > 255)) {
            $invalidProperties[] = "invalid value for 'short_description2', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['supplier_stock_quantity']) && !preg_match("/^([0-9]{1,13})/", $this->container['supplier_stock_quantity'])) {
            $invalidProperties[] = "invalid value for 'supplier_stock_quantity', must be conform to the pattern /^([0-9]{1,13})/.";
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
     * Gets article_number
     *
     * @return string|null
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     *
     * @param string|null $article_number article_number
     *
     * @return self
     */
    public function setArticleNumber($article_number)
    {
        if (is_null($article_number)) {
            throw new \InvalidArgumentException('non-nullable article_number cannot be null');
        }
        if ((mb_strlen($article_number) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $article_number when calling ArticleSupplySource., must be smaller than or equal to 1000.');
        }

        $this->container['article_number'] = $article_number;

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
            throw new \InvalidArgumentException('invalid length for $description when calling ArticleSupplySource., must be smaller than or equal to 255.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean ean
     *
     * @return self
     */
    public function setEan($ean)
    {
        if (is_null($ean)) {
            throw new \InvalidArgumentException('non-nullable ean cannot be null');
        }
        if ((mb_strlen($ean) > 18)) {
            throw new \InvalidArgumentException('invalid length for $ean when calling ArticleSupplySource., must be smaller than or equal to 18.');
        }

        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets fixed_purchase_quantity
     *
     * @return float|null
     */
    public function getFixedPurchaseQuantity()
    {
        return $this->container['fixed_purchase_quantity'];
    }

    /**
     * Sets fixed_purchase_quantity
     *
     * @param float|null $fixed_purchase_quantity fixed_purchase_quantity
     *
     * @return self
     */
    public function setFixedPurchaseQuantity($fixed_purchase_quantity)
    {
        if (is_null($fixed_purchase_quantity)) {
            throw new \InvalidArgumentException('non-nullable fixed_purchase_quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($fixed_purchase_quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$fixed_purchase_quantity when calling ArticleSupplySource., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['fixed_purchase_quantity'] = $fixed_purchase_quantity;

        return $this;
    }

    /**
     * Gets internal_note
     *
     * @return string|null
     */
    public function getInternalNote()
    {
        return $this->container['internal_note'];
    }

    /**
     * Sets internal_note
     *
     * @param string|null $internal_note internal_note
     *
     * @return self
     */
    public function setInternalNote($internal_note)
    {
        if (is_null($internal_note)) {
            throw new \InvalidArgumentException('non-nullable internal_note cannot be null');
        }
        if ((mb_strlen($internal_note) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $internal_note when calling ArticleSupplySource., must be smaller than or equal to 1000.');
        }

        $this->container['internal_note'] = $internal_note;

        return $this;
    }

    /**
     * Gets manufacturer_part_number
     *
     * @return string|null
     */
    public function getManufacturerPartNumber()
    {
        return $this->container['manufacturer_part_number'];
    }

    /**
     * Sets manufacturer_part_number
     *
     * @param string|null $manufacturer_part_number manufacturer_part_number
     *
     * @return self
     */
    public function setManufacturerPartNumber($manufacturer_part_number)
    {
        if (is_null($manufacturer_part_number)) {
            throw new \InvalidArgumentException('non-nullable manufacturer_part_number cannot be null');
        }
        if ((mb_strlen($manufacturer_part_number) > 300)) {
            throw new \InvalidArgumentException('invalid length for $manufacturer_part_number when calling ArticleSupplySource., must be smaller than or equal to 300.');
        }

        $this->container['manufacturer_part_number'] = $manufacturer_part_number;

        return $this;
    }

    /**
     * Gets match_code
     *
     * @return string|null
     */
    public function getMatchCode()
    {
        return $this->container['match_code'];
    }

    /**
     * Sets match_code
     *
     * @param string|null $match_code match_code
     *
     * @return self
     */
    public function setMatchCode($match_code)
    {
        if (is_null($match_code)) {
            throw new \InvalidArgumentException('non-nullable match_code cannot be null');
        }
        if ((mb_strlen($match_code) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $match_code when calling ArticleSupplySource., must be smaller than or equal to 1000.');
        }

        $this->container['match_code'] = $match_code;

        return $this;
    }

    /**
     * Gets minimum_purchase_quantity
     *
     * @return float|null
     */
    public function getMinimumPurchaseQuantity()
    {
        return $this->container['minimum_purchase_quantity'];
    }

    /**
     * Sets minimum_purchase_quantity
     *
     * @param float|null $minimum_purchase_quantity minimum_purchase_quantity
     *
     * @return self
     */
    public function setMinimumPurchaseQuantity($minimum_purchase_quantity)
    {
        if (is_null($minimum_purchase_quantity)) {
            throw new \InvalidArgumentException('non-nullable minimum_purchase_quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($minimum_purchase_quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$minimum_purchase_quantity when calling ArticleSupplySource., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['minimum_purchase_quantity'] = $minimum_purchase_quantity;

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
        if ((mb_strlen($name) > 300)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ArticleSupplySource., must be smaller than or equal to 300.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets short_description1
     *
     * @return string|null
     */
    public function getShortDescription1()
    {
        return $this->container['short_description1'];
    }

    /**
     * Sets short_description1
     *
     * @param string|null $short_description1 short_description1
     *
     * @return self
     */
    public function setShortDescription1($short_description1)
    {
        if (is_null($short_description1)) {
            throw new \InvalidArgumentException('non-nullable short_description1 cannot be null');
        }
        if ((mb_strlen($short_description1) > 255)) {
            throw new \InvalidArgumentException('invalid length for $short_description1 when calling ArticleSupplySource., must be smaller than or equal to 255.');
        }

        $this->container['short_description1'] = $short_description1;

        return $this;
    }

    /**
     * Gets short_description2
     *
     * @return string|null
     */
    public function getShortDescription2()
    {
        return $this->container['short_description2'];
    }

    /**
     * Sets short_description2
     *
     * @param string|null $short_description2 short_description2
     *
     * @return self
     */
    public function setShortDescription2($short_description2)
    {
        if (is_null($short_description2)) {
            throw new \InvalidArgumentException('non-nullable short_description2 cannot be null');
        }
        if ((mb_strlen($short_description2) > 255)) {
            throw new \InvalidArgumentException('invalid length for $short_description2 when calling ArticleSupplySource., must be smaller than or equal to 255.');
        }

        $this->container['short_description2'] = $short_description2;

        return $this;
    }

    /**
     * Gets tax_rate_type
     *
     * @return \kruegge82\weclapp\Model\TaxRateType|null
     */
    public function getTaxRateType()
    {
        return $this->container['tax_rate_type'];
    }

    /**
     * Sets tax_rate_type
     *
     * @param \kruegge82\weclapp\Model\TaxRateType|null $tax_rate_type tax_rate_type
     *
     * @return self
     */
    public function setTaxRateType($tax_rate_type)
    {
        if (is_null($tax_rate_type)) {
            throw new \InvalidArgumentException('non-nullable tax_rate_type cannot be null');
        }
        $this->container['tax_rate_type'] = $tax_rate_type;

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
     * Gets article_prices
     *
     * @return \kruegge82\weclapp\Model\ArticlePriceWithoutSalesChannel[]|null
     */
    public function getArticlePrices()
    {
        return $this->container['article_prices'];
    }

    /**
     * Sets article_prices
     *
     * @param \kruegge82\weclapp\Model\ArticlePriceWithoutSalesChannel[]|null $article_prices article_prices
     *
     * @return self
     */
    public function setArticlePrices($article_prices)
    {
        if (is_null($article_prices)) {
            throw new \InvalidArgumentException('non-nullable article_prices cannot be null');
        }
        $this->container['article_prices'] = $article_prices;

        return $this;
    }

    /**
     * Gets dropshipping_possible
     *
     * @return bool|null
     */
    public function getDropshippingPossible()
    {
        return $this->container['dropshipping_possible'];
    }

    /**
     * Sets dropshipping_possible
     *
     * @param bool|null $dropshipping_possible dropshipping_possible
     *
     * @return self
     */
    public function setDropshippingPossible($dropshipping_possible)
    {
        if (is_null($dropshipping_possible)) {
            throw new \InvalidArgumentException('non-nullable dropshipping_possible cannot be null');
        }
        $this->container['dropshipping_possible'] = $dropshipping_possible;

        return $this;
    }

    /**
     * Gets ignore_in_dropshipping_automation
     *
     * @return bool|null
     */
    public function getIgnoreInDropshippingAutomation()
    {
        return $this->container['ignore_in_dropshipping_automation'];
    }

    /**
     * Sets ignore_in_dropshipping_automation
     *
     * @param bool|null $ignore_in_dropshipping_automation ignore_in_dropshipping_automation
     *
     * @return self
     */
    public function setIgnoreInDropshippingAutomation($ignore_in_dropshipping_automation)
    {
        if (is_null($ignore_in_dropshipping_automation)) {
            throw new \InvalidArgumentException('non-nullable ignore_in_dropshipping_automation cannot be null');
        }
        $this->container['ignore_in_dropshipping_automation'] = $ignore_in_dropshipping_automation;

        return $this;
    }

    /**
     * Gets procurement_lead_days
     *
     * @return int|null
     */
    public function getProcurementLeadDays()
    {
        return $this->container['procurement_lead_days'];
    }

    /**
     * Sets procurement_lead_days
     *
     * @param int|null $procurement_lead_days procurement_lead_days
     *
     * @return self
     */
    public function setProcurementLeadDays($procurement_lead_days)
    {
        if (is_null($procurement_lead_days)) {
            throw new \InvalidArgumentException('non-nullable procurement_lead_days cannot be null');
        }
        $this->container['procurement_lead_days'] = $procurement_lead_days;

        return $this;
    }

    /**
     * Gets supplier_id
     *
     * @return string|null
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     *
     * @param string|null $supplier_id supplier_id
     *
     * @return self
     */
    public function setSupplierId($supplier_id)
    {
        if (is_null($supplier_id)) {
            throw new \InvalidArgumentException('non-nullable supplier_id cannot be null');
        }
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets supplier_stock_quantity
     *
     * @return float|null
     */
    public function getSupplierStockQuantity()
    {
        return $this->container['supplier_stock_quantity'];
    }

    /**
     * Sets supplier_stock_quantity
     *
     * @param float|null $supplier_stock_quantity supplier_stock_quantity
     *
     * @return self
     */
    public function setSupplierStockQuantity($supplier_stock_quantity)
    {
        if (is_null($supplier_stock_quantity)) {
            throw new \InvalidArgumentException('non-nullable supplier_stock_quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})/", ObjectSerializer::toString($supplier_stock_quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$supplier_stock_quantity when calling ArticleSupplySource., must conform to the pattern /^([0-9]{1,13})/.");
        }

        $this->container['supplier_stock_quantity'] = $supplier_stock_quantity;

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


