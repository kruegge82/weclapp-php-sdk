<?php
/**
 * TicketGet200ResponseAdditionalProperties
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
 * TicketGet200ResponseAdditionalProperties Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TicketGet200ResponseAdditionalProperties implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_ticket_get_200_response_additionalProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assignment_time' => '\kruegge82\weclapp\Model\Duration[]',
        'billable_time' => '\kruegge82\weclapp\Model\Duration[]',
        'cost_of_services' => '\kruegge82\weclapp\Model\Amount[]',
        'invoiceable_time' => '\kruegge82\weclapp\Model\Duration[]',
        'process_time' => '\kruegge82\weclapp\Model\Duration[]',
        'resolution_time' => '\kruegge82\weclapp\Model\Duration[]',
        'response_time' => '\kruegge82\weclapp\Model\Duration[]',
        'tasks_completed' => 'bool[]',
        'tasks_completed_percentage' => 'float[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assignment_time' => null,
        'billable_time' => null,
        'cost_of_services' => null,
        'invoiceable_time' => null,
        'process_time' => null,
        'resolution_time' => null,
        'response_time' => null,
        'tasks_completed' => null,
        'tasks_completed_percentage' => 'decimal'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'assignment_time' => false,
        'billable_time' => false,
        'cost_of_services' => false,
        'invoiceable_time' => false,
        'process_time' => false,
        'resolution_time' => false,
        'response_time' => false,
        'tasks_completed' => false,
        'tasks_completed_percentage' => false
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
        'assignment_time' => 'assignmentTime',
        'billable_time' => 'billableTime',
        'cost_of_services' => 'costOfServices',
        'invoiceable_time' => 'invoiceableTime',
        'process_time' => 'processTime',
        'resolution_time' => 'resolutionTime',
        'response_time' => 'responseTime',
        'tasks_completed' => 'tasksCompleted',
        'tasks_completed_percentage' => 'tasksCompletedPercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignment_time' => 'setAssignmentTime',
        'billable_time' => 'setBillableTime',
        'cost_of_services' => 'setCostOfServices',
        'invoiceable_time' => 'setInvoiceableTime',
        'process_time' => 'setProcessTime',
        'resolution_time' => 'setResolutionTime',
        'response_time' => 'setResponseTime',
        'tasks_completed' => 'setTasksCompleted',
        'tasks_completed_percentage' => 'setTasksCompletedPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignment_time' => 'getAssignmentTime',
        'billable_time' => 'getBillableTime',
        'cost_of_services' => 'getCostOfServices',
        'invoiceable_time' => 'getInvoiceableTime',
        'process_time' => 'getProcessTime',
        'resolution_time' => 'getResolutionTime',
        'response_time' => 'getResponseTime',
        'tasks_completed' => 'getTasksCompleted',
        'tasks_completed_percentage' => 'getTasksCompletedPercentage'
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
        $this->setIfExists('assignment_time', $data ?? [], null);
        $this->setIfExists('billable_time', $data ?? [], null);
        $this->setIfExists('cost_of_services', $data ?? [], null);
        $this->setIfExists('invoiceable_time', $data ?? [], null);
        $this->setIfExists('process_time', $data ?? [], null);
        $this->setIfExists('resolution_time', $data ?? [], null);
        $this->setIfExists('response_time', $data ?? [], null);
        $this->setIfExists('tasks_completed', $data ?? [], null);
        $this->setIfExists('tasks_completed_percentage', $data ?? [], null);
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
     * Gets assignment_time
     *
     * @return \kruegge82\weclapp\Model\Duration[]|null
     */
    public function getAssignmentTime()
    {
        return $this->container['assignment_time'];
    }

    /**
     * Sets assignment_time
     *
     * @param \kruegge82\weclapp\Model\Duration[]|null $assignment_time assignment_time
     *
     * @return self
     */
    public function setAssignmentTime($assignment_time)
    {
        if (is_null($assignment_time)) {
            throw new \InvalidArgumentException('non-nullable assignment_time cannot be null');
        }
        $this->container['assignment_time'] = $assignment_time;

        return $this;
    }

    /**
     * Gets billable_time
     *
     * @return \kruegge82\weclapp\Model\Duration[]|null
     */
    public function getBillableTime()
    {
        return $this->container['billable_time'];
    }

    /**
     * Sets billable_time
     *
     * @param \kruegge82\weclapp\Model\Duration[]|null $billable_time billable_time
     *
     * @return self
     */
    public function setBillableTime($billable_time)
    {
        if (is_null($billable_time)) {
            throw new \InvalidArgumentException('non-nullable billable_time cannot be null');
        }
        $this->container['billable_time'] = $billable_time;

        return $this;
    }

    /**
     * Gets cost_of_services
     *
     * @return \kruegge82\weclapp\Model\Amount[]|null
     */
    public function getCostOfServices()
    {
        return $this->container['cost_of_services'];
    }

    /**
     * Sets cost_of_services
     *
     * @param \kruegge82\weclapp\Model\Amount[]|null $cost_of_services cost_of_services
     *
     * @return self
     */
    public function setCostOfServices($cost_of_services)
    {
        if (is_null($cost_of_services)) {
            throw new \InvalidArgumentException('non-nullable cost_of_services cannot be null');
        }
        $this->container['cost_of_services'] = $cost_of_services;

        return $this;
    }

    /**
     * Gets invoiceable_time
     *
     * @return \kruegge82\weclapp\Model\Duration[]|null
     */
    public function getInvoiceableTime()
    {
        return $this->container['invoiceable_time'];
    }

    /**
     * Sets invoiceable_time
     *
     * @param \kruegge82\weclapp\Model\Duration[]|null $invoiceable_time invoiceable_time
     *
     * @return self
     */
    public function setInvoiceableTime($invoiceable_time)
    {
        if (is_null($invoiceable_time)) {
            throw new \InvalidArgumentException('non-nullable invoiceable_time cannot be null');
        }
        $this->container['invoiceable_time'] = $invoiceable_time;

        return $this;
    }

    /**
     * Gets process_time
     *
     * @return \kruegge82\weclapp\Model\Duration[]|null
     */
    public function getProcessTime()
    {
        return $this->container['process_time'];
    }

    /**
     * Sets process_time
     *
     * @param \kruegge82\weclapp\Model\Duration[]|null $process_time process_time
     *
     * @return self
     */
    public function setProcessTime($process_time)
    {
        if (is_null($process_time)) {
            throw new \InvalidArgumentException('non-nullable process_time cannot be null');
        }
        $this->container['process_time'] = $process_time;

        return $this;
    }

    /**
     * Gets resolution_time
     *
     * @return \kruegge82\weclapp\Model\Duration[]|null
     */
    public function getResolutionTime()
    {
        return $this->container['resolution_time'];
    }

    /**
     * Sets resolution_time
     *
     * @param \kruegge82\weclapp\Model\Duration[]|null $resolution_time resolution_time
     *
     * @return self
     */
    public function setResolutionTime($resolution_time)
    {
        if (is_null($resolution_time)) {
            throw new \InvalidArgumentException('non-nullable resolution_time cannot be null');
        }
        $this->container['resolution_time'] = $resolution_time;

        return $this;
    }

    /**
     * Gets response_time
     *
     * @return \kruegge82\weclapp\Model\Duration[]|null
     */
    public function getResponseTime()
    {
        return $this->container['response_time'];
    }

    /**
     * Sets response_time
     *
     * @param \kruegge82\weclapp\Model\Duration[]|null $response_time response_time
     *
     * @return self
     */
    public function setResponseTime($response_time)
    {
        if (is_null($response_time)) {
            throw new \InvalidArgumentException('non-nullable response_time cannot be null');
        }
        $this->container['response_time'] = $response_time;

        return $this;
    }

    /**
     * Gets tasks_completed
     *
     * @return bool[]|null
     */
    public function getTasksCompleted()
    {
        return $this->container['tasks_completed'];
    }

    /**
     * Sets tasks_completed
     *
     * @param bool[]|null $tasks_completed tasks_completed
     *
     * @return self
     */
    public function setTasksCompleted($tasks_completed)
    {
        if (is_null($tasks_completed)) {
            throw new \InvalidArgumentException('non-nullable tasks_completed cannot be null');
        }
        $this->container['tasks_completed'] = $tasks_completed;

        return $this;
    }

    /**
     * Gets tasks_completed_percentage
     *
     * @return float[]|null
     */
    public function getTasksCompletedPercentage()
    {
        return $this->container['tasks_completed_percentage'];
    }

    /**
     * Sets tasks_completed_percentage
     *
     * @param float[]|null $tasks_completed_percentage tasks_completed_percentage
     *
     * @return self
     */
    public function setTasksCompletedPercentage($tasks_completed_percentage)
    {
        if (is_null($tasks_completed_percentage)) {
            throw new \InvalidArgumentException('non-nullable tasks_completed_percentage cannot be null');
        }
        $this->container['tasks_completed_percentage'] = $tasks_completed_percentage;

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


