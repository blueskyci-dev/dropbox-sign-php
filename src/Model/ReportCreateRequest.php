<?php
/**
 * ReportCreateRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */

/**
 * Dropbox Sign API
 *
 * Dropbox Sign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dropbox\Sign\Model;

use ArrayAccess;
use Dropbox\Sign\ObjectSerializer;
use InvalidArgumentException;
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * ReportCreateRequest Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReportCreateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ReportCreateRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'end_date' => 'string',
        'report_type' => 'string[]',
        'start_date' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'end_date' => null,
        'report_type' => null,
        'start_date' => null,
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'end_date' => 'end_date',
        'report_type' => 'report_type',
        'start_date' => 'start_date',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_date' => 'setEndDate',
        'report_type' => 'setReportType',
        'start_date' => 'setStartDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_date' => 'getEndDate',
        'report_type' => 'getReportType',
        'start_date' => 'getStartDate',
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

    public const REPORT_TYPE_USER_ACTIVITY = 'user_activity';
    public const REPORT_TYPE_DOCUMENT_STATUS = 'document_status';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReportTypeAllowableValues()
    {
        return [
            self::REPORT_TYPE_USER_ACTIVITY,
            self::REPORT_TYPE_DOCUMENT_STATUS,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param array|null $data Associated array of property values
     *                         initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
    }

    /** @deprecated use ::init() */
    public static function fromArray(array $data): ReportCreateRequest
    {
        return self::init($data);
    }

    /** Attempt to instantiate and hydrate a new instance of this class */
    public static function init(array $data): ReportCreateRequest
    {
        /** @var ReportCreateRequest $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            ReportCreateRequest::class,
        );

        return $obj;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ($this->container['report_type'] === null) {
            $invalidProperties[] = "'report_type' can't be null";
        }
        if ((count($this->container['report_type']) > 2)) {
            $invalidProperties[] = "invalid value for 'report_type', number of items must be less than or equal to 2.";
        }

        if ((count($this->container['report_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'report_type', number of items must be greater than or equal to 1.";
        }

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
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
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date the (inclusive) end date for the report data in `MM/DD/YYYY` format
     *
     * @return self
     */
    public function setEndDate(string $end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets report_type
     *
     * @return string[]
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string[] $report_type The type(s) of the report you are requesting. Allowed values are `user_activity` and `document_status`. User activity reports contain list of all users and their activity during the specified date range. Document status report contain a list of signature requests created in the specified time range (and their status).
     *
     * @return self
     */
    public function setReportType(array $report_type)
    {
        $allowedValues = $this->getReportTypeAllowableValues();
        if (array_diff($report_type, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'report_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((count($report_type) > 2)) {
            throw new InvalidArgumentException('invalid value for $report_type when calling ReportCreateRequest., number of items must be less than or equal to 2.');
        }
        if ((count($report_type) < 1)) {
            throw new InvalidArgumentException('invalid length for $report_type when calling ReportCreateRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date the (inclusive) start date for the report data in `MM/DD/YYYY` format
     *
     * @return self
     */
    public function setStartDate(string $start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param mixed $offset Offset
     *
     * @return bool
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param mixed $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param mixed $offset Offset
     * @param mixed $value Value to be set
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
     * @param mixed $offset Offset
     *
     * @return void
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return scalar|object|array|null returns data which can be serialized by json_encode(), which is a value
     *                                  of any type other than a resource
     */
    #[ReturnTypeWillChange]
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
            JSON_UNESCAPED_SLASHES
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
