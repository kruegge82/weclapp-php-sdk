# kruegge82\weclapp\SalesInvoiceApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**salesInvoiceCountGet()**](SalesInvoiceApi.md#salesInvoiceCountGet) | **GET** /salesInvoice/count | count salesInvoice |
| [**salesInvoiceGet()**](SalesInvoiceApi.md#salesInvoiceGet) | **GET** /salesInvoice | query salesInvoice |
| [**salesInvoiceIdIdAddSalesOrdersPost()**](SalesInvoiceApi.md#salesInvoiceIdIdAddSalesOrdersPost) | **POST** /salesInvoice/id/{id}/addSalesOrders |  |
| [**salesInvoiceIdIdCreateContractPost()**](SalesInvoiceApi.md#salesInvoiceIdIdCreateContractPost) | **POST** /salesInvoice/id/{id}/createContract |  |
| [**salesInvoiceIdIdCreateCreditNotePost()**](SalesInvoiceApi.md#salesInvoiceIdIdCreateCreditNotePost) | **POST** /salesInvoice/id/{id}/createCreditNote |  |
| [**salesInvoiceIdIdDelete()**](SalesInvoiceApi.md#salesInvoiceIdIdDelete) | **DELETE** /salesInvoice/id/{id} | delete a salesInvoice |
| [**salesInvoiceIdIdDownloadLatestSalesInvoicePdfGet()**](SalesInvoiceApi.md#salesInvoiceIdIdDownloadLatestSalesInvoicePdfGet) | **GET** /salesInvoice/id/{id}/downloadLatestSalesInvoicePdf |  |
| [**salesInvoiceIdIdGet()**](SalesInvoiceApi.md#salesInvoiceIdIdGet) | **GET** /salesInvoice/id/{id} | query a specific salesInvoice |
| [**salesInvoiceIdIdPut()**](SalesInvoiceApi.md#salesInvoiceIdIdPut) | **PUT** /salesInvoice/id/{id} | update a salesInvoice |
| [**salesInvoiceIdIdRecalculateCostsPost()**](SalesInvoiceApi.md#salesInvoiceIdIdRecalculateCostsPost) | **POST** /salesInvoice/id/{id}/recalculateCosts |  |
| [**salesInvoiceIdIdSetCostsForItemsWithoutCostPost()**](SalesInvoiceApi.md#salesInvoiceIdIdSetCostsForItemsWithoutCostPost) | **POST** /salesInvoice/id/{id}/setCostsForItemsWithoutCost |  |
| [**salesInvoiceIdIdUpdatePricesPost()**](SalesInvoiceApi.md#salesInvoiceIdIdUpdatePricesPost) | **POST** /salesInvoice/id/{id}/updatePrices |  |
| [**salesInvoicePost()**](SalesInvoiceApi.md#salesInvoicePost) | **POST** /salesInvoice | create a salesInvoice |


## `salesInvoiceCountGet()`

```php
salesInvoiceCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count salesInvoice

count salesInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->salesInvoiceCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceCountGet: ', $e->getMessage(), PHP_EOL;
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

## `salesInvoiceGet()`

```php
salesInvoiceGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\SalesInvoiceGet200Response
```

query salesInvoice

query salesInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
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
    $result = $apiInstance->salesInvoiceGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\SalesInvoiceGet200Response**](../Model/SalesInvoiceGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesInvoiceIdIdAddSalesOrdersPost()`

```php
salesInvoiceIdIdAddSalesOrdersPost($id, $sales_invoice_id_id_add_sales_orders_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_invoice_id_id_add_sales_orders_post_request = new \kruegge82\weclapp\Model\SalesInvoiceIdIdAddSalesOrdersPostRequest(); // \kruegge82\weclapp\Model\SalesInvoiceIdIdAddSalesOrdersPostRequest

try {
    $result = $apiInstance->salesInvoiceIdIdAddSalesOrdersPost($id, $sales_invoice_id_id_add_sales_orders_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceIdIdAddSalesOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_invoice_id_id_add_sales_orders_post_request** | [**\kruegge82\weclapp\Model\SalesInvoiceIdIdAddSalesOrdersPostRequest**](../Model/SalesInvoiceIdIdAddSalesOrdersPostRequest.md)|  | |

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

## `salesInvoiceIdIdCreateContractPost()`

```php
salesInvoiceIdIdCreateContractPost($id, $body): \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response
```



create a contract from a sales invoice  # Endpoint for creating a contract for the specified sales invoice  To use this endpoint, the optional invoice workflow action \"Create contract\" must be enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesInvoiceIdIdCreateContractPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceIdIdCreateContractPost: ', $e->getMessage(), PHP_EOL;
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

## `salesInvoiceIdIdCreateCreditNotePost()`

```php
salesInvoiceIdIdCreateCreditNotePost($id, $purchase_invoice_id_id_create_credit_note_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$purchase_invoice_id_id_create_credit_note_post_request = new \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest(); // \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest

try {
    $result = $apiInstance->salesInvoiceIdIdCreateCreditNotePost($id, $purchase_invoice_id_id_create_credit_note_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceIdIdCreateCreditNotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **purchase_invoice_id_id_create_credit_note_post_request** | [**\kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest**](../Model/PurchaseInvoiceIdIdCreateCreditNotePostRequest.md)|  | |

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

## `salesInvoiceIdIdDelete()`

```php
salesInvoiceIdIdDelete($id, $dry_run)
```

delete a salesInvoice

delete a salesInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->salesInvoiceIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `salesInvoiceIdIdDownloadLatestSalesInvoicePdfGet()`

```php
salesInvoiceIdIdDownloadLatestSalesInvoicePdfGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->salesInvoiceIdIdDownloadLatestSalesInvoicePdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceIdIdDownloadLatestSalesInvoicePdfGet: ', $e->getMessage(), PHP_EOL;
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

## `salesInvoiceIdIdGet()`

```php
salesInvoiceIdIdGet($id): \kruegge82\weclapp\Model\SalesInvoice
```

query a specific salesInvoice

query a specific salesInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->salesInvoiceIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesInvoiceIdIdPut()`

```php
salesInvoiceIdIdPut($id, $sales_invoice, $dry_run): \kruegge82\weclapp\Model\SalesInvoice
```

update a salesInvoice

update salesInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sales_invoice = new \kruegge82\weclapp\Model\SalesInvoice(); // \kruegge82\weclapp\Model\SalesInvoice
$dry_run = True; // bool

try {
    $result = $apiInstance->salesInvoiceIdIdPut($id, $sales_invoice, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sales_invoice** | [**\kruegge82\weclapp\Model\SalesInvoice**](../Model/SalesInvoice.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesInvoiceIdIdRecalculateCostsPost()`

```php
salesInvoiceIdIdRecalculateCostsPost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



Recalculate costs for the sales invoice.  # Endpoint to recalculate the costs of the sales invoice  Recalculate costs of the items and with it the costs of the sales invoice. Costs are usually set/calculated for an item when added or edited. The costs usually have a source. The source can change at some time. The item costs are not recalculated. If you want to recalculate the costs based on the environment, you can use this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesInvoiceIdIdRecalculateCostsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceIdIdRecalculateCostsPost: ', $e->getMessage(), PHP_EOL;
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

## `salesInvoiceIdIdSetCostsForItemsWithoutCostPost()`

```php
salesInvoiceIdIdSetCostsForItemsWithoutCostPost($id, $quotation_id_id_set_costs_for_items_without_cost_post_request): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



set unitCost of sales invoice items without unitCost  # Endpoint for setting the unit cost of sales invoice items and shipping cost items without unit cost to a fixed value  For a sales record item (or shipping cost item) with an article, `unitCost` is typically set based on the currently valid purchase price of the article's primary supply source. If the unit cost cannot be determined, e.g. because there is no valid purchase price or the item has no article, `unitCost` will be null. Instead of setting `unitCost` separately for each of these items, all of them can be updated at once with the present endpoint.  The parameter `costUpdateMode` determines the target value for `unitCost`: * `SET_TO_NET_UNIT_PRICE`: If the sales invoice's `salesChannel` is of type net, use `unitPrice`, otherwise use its net value `100 * unitPrice / (100 + taxValue)` (where `taxValue` is the value of the tax given by the item's `taxId`). * `SET_TO_ZERO`: Use zero.  For all updated items, `manualUnitCost` is set to true.  Items where `unitCost` is not null will not be touched.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$quotation_id_id_set_costs_for_items_without_cost_post_request = new \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest(); // \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest

try {
    $result = $apiInstance->salesInvoiceIdIdSetCostsForItemsWithoutCostPost($id, $quotation_id_id_set_costs_for_items_without_cost_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceIdIdSetCostsForItemsWithoutCostPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **quotation_id_id_set_costs_for_items_without_cost_post_request** | [**\kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest**](../Model/QuotationIdIdSetCostsForItemsWithoutCostPostRequest.md)|  | |

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

## `salesInvoiceIdIdUpdatePricesPost()`

```php
salesInvoiceIdIdUpdatePricesPost($id, $body): \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->salesInvoiceIdIdUpdatePricesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoiceIdIdUpdatePricesPost: ', $e->getMessage(), PHP_EOL;
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

## `salesInvoicePost()`

```php
salesInvoicePost($sales_invoice, $dry_run): \kruegge82\weclapp\Model\SalesInvoice
```

create a salesInvoice

create a salesInvoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sales_invoice = new \kruegge82\weclapp\Model\SalesInvoice(); // \kruegge82\weclapp\Model\SalesInvoice
$dry_run = True; // bool

try {
    $result = $apiInstance->salesInvoicePost($sales_invoice, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceApi->salesInvoicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sales_invoice** | [**\kruegge82\weclapp\Model\SalesInvoice**](../Model/SalesInvoice.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SalesInvoice**](../Model/SalesInvoice.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
