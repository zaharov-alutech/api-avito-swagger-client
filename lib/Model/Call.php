<?php
/**
 * Call
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
 * Call Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Call implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Call';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'record_url' => 'string',
'start_time' => 'string',
'create_time' => 'string',
'buyer_phone' => 'string',
'virtual_phone' => 'string',
'seller_phone' => 'string',
'item_id' => 'int',
'is_arbitrage_available' => 'Bool',
'status_id' => 'int',
'price' => 'int',
'duration' => 'int',
'waiting_duration' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'record_url' => null,
'start_time' => null,
'create_time' => null,
'buyer_phone' => null,
'virtual_phone' => null,
'seller_phone' => null,
'item_id' => 'int64',
'is_arbitrage_available' => null,
'status_id' => 'int64',
'price' => 'int64',
'duration' => null,
'waiting_duration' => null    ];

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
        'id' => 'id',
'record_url' => 'recordUrl',
'start_time' => 'startTime',
'create_time' => 'createTime',
'buyer_phone' => 'buyerPhone',
'virtual_phone' => 'virtualPhone',
'seller_phone' => 'sellerPhone',
'item_id' => 'itemId',
'is_arbitrage_available' => 'isArbitrageAvailable',
'status_id' => 'statusId',
'price' => 'price',
'duration' => 'duration',
'waiting_duration' => 'waitingDuration'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'record_url' => 'setRecordUrl',
'start_time' => 'setStartTime',
'create_time' => 'setCreateTime',
'buyer_phone' => 'setBuyerPhone',
'virtual_phone' => 'setVirtualPhone',
'seller_phone' => 'setSellerPhone',
'item_id' => 'setItemId',
'is_arbitrage_available' => 'setIsArbitrageAvailable',
'status_id' => 'setStatusId',
'price' => 'setPrice',
'duration' => 'setDuration',
'waiting_duration' => 'setWaitingDuration'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'record_url' => 'getRecordUrl',
'start_time' => 'getStartTime',
'create_time' => 'getCreateTime',
'buyer_phone' => 'getBuyerPhone',
'virtual_phone' => 'getVirtualPhone',
'seller_phone' => 'getSellerPhone',
'item_id' => 'getItemId',
'is_arbitrage_available' => 'getIsArbitrageAvailable',
'status_id' => 'getStatusId',
'price' => 'getPrice',
'duration' => 'getDuration',
'waiting_duration' => 'getWaitingDuration'    ];

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

    const STATUS_ID_0 = 0;
const STATUS_ID_1 = 1;
const STATUS_ID_2 = 2;
const STATUS_ID_3 = 3;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusIdAllowableValues()
    {
        return [
            self::STATUS_ID_0,
self::STATUS_ID_1,
self::STATUS_ID_2,
self::STATUS_ID_3,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['record_url'] = isset($data['record_url']) ? $data['record_url'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['buyer_phone'] = isset($data['buyer_phone']) ? $data['buyer_phone'] : null;
        $this->container['virtual_phone'] = isset($data['virtual_phone']) ? $data['virtual_phone'] : null;
        $this->container['seller_phone'] = isset($data['seller_phone']) ? $data['seller_phone'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['is_arbitrage_available'] = isset($data['is_arbitrage_available']) ? $data['is_arbitrage_available'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['waiting_duration'] = isset($data['waiting_duration']) ? $data['waiting_duration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusIdAllowableValues();
        if (!is_null($this->container['status_id']) && !in_array($this->container['status_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status_id', must be one of '%s'",
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Идентификатор звонка
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets record_url
     *
     * @return string
     */
    public function getRecordUrl()
    {
        return $this->container['record_url'];
    }

    /**
     * Sets record_url
     *
     * @param string $record_url Ссылка на запись звонка
     *
     * @return $this
     */
    public function setRecordUrl($record_url)
    {
        $this->container['record_url'] = $record_url;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string $start_time Время начала разговора (строка в формате RFC3339)
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string $create_time Время поступления звонка (строка в формате RFC3339)
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets buyer_phone
     *
     * @return string
     */
    public function getBuyerPhone()
    {
        return $this->container['buyer_phone'];
    }

    /**
     * Sets buyer_phone
     *
     * @param string $buyer_phone Телефонный номер покупателя
     *
     * @return $this
     */
    public function setBuyerPhone($buyer_phone)
    {
        $this->container['buyer_phone'] = $buyer_phone;

        return $this;
    }

    /**
     * Gets virtual_phone
     *
     * @return string
     */
    public function getVirtualPhone()
    {
        return $this->container['virtual_phone'];
    }

    /**
     * Sets virtual_phone
     *
     * @param string $virtual_phone Виртуальный телефонный номер продавца
     *
     * @return $this
     */
    public function setVirtualPhone($virtual_phone)
    {
        $this->container['virtual_phone'] = $virtual_phone;

        return $this;
    }

    /**
     * Gets seller_phone
     *
     * @return string
     */
    public function getSellerPhone()
    {
        return $this->container['seller_phone'];
    }

    /**
     * Sets seller_phone
     *
     * @param string $seller_phone Реальный телефонный номер продавца
     *
     * @return $this
     */
    public function setSellerPhone($seller_phone)
    {
        $this->container['seller_phone'] = $seller_phone;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id Идентификатор объявления
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets is_arbitrage_available
     *
     * @return Bool
     */
    public function getIsArbitrageAvailable()
    {
        return $this->container['is_arbitrage_available'];
    }

    /**
     * Sets is_arbitrage_available
     *
     * @param Bool $is_arbitrage_available Флаг, указывающий на то, доступен ли арбитраж по звонку
     *
     * @return $this
     */
    public function setIsArbitrageAvailable($is_arbitrage_available)
    {
        $this->container['is_arbitrage_available'] = $is_arbitrage_available;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return int
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param int $status_id Статус звонка (0 - целевой, 1 - на модерации, 2 - помечен как целевой после модерации, 3 - помечен как нецелевой после модерации)
     *
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $allowedValues = $this->getStatusIdAllowableValues();
        if (!is_null($status_id) && !in_array($status_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price Цена звонка CPA
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Время разговора
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets waiting_duration
     *
     * @return float
     */
    public function getWaitingDuration()
    {
        return $this->container['waiting_duration'];
    }

    /**
     * Sets waiting_duration
     *
     * @param float $waiting_duration Время ожидания
     *
     * @return $this
     */
    public function setWaitingDuration($waiting_duration)
    {
        $this->container['waiting_duration'] = $waiting_duration;

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
