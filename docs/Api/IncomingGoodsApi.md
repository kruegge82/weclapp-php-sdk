# kruegge82\weclapp\IncomingGoodsApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**incomingGoodsCountGet()**](IncomingGoodsApi.md#incomingGoodsCountGet) | **GET** /incomingGoods/count | count incomingGoods |
| [**incomingGoodsGet()**](IncomingGoodsApi.md#incomingGoodsGet) | **GET** /incomingGoods | query incomingGoods |
| [**incomingGoodsIdIdAddPurchaseOrdersPost()**](IncomingGoodsApi.md#incomingGoodsIdIdAddPurchaseOrdersPost) | **POST** /incomingGoods/id/{id}/addPurchaseOrders |  |
| [**incomingGoodsIdIdCreateCompensationShipmentPost()**](IncomingGoodsApi.md#incomingGoodsIdIdCreateCompensationShipmentPost) | **POST** /incomingGoods/id/{id}/createCompensationShipment |  |
| [**incomingGoodsIdIdCreateCreditNotePost()**](IncomingGoodsApi.md#incomingGoodsIdIdCreateCreditNotePost) | **POST** /incomingGoods/id/{id}/createCreditNote |  |
| [**incomingGoodsIdIdCreatePurchaseInvoicePost()**](IncomingGoodsApi.md#incomingGoodsIdIdCreatePurchaseInvoicePost) | **POST** /incomingGoods/id/{id}/createPurchaseInvoice |  |
| [**incomingGoodsIdIdCreateReturnLabelsPost()**](IncomingGoodsApi.md#incomingGoodsIdIdCreateReturnLabelsPost) | **POST** /incomingGoods/id/{id}/createReturnLabels |  |
| [**incomingGoodsIdIdCreateSupplierReturnPost()**](IncomingGoodsApi.md#incomingGoodsIdIdCreateSupplierReturnPost) | **POST** /incomingGoods/id/{id}/createSupplierReturn |  |
| [**incomingGoodsIdIdDelete()**](IncomingGoodsApi.md#incomingGoodsIdIdDelete) | **DELETE** /incomingGoods/id/{id} | delete a incomingGoods |
| [**incomingGoodsIdIdGet()**](IncomingGoodsApi.md#incomingGoodsIdIdGet) | **GET** /incomingGoods/id/{id} | query a specific incomingGoods |
| [**incomingGoodsIdIdIncomingBookingsGet()**](IncomingGoodsApi.md#incomingGoodsIdIdIncomingBookingsGet) | **GET** /incomingGoods/id/{id}/incomingBookings |  |
| [**incomingGoodsIdIdPut()**](IncomingGoodsApi.md#incomingGoodsIdIdPut) | **PUT** /incomingGoods/id/{id} | update a incomingGoods |
| [**incomingGoodsIdIdUpdateIncomingBookingsPost()**](IncomingGoodsApi.md#incomingGoodsIdIdUpdateIncomingBookingsPost) | **POST** /incomingGoods/id/{id}/updateIncomingBookings |  |
| [**incomingGoodsPost()**](IncomingGoodsApi.md#incomingGoodsPost) | **POST** /incomingGoods | create a incomingGoods |


## `incomingGoodsCountGet()`

```php
incomingGoodsCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count incomingGoods

count incomingGoods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->incomingGoodsCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsCountGet: ', $e->getMessage(), PHP_EOL;
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

## `incomingGoodsGet()`

```php
incomingGoodsGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\IncomingGoodsGet200Response
```

query incomingGoods

query incomingGoods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
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
    $result = $apiInstance->incomingGoodsGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\IncomingGoodsGet200Response**](../Model/IncomingGoodsGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsIdIdAddPurchaseOrdersPost()`

```php
incomingGoodsIdIdAddPurchaseOrdersPost($id, $incoming_goods_id_id_add_purchase_orders_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$incoming_goods_id_id_add_purchase_orders_post_request = new \kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPostRequest(); // \kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPostRequest

try {
    $result = $apiInstance->incomingGoodsIdIdAddPurchaseOrdersPost($id, $incoming_goods_id_id_add_purchase_orders_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdAddPurchaseOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **incoming_goods_id_id_add_purchase_orders_post_request** | [**\kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPostRequest**](../Model/IncomingGoodsIdIdAddPurchaseOrdersPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPost200Response**](../Model/IncomingGoodsIdIdAddPurchaseOrdersPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsIdIdCreateCompensationShipmentPost()`

```php
incomingGoodsIdIdCreateCompensationShipmentPost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->incomingGoodsIdIdCreateCompensationShipmentPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdCreateCompensationShipmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response**](../Model/IncomingGoodsIdIdCreateCompensationShipmentPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsIdIdCreateCreditNotePost()`

```php
incomingGoodsIdIdCreateCreditNotePost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->incomingGoodsIdIdCreateCreditNotePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdCreateCreditNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response**](../Model/IncomingGoodsIdIdCreateCreditNotePost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsIdIdCreatePurchaseInvoicePost()`

```php
incomingGoodsIdIdCreatePurchaseInvoicePost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->incomingGoodsIdIdCreatePurchaseInvoicePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdCreatePurchaseInvoicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response**](../Model/IncomingGoodsIdIdCreatePurchaseInvoicePost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsIdIdCreateReturnLabelsPost()`

```php
incomingGoodsIdIdCreateReturnLabelsPost($id, $body): \kruegge82\weclapp\Model\DocumentGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->incomingGoodsIdIdCreateReturnLabelsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdCreateReturnLabelsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\DocumentGet200Response**](../Model/DocumentGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsIdIdCreateSupplierReturnPost()`

```php
incomingGoodsIdIdCreateSupplierReturnPost($id, $incoming_goods_id_id_create_supplier_return_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$incoming_goods_id_id_create_supplier_return_post_request = new \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateSupplierReturnPostRequest(); // \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateSupplierReturnPostRequest

try {
    $result = $apiInstance->incomingGoodsIdIdCreateSupplierReturnPost($id, $incoming_goods_id_id_create_supplier_return_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdCreateSupplierReturnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **incoming_goods_id_id_create_supplier_return_post_request** | [**\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateSupplierReturnPostRequest**](../Model/IncomingGoodsIdIdCreateSupplierReturnPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response**](../Model/IncomingGoodsIdIdCreateCompensationShipmentPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsIdIdDelete()`

```php
incomingGoodsIdIdDelete($id, $dry_run)
```

delete a incomingGoods

delete a incomingGoods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->incomingGoodsIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `incomingGoodsIdIdGet()`

```php
incomingGoodsIdIdGet($id): \kruegge82\weclapp\Model\IncomingGoods
```

query a specific incomingGoods

query a specific incomingGoods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->incomingGoodsIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoods**](../Model/IncomingGoods.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsIdIdIncomingBookingsGet()`

```php
incomingGoodsIdIdIncomingBookingsGet($id): \kruegge82\weclapp\Model\IncomingGoodsIdIdIncomingBookingsGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->incomingGoodsIdIdIncomingBookingsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdIncomingBookingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdIncomingBookingsGet200Response**](../Model/IncomingGoodsIdIdIncomingBookingsGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsIdIdPut()`

```php
incomingGoodsIdIdPut($id, $incoming_goods, $dry_run): \kruegge82\weclapp\Model\IncomingGoods
```

update a incomingGoods

update incomingGoods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$incoming_goods = new \kruegge82\weclapp\Model\IncomingGoods(); // \kruegge82\weclapp\Model\IncomingGoods
$dry_run = True; // bool

try {
    $result = $apiInstance->incomingGoodsIdIdPut($id, $incoming_goods, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **incoming_goods** | [**\kruegge82\weclapp\Model\IncomingGoods**](../Model/IncomingGoods.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoods**](../Model/IncomingGoods.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsIdIdUpdateIncomingBookingsPost()`

```php
incomingGoodsIdIdUpdateIncomingBookingsPost($id, $incoming_goods_id_id_update_incoming_bookings_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdIncomingBookingsGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$incoming_goods_id_id_update_incoming_bookings_post_request = new \kruegge82\weclapp\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostRequest(); // \kruegge82\weclapp\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostRequest

try {
    $result = $apiInstance->incomingGoodsIdIdUpdateIncomingBookingsPost($id, $incoming_goods_id_id_update_incoming_bookings_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsIdIdUpdateIncomingBookingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **incoming_goods_id_id_update_incoming_bookings_post_request** | [**\kruegge82\weclapp\Model\IncomingGoodsIdIdUpdateIncomingBookingsPostRequest**](../Model/IncomingGoodsIdIdUpdateIncomingBookingsPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoodsIdIdIncomingBookingsGet200Response**](../Model/IncomingGoodsIdIdIncomingBookingsGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingGoodsPost()`

```php
incomingGoodsPost($incoming_goods, $dry_run): \kruegge82\weclapp\Model\IncomingGoods
```

create a incomingGoods

create a incomingGoods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\IncomingGoodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incoming_goods = new \kruegge82\weclapp\Model\IncomingGoods(); // \kruegge82\weclapp\Model\IncomingGoods
$dry_run = True; // bool

try {
    $result = $apiInstance->incomingGoodsPost($incoming_goods, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingGoodsApi->incomingGoodsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incoming_goods** | [**\kruegge82\weclapp\Model\IncomingGoods**](../Model/IncomingGoods.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\IncomingGoods**](../Model/IncomingGoods.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
