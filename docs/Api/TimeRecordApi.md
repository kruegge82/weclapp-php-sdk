# kruegge82\weclapp\TimeRecordApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**timeRecordCountGet()**](TimeRecordApi.md#timeRecordCountGet) | **GET** /timeRecord/count | count timeRecord |
| [**timeRecordGet()**](TimeRecordApi.md#timeRecordGet) | **GET** /timeRecord | query timeRecord |
| [**timeRecordIdIdDelete()**](TimeRecordApi.md#timeRecordIdIdDelete) | **DELETE** /timeRecord/id/{id} | delete a timeRecord |
| [**timeRecordIdIdGet()**](TimeRecordApi.md#timeRecordIdIdGet) | **GET** /timeRecord/id/{id} | query a specific timeRecord |
| [**timeRecordIdIdPut()**](TimeRecordApi.md#timeRecordIdIdPut) | **PUT** /timeRecord/id/{id} | update a timeRecord |
| [**timeRecordPost()**](TimeRecordApi.md#timeRecordPost) | **POST** /timeRecord | create a timeRecord |


## `timeRecordCountGet()`

```php
timeRecordCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count timeRecord

count timeRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TimeRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->timeRecordCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRecordApi->timeRecordCountGet: ', $e->getMessage(), PHP_EOL;
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

## `timeRecordGet()`

```php
timeRecordGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties): \kruegge82\weclapp\Model\TimeRecordGet200Response
```

query timeRecord

query timeRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TimeRecordApi(
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
$additional_properties = 'additional_properties_example'; // string

try {
    $result = $apiInstance->timeRecordGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRecordApi->timeRecordGet: ', $e->getMessage(), PHP_EOL;
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
| **additional_properties** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TimeRecordGet200Response**](../Model/TimeRecordGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeRecordIdIdDelete()`

```php
timeRecordIdIdDelete($id, $dry_run)
```

delete a timeRecord

delete a timeRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TimeRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->timeRecordIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling TimeRecordApi->timeRecordIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `timeRecordIdIdGet()`

```php
timeRecordIdIdGet($id): \kruegge82\weclapp\Model\TimeRecord
```

query a specific timeRecord

query a specific timeRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TimeRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->timeRecordIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRecordApi->timeRecordIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\TimeRecord**](../Model/TimeRecord.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeRecordIdIdPut()`

```php
timeRecordIdIdPut($id, $time_record, $dry_run): \kruegge82\weclapp\Model\TimeRecord
```

update a timeRecord

update timeRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TimeRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$time_record = new \kruegge82\weclapp\Model\TimeRecord(); // \kruegge82\weclapp\Model\TimeRecord
$dry_run = True; // bool

try {
    $result = $apiInstance->timeRecordIdIdPut($id, $time_record, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRecordApi->timeRecordIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **time_record** | [**\kruegge82\weclapp\Model\TimeRecord**](../Model/TimeRecord.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TimeRecord**](../Model/TimeRecord.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeRecordPost()`

```php
timeRecordPost($time_record, $dry_run): \kruegge82\weclapp\Model\TimeRecord
```

create a timeRecord

create a timeRecord

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TimeRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$time_record = new \kruegge82\weclapp\Model\TimeRecord(); // \kruegge82\weclapp\Model\TimeRecord
$dry_run = True; // bool

try {
    $result = $apiInstance->timeRecordPost($time_record, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeRecordApi->timeRecordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **time_record** | [**\kruegge82\weclapp\Model\TimeRecord**](../Model/TimeRecord.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TimeRecord**](../Model/TimeRecord.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
