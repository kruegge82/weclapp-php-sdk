# kruegge82\weclapp\PurchaseOrderRequestApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOrderRequestCountGet()**](PurchaseOrderRequestApi.md#purchaseOrderRequestCountGet) | **GET** /purchaseOrderRequest/count | count purchaseOrderRequest |
| [**purchaseOrderRequestGet()**](PurchaseOrderRequestApi.md#purchaseOrderRequestGet) | **GET** /purchaseOrderRequest | query purchaseOrderRequest |
| [**purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost) | **POST** /purchaseOrderRequest/id/{id}/createBlanketPurchaseOrder |  |
| [**purchaseOrderRequestIdIdCreatePurchaseOrderPost()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdCreatePurchaseOrderPost) | **POST** /purchaseOrderRequest/id/{id}/createPurchaseOrder |  |
| [**purchaseOrderRequestIdIdDelete()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdDelete) | **DELETE** /purchaseOrderRequest/id/{id} | delete a purchaseOrderRequest |
| [**purchaseOrderRequestIdIdExportItemsAsCsvPost()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdExportItemsAsCsvPost) | **POST** /purchaseOrderRequest/id/{id}/exportItemsAsCsv |  |
| [**purchaseOrderRequestIdIdGet()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdGet) | **GET** /purchaseOrderRequest/id/{id} | query a specific purchaseOrderRequest |
| [**purchaseOrderRequestIdIdPushPurchasePricesPost()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdPushPurchasePricesPost) | **POST** /purchaseOrderRequest/id/{id}/pushPurchasePrices |  |
| [**purchaseOrderRequestIdIdPut()**](PurchaseOrderRequestApi.md#purchaseOrderRequestIdIdPut) | **PUT** /purchaseOrderRequest/id/{id} | update a purchaseOrderRequest |
| [**purchaseOrderRequestPost()**](PurchaseOrderRequestApi.md#purchaseOrderRequestPost) | **POST** /purchaseOrderRequest | create a purchaseOrderRequest |


## `purchaseOrderRequestCountGet()`

```php
purchaseOrderRequestCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count purchaseOrderRequest

count purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->purchaseOrderRequestCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestCountGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrderRequestGet()`

```php
purchaseOrderRequestGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\PurchaseOrderRequestGet200Response
```

query purchaseOrderRequest

query purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->purchaseOrderRequestGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
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
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrderRequestGet200Response**](../Model/PurchaseOrderRequestGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost()`

```php
purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost($id, $purchase_order_request_id_id_create_blanket_purchase_order_post_request): \kruegge82\weclapp\Model\BlanketPurchaseOrderIdIdGenerateReleasesPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$purchase_order_request_id_id_create_blanket_purchase_order_post_request = new \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostRequest

try {
    $result = $apiInstance->purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost($id, $purchase_order_request_id_id_create_blanket_purchase_order_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdCreateBlanketPurchaseOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_order_request_id_id_create_blanket_purchase_order_post_request** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostRequest**](../Model/PurchaseOrderRequestIdIdCreateBlanketPurchaseOrderPostRequest.md)|  | |

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

## `purchaseOrderRequestIdIdCreatePurchaseOrderPost()`

```php
purchaseOrderRequestIdIdCreatePurchaseOrderPost($id, $purchase_order_request_id_id_create_purchase_order_post_request): \kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$purchase_order_request_id_id_create_purchase_order_post_request = new \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest

try {
    $result = $apiInstance->purchaseOrderRequestIdIdCreatePurchaseOrderPost($id, $purchase_order_request_id_id_create_purchase_order_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdCreatePurchaseOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_order_request_id_id_create_purchase_order_post_request** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest**](../Model/PurchaseOrderRequestIdIdCreatePurchaseOrderPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response**](../Model/PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

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

delete a purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderRequestIdIdExportItemsAsCsvPost()`

```php
purchaseOrderRequestIdIdExportItemsAsCsvPost($id, $purchase_order_request_id_id_export_items_as_csv_post_request): \SplFileObject
```



export purchaseOrderRequest offer to csv  # Endpoint to export the purchase order request offer items for a supplier to a comma-separated values (CSV) file.  ## Explanation of the `supplierId` parameter The `supplierId` parameter is used to get the specific purchase order request offer. If the supplier does not exist or does not have an offer in the purchase order request, an error will be thrown.  It is only possible to create a CSV file if the purchaseOrderRequest status is not `CANCELLED` or `CLOSED`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$purchase_order_request_id_id_export_items_as_csv_post_request = new \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostRequest

try {
    $result = $apiInstance->purchaseOrderRequestIdIdExportItemsAsCsvPost($id, $purchase_order_request_id_id_export_items_as_csv_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdExportItemsAsCsvPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_order_request_id_id_export_items_as_csv_post_request** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestIdIdExportItemsAsCsvPostRequest**](../Model/PurchaseOrderRequestIdIdExportItemsAsCsvPostRequest.md)|  | |

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

## `purchaseOrderRequestIdIdGet()`

```php
purchaseOrderRequestIdIdGet($id): \kruegge82\weclapp\Model\PurchaseOrderRequest
```

query a specific purchaseOrderRequest

query a specific purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderRequestIdIdPushPurchasePricesPost()`

```php
purchaseOrderRequestIdIdPushPurchasePricesPost($id, $purchase_order_request_id_id_push_purchase_prices_post_request)
```



transfer offer item prices to supply sources  # Endpoint for transferring the purchase order request offer item prices to the corresponding supply sources  When creating a purchase order from a purchase order request (`/purchaseOrderRequest/id/:id/createPurchaseOrder`), it is possible to update the supply sources of the accepted article items with the offer item prices of the respective supplier. With the present endpoint, this can be done without the need to accept items or to create a purchase order.  Restrictions: * The purchase order request must not be in one of the following status: `NEW`, `DOCUMENT_PRINTED`, `CANCELLED`. * Unavailable items and items without article are skipped. This means that the offer for a given supplier must contain at least one available item with an article.  If the price of an item with article `A` from an offer of supplier `S` is transferred and `A` has no supply source at `S`, it will be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$purchase_order_request_id_id_push_purchase_prices_post_request = new \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdPushPurchasePricesPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequestIdIdPushPurchasePricesPostRequest

try {
    $apiInstance->purchaseOrderRequestIdIdPushPurchasePricesPost($id, $purchase_order_request_id_id_push_purchase_prices_post_request);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdPushPurchasePricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_order_request_id_id_push_purchase_prices_post_request** | [**\kruegge82\weclapp\Model\PurchaseOrderRequestIdIdPushPurchasePricesPostRequest**](../Model/PurchaseOrderRequestIdIdPushPurchasePricesPostRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderRequestIdIdPut()`

```php
purchaseOrderRequestIdIdPut($id, $purchase_order_request, $dry_run): \kruegge82\weclapp\Model\PurchaseOrderRequest
```

update a purchaseOrderRequest

update purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
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
$purchase_order_request = new \kruegge82\weclapp\Model\PurchaseOrderRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequest
$dry_run = True; // bool

try {
    $result = $apiInstance->purchaseOrderRequestIdIdPut($id, $purchase_order_request, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_order_request** | [**\kruegge82\weclapp\Model\PurchaseOrderRequest**](../Model/PurchaseOrderRequest.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrderRequest**](../Model/PurchaseOrderRequest.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderRequestPost()`

```php
purchaseOrderRequestPost($purchase_order_request, $dry_run): \kruegge82\weclapp\Model\PurchaseOrderRequest
```

create a purchaseOrderRequest

create a purchaseOrderRequest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order_request = new \kruegge82\weclapp\Model\PurchaseOrderRequest(); // \kruegge82\weclapp\Model\PurchaseOrderRequest
$dry_run = True; // bool

try {
    $result = $apiInstance->purchaseOrderRequestPost($purchase_order_request, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderRequestApi->purchaseOrderRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order_request** | [**\kruegge82\weclapp\Model\PurchaseOrderRequest**](../Model/PurchaseOrderRequest.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrderRequest**](../Model/PurchaseOrderRequest.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
