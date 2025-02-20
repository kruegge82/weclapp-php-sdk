# kruegge82\weclapp\InternalTransportReferenceApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**internalTransportReferenceCountGet()**](InternalTransportReferenceApi.md#internalTransportReferenceCountGet) | **GET** /internalTransportReference/count | count internalTransportReference |
| [**internalTransportReferenceGet()**](InternalTransportReferenceApi.md#internalTransportReferenceGet) | **GET** /internalTransportReference | query internalTransportReference |
| [**internalTransportReferenceIdIdCreateLabelPost()**](InternalTransportReferenceApi.md#internalTransportReferenceIdIdCreateLabelPost) | **POST** /internalTransportReference/id/{id}/createLabel |  |
| [**internalTransportReferenceIdIdDelete()**](InternalTransportReferenceApi.md#internalTransportReferenceIdIdDelete) | **DELETE** /internalTransportReference/id/{id} | delete a internalTransportReference |
| [**internalTransportReferenceIdIdDownloadLatestLabelGet()**](InternalTransportReferenceApi.md#internalTransportReferenceIdIdDownloadLatestLabelGet) | **GET** /internalTransportReference/id/{id}/downloadLatestLabel |  |
| [**internalTransportReferenceIdIdGet()**](InternalTransportReferenceApi.md#internalTransportReferenceIdIdGet) | **GET** /internalTransportReference/id/{id} | query a specific internalTransportReference |
| [**internalTransportReferenceIdIdPut()**](InternalTransportReferenceApi.md#internalTransportReferenceIdIdPut) | **PUT** /internalTransportReference/id/{id} | update a internalTransportReference |
| [**internalTransportReferencePost()**](InternalTransportReferenceApi.md#internalTransportReferencePost) | **POST** /internalTransportReference | create a internalTransportReference |


## `internalTransportReferenceCountGet()`

```php
internalTransportReferenceCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count internalTransportReference

count internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InternalTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->internalTransportReferenceCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferenceCountGet: ', $e->getMessage(), PHP_EOL;
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

## `internalTransportReferenceGet()`

```php
internalTransportReferenceGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\InternalTransportReferenceGet200Response
```

query internalTransportReference

query internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InternalTransportReferenceApi(
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
    $result = $apiInstance->internalTransportReferenceGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferenceGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\InternalTransportReferenceGet200Response**](../Model/InternalTransportReferenceGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferenceIdIdCreateLabelPost()`

```php
internalTransportReferenceIdIdCreateLabelPost($id, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InternalTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->internalTransportReferenceIdIdCreateLabelPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferenceIdIdCreateLabelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

**\SplFileObject**

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`, `application/pdf`, `image/jpeg`, `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferenceIdIdDelete()`

```php
internalTransportReferenceIdIdDelete($id, $dry_run)
```

delete a internalTransportReference

delete a internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InternalTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->internalTransportReferenceIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferenceIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `internalTransportReferenceIdIdDownloadLatestLabelGet()`

```php
internalTransportReferenceIdIdDownloadLatestLabelGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InternalTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->internalTransportReferenceIdIdDownloadLatestLabelGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferenceIdIdDownloadLatestLabelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/pdf`, `image/jpeg`, `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferenceIdIdGet()`

```php
internalTransportReferenceIdIdGet($id): \kruegge82\weclapp\Model\InternalTransportReference
```

query a specific internalTransportReference

query a specific internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InternalTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->internalTransportReferenceIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferenceIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\InternalTransportReference**](../Model/InternalTransportReference.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferenceIdIdPut()`

```php
internalTransportReferenceIdIdPut($id, $internal_transport_reference, $dry_run): \kruegge82\weclapp\Model\InternalTransportReference
```

update a internalTransportReference

update internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InternalTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$internal_transport_reference = new \kruegge82\weclapp\Model\InternalTransportReference(); // \kruegge82\weclapp\Model\InternalTransportReference
$dry_run = True; // bool

try {
    $result = $apiInstance->internalTransportReferenceIdIdPut($id, $internal_transport_reference, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferenceIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **internal_transport_reference** | [**\kruegge82\weclapp\Model\InternalTransportReference**](../Model/InternalTransportReference.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InternalTransportReference**](../Model/InternalTransportReference.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferencePost()`

```php
internalTransportReferencePost($internal_transport_reference, $dry_run): \kruegge82\weclapp\Model\InternalTransportReference
```

create a internalTransportReference

create a internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InternalTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$internal_transport_reference = new \kruegge82\weclapp\Model\InternalTransportReference(); // \kruegge82\weclapp\Model\InternalTransportReference
$dry_run = True; // bool

try {
    $result = $apiInstance->internalTransportReferencePost($internal_transport_reference, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **internal_transport_reference** | [**\kruegge82\weclapp\Model\InternalTransportReference**](../Model/InternalTransportReference.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InternalTransportReference**](../Model/InternalTransportReference.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
