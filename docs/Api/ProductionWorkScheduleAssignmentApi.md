# kruegge82\weclapp\ProductionWorkScheduleAssignmentApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productionWorkScheduleAssignmentCountGet()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentCountGet) | **GET** /productionWorkScheduleAssignment/count | count productionWorkScheduleAssignment |
| [**productionWorkScheduleAssignmentGet()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentGet) | **GET** /productionWorkScheduleAssignment | query productionWorkScheduleAssignment |
| [**productionWorkScheduleAssignmentIdIdDelete()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentIdIdDelete) | **DELETE** /productionWorkScheduleAssignment/id/{id} | delete a productionWorkScheduleAssignment |
| [**productionWorkScheduleAssignmentIdIdGet()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentIdIdGet) | **GET** /productionWorkScheduleAssignment/id/{id} | query a specific productionWorkScheduleAssignment |
| [**productionWorkScheduleAssignmentIdIdPut()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentIdIdPut) | **PUT** /productionWorkScheduleAssignment/id/{id} | update a productionWorkScheduleAssignment |
| [**productionWorkScheduleAssignmentPost()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentPost) | **POST** /productionWorkScheduleAssignment | create a productionWorkScheduleAssignment |


## `productionWorkScheduleAssignmentCountGet()`

```php
productionWorkScheduleAssignmentCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count productionWorkScheduleAssignment

count productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->productionWorkScheduleAssignmentCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentCountGet: ', $e->getMessage(), PHP_EOL;
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

## `productionWorkScheduleAssignmentGet()`

```php
productionWorkScheduleAssignmentGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\ProductionWorkScheduleAssignmentGet200Response
```

query productionWorkScheduleAssignment

query productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
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
    $result = $apiInstance->productionWorkScheduleAssignmentGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignmentGet200Response**](../Model/ProductionWorkScheduleAssignmentGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkScheduleAssignmentIdIdDelete()`

```php
productionWorkScheduleAssignmentIdIdDelete($id, $dry_run)
```

delete a productionWorkScheduleAssignment

delete a productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->productionWorkScheduleAssignmentIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `productionWorkScheduleAssignmentIdIdGet()`

```php
productionWorkScheduleAssignmentIdIdGet($id): \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment
```

query a specific productionWorkScheduleAssignment

query a specific productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->productionWorkScheduleAssignmentIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignment**](../Model/ProductionWorkScheduleAssignment.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkScheduleAssignmentIdIdPut()`

```php
productionWorkScheduleAssignmentIdIdPut($id, $production_work_schedule_assignment, $dry_run): \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment
```

update a productionWorkScheduleAssignment

update productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$production_work_schedule_assignment = new \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment(); // \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment
$dry_run = True; // bool

try {
    $result = $apiInstance->productionWorkScheduleAssignmentIdIdPut($id, $production_work_schedule_assignment, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **production_work_schedule_assignment** | [**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignment**](../Model/ProductionWorkScheduleAssignment.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignment**](../Model/ProductionWorkScheduleAssignment.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkScheduleAssignmentPost()`

```php
productionWorkScheduleAssignmentPost($production_work_schedule_assignment, $dry_run): \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment
```

create a productionWorkScheduleAssignment

create a productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_work_schedule_assignment = new \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment(); // \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment
$dry_run = True; // bool

try {
    $result = $apiInstance->productionWorkScheduleAssignmentPost($production_work_schedule_assignment, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **production_work_schedule_assignment** | [**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignment**](../Model/ProductionWorkScheduleAssignment.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignment**](../Model/ProductionWorkScheduleAssignment.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
