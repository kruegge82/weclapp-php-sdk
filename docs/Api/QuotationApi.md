# kruegge82\weclapp\QuotationApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**quotationCountGet()**](QuotationApi.md#quotationCountGet) | **GET** /quotation/count | count quotation |
| [**quotationGet()**](QuotationApi.md#quotationGet) | **GET** /quotation | query quotation |
| [**quotationIdIdAcceptPost()**](QuotationApi.md#quotationIdIdAcceptPost) | **POST** /quotation/id/{id}/accept |  |
| [**quotationIdIdAddDefaultScalePricesToItemsPost()**](QuotationApi.md#quotationIdIdAddDefaultScalePricesToItemsPost) | **POST** /quotation/id/{id}/addDefaultScalePricesToItems |  |
| [**quotationIdIdCreateNewVersionPost()**](QuotationApi.md#quotationIdIdCreateNewVersionPost) | **POST** /quotation/id/{id}/createNewVersion |  |
| [**quotationIdIdCreatePublicPageLinkPost()**](QuotationApi.md#quotationIdIdCreatePublicPageLinkPost) | **POST** /quotation/id/{id}/createPublicPageLink |  |
| [**quotationIdIdCreatePurchaseOrderRequestPost()**](QuotationApi.md#quotationIdIdCreatePurchaseOrderRequestPost) | **POST** /quotation/id/{id}/createPurchaseOrderRequest |  |
| [**quotationIdIdCreateQuotationPdfPost()**](QuotationApi.md#quotationIdIdCreateQuotationPdfPost) | **POST** /quotation/id/{id}/createQuotationPdf |  |
| [**quotationIdIdDelete()**](QuotationApi.md#quotationIdIdDelete) | **DELETE** /quotation/id/{id} | delete a quotation |
| [**quotationIdIdDisablePublicPageLinkPost()**](QuotationApi.md#quotationIdIdDisablePublicPageLinkPost) | **POST** /quotation/id/{id}/disablePublicPageLink |  |
| [**quotationIdIdDownloadLatestQuotationPdfGet()**](QuotationApi.md#quotationIdIdDownloadLatestQuotationPdfGet) | **GET** /quotation/id/{id}/downloadLatestQuotationPdf |  |
| [**quotationIdIdGet()**](QuotationApi.md#quotationIdIdGet) | **GET** /quotation/id/{id} | query a specific quotation |
| [**quotationIdIdInquirePost()**](QuotationApi.md#quotationIdIdInquirePost) | **POST** /quotation/id/{id}/inquire |  |
| [**quotationIdIdPut()**](QuotationApi.md#quotationIdIdPut) | **PUT** /quotation/id/{id} | update a quotation |
| [**quotationIdIdRecalculateCostsPost()**](QuotationApi.md#quotationIdIdRecalculateCostsPost) | **POST** /quotation/id/{id}/recalculateCosts |  |
| [**quotationIdIdSetCostsForItemsWithoutCostPost()**](QuotationApi.md#quotationIdIdSetCostsForItemsWithoutCostPost) | **POST** /quotation/id/{id}/setCostsForItemsWithoutCost |  |
| [**quotationIdIdUpdatePricesPost()**](QuotationApi.md#quotationIdIdUpdatePricesPost) | **POST** /quotation/id/{id}/updatePrices |  |
| [**quotationPost()**](QuotationApi.md#quotationPost) | **POST** /quotation | create a quotation |


## `quotationCountGet()`

```php
quotationCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count quotation

count quotation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->quotationCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationCountGet: ', $e->getMessage(), PHP_EOL;
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

## `quotationGet()`

```php
quotationGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\QuotationGet200Response
```

query quotation

query quotation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
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
    $result = $apiInstance->quotationGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\QuotationGet200Response**](../Model/QuotationGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotationIdIdAcceptPost()`

```php
quotationIdIdAcceptPost($id, $quotation_id_id_accept_post_request): \kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$quotation_id_id_accept_post_request = new \kruegge82\weclapp\Model\QuotationIdIdAcceptPostRequest(); // \kruegge82\weclapp\Model\QuotationIdIdAcceptPostRequest

try {
    $result = $apiInstance->quotationIdIdAcceptPost($id, $quotation_id_id_accept_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdAcceptPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **quotation_id_id_accept_post_request** | [**\kruegge82\weclapp\Model\QuotationIdIdAcceptPostRequest**](../Model/QuotationIdIdAcceptPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response**](../Model/QuotationIdIdAcceptPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotationIdIdAddDefaultScalePricesToItemsPost()`

```php
quotationIdIdAddDefaultScalePricesToItemsPost($id, $quotation_id_id_add_default_scale_prices_to_items_post_request): \kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$quotation_id_id_add_default_scale_prices_to_items_post_request = new \kruegge82\weclapp\Model\QuotationIdIdAddDefaultScalePricesToItemsPostRequest(); // \kruegge82\weclapp\Model\QuotationIdIdAddDefaultScalePricesToItemsPostRequest

try {
    $result = $apiInstance->quotationIdIdAddDefaultScalePricesToItemsPost($id, $quotation_id_id_add_default_scale_prices_to_items_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdAddDefaultScalePricesToItemsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **quotation_id_id_add_default_scale_prices_to_items_post_request** | [**\kruegge82\weclapp\Model\QuotationIdIdAddDefaultScalePricesToItemsPostRequest**](../Model/QuotationIdIdAddDefaultScalePricesToItemsPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response**](../Model/QuotationIdIdAcceptPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotationIdIdCreateNewVersionPost()`

```php
quotationIdIdCreateNewVersionPost($id, $body): \kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->quotationIdIdCreateNewVersionPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdCreateNewVersionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response**](../Model/QuotationIdIdAcceptPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotationIdIdCreatePublicPageLinkPost()`

```php
quotationIdIdCreatePublicPageLinkPost($id, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->quotationIdIdCreatePublicPageLinkPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdCreatePublicPageLinkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

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

## `quotationIdIdCreatePurchaseOrderRequestPost()`

```php
quotationIdIdCreatePurchaseOrderRequestPost($id, $quotation_id_id_create_purchase_order_request_post_request): \kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPost200Response
```



create a purchase order request  # Endpoint for creating a purchase order request for the specified quotation  To create a purchase order request from a sales order see `/salesOrder/id/{id}/createPurchaseOrderRequest`  ## Information on optional parameters  * If no `quotationItemIds` will be provided, all quotation items of the quotation will be used to create the purchase order request. * The parameter `useItemQuantity` can only be set to true for the request types `PURCHASE_ORDER_REQUEST` and `BLANKET_ORDER_REQUEST`. * The parameter `mergeItems` may only be set to true if `useItemQuantity` is also set to true.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$quotation_id_id_create_purchase_order_request_post_request = new \kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPostRequest(); // \kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPostRequest

try {
    $result = $apiInstance->quotationIdIdCreatePurchaseOrderRequestPost($id, $quotation_id_id_create_purchase_order_request_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdCreatePurchaseOrderRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **quotation_id_id_create_purchase_order_request_post_request** | [**\kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPostRequest**](../Model/QuotationIdIdCreatePurchaseOrderRequestPostRequest.md)|  | |

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

## `quotationIdIdCreateQuotationPdfPost()`

```php
quotationIdIdCreateQuotationPdfPost($id, $body): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->quotationIdIdCreateQuotationPdfPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdCreateQuotationPdfPost: ', $e->getMessage(), PHP_EOL;
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

## `quotationIdIdDelete()`

```php
quotationIdIdDelete($id, $dry_run)
```

delete a quotation

delete a quotation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->quotationIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `quotationIdIdDisablePublicPageLinkPost()`

```php
quotationIdIdDisablePublicPageLinkPost($id, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->quotationIdIdDisablePublicPageLinkPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdDisablePublicPageLinkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

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

## `quotationIdIdDownloadLatestQuotationPdfGet()`

```php
quotationIdIdDownloadLatestQuotationPdfGet($id): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->quotationIdIdDownloadLatestQuotationPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdDownloadLatestQuotationPdfGet: ', $e->getMessage(), PHP_EOL;
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

## `quotationIdIdGet()`

```php
quotationIdIdGet($id): \kruegge82\weclapp\Model\Quotation
```

query a specific quotation

query a specific quotation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->quotationIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\Quotation**](../Model/Quotation.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotationIdIdInquirePost()`

```php
quotationIdIdInquirePost($id, $quotation_id_id_inquire_post_request): \kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$quotation_id_id_inquire_post_request = new \kruegge82\weclapp\Model\QuotationIdIdInquirePostRequest(); // \kruegge82\weclapp\Model\QuotationIdIdInquirePostRequest

try {
    $result = $apiInstance->quotationIdIdInquirePost($id, $quotation_id_id_inquire_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdInquirePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **quotation_id_id_inquire_post_request** | [**\kruegge82\weclapp\Model\QuotationIdIdInquirePostRequest**](../Model/QuotationIdIdInquirePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response**](../Model/QuotationIdIdAcceptPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotationIdIdPut()`

```php
quotationIdIdPut($id, $quotation, $dry_run): \kruegge82\weclapp\Model\Quotation
```

update a quotation

update quotation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$quotation = new \kruegge82\weclapp\Model\Quotation(); // \kruegge82\weclapp\Model\Quotation
$dry_run = True; // bool

try {
    $result = $apiInstance->quotationIdIdPut($id, $quotation, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **quotation** | [**\kruegge82\weclapp\Model\Quotation**](../Model/Quotation.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\Quotation**](../Model/Quotation.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotationIdIdRecalculateCostsPost()`

```php
quotationIdIdRecalculateCostsPost($id, $body): \kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response
```



Recalculate costs for the quotation.  # Endpoint to recalculate the costs of the quotation  Recalculate costs of the items and with it the costs of the quotation. Costs are usually set/calculated for an item when added or edited. The costs usually have a source. The source can change at some time. The item costs are not recalculated. If you want to recalculate the costs based on the environment, you can use this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->quotationIdIdRecalculateCostsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdRecalculateCostsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response**](../Model/QuotationIdIdAcceptPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotationIdIdSetCostsForItemsWithoutCostPost()`

```php
quotationIdIdSetCostsForItemsWithoutCostPost($id, $quotation_id_id_set_costs_for_items_without_cost_post_request): \kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response
```



set unitCost of quotation items without unitCost  # Endpoint for setting the unit cost of quotation items and shipping cost items without unit cost to a fixed value  For a sales record item (or shipping cost item) with an article, `unitCost` is typically set based on the currently valid purchase price of the article's primary supply source. If the unit cost cannot be determined, e.g. because there is no valid purchase price or the item has no article, `unitCost` will be null. Instead of setting `unitCost` separately for each of these items, all of them can be updated at once with the present endpoint.  The parameter `costUpdateMode` determines the target value for `unitCost`: * `SET_TO_NET_UNIT_PRICE`: If the quotation's `salesChannel` is of type net, use `unitPrice`, otherwise use its net value `100 * unitPrice / (100 + taxValue)` (where `taxValue` is the value of the tax given by the item's `taxId`). * `SET_TO_ZERO`: Use zero.  For all updated items, `manualUnitCost` is set to true.  Items where `unitCost` is not null will not be touched.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$quotation_id_id_set_costs_for_items_without_cost_post_request = new \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest(); // \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest

try {
    $result = $apiInstance->quotationIdIdSetCostsForItemsWithoutCostPost($id, $quotation_id_id_set_costs_for_items_without_cost_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdSetCostsForItemsWithoutCostPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **quotation_id_id_set_costs_for_items_without_cost_post_request** | [**\kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest**](../Model/QuotationIdIdSetCostsForItemsWithoutCostPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response**](../Model/QuotationIdIdAcceptPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotationIdIdUpdatePricesPost()`

```php
quotationIdIdUpdatePricesPost($id, $body): \kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->quotationIdIdUpdatePricesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdUpdatePricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

[**\kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response**](../Model/QuotationIdIdAcceptPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotationPost()`

```php
quotationPost($quotation, $dry_run): \kruegge82\weclapp\Model\Quotation
```

create a quotation

create a quotation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\QuotationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quotation = new \kruegge82\weclapp\Model\Quotation(); // \kruegge82\weclapp\Model\Quotation
$dry_run = True; // bool

try {
    $result = $apiInstance->quotationPost($quotation, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quotation** | [**\kruegge82\weclapp\Model\Quotation**](../Model/Quotation.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\Quotation**](../Model/Quotation.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
