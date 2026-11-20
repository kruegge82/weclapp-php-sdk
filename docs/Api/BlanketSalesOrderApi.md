# kruegge82\weclapp\BlanketSalesOrderApi



All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blanketSalesOrderCountGet()**](BlanketSalesOrderApi.md#blanketSalesOrderCountGet) | **GET** /blanketSalesOrder/count | count blanketSalesOrder |
| [**blanketSalesOrderGet()**](BlanketSalesOrderApi.md#blanketSalesOrderGet) | **GET** /blanketSalesOrder | query blanketSalesOrder |
| [**blanketSalesOrderIdIdDelete()**](BlanketSalesOrderApi.md#blanketSalesOrderIdIdDelete) | **DELETE** /blanketSalesOrder/id/{id} | delete a blanketSalesOrder |
| [**blanketSalesOrderIdIdDownloadLatestBlanketSalesOrderPdfGet()**](BlanketSalesOrderApi.md#blanketSalesOrderIdIdDownloadLatestBlanketSalesOrderPdfGet) | **GET** /blanketSalesOrder/id/{id}/downloadLatestBlanketSalesOrderPdf |  |
| [**blanketSalesOrderIdIdGenerateReleasesPost()**](BlanketSalesOrderApi.md#blanketSalesOrderIdIdGenerateReleasesPost) | **POST** /blanketSalesOrder/id/{id}/generateReleases |  |
| [**blanketSalesOrderIdIdGet()**](BlanketSalesOrderApi.md#blanketSalesOrderIdIdGet) | **GET** /blanketSalesOrder/id/{id} | query a specific blanketSalesOrder |
| [**blanketSalesOrderIdIdPut()**](BlanketSalesOrderApi.md#blanketSalesOrderIdIdPut) | **PUT** /blanketSalesOrder/id/{id} | update a blanketSalesOrder |
| [**blanketSalesOrderIdIdUpdateStatusPost()**](BlanketSalesOrderApi.md#blanketSalesOrderIdIdUpdateStatusPost) | **POST** /blanketSalesOrder/id/{id}/updateStatus |  |
| [**blanketSalesOrderPost()**](BlanketSalesOrderApi.md#blanketSalesOrderPost) | **POST** /blanketSalesOrder | create a blanketSalesOrder |


## `blanketSalesOrderCountGet()`

```php
blanketSalesOrderCountGet($filter): \kruegge82\weclapp\Model\InlineObject33
```

count blanketSalesOrder

count blanketSalesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketSalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->blanketSalesOrderCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketSalesOrderApi->blanketSalesOrderCountGet: ', $e->getMessage(), PHP_EOL;
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

## `blanketSalesOrderGet()`

```php
blanketSalesOrderGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\InlineObject17
```

query blanketSalesOrder

query blanketSalesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketSalesOrderApi(
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
    $result = $apiInstance->blanketSalesOrderGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketSalesOrderApi->blanketSalesOrderGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\InlineObject17**](../Model/InlineObject17.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketSalesOrderIdIdDelete()`

```php
blanketSalesOrderIdIdDelete($id, $dry_run)
```

delete a blanketSalesOrder

delete a blanketSalesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketSalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->blanketSalesOrderIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling BlanketSalesOrderApi->blanketSalesOrderIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `blanketSalesOrderIdIdDownloadLatestBlanketSalesOrderPdfGet()`

```php
blanketSalesOrderIdIdDownloadLatestBlanketSalesOrderPdfGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketSalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->blanketSalesOrderIdIdDownloadLatestBlanketSalesOrderPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketSalesOrderApi->blanketSalesOrderIdIdDownloadLatestBlanketSalesOrderPdfGet: ', $e->getMessage(), PHP_EOL;
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

## `blanketSalesOrderIdIdGenerateReleasesPost()`

```php
blanketSalesOrderIdIdGenerateReleasesPost($id, $blanket_purchase_order_id_id_generate_releases_post_request): \kruegge82\weclapp\Model\BlanketSalesOrderIdIdGenerateReleasesPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketSalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$blanket_purchase_order_id_id_generate_releases_post_request = new \kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostRequest(); // \kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostRequest

try {
    $result = $apiInstance->blanketSalesOrderIdIdGenerateReleasesPost($id, $blanket_purchase_order_id_id_generate_releases_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketSalesOrderApi->blanketSalesOrderIdIdGenerateReleasesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **blanket_purchase_order_id_id_generate_releases_post_request** | [**\kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPostRequest**](../Model/BlanketPurchaseOrderIdIdGenerateReleasesPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\BlanketSalesOrderIdIdGenerateReleasesPost200Response**](../Model/BlanketSalesOrderIdIdGenerateReleasesPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketSalesOrderIdIdGet()`

```php
blanketSalesOrderIdIdGet($id): \kruegge82\weclapp\Model\BlanketSalesOrder
```

query a specific blanketSalesOrder

query a specific blanketSalesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketSalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->blanketSalesOrderIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketSalesOrderApi->blanketSalesOrderIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\BlanketSalesOrder**](../Model/BlanketSalesOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketSalesOrderIdIdPut()`

```php
blanketSalesOrderIdIdPut($id, $blanket_sales_order, $dry_run): \kruegge82\weclapp\Model\BlanketSalesOrder
```

update a blanketSalesOrder

update blanketSalesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketSalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$blanket_sales_order = new \kruegge82\weclapp\Model\BlanketSalesOrder(); // \kruegge82\weclapp\Model\BlanketSalesOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->blanketSalesOrderIdIdPut($id, $blanket_sales_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketSalesOrderApi->blanketSalesOrderIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **blanket_sales_order** | [**\kruegge82\weclapp\Model\BlanketSalesOrder**](../Model/BlanketSalesOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BlanketSalesOrder**](../Model/BlanketSalesOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketSalesOrderIdIdUpdateStatusPost()`

```php
blanketSalesOrderIdIdUpdateStatusPost($id, $blanket_sales_order_id_id_update_status_post_request): \kruegge82\weclapp\Model\BlanketSalesOrderIdIdGenerateReleasesPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketSalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$blanket_sales_order_id_id_update_status_post_request = new \kruegge82\weclapp\Model\BlanketSalesOrderIdIdUpdateStatusPostRequest(); // \kruegge82\weclapp\Model\BlanketSalesOrderIdIdUpdateStatusPostRequest

try {
    $result = $apiInstance->blanketSalesOrderIdIdUpdateStatusPost($id, $blanket_sales_order_id_id_update_status_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketSalesOrderApi->blanketSalesOrderIdIdUpdateStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **blanket_sales_order_id_id_update_status_post_request** | [**\kruegge82\weclapp\Model\BlanketSalesOrderIdIdUpdateStatusPostRequest**](../Model/BlanketSalesOrderIdIdUpdateStatusPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\BlanketSalesOrderIdIdGenerateReleasesPost200Response**](../Model/BlanketSalesOrderIdIdGenerateReleasesPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blanketSalesOrderPost()`

```php
blanketSalesOrderPost($blanket_sales_order, $dry_run): \kruegge82\weclapp\Model\BlanketSalesOrder
```

create a blanketSalesOrder

create a blanketSalesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\BlanketSalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blanket_sales_order = new \kruegge82\weclapp\Model\BlanketSalesOrder(); // \kruegge82\weclapp\Model\BlanketSalesOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->blanketSalesOrderPost($blanket_sales_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlanketSalesOrderApi->blanketSalesOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blanket_sales_order** | [**\kruegge82\weclapp\Model\BlanketSalesOrder**](../Model/BlanketSalesOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\BlanketSalesOrder**](../Model/BlanketSalesOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
