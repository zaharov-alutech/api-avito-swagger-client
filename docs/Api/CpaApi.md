# Swagger\Client\CpaApi

All URIs are relative to *https://api.avito.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCall**](CpaApi.md#getcall) | **GET** /cpa/v1/call/{call_id} | Запись звонка

# **getCall**
> getCall($authorization, $, $call_id)

Запись звонка

Получение записи звонка по идентификатору

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: Client Credentials
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CpaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Токен для авторизации
$ = new \Swagger\Client\Model\null(); //  | Имя сервиса, отправляющего запрос
$call_id = 789; // int | Идентификатор звонка

try {
    $apiInstance->getCall($authorization, $, $call_id);
} catch (Exception $e) {
    echo 'Exception when calling CpaApi->getCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Токен для авторизации |
 **** | [****](../Model/.md)| Имя сервиса, отправляющего запрос |
 **call_id** | **int**| Идентификатор звонка |

### Return type

void (empty response body)

### Authorization

[Client Credentials](../../README.md#Client Credentials)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

