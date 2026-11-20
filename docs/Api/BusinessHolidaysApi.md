# kruegge82\weclapp\BusinessHolidaysApi



All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**businessHolidaysCountGet()**](BusinessHolidaysApi.md#businessHolidaysCountGet) | **GET** /businessHolidays/count | count businessHolidays |
| [**businessHolidaysGet()**](BusinessHolidaysApi.md#businessHolidaysGet) | **GET** /businessHolidays | query businessHolidays |
| [**businessHolidaysIdIdDelete()**](BusinessHolidaysApi.md#businessHolidaysIdIdDelete) | **DELETE** /businessHolidays/id/{id} | delete a businessHolidays |
| [**businessHolidaysIdIdGet()**](BusinessHolidaysApi.md#businessHolidaysIdIdGet) | **GET** /businessHolidays/id/{id} | query a specific businessHolidays |
| [**businessHolidaysIdIdImportCalendarDataPost()**](BusinessHolidaysApi.md#businessHolidaysIdIdImportCalendarDataPost) | **POST** /businessHolidays/id/{id}/importCalendarData |  |
| [**businessHolidaysIdIdPut()**](BusinessHolidaysApi.md#businessHolidaysIdIdPut) | **PUT** /businessHolidays/id/{id} | update a businessHolidays |
| [**businessHolidaysPost()**](BusinessHolidaysApi.md#businessHolidaysPost) | **POST** /businessHolidays | create a businessHolidays |


## `businessHolidaysCountGet()`

```php
businessHolidaysCountGet($filter): \kruegge82\weclapp\Model\InlineObject33
```

count businessHolidays

count businessHolidays

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BusinessHolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->businessHolidaysCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessHolidaysApi->businessHolidaysCountGet: ', $e->getMessage(), PHP_EOL;
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

## `businessHolidaysGet()`

```php
businessHolidaysGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\InlineObject18
```

query businessHolidays

query businessHolidays

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BusinessHolidaysApi(
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
    $result = $apiInstance->businessHolidaysGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessHolidaysApi->businessHolidaysGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\InlineObject18**](../Model/InlineObject18.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessHolidaysIdIdDelete()`

```php
businessHolidaysIdIdDelete($id, $dry_run)
```

delete a businessHolidays

delete a businessHolidays

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BusinessHolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->businessHolidaysIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling BusinessHolidaysApi->businessHolidaysIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `businessHolidaysIdIdGet()`

```php
businessHolidaysIdIdGet($id): \kruegge82\weclapp\Model\BusinessHolidays
```

query a specific businessHolidays

query a specific businessHolidays

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BusinessHolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->businessHolidaysIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessHolidaysApi->businessHolidaysIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\BusinessHolidays**](../Model/BusinessHolidays.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessHolidaysIdIdImportCalendarDataPost()`

```php
businessHolidaysIdIdImportCalendarDataPost($id, $body, $employee_id): \kruegge82\weclapp\Model\BusinessHolidaysIdIdImportCalendarDataPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BusinessHolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = '/path/to/file.txt'; // \SplFileObject
$employee_id = 'employee_id_example'; // string

try {
    $result = $apiInstance->businessHolidaysIdIdImportCalendarDataPost($id, $body, $employee_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessHolidaysApi->businessHolidaysIdIdImportCalendarDataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **\SplFileObject****\SplFileObject**|  | |
| **employee_id** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BusinessHolidaysIdIdImportCalendarDataPost200Response**](../Model/BusinessHolidaysIdIdImportCalendarDataPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/pdf`, `image/jpeg`, `image/png`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessHolidaysIdIdPut()`

```php
businessHolidaysIdIdPut($id, $business_holidays, $dry_run): \kruegge82\weclapp\Model\BusinessHolidays
```

update a businessHolidays

update businessHolidays

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BusinessHolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$business_holidays = new \kruegge82\weclapp\Model\BusinessHolidays(); // \kruegge82\weclapp\Model\BusinessHolidays
$dry_run = True; // bool

try {
    $result = $apiInstance->businessHolidaysIdIdPut($id, $business_holidays, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessHolidaysApi->businessHolidaysIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **business_holidays** | [**\kruegge82\weclapp\Model\BusinessHolidays**](../Model/BusinessHolidays.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BusinessHolidays**](../Model/BusinessHolidays.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `businessHolidaysPost()`

```php
businessHolidaysPost($business_holidays, $dry_run): \kruegge82\weclapp\Model\BusinessHolidays
```

create a businessHolidays

create a businessHolidays

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BusinessHolidaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_holidays = new \kruegge82\weclapp\Model\BusinessHolidays(); // \kruegge82\weclapp\Model\BusinessHolidays
$dry_run = True; // bool

try {
    $result = $apiInstance->businessHolidaysPost($business_holidays, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessHolidaysApi->businessHolidaysPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_holidays** | [**\kruegge82\weclapp\Model\BusinessHolidays**](../Model/BusinessHolidays.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BusinessHolidays**](../Model/BusinessHolidays.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
