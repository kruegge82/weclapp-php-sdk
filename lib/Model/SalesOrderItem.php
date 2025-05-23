<?php
/**
 * SalesOrderItem
 *
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

namespace kruegge82\weclapp\Model;

use \ArrayAccess;
use \kruegge82\weclapp\ObjectSerializer;

/**
 * SalesOrderItem Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SalesOrderItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'salesOrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_date' => 'int',
        'last_modified_date' => 'int',
        'version' => 'string',
        'custom_attributes' => '\kruegge82\weclapp\Model\CustomAttribute[]',
        'article_id' => 'string',
        'article_number' => 'string',
        'note' => 'string',
        'position_number' => 'int',
        'quantity' => 'float',
        'description' => 'string',
        'description_fixed' => 'bool',
        'item_type' => '\kruegge82\weclapp\Model\ItemType',
        'manual_quantity' => 'bool',
        'parent_item_id' => 'string',
        'title' => 'string',
        'unit_id' => 'string',
        'unit_name' => 'string',
        'discount_percentage' => 'float',
        'gross_amount' => 'float',
        'gross_amount_in_company_currency' => 'float',
        'manual_unit_price' => 'bool',
        'net_amount' => 'float',
        'net_amount_for_statistics' => 'float',
        'net_amount_for_statistics_in_company_currency' => 'float',
        'net_amount_in_company_currency' => 'float',
        'reduction_addition_items' => '\kruegge82\weclapp\Model\ReductionAdditionItem[]',
        'tax_id' => 'string',
        'tax_name' => 'string',
        'unit_price' => 'float',
        'unit_price_in_company_currency' => 'float',
        'add_page_break_before' => 'bool',
        'group_name' => 'string',
        'commission_sales_partners' => '\kruegge82\weclapp\Model\CommissionSalesPartner[]',
        'manual_unit_cost' => 'bool',
        'recommended_retail_price' => 'float',
        'service_period_from' => 'int',
        'service_period_to' => 'int',
        'unit_cost' => 'float',
        'unit_cost_in_company_currency' => 'float',
        'invoicing_type' => '\kruegge82\weclapp\Model\InvoicingType',
        'manual_planned_working_time_per_unit' => 'bool',
        'planned_delivery_date' => 'int',
        'planned_shipping_date' => 'int',
        'planned_working_time_per_unit' => 'int',
        'availability' => '\kruegge82\weclapp\Model\DispositionInfoAvailabilityType',
        'availability_for_all_warehouses' => '\kruegge82\weclapp\Model\DispositionInfoAvailabilityType',
        'contract_charge_id' => 'string',
        'ecommerce_order_item_ids' => 'string[]',
        'invoiced_quantity' => 'float',
        'picks' => '\kruegge82\weclapp\Model\ItemPick[]',
        'returned_quantity' => 'float',
        'shipped' => 'bool',
        'shipped_quantity' => 'float',
        'tasks' => '\kruegge82\weclapp\Model\OnlyId[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_date' => 'timestamp',
        'last_modified_date' => 'timestamp',
        'version' => null,
        'custom_attributes' => null,
        'article_id' => null,
        'article_number' => null,
        'note' => null,
        'position_number' => 'int32',
        'quantity' => 'decimal',
        'description' => 'html',
        'description_fixed' => null,
        'item_type' => null,
        'manual_quantity' => null,
        'parent_item_id' => null,
        'title' => null,
        'unit_id' => null,
        'unit_name' => null,
        'discount_percentage' => 'decimal',
        'gross_amount' => 'decimal',
        'gross_amount_in_company_currency' => 'decimal',
        'manual_unit_price' => null,
        'net_amount' => 'decimal',
        'net_amount_for_statistics' => 'decimal',
        'net_amount_for_statistics_in_company_currency' => 'decimal',
        'net_amount_in_company_currency' => 'decimal',
        'reduction_addition_items' => null,
        'tax_id' => null,
        'tax_name' => null,
        'unit_price' => 'decimal',
        'unit_price_in_company_currency' => 'decimal',
        'add_page_break_before' => null,
        'group_name' => null,
        'commission_sales_partners' => null,
        'manual_unit_cost' => null,
        'recommended_retail_price' => 'decimal',
        'service_period_from' => 'timestamp',
        'service_period_to' => 'timestamp',
        'unit_cost' => 'decimal',
        'unit_cost_in_company_currency' => 'decimal',
        'invoicing_type' => null,
        'manual_planned_working_time_per_unit' => null,
        'planned_delivery_date' => 'timestamp',
        'planned_shipping_date' => 'timestamp',
        'planned_working_time_per_unit' => 'int64',
        'availability' => null,
        'availability_for_all_warehouses' => null,
        'contract_charge_id' => null,
        'ecommerce_order_item_ids' => null,
        'invoiced_quantity' => 'decimal',
        'picks' => null,
        'returned_quantity' => 'decimal',
        'shipped' => null,
        'shipped_quantity' => 'decimal',
        'tasks' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'created_date' => false,
        'last_modified_date' => false,
        'version' => false,
        'custom_attributes' => false,
        'article_id' => false,
        'article_number' => false,
        'note' => false,
        'position_number' => false,
        'quantity' => false,
        'description' => false,
        'description_fixed' => false,
        'item_type' => false,
        'manual_quantity' => false,
        'parent_item_id' => false,
        'title' => false,
        'unit_id' => false,
        'unit_name' => false,
        'discount_percentage' => false,
        'gross_amount' => false,
        'gross_amount_in_company_currency' => false,
        'manual_unit_price' => false,
        'net_amount' => false,
        'net_amount_for_statistics' => false,
        'net_amount_for_statistics_in_company_currency' => false,
        'net_amount_in_company_currency' => false,
        'reduction_addition_items' => false,
        'tax_id' => false,
        'tax_name' => false,
        'unit_price' => false,
        'unit_price_in_company_currency' => false,
        'add_page_break_before' => false,
        'group_name' => false,
        'commission_sales_partners' => false,
        'manual_unit_cost' => false,
        'recommended_retail_price' => false,
        'service_period_from' => false,
        'service_period_to' => false,
        'unit_cost' => false,
        'unit_cost_in_company_currency' => false,
        'invoicing_type' => false,
        'manual_planned_working_time_per_unit' => false,
        'planned_delivery_date' => false,
        'planned_shipping_date' => false,
        'planned_working_time_per_unit' => false,
        'availability' => false,
        'availability_for_all_warehouses' => false,
        'contract_charge_id' => false,
        'ecommerce_order_item_ids' => false,
        'invoiced_quantity' => false,
        'picks' => false,
        'returned_quantity' => false,
        'shipped' => false,
        'shipped_quantity' => false,
        'tasks' => false
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
        'id' => 'id',
        'created_date' => 'createdDate',
        'last_modified_date' => 'lastModifiedDate',
        'version' => 'version',
        'custom_attributes' => 'customAttributes',
        'article_id' => 'articleId',
        'article_number' => 'articleNumber',
        'note' => 'note',
        'position_number' => 'positionNumber',
        'quantity' => 'quantity',
        'description' => 'description',
        'description_fixed' => 'descriptionFixed',
        'item_type' => 'itemType',
        'manual_quantity' => 'manualQuantity',
        'parent_item_id' => 'parentItemId',
        'title' => 'title',
        'unit_id' => 'unitId',
        'unit_name' => 'unitName',
        'discount_percentage' => 'discountPercentage',
        'gross_amount' => 'grossAmount',
        'gross_amount_in_company_currency' => 'grossAmountInCompanyCurrency',
        'manual_unit_price' => 'manualUnitPrice',
        'net_amount' => 'netAmount',
        'net_amount_for_statistics' => 'netAmountForStatistics',
        'net_amount_for_statistics_in_company_currency' => 'netAmountForStatisticsInCompanyCurrency',
        'net_amount_in_company_currency' => 'netAmountInCompanyCurrency',
        'reduction_addition_items' => 'reductionAdditionItems',
        'tax_id' => 'taxId',
        'tax_name' => 'taxName',
        'unit_price' => 'unitPrice',
        'unit_price_in_company_currency' => 'unitPriceInCompanyCurrency',
        'add_page_break_before' => 'addPageBreakBefore',
        'group_name' => 'groupName',
        'commission_sales_partners' => 'commissionSalesPartners',
        'manual_unit_cost' => 'manualUnitCost',
        'recommended_retail_price' => 'recommendedRetailPrice',
        'service_period_from' => 'servicePeriodFrom',
        'service_period_to' => 'servicePeriodTo',
        'unit_cost' => 'unitCost',
        'unit_cost_in_company_currency' => 'unitCostInCompanyCurrency',
        'invoicing_type' => 'invoicingType',
        'manual_planned_working_time_per_unit' => 'manualPlannedWorkingTimePerUnit',
        'planned_delivery_date' => 'plannedDeliveryDate',
        'planned_shipping_date' => 'plannedShippingDate',
        'planned_working_time_per_unit' => 'plannedWorkingTimePerUnit',
        'availability' => 'availability',
        'availability_for_all_warehouses' => 'availabilityForAllWarehouses',
        'contract_charge_id' => 'contractChargeId',
        'ecommerce_order_item_ids' => 'ecommerceOrderItemIds',
        'invoiced_quantity' => 'invoicedQuantity',
        'picks' => 'picks',
        'returned_quantity' => 'returnedQuantity',
        'shipped' => 'shipped',
        'shipped_quantity' => 'shippedQuantity',
        'tasks' => 'tasks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_date' => 'setCreatedDate',
        'last_modified_date' => 'setLastModifiedDate',
        'version' => 'setVersion',
        'custom_attributes' => 'setCustomAttributes',
        'article_id' => 'setArticleId',
        'article_number' => 'setArticleNumber',
        'note' => 'setNote',
        'position_number' => 'setPositionNumber',
        'quantity' => 'setQuantity',
        'description' => 'setDescription',
        'description_fixed' => 'setDescriptionFixed',
        'item_type' => 'setItemType',
        'manual_quantity' => 'setManualQuantity',
        'parent_item_id' => 'setParentItemId',
        'title' => 'setTitle',
        'unit_id' => 'setUnitId',
        'unit_name' => 'setUnitName',
        'discount_percentage' => 'setDiscountPercentage',
        'gross_amount' => 'setGrossAmount',
        'gross_amount_in_company_currency' => 'setGrossAmountInCompanyCurrency',
        'manual_unit_price' => 'setManualUnitPrice',
        'net_amount' => 'setNetAmount',
        'net_amount_for_statistics' => 'setNetAmountForStatistics',
        'net_amount_for_statistics_in_company_currency' => 'setNetAmountForStatisticsInCompanyCurrency',
        'net_amount_in_company_currency' => 'setNetAmountInCompanyCurrency',
        'reduction_addition_items' => 'setReductionAdditionItems',
        'tax_id' => 'setTaxId',
        'tax_name' => 'setTaxName',
        'unit_price' => 'setUnitPrice',
        'unit_price_in_company_currency' => 'setUnitPriceInCompanyCurrency',
        'add_page_break_before' => 'setAddPageBreakBefore',
        'group_name' => 'setGroupName',
        'commission_sales_partners' => 'setCommissionSalesPartners',
        'manual_unit_cost' => 'setManualUnitCost',
        'recommended_retail_price' => 'setRecommendedRetailPrice',
        'service_period_from' => 'setServicePeriodFrom',
        'service_period_to' => 'setServicePeriodTo',
        'unit_cost' => 'setUnitCost',
        'unit_cost_in_company_currency' => 'setUnitCostInCompanyCurrency',
        'invoicing_type' => 'setInvoicingType',
        'manual_planned_working_time_per_unit' => 'setManualPlannedWorkingTimePerUnit',
        'planned_delivery_date' => 'setPlannedDeliveryDate',
        'planned_shipping_date' => 'setPlannedShippingDate',
        'planned_working_time_per_unit' => 'setPlannedWorkingTimePerUnit',
        'availability' => 'setAvailability',
        'availability_for_all_warehouses' => 'setAvailabilityForAllWarehouses',
        'contract_charge_id' => 'setContractChargeId',
        'ecommerce_order_item_ids' => 'setEcommerceOrderItemIds',
        'invoiced_quantity' => 'setInvoicedQuantity',
        'picks' => 'setPicks',
        'returned_quantity' => 'setReturnedQuantity',
        'shipped' => 'setShipped',
        'shipped_quantity' => 'setShippedQuantity',
        'tasks' => 'setTasks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_date' => 'getCreatedDate',
        'last_modified_date' => 'getLastModifiedDate',
        'version' => 'getVersion',
        'custom_attributes' => 'getCustomAttributes',
        'article_id' => 'getArticleId',
        'article_number' => 'getArticleNumber',
        'note' => 'getNote',
        'position_number' => 'getPositionNumber',
        'quantity' => 'getQuantity',
        'description' => 'getDescription',
        'description_fixed' => 'getDescriptionFixed',
        'item_type' => 'getItemType',
        'manual_quantity' => 'getManualQuantity',
        'parent_item_id' => 'getParentItemId',
        'title' => 'getTitle',
        'unit_id' => 'getUnitId',
        'unit_name' => 'getUnitName',
        'discount_percentage' => 'getDiscountPercentage',
        'gross_amount' => 'getGrossAmount',
        'gross_amount_in_company_currency' => 'getGrossAmountInCompanyCurrency',
        'manual_unit_price' => 'getManualUnitPrice',
        'net_amount' => 'getNetAmount',
        'net_amount_for_statistics' => 'getNetAmountForStatistics',
        'net_amount_for_statistics_in_company_currency' => 'getNetAmountForStatisticsInCompanyCurrency',
        'net_amount_in_company_currency' => 'getNetAmountInCompanyCurrency',
        'reduction_addition_items' => 'getReductionAdditionItems',
        'tax_id' => 'getTaxId',
        'tax_name' => 'getTaxName',
        'unit_price' => 'getUnitPrice',
        'unit_price_in_company_currency' => 'getUnitPriceInCompanyCurrency',
        'add_page_break_before' => 'getAddPageBreakBefore',
        'group_name' => 'getGroupName',
        'commission_sales_partners' => 'getCommissionSalesPartners',
        'manual_unit_cost' => 'getManualUnitCost',
        'recommended_retail_price' => 'getRecommendedRetailPrice',
        'service_period_from' => 'getServicePeriodFrom',
        'service_period_to' => 'getServicePeriodTo',
        'unit_cost' => 'getUnitCost',
        'unit_cost_in_company_currency' => 'getUnitCostInCompanyCurrency',
        'invoicing_type' => 'getInvoicingType',
        'manual_planned_working_time_per_unit' => 'getManualPlannedWorkingTimePerUnit',
        'planned_delivery_date' => 'getPlannedDeliveryDate',
        'planned_shipping_date' => 'getPlannedShippingDate',
        'planned_working_time_per_unit' => 'getPlannedWorkingTimePerUnit',
        'availability' => 'getAvailability',
        'availability_for_all_warehouses' => 'getAvailabilityForAllWarehouses',
        'contract_charge_id' => 'getContractChargeId',
        'ecommerce_order_item_ids' => 'getEcommerceOrderItemIds',
        'invoiced_quantity' => 'getInvoicedQuantity',
        'picks' => 'getPicks',
        'returned_quantity' => 'getReturnedQuantity',
        'shipped' => 'getShipped',
        'shipped_quantity' => 'getShippedQuantity',
        'tasks' => 'getTasks'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('custom_attributes', $data ?? [], null);
        $this->setIfExists('article_id', $data ?? [], null);
        $this->setIfExists('article_number', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('position_number', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('description_fixed', $data ?? [], null);
        $this->setIfExists('item_type', $data ?? [], null);
        $this->setIfExists('manual_quantity', $data ?? [], null);
        $this->setIfExists('parent_item_id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('unit_id', $data ?? [], null);
        $this->setIfExists('unit_name', $data ?? [], null);
        $this->setIfExists('discount_percentage', $data ?? [], null);
        $this->setIfExists('gross_amount', $data ?? [], null);
        $this->setIfExists('gross_amount_in_company_currency', $data ?? [], null);
        $this->setIfExists('manual_unit_price', $data ?? [], null);
        $this->setIfExists('net_amount', $data ?? [], null);
        $this->setIfExists('net_amount_for_statistics', $data ?? [], null);
        $this->setIfExists('net_amount_for_statistics_in_company_currency', $data ?? [], null);
        $this->setIfExists('net_amount_in_company_currency', $data ?? [], null);
        $this->setIfExists('reduction_addition_items', $data ?? [], null);
        $this->setIfExists('tax_id', $data ?? [], null);
        $this->setIfExists('tax_name', $data ?? [], null);
        $this->setIfExists('unit_price', $data ?? [], null);
        $this->setIfExists('unit_price_in_company_currency', $data ?? [], null);
        $this->setIfExists('add_page_break_before', $data ?? [], null);
        $this->setIfExists('group_name', $data ?? [], null);
        $this->setIfExists('commission_sales_partners', $data ?? [], null);
        $this->setIfExists('manual_unit_cost', $data ?? [], null);
        $this->setIfExists('recommended_retail_price', $data ?? [], null);
        $this->setIfExists('service_period_from', $data ?? [], null);
        $this->setIfExists('service_period_to', $data ?? [], null);
        $this->setIfExists('unit_cost', $data ?? [], null);
        $this->setIfExists('unit_cost_in_company_currency', $data ?? [], null);
        $this->setIfExists('invoicing_type', $data ?? [], null);
        $this->setIfExists('manual_planned_working_time_per_unit', $data ?? [], null);
        $this->setIfExists('planned_delivery_date', $data ?? [], null);
        $this->setIfExists('planned_shipping_date', $data ?? [], null);
        $this->setIfExists('planned_working_time_per_unit', $data ?? [], null);
        $this->setIfExists('availability', $data ?? [], null);
        $this->setIfExists('availability_for_all_warehouses', $data ?? [], null);
        $this->setIfExists('contract_charge_id', $data ?? [], null);
        $this->setIfExists('ecommerce_order_item_ids', $data ?? [], null);
        $this->setIfExists('invoiced_quantity', $data ?? [], null);
        $this->setIfExists('picks', $data ?? [], null);
        $this->setIfExists('returned_quantity', $data ?? [], null);
        $this->setIfExists('shipped', $data ?? [], null);
        $this->setIfExists('shipped_quantity', $data ?? [], null);
        $this->setIfExists('tasks', $data ?? [], null);
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

        if (!is_null($this->container['quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['quantity'])) {
            $invalidProperties[] = "invalid value for 'quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['discount_percentage']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['discount_percentage'])) {
            $invalidProperties[] = "invalid value for 'discount_percentage', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['gross_amount']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['gross_amount'])) {
            $invalidProperties[] = "invalid value for 'gross_amount', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['gross_amount_in_company_currency']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['gross_amount_in_company_currency'])) {
            $invalidProperties[] = "invalid value for 'gross_amount_in_company_currency', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['net_amount']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['net_amount'])) {
            $invalidProperties[] = "invalid value for 'net_amount', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['net_amount_for_statistics']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['net_amount_for_statistics'])) {
            $invalidProperties[] = "invalid value for 'net_amount_for_statistics', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['net_amount_for_statistics_in_company_currency']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['net_amount_for_statistics_in_company_currency'])) {
            $invalidProperties[] = "invalid value for 'net_amount_for_statistics_in_company_currency', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['net_amount_in_company_currency']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['net_amount_in_company_currency'])) {
            $invalidProperties[] = "invalid value for 'net_amount_in_company_currency', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['unit_price']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['unit_price'])) {
            $invalidProperties[] = "invalid value for 'unit_price', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['unit_price_in_company_currency']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['unit_price_in_company_currency'])) {
            $invalidProperties[] = "invalid value for 'unit_price_in_company_currency', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['recommended_retail_price']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['recommended_retail_price'])) {
            $invalidProperties[] = "invalid value for 'recommended_retail_price', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['unit_cost']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['unit_cost'])) {
            $invalidProperties[] = "invalid value for 'unit_cost', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['unit_cost_in_company_currency']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['unit_cost_in_company_currency'])) {
            $invalidProperties[] = "invalid value for 'unit_cost_in_company_currency', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['invoiced_quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['invoiced_quantity'])) {
            $invalidProperties[] = "invalid value for 'invoiced_quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['shipped_quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['shipped_quantity'])) {
            $invalidProperties[] = "invalid value for 'shipped_quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return int|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param int|null $created_date created_date
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        if (is_null($created_date)) {
            throw new \InvalidArgumentException('non-nullable created_date cannot be null');
        }
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return int|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param int|null $last_modified_date last_modified_date
     *
     * @return self
     */
    public function setLastModifiedDate($last_modified_date)
    {
        if (is_null($last_modified_date)) {
            throw new \InvalidArgumentException('non-nullable last_modified_date cannot be null');
        }
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets custom_attributes
     *
     * @return \kruegge82\weclapp\Model\CustomAttribute[]|null
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param \kruegge82\weclapp\Model\CustomAttribute[]|null $custom_attributes custom_attributes
     *
     * @return self
     */
    public function setCustomAttributes($custom_attributes)
    {
        if (is_null($custom_attributes)) {
            throw new \InvalidArgumentException('non-nullable custom_attributes cannot be null');
        }
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }

    /**
     * Gets article_id
     *
     * @return string|null
     */
    public function getArticleId()
    {
        return $this->container['article_id'];
    }

    /**
     * Sets article_id
     *
     * @param string|null $article_id article_id
     *
     * @return self
     */
    public function setArticleId($article_id)
    {
        if (is_null($article_id)) {
            throw new \InvalidArgumentException('non-nullable article_id cannot be null');
        }
        $this->container['article_id'] = $article_id;

        return $this;
    }

    /**
     * Gets article_number
     *
     * @return string|null
     * @deprecated
     */
    public function getArticleNumber()
    {
        return $this->container['article_number'];
    }

    /**
     * Sets article_number
     *
     * @param string|null $article_number article_number
     *
     * @return self
     * @deprecated
     */
    public function setArticleNumber($article_number)
    {
        if (is_null($article_number)) {
            throw new \InvalidArgumentException('non-nullable article_number cannot be null');
        }
        $this->container['article_number'] = $article_number;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets position_number
     *
     * @return int|null
     */
    public function getPositionNumber()
    {
        return $this->container['position_number'];
    }

    /**
     * Sets position_number
     *
     * @param int|null $position_number position_number
     *
     * @return self
     */
    public function setPositionNumber($position_number)
    {
        if (is_null($position_number)) {
            throw new \InvalidArgumentException('non-nullable position_number cannot be null');
        }
        $this->container['position_number'] = $position_number;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$quantity when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_fixed
     *
     * @return bool|null
     */
    public function getDescriptionFixed()
    {
        return $this->container['description_fixed'];
    }

    /**
     * Sets description_fixed
     *
     * @param bool|null $description_fixed description_fixed
     *
     * @return self
     */
    public function setDescriptionFixed($description_fixed)
    {
        if (is_null($description_fixed)) {
            throw new \InvalidArgumentException('non-nullable description_fixed cannot be null');
        }
        $this->container['description_fixed'] = $description_fixed;

        return $this;
    }

    /**
     * Gets item_type
     *
     * @return \kruegge82\weclapp\Model\ItemType|null
     */
    public function getItemType()
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     *
     * @param \kruegge82\weclapp\Model\ItemType|null $item_type item_type
     *
     * @return self
     */
    public function setItemType($item_type)
    {
        if (is_null($item_type)) {
            throw new \InvalidArgumentException('non-nullable item_type cannot be null');
        }
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /**
     * Gets manual_quantity
     *
     * @return bool|null
     */
    public function getManualQuantity()
    {
        return $this->container['manual_quantity'];
    }

    /**
     * Sets manual_quantity
     *
     * @param bool|null $manual_quantity manual_quantity
     *
     * @return self
     */
    public function setManualQuantity($manual_quantity)
    {
        if (is_null($manual_quantity)) {
            throw new \InvalidArgumentException('non-nullable manual_quantity cannot be null');
        }
        $this->container['manual_quantity'] = $manual_quantity;

        return $this;
    }

    /**
     * Gets parent_item_id
     *
     * @return string|null
     */
    public function getParentItemId()
    {
        return $this->container['parent_item_id'];
    }

    /**
     * Sets parent_item_id
     *
     * @param string|null $parent_item_id parent_item_id
     *
     * @return self
     */
    public function setParentItemId($parent_item_id)
    {
        if (is_null($parent_item_id)) {
            throw new \InvalidArgumentException('non-nullable parent_item_id cannot be null');
        }
        $this->container['parent_item_id'] = $parent_item_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets unit_id
     *
     * @return string|null
     */
    public function getUnitId()
    {
        return $this->container['unit_id'];
    }

    /**
     * Sets unit_id
     *
     * @param string|null $unit_id unit_id
     *
     * @return self
     */
    public function setUnitId($unit_id)
    {
        if (is_null($unit_id)) {
            throw new \InvalidArgumentException('non-nullable unit_id cannot be null');
        }
        $this->container['unit_id'] = $unit_id;

        return $this;
    }

    /**
     * Gets unit_name
     *
     * @return string|null
     * @deprecated
     */
    public function getUnitName()
    {
        return $this->container['unit_name'];
    }

    /**
     * Sets unit_name
     *
     * @param string|null $unit_name unit_name
     *
     * @return self
     * @deprecated
     */
    public function setUnitName($unit_name)
    {
        if (is_null($unit_name)) {
            throw new \InvalidArgumentException('non-nullable unit_name cannot be null');
        }
        $this->container['unit_name'] = $unit_name;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return float|null
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param float|null $discount_percentage discount_percentage
     *
     * @return self
     */
    public function setDiscountPercentage($discount_percentage)
    {
        if (is_null($discount_percentage)) {
            throw new \InvalidArgumentException('non-nullable discount_percentage cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($discount_percentage)))) {
            throw new \InvalidArgumentException("invalid value for \$discount_percentage when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets gross_amount
     *
     * @return float|null
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param float|null $gross_amount gross_amount
     *
     * @return self
     */
    public function setGrossAmount($gross_amount)
    {
        if (is_null($gross_amount)) {
            throw new \InvalidArgumentException('non-nullable gross_amount cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($gross_amount)))) {
            throw new \InvalidArgumentException("invalid value for \$gross_amount when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['gross_amount'] = $gross_amount;

        return $this;
    }

    /**
     * Gets gross_amount_in_company_currency
     *
     * @return float|null
     */
    public function getGrossAmountInCompanyCurrency()
    {
        return $this->container['gross_amount_in_company_currency'];
    }

    /**
     * Sets gross_amount_in_company_currency
     *
     * @param float|null $gross_amount_in_company_currency gross_amount_in_company_currency
     *
     * @return self
     */
    public function setGrossAmountInCompanyCurrency($gross_amount_in_company_currency)
    {
        if (is_null($gross_amount_in_company_currency)) {
            throw new \InvalidArgumentException('non-nullable gross_amount_in_company_currency cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($gross_amount_in_company_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$gross_amount_in_company_currency when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['gross_amount_in_company_currency'] = $gross_amount_in_company_currency;

        return $this;
    }

    /**
     * Gets manual_unit_price
     *
     * @return bool|null
     */
    public function getManualUnitPrice()
    {
        return $this->container['manual_unit_price'];
    }

    /**
     * Sets manual_unit_price
     *
     * @param bool|null $manual_unit_price manual_unit_price
     *
     * @return self
     */
    public function setManualUnitPrice($manual_unit_price)
    {
        if (is_null($manual_unit_price)) {
            throw new \InvalidArgumentException('non-nullable manual_unit_price cannot be null');
        }
        $this->container['manual_unit_price'] = $manual_unit_price;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return float|null
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param float|null $net_amount net_amount
     *
     * @return self
     */
    public function setNetAmount($net_amount)
    {
        if (is_null($net_amount)) {
            throw new \InvalidArgumentException('non-nullable net_amount cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($net_amount)))) {
            throw new \InvalidArgumentException("invalid value for \$net_amount when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets net_amount_for_statistics
     *
     * @return float|null
     */
    public function getNetAmountForStatistics()
    {
        return $this->container['net_amount_for_statistics'];
    }

    /**
     * Sets net_amount_for_statistics
     *
     * @param float|null $net_amount_for_statistics net_amount_for_statistics
     *
     * @return self
     */
    public function setNetAmountForStatistics($net_amount_for_statistics)
    {
        if (is_null($net_amount_for_statistics)) {
            throw new \InvalidArgumentException('non-nullable net_amount_for_statistics cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($net_amount_for_statistics)))) {
            throw new \InvalidArgumentException("invalid value for \$net_amount_for_statistics when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['net_amount_for_statistics'] = $net_amount_for_statistics;

        return $this;
    }

    /**
     * Gets net_amount_for_statistics_in_company_currency
     *
     * @return float|null
     */
    public function getNetAmountForStatisticsInCompanyCurrency()
    {
        return $this->container['net_amount_for_statistics_in_company_currency'];
    }

    /**
     * Sets net_amount_for_statistics_in_company_currency
     *
     * @param float|null $net_amount_for_statistics_in_company_currency net_amount_for_statistics_in_company_currency
     *
     * @return self
     */
    public function setNetAmountForStatisticsInCompanyCurrency($net_amount_for_statistics_in_company_currency)
    {
        if (is_null($net_amount_for_statistics_in_company_currency)) {
            throw new \InvalidArgumentException('non-nullable net_amount_for_statistics_in_company_currency cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($net_amount_for_statistics_in_company_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$net_amount_for_statistics_in_company_currency when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['net_amount_for_statistics_in_company_currency'] = $net_amount_for_statistics_in_company_currency;

        return $this;
    }

    /**
     * Gets net_amount_in_company_currency
     *
     * @return float|null
     */
    public function getNetAmountInCompanyCurrency()
    {
        return $this->container['net_amount_in_company_currency'];
    }

    /**
     * Sets net_amount_in_company_currency
     *
     * @param float|null $net_amount_in_company_currency net_amount_in_company_currency
     *
     * @return self
     */
    public function setNetAmountInCompanyCurrency($net_amount_in_company_currency)
    {
        if (is_null($net_amount_in_company_currency)) {
            throw new \InvalidArgumentException('non-nullable net_amount_in_company_currency cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($net_amount_in_company_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$net_amount_in_company_currency when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['net_amount_in_company_currency'] = $net_amount_in_company_currency;

        return $this;
    }

    /**
     * Gets reduction_addition_items
     *
     * @return \kruegge82\weclapp\Model\ReductionAdditionItem[]|null
     */
    public function getReductionAdditionItems()
    {
        return $this->container['reduction_addition_items'];
    }

    /**
     * Sets reduction_addition_items
     *
     * @param \kruegge82\weclapp\Model\ReductionAdditionItem[]|null $reduction_addition_items reduction_addition_items
     *
     * @return self
     */
    public function setReductionAdditionItems($reduction_addition_items)
    {
        if (is_null($reduction_addition_items)) {
            throw new \InvalidArgumentException('non-nullable reduction_addition_items cannot be null');
        }
        $this->container['reduction_addition_items'] = $reduction_addition_items;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string|null $tax_id tax_id
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {
        if (is_null($tax_id)) {
            throw new \InvalidArgumentException('non-nullable tax_id cannot be null');
        }
        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets tax_name
     *
     * @return string|null
     * @deprecated
     */
    public function getTaxName()
    {
        return $this->container['tax_name'];
    }

    /**
     * Sets tax_name
     *
     * @param string|null $tax_name tax_name
     *
     * @return self
     * @deprecated
     */
    public function setTaxName($tax_name)
    {
        if (is_null($tax_name)) {
            throw new \InvalidArgumentException('non-nullable tax_name cannot be null');
        }
        $this->container['tax_name'] = $tax_name;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        if (is_null($unit_price)) {
            throw new \InvalidArgumentException('non-nullable unit_price cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($unit_price)))) {
            throw new \InvalidArgumentException("invalid value for \$unit_price when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets unit_price_in_company_currency
     *
     * @return float|null
     */
    public function getUnitPriceInCompanyCurrency()
    {
        return $this->container['unit_price_in_company_currency'];
    }

    /**
     * Sets unit_price_in_company_currency
     *
     * @param float|null $unit_price_in_company_currency unit_price_in_company_currency
     *
     * @return self
     */
    public function setUnitPriceInCompanyCurrency($unit_price_in_company_currency)
    {
        if (is_null($unit_price_in_company_currency)) {
            throw new \InvalidArgumentException('non-nullable unit_price_in_company_currency cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($unit_price_in_company_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$unit_price_in_company_currency when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['unit_price_in_company_currency'] = $unit_price_in_company_currency;

        return $this;
    }

    /**
     * Gets add_page_break_before
     *
     * @return bool|null
     */
    public function getAddPageBreakBefore()
    {
        return $this->container['add_page_break_before'];
    }

    /**
     * Sets add_page_break_before
     *
     * @param bool|null $add_page_break_before add_page_break_before
     *
     * @return self
     */
    public function setAddPageBreakBefore($add_page_break_before)
    {
        if (is_null($add_page_break_before)) {
            throw new \InvalidArgumentException('non-nullable add_page_break_before cannot be null');
        }
        $this->container['add_page_break_before'] = $add_page_break_before;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string|null $group_name group_name
     *
     * @return self
     */
    public function setGroupName($group_name)
    {
        if (is_null($group_name)) {
            throw new \InvalidArgumentException('non-nullable group_name cannot be null');
        }
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets commission_sales_partners
     *
     * @return \kruegge82\weclapp\Model\CommissionSalesPartner[]|null
     */
    public function getCommissionSalesPartners()
    {
        return $this->container['commission_sales_partners'];
    }

    /**
     * Sets commission_sales_partners
     *
     * @param \kruegge82\weclapp\Model\CommissionSalesPartner[]|null $commission_sales_partners commission_sales_partners
     *
     * @return self
     */
    public function setCommissionSalesPartners($commission_sales_partners)
    {
        if (is_null($commission_sales_partners)) {
            throw new \InvalidArgumentException('non-nullable commission_sales_partners cannot be null');
        }
        $this->container['commission_sales_partners'] = $commission_sales_partners;

        return $this;
    }

    /**
     * Gets manual_unit_cost
     *
     * @return bool|null
     */
    public function getManualUnitCost()
    {
        return $this->container['manual_unit_cost'];
    }

    /**
     * Sets manual_unit_cost
     *
     * @param bool|null $manual_unit_cost manual_unit_cost
     *
     * @return self
     */
    public function setManualUnitCost($manual_unit_cost)
    {
        if (is_null($manual_unit_cost)) {
            throw new \InvalidArgumentException('non-nullable manual_unit_cost cannot be null');
        }
        $this->container['manual_unit_cost'] = $manual_unit_cost;

        return $this;
    }

    /**
     * Gets recommended_retail_price
     *
     * @return float|null
     */
    public function getRecommendedRetailPrice()
    {
        return $this->container['recommended_retail_price'];
    }

    /**
     * Sets recommended_retail_price
     *
     * @param float|null $recommended_retail_price recommended_retail_price
     *
     * @return self
     */
    public function setRecommendedRetailPrice($recommended_retail_price)
    {
        if (is_null($recommended_retail_price)) {
            throw new \InvalidArgumentException('non-nullable recommended_retail_price cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($recommended_retail_price)))) {
            throw new \InvalidArgumentException("invalid value for \$recommended_retail_price when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['recommended_retail_price'] = $recommended_retail_price;

        return $this;
    }

    /**
     * Gets service_period_from
     *
     * @return int|null
     */
    public function getServicePeriodFrom()
    {
        return $this->container['service_period_from'];
    }

    /**
     * Sets service_period_from
     *
     * @param int|null $service_period_from service_period_from
     *
     * @return self
     */
    public function setServicePeriodFrom($service_period_from)
    {
        if (is_null($service_period_from)) {
            throw new \InvalidArgumentException('non-nullable service_period_from cannot be null');
        }
        $this->container['service_period_from'] = $service_period_from;

        return $this;
    }

    /**
     * Gets service_period_to
     *
     * @return int|null
     */
    public function getServicePeriodTo()
    {
        return $this->container['service_period_to'];
    }

    /**
     * Sets service_period_to
     *
     * @param int|null $service_period_to service_period_to
     *
     * @return self
     */
    public function setServicePeriodTo($service_period_to)
    {
        if (is_null($service_period_to)) {
            throw new \InvalidArgumentException('non-nullable service_period_to cannot be null');
        }
        $this->container['service_period_to'] = $service_period_to;

        return $this;
    }

    /**
     * Gets unit_cost
     *
     * @return float|null
     */
    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    /**
     * Sets unit_cost
     *
     * @param float|null $unit_cost unit_cost
     *
     * @return self
     */
    public function setUnitCost($unit_cost)
    {
        if (is_null($unit_cost)) {
            throw new \InvalidArgumentException('non-nullable unit_cost cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($unit_cost)))) {
            throw new \InvalidArgumentException("invalid value for \$unit_cost when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['unit_cost'] = $unit_cost;

        return $this;
    }

    /**
     * Gets unit_cost_in_company_currency
     *
     * @return float|null
     */
    public function getUnitCostInCompanyCurrency()
    {
        return $this->container['unit_cost_in_company_currency'];
    }

    /**
     * Sets unit_cost_in_company_currency
     *
     * @param float|null $unit_cost_in_company_currency unit_cost_in_company_currency
     *
     * @return self
     */
    public function setUnitCostInCompanyCurrency($unit_cost_in_company_currency)
    {
        if (is_null($unit_cost_in_company_currency)) {
            throw new \InvalidArgumentException('non-nullable unit_cost_in_company_currency cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($unit_cost_in_company_currency)))) {
            throw new \InvalidArgumentException("invalid value for \$unit_cost_in_company_currency when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['unit_cost_in_company_currency'] = $unit_cost_in_company_currency;

        return $this;
    }

    /**
     * Gets invoicing_type
     *
     * @return \kruegge82\weclapp\Model\InvoicingType|null
     */
    public function getInvoicingType()
    {
        return $this->container['invoicing_type'];
    }

    /**
     * Sets invoicing_type
     *
     * @param \kruegge82\weclapp\Model\InvoicingType|null $invoicing_type invoicing_type
     *
     * @return self
     */
    public function setInvoicingType($invoicing_type)
    {
        if (is_null($invoicing_type)) {
            throw new \InvalidArgumentException('non-nullable invoicing_type cannot be null');
        }
        $this->container['invoicing_type'] = $invoicing_type;

        return $this;
    }

    /**
     * Gets manual_planned_working_time_per_unit
     *
     * @return bool|null
     */
    public function getManualPlannedWorkingTimePerUnit()
    {
        return $this->container['manual_planned_working_time_per_unit'];
    }

    /**
     * Sets manual_planned_working_time_per_unit
     *
     * @param bool|null $manual_planned_working_time_per_unit manual_planned_working_time_per_unit
     *
     * @return self
     */
    public function setManualPlannedWorkingTimePerUnit($manual_planned_working_time_per_unit)
    {
        if (is_null($manual_planned_working_time_per_unit)) {
            throw new \InvalidArgumentException('non-nullable manual_planned_working_time_per_unit cannot be null');
        }
        $this->container['manual_planned_working_time_per_unit'] = $manual_planned_working_time_per_unit;

        return $this;
    }

    /**
     * Gets planned_delivery_date
     *
     * @return int|null
     */
    public function getPlannedDeliveryDate()
    {
        return $this->container['planned_delivery_date'];
    }

    /**
     * Sets planned_delivery_date
     *
     * @param int|null $planned_delivery_date planned_delivery_date
     *
     * @return self
     */
    public function setPlannedDeliveryDate($planned_delivery_date)
    {
        if (is_null($planned_delivery_date)) {
            throw new \InvalidArgumentException('non-nullable planned_delivery_date cannot be null');
        }
        $this->container['planned_delivery_date'] = $planned_delivery_date;

        return $this;
    }

    /**
     * Gets planned_shipping_date
     *
     * @return int|null
     */
    public function getPlannedShippingDate()
    {
        return $this->container['planned_shipping_date'];
    }

    /**
     * Sets planned_shipping_date
     *
     * @param int|null $planned_shipping_date planned_shipping_date
     *
     * @return self
     */
    public function setPlannedShippingDate($planned_shipping_date)
    {
        if (is_null($planned_shipping_date)) {
            throw new \InvalidArgumentException('non-nullable planned_shipping_date cannot be null');
        }
        $this->container['planned_shipping_date'] = $planned_shipping_date;

        return $this;
    }

    /**
     * Gets planned_working_time_per_unit
     *
     * @return int|null
     */
    public function getPlannedWorkingTimePerUnit()
    {
        return $this->container['planned_working_time_per_unit'];
    }

    /**
     * Sets planned_working_time_per_unit
     *
     * @param int|null $planned_working_time_per_unit planned_working_time_per_unit
     *
     * @return self
     */
    public function setPlannedWorkingTimePerUnit($planned_working_time_per_unit)
    {
        if (is_null($planned_working_time_per_unit)) {
            throw new \InvalidArgumentException('non-nullable planned_working_time_per_unit cannot be null');
        }
        $this->container['planned_working_time_per_unit'] = $planned_working_time_per_unit;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return \kruegge82\weclapp\Model\DispositionInfoAvailabilityType|null
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \kruegge82\weclapp\Model\DispositionInfoAvailabilityType|null $availability availability
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        if (is_null($availability)) {
            throw new \InvalidArgumentException('non-nullable availability cannot be null');
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets availability_for_all_warehouses
     *
     * @return \kruegge82\weclapp\Model\DispositionInfoAvailabilityType|null
     */
    public function getAvailabilityForAllWarehouses()
    {
        return $this->container['availability_for_all_warehouses'];
    }

    /**
     * Sets availability_for_all_warehouses
     *
     * @param \kruegge82\weclapp\Model\DispositionInfoAvailabilityType|null $availability_for_all_warehouses availability_for_all_warehouses
     *
     * @return self
     */
    public function setAvailabilityForAllWarehouses($availability_for_all_warehouses)
    {
        if (is_null($availability_for_all_warehouses)) {
            throw new \InvalidArgumentException('non-nullable availability_for_all_warehouses cannot be null');
        }
        $this->container['availability_for_all_warehouses'] = $availability_for_all_warehouses;

        return $this;
    }

    /**
     * Gets contract_charge_id
     *
     * @return string|null
     */
    public function getContractChargeId()
    {
        return $this->container['contract_charge_id'];
    }

    /**
     * Sets contract_charge_id
     *
     * @param string|null $contract_charge_id contract_charge_id
     *
     * @return self
     */
    public function setContractChargeId($contract_charge_id)
    {
        if (is_null($contract_charge_id)) {
            throw new \InvalidArgumentException('non-nullable contract_charge_id cannot be null');
        }
        $this->container['contract_charge_id'] = $contract_charge_id;

        return $this;
    }

    /**
     * Gets ecommerce_order_item_ids
     *
     * @return string[]|null
     */
    public function getEcommerceOrderItemIds()
    {
        return $this->container['ecommerce_order_item_ids'];
    }

    /**
     * Sets ecommerce_order_item_ids
     *
     * @param string[]|null $ecommerce_order_item_ids ecommerce_order_item_ids
     *
     * @return self
     */
    public function setEcommerceOrderItemIds($ecommerce_order_item_ids)
    {
        if (is_null($ecommerce_order_item_ids)) {
            throw new \InvalidArgumentException('non-nullable ecommerce_order_item_ids cannot be null');
        }
        $this->container['ecommerce_order_item_ids'] = $ecommerce_order_item_ids;

        return $this;
    }

    /**
     * Gets invoiced_quantity
     *
     * @return float|null
     */
    public function getInvoicedQuantity()
    {
        return $this->container['invoiced_quantity'];
    }

    /**
     * Sets invoiced_quantity
     *
     * @param float|null $invoiced_quantity invoiced_quantity
     *
     * @return self
     */
    public function setInvoicedQuantity($invoiced_quantity)
    {
        if (is_null($invoiced_quantity)) {
            throw new \InvalidArgumentException('non-nullable invoiced_quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($invoiced_quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$invoiced_quantity when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['invoiced_quantity'] = $invoiced_quantity;

        return $this;
    }

    /**
     * Gets picks
     *
     * @return \kruegge82\weclapp\Model\ItemPick[]|null
     */
    public function getPicks()
    {
        return $this->container['picks'];
    }

    /**
     * Sets picks
     *
     * @param \kruegge82\weclapp\Model\ItemPick[]|null $picks picks
     *
     * @return self
     */
    public function setPicks($picks)
    {
        if (is_null($picks)) {
            throw new \InvalidArgumentException('non-nullable picks cannot be null');
        }
        $this->container['picks'] = $picks;

        return $this;
    }

    /**
     * Gets returned_quantity
     *
     * @return float|null
     */
    public function getReturnedQuantity()
    {
        return $this->container['returned_quantity'];
    }

    /**
     * Sets returned_quantity
     *
     * @param float|null $returned_quantity returned_quantity
     *
     * @return self
     */
    public function setReturnedQuantity($returned_quantity)
    {
        if (is_null($returned_quantity)) {
            throw new \InvalidArgumentException('non-nullable returned_quantity cannot be null');
        }
        $this->container['returned_quantity'] = $returned_quantity;

        return $this;
    }

    /**
     * Gets shipped
     *
     * @return bool|null
     */
    public function getShipped()
    {
        return $this->container['shipped'];
    }

    /**
     * Sets shipped
     *
     * @param bool|null $shipped shipped
     *
     * @return self
     */
    public function setShipped($shipped)
    {
        if (is_null($shipped)) {
            throw new \InvalidArgumentException('non-nullable shipped cannot be null');
        }
        $this->container['shipped'] = $shipped;

        return $this;
    }

    /**
     * Gets shipped_quantity
     *
     * @return float|null
     */
    public function getShippedQuantity()
    {
        return $this->container['shipped_quantity'];
    }

    /**
     * Sets shipped_quantity
     *
     * @param float|null $shipped_quantity shipped_quantity
     *
     * @return self
     */
    public function setShippedQuantity($shipped_quantity)
    {
        if (is_null($shipped_quantity)) {
            throw new \InvalidArgumentException('non-nullable shipped_quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($shipped_quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$shipped_quantity when calling SalesOrderItem., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['shipped_quantity'] = $shipped_quantity;

        return $this;
    }

    /**
     * Gets tasks
     *
     * @return \kruegge82\weclapp\Model\OnlyId[]|null
     */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
     * Sets tasks
     *
     * @param \kruegge82\weclapp\Model\OnlyId[]|null $tasks tasks
     *
     * @return self
     */
    public function setTasks($tasks)
    {
        if (is_null($tasks)) {
            throw new \InvalidArgumentException('non-nullable tasks cannot be null');
        }
        $this->container['tasks'] = $tasks;

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


