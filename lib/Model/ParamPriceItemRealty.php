<?php
/**
 * ParamPriceItemRealty
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
 * ParamPriceItemRealty Class Doc Comment
 *
 * @category Class
 * @description Параметры аренды для определённого периода
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParamPriceItemRealty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParamPriceItemRealty';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_from' => '\DateTime',
'date_to' => '\DateTime',
'minimal_duration' => 'int',
'extra_guest_fee' => 'int',
'night_price' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_from' => 'date',
'date_to' => 'date',
'minimal_duration' => 'int32',
'extra_guest_fee' => 'int64',
'night_price' => 'int64'    ];

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
        'date_from' => 'date_from',
'date_to' => 'date_to',
'minimal_duration' => 'minimal_duration',
'extra_guest_fee' => 'extra_guest_fee',
'night_price' => 'night_price'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_from' => 'setDateFrom',
'date_to' => 'setDateTo',
'minimal_duration' => 'setMinimalDuration',
'extra_guest_fee' => 'setExtraGuestFee',
'night_price' => 'setNightPrice'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_from' => 'getDateFrom',
'date_to' => 'getDateTo',
'minimal_duration' => 'getMinimalDuration',
'extra_guest_fee' => 'getExtraGuestFee',
'night_price' => 'getNightPrice'    ];

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
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['minimal_duration'] = isset($data['minimal_duration']) ? $data['minimal_duration'] : null;
        $this->container['extra_guest_fee'] = isset($data['extra_guest_fee']) ? $data['extra_guest_fee'] : null;
        $this->container['night_price'] = isset($data['night_price']) ? $data['night_price'] : null;
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
     * Gets date_from
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     *
     * @param \DateTime $date_from Дата начала периода
     *
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     *
     * @param \DateTime $date_to Дата конца периода (исключительно)
     *
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets minimal_duration
     *
     * @return int
     */
    public function getMinimalDuration()
    {
        return $this->container['minimal_duration'];
    }

    /**
     * Sets minimal_duration
     *
     * @param int $minimal_duration Минимальная продолжительность (ночи)
     *
     * @return $this
     */
    public function setMinimalDuration($minimal_duration)
    {
        $this->container['minimal_duration'] = $minimal_duration;

        return $this;
    }

    /**
     * Gets extra_guest_fee
     *
     * @return int
     */
    public function getExtraGuestFee()
    {
        return $this->container['extra_guest_fee'];
    }

    /**
     * Sets extra_guest_fee
     *
     * @param int $extra_guest_fee Доплата за гостя (рубли)
     *
     * @return $this
     */
    public function setExtraGuestFee($extra_guest_fee)
    {
        $this->container['extra_guest_fee'] = $extra_guest_fee;

        return $this;
    }

    /**
     * Gets night_price
     *
     * @return int
     */
    public function getNightPrice()
    {
        return $this->container['night_price'];
    }

    /**
     * Sets night_price
     *
     * @param int $night_price Цена проживания за ночь (рубли)
     *
     * @return $this
     */
    public function setNightPrice($night_price)
    {
        $this->container['night_price'] = $night_price;

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
