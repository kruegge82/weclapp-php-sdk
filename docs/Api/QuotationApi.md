# kruegge82\weclapp\QuotationApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**quotationCountGet()**](QuotationApi.md#quotationCountGet) | **GET** /quotation/count | count quotation |
| [**quotationGet()**](QuotationApi.md#quotationGet) | **GET** /quotation | query quotation |
| [**quotationIdIdAcceptPost()**](QuotationApi.md#quotationIdIdAcceptPost) | **POST** /quotation/id/{id}/accept |  |
| [**quotationIdIdAddDefaultScalePricesToItemsPost()**](QuotationApi.md#quotationIdIdAddDefaultScalePricesToItemsPost) | **POST** /quotation/id/{id}/addDefaultScalePricesToItems |  |
| [**quotationIdIdCalculateSalesPricesPost()**](QuotationApi.md#quotationIdIdCalculateSalesPricesPost) | **POST** /quotation/id/{id}/calculateSalesPrices |  |
| [**quotationIdIdCreateNewVersionPost()**](QuotationApi.md#quotationIdIdCreateNewVersionPost) | **POST** /quotation/id/{id}/createNewVersion |  |
| [**quotationIdIdCreatePublicPageLinkPost()**](QuotationApi.md#quotationIdIdCreatePublicPageLinkPost) | **POST** /quotation/id/{id}/createPublicPageLink |  |
| [**quotationIdIdCreatePurchaseOrderRequestPost()**](QuotationApi.md#quotationIdIdCreatePurchaseOrderRequestPost) | **POST** /quotation/id/{id}/createPurchaseOrderRequest |  |
| [**quotationIdIdCreateQuotationPdfPost()**](QuotationApi.md#quotationIdIdCreateQuotationPdfPost) | **POST** /quotation/id/{id}/createQuotationPdf |  |
| [**quotationIdIdDelete()**](QuotationApi.md#quotationIdIdDelete) | **DELETE** /quotation/id/{id} | delete a quotation |
| [**quotationIdIdDisablePublicPageLinkPost()**](QuotationApi.md#quotationIdIdDisablePublicPageLinkPost) | **POST** /quotation/id/{id}/disablePublicPageLink |  |
| [**quotationIdIdDownloadLatestQuotationPdfGet()**](QuotationApi.md#quotationIdIdDownloadLatestQuotationPdfGet) | **GET** /quotation/id/{id}/downloadLatestQuotationPdf |  |
| [**quotationIdIdGet()**](QuotationApi.md#quotationIdIdGet) | **GET** /quotation/id/{id} | query a specific quotation |
| [**quotationIdIdInquirePost()**](QuotationApi.md#quotationIdIdInquirePost) | **POST** /quotation/id/{id}/inquire |  |
| [**quotationIdIdPrintLabelPost()**](QuotationApi.md#quotationIdIdPrintLabelPost) | **POST** /quotation/id/{id}/printLabel |  |
| [**quotationIdIdPrintQuotationDataGet()**](QuotationApi.md#quotationIdIdPrintQuotationDataGet) | **GET** /quotation/id/{id}/printQuotationData |  |
| [**quotationIdIdPut()**](QuotationApi.md#quotationIdIdPut) | **PUT** /quotation/id/{id} | update a quotation |
| [**quotationIdIdRecalculateCostsPost()**](QuotationApi.md#quotationIdIdRecalculateCostsPost) | **POST** /quotation/id/{id}/recalculateCosts |  |
| [**quotationIdIdResetTaxesPost()**](QuotationApi.md#quotationIdIdResetTaxesPost) | **POST** /quotation/id/{id}/resetTaxes |  |
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

## `quotationIdIdCalculateSalesPricesPost()`

```php
quotationIdIdCalculateSalesPricesPost($id, $quotation_id_id_calculate_sales_prices_post_request): \kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response
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
$quotation_id_id_calculate_sales_prices_post_request = new \kruegge82\weclapp\Model\QuotationIdIdCalculateSalesPricesPostRequest(); // \kruegge82\weclapp\Model\QuotationIdIdCalculateSalesPricesPostRequest

try {
    $result = $apiInstance->quotationIdIdCalculateSalesPricesPost($id, $quotation_id_id_calculate_sales_prices_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdCalculateSalesPricesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **quotation_id_id_calculate_sales_prices_post_request** | [**\kruegge82\weclapp\Model\QuotationIdIdCalculateSalesPricesPostRequest**](../Model/QuotationIdIdCalculateSalesPricesPostRequest.md)|  | |

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

## `quotationIdIdPrintLabelPost()`

```php
quotationIdIdPrintLabelPost($id, $quotation_id_id_print_label_post_request): \SplFileObject
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
$quotation_id_id_print_label_post_request = new \kruegge82\weclapp\Model\QuotationIdIdPrintLabelPostRequest(); // \kruegge82\weclapp\Model\QuotationIdIdPrintLabelPostRequest

try {
    $result = $apiInstance->quotationIdIdPrintLabelPost($id, $quotation_id_id_print_label_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdPrintLabelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **quotation_id_id_print_label_post_request** | [**\kruegge82\weclapp\Model\QuotationIdIdPrintLabelPostRequest**](../Model/QuotationIdIdPrintLabelPostRequest.md)|  | |

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

## `quotationIdIdPrintQuotationDataGet()`

```php
quotationIdIdPrintQuotationDataGet($id): \SplFileObject
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
    $result = $apiInstance->quotationIdIdPrintQuotationDataGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdPrintQuotationDataGet: ', $e->getMessage(), PHP_EOL;
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

## `quotationIdIdResetTaxesPost()`

```php
quotationIdIdResetTaxesPost($id, $body): \kruegge82\weclapp\Model\QuotationIdIdAcceptPost200Response
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
    $result = $apiInstance->quotationIdIdResetTaxesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationApi->quotationIdIdResetTaxesPost: ', $e->getMessage(), PHP_EOL;
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
