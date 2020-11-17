<?php
/**
 * ChatPublicUserProfileAvatarImages
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Авито API для бизнеса
 *
 * # Общая информация Описание API произведено в формате [**Swagger 3.0**](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md). Вы можете использовать данный файл для ознакомления с методами API, а также для генерации базового кода для работы с API на удобном для вас языке программирования с помощью утилиты [**Swagger Codegen**](https://swagger.io/swagger-codegen/) или online сервиса [**Swagger Editor**](https://editor.swagger.io/).  **Авито API для бизнеса предоставляется согласно [Условиям использования](https://api.avito.ru/docs/public/APITermsOfServiceV1.pdf).**  По всем вопросам работы с API необходимо обращаться в Службу Поддержки профессиональных инструментов:  <li>телефон: <b>+7 495 777-10-66</b></li> <li>email: <a href=\"mailto:supportautoload@avito.ru\">supportautoload@avito.ru</a></li>  # Типы авторизации Для использования данного API запрос должен быть авторизован. В данный момент API Авито использует следующие механизмы авторизации.  <!-- ReDoc-Inject: <security-definitions> -->  Подробнее о каждом механизме и его назначении можно прочитать в соответствующем разделе.
 *
 * OpenAPI spec version: 1
 * Contact: supportautoload@avito.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ChatPublicUserProfileAvatarImages Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChatPublicUserProfileAvatarImages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Chat_public_user_profile_avatar_images';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_128x128' => 'string',
'_192x192' => 'string',
'_24x24' => 'string',
'_256x256' => 'string',
'_36x36' => 'string',
'_48x48' => 'string',
'_64x64' => 'string',
'_72x72' => 'string',
'_96x96' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_128x128' => null,
'_192x192' => null,
'_24x24' => null,
'_256x256' => null,
'_36x36' => null,
'_48x48' => null,
'_64x64' => null,
'_72x72' => null,
'_96x96' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        '_128x128' => '128x128',
'_192x192' => '192x192',
'_24x24' => '24x24',
'_256x256' => '256x256',
'_36x36' => '36x36',
'_48x48' => '48x48',
'_64x64' => '64x64',
'_72x72' => '72x72',
'_96x96' => '96x96'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_128x128' => 'set128x128',
'_192x192' => 'set192x192',
'_24x24' => 'set24x24',
'_256x256' => 'set256x256',
'_36x36' => 'set36x36',
'_48x48' => 'set48x48',
'_64x64' => 'set64x64',
'_72x72' => 'set72x72',
'_96x96' => 'set96x96'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_128x128' => 'get128x128',
'_192x192' => 'get192x192',
'_24x24' => 'get24x24',
'_256x256' => 'get256x256',
'_36x36' => 'get36x36',
'_48x48' => 'get48x48',
'_64x64' => 'get64x64',
'_72x72' => 'get72x72',
'_96x96' => 'get96x96'    ];

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
        return self::$swaggerModelName;
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
        $this->container['_128x128'] = isset($data['_128x128']) ? $data['_128x128'] : null;
        $this->container['_192x192'] = isset($data['_192x192']) ? $data['_192x192'] : null;
        $this->container['_24x24'] = isset($data['_24x24']) ? $data['_24x24'] : null;
        $this->container['_256x256'] = isset($data['_256x256']) ? $data['_256x256'] : null;
        $this->container['_36x36'] = isset($data['_36x36']) ? $data['_36x36'] : null;
        $this->container['_48x48'] = isset($data['_48x48']) ? $data['_48x48'] : null;
        $this->container['_64x64'] = isset($data['_64x64']) ? $data['_64x64'] : null;
        $this->container['_72x72'] = isset($data['_72x72']) ? $data['_72x72'] : null;
        $this->container['_96x96'] = isset($data['_96x96']) ? $data['_96x96'] : null;
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
     * Gets _128x128
     *
     * @return string
     */
    public function get128x128()
    {
        return $this->container['_128x128'];
    }

    /**
     * Sets _128x128
     *
     * @param string $_128x128 _128x128
     *
     * @return $this
     */
    public function set128x128($_128x128)
    {
        $this->container['_128x128'] = $_128x128;

        return $this;
    }

    /**
     * Gets _192x192
     *
     * @return string
     */
    public function get192x192()
    {
        return $this->container['_192x192'];
    }

    /**
     * Sets _192x192
     *
     * @param string $_192x192 _192x192
     *
     * @return $this
     */
    public function set192x192($_192x192)
    {
        $this->container['_192x192'] = $_192x192;

        return $this;
    }

    /**
     * Gets _24x24
     *
     * @return string
     */
    public function get24x24()
    {
        return $this->container['_24x24'];
    }

    /**
     * Sets _24x24
     *
     * @param string $_24x24 _24x24
     *
     * @return $this
     */
    public function set24x24($_24x24)
    {
        $this->container['_24x24'] = $_24x24;

        return $this;
    }

    /**
     * Gets _256x256
     *
     * @return string
     */
    public function get256x256()
    {
        return $this->container['_256x256'];
    }

    /**
     * Sets _256x256
     *
     * @param string $_256x256 _256x256
     *
     * @return $this
     */
    public function set256x256($_256x256)
    {
        $this->container['_256x256'] = $_256x256;

        return $this;
    }

    /**
     * Gets _36x36
     *
     * @return string
     */
    public function get36x36()
    {
        return $this->container['_36x36'];
    }

    /**
     * Sets _36x36
     *
     * @param string $_36x36 _36x36
     *
     * @return $this
     */
    public function set36x36($_36x36)
    {
        $this->container['_36x36'] = $_36x36;

        return $this;
    }

    /**
     * Gets _48x48
     *
     * @return string
     */
    public function get48x48()
    {
        return $this->container['_48x48'];
    }

    /**
     * Sets _48x48
     *
     * @param string $_48x48 _48x48
     *
     * @return $this
     */
    public function set48x48($_48x48)
    {
        $this->container['_48x48'] = $_48x48;

        return $this;
    }

    /**
     * Gets _64x64
     *
     * @return string
     */
    public function get64x64()
    {
        return $this->container['_64x64'];
    }

    /**
     * Sets _64x64
     *
     * @param string $_64x64 _64x64
     *
     * @return $this
     */
    public function set64x64($_64x64)
    {
        $this->container['_64x64'] = $_64x64;

        return $this;
    }

    /**
     * Gets _72x72
     *
     * @return string
     */
    public function get72x72()
    {
        return $this->container['_72x72'];
    }

    /**
     * Sets _72x72
     *
     * @param string $_72x72 _72x72
     *
     * @return $this
     */
    public function set72x72($_72x72)
    {
        $this->container['_72x72'] = $_72x72;

        return $this;
    }

    /**
     * Gets _96x96
     *
     * @return string
     */
    public function get96x96()
    {
        return $this->container['_96x96'];
    }

    /**
     * Sets _96x96
     *
     * @param string $_96x96 _96x96
     *
     * @return $this
     */
    public function set96x96($_96x96)
    {
        $this->container['_96x96'] = $_96x96;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
