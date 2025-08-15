# kruegge82\weclapp\ProductionOrderApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productionOrderCountGet()**](ProductionOrderApi.md#productionOrderCountGet) | **GET** /productionOrder/count | count productionOrder |
| [**productionOrderFastProductionBookingPost()**](ProductionOrderApi.md#productionOrderFastProductionBookingPost) | **POST** /productionOrder/fastProductionBooking |  |
| [**productionOrderGet()**](ProductionOrderApi.md#productionOrderGet) | **GET** /productionOrder | query productionOrder |
| [**productionOrderIdIdCreatePickingListPost()**](ProductionOrderApi.md#productionOrderIdIdCreatePickingListPost) | **POST** /productionOrder/id/{id}/createPickingList |  |
| [**productionOrderIdIdDelete()**](ProductionOrderApi.md#productionOrderIdIdDelete) | **DELETE** /productionOrder/id/{id} | delete a productionOrder |
| [**productionOrderIdIdDownloadLatestProductionOrderPdfGet()**](ProductionOrderApi.md#productionOrderIdIdDownloadLatestProductionOrderPdfGet) | **GET** /productionOrder/id/{id}/downloadLatestProductionOrderPdf |  |
| [**productionOrderIdIdGet()**](ProductionOrderApi.md#productionOrderIdIdGet) | **GET** /productionOrder/id/{id} | query a specific productionOrder |
| [**productionOrderIdIdPut()**](ProductionOrderApi.md#productionOrderIdIdPut) | **PUT** /productionOrder/id/{id} | update a productionOrder |
| [**productionOrderPost()**](ProductionOrderApi.md#productionOrderPost) | **POST** /productionOrder | create a productionOrder |


## `productionOrderCountGet()`

```php
productionOrderCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count productionOrder

count productionOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->productionOrderCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionOrderApi->productionOrderCountGet: ', $e->getMessage(), PHP_EOL;
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

## `productionOrderFastProductionBookingPost()`

```php
productionOrderFastProductionBookingPost($production_order_fast_production_booking_post_request): \kruegge82\weclapp\Model\ProductionOrderFastProductionBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_order_fast_production_booking_post_request = new \kruegge82\weclapp\Model\ProductionOrderFastProductionBookingPostRequest(); // \kruegge82\weclapp\Model\ProductionOrderFastProductionBookingPostRequest

try {
    $result = $apiInstance->productionOrderFastProductionBookingPost($production_order_fast_production_booking_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionOrderApi->productionOrderFastProductionBookingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **production_order_fast_production_booking_post_request** | [**\kruegge82\weclapp\Model\ProductionOrderFastProductionBookingPostRequest**](../Model/ProductionOrderFastProductionBookingPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\ProductionOrderFastProductionBookingPost200Response**](../Model/ProductionOrderFastProductionBookingPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionOrderGet()`

```php
productionOrderGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties): \kruegge82\weclapp\Model\ProductionOrderGet200Response
```

query productionOrder

query productionOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionOrderApi(
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
    $result = $apiInstance->productionOrderGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionOrderApi->productionOrderGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\ProductionOrderGet200Response**](../Model/ProductionOrderGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionOrderIdIdCreatePickingListPost()`

```php
productionOrderIdIdCreatePickingListPost($id, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->productionOrderIdIdCreatePickingListPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionOrderApi->productionOrderIdIdCreatePickingListPost: ', $e->getMessage(), PHP_EOL;
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

## `productionOrderIdIdDelete()`

```php
productionOrderIdIdDelete($id, $dry_run)
```

delete a productionOrder

delete a productionOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->productionOrderIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ProductionOrderApi->productionOrderIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `productionOrderIdIdDownloadLatestProductionOrderPdfGet()`

```php
productionOrderIdIdDownloadLatestProductionOrderPdfGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->productionOrderIdIdDownloadLatestProductionOrderPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionOrderApi->productionOrderIdIdDownloadLatestProductionOrderPdfGet: ', $e->getMessage(), PHP_EOL;
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

## `productionOrderIdIdGet()`

```php
productionOrderIdIdGet($id): \kruegge82\weclapp\Model\ProductionOrder
```

query a specific productionOrder

query a specific productionOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->productionOrderIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionOrderApi->productionOrderIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ProductionOrder**](../Model/ProductionOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionOrderIdIdPut()`

```php
productionOrderIdIdPut($id, $production_order, $dry_run): \kruegge82\weclapp\Model\ProductionOrder
```

update a productionOrder

update productionOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$production_order = new \kruegge82\weclapp\Model\ProductionOrder(); // \kruegge82\weclapp\Model\ProductionOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->productionOrderIdIdPut($id, $production_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionOrderApi->productionOrderIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **production_order** | [**\kruegge82\weclapp\Model\ProductionOrder**](../Model/ProductionOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProductionOrder**](../Model/ProductionOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionOrderPost()`

```php
productionOrderPost($production_order, $dry_run): \kruegge82\weclapp\Model\ProductionOrder
```

create a productionOrder

create a productionOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$production_order = new \kruegge82\weclapp\Model\ProductionOrder(); // \kruegge82\weclapp\Model\ProductionOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->productionOrderPost($production_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionOrderApi->productionOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **production_order** | [**\kruegge82\weclapp\Model\ProductionOrder**](../Model/ProductionOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProductionOrder**](../Model/ProductionOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
