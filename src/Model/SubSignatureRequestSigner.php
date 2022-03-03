<?php
/**
 * SubSignatureRequestSigner
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
 * SubSignatureRequestSigner Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubSignatureRequestSigner implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SubSignatureRequestSigner';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'name' => 'string',
        'email_address' => 'string',
        'group' => 'string',
        'order' => 'int',
        'pin' => 'string',
        'sms_phone_number' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'name' => null,
        'email_address' => 'email',
        'group' => null,
        'order' => null,
        'pin' => null,
        'sms_phone_number' => null,
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
        'name' => 'name',
        'email_address' => 'email_address',
        'group' => 'group',
        'order' => 'order',
        'pin' => 'pin',
        'sms_phone_number' => 'sms_phone_number',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'email_address' => 'setEmailAddress',
        'group' => 'setGroup',
        'order' => 'setOrder',
        'pin' => 'setPin',
        'sms_phone_number' => 'setSmsPhoneNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'email_address' => 'getEmailAddress',
        'group' => 'getGroup',
        'order' => 'getOrder',
        'pin' => 'getPin',
        'sms_phone_number' => 'getSmsPhoneNumber',
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['email_address'] = $data['email_address'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['pin'] = $data['pin'] ?? null;
        $this->container['sms_phone_number'] = $data['sms_phone_number'] ?? null;
    }

    public static function fromArray(array $data): SubSignatureRequestSigner
    {
        /** @var SubSignatureRequestSigner $obj */
        $obj = ObjectSerializer::deserialize(
            ObjectSerializer::instantiateFiles(static::class, $data),
            SubSignatureRequestSigner::class,
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['email_address'] === null) {
            $invalidProperties[] = "'email_address' can't be null";
        }
        if (!is_null($this->container['pin']) && (mb_strlen($this->container['pin']) > 12)) {
            $invalidProperties[] = "invalid value for 'pin', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['pin']) && (mb_strlen($this->container['pin']) < 4)) {
            $invalidProperties[] = "invalid value for 'pin', the character length must be bigger than or equal to 4.";
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
     * @param string $name the name of the signer
     *
     * @return self
     */
    public function setName(string $name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address the email address of the signer
     *
     * @return self
     */
    public function setEmailAddress(string $email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group Name of group. Use this value across multiple signers to group them together. Any of the signers is eligible to sign for the entire group.  Grouped signers will not use the `order`, `pin`, or `sms_phone_number` fields.
     *
     * @return self
     */
    public function setGroup(?string $group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order the order the signer is required to sign in
     *
     * @return self
     */
    public function setOrder(?int $order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets pin
     *
     * @return string|null
     */
    public function getPin()
    {
        return $this->container['pin'];
    }

    /**
     * Sets pin
     *
     * @param string|null $pin the 4- to 12-character access code that will secure this signer's signature page
     *
     * @return self
     */
    public function setPin(?string $pin)
    {
        if (!is_null($pin) && (mb_strlen($pin) > 12)) {
            throw new InvalidArgumentException('invalid length for $pin when calling SubSignatureRequestSigner., must be smaller than or equal to 12.');
        }
        if (!is_null($pin) && (mb_strlen($pin) < 4)) {
            throw new InvalidArgumentException('invalid length for $pin when calling SubSignatureRequestSigner., must be bigger than or equal to 4.');
        }

        $this->container['pin'] = $pin;

        return $this;
    }

    /**
     * Gets sms_phone_number
     *
     * @return string|null
     */
    public function getSmsPhoneNumber()
    {
        return $this->container['sms_phone_number'];
    }

    /**
     * Sets sms_phone_number
     *
     * @param string|null $sms_phone_number An E.164 formatted phone number that will receive a code via SMS to access this signer's signature page.  **Note**: Not available in test mode and requires a Platinum plan or higher.
     *
     * @return self
     */
    public function setSmsPhoneNumber(?string $sms_phone_number)
    {
        $this->container['sms_phone_number'] = $sms_phone_number;

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
