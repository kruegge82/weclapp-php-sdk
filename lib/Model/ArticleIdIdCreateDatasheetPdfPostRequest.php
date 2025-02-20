<?php
/**
 * ArticleIdIdCreateDatasheetPdfPostRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * weclapp API
 *
 * # Getting Started   API Version:     **[v1](v1.html)**   The weclapp REST API lets you integrate weclapp with other applications or services.  The specification for this version can be downloaded here:  | Format                          | Public                                                                           | |---------------------------------|----------------------------------------------------------------------------------| | swagger JSON                    | <a href=\"swagger.json\" download=\"weclapp-swagger.json\">Download</a> | | OpenApi 3 JSON                  | <a href=\"openapi_v1.json\" download=\"weclapp-openapi.json\">Download</a> | | OpenApi 3 YAML (with user docs) | <a href=\"openapi_v1.yaml\" download=\"weclapp-openapi.yaml\">Download</a> |    ## What should I know before starting?  Our API is continuously being developed and improved, but we are still trying to keep it as stable as possible. We try to only have changes that are backwards compatible: usually the changes are only additions, e.g. new resources are implemented or new properties are added to existing resources. Sometimes breaking changes cannot be avoided, e.g. when a new feature requires an incompatible change to the underlying data model, all those changes will be documented in the change log.  ## Security and Authentication  You must be a verified user to make API requests. You can authorize against the API with an API token. The token is configurable in your weclapp account under **My settings > API**. Authentication is possible in multiple ways: If the request contains the session cookies of a logged in weclapp session then the user and permissions of that session are used. This is useful when testing the API in a web browser, because then requests are “automatically” authenticated if weclapp is used in another tab. But generally the API is not used from a browser or with session cookies, instead there is an API token for each user that can be used to authenticate requests. Each user can find his/her token on the \"My Settings page\". The token should be kept secret like a password. A user can also generate a new token at any time, doing that invalidates all previous tokens. Authenticating using a token is possible in two ways:  * the token can be sent using the AuthenticationToken header `AuthenticationToken: {api_token}` * the standard HTTP Basic authentication can be used: the username needs to be `“*”` and the password is the token  ## Using curl  ```bash curl --compressed -H \"AuthenticationToken:{api_token}\" \"https://<TENANT>.weclapp.com/webapp/api/v1\" ... ```  Examples of how to use curl will be shown in each section of this API.  ## Headers  This is a JSON-only API. You must supply a `Content-Type: application/json` header on PUT and POST operations. You must set a `Accept: application/json` header on all requests. You may get a `text/plain` response in case of error, e.g. in case of a bad request, you should treat this as an error you need to take action on.  To reduce traffic the weclapp API works with [compression](https://developer.mozilla.org/en-US/docs/Web/HTTP/Compression#end-to-end_compression). This means, a client should always submit the header “Accept-Encoding: gzip”. If this header is not set, the API will enforce compression and respond with \"Content-Encoding: gzip\".  Please also make sure to set a `User-Agent` header for all automated requests, as that makes it much easier to identify misbehaving clients.  ## URLs  The base URL for the API is `https://<TENANT>.weclapp.com/webapp/api/v1/` where `<TENANT>.weclapp.com` is the domain of the specific weclapp instance. So each weclapp instance has its own API endpoints which allow accessing data for that particular instance. The API provides access to various resources like customers, sales orders, articles etc.. Each of those resources implements a common set of operations. The URLs and HTTP methods for the different resource operations use the same pattern for all resources:  | Operation                     | HTTP Method | URL pattern                                                           | |-------------------------------|-------------|-----------------------------------------------------------------------| | Query/list instances          | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>`       | | total number of instances     | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/count` | | Get a specific instance by id | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` | | Create a new instance         | POST        | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>`       | | Update a specific instance    | PUT         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` | | Delete a specific instance    | DELETE      | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` |  Not all resources support all of those operations. A general description for each operation can be found in API operations by example, and details for each resource are described on the page for that resource.  ## Additional operations  Some resources allow further operations or actions. Those operations can be executed with a POST request, for some operations that only read data it is also possible to use a GET request (this is documented for each operation). For general operations for a resource the URL pattern is `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/<operation>`. Some operations are instance specific, those use the following URL pattern: `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>/<operation>`.      ## JSON  | Type                 | Representation in JSON                                                                                                                                                                                                                                                                                                                                                                         | |----------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | string               | Serialized as JSON string, empty strings (length 0 or only whitespace) are always interpreted as null, it is not possible to have a property with an empty string value.                                                                                                                                                                                                                       | | boolean              | Serialized as `true` / `false`.                                                                                                                                                                                                                                                                                                                                                                | | decimal number       | Most numbers in weclapp are decimal numbers with a fixed precision and scale (e.g. quantities or prices), they are serialized as JSON strings and not as JSON numbers to prevent accidental loss of precision when the JSON is deserialized with a JSON library that uses doubles to represent JSON numbers. The serialized numbers always use a “.” as the decimal mark (if one is required). | | integers             | Integer numbers (that can safely be represented as a double) are serialized as JSON numbers.                                                                                                                                                                                                                                                                                                   | | floats/doubles       | Serialized as JSON numbers.                                                                                                                                                                                                                                                                                                                                                                    | | dates and timestamps | Serialized as the milliseconds since 1970-01-01T00:00:00Z (as a JSON number).                                                                                                                                                                                                                                                                                                                  | | enums                | Sometimes a property value can be one of a fixed number of named options. Those enum properties are serialized as a JSON string with the name of the option.                                                                                                                                                                                                                                   |  The deserialization of data sent to the API is relatively lenient, for example when a string is expected, but a number is given then that number is used as the string and the other way around (if possible). Properties with the value null are not serialized by default and when sending data to the API it is also not necessary to include properties whose value is null: all properties that are missing from the JSON object but are expected are assumed to be `null`. To get all properties including those with the value null the query parameter `serializeNulls` can be added to the request URL, in that case null values are included in the response.    ## Error Responses  Any request on the weclapp API may return an error response, with a structure conforming to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807). See the [API error reference](#errors) section for details.      ## Change Policy  weclapp may modify the attributes and resources available to the API and our policies related to access and use of the API from time to time without advance notice. weclapp will use commercially reasonable efforts to notify you of any modifications to the API or policies through notifications or posts on the weclapp Developer Website. weclapp also tracks deprecation of attributes of the API on its Changelog. Modification of the API may have an adverse effect on weclapp Applications, including but not limited to changing the manner in which weclapp Applications communicate with the API and display or transmit Your Data. weclapp will not be liable to you or any third party for such modifications or any adverse effects resulting from such modifications    # API newsletter  Sign up here for our [API newsletter](https://340d89eb.sibforms.com/serve/MUIEAEREP3buQMWpwPwuVohmsPBikdVQIilNQeZ2DJBE5NZePFYqyp_62WSheCC5t_Q7eJ6SVpZBauqRY93L8L8Iquik5gaH40Bi0uOtPioS7U7k4JvemqVuSdvEV0A3DgygC5LOAv-kjuN4Ij5MUqzm5DSHYbmKvGucHMXpZMFGGA5Lwi5VUv6ZZbROGqZJCrGfYFxGttzVBqc_). We will inform you regularly about planned API changes.   # API operations sample  As mentioned previously all resources implement common operations in the same way. In the following all the common operations are explained for the `customer` resource. The operations work in the same way for all other resources (some resources don’t support all the operations), the differences between the resources are mostly the data and the properties that are required and used.  ## Querying  The most common operation is querying or listing the existing entity instances. This is possible with a `GET` request to the base URL of a resource:    ### `GET /customer`   ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"4342\",       \"version\": \"1\",       \"addresses\": [         {           \"id\": \"4344\",           \"version\": \"0\",           \"city\": \"München\",           \"countryCode\": \"DE\",           \"createdDate\": 1496828973904,           \"deliveryAddress\": false,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496828973903,           \"primeAddress\": true,           \"street1\": \"Mustergasse 7\",           \"zipcode\": \"80331 \"         }       ],       \"blocked\": false,       \"company\": \"Muster GmbH\",       \"contacts\": [         {           \"id\": \"4332\",           \"version\": \"1\",           \"addresses\": [             {               \"id\": \"4334\",               \"version\": \"0\",               \"city\": \"München\",               \"countryCode\": \"DE\",               \"createdDate\": 1496828882836,               \"deliveryAddress\": false,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1496828882836,               \"primeAddress\": true,               \"street1\": \"Fasanenweg 15\",               \"zipcode\": \"80331\"             }           ],           \"createdDate\": 1496828882837,           \"email\": \"mustermann@beispiel.de\",           \"firstName\": \"Max\",           \"lastModifiedDate\": 1496828996245,           \"lastName\": \"Mustermann\",           \"partyType\": \"PERSON\",           \"personCompany\": \"Muster GmbH\",           \"salutation\": \"MR\"         }       ],       \"createdDate\": 1496828973904,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\"         }       ],       \"customerNumber\": \"C1006\",       \"customerTopics\": [],       \"deliveryBlock\": false,       \"insolvent\": false,       \"insured\": false,       \"lastModifiedDate\": 1496828996212,       \"optIn\": false,       \"partyType\": \"ORGANIZATION\",       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"sales@weclapp.com\",       \"salesChannel\": \"NET1\",       \"useCustomsTariffNumber\": false     }   ] } ```  In this case there is one sales order with one order item. By default, all null values are omitted, to include them the query parameter serializeNulls can be used:    ### `GET /customer?serializeNulls`    ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?serializeNulls\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"4342\",       \"version\": \"1\",       \"addresses\": [         {           \"id\": \"4344\",           \"version\": \"0\",           \"city\": \"München\",           \"company\": null,           \"company2\": null,           \"countryCode\": \"DE\",           \"createdDate\": 1496828973904,           \"deliveryAddress\": false,           \"globalLocationNumber\": null,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496828973903,           \"postOfficeBoxCity\": null,           \"postOfficeBoxNumber\": null,           \"postOfficeBoxZipCode\": null,           \"primeAddress\": true,           \"state\": null,           \"street1\": \"Mustergasse 7\",           \"street2\": null,           \"zipcode\": \"80331 \"         }       ],       \"amountInsured\": null,       \"annualRevenue\": null,       \"birthDate\": null,       \"blockNotice\": null,       \"blocked\": false,       \"commercialLanguageId\": null,       \"company\": \"Muster GmbH\",       \"company2\": null,       \"contacts\": [         {           \"id\": \"4332\",           \"version\": \"1\",           \"addresses\": [             {               \"id\": \"4334\",               \"version\": \"0\",               \"city\": \"München\",               \"company\": null,               \"company2\": null,               \"countryCode\": \"DE\",               \"createdDate\": 1496828882836,               \"deliveryAddress\": false,               \"globalLocationNumber\": null,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1496828882836,               \"postOfficeBoxCity\": null,               \"postOfficeBoxNumber\": null,               \"postOfficeBoxZipCode\": null,               \"primeAddress\": true,               \"state\": null,               \"street1\": \"Fasanenweg 15\",               \"street2\": null,               \"zipcode\": \"80331\"             }           ],           \"birthDate\": null,           \"company\": null,           \"company2\": null,           \"createdDate\": 1496828882837,           \"customAttributes\": null,           \"description\": null,           \"email\": \"mustermann@beispiel.de\",           \"fax\": null,           \"firstName\": \"Max\",           \"fixPhone2\": null,           \"lastModifiedDate\": 1496828996245,           \"lastName\": \"Mustermann\",           \"middleName\": null,           \"mobilePhone1\": null,           \"mobilePhone2\": null,           \"partyType\": \"PERSON\",           \"personCompany\": \"Muster GmbH\",           \"personDepartment\": null,           \"personRole\": null,           \"phone\": null,           \"phoneHome\": null,           \"salutation\": \"MR\",           \"title\": null,           \"website\": null         }       ],       \"createdDate\": 1496828973904,       \"creditLimit\": null,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\",           \"booleanValue\": null,           \"dateValue\": null,           \"numberValue\": null,           \"selectedValueId\": null,           \"selectedValues\": null,           \"stringValue\": null         }       ],       \"customerCategoryId\": null,       \"customerCategoryName\": null,       \"customerNumber\": \"C1006\",       \"customerRating\": null,       \"customerTopics\": [],       \"defaultHeaderDiscount\": null,       \"defaultHeaderSurcharge\": null,       \"deliveryBlock\": false,       \"description\": null,       \"email\": null,       \"fax\": null,       \"firstName\": null,       \"insolvent\": false,       \"insured\": false,       \"invoiceContactId\": null,       \"lastModifiedDate\": 1496828996212,       \"lastName\": null,       \"leadSourceId\": null,       \"leadSourceName\": null,       \"middleName\": null,       \"mobilePhone1\": null,       \"oldCustomerNumber\": null,       \"optIn\": false,       \"parentPartyId\": null,       \"partyType\": \"ORGANIZATION\",       \"paymentMethodId\": null,       \"paymentMethodName\": null,       \"personCompany\": null,       \"personDepartment\": null,       \"personRole\": null,       \"phone\": null,       \"primaryContactId\": null,       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"sales@weclapp.com\",       \"salesChannel\": \"NET1\",       \"salutation\": null,       \"satisfaction\": null,       \"sectorId\": null,       \"sectorName\": null,       \"shipmentMethodId\": null,       \"shipmentMethodName\": null,       \"termOfPaymentId\": null,       \"termOfPaymentName\": null,       \"title\": null,       \"useCustomsTariffNumber\": false,       \"vatRegistrationNumber\": null,       \"website\": null     }   ] } ```  ## Pagination By default the operation will not return all entity instances but only the first 100, this can be changed by using the `pageSize` query parameter with the number of desired results. But `pageSize` cannot be arbitrarily high it is usually limited 1000 (exceptions to the default limits of 100 and 1000 are noted in the documentation for the specific resources). To get further results it is necessary to skip entity instances, this is done using the `page` query parameter. Examples:    ### `GET /customer?pageSize=10`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?pageSize=10\" ```  returns at most 10 instances  ### `GET /customer?page=2&pageSize=10`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?page=2&pageSize=10\" ```  returns the second page of results (the `page` parameter is one based, so `page=1` is the first page, which is also the default). Using those two parameters it is possible to implement pagination.  ## Sorting  It is also possible to change the order of the returned results using the `sort` parameter:  ### `GET /customer?sort=lastModifiedDate`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=lastModifiedDate\" ```  sort by `lastModifiedDate` (ascending).  ### `GET /customer?sort=-lastModifiedDate`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=-lastModifiedDate\" ```  sort by `lastModifiedDate` descending.  ### `GET /customer?sort=lastModifiedDate,-salesChannel`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=lastModifiedDate,-salesChannel\" ```  sort by `lastModifiedDate` (ascending) and then `salesChannel` descending.   It is generally possible to sort by most of the simple properties of an entity. It is possible to combine multiple sort orders by combining the property names with a comma. To sort in descending order just prepend a minus to the property name. If an unsupported or unknown property is specified then an error response is returned.  ## Filtering  It is often desired to get just a subset of the data, for example just the orders of a specific customer or created after a specific date. This is possible using filtering query parameters:    ### `GET /customer?salesChannel-eq=NET1`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?salesChannel-eq=NET1\" ```  customers for `salesChannel` `NET1`.  ### `GET /customer?createdDate-gt=1398436281262`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?createdDate-gt=1398436281262\" ```  customers created after the specified timestamp.  ### `GET /customer?salesChannel-eq=NET1&createdDate-gt=1398436281262`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?salesChannel-eq=NET1&createdDate-gt=1398436281262\" ```  customers for `salesChannel` `NET1` and created after the specified timestamp.  ### `GET /customer?customAttribute4587-eq=NEW`  ```bash curl --compressed -H \"\"\"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute4587-eq=NEW\" ```  customers with the value `NEW` for `customAttribute` with id 4587.  ### `GET /customer?customAttribute4587.entityReferences.entityId-eq=1234`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\"   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute4587.entityReferences.entityId-eq=1234\" ```  customers with an entity reference to an entity with the id 1234 for the `customAttribute` with the id 4587.  ### `GET /customAttributeDefinitions`  All attributeTypes are supported except `MULTISELECT_LIST`. CustomAttributes of attributeType `LIST` could be filtered by `customAttribute{customAttributeId}.id` or `customAttribute{customAttributeId}.value`.  ### `GET /customer?customAttribute3387.value-eq=OPTION1`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute3387.value-eq=OPTION1\" ```  customers with value `OPTION1` for `customAttribute` with id 3387.  A filtering query parameter consists of a property name and a filter operator joined together with a minus. If multiple filtering query parameter are specified then they are combined and the returned results match all of them. Filtering query parameters for unknown properties or properties that don’t support filtering are silently ignored.  The following filtering operators are supported (not all of them work for all property types):  | Operator | Meaning                                                                                                                                                                                     | |----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | eq       | equal                                                                                                                                                                                       | | ne       | not equal                                                                                                                                                                                   | | lt       | less than                                                                                                                                                                                   | | gt       | greater than                                                                                                                                                                                | | le       | less equal                                                                                                                                                                                  | | ge       | greater equal                                                                                                                                                                               | | null     | property is null (the query parameter value is ignored and can be omitted)                                                                                                                  | | notnull  | property is not null (the query parameter value is ignored and can be omitted)                                                                                                              | | like     | like expression (supports `%` and `_` as placeholders, similar to SQL LIKE)                                                                                                                 | | notlike  | not like expression                                                                                                                                                                         | | ilike    | like expression, ignoring case                                                                                                                                                              | | notilike | not like expression, ignoring case                                                                                                                                                          | | in       | the property value is in the specified list of values, the query parameter value must be a JSON array with the values in the correct type, for example `?customerNumber-in=[\"1006\",\"1007\"]` | | notin    | the property value is not in the specified list of values                                                                                                                                   |  ## \"Or\" condition filtering  In addition to the default behavior of linking filter expressions via \"and\" you can also link individual filter expressions via \"or\" by prefixing their parameter name with \"or-\":   ### `GET /customer?or-name-eq=charlie&or-name-eq=chaplin`   ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?or-name-eq=charlie&or-name-eq=chaplin\" ```  The above example is the equivalent of the expression `(name equals \"charlie\") or (name equals \"chaplin\")`   For combining `or` and `and` clauses you may also group `or` expressions by using `or<groupname>-` instead of the plain `or-` prefix:   ### `GET /customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12\" ```  The above example is the equivalent of the expression  ``` ((name equals charlie) or (name equals chaplin)) and ((responsibleUserUsername equals \"mrtest\") or (referenceNumber equals \"4711\")) and (commercialLanguageId equals \"12\") ```  Technically, the default \"or-\" variant is just a special case of this, using the empty String as group name.  ## Filter Expressions  **Warning: This is still a beta feature.**  In addition to individual filter properties it is also possible to specify complex filter expressions that can combine multiple conditions and express relations between properties. Example:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   https://<TENANT>.weclapp.com/webapp/api/v1/party \\   --get \\   --data-urlencode 'filter=(lower(contacts.firstName + \" \" + contacts.lastName) = \"Ertan Özdil\") and (lastModifiedDate >= \"2022-01-01T00:00:00Z\")' ```  * \"filter\" parameters are ANDed with other filter parameters * Property references in filter expressions have exactly the same form and semantics as for the individual filter parameters. * Multiple \"filter\" parameters may be used if needed.  ### Examples  Some more example filter expressions:  ```sql -- enum literals are specified as string literals (salesChannel in [\"NET1\", \"NET4\", \"NET5\"]) and (partyType = \"ORGANIZATION\")  -- normal arithmetic operations are supported. (unitPrice + unitPrice * salesTax) <= 49.99  -- elementary functions length(trim(notes)) <= 140  -- conditions can be combined with logical operators (not (contacts.firstName null)) or (currencyId = 4711) ```  ### Availabe Operations   ### arihmetic  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  addition | + | integer, float, string | integer, float, string | Addition of two numerical values or concatenation of two strings | |  subtraction | - | integer, float | integer, float |  | |  multiplication | * | integer, float | integer, float |  | |  division | / | integer, float | integer, float |  | |  negation | - | --- | integer, float |  |   ### comparison  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  equals | = | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  | |  not equals | != | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  | |  less than | < | integer, float, date | integer, float, date |  | |  greater than | > | integer, float, date | integer, float, date |  | |  Less than or equals | <= | integer, float, date | integer, float, date |  | |  Greater than or equals | >= | integer, float, date | integer, float, date |  | |  Pattern matching | ~ | string | string | Supports % and _ as placeholders, similar to SQL LIKE | |  Alternatives match | in | integer, float, string, boolean, date, enum | list | Value is one of the given alternatives | |  Property is null | null | integer, float, string, boolean, date, enum | --- |  |   ### logical  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  and | and | boolean | boolean |  | |  or | or | boolean | boolean |  | |  not | not | --- | boolean |  |   ### function  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  trim | trim | --- | string | Remove whitespace from both ends of a string | |  length | length | --- | string | Get the number of characters in a string | |  lower | lower | --- | string | Convert a string to lower case |   ### Type Coercion  Literals in the expression are interpreted as different types depending on their context:  * An `integer` literal being compared to a `date` property is interpreted as milliseconds since Epoch * A `string` literal being compared to a `date` property is interpreted as [ISO-8601 point in time](https://en.wikipedia.org/wiki/ISO_8601#Combined_date_and_time_representations) with optional milliseconds and required time zone. Examples:   * `2024-10-13T10:39:12+02:00`   * `2024-10-13T10:39:12.443+02:00`   * `2024-10-13T10:39:12Z`   * `2024-10-13T10:39:12+02:00` * A `string` literal being compared to an `enum` property is interpreted as enum constant * ID properties (i.e. properties named `id` or `<something>Id`) can be compared to both integer and string literals  ## Return only specific properties  Sometimes it is desirable to only fetch a subset of all properties, for example to save bandwidth. This is possible by specifying the desired properties using the `properties` query parameter:  ### `GET /customer?properties=id,customerNumber,salesChannel`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?properties=id,customerNumber,salesChannel\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3346\",       \"customerNumber\": \"C1002\",       \"salesChannel\": \"NET1\"     }   ] } ```  It is also possible to specify property paths:  ### `GET /customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName\" ```  If an unknown property or property path is specified then an error response is returned.  ```json {   \"result\": [     {       \"id\": \"3346\",       \"contacts\": [         {           \"id\": \"3731\",           \"lastName\": \"Mustermann\"         }       ],       \"customerNumber\": \"C1002\",       \"salesChannel\": \"NET1\"     }   ] } ```   ## Combinations  The query parameters for pagination, sorting, filtering and returning only specific properties can be combined to perform queries.   ## Counting  To determine the total number of entity instances the count operation can be used:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/count\" ```  It is possible to use the filtering query parameters from the querying operation with the count operation:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/count?salesChannel-eq=NET1\" ```  returns the number of customers for `salesChannel` `NET1`.   ## Referenced entities  The API offers the possibility to get the referenced entities for a query result in the same request. This way you can save subsequent requests and get all necessary and referenced data in one request. This feature can be used by simply specifying the parameter `includeReferencedEntities` and the primary key references as comma separated list. The API response will contain an additional object `referencedEntities`.   ### `GET /article?includeReferencedEntities=unitId,articleCategoryId`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/article?includeReferencedEntities=unitId,articleCategoryId&properties=id,name,unitId,articleCategoryId\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3235\",       \"name\": \"Testartikel 1\",       \"unitId\": \"2770\"     },     {       \"id\": \"3236\",       \"name\": \"Testartikel 2\",       \"unitId\": \"2770\"     },     {       \"id\": \"3237\",       \"articleCategoryId\": \"7035\",       \"name\": \"Testartikel 3\",       \"unitId\": \"2770\"     }   ],   \"referencedEntities\": {     \"unit\": [       {         \"id\": \"2770\",         \"version\": \"0\",         \"createdDate\": 1597915605986,         \"description\": \"Stück\",         \"lastModifiedDate\": 1597915605985,         \"name\": \"Stk.\"       }     ],     \"articleCategory\": [       {         \"id\": \"7035\",         \"version\": \"0\",         \"createdDate\": 1619778730348,         \"lastModifiedDate\": 1619778730348,         \"name\": \"Demo-Gruppe\"       }     ]   } } ```  ## Additional properties  In addition to the common properties, there are additional properties that can be optionally queried. These are calculated or complexly determined and must therefore be explicitly queried.  To use this function, only the parameter `additionalProperties` and the names of the additional properties must be specified as a comma-separated list. The response then contains the additional object `additionalProperties` with the property and an array of values. The index of the value object in this list also represents the reference to the respective entity.   ### `GET /article?additionalProperties=currentSalesPrice`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/article?additionalProperties=currentSalesPrice\" ```  **Output:**  ```json {   \"additionalProperties\": {     \"currentSalesPrice\": [       {         \"articleUnitPrice\": \"39.95\",         \"currencyId\": \"256\",         \"quantity\": \"1\",         \"reductionAdditionItems\": []       },       {         \"articleUnitPrice\": \"479.4\",         \"currencyId\": \"256\",         \"quantity\": \"1\",         \"reductionAdditionItems\": []       }     ]   } } ```   ## Dry-Run  Generic `PUT`, `POST` and `DELETE` endpoints support to perform operations in a \"dry-run-mode\". Where possible, business logic is executed and the data submitted by the requester is validated. To use this functionality the requester can set the optional query parameter \"`dryRun`\" (boolean, default: `false`). The return is as far as possible as with a productive execution, except that 200 \"ok\" is returned in case of success. The meta properties (id, version, createdDate, lastModifiedDate) are not included in \"dry-run-responses\".  ### `POST /salesOrder?dryRun=true`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X POST \"https://<TENANT>.weclapp.com/webapp/api/v1/salesOrder?dryRun=true\" \\   -d   '{ \"customerNumber\": \"4799\" }' ```  **Error Output:**  ```json {   \"detail\": \"customer not found\",   \"error\": \"customer not found\",   \"status\": 400,   \"title\": \"entity validation failed\",   \"type\": \"/webapp/view/api/errors.html#!/errors/validation\",   \"validationErrors\": [     {       \"detail\": \"referenced entity not found\",       \"instance\": \"salesOrder\",       \"location\": \"customerId\",       \"title\": \"referenced entity not found\",       \"type\": \"/webapp/view/api/errors.html#!/validation/reference\"     }   ] } ```  The response status will be 400 (Bad Request).  **Successful Output:**  ```json {   \"availability\": \"NOT_CHECKED\",   \"availabilityForAllWarehouses\": \"NOT_CHECKED\",   \"commissionSalesPartners\": [],   \"creatorId\": \"4451\",   \"currencyConversionDate\": 1699375721469,   \"currencyConversionRate\": \"1\",   \"customAttributes\": [],   \"customerId\": \"4799\",   \"customerNumber\": \"10000\",   \"deliveryAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"deliveryEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"disableEmailTemplate\": false,   \"dispatchCountryCode\": \"DE\",   \"factoring\": false,   \"fulfillmentProviderId\": \"3335\",   \"grossAmount\": \"0\",   \"grossAmountInCompanyCurrency\": \"0\",   \"headerDiscount\": \"0\",   \"headerSurcharge\": \"0\",   \"invoiceAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"invoiced\": false,   \"netAmount\": \"0\",   \"netAmountInCompanyCurrency\": \"0\",   \"nonStandardTaxId\": \"3492\",   \"nonStandardTaxName\": \"DE Steuerfrei Drittland (VK)\",   \"onlyServices\": false,   \"orderDate\": 1699311600000,   \"orderItems\": [],   \"paid\": false,   \"plannedShippingDate\": 1699311600000,   \"pricingDate\": 1699311600000,   \"projectMembers\": [],   \"projectModeActive\": false,   \"recordAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"recordCurrencyId\": \"256\",   \"recordCurrencyName\": \"EUR\",   \"recordEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"responsibleUserId\": \"4748\",   \"responsibleUserUsername\": \"karsten.kunde@example.com\",   \"salesChannel\": \"NET1\",   \"salesInvoiceEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"salesOrderPaymentType\": \"STANDARD\",   \"sentToRecipient\": false,   \"servicesFinished\": false,   \"shipped\": false,   \"shippingCostItems\": [],   \"shippingLabelsCount\": 1,   \"status\": \"ORDER_ENTRY_IN_PROGRESS\",   \"statusHistory\": [     {       \"status\": \"ORDER_ENTRY_IN_PROGRESS\",       \"statusDate\": 1699375721472,       \"userId\": \"4451\"     }   ],   \"tags\": [],   \"warehouseId\": \"4191\",   \"warehouseName\": \"Hauptlager\" } ```  The response status will be 200 (OK).   ## Optimistic locking  For the update operation the resources usually also support optimistic locking using the `version` property: if the `version` property is in the request body and it does not match the current `version`, then the request fails with an optimistic lock error. In that case the caller should again get the latest `version`, apply the changes and try the request again.   ## Basic Operations  The following entries will show you how to use the different basic operations (`GET`, `POST`, `PUT`, `DELETE`) and what an exemplary response they will give whether the operation was successful or not.   The following table will show you the HTTP status codes of the basic operations if the operation was successful:  | Operation | HTTP status code | |-----------|------------------| | GET       | 200 (OK)         | | POST      | 201 (Created)    | | PUT       | 200 (OK)         | | DELETE    | 204 (No Content) |  If you are not currently logged in to weclapp, you are using another browser or the AuthenticationToken was wrong you will get a response of `401 (Unauthorized)`. It is possible to disable the optimistic locking check by just omitting the `version` property, but doing this might accidentally overwrite changes done by another user in the meantime.  ## Get a specific entity instance  Each entity instance has its own URL where it can be retrieved. The URL is based on the entity id.  Performing a GET request on that URL returns the entity instance:  ### `GET /customer/id/3346`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/3346\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3346\",       \"version\": \"2\",       \"addresses\": [         {           \"id\": \"3348\",           \"version\": \"0\",           \"countryCode\": \"DE\",           \"createdDate\": 1487765943229,           \"deliveryAddress\": false,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1487765943229,           \"primeAddress\": true         },         {           \"id\": \"3976\",           \"version\": \"0\",           \"company\": \"11111\",           \"company2\": \"22222\",           \"countryCode\": \"DE\",           \"createdDate\": 1496040807652,           \"deliveryAddress\": false,           \"globalLocationNumber\": \"gln\",           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496040807648,           \"primeAddress\": false         }       ],       \"blocked\": false,       \"company\": \"Musterdaten GmbH\",       \"contacts\": [         {           \"id\": \"3377\",           \"version\": \"0\",           \"addresses\": [             {               \"id\": \"3379\",               \"version\": \"0\",               \"countryCode\": \"DE\",               \"createdDate\": 1487767121646,               \"deliveryAddress\": false,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1487767121645,               \"primeAddress\": true             }           ],           \"createdDate\": 1487767121649,           \"firstName\": \"Max\",           \"lastModifiedDate\": 1487767121642,           \"lastName\": \"Mustermann\",           \"partyType\": \"PERSON\",           \"personCompany\": \"Musterdaten GmbH\",           \"salutation\": \"MR\"         }       ],       \"createdDate\": 1487765943230,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\"         }       ],       \"customerNumber\": \"C1002\",       \"customerTopics\": [],       \"deliveryBlock\": false,       \"insolvent\": false,       \"insured\": false,       \"lastModifiedDate\": 1496040807672,       \"optIn\": false,       \"partyType\": \"ORGANIZATION\",       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"@weclapp.com\",       \"salesChannel\": \"NET1\",       \"useCustomsTariffNumber\": false     }   ] } ```  ## Create a new instance  Creating new instances is done by performing a POST request to the base URL of a resource.  The body for that request must have the same structure as the result of the \"get by id\" request, but usually not all properties need to be specified and there are defaults for some properties. Here are some general notes:  * id, version, createdDate and lastModifiedDate can usually not be set by the client, so those values are ignored if they are specified * references to other entities are often represented by two properties (usually id and some other more or less unique property of the referenced entity),   for example customer has currencyId and currencyName to reference the currency, when creating a new customer then it is not necessary   to specify both properties, one of them is usually enough as long as it specifies the referenced entity uniquely, if both are given then they   must not contradict each other * usually some required properties have sensible defaults, so if those are not given or null then the default will be used * boolean properties can be optional (default value would be set) or mandatory   ### `POST /customer`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X POST \"https://<TENANT>.weclapp.com/webapp/api/v1/customer\" \\   -d   '{ \"customerNumber\": \"C1013\", \"partyType\": \"ORGANIZATION\", \"company\": \"Firma\" }' ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"0\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"Firma\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496840784270,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```  The response status will be 201 (Created) and the response will have a `Location` header pointing to the URL of the created instance.   ## Update a specific instance  Updating an instances is done by performing a `PUT` request to the URL of the instance.  A successful response will have the status 200 (OK) and the response body will contain the updated entity.  Some special aspects must be considered when updating:  * the read-only properties like `createdDate` are ignored anyway, so they do not need to be given * `id` and `version` are processed as follows: if the `id` is given it must match the `id` of the updated instance and if the `version` is given then optimistic locking is enabled (see below) * for the references that use two properties it is again possible to specify only one of them, if both are given then they must not contradict each other * for complete entity updates boolean properties are always mandatory and need to be passed  ### Updating the complete entity  When updating it is generally necessary to specify all properties that are not `null`, all unspecified properties will be interpreted as `null`.  Since sometimes new properties are added to entities, it is strongly recommended that an API client always first gets the latest version using `GET/customer/id/{id}`, then modifies that JSON and finally performs the `PUT` request. Doing this ensures that new properties that the client does not know about are not accidentally overwritten with `null`.  In this example only the property \"company\" will be updated. All other properties are unchanged.  ### `PUT /customer/id/4391`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391\" \\   -d  @- <<JSON {   \"id\": \"4391\",   \"version\": \"0\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496840784270,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } JSON ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"1\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496842955268,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```  ### Updating only specific properties  It is also possible to update only specific properties. For this you only have to set the parameter `ignoreMissingProperties=true`. We recommend to always include `version` here as well to activate optimistic locking.  If you want to change lists (add, update or delete an item) stored in the entity, it is sufficient to specify the id for existing item entities.  In this example only the property \"company\" will be updated. All other properties are unchanged.  ### `PUT /customer/id/4391`    ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391?ignoreMissingProperties=true\" \\   -d '{ \"version\": \"0\", \"company\": \"NEUER FIRMENNAME!!!\" }' ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"1\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496842955268,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```   ### Optimistic locking   For the update operation the resources usually also support optimistic locking using the version property: if the version property is in the request body and it does not match the current version, then the request fails with an optimistic lock error. In that case the caller should again get the latest version, apply the changes and try the request again. It is possible to disable the optimistic locking check by just omitting the version property, but doing this might accidentally overwrite changes done by another user in the meantime.  ## Delete a specific instance  Deleting an instances is done by performing a `DELETE` request to the URL of the instance.  ### `DELETE /customer/id/{id}`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" -X DELETE \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391\" ```  If the deletion is possible it is performed and the response status will be 204 (No Content), otherwise an error response will be returned.  <span id=\"errors\"> </span>  # API error reference  weclapp API errors are basically conformant to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with some notable differences:  * The migration to the RFC 7807 structure is an ongoing process, so some compatibility mechanisms are in place for now:   * The responses come with \"`Content-Type: application/json`\" instead of \"`Content-Type: application/problem+json`\"   * The \"unstructured\" error responses that have been in use until now are still part of the response JSON, so existing code should work without changes.   * Detail information that _should_ be there according to the new structure may be still missing. This applies especially to all kinds of validation errors. * Two custom fields have been added to the response structure: \"location\" and \"validationErrors\". See the general description below and the individual error descriptions for details on these.  ## Error JSON structure  The error JSON is structured as described in [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with two additional properties:  | Property         | Datatype         | Description                                                                                                                                                                                                                                       | |------------------|------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | type             | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.              | | title            | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4).      | | status           | integer          | (RFC7807) The HTTP status code (RFC7231, Section 6) generated by the origin server for this occurrence of the problem.                                                                                                                            | | detail           | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem. This may be missing when the actual detail information either would be security sensitive (e.g. on unexpected errors) or is contained in the validationErrors. | | instance         | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this typically is the URI to the affected entity.                                      | | validationErrors | array of objects | List of found validation errors, with a structure modeled after RFC 7807 as well (see below).                                                                                                                                                     |  Validation errors have a similar structure:  | Property  | Datatype         | Description                                                                                                                                                                                                                                  | |-----------|------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | type      | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.         | | title     | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4). | | detail    | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem.                                                                                                                                                           | | errorCode | string           | Unique identifier of the concrete business error                                                                                                                                                                                             | | instance  | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this is the name of the affected parameter or the URI to the affected entity.     | | location  | string           | The JsonPath location of the affected property.                                                                                                                                                                                              | | allowed   | array of strings | List of allowed values, with semantics dependent on the concrete validation error.                                                                                                                                                           |   ## Error reference   <span id=\"!/errors/context\"></span>  ### \"context\": operation not possible in this context  |            |                                       | |------------|---------------------------------------| | description | The operation is not possible in this context or with the current state of the data                  | | type       | [/webapp/view/api/errors.html#!/errors/context](/webapp/view/api/errors.html#!/errors/context)        | | status     | 409 (Conflict)|  <span id=\"!/errors/conversation\"></span>  ### \"conversation\": existing conversation (parameter 'cid') is not allowed  |            |                                       | |------------|---------------------------------------| | description | The request was sent in the context of a running session, which is not allowed for the (stateless) API                  | | type       | [/webapp/view/api/errors.html#!/errors/conversation](/webapp/view/api/errors.html#!/errors/conversation)        | | status     | 400 (Bad Request)| | detail | human readable information on the conversation |  <span id=\"!/errors/entity_not_found\"></span>  ### \"entity_not_found\": (sub)entity not found  |            |                                       | |------------|---------------------------------------| | description | The specified entity or (more likely) a referenced sub-entity could not be found.                  | | type       | [/webapp/view/api/errors.html#!/errors/entity_not_found](/webapp/view/api/errors.html#!/errors/entity_not_found)        | | status     | 400 (Bad Request)|  <span id=\"!/errors/forbidden\"></span>  ### \"forbidden\": insufficient privileges  |            |                                       | |------------|---------------------------------------| | description | The provided credentials are not sufficient to perform the requested operation                  | | type       | [/webapp/view/api/errors.html#!/errors/forbidden](/webapp/view/api/errors.html#!/errors/forbidden)        | | status     | 403 (Forbidden)|  <span id=\"!/errors/invalid_json\"></span>  ### \"invalid_json\": invalid json  |            |                                       | |------------|---------------------------------------| | description | The JSON passed in the request body could not be parsed or the body is not JSON at all.                  | | type       | [/webapp/view/api/errors.html#!/errors/invalid_json](/webapp/view/api/errors.html#!/errors/invalid_json)        | | status     | 400 (Bad Request)|  <span id=\"!/errors/not_found\"></span>  ### \"not_found\": resource not found  |            |                                       | |------------|---------------------------------------| | description | The API endpoint / method / entity could not be found                  | | type       | [/webapp/view/api/errors.html#!/errors/not_found](/webapp/view/api/errors.html#!/errors/not_found)        | | status     | 404 (Not Found)|  <span id=\"!/errors/optimistic_lock\"></span>  ### \"optimistic_lock\": optimistic lock error  |            |                                       | |------------|---------------------------------------| | description | Optimistic Lock error. This appears if an entity you tried to modify has been modified by someone else in the meantime. See 'Optimistic Locking' in the 'API operations sample' section of the docs.                  | | type       | [/webapp/view/api/errors.html#!/errors/optimistic_lock](/webapp/view/api/errors.html#!/errors/optimistic_lock)        | | status     | 409 (Conflict)| | instance | URI to affected entity if available |  <span id=\"!/errors/persistence\"></span>  ### \"persistence\": persistence error  |            |                                       | |------------|---------------------------------------| | description | Catchall for persistence related problems that are not covered by more specific errors. In some cases it is sufficient to try again after a short time, but if the problem persists please contact support.                  | | type       | [/webapp/view/api/errors.html#!/errors/persistence](/webapp/view/api/errors.html#!/errors/persistence)        | | status     | 409 (Conflict)|  <span id=\"!/errors/unauthorized\"></span>  ### \"unauthorized\": missing permission  |            |                                       | |------------|---------------------------------------| | description | Authorization or authentication problem                  | | type       | [/webapp/view/api/errors.html#!/errors/unauthorized](/webapp/view/api/errors.html#!/errors/unauthorized)        | | status     | 401 (Unauthorized)|  <span id=\"!/errors/unexpected\"></span>  ### \"unexpected\": unexpected error  |            |                                       | |------------|---------------------------------------| | description | Catchall error for everything that is not covered by more specific errors. This is typically caused by a bug in weclapp.                  | | type       | [/webapp/view/api/errors.html#!/errors/unexpected](/webapp/view/api/errors.html#!/errors/unexpected)        | | status     | 500 (Internal Server Error)|  <span id=\"!/errors/unsupported_mime_type\"></span>  ### \"unsupported_mime_type\": unsupported mime type  |            |                                       | |------------|---------------------------------------| | description | The provided file type is not supported to perform the requested operation                  | | type       | [/webapp/view/api/errors.html#!/errors/unsupported_mime_type](/webapp/view/api/errors.html#!/errors/unsupported_mime_type)        | | status     | 415 (Unsupported Media Type)|  <span id=\"!/errors/validation\"></span>  ### \"validation\": validation failed  |            |                                       | |------------|---------------------------------------| | description | The input (entity properties / URL parameters) is malformed or not allowed in this context                  | | type       | [/webapp/view/api/errors.html#!/errors/validation](/webapp/view/api/errors.html#!/errors/validation)        | | status     | 400 (Bad Request)| | validationErrors | validation errors |  ## Validation error reference   <span id=\"!/validation/authorization\"></span>  ### \"authorization\": no authorization to access property or referenced entity  |            |                                       | |------------|---------------------------------------| | description | The client lacks authorization to access the property or referenced entity                  | | type       | [/webapp/view/api/errors.html#!/validation/authorization](/webapp/view/api/errors.html#!/validation/authorization)        |  <span id=\"!/validation/blocked\"></span>  ### \"blocked\": operation was blocked  |            |                                       | |------------|---------------------------------------| | description | The operation was blocked by referenced entities                  | | type       | [/webapp/view/api/errors.html#!/validation/blocked](/webapp/view/api/errors.html#!/validation/blocked)        |  <span id=\"!/validation/consistency\"></span>  ### \"consistency\": values are inconsistent  |            |                                       | |------------|---------------------------------------| | description | The given values are inconsistent (general, unspecific error)                  | | type       | [/webapp/view/api/errors.html#!/validation/consistency](/webapp/view/api/errors.html#!/validation/consistency)        |  <span id=\"!/validation/digits\"></span>  ### \"digits\": maximum number of digits exceeded  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has more than the allowed maximum number of integer and/or fractional digits                  | | type       | [/webapp/view/api/errors.html#!/validation/digits](/webapp/view/api/errors.html#!/validation/digits)        | | allowed | maximum allowed integer digits, maximum allowed fraction digits |  <span id=\"!/validation/duplicate\"></span>  ### \"duplicate\": entity is a duplicate  |            |                                       | |------------|---------------------------------------| | description | The given (sub-)entity is a duplicate                  | | type       | [/webapp/view/api/errors.html#!/validation/duplicate](/webapp/view/api/errors.html#!/validation/duplicate)        |  <span id=\"!/validation/email\"></span>  ### \"email\": not a well-formed email  |            |                                       | |------------|---------------------------------------| | description | The value given is not a well-formed email address                  | | type       | [/webapp/view/api/errors.html#!/validation/email](/webapp/view/api/errors.html#!/validation/email)        |  <span id=\"!/validation/email_or_domain\"></span>  ### \"email_or_domain\": not a well-formed email or domain  |            |                                       | |------------|---------------------------------------| | description | The value given is not a well-formed email address or internet domain name                  | | type       | [/webapp/view/api/errors.html#!/validation/email_or_domain](/webapp/view/api/errors.html#!/validation/email_or_domain)        |  <span id=\"!/validation/empty\"></span>  ### \"empty\": value must be empty  |            |                                       | |------------|---------------------------------------| | description | The value given must be left blank in this context, but is present                  | | type       | [/webapp/view/api/errors.html#!/validation/empty](/webapp/view/api/errors.html#!/validation/empty)        |  <span id=\"!/validation/enum\"></span>  ### \"enum\": unsupported enum value  |            |                                       | |------------|---------------------------------------| | description | The given enum value is unknown or unsupported in this context                  | | type       | [/webapp/view/api/errors.html#!/validation/enum](/webapp/view/api/errors.html#!/validation/enum)        | | allowed | all known / allowed (enum) values |  <span id=\"!/validation/future\"></span>  ### \"future\": timestamp has to be in the future  |            |                                       | |------------|---------------------------------------| | description | The given timestamp should be in the future but is not                  | | type       | [/webapp/view/api/errors.html#!/validation/future](/webapp/view/api/errors.html#!/validation/future)        |  <span id=\"!/validation/greater_than\"></span>  ### \"greater_than\": value has to be above allowed limit  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has to be larger than the allowed limit                  | | type       | [/webapp/view/api/errors.html#!/validation/greater_than](/webapp/view/api/errors.html#!/validation/greater_than)        | | allowed | lower limit (excluded) |  <span id=\"!/validation/less_than\"></span>  ### \"less_than\": value has to be below allowed limit  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has to be smaller than the allowed limit                  | | type       | [/webapp/view/api/errors.html#!/validation/less_than](/webapp/view/api/errors.html#!/validation/less_than)        | | allowed | upper limit (excluded) |  <span id=\"!/validation/max\"></span>  ### \"max\": value is above allowed maximum  |            |                                       | |------------|---------------------------------------| | description | The numerical value given is larger than the allowed maximum                  | | type       | [/webapp/view/api/errors.html#!/validation/max](/webapp/view/api/errors.html#!/validation/max)        | | allowed | maximum allowed value |  <span id=\"!/validation/min\"></span>  ### \"min\": value is below allowed minimum  |            |                                       | |------------|---------------------------------------| | description | The numerical value given is smaller than the allowed minimum                  | | type       | [/webapp/view/api/errors.html#!/validation/min](/webapp/view/api/errors.html#!/validation/min)        | | allowed | minimum allowed value |  <span id=\"!/validation/not_empty\"></span>  ### \"not_empty\": value must not be empty  |            |                                       | |------------|---------------------------------------| | description | The value given is required, but is missing or blank                  | | type       | [/webapp/view/api/errors.html#!/validation/not_empty](/webapp/view/api/errors.html#!/validation/not_empty)        |  <span id=\"!/validation/past\"></span>  ### \"past\": timestamp has to be in the past  |            |                                       | |------------|---------------------------------------| | description | The given timestamp should be in the past but is not                  | | type       | [/webapp/view/api/errors.html#!/validation/past](/webapp/view/api/errors.html#!/validation/past)        |  <span id=\"!/validation/pattern\"></span>  ### \"pattern\": value has to conform to a specific pattern  |            |                                       | |------------|---------------------------------------| | description | The text given does not conform to the allowed pattern                  | | type       | [/webapp/view/api/errors.html#!/validation/pattern](/webapp/view/api/errors.html#!/validation/pattern)        | | allowed | the pattern (regular expression) |  <span id=\"!/validation/reference\"></span>  ### \"reference\": referenced entity not found  |            |                                       | |------------|---------------------------------------| | description | The referenced entity could not be found                  | | type       | [/webapp/view/api/errors.html#!/validation/reference](/webapp/view/api/errors.html#!/validation/reference)        |  <span id=\"!/validation/size\"></span>  ### \"size\": size is outside allowed range  |            |                                       | |------------|---------------------------------------| | description | The text or collection given has not enough or too many characters or elements                  | | type       | [/webapp/view/api/errors.html#!/validation/size](/webapp/view/api/errors.html#!/validation/size)        | | allowed | minimum size, maximum size |  <span id=\"!/validation/syntax\"></span>  ### \"syntax\": expression cannot be interpreted  |            |                                       | |------------|---------------------------------------| | description | The given expression does not conform to the expression syntax                  | | type       | [/webapp/view/api/errors.html#!/validation/syntax](/webapp/view/api/errors.html#!/validation/syntax)        |  <span id=\"!/validation/type\"></span>  ### \"type\": unexpected data type  |            |                                       | |------------|---------------------------------------| | description | The given value is of a data type that's not supported in this context                  | | type       | [/webapp/view/api/errors.html#!/validation/type](/webapp/view/api/errors.html#!/validation/type)        |
 *
 * The version of the OpenAPI document: 1
 * Contact: support@weclapp.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\weclapp\Model;

use \ArrayAccess;
use \kruegge82\weclapp\ObjectSerializer;

/**
 * ArticleIdIdCreateDatasheetPdfPostRequest Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ArticleIdIdCreateDatasheetPdfPostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_article_id__id__createDatasheetPdf_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commercial_language_id' => 'string',
        'sales_channel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'commercial_language_id' => null,
        'sales_channel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'commercial_language_id' => false,
        'sales_channel' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'commercial_language_id' => 'commercialLanguageId',
        'sales_channel' => 'salesChannel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commercial_language_id' => 'setCommercialLanguageId',
        'sales_channel' => 'setSalesChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commercial_language_id' => 'getCommercialLanguageId',
        'sales_channel' => 'getSalesChannel'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const SALES_CHANNEL_GROSS1 = 'GROSS1';
    public const SALES_CHANNEL_GROSS10 = 'GROSS10';
    public const SALES_CHANNEL_GROSS100 = 'GROSS100';
    public const SALES_CHANNEL_GROSS101 = 'GROSS101';
    public const SALES_CHANNEL_GROSS102 = 'GROSS102';
    public const SALES_CHANNEL_GROSS103 = 'GROSS103';
    public const SALES_CHANNEL_GROSS104 = 'GROSS104';
    public const SALES_CHANNEL_GROSS105 = 'GROSS105';
    public const SALES_CHANNEL_GROSS106 = 'GROSS106';
    public const SALES_CHANNEL_GROSS107 = 'GROSS107';
    public const SALES_CHANNEL_GROSS108 = 'GROSS108';
    public const SALES_CHANNEL_GROSS109 = 'GROSS109';
    public const SALES_CHANNEL_GROSS11 = 'GROSS11';
    public const SALES_CHANNEL_GROSS110 = 'GROSS110';
    public const SALES_CHANNEL_GROSS111 = 'GROSS111';
    public const SALES_CHANNEL_GROSS112 = 'GROSS112';
    public const SALES_CHANNEL_GROSS113 = 'GROSS113';
    public const SALES_CHANNEL_GROSS114 = 'GROSS114';
    public const SALES_CHANNEL_GROSS115 = 'GROSS115';
    public const SALES_CHANNEL_GROSS116 = 'GROSS116';
    public const SALES_CHANNEL_GROSS117 = 'GROSS117';
    public const SALES_CHANNEL_GROSS118 = 'GROSS118';
    public const SALES_CHANNEL_GROSS119 = 'GROSS119';
    public const SALES_CHANNEL_GROSS12 = 'GROSS12';
    public const SALES_CHANNEL_GROSS120 = 'GROSS120';
    public const SALES_CHANNEL_GROSS121 = 'GROSS121';
    public const SALES_CHANNEL_GROSS122 = 'GROSS122';
    public const SALES_CHANNEL_GROSS123 = 'GROSS123';
    public const SALES_CHANNEL_GROSS124 = 'GROSS124';
    public const SALES_CHANNEL_GROSS125 = 'GROSS125';
    public const SALES_CHANNEL_GROSS126 = 'GROSS126';
    public const SALES_CHANNEL_GROSS127 = 'GROSS127';
    public const SALES_CHANNEL_GROSS128 = 'GROSS128';
    public const SALES_CHANNEL_GROSS129 = 'GROSS129';
    public const SALES_CHANNEL_GROSS13 = 'GROSS13';
    public const SALES_CHANNEL_GROSS130 = 'GROSS130';
    public const SALES_CHANNEL_GROSS131 = 'GROSS131';
    public const SALES_CHANNEL_GROSS132 = 'GROSS132';
    public const SALES_CHANNEL_GROSS133 = 'GROSS133';
    public const SALES_CHANNEL_GROSS134 = 'GROSS134';
    public const SALES_CHANNEL_GROSS135 = 'GROSS135';
    public const SALES_CHANNEL_GROSS136 = 'GROSS136';
    public const SALES_CHANNEL_GROSS137 = 'GROSS137';
    public const SALES_CHANNEL_GROSS138 = 'GROSS138';
    public const SALES_CHANNEL_GROSS139 = 'GROSS139';
    public const SALES_CHANNEL_GROSS14 = 'GROSS14';
    public const SALES_CHANNEL_GROSS140 = 'GROSS140';
    public const SALES_CHANNEL_GROSS141 = 'GROSS141';
    public const SALES_CHANNEL_GROSS142 = 'GROSS142';
    public const SALES_CHANNEL_GROSS143 = 'GROSS143';
    public const SALES_CHANNEL_GROSS144 = 'GROSS144';
    public const SALES_CHANNEL_GROSS145 = 'GROSS145';
    public const SALES_CHANNEL_GROSS146 = 'GROSS146';
    public const SALES_CHANNEL_GROSS147 = 'GROSS147';
    public const SALES_CHANNEL_GROSS148 = 'GROSS148';
    public const SALES_CHANNEL_GROSS149 = 'GROSS149';
    public const SALES_CHANNEL_GROSS15 = 'GROSS15';
    public const SALES_CHANNEL_GROSS150 = 'GROSS150';
    public const SALES_CHANNEL_GROSS151 = 'GROSS151';
    public const SALES_CHANNEL_GROSS152 = 'GROSS152';
    public const SALES_CHANNEL_GROSS153 = 'GROSS153';
    public const SALES_CHANNEL_GROSS154 = 'GROSS154';
    public const SALES_CHANNEL_GROSS155 = 'GROSS155';
    public const SALES_CHANNEL_GROSS156 = 'GROSS156';
    public const SALES_CHANNEL_GROSS157 = 'GROSS157';
    public const SALES_CHANNEL_GROSS158 = 'GROSS158';
    public const SALES_CHANNEL_GROSS159 = 'GROSS159';
    public const SALES_CHANNEL_GROSS16 = 'GROSS16';
    public const SALES_CHANNEL_GROSS160 = 'GROSS160';
    public const SALES_CHANNEL_GROSS161 = 'GROSS161';
    public const SALES_CHANNEL_GROSS162 = 'GROSS162';
    public const SALES_CHANNEL_GROSS163 = 'GROSS163';
    public const SALES_CHANNEL_GROSS164 = 'GROSS164';
    public const SALES_CHANNEL_GROSS165 = 'GROSS165';
    public const SALES_CHANNEL_GROSS166 = 'GROSS166';
    public const SALES_CHANNEL_GROSS167 = 'GROSS167';
    public const SALES_CHANNEL_GROSS168 = 'GROSS168';
    public const SALES_CHANNEL_GROSS169 = 'GROSS169';
    public const SALES_CHANNEL_GROSS17 = 'GROSS17';
    public const SALES_CHANNEL_GROSS170 = 'GROSS170';
    public const SALES_CHANNEL_GROSS171 = 'GROSS171';
    public const SALES_CHANNEL_GROSS172 = 'GROSS172';
    public const SALES_CHANNEL_GROSS173 = 'GROSS173';
    public const SALES_CHANNEL_GROSS174 = 'GROSS174';
    public const SALES_CHANNEL_GROSS175 = 'GROSS175';
    public const SALES_CHANNEL_GROSS176 = 'GROSS176';
    public const SALES_CHANNEL_GROSS177 = 'GROSS177';
    public const SALES_CHANNEL_GROSS178 = 'GROSS178';
    public const SALES_CHANNEL_GROSS179 = 'GROSS179';
    public const SALES_CHANNEL_GROSS18 = 'GROSS18';
    public const SALES_CHANNEL_GROSS180 = 'GROSS180';
    public const SALES_CHANNEL_GROSS181 = 'GROSS181';
    public const SALES_CHANNEL_GROSS182 = 'GROSS182';
    public const SALES_CHANNEL_GROSS183 = 'GROSS183';
    public const SALES_CHANNEL_GROSS184 = 'GROSS184';
    public const SALES_CHANNEL_GROSS185 = 'GROSS185';
    public const SALES_CHANNEL_GROSS186 = 'GROSS186';
    public const SALES_CHANNEL_GROSS187 = 'GROSS187';
    public const SALES_CHANNEL_GROSS188 = 'GROSS188';
    public const SALES_CHANNEL_GROSS189 = 'GROSS189';
    public const SALES_CHANNEL_GROSS19 = 'GROSS19';
    public const SALES_CHANNEL_GROSS190 = 'GROSS190';
    public const SALES_CHANNEL_GROSS191 = 'GROSS191';
    public const SALES_CHANNEL_GROSS192 = 'GROSS192';
    public const SALES_CHANNEL_GROSS193 = 'GROSS193';
    public const SALES_CHANNEL_GROSS194 = 'GROSS194';
    public const SALES_CHANNEL_GROSS195 = 'GROSS195';
    public const SALES_CHANNEL_GROSS196 = 'GROSS196';
    public const SALES_CHANNEL_GROSS197 = 'GROSS197';
    public const SALES_CHANNEL_GROSS198 = 'GROSS198';
    public const SALES_CHANNEL_GROSS199 = 'GROSS199';
    public const SALES_CHANNEL_GROSS2 = 'GROSS2';
    public const SALES_CHANNEL_GROSS20 = 'GROSS20';
    public const SALES_CHANNEL_GROSS200 = 'GROSS200';
    public const SALES_CHANNEL_GROSS201 = 'GROSS201';
    public const SALES_CHANNEL_GROSS202 = 'GROSS202';
    public const SALES_CHANNEL_GROSS203 = 'GROSS203';
    public const SALES_CHANNEL_GROSS204 = 'GROSS204';
    public const SALES_CHANNEL_GROSS205 = 'GROSS205';
    public const SALES_CHANNEL_GROSS206 = 'GROSS206';
    public const SALES_CHANNEL_GROSS207 = 'GROSS207';
    public const SALES_CHANNEL_GROSS208 = 'GROSS208';
    public const SALES_CHANNEL_GROSS209 = 'GROSS209';
    public const SALES_CHANNEL_GROSS21 = 'GROSS21';
    public const SALES_CHANNEL_GROSS210 = 'GROSS210';
    public const SALES_CHANNEL_GROSS211 = 'GROSS211';
    public const SALES_CHANNEL_GROSS212 = 'GROSS212';
    public const SALES_CHANNEL_GROSS213 = 'GROSS213';
    public const SALES_CHANNEL_GROSS214 = 'GROSS214';
    public const SALES_CHANNEL_GROSS215 = 'GROSS215';
    public const SALES_CHANNEL_GROSS216 = 'GROSS216';
    public const SALES_CHANNEL_GROSS217 = 'GROSS217';
    public const SALES_CHANNEL_GROSS218 = 'GROSS218';
    public const SALES_CHANNEL_GROSS219 = 'GROSS219';
    public const SALES_CHANNEL_GROSS22 = 'GROSS22';
    public const SALES_CHANNEL_GROSS220 = 'GROSS220';
    public const SALES_CHANNEL_GROSS221 = 'GROSS221';
    public const SALES_CHANNEL_GROSS222 = 'GROSS222';
    public const SALES_CHANNEL_GROSS223 = 'GROSS223';
    public const SALES_CHANNEL_GROSS224 = 'GROSS224';
    public const SALES_CHANNEL_GROSS225 = 'GROSS225';
    public const SALES_CHANNEL_GROSS226 = 'GROSS226';
    public const SALES_CHANNEL_GROSS227 = 'GROSS227';
    public const SALES_CHANNEL_GROSS228 = 'GROSS228';
    public const SALES_CHANNEL_GROSS229 = 'GROSS229';
    public const SALES_CHANNEL_GROSS23 = 'GROSS23';
    public const SALES_CHANNEL_GROSS230 = 'GROSS230';
    public const SALES_CHANNEL_GROSS231 = 'GROSS231';
    public const SALES_CHANNEL_GROSS232 = 'GROSS232';
    public const SALES_CHANNEL_GROSS233 = 'GROSS233';
    public const SALES_CHANNEL_GROSS234 = 'GROSS234';
    public const SALES_CHANNEL_GROSS235 = 'GROSS235';
    public const SALES_CHANNEL_GROSS236 = 'GROSS236';
    public const SALES_CHANNEL_GROSS237 = 'GROSS237';
    public const SALES_CHANNEL_GROSS238 = 'GROSS238';
    public const SALES_CHANNEL_GROSS239 = 'GROSS239';
    public const SALES_CHANNEL_GROSS24 = 'GROSS24';
    public const SALES_CHANNEL_GROSS240 = 'GROSS240';
    public const SALES_CHANNEL_GROSS241 = 'GROSS241';
    public const SALES_CHANNEL_GROSS242 = 'GROSS242';
    public const SALES_CHANNEL_GROSS243 = 'GROSS243';
    public const SALES_CHANNEL_GROSS244 = 'GROSS244';
    public const SALES_CHANNEL_GROSS245 = 'GROSS245';
    public const SALES_CHANNEL_GROSS246 = 'GROSS246';
    public const SALES_CHANNEL_GROSS247 = 'GROSS247';
    public const SALES_CHANNEL_GROSS248 = 'GROSS248';
    public const SALES_CHANNEL_GROSS249 = 'GROSS249';
    public const SALES_CHANNEL_GROSS25 = 'GROSS25';
    public const SALES_CHANNEL_GROSS250 = 'GROSS250';
    public const SALES_CHANNEL_GROSS251 = 'GROSS251';
    public const SALES_CHANNEL_GROSS252 = 'GROSS252';
    public const SALES_CHANNEL_GROSS253 = 'GROSS253';
    public const SALES_CHANNEL_GROSS254 = 'GROSS254';
    public const SALES_CHANNEL_GROSS255 = 'GROSS255';
    public const SALES_CHANNEL_GROSS256 = 'GROSS256';
    public const SALES_CHANNEL_GROSS257 = 'GROSS257';
    public const SALES_CHANNEL_GROSS258 = 'GROSS258';
    public const SALES_CHANNEL_GROSS259 = 'GROSS259';
    public const SALES_CHANNEL_GROSS26 = 'GROSS26';
    public const SALES_CHANNEL_GROSS260 = 'GROSS260';
    public const SALES_CHANNEL_GROSS261 = 'GROSS261';
    public const SALES_CHANNEL_GROSS262 = 'GROSS262';
    public const SALES_CHANNEL_GROSS263 = 'GROSS263';
    public const SALES_CHANNEL_GROSS264 = 'GROSS264';
    public const SALES_CHANNEL_GROSS265 = 'GROSS265';
    public const SALES_CHANNEL_GROSS266 = 'GROSS266';
    public const SALES_CHANNEL_GROSS267 = 'GROSS267';
    public const SALES_CHANNEL_GROSS268 = 'GROSS268';
    public const SALES_CHANNEL_GROSS269 = 'GROSS269';
    public const SALES_CHANNEL_GROSS27 = 'GROSS27';
    public const SALES_CHANNEL_GROSS270 = 'GROSS270';
    public const SALES_CHANNEL_GROSS271 = 'GROSS271';
    public const SALES_CHANNEL_GROSS272 = 'GROSS272';
    public const SALES_CHANNEL_GROSS273 = 'GROSS273';
    public const SALES_CHANNEL_GROSS274 = 'GROSS274';
    public const SALES_CHANNEL_GROSS275 = 'GROSS275';
    public const SALES_CHANNEL_GROSS276 = 'GROSS276';
    public const SALES_CHANNEL_GROSS277 = 'GROSS277';
    public const SALES_CHANNEL_GROSS278 = 'GROSS278';
    public const SALES_CHANNEL_GROSS279 = 'GROSS279';
    public const SALES_CHANNEL_GROSS28 = 'GROSS28';
    public const SALES_CHANNEL_GROSS280 = 'GROSS280';
    public const SALES_CHANNEL_GROSS281 = 'GROSS281';
    public const SALES_CHANNEL_GROSS282 = 'GROSS282';
    public const SALES_CHANNEL_GROSS283 = 'GROSS283';
    public const SALES_CHANNEL_GROSS284 = 'GROSS284';
    public const SALES_CHANNEL_GROSS285 = 'GROSS285';
    public const SALES_CHANNEL_GROSS286 = 'GROSS286';
    public const SALES_CHANNEL_GROSS287 = 'GROSS287';
    public const SALES_CHANNEL_GROSS288 = 'GROSS288';
    public const SALES_CHANNEL_GROSS289 = 'GROSS289';
    public const SALES_CHANNEL_GROSS29 = 'GROSS29';
    public const SALES_CHANNEL_GROSS290 = 'GROSS290';
    public const SALES_CHANNEL_GROSS291 = 'GROSS291';
    public const SALES_CHANNEL_GROSS292 = 'GROSS292';
    public const SALES_CHANNEL_GROSS293 = 'GROSS293';
    public const SALES_CHANNEL_GROSS294 = 'GROSS294';
    public const SALES_CHANNEL_GROSS295 = 'GROSS295';
    public const SALES_CHANNEL_GROSS296 = 'GROSS296';
    public const SALES_CHANNEL_GROSS297 = 'GROSS297';
    public const SALES_CHANNEL_GROSS298 = 'GROSS298';
    public const SALES_CHANNEL_GROSS299 = 'GROSS299';
    public const SALES_CHANNEL_GROSS3 = 'GROSS3';
    public const SALES_CHANNEL_GROSS30 = 'GROSS30';
    public const SALES_CHANNEL_GROSS300 = 'GROSS300';
    public const SALES_CHANNEL_GROSS31 = 'GROSS31';
    public const SALES_CHANNEL_GROSS32 = 'GROSS32';
    public const SALES_CHANNEL_GROSS33 = 'GROSS33';
    public const SALES_CHANNEL_GROSS34 = 'GROSS34';
    public const SALES_CHANNEL_GROSS35 = 'GROSS35';
    public const SALES_CHANNEL_GROSS36 = 'GROSS36';
    public const SALES_CHANNEL_GROSS37 = 'GROSS37';
    public const SALES_CHANNEL_GROSS38 = 'GROSS38';
    public const SALES_CHANNEL_GROSS39 = 'GROSS39';
    public const SALES_CHANNEL_GROSS4 = 'GROSS4';
    public const SALES_CHANNEL_GROSS40 = 'GROSS40';
    public const SALES_CHANNEL_GROSS41 = 'GROSS41';
    public const SALES_CHANNEL_GROSS42 = 'GROSS42';
    public const SALES_CHANNEL_GROSS43 = 'GROSS43';
    public const SALES_CHANNEL_GROSS44 = 'GROSS44';
    public const SALES_CHANNEL_GROSS45 = 'GROSS45';
    public const SALES_CHANNEL_GROSS46 = 'GROSS46';
    public const SALES_CHANNEL_GROSS47 = 'GROSS47';
    public const SALES_CHANNEL_GROSS48 = 'GROSS48';
    public const SALES_CHANNEL_GROSS49 = 'GROSS49';
    public const SALES_CHANNEL_GROSS5 = 'GROSS5';
    public const SALES_CHANNEL_GROSS50 = 'GROSS50';
    public const SALES_CHANNEL_GROSS51 = 'GROSS51';
    public const SALES_CHANNEL_GROSS52 = 'GROSS52';
    public const SALES_CHANNEL_GROSS53 = 'GROSS53';
    public const SALES_CHANNEL_GROSS54 = 'GROSS54';
    public const SALES_CHANNEL_GROSS55 = 'GROSS55';
    public const SALES_CHANNEL_GROSS56 = 'GROSS56';
    public const SALES_CHANNEL_GROSS57 = 'GROSS57';
    public const SALES_CHANNEL_GROSS58 = 'GROSS58';
    public const SALES_CHANNEL_GROSS59 = 'GROSS59';
    public const SALES_CHANNEL_GROSS6 = 'GROSS6';
    public const SALES_CHANNEL_GROSS60 = 'GROSS60';
    public const SALES_CHANNEL_GROSS61 = 'GROSS61';
    public const SALES_CHANNEL_GROSS62 = 'GROSS62';
    public const SALES_CHANNEL_GROSS63 = 'GROSS63';
    public const SALES_CHANNEL_GROSS64 = 'GROSS64';
    public const SALES_CHANNEL_GROSS65 = 'GROSS65';
    public const SALES_CHANNEL_GROSS66 = 'GROSS66';
    public const SALES_CHANNEL_GROSS67 = 'GROSS67';
    public const SALES_CHANNEL_GROSS68 = 'GROSS68';
    public const SALES_CHANNEL_GROSS69 = 'GROSS69';
    public const SALES_CHANNEL_GROSS7 = 'GROSS7';
    public const SALES_CHANNEL_GROSS70 = 'GROSS70';
    public const SALES_CHANNEL_GROSS71 = 'GROSS71';
    public const SALES_CHANNEL_GROSS72 = 'GROSS72';
    public const SALES_CHANNEL_GROSS73 = 'GROSS73';
    public const SALES_CHANNEL_GROSS74 = 'GROSS74';
    public const SALES_CHANNEL_GROSS75 = 'GROSS75';
    public const SALES_CHANNEL_GROSS76 = 'GROSS76';
    public const SALES_CHANNEL_GROSS77 = 'GROSS77';
    public const SALES_CHANNEL_GROSS78 = 'GROSS78';
    public const SALES_CHANNEL_GROSS79 = 'GROSS79';
    public const SALES_CHANNEL_GROSS8 = 'GROSS8';
    public const SALES_CHANNEL_GROSS80 = 'GROSS80';
    public const SALES_CHANNEL_GROSS81 = 'GROSS81';
    public const SALES_CHANNEL_GROSS82 = 'GROSS82';
    public const SALES_CHANNEL_GROSS83 = 'GROSS83';
    public const SALES_CHANNEL_GROSS84 = 'GROSS84';
    public const SALES_CHANNEL_GROSS85 = 'GROSS85';
    public const SALES_CHANNEL_GROSS86 = 'GROSS86';
    public const SALES_CHANNEL_GROSS87 = 'GROSS87';
    public const SALES_CHANNEL_GROSS88 = 'GROSS88';
    public const SALES_CHANNEL_GROSS89 = 'GROSS89';
    public const SALES_CHANNEL_GROSS9 = 'GROSS9';
    public const SALES_CHANNEL_GROSS90 = 'GROSS90';
    public const SALES_CHANNEL_GROSS91 = 'GROSS91';
    public const SALES_CHANNEL_GROSS92 = 'GROSS92';
    public const SALES_CHANNEL_GROSS93 = 'GROSS93';
    public const SALES_CHANNEL_GROSS94 = 'GROSS94';
    public const SALES_CHANNEL_GROSS95 = 'GROSS95';
    public const SALES_CHANNEL_GROSS96 = 'GROSS96';
    public const SALES_CHANNEL_GROSS97 = 'GROSS97';
    public const SALES_CHANNEL_GROSS98 = 'GROSS98';
    public const SALES_CHANNEL_GROSS99 = 'GROSS99';
    public const SALES_CHANNEL_NET1 = 'NET1';
    public const SALES_CHANNEL_NET10 = 'NET10';
    public const SALES_CHANNEL_NET100 = 'NET100';
    public const SALES_CHANNEL_NET101 = 'NET101';
    public const SALES_CHANNEL_NET102 = 'NET102';
    public const SALES_CHANNEL_NET103 = 'NET103';
    public const SALES_CHANNEL_NET104 = 'NET104';
    public const SALES_CHANNEL_NET105 = 'NET105';
    public const SALES_CHANNEL_NET106 = 'NET106';
    public const SALES_CHANNEL_NET107 = 'NET107';
    public const SALES_CHANNEL_NET108 = 'NET108';
    public const SALES_CHANNEL_NET109 = 'NET109';
    public const SALES_CHANNEL_NET11 = 'NET11';
    public const SALES_CHANNEL_NET110 = 'NET110';
    public const SALES_CHANNEL_NET111 = 'NET111';
    public const SALES_CHANNEL_NET112 = 'NET112';
    public const SALES_CHANNEL_NET113 = 'NET113';
    public const SALES_CHANNEL_NET114 = 'NET114';
    public const SALES_CHANNEL_NET115 = 'NET115';
    public const SALES_CHANNEL_NET116 = 'NET116';
    public const SALES_CHANNEL_NET117 = 'NET117';
    public const SALES_CHANNEL_NET118 = 'NET118';
    public const SALES_CHANNEL_NET119 = 'NET119';
    public const SALES_CHANNEL_NET12 = 'NET12';
    public const SALES_CHANNEL_NET120 = 'NET120';
    public const SALES_CHANNEL_NET121 = 'NET121';
    public const SALES_CHANNEL_NET122 = 'NET122';
    public const SALES_CHANNEL_NET123 = 'NET123';
    public const SALES_CHANNEL_NET124 = 'NET124';
    public const SALES_CHANNEL_NET125 = 'NET125';
    public const SALES_CHANNEL_NET126 = 'NET126';
    public const SALES_CHANNEL_NET127 = 'NET127';
    public const SALES_CHANNEL_NET128 = 'NET128';
    public const SALES_CHANNEL_NET129 = 'NET129';
    public const SALES_CHANNEL_NET13 = 'NET13';
    public const SALES_CHANNEL_NET130 = 'NET130';
    public const SALES_CHANNEL_NET131 = 'NET131';
    public const SALES_CHANNEL_NET132 = 'NET132';
    public const SALES_CHANNEL_NET133 = 'NET133';
    public const SALES_CHANNEL_NET134 = 'NET134';
    public const SALES_CHANNEL_NET135 = 'NET135';
    public const SALES_CHANNEL_NET136 = 'NET136';
    public const SALES_CHANNEL_NET137 = 'NET137';
    public const SALES_CHANNEL_NET138 = 'NET138';
    public const SALES_CHANNEL_NET139 = 'NET139';
    public const SALES_CHANNEL_NET14 = 'NET14';
    public const SALES_CHANNEL_NET140 = 'NET140';
    public const SALES_CHANNEL_NET141 = 'NET141';
    public const SALES_CHANNEL_NET142 = 'NET142';
    public const SALES_CHANNEL_NET143 = 'NET143';
    public const SALES_CHANNEL_NET144 = 'NET144';
    public const SALES_CHANNEL_NET145 = 'NET145';
    public const SALES_CHANNEL_NET146 = 'NET146';
    public const SALES_CHANNEL_NET147 = 'NET147';
    public const SALES_CHANNEL_NET148 = 'NET148';
    public const SALES_CHANNEL_NET149 = 'NET149';
    public const SALES_CHANNEL_NET15 = 'NET15';
    public const SALES_CHANNEL_NET150 = 'NET150';
    public const SALES_CHANNEL_NET151 = 'NET151';
    public const SALES_CHANNEL_NET152 = 'NET152';
    public const SALES_CHANNEL_NET153 = 'NET153';
    public const SALES_CHANNEL_NET154 = 'NET154';
    public const SALES_CHANNEL_NET155 = 'NET155';
    public const SALES_CHANNEL_NET156 = 'NET156';
    public const SALES_CHANNEL_NET157 = 'NET157';
    public const SALES_CHANNEL_NET158 = 'NET158';
    public const SALES_CHANNEL_NET159 = 'NET159';
    public const SALES_CHANNEL_NET16 = 'NET16';
    public const SALES_CHANNEL_NET160 = 'NET160';
    public const SALES_CHANNEL_NET161 = 'NET161';
    public const SALES_CHANNEL_NET162 = 'NET162';
    public const SALES_CHANNEL_NET163 = 'NET163';
    public const SALES_CHANNEL_NET164 = 'NET164';
    public const SALES_CHANNEL_NET165 = 'NET165';
    public const SALES_CHANNEL_NET166 = 'NET166';
    public const SALES_CHANNEL_NET167 = 'NET167';
    public const SALES_CHANNEL_NET168 = 'NET168';
    public const SALES_CHANNEL_NET169 = 'NET169';
    public const SALES_CHANNEL_NET17 = 'NET17';
    public const SALES_CHANNEL_NET170 = 'NET170';
    public const SALES_CHANNEL_NET171 = 'NET171';
    public const SALES_CHANNEL_NET172 = 'NET172';
    public const SALES_CHANNEL_NET173 = 'NET173';
    public const SALES_CHANNEL_NET174 = 'NET174';
    public const SALES_CHANNEL_NET175 = 'NET175';
    public const SALES_CHANNEL_NET176 = 'NET176';
    public const SALES_CHANNEL_NET177 = 'NET177';
    public const SALES_CHANNEL_NET178 = 'NET178';
    public const SALES_CHANNEL_NET179 = 'NET179';
    public const SALES_CHANNEL_NET18 = 'NET18';
    public const SALES_CHANNEL_NET180 = 'NET180';
    public const SALES_CHANNEL_NET181 = 'NET181';
    public const SALES_CHANNEL_NET182 = 'NET182';
    public const SALES_CHANNEL_NET183 = 'NET183';
    public const SALES_CHANNEL_NET184 = 'NET184';
    public const SALES_CHANNEL_NET185 = 'NET185';
    public const SALES_CHANNEL_NET186 = 'NET186';
    public const SALES_CHANNEL_NET187 = 'NET187';
    public const SALES_CHANNEL_NET188 = 'NET188';
    public const SALES_CHANNEL_NET189 = 'NET189';
    public const SALES_CHANNEL_NET19 = 'NET19';
    public const SALES_CHANNEL_NET190 = 'NET190';
    public const SALES_CHANNEL_NET191 = 'NET191';
    public const SALES_CHANNEL_NET192 = 'NET192';
    public const SALES_CHANNEL_NET193 = 'NET193';
    public const SALES_CHANNEL_NET194 = 'NET194';
    public const SALES_CHANNEL_NET195 = 'NET195';
    public const SALES_CHANNEL_NET196 = 'NET196';
    public const SALES_CHANNEL_NET197 = 'NET197';
    public const SALES_CHANNEL_NET198 = 'NET198';
    public const SALES_CHANNEL_NET199 = 'NET199';
    public const SALES_CHANNEL_NET2 = 'NET2';
    public const SALES_CHANNEL_NET20 = 'NET20';
    public const SALES_CHANNEL_NET200 = 'NET200';
    public const SALES_CHANNEL_NET201 = 'NET201';
    public const SALES_CHANNEL_NET202 = 'NET202';
    public const SALES_CHANNEL_NET203 = 'NET203';
    public const SALES_CHANNEL_NET204 = 'NET204';
    public const SALES_CHANNEL_NET205 = 'NET205';
    public const SALES_CHANNEL_NET206 = 'NET206';
    public const SALES_CHANNEL_NET207 = 'NET207';
    public const SALES_CHANNEL_NET208 = 'NET208';
    public const SALES_CHANNEL_NET209 = 'NET209';
    public const SALES_CHANNEL_NET21 = 'NET21';
    public const SALES_CHANNEL_NET210 = 'NET210';
    public const SALES_CHANNEL_NET211 = 'NET211';
    public const SALES_CHANNEL_NET212 = 'NET212';
    public const SALES_CHANNEL_NET213 = 'NET213';
    public const SALES_CHANNEL_NET214 = 'NET214';
    public const SALES_CHANNEL_NET215 = 'NET215';
    public const SALES_CHANNEL_NET216 = 'NET216';
    public const SALES_CHANNEL_NET217 = 'NET217';
    public const SALES_CHANNEL_NET218 = 'NET218';
    public const SALES_CHANNEL_NET219 = 'NET219';
    public const SALES_CHANNEL_NET22 = 'NET22';
    public const SALES_CHANNEL_NET220 = 'NET220';
    public const SALES_CHANNEL_NET221 = 'NET221';
    public const SALES_CHANNEL_NET222 = 'NET222';
    public const SALES_CHANNEL_NET223 = 'NET223';
    public const SALES_CHANNEL_NET224 = 'NET224';
    public const SALES_CHANNEL_NET225 = 'NET225';
    public const SALES_CHANNEL_NET226 = 'NET226';
    public const SALES_CHANNEL_NET227 = 'NET227';
    public const SALES_CHANNEL_NET228 = 'NET228';
    public const SALES_CHANNEL_NET229 = 'NET229';
    public const SALES_CHANNEL_NET23 = 'NET23';
    public const SALES_CHANNEL_NET230 = 'NET230';
    public const SALES_CHANNEL_NET231 = 'NET231';
    public const SALES_CHANNEL_NET232 = 'NET232';
    public const SALES_CHANNEL_NET233 = 'NET233';
    public const SALES_CHANNEL_NET234 = 'NET234';
    public const SALES_CHANNEL_NET235 = 'NET235';
    public const SALES_CHANNEL_NET236 = 'NET236';
    public const SALES_CHANNEL_NET237 = 'NET237';
    public const SALES_CHANNEL_NET238 = 'NET238';
    public const SALES_CHANNEL_NET239 = 'NET239';
    public const SALES_CHANNEL_NET24 = 'NET24';
    public const SALES_CHANNEL_NET240 = 'NET240';
    public const SALES_CHANNEL_NET241 = 'NET241';
    public const SALES_CHANNEL_NET242 = 'NET242';
    public const SALES_CHANNEL_NET243 = 'NET243';
    public const SALES_CHANNEL_NET244 = 'NET244';
    public const SALES_CHANNEL_NET245 = 'NET245';
    public const SALES_CHANNEL_NET246 = 'NET246';
    public const SALES_CHANNEL_NET247 = 'NET247';
    public const SALES_CHANNEL_NET248 = 'NET248';
    public const SALES_CHANNEL_NET249 = 'NET249';
    public const SALES_CHANNEL_NET25 = 'NET25';
    public const SALES_CHANNEL_NET250 = 'NET250';
    public const SALES_CHANNEL_NET251 = 'NET251';
    public const SALES_CHANNEL_NET252 = 'NET252';
    public const SALES_CHANNEL_NET253 = 'NET253';
    public const SALES_CHANNEL_NET254 = 'NET254';
    public const SALES_CHANNEL_NET255 = 'NET255';
    public const SALES_CHANNEL_NET256 = 'NET256';
    public const SALES_CHANNEL_NET257 = 'NET257';
    public const SALES_CHANNEL_NET258 = 'NET258';
    public const SALES_CHANNEL_NET259 = 'NET259';
    public const SALES_CHANNEL_NET26 = 'NET26';
    public const SALES_CHANNEL_NET260 = 'NET260';
    public const SALES_CHANNEL_NET261 = 'NET261';
    public const SALES_CHANNEL_NET262 = 'NET262';
    public const SALES_CHANNEL_NET263 = 'NET263';
    public const SALES_CHANNEL_NET264 = 'NET264';
    public const SALES_CHANNEL_NET265 = 'NET265';
    public const SALES_CHANNEL_NET266 = 'NET266';
    public const SALES_CHANNEL_NET267 = 'NET267';
    public const SALES_CHANNEL_NET268 = 'NET268';
    public const SALES_CHANNEL_NET269 = 'NET269';
    public const SALES_CHANNEL_NET27 = 'NET27';
    public const SALES_CHANNEL_NET270 = 'NET270';
    public const SALES_CHANNEL_NET271 = 'NET271';
    public const SALES_CHANNEL_NET272 = 'NET272';
    public const SALES_CHANNEL_NET273 = 'NET273';
    public const SALES_CHANNEL_NET274 = 'NET274';
    public const SALES_CHANNEL_NET275 = 'NET275';
    public const SALES_CHANNEL_NET276 = 'NET276';
    public const SALES_CHANNEL_NET277 = 'NET277';
    public const SALES_CHANNEL_NET278 = 'NET278';
    public const SALES_CHANNEL_NET279 = 'NET279';
    public const SALES_CHANNEL_NET28 = 'NET28';
    public const SALES_CHANNEL_NET280 = 'NET280';
    public const SALES_CHANNEL_NET281 = 'NET281';
    public const SALES_CHANNEL_NET282 = 'NET282';
    public const SALES_CHANNEL_NET283 = 'NET283';
    public const SALES_CHANNEL_NET284 = 'NET284';
    public const SALES_CHANNEL_NET285 = 'NET285';
    public const SALES_CHANNEL_NET286 = 'NET286';
    public const SALES_CHANNEL_NET287 = 'NET287';
    public const SALES_CHANNEL_NET288 = 'NET288';
    public const SALES_CHANNEL_NET289 = 'NET289';
    public const SALES_CHANNEL_NET29 = 'NET29';
    public const SALES_CHANNEL_NET290 = 'NET290';
    public const SALES_CHANNEL_NET291 = 'NET291';
    public const SALES_CHANNEL_NET292 = 'NET292';
    public const SALES_CHANNEL_NET293 = 'NET293';
    public const SALES_CHANNEL_NET294 = 'NET294';
    public const SALES_CHANNEL_NET295 = 'NET295';
    public const SALES_CHANNEL_NET296 = 'NET296';
    public const SALES_CHANNEL_NET297 = 'NET297';
    public const SALES_CHANNEL_NET298 = 'NET298';
    public const SALES_CHANNEL_NET299 = 'NET299';
    public const SALES_CHANNEL_NET3 = 'NET3';
    public const SALES_CHANNEL_NET30 = 'NET30';
    public const SALES_CHANNEL_NET300 = 'NET300';
    public const SALES_CHANNEL_NET31 = 'NET31';
    public const SALES_CHANNEL_NET32 = 'NET32';
    public const SALES_CHANNEL_NET33 = 'NET33';
    public const SALES_CHANNEL_NET34 = 'NET34';
    public const SALES_CHANNEL_NET35 = 'NET35';
    public const SALES_CHANNEL_NET36 = 'NET36';
    public const SALES_CHANNEL_NET37 = 'NET37';
    public const SALES_CHANNEL_NET38 = 'NET38';
    public const SALES_CHANNEL_NET39 = 'NET39';
    public const SALES_CHANNEL_NET4 = 'NET4';
    public const SALES_CHANNEL_NET40 = 'NET40';
    public const SALES_CHANNEL_NET41 = 'NET41';
    public const SALES_CHANNEL_NET42 = 'NET42';
    public const SALES_CHANNEL_NET43 = 'NET43';
    public const SALES_CHANNEL_NET44 = 'NET44';
    public const SALES_CHANNEL_NET45 = 'NET45';
    public const SALES_CHANNEL_NET46 = 'NET46';
    public const SALES_CHANNEL_NET47 = 'NET47';
    public const SALES_CHANNEL_NET48 = 'NET48';
    public const SALES_CHANNEL_NET49 = 'NET49';
    public const SALES_CHANNEL_NET5 = 'NET5';
    public const SALES_CHANNEL_NET50 = 'NET50';
    public const SALES_CHANNEL_NET51 = 'NET51';
    public const SALES_CHANNEL_NET52 = 'NET52';
    public const SALES_CHANNEL_NET53 = 'NET53';
    public const SALES_CHANNEL_NET54 = 'NET54';
    public const SALES_CHANNEL_NET55 = 'NET55';
    public const SALES_CHANNEL_NET56 = 'NET56';
    public const SALES_CHANNEL_NET57 = 'NET57';
    public const SALES_CHANNEL_NET58 = 'NET58';
    public const SALES_CHANNEL_NET59 = 'NET59';
    public const SALES_CHANNEL_NET6 = 'NET6';
    public const SALES_CHANNEL_NET60 = 'NET60';
    public const SALES_CHANNEL_NET61 = 'NET61';
    public const SALES_CHANNEL_NET62 = 'NET62';
    public const SALES_CHANNEL_NET63 = 'NET63';
    public const SALES_CHANNEL_NET64 = 'NET64';
    public const SALES_CHANNEL_NET65 = 'NET65';
    public const SALES_CHANNEL_NET66 = 'NET66';
    public const SALES_CHANNEL_NET67 = 'NET67';
    public const SALES_CHANNEL_NET68 = 'NET68';
    public const SALES_CHANNEL_NET69 = 'NET69';
    public const SALES_CHANNEL_NET7 = 'NET7';
    public const SALES_CHANNEL_NET70 = 'NET70';
    public const SALES_CHANNEL_NET71 = 'NET71';
    public const SALES_CHANNEL_NET72 = 'NET72';
    public const SALES_CHANNEL_NET73 = 'NET73';
    public const SALES_CHANNEL_NET74 = 'NET74';
    public const SALES_CHANNEL_NET75 = 'NET75';
    public const SALES_CHANNEL_NET76 = 'NET76';
    public const SALES_CHANNEL_NET77 = 'NET77';
    public const SALES_CHANNEL_NET78 = 'NET78';
    public const SALES_CHANNEL_NET79 = 'NET79';
    public const SALES_CHANNEL_NET8 = 'NET8';
    public const SALES_CHANNEL_NET80 = 'NET80';
    public const SALES_CHANNEL_NET81 = 'NET81';
    public const SALES_CHANNEL_NET82 = 'NET82';
    public const SALES_CHANNEL_NET83 = 'NET83';
    public const SALES_CHANNEL_NET84 = 'NET84';
    public const SALES_CHANNEL_NET85 = 'NET85';
    public const SALES_CHANNEL_NET86 = 'NET86';
    public const SALES_CHANNEL_NET87 = 'NET87';
    public const SALES_CHANNEL_NET88 = 'NET88';
    public const SALES_CHANNEL_NET89 = 'NET89';
    public const SALES_CHANNEL_NET9 = 'NET9';
    public const SALES_CHANNEL_NET90 = 'NET90';
    public const SALES_CHANNEL_NET91 = 'NET91';
    public const SALES_CHANNEL_NET92 = 'NET92';
    public const SALES_CHANNEL_NET93 = 'NET93';
    public const SALES_CHANNEL_NET94 = 'NET94';
    public const SALES_CHANNEL_NET95 = 'NET95';
    public const SALES_CHANNEL_NET96 = 'NET96';
    public const SALES_CHANNEL_NET97 = 'NET97';
    public const SALES_CHANNEL_NET98 = 'NET98';
    public const SALES_CHANNEL_NET99 = 'NET99';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSalesChannelAllowableValues()
    {
        return [
            self::SALES_CHANNEL_GROSS1,
            self::SALES_CHANNEL_GROSS10,
            self::SALES_CHANNEL_GROSS100,
            self::SALES_CHANNEL_GROSS101,
            self::SALES_CHANNEL_GROSS102,
            self::SALES_CHANNEL_GROSS103,
            self::SALES_CHANNEL_GROSS104,
            self::SALES_CHANNEL_GROSS105,
            self::SALES_CHANNEL_GROSS106,
            self::SALES_CHANNEL_GROSS107,
            self::SALES_CHANNEL_GROSS108,
            self::SALES_CHANNEL_GROSS109,
            self::SALES_CHANNEL_GROSS11,
            self::SALES_CHANNEL_GROSS110,
            self::SALES_CHANNEL_GROSS111,
            self::SALES_CHANNEL_GROSS112,
            self::SALES_CHANNEL_GROSS113,
            self::SALES_CHANNEL_GROSS114,
            self::SALES_CHANNEL_GROSS115,
            self::SALES_CHANNEL_GROSS116,
            self::SALES_CHANNEL_GROSS117,
            self::SALES_CHANNEL_GROSS118,
            self::SALES_CHANNEL_GROSS119,
            self::SALES_CHANNEL_GROSS12,
            self::SALES_CHANNEL_GROSS120,
            self::SALES_CHANNEL_GROSS121,
            self::SALES_CHANNEL_GROSS122,
            self::SALES_CHANNEL_GROSS123,
            self::SALES_CHANNEL_GROSS124,
            self::SALES_CHANNEL_GROSS125,
            self::SALES_CHANNEL_GROSS126,
            self::SALES_CHANNEL_GROSS127,
            self::SALES_CHANNEL_GROSS128,
            self::SALES_CHANNEL_GROSS129,
            self::SALES_CHANNEL_GROSS13,
            self::SALES_CHANNEL_GROSS130,
            self::SALES_CHANNEL_GROSS131,
            self::SALES_CHANNEL_GROSS132,
            self::SALES_CHANNEL_GROSS133,
            self::SALES_CHANNEL_GROSS134,
            self::SALES_CHANNEL_GROSS135,
            self::SALES_CHANNEL_GROSS136,
            self::SALES_CHANNEL_GROSS137,
            self::SALES_CHANNEL_GROSS138,
            self::SALES_CHANNEL_GROSS139,
            self::SALES_CHANNEL_GROSS14,
            self::SALES_CHANNEL_GROSS140,
            self::SALES_CHANNEL_GROSS141,
            self::SALES_CHANNEL_GROSS142,
            self::SALES_CHANNEL_GROSS143,
            self::SALES_CHANNEL_GROSS144,
            self::SALES_CHANNEL_GROSS145,
            self::SALES_CHANNEL_GROSS146,
            self::SALES_CHANNEL_GROSS147,
            self::SALES_CHANNEL_GROSS148,
            self::SALES_CHANNEL_GROSS149,
            self::SALES_CHANNEL_GROSS15,
            self::SALES_CHANNEL_GROSS150,
            self::SALES_CHANNEL_GROSS151,
            self::SALES_CHANNEL_GROSS152,
            self::SALES_CHANNEL_GROSS153,
            self::SALES_CHANNEL_GROSS154,
            self::SALES_CHANNEL_GROSS155,
            self::SALES_CHANNEL_GROSS156,
            self::SALES_CHANNEL_GROSS157,
            self::SALES_CHANNEL_GROSS158,
            self::SALES_CHANNEL_GROSS159,
            self::SALES_CHANNEL_GROSS16,
            self::SALES_CHANNEL_GROSS160,
            self::SALES_CHANNEL_GROSS161,
            self::SALES_CHANNEL_GROSS162,
            self::SALES_CHANNEL_GROSS163,
            self::SALES_CHANNEL_GROSS164,
            self::SALES_CHANNEL_GROSS165,
            self::SALES_CHANNEL_GROSS166,
            self::SALES_CHANNEL_GROSS167,
            self::SALES_CHANNEL_GROSS168,
            self::SALES_CHANNEL_GROSS169,
            self::SALES_CHANNEL_GROSS17,
            self::SALES_CHANNEL_GROSS170,
            self::SALES_CHANNEL_GROSS171,
            self::SALES_CHANNEL_GROSS172,
            self::SALES_CHANNEL_GROSS173,
            self::SALES_CHANNEL_GROSS174,
            self::SALES_CHANNEL_GROSS175,
            self::SALES_CHANNEL_GROSS176,
            self::SALES_CHANNEL_GROSS177,
            self::SALES_CHANNEL_GROSS178,
            self::SALES_CHANNEL_GROSS179,
            self::SALES_CHANNEL_GROSS18,
            self::SALES_CHANNEL_GROSS180,
            self::SALES_CHANNEL_GROSS181,
            self::SALES_CHANNEL_GROSS182,
            self::SALES_CHANNEL_GROSS183,
            self::SALES_CHANNEL_GROSS184,
            self::SALES_CHANNEL_GROSS185,
            self::SALES_CHANNEL_GROSS186,
            self::SALES_CHANNEL_GROSS187,
            self::SALES_CHANNEL_GROSS188,
            self::SALES_CHANNEL_GROSS189,
            self::SALES_CHANNEL_GROSS19,
            self::SALES_CHANNEL_GROSS190,
            self::SALES_CHANNEL_GROSS191,
            self::SALES_CHANNEL_GROSS192,
            self::SALES_CHANNEL_GROSS193,
            self::SALES_CHANNEL_GROSS194,
            self::SALES_CHANNEL_GROSS195,
            self::SALES_CHANNEL_GROSS196,
            self::SALES_CHANNEL_GROSS197,
            self::SALES_CHANNEL_GROSS198,
            self::SALES_CHANNEL_GROSS199,
            self::SALES_CHANNEL_GROSS2,
            self::SALES_CHANNEL_GROSS20,
            self::SALES_CHANNEL_GROSS200,
            self::SALES_CHANNEL_GROSS201,
            self::SALES_CHANNEL_GROSS202,
            self::SALES_CHANNEL_GROSS203,
            self::SALES_CHANNEL_GROSS204,
            self::SALES_CHANNEL_GROSS205,
            self::SALES_CHANNEL_GROSS206,
            self::SALES_CHANNEL_GROSS207,
            self::SALES_CHANNEL_GROSS208,
            self::SALES_CHANNEL_GROSS209,
            self::SALES_CHANNEL_GROSS21,
            self::SALES_CHANNEL_GROSS210,
            self::SALES_CHANNEL_GROSS211,
            self::SALES_CHANNEL_GROSS212,
            self::SALES_CHANNEL_GROSS213,
            self::SALES_CHANNEL_GROSS214,
            self::SALES_CHANNEL_GROSS215,
            self::SALES_CHANNEL_GROSS216,
            self::SALES_CHANNEL_GROSS217,
            self::SALES_CHANNEL_GROSS218,
            self::SALES_CHANNEL_GROSS219,
            self::SALES_CHANNEL_GROSS22,
            self::SALES_CHANNEL_GROSS220,
            self::SALES_CHANNEL_GROSS221,
            self::SALES_CHANNEL_GROSS222,
            self::SALES_CHANNEL_GROSS223,
            self::SALES_CHANNEL_GROSS224,
            self::SALES_CHANNEL_GROSS225,
            self::SALES_CHANNEL_GROSS226,
            self::SALES_CHANNEL_GROSS227,
            self::SALES_CHANNEL_GROSS228,
            self::SALES_CHANNEL_GROSS229,
            self::SALES_CHANNEL_GROSS23,
            self::SALES_CHANNEL_GROSS230,
            self::SALES_CHANNEL_GROSS231,
            self::SALES_CHANNEL_GROSS232,
            self::SALES_CHANNEL_GROSS233,
            self::SALES_CHANNEL_GROSS234,
            self::SALES_CHANNEL_GROSS235,
            self::SALES_CHANNEL_GROSS236,
            self::SALES_CHANNEL_GROSS237,
            self::SALES_CHANNEL_GROSS238,
            self::SALES_CHANNEL_GROSS239,
            self::SALES_CHANNEL_GROSS24,
            self::SALES_CHANNEL_GROSS240,
            self::SALES_CHANNEL_GROSS241,
            self::SALES_CHANNEL_GROSS242,
            self::SALES_CHANNEL_GROSS243,
            self::SALES_CHANNEL_GROSS244,
            self::SALES_CHANNEL_GROSS245,
            self::SALES_CHANNEL_GROSS246,
            self::SALES_CHANNEL_GROSS247,
            self::SALES_CHANNEL_GROSS248,
            self::SALES_CHANNEL_GROSS249,
            self::SALES_CHANNEL_GROSS25,
            self::SALES_CHANNEL_GROSS250,
            self::SALES_CHANNEL_GROSS251,
            self::SALES_CHANNEL_GROSS252,
            self::SALES_CHANNEL_GROSS253,
            self::SALES_CHANNEL_GROSS254,
            self::SALES_CHANNEL_GROSS255,
            self::SALES_CHANNEL_GROSS256,
            self::SALES_CHANNEL_GROSS257,
            self::SALES_CHANNEL_GROSS258,
            self::SALES_CHANNEL_GROSS259,
            self::SALES_CHANNEL_GROSS26,
            self::SALES_CHANNEL_GROSS260,
            self::SALES_CHANNEL_GROSS261,
            self::SALES_CHANNEL_GROSS262,
            self::SALES_CHANNEL_GROSS263,
            self::SALES_CHANNEL_GROSS264,
            self::SALES_CHANNEL_GROSS265,
            self::SALES_CHANNEL_GROSS266,
            self::SALES_CHANNEL_GROSS267,
            self::SALES_CHANNEL_GROSS268,
            self::SALES_CHANNEL_GROSS269,
            self::SALES_CHANNEL_GROSS27,
            self::SALES_CHANNEL_GROSS270,
            self::SALES_CHANNEL_GROSS271,
            self::SALES_CHANNEL_GROSS272,
            self::SALES_CHANNEL_GROSS273,
            self::SALES_CHANNEL_GROSS274,
            self::SALES_CHANNEL_GROSS275,
            self::SALES_CHANNEL_GROSS276,
            self::SALES_CHANNEL_GROSS277,
            self::SALES_CHANNEL_GROSS278,
            self::SALES_CHANNEL_GROSS279,
            self::SALES_CHANNEL_GROSS28,
            self::SALES_CHANNEL_GROSS280,
            self::SALES_CHANNEL_GROSS281,
            self::SALES_CHANNEL_GROSS282,
            self::SALES_CHANNEL_GROSS283,
            self::SALES_CHANNEL_GROSS284,
            self::SALES_CHANNEL_GROSS285,
            self::SALES_CHANNEL_GROSS286,
            self::SALES_CHANNEL_GROSS287,
            self::SALES_CHANNEL_GROSS288,
            self::SALES_CHANNEL_GROSS289,
            self::SALES_CHANNEL_GROSS29,
            self::SALES_CHANNEL_GROSS290,
            self::SALES_CHANNEL_GROSS291,
            self::SALES_CHANNEL_GROSS292,
            self::SALES_CHANNEL_GROSS293,
            self::SALES_CHANNEL_GROSS294,
            self::SALES_CHANNEL_GROSS295,
            self::SALES_CHANNEL_GROSS296,
            self::SALES_CHANNEL_GROSS297,
            self::SALES_CHANNEL_GROSS298,
            self::SALES_CHANNEL_GROSS299,
            self::SALES_CHANNEL_GROSS3,
            self::SALES_CHANNEL_GROSS30,
            self::SALES_CHANNEL_GROSS300,
            self::SALES_CHANNEL_GROSS31,
            self::SALES_CHANNEL_GROSS32,
            self::SALES_CHANNEL_GROSS33,
            self::SALES_CHANNEL_GROSS34,
            self::SALES_CHANNEL_GROSS35,
            self::SALES_CHANNEL_GROSS36,
            self::SALES_CHANNEL_GROSS37,
            self::SALES_CHANNEL_GROSS38,
            self::SALES_CHANNEL_GROSS39,
            self::SALES_CHANNEL_GROSS4,
            self::SALES_CHANNEL_GROSS40,
            self::SALES_CHANNEL_GROSS41,
            self::SALES_CHANNEL_GROSS42,
            self::SALES_CHANNEL_GROSS43,
            self::SALES_CHANNEL_GROSS44,
            self::SALES_CHANNEL_GROSS45,
            self::SALES_CHANNEL_GROSS46,
            self::SALES_CHANNEL_GROSS47,
            self::SALES_CHANNEL_GROSS48,
            self::SALES_CHANNEL_GROSS49,
            self::SALES_CHANNEL_GROSS5,
            self::SALES_CHANNEL_GROSS50,
            self::SALES_CHANNEL_GROSS51,
            self::SALES_CHANNEL_GROSS52,
            self::SALES_CHANNEL_GROSS53,
            self::SALES_CHANNEL_GROSS54,
            self::SALES_CHANNEL_GROSS55,
            self::SALES_CHANNEL_GROSS56,
            self::SALES_CHANNEL_GROSS57,
            self::SALES_CHANNEL_GROSS58,
            self::SALES_CHANNEL_GROSS59,
            self::SALES_CHANNEL_GROSS6,
            self::SALES_CHANNEL_GROSS60,
            self::SALES_CHANNEL_GROSS61,
            self::SALES_CHANNEL_GROSS62,
            self::SALES_CHANNEL_GROSS63,
            self::SALES_CHANNEL_GROSS64,
            self::SALES_CHANNEL_GROSS65,
            self::SALES_CHANNEL_GROSS66,
            self::SALES_CHANNEL_GROSS67,
            self::SALES_CHANNEL_GROSS68,
            self::SALES_CHANNEL_GROSS69,
            self::SALES_CHANNEL_GROSS7,
            self::SALES_CHANNEL_GROSS70,
            self::SALES_CHANNEL_GROSS71,
            self::SALES_CHANNEL_GROSS72,
            self::SALES_CHANNEL_GROSS73,
            self::SALES_CHANNEL_GROSS74,
            self::SALES_CHANNEL_GROSS75,
            self::SALES_CHANNEL_GROSS76,
            self::SALES_CHANNEL_GROSS77,
            self::SALES_CHANNEL_GROSS78,
            self::SALES_CHANNEL_GROSS79,
            self::SALES_CHANNEL_GROSS8,
            self::SALES_CHANNEL_GROSS80,
            self::SALES_CHANNEL_GROSS81,
            self::SALES_CHANNEL_GROSS82,
            self::SALES_CHANNEL_GROSS83,
            self::SALES_CHANNEL_GROSS84,
            self::SALES_CHANNEL_GROSS85,
            self::SALES_CHANNEL_GROSS86,
            self::SALES_CHANNEL_GROSS87,
            self::SALES_CHANNEL_GROSS88,
            self::SALES_CHANNEL_GROSS89,
            self::SALES_CHANNEL_GROSS9,
            self::SALES_CHANNEL_GROSS90,
            self::SALES_CHANNEL_GROSS91,
            self::SALES_CHANNEL_GROSS92,
            self::SALES_CHANNEL_GROSS93,
            self::SALES_CHANNEL_GROSS94,
            self::SALES_CHANNEL_GROSS95,
            self::SALES_CHANNEL_GROSS96,
            self::SALES_CHANNEL_GROSS97,
            self::SALES_CHANNEL_GROSS98,
            self::SALES_CHANNEL_GROSS99,
            self::SALES_CHANNEL_NET1,
            self::SALES_CHANNEL_NET10,
            self::SALES_CHANNEL_NET100,
            self::SALES_CHANNEL_NET101,
            self::SALES_CHANNEL_NET102,
            self::SALES_CHANNEL_NET103,
            self::SALES_CHANNEL_NET104,
            self::SALES_CHANNEL_NET105,
            self::SALES_CHANNEL_NET106,
            self::SALES_CHANNEL_NET107,
            self::SALES_CHANNEL_NET108,
            self::SALES_CHANNEL_NET109,
            self::SALES_CHANNEL_NET11,
            self::SALES_CHANNEL_NET110,
            self::SALES_CHANNEL_NET111,
            self::SALES_CHANNEL_NET112,
            self::SALES_CHANNEL_NET113,
            self::SALES_CHANNEL_NET114,
            self::SALES_CHANNEL_NET115,
            self::SALES_CHANNEL_NET116,
            self::SALES_CHANNEL_NET117,
            self::SALES_CHANNEL_NET118,
            self::SALES_CHANNEL_NET119,
            self::SALES_CHANNEL_NET12,
            self::SALES_CHANNEL_NET120,
            self::SALES_CHANNEL_NET121,
            self::SALES_CHANNEL_NET122,
            self::SALES_CHANNEL_NET123,
            self::SALES_CHANNEL_NET124,
            self::SALES_CHANNEL_NET125,
            self::SALES_CHANNEL_NET126,
            self::SALES_CHANNEL_NET127,
            self::SALES_CHANNEL_NET128,
            self::SALES_CHANNEL_NET129,
            self::SALES_CHANNEL_NET13,
            self::SALES_CHANNEL_NET130,
            self::SALES_CHANNEL_NET131,
            self::SALES_CHANNEL_NET132,
            self::SALES_CHANNEL_NET133,
            self::SALES_CHANNEL_NET134,
            self::SALES_CHANNEL_NET135,
            self::SALES_CHANNEL_NET136,
            self::SALES_CHANNEL_NET137,
            self::SALES_CHANNEL_NET138,
            self::SALES_CHANNEL_NET139,
            self::SALES_CHANNEL_NET14,
            self::SALES_CHANNEL_NET140,
            self::SALES_CHANNEL_NET141,
            self::SALES_CHANNEL_NET142,
            self::SALES_CHANNEL_NET143,
            self::SALES_CHANNEL_NET144,
            self::SALES_CHANNEL_NET145,
            self::SALES_CHANNEL_NET146,
            self::SALES_CHANNEL_NET147,
            self::SALES_CHANNEL_NET148,
            self::SALES_CHANNEL_NET149,
            self::SALES_CHANNEL_NET15,
            self::SALES_CHANNEL_NET150,
            self::SALES_CHANNEL_NET151,
            self::SALES_CHANNEL_NET152,
            self::SALES_CHANNEL_NET153,
            self::SALES_CHANNEL_NET154,
            self::SALES_CHANNEL_NET155,
            self::SALES_CHANNEL_NET156,
            self::SALES_CHANNEL_NET157,
            self::SALES_CHANNEL_NET158,
            self::SALES_CHANNEL_NET159,
            self::SALES_CHANNEL_NET16,
            self::SALES_CHANNEL_NET160,
            self::SALES_CHANNEL_NET161,
            self::SALES_CHANNEL_NET162,
            self::SALES_CHANNEL_NET163,
            self::SALES_CHANNEL_NET164,
            self::SALES_CHANNEL_NET165,
            self::SALES_CHANNEL_NET166,
            self::SALES_CHANNEL_NET167,
            self::SALES_CHANNEL_NET168,
            self::SALES_CHANNEL_NET169,
            self::SALES_CHANNEL_NET17,
            self::SALES_CHANNEL_NET170,
            self::SALES_CHANNEL_NET171,
            self::SALES_CHANNEL_NET172,
            self::SALES_CHANNEL_NET173,
            self::SALES_CHANNEL_NET174,
            self::SALES_CHANNEL_NET175,
            self::SALES_CHANNEL_NET176,
            self::SALES_CHANNEL_NET177,
            self::SALES_CHANNEL_NET178,
            self::SALES_CHANNEL_NET179,
            self::SALES_CHANNEL_NET18,
            self::SALES_CHANNEL_NET180,
            self::SALES_CHANNEL_NET181,
            self::SALES_CHANNEL_NET182,
            self::SALES_CHANNEL_NET183,
            self::SALES_CHANNEL_NET184,
            self::SALES_CHANNEL_NET185,
            self::SALES_CHANNEL_NET186,
            self::SALES_CHANNEL_NET187,
            self::SALES_CHANNEL_NET188,
            self::SALES_CHANNEL_NET189,
            self::SALES_CHANNEL_NET19,
            self::SALES_CHANNEL_NET190,
            self::SALES_CHANNEL_NET191,
            self::SALES_CHANNEL_NET192,
            self::SALES_CHANNEL_NET193,
            self::SALES_CHANNEL_NET194,
            self::SALES_CHANNEL_NET195,
            self::SALES_CHANNEL_NET196,
            self::SALES_CHANNEL_NET197,
            self::SALES_CHANNEL_NET198,
            self::SALES_CHANNEL_NET199,
            self::SALES_CHANNEL_NET2,
            self::SALES_CHANNEL_NET20,
            self::SALES_CHANNEL_NET200,
            self::SALES_CHANNEL_NET201,
            self::SALES_CHANNEL_NET202,
            self::SALES_CHANNEL_NET203,
            self::SALES_CHANNEL_NET204,
            self::SALES_CHANNEL_NET205,
            self::SALES_CHANNEL_NET206,
            self::SALES_CHANNEL_NET207,
            self::SALES_CHANNEL_NET208,
            self::SALES_CHANNEL_NET209,
            self::SALES_CHANNEL_NET21,
            self::SALES_CHANNEL_NET210,
            self::SALES_CHANNEL_NET211,
            self::SALES_CHANNEL_NET212,
            self::SALES_CHANNEL_NET213,
            self::SALES_CHANNEL_NET214,
            self::SALES_CHANNEL_NET215,
            self::SALES_CHANNEL_NET216,
            self::SALES_CHANNEL_NET217,
            self::SALES_CHANNEL_NET218,
            self::SALES_CHANNEL_NET219,
            self::SALES_CHANNEL_NET22,
            self::SALES_CHANNEL_NET220,
            self::SALES_CHANNEL_NET221,
            self::SALES_CHANNEL_NET222,
            self::SALES_CHANNEL_NET223,
            self::SALES_CHANNEL_NET224,
            self::SALES_CHANNEL_NET225,
            self::SALES_CHANNEL_NET226,
            self::SALES_CHANNEL_NET227,
            self::SALES_CHANNEL_NET228,
            self::SALES_CHANNEL_NET229,
            self::SALES_CHANNEL_NET23,
            self::SALES_CHANNEL_NET230,
            self::SALES_CHANNEL_NET231,
            self::SALES_CHANNEL_NET232,
            self::SALES_CHANNEL_NET233,
            self::SALES_CHANNEL_NET234,
            self::SALES_CHANNEL_NET235,
            self::SALES_CHANNEL_NET236,
            self::SALES_CHANNEL_NET237,
            self::SALES_CHANNEL_NET238,
            self::SALES_CHANNEL_NET239,
            self::SALES_CHANNEL_NET24,
            self::SALES_CHANNEL_NET240,
            self::SALES_CHANNEL_NET241,
            self::SALES_CHANNEL_NET242,
            self::SALES_CHANNEL_NET243,
            self::SALES_CHANNEL_NET244,
            self::SALES_CHANNEL_NET245,
            self::SALES_CHANNEL_NET246,
            self::SALES_CHANNEL_NET247,
            self::SALES_CHANNEL_NET248,
            self::SALES_CHANNEL_NET249,
            self::SALES_CHANNEL_NET25,
            self::SALES_CHANNEL_NET250,
            self::SALES_CHANNEL_NET251,
            self::SALES_CHANNEL_NET252,
            self::SALES_CHANNEL_NET253,
            self::SALES_CHANNEL_NET254,
            self::SALES_CHANNEL_NET255,
            self::SALES_CHANNEL_NET256,
            self::SALES_CHANNEL_NET257,
            self::SALES_CHANNEL_NET258,
            self::SALES_CHANNEL_NET259,
            self::SALES_CHANNEL_NET26,
            self::SALES_CHANNEL_NET260,
            self::SALES_CHANNEL_NET261,
            self::SALES_CHANNEL_NET262,
            self::SALES_CHANNEL_NET263,
            self::SALES_CHANNEL_NET264,
            self::SALES_CHANNEL_NET265,
            self::SALES_CHANNEL_NET266,
            self::SALES_CHANNEL_NET267,
            self::SALES_CHANNEL_NET268,
            self::SALES_CHANNEL_NET269,
            self::SALES_CHANNEL_NET27,
            self::SALES_CHANNEL_NET270,
            self::SALES_CHANNEL_NET271,
            self::SALES_CHANNEL_NET272,
            self::SALES_CHANNEL_NET273,
            self::SALES_CHANNEL_NET274,
            self::SALES_CHANNEL_NET275,
            self::SALES_CHANNEL_NET276,
            self::SALES_CHANNEL_NET277,
            self::SALES_CHANNEL_NET278,
            self::SALES_CHANNEL_NET279,
            self::SALES_CHANNEL_NET28,
            self::SALES_CHANNEL_NET280,
            self::SALES_CHANNEL_NET281,
            self::SALES_CHANNEL_NET282,
            self::SALES_CHANNEL_NET283,
            self::SALES_CHANNEL_NET284,
            self::SALES_CHANNEL_NET285,
            self::SALES_CHANNEL_NET286,
            self::SALES_CHANNEL_NET287,
            self::SALES_CHANNEL_NET288,
            self::SALES_CHANNEL_NET289,
            self::SALES_CHANNEL_NET29,
            self::SALES_CHANNEL_NET290,
            self::SALES_CHANNEL_NET291,
            self::SALES_CHANNEL_NET292,
            self::SALES_CHANNEL_NET293,
            self::SALES_CHANNEL_NET294,
            self::SALES_CHANNEL_NET295,
            self::SALES_CHANNEL_NET296,
            self::SALES_CHANNEL_NET297,
            self::SALES_CHANNEL_NET298,
            self::SALES_CHANNEL_NET299,
            self::SALES_CHANNEL_NET3,
            self::SALES_CHANNEL_NET30,
            self::SALES_CHANNEL_NET300,
            self::SALES_CHANNEL_NET31,
            self::SALES_CHANNEL_NET32,
            self::SALES_CHANNEL_NET33,
            self::SALES_CHANNEL_NET34,
            self::SALES_CHANNEL_NET35,
            self::SALES_CHANNEL_NET36,
            self::SALES_CHANNEL_NET37,
            self::SALES_CHANNEL_NET38,
            self::SALES_CHANNEL_NET39,
            self::SALES_CHANNEL_NET4,
            self::SALES_CHANNEL_NET40,
            self::SALES_CHANNEL_NET41,
            self::SALES_CHANNEL_NET42,
            self::SALES_CHANNEL_NET43,
            self::SALES_CHANNEL_NET44,
            self::SALES_CHANNEL_NET45,
            self::SALES_CHANNEL_NET46,
            self::SALES_CHANNEL_NET47,
            self::SALES_CHANNEL_NET48,
            self::SALES_CHANNEL_NET49,
            self::SALES_CHANNEL_NET5,
            self::SALES_CHANNEL_NET50,
            self::SALES_CHANNEL_NET51,
            self::SALES_CHANNEL_NET52,
            self::SALES_CHANNEL_NET53,
            self::SALES_CHANNEL_NET54,
            self::SALES_CHANNEL_NET55,
            self::SALES_CHANNEL_NET56,
            self::SALES_CHANNEL_NET57,
            self::SALES_CHANNEL_NET58,
            self::SALES_CHANNEL_NET59,
            self::SALES_CHANNEL_NET6,
            self::SALES_CHANNEL_NET60,
            self::SALES_CHANNEL_NET61,
            self::SALES_CHANNEL_NET62,
            self::SALES_CHANNEL_NET63,
            self::SALES_CHANNEL_NET64,
            self::SALES_CHANNEL_NET65,
            self::SALES_CHANNEL_NET66,
            self::SALES_CHANNEL_NET67,
            self::SALES_CHANNEL_NET68,
            self::SALES_CHANNEL_NET69,
            self::SALES_CHANNEL_NET7,
            self::SALES_CHANNEL_NET70,
            self::SALES_CHANNEL_NET71,
            self::SALES_CHANNEL_NET72,
            self::SALES_CHANNEL_NET73,
            self::SALES_CHANNEL_NET74,
            self::SALES_CHANNEL_NET75,
            self::SALES_CHANNEL_NET76,
            self::SALES_CHANNEL_NET77,
            self::SALES_CHANNEL_NET78,
            self::SALES_CHANNEL_NET79,
            self::SALES_CHANNEL_NET8,
            self::SALES_CHANNEL_NET80,
            self::SALES_CHANNEL_NET81,
            self::SALES_CHANNEL_NET82,
            self::SALES_CHANNEL_NET83,
            self::SALES_CHANNEL_NET84,
            self::SALES_CHANNEL_NET85,
            self::SALES_CHANNEL_NET86,
            self::SALES_CHANNEL_NET87,
            self::SALES_CHANNEL_NET88,
            self::SALES_CHANNEL_NET89,
            self::SALES_CHANNEL_NET9,
            self::SALES_CHANNEL_NET90,
            self::SALES_CHANNEL_NET91,
            self::SALES_CHANNEL_NET92,
            self::SALES_CHANNEL_NET93,
            self::SALES_CHANNEL_NET94,
            self::SALES_CHANNEL_NET95,
            self::SALES_CHANNEL_NET96,
            self::SALES_CHANNEL_NET97,
            self::SALES_CHANNEL_NET98,
            self::SALES_CHANNEL_NET99,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('commercial_language_id', $data ?? [], null);
        $this->setIfExists('sales_channel', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['commercial_language_id'] === null) {
            $invalidProperties[] = "'commercial_language_id' can't be null";
        }
        if ($this->container['sales_channel'] === null) {
            $invalidProperties[] = "'sales_channel' can't be null";
        }
        $allowedValues = $this->getSalesChannelAllowableValues();
        if (!is_null($this->container['sales_channel']) && !in_array($this->container['sales_channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sales_channel', must be one of '%s'",
                $this->container['sales_channel'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets commercial_language_id
     *
     * @return string
     */
    public function getCommercialLanguageId()
    {
        return $this->container['commercial_language_id'];
    }

    /**
     * Sets commercial_language_id
     *
     * @param string $commercial_language_id commercial_language_id
     *
     * @return self
     */
    public function setCommercialLanguageId($commercial_language_id)
    {
        if (is_null($commercial_language_id)) {
            throw new \InvalidArgumentException('non-nullable commercial_language_id cannot be null');
        }
        $this->container['commercial_language_id'] = $commercial_language_id;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return string
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param string $sales_channel sales_channel
     *
     * @return self
     */
    public function setSalesChannel($sales_channel)
    {
        if (is_null($sales_channel)) {
            throw new \InvalidArgumentException('non-nullable sales_channel cannot be null');
        }
        $allowedValues = $this->getSalesChannelAllowableValues();
        if (!in_array($sales_channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sales_channel', must be one of '%s'",
                    $sales_channel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


