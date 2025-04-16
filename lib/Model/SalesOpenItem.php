<?php
/**
 * SalesOpenItem
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
 * SalesOpenItem Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SalesOpenItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'salesOpenItem';

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
        'amount' => 'float',
        'amount_discount' => 'float',
        'amount_open' => 'float',
        'amount_paid' => 'float',
        'clearance_date' => 'int',
        'cleared' => 'bool',
        'open_item_number' => 'string',
        'open_item_type' => '\kruegge82\weclapp\Model\OpenItemType',
        'payment_applications' => '\kruegge82\weclapp\Model\PaymentApplication[]',
        'sales_invoice_id' => 'string'
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
        'amount' => 'decimal',
        'amount_discount' => 'decimal',
        'amount_open' => 'decimal',
        'amount_paid' => 'decimal',
        'clearance_date' => 'timestamp',
        'cleared' => null,
        'open_item_number' => null,
        'open_item_type' => null,
        'payment_applications' => null,
        'sales_invoice_id' => null
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
        'amount' => false,
        'amount_discount' => false,
        'amount_open' => false,
        'amount_paid' => false,
        'clearance_date' => false,
        'cleared' => false,
        'open_item_number' => false,
        'open_item_type' => false,
        'payment_applications' => false,
        'sales_invoice_id' => false
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
        'amount' => 'amount',
        'amount_discount' => 'amountDiscount',
        'amount_open' => 'amountOpen',
        'amount_paid' => 'amountPaid',
        'clearance_date' => 'clearanceDate',
        'cleared' => 'cleared',
        'open_item_number' => 'openItemNumber',
        'open_item_type' => 'openItemType',
        'payment_applications' => 'paymentApplications',
        'sales_invoice_id' => 'salesInvoiceId'
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
        'amount' => 'setAmount',
        'amount_discount' => 'setAmountDiscount',
        'amount_open' => 'setAmountOpen',
        'amount_paid' => 'setAmountPaid',
        'clearance_date' => 'setClearanceDate',
        'cleared' => 'setCleared',
        'open_item_number' => 'setOpenItemNumber',
        'open_item_type' => 'setOpenItemType',
        'payment_applications' => 'setPaymentApplications',
        'sales_invoice_id' => 'setSalesInvoiceId'
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
        'amount' => 'getAmount',
        'amount_discount' => 'getAmountDiscount',
        'amount_open' => 'getAmountOpen',
        'amount_paid' => 'getAmountPaid',
        'clearance_date' => 'getClearanceDate',
        'cleared' => 'getCleared',
        'open_item_number' => 'getOpenItemNumber',
        'open_item_type' => 'getOpenItemType',
        'payment_applications' => 'getPaymentApplications',
        'sales_invoice_id' => 'getSalesInvoiceId'
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
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('amount_discount', $data ?? [], null);
        $this->setIfExists('amount_open', $data ?? [], null);
        $this->setIfExists('amount_paid', $data ?? [], null);
        $this->setIfExists('clearance_date', $data ?? [], null);
        $this->setIfExists('cleared', $data ?? [], null);
        $this->setIfExists('open_item_number', $data ?? [], null);
        $this->setIfExists('open_item_type', $data ?? [], null);
        $this->setIfExists('payment_applications', $data ?? [], null);
        $this->setIfExists('sales_invoice_id', $data ?? [], null);
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

        if (!is_null($this->container['amount']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['amount'])) {
            $invalidProperties[] = "invalid value for 'amount', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['amount_discount']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['amount_discount'])) {
            $invalidProperties[] = "invalid value for 'amount_discount', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['amount_open']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['amount_open'])) {
            $invalidProperties[] = "invalid value for 'amount_open', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['amount_paid']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['amount_paid'])) {
            $invalidProperties[] = "invalid value for 'amount_paid', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['open_item_number']) && (mb_strlen($this->container['open_item_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'open_item_number', the character length must be smaller than or equal to 255.";
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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($amount)))) {
            throw new \InvalidArgumentException("invalid value for \$amount when calling SalesOpenItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_discount
     *
     * @return float|null
     */
    public function getAmountDiscount()
    {
        return $this->container['amount_discount'];
    }

    /**
     * Sets amount_discount
     *
     * @param float|null $amount_discount amount_discount
     *
     * @return self
     */
    public function setAmountDiscount($amount_discount)
    {
        if (is_null($amount_discount)) {
            throw new \InvalidArgumentException('non-nullable amount_discount cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($amount_discount)))) {
            throw new \InvalidArgumentException("invalid value for \$amount_discount when calling SalesOpenItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['amount_discount'] = $amount_discount;

        return $this;
    }

    /**
     * Gets amount_open
     *
     * @return float|null
     */
    public function getAmountOpen()
    {
        return $this->container['amount_open'];
    }

    /**
     * Sets amount_open
     *
     * @param float|null $amount_open amount_open
     *
     * @return self
     */
    public function setAmountOpen($amount_open)
    {
        if (is_null($amount_open)) {
            throw new \InvalidArgumentException('non-nullable amount_open cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($amount_open)))) {
            throw new \InvalidArgumentException("invalid value for \$amount_open when calling SalesOpenItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['amount_open'] = $amount_open;

        return $this;
    }

    /**
     * Gets amount_paid
     *
     * @return float|null
     */
    public function getAmountPaid()
    {
        return $this->container['amount_paid'];
    }

    /**
     * Sets amount_paid
     *
     * @param float|null $amount_paid amount_paid
     *
     * @return self
     */
    public function setAmountPaid($amount_paid)
    {
        if (is_null($amount_paid)) {
            throw new \InvalidArgumentException('non-nullable amount_paid cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($amount_paid)))) {
            throw new \InvalidArgumentException("invalid value for \$amount_paid when calling SalesOpenItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['amount_paid'] = $amount_paid;

        return $this;
    }

    /**
     * Gets clearance_date
     *
     * @return int|null
     */
    public function getClearanceDate()
    {
        return $this->container['clearance_date'];
    }

    /**
     * Sets clearance_date
     *
     * @param int|null $clearance_date clearance_date
     *
     * @return self
     */
    public function setClearanceDate($clearance_date)
    {
        if (is_null($clearance_date)) {
            throw new \InvalidArgumentException('non-nullable clearance_date cannot be null');
        }
        $this->container['clearance_date'] = $clearance_date;

        return $this;
    }

    /**
     * Gets cleared
     *
     * @return bool|null
     */
    public function getCleared()
    {
        return $this->container['cleared'];
    }

    /**
     * Sets cleared
     *
     * @param bool|null $cleared cleared
     *
     * @return self
     */
    public function setCleared($cleared)
    {
        if (is_null($cleared)) {
            throw new \InvalidArgumentException('non-nullable cleared cannot be null');
        }
        $this->container['cleared'] = $cleared;

        return $this;
    }

    /**
     * Gets open_item_number
     *
     * @return string|null
     */
    public function getOpenItemNumber()
    {
        return $this->container['open_item_number'];
    }

    /**
     * Sets open_item_number
     *
     * @param string|null $open_item_number open_item_number
     *
     * @return self
     */
    public function setOpenItemNumber($open_item_number)
    {
        if (is_null($open_item_number)) {
            throw new \InvalidArgumentException('non-nullable open_item_number cannot be null');
        }
        if ((mb_strlen($open_item_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $open_item_number when calling SalesOpenItem., must be smaller than or equal to 255.');
        }

        $this->container['open_item_number'] = $open_item_number;

        return $this;
    }

    /**
     * Gets open_item_type
     *
     * @return \kruegge82\weclapp\Model\OpenItemType|null
     */
    public function getOpenItemType()
    {
        return $this->container['open_item_type'];
    }

    /**
     * Sets open_item_type
     *
     * @param \kruegge82\weclapp\Model\OpenItemType|null $open_item_type open_item_type
     *
     * @return self
     */
    public function setOpenItemType($open_item_type)
    {
        if (is_null($open_item_type)) {
            throw new \InvalidArgumentException('non-nullable open_item_type cannot be null');
        }
        $this->container['open_item_type'] = $open_item_type;

        return $this;
    }

    /**
     * Gets payment_applications
     *
     * @return \kruegge82\weclapp\Model\PaymentApplication[]|null
     */
    public function getPaymentApplications()
    {
        return $this->container['payment_applications'];
    }

    /**
     * Sets payment_applications
     *
     * @param \kruegge82\weclapp\Model\PaymentApplication[]|null $payment_applications payment_applications
     *
     * @return self
     */
    public function setPaymentApplications($payment_applications)
    {
        if (is_null($payment_applications)) {
            throw new \InvalidArgumentException('non-nullable payment_applications cannot be null');
        }
        $this->container['payment_applications'] = $payment_applications;

        return $this;
    }

    /**
     * Gets sales_invoice_id
     *
     * @return string|null
     */
    public function getSalesInvoiceId()
    {
        return $this->container['sales_invoice_id'];
    }

    /**
     * Sets sales_invoice_id
     *
     * @param string|null $sales_invoice_id sales_invoice_id
     *
     * @return self
     */
    public function setSalesInvoiceId($sales_invoice_id)
    {
        if (is_null($sales_invoice_id)) {
            throw new \InvalidArgumentException('non-nullable sales_invoice_id cannot be null');
        }
        $this->container['sales_invoice_id'] = $sales_invoice_id;

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


