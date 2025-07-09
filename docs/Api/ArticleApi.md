# kruegge82\weclapp\ArticleApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**articleCountGet()**](ArticleApi.md#articleCountGet) | **GET** /article/count | count article |
| [**articleGet()**](ArticleApi.md#articleGet) | **GET** /article | query article |
| [**articleIdIdChangeUnitPost()**](ArticleApi.md#articleIdIdChangeUnitPost) | **POST** /article/id/{id}/changeUnit |  |
| [**articleIdIdCreateDatasheetPdfPost()**](ArticleApi.md#articleIdIdCreateDatasheetPdfPost) | **POST** /article/id/{id}/createDatasheetPdf |  |
| [**articleIdIdCreateLabelPdfPost()**](ArticleApi.md#articleIdIdCreateLabelPdfPost) | **POST** /article/id/{id}/createLabelPdf |  |
| [**articleIdIdDelete()**](ArticleApi.md#articleIdIdDelete) | **DELETE** /article/id/{id} | delete a article |
| [**articleIdIdDownloadArticleImageGet()**](ArticleApi.md#articleIdIdDownloadArticleImageGet) | **GET** /article/id/{id}/downloadArticleImage |  |
| [**articleIdIdDownloadMainArticleImageGet()**](ArticleApi.md#articleIdIdDownloadMainArticleImageGet) | **GET** /article/id/{id}/downloadMainArticleImage |  |
| [**articleIdIdGet()**](ArticleApi.md#articleIdIdGet) | **GET** /article/id/{id} | query a specific article |
| [**articleIdIdPackagingUnitStructureGet()**](ArticleApi.md#articleIdIdPackagingUnitStructureGet) | **GET** /article/id/{id}/packagingUnitStructure |  |
| [**articleIdIdPut()**](ArticleApi.md#articleIdIdPut) | **PUT** /article/id/{id} | update a article |
| [**articleIdIdUploadArticleImagePost()**](ArticleApi.md#articleIdIdUploadArticleImagePost) | **POST** /article/id/{id}/uploadArticleImage |  |
| [**articlePost()**](ArticleApi.md#articlePost) | **POST** /article | create a article |


## `articleCountGet()`

```php
articleCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count article

count article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->articleCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleCountGet: ', $e->getMessage(), PHP_EOL;
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

## `articleGet()`

```php
articleGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties): \kruegge82\weclapp\Model\ArticleGet200Response
```

query article

query article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
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
    $result = $apiInstance->articleGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\ArticleGet200Response**](../Model/ArticleGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleIdIdChangeUnitPost()`

```php
articleIdIdChangeUnitPost($id, $article_id_id_change_unit_post_request): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$article_id_id_change_unit_post_request = new \kruegge82\weclapp\Model\ArticleIdIdChangeUnitPostRequest(); // \kruegge82\weclapp\Model\ArticleIdIdChangeUnitPostRequest

try {
    $result = $apiInstance->articleIdIdChangeUnitPost($id, $article_id_id_change_unit_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleIdIdChangeUnitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **article_id_id_change_unit_post_request** | [**\kruegge82\weclapp\Model\ArticleIdIdChangeUnitPostRequest**](../Model/ArticleIdIdChangeUnitPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response**](../Model/AccountingTransactionBatchBookingPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleIdIdCreateDatasheetPdfPost()`

```php
articleIdIdCreateDatasheetPdfPost($id, $article_id_id_create_datasheet_pdf_post_request): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$article_id_id_create_datasheet_pdf_post_request = new \kruegge82\weclapp\Model\ArticleIdIdCreateDatasheetPdfPostRequest(); // \kruegge82\weclapp\Model\ArticleIdIdCreateDatasheetPdfPostRequest

try {
    $result = $apiInstance->articleIdIdCreateDatasheetPdfPost($id, $article_id_id_create_datasheet_pdf_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleIdIdCreateDatasheetPdfPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **article_id_id_create_datasheet_pdf_post_request** | [**\kruegge82\weclapp\Model\ArticleIdIdCreateDatasheetPdfPostRequest**](../Model/ArticleIdIdCreateDatasheetPdfPostRequest.md)|  | |

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

## `articleIdIdCreateLabelPdfPost()`

```php
articleIdIdCreateLabelPdfPost($id, $article_id_id_create_label_pdf_post_request): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$article_id_id_create_label_pdf_post_request = new \kruegge82\weclapp\Model\ArticleIdIdCreateLabelPdfPostRequest(); // \kruegge82\weclapp\Model\ArticleIdIdCreateLabelPdfPostRequest

try {
    $result = $apiInstance->articleIdIdCreateLabelPdfPost($id, $article_id_id_create_label_pdf_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleIdIdCreateLabelPdfPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **article_id_id_create_label_pdf_post_request** | [**\kruegge82\weclapp\Model\ArticleIdIdCreateLabelPdfPostRequest**](../Model/ArticleIdIdCreateLabelPdfPostRequest.md)|  | |

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

## `articleIdIdDelete()`

```php
articleIdIdDelete($id, $dry_run)
```

delete a article

delete a article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->articleIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `articleIdIdDownloadArticleImageGet()`

```php
articleIdIdDownloadArticleImageGet($id, $article_image_id, $preview, $scale_width, $scale_height): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$article_image_id = 'article_image_id_example'; // string
$preview = True; // bool
$scale_width = 56; // int
$scale_height = 56; // int

try {
    $result = $apiInstance->articleIdIdDownloadArticleImageGet($id, $article_image_id, $preview, $scale_width, $scale_height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleIdIdDownloadArticleImageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **article_image_id** | **string**|  | |
| **preview** | **bool**|  | [optional] |
| **scale_width** | **int**|  | [optional] |
| **scale_height** | **int**|  | [optional] |

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

## `articleIdIdDownloadMainArticleImageGet()`

```php
articleIdIdDownloadMainArticleImageGet($id, $preview, $scale_width, $scale_height): \SplFileObject
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$preview = True; // bool
$scale_width = 56; // int
$scale_height = 56; // int

try {
    $result = $apiInstance->articleIdIdDownloadMainArticleImageGet($id, $preview, $scale_width, $scale_height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleIdIdDownloadMainArticleImageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **preview** | **bool**|  | [optional] |
| **scale_width** | **int**|  | [optional] |
| **scale_height** | **int**|  | [optional] |

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

## `articleIdIdGet()`

```php
articleIdIdGet($id): \kruegge82\weclapp\Model\Article
```

query a specific article

query a specific article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->articleIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\Article**](../Model/Article.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleIdIdPackagingUnitStructureGet()`

```php
articleIdIdPackagingUnitStructureGet($id): \kruegge82\weclapp\Model\ArticleIdIdPackagingUnitStructureGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->articleIdIdPackagingUnitStructureGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleIdIdPackagingUnitStructureGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ArticleIdIdPackagingUnitStructureGet200Response**](../Model/ArticleIdIdPackagingUnitStructureGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleIdIdPut()`

```php
articleIdIdPut($id, $article, $dry_run): \kruegge82\weclapp\Model\Article
```

update a article

update article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$article = new \kruegge82\weclapp\Model\Article(); // \kruegge82\weclapp\Model\Article
$dry_run = True; // bool

try {
    $result = $apiInstance->articleIdIdPut($id, $article, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **article** | [**\kruegge82\weclapp\Model\Article**](../Model/Article.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\Article**](../Model/Article.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleIdIdUploadArticleImagePost()`

```php
articleIdIdUploadArticleImagePost($id, $name, $body, $main_image, $article_image_id): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$name = 'name_example'; // string
$body = '/path/to/file.txt'; // \SplFileObject
$main_image = True; // bool
$article_image_id = 'article_image_id_example'; // string

try {
    $result = $apiInstance->articleIdIdUploadArticleImagePost($id, $name, $body, $main_image, $article_image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articleIdIdUploadArticleImagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **name** | **string**|  | |
| **body** | **\SplFileObject****\SplFileObject**|  | |
| **main_image** | **bool**|  | [optional] |
| **article_image_id** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response**](../Model/AccountingTransactionBatchBookingPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/pdf`, `image/jpeg`, `image/png`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articlePost()`

```php
articlePost($article, $dry_run): \kruegge82\weclapp\Model\Article
```

create a article

create a article

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$article = new \kruegge82\weclapp\Model\Article(); // \kruegge82\weclapp\Model\Article
$dry_run = True; // bool

try {
    $result = $apiInstance->articlePost($article, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleApi->articlePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **article** | [**\kruegge82\weclapp\Model\Article**](../Model/Article.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\Article**](../Model/Article.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
