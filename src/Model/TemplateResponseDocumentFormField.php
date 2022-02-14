<?php
/**
 * TemplateResponseDocumentFormField
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
 * TemplateResponseDocumentFormField Class Doc Comment
 *
 * @category Class
 * @description An array of Form Field objects containing the name and type of each named textbox and checkmark field.
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 * @internal This class should not be instantiated directly
 */
class TemplateResponseDocumentFormField implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TemplateResponseDocumentFormField';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'api_id' => 'string',
        'name' => 'string',
        'type' => 'string',
        'x' => 'int',
        'y' => 'int',
        'width' => 'int',
        'height' => 'int',
        'required' => 'bool',
        'group' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'api_id' => null,
        'name' => null,
        'type' => null,
        'x' => null,
        'y' => null,
        'width' => null,
        'height' => null,
        'required' => null,
        'group' => null,
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
        'api_id' => 'api_id',
        'name' => 'name',
        'type' => 'type',
        'x' => 'x',
        'y' => 'y',
        'width' => 'width',
        'height' => 'height',
        'required' => 'required',
        'group' => 'group',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_id' => 'setApiId',
        'name' => 'setName',
        'type' => 'setType',
        'x' => 'setX',
        'y' => 'setY',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'required' => 'setRequired',
        'group' => 'setGroup',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_id' => 'getApiId',
        'name' => 'getName',
        'type' => 'getType',
        'x' => 'getX',
        'y' => 'getY',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'required' => 'getRequired',
        'group' => 'getGroup',
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

    public const TYPE_CHECKBOX = 'checkbox';
    public const TYPE_CHECKBOX_MERGE = 'checkbox-merge';
    public const TYPE_DATE_SIGNED = 'date_signed';
    public const TYPE_DROPDOWN = 'dropdown';
    public const TYPE_HYPERLINK = 'hyperlink';
    public const TYPE_INITIALS = 'initials';
    public const TYPE_SIGNATURE = 'signature';
    public const TYPE_RADIO = 'radio';
    public const TYPE_TEXT = 'text';
    public const TYPE_TEXT_MERGE = 'text-merge';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CHECKBOX,
            self::TYPE_CHECKBOX_MERGE,
            self::TYPE_DATE_SIGNED,
            self::TYPE_DROPDOWN,
            self::TYPE_HYPERLINK,
            self::TYPE_INITIALS,
            self::TYPE_SIGNATURE,
            self::TYPE_RADIO,
            self::TYPE_TEXT,
            self::TYPE_TEXT_MERGE,
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
        $this->container['api_id'] = $data['api_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['x'] = $data['x'] ?? null;
        $this->container['y'] = $data['y'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['required'] = $data['required'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
    }

    public static function fromArray(array $data): TemplateResponseDocumentFormField
    {
        /** @var TemplateResponseDocumentFormField $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            TemplateResponseDocumentFormField::class,
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets api_id
     *
     * @return string|null
     */
    public function getApiId()
    {
        return $this->container['api_id'];
    }

    /**
     * Sets api_id
     *
     * @param string|null $api_id a unique id for the form field
     *
     * @return self
     */
    public function setApiId(?string $api_id)
    {
        $this->container['api_id'] = $api_id;

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
     * @param string|null $name the name of the form field
     *
     * @return self
     */
    public function setName(?string $name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of this form field. See [field types](https://app.hellosign.com/api/reference#FieldTypes).
     *
     * @return self
     */
    public function setType(?string $type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets x
     *
     * @return int|null
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param int|null $x the horizontal offset in pixels for this form field
     *
     * @return self
     */
    public function setX(?int $x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets y
     *
     * @return int|null
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param int|null $y the vertical offset in pixels for this form field
     *
     * @return self
     */
    public function setY(?int $y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width the width in pixels of this form field
     *
     * @return self
     */
    public function setWidth(?int $width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height the height in pixels of this form field
     *
     * @return self
     */
    public function setHeight(?int $height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required boolean showing whether or not this field is required
     *
     * @return self
     */
    public function setRequired(?bool $required)
    {
        $this->container['required'] = $required;

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
     * @param string|null $group The name of the group this field is in. If this field is not a group, this defaults to `null`.
     *
     * @return self
     */
    public function setGroup(?string $group)
    {
        $this->container['group'] = $group;

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
