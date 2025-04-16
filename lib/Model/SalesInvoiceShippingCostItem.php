<?php
/**
 * SalesInvoiceShippingCostItem
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
 * SalesInvoiceShippingCostItem Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SalesInvoiceShippingCostItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'salesInvoiceShippingCostItem';

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
        'article_id' => 'string',
        'gross_amount' => 'float',
        'gross_amount_in_company_currency' => 'float',
        'manual_unit_price' => 'bool',
        'net_amount' => 'float',
        'net_amount_in_company_currency' => 'float',
        'unit_price' => 'float',
        'unit_price_in_company_currency' => 'float',
        'manual_unit_cost' => 'bool',
        'tax_id' => 'string',
        'unit_cost' => 'float',
        'unit_cost_in_company_currency' => 'float'
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
        'article_id' => null,
        'gross_amount' => 'decimal',
        'gross_amount_in_company_currency' => 'decimal',
        'manual_unit_price' => null,
        'net_amount' => 'decimal',
        'net_amount_in_company_currency' => 'decimal',
        'unit_price' => 'decimal',
        'unit_price_in_company_currency' => 'decimal',
        'manual_unit_cost' => null,
        'tax_id' => null,
        'unit_cost' => 'decimal',
        'unit_cost_in_company_currency' => 'decimal'
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
        'article_id' => false,
        'gross_amount' => false,
        'gross_amount_in_company_currency' => false,
        'manual_unit_price' => false,
        'net_amount' => false,
        'net_amount_in_company_currency' => false,
        'unit_price' => false,
        'unit_price_in_company_currency' => false,
        'manual_unit_cost' => false,
        'tax_id' => false,
        'unit_cost' => false,
        'unit_cost_in_company_currency' => false
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
        'article_id' => 'articleId',
        'gross_amount' => 'grossAmount',
        'gross_amount_in_company_currency' => 'grossAmountInCompanyCurrency',
        'manual_unit_price' => 'manualUnitPrice',
        'net_amount' => 'netAmount',
        'net_amount_in_company_currency' => 'netAmountInCompanyCurrency',
        'unit_price' => 'unitPrice',
        'unit_price_in_company_currency' => 'unitPriceInCompanyCurrency',
        'manual_unit_cost' => 'manualUnitCost',
        'tax_id' => 'taxId',
        'unit_cost' => 'unitCost',
        'unit_cost_in_company_currency' => 'unitCostInCompanyCurrency'
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
        'article_id' => 'setArticleId',
        'gross_amount' => 'setGrossAmount',
        'gross_amount_in_company_currency' => 'setGrossAmountInCompanyCurrency',
        'manual_unit_price' => 'setManualUnitPrice',
        'net_amount' => 'setNetAmount',
        'net_amount_in_company_currency' => 'setNetAmountInCompanyCurrency',
        'unit_price' => 'setUnitPrice',
        'unit_price_in_company_currency' => 'setUnitPriceInCompanyCurrency',
        'manual_unit_cost' => 'setManualUnitCost',
        'tax_id' => 'setTaxId',
        'unit_cost' => 'setUnitCost',
        'unit_cost_in_company_currency' => 'setUnitCostInCompanyCurrency'
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
        'article_id' => 'getArticleId',
        'gross_amount' => 'getGrossAmount',
        'gross_amount_in_company_currency' => 'getGrossAmountInCompanyCurrency',
        'manual_unit_price' => 'getManualUnitPrice',
        'net_amount' => 'getNetAmount',
        'net_amount_in_company_currency' => 'getNetAmountInCompanyCurrency',
        'unit_price' => 'getUnitPrice',
        'unit_price_in_company_currency' => 'getUnitPriceInCompanyCurrency',
        'manual_unit_cost' => 'getManualUnitCost',
        'tax_id' => 'getTaxId',
        'unit_cost' => 'getUnitCost',
        'unit_cost_in_company_currency' => 'getUnitCostInCompanyCurrency'
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
        $this->setIfExists('article_id', $data ?? [], null);
        $this->setIfExists('gross_amount', $data ?? [], null);
        $this->setIfExists('gross_amount_in_company_currency', $data ?? [], null);
        $this->setIfExists('manual_unit_price', $data ?? [], null);
        $this->setIfExists('net_amount', $data ?? [], null);
        $this->setIfExists('net_amount_in_company_currency', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
        $this->setIfExists('unit_price_in_company_currency', $data ?? [], null);
        $this->setIfExists('manual_unit_cost', $data ?? [], null);
        $this->setIfExists('tax_id', $data ?? [], null);
        $this->setIfExists('unit_cost', $data ?? [], null);
        $this->setIfExists('unit_cost_in_company_currency', $data ?? [], null);
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

        if (!is_null($this->container['gross_amount']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['gross_amount'])) {
            $invalidProperties[] = "invalid value for 'gross_amount', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['gross_amount_in_company_currency']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['gross_amount_in_company_currency'])) {
            $invalidProperties[] = "invalid value for 'gross_amount_in_company_currency', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['net_amount']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['net_amount'])) {
            $invalidProperties[] = "invalid value for 'net_amount', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['net_amount_in_company_currency']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['net_amount_in_company_currency'])) {
            $invalidProperties[] = "invalid value for 'net_amount_in_company_currency', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['unit_price']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['unit_price'])) {
            $invalidProperties[] = "invalid value for 'unit_price', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['unit_price_in_company_currency']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['unit_price_in_company_currency'])) {
            $invalidProperties[] = "invalid value for 'unit_price_in_company_currency', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['unit_cost']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['unit_cost'])) {
            $invalidProperties[] = "invalid value for 'unit_cost', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['unit_cost_in_company_currency']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['unit_cost_in_company_currency'])) {
            $invalidProperties[] = "invalid value for 'unit_cost_in_company_currency', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
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
     * Gets gross_amount
     *
     * @return float|null
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param float|null $gross_amount gross_amount
     *
     * @return self
     */
    public function setGrossAmount($gross_amount)
    {
        if (is_null($gross_amount)) {
            throw new \InvalidArgumentException('non-nullable gross_amount cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($gross_amount)))) {
            throw new \InvalidArgumentException("invalid value for \$gross_amount when calling SalesInvoiceShippingCostItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['gross_amount'] = $gross_amount;

        return $this;
    }

    /**
     * Gets gross_amount_in_company_currency
     *
     * @return float|null
     */
    public function getGrossAmountInCompanyCurrency()
    {
        return $this->container['gross_amount_in_company_currency'];
    }

    /**
     * Sets gross_amount_in_company_currency
     *
     * @param float|null $gross_amount_in_company_currency gross_amount_in_company_currency
     *
     * @return self
     */
    public function setGrossAmountInCompanyCurrency($gross_amount_in_company_currency)
    {
        if (is_null($gross_amount_in_company_currency)) {
            throw new \InvalidArgumentException('non-nullable gross_amount_in_company_currency cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($gross_amount_in_company_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$gross_amount_in_company_currency when calling SalesInvoiceShippingCostItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['gross_amount_in_company_currency'] = $gross_amount_in_company_currency;

        return $this;
    }

    /**
     * Gets manual_unit_price
     *
     * @return bool|null
     */
    public function getManualUnitPrice()
    {
        return $this->container['manual_unit_price'];
    }

    /**
     * Sets manual_unit_price
     *
     * @param bool|null $manual_unit_price manual_unit_price
     *
     * @return self
     */
    public function setManualUnitPrice($manual_unit_price)
    {
        if (is_null($manual_unit_price)) {
            throw new \InvalidArgumentException('non-nullable manual_unit_price cannot be null');
        }
        $this->container['manual_unit_price'] = $manual_unit_price;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return float|null
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param float|null $net_amount net_amount
     *
     * @return self
     */
    public function setNetAmount($net_amount)
    {
        if (is_null($net_amount)) {
            throw new \InvalidArgumentException('non-nullable net_amount cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($net_amount)))) {
            throw new \InvalidArgumentException("invalid value for \$net_amount when calling SalesInvoiceShippingCostItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets net_amount_in_company_currency
     *
     * @return float|null
     */
    public function getNetAmountInCompanyCurrency()
    {
        return $this->container['net_amount_in_company_currency'];
    }

    /**
     * Sets net_amount_in_company_currency
     *
     * @param float|null $net_amount_in_company_currency net_amount_in_company_currency
     *
     * @return self
     */
    public function setNetAmountInCompanyCurrency($net_amount_in_company_currency)
    {
        if (is_null($net_amount_in_company_currency)) {
            throw new \InvalidArgumentException('non-nullable net_amount_in_company_currency cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($net_amount_in_company_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$net_amount_in_company_currency when calling SalesInvoiceShippingCostItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['net_amount_in_company_currency'] = $net_amount_in_company_currency;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        if (is_null($unit_price)) {
            throw new \InvalidArgumentException('non-nullable unit_price cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($unit_price)))) {
            throw new \InvalidArgumentException("invalid value for \$unit_price when calling SalesInvoiceShippingCostItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets unit_price_in_company_currency
     *
     * @return float|null
     */
    public function getUnitPriceInCompanyCurrency()
    {
        return $this->container['unit_price_in_company_currency'];
    }

    /**
     * Sets unit_price_in_company_currency
     *
     * @param float|null $unit_price_in_company_currency unit_price_in_company_currency
     *
     * @return self
     */
    public function setUnitPriceInCompanyCurrency($unit_price_in_company_currency)
    {
        if (is_null($unit_price_in_company_currency)) {
            throw new \InvalidArgumentException('non-nullable unit_price_in_company_currency cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($unit_price_in_company_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$unit_price_in_company_currency when calling SalesInvoiceShippingCostItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['unit_price_in_company_currency'] = $unit_price_in_company_currency;

        return $this;
    }

    /**
     * Gets manual_unit_cost
     *
     * @return bool|null
     */
    public function getManualUnitCost()
    {
        return $this->container['manual_unit_cost'];
    }

    /**
     * Sets manual_unit_cost
     *
     * @param bool|null $manual_unit_cost manual_unit_cost
     *
     * @return self
     */
    public function setManualUnitCost($manual_unit_cost)
    {
        if (is_null($manual_unit_cost)) {
            throw new \InvalidArgumentException('non-nullable manual_unit_cost cannot be null');
        }
        $this->container['manual_unit_cost'] = $manual_unit_cost;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string|null $tax_id tax_id
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {
        if (is_null($tax_id)) {
            throw new \InvalidArgumentException('non-nullable tax_id cannot be null');
        }
        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets unit_cost
     *
     * @return float|null
     */
    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    /**
     * Sets unit_cost
     *
     * @param float|null $unit_cost unit_cost
     *
     * @return self
     */
    public function setUnitCost($unit_cost)
    {
        if (is_null($unit_cost)) {
            throw new \InvalidArgumentException('non-nullable unit_cost cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($unit_cost)))) {
            throw new \InvalidArgumentException("invalid value for \$unit_cost when calling SalesInvoiceShippingCostItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['unit_cost'] = $unit_cost;

        return $this;
    }

    /**
     * Gets unit_cost_in_company_currency
     *
     * @return float|null
     */
    public function getUnitCostInCompanyCurrency()
    {
        return $this->container['unit_cost_in_company_currency'];
    }

    /**
     * Sets unit_cost_in_company_currency
     *
     * @param float|null $unit_cost_in_company_currency unit_cost_in_company_currency
     *
     * @return self
     */
    public function setUnitCostInCompanyCurrency($unit_cost_in_company_currency)
    {
        if (is_null($unit_cost_in_company_currency)) {
            throw new \InvalidArgumentException('non-nullable unit_cost_in_company_currency cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($unit_cost_in_company_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$unit_cost_in_company_currency when calling SalesInvoiceShippingCostItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['unit_cost_in_company_currency'] = $unit_cost_in_company_currency;

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


