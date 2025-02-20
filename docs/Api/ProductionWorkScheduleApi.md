# kruegge82\weclapp\ProductionWorkScheduleApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productionWorkScheduleCountGet()**](ProductionWorkScheduleApi.md#productionWorkScheduleCountGet) | **GET** /productionWorkSchedule/count | count productionWorkSchedule |
| [**productionWorkScheduleGet()**](ProductionWorkScheduleApi.md#productionWorkScheduleGet) | **GET** /productionWorkSchedule | query productionWorkSchedule |
| [**productionWorkScheduleIdIdDelete()**](ProductionWorkScheduleApi.md#productionWorkScheduleIdIdDelete) | **DELETE** /productionWorkSchedule/id/{id} | delete a productionWorkSchedule |
| [**productionWorkScheduleIdIdGet()**](ProductionWorkScheduleApi.md#productionWorkScheduleIdIdGet) | **GET** /productionWorkSchedule/id/{id} | query a specific productionWorkSchedule |
| [**productionWorkScheduleIdIdPut()**](ProductionWorkScheduleApi.md#productionWorkScheduleIdIdPut) | **PUT** /productionWorkSchedule/id/{id} | update a productionWorkSchedule |
| [**productionWorkSchedulePost()**](ProductionWorkScheduleApi.md#productionWorkSchedulePost) | **POST** /productionWorkSchedule | create a productionWorkSchedule |


## `productionWorkScheduleCountGet()`

```php
productionWorkScheduleCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count productionWorkSchedule

count productionWorkSchedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->productionWorkScheduleCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleApi->productionWorkScheduleCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response**](../Model/AccountingTransactionCountGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkScheduleGet()`

```php
productionWorkScheduleGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\ProductionWorkScheduleGet200Response
```

query productionWorkSchedule

query productionWorkSchedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->productionWorkScheduleGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleApi->productionWorkScheduleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkScheduleGet200Response**](../Model/ProductionWorkScheduleGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkScheduleIdIdDelete()`

```php
productionWorkScheduleIdIdDelete($id, $dry_run)
```

delete a productionWorkSchedule

delete a productionWorkSchedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->productionWorkScheduleIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleApi->productionWorkScheduleIdIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkScheduleIdIdGet()`

```php
productionWorkScheduleIdIdGet($id): \kruegge82\weclapp\Model\ProductionWorkSchedule
```

query a specific productionWorkSchedule

query a specific productionWorkSchedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->productionWorkScheduleIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleApi->productionWorkScheduleIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkSchedule**](../Model/ProductionWorkSchedule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkScheduleIdIdPut()`

```php
productionWorkScheduleIdIdPut($id, $production_work_schedule, $dry_run): \kruegge82\weclapp\Model\ProductionWorkSchedule
```

update a productionWorkSchedule

update productionWorkSchedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$production_work_schedule = new \kruegge82\weclapp\Model\ProductionWorkSchedule(); // \kruegge82\weclapp\Model\ProductionWorkSchedule
$dry_run = True; // bool

try {
    $result = $apiInstance->productionWorkScheduleIdIdPut($id, $production_work_schedule, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleApi->productionWorkScheduleIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **production_work_schedule** | [**\kruegge82\weclapp\Model\ProductionWorkSchedule**](../Model/ProductionWorkSchedule.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkSchedule**](../Model/ProductionWorkSchedule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkSchedulePost()`

```php
productionWorkSchedulePost($production_work_schedule, $dry_run): \kruegge82\weclapp\Model\ProductionWorkSchedule
```

create a productionWorkSchedule

create a productionWorkSchedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_work_schedule = new \kruegge82\weclapp\Model\ProductionWorkSchedule(); // \kruegge82\weclapp\Model\ProductionWorkSchedule
$dry_run = True; // bool

try {
    $result = $apiInstance->productionWorkSchedulePost($production_work_schedule, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleApi->productionWorkSchedulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **production_work_schedule** | [**\kruegge82\weclapp\Model\ProductionWorkSchedule**](../Model/ProductionWorkSchedule.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkSchedule**](../Model/ProductionWorkSchedule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
