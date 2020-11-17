# Call

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор звонка | [optional] 
**record_url** | **string** | Ссылка на запись звонка | [optional] 
**start_time** | **string** | Время начала разговора (строка в формате RFC3339) | [optional] 
**create_time** | **string** | Время поступления звонка (строка в формате RFC3339) | [optional] 
**buyer_phone** | **string** | Телефонный номер покупателя | [optional] 
**virtual_phone** | **string** | Виртуальный телефонный номер продавца | [optional] 
**seller_phone** | **string** | Реальный телефонный номер продавца | [optional] 
**item_id** | **int** | Идентификатор объявления | [optional] 
**is_arbitrage_available** | [**Bool**](Bool.md) | Флаг, указывающий на то, доступен ли арбитраж по звонку | [optional] 
**status_id** | **int** | Статус звонка (0 - целевой, 1 - на модерации, 2 - помечен как целевой после модерации, 3 - помечен как нецелевой после модерации) | [optional] 
**price** | **int** | Цена звонка CPA | [optional] 
**duration** | **int** | Время разговора | [optional] 
**waiting_duration** | **float** | Время ожидания | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

