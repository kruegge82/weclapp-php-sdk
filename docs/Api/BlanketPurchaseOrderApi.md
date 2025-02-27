# kruegge82\weclapp\BlanketPurchaseOrderApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blanketPurchaseOrderCountGet()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderCountGet) | **GET** /blanketPurchaseOrder/count | count blanketPurchaseOrder |
| [**blanketPurchaseOrderGet()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderGet) | **GET** /blanketPurchaseOrder | query blanketPurchaseOrder |
| [**blanketPurchaseOrderIdIdDelete()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderIdIdDelete) | **DELETE** /blanketPurchaseOrder/id/{id} | delete a blanketPurchaseOrder |
| [**blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet) | **GET** /blanketPurchaseOrder/id/{id}/downloadLatestBlanketPurchaseOrderPdf |  |
| [**blanketPurchaseOrderIdIdGenerateReleasesPost()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderIdIdGenerateReleasesPost) | **POST** /blanketPurchaseOrder/id/{id}/generateReleases |  |
| [**blanketPurchaseOrderIdIdGet()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderIdIdGet) | **GET** /blanketPurchaseOrder/id/{id} | query a specific blanketPurchaseOrder |
| [**blanketPurchaseOrderIdIdPut()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderIdIdPut) | **PUT** /blanketPurchaseOrder/id/{id} | update a blanketPurchaseOrder |
| [**blanketPurchaseOrderPost()**](BlanketPurchaseOrderApi.md#blanketPurchaseOrderPost) | **POST** /blanketPurchaseOrder | create a blanketPurchaseOrder |


## `blanketPurchaseOrderCountGet()`

```php
blanketPurchaseOrderCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count blanketPurchaseOrder

count blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->blanketPurchaseOrderCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderCountGet: ', $e->getMessage(), PHP_EOL;
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

## `blanketPurchaseOrderGet()`

```php
blanketPurchaseOrderGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\BlanketPurchaseOrderGet200Response
```

query blanketPurchaseOrder

query blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->blanketPurchaseOrderGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
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
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BlanketPurchaseOrderGet200Response**](../Model/BlanketPurchaseOrderGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

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

delete a blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet()`

```php
blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
    $result = $apiInstance->blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderIdIdDownloadLatestBlanketPurchaseOrderPdfGet: ', $e->getMessage(), PHP_EOL;
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

## `blanketPurchaseOrderIdIdGenerateReleasesPost()`

```php
blanketPurchaseOrderIdIdGenerateReleasesPost($id, $blanket_purchase_order_id_id_generate_releases_post_request): \kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$blanket_purchase_order_id_id_generate_releases_post_request = new \kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostRequest(); // \kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostRequest

try {
    $result = $apiInstance->blanketPurchaseOrderIdIdGenerateReleasesPost($id, $blanket_purchase_order_id_id_generate_releases_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderIdIdGenerateReleasesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **blanket_purchase_order_id_id_generate_releases_post_request** | [**\kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostRequest**](../Model/BlanketPurchaseOrderIdIdGenerateReleasesPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPost200Response**](../Model/BlanketPurchaseOrderIdIdGenerateReleasesPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

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

query a specific blanketPurchaseOrder

query a specific blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketPurchaseOrderIdIdPut()`

```php
blanketPurchaseOrderIdIdPut($id, $blanket_purchase_order, $dry_run): \kruegge82\weclapp\Model\BlanketPurchaseOrder
```

update a blanketPurchaseOrder

update blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$blanket_purchase_order = new \kruegge82\weclapp\Model\BlanketPurchaseOrder(); // \kruegge82\weclapp\Model\BlanketPurchaseOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->blanketPurchaseOrderIdIdPut($id, $blanket_purchase_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **blanket_purchase_order** | [**\kruegge82\weclapp\Model\BlanketPurchaseOrder**](../Model/BlanketPurchaseOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BlanketPurchaseOrder**](../Model/BlanketPurchaseOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketPurchaseOrderPost()`

```php
blanketPurchaseOrderPost($blanket_purchase_order, $dry_run): \kruegge82\weclapp\Model\BlanketPurchaseOrder
```

create a blanketPurchaseOrder

create a blanketPurchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketPurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blanket_purchase_order = new \kruegge82\weclapp\Model\BlanketPurchaseOrder(); // \kruegge82\weclapp\Model\BlanketPurchaseOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->blanketPurchaseOrderPost($blanket_purchase_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketPurchaseOrderApi->blanketPurchaseOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blanket_purchase_order** | [**\kruegge82\weclapp\Model\BlanketPurchaseOrder**](../Model/BlanketPurchaseOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BlanketPurchaseOrder**](../Model/BlanketPurchaseOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
