# SwaggerClient-php
# Общая информация Описание API произведено в формате [**Swagger 3.0**](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.0.md). Вы можете использовать данный файл для ознакомления с методами API, а также для генерации базового кода для работы с API на удобном для вас языке программирования с помощью утилиты [**Swagger Codegen**](https://swagger.io/swagger-codegen/) или online сервиса [**Swagger Editor**](https://editor.swagger.io/).  **Авито API для бизнеса предоставляется согласно [Условиям использования](https://api.avito.ru/docs/public/APITermsOfServiceV1.pdf).**  По всем вопросам работы с API необходимо обращаться в Службу Поддержки профессиональных инструментов:  <li>телефон: <b>+7 495 777-10-66</b></li> <li>email: <a href=\"mailto:supportautoload@avito.ru\">supportautoload@avito.ru</a></li>  # Типы авторизации Для использования данного API запрос должен быть авторизован. В данный момент API Авито использует следующие механизмы авторизации.  <!-- ReDoc-Inject: <security-definitions> -->  Подробнее о каждом механизме и его назначении можно прочитать в соответствующем разделе.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$grant_type = "grant_type_example"; // string | Тип OAuth flow – строка client_credentials
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 

try {
    $result = $apiInstance->getAccessToken($grant_type, $client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessApi->getAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.avito.ru/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccessApi* | [**getAccessToken**](docs/Api/AccessApi.md#getaccesstoken) | **GET** /token/?grant_type&#x3D;client_credentials | Получение access token
*ApplicationAccessApi* | [**getAccessTokenAuthorizationCode**](docs/Api/ApplicationAccessApi.md#getaccesstokenauthorizationcode) | **GET** /token/?grant_type&#x3D;authorization_code | Получение access token
*ApplicationAccessApi* | [**refreshAccessTokenAuthorizationCode**](docs/Api/ApplicationAccessApi.md#refreshaccesstokenauthorizationcode) | **GET** /token/?grant_type&#x3D;refresh_token | Обновление access token
*AutoloadApi* | [**getAutoloadItemInfo**](docs/Api/AutoloadApi.md#getautoloaditeminfo) | **GET** /autoload/v1/accounts/{user_id}/items/{ad_id}/ | Получение информации о выгрузке объявления
*AutoloadApi* | [**getLastReport**](docs/Api/AutoloadApi.md#getlastreport) | **GET** /autoload/v1/accounts/{user_id}/reports/last_report/ | Получение данных последнего актуального отчета
*AutoloadApi* | [**getReportById**](docs/Api/AutoloadApi.md#getreportbyid) | **GET** /autoload/v1/accounts/{user_id}/reports/{reportId}/ | Получение данных отчета по ID
*AutoloadApi* | [**getReports**](docs/Api/AutoloadApi.md#getreports) | **GET** /autoload/v1/accounts/{user_id}/reports/ | Список отчетов об автозагрузке
*AutotekaApi* | [**getActivePackage**](docs/Api/AutotekaApi.md#getactivepackage) | **GET** /autoteka/v1/packages/active_package | Метод для запроса остатка отчётов в текущем пакете пользователя
*AutotekaApi* | [**getPreview**](docs/Api/AutotekaApi.md#getpreview) | **GET** /autoteka/v1/previews/{previewId} | Запрос на получение превью по ID
*AutotekaApi* | [**getReport**](docs/Api/AutotekaApi.md#getreport) | **GET** /autoteka/v1/reports/{report_id} | Метод для получения отчета по ID
*AutotekaApi* | [**getReportList**](docs/Api/AutotekaApi.md#getreportlist) | **GET** /autoteka/v1/reports/list/ | Метод для получения списка отчётов
*AutotekaApi* | [**postPreviewByItemId**](docs/Api/AutotekaApi.md#postpreviewbyitemid) | **POST** /autoteka/v1/request-preview-by-item-id | Запрос на создание превью по ID объявления
*AutotekaApi* | [**postPreviewByRegNumber**](docs/Api/AutotekaApi.md#postpreviewbyregnumber) | **POST** /autoteka/v1/request-preview-by-regnumber | Запрос на создание превью по государственному номеру
*AutotekaApi* | [**postPreviewByVin**](docs/Api/AutotekaApi.md#postpreviewbyvin) | **POST** /autoteka/v1/previews | Запрос на создание превью по VIN
*AutotekaApi* | [**postReport**](docs/Api/AutotekaApi.md#postreport) | **POST** /autoteka/v1/reports | Запрос на создание отчета по превью
*AutotekaApi* | [**putReport**](docs/Api/AutotekaApi.md#putreport) | **PUT** /autoteka/v1/reports/list/ | Метод для обновление отчета по его идентификатору в случае отсуствия данных
*CpaApi* | [**getCall**](docs/Api/CpaApi.md#getcall) | **GET** /cpa/v1/call/{call_id} | Запись звонка
*ItemApi* | [**getItemInfo**](docs/Api/ItemApi.md#getiteminfo) | **GET** /core/v1/accounts/{user_id}/items/{item_id}/ | Получение информации по объявлению
*ItemApi* | [**getItemsInfo**](docs/Api/ItemApi.md#getitemsinfo) | **GET** /core/v1/items | Получение информации по объявлениям
*ItemApi* | [**getItemsStats**](docs/Api/ItemApi.md#getitemsstats) | **POST** /core/v1/accounts/{user_id}/stats/items | Получение статистики по объявлениям
*ItemApi* | [**getVasPackagePrice**](docs/Api/ItemApi.md#getvaspackageprice) | **POST** /core/v1/accounts/{user_id}/price/vas_packages | Получение информации о стоимости пакетов дополнительных услуг
*ItemApi* | [**getVasPrices**](docs/Api/ItemApi.md#getvasprices) | **POST** /core/v1/accounts/{user_id}/price/vas | Получение информации о стоимости дополнительных услуг
*ItemApi* | [**itemStatsDeep**](docs/Api/ItemApi.md#itemstatsdeep) | **POST** /stats/v1/accounts/{user_id}/items/{item_id}/ | Получение статистики по одному объявлению
*ItemApi* | [**itemStatsShallow**](docs/Api/ItemApi.md#itemstatsshallow) | **POST** /stats/v1/accounts/{user_id}/items | Получение статистики по списку объявлений
*ItemApi* | [**postCallsStats**](docs/Api/ItemApi.md#postcallsstats) | **POST** /core/v1/accounts/{user_id}/calls/stats/ | Получение статистики по звонкам
*ItemApi* | [**putItemVas**](docs/Api/ItemApi.md#putitemvas) | **PUT** /core/v1/accounts/{user_id}/items/{item_id}/vas | Применение дополнительных услуг
*ItemApi* | [**putItemVasPackageV2**](docs/Api/ItemApi.md#putitemvaspackagev2) | **PUT** /core/v2/accounts/{user_id}/items/{item_id}/vas_packages | Применение пакета дополнительных услуг
*JobApi* | [**getNegotiations**](docs/Api/JobApi.md#getnegotiations) | **GET** /job/v1/negotiations | Получение списка откликов
*JobApi* | [**getNegotiationsByChatID**](docs/Api/JobApi.md#getnegotiationsbychatid) | **GET** /job/v1/negotiations/by-chat-id/{chat_id} | Получение отклика по идентификатору чата
*JobApi* | [**getNegotiationsByID**](docs/Api/JobApi.md#getnegotiationsbyid) | **GET** /job/v1/negotiations/{negotiation_id} | Получение отклика по его идентификатору
*JobApi* | [**getResume**](docs/Api/JobApi.md#getresume) | **GET** /job/v1/resumes/{resume_id}/ | Просмотр резюме
*JobApi* | [**getResume20**](docs/Api/JobApi.md#getresume20) | **GET** /job/v2/resumes/{resume_id}/ | Просмотр резюме v2.0
*JobApi* | [**getResumeContacts**](docs/Api/JobApi.md#getresumecontacts) | **GET** /job/v1/resumes/{resume_id}/contacts/ | Доступ к контактным данным соискателя
*JobApi* | [**getResumes**](docs/Api/JobApi.md#getresumes) | **GET** /job/v1/resumes/ | Поиск резюме
*JobApi* | [**postProlongateVacancy**](docs/Api/JobApi.md#postprolongatevacancy) | **POST** /job/v1/vacancies/{vacancy_id}/prolongate | Реактивация вакансии
*JobApi* | [**postVacancy**](docs/Api/JobApi.md#postvacancy) | **POST** /job/v1/vacancies | Публикация вакансии
*JobApi* | [**putArchivedVacancy**](docs/Api/JobApi.md#putarchivedvacancy) | **PUT** /job/v1/vacancies/archived/{vacancy_id} | Остановка публикации вакансии
*JobApi* | [**putVacancy**](docs/Api/JobApi.md#putvacancy) | **PUT** /job/v1/vacancies/{vacancy_id} | Редактирование вакансии
*MarketplaceApi* | [**shipmentAssemble**](docs/Api/MarketplaceApi.md#shipmentassemble) | **POST** /marketplace/shipment/assemble | Скомплектовать товар(-ы) для отправления
*MarketplaceApi* | [**shipmentConfirm**](docs/Api/MarketplaceApi.md#shipmentconfirm) | **POST** /marketplace/shipment/confirm | Подтвердить отправление
*MarketplaceApi* | [**shipmentCreateAcceptanceCert**](docs/Api/MarketplaceApi.md#shipmentcreateacceptancecert) | **POST** /marketplace/shipment/createAcceptanceCert | Получить PDF-файл акта приёма-передачи
*MarketplaceApi* | [**shipmentGetInfo**](docs/Api/MarketplaceApi.md#shipmentgetinfo) | **POST** /marketplace/shipment/getInfo | Информация об отправлении
*MarketplaceApi* | [**shipmentGetList**](docs/Api/MarketplaceApi.md#shipmentgetlist) | **POST** /marketplace/shipment/getList | Список отправлений
*MarketplaceApi* | [**shipmentPickUp**](docs/Api/MarketplaceApi.md#shipmentpickup) | **POST** /marketplace/shipment/pickup | Подтвердить отгрузку товара(-ов) на отправление
*MarketplaceApi* | [**shipmentReject**](docs/Api/MarketplaceApi.md#shipmentreject) | **POST** /marketplace/shipment/reject | Отменить отправление
*MarketplaceSandboxApi* | [**shipmentAssembleSandbox**](docs/Api/MarketplaceSandboxApi.md#shipmentassemblesandbox) | **POST** /marketplace-sandbox/shipment/assemble | Скомплектовать товар(-ы) для отправления
*MarketplaceSandboxApi* | [**shipmentConfirmSandbox**](docs/Api/MarketplaceSandboxApi.md#shipmentconfirmsandbox) | **POST** /marketplace-sandbox/shipment/confirm | Подтвердить отправление
*MarketplaceSandboxApi* | [**shipmentCreateAcceptanceCert**](docs/Api/MarketplaceSandboxApi.md#shipmentcreateacceptancecert) | **POST** /marketplace-sandbox/shipment/createAcceptanceCert | Получить PDF-файл акта приёма-передачи
*MarketplaceSandboxApi* | [**shipmentGetInfoSandbox**](docs/Api/MarketplaceSandboxApi.md#shipmentgetinfosandbox) | **POST** /marketplace-sandbox/shipment/getInfo | Информация об отправлении
*MarketplaceSandboxApi* | [**shipmentGetListSandbox**](docs/Api/MarketplaceSandboxApi.md#shipmentgetlistsandbox) | **POST** /marketplace-sandbox/shipment/getList | Список отправлений
*MarketplaceSandboxApi* | [**shipmentPickUpSandbox**](docs/Api/MarketplaceSandboxApi.md#shipmentpickupsandbox) | **POST** /marketplace-sandbox/shipment/pickup | Подтвердить отгрузку товара(-ов) на отправление
*MarketplaceSandboxApi* | [**shipmentRejectSandbox**](docs/Api/MarketplaceSandboxApi.md#shipmentrejectsandbox) | **POST** /marketplace-sandbox/shipment/reject | Отменить отправление
*MessengerApi* | [**chatRead**](docs/Api/MessengerApi.md#chatread) | **POST** /messenger/v1/accounts/{user_id}/chats/{chat_id}/read | Прочитать чат
*MessengerApi* | [**deleteMessage**](docs/Api/MessengerApi.md#deletemessage) | **POST** /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages/{message_id} | Удаление сообщения
*MessengerApi* | [**getChatById**](docs/Api/MessengerApi.md#getchatbyid) | **GET** /messenger/v1/accounts/{user_id}/chats/{chat_id} | Получение информации по чату
*MessengerApi* | [**getChats**](docs/Api/MessengerApi.md#getchats) | **GET** /messenger/v1/accounts/{user_id}/chats | Получение информации по чатам
*MessengerApi* | [**getMessages**](docs/Api/MessengerApi.md#getmessages) | **GET** /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages/ | Получение списка сообщений
*MessengerApi* | [**getMessagesV2**](docs/Api/MessengerApi.md#getmessagesv2) | **GET** /messenger/v2/accounts/{user_id}/chats/{chat_id}/messages/ | Получение списка сообщений V2
*MessengerApi* | [**postBlacklist**](docs/Api/MessengerApi.md#postblacklist) | **POST** /messenger/v1/accounts/{user_id}/blacklist | Добавление пользователя в blacklist
*MessengerApi* | [**postSendMessage**](docs/Api/MessengerApi.md#postsendmessage) | **POST** /messenger/v1/accounts/{user_id}/chats/{chat_id}/messages | Отправление сообщения
*MessengerApi* | [**postWebhook**](docs/Api/MessengerApi.md#postwebhook) | **POST** /messenger/v1/webhook | Включение уведомлений (webhooks)
*MessengerApi* | [**postWebhookUnsubscribe**](docs/Api/MessengerApi.md#postwebhookunsubscribe) | **POST** /messenger/v1/webhook/unsubscribe | Отключение уведомлений (webhooks)
*MessengerApi* | [**postWebhookV2**](docs/Api/MessengerApi.md#postwebhookv2) | **POST** /messenger/v2/webhook | Включение уведомлений V2 (webhooks)
*RealtyApi* | [**getRealtyBookings**](docs/Api/RealtyApi.md#getrealtybookings) | **GET** /realty/v1/accounts/{user_id}/items/{item_id}/bookings | Получение списка броней по объявлению
*RealtyApi* | [**postRealtyPrices**](docs/Api/RealtyApi.md#postrealtyprices) | **POST** /realty/v1/accounts/{user_id}/items/{item_id}/prices | Актуализация параметров для выбранных периодов
*RealtyApi* | [**putBookingsInfo**](docs/Api/RealtyApi.md#putbookingsinfo) | **POST** /core/v1/accounts/{user_id}/items/{item_id}/bookings | Заполнение календаря занятости объекта недвижимости
*UserApi* | [**getUserBalance**](docs/Api/UserApi.md#getuserbalance) | **GET** /core/v1/accounts/{user_id}/balance/ | Получение баланса кошелька пользователя
*UserApi* | [**getUserInfoSelf**](docs/Api/UserApi.md#getuserinfoself) | **GET** /core/v1/accounts/self | Получение информации об авторизованном пользователе
*UserApi* | [**postOperationsHistory**](docs/Api/UserApi.md#postoperationshistory) | **POST** /core/v1/accounts/operations_history/ | Получение истории операций пользователя

## Documentation For Models

 - [ActivationForbiddenError](docs/Model/ActivationForbiddenError.md)
 - [ActivationForbiddenErrorError](docs/Model/ActivationForbiddenErrorError.md)
 - [AddBlacklistRequestBody](docs/Model/AddBlacklistRequestBody.md)
 - [AddBlacklistRequestBodyInner](docs/Model/AddBlacklistRequestBodyInner.md)
 - [AuthError](docs/Model/AuthError.md)
 - [AuthErrorError](docs/Model/AuthErrorError.md)
 - [AvitoItemAutoteka](docs/Model/AvitoItemAutoteka.md)
 - [AvitoItemAutotekaImages](docs/Model/AvitoItemAutotekaImages.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [BadRequestError](docs/Model/BadRequestError.md)
 - [BadRequestErrorError](docs/Model/BadRequestErrorError.md)
 - [BadRequestShort](docs/Model/BadRequestShort.md)
 - [BadRequestShortError](docs/Model/BadRequestShortError.md)
 - [Balance](docs/Model/Balance.md)
 - [BusinessTripReadiness](docs/Model/BusinessTripReadiness.md)
 - [Call](docs/Model/Call.md)
 - [CallById](docs/Model/CallById.md)
 - [CallsByTime](docs/Model/CallsByTime.md)
 - [CallsStatsDay](docs/Model/CallsStatsDay.md)
 - [CallsStatsItem](docs/Model/CallsStatsItem.md)
 - [CallsStatsRequest](docs/Model/CallsStatsRequest.md)
 - [CallsStatsResponse](docs/Model/CallsStatsResponse.md)
 - [CallsStatsResponseResult](docs/Model/CallsStatsResponseResult.md)
 - [CarImageAutoteka](docs/Model/CarImageAutoteka.md)
 - [CarsharingDataAutoteka](docs/Model/CarsharingDataAutoteka.md)
 - [CarsharingDataEventAutoteka](docs/Model/CarsharingDataEventAutoteka.md)
 - [Chat](docs/Model/Chat.md)
 - [ChatContext](docs/Model/ChatContext.md)
 - [ChatContextValue](docs/Model/ChatContextValue.md)
 - [ChatContextValueImages](docs/Model/ChatContextValueImages.md)
 - [ChatContextValueImagesMain](docs/Model/ChatContextValueImagesMain.md)
 - [ChatLastMessage](docs/Model/ChatLastMessage.md)
 - [ChatLastMessageContent](docs/Model/ChatLastMessageContent.md)
 - [ChatLastMessageContentLink](docs/Model/ChatLastMessageContentLink.md)
 - [ChatPublicUserProfile](docs/Model/ChatPublicUserProfile.md)
 - [ChatPublicUserProfileAvatar](docs/Model/ChatPublicUserProfileAvatar.md)
 - [ChatPublicUserProfileAvatarImages](docs/Model/ChatPublicUserProfileAvatarImages.md)
 - [ChatUsers](docs/Model/ChatUsers.md)
 - [Chats](docs/Model/Chats.md)
 - [Citizenship](docs/Model/Citizenship.md)
 - [Contacts](docs/Model/Contacts.md)
 - [Coordinates](docs/Model/Coordinates.md)
 - [CpaError](docs/Model/CpaError.md)
 - [CrashesHistoryAutoteka](docs/Model/CrashesHistoryAutoteka.md)
 - [CreateComplaint](docs/Model/CreateComplaint.md)
 - [CreateReportResponseBodyAutoteka](docs/Model/CreateReportResponseBodyAutoteka.md)
 - [CreateReportResponseDataAutoteka](docs/Model/CreateReportResponseDataAutoteka.md)
 - [CreationForbiddenError](docs/Model/CreationForbiddenError.md)
 - [CreationForbiddenErrorError](docs/Model/CreationForbiddenErrorError.md)
 - [EditingForbiddenError](docs/Model/EditingForbiddenError.md)
 - [EditingForbiddenErrorError](docs/Model/EditingForbiddenErrorError.md)
 - [Education](docs/Model/Education.md)
 - [EducationLevel](docs/Model/EducationLevel.md)
 - [EquipmentAutoteka](docs/Model/EquipmentAutoteka.md)
 - [EquipmentAutotekaBody](docs/Model/EquipmentAutotekaBody.md)
 - [EquipmentAutotekaBrand](docs/Model/EquipmentAutotekaBrand.md)
 - [EquipmentAutotekaColor](docs/Model/EquipmentAutotekaColor.md)
 - [EquipmentAutotekaDrive](docs/Model/EquipmentAutotekaDrive.md)
 - [EquipmentAutotekaEngineType](docs/Model/EquipmentAutotekaEngineType.md)
 - [EquipmentAutotekaEquipment](docs/Model/EquipmentAutotekaEquipment.md)
 - [EquipmentAutotekaHorsepower](docs/Model/EquipmentAutotekaHorsepower.md)
 - [EquipmentAutotekaMaxWeight](docs/Model/EquipmentAutotekaMaxWeight.md)
 - [EquipmentAutotekaModel](docs/Model/EquipmentAutotekaModel.md)
 - [EquipmentAutotekaModification](docs/Model/EquipmentAutotekaModification.md)
 - [EquipmentAutotekaNetWeight](docs/Model/EquipmentAutotekaNetWeight.md)
 - [EquipmentAutotekaTransmission](docs/Model/EquipmentAutotekaTransmission.md)
 - [EquipmentAutotekaVehicle](docs/Model/EquipmentAutotekaVehicle.md)
 - [EquipmentAutotekaVehicleCategory](docs/Model/EquipmentAutotekaVehicleCategory.md)
 - [EquipmentAutotekaVolume](docs/Model/EquipmentAutotekaVolume.md)
 - [EquipmentAutotekaYear](docs/Model/EquipmentAutotekaYear.md)
 - [ErrorAutoload](docs/Model/ErrorAutoload.md)
 - [ErrorAutoloadError](docs/Model/ErrorAutoloadError.md)
 - [ErrorItemsVas](docs/Model/ErrorItemsVas.md)
 - [ErrorReply](docs/Model/ErrorReply.md)
 - [EventsAutoteka](docs/Model/EventsAutoteka.md)
 - [EventsAutotekaAvitoOnSale](docs/Model/EventsAutotekaAvitoOnSale.md)
 - [EventsAutotekaAvitoOnSaleAdditionalInfo](docs/Model/EventsAutotekaAvitoOnSaleAdditionalInfo.md)
 - [EventsAutotekaBodyRepair](docs/Model/EventsAutotekaBodyRepair.md)
 - [EventsAutotekaCrashes](docs/Model/EventsAutotekaCrashes.md)
 - [EventsAutotekaDealerDataAvailable](docs/Model/EventsAutotekaDealerDataAvailable.md)
 - [EventsAutotekaFirstSellDate](docs/Model/EventsAutotekaFirstSellDate.md)
 - [EventsAutotekaLastMileageRecord](docs/Model/EventsAutotekaLastMileageRecord.md)
 - [EventsAutotekaOwners](docs/Model/EventsAutotekaOwners.md)
 - [EventsAutotekaPledge](docs/Model/EventsAutotekaPledge.md)
 - [EventsAutotekaPublicPerson](docs/Model/EventsAutotekaPublicPerson.md)
 - [EventsOthersHistoryAutoteka](docs/Model/EventsOthersHistoryAutoteka.md)
 - [Experience](docs/Model/Experience.md)
 - [FieldError](docs/Model/FieldError.md)
 - [FineEventAutoteka](docs/Model/FineEventAutoteka.md)
 - [FinesAutoteka](docs/Model/FinesAutoteka.md)
 - [ForbiddenError](docs/Model/ForbiddenError.md)
 - [ForbiddenErrorError](docs/Model/ForbiddenErrorError.md)
 - [Gender](docs/Model/Gender.md)
 - [GetActivePackageResponseBodyAutoteka](docs/Model/GetActivePackageResponseBodyAutoteka.md)
 - [GetActivePackageResponseDataAutoteka](docs/Model/GetActivePackageResponseDataAutoteka.md)
 - [GetPreviewResponseBodyAutoteka](docs/Model/GetPreviewResponseBodyAutoteka.md)
 - [GetPreviewResponseDataAutoteka](docs/Model/GetPreviewResponseDataAutoteka.md)
 - [GetReportResponseBodyAutoteka](docs/Model/GetReportResponseBodyAutoteka.md)
 - [GetReportResponseDataAutoteka](docs/Model/GetReportResponseDataAutoteka.md)
 - [GetReportsListResponseDataAutoteka](docs/Model/GetReportsListResponseDataAutoteka.md)
 - [HeadAutoteka](docs/Model/HeadAutoteka.md)
 - [HtmlTags](docs/Model/HtmlTags.md)
 - [InfoVas](docs/Model/InfoVas.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20011Content](docs/Model/InlineResponse20011Content.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2005Errors](docs/Model/InlineResponse2005Errors.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InsurancePoliciesAutoteka](docs/Model/InsurancePoliciesAutoteka.md)
 - [InsurancePolicyEventAutoteka](docs/Model/InsurancePolicyEventAutoteka.md)
 - [ItemIdsRequestBody](docs/Model/ItemIdsRequestBody.md)
 - [ItemInfoAutoload](docs/Model/ItemInfoAutoload.md)
 - [ItemInfoAutoloadFeeInfo](docs/Model/ItemInfoAutoloadFeeInfo.md)
 - [ItemInfoAvito](docs/Model/ItemInfoAvito.md)
 - [ItemInfoErrorAutoload](docs/Model/ItemInfoErrorAutoload.md)
 - [ItemNotFoundError](docs/Model/ItemNotFoundError.md)
 - [ItemNotFoundErrorError](docs/Model/ItemNotFoundErrorError.md)
 - [ItemReply](docs/Model/ItemReply.md)
 - [ItemsInfoAvito](docs/Model/ItemsInfoAvito.md)
 - [ItemsInfoWithCategoryAvito](docs/Model/ItemsInfoWithCategoryAvito.md)
 - [ItemsInfoWithCategoryAvitoCategory](docs/Model/ItemsInfoWithCategoryAvitoCategory.md)
 - [ItemsInfoWithCategoryAvitoMeta](docs/Model/ItemsInfoWithCategoryAvitoMeta.md)
 - [ItemsInfoWithCategoryAvitoResources](docs/Model/ItemsInfoWithCategoryAvitoResources.md)
 - [Language](docs/Model/Language.md)
 - [LanguageLanguage](docs/Model/LanguageLanguage.md)
 - [LanguageLevel](docs/Model/LanguageLevel.md)
 - [Location](docs/Model/Location.md)
 - [Message](docs/Model/Message.md)
 - [Messages](docs/Model/Messages.md)
 - [MessagesInner](docs/Model/MessagesInner.md)
 - [Meta](docs/Model/Meta.md)
 - [MetaAutoload](docs/Model/MetaAutoload.md)
 - [Negotiation](docs/Model/Negotiation.md)
 - [NegotiationContact](docs/Model/NegotiationContact.md)
 - [NegotiationList](docs/Model/NegotiationList.md)
 - [NegotiationListMeta](docs/Model/NegotiationListMeta.md)
 - [NegotiationResume](docs/Model/NegotiationResume.md)
 - [NegotiationUser](docs/Model/NegotiationUser.md)
 - [NegotiationVacancy](docs/Model/NegotiationVacancy.md)
 - [NegotiationVacancyParams](docs/Model/NegotiationVacancyParams.md)
 - [NotFoundError](docs/Model/NotFoundError.md)
 - [NotFoundErrorError](docs/Model/NotFoundErrorError.md)
 - [OtherAutoteka](docs/Model/OtherAutoteka.md)
 - [OwnersHistoryAutoteka](docs/Model/OwnersHistoryAutoteka.md)
 - [PackageAutoteka](docs/Model/PackageAutoteka.md)
 - [PackageIdRequestBody](docs/Model/PackageIdRequestBody.md)
 - [PackageIdRequestBodyV2](docs/Model/PackageIdRequestBodyV2.md)
 - [PackageInfoVas](docs/Model/PackageInfoVas.md)
 - [PackagePriceInfoVas](docs/Model/PackagePriceInfoVas.md)
 - [ParamPriceItemRealty](docs/Model/ParamPriceItemRealty.md)
 - [ParamPricesRealty](docs/Model/ParamPricesRealty.md)
 - [PaymentError](docs/Model/PaymentError.md)
 - [PaymentErrorError](docs/Model/PaymentErrorError.md)
 - [Phone](docs/Model/Phone.md)
 - [Photo](docs/Model/Photo.md)
 - [PostCalendarData](docs/Model/PostCalendarData.md)
 - [PostCalendarDataBookings](docs/Model/PostCalendarDataBookings.md)
 - [PreviewAutoteka](docs/Model/PreviewAutoteka.md)
 - [PreviewDataAutoteka](docs/Model/PreviewDataAutoteka.md)
 - [PreviewIdOnlyAutoteka](docs/Model/PreviewIdOnlyAutoteka.md)
 - [PriceInfoVas](docs/Model/PriceInfoVas.md)
 - [PriceStatAutoteka](docs/Model/PriceStatAutoteka.md)
 - [PriceStatReportAutoteka](docs/Model/PriceStatReportAutoteka.md)
 - [PriceStatReportAutotekaPrice](docs/Model/PriceStatReportAutotekaPrice.md)
 - [PurchasingError](docs/Model/PurchasingError.md)
 - [PurchasingErrorError](docs/Model/PurchasingErrorError.md)
 - [RealtyBooking](docs/Model/RealtyBooking.md)
 - [RealtyBookingContact](docs/Model/RealtyBookingContact.md)
 - [RealtyBookingSafeDeposit](docs/Model/RealtyBookingSafeDeposit.md)
 - [RecapAutoteka](docs/Model/RecapAutoteka.md)
 - [RelocationReadiness](docs/Model/RelocationReadiness.md)
 - [ReportAutoload](docs/Model/ReportAutoload.md)
 - [ReportAutoloadAds](docs/Model/ReportAutoloadAds.md)
 - [ReportAutoloadFeePackages](docs/Model/ReportAutoloadFeePackages.md)
 - [ReportAutoloadMessages](docs/Model/ReportAutoloadMessages.md)
 - [ReportAutoloadStatuses](docs/Model/ReportAutoloadStatuses.md)
 - [ReportAutoloadStatusesAvito](docs/Model/ReportAutoloadStatusesAvito.md)
 - [ReportAutoloadStatusesGeneral](docs/Model/ReportAutoloadStatusesGeneral.md)
 - [ReportAutoloadStatusesProcessing](docs/Model/ReportAutoloadStatusesProcessing.md)
 - [ReportAutoloadVas](docs/Model/ReportAutoloadVas.md)
 - [ReportAutoteka](docs/Model/ReportAutoteka.md)
 - [ReportCollectionAutoload](docs/Model/ReportCollectionAutoload.md)
 - [ReportCollectionAutoloadInner](docs/Model/ReportCollectionAutoloadInner.md)
 - [ReportDataAutoteka](docs/Model/ReportDataAutoteka.md)
 - [ReportItemAutoteka](docs/Model/ReportItemAutoteka.md)
 - [ReportWithoutDataAutoteka](docs/Model/ReportWithoutDataAutoteka.md)
 - [RequestOperationsHistory](docs/Model/RequestOperationsHistory.md)
 - [RequestPreviewByItemIdAutoteka](docs/Model/RequestPreviewByItemIdAutoteka.md)
 - [RequestPreviewByRegNumberAutoteka](docs/Model/RequestPreviewByRegNumberAutoteka.md)
 - [RequestPreviewByVinAutoteka](docs/Model/RequestPreviewByVinAutoteka.md)
 - [RequestPreviewResponseBodyAutoteka](docs/Model/RequestPreviewResponseBodyAutoteka.md)
 - [RequestPreviewResponseDataAutoteka](docs/Model/RequestPreviewResponseDataAutoteka.md)
 - [RequestReportByPreviewIdAutoteka](docs/Model/RequestReportByPreviewIdAutoteka.md)
 - [RequestVinResponseBodyAutoteka](docs/Model/RequestVinResponseBodyAutoteka.md)
 - [ResponseOperationsHistory](docs/Model/ResponseOperationsHistory.md)
 - [ResponseOperationsHistoryItem](docs/Model/ResponseOperationsHistoryItem.md)
 - [ResponseOperationsHistoryResult](docs/Model/ResponseOperationsHistoryResult.md)
 - [RestrictionsAutoteka](docs/Model/RestrictionsAutoteka.md)
 - [RestrictionsAutotekaPledge](docs/Model/RestrictionsAutotekaPledge.md)
 - [RestrictionsAutotekaPledgeData](docs/Model/RestrictionsAutotekaPledgeData.md)
 - [RestrictionsAutotekaPledgePledgeAdditionalData](docs/Model/RestrictionsAutotekaPledgePledgeAdditionalData.md)
 - [RestrictionsAutotekaRegistration](docs/Model/RestrictionsAutotekaRegistration.md)
 - [RestrictionsAutotekaRegistrationAdditionalInfo](docs/Model/RestrictionsAutotekaRegistrationAdditionalInfo.md)
 - [RestrictionsAutotekaStealing](docs/Model/RestrictionsAutotekaStealing.md)
 - [Resume](docs/Model/Resume.md)
 - [Resume20](docs/Model/Resume20.md)
 - [Resume20Params](docs/Model/Resume20Params.md)
 - [Resume20ParamsEducationList](docs/Model/Resume20ParamsEducationList.md)
 - [Resume20ParamsExperienceList](docs/Model/Resume20ParamsExperienceList.md)
 - [Resume20ParamsLanguageList](docs/Model/Resume20ParamsLanguageList.md)
 - [ResumeContact](docs/Model/ResumeContact.md)
 - [ResumeContacts](docs/Model/ResumeContacts.md)
 - [ResumeSearchMeta](docs/Model/ResumeSearchMeta.md)
 - [SendMessageRequestBody](docs/Model/SendMessageRequestBody.md)
 - [SendMessageRequestBodyMessage](docs/Model/SendMessageRequestBodyMessage.md)
 - [ServiceError](docs/Model/ServiceError.md)
 - [ServiceErrorError](docs/Model/ServiceErrorError.md)
 - [ServiceInfoAutoteka](docs/Model/ServiceInfoAutoteka.md)
 - [ServiceInfoAutotekaReportCompleteStatus](docs/Model/ServiceInfoAutotekaReportCompleteStatus.md)
 - [ServiceInfoAutotekaReportCompleteStatusUnavailableSources](docs/Model/ServiceInfoAutotekaReportCompleteStatusUnavailableSources.md)
 - [ServiceUnavailableError](docs/Model/ServiceUnavailableError.md)
 - [ServiceUnavailableErrorError](docs/Model/ServiceUnavailableErrorError.md)
 - [ShipmentAssembleReply](docs/Model/ShipmentAssembleReply.md)
 - [ShipmentAssembleRequest](docs/Model/ShipmentAssembleRequest.md)
 - [ShipmentConfirmReply](docs/Model/ShipmentConfirmReply.md)
 - [ShipmentConfirmRequest](docs/Model/ShipmentConfirmRequest.md)
 - [ShipmentCreateAcceptanceCertReply](docs/Model/ShipmentCreateAcceptanceCertReply.md)
 - [ShipmentFilter](docs/Model/ShipmentFilter.md)
 - [ShipmentInfoRequest](docs/Model/ShipmentInfoRequest.md)
 - [ShipmentListReply](docs/Model/ShipmentListReply.md)
 - [ShipmentListRequest](docs/Model/ShipmentListRequest.md)
 - [ShipmentPickUpReply](docs/Model/ShipmentPickUpReply.md)
 - [ShipmentPickUpRequest](docs/Model/ShipmentPickUpRequest.md)
 - [ShipmentRejectReply](docs/Model/ShipmentRejectReply.md)
 - [ShipmentRejectRequest](docs/Model/ShipmentRejectRequest.md)
 - [ShipmentReply](docs/Model/ShipmentReply.md)
 - [ShortStatInfo](docs/Model/ShortStatInfo.md)
 - [SimplifiedResume](docs/Model/SimplifiedResume.md)
 - [Specialization](docs/Model/Specialization.md)
 - [StatisticsCounters](docs/Model/StatisticsCounters.md)
 - [StatisticsCountersStats](docs/Model/StatisticsCountersStats.md)
 - [StatisticsCountersStats1](docs/Model/StatisticsCountersStats1.md)
 - [StatisticsDateFrom](docs/Model/StatisticsDateFrom.md)
 - [StatisticsDateTo](docs/Model/StatisticsDateTo.md)
 - [StatisticsDeepRequestBody](docs/Model/StatisticsDeepRequestBody.md)
 - [StatisticsFields](docs/Model/StatisticsFields.md)
 - [StatisticsGroupBy](docs/Model/StatisticsGroupBy.md)
 - [StatisticsItemIDs](docs/Model/StatisticsItemIDs.md)
 - [StatisticsResponse](docs/Model/StatisticsResponse.md)
 - [StatisticsShallowRequestBody](docs/Model/StatisticsShallowRequestBody.md)
 - [StatisticsSortBy](docs/Model/StatisticsSortBy.md)
 - [StatisticsSortOrder](docs/Model/StatisticsSortOrder.md)
 - [StoppingForbiddenError](docs/Model/StoppingForbiddenError.md)
 - [StoppingForbiddenErrorError](docs/Model/StoppingForbiddenErrorError.md)
 - [TaxiDataAutoteka](docs/Model/TaxiDataAutoteka.md)
 - [TaxiDataEventAutoteka](docs/Model/TaxiDataEventAutoteka.md)
 - [UpdateReportResponseBodyAutoteka](docs/Model/UpdateReportResponseBodyAutoteka.md)
 - [UpdateReportResponseDataAutoteka](docs/Model/UpdateReportResponseDataAutoteka.md)
 - [UserInfoSelf](docs/Model/UserInfoSelf.md)
 - [VacanctCreateResult](docs/Model/VacanctCreateResult.md)
 - [VacancyCreate](docs/Model/VacancyCreate.md)
 - [VacancyCreateExperience](docs/Model/VacancyCreateExperience.md)
 - [VacancyCreateSchedule](docs/Model/VacancyCreateSchedule.md)
 - [VacancyProlongate](docs/Model/VacancyProlongate.md)
 - [VacancyUpdate](docs/Model/VacancyUpdate.md)
 - [ValidatingError](docs/Model/ValidatingError.md)
 - [ValidatingErrorError](docs/Model/ValidatingErrorError.md)
 - [VasAmountAvito](docs/Model/VasAmountAvito.md)
 - [VasApplyAvito](docs/Model/VasApplyAvito.md)
 - [VasIdRequestBody](docs/Model/VasIdRequestBody.md)
 - [VinOnlyAutoteka](docs/Model/VinOnlyAutoteka.md)
 - [WebhookSubscribeRequestBody](docs/Model/WebhookSubscribeRequestBody.md)
 - [WorkSchedule](docs/Model/WorkSchedule.md)
 - [_](docs/Model/_.md)

## Documentation For Authorization


## Authorization Code

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://avito.ru/oauth
- **Scopes**: 
 - ****: 

## Client Credentials

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - ****: 


## Author

supportautoload@avito.ru

