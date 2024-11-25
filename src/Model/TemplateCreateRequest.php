<?php
/**
 * TemplateCreateRequest
 *
 * PHP version 7.4
 *
 * @category Class
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
 * Generator version: 7.8.0
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
use SplFileObject;

/**
 * TemplateCreateRequest Class Doc Comment
 *
 * @category Class
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TemplateCreateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TemplateCreateRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'form_fields_per_document' => '\Dropbox\Sign\Model\SubFormFieldsPerDocumentBase[]',
        'signer_roles' => '\Dropbox\Sign\Model\SubTemplateRole[]',
        'files' => '\SplFileObject[]',
        'file_urls' => 'string[]',
        'allow_reassign' => 'bool',
        'attachments' => '\Dropbox\Sign\Model\SubAttachment[]',
        'cc_roles' => 'string[]',
        'client_id' => 'string',
        'field_options' => '\Dropbox\Sign\Model\SubFieldOptions',
        'form_field_groups' => '\Dropbox\Sign\Model\SubFormFieldGroup[]',
        'form_field_rules' => '\Dropbox\Sign\Model\SubFormFieldRule[]',
        'merge_fields' => '\Dropbox\Sign\Model\SubMergeField[]',
        'message' => 'string',
        'metadata' => 'array<string,mixed>',
        'subject' => 'string',
        'test_mode' => 'bool',
        'title' => 'string',
        'use_preexisting_fields' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'form_fields_per_document' => null,
        'signer_roles' => null,
        'files' => 'binary',
        'file_urls' => null,
        'allow_reassign' => null,
        'attachments' => null,
        'cc_roles' => null,
        'client_id' => null,
        'field_options' => null,
        'form_field_groups' => null,
        'form_field_rules' => null,
        'merge_fields' => null,
        'message' => null,
        'metadata' => null,
        'subject' => null,
        'test_mode' => null,
        'title' => null,
        'use_preexisting_fields' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'form_fields_per_document' => false,
        'signer_roles' => false,
        'files' => false,
        'file_urls' => false,
        'allow_reassign' => false,
        'attachments' => false,
        'cc_roles' => false,
        'client_id' => false,
        'field_options' => false,
        'form_field_groups' => false,
        'form_field_rules' => false,
        'merge_fields' => false,
        'message' => false,
        'metadata' => false,
        'subject' => false,
        'test_mode' => false,
        'title' => false,
        'use_preexisting_fields' => false,
    ];

    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var bool[]
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
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param bool[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
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
        'form_fields_per_document' => 'form_fields_per_document',
        'signer_roles' => 'signer_roles',
        'files' => 'files',
        'file_urls' => 'file_urls',
        'allow_reassign' => 'allow_reassign',
        'attachments' => 'attachments',
        'cc_roles' => 'cc_roles',
        'client_id' => 'client_id',
        'field_options' => 'field_options',
        'form_field_groups' => 'form_field_groups',
        'form_field_rules' => 'form_field_rules',
        'merge_fields' => 'merge_fields',
        'message' => 'message',
        'metadata' => 'metadata',
        'subject' => 'subject',
        'test_mode' => 'test_mode',
        'title' => 'title',
        'use_preexisting_fields' => 'use_preexisting_fields',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'form_fields_per_document' => 'setFormFieldsPerDocument',
        'signer_roles' => 'setSignerRoles',
        'files' => 'setFiles',
        'file_urls' => 'setFileUrls',
        'allow_reassign' => 'setAllowReassign',
        'attachments' => 'setAttachments',
        'cc_roles' => 'setCcRoles',
        'client_id' => 'setClientId',
        'field_options' => 'setFieldOptions',
        'form_field_groups' => 'setFormFieldGroups',
        'form_field_rules' => 'setFormFieldRules',
        'merge_fields' => 'setMergeFields',
        'message' => 'setMessage',
        'metadata' => 'setMetadata',
        'subject' => 'setSubject',
        'test_mode' => 'setTestMode',
        'title' => 'setTitle',
        'use_preexisting_fields' => 'setUsePreexistingFields',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'form_fields_per_document' => 'getFormFieldsPerDocument',
        'signer_roles' => 'getSignerRoles',
        'files' => 'getFiles',
        'file_urls' => 'getFileUrls',
        'allow_reassign' => 'getAllowReassign',
        'attachments' => 'getAttachments',
        'cc_roles' => 'getCcRoles',
        'client_id' => 'getClientId',
        'field_options' => 'getFieldOptions',
        'form_field_groups' => 'getFormFieldGroups',
        'form_field_rules' => 'getFormFieldRules',
        'merge_fields' => 'getMergeFields',
        'message' => 'getMessage',
        'metadata' => 'getMetadata',
        'subject' => 'getSubject',
        'test_mode' => 'getTestMode',
        'title' => 'getTitle',
        'use_preexisting_fields' => 'getUsePreexistingFields',
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('form_fields_per_document', $data ?? [], null);
        $this->setIfExists('signer_roles', $data ?? [], null);
        $this->setIfExists('files', $data ?? [], null);
        $this->setIfExists('file_urls', $data ?? [], null);
        $this->setIfExists('allow_reassign', $data ?? [], false);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('cc_roles', $data ?? [], null);
        $this->setIfExists('client_id', $data ?? [], null);
        $this->setIfExists('field_options', $data ?? [], null);
        $this->setIfExists('form_field_groups', $data ?? [], null);
        $this->setIfExists('form_field_rules', $data ?? [], null);
        $this->setIfExists('merge_fields', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('test_mode', $data ?? [], false);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('use_preexisting_fields', $data ?? [], false);
    }

    /**
     * @deprecated use ::init()
     */
    public static function fromArray(array $data): TemplateCreateRequest
    {
        return self::init($data);
    }

    /**
     * Attempt to instantiate and hydrate a new instance of this class
     */
    public static function init(array $data): TemplateCreateRequest
    {
        /** @var TemplateCreateRequest */
        return ObjectSerializer::deserialize(
            $data,
            TemplateCreateRequest::class,
        );
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     *
     * @param string|int|object|array|mixed $defaultValue
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

        if ($this->container['form_fields_per_document'] === null) {
            $invalidProperties[] = "'form_fields_per_document' can't be null";
        }
        if ($this->container['signer_roles'] === null) {
            $invalidProperties[] = "'signer_roles' can't be null";
        }
        if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 5000)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 5000.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 200)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 200.";
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
     * Gets form_fields_per_document
     *
     * @return SubFormFieldsPerDocumentBase[]
     */
    public function getFormFieldsPerDocument()
    {
        return $this->container['form_fields_per_document'];
    }

    /**
     * Sets form_fields_per_document
     *
     * @param SubFormFieldsPerDocumentBase[] $form_fields_per_document The fields that should appear on the document, expressed as an array of objects. (For more details you can read about it here: [Using Form Fields per Document](/docs/openapi/form-fields-per-document).)  **NOTE:** Fields like **text**, **dropdown**, **checkbox**, **radio**, and **hyperlink** have additional required and optional parameters. Check out the list of [additional parameters](/api/reference/constants/#form-fields-per-document) for these field types.  * Text Field use `SubFormFieldsPerDocumentText` * Dropdown Field use `SubFormFieldsPerDocumentDropdown` * Hyperlink Field use `SubFormFieldsPerDocumentHyperlink` * Checkbox Field use `SubFormFieldsPerDocumentCheckbox` * Radio Field use `SubFormFieldsPerDocumentRadio` * Signature Field use `SubFormFieldsPerDocumentSignature` * Date Signed Field use `SubFormFieldsPerDocumentDateSigned` * Initials Field use `SubFormFieldsPerDocumentInitials` * Text Merge Field use `SubFormFieldsPerDocumentTextMerge` * Checkbox Merge Field use `SubFormFieldsPerDocumentCheckboxMerge`
     *
     * @return self
     */
    public function setFormFieldsPerDocument(array $form_fields_per_document)
    {
        if (is_null($form_fields_per_document)) {
            throw new InvalidArgumentException('non-nullable form_fields_per_document cannot be null');
        }
        $this->container['form_fields_per_document'] = $form_fields_per_document;

        return $this;
    }

    /**
     * Gets signer_roles
     *
     * @return SubTemplateRole[]
     */
    public function getSignerRoles()
    {
        return $this->container['signer_roles'];
    }

    /**
     * Sets signer_roles
     *
     * @param SubTemplateRole[] $signer_roles an array of the designated signer roles that must be specified when sending a SignatureRequest using this Template
     *
     * @return self
     */
    public function setSignerRoles(array $signer_roles)
    {
        if (is_null($signer_roles)) {
            throw new InvalidArgumentException('non-nullable signer_roles cannot be null');
        }
        $this->container['signer_roles'] = $signer_roles;

        return $this;
    }

    /**
     * Gets files
     *
     * @return SplFileObject[]|null
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param SplFileObject[]|null $files Use `files[]` to indicate the uploaded file(s) to send for signature.  This endpoint requires either **files** or **file_urls[]**, but not both.
     *
     * @return self
     */
    public function setFiles(?array $files)
    {
        if (is_null($files)) {
            throw new InvalidArgumentException('non-nullable files cannot be null');
        }
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets file_urls
     *
     * @return string[]|null
     */
    public function getFileUrls()
    {
        return $this->container['file_urls'];
    }

    /**
     * Sets file_urls
     *
     * @param string[]|null $file_urls Use `file_urls[]` to have Dropbox Sign download the file(s) to send for signature.  This endpoint requires either **files** or **file_urls[]**, but not both.
     *
     * @return self
     */
    public function setFileUrls(?array $file_urls)
    {
        if (is_null($file_urls)) {
            throw new InvalidArgumentException('non-nullable file_urls cannot be null');
        }
        $this->container['file_urls'] = $file_urls;

        return $this;
    }

    /**
     * Gets allow_reassign
     *
     * @return bool|null
     */
    public function getAllowReassign()
    {
        return $this->container['allow_reassign'];
    }

    /**
     * Sets allow_reassign
     *
     * @param bool|null $allow_reassign Allows signers to reassign their signature requests to other signers if set to `true`. Defaults to `false`.  **NOTE:** Only available for Premium plan and higher.
     *
     * @return self
     */
    public function setAllowReassign(?bool $allow_reassign)
    {
        if (is_null($allow_reassign)) {
            throw new InvalidArgumentException('non-nullable allow_reassign cannot be null');
        }
        $this->container['allow_reassign'] = $allow_reassign;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return SubAttachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param SubAttachment[]|null $attachments A list describing the attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments)
    {
        if (is_null($attachments)) {
            throw new InvalidArgumentException('non-nullable attachments cannot be null');
        }
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets cc_roles
     *
     * @return string[]|null
     */
    public function getCcRoles()
    {
        return $this->container['cc_roles'];
    }

    /**
     * Sets cc_roles
     *
     * @param string[]|null $cc_roles The CC roles that must be assigned when using the template to send a signature request
     *
     * @return self
     */
    public function setCcRoles(?array $cc_roles)
    {
        if (is_null($cc_roles)) {
            throw new InvalidArgumentException('non-nullable cc_roles cannot be null');
        }
        $this->container['cc_roles'] = $cc_roles;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string|null $client_id Client id of the app you're using to create this draft. Used to apply the branding and callback url defined for the app.
     *
     * @return self
     */
    public function setClientId(?string $client_id)
    {
        if (is_null($client_id)) {
            throw new InvalidArgumentException('non-nullable client_id cannot be null');
        }
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets field_options
     *
     * @return SubFieldOptions|null
     */
    public function getFieldOptions()
    {
        return $this->container['field_options'];
    }

    /**
     * Sets field_options
     *
     * @param SubFieldOptions|null $field_options field_options
     *
     * @return self
     */
    public function setFieldOptions(?SubFieldOptions $field_options)
    {
        if (is_null($field_options)) {
            throw new InvalidArgumentException('non-nullable field_options cannot be null');
        }
        $this->container['field_options'] = $field_options;

        return $this;
    }

    /**
     * Gets form_field_groups
     *
     * @return SubFormFieldGroup[]|null
     */
    public function getFormFieldGroups()
    {
        return $this->container['form_field_groups'];
    }

    /**
     * Sets form_field_groups
     *
     * @param SubFormFieldGroup[]|null $form_field_groups Group information for fields defined in `form_fields_per_document`. String-indexed JSON array with `group_label` and `requirement` keys. `form_fields_per_document` must contain fields referencing a group defined in `form_field_groups`.
     *
     * @return self
     */
    public function setFormFieldGroups(?array $form_field_groups)
    {
        if (is_null($form_field_groups)) {
            throw new InvalidArgumentException('non-nullable form_field_groups cannot be null');
        }
        $this->container['form_field_groups'] = $form_field_groups;

        return $this;
    }

    /**
     * Gets form_field_rules
     *
     * @return SubFormFieldRule[]|null
     */
    public function getFormFieldRules()
    {
        return $this->container['form_field_rules'];
    }

    /**
     * Sets form_field_rules
     *
     * @param SubFormFieldRule[]|null $form_field_rules conditional Logic rules for fields defined in `form_fields_per_document`
     *
     * @return self
     */
    public function setFormFieldRules(?array $form_field_rules)
    {
        if (is_null($form_field_rules)) {
            throw new InvalidArgumentException('non-nullable form_field_rules cannot be null');
        }
        $this->container['form_field_rules'] = $form_field_rules;

        return $this;
    }

    /**
     * Gets merge_fields
     *
     * @return SubMergeField[]|null
     */
    public function getMergeFields()
    {
        return $this->container['merge_fields'];
    }

    /**
     * Sets merge_fields
     *
     * @param SubMergeField[]|null $merge_fields Add merge fields to the template. Merge fields are placed by the user creating the template and used to pre-fill data by passing values into signature requests with the `custom_fields` parameter. If the signature request using that template *does not* pass a value into a merge field, then an empty field remains in the document.
     *
     * @return self
     */
    public function setMergeFields(?array $merge_fields)
    {
        if (is_null($merge_fields)) {
            throw new InvalidArgumentException('non-nullable merge_fields cannot be null');
        }
        $this->container['merge_fields'] = $merge_fields;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message the default template email message
     *
     * @return self
     */
    public function setMessage(?string $message)
    {
        if (is_null($message)) {
            throw new InvalidArgumentException('non-nullable message cannot be null');
        }
        if (mb_strlen($message) > 5000) {
            throw new InvalidArgumentException('invalid length for $message when calling TemplateCreateRequest., must be smaller than or equal to 5000.');
        }

        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,mixed>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,mixed>|null $metadata Key-value data that should be attached to the signature request. This metadata is included in all API responses and events involving the signature request. For example, use the metadata field to store a signer's order number for look up when receiving events for the signature request.  Each request can include up to 10 metadata keys (or 50 nested metadata keys), with key names up to 40 characters long and values up to 1000 characters long.
     *
     * @return self
     */
    public function setMetadata(?array $metadata)
    {
        if (is_null($metadata)) {
            throw new InvalidArgumentException('non-nullable metadata cannot be null');
        }

        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject the template title (alias)
     *
     * @return self
     */
    public function setSubject(?string $subject)
    {
        if (is_null($subject)) {
            throw new InvalidArgumentException('non-nullable subject cannot be null');
        }
        if (mb_strlen($subject) > 200) {
            throw new InvalidArgumentException('invalid length for $subject when calling TemplateCreateRequest., must be smaller than or equal to 200.');
        }

        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets test_mode
     *
     * @return bool|null
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param bool|null $test_mode Whether this is a test, the signature request created from this draft will not be legally binding if set to `true`. Defaults to `false`.
     *
     * @return self
     */
    public function setTestMode(?bool $test_mode)
    {
        if (is_null($test_mode)) {
            throw new InvalidArgumentException('non-nullable test_mode cannot be null');
        }
        $this->container['test_mode'] = $test_mode;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title the title you want to assign to the SignatureRequest
     *
     * @return self
     */
    public function setTitle(?string $title)
    {
        if (is_null($title)) {
            throw new InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets use_preexisting_fields
     *
     * @return bool|null
     */
    public function getUsePreexistingFields()
    {
        return $this->container['use_preexisting_fields'];
    }

    /**
     * Sets use_preexisting_fields
     *
     * @param bool|null $use_preexisting_fields enable the detection of predefined PDF fields by setting the `use_preexisting_fields` to `true` (defaults to disabled, or `false`)
     *
     * @return self
     */
    public function setUsePreexistingFields(?bool $use_preexisting_fields)
    {
        if (is_null($use_preexisting_fields)) {
            throw new InvalidArgumentException('non-nullable use_preexisting_fields cannot be null');
        }
        $this->container['use_preexisting_fields'] = $use_preexisting_fields;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     */
    #[ReturnTypeWillChange]
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
     * @param int $offset Offset
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
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