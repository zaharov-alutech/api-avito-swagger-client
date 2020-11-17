<?php
/**
 * RealtyBooking
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
 * RealtyBooking Class Doc Comment
 *
 * @category Class
 * @description Информация о бронировании
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RealtyBooking implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RealtyBooking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avito_booking_id' => 'int',
'nights' => 'int',
'guest_count' => 'int',
'contact' => '\Swagger\Client\Model\RealtyBookingContact',
'safe_deposit' => '\Swagger\Client\Model\RealtyBookingSafeDeposit',
'base_price' => 'int',
'status' => 'string',
'check_in' => '\DateTime',
'check_out' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'avito_booking_id' => null,
'nights' => null,
'guest_count' => null,
'contact' => null,
'safe_deposit' => null,
'base_price' => null,
'status' => null,
'check_in' => 'date',
'check_out' => 'date'    ];

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
        'avito_booking_id' => 'avito_booking_id',
'nights' => 'nights',
'guest_count' => 'guest_count',
'contact' => 'contact',
'safe_deposit' => 'safe_deposit',
'base_price' => 'base_price',
'status' => 'status',
'check_in' => 'check_in',
'check_out' => 'check_out'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avito_booking_id' => 'setAvitoBookingId',
'nights' => 'setNights',
'guest_count' => 'setGuestCount',
'contact' => 'setContact',
'safe_deposit' => 'setSafeDeposit',
'base_price' => 'setBasePrice',
'status' => 'setStatus',
'check_in' => 'setCheckIn',
'check_out' => 'setCheckOut'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avito_booking_id' => 'getAvitoBookingId',
'nights' => 'getNights',
'guest_count' => 'getGuestCount',
'contact' => 'getContact',
'safe_deposit' => 'getSafeDeposit',
'base_price' => 'getBasePrice',
'status' => 'getStatus',
'check_in' => 'getCheckIn',
'check_out' => 'getCheckOut'    ];

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

    const STATUS_ACTIVE = 'active';
const STATUS_CANCELED = 'canceled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
self::STATUS_CANCELED,        ];
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
        $this->container['avito_booking_id'] = isset($data['avito_booking_id']) ? $data['avito_booking_id'] : null;
        $this->container['nights'] = isset($data['nights']) ? $data['nights'] : null;
        $this->container['guest_count'] = isset($data['guest_count']) ? $data['guest_count'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['safe_deposit'] = isset($data['safe_deposit']) ? $data['safe_deposit'] : null;
        $this->container['base_price'] = isset($data['base_price']) ? $data['base_price'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['check_in'] = isset($data['check_in']) ? $data['check_in'] : null;
        $this->container['check_out'] = isset($data['check_out']) ? $data['check_out'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets avito_booking_id
     *
     * @return int
     */
    public function getAvitoBookingId()
    {
        return $this->container['avito_booking_id'];
    }

    /**
     * Sets avito_booking_id
     *
     * @param int $avito_booking_id Идентификатор бронирования на Авито
     *
     * @return $this
     */
    public function setAvitoBookingId($avito_booking_id)
    {
        $this->container['avito_booking_id'] = $avito_booking_id;

        return $this;
    }

    /**
     * Gets nights
     *
     * @return int
     */
    public function getNights()
    {
        return $this->container['nights'];
    }

    /**
     * Sets nights
     *
     * @param int $nights Количество ночей
     *
     * @return $this
     */
    public function setNights($nights)
    {
        $this->container['nights'] = $nights;

        return $this;
    }

    /**
     * Gets guest_count
     *
     * @return int
     */
    public function getGuestCount()
    {
        return $this->container['guest_count'];
    }

    /**
     * Sets guest_count
     *
     * @param int $guest_count Количество гостей
     *
     * @return $this
     */
    public function setGuestCount($guest_count)
    {
        $this->container['guest_count'] = $guest_count;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Swagger\Client\Model\RealtyBookingContact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Swagger\Client\Model\RealtyBookingContact $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets safe_deposit
     *
     * @return \Swagger\Client\Model\RealtyBookingSafeDeposit
     */
    public function getSafeDeposit()
    {
        return $this->container['safe_deposit'];
    }

    /**
     * Sets safe_deposit
     *
     * @param \Swagger\Client\Model\RealtyBookingSafeDeposit $safe_deposit safe_deposit
     *
     * @return $this
     */
    public function setSafeDeposit($safe_deposit)
    {
        $this->container['safe_deposit'] = $safe_deposit;

        return $this;
    }

    /**
     * Gets base_price
     *
     * @return int
     */
    public function getBasePrice()
    {
        return $this->container['base_price'];
    }

    /**
     * Sets base_price
     *
     * @param int $base_price Стоимость проживания на весь срок бронирования
     *
     * @return $this
     */
    public function setBasePrice($base_price)
    {
        $this->container['base_price'] = $base_price;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Статус брони
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets check_in
     *
     * @return \DateTime
     */
    public function getCheckIn()
    {
        return $this->container['check_in'];
    }

    /**
     * Sets check_in
     *
     * @param \DateTime $check_in Дата заезда гостей
     *
     * @return $this
     */
    public function setCheckIn($check_in)
    {
        $this->container['check_in'] = $check_in;

        return $this;
    }

    /**
     * Gets check_out
     *
     * @return \DateTime
     */
    public function getCheckOut()
    {
        return $this->container['check_out'];
    }

    /**
     * Sets check_out
     *
     * @param \DateTime $check_out Дата выезда гостей
     *
     * @return $this
     */
    public function setCheckOut($check_out)
    {
        $this->container['check_out'] = $check_out;

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
