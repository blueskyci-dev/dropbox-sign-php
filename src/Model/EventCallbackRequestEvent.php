<?php
/**
 * EventCallbackRequestEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */

/**
 * HelloSign API
 *
 * HelloSign v3 API
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

namespace HelloSignSDK\Model;

use ArrayAccess;
use HelloSignSDK\ObjectSerializer;
use InvalidArgumentException;
use JsonSerializable;

/**
 * EventCallbackRequestEvent Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EventCallbackRequestEvent implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'EventCallbackRequestEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'event_time' => 'string',
        'event_type' => 'string',
        'event_hash' => 'string',
        'event_metadata' => '\HelloSignSDK\Model\EventCallbackRequestEventMetadata',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'event_time' => null,
        'event_type' => null,
        'event_hash' => null,
        'event_metadata' => null,
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
        'event_time' => 'event_time',
        'event_type' => 'event_type',
        'event_hash' => 'event_hash',
        'event_metadata' => 'event_metadata',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_time' => 'setEventTime',
        'event_type' => 'setEventType',
        'event_hash' => 'setEventHash',
        'event_metadata' => 'setEventMetadata',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_time' => 'getEventTime',
        'event_type' => 'getEventType',
        'event_hash' => 'getEventHash',
        'event_metadata' => 'getEventMetadata',
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

    public const EVENT_TYPE_ACCOUNT_CONFIRMED = 'account_confirmed';
    public const EVENT_TYPE_UNKNOWN_ERROR = 'unknown_error';
    public const EVENT_TYPE_FILE_ERROR = 'file_error';
    public const EVENT_TYPE_SIGN_URL_INVALID = 'sign_url_invalid';
    public const EVENT_TYPE_SIGNATURE_REQUEST_VIEWED = 'signature_request_viewed';
    public const EVENT_TYPE_SIGNATURE_REQUEST_SIGNED = 'signature_request_signed';
    public const EVENT_TYPE_SIGNATURE_REQUEST_SENT = 'signature_request_sent';
    public const EVENT_TYPE_SIGNATURE_REQUEST_ALL_SIGNED = 'signature_request_all_signed';
    public const EVENT_TYPE_SIGNATURE_REQUEST_EMAIL_BOUNCE = 'signature_request_email_bounce';
    public const EVENT_TYPE_SIGNATURE_REQUEST_REMIND = 'signature_request_remind';
    public const EVENT_TYPE_SIGNATURE_REQUEST_INCOMPLETE_QES = 'signature_request_incomplete_qes';
    public const EVENT_TYPE_SIGNATURE_REQUEST_DESTROYED = 'signature_request_destroyed';
    public const EVENT_TYPE_SIGNATURE_REQUEST_CANCELED = 'signature_request_canceled';
    public const EVENT_TYPE_SIGNATURE_REQUEST_DOWNLOADABLE = 'signature_request_downloadable';
    public const EVENT_TYPE_SIGNATURE_REQUEST_DECLINED = 'signature_request_declined';
    public const EVENT_TYPE_SIGNATURE_REQUEST_REASSIGNED = 'signature_request_reassigned';
    public const EVENT_TYPE_SIGNATURE_REQUEST_INVALID = 'signature_request_invalid';
    public const EVENT_TYPE_SIGNATURE_REQUEST_PREPARED = 'signature_request_prepared';
    public const EVENT_TYPE_TEMPLATE_CREATED = 'template_created';
    public const EVENT_TYPE_TEMPLATE_ERROR = 'template_error';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_ACCOUNT_CONFIRMED,
            self::EVENT_TYPE_UNKNOWN_ERROR,
            self::EVENT_TYPE_FILE_ERROR,
            self::EVENT_TYPE_SIGN_URL_INVALID,
            self::EVENT_TYPE_SIGNATURE_REQUEST_VIEWED,
            self::EVENT_TYPE_SIGNATURE_REQUEST_SIGNED,
            self::EVENT_TYPE_SIGNATURE_REQUEST_SENT,
            self::EVENT_TYPE_SIGNATURE_REQUEST_ALL_SIGNED,
            self::EVENT_TYPE_SIGNATURE_REQUEST_EMAIL_BOUNCE,
            self::EVENT_TYPE_SIGNATURE_REQUEST_REMIND,
            self::EVENT_TYPE_SIGNATURE_REQUEST_INCOMPLETE_QES,
            self::EVENT_TYPE_SIGNATURE_REQUEST_DESTROYED,
            self::EVENT_TYPE_SIGNATURE_REQUEST_CANCELED,
            self::EVENT_TYPE_SIGNATURE_REQUEST_DOWNLOADABLE,
            self::EVENT_TYPE_SIGNATURE_REQUEST_DECLINED,
            self::EVENT_TYPE_SIGNATURE_REQUEST_REASSIGNED,
            self::EVENT_TYPE_SIGNATURE_REQUEST_INVALID,
            self::EVENT_TYPE_SIGNATURE_REQUEST_PREPARED,
            self::EVENT_TYPE_TEMPLATE_CREATED,
            self::EVENT_TYPE_TEMPLATE_ERROR,
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
        $this->container['event_time'] = $data['event_time'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['event_hash'] = $data['event_hash'] ?? null;
        $this->container['event_metadata'] = $data['event_metadata'] ?? null;
    }

    public static function fromArray(array $data): EventCallbackRequestEvent
    {
        /** @var EventCallbackRequestEvent $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            EventCallbackRequestEvent::class,
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

        if ($this->container['event_time'] === null) {
            $invalidProperties[] = "'event_time' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array($this->container['event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_type', must be one of '%s'",
                $this->container['event_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['event_hash'] === null) {
            $invalidProperties[] = "'event_hash' can't be null";
        }
        if ($this->container['event_metadata'] === null) {
            $invalidProperties[] = "'event_metadata' can't be null";
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
     * Gets event_time
     *
     * @return string
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time
     *
     * @param string $event_time event_time
     *
     * @return self
     */
    public function setEventTime(string $event_time)
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type event_type
     *
     * @return self
     */
    public function setEventType(string $event_type)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!in_array($event_type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_type', must be one of '%s'",
                    $event_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets event_hash
     *
     * @return string
     */
    public function getEventHash()
    {
        return $this->container['event_hash'];
    }

    /**
     * Sets event_hash
     *
     * @param string $event_hash event_hash
     *
     * @return self
     */
    public function setEventHash(string $event_hash)
    {
        $this->container['event_hash'] = $event_hash;

        return $this;
    }

    /**
     * Gets event_metadata
     *
     * @return EventCallbackRequestEventMetadata
     */
    public function getEventMetadata()
    {
        return $this->container['event_metadata'];
    }

    /**
     * Sets event_metadata
     *
     * @param EventCallbackRequestEventMetadata $event_metadata event_metadata
     *
     * @return self
     */
    public function setEventMetadata(EventCallbackRequestEventMetadata $event_metadata)
    {
        $this->container['event_metadata'] = $event_metadata;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param mixed $offset Offset
     *
     * @return bool
     */
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
