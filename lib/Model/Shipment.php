<?php
/**
 * Shipment
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
 * Shipment Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'shipment';

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
        'commercial_language' => 'string',
        'creator_id' => 'string',
        'description' => 'string',
        'disable_email_template' => 'bool',
        'record_comment' => 'string',
        'record_free_text' => 'string',
        'record_opening' => 'string',
        'sent_to_recipient' => 'bool',
        'tags' => 'string[]',
        'invoice_address' => '\kruegge82\weclapp\Model\RecordAddress',
        'recipient_address' => '\kruegge82\weclapp\Model\RecordAddress',
        'sales_order_id' => 'string',
        'sales_order_number' => 'string',
        'sales_orders' => '\kruegge82\weclapp\Model\OnlyId[]',
        'status' => '\kruegge82\weclapp\Model\ShipmentStatusType',
        'status_history' => '\kruegge82\weclapp\Model\ShipmentStatus[]',
        'additional_delivery_information' => 'string',
        'availability' => '\kruegge82\weclapp\Model\DispositionInfoAvailabilityType',
        'availability_for_all_warehouses' => '\kruegge82\weclapp\Model\DispositionInfoAvailabilityType',
        'consolidation_storage_place_id' => 'string',
        'customer_purchase_order_number' => 'string',
        'declared_value_amount' => 'float',
        'declared_value_amount_currency_id' => 'string',
        'declared_value_amount_currency_name' => 'string',
        'delivery_date' => 'int',
        'destination_storage_place_id' => 'string',
        'destination_warehouse_id' => 'string',
        'destination_warehouse_name' => 'string',
        'dhl_receiver_id' => 'string',
        'invoice_recipient_id' => 'string',
        'package_height' => 'int',
        'package_length' => 'int',
        'package_reference_number' => 'string',
        'package_return_tracking_number' => 'string',
        'package_return_tracking_url' => 'string',
        'package_tracking_number' => 'string',
        'package_tracking_url' => 'string',
        'package_weight' => 'float',
        'package_width' => 'int',
        'picking_instructions' => 'string',
        'picks_complete' => 'bool',
        'purchase_orders' => '\kruegge82\weclapp\Model\OnlyId[]',
        'recipient_customer_number' => 'string',
        'recipient_party_id' => 'string',
        'recipient_supplier_number' => 'string',
        'record_email_addresses' => '\kruegge82\weclapp\Model\EmailAddresses',
        'responsible_user_id' => 'string',
        'sales_invoice_email_addresses' => '\kruegge82\weclapp\Model\EmailAddresses',
        'shipment_items' => '\kruegge82\weclapp\Model\ShipmentItem[]',
        'shipment_method_id' => 'string',
        'shipment_method_name' => 'string',
        'shipment_number' => 'string',
        'shipment_type' => '\kruegge82\weclapp\Model\ShipmentOutType',
        'shipped_from_address' => '\kruegge82\weclapp\Model\RecordAddress',
        'shipping_carrier_id' => 'string',
        'shipping_carrier_name' => 'string',
        'shipping_date' => 'int',
        'shipping_labels_count' => 'int',
        'shipping_return_carrier_id' => 'string',
        'shipping_return_carrier_name' => 'string',
        'warehouse_id' => 'string',
        'warehouse_name' => 'string'
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
        'commercial_language' => null,
        'creator_id' => null,
        'description' => 'html',
        'disable_email_template' => null,
        'record_comment' => 'html',
        'record_free_text' => 'html',
        'record_opening' => 'html',
        'sent_to_recipient' => null,
        'tags' => null,
        'invoice_address' => null,
        'recipient_address' => null,
        'sales_order_id' => null,
        'sales_order_number' => null,
        'sales_orders' => null,
        'status' => null,
        'status_history' => null,
        'additional_delivery_information' => 'html',
        'availability' => null,
        'availability_for_all_warehouses' => null,
        'consolidation_storage_place_id' => null,
        'customer_purchase_order_number' => null,
        'declared_value_amount' => 'decimal',
        'declared_value_amount_currency_id' => null,
        'declared_value_amount_currency_name' => null,
        'delivery_date' => 'timestamp',
        'destination_storage_place_id' => null,
        'destination_warehouse_id' => null,
        'destination_warehouse_name' => null,
        'dhl_receiver_id' => null,
        'invoice_recipient_id' => null,
        'package_height' => 'int32',
        'package_length' => 'int32',
        'package_reference_number' => null,
        'package_return_tracking_number' => null,
        'package_return_tracking_url' => null,
        'package_tracking_number' => null,
        'package_tracking_url' => null,
        'package_weight' => 'decimal',
        'package_width' => 'int32',
        'picking_instructions' => null,
        'picks_complete' => null,
        'purchase_orders' => null,
        'recipient_customer_number' => null,
        'recipient_party_id' => null,
        'recipient_supplier_number' => null,
        'record_email_addresses' => null,
        'responsible_user_id' => null,
        'sales_invoice_email_addresses' => null,
        'shipment_items' => null,
        'shipment_method_id' => null,
        'shipment_method_name' => null,
        'shipment_number' => null,
        'shipment_type' => null,
        'shipped_from_address' => null,
        'shipping_carrier_id' => null,
        'shipping_carrier_name' => null,
        'shipping_date' => 'timestamp',
        'shipping_labels_count' => 'int32',
        'shipping_return_carrier_id' => null,
        'shipping_return_carrier_name' => null,
        'warehouse_id' => null,
        'warehouse_name' => null
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
        'commercial_language' => false,
        'creator_id' => false,
        'description' => false,
        'disable_email_template' => false,
        'record_comment' => false,
        'record_free_text' => false,
        'record_opening' => false,
        'sent_to_recipient' => false,
        'tags' => false,
        'invoice_address' => false,
        'recipient_address' => false,
        'sales_order_id' => false,
        'sales_order_number' => false,
        'sales_orders' => false,
        'status' => false,
        'status_history' => false,
        'additional_delivery_information' => false,
        'availability' => false,
        'availability_for_all_warehouses' => false,
        'consolidation_storage_place_id' => false,
        'customer_purchase_order_number' => false,
        'declared_value_amount' => false,
        'declared_value_amount_currency_id' => false,
        'declared_value_amount_currency_name' => false,
        'delivery_date' => false,
        'destination_storage_place_id' => false,
        'destination_warehouse_id' => false,
        'destination_warehouse_name' => false,
        'dhl_receiver_id' => false,
        'invoice_recipient_id' => false,
        'package_height' => false,
        'package_length' => false,
        'package_reference_number' => false,
        'package_return_tracking_number' => false,
        'package_return_tracking_url' => false,
        'package_tracking_number' => false,
        'package_tracking_url' => false,
        'package_weight' => false,
        'package_width' => false,
        'picking_instructions' => false,
        'picks_complete' => false,
        'purchase_orders' => false,
        'recipient_customer_number' => false,
        'recipient_party_id' => false,
        'recipient_supplier_number' => false,
        'record_email_addresses' => false,
        'responsible_user_id' => false,
        'sales_invoice_email_addresses' => false,
        'shipment_items' => false,
        'shipment_method_id' => false,
        'shipment_method_name' => false,
        'shipment_number' => false,
        'shipment_type' => false,
        'shipped_from_address' => false,
        'shipping_carrier_id' => false,
        'shipping_carrier_name' => false,
        'shipping_date' => false,
        'shipping_labels_count' => false,
        'shipping_return_carrier_id' => false,
        'shipping_return_carrier_name' => false,
        'warehouse_id' => false,
        'warehouse_name' => false
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
        'commercial_language' => 'commercialLanguage',
        'creator_id' => 'creatorId',
        'description' => 'description',
        'disable_email_template' => 'disableEmailTemplate',
        'record_comment' => 'recordComment',
        'record_free_text' => 'recordFreeText',
        'record_opening' => 'recordOpening',
        'sent_to_recipient' => 'sentToRecipient',
        'tags' => 'tags',
        'invoice_address' => 'invoiceAddress',
        'recipient_address' => 'recipientAddress',
        'sales_order_id' => 'salesOrderId',
        'sales_order_number' => 'salesOrderNumber',
        'sales_orders' => 'salesOrders',
        'status' => 'status',
        'status_history' => 'statusHistory',
        'additional_delivery_information' => 'additionalDeliveryInformation',
        'availability' => 'availability',
        'availability_for_all_warehouses' => 'availabilityForAllWarehouses',
        'consolidation_storage_place_id' => 'consolidationStoragePlaceId',
        'customer_purchase_order_number' => 'customerPurchaseOrderNumber',
        'declared_value_amount' => 'declaredValueAmount',
        'declared_value_amount_currency_id' => 'declaredValueAmountCurrencyId',
        'declared_value_amount_currency_name' => 'declaredValueAmountCurrencyName',
        'delivery_date' => 'deliveryDate',
        'destination_storage_place_id' => 'destinationStoragePlaceId',
        'destination_warehouse_id' => 'destinationWarehouseId',
        'destination_warehouse_name' => 'destinationWarehouseName',
        'dhl_receiver_id' => 'dhlReceiverId',
        'invoice_recipient_id' => 'invoiceRecipientId',
        'package_height' => 'packageHeight',
        'package_length' => 'packageLength',
        'package_reference_number' => 'packageReferenceNumber',
        'package_return_tracking_number' => 'packageReturnTrackingNumber',
        'package_return_tracking_url' => 'packageReturnTrackingUrl',
        'package_tracking_number' => 'packageTrackingNumber',
        'package_tracking_url' => 'packageTrackingUrl',
        'package_weight' => 'packageWeight',
        'package_width' => 'packageWidth',
        'picking_instructions' => 'pickingInstructions',
        'picks_complete' => 'picksComplete',
        'purchase_orders' => 'purchaseOrders',
        'recipient_customer_number' => 'recipientCustomerNumber',
        'recipient_party_id' => 'recipientPartyId',
        'recipient_supplier_number' => 'recipientSupplierNumber',
        'record_email_addresses' => 'recordEmailAddresses',
        'responsible_user_id' => 'responsibleUserId',
        'sales_invoice_email_addresses' => 'salesInvoiceEmailAddresses',
        'shipment_items' => 'shipmentItems',
        'shipment_method_id' => 'shipmentMethodId',
        'shipment_method_name' => 'shipmentMethodName',
        'shipment_number' => 'shipmentNumber',
        'shipment_type' => 'shipmentType',
        'shipped_from_address' => 'shippedFromAddress',
        'shipping_carrier_id' => 'shippingCarrierId',
        'shipping_carrier_name' => 'shippingCarrierName',
        'shipping_date' => 'shippingDate',
        'shipping_labels_count' => 'shippingLabelsCount',
        'shipping_return_carrier_id' => 'shippingReturnCarrierId',
        'shipping_return_carrier_name' => 'shippingReturnCarrierName',
        'warehouse_id' => 'warehouseId',
        'warehouse_name' => 'warehouseName'
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
        'commercial_language' => 'setCommercialLanguage',
        'creator_id' => 'setCreatorId',
        'description' => 'setDescription',
        'disable_email_template' => 'setDisableEmailTemplate',
        'record_comment' => 'setRecordComment',
        'record_free_text' => 'setRecordFreeText',
        'record_opening' => 'setRecordOpening',
        'sent_to_recipient' => 'setSentToRecipient',
        'tags' => 'setTags',
        'invoice_address' => 'setInvoiceAddress',
        'recipient_address' => 'setRecipientAddress',
        'sales_order_id' => 'setSalesOrderId',
        'sales_order_number' => 'setSalesOrderNumber',
        'sales_orders' => 'setSalesOrders',
        'status' => 'setStatus',
        'status_history' => 'setStatusHistory',
        'additional_delivery_information' => 'setAdditionalDeliveryInformation',
        'availability' => 'setAvailability',
        'availability_for_all_warehouses' => 'setAvailabilityForAllWarehouses',
        'consolidation_storage_place_id' => 'setConsolidationStoragePlaceId',
        'customer_purchase_order_number' => 'setCustomerPurchaseOrderNumber',
        'declared_value_amount' => 'setDeclaredValueAmount',
        'declared_value_amount_currency_id' => 'setDeclaredValueAmountCurrencyId',
        'declared_value_amount_currency_name' => 'setDeclaredValueAmountCurrencyName',
        'delivery_date' => 'setDeliveryDate',
        'destination_storage_place_id' => 'setDestinationStoragePlaceId',
        'destination_warehouse_id' => 'setDestinationWarehouseId',
        'destination_warehouse_name' => 'setDestinationWarehouseName',
        'dhl_receiver_id' => 'setDhlReceiverId',
        'invoice_recipient_id' => 'setInvoiceRecipientId',
        'package_height' => 'setPackageHeight',
        'package_length' => 'setPackageLength',
        'package_reference_number' => 'setPackageReferenceNumber',
        'package_return_tracking_number' => 'setPackageReturnTrackingNumber',
        'package_return_tracking_url' => 'setPackageReturnTrackingUrl',
        'package_tracking_number' => 'setPackageTrackingNumber',
        'package_tracking_url' => 'setPackageTrackingUrl',
        'package_weight' => 'setPackageWeight',
        'package_width' => 'setPackageWidth',
        'picking_instructions' => 'setPickingInstructions',
        'picks_complete' => 'setPicksComplete',
        'purchase_orders' => 'setPurchaseOrders',
        'recipient_customer_number' => 'setRecipientCustomerNumber',
        'recipient_party_id' => 'setRecipientPartyId',
        'recipient_supplier_number' => 'setRecipientSupplierNumber',
        'record_email_addresses' => 'setRecordEmailAddresses',
        'responsible_user_id' => 'setResponsibleUserId',
        'sales_invoice_email_addresses' => 'setSalesInvoiceEmailAddresses',
        'shipment_items' => 'setShipmentItems',
        'shipment_method_id' => 'setShipmentMethodId',
        'shipment_method_name' => 'setShipmentMethodName',
        'shipment_number' => 'setShipmentNumber',
        'shipment_type' => 'setShipmentType',
        'shipped_from_address' => 'setShippedFromAddress',
        'shipping_carrier_id' => 'setShippingCarrierId',
        'shipping_carrier_name' => 'setShippingCarrierName',
        'shipping_date' => 'setShippingDate',
        'shipping_labels_count' => 'setShippingLabelsCount',
        'shipping_return_carrier_id' => 'setShippingReturnCarrierId',
        'shipping_return_carrier_name' => 'setShippingReturnCarrierName',
        'warehouse_id' => 'setWarehouseId',
        'warehouse_name' => 'setWarehouseName'
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
        'commercial_language' => 'getCommercialLanguage',
        'creator_id' => 'getCreatorId',
        'description' => 'getDescription',
        'disable_email_template' => 'getDisableEmailTemplate',
        'record_comment' => 'getRecordComment',
        'record_free_text' => 'getRecordFreeText',
        'record_opening' => 'getRecordOpening',
        'sent_to_recipient' => 'getSentToRecipient',
        'tags' => 'getTags',
        'invoice_address' => 'getInvoiceAddress',
        'recipient_address' => 'getRecipientAddress',
        'sales_order_id' => 'getSalesOrderId',
        'sales_order_number' => 'getSalesOrderNumber',
        'sales_orders' => 'getSalesOrders',
        'status' => 'getStatus',
        'status_history' => 'getStatusHistory',
        'additional_delivery_information' => 'getAdditionalDeliveryInformation',
        'availability' => 'getAvailability',
        'availability_for_all_warehouses' => 'getAvailabilityForAllWarehouses',
        'consolidation_storage_place_id' => 'getConsolidationStoragePlaceId',
        'customer_purchase_order_number' => 'getCustomerPurchaseOrderNumber',
        'declared_value_amount' => 'getDeclaredValueAmount',
        'declared_value_amount_currency_id' => 'getDeclaredValueAmountCurrencyId',
        'declared_value_amount_currency_name' => 'getDeclaredValueAmountCurrencyName',
        'delivery_date' => 'getDeliveryDate',
        'destination_storage_place_id' => 'getDestinationStoragePlaceId',
        'destination_warehouse_id' => 'getDestinationWarehouseId',
        'destination_warehouse_name' => 'getDestinationWarehouseName',
        'dhl_receiver_id' => 'getDhlReceiverId',
        'invoice_recipient_id' => 'getInvoiceRecipientId',
        'package_height' => 'getPackageHeight',
        'package_length' => 'getPackageLength',
        'package_reference_number' => 'getPackageReferenceNumber',
        'package_return_tracking_number' => 'getPackageReturnTrackingNumber',
        'package_return_tracking_url' => 'getPackageReturnTrackingUrl',
        'package_tracking_number' => 'getPackageTrackingNumber',
        'package_tracking_url' => 'getPackageTrackingUrl',
        'package_weight' => 'getPackageWeight',
        'package_width' => 'getPackageWidth',
        'picking_instructions' => 'getPickingInstructions',
        'picks_complete' => 'getPicksComplete',
        'purchase_orders' => 'getPurchaseOrders',
        'recipient_customer_number' => 'getRecipientCustomerNumber',
        'recipient_party_id' => 'getRecipientPartyId',
        'recipient_supplier_number' => 'getRecipientSupplierNumber',
        'record_email_addresses' => 'getRecordEmailAddresses',
        'responsible_user_id' => 'getResponsibleUserId',
        'sales_invoice_email_addresses' => 'getSalesInvoiceEmailAddresses',
        'shipment_items' => 'getShipmentItems',
        'shipment_method_id' => 'getShipmentMethodId',
        'shipment_method_name' => 'getShipmentMethodName',
        'shipment_number' => 'getShipmentNumber',
        'shipment_type' => 'getShipmentType',
        'shipped_from_address' => 'getShippedFromAddress',
        'shipping_carrier_id' => 'getShippingCarrierId',
        'shipping_carrier_name' => 'getShippingCarrierName',
        'shipping_date' => 'getShippingDate',
        'shipping_labels_count' => 'getShippingLabelsCount',
        'shipping_return_carrier_id' => 'getShippingReturnCarrierId',
        'shipping_return_carrier_name' => 'getShippingReturnCarrierName',
        'warehouse_id' => 'getWarehouseId',
        'warehouse_name' => 'getWarehouseName'
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
        $this->setIfExists('commercial_language', $data ?? [], null);
        $this->setIfExists('creator_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('disable_email_template', $data ?? [], null);
        $this->setIfExists('record_comment', $data ?? [], null);
        $this->setIfExists('record_free_text', $data ?? [], null);
        $this->setIfExists('record_opening', $data ?? [], null);
        $this->setIfExists('sent_to_recipient', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('invoice_address', $data ?? [], null);
        $this->setIfExists('recipient_address', $data ?? [], null);
        $this->setIfExists('sales_order_id', $data ?? [], null);
        $this->setIfExists('sales_order_number', $data ?? [], null);
        $this->setIfExists('sales_orders', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_history', $data ?? [], null);
        $this->setIfExists('additional_delivery_information', $data ?? [], null);
        $this->setIfExists('availability', $data ?? [], null);
        $this->setIfExists('availability_for_all_warehouses', $data ?? [], null);
        $this->setIfExists('consolidation_storage_place_id', $data ?? [], null);
        $this->setIfExists('customer_purchase_order_number', $data ?? [], null);
        $this->setIfExists('declared_value_amount', $data ?? [], null);
        $this->setIfExists('declared_value_amount_currency_id', $data ?? [], null);
        $this->setIfExists('declared_value_amount_currency_name', $data ?? [], null);
        $this->setIfExists('delivery_date', $data ?? [], null);
        $this->setIfExists('destination_storage_place_id', $data ?? [], null);
        $this->setIfExists('destination_warehouse_id', $data ?? [], null);
        $this->setIfExists('destination_warehouse_name', $data ?? [], null);
        $this->setIfExists('dhl_receiver_id', $data ?? [], null);
        $this->setIfExists('invoice_recipient_id', $data ?? [], null);
        $this->setIfExists('package_height', $data ?? [], null);
        $this->setIfExists('package_length', $data ?? [], null);
        $this->setIfExists('package_reference_number', $data ?? [], null);
        $this->setIfExists('package_return_tracking_number', $data ?? [], null);
        $this->setIfExists('package_return_tracking_url', $data ?? [], null);
        $this->setIfExists('package_tracking_number', $data ?? [], null);
        $this->setIfExists('package_tracking_url', $data ?? [], null);
        $this->setIfExists('package_weight', $data ?? [], null);
        $this->setIfExists('package_width', $data ?? [], null);
        $this->setIfExists('picking_instructions', $data ?? [], null);
        $this->setIfExists('picks_complete', $data ?? [], null);
        $this->setIfExists('purchase_orders', $data ?? [], null);
        $this->setIfExists('recipient_customer_number', $data ?? [], null);
        $this->setIfExists('recipient_party_id', $data ?? [], null);
        $this->setIfExists('recipient_supplier_number', $data ?? [], null);
        $this->setIfExists('record_email_addresses', $data ?? [], null);
        $this->setIfExists('responsible_user_id', $data ?? [], null);
        $this->setIfExists('sales_invoice_email_addresses', $data ?? [], null);
        $this->setIfExists('shipment_items', $data ?? [], null);
        $this->setIfExists('shipment_method_id', $data ?? [], null);
        $this->setIfExists('shipment_method_name', $data ?? [], null);
        $this->setIfExists('shipment_number', $data ?? [], null);
        $this->setIfExists('shipment_type', $data ?? [], null);
        $this->setIfExists('shipped_from_address', $data ?? [], null);
        $this->setIfExists('shipping_carrier_id', $data ?? [], null);
        $this->setIfExists('shipping_carrier_name', $data ?? [], null);
        $this->setIfExists('shipping_date', $data ?? [], null);
        $this->setIfExists('shipping_labels_count', $data ?? [], null);
        $this->setIfExists('shipping_return_carrier_id', $data ?? [], null);
        $this->setIfExists('shipping_return_carrier_name', $data ?? [], null);
        $this->setIfExists('warehouse_id', $data ?? [], null);
        $this->setIfExists('warehouse_name', $data ?? [], null);
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

        if (!is_null($this->container['declared_value_amount']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['declared_value_amount'])) {
            $invalidProperties[] = "invalid value for 'declared_value_amount', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['package_weight']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['package_weight'])) {
            $invalidProperties[] = "invalid value for 'package_weight', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
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
     * Gets commercial_language
     *
     * @return string|null
     */
    public function getCommercialLanguage()
    {
        return $this->container['commercial_language'];
    }

    /**
     * Sets commercial_language
     *
     * @param string|null $commercial_language commercial_language
     *
     * @return self
     */
    public function setCommercialLanguage($commercial_language)
    {
        if (is_null($commercial_language)) {
            throw new \InvalidArgumentException('non-nullable commercial_language cannot be null');
        }
        $this->container['commercial_language'] = $commercial_language;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return string|null
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param string|null $creator_id creator_id
     *
     * @return self
     */
    public function setCreatorId($creator_id)
    {
        if (is_null($creator_id)) {
            throw new \InvalidArgumentException('non-nullable creator_id cannot be null');
        }
        $this->container['creator_id'] = $creator_id;

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
     * Gets disable_email_template
     *
     * @return bool|null
     * @deprecated
     */
    public function getDisableEmailTemplate()
    {
        return $this->container['disable_email_template'];
    }

    /**
     * Sets disable_email_template
     *
     * @param bool|null $disable_email_template disable_email_template
     *
     * @return self
     * @deprecated
     */
    public function setDisableEmailTemplate($disable_email_template)
    {
        if (is_null($disable_email_template)) {
            throw new \InvalidArgumentException('non-nullable disable_email_template cannot be null');
        }
        $this->container['disable_email_template'] = $disable_email_template;

        return $this;
    }

    /**
     * Gets record_comment
     *
     * @return string|null
     */
    public function getRecordComment()
    {
        return $this->container['record_comment'];
    }

    /**
     * Sets record_comment
     *
     * @param string|null $record_comment record_comment
     *
     * @return self
     */
    public function setRecordComment($record_comment)
    {
        if (is_null($record_comment)) {
            throw new \InvalidArgumentException('non-nullable record_comment cannot be null');
        }
        $this->container['record_comment'] = $record_comment;

        return $this;
    }

    /**
     * Gets record_free_text
     *
     * @return string|null
     */
    public function getRecordFreeText()
    {
        return $this->container['record_free_text'];
    }

    /**
     * Sets record_free_text
     *
     * @param string|null $record_free_text record_free_text
     *
     * @return self
     */
    public function setRecordFreeText($record_free_text)
    {
        if (is_null($record_free_text)) {
            throw new \InvalidArgumentException('non-nullable record_free_text cannot be null');
        }
        $this->container['record_free_text'] = $record_free_text;

        return $this;
    }

    /**
     * Gets record_opening
     *
     * @return string|null
     */
    public function getRecordOpening()
    {
        return $this->container['record_opening'];
    }

    /**
     * Sets record_opening
     *
     * @param string|null $record_opening record_opening
     *
     * @return self
     */
    public function setRecordOpening($record_opening)
    {
        if (is_null($record_opening)) {
            throw new \InvalidArgumentException('non-nullable record_opening cannot be null');
        }
        $this->container['record_opening'] = $record_opening;

        return $this;
    }

    /**
     * Gets sent_to_recipient
     *
     * @return bool|null
     */
    public function getSentToRecipient()
    {
        return $this->container['sent_to_recipient'];
    }

    /**
     * Sets sent_to_recipient
     *
     * @param bool|null $sent_to_recipient sent_to_recipient
     *
     * @return self
     */
    public function setSentToRecipient($sent_to_recipient)
    {
        if (is_null($sent_to_recipient)) {
            throw new \InvalidArgumentException('non-nullable sent_to_recipient cannot be null');
        }
        $this->container['sent_to_recipient'] = $sent_to_recipient;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets invoice_address
     *
     * @return \kruegge82\weclapp\Model\RecordAddress|null
     */
    public function getInvoiceAddress()
    {
        return $this->container['invoice_address'];
    }

    /**
     * Sets invoice_address
     *
     * @param \kruegge82\weclapp\Model\RecordAddress|null $invoice_address invoice_address
     *
     * @return self
     */
    public function setInvoiceAddress($invoice_address)
    {
        if (is_null($invoice_address)) {
            throw new \InvalidArgumentException('non-nullable invoice_address cannot be null');
        }
        $this->container['invoice_address'] = $invoice_address;

        return $this;
    }

    /**
     * Gets recipient_address
     *
     * @return \kruegge82\weclapp\Model\RecordAddress|null
     */
    public function getRecipientAddress()
    {
        return $this->container['recipient_address'];
    }

    /**
     * Sets recipient_address
     *
     * @param \kruegge82\weclapp\Model\RecordAddress|null $recipient_address recipient_address
     *
     * @return self
     */
    public function setRecipientAddress($recipient_address)
    {
        if (is_null($recipient_address)) {
            throw new \InvalidArgumentException('non-nullable recipient_address cannot be null');
        }
        $this->container['recipient_address'] = $recipient_address;

        return $this;
    }

    /**
     * Gets sales_order_id
     *
     * @return string|null
     * @deprecated
     */
    public function getSalesOrderId()
    {
        return $this->container['sales_order_id'];
    }

    /**
     * Sets sales_order_id
     *
     * @param string|null $sales_order_id sales_order_id
     *
     * @return self
     * @deprecated
     */
    public function setSalesOrderId($sales_order_id)
    {
        if (is_null($sales_order_id)) {
            throw new \InvalidArgumentException('non-nullable sales_order_id cannot be null');
        }
        $this->container['sales_order_id'] = $sales_order_id;

        return $this;
    }

    /**
     * Gets sales_order_number
     *
     * @return string|null
     * @deprecated
     */
    public function getSalesOrderNumber()
    {
        return $this->container['sales_order_number'];
    }

    /**
     * Sets sales_order_number
     *
     * @param string|null $sales_order_number sales_order_number
     *
     * @return self
     * @deprecated
     */
    public function setSalesOrderNumber($sales_order_number)
    {
        if (is_null($sales_order_number)) {
            throw new \InvalidArgumentException('non-nullable sales_order_number cannot be null');
        }
        $this->container['sales_order_number'] = $sales_order_number;

        return $this;
    }

    /**
     * Gets sales_orders
     *
     * @return \kruegge82\weclapp\Model\OnlyId[]|null
     */
    public function getSalesOrders()
    {
        return $this->container['sales_orders'];
    }

    /**
     * Sets sales_orders
     *
     * @param \kruegge82\weclapp\Model\OnlyId[]|null $sales_orders sales_orders
     *
     * @return self
     */
    public function setSalesOrders($sales_orders)
    {
        if (is_null($sales_orders)) {
            throw new \InvalidArgumentException('non-nullable sales_orders cannot be null');
        }
        $this->container['sales_orders'] = $sales_orders;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \kruegge82\weclapp\Model\ShipmentStatusType|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \kruegge82\weclapp\Model\ShipmentStatusType|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_history
     *
     * @return \kruegge82\weclapp\Model\ShipmentStatus[]|null
     */
    public function getStatusHistory()
    {
        return $this->container['status_history'];
    }

    /**
     * Sets status_history
     *
     * @param \kruegge82\weclapp\Model\ShipmentStatus[]|null $status_history status_history
     *
     * @return self
     */
    public function setStatusHistory($status_history)
    {
        if (is_null($status_history)) {
            throw new \InvalidArgumentException('non-nullable status_history cannot be null');
        }
        $this->container['status_history'] = $status_history;

        return $this;
    }

    /**
     * Gets additional_delivery_information
     *
     * @return string|null
     */
    public function getAdditionalDeliveryInformation()
    {
        return $this->container['additional_delivery_information'];
    }

    /**
     * Sets additional_delivery_information
     *
     * @param string|null $additional_delivery_information additional_delivery_information
     *
     * @return self
     */
    public function setAdditionalDeliveryInformation($additional_delivery_information)
    {
        if (is_null($additional_delivery_information)) {
            throw new \InvalidArgumentException('non-nullable additional_delivery_information cannot be null');
        }
        $this->container['additional_delivery_information'] = $additional_delivery_information;

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
     * Gets consolidation_storage_place_id
     *
     * @return string|null
     */
    public function getConsolidationStoragePlaceId()
    {
        return $this->container['consolidation_storage_place_id'];
    }

    /**
     * Sets consolidation_storage_place_id
     *
     * @param string|null $consolidation_storage_place_id consolidation_storage_place_id
     *
     * @return self
     */
    public function setConsolidationStoragePlaceId($consolidation_storage_place_id)
    {
        if (is_null($consolidation_storage_place_id)) {
            throw new \InvalidArgumentException('non-nullable consolidation_storage_place_id cannot be null');
        }
        $this->container['consolidation_storage_place_id'] = $consolidation_storage_place_id;

        return $this;
    }

    /**
     * Gets customer_purchase_order_number
     *
     * @return string|null
     */
    public function getCustomerPurchaseOrderNumber()
    {
        return $this->container['customer_purchase_order_number'];
    }

    /**
     * Sets customer_purchase_order_number
     *
     * @param string|null $customer_purchase_order_number customer_purchase_order_number
     *
     * @return self
     */
    public function setCustomerPurchaseOrderNumber($customer_purchase_order_number)
    {
        if (is_null($customer_purchase_order_number)) {
            throw new \InvalidArgumentException('non-nullable customer_purchase_order_number cannot be null');
        }
        $this->container['customer_purchase_order_number'] = $customer_purchase_order_number;

        return $this;
    }

    /**
     * Gets declared_value_amount
     *
     * @return float|null
     */
    public function getDeclaredValueAmount()
    {
        return $this->container['declared_value_amount'];
    }

    /**
     * Sets declared_value_amount
     *
     * @param float|null $declared_value_amount declared_value_amount
     *
     * @return self
     */
    public function setDeclaredValueAmount($declared_value_amount)
    {
        if (is_null($declared_value_amount)) {
            throw new \InvalidArgumentException('non-nullable declared_value_amount cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($declared_value_amount)))) {
            throw new \InvalidArgumentException("invalid value for \$declared_value_amount when calling Shipment., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['declared_value_amount'] = $declared_value_amount;

        return $this;
    }

    /**
     * Gets declared_value_amount_currency_id
     *
     * @return string|null
     */
    public function getDeclaredValueAmountCurrencyId()
    {
        return $this->container['declared_value_amount_currency_id'];
    }

    /**
     * Sets declared_value_amount_currency_id
     *
     * @param string|null $declared_value_amount_currency_id declared_value_amount_currency_id
     *
     * @return self
     */
    public function setDeclaredValueAmountCurrencyId($declared_value_amount_currency_id)
    {
        if (is_null($declared_value_amount_currency_id)) {
            throw new \InvalidArgumentException('non-nullable declared_value_amount_currency_id cannot be null');
        }
        $this->container['declared_value_amount_currency_id'] = $declared_value_amount_currency_id;

        return $this;
    }

    /**
     * Gets declared_value_amount_currency_name
     *
     * @return string|null
     * @deprecated
     */
    public function getDeclaredValueAmountCurrencyName()
    {
        return $this->container['declared_value_amount_currency_name'];
    }

    /**
     * Sets declared_value_amount_currency_name
     *
     * @param string|null $declared_value_amount_currency_name declared_value_amount_currency_name
     *
     * @return self
     * @deprecated
     */
    public function setDeclaredValueAmountCurrencyName($declared_value_amount_currency_name)
    {
        if (is_null($declared_value_amount_currency_name)) {
            throw new \InvalidArgumentException('non-nullable declared_value_amount_currency_name cannot be null');
        }
        $this->container['declared_value_amount_currency_name'] = $declared_value_amount_currency_name;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return int|null
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param int|null $delivery_date delivery_date
     *
     * @return self
     */
    public function setDeliveryDate($delivery_date)
    {
        if (is_null($delivery_date)) {
            throw new \InvalidArgumentException('non-nullable delivery_date cannot be null');
        }
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets destination_storage_place_id
     *
     * @return string|null
     */
    public function getDestinationStoragePlaceId()
    {
        return $this->container['destination_storage_place_id'];
    }

    /**
     * Sets destination_storage_place_id
     *
     * @param string|null $destination_storage_place_id destination_storage_place_id
     *
     * @return self
     */
    public function setDestinationStoragePlaceId($destination_storage_place_id)
    {
        if (is_null($destination_storage_place_id)) {
            throw new \InvalidArgumentException('non-nullable destination_storage_place_id cannot be null');
        }
        $this->container['destination_storage_place_id'] = $destination_storage_place_id;

        return $this;
    }

    /**
     * Gets destination_warehouse_id
     *
     * @return string|null
     */
    public function getDestinationWarehouseId()
    {
        return $this->container['destination_warehouse_id'];
    }

    /**
     * Sets destination_warehouse_id
     *
     * @param string|null $destination_warehouse_id destination_warehouse_id
     *
     * @return self
     */
    public function setDestinationWarehouseId($destination_warehouse_id)
    {
        if (is_null($destination_warehouse_id)) {
            throw new \InvalidArgumentException('non-nullable destination_warehouse_id cannot be null');
        }
        $this->container['destination_warehouse_id'] = $destination_warehouse_id;

        return $this;
    }

    /**
     * Gets destination_warehouse_name
     *
     * @return string|null
     * @deprecated
     */
    public function getDestinationWarehouseName()
    {
        return $this->container['destination_warehouse_name'];
    }

    /**
     * Sets destination_warehouse_name
     *
     * @param string|null $destination_warehouse_name destination_warehouse_name
     *
     * @return self
     * @deprecated
     */
    public function setDestinationWarehouseName($destination_warehouse_name)
    {
        if (is_null($destination_warehouse_name)) {
            throw new \InvalidArgumentException('non-nullable destination_warehouse_name cannot be null');
        }
        $this->container['destination_warehouse_name'] = $destination_warehouse_name;

        return $this;
    }

    /**
     * Gets dhl_receiver_id
     *
     * @return string|null
     */
    public function getDhlReceiverId()
    {
        return $this->container['dhl_receiver_id'];
    }

    /**
     * Sets dhl_receiver_id
     *
     * @param string|null $dhl_receiver_id dhl_receiver_id
     *
     * @return self
     */
    public function setDhlReceiverId($dhl_receiver_id)
    {
        if (is_null($dhl_receiver_id)) {
            throw new \InvalidArgumentException('non-nullable dhl_receiver_id cannot be null');
        }
        $this->container['dhl_receiver_id'] = $dhl_receiver_id;

        return $this;
    }

    /**
     * Gets invoice_recipient_id
     *
     * @return string|null
     */
    public function getInvoiceRecipientId()
    {
        return $this->container['invoice_recipient_id'];
    }

    /**
     * Sets invoice_recipient_id
     *
     * @param string|null $invoice_recipient_id invoice_recipient_id
     *
     * @return self
     */
    public function setInvoiceRecipientId($invoice_recipient_id)
    {
        if (is_null($invoice_recipient_id)) {
            throw new \InvalidArgumentException('non-nullable invoice_recipient_id cannot be null');
        }
        $this->container['invoice_recipient_id'] = $invoice_recipient_id;

        return $this;
    }

    /**
     * Gets package_height
     *
     * @return int|null
     */
    public function getPackageHeight()
    {
        return $this->container['package_height'];
    }

    /**
     * Sets package_height
     *
     * @param int|null $package_height package_height
     *
     * @return self
     */
    public function setPackageHeight($package_height)
    {
        if (is_null($package_height)) {
            throw new \InvalidArgumentException('non-nullable package_height cannot be null');
        }
        $this->container['package_height'] = $package_height;

        return $this;
    }

    /**
     * Gets package_length
     *
     * @return int|null
     */
    public function getPackageLength()
    {
        return $this->container['package_length'];
    }

    /**
     * Sets package_length
     *
     * @param int|null $package_length package_length
     *
     * @return self
     */
    public function setPackageLength($package_length)
    {
        if (is_null($package_length)) {
            throw new \InvalidArgumentException('non-nullable package_length cannot be null');
        }
        $this->container['package_length'] = $package_length;

        return $this;
    }

    /**
     * Gets package_reference_number
     *
     * @return string|null
     */
    public function getPackageReferenceNumber()
    {
        return $this->container['package_reference_number'];
    }

    /**
     * Sets package_reference_number
     *
     * @param string|null $package_reference_number package_reference_number
     *
     * @return self
     */
    public function setPackageReferenceNumber($package_reference_number)
    {
        if (is_null($package_reference_number)) {
            throw new \InvalidArgumentException('non-nullable package_reference_number cannot be null');
        }
        $this->container['package_reference_number'] = $package_reference_number;

        return $this;
    }

    /**
     * Gets package_return_tracking_number
     *
     * @return string|null
     */
    public function getPackageReturnTrackingNumber()
    {
        return $this->container['package_return_tracking_number'];
    }

    /**
     * Sets package_return_tracking_number
     *
     * @param string|null $package_return_tracking_number package_return_tracking_number
     *
     * @return self
     */
    public function setPackageReturnTrackingNumber($package_return_tracking_number)
    {
        if (is_null($package_return_tracking_number)) {
            throw new \InvalidArgumentException('non-nullable package_return_tracking_number cannot be null');
        }
        $this->container['package_return_tracking_number'] = $package_return_tracking_number;

        return $this;
    }

    /**
     * Gets package_return_tracking_url
     *
     * @return string|null
     */
    public function getPackageReturnTrackingUrl()
    {
        return $this->container['package_return_tracking_url'];
    }

    /**
     * Sets package_return_tracking_url
     *
     * @param string|null $package_return_tracking_url package_return_tracking_url
     *
     * @return self
     */
    public function setPackageReturnTrackingUrl($package_return_tracking_url)
    {
        if (is_null($package_return_tracking_url)) {
            throw new \InvalidArgumentException('non-nullable package_return_tracking_url cannot be null');
        }
        $this->container['package_return_tracking_url'] = $package_return_tracking_url;

        return $this;
    }

    /**
     * Gets package_tracking_number
     *
     * @return string|null
     */
    public function getPackageTrackingNumber()
    {
        return $this->container['package_tracking_number'];
    }

    /**
     * Sets package_tracking_number
     *
     * @param string|null $package_tracking_number package_tracking_number
     *
     * @return self
     */
    public function setPackageTrackingNumber($package_tracking_number)
    {
        if (is_null($package_tracking_number)) {
            throw new \InvalidArgumentException('non-nullable package_tracking_number cannot be null');
        }
        $this->container['package_tracking_number'] = $package_tracking_number;

        return $this;
    }

    /**
     * Gets package_tracking_url
     *
     * @return string|null
     */
    public function getPackageTrackingUrl()
    {
        return $this->container['package_tracking_url'];
    }

    /**
     * Sets package_tracking_url
     *
     * @param string|null $package_tracking_url package_tracking_url
     *
     * @return self
     */
    public function setPackageTrackingUrl($package_tracking_url)
    {
        if (is_null($package_tracking_url)) {
            throw new \InvalidArgumentException('non-nullable package_tracking_url cannot be null');
        }
        $this->container['package_tracking_url'] = $package_tracking_url;

        return $this;
    }

    /**
     * Gets package_weight
     *
     * @return float|null
     */
    public function getPackageWeight()
    {
        return $this->container['package_weight'];
    }

    /**
     * Sets package_weight
     *
     * @param float|null $package_weight package_weight
     *
     * @return self
     */
    public function setPackageWeight($package_weight)
    {
        if (is_null($package_weight)) {
            throw new \InvalidArgumentException('non-nullable package_weight cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($package_weight)))) {
            throw new \InvalidArgumentException("invalid value for \$package_weight when calling Shipment., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['package_weight'] = $package_weight;

        return $this;
    }

    /**
     * Gets package_width
     *
     * @return int|null
     */
    public function getPackageWidth()
    {
        return $this->container['package_width'];
    }

    /**
     * Sets package_width
     *
     * @param int|null $package_width package_width
     *
     * @return self
     */
    public function setPackageWidth($package_width)
    {
        if (is_null($package_width)) {
            throw new \InvalidArgumentException('non-nullable package_width cannot be null');
        }
        $this->container['package_width'] = $package_width;

        return $this;
    }

    /**
     * Gets picking_instructions
     *
     * @return string|null
     */
    public function getPickingInstructions()
    {
        return $this->container['picking_instructions'];
    }

    /**
     * Sets picking_instructions
     *
     * @param string|null $picking_instructions picking_instructions
     *
     * @return self
     */
    public function setPickingInstructions($picking_instructions)
    {
        if (is_null($picking_instructions)) {
            throw new \InvalidArgumentException('non-nullable picking_instructions cannot be null');
        }
        $this->container['picking_instructions'] = $picking_instructions;

        return $this;
    }

    /**
     * Gets picks_complete
     *
     * @return bool|null
     */
    public function getPicksComplete()
    {
        return $this->container['picks_complete'];
    }

    /**
     * Sets picks_complete
     *
     * @param bool|null $picks_complete picks_complete
     *
     * @return self
     */
    public function setPicksComplete($picks_complete)
    {
        if (is_null($picks_complete)) {
            throw new \InvalidArgumentException('non-nullable picks_complete cannot be null');
        }
        $this->container['picks_complete'] = $picks_complete;

        return $this;
    }

    /**
     * Gets purchase_orders
     *
     * @return \kruegge82\weclapp\Model\OnlyId[]|null
     */
    public function getPurchaseOrders()
    {
        return $this->container['purchase_orders'];
    }

    /**
     * Sets purchase_orders
     *
     * @param \kruegge82\weclapp\Model\OnlyId[]|null $purchase_orders purchase_orders
     *
     * @return self
     */
    public function setPurchaseOrders($purchase_orders)
    {
        if (is_null($purchase_orders)) {
            throw new \InvalidArgumentException('non-nullable purchase_orders cannot be null');
        }
        $this->container['purchase_orders'] = $purchase_orders;

        return $this;
    }

    /**
     * Gets recipient_customer_number
     *
     * @return string|null
     */
    public function getRecipientCustomerNumber()
    {
        return $this->container['recipient_customer_number'];
    }

    /**
     * Sets recipient_customer_number
     *
     * @param string|null $recipient_customer_number recipient_customer_number
     *
     * @return self
     */
    public function setRecipientCustomerNumber($recipient_customer_number)
    {
        if (is_null($recipient_customer_number)) {
            throw new \InvalidArgumentException('non-nullable recipient_customer_number cannot be null');
        }
        $this->container['recipient_customer_number'] = $recipient_customer_number;

        return $this;
    }

    /**
     * Gets recipient_party_id
     *
     * @return string|null
     */
    public function getRecipientPartyId()
    {
        return $this->container['recipient_party_id'];
    }

    /**
     * Sets recipient_party_id
     *
     * @param string|null $recipient_party_id recipient_party_id
     *
     * @return self
     */
    public function setRecipientPartyId($recipient_party_id)
    {
        if (is_null($recipient_party_id)) {
            throw new \InvalidArgumentException('non-nullable recipient_party_id cannot be null');
        }
        $this->container['recipient_party_id'] = $recipient_party_id;

        return $this;
    }

    /**
     * Gets recipient_supplier_number
     *
     * @return string|null
     */
    public function getRecipientSupplierNumber()
    {
        return $this->container['recipient_supplier_number'];
    }

    /**
     * Sets recipient_supplier_number
     *
     * @param string|null $recipient_supplier_number recipient_supplier_number
     *
     * @return self
     */
    public function setRecipientSupplierNumber($recipient_supplier_number)
    {
        if (is_null($recipient_supplier_number)) {
            throw new \InvalidArgumentException('non-nullable recipient_supplier_number cannot be null');
        }
        $this->container['recipient_supplier_number'] = $recipient_supplier_number;

        return $this;
    }

    /**
     * Gets record_email_addresses
     *
     * @return \kruegge82\weclapp\Model\EmailAddresses|null
     */
    public function getRecordEmailAddresses()
    {
        return $this->container['record_email_addresses'];
    }

    /**
     * Sets record_email_addresses
     *
     * @param \kruegge82\weclapp\Model\EmailAddresses|null $record_email_addresses record_email_addresses
     *
     * @return self
     */
    public function setRecordEmailAddresses($record_email_addresses)
    {
        if (is_null($record_email_addresses)) {
            throw new \InvalidArgumentException('non-nullable record_email_addresses cannot be null');
        }
        $this->container['record_email_addresses'] = $record_email_addresses;

        return $this;
    }

    /**
     * Gets responsible_user_id
     *
     * @return string|null
     */
    public function getResponsibleUserId()
    {
        return $this->container['responsible_user_id'];
    }

    /**
     * Sets responsible_user_id
     *
     * @param string|null $responsible_user_id responsible_user_id
     *
     * @return self
     */
    public function setResponsibleUserId($responsible_user_id)
    {
        if (is_null($responsible_user_id)) {
            throw new \InvalidArgumentException('non-nullable responsible_user_id cannot be null');
        }
        $this->container['responsible_user_id'] = $responsible_user_id;

        return $this;
    }

    /**
     * Gets sales_invoice_email_addresses
     *
     * @return \kruegge82\weclapp\Model\EmailAddresses|null
     */
    public function getSalesInvoiceEmailAddresses()
    {
        return $this->container['sales_invoice_email_addresses'];
    }

    /**
     * Sets sales_invoice_email_addresses
     *
     * @param \kruegge82\weclapp\Model\EmailAddresses|null $sales_invoice_email_addresses sales_invoice_email_addresses
     *
     * @return self
     */
    public function setSalesInvoiceEmailAddresses($sales_invoice_email_addresses)
    {
        if (is_null($sales_invoice_email_addresses)) {
            throw new \InvalidArgumentException('non-nullable sales_invoice_email_addresses cannot be null');
        }
        $this->container['sales_invoice_email_addresses'] = $sales_invoice_email_addresses;

        return $this;
    }

    /**
     * Gets shipment_items
     *
     * @return \kruegge82\weclapp\Model\ShipmentItem[]|null
     */
    public function getShipmentItems()
    {
        return $this->container['shipment_items'];
    }

    /**
     * Sets shipment_items
     *
     * @param \kruegge82\weclapp\Model\ShipmentItem[]|null $shipment_items shipment_items
     *
     * @return self
     */
    public function setShipmentItems($shipment_items)
    {
        if (is_null($shipment_items)) {
            throw new \InvalidArgumentException('non-nullable shipment_items cannot be null');
        }
        $this->container['shipment_items'] = $shipment_items;

        return $this;
    }

    /**
     * Gets shipment_method_id
     *
     * @return string|null
     */
    public function getShipmentMethodId()
    {
        return $this->container['shipment_method_id'];
    }

    /**
     * Sets shipment_method_id
     *
     * @param string|null $shipment_method_id shipment_method_id
     *
     * @return self
     */
    public function setShipmentMethodId($shipment_method_id)
    {
        if (is_null($shipment_method_id)) {
            throw new \InvalidArgumentException('non-nullable shipment_method_id cannot be null');
        }
        $this->container['shipment_method_id'] = $shipment_method_id;

        return $this;
    }

    /**
     * Gets shipment_method_name
     *
     * @return string|null
     * @deprecated
     */
    public function getShipmentMethodName()
    {
        return $this->container['shipment_method_name'];
    }

    /**
     * Sets shipment_method_name
     *
     * @param string|null $shipment_method_name shipment_method_name
     *
     * @return self
     * @deprecated
     */
    public function setShipmentMethodName($shipment_method_name)
    {
        if (is_null($shipment_method_name)) {
            throw new \InvalidArgumentException('non-nullable shipment_method_name cannot be null');
        }
        $this->container['shipment_method_name'] = $shipment_method_name;

        return $this;
    }

    /**
     * Gets shipment_number
     *
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->container['shipment_number'];
    }

    /**
     * Sets shipment_number
     *
     * @param string|null $shipment_number shipment_number
     *
     * @return self
     */
    public function setShipmentNumber($shipment_number)
    {
        if (is_null($shipment_number)) {
            throw new \InvalidArgumentException('non-nullable shipment_number cannot be null');
        }
        $this->container['shipment_number'] = $shipment_number;

        return $this;
    }

    /**
     * Gets shipment_type
     *
     * @return \kruegge82\weclapp\Model\ShipmentOutType|null
     */
    public function getShipmentType()
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param \kruegge82\weclapp\Model\ShipmentOutType|null $shipment_type shipment_type
     *
     * @return self
     */
    public function setShipmentType($shipment_type)
    {
        if (is_null($shipment_type)) {
            throw new \InvalidArgumentException('non-nullable shipment_type cannot be null');
        }
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }

    /**
     * Gets shipped_from_address
     *
     * @return \kruegge82\weclapp\Model\RecordAddress|null
     */
    public function getShippedFromAddress()
    {
        return $this->container['shipped_from_address'];
    }

    /**
     * Sets shipped_from_address
     *
     * @param \kruegge82\weclapp\Model\RecordAddress|null $shipped_from_address shipped_from_address
     *
     * @return self
     */
    public function setShippedFromAddress($shipped_from_address)
    {
        if (is_null($shipped_from_address)) {
            throw new \InvalidArgumentException('non-nullable shipped_from_address cannot be null');
        }
        $this->container['shipped_from_address'] = $shipped_from_address;

        return $this;
    }

    /**
     * Gets shipping_carrier_id
     *
     * @return string|null
     */
    public function getShippingCarrierId()
    {
        return $this->container['shipping_carrier_id'];
    }

    /**
     * Sets shipping_carrier_id
     *
     * @param string|null $shipping_carrier_id shipping_carrier_id
     *
     * @return self
     */
    public function setShippingCarrierId($shipping_carrier_id)
    {
        if (is_null($shipping_carrier_id)) {
            throw new \InvalidArgumentException('non-nullable shipping_carrier_id cannot be null');
        }
        $this->container['shipping_carrier_id'] = $shipping_carrier_id;

        return $this;
    }

    /**
     * Gets shipping_carrier_name
     *
     * @return string|null
     * @deprecated
     */
    public function getShippingCarrierName()
    {
        return $this->container['shipping_carrier_name'];
    }

    /**
     * Sets shipping_carrier_name
     *
     * @param string|null $shipping_carrier_name shipping_carrier_name
     *
     * @return self
     * @deprecated
     */
    public function setShippingCarrierName($shipping_carrier_name)
    {
        if (is_null($shipping_carrier_name)) {
            throw new \InvalidArgumentException('non-nullable shipping_carrier_name cannot be null');
        }
        $this->container['shipping_carrier_name'] = $shipping_carrier_name;

        return $this;
    }

    /**
     * Gets shipping_date
     *
     * @return int|null
     */
    public function getShippingDate()
    {
        return $this->container['shipping_date'];
    }

    /**
     * Sets shipping_date
     *
     * @param int|null $shipping_date shipping_date
     *
     * @return self
     */
    public function setShippingDate($shipping_date)
    {
        if (is_null($shipping_date)) {
            throw new \InvalidArgumentException('non-nullable shipping_date cannot be null');
        }
        $this->container['shipping_date'] = $shipping_date;

        return $this;
    }

    /**
     * Gets shipping_labels_count
     *
     * @return int|null
     */
    public function getShippingLabelsCount()
    {
        return $this->container['shipping_labels_count'];
    }

    /**
     * Sets shipping_labels_count
     *
     * @param int|null $shipping_labels_count shipping_labels_count
     *
     * @return self
     */
    public function setShippingLabelsCount($shipping_labels_count)
    {
        if (is_null($shipping_labels_count)) {
            throw new \InvalidArgumentException('non-nullable shipping_labels_count cannot be null');
        }
        $this->container['shipping_labels_count'] = $shipping_labels_count;

        return $this;
    }

    /**
     * Gets shipping_return_carrier_id
     *
     * @return string|null
     */
    public function getShippingReturnCarrierId()
    {
        return $this->container['shipping_return_carrier_id'];
    }

    /**
     * Sets shipping_return_carrier_id
     *
     * @param string|null $shipping_return_carrier_id shipping_return_carrier_id
     *
     * @return self
     */
    public function setShippingReturnCarrierId($shipping_return_carrier_id)
    {
        if (is_null($shipping_return_carrier_id)) {
            throw new \InvalidArgumentException('non-nullable shipping_return_carrier_id cannot be null');
        }
        $this->container['shipping_return_carrier_id'] = $shipping_return_carrier_id;

        return $this;
    }

    /**
     * Gets shipping_return_carrier_name
     *
     * @return string|null
     * @deprecated
     */
    public function getShippingReturnCarrierName()
    {
        return $this->container['shipping_return_carrier_name'];
    }

    /**
     * Sets shipping_return_carrier_name
     *
     * @param string|null $shipping_return_carrier_name shipping_return_carrier_name
     *
     * @return self
     * @deprecated
     */
    public function setShippingReturnCarrierName($shipping_return_carrier_name)
    {
        if (is_null($shipping_return_carrier_name)) {
            throw new \InvalidArgumentException('non-nullable shipping_return_carrier_name cannot be null');
        }
        $this->container['shipping_return_carrier_name'] = $shipping_return_carrier_name;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return string|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param string|null $warehouse_id warehouse_id
     *
     * @return self
     */
    public function setWarehouseId($warehouse_id)
    {
        if (is_null($warehouse_id)) {
            throw new \InvalidArgumentException('non-nullable warehouse_id cannot be null');
        }
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets warehouse_name
     *
     * @return string|null
     * @deprecated
     */
    public function getWarehouseName()
    {
        return $this->container['warehouse_name'];
    }

    /**
     * Sets warehouse_name
     *
     * @param string|null $warehouse_name warehouse_name
     *
     * @return self
     * @deprecated
     */
    public function setWarehouseName($warehouse_name)
    {
        if (is_null($warehouse_name)) {
            throw new \InvalidArgumentException('non-nullable warehouse_name cannot be null');
        }
        $this->container['warehouse_name'] = $warehouse_name;

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


