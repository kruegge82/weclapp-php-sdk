# kruegge82\weclapp\WorkScheduleProfileApi



All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**workScheduleProfileCountGet()**](WorkScheduleProfileApi.md#workScheduleProfileCountGet) | **GET** /workScheduleProfile/count | count workScheduleProfile |
| [**workScheduleProfileGet()**](WorkScheduleProfileApi.md#workScheduleProfileGet) | **GET** /workScheduleProfile | query workScheduleProfile |
| [**workScheduleProfileIdIdDelete()**](WorkScheduleProfileApi.md#workScheduleProfileIdIdDelete) | **DELETE** /workScheduleProfile/id/{id} | delete a workScheduleProfile |
| [**workScheduleProfileIdIdGet()**](WorkScheduleProfileApi.md#workScheduleProfileIdIdGet) | **GET** /workScheduleProfile/id/{id} | query a specific workScheduleProfile |
| [**workScheduleProfileIdIdPut()**](WorkScheduleProfileApi.md#workScheduleProfileIdIdPut) | **PUT** /workScheduleProfile/id/{id} | update a workScheduleProfile |
| [**workScheduleProfilePost()**](WorkScheduleProfileApi.md#workScheduleProfilePost) | **POST** /workScheduleProfile | create a workScheduleProfile |


## `workScheduleProfileCountGet()`

```php
workScheduleProfileCountGet($filter): \kruegge82\weclapp\Model\InlineObject33
```

count workScheduleProfile

count workScheduleProfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WorkScheduleProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->workScheduleProfileCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkScheduleProfileApi->workScheduleProfileCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InlineObject33**](../Model/InlineObject33.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workScheduleProfileGet()`

```php
workScheduleProfileGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\InlineObject121
```

query workScheduleProfile

query workScheduleProfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WorkScheduleProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int
$page = 56; // int
$page_size = 56; // int
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->workScheduleProfileGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkScheduleProfileApi->workScheduleProfileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InlineObject121**](../Model/InlineObject121.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workScheduleProfileIdIdDelete()`

```php
workScheduleProfileIdIdDelete($id, $dry_run)
```

delete a workScheduleProfile

delete a workScheduleProfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WorkScheduleProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->workScheduleProfileIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling WorkScheduleProfileApi->workScheduleProfileIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `workScheduleProfileIdIdGet()`

```php
workScheduleProfileIdIdGet($id): \kruegge82\weclapp\Model\WorkScheduleProfile
```

query a specific workScheduleProfile

query a specific workScheduleProfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WorkScheduleProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->workScheduleProfileIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkScheduleProfileApi->workScheduleProfileIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\WorkScheduleProfile**](../Model/WorkScheduleProfile.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workScheduleProfileIdIdPut()`

```php
workScheduleProfileIdIdPut($id, $work_schedule_profile, $dry_run): \kruegge82\weclapp\Model\WorkScheduleProfile
```

update a workScheduleProfile

update workScheduleProfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WorkScheduleProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$work_schedule_profile = new \kruegge82\weclapp\Model\WorkScheduleProfile(); // \kruegge82\weclapp\Model\WorkScheduleProfile
$dry_run = True; // bool

try {
    $result = $apiInstance->workScheduleProfileIdIdPut($id, $work_schedule_profile, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkScheduleProfileApi->workScheduleProfileIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **work_schedule_profile** | [**\kruegge82\weclapp\Model\WorkScheduleProfile**](../Model/WorkScheduleProfile.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\WorkScheduleProfile**](../Model/WorkScheduleProfile.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `workScheduleProfilePost()`

```php
workScheduleProfilePost($work_schedule_profile, $dry_run): \kruegge82\weclapp\Model\WorkScheduleProfile
```

create a workScheduleProfile

create a workScheduleProfile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WorkScheduleProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_schedule_profile = new \kruegge82\weclapp\Model\WorkScheduleProfile(); // \kruegge82\weclapp\Model\WorkScheduleProfile
$dry_run = True; // bool

try {
    $result = $apiInstance->workScheduleProfilePost($work_schedule_profile, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkScheduleProfileApi->workScheduleProfilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **work_schedule_profile** | [**\kruegge82\weclapp\Model\WorkScheduleProfile**](../Model/WorkScheduleProfile.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\WorkScheduleProfile**](../Model/WorkScheduleProfile.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
