# Swagger\Client\MarketplaceApi

All URIs are relative to *https://api.avito.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shipmentAssemble**](MarketplaceApi.md#shipmentassemble) | **POST** /marketplace/shipment/assemble | Скомплектовать товар(-ы) для отправления
[**shipmentConfirm**](MarketplaceApi.md#shipmentconfirm) | **POST** /marketplace/shipment/confirm | Подтвердить отправление
[**shipmentCreateAcceptanceCert**](MarketplaceApi.md#shipmentcreateacceptancecert) | **POST** /marketplace/shipment/createAcceptanceCert | Получить PDF-файл акта приёма-передачи
[**shipmentGetInfo**](MarketplaceApi.md#shipmentgetinfo) | **POST** /marketplace/shipment/getInfo | Информация об отправлении
[**shipmentGetList**](MarketplaceApi.md#shipmentgetlist) | **POST** /marketplace/shipment/getList | Список отправлений
[**shipmentPickUp**](MarketplaceApi.md#shipmentpickup) | **POST** /marketplace/shipment/pickup | Подтвердить отгрузку товара(-ов) на отправление
[**shipmentReject**](MarketplaceApi.md#shipmentreject) | **POST** /marketplace/shipment/reject | Отменить отправление

# **shipmentAssemble**
> \Swagger\Client\Model\ShipmentAssembleReply shipmentAssemble($body, $authorization)

Скомплектовать товар(-ы) для отправления

Выполнить комплектацию товара(-ов) для отправления продавцом

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShipmentAssembleRequest(); // \Swagger\Client\Model\ShipmentAssembleRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentAssemble($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->shipmentAssemble: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentAssembleRequest**](../Model/ShipmentAssembleRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentAssembleReply**](../Model/ShipmentAssembleReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentConfirm**
> \Swagger\Client\Model\ShipmentConfirmReply shipmentConfirm($body, $authorization)

Подтвердить отправление

Выполнить подтверждение отправления продавцом.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShipmentConfirmRequest(); // \Swagger\Client\Model\ShipmentConfirmRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentConfirm($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->shipmentConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentConfirmRequest**](../Model/ShipmentConfirmRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentConfirmReply**](../Model/ShipmentConfirmReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentCreateAcceptanceCert**
> \Swagger\Client\Model\ShipmentCreateAcceptanceCertReply shipmentCreateAcceptanceCert($authorization)

Получить PDF-файл акта приёма-передачи

Получить PDF-файл акта приёма-передачи

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentCreateAcceptanceCert($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->shipmentCreateAcceptanceCert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentCreateAcceptanceCertReply**](../Model/ShipmentCreateAcceptanceCertReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentGetInfo**
> \Swagger\Client\Model\ShipmentReply shipmentGetInfo($body, $authorization)

Информация об отправлении

Возвращает информацию об отправлении по его идентификатору.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShipmentInfoRequest(); // \Swagger\Client\Model\ShipmentInfoRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentGetInfo($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->shipmentGetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentInfoRequest**](../Model/ShipmentInfoRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentReply**](../Model/ShipmentReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentGetList**
> \Swagger\Client\Model\ShipmentListReply shipmentGetList($authorization, $body)

Список отправлений

Возвращает список отправлений за указанный период времени.  Дополнительно можно отфильтровать отправления.  Максимальное количество отправлений в ответе: 50

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$body = new \Swagger\Client\Model\ShipmentListRequest(); // \Swagger\Client\Model\ShipmentListRequest | 

try {
    $result = $apiInstance->shipmentGetList($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->shipmentGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **body** | [**\Swagger\Client\Model\ShipmentListRequest**](../Model/ShipmentListRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ShipmentListReply**](../Model/ShipmentListReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentPickUp**
> \Swagger\Client\Model\ShipmentPickUpReply shipmentPickUp($body, $authorization)

Подтвердить отгрузку товара(-ов) на отправление

Подтвердить отгрузку товара(-ов) на отправление

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShipmentPickUpRequest(); // \Swagger\Client\Model\ShipmentPickUpRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentPickUp($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->shipmentPickUp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentPickUpRequest**](../Model/ShipmentPickUpRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentPickUpReply**](../Model/ShipmentPickUpReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shipmentReject**
> \Swagger\Client\Model\ShipmentRejectReply shipmentReject($body, $authorization)

Отменить отправление

Выполнить отмену отправления продавцом.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MarketplaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ShipmentRejectRequest(); // \Swagger\Client\Model\ShipmentRejectRequest | 
$authorization = "authorization_example"; // string | Токен для авторизации

try {
    $result = $apiInstance->shipmentReject($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceApi->shipmentReject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ShipmentRejectRequest**](../Model/ShipmentRejectRequest.md)|  |
 **authorization** | **string**| Токен для авторизации |

### Return type

[**\Swagger\Client\Model\ShipmentRejectReply**](../Model/ShipmentRejectReply.md)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

