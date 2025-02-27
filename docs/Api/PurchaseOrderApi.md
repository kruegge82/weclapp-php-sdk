# kruegge82\weclapp\PurchaseOrderApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOrderCountGet()**](PurchaseOrderApi.md#purchaseOrderCountGet) | **GET** /purchaseOrder/count | count purchaseOrder |
| [**purchaseOrderGet()**](PurchaseOrderApi.md#purchaseOrderGet) | **GET** /purchaseOrder | query purchaseOrder |
| [**purchaseOrderIdIdCancelDropshippingShipmentsPost()**](PurchaseOrderApi.md#purchaseOrderIdIdCancelDropshippingShipmentsPost) | **POST** /purchaseOrder/id/{id}/cancelDropshippingShipments |  |
| [**purchaseOrderIdIdCreateContractPost()**](PurchaseOrderApi.md#purchaseOrderIdIdCreateContractPost) | **POST** /purchaseOrder/id/{id}/createContract |  |
| [**purchaseOrderIdIdCreateDropshippingDeliveryNotePdfPost()**](PurchaseOrderApi.md#purchaseOrderIdIdCreateDropshippingDeliveryNotePdfPost) | **POST** /purchaseOrder/id/{id}/createDropshippingDeliveryNotePdf |  |
| [**purchaseOrderIdIdCreateIncomingGoodsPost()**](PurchaseOrderApi.md#purchaseOrderIdIdCreateIncomingGoodsPost) | **POST** /purchaseOrder/id/{id}/createIncomingGoods |  |
| [**purchaseOrderIdIdCreatePurchaseInvoicePost()**](PurchaseOrderApi.md#purchaseOrderIdIdCreatePurchaseInvoicePost) | **POST** /purchaseOrder/id/{id}/createPurchaseInvoice |  |
| [**purchaseOrderIdIdCreateSupplierReturnPost()**](PurchaseOrderApi.md#purchaseOrderIdIdCreateSupplierReturnPost) | **POST** /purchaseOrder/id/{id}/createSupplierReturn |  |
| [**purchaseOrderIdIdDelete()**](PurchaseOrderApi.md#purchaseOrderIdIdDelete) | **DELETE** /purchaseOrder/id/{id} | delete a purchaseOrder |
| [**purchaseOrderIdIdDownloadLatestDropshippingDeliveryNotePdfGet()**](PurchaseOrderApi.md#purchaseOrderIdIdDownloadLatestDropshippingDeliveryNotePdfGet) | **GET** /purchaseOrder/id/{id}/downloadLatestDropshippingDeliveryNotePdf |  |
| [**purchaseOrderIdIdDownloadLatestPurchaseOrderPdfGet()**](PurchaseOrderApi.md#purchaseOrderIdIdDownloadLatestPurchaseOrderPdfGet) | **GET** /purchaseOrder/id/{id}/downloadLatestPurchaseOrderPdf |  |
| [**purchaseOrderIdIdGet()**](PurchaseOrderApi.md#purchaseOrderIdIdGet) | **GET** /purchaseOrder/id/{id} | query a specific purchaseOrder |
| [**purchaseOrderIdIdProcessDropshippingPost()**](PurchaseOrderApi.md#purchaseOrderIdIdProcessDropshippingPost) | **POST** /purchaseOrder/id/{id}/processDropshipping |  |
| [**purchaseOrderIdIdPut()**](PurchaseOrderApi.md#purchaseOrderIdIdPut) | **PUT** /purchaseOrder/id/{id} | update a purchaseOrder |
| [**purchaseOrderPost()**](PurchaseOrderApi.md#purchaseOrderPost) | **POST** /purchaseOrder | create a purchaseOrder |


## `purchaseOrderCountGet()`

```php
purchaseOrderCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count purchaseOrder

count purchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->purchaseOrderCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderCountGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrderGet()`

```php
purchaseOrderGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\PurchaseOrderGet200Response
```

query purchaseOrder

query purchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
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
    $result = $apiInstance->purchaseOrderGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\PurchaseOrderGet200Response**](../Model/PurchaseOrderGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderIdIdCancelDropshippingShipmentsPost()`

```php
purchaseOrderIdIdCancelDropshippingShipmentsPost($id, $purchase_order_id_id_cancel_dropshipping_shipments_post_request): \kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response
```



cancel dropshipping shipments and incoming goods  # Endpoint for cancelling one or more dropshipping shipments and their corresponding incoming goods  ## When can a dropshipping shipment be cancelled?  A dropshipping shipment is an outgoing shipment from the fictitious \"dropshipping warehouse\" created by processing a dropshipping order (see documentation of `/purchaseOrder/id/{id}/processDropshipping`). For each dropshipping shipment, a corresponding dropshipping incoming goods exists. Both entities are linked to each other in the database, unless the dropshipping order was processed before release of weclapp version 24.15.1.  In order to cancel a dropshipping shipment, the following conditions must be met: * The shipment must **not** be in status `CANCELLED`. * The shipment must belong to the underlying dropshipping order, that is, there is an incoming goods linked to the shipment which is linked to the dropshipping order (note that there is no direct link between the dropshipping shipment and the dropshipping order).  The dropshipping order itself must * not be in status `ORDER_ENTRY_COMPLETED` or `ORDER_ENTRY_IN_PROGRESS` and * have at least one uncancelled dropshipping shipment.  The dropshipping shipments to be cancelled are specified in the mandatory parameter `shipmentIds`. Some constellations are forbidden and will trigger an error message: * `shipmentIds` is null or empty. * `shipmentIds` contains null, a nonexistent id, an id of an entity which is not a dropshipping shipment, or an id of a dropshipping shipment which does not meet the above conditions.  ## What happens in dropshipping shipment cancellation?  The specified dropshipping shipments are cancelled, that is, their stock movements are reverted and the status of each shipment is set to `CANCELLED`. The same is done for the corresponding incoming goods, only that their status is set to `INCOMING_CANCELLED`. Finally, the dropshipping order is reopened as it is not completely shipped anymore.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_order_id_id_cancel_dropshipping_shipments_post_request = new \kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPostRequest

try {
    $result = $apiInstance->purchaseOrderIdIdCancelDropshippingShipmentsPost($id, $purchase_order_id_id_cancel_dropshipping_shipments_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdCancelDropshippingShipmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_order_id_id_cancel_dropshipping_shipments_post_request** | [**\kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPostRequest**](../Model/PurchaseOrderIdIdCancelDropshippingShipmentsPostRequest.md)|  | |

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

## `purchaseOrderIdIdCreateContractPost()`

```php
purchaseOrderIdIdCreateContractPost($id, $body): \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response
```



create a contract from a purchase order  # Endpoint for creating a contract for the specified purchase order  To use this endpoint, the optional purchase order workflow action \"Create contract\" must be enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->purchaseOrderIdIdCreateContractPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdCreateContractPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response**](../Model/PurchaseInvoiceIdIdCreateContractPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderIdIdCreateDropshippingDeliveryNotePdfPost()`

```php
purchaseOrderIdIdCreateDropshippingDeliveryNotePdfPost($id, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->purchaseOrderIdIdCreateDropshippingDeliveryNotePdfPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdCreateDropshippingDeliveryNotePdfPost: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrderIdIdCreateIncomingGoodsPost()`

```php
purchaseOrderIdIdCreateIncomingGoodsPost($id, $purchase_order_id_id_create_incoming_goods_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_order_id_id_create_incoming_goods_post_request = new \kruegge82\weclapp\Model\PurchaseOrderIdIdCreateIncomingGoodsPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderIdIdCreateIncomingGoodsPostRequest

try {
    $result = $apiInstance->purchaseOrderIdIdCreateIncomingGoodsPost($id, $purchase_order_id_id_create_incoming_goods_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdCreateIncomingGoodsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_order_id_id_create_incoming_goods_post_request** | [**\kruegge82\weclapp\Model\PurchaseOrderIdIdCreateIncomingGoodsPostRequest**](../Model/PurchaseOrderIdIdCreateIncomingGoodsPostRequest.md)|  | |

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

## `purchaseOrderIdIdCreatePurchaseInvoicePost()`

```php
purchaseOrderIdIdCreatePurchaseInvoicePost($id, $purchase_order_id_id_create_purchase_invoice_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreatePurchaseInvoicePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_order_id_id_create_purchase_invoice_post_request = new \kruegge82\weclapp\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostRequest

try {
    $result = $apiInstance->purchaseOrderIdIdCreatePurchaseInvoicePost($id, $purchase_order_id_id_create_purchase_invoice_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdCreatePurchaseInvoicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_order_id_id_create_purchase_invoice_post_request** | [**\kruegge82\weclapp\Model\PurchaseOrderIdIdCreatePurchaseInvoicePostRequest**](../Model/PurchaseOrderIdIdCreatePurchaseInvoicePostRequest.md)|  | |

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

## `purchaseOrderIdIdCreateSupplierReturnPost()`

```php
purchaseOrderIdIdCreateSupplierReturnPost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->purchaseOrderIdIdCreateSupplierReturnPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdCreateSupplierReturnPost: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrderIdIdDelete()`

```php
purchaseOrderIdIdDelete($id, $dry_run)
```

delete a purchaseOrder

delete a purchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->purchaseOrderIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrderIdIdDownloadLatestDropshippingDeliveryNotePdfGet()`

```php
purchaseOrderIdIdDownloadLatestDropshippingDeliveryNotePdfGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->purchaseOrderIdIdDownloadLatestDropshippingDeliveryNotePdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdDownloadLatestDropshippingDeliveryNotePdfGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrderIdIdDownloadLatestPurchaseOrderPdfGet()`

```php
purchaseOrderIdIdDownloadLatestPurchaseOrderPdfGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->purchaseOrderIdIdDownloadLatestPurchaseOrderPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdDownloadLatestPurchaseOrderPdfGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrderIdIdGet()`

```php
purchaseOrderIdIdGet($id): \kruegge82\weclapp\Model\PurchaseOrder
```

query a specific purchaseOrder

query a specific purchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->purchaseOrderIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderIdIdProcessDropshippingPost()`

```php
purchaseOrderIdIdProcessDropshippingPost($id, $purchase_order_id_id_process_dropshipping_post_request): \kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response
```



process a dropshipping purchase order  # Endpoint for processing a dropshipping order  ## What does \"processing a dropshipping order\" mean?  When a dropshipping order is processed, an incoming goods to the dropshipping warehouse in status `INCOMING_SHIPPED` and a shipment from the dropshipping warehouse in status `SHIPPED` are created. Furthermore, if all non-free-text items are shipped (that is, included in an incoming goods/shipment pair), the `received` property of the dropshipping order is set to `true`.  From the sales order's perspective, a shipment to the customer is created, only that the goods are not shipped from the sales order warehouse, but from the warehouse of the dropshipping order's supplier. In weclapp, this is modeled as the fictitious \"dropshipping warehouse\" mentioned above.  ## When can a dropshipping order be processed?  In order to process a dropshipping order, the following conditions must be met: * The dropshipping order is in status `CONFIRMED`. * It is possible to create a shipment for the underlying sales order. In any case, the sales order must be in status `ORDER_CONFIRMATION_PRINTED`. * There is at least one non-free-text item in the dropshipping order which is not shipped yet.  ## Which items in the dropshipping order can be processed?  The dropshipping order items to be included in the created incoming goods/shipment can be controlled via the parameter `processPurchaseOrderItems`. On the one hand, if `processPurchaseOrderItems` is not set, all unshipped items - including free-text ones - will be included. On the other hand, using a subset of items in `processPurchaseOrderItems` allows for partial processing, that is, the creation of multiple incoming goods/shipment pairs from the dropshipping order.  Special cases: * Items with quantity 0 are skipped, unless no other item with quantity != 0 is provided in `processPurchaseOrderItems`. In that case, an error is issued as the incoming goods/shipment must have at least one item. * If a sales bill of material header article item is provided in `processPurchaseOrderItems` which is already shipped, the quantity in the incoming goods/shipment is automatically reduced to 0. * If the only dropshipping order items not included in incoming goods/shipment pairs are free-text items, these cannot be processed anymore as the dropshipping order is already `received`.  Some constellations are forbidden and will trigger an error message: * `processPurchaseOrderItems` is empty (not null). * `processPurchaseOrderItems` includes a sales bill of material header article item, but no subitem. * `processPurchaseOrderItems` includes a sales bill of material subitem, but not the header article item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_order_id_id_process_dropshipping_post_request = new \kruegge82\weclapp\Model\PurchaseOrderIdIdProcessDropshippingPostRequest(); // \kruegge82\weclapp\Model\PurchaseOrderIdIdProcessDropshippingPostRequest

try {
    $result = $apiInstance->purchaseOrderIdIdProcessDropshippingPost($id, $purchase_order_id_id_process_dropshipping_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdProcessDropshippingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_order_id_id_process_dropshipping_post_request** | [**\kruegge82\weclapp\Model\PurchaseOrderIdIdProcessDropshippingPostRequest**](../Model/PurchaseOrderIdIdProcessDropshippingPostRequest.md)|  | |

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

## `purchaseOrderIdIdPut()`

```php
purchaseOrderIdIdPut($id, $purchase_order, $dry_run): \kruegge82\weclapp\Model\PurchaseOrder
```

update a purchaseOrder

update purchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_order = new \kruegge82\weclapp\Model\PurchaseOrder(); // \kruegge82\weclapp\Model\PurchaseOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->purchaseOrderIdIdPut($id, $purchase_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_order** | [**\kruegge82\weclapp\Model\PurchaseOrder**](../Model/PurchaseOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOrderPost()`

```php
purchaseOrderPost($purchase_order, $dry_run): \kruegge82\weclapp\Model\PurchaseOrder
```

create a purchaseOrder

create a purchaseOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_order = new \kruegge82\weclapp\Model\PurchaseOrder(); // \kruegge82\weclapp\Model\PurchaseOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->purchaseOrderPost($purchase_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrderApi->purchaseOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_order** | [**\kruegge82\weclapp\Model\PurchaseOrder**](../Model/PurchaseOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrder**](../Model/PurchaseOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
