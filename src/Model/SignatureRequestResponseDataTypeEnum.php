<?php
/**
 * SignatureRequestResponseDataTypeEnum
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

/**
 * SignatureRequestResponseDataTypeEnum Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */
class SignatureRequestResponseDataTypeEnum
{
    /**
     * Possible values of this enum
     */
    public const TEXT = 'text';

    public const CHECKBOX = 'checkbox';

    public const DATE_SIGNED = 'date_signed';

    public const DROPDOWN = 'dropdown';

    public const INITIALS = 'initials';

    public const RADIO = 'radio';

    public const SIGNATURE = 'signature';

    public const TEXT_MERGE = 'text-merge';

    public const CHECKBOX_MERGE = 'checkbox-merge';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT,
            self::CHECKBOX,
            self::DATE_SIGNED,
            self::DROPDOWN,
            self::INITIALS,
            self::RADIO,
            self::SIGNATURE,
            self::TEXT_MERGE,
            self::CHECKBOX_MERGE,
        ];
    }
}