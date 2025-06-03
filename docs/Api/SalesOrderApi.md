# kruegge82\weclapp\SalesOrderApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**salesOrderCountGet()**](SalesOrderApi.md#salesOrderCountGet) | **GET** /salesOrder/count | count salesOrder |
| [**salesOrderDefaultValuesForCreateGet()**](SalesOrderApi.md#salesOrderDefaultValuesForCreateGet) | **GET** /salesOrder/defaultValuesForCreate |  |
| [**salesOrderGet()**](SalesOrderApi.md#salesOrderGet) | **GET** /salesOrder | query salesOrder |
| [**salesOrderIdIdActivateProjectViewPost()**](SalesOrderApi.md#salesOrderIdIdActivateProjectViewPost) | **POST** /salesOrder/id/{id}/activateProjectView |  |
| [**salesOrderIdIdCalculateSalesPricesPost()**](SalesOrderApi.md#salesOrderIdIdCalculateSalesPricesPost) | **POST** /salesOrder/id/{id}/calculateSalesPrices |  |
| [**salesOrderIdIdCancelOrManuallyClosePost()**](SalesOrderApi.md#salesOrderIdIdCancelOrManuallyClosePost) | **POST** /salesOrder/id/{id}/cancelOrManuallyClose |  |
| [**salesOrderIdIdCreateAdvancePaymentRequestPost()**](SalesOrderApi.md#salesOrderIdIdCreateAdvancePaymentRequestPost) | **POST** /salesOrder/id/{id}/createAdvancePaymentRequest |  |
| [**salesOrderIdIdCreateContractPost()**](SalesOrderApi.md#salesOrderIdIdCreateContractPost) | **POST** /salesOrder/id/{id}/createContract |  |
| [**salesOrderIdIdCreateCustomerReturnPost()**](SalesOrderApi.md#salesOrderIdIdCreateCustomerReturnPost) | **POST** /salesOrder/id/{id}/createCustomerReturn |  |
| [**salesOrderIdIdCreateDropshippingPost()**](SalesOrderApi.md#salesOrderIdIdCreateDropshippingPost) | **POST** /salesOrder/id/{id}/createDropshipping |  |
| [**salesOrderIdIdCreatePartPaymentInvoicePost()**](SalesOrderApi.md#salesOrderIdIdCreatePartPaymentInvoicePost) | **POST** /salesOrder/id/{id}/createPartPaymentInvoice |  |
| [**salesOrderIdIdCreatePrepaymentFinalInvoicePost()**](SalesOrderApi.md#salesOrderIdIdCreatePrepaymentFinalInvoicePost) | **POST** /salesOrder/id/{id}/createPrepaymentFinalInvoice |  |
| [**salesOrderIdIdCreateProductionOrdersPost()**](SalesOrderApi.md#salesOrderIdIdCreateProductionOrdersPost) | **POST** /salesOrder/id/{id}/createProductionOrders |  |
| [**salesOrderIdIdCreatePurchaseOrderPost()**](SalesOrderApi.md#salesOrderIdIdCreatePurchaseOrderPost) | **POST** /salesOrder/id/{id}/createPurchaseOrder |  |
| [**salesOrderIdIdCreatePurchaseOrderRequestPost()**](SalesOrderApi.md#salesOrderIdIdCreatePurchaseOrderRequestPost) | **POST** /salesOrder/id/{id}/createPurchaseOrderRequest |  |
| [**salesOrderIdIdCreateReturnLabelsPost()**](SalesOrderApi.md#salesOrderIdIdCreateReturnLabelsPost) | **POST** /salesOrder/id/{id}/createReturnLabels |  |
| [**salesOrderIdIdCreateSalesInvoicePost()**](SalesOrderApi.md#salesOrderIdIdCreateSalesInvoicePost) | **POST** /salesOrder/id/{id}/createSalesInvoice |  |
| [**salesOrderIdIdCreateShipmentPost()**](SalesOrderApi.md#salesOrderIdIdCreateShipmentPost) | **POST** /salesOrder/id/{id}/createShipment |  |
| [**salesOrderIdIdCreateShippingLabelsPost()**](SalesOrderApi.md#salesOrderIdIdCreateShippingLabelsPost) | **POST** /salesOrder/id/{id}/createShippingLabels |  |
| [**salesOrderIdIdDelete()**](SalesOrderApi.md#salesOrderIdIdDelete) | **DELETE** /salesOrder/id/{id} | delete a salesOrder |
| [**salesOrderIdIdDownloadLatestOrderConfirmationPdfGet()**](SalesOrderApi.md#salesOrderIdIdDownloadLatestOrderConfirmationPdfGet) | **GET** /salesOrder/id/{id}/downloadLatestOrderConfirmationPdf |  |
| [**salesOrderIdIdGet()**](SalesOrderApi.md#salesOrderIdIdGet) | **GET** /salesOrder/id/{id} | query a specific salesOrder |
| [**salesOrderIdIdManuallyClosePost()**](SalesOrderApi.md#salesOrderIdIdManuallyClosePost) | **POST** /salesOrder/id/{id}/manuallyClose |  |
| [**salesOrderIdIdPreviewSalesOrderConfirmationGet()**](SalesOrderApi.md#salesOrderIdIdPreviewSalesOrderConfirmationGet) | **GET** /salesOrder/id/{id}/previewSalesOrderConfirmation |  |
| [**salesOrderIdIdPrintLabelPost()**](SalesOrderApi.md#salesOrderIdIdPrintLabelPost) | **POST** /salesOrder/id/{id}/printLabel |  |
| [**salesOrderIdIdPrintOrderDataGet()**](SalesOrderApi.md#salesOrderIdIdPrintOrderDataGet) | **GET** /salesOrder/id/{id}/printOrderData |  |
| [**salesOrderIdIdPut()**](SalesOrderApi.md#salesOrderIdIdPut) | **PUT** /salesOrder/id/{id} | update a salesOrder |
| [**salesOrderIdIdRecalculateCostsPost()**](SalesOrderApi.md#salesOrderIdIdRecalculateCostsPost) | **POST** /salesOrder/id/{id}/recalculateCosts |  |
| [**salesOrderIdIdResetTaxesPost()**](SalesOrderApi.md#salesOrderIdIdResetTaxesPost) | **POST** /salesOrder/id/{id}/resetTaxes |  |
| [**salesOrderIdIdSetCostsForItemsWithoutCostPost()**](SalesOrderApi.md#salesOrderIdIdSetCostsForItemsWithoutCostPost) | **POST** /salesOrder/id/{id}/setCostsForItemsWithoutCost |  |
| [**salesOrderIdIdShipOrderForExternalFulfillmentPost()**](SalesOrderApi.md#salesOrderIdIdShipOrderForExternalFulfillmentPost) | **POST** /salesOrder/id/{id}/shipOrderForExternalFulfillment |  |
| [**salesOrderIdIdToggleProjectTeamPost()**](SalesOrderApi.md#salesOrderIdIdToggleProjectTeamPost) | **POST** /salesOrder/id/{id}/toggleProjectTeam |  |
| [**salesOrderIdIdToggleServicesFinishedPost()**](SalesOrderApi.md#salesOrderIdIdToggleServicesFinishedPost) | **POST** /salesOrder/id/{id}/toggleServicesFinished |  |
| [**salesOrderIdIdUpdatePricesPost()**](SalesOrderApi.md#salesOrderIdIdUpdatePricesPost) | **POST** /salesOrder/id/{id}/updatePrices |  |
| [**salesOrderPost()**](SalesOrderApi.md#salesOrderPost) | **POST** /salesOrder | create a salesOrder |


## `salesOrderCountGet()`

```php
salesOrderCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count salesOrder

count salesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->salesOrderCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderCountGet: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderDefaultValuesForCreateGet()`

```php
salesOrderDefaultValuesForCreateGet($customer_id, $responsible_user_id): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string
$responsible_user_id = 'responsible_user_id_example'; // string

try {
    $result = $apiInstance->salesOrderDefaultValuesForCreateGet($customer_id, $responsible_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderDefaultValuesForCreateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**|  | |
| **responsible_user_id** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderGet()`

```php
salesOrderGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties): \kruegge82\weclapp\Model\SalesOrderGet200Response
```

query salesOrder

query salesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
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
    $result = $apiInstance->salesOrderGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\SalesOrderGet200Response**](../Model/SalesOrderGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdActivateProjectViewPost()`

```php
salesOrderIdIdActivateProjectViewPost($id, $body): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdActivateProjectViewPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdActivateProjectViewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdCalculateSalesPricesPost()`

```php
salesOrderIdIdCalculateSalesPricesPost($id, $sales_order_id_id_calculate_sales_prices_post_request): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_order_id_id_calculate_sales_prices_post_request = new \kruegge82\weclapp\Model\SalesOrderIdIdCalculateSalesPricesPostRequest(); // \kruegge82\weclapp\Model\SalesOrderIdIdCalculateSalesPricesPostRequest

try {
    $result = $apiInstance->salesOrderIdIdCalculateSalesPricesPost($id, $sales_order_id_id_calculate_sales_prices_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCalculateSalesPricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_order_id_id_calculate_sales_prices_post_request** | [**\kruegge82\weclapp\Model\SalesOrderIdIdCalculateSalesPricesPostRequest**](../Model/SalesOrderIdIdCalculateSalesPricesPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdCancelOrManuallyClosePost()`

```php
salesOrderIdIdCancelOrManuallyClosePost($id, $body): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdCancelOrManuallyClosePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCancelOrManuallyClosePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdCreateAdvancePaymentRequestPost()`

```php
salesOrderIdIdCreateAdvancePaymentRequestPost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdCreateAdvancePaymentRequestPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreateAdvancePaymentRequestPost: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderIdIdCreateContractPost()`

```php
salesOrderIdIdCreateContractPost($id, $body): \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdCreateContractPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreateContractPost: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderIdIdCreateCustomerReturnPost()`

```php
salesOrderIdIdCreateCustomerReturnPost($id, $purchase_invoice_id_id_create_credit_note_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_invoice_id_id_create_credit_note_post_request = new \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest(); // \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest

try {
    $result = $apiInstance->salesOrderIdIdCreateCustomerReturnPost($id, $purchase_invoice_id_id_create_credit_note_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreateCustomerReturnPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_invoice_id_id_create_credit_note_post_request** | [**\kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest**](../Model/PurchaseInvoiceIdIdCreateCreditNotePostRequest.md)|  | |

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

## `salesOrderIdIdCreateDropshippingPost()`

```php
salesOrderIdIdCreateDropshippingPost($id, $sales_order_id_id_create_dropshipping_post_request): \kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_order_id_id_create_dropshipping_post_request = new \kruegge82\weclapp\Model\SalesOrderIdIdCreateDropshippingPostRequest(); // \kruegge82\weclapp\Model\SalesOrderIdIdCreateDropshippingPostRequest

try {
    $result = $apiInstance->salesOrderIdIdCreateDropshippingPost($id, $sales_order_id_id_create_dropshipping_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreateDropshippingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_order_id_id_create_dropshipping_post_request** | [**\kruegge82\weclapp\Model\SalesOrderIdIdCreateDropshippingPostRequest**](../Model/SalesOrderIdIdCreateDropshippingPostRequest.md)|  | |

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

## `salesOrderIdIdCreatePartPaymentInvoicePost()`

```php
salesOrderIdIdCreatePartPaymentInvoicePost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdCreatePartPaymentInvoicePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreatePartPaymentInvoicePost: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderIdIdCreatePrepaymentFinalInvoicePost()`

```php
salesOrderIdIdCreatePrepaymentFinalInvoicePost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdCreatePrepaymentFinalInvoicePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreatePrepaymentFinalInvoicePost: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderIdIdCreateProductionOrdersPost()`

```php
salesOrderIdIdCreateProductionOrdersPost($id, $sales_order_id_id_create_production_orders_post_request): \kruegge82\weclapp\Model\ProductionOrderGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_order_id_id_create_production_orders_post_request = new \kruegge82\weclapp\Model\SalesOrderIdIdCreateProductionOrdersPostRequest(); // \kruegge82\weclapp\Model\SalesOrderIdIdCreateProductionOrdersPostRequest

try {
    $result = $apiInstance->salesOrderIdIdCreateProductionOrdersPost($id, $sales_order_id_id_create_production_orders_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreateProductionOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_order_id_id_create_production_orders_post_request** | [**\kruegge82\weclapp\Model\SalesOrderIdIdCreateProductionOrdersPostRequest**](../Model/SalesOrderIdIdCreateProductionOrdersPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\ProductionOrderGet200Response**](../Model/ProductionOrderGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdCreatePurchaseOrderPost()`

```php
salesOrderIdIdCreatePurchaseOrderPost($id, $sales_order_id_id_create_purchase_order_post_request): \kruegge82\weclapp\Model\PurchaseOrderGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_order_id_id_create_purchase_order_post_request = new \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderPostRequest(); // \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderPostRequest

try {
    $result = $apiInstance->salesOrderIdIdCreatePurchaseOrderPost($id, $sales_order_id_id_create_purchase_order_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreatePurchaseOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_order_id_id_create_purchase_order_post_request** | [**\kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderPostRequest**](../Model/SalesOrderIdIdCreatePurchaseOrderPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOrderGet200Response**](../Model/PurchaseOrderGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdCreatePurchaseOrderRequestPost()`

```php
salesOrderIdIdCreatePurchaseOrderRequestPost($id, $sales_order_id_id_create_purchase_order_request_post_request): \kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_order_id_id_create_purchase_order_request_post_request = new \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostRequest(); // \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostRequest

try {
    $result = $apiInstance->salesOrderIdIdCreatePurchaseOrderRequestPost($id, $sales_order_id_id_create_purchase_order_request_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreatePurchaseOrderRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_order_id_id_create_purchase_order_request_post_request** | [**\kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostRequest**](../Model/SalesOrderIdIdCreatePurchaseOrderRequestPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPost200Response**](../Model/QuotationIdIdCreatePurchaseOrderRequestPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdCreateReturnLabelsPost()`

```php
salesOrderIdIdCreateReturnLabelsPost($id, $body): \kruegge82\weclapp\Model\DocumentGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdCreateReturnLabelsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreateReturnLabelsPost: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderIdIdCreateSalesInvoicePost()`

```php
salesOrderIdIdCreateSalesInvoicePost($id, $sales_order_id_id_create_sales_invoice_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_order_id_id_create_sales_invoice_post_request = new \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest(); // \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest

try {
    $result = $apiInstance->salesOrderIdIdCreateSalesInvoicePost($id, $sales_order_id_id_create_sales_invoice_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreateSalesInvoicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_order_id_id_create_sales_invoice_post_request** | [**\kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest**](../Model/SalesOrderIdIdCreateSalesInvoicePostRequest.md)|  | |

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

## `salesOrderIdIdCreateShipmentPost()`

```php
salesOrderIdIdCreateShipmentPost($id, $sales_order_id_id_create_sales_invoice_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_order_id_id_create_sales_invoice_post_request = new \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest(); // \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest

try {
    $result = $apiInstance->salesOrderIdIdCreateShipmentPost($id, $sales_order_id_id_create_sales_invoice_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreateShipmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_order_id_id_create_sales_invoice_post_request** | [**\kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest**](../Model/SalesOrderIdIdCreateSalesInvoicePostRequest.md)|  | |

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

## `salesOrderIdIdCreateShippingLabelsPost()`

```php
salesOrderIdIdCreateShippingLabelsPost($id, $body): \kruegge82\weclapp\Model\DocumentGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdCreateShippingLabelsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdCreateShippingLabelsPost: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderIdIdDelete()`

```php
salesOrderIdIdDelete($id, $dry_run)
```

delete a salesOrder

delete a salesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->salesOrderIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderIdIdDownloadLatestOrderConfirmationPdfGet()`

```php
salesOrderIdIdDownloadLatestOrderConfirmationPdfGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->salesOrderIdIdDownloadLatestOrderConfirmationPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdDownloadLatestOrderConfirmationPdfGet: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderIdIdGet()`

```php
salesOrderIdIdGet($id): \kruegge82\weclapp\Model\SalesOrder
```

query a specific salesOrder

query a specific salesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->salesOrderIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdManuallyClosePost()`

```php
salesOrderIdIdManuallyClosePost($id, $body): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdManuallyClosePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdManuallyClosePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdPreviewSalesOrderConfirmationGet()`

```php
salesOrderIdIdPreviewSalesOrderConfirmationGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->salesOrderIdIdPreviewSalesOrderConfirmationGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdPreviewSalesOrderConfirmationGet: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderIdIdPrintLabelPost()`

```php
salesOrderIdIdPrintLabelPost($id, $sales_order_id_id_print_label_post_request): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_order_id_id_print_label_post_request = new \kruegge82\weclapp\Model\SalesOrderIdIdPrintLabelPostRequest(); // \kruegge82\weclapp\Model\SalesOrderIdIdPrintLabelPostRequest

try {
    $result = $apiInstance->salesOrderIdIdPrintLabelPost($id, $sales_order_id_id_print_label_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdPrintLabelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_order_id_id_print_label_post_request** | [**\kruegge82\weclapp\Model\SalesOrderIdIdPrintLabelPostRequest**](../Model/SalesOrderIdIdPrintLabelPostRequest.md)|  | |

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

## `salesOrderIdIdPrintOrderDataGet()`

```php
salesOrderIdIdPrintOrderDataGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->salesOrderIdIdPrintOrderDataGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdPrintOrderDataGet: ', $e->getMessage(), PHP_EOL;
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

## `salesOrderIdIdPut()`

```php
salesOrderIdIdPut($id, $sales_order, $dry_run): \kruegge82\weclapp\Model\SalesOrder
```

update a salesOrder

update salesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_order = new \kruegge82\weclapp\Model\SalesOrder(); // \kruegge82\weclapp\Model\SalesOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->salesOrderIdIdPut($id, $sales_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_order** | [**\kruegge82\weclapp\Model\SalesOrder**](../Model/SalesOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdRecalculateCostsPost()`

```php
salesOrderIdIdRecalculateCostsPost($id, $body): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdRecalculateCostsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdRecalculateCostsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdResetTaxesPost()`

```php
salesOrderIdIdResetTaxesPost($id, $body): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdResetTaxesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdResetTaxesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdSetCostsForItemsWithoutCostPost()`

```php
salesOrderIdIdSetCostsForItemsWithoutCostPost($id, $quotation_id_id_set_costs_for_items_without_cost_post_request): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$quotation_id_id_set_costs_for_items_without_cost_post_request = new \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest(); // \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest

try {
    $result = $apiInstance->salesOrderIdIdSetCostsForItemsWithoutCostPost($id, $quotation_id_id_set_costs_for_items_without_cost_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdSetCostsForItemsWithoutCostPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **quotation_id_id_set_costs_for_items_without_cost_post_request** | [**\kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest**](../Model/QuotationIdIdSetCostsForItemsWithoutCostPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdShipOrderForExternalFulfillmentPost()`

```php
salesOrderIdIdShipOrderForExternalFulfillmentPost($id, $body): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdShipOrderForExternalFulfillmentPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdShipOrderForExternalFulfillmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdToggleProjectTeamPost()`

```php
salesOrderIdIdToggleProjectTeamPost($id, $body): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdToggleProjectTeamPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdToggleProjectTeamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdToggleServicesFinishedPost()`

```php
salesOrderIdIdToggleServicesFinishedPost($id, $body): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdToggleServicesFinishedPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdToggleServicesFinishedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderIdIdUpdatePricesPost()`

```php
salesOrderIdIdUpdatePricesPost($id, $body): \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesOrderIdIdUpdatePricesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderIdIdUpdatePricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response**](../Model/SalesOrderDefaultValuesForCreateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOrderPost()`

```php
salesOrderPost($sales_order, $dry_run): \kruegge82\weclapp\Model\SalesOrder
```

create a salesOrder

create a salesOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_order = new \kruegge82\weclapp\Model\SalesOrder(); // \kruegge82\weclapp\Model\SalesOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->salesOrderPost($sales_order, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderApi->salesOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_order** | [**\kruegge82\weclapp\Model\SalesOrder**](../Model/SalesOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SalesOrder**](../Model/SalesOrder.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
