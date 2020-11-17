# Resume20

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор резюме | [optional] 
**title** | **string** | Наименование резюме | [optional] 
**description** | **string** | Описание резюме | [optional] 
**url** | **string** | URL резюме на сайте | [optional] 
**is_active** | **bool** | Активность резюме | [optional] 
**is_purchased** | **bool** | Контакты резюме куплены | [optional] 
**salary** | **int** | Зарплата. Поле может отсутствовать в ответе (выводится при наличии зарплаты) | [optional] 
**start_time** | **string** | Дата публикации резюме | [optional] 
**update_time** | **string** | Дата последнего обновления резюме | [optional] 
**photos** | [**\Swagger\Client\Model\Photo[]**](Photo.md) | Присутствует в ответе только если в запросе есть флаг photos&#x3D;true | [optional] 
**params** | [**\Swagger\Client\Model\Resume20Params**](Resume20Params.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

