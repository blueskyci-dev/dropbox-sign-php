<?php
/**
 * EventCallbackAccountRequestPayload
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
use JsonSerializable;

/**
 * EventCallbackAccountRequestPayload Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EventCallbackAccountRequestPayload implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'EventCallbackAccountRequestPayload';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'event' => '\HelloSignSDK\Model\EventCallbackRequestEvent',
        'account_guid' => 'string',
        'client_id' => 'string',
        'signature_request' => '\HelloSignSDK\Model\SignatureRequestResponse',
        'template' => '\HelloSignSDK\Model\TemplateResponse',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'event' => null,
        'account_guid' => null,
        'client_id' => null,
        'signature_request' => null,
        'template' => null,
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
        'event' => 'event',
        'account_guid' => 'account_guid',
        'client_id' => 'client_id',
        'signature_request' => 'signature_request',
        'template' => 'template',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event' => 'setEvent',
        'account_guid' => 'setAccountGuid',
        'client_id' => 'setClientId',
        'signature_request' => 'setSignatureRequest',
        'template' => 'setTemplate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event' => 'getEvent',
        'account_guid' => 'getAccountGuid',
        'client_id' => 'getClientId',
        'signature_request' => 'getSignatureRequest',
        'template' => 'getTemplate',
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
        $this->container['event'] = $data['event'] ?? null;
        $this->container['account_guid'] = $data['account_guid'] ?? null;
        $this->container['client_id'] = $data['client_id'] ?? null;
        $this->container['signature_request'] = $data['signature_request'] ?? null;
        $this->container['template'] = $data['template'] ?? null;
    }

    public static function fromArray(array $data): EventCallbackAccountRequestPayload
    {
        /** @var EventCallbackAccountRequestPayload $obj */
        $obj = ObjectSerializer::deserialize(
            ObjectSerializer::instantiateFiles(static::class, $data),
            EventCallbackAccountRequestPayload::class,
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

        if ($this->container['event'] === null) {
            $invalidProperties[] = "'event' can't be null";
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
     * Gets event
     *
     * @return EventCallbackRequestEvent
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param EventCallbackRequestEvent $event event
     *
     * @return self
     */
    public function setEvent(EventCallbackRequestEvent $event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets account_guid
     *
     * @return string|null
     * @deprecated
     */
    public function getAccountGuid()
    {
        return $this->container['account_guid'];
    }

    /**
     * Sets account_guid
     *
     * @param string|null $account_guid account_guid
     *
     * @return self
     * @deprecated
     */
    public function setAccountGuid(?string $account_guid)
    {
        $this->container['account_guid'] = $account_guid;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string|null
     * @deprecated
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string|null $client_id client_id
     *
     * @return self
     * @deprecated
     */
    public function setClientId(?string $client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets signature_request
     *
     * @return SignatureRequestResponse|null
     */
    public function getSignatureRequest()
    {
        return $this->container['signature_request'];
    }

    /**
     * Sets signature_request
     *
     * @param SignatureRequestResponse|null $signature_request signature_request
     *
     * @return self
     */
    public function setSignatureRequest(?SignatureRequestResponse $signature_request)
    {
        $this->container['signature_request'] = $signature_request;

        return $this;
    }

    /**
     * Gets template
     *
     * @return TemplateResponse|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param TemplateResponse|null $template template
     *
     * @return self
     */
    public function setTemplate(?TemplateResponse $template)
    {
        $this->container['template'] = $template;

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
