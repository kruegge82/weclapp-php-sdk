<?php
/**
 * SalesOrderApi
 * PHP version 8.1
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
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\weclapp\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use kruegge82\weclapp\ApiException;
use kruegge82\weclapp\Configuration;
use kruegge82\weclapp\FormDataProcessor;
use kruegge82\weclapp\HeaderSelector;
use kruegge82\weclapp\ObjectSerializer;

/**
 * SalesOrderApi Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SalesOrderApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'salesOrderCountGet' => [
            'application/json',
        ],
        'salesOrderDefaultValuesForCreateGet' => [
            'application/json',
        ],
        'salesOrderGet' => [
            'application/json',
        ],
        'salesOrderIdIdActivateProjectViewPost' => [
            'application/json',
        ],
        'salesOrderIdIdCalculateSalesPricesPost' => [
            'application/json',
        ],
        'salesOrderIdIdCancelOrManuallyClosePost' => [
            'application/json',
        ],
        'salesOrderIdIdCreateAdvancePaymentRequestPost' => [
            'application/json',
        ],
        'salesOrderIdIdCreateContractPost' => [
            'application/json',
        ],
        'salesOrderIdIdCreateCustomerReturnPost' => [
            'application/json',
        ],
        'salesOrderIdIdCreateDropshippingPost' => [
            'application/json',
        ],
        'salesOrderIdIdCreatePartPaymentInvoicePost' => [
            'application/json',
        ],
        'salesOrderIdIdCreatePrepaymentFinalInvoicePost' => [
            'application/json',
        ],
        'salesOrderIdIdCreateProductionOrdersPost' => [
            'application/json',
        ],
        'salesOrderIdIdCreatePurchaseOrderPost' => [
            'application/json',
        ],
        'salesOrderIdIdCreatePurchaseOrderRequestPost' => [
            'application/json',
        ],
        'salesOrderIdIdCreateReturnLabelsPost' => [
            'application/json',
        ],
        'salesOrderIdIdCreateSalesInvoicePost' => [
            'application/json',
        ],
        'salesOrderIdIdCreateShipmentPost' => [
            'application/json',
        ],
        'salesOrderIdIdCreateShippingLabelsPost' => [
            'application/json',
        ],
        'salesOrderIdIdDelete' => [
            'application/json',
        ],
        'salesOrderIdIdDownloadLatestOrderConfirmationPdfGet' => [
            'application/json',
        ],
        'salesOrderIdIdGet' => [
            'application/json',
        ],
        'salesOrderIdIdManuallyClosePost' => [
            'application/json',
        ],
        'salesOrderIdIdPrintOrderDataGet' => [
            'application/json',
        ],
        'salesOrderIdIdPut' => [
            'application/json',
        ],
        'salesOrderIdIdRecalculateCostsPost' => [
            'application/json',
        ],
        'salesOrderIdIdResetTaxesPost' => [
            'application/json',
        ],
        'salesOrderIdIdSetCostsForItemsWithoutCostPost' => [
            'application/json',
        ],
        'salesOrderIdIdShipOrderForExternalFulfillmentPost' => [
            'application/json',
        ],
        'salesOrderIdIdToggleProjectTeamPost' => [
            'application/json',
        ],
        'salesOrderIdIdToggleServicesFinishedPost' => [
            'application/json',
        ],
        'salesOrderIdIdUpdatePricesPost' => [
            'application/json',
        ],
        'salesOrderPost' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation salesOrderCountGet
     *
     * count salesOrder
     *
     * @param  string|null $filter filter (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderCountGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderCountGet($filter = null, string $contentType = self::contentTypes['salesOrderCountGet'][0])
    {
        list($response) = $this->salesOrderCountGetWithHttpInfo($filter, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderCountGetWithHttpInfo
     *
     * count salesOrder
     *
     * @param  string|null $filter (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderCountGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderCountGetWithHttpInfo($filter = null, string $contentType = self::contentTypes['salesOrderCountGet'][0])
    {
        $request = $this->salesOrderCountGetRequest($filter, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderCountGetAsync
     *
     * count salesOrder
     *
     * @param  string|null $filter (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderCountGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderCountGetAsync($filter = null, string $contentType = self::contentTypes['salesOrderCountGet'][0])
    {
        return $this->salesOrderCountGetAsyncWithHttpInfo($filter, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderCountGetAsyncWithHttpInfo
     *
     * count salesOrder
     *
     * @param  string|null $filter (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderCountGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderCountGetAsyncWithHttpInfo($filter = null, string $contentType = self::contentTypes['salesOrderCountGet'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response';
        $request = $this->salesOrderCountGetRequest($filter, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderCountGet'
     *
     * @param  string|null $filter (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderCountGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderCountGetRequest($filter = null, string $contentType = self::contentTypes['salesOrderCountGet'][0])
    {



        $resourcePath = '/salesOrder/count';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter,
            'filter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderDefaultValuesForCreateGet
     *
     * @param  string $customer_id customer_id (required)
     * @param  string|null $responsible_user_id responsible_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderDefaultValuesForCreateGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderDefaultValuesForCreateGet($customer_id, $responsible_user_id = null, string $contentType = self::contentTypes['salesOrderDefaultValuesForCreateGet'][0])
    {
        list($response) = $this->salesOrderDefaultValuesForCreateGetWithHttpInfo($customer_id, $responsible_user_id, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderDefaultValuesForCreateGetWithHttpInfo
     *
     * @param  string $customer_id (required)
     * @param  string|null $responsible_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderDefaultValuesForCreateGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderDefaultValuesForCreateGetWithHttpInfo($customer_id, $responsible_user_id = null, string $contentType = self::contentTypes['salesOrderDefaultValuesForCreateGet'][0])
    {
        $request = $this->salesOrderDefaultValuesForCreateGetRequest($customer_id, $responsible_user_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderDefaultValuesForCreateGetAsync
     *
     * @param  string $customer_id (required)
     * @param  string|null $responsible_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderDefaultValuesForCreateGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderDefaultValuesForCreateGetAsync($customer_id, $responsible_user_id = null, string $contentType = self::contentTypes['salesOrderDefaultValuesForCreateGet'][0])
    {
        return $this->salesOrderDefaultValuesForCreateGetAsyncWithHttpInfo($customer_id, $responsible_user_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderDefaultValuesForCreateGetAsyncWithHttpInfo
     *
     * @param  string $customer_id (required)
     * @param  string|null $responsible_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderDefaultValuesForCreateGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderDefaultValuesForCreateGetAsyncWithHttpInfo($customer_id, $responsible_user_id = null, string $contentType = self::contentTypes['salesOrderDefaultValuesForCreateGet'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderDefaultValuesForCreateGetRequest($customer_id, $responsible_user_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderDefaultValuesForCreateGet'
     *
     * @param  string $customer_id (required)
     * @param  string|null $responsible_user_id (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderDefaultValuesForCreateGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderDefaultValuesForCreateGetRequest($customer_id, $responsible_user_id = null, string $contentType = self::contentTypes['salesOrderDefaultValuesForCreateGet'][0])
    {

        // verify the required parameter 'customer_id' is set
        if ($customer_id === null || (is_array($customer_id) && count($customer_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customer_id when calling salesOrderDefaultValuesForCreateGet'
            );
        }



        $resourcePath = '/salesOrder/defaultValuesForCreate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $customer_id,
            'customerId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $responsible_user_id,
            'responsibleUserId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderGet
     *
     * query salesOrder
     *
     * @param  int|null $page page (optional)
     * @param  int|null $page_size page_size (optional)
     * @param  bool|null $serialize_nulls serialize_nulls (optional)
     * @param  string|null $sort sort (optional)
     * @param  string|null $filter filter (optional)
     * @param  string|null $properties properties (optional)
     * @param  string|null $include_referenced_entities include_referenced_entities (optional)
     * @param  string|null $additional_properties additional_properties (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderGet($page = null, $page_size = null, $serialize_nulls = null, $sort = null, $filter = null, $properties = null, $include_referenced_entities = null, $additional_properties = null, string $contentType = self::contentTypes['salesOrderGet'][0])
    {
        list($response) = $this->salesOrderGetWithHttpInfo($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderGetWithHttpInfo
     *
     * query salesOrder
     *
     * @param  int|null $page (optional)
     * @param  int|null $page_size (optional)
     * @param  bool|null $serialize_nulls (optional)
     * @param  string|null $sort (optional)
     * @param  string|null $filter (optional)
     * @param  string|null $properties (optional)
     * @param  string|null $include_referenced_entities (optional)
     * @param  string|null $additional_properties (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderGetWithHttpInfo($page = null, $page_size = null, $serialize_nulls = null, $sort = null, $filter = null, $properties = null, $include_referenced_entities = null, $additional_properties = null, string $contentType = self::contentTypes['salesOrderGet'][0])
    {
        $request = $this->salesOrderGetRequest($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderGetAsync
     *
     * query salesOrder
     *
     * @param  int|null $page (optional)
     * @param  int|null $page_size (optional)
     * @param  bool|null $serialize_nulls (optional)
     * @param  string|null $sort (optional)
     * @param  string|null $filter (optional)
     * @param  string|null $properties (optional)
     * @param  string|null $include_referenced_entities (optional)
     * @param  string|null $additional_properties (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderGetAsync($page = null, $page_size = null, $serialize_nulls = null, $sort = null, $filter = null, $properties = null, $include_referenced_entities = null, $additional_properties = null, string $contentType = self::contentTypes['salesOrderGet'][0])
    {
        return $this->salesOrderGetAsyncWithHttpInfo($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderGetAsyncWithHttpInfo
     *
     * query salesOrder
     *
     * @param  int|null $page (optional)
     * @param  int|null $page_size (optional)
     * @param  bool|null $serialize_nulls (optional)
     * @param  string|null $sort (optional)
     * @param  string|null $filter (optional)
     * @param  string|null $properties (optional)
     * @param  string|null $include_referenced_entities (optional)
     * @param  string|null $additional_properties (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderGetAsyncWithHttpInfo($page = null, $page_size = null, $serialize_nulls = null, $sort = null, $filter = null, $properties = null, $include_referenced_entities = null, $additional_properties = null, string $contentType = self::contentTypes['salesOrderGet'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderGet200Response';
        $request = $this->salesOrderGetRequest($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderGet'
     *
     * @param  int|null $page (optional)
     * @param  int|null $page_size (optional)
     * @param  bool|null $serialize_nulls (optional)
     * @param  string|null $sort (optional)
     * @param  string|null $filter (optional)
     * @param  string|null $properties (optional)
     * @param  string|null $include_referenced_entities (optional)
     * @param  string|null $additional_properties (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderGetRequest($page = null, $page_size = null, $serialize_nulls = null, $sort = null, $filter = null, $properties = null, $include_referenced_entities = null, $additional_properties = null, string $contentType = self::contentTypes['salesOrderGet'][0])
    {










        $resourcePath = '/salesOrder';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'pageSize', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $serialize_nulls,
            'serializeNulls', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $filter,
            'filter', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $properties,
            'properties', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_referenced_entities,
            'includeReferencedEntities', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $additional_properties,
            'additionalProperties', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdActivateProjectViewPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdActivateProjectViewPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdActivateProjectViewPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdActivateProjectViewPost'][0])
    {
        list($response) = $this->salesOrderIdIdActivateProjectViewPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdActivateProjectViewPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdActivateProjectViewPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdActivateProjectViewPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdActivateProjectViewPost'][0])
    {
        $request = $this->salesOrderIdIdActivateProjectViewPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdActivateProjectViewPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdActivateProjectViewPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdActivateProjectViewPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdActivateProjectViewPost'][0])
    {
        return $this->salesOrderIdIdActivateProjectViewPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdActivateProjectViewPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdActivateProjectViewPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdActivateProjectViewPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdActivateProjectViewPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdActivateProjectViewPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdActivateProjectViewPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdActivateProjectViewPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdActivateProjectViewPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdActivateProjectViewPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdActivateProjectViewPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdActivateProjectViewPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/activateProjectView';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCalculateSalesPricesPost
     *
     * @param  string $id id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCalculateSalesPricesPostRequest $sales_order_id_id_calculate_sales_prices_post_request sales_order_id_id_calculate_sales_prices_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCalculateSalesPricesPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCalculateSalesPricesPost($id, $sales_order_id_id_calculate_sales_prices_post_request, string $contentType = self::contentTypes['salesOrderIdIdCalculateSalesPricesPost'][0])
    {
        list($response) = $this->salesOrderIdIdCalculateSalesPricesPostWithHttpInfo($id, $sales_order_id_id_calculate_sales_prices_post_request, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCalculateSalesPricesPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCalculateSalesPricesPostRequest $sales_order_id_id_calculate_sales_prices_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCalculateSalesPricesPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCalculateSalesPricesPostWithHttpInfo($id, $sales_order_id_id_calculate_sales_prices_post_request, string $contentType = self::contentTypes['salesOrderIdIdCalculateSalesPricesPost'][0])
    {
        $request = $this->salesOrderIdIdCalculateSalesPricesPostRequest($id, $sales_order_id_id_calculate_sales_prices_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCalculateSalesPricesPostAsync
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCalculateSalesPricesPostRequest $sales_order_id_id_calculate_sales_prices_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCalculateSalesPricesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCalculateSalesPricesPostAsync($id, $sales_order_id_id_calculate_sales_prices_post_request, string $contentType = self::contentTypes['salesOrderIdIdCalculateSalesPricesPost'][0])
    {
        return $this->salesOrderIdIdCalculateSalesPricesPostAsyncWithHttpInfo($id, $sales_order_id_id_calculate_sales_prices_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCalculateSalesPricesPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCalculateSalesPricesPostRequest $sales_order_id_id_calculate_sales_prices_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCalculateSalesPricesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCalculateSalesPricesPostAsyncWithHttpInfo($id, $sales_order_id_id_calculate_sales_prices_post_request, string $contentType = self::contentTypes['salesOrderIdIdCalculateSalesPricesPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdCalculateSalesPricesPostRequest($id, $sales_order_id_id_calculate_sales_prices_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCalculateSalesPricesPost'
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCalculateSalesPricesPostRequest $sales_order_id_id_calculate_sales_prices_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCalculateSalesPricesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCalculateSalesPricesPostRequest($id, $sales_order_id_id_calculate_sales_prices_post_request, string $contentType = self::contentTypes['salesOrderIdIdCalculateSalesPricesPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCalculateSalesPricesPost'
            );
        }

        // verify the required parameter 'sales_order_id_id_calculate_sales_prices_post_request' is set
        if ($sales_order_id_id_calculate_sales_prices_post_request === null || (is_array($sales_order_id_id_calculate_sales_prices_post_request) && count($sales_order_id_id_calculate_sales_prices_post_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id_id_calculate_sales_prices_post_request when calling salesOrderIdIdCalculateSalesPricesPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/calculateSalesPrices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($sales_order_id_id_calculate_sales_prices_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($sales_order_id_id_calculate_sales_prices_post_request));
            } else {
                $httpBody = $sales_order_id_id_calculate_sales_prices_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCancelOrManuallyClosePost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCancelOrManuallyClosePost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCancelOrManuallyClosePost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCancelOrManuallyClosePost'][0])
    {
        list($response) = $this->salesOrderIdIdCancelOrManuallyClosePostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCancelOrManuallyClosePostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCancelOrManuallyClosePost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCancelOrManuallyClosePostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCancelOrManuallyClosePost'][0])
    {
        $request = $this->salesOrderIdIdCancelOrManuallyClosePostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCancelOrManuallyClosePostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCancelOrManuallyClosePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCancelOrManuallyClosePostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCancelOrManuallyClosePost'][0])
    {
        return $this->salesOrderIdIdCancelOrManuallyClosePostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCancelOrManuallyClosePostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCancelOrManuallyClosePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCancelOrManuallyClosePostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCancelOrManuallyClosePost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdCancelOrManuallyClosePostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCancelOrManuallyClosePost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCancelOrManuallyClosePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCancelOrManuallyClosePostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCancelOrManuallyClosePost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCancelOrManuallyClosePost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdCancelOrManuallyClosePost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/cancelOrManuallyClose';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreateAdvancePaymentRequestPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateAdvancePaymentRequestPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreateAdvancePaymentRequestPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateAdvancePaymentRequestPost'][0])
    {
        list($response) = $this->salesOrderIdIdCreateAdvancePaymentRequestPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreateAdvancePaymentRequestPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateAdvancePaymentRequestPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreateAdvancePaymentRequestPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateAdvancePaymentRequestPost'][0])
    {
        $request = $this->salesOrderIdIdCreateAdvancePaymentRequestPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreateAdvancePaymentRequestPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateAdvancePaymentRequestPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateAdvancePaymentRequestPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateAdvancePaymentRequestPost'][0])
    {
        return $this->salesOrderIdIdCreateAdvancePaymentRequestPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreateAdvancePaymentRequestPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateAdvancePaymentRequestPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateAdvancePaymentRequestPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateAdvancePaymentRequestPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response';
        $request = $this->salesOrderIdIdCreateAdvancePaymentRequestPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreateAdvancePaymentRequestPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateAdvancePaymentRequestPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreateAdvancePaymentRequestPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateAdvancePaymentRequestPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreateAdvancePaymentRequestPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdCreateAdvancePaymentRequestPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createAdvancePaymentRequest';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreateContractPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateContractPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreateContractPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateContractPost'][0])
    {
        list($response) = $this->salesOrderIdIdCreateContractPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreateContractPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateContractPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreateContractPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateContractPost'][0])
    {
        $request = $this->salesOrderIdIdCreateContractPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreateContractPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateContractPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateContractPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateContractPost'][0])
    {
        return $this->salesOrderIdIdCreateContractPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreateContractPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateContractPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateContractPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateContractPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateContractPost200Response';
        $request = $this->salesOrderIdIdCreateContractPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreateContractPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateContractPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreateContractPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateContractPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreateContractPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdCreateContractPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createContract';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreateCustomerReturnPost
     *
     * @param  string $id id (required)
     * @param  \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest $purchase_invoice_id_id_create_credit_note_post_request purchase_invoice_id_id_create_credit_note_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateCustomerReturnPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPost200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreateCustomerReturnPost($id, $purchase_invoice_id_id_create_credit_note_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateCustomerReturnPost'][0])
    {
        list($response) = $this->salesOrderIdIdCreateCustomerReturnPostWithHttpInfo($id, $purchase_invoice_id_id_create_credit_note_post_request, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreateCustomerReturnPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest $purchase_invoice_id_id_create_credit_note_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateCustomerReturnPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPost200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreateCustomerReturnPostWithHttpInfo($id, $purchase_invoice_id_id_create_credit_note_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateCustomerReturnPost'][0])
    {
        $request = $this->salesOrderIdIdCreateCustomerReturnPostRequest($id, $purchase_invoice_id_id_create_credit_note_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPost200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPost200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreateCustomerReturnPostAsync
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest $purchase_invoice_id_id_create_credit_note_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateCustomerReturnPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateCustomerReturnPostAsync($id, $purchase_invoice_id_id_create_credit_note_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateCustomerReturnPost'][0])
    {
        return $this->salesOrderIdIdCreateCustomerReturnPostAsyncWithHttpInfo($id, $purchase_invoice_id_id_create_credit_note_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreateCustomerReturnPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest $purchase_invoice_id_id_create_credit_note_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateCustomerReturnPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateCustomerReturnPostAsyncWithHttpInfo($id, $purchase_invoice_id_id_create_credit_note_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateCustomerReturnPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\IncomingGoodsIdIdAddPurchaseOrdersPost200Response';
        $request = $this->salesOrderIdIdCreateCustomerReturnPostRequest($id, $purchase_invoice_id_id_create_credit_note_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreateCustomerReturnPost'
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\PurchaseInvoiceIdIdCreateCreditNotePostRequest $purchase_invoice_id_id_create_credit_note_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateCustomerReturnPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreateCustomerReturnPostRequest($id, $purchase_invoice_id_id_create_credit_note_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateCustomerReturnPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreateCustomerReturnPost'
            );
        }

        // verify the required parameter 'purchase_invoice_id_id_create_credit_note_post_request' is set
        if ($purchase_invoice_id_id_create_credit_note_post_request === null || (is_array($purchase_invoice_id_id_create_credit_note_post_request) && count($purchase_invoice_id_id_create_credit_note_post_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $purchase_invoice_id_id_create_credit_note_post_request when calling salesOrderIdIdCreateCustomerReturnPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createCustomerReturn';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($purchase_invoice_id_id_create_credit_note_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($purchase_invoice_id_id_create_credit_note_post_request));
            } else {
                $httpBody = $purchase_invoice_id_id_create_credit_note_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreateDropshippingPost
     *
     * @param  string $id id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateDropshippingPostRequest $sales_order_id_id_create_dropshipping_post_request sales_order_id_id_create_dropshipping_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateDropshippingPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreateDropshippingPost($id, $sales_order_id_id_create_dropshipping_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateDropshippingPost'][0])
    {
        list($response) = $this->salesOrderIdIdCreateDropshippingPostWithHttpInfo($id, $sales_order_id_id_create_dropshipping_post_request, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreateDropshippingPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateDropshippingPostRequest $sales_order_id_id_create_dropshipping_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateDropshippingPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreateDropshippingPostWithHttpInfo($id, $sales_order_id_id_create_dropshipping_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateDropshippingPost'][0])
    {
        $request = $this->salesOrderIdIdCreateDropshippingPostRequest($id, $sales_order_id_id_create_dropshipping_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreateDropshippingPostAsync
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateDropshippingPostRequest $sales_order_id_id_create_dropshipping_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateDropshippingPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateDropshippingPostAsync($id, $sales_order_id_id_create_dropshipping_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateDropshippingPost'][0])
    {
        return $this->salesOrderIdIdCreateDropshippingPostAsyncWithHttpInfo($id, $sales_order_id_id_create_dropshipping_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreateDropshippingPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateDropshippingPostRequest $sales_order_id_id_create_dropshipping_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateDropshippingPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateDropshippingPostAsyncWithHttpInfo($id, $sales_order_id_id_create_dropshipping_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateDropshippingPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\PurchaseOrderIdIdCancelDropshippingShipmentsPost200Response';
        $request = $this->salesOrderIdIdCreateDropshippingPostRequest($id, $sales_order_id_id_create_dropshipping_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreateDropshippingPost'
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateDropshippingPostRequest $sales_order_id_id_create_dropshipping_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateDropshippingPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreateDropshippingPostRequest($id, $sales_order_id_id_create_dropshipping_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateDropshippingPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreateDropshippingPost'
            );
        }

        // verify the required parameter 'sales_order_id_id_create_dropshipping_post_request' is set
        if ($sales_order_id_id_create_dropshipping_post_request === null || (is_array($sales_order_id_id_create_dropshipping_post_request) && count($sales_order_id_id_create_dropshipping_post_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id_id_create_dropshipping_post_request when calling salesOrderIdIdCreateDropshippingPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createDropshipping';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($sales_order_id_id_create_dropshipping_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($sales_order_id_id_create_dropshipping_post_request));
            } else {
                $httpBody = $sales_order_id_id_create_dropshipping_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreatePartPaymentInvoicePost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePartPaymentInvoicePost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreatePartPaymentInvoicePost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreatePartPaymentInvoicePost'][0])
    {
        list($response) = $this->salesOrderIdIdCreatePartPaymentInvoicePostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreatePartPaymentInvoicePostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePartPaymentInvoicePost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreatePartPaymentInvoicePostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreatePartPaymentInvoicePost'][0])
    {
        $request = $this->salesOrderIdIdCreatePartPaymentInvoicePostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreatePartPaymentInvoicePostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePartPaymentInvoicePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreatePartPaymentInvoicePostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreatePartPaymentInvoicePost'][0])
    {
        return $this->salesOrderIdIdCreatePartPaymentInvoicePostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreatePartPaymentInvoicePostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePartPaymentInvoicePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreatePartPaymentInvoicePostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreatePartPaymentInvoicePost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response';
        $request = $this->salesOrderIdIdCreatePartPaymentInvoicePostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreatePartPaymentInvoicePost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePartPaymentInvoicePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreatePartPaymentInvoicePostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreatePartPaymentInvoicePost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreatePartPaymentInvoicePost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdCreatePartPaymentInvoicePost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createPartPaymentInvoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreatePrepaymentFinalInvoicePost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePrepaymentFinalInvoicePost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreatePrepaymentFinalInvoicePost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreatePrepaymentFinalInvoicePost'][0])
    {
        list($response) = $this->salesOrderIdIdCreatePrepaymentFinalInvoicePostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreatePrepaymentFinalInvoicePostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePrepaymentFinalInvoicePost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreatePrepaymentFinalInvoicePostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreatePrepaymentFinalInvoicePost'][0])
    {
        $request = $this->salesOrderIdIdCreatePrepaymentFinalInvoicePostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreatePrepaymentFinalInvoicePostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePrepaymentFinalInvoicePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreatePrepaymentFinalInvoicePostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreatePrepaymentFinalInvoicePost'][0])
    {
        return $this->salesOrderIdIdCreatePrepaymentFinalInvoicePostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreatePrepaymentFinalInvoicePostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePrepaymentFinalInvoicePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreatePrepaymentFinalInvoicePostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreatePrepaymentFinalInvoicePost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response';
        $request = $this->salesOrderIdIdCreatePrepaymentFinalInvoicePostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreatePrepaymentFinalInvoicePost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePrepaymentFinalInvoicePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreatePrepaymentFinalInvoicePostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreatePrepaymentFinalInvoicePost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreatePrepaymentFinalInvoicePost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdCreatePrepaymentFinalInvoicePost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createPrepaymentFinalInvoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreateProductionOrdersPost
     *
     * @param  string $id id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateProductionOrdersPostRequest $sales_order_id_id_create_production_orders_post_request sales_order_id_id_create_production_orders_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateProductionOrdersPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\ProductionOrderGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreateProductionOrdersPost($id, $sales_order_id_id_create_production_orders_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateProductionOrdersPost'][0])
    {
        list($response) = $this->salesOrderIdIdCreateProductionOrdersPostWithHttpInfo($id, $sales_order_id_id_create_production_orders_post_request, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreateProductionOrdersPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateProductionOrdersPostRequest $sales_order_id_id_create_production_orders_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateProductionOrdersPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\ProductionOrderGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreateProductionOrdersPostWithHttpInfo($id, $sales_order_id_id_create_production_orders_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateProductionOrdersPost'][0])
    {
        $request = $this->salesOrderIdIdCreateProductionOrdersPostRequest($id, $sales_order_id_id_create_production_orders_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ProductionOrderGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\ProductionOrderGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ProductionOrderGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreateProductionOrdersPostAsync
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateProductionOrdersPostRequest $sales_order_id_id_create_production_orders_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateProductionOrdersPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateProductionOrdersPostAsync($id, $sales_order_id_id_create_production_orders_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateProductionOrdersPost'][0])
    {
        return $this->salesOrderIdIdCreateProductionOrdersPostAsyncWithHttpInfo($id, $sales_order_id_id_create_production_orders_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreateProductionOrdersPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateProductionOrdersPostRequest $sales_order_id_id_create_production_orders_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateProductionOrdersPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateProductionOrdersPostAsyncWithHttpInfo($id, $sales_order_id_id_create_production_orders_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateProductionOrdersPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\ProductionOrderGet200Response';
        $request = $this->salesOrderIdIdCreateProductionOrdersPostRequest($id, $sales_order_id_id_create_production_orders_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreateProductionOrdersPost'
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateProductionOrdersPostRequest $sales_order_id_id_create_production_orders_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateProductionOrdersPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreateProductionOrdersPostRequest($id, $sales_order_id_id_create_production_orders_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateProductionOrdersPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreateProductionOrdersPost'
            );
        }

        // verify the required parameter 'sales_order_id_id_create_production_orders_post_request' is set
        if ($sales_order_id_id_create_production_orders_post_request === null || (is_array($sales_order_id_id_create_production_orders_post_request) && count($sales_order_id_id_create_production_orders_post_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id_id_create_production_orders_post_request when calling salesOrderIdIdCreateProductionOrdersPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createProductionOrders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($sales_order_id_id_create_production_orders_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($sales_order_id_id_create_production_orders_post_request));
            } else {
                $httpBody = $sales_order_id_id_create_production_orders_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreatePurchaseOrderPost
     *
     * @param  string $id id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderPostRequest $sales_order_id_id_create_purchase_order_post_request sales_order_id_id_create_purchase_order_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePurchaseOrderPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\PurchaseOrderGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreatePurchaseOrderPost($id, $sales_order_id_id_create_purchase_order_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreatePurchaseOrderPost'][0])
    {
        list($response) = $this->salesOrderIdIdCreatePurchaseOrderPostWithHttpInfo($id, $sales_order_id_id_create_purchase_order_post_request, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreatePurchaseOrderPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderPostRequest $sales_order_id_id_create_purchase_order_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePurchaseOrderPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\PurchaseOrderGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreatePurchaseOrderPostWithHttpInfo($id, $sales_order_id_id_create_purchase_order_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreatePurchaseOrderPost'][0])
    {
        $request = $this->salesOrderIdIdCreatePurchaseOrderPostRequest($id, $sales_order_id_id_create_purchase_order_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\PurchaseOrderGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\PurchaseOrderGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\PurchaseOrderGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreatePurchaseOrderPostAsync
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderPostRequest $sales_order_id_id_create_purchase_order_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePurchaseOrderPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreatePurchaseOrderPostAsync($id, $sales_order_id_id_create_purchase_order_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreatePurchaseOrderPost'][0])
    {
        return $this->salesOrderIdIdCreatePurchaseOrderPostAsyncWithHttpInfo($id, $sales_order_id_id_create_purchase_order_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreatePurchaseOrderPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderPostRequest $sales_order_id_id_create_purchase_order_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePurchaseOrderPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreatePurchaseOrderPostAsyncWithHttpInfo($id, $sales_order_id_id_create_purchase_order_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreatePurchaseOrderPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\PurchaseOrderGet200Response';
        $request = $this->salesOrderIdIdCreatePurchaseOrderPostRequest($id, $sales_order_id_id_create_purchase_order_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreatePurchaseOrderPost'
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderPostRequest $sales_order_id_id_create_purchase_order_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePurchaseOrderPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreatePurchaseOrderPostRequest($id, $sales_order_id_id_create_purchase_order_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreatePurchaseOrderPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreatePurchaseOrderPost'
            );
        }

        // verify the required parameter 'sales_order_id_id_create_purchase_order_post_request' is set
        if ($sales_order_id_id_create_purchase_order_post_request === null || (is_array($sales_order_id_id_create_purchase_order_post_request) && count($sales_order_id_id_create_purchase_order_post_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id_id_create_purchase_order_post_request when calling salesOrderIdIdCreatePurchaseOrderPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createPurchaseOrder';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($sales_order_id_id_create_purchase_order_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($sales_order_id_id_create_purchase_order_post_request));
            } else {
                $httpBody = $sales_order_id_id_create_purchase_order_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreatePurchaseOrderRequestPost
     *
     * @param  string $id id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostRequest $sales_order_id_id_create_purchase_order_request_post_request sales_order_id_id_create_purchase_order_request_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePurchaseOrderRequestPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPost200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreatePurchaseOrderRequestPost($id, $sales_order_id_id_create_purchase_order_request_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreatePurchaseOrderRequestPost'][0])
    {
        list($response) = $this->salesOrderIdIdCreatePurchaseOrderRequestPostWithHttpInfo($id, $sales_order_id_id_create_purchase_order_request_post_request, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreatePurchaseOrderRequestPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostRequest $sales_order_id_id_create_purchase_order_request_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePurchaseOrderRequestPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPost200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreatePurchaseOrderRequestPostWithHttpInfo($id, $sales_order_id_id_create_purchase_order_request_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreatePurchaseOrderRequestPost'][0])
    {
        $request = $this->salesOrderIdIdCreatePurchaseOrderRequestPostRequest($id, $sales_order_id_id_create_purchase_order_request_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPost200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPost200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreatePurchaseOrderRequestPostAsync
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostRequest $sales_order_id_id_create_purchase_order_request_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePurchaseOrderRequestPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreatePurchaseOrderRequestPostAsync($id, $sales_order_id_id_create_purchase_order_request_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreatePurchaseOrderRequestPost'][0])
    {
        return $this->salesOrderIdIdCreatePurchaseOrderRequestPostAsyncWithHttpInfo($id, $sales_order_id_id_create_purchase_order_request_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreatePurchaseOrderRequestPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostRequest $sales_order_id_id_create_purchase_order_request_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePurchaseOrderRequestPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreatePurchaseOrderRequestPostAsyncWithHttpInfo($id, $sales_order_id_id_create_purchase_order_request_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreatePurchaseOrderRequestPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\QuotationIdIdCreatePurchaseOrderRequestPost200Response';
        $request = $this->salesOrderIdIdCreatePurchaseOrderRequestPostRequest($id, $sales_order_id_id_create_purchase_order_request_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreatePurchaseOrderRequestPost'
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreatePurchaseOrderRequestPostRequest $sales_order_id_id_create_purchase_order_request_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreatePurchaseOrderRequestPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreatePurchaseOrderRequestPostRequest($id, $sales_order_id_id_create_purchase_order_request_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreatePurchaseOrderRequestPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreatePurchaseOrderRequestPost'
            );
        }

        // verify the required parameter 'sales_order_id_id_create_purchase_order_request_post_request' is set
        if ($sales_order_id_id_create_purchase_order_request_post_request === null || (is_array($sales_order_id_id_create_purchase_order_request_post_request) && count($sales_order_id_id_create_purchase_order_request_post_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id_id_create_purchase_order_request_post_request when calling salesOrderIdIdCreatePurchaseOrderRequestPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createPurchaseOrderRequest';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($sales_order_id_id_create_purchase_order_request_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($sales_order_id_id_create_purchase_order_request_post_request));
            } else {
                $httpBody = $sales_order_id_id_create_purchase_order_request_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreateReturnLabelsPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateReturnLabelsPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\DocumentGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreateReturnLabelsPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateReturnLabelsPost'][0])
    {
        list($response) = $this->salesOrderIdIdCreateReturnLabelsPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreateReturnLabelsPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateReturnLabelsPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\DocumentGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreateReturnLabelsPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateReturnLabelsPost'][0])
    {
        $request = $this->salesOrderIdIdCreateReturnLabelsPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\DocumentGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\DocumentGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\DocumentGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreateReturnLabelsPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateReturnLabelsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateReturnLabelsPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateReturnLabelsPost'][0])
    {
        return $this->salesOrderIdIdCreateReturnLabelsPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreateReturnLabelsPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateReturnLabelsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateReturnLabelsPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateReturnLabelsPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\DocumentGet200Response';
        $request = $this->salesOrderIdIdCreateReturnLabelsPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreateReturnLabelsPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateReturnLabelsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreateReturnLabelsPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateReturnLabelsPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreateReturnLabelsPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdCreateReturnLabelsPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createReturnLabels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreateSalesInvoicePost
     *
     * @param  string $id id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest $sales_order_id_id_create_sales_invoice_post_request sales_order_id_id_create_sales_invoice_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateSalesInvoicePost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreateSalesInvoicePost($id, $sales_order_id_id_create_sales_invoice_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateSalesInvoicePost'][0])
    {
        list($response) = $this->salesOrderIdIdCreateSalesInvoicePostWithHttpInfo($id, $sales_order_id_id_create_sales_invoice_post_request, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreateSalesInvoicePostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest $sales_order_id_id_create_sales_invoice_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateSalesInvoicePost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreateSalesInvoicePostWithHttpInfo($id, $sales_order_id_id_create_sales_invoice_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateSalesInvoicePost'][0])
    {
        $request = $this->salesOrderIdIdCreateSalesInvoicePostRequest($id, $sales_order_id_id_create_sales_invoice_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreateSalesInvoicePostAsync
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest $sales_order_id_id_create_sales_invoice_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateSalesInvoicePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateSalesInvoicePostAsync($id, $sales_order_id_id_create_sales_invoice_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateSalesInvoicePost'][0])
    {
        return $this->salesOrderIdIdCreateSalesInvoicePostAsyncWithHttpInfo($id, $sales_order_id_id_create_sales_invoice_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreateSalesInvoicePostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest $sales_order_id_id_create_sales_invoice_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateSalesInvoicePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateSalesInvoicePostAsyncWithHttpInfo($id, $sales_order_id_id_create_sales_invoice_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateSalesInvoicePost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCreditNotePost200Response';
        $request = $this->salesOrderIdIdCreateSalesInvoicePostRequest($id, $sales_order_id_id_create_sales_invoice_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreateSalesInvoicePost'
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest $sales_order_id_id_create_sales_invoice_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateSalesInvoicePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreateSalesInvoicePostRequest($id, $sales_order_id_id_create_sales_invoice_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateSalesInvoicePost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreateSalesInvoicePost'
            );
        }

        // verify the required parameter 'sales_order_id_id_create_sales_invoice_post_request' is set
        if ($sales_order_id_id_create_sales_invoice_post_request === null || (is_array($sales_order_id_id_create_sales_invoice_post_request) && count($sales_order_id_id_create_sales_invoice_post_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id_id_create_sales_invoice_post_request when calling salesOrderIdIdCreateSalesInvoicePost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createSalesInvoice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($sales_order_id_id_create_sales_invoice_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($sales_order_id_id_create_sales_invoice_post_request));
            } else {
                $httpBody = $sales_order_id_id_create_sales_invoice_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreateShipmentPost
     *
     * @param  string $id id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest $sales_order_id_id_create_sales_invoice_post_request sales_order_id_id_create_sales_invoice_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateShipmentPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreateShipmentPost($id, $sales_order_id_id_create_sales_invoice_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateShipmentPost'][0])
    {
        list($response) = $this->salesOrderIdIdCreateShipmentPostWithHttpInfo($id, $sales_order_id_id_create_sales_invoice_post_request, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreateShipmentPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest $sales_order_id_id_create_sales_invoice_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateShipmentPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreateShipmentPostWithHttpInfo($id, $sales_order_id_id_create_sales_invoice_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateShipmentPost'][0])
    {
        $request = $this->salesOrderIdIdCreateShipmentPostRequest($id, $sales_order_id_id_create_sales_invoice_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreateShipmentPostAsync
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest $sales_order_id_id_create_sales_invoice_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateShipmentPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateShipmentPostAsync($id, $sales_order_id_id_create_sales_invoice_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateShipmentPost'][0])
    {
        return $this->salesOrderIdIdCreateShipmentPostAsyncWithHttpInfo($id, $sales_order_id_id_create_sales_invoice_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreateShipmentPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest $sales_order_id_id_create_sales_invoice_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateShipmentPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateShipmentPostAsyncWithHttpInfo($id, $sales_order_id_id_create_sales_invoice_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateShipmentPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\IncomingGoodsIdIdCreateCompensationShipmentPost200Response';
        $request = $this->salesOrderIdIdCreateShipmentPostRequest($id, $sales_order_id_id_create_sales_invoice_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreateShipmentPost'
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrderIdIdCreateSalesInvoicePostRequest $sales_order_id_id_create_sales_invoice_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateShipmentPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreateShipmentPostRequest($id, $sales_order_id_id_create_sales_invoice_post_request, string $contentType = self::contentTypes['salesOrderIdIdCreateShipmentPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreateShipmentPost'
            );
        }

        // verify the required parameter 'sales_order_id_id_create_sales_invoice_post_request' is set
        if ($sales_order_id_id_create_sales_invoice_post_request === null || (is_array($sales_order_id_id_create_sales_invoice_post_request) && count($sales_order_id_id_create_sales_invoice_post_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order_id_id_create_sales_invoice_post_request when calling salesOrderIdIdCreateShipmentPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createShipment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($sales_order_id_id_create_sales_invoice_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($sales_order_id_id_create_sales_invoice_post_request));
            } else {
                $httpBody = $sales_order_id_id_create_sales_invoice_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdCreateShippingLabelsPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateShippingLabelsPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\DocumentGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdCreateShippingLabelsPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateShippingLabelsPost'][0])
    {
        list($response) = $this->salesOrderIdIdCreateShippingLabelsPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdCreateShippingLabelsPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateShippingLabelsPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\DocumentGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdCreateShippingLabelsPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateShippingLabelsPost'][0])
    {
        $request = $this->salesOrderIdIdCreateShippingLabelsPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\DocumentGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\DocumentGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\DocumentGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdCreateShippingLabelsPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateShippingLabelsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateShippingLabelsPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateShippingLabelsPost'][0])
    {
        return $this->salesOrderIdIdCreateShippingLabelsPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdCreateShippingLabelsPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateShippingLabelsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdCreateShippingLabelsPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateShippingLabelsPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\DocumentGet200Response';
        $request = $this->salesOrderIdIdCreateShippingLabelsPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdCreateShippingLabelsPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdCreateShippingLabelsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdCreateShippingLabelsPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdCreateShippingLabelsPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdCreateShippingLabelsPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdCreateShippingLabelsPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/createShippingLabels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdDelete
     *
     * delete a salesOrder
     *
     * @param  string $id id (required)
     * @param  bool|null $dry_run dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdDelete'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function salesOrderIdIdDelete($id, $dry_run = null, string $contentType = self::contentTypes['salesOrderIdIdDelete'][0])
    {
        $this->salesOrderIdIdDeleteWithHttpInfo($id, $dry_run, $contentType);
    }

    /**
     * Operation salesOrderIdIdDeleteWithHttpInfo
     *
     * delete a salesOrder
     *
     * @param  string $id (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdDelete'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdDeleteWithHttpInfo($id, $dry_run = null, string $contentType = self::contentTypes['salesOrderIdIdDelete'][0])
    {
        $request = $this->salesOrderIdIdDeleteRequest($id, $dry_run, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdDeleteAsync
     *
     * delete a salesOrder
     *
     * @param  string $id (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdDeleteAsync($id, $dry_run = null, string $contentType = self::contentTypes['salesOrderIdIdDelete'][0])
    {
        return $this->salesOrderIdIdDeleteAsyncWithHttpInfo($id, $dry_run, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdDeleteAsyncWithHttpInfo
     *
     * delete a salesOrder
     *
     * @param  string $id (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdDeleteAsyncWithHttpInfo($id, $dry_run = null, string $contentType = self::contentTypes['salesOrderIdIdDelete'][0])
    {
        $returnType = '';
        $request = $this->salesOrderIdIdDeleteRequest($id, $dry_run, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdDelete'
     *
     * @param  string $id (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdDeleteRequest($id, $dry_run = null, string $contentType = self::contentTypes['salesOrderIdIdDelete'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdDelete'
            );
        }



        $resourcePath = '/salesOrder/id/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $dry_run,
            'dryRun', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdDownloadLatestOrderConfirmationPdfGet
     *
     * @param  string $id id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \SplFileObject|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdDownloadLatestOrderConfirmationPdfGet($id, string $contentType = self::contentTypes['salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'][0])
    {
        list($response) = $this->salesOrderIdIdDownloadLatestOrderConfirmationPdfGetWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdDownloadLatestOrderConfirmationPdfGetWithHttpInfo
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdDownloadLatestOrderConfirmationPdfGetWithHttpInfo($id, string $contentType = self::contentTypes['salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'][0])
    {
        $request = $this->salesOrderIdIdDownloadLatestOrderConfirmationPdfGetRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\SplFileObject',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\SplFileObject',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdDownloadLatestOrderConfirmationPdfGetAsync
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdDownloadLatestOrderConfirmationPdfGetAsync($id, string $contentType = self::contentTypes['salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'][0])
    {
        return $this->salesOrderIdIdDownloadLatestOrderConfirmationPdfGetAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdDownloadLatestOrderConfirmationPdfGetAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdDownloadLatestOrderConfirmationPdfGetAsyncWithHttpInfo($id, string $contentType = self::contentTypes['salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'][0])
    {
        $returnType = '\SplFileObject';
        $request = $this->salesOrderIdIdDownloadLatestOrderConfirmationPdfGetRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdDownloadLatestOrderConfirmationPdfGetRequest($id, string $contentType = self::contentTypes['salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdDownloadLatestOrderConfirmationPdfGet'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/downloadLatestOrderConfirmationPdf';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['*/*', 'application/pdf', 'image/jpeg', 'image/png', 'application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdGet
     *
     * query a specific salesOrder
     *
     * @param  string $id id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrder|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdGet($id, string $contentType = self::contentTypes['salesOrderIdIdGet'][0])
    {
        list($response) = $this->salesOrderIdIdGetWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdGetWithHttpInfo
     *
     * query a specific salesOrder
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrder|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdGetWithHttpInfo($id, string $contentType = self::contentTypes['salesOrderIdIdGet'][0])
    {
        $request = $this->salesOrderIdIdGetRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrder',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrder',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdGetAsync
     *
     * query a specific salesOrder
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdGetAsync($id, string $contentType = self::contentTypes['salesOrderIdIdGet'][0])
    {
        return $this->salesOrderIdIdGetAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdGetAsyncWithHttpInfo
     *
     * query a specific salesOrder
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdGetAsyncWithHttpInfo($id, string $contentType = self::contentTypes['salesOrderIdIdGet'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrder';
        $request = $this->salesOrderIdIdGetRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdGet'
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdGetRequest($id, string $contentType = self::contentTypes['salesOrderIdIdGet'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdGet'
            );
        }


        $resourcePath = '/salesOrder/id/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdManuallyClosePost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdManuallyClosePost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdManuallyClosePost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdManuallyClosePost'][0])
    {
        list($response) = $this->salesOrderIdIdManuallyClosePostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdManuallyClosePostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdManuallyClosePost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdManuallyClosePostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdManuallyClosePost'][0])
    {
        $request = $this->salesOrderIdIdManuallyClosePostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdManuallyClosePostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdManuallyClosePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdManuallyClosePostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdManuallyClosePost'][0])
    {
        return $this->salesOrderIdIdManuallyClosePostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdManuallyClosePostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdManuallyClosePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdManuallyClosePostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdManuallyClosePost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdManuallyClosePostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdManuallyClosePost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdManuallyClosePost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdManuallyClosePostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdManuallyClosePost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdManuallyClosePost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdManuallyClosePost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/manuallyClose';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdPrintOrderDataGet
     *
     * @param  string $id id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdPrintOrderDataGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \SplFileObject|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdPrintOrderDataGet($id, string $contentType = self::contentTypes['salesOrderIdIdPrintOrderDataGet'][0])
    {
        list($response) = $this->salesOrderIdIdPrintOrderDataGetWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdPrintOrderDataGetWithHttpInfo
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdPrintOrderDataGet'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \SplFileObject|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdPrintOrderDataGetWithHttpInfo($id, string $contentType = self::contentTypes['salesOrderIdIdPrintOrderDataGet'][0])
    {
        $request = $this->salesOrderIdIdPrintOrderDataGetRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\SplFileObject',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\SplFileObject',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplFileObject',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdPrintOrderDataGetAsync
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdPrintOrderDataGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdPrintOrderDataGetAsync($id, string $contentType = self::contentTypes['salesOrderIdIdPrintOrderDataGet'][0])
    {
        return $this->salesOrderIdIdPrintOrderDataGetAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdPrintOrderDataGetAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdPrintOrderDataGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdPrintOrderDataGetAsyncWithHttpInfo($id, string $contentType = self::contentTypes['salesOrderIdIdPrintOrderDataGet'][0])
    {
        $returnType = '\SplFileObject';
        $request = $this->salesOrderIdIdPrintOrderDataGetRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdPrintOrderDataGet'
     *
     * @param  string $id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdPrintOrderDataGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdPrintOrderDataGetRequest($id, string $contentType = self::contentTypes['salesOrderIdIdPrintOrderDataGet'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdPrintOrderDataGet'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/printOrderData';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['*/*', 'application/pdf', 'image/jpeg', 'image/png', 'application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdPut
     *
     * update a salesOrder
     *
     * @param  string $id id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrder $sales_order sales_order (required)
     * @param  bool|null $dry_run dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdPut'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrder|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdPut($id, $sales_order, $dry_run = null, string $contentType = self::contentTypes['salesOrderIdIdPut'][0])
    {
        list($response) = $this->salesOrderIdIdPutWithHttpInfo($id, $sales_order, $dry_run, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdPutWithHttpInfo
     *
     * update a salesOrder
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrder $sales_order (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdPut'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrder|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdPutWithHttpInfo($id, $sales_order, $dry_run = null, string $contentType = self::contentTypes['salesOrderIdIdPut'][0])
    {
        $request = $this->salesOrderIdIdPutRequest($id, $sales_order, $dry_run, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrder',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrder',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdPutAsync
     *
     * update a salesOrder
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrder $sales_order (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdPutAsync($id, $sales_order, $dry_run = null, string $contentType = self::contentTypes['salesOrderIdIdPut'][0])
    {
        return $this->salesOrderIdIdPutAsyncWithHttpInfo($id, $sales_order, $dry_run, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdPutAsyncWithHttpInfo
     *
     * update a salesOrder
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrder $sales_order (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdPutAsyncWithHttpInfo($id, $sales_order, $dry_run = null, string $contentType = self::contentTypes['salesOrderIdIdPut'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrder';
        $request = $this->salesOrderIdIdPutRequest($id, $sales_order, $dry_run, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdPut'
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\SalesOrder $sales_order (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdPut'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdPutRequest($id, $sales_order, $dry_run = null, string $contentType = self::contentTypes['salesOrderIdIdPut'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdPut'
            );
        }

        // verify the required parameter 'sales_order' is set
        if ($sales_order === null || (is_array($sales_order) && count($sales_order) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order when calling salesOrderIdIdPut'
            );
        }



        $resourcePath = '/salesOrder/id/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $dry_run,
            'dryRun', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($sales_order)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($sales_order));
            } else {
                $httpBody = $sales_order;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdRecalculateCostsPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdRecalculateCostsPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdRecalculateCostsPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdRecalculateCostsPost'][0])
    {
        list($response) = $this->salesOrderIdIdRecalculateCostsPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdRecalculateCostsPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdRecalculateCostsPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdRecalculateCostsPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdRecalculateCostsPost'][0])
    {
        $request = $this->salesOrderIdIdRecalculateCostsPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdRecalculateCostsPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdRecalculateCostsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdRecalculateCostsPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdRecalculateCostsPost'][0])
    {
        return $this->salesOrderIdIdRecalculateCostsPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdRecalculateCostsPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdRecalculateCostsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdRecalculateCostsPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdRecalculateCostsPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdRecalculateCostsPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdRecalculateCostsPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdRecalculateCostsPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdRecalculateCostsPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdRecalculateCostsPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdRecalculateCostsPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdRecalculateCostsPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/recalculateCosts';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdResetTaxesPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdResetTaxesPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdResetTaxesPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdResetTaxesPost'][0])
    {
        list($response) = $this->salesOrderIdIdResetTaxesPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdResetTaxesPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdResetTaxesPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdResetTaxesPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdResetTaxesPost'][0])
    {
        $request = $this->salesOrderIdIdResetTaxesPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdResetTaxesPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdResetTaxesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdResetTaxesPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdResetTaxesPost'][0])
    {
        return $this->salesOrderIdIdResetTaxesPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdResetTaxesPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdResetTaxesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdResetTaxesPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdResetTaxesPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdResetTaxesPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdResetTaxesPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdResetTaxesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdResetTaxesPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdResetTaxesPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdResetTaxesPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdResetTaxesPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/resetTaxes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdSetCostsForItemsWithoutCostPost
     *
     * @param  string $id id (required)
     * @param  \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest $quotation_id_id_set_costs_for_items_without_cost_post_request quotation_id_id_set_costs_for_items_without_cost_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdSetCostsForItemsWithoutCostPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdSetCostsForItemsWithoutCostPost($id, $quotation_id_id_set_costs_for_items_without_cost_post_request, string $contentType = self::contentTypes['salesOrderIdIdSetCostsForItemsWithoutCostPost'][0])
    {
        list($response) = $this->salesOrderIdIdSetCostsForItemsWithoutCostPostWithHttpInfo($id, $quotation_id_id_set_costs_for_items_without_cost_post_request, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdSetCostsForItemsWithoutCostPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest $quotation_id_id_set_costs_for_items_without_cost_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdSetCostsForItemsWithoutCostPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdSetCostsForItemsWithoutCostPostWithHttpInfo($id, $quotation_id_id_set_costs_for_items_without_cost_post_request, string $contentType = self::contentTypes['salesOrderIdIdSetCostsForItemsWithoutCostPost'][0])
    {
        $request = $this->salesOrderIdIdSetCostsForItemsWithoutCostPostRequest($id, $quotation_id_id_set_costs_for_items_without_cost_post_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdSetCostsForItemsWithoutCostPostAsync
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest $quotation_id_id_set_costs_for_items_without_cost_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdSetCostsForItemsWithoutCostPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdSetCostsForItemsWithoutCostPostAsync($id, $quotation_id_id_set_costs_for_items_without_cost_post_request, string $contentType = self::contentTypes['salesOrderIdIdSetCostsForItemsWithoutCostPost'][0])
    {
        return $this->salesOrderIdIdSetCostsForItemsWithoutCostPostAsyncWithHttpInfo($id, $quotation_id_id_set_costs_for_items_without_cost_post_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdSetCostsForItemsWithoutCostPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest $quotation_id_id_set_costs_for_items_without_cost_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdSetCostsForItemsWithoutCostPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdSetCostsForItemsWithoutCostPostAsyncWithHttpInfo($id, $quotation_id_id_set_costs_for_items_without_cost_post_request, string $contentType = self::contentTypes['salesOrderIdIdSetCostsForItemsWithoutCostPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdSetCostsForItemsWithoutCostPostRequest($id, $quotation_id_id_set_costs_for_items_without_cost_post_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdSetCostsForItemsWithoutCostPost'
     *
     * @param  string $id (required)
     * @param  \kruegge82\weclapp\Model\QuotationIdIdSetCostsForItemsWithoutCostPostRequest $quotation_id_id_set_costs_for_items_without_cost_post_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdSetCostsForItemsWithoutCostPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdSetCostsForItemsWithoutCostPostRequest($id, $quotation_id_id_set_costs_for_items_without_cost_post_request, string $contentType = self::contentTypes['salesOrderIdIdSetCostsForItemsWithoutCostPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdSetCostsForItemsWithoutCostPost'
            );
        }

        // verify the required parameter 'quotation_id_id_set_costs_for_items_without_cost_post_request' is set
        if ($quotation_id_id_set_costs_for_items_without_cost_post_request === null || (is_array($quotation_id_id_set_costs_for_items_without_cost_post_request) && count($quotation_id_id_set_costs_for_items_without_cost_post_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $quotation_id_id_set_costs_for_items_without_cost_post_request when calling salesOrderIdIdSetCostsForItemsWithoutCostPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/setCostsForItemsWithoutCost';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($quotation_id_id_set_costs_for_items_without_cost_post_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($quotation_id_id_set_costs_for_items_without_cost_post_request));
            } else {
                $httpBody = $quotation_id_id_set_costs_for_items_without_cost_post_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdShipOrderForExternalFulfillmentPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdShipOrderForExternalFulfillmentPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdShipOrderForExternalFulfillmentPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdShipOrderForExternalFulfillmentPost'][0])
    {
        list($response) = $this->salesOrderIdIdShipOrderForExternalFulfillmentPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdShipOrderForExternalFulfillmentPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdShipOrderForExternalFulfillmentPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdShipOrderForExternalFulfillmentPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdShipOrderForExternalFulfillmentPost'][0])
    {
        $request = $this->salesOrderIdIdShipOrderForExternalFulfillmentPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdShipOrderForExternalFulfillmentPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdShipOrderForExternalFulfillmentPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdShipOrderForExternalFulfillmentPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdShipOrderForExternalFulfillmentPost'][0])
    {
        return $this->salesOrderIdIdShipOrderForExternalFulfillmentPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdShipOrderForExternalFulfillmentPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdShipOrderForExternalFulfillmentPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdShipOrderForExternalFulfillmentPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdShipOrderForExternalFulfillmentPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdShipOrderForExternalFulfillmentPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdShipOrderForExternalFulfillmentPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdShipOrderForExternalFulfillmentPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdShipOrderForExternalFulfillmentPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdShipOrderForExternalFulfillmentPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdShipOrderForExternalFulfillmentPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdShipOrderForExternalFulfillmentPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/shipOrderForExternalFulfillment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdToggleProjectTeamPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdToggleProjectTeamPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdToggleProjectTeamPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdToggleProjectTeamPost'][0])
    {
        list($response) = $this->salesOrderIdIdToggleProjectTeamPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdToggleProjectTeamPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdToggleProjectTeamPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdToggleProjectTeamPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdToggleProjectTeamPost'][0])
    {
        $request = $this->salesOrderIdIdToggleProjectTeamPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdToggleProjectTeamPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdToggleProjectTeamPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdToggleProjectTeamPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdToggleProjectTeamPost'][0])
    {
        return $this->salesOrderIdIdToggleProjectTeamPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdToggleProjectTeamPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdToggleProjectTeamPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdToggleProjectTeamPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdToggleProjectTeamPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdToggleProjectTeamPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdToggleProjectTeamPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdToggleProjectTeamPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdToggleProjectTeamPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdToggleProjectTeamPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdToggleProjectTeamPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdToggleProjectTeamPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/toggleProjectTeam';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdToggleServicesFinishedPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdToggleServicesFinishedPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdToggleServicesFinishedPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdToggleServicesFinishedPost'][0])
    {
        list($response) = $this->salesOrderIdIdToggleServicesFinishedPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdToggleServicesFinishedPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdToggleServicesFinishedPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdToggleServicesFinishedPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdToggleServicesFinishedPost'][0])
    {
        $request = $this->salesOrderIdIdToggleServicesFinishedPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdToggleServicesFinishedPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdToggleServicesFinishedPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdToggleServicesFinishedPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdToggleServicesFinishedPost'][0])
    {
        return $this->salesOrderIdIdToggleServicesFinishedPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdToggleServicesFinishedPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdToggleServicesFinishedPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdToggleServicesFinishedPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdToggleServicesFinishedPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdToggleServicesFinishedPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdToggleServicesFinishedPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdToggleServicesFinishedPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdToggleServicesFinishedPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdToggleServicesFinishedPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdToggleServicesFinishedPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdToggleServicesFinishedPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/toggleServicesFinished';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderIdIdUpdatePricesPost
     *
     * @param  string $id id (required)
     * @param  object $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdUpdatePricesPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderIdIdUpdatePricesPost($id, $body, string $contentType = self::contentTypes['salesOrderIdIdUpdatePricesPost'][0])
    {
        list($response) = $this->salesOrderIdIdUpdatePricesPostWithHttpInfo($id, $body, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderIdIdUpdatePricesPostWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdUpdatePricesPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderIdIdUpdatePricesPostWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdUpdatePricesPost'][0])
    {
        $request = $this->salesOrderIdIdUpdatePricesPostRequest($id, $body, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderIdIdUpdatePricesPostAsync
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdUpdatePricesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdUpdatePricesPostAsync($id, $body, string $contentType = self::contentTypes['salesOrderIdIdUpdatePricesPost'][0])
    {
        return $this->salesOrderIdIdUpdatePricesPostAsyncWithHttpInfo($id, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderIdIdUpdatePricesPostAsyncWithHttpInfo
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdUpdatePricesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderIdIdUpdatePricesPostAsyncWithHttpInfo($id, $body, string $contentType = self::contentTypes['salesOrderIdIdUpdatePricesPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrderDefaultValuesForCreateGet200Response';
        $request = $this->salesOrderIdIdUpdatePricesPostRequest($id, $body, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderIdIdUpdatePricesPost'
     *
     * @param  string $id (required)
     * @param  object $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderIdIdUpdatePricesPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderIdIdUpdatePricesPostRequest($id, $body, string $contentType = self::contentTypes['salesOrderIdIdUpdatePricesPost'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling salesOrderIdIdUpdatePricesPost'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling salesOrderIdIdUpdatePricesPost'
            );
        }


        $resourcePath = '/salesOrder/id/{id}/updatePrices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation salesOrderPost
     *
     * create a salesOrder
     *
     * @param  \kruegge82\weclapp\Model\SalesOrder $sales_order sales_order (required)
     * @param  bool|null $dry_run dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \kruegge82\weclapp\Model\SalesOrder|\kruegge82\weclapp\Model\ApiProblem
     */
    public function salesOrderPost($sales_order, $dry_run = null, string $contentType = self::contentTypes['salesOrderPost'][0])
    {
        list($response) = $this->salesOrderPostWithHttpInfo($sales_order, $dry_run, $contentType);
        return $response;
    }

    /**
     * Operation salesOrderPostWithHttpInfo
     *
     * create a salesOrder
     *
     * @param  \kruegge82\weclapp\Model\SalesOrder $sales_order (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderPost'] to see the possible values for this operation
     *
     * @throws \kruegge82\weclapp\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \kruegge82\weclapp\Model\SalesOrder|\kruegge82\weclapp\Model\ApiProblem, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderPostWithHttpInfo($sales_order, $dry_run = null, string $contentType = self::contentTypes['salesOrderPost'][0])
    {
        $request = $this->salesOrderPostRequest($sales_order, $dry_run, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 201:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\SalesOrder',
                        $request,
                        $response,
                    );
                default:
                    return $this->handleResponseWithDataType(
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\kruegge82\weclapp\Model\SalesOrder',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\SalesOrder',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\kruegge82\weclapp\Model\ApiProblem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation salesOrderPostAsync
     *
     * create a salesOrder
     *
     * @param  \kruegge82\weclapp\Model\SalesOrder $sales_order (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderPostAsync($sales_order, $dry_run = null, string $contentType = self::contentTypes['salesOrderPost'][0])
    {
        return $this->salesOrderPostAsyncWithHttpInfo($sales_order, $dry_run, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation salesOrderPostAsyncWithHttpInfo
     *
     * create a salesOrder
     *
     * @param  \kruegge82\weclapp\Model\SalesOrder $sales_order (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function salesOrderPostAsyncWithHttpInfo($sales_order, $dry_run = null, string $contentType = self::contentTypes['salesOrderPost'][0])
    {
        $returnType = '\kruegge82\weclapp\Model\SalesOrder';
        $request = $this->salesOrderPostRequest($sales_order, $dry_run, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'salesOrderPost'
     *
     * @param  \kruegge82\weclapp\Model\SalesOrder $sales_order (required)
     * @param  bool|null $dry_run (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['salesOrderPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function salesOrderPostRequest($sales_order, $dry_run = null, string $contentType = self::contentTypes['salesOrderPost'][0])
    {

        // verify the required parameter 'sales_order' is set
        if ($sales_order === null || (is_array($sales_order) && count($sales_order) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sales_order when calling salesOrderPost'
            );
        }



        $resourcePath = '/salesOrder';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $dry_run,
            'dryRun', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($sales_order)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($sales_order));
            } else {
                $httpBody = $sales_order;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('AuthenticationToken');
        if ($apiKey !== null) {
            $headers['AuthenticationToken'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
