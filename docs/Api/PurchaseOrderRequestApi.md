# kruegge82\weclapp\PurchaseOrderRequestApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOrderRequestCountGet()**](PurchaseOrderRequestApi.md#purchaseOrderRequestCountGet) | **GET** /purchaseOrderRequest/count |  |
| [**purchaseOrderRequestGet()**](PurchaseOrderRequestApi.md#purchaseOrderRequestGet) | **GET** /purchaseOrderRequest |  |
| [**purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost) | **POST** /purchaseOrderRequest/id/{id}/createBlanketPurchaseOrder |  |
| [**purchaseOrderRequestIdIdCreatePurchaseOrderPost()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdCreatePurchaseOrderPost) | **POST** /purchaseOrderRequest/id/{id}/createPurchaseOrder |  |
| [**purchaseOrderRequestIdIdDelete()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdDelete) | **DELETE** /purchaseOrderRequest/id/{id} |  |
| [**purchaseOrderRequestIdIdExportItemsAsCsvPost()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdExportItemsAsCsvPost) | **POST** /purchaseOrderRequest/id/{id}/exportItemsAsCsv |  |
| [**purchaseOrderRequestIdIdGet()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdGet) | **GET** /purchaseOrderRequest/id/{id} |  |
| [**purchaseOrderRequestIdIdPushPurchasePricesPost()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdPushPurchasePricesPost) | **POST** /purchaseOrderRequest/id/{id}/pushPurchasePrices |  |
| [**purchaseOrderRequestIdIdPut()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdPut) | **PUT** /purchaseOrderRequest/id/{id} |  |
| [**purchaseOrderRequestPost()**](PurchaseOrderRequestApi.md#purchaseOrderRequestPost) | **POST** /purchaseOrderRequest |  |


## `purchaseOrderRequestCountGet()`

```php
purchaseOrderRequestCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->purchaseOrderRequestCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestCountGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrderRequestGet()`

```php
purchaseOrderRequestGet($page, $page_size, $sort): \kruegge82\weclapp\Model\PurchaseOrderRequestGet200Response
```



query purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->purchaseOrderRequestGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrderRequestGet200Response**](../Model/PurchaseOrderRequestGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost()`

```php
purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost($id, $body): \kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostRequest

try {
    $result = $apiInstance->purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostRequest**](../Model/PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostRequest.md)|  | |

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

## `purchaseOrderRequestIdIdCreatePurchaseOrderPost()`

```php
purchaseOrderRequestIdIdCreatePurchaseOrderPost($id, $body): \kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest

try {
    $result = $apiInstance->purchaseOrderRequestIdIdCreatePurchaseOrderPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdCreatePurchaseOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest**](../Model/PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response**](../Model/PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderRequestIdIdDelete()`

```php
purchaseOrderRequestIdIdDelete($id, $dry_run)
```



delete a purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->purchaseOrderRequestIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrderRequestIdIdExportItemsAsCsvPost()`

```php
purchaseOrderRequestIdIdExportItemsAsCsvPost($id, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostRequest

try {
    $apiInstance->purchaseOrderRequestIdIdExportItemsAsCsvPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdExportItemsAsCsvPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostRequest**](../Model/PurchaseOrderRequestIdIdExportItemsAsCsvPostRequest.md)|  | |

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

## `purchaseOrderRequestIdIdGet()`

```php
purchaseOrderRequestIdIdGet($id): \kruegge82\weclapp\Model\PurchaseOrderRequest
```



query purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->purchaseOrderRequestIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrderRequest**](../Model/PurchaseOrderRequest.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderRequestIdIdPushPurchasePricesPost()`

```php
purchaseOrderRequestIdIdPushPurchasePricesPost($id, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdPushPurchasePricesPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdPushPurchasePricesPostRequest

try {
    $apiInstance->purchaseOrderRequestIdIdPushPurchasePricesPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdPushPurchasePricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestIdIdPushPurchasePricesPostRequest**](../Model/PurchaseOrderRequestIdIdPushPurchasePricesPostRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderRequestIdIdPut()`

```php
purchaseOrderRequestIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\PurchaseOrderRequest
```



update purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\PurchaseOrderRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequest
$dry_run = True; // bool

try {
    $result = $apiInstance->purchaseOrderRequestIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\PurchaseOrderRequest**](../Model/PurchaseOrderRequest.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrderRequest**](../Model/PurchaseOrderRequest.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderRequestPost()`

```php
purchaseOrderRequestPost($body, $dry_run): \kruegge82\weclapp\Model\PurchaseOrderRequest
```



create a purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\PurchaseOrderRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequest
$dry_run = True; // bool

try {
    $result = $apiInstance->purchaseOrderRequestPost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\PurchaseOrderRequest**](../Model/PurchaseOrderRequest.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrderRequest**](../Model/PurchaseOrderRequest.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
