<?php
/**
 * ApiAppResponseWhiteLabelingOptions
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
use JsonSerializable;
use ReturnTypeWillChange;

/**
 * ApiAppResponseWhiteLabelingOptions Class Doc Comment
 *
 * @category Class
 * @description An object with options to customize the app&#39;s signer page
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 * @internal This class should not be instantiated directly
 */
class ApiAppResponseWhiteLabelingOptions implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ApiAppResponseWhiteLabelingOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'header_background_color' => 'string',
        'legal_version' => 'string',
        'link_color' => 'string',
        'page_background_color' => 'string',
        'primary_button_color' => 'string',
        'primary_button_color_hover' => 'string',
        'primary_button_text_color' => 'string',
        'primary_button_text_color_hover' => 'string',
        'secondary_button_color' => 'string',
        'secondary_button_color_hover' => 'string',
        'secondary_button_text_color' => 'string',
        'secondary_button_text_color_hover' => 'string',
        'text_color1' => 'string',
        'text_color2' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'header_background_color' => null,
        'legal_version' => null,
        'link_color' => null,
        'page_background_color' => null,
        'primary_button_color' => null,
        'primary_button_color_hover' => null,
        'primary_button_text_color' => null,
        'primary_button_text_color_hover' => null,
        'secondary_button_color' => null,
        'secondary_button_color_hover' => null,
        'secondary_button_text_color' => null,
        'secondary_button_text_color_hover' => null,
        'text_color1' => null,
        'text_color2' => null,
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
        'header_background_color' => 'header_background_color',
        'legal_version' => 'legal_version',
        'link_color' => 'link_color',
        'page_background_color' => 'page_background_color',
        'primary_button_color' => 'primary_button_color',
        'primary_button_color_hover' => 'primary_button_color_hover',
        'primary_button_text_color' => 'primary_button_text_color',
        'primary_button_text_color_hover' => 'primary_button_text_color_hover',
        'secondary_button_color' => 'secondary_button_color',
        'secondary_button_color_hover' => 'secondary_button_color_hover',
        'secondary_button_text_color' => 'secondary_button_text_color',
        'secondary_button_text_color_hover' => 'secondary_button_text_color_hover',
        'text_color1' => 'text_color1',
        'text_color2' => 'text_color2',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'header_background_color' => 'setHeaderBackgroundColor',
        'legal_version' => 'setLegalVersion',
        'link_color' => 'setLinkColor',
        'page_background_color' => 'setPageBackgroundColor',
        'primary_button_color' => 'setPrimaryButtonColor',
        'primary_button_color_hover' => 'setPrimaryButtonColorHover',
        'primary_button_text_color' => 'setPrimaryButtonTextColor',
        'primary_button_text_color_hover' => 'setPrimaryButtonTextColorHover',
        'secondary_button_color' => 'setSecondaryButtonColor',
        'secondary_button_color_hover' => 'setSecondaryButtonColorHover',
        'secondary_button_text_color' => 'setSecondaryButtonTextColor',
        'secondary_button_text_color_hover' => 'setSecondaryButtonTextColorHover',
        'text_color1' => 'setTextColor1',
        'text_color2' => 'setTextColor2',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'header_background_color' => 'getHeaderBackgroundColor',
        'legal_version' => 'getLegalVersion',
        'link_color' => 'getLinkColor',
        'page_background_color' => 'getPageBackgroundColor',
        'primary_button_color' => 'getPrimaryButtonColor',
        'primary_button_color_hover' => 'getPrimaryButtonColorHover',
        'primary_button_text_color' => 'getPrimaryButtonTextColor',
        'primary_button_text_color_hover' => 'getPrimaryButtonTextColorHover',
        'secondary_button_color' => 'getSecondaryButtonColor',
        'secondary_button_color_hover' => 'getSecondaryButtonColorHover',
        'secondary_button_text_color' => 'getSecondaryButtonTextColor',
        'secondary_button_text_color_hover' => 'getSecondaryButtonTextColorHover',
        'text_color1' => 'getTextColor1',
        'text_color2' => 'getTextColor2',
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
        $this->container['header_background_color'] = $data['header_background_color'] ?? null;
        $this->container['legal_version'] = $data['legal_version'] ?? null;
        $this->container['link_color'] = $data['link_color'] ?? null;
        $this->container['page_background_color'] = $data['page_background_color'] ?? null;
        $this->container['primary_button_color'] = $data['primary_button_color'] ?? null;
        $this->container['primary_button_color_hover'] = $data['primary_button_color_hover'] ?? null;
        $this->container['primary_button_text_color'] = $data['primary_button_text_color'] ?? null;
        $this->container['primary_button_text_color_hover'] = $data['primary_button_text_color_hover'] ?? null;
        $this->container['secondary_button_color'] = $data['secondary_button_color'] ?? null;
        $this->container['secondary_button_color_hover'] = $data['secondary_button_color_hover'] ?? null;
        $this->container['secondary_button_text_color'] = $data['secondary_button_text_color'] ?? null;
        $this->container['secondary_button_text_color_hover'] = $data['secondary_button_text_color_hover'] ?? null;
        $this->container['text_color1'] = $data['text_color1'] ?? null;
        $this->container['text_color2'] = $data['text_color2'] ?? null;
    }

    /** @deprecated use ::init() */
    public static function fromArray(array $data): ApiAppResponseWhiteLabelingOptions
    {
        return self::init($data);
    }

    /** Attempt to instantiate and hydrate a new instance of this class */
    public static function init(array $data): ApiAppResponseWhiteLabelingOptions
    {
        /** @var ApiAppResponseWhiteLabelingOptions $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            ApiAppResponseWhiteLabelingOptions::class,
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
     * Gets header_background_color
     *
     * @return string|null
     */
    public function getHeaderBackgroundColor()
    {
        return $this->container['header_background_color'];
    }

    /**
     * Sets header_background_color
     *
     * @param string|null $header_background_color header_background_color
     *
     * @return self
     */
    public function setHeaderBackgroundColor(?string $header_background_color)
    {
        $this->container['header_background_color'] = $header_background_color;

        return $this;
    }

    /**
     * Gets legal_version
     *
     * @return string|null
     */
    public function getLegalVersion()
    {
        return $this->container['legal_version'];
    }

    /**
     * Sets legal_version
     *
     * @param string|null $legal_version legal_version
     *
     * @return self
     */
    public function setLegalVersion(?string $legal_version)
    {
        $this->container['legal_version'] = $legal_version;

        return $this;
    }

    /**
     * Gets link_color
     *
     * @return string|null
     */
    public function getLinkColor()
    {
        return $this->container['link_color'];
    }

    /**
     * Sets link_color
     *
     * @param string|null $link_color link_color
     *
     * @return self
     */
    public function setLinkColor(?string $link_color)
    {
        $this->container['link_color'] = $link_color;

        return $this;
    }

    /**
     * Gets page_background_color
     *
     * @return string|null
     */
    public function getPageBackgroundColor()
    {
        return $this->container['page_background_color'];
    }

    /**
     * Sets page_background_color
     *
     * @param string|null $page_background_color page_background_color
     *
     * @return self
     */
    public function setPageBackgroundColor(?string $page_background_color)
    {
        $this->container['page_background_color'] = $page_background_color;

        return $this;
    }

    /**
     * Gets primary_button_color
     *
     * @return string|null
     */
    public function getPrimaryButtonColor()
    {
        return $this->container['primary_button_color'];
    }

    /**
     * Sets primary_button_color
     *
     * @param string|null $primary_button_color primary_button_color
     *
     * @return self
     */
    public function setPrimaryButtonColor(?string $primary_button_color)
    {
        $this->container['primary_button_color'] = $primary_button_color;

        return $this;
    }

    /**
     * Gets primary_button_color_hover
     *
     * @return string|null
     */
    public function getPrimaryButtonColorHover()
    {
        return $this->container['primary_button_color_hover'];
    }

    /**
     * Sets primary_button_color_hover
     *
     * @param string|null $primary_button_color_hover primary_button_color_hover
     *
     * @return self
     */
    public function setPrimaryButtonColorHover(?string $primary_button_color_hover)
    {
        $this->container['primary_button_color_hover'] = $primary_button_color_hover;

        return $this;
    }

    /**
     * Gets primary_button_text_color
     *
     * @return string|null
     */
    public function getPrimaryButtonTextColor()
    {
        return $this->container['primary_button_text_color'];
    }

    /**
     * Sets primary_button_text_color
     *
     * @param string|null $primary_button_text_color primary_button_text_color
     *
     * @return self
     */
    public function setPrimaryButtonTextColor(?string $primary_button_text_color)
    {
        $this->container['primary_button_text_color'] = $primary_button_text_color;

        return $this;
    }

    /**
     * Gets primary_button_text_color_hover
     *
     * @return string|null
     */
    public function getPrimaryButtonTextColorHover()
    {
        return $this->container['primary_button_text_color_hover'];
    }

    /**
     * Sets primary_button_text_color_hover
     *
     * @param string|null $primary_button_text_color_hover primary_button_text_color_hover
     *
     * @return self
     */
    public function setPrimaryButtonTextColorHover(?string $primary_button_text_color_hover)
    {
        $this->container['primary_button_text_color_hover'] = $primary_button_text_color_hover;

        return $this;
    }

    /**
     * Gets secondary_button_color
     *
     * @return string|null
     */
    public function getSecondaryButtonColor()
    {
        return $this->container['secondary_button_color'];
    }

    /**
     * Sets secondary_button_color
     *
     * @param string|null $secondary_button_color secondary_button_color
     *
     * @return self
     */
    public function setSecondaryButtonColor(?string $secondary_button_color)
    {
        $this->container['secondary_button_color'] = $secondary_button_color;

        return $this;
    }

    /**
     * Gets secondary_button_color_hover
     *
     * @return string|null
     */
    public function getSecondaryButtonColorHover()
    {
        return $this->container['secondary_button_color_hover'];
    }

    /**
     * Sets secondary_button_color_hover
     *
     * @param string|null $secondary_button_color_hover secondary_button_color_hover
     *
     * @return self
     */
    public function setSecondaryButtonColorHover(?string $secondary_button_color_hover)
    {
        $this->container['secondary_button_color_hover'] = $secondary_button_color_hover;

        return $this;
    }

    /**
     * Gets secondary_button_text_color
     *
     * @return string|null
     */
    public function getSecondaryButtonTextColor()
    {
        return $this->container['secondary_button_text_color'];
    }

    /**
     * Sets secondary_button_text_color
     *
     * @param string|null $secondary_button_text_color secondary_button_text_color
     *
     * @return self
     */
    public function setSecondaryButtonTextColor(?string $secondary_button_text_color)
    {
        $this->container['secondary_button_text_color'] = $secondary_button_text_color;

        return $this;
    }

    /**
     * Gets secondary_button_text_color_hover
     *
     * @return string|null
     */
    public function getSecondaryButtonTextColorHover()
    {
        return $this->container['secondary_button_text_color_hover'];
    }

    /**
     * Sets secondary_button_text_color_hover
     *
     * @param string|null $secondary_button_text_color_hover secondary_button_text_color_hover
     *
     * @return self
     */
    public function setSecondaryButtonTextColorHover(?string $secondary_button_text_color_hover)
    {
        $this->container['secondary_button_text_color_hover'] = $secondary_button_text_color_hover;

        return $this;
    }

    /**
     * Gets text_color1
     *
     * @return string|null
     */
    public function getTextColor1()
    {
        return $this->container['text_color1'];
    }

    /**
     * Sets text_color1
     *
     * @param string|null $text_color1 text_color1
     *
     * @return self
     */
    public function setTextColor1(?string $text_color1)
    {
        $this->container['text_color1'] = $text_color1;

        return $this;
    }

    /**
     * Gets text_color2
     *
     * @return string|null
     */
    public function getTextColor2()
    {
        return $this->container['text_color2'];
    }

    /**
     * Sets text_color2
     *
     * @param string|null $text_color2 text_color2
     *
     * @return self
     */
    public function setTextColor2(?string $text_color2)
    {
        $this->container['text_color2'] = $text_color2;

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
