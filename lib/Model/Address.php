<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'address';

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
        'city' => 'string',
        'company' => 'string',
        'company2' => 'string',
        'country_code' => 'string',
        'delivery_address' => 'bool',
        'first_name' => 'string',
        'global_location_number' => 'string',
        'invoice_address' => 'bool',
        'last_name' => 'string',
        'phone_number' => 'string',
        'post_office_box_city' => 'string',
        'post_office_box_number' => 'string',
        'post_office_box_zip_code' => 'string',
        'prime_address' => 'bool',
        'salutation' => '\kruegge82\weclapp\Model\Salutation',
        'state' => 'string',
        'street1' => 'string',
        'street2' => 'string',
        'title_id' => 'string',
        'zipcode' => 'string'
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
        'city' => null,
        'company' => null,
        'company2' => null,
        'country_code' => null,
        'delivery_address' => null,
        'first_name' => null,
        'global_location_number' => null,
        'invoice_address' => null,
        'last_name' => null,
        'phone_number' => null,
        'post_office_box_city' => null,
        'post_office_box_number' => null,
        'post_office_box_zip_code' => null,
        'prime_address' => null,
        'salutation' => null,
        'state' => null,
        'street1' => null,
        'street2' => null,
        'title_id' => null,
        'zipcode' => null
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
        'city' => false,
        'company' => false,
        'company2' => false,
        'country_code' => false,
        'delivery_address' => false,
        'first_name' => false,
        'global_location_number' => false,
        'invoice_address' => false,
        'last_name' => false,
        'phone_number' => false,
        'post_office_box_city' => false,
        'post_office_box_number' => false,
        'post_office_box_zip_code' => false,
        'prime_address' => false,
        'salutation' => false,
        'state' => false,
        'street1' => false,
        'street2' => false,
        'title_id' => false,
        'zipcode' => false
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
        'city' => 'city',
        'company' => 'company',
        'company2' => 'company2',
        'country_code' => 'countryCode',
        'delivery_address' => 'deliveryAddress',
        'first_name' => 'firstName',
        'global_location_number' => 'globalLocationNumber',
        'invoice_address' => 'invoiceAddress',
        'last_name' => 'lastName',
        'phone_number' => 'phoneNumber',
        'post_office_box_city' => 'postOfficeBoxCity',
        'post_office_box_number' => 'postOfficeBoxNumber',
        'post_office_box_zip_code' => 'postOfficeBoxZipCode',
        'prime_address' => 'primeAddress',
        'salutation' => 'salutation',
        'state' => 'state',
        'street1' => 'street1',
        'street2' => 'street2',
        'title_id' => 'titleId',
        'zipcode' => 'zipcode'
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
        'city' => 'setCity',
        'company' => 'setCompany',
        'company2' => 'setCompany2',
        'country_code' => 'setCountryCode',
        'delivery_address' => 'setDeliveryAddress',
        'first_name' => 'setFirstName',
        'global_location_number' => 'setGlobalLocationNumber',
        'invoice_address' => 'setInvoiceAddress',
        'last_name' => 'setLastName',
        'phone_number' => 'setPhoneNumber',
        'post_office_box_city' => 'setPostOfficeBoxCity',
        'post_office_box_number' => 'setPostOfficeBoxNumber',
        'post_office_box_zip_code' => 'setPostOfficeBoxZipCode',
        'prime_address' => 'setPrimeAddress',
        'salutation' => 'setSalutation',
        'state' => 'setState',
        'street1' => 'setStreet1',
        'street2' => 'setStreet2',
        'title_id' => 'setTitleId',
        'zipcode' => 'setZipcode'
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
        'city' => 'getCity',
        'company' => 'getCompany',
        'company2' => 'getCompany2',
        'country_code' => 'getCountryCode',
        'delivery_address' => 'getDeliveryAddress',
        'first_name' => 'getFirstName',
        'global_location_number' => 'getGlobalLocationNumber',
        'invoice_address' => 'getInvoiceAddress',
        'last_name' => 'getLastName',
        'phone_number' => 'getPhoneNumber',
        'post_office_box_city' => 'getPostOfficeBoxCity',
        'post_office_box_number' => 'getPostOfficeBoxNumber',
        'post_office_box_zip_code' => 'getPostOfficeBoxZipCode',
        'prime_address' => 'getPrimeAddress',
        'salutation' => 'getSalutation',
        'state' => 'getState',
        'street1' => 'getStreet1',
        'street2' => 'getStreet2',
        'title_id' => 'getTitleId',
        'zipcode' => 'getZipcode'
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
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('company2', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('delivery_address', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('global_location_number', $data ?? [], null);
        $this->setIfExists('invoice_address', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('post_office_box_city', $data ?? [], null);
        $this->setIfExists('post_office_box_number', $data ?? [], null);
        $this->setIfExists('post_office_box_zip_code', $data ?? [], null);
        $this->setIfExists('prime_address', $data ?? [], null);
        $this->setIfExists('salutation', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('street1', $data ?? [], null);
        $this->setIfExists('street2', $data ?? [], null);
        $this->setIfExists('title_id', $data ?? [], null);
        $this->setIfExists('zipcode', $data ?? [], null);
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

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 1000)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) > 1000)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['company2']) && (mb_strlen($this->container['company2']) > 1000)) {
            $invalidProperties[] = "invalid value for 'company2', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['first_name']) && (mb_strlen($this->container['first_name']) > 1000)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['global_location_number']) && (mb_strlen($this->container['global_location_number']) > 1000)) {
            $invalidProperties[] = "invalid value for 'global_location_number', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['last_name']) && (mb_strlen($this->container['last_name']) > 1000)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 1000)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['post_office_box_city']) && (mb_strlen($this->container['post_office_box_city']) > 1000)) {
            $invalidProperties[] = "invalid value for 'post_office_box_city', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['post_office_box_number']) && (mb_strlen($this->container['post_office_box_number']) > 1000)) {
            $invalidProperties[] = "invalid value for 'post_office_box_number', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['post_office_box_zip_code']) && (mb_strlen($this->container['post_office_box_zip_code']) > 1000)) {
            $invalidProperties[] = "invalid value for 'post_office_box_zip_code', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 1000)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['street1']) && (mb_strlen($this->container['street1']) > 1000)) {
            $invalidProperties[] = "invalid value for 'street1', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['street2']) && (mb_strlen($this->container['street2']) > 1000)) {
            $invalidProperties[] = "invalid value for 'street2', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['zipcode']) && (mb_strlen($this->container['zipcode']) > 1000)) {
            $invalidProperties[] = "invalid value for 'zipcode', the character length must be smaller than or equal to 1000.";
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
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        if ((mb_strlen($company) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $company when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets company2
     *
     * @return string|null
     */
    public function getCompany2()
    {
        return $this->container['company2'];
    }

    /**
     * Sets company2
     *
     * @param string|null $company2 company2
     *
     * @return self
     */
    public function setCompany2($company2)
    {
        if (is_null($company2)) {
            throw new \InvalidArgumentException('non-nullable company2 cannot be null');
        }
        if ((mb_strlen($company2) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $company2 when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['company2'] = $company2;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return bool|null
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param bool|null $delivery_address delivery_address
     *
     * @return self
     */
    public function setDeliveryAddress($delivery_address)
    {
        if (is_null($delivery_address)) {
            throw new \InvalidArgumentException('non-nullable delivery_address cannot be null');
        }
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        if ((mb_strlen($first_name) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets global_location_number
     *
     * @return string|null
     */
    public function getGlobalLocationNumber()
    {
        return $this->container['global_location_number'];
    }

    /**
     * Sets global_location_number
     *
     * @param string|null $global_location_number global_location_number
     *
     * @return self
     */
    public function setGlobalLocationNumber($global_location_number)
    {
        if (is_null($global_location_number)) {
            throw new \InvalidArgumentException('non-nullable global_location_number cannot be null');
        }
        if ((mb_strlen($global_location_number) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $global_location_number when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['global_location_number'] = $global_location_number;

        return $this;
    }

    /**
     * Gets invoice_address
     *
     * @return bool|null
     */
    public function getInvoiceAddress()
    {
        return $this->container['invoice_address'];
    }

    /**
     * Sets invoice_address
     *
     * @param bool|null $invoice_address invoice_address
     *
     * @return self
     */
    public function setInvoiceAddress($invoice_address)
    {
        if (is_null($invoice_address)) {
            throw new \InvalidArgumentException('non-nullable invoice_address cannot be null');
        }
        $this->container['invoice_address'] = $invoice_address;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        if ((mb_strlen($last_name) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        if ((mb_strlen($phone_number) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets post_office_box_city
     *
     * @return string|null
     */
    public function getPostOfficeBoxCity()
    {
        return $this->container['post_office_box_city'];
    }

    /**
     * Sets post_office_box_city
     *
     * @param string|null $post_office_box_city post_office_box_city
     *
     * @return self
     */
    public function setPostOfficeBoxCity($post_office_box_city)
    {
        if (is_null($post_office_box_city)) {
            throw new \InvalidArgumentException('non-nullable post_office_box_city cannot be null');
        }
        if ((mb_strlen($post_office_box_city) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $post_office_box_city when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['post_office_box_city'] = $post_office_box_city;

        return $this;
    }

    /**
     * Gets post_office_box_number
     *
     * @return string|null
     */
    public function getPostOfficeBoxNumber()
    {
        return $this->container['post_office_box_number'];
    }

    /**
     * Sets post_office_box_number
     *
     * @param string|null $post_office_box_number post_office_box_number
     *
     * @return self
     */
    public function setPostOfficeBoxNumber($post_office_box_number)
    {
        if (is_null($post_office_box_number)) {
            throw new \InvalidArgumentException('non-nullable post_office_box_number cannot be null');
        }
        if ((mb_strlen($post_office_box_number) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $post_office_box_number when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['post_office_box_number'] = $post_office_box_number;

        return $this;
    }

    /**
     * Gets post_office_box_zip_code
     *
     * @return string|null
     */
    public function getPostOfficeBoxZipCode()
    {
        return $this->container['post_office_box_zip_code'];
    }

    /**
     * Sets post_office_box_zip_code
     *
     * @param string|null $post_office_box_zip_code post_office_box_zip_code
     *
     * @return self
     */
    public function setPostOfficeBoxZipCode($post_office_box_zip_code)
    {
        if (is_null($post_office_box_zip_code)) {
            throw new \InvalidArgumentException('non-nullable post_office_box_zip_code cannot be null');
        }
        if ((mb_strlen($post_office_box_zip_code) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $post_office_box_zip_code when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['post_office_box_zip_code'] = $post_office_box_zip_code;

        return $this;
    }

    /**
     * Gets prime_address
     *
     * @return bool|null
     */
    public function getPrimeAddress()
    {
        return $this->container['prime_address'];
    }

    /**
     * Sets prime_address
     *
     * @param bool|null $prime_address prime_address
     *
     * @return self
     */
    public function setPrimeAddress($prime_address)
    {
        if (is_null($prime_address)) {
            throw new \InvalidArgumentException('non-nullable prime_address cannot be null');
        }
        $this->container['prime_address'] = $prime_address;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return \kruegge82\weclapp\Model\Salutation|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param \kruegge82\weclapp\Model\Salutation|null $salutation salutation
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        if (is_null($salutation)) {
            throw new \InvalidArgumentException('non-nullable salutation cannot be null');
        }
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        if ((mb_strlen($state) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $state when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets street1
     *
     * @return string|null
     */
    public function getStreet1()
    {
        return $this->container['street1'];
    }

    /**
     * Sets street1
     *
     * @param string|null $street1 street1
     *
     * @return self
     */
    public function setStreet1($street1)
    {
        if (is_null($street1)) {
            throw new \InvalidArgumentException('non-nullable street1 cannot be null');
        }
        if ((mb_strlen($street1) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $street1 when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['street1'] = $street1;

        return $this;
    }

    /**
     * Gets street2
     *
     * @return string|null
     */
    public function getStreet2()
    {
        return $this->container['street2'];
    }

    /**
     * Sets street2
     *
     * @param string|null $street2 street2
     *
     * @return self
     */
    public function setStreet2($street2)
    {
        if (is_null($street2)) {
            throw new \InvalidArgumentException('non-nullable street2 cannot be null');
        }
        if ((mb_strlen($street2) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $street2 when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['street2'] = $street2;

        return $this;
    }

    /**
     * Gets title_id
     *
     * @return string|null
     */
    public function getTitleId()
    {
        return $this->container['title_id'];
    }

    /**
     * Sets title_id
     *
     * @param string|null $title_id title_id
     *
     * @return self
     */
    public function setTitleId($title_id)
    {
        if (is_null($title_id)) {
            throw new \InvalidArgumentException('non-nullable title_id cannot be null');
        }
        $this->container['title_id'] = $title_id;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string|null
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string|null $zipcode zipcode
     *
     * @return self
     */
    public function setZipcode($zipcode)
    {
        if (is_null($zipcode)) {
            throw new \InvalidArgumentException('non-nullable zipcode cannot be null');
        }
        if ((mb_strlen($zipcode) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $zipcode when calling Address., must be smaller than or equal to 1000.');
        }

        $this->container['zipcode'] = $zipcode;

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


