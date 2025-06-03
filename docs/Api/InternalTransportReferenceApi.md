# kruegge82\weclapp\InternalTransportReferenceApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**internalTransportReferenceCountGet()**](InternalTransportReferenceApi.md#internalTransportReferenceCountGet) | **GET** /internalTransportReference/count |  |
| [**internalTransportReferenceGet()**](InternalTransportReferenceApi.md#internalTransportReferenceGet) | **GET** /internalTransportReference |  |
| [**internalTransportReferenceIdIdCreateLabelPost()**](InternalTransportReferenceApi.md#internalTransportReferenceIdIdCreateLabelPost) | **POST** /internalTransportReference/id/{id}/createLabel |  |
| [**internalTransportReferenceIdIdDelete()**](InternalTransportReferenceApi.md#internalTransportReferenceIdIdDelete) | **DELETE** /internalTransportReference/id/{id} |  |
| [**internalTransportReferenceIdIdDownloadLatestLabelGet()**](InternalTransportReferenceApi.md#internalTransportReferenceIdIdDownloadLatestLabelGet) | **GET** /internalTransportReference/id/{id}/downloadLatestLabel |  |
| [**internalTransportReferenceIdIdGet()**](InternalTransportReferenceApi.md#internalTransportReferenceIdIdGet) | **GET** /internalTransportReference/id/{id} |  |
| [**internalTransportReferenceIdIdPut()**](InternalTransportReferenceApi.md#internalTransportReferenceIdIdPut) | **PUT** /internalTransportReference/id/{id} |  |
| [**internalTransportReferencePost()**](InternalTransportReferenceApi.md#internalTransportReferencePost) | **POST** /internalTransportReference |  |


## `internalTransportReferenceCountGet()`

```php
internalTransportReferenceCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InternalTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->internalTransportReferenceCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferenceCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response**](../Model/AccountingTransactionCountGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferenceGet()`

```php
internalTransportReferenceGet($page, $page_size, $sort): \kruegge82\weclapp\Model\InternalTransportReferenceGet200Response
```



query internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->internalTransportReferenceGet($page, $page_size, $sort);
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
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InternalTransportReferenceGet200Response**](../Model/InternalTransportReferenceGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferenceIdIdCreateLabelPost()`

```php
internalTransportReferenceIdIdCreateLabelPost($id, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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
    $apiInstance->internalTransportReferenceIdIdCreateLabelPost($id, $body);
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

void (empty response body)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `image/jpeg`, `image/png`, `application/pdf`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferenceIdIdDelete()`

```php
internalTransportReferenceIdIdDelete($id, $dry_run)
```



delete a internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferenceIdIdDownloadLatestLabelGet()`

```php
internalTransportReferenceIdIdDownloadLatestLabelGet($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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
    $apiInstance->internalTransportReferenceIdIdDownloadLatestLabelGet($id);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferenceIdIdDownloadLatestLabelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`, `image/png`, `application/pdf`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferenceIdIdGet()`

```php
internalTransportReferenceIdIdGet($id): \kruegge82\weclapp\Model\InternalTransportReference
```



query internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferenceIdIdPut()`

```php
internalTransportReferenceIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\InternalTransportReference
```



update internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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
$body = new \kruegge82\weclapp\Model\InternalTransportReference(); // \kruegge82\weclapp\Model\InternalTransportReference
$dry_run = True; // bool

try {
    $result = $apiInstance->internalTransportReferenceIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferenceIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\InternalTransportReference**](../Model/InternalTransportReference.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InternalTransportReference**](../Model/InternalTransportReference.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `internalTransportReferencePost()`

```php
internalTransportReferencePost($body, $dry_run): \kruegge82\weclapp\Model\InternalTransportReference
```



create a internalTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InternalTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\InternalTransportReference(); // \kruegge82\weclapp\Model\InternalTransportReference
$dry_run = True; // bool

try {
    $result = $apiInstance->internalTransportReferencePost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalTransportReferenceApi->internalTransportReferencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\InternalTransportReference**](../Model/InternalTransportReference.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InternalTransportReference**](../Model/InternalTransportReference.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
