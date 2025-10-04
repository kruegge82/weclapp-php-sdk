# kruegge82\weclapp\ProjectOrderStatusPageApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectOrderStatusPageCountGet()**](ProjectOrderStatusPageApi.md#projectOrderStatusPageCountGet) | **GET** /projectOrderStatusPage/count | count projectOrderStatusPage |
| [**projectOrderStatusPageGet()**](ProjectOrderStatusPageApi.md#projectOrderStatusPageGet) | **GET** /projectOrderStatusPage | query projectOrderStatusPage |
| [**projectOrderStatusPageIdIdDelete()**](ProjectOrderStatusPageApi.md#projectOrderStatusPageIdIdDelete) | **DELETE** /projectOrderStatusPage/id/{id} | delete a projectOrderStatusPage |
| [**projectOrderStatusPageIdIdGet()**](ProjectOrderStatusPageApi.md#projectOrderStatusPageIdIdGet) | **GET** /projectOrderStatusPage/id/{id} | query a specific projectOrderStatusPage |
| [**projectOrderStatusPageIdIdPut()**](ProjectOrderStatusPageApi.md#projectOrderStatusPageIdIdPut) | **PUT** /projectOrderStatusPage/id/{id} | update a projectOrderStatusPage |
| [**projectOrderStatusPagePost()**](ProjectOrderStatusPageApi.md#projectOrderStatusPagePost) | **POST** /projectOrderStatusPage | create a projectOrderStatusPage |


## `projectOrderStatusPageCountGet()`

```php
projectOrderStatusPageCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count projectOrderStatusPage

count projectOrderStatusPage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProjectOrderStatusPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->projectOrderStatusPageCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOrderStatusPageApi->projectOrderStatusPageCountGet: ', $e->getMessage(), PHP_EOL;
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

## `projectOrderStatusPageGet()`

```php
projectOrderStatusPageGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\ProjectOrderStatusPageGet200Response
```

query projectOrderStatusPage

query projectOrderStatusPage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProjectOrderStatusPageApi(
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
    $result = $apiInstance->projectOrderStatusPageGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOrderStatusPageApi->projectOrderStatusPageGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\ProjectOrderStatusPageGet200Response**](../Model/ProjectOrderStatusPageGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectOrderStatusPageIdIdDelete()`

```php
projectOrderStatusPageIdIdDelete($id, $dry_run)
```

delete a projectOrderStatusPage

delete a projectOrderStatusPage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProjectOrderStatusPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->projectOrderStatusPageIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOrderStatusPageApi->projectOrderStatusPageIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `projectOrderStatusPageIdIdGet()`

```php
projectOrderStatusPageIdIdGet($id): \kruegge82\weclapp\Model\ProjectOrderStatusPage
```

query a specific projectOrderStatusPage

query a specific projectOrderStatusPage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProjectOrderStatusPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->projectOrderStatusPageIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOrderStatusPageApi->projectOrderStatusPageIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ProjectOrderStatusPage**](../Model/ProjectOrderStatusPage.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectOrderStatusPageIdIdPut()`

```php
projectOrderStatusPageIdIdPut($id, $project_order_status_page, $dry_run): \kruegge82\weclapp\Model\ProjectOrderStatusPage
```

update a projectOrderStatusPage

update projectOrderStatusPage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProjectOrderStatusPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$project_order_status_page = new \kruegge82\weclapp\Model\ProjectOrderStatusPage(); // \kruegge82\weclapp\Model\ProjectOrderStatusPage
$dry_run = True; // bool

try {
    $result = $apiInstance->projectOrderStatusPageIdIdPut($id, $project_order_status_page, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOrderStatusPageApi->projectOrderStatusPageIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **project_order_status_page** | [**\kruegge82\weclapp\Model\ProjectOrderStatusPage**](../Model/ProjectOrderStatusPage.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProjectOrderStatusPage**](../Model/ProjectOrderStatusPage.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectOrderStatusPagePost()`

```php
projectOrderStatusPagePost($project_order_status_page, $dry_run): \kruegge82\weclapp\Model\ProjectOrderStatusPage
```

create a projectOrderStatusPage

create a projectOrderStatusPage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProjectOrderStatusPageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_order_status_page = new \kruegge82\weclapp\Model\ProjectOrderStatusPage(); // \kruegge82\weclapp\Model\ProjectOrderStatusPage
$dry_run = True; // bool

try {
    $result = $apiInstance->projectOrderStatusPagePost($project_order_status_page, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectOrderStatusPageApi->projectOrderStatusPagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_order_status_page** | [**\kruegge82\weclapp\Model\ProjectOrderStatusPage**](../Model/ProjectOrderStatusPage.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProjectOrderStatusPage**](../Model/ProjectOrderStatusPage.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
