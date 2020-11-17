<?php
/**
 * EventsAutoteka
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
 * EventsAutoteka Class Doc Comment
 *
 * @category Class
 * @description Блок с предупреждениями об авто
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventsAutoteka implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EventsAutoteka';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avito_on_sale' => '\Swagger\Client\Model\EventsAutotekaAvitoOnSale',
'body_repair' => '\Swagger\Client\Model\EventsAutotekaBodyRepair',
'crashes' => '\Swagger\Client\Model\EventsAutotekaCrashes',
'dealer_data_available' => '\Swagger\Client\Model\EventsAutotekaDealerDataAvailable',
'last_mileage_record' => '\Swagger\Client\Model\EventsAutotekaLastMileageRecord',
'first_sell_date' => '\Swagger\Client\Model\EventsAutotekaFirstSellDate',
'owners' => '\Swagger\Client\Model\EventsAutotekaOwners',
'pledge' => '\Swagger\Client\Model\EventsAutotekaPledge',
'public_person' => '\Swagger\Client\Model\EventsAutotekaPublicPerson'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'avito_on_sale' => null,
'body_repair' => null,
'crashes' => null,
'dealer_data_available' => null,
'last_mileage_record' => null,
'first_sell_date' => null,
'owners' => null,
'pledge' => null,
'public_person' => null    ];

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
        'avito_on_sale' => 'avitoOnSale',
'body_repair' => 'bodyRepair',
'crashes' => 'crashes',
'dealer_data_available' => 'dealerDataAvailable',
'last_mileage_record' => 'lastMileageRecord',
'first_sell_date' => 'firstSellDate',
'owners' => 'owners',
'pledge' => 'pledge',
'public_person' => 'publicPerson'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avito_on_sale' => 'setAvitoOnSale',
'body_repair' => 'setBodyRepair',
'crashes' => 'setCrashes',
'dealer_data_available' => 'setDealerDataAvailable',
'last_mileage_record' => 'setLastMileageRecord',
'first_sell_date' => 'setFirstSellDate',
'owners' => 'setOwners',
'pledge' => 'setPledge',
'public_person' => 'setPublicPerson'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avito_on_sale' => 'getAvitoOnSale',
'body_repair' => 'getBodyRepair',
'crashes' => 'getCrashes',
'dealer_data_available' => 'getDealerDataAvailable',
'last_mileage_record' => 'getLastMileageRecord',
'first_sell_date' => 'getFirstSellDate',
'owners' => 'getOwners',
'pledge' => 'getPledge',
'public_person' => 'getPublicPerson'    ];

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
        $this->container['avito_on_sale'] = isset($data['avito_on_sale']) ? $data['avito_on_sale'] : null;
        $this->container['body_repair'] = isset($data['body_repair']) ? $data['body_repair'] : null;
        $this->container['crashes'] = isset($data['crashes']) ? $data['crashes'] : null;
        $this->container['dealer_data_available'] = isset($data['dealer_data_available']) ? $data['dealer_data_available'] : null;
        $this->container['last_mileage_record'] = isset($data['last_mileage_record']) ? $data['last_mileage_record'] : null;
        $this->container['first_sell_date'] = isset($data['first_sell_date']) ? $data['first_sell_date'] : null;
        $this->container['owners'] = isset($data['owners']) ? $data['owners'] : null;
        $this->container['pledge'] = isset($data['pledge']) ? $data['pledge'] : null;
        $this->container['public_person'] = isset($data['public_person']) ? $data['public_person'] : null;
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
     * Gets avito_on_sale
     *
     * @return \Swagger\Client\Model\EventsAutotekaAvitoOnSale
     */
    public function getAvitoOnSale()
    {
        return $this->container['avito_on_sale'];
    }

    /**
     * Sets avito_on_sale
     *
     * @param \Swagger\Client\Model\EventsAutotekaAvitoOnSale $avito_on_sale avito_on_sale
     *
     * @return $this
     */
    public function setAvitoOnSale($avito_on_sale)
    {
        $this->container['avito_on_sale'] = $avito_on_sale;

        return $this;
    }

    /**
     * Gets body_repair
     *
     * @return \Swagger\Client\Model\EventsAutotekaBodyRepair
     */
    public function getBodyRepair()
    {
        return $this->container['body_repair'];
    }

    /**
     * Sets body_repair
     *
     * @param \Swagger\Client\Model\EventsAutotekaBodyRepair $body_repair body_repair
     *
     * @return $this
     */
    public function setBodyRepair($body_repair)
    {
        $this->container['body_repair'] = $body_repair;

        return $this;
    }

    /**
     * Gets crashes
     *
     * @return \Swagger\Client\Model\EventsAutotekaCrashes
     */
    public function getCrashes()
    {
        return $this->container['crashes'];
    }

    /**
     * Sets crashes
     *
     * @param \Swagger\Client\Model\EventsAutotekaCrashes $crashes crashes
     *
     * @return $this
     */
    public function setCrashes($crashes)
    {
        $this->container['crashes'] = $crashes;

        return $this;
    }

    /**
     * Gets dealer_data_available
     *
     * @return \Swagger\Client\Model\EventsAutotekaDealerDataAvailable
     */
    public function getDealerDataAvailable()
    {
        return $this->container['dealer_data_available'];
    }

    /**
     * Sets dealer_data_available
     *
     * @param \Swagger\Client\Model\EventsAutotekaDealerDataAvailable $dealer_data_available dealer_data_available
     *
     * @return $this
     */
    public function setDealerDataAvailable($dealer_data_available)
    {
        $this->container['dealer_data_available'] = $dealer_data_available;

        return $this;
    }

    /**
     * Gets last_mileage_record
     *
     * @return \Swagger\Client\Model\EventsAutotekaLastMileageRecord
     */
    public function getLastMileageRecord()
    {
        return $this->container['last_mileage_record'];
    }

    /**
     * Sets last_mileage_record
     *
     * @param \Swagger\Client\Model\EventsAutotekaLastMileageRecord $last_mileage_record last_mileage_record
     *
     * @return $this
     */
    public function setLastMileageRecord($last_mileage_record)
    {
        $this->container['last_mileage_record'] = $last_mileage_record;

        return $this;
    }

    /**
     * Gets first_sell_date
     *
     * @return \Swagger\Client\Model\EventsAutotekaFirstSellDate
     */
    public function getFirstSellDate()
    {
        return $this->container['first_sell_date'];
    }

    /**
     * Sets first_sell_date
     *
     * @param \Swagger\Client\Model\EventsAutotekaFirstSellDate $first_sell_date first_sell_date
     *
     * @return $this
     */
    public function setFirstSellDate($first_sell_date)
    {
        $this->container['first_sell_date'] = $first_sell_date;

        return $this;
    }

    /**
     * Gets owners
     *
     * @return \Swagger\Client\Model\EventsAutotekaOwners
     */
    public function getOwners()
    {
        return $this->container['owners'];
    }

    /**
     * Sets owners
     *
     * @param \Swagger\Client\Model\EventsAutotekaOwners $owners owners
     *
     * @return $this
     */
    public function setOwners($owners)
    {
        $this->container['owners'] = $owners;

        return $this;
    }

    /**
     * Gets pledge
     *
     * @return \Swagger\Client\Model\EventsAutotekaPledge
     */
    public function getPledge()
    {
        return $this->container['pledge'];
    }

    /**
     * Sets pledge
     *
     * @param \Swagger\Client\Model\EventsAutotekaPledge $pledge pledge
     *
     * @return $this
     */
    public function setPledge($pledge)
    {
        $this->container['pledge'] = $pledge;

        return $this;
    }

    /**
     * Gets public_person
     *
     * @return \Swagger\Client\Model\EventsAutotekaPublicPerson
     */
    public function getPublicPerson()
    {
        return $this->container['public_person'];
    }

    /**
     * Sets public_person
     *
     * @param \Swagger\Client\Model\EventsAutotekaPublicPerson $public_person public_person
     *
     * @return $this
     */
    public function setPublicPerson($public_person)
    {
        $this->container['public_person'] = $public_person;

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
