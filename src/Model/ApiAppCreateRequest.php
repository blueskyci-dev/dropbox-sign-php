<?php
/**
 * ApiAppCreateRequest
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
use SplFileObject;

/**
 * ApiAppCreateRequest Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ApiAppCreateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ApiAppCreateRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'domains' => 'string[]',
        'name' => 'string',
        'callback_url' => 'string',
        'custom_logo_file' => '\SplFileObject',
        'oauth' => '\HelloSignSDK\Model\SubOAuth',
        'options' => '\HelloSignSDK\Model\SubOptions',
        'white_labeling_options' => '\HelloSignSDK\Model\SubWhiteLabelingOptions',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'domains' => null,
        'name' => null,
        'callback_url' => null,
        'custom_logo_file' => 'binary',
        'oauth' => null,
        'options' => null,
        'white_labeling_options' => null,
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
        'domains' => 'domains',
        'name' => 'name',
        'callback_url' => 'callback_url',
        'custom_logo_file' => 'custom_logo_file',
        'oauth' => 'oauth',
        'options' => 'options',
        'white_labeling_options' => 'white_labeling_options',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domains' => 'setDomains',
        'name' => 'setName',
        'callback_url' => 'setCallbackUrl',
        'custom_logo_file' => 'setCustomLogoFile',
        'oauth' => 'setOauth',
        'options' => 'setOptions',
        'white_labeling_options' => 'setWhiteLabelingOptions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domains' => 'getDomains',
        'name' => 'getName',
        'callback_url' => 'getCallbackUrl',
        'custom_logo_file' => 'getCustomLogoFile',
        'oauth' => 'getOauth',
        'options' => 'getOptions',
        'white_labeling_options' => 'getWhiteLabelingOptions',
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
        $this->container['domains'] = $data['domains'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['callback_url'] = $data['callback_url'] ?? null;
        $this->container['custom_logo_file'] = $data['custom_logo_file'] ?? null;
        $this->container['oauth'] = $data['oauth'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['white_labeling_options'] = $data['white_labeling_options'] ?? null;
    }

    public static function fromArray(array $data): ApiAppCreateRequest
    {
        /** @var ApiAppCreateRequest $obj */
        $obj = ObjectSerializer::deserialize(
            ObjectSerializer::instantiateFiles(static::class, $data),
            ApiAppCreateRequest::class,
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

        if ($this->container['domains'] === null) {
            $invalidProperties[] = "'domains' can't be null";
        }
        if ((count($this->container['domains']) > 2)) {
            $invalidProperties[] = "invalid value for 'domains', number of items must be less than or equal to 2.";
        }

        if ((count($this->container['domains']) < 1)) {
            $invalidProperties[] = "invalid value for 'domains', number of items must be greater than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets domains
     *
     * @return string[]
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     *
     * @param string[] $domains the domain names the ApiApp will be associated with
     *
     * @return self
     */
    public function setDomains(array $domains)
    {
        if ((count($domains) > 2)) {
            throw new InvalidArgumentException('invalid value for $domains when calling ApiAppCreateRequest., number of items must be less than or equal to 2.');
        }
        if ((count($domains) < 1)) {
            throw new InvalidArgumentException('invalid length for $domains when calling ApiAppCreateRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['domains'] = $domains;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name the name you want to assign to the ApiApp
     *
     * @return self
     */
    public function setName(string $name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string|null $callback_url the URL at which the ApiApp should receive event callbacks
     *
     * @return self
     */
    public function setCallbackUrl(?string $callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets custom_logo_file
     *
     * @return SplFileObject|null
     */
    public function getCustomLogoFile()
    {
        return $this->container['custom_logo_file'];
    }

    /**
     * Sets custom_logo_file
     *
     * @param SplFileObject|null $custom_logo_file An image file to use as a custom logo in embedded contexts. (Only applies to some API plans)
     *
     * @return self
     */
    public function setCustomLogoFile(?SplFileObject $custom_logo_file)
    {
        $this->container['custom_logo_file'] = $custom_logo_file;

        return $this;
    }

    /**
     * Gets oauth
     *
     * @return SubOAuth|null
     */
    public function getOauth()
    {
        return $this->container['oauth'];
    }

    /**
     * Sets oauth
     *
     * @param SubOAuth|null $oauth oauth
     *
     * @return self
     */
    public function setOauth(?SubOAuth $oauth)
    {
        $this->container['oauth'] = $oauth;

        return $this;
    }

    /**
     * Gets options
     *
     * @return SubOptions|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param SubOptions|null $options options
     *
     * @return self
     */
    public function setOptions(?SubOptions $options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets white_labeling_options
     *
     * @return SubWhiteLabelingOptions|null
     */
    public function getWhiteLabelingOptions()
    {
        return $this->container['white_labeling_options'];
    }

    /**
     * Sets white_labeling_options
     *
     * @param SubWhiteLabelingOptions|null $white_labeling_options white_labeling_options
     *
     * @return self
     */
    public function setWhiteLabelingOptions(?SubWhiteLabelingOptions $white_labeling_options)
    {
        $this->container['white_labeling_options'] = $white_labeling_options;

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
