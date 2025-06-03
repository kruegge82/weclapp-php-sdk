# kruegge82\weclapp\BlanketPurchaseOrderApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blanketPurchaseOrderCountGet()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderCountGet) | **GET** /blanketPurchaseOrder/count |  |
| [**blanketPurchaseOrderGet()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderGet) | **GET** /blanketPurchaseOrder |  |
| [**blanketPurchaseOrderIdIdDelete()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderIdIdDelete) | **DELETE** /blanketPurchaseOrder/id/{id} |  |
| [**blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet) | **GET** /blanketPurchaseOrder/id/{id}/downloadLatestBlanketPurchaseOrderPdf |  |
| [**blanketPurchaseOrderIdIdGenerateReleasesPost()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderIdIdGenerateReleasesPost) | **POST** /blanketPurchaseOrder/id/{id}/generateReleases |  |
| [**blanketPurchaseOrderIdIdGet()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderIdIdGet) | **GET** /blanketPurchaseOrder/id/{id} |  |
| [**blanketPurchaseOrderIdIdPut()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderIdIdPut) | **PUT** /blanketPurchaseOrder/id/{id} |  |
| [**blanketPurchaseOrderPost()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderPost) | **POST** /blanketPurchaseOrder |  |


## `blanketPurchaseOrderCountGet()`

```php
blanketPurchaseOrderCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->blanketPurchaseOrderCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderCountGet: ', $e->getMessage(), PHP_EOL;
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

## `blanketPurchaseOrderGet()`

```php
blanketPurchaseOrderGet($page, $page_size, $sort): \kruegge82\weclapp\Model\BlanketPurchaseOrderGet200Response
```



query blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->blanketPurchaseOrderGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BlanketPurchaseOrderGet200Response**](../Model/BlanketPurchaseOrderGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketPurchaseOrderIdIdDelete()`

```php
blanketPurchaseOrderIdIdDelete($id, $dry_run)
```



delete a blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->blanketPurchaseOrderIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet()`

```php
blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet($id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet($id);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet: ', $e->getMessage(), PHP_EOL;
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

## `blanketPurchaseOrderIdIdGenerateReleasesPost()`

```php
blanketPurchaseOrderIdIdGenerateReleasesPost($id, $body): \kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostRequest(); // \kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostRequest

try {
    $result = $apiInstance->blanketPurchaseOrderIdIdGenerateReleasesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderIdIdGenerateReleasesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostRequest**](../Model/BlanketPurchaseOrderIdIdGenerateReleasesPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPost200Response**](../Model/BlanketPurchaseOrderIdIdGenerateReleasesPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketPurchaseOrderIdIdGet()`

```php
blanketPurchaseOrderIdIdGet($id): \kruegge82\weclapp\Model\BlanketPurchaseOrder
```



query blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->blanketPurchaseOrderIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\BlanketPurchaseOrder**](../Model/BlanketPurchaseOrder.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketPurchaseOrderIdIdPut()`

```php
blanketPurchaseOrderIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\BlanketPurchaseOrder
```



update blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\BlanketPurchaseOrder(); // \kruegge82\weclapp\Model\BlanketPurchaseOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->blanketPurchaseOrderIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\BlanketPurchaseOrder**](../Model/BlanketPurchaseOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BlanketPurchaseOrder**](../Model/BlanketPurchaseOrder.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketPurchaseOrderPost()`

```php
blanketPurchaseOrderPost($body, $dry_run): \kruegge82\weclapp\Model\BlanketPurchaseOrder
```



create a blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\BlanketPurchaseOrder(); // \kruegge82\weclapp\Model\BlanketPurchaseOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->blanketPurchaseOrderPost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\BlanketPurchaseOrder**](../Model/BlanketPurchaseOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BlanketPurchaseOrder**](../Model/BlanketPurchaseOrder.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
