<?php
/**
 * Article
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
 * Article Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Article implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'article';

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
        'article_number' => 'string',
        'description' => 'string',
        'ean' => 'string',
        'fixed_purchase_quantity' => 'float',
        'internal_note' => 'string',
        'manufacturer_part_number' => 'string',
        'match_code' => 'string',
        'minimum_purchase_quantity' => 'float',
        'name' => 'string',
        'short_description1' => 'string',
        'short_description2' => 'string',
        'tax_rate_type' => '\kruegge82\weclapp\Model\TaxRateType',
        'unit_id' => 'string',
        'unit_name' => 'string',
        'account_id' => 'string',
        'account_number' => 'string',
        'accounting_code_id' => 'string',
        'active' => 'bool',
        'apply_cash_discount' => 'bool',
        'article_alternative_quantities' => '\kruegge82\weclapp\Model\ArticleAlternativeQuantity[]',
        'article_calculation_prices' => '\kruegge82\weclapp\Model\ArticleCalculationPrice[]',
        'article_category_id' => 'string',
        'article_gross_weight' => 'float',
        'article_height' => 'float',
        'article_images' => '\kruegge82\weclapp\Model\ArticleImage[]',
        'article_length' => 'float',
        'article_net_weight' => 'float',
        'article_prices' => '\kruegge82\weclapp\Model\ArticlePriceWithoutArticleReference[]',
        'article_type' => '\kruegge82\weclapp\Model\ArticleType',
        'article_width' => 'float',
        'available_for_sales_channels' => '\kruegge82\weclapp\Model\DistributionChannel[]',
        'available_in_sale' => 'bool',
        'average_delivery_time' => 'int',
        'barcode' => 'string',
        'batch_number_required' => 'bool',
        'bill_of_material_part_delivery_possible' => 'bool',
        'catalog_code' => 'string',
        'commission_rate' => 'float',
        'contract_billing_cycle' => '\kruegge82\weclapp\Model\ContractChargeInterval',
        'contract_billing_mode' => '\kruegge82\weclapp\Model\ContractChargeIntervalType',
        'country_of_origin_code' => 'string',
        'customer_article_numbers' => '\kruegge82\weclapp\Model\CustomerSpecificArticleAttributes[]',
        'customs_description' => 'string',
        'customs_tariff_number' => 'string',
        'customs_tariff_number_id' => 'string',
        'default_loading_equipment_identifier_id' => 'string',
        'default_price_calculation_type' => '\kruegge82\weclapp\Model\CalculationType',
        'default_storage_places' => '\kruegge82\weclapp\Model\OnlyId[]',
        'define_individual_task_templates' => 'bool',
        'expense_account_id' => 'string',
        'expense_account_number' => 'string',
        'expiration_days' => 'int',
        'invoicing_type' => '\kruegge82\weclapp\Model\InvoicingType',
        'launch_date' => 'int',
        'loading_equipment_article_id' => 'string',
        'long_text' => 'string',
        'low_level_code' => 'int',
        'manufacturer_id' => 'string',
        'manufacturer_name' => 'string',
        'margin_calculation_price_type' => '\kruegge82\weclapp\Model\MarginCalculationPriceType',
        'minimum_stock_quantity' => 'float',
        'packaging_quantity' => 'int',
        'packaging_unit_base_article_id' => 'string',
        'packaging_unit_parent_article_id' => 'string',
        'planned_working_time_per_unit' => 'int',
        'price_calculation_parameters' => '\kruegge82\weclapp\Model\PriceCalculationParameterV1[]',
        'primary_supply_source_id' => 'string',
        'procurement_lead_days' => 'int',
        'producer_type' => 'string',
        'production_article' => 'bool',
        'production_bill_of_material_items' => '\kruegge82\weclapp\Model\BillOfMaterial[]',
        'production_configuration_rule' => '\kruegge82\weclapp\Model\ProductionArticleConfigurationRule',
        'purchase_cost_center_id' => 'string',
        'purchase_cost_center_number' => 'string',
        'quantity_conversions' => '\kruegge82\weclapp\Model\QuantityConversion[]',
        'rating_id' => 'string',
        'rating_name' => 'string',
        'record_item_group_name' => 'string',
        'safety_stock_days' => 'int',
        'sales_bill_of_material_items' => '\kruegge82\weclapp\Model\SalesBillOfMaterialArticleItem[]',
        'sales_cost_center_id' => 'string',
        'sales_cost_center_number' => 'string',
        'sell_by_date' => 'int',
        'sell_from_date' => 'int',
        'serial_number_required' => 'bool',
        'show_on_delivery_note' => 'bool',
        'status_id' => 'string',
        'supply_sources' => '\kruegge82\weclapp\Model\SupplySource[]',
        'support_until_date' => 'int',
        'system_code' => 'string',
        'tags' => 'string[]',
        'target_stock_quantity' => 'float',
        'use_available_for_sales_channels' => 'bool',
        'use_sales_bill_of_material_item_prices' => 'bool',
        'use_sales_bill_of_material_item_prices_for_purchase' => 'bool',
        'use_sales_bill_of_material_subitem_costs' => 'bool'
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
        'article_number' => null,
        'description' => 'html',
        'ean' => null,
        'fixed_purchase_quantity' => 'decimal',
        'internal_note' => 'html',
        'manufacturer_part_number' => null,
        'match_code' => null,
        'minimum_purchase_quantity' => 'decimal',
        'name' => null,
        'short_description1' => null,
        'short_description2' => null,
        'tax_rate_type' => null,
        'unit_id' => null,
        'unit_name' => null,
        'account_id' => null,
        'account_number' => null,
        'accounting_code_id' => null,
        'active' => null,
        'apply_cash_discount' => null,
        'article_alternative_quantities' => null,
        'article_calculation_prices' => null,
        'article_category_id' => null,
        'article_gross_weight' => 'decimal',
        'article_height' => 'decimal',
        'article_images' => null,
        'article_length' => 'decimal',
        'article_net_weight' => 'decimal',
        'article_prices' => null,
        'article_type' => null,
        'article_width' => 'decimal',
        'available_for_sales_channels' => null,
        'available_in_sale' => null,
        'average_delivery_time' => 'int32',
        'barcode' => null,
        'batch_number_required' => null,
        'bill_of_material_part_delivery_possible' => null,
        'catalog_code' => null,
        'commission_rate' => 'decimal',
        'contract_billing_cycle' => null,
        'contract_billing_mode' => null,
        'country_of_origin_code' => null,
        'customer_article_numbers' => null,
        'customs_description' => null,
        'customs_tariff_number' => null,
        'customs_tariff_number_id' => null,
        'default_loading_equipment_identifier_id' => null,
        'default_price_calculation_type' => null,
        'default_storage_places' => null,
        'define_individual_task_templates' => null,
        'expense_account_id' => null,
        'expense_account_number' => null,
        'expiration_days' => 'int32',
        'invoicing_type' => null,
        'launch_date' => 'timestamp',
        'loading_equipment_article_id' => null,
        'long_text' => 'html',
        'low_level_code' => 'int32',
        'manufacturer_id' => null,
        'manufacturer_name' => null,
        'margin_calculation_price_type' => null,
        'minimum_stock_quantity' => 'decimal',
        'packaging_quantity' => 'int32',
        'packaging_unit_base_article_id' => null,
        'packaging_unit_parent_article_id' => null,
        'planned_working_time_per_unit' => 'int64',
        'price_calculation_parameters' => null,
        'primary_supply_source_id' => null,
        'procurement_lead_days' => 'int32',
        'producer_type' => null,
        'production_article' => null,
        'production_bill_of_material_items' => null,
        'production_configuration_rule' => null,
        'purchase_cost_center_id' => null,
        'purchase_cost_center_number' => null,
        'quantity_conversions' => null,
        'rating_id' => null,
        'rating_name' => null,
        'record_item_group_name' => null,
        'safety_stock_days' => 'int32',
        'sales_bill_of_material_items' => null,
        'sales_cost_center_id' => null,
        'sales_cost_center_number' => null,
        'sell_by_date' => 'timestamp',
        'sell_from_date' => 'timestamp',
        'serial_number_required' => null,
        'show_on_delivery_note' => null,
        'status_id' => null,
        'supply_sources' => null,
        'support_until_date' => 'timestamp',
        'system_code' => null,
        'tags' => null,
        'target_stock_quantity' => 'decimal',
        'use_available_for_sales_channels' => null,
        'use_sales_bill_of_material_item_prices' => null,
        'use_sales_bill_of_material_item_prices_for_purchase' => null,
        'use_sales_bill_of_material_subitem_costs' => null
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
        'article_number' => false,
        'description' => false,
        'ean' => false,
        'fixed_purchase_quantity' => false,
        'internal_note' => false,
        'manufacturer_part_number' => false,
        'match_code' => false,
        'minimum_purchase_quantity' => false,
        'name' => false,
        'short_description1' => false,
        'short_description2' => false,
        'tax_rate_type' => false,
        'unit_id' => false,
        'unit_name' => false,
        'account_id' => false,
        'account_number' => false,
        'accounting_code_id' => false,
        'active' => false,
        'apply_cash_discount' => false,
        'article_alternative_quantities' => false,
        'article_calculation_prices' => false,
        'article_category_id' => false,
        'article_gross_weight' => false,
        'article_height' => false,
        'article_images' => false,
        'article_length' => false,
        'article_net_weight' => false,
        'article_prices' => false,
        'article_type' => false,
        'article_width' => false,
        'available_for_sales_channels' => false,
        'available_in_sale' => false,
        'average_delivery_time' => false,
        'barcode' => false,
        'batch_number_required' => false,
        'bill_of_material_part_delivery_possible' => false,
        'catalog_code' => false,
        'commission_rate' => false,
        'contract_billing_cycle' => false,
        'contract_billing_mode' => false,
        'country_of_origin_code' => false,
        'customer_article_numbers' => false,
        'customs_description' => false,
        'customs_tariff_number' => false,
        'customs_tariff_number_id' => false,
        'default_loading_equipment_identifier_id' => false,
        'default_price_calculation_type' => false,
        'default_storage_places' => false,
        'define_individual_task_templates' => false,
        'expense_account_id' => false,
        'expense_account_number' => false,
        'expiration_days' => false,
        'invoicing_type' => false,
        'launch_date' => false,
        'loading_equipment_article_id' => false,
        'long_text' => false,
        'low_level_code' => false,
        'manufacturer_id' => false,
        'manufacturer_name' => false,
        'margin_calculation_price_type' => false,
        'minimum_stock_quantity' => false,
        'packaging_quantity' => false,
        'packaging_unit_base_article_id' => false,
        'packaging_unit_parent_article_id' => false,
        'planned_working_time_per_unit' => false,
        'price_calculation_parameters' => false,
        'primary_supply_source_id' => false,
        'procurement_lead_days' => false,
        'producer_type' => false,
        'production_article' => false,
        'production_bill_of_material_items' => false,
        'production_configuration_rule' => false,
        'purchase_cost_center_id' => false,
        'purchase_cost_center_number' => false,
        'quantity_conversions' => false,
        'rating_id' => false,
        'rating_name' => false,
        'record_item_group_name' => false,
        'safety_stock_days' => false,
        'sales_bill_of_material_items' => false,
        'sales_cost_center_id' => false,
        'sales_cost_center_number' => false,
        'sell_by_date' => false,
        'sell_from_date' => false,
        'serial_number_required' => false,
        'show_on_delivery_note' => false,
        'status_id' => false,
        'supply_sources' => false,
        'support_until_date' => false,
        'system_code' => false,
        'tags' => false,
        'target_stock_quantity' => false,
        'use_available_for_sales_channels' => false,
        'use_sales_bill_of_material_item_prices' => false,
        'use_sales_bill_of_material_item_prices_for_purchase' => false,
        'use_sales_bill_of_material_subitem_costs' => false
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
        'article_number' => 'articleNumber',
        'description' => 'description',
        'ean' => 'ean',
        'fixed_purchase_quantity' => 'fixedPurchaseQuantity',
        'internal_note' => 'internalNote',
        'manufacturer_part_number' => 'manufacturerPartNumber',
        'match_code' => 'matchCode',
        'minimum_purchase_quantity' => 'minimumPurchaseQuantity',
        'name' => 'name',
        'short_description1' => 'shortDescription1',
        'short_description2' => 'shortDescription2',
        'tax_rate_type' => 'taxRateType',
        'unit_id' => 'unitId',
        'unit_name' => 'unitName',
        'account_id' => 'accountId',
        'account_number' => 'accountNumber',
        'accounting_code_id' => 'accountingCodeId',
        'active' => 'active',
        'apply_cash_discount' => 'applyCashDiscount',
        'article_alternative_quantities' => 'articleAlternativeQuantities',
        'article_calculation_prices' => 'articleCalculationPrices',
        'article_category_id' => 'articleCategoryId',
        'article_gross_weight' => 'articleGrossWeight',
        'article_height' => 'articleHeight',
        'article_images' => 'articleImages',
        'article_length' => 'articleLength',
        'article_net_weight' => 'articleNetWeight',
        'article_prices' => 'articlePrices',
        'article_type' => 'articleType',
        'article_width' => 'articleWidth',
        'available_for_sales_channels' => 'availableForSalesChannels',
        'available_in_sale' => 'availableInSale',
        'average_delivery_time' => 'averageDeliveryTime',
        'barcode' => 'barcode',
        'batch_number_required' => 'batchNumberRequired',
        'bill_of_material_part_delivery_possible' => 'billOfMaterialPartDeliveryPossible',
        'catalog_code' => 'catalogCode',
        'commission_rate' => 'commissionRate',
        'contract_billing_cycle' => 'contractBillingCycle',
        'contract_billing_mode' => 'contractBillingMode',
        'country_of_origin_code' => 'countryOfOriginCode',
        'customer_article_numbers' => 'customerArticleNumbers',
        'customs_description' => 'customsDescription',
        'customs_tariff_number' => 'customsTariffNumber',
        'customs_tariff_number_id' => 'customsTariffNumberId',
        'default_loading_equipment_identifier_id' => 'defaultLoadingEquipmentIdentifierId',
        'default_price_calculation_type' => 'defaultPriceCalculationType',
        'default_storage_places' => 'defaultStoragePlaces',
        'define_individual_task_templates' => 'defineIndividualTaskTemplates',
        'expense_account_id' => 'expenseAccountId',
        'expense_account_number' => 'expenseAccountNumber',
        'expiration_days' => 'expirationDays',
        'invoicing_type' => 'invoicingType',
        'launch_date' => 'launchDate',
        'loading_equipment_article_id' => 'loadingEquipmentArticleId',
        'long_text' => 'longText',
        'low_level_code' => 'lowLevelCode',
        'manufacturer_id' => 'manufacturerId',
        'manufacturer_name' => 'manufacturerName',
        'margin_calculation_price_type' => 'marginCalculationPriceType',
        'minimum_stock_quantity' => 'minimumStockQuantity',
        'packaging_quantity' => 'packagingQuantity',
        'packaging_unit_base_article_id' => 'packagingUnitBaseArticleId',
        'packaging_unit_parent_article_id' => 'packagingUnitParentArticleId',
        'planned_working_time_per_unit' => 'plannedWorkingTimePerUnit',
        'price_calculation_parameters' => 'priceCalculationParameters',
        'primary_supply_source_id' => 'primarySupplySourceId',
        'procurement_lead_days' => 'procurementLeadDays',
        'producer_type' => 'producerType',
        'production_article' => 'productionArticle',
        'production_bill_of_material_items' => 'productionBillOfMaterialItems',
        'production_configuration_rule' => 'productionConfigurationRule',
        'purchase_cost_center_id' => 'purchaseCostCenterId',
        'purchase_cost_center_number' => 'purchaseCostCenterNumber',
        'quantity_conversions' => 'quantityConversions',
        'rating_id' => 'ratingId',
        'rating_name' => 'ratingName',
        'record_item_group_name' => 'recordItemGroupName',
        'safety_stock_days' => 'safetyStockDays',
        'sales_bill_of_material_items' => 'salesBillOfMaterialItems',
        'sales_cost_center_id' => 'salesCostCenterId',
        'sales_cost_center_number' => 'salesCostCenterNumber',
        'sell_by_date' => 'sellByDate',
        'sell_from_date' => 'sellFromDate',
        'serial_number_required' => 'serialNumberRequired',
        'show_on_delivery_note' => 'showOnDeliveryNote',
        'status_id' => 'statusId',
        'supply_sources' => 'supplySources',
        'support_until_date' => 'supportUntilDate',
        'system_code' => 'systemCode',
        'tags' => 'tags',
        'target_stock_quantity' => 'targetStockQuantity',
        'use_available_for_sales_channels' => 'useAvailableForSalesChannels',
        'use_sales_bill_of_material_item_prices' => 'useSalesBillOfMaterialItemPrices',
        'use_sales_bill_of_material_item_prices_for_purchase' => 'useSalesBillOfMaterialItemPricesForPurchase',
        'use_sales_bill_of_material_subitem_costs' => 'useSalesBillOfMaterialSubitemCosts'
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
        'article_number' => 'setArticleNumber',
        'description' => 'setDescription',
        'ean' => 'setEan',
        'fixed_purchase_quantity' => 'setFixedPurchaseQuantity',
        'internal_note' => 'setInternalNote',
        'manufacturer_part_number' => 'setManufacturerPartNumber',
        'match_code' => 'setMatchCode',
        'minimum_purchase_quantity' => 'setMinimumPurchaseQuantity',
        'name' => 'setName',
        'short_description1' => 'setShortDescription1',
        'short_description2' => 'setShortDescription2',
        'tax_rate_type' => 'setTaxRateType',
        'unit_id' => 'setUnitId',
        'unit_name' => 'setUnitName',
        'account_id' => 'setAccountId',
        'account_number' => 'setAccountNumber',
        'accounting_code_id' => 'setAccountingCodeId',
        'active' => 'setActive',
        'apply_cash_discount' => 'setApplyCashDiscount',
        'article_alternative_quantities' => 'setArticleAlternativeQuantities',
        'article_calculation_prices' => 'setArticleCalculationPrices',
        'article_category_id' => 'setArticleCategoryId',
        'article_gross_weight' => 'setArticleGrossWeight',
        'article_height' => 'setArticleHeight',
        'article_images' => 'setArticleImages',
        'article_length' => 'setArticleLength',
        'article_net_weight' => 'setArticleNetWeight',
        'article_prices' => 'setArticlePrices',
        'article_type' => 'setArticleType',
        'article_width' => 'setArticleWidth',
        'available_for_sales_channels' => 'setAvailableForSalesChannels',
        'available_in_sale' => 'setAvailableInSale',
        'average_delivery_time' => 'setAverageDeliveryTime',
        'barcode' => 'setBarcode',
        'batch_number_required' => 'setBatchNumberRequired',
        'bill_of_material_part_delivery_possible' => 'setBillOfMaterialPartDeliveryPossible',
        'catalog_code' => 'setCatalogCode',
        'commission_rate' => 'setCommissionRate',
        'contract_billing_cycle' => 'setContractBillingCycle',
        'contract_billing_mode' => 'setContractBillingMode',
        'country_of_origin_code' => 'setCountryOfOriginCode',
        'customer_article_numbers' => 'setCustomerArticleNumbers',
        'customs_description' => 'setCustomsDescription',
        'customs_tariff_number' => 'setCustomsTariffNumber',
        'customs_tariff_number_id' => 'setCustomsTariffNumberId',
        'default_loading_equipment_identifier_id' => 'setDefaultLoadingEquipmentIdentifierId',
        'default_price_calculation_type' => 'setDefaultPriceCalculationType',
        'default_storage_places' => 'setDefaultStoragePlaces',
        'define_individual_task_templates' => 'setDefineIndividualTaskTemplates',
        'expense_account_id' => 'setExpenseAccountId',
        'expense_account_number' => 'setExpenseAccountNumber',
        'expiration_days' => 'setExpirationDays',
        'invoicing_type' => 'setInvoicingType',
        'launch_date' => 'setLaunchDate',
        'loading_equipment_article_id' => 'setLoadingEquipmentArticleId',
        'long_text' => 'setLongText',
        'low_level_code' => 'setLowLevelCode',
        'manufacturer_id' => 'setManufacturerId',
        'manufacturer_name' => 'setManufacturerName',
        'margin_calculation_price_type' => 'setMarginCalculationPriceType',
        'minimum_stock_quantity' => 'setMinimumStockQuantity',
        'packaging_quantity' => 'setPackagingQuantity',
        'packaging_unit_base_article_id' => 'setPackagingUnitBaseArticleId',
        'packaging_unit_parent_article_id' => 'setPackagingUnitParentArticleId',
        'planned_working_time_per_unit' => 'setPlannedWorkingTimePerUnit',
        'price_calculation_parameters' => 'setPriceCalculationParameters',
        'primary_supply_source_id' => 'setPrimarySupplySourceId',
        'procurement_lead_days' => 'setProcurementLeadDays',
        'producer_type' => 'setProducerType',
        'production_article' => 'setProductionArticle',
        'production_bill_of_material_items' => 'setProductionBillOfMaterialItems',
        'production_configuration_rule' => 'setProductionConfigurationRule',
        'purchase_cost_center_id' => 'setPurchaseCostCenterId',
        'purchase_cost_center_number' => 'setPurchaseCostCenterNumber',
        'quantity_conversions' => 'setQuantityConversions',
        'rating_id' => 'setRatingId',
        'rating_name' => 'setRatingName',
        'record_item_group_name' => 'setRecordItemGroupName',
        'safety_stock_days' => 'setSafetyStockDays',
        'sales_bill_of_material_items' => 'setSalesBillOfMaterialItems',
        'sales_cost_center_id' => 'setSalesCostCenterId',
        'sales_cost_center_number' => 'setSalesCostCenterNumber',
        'sell_by_date' => 'setSellByDate',
        'sell_from_date' => 'setSellFromDate',
        'serial_number_required' => 'setSerialNumberRequired',
        'show_on_delivery_note' => 'setShowOnDeliveryNote',
        'status_id' => 'setStatusId',
        'supply_sources' => 'setSupplySources',
        'support_until_date' => 'setSupportUntilDate',
        'system_code' => 'setSystemCode',
        'tags' => 'setTags',
        'target_stock_quantity' => 'setTargetStockQuantity',
        'use_available_for_sales_channels' => 'setUseAvailableForSalesChannels',
        'use_sales_bill_of_material_item_prices' => 'setUseSalesBillOfMaterialItemPrices',
        'use_sales_bill_of_material_item_prices_for_purchase' => 'setUseSalesBillOfMaterialItemPricesForPurchase',
        'use_sales_bill_of_material_subitem_costs' => 'setUseSalesBillOfMaterialSubitemCosts'
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
        'article_number' => 'getArticleNumber',
        'description' => 'getDescription',
        'ean' => 'getEan',
        'fixed_purchase_quantity' => 'getFixedPurchaseQuantity',
        'internal_note' => 'getInternalNote',
        'manufacturer_part_number' => 'getManufacturerPartNumber',
        'match_code' => 'getMatchCode',
        'minimum_purchase_quantity' => 'getMinimumPurchaseQuantity',
        'name' => 'getName',
        'short_description1' => 'getShortDescription1',
        'short_description2' => 'getShortDescription2',
        'tax_rate_type' => 'getTaxRateType',
        'unit_id' => 'getUnitId',
        'unit_name' => 'getUnitName',
        'account_id' => 'getAccountId',
        'account_number' => 'getAccountNumber',
        'accounting_code_id' => 'getAccountingCodeId',
        'active' => 'getActive',
        'apply_cash_discount' => 'getApplyCashDiscount',
        'article_alternative_quantities' => 'getArticleAlternativeQuantities',
        'article_calculation_prices' => 'getArticleCalculationPrices',
        'article_category_id' => 'getArticleCategoryId',
        'article_gross_weight' => 'getArticleGrossWeight',
        'article_height' => 'getArticleHeight',
        'article_images' => 'getArticleImages',
        'article_length' => 'getArticleLength',
        'article_net_weight' => 'getArticleNetWeight',
        'article_prices' => 'getArticlePrices',
        'article_type' => 'getArticleType',
        'article_width' => 'getArticleWidth',
        'available_for_sales_channels' => 'getAvailableForSalesChannels',
        'available_in_sale' => 'getAvailableInSale',
        'average_delivery_time' => 'getAverageDeliveryTime',
        'barcode' => 'getBarcode',
        'batch_number_required' => 'getBatchNumberRequired',
        'bill_of_material_part_delivery_possible' => 'getBillOfMaterialPartDeliveryPossible',
        'catalog_code' => 'getCatalogCode',
        'commission_rate' => 'getCommissionRate',
        'contract_billing_cycle' => 'getContractBillingCycle',
        'contract_billing_mode' => 'getContractBillingMode',
        'country_of_origin_code' => 'getCountryOfOriginCode',
        'customer_article_numbers' => 'getCustomerArticleNumbers',
        'customs_description' => 'getCustomsDescription',
        'customs_tariff_number' => 'getCustomsTariffNumber',
        'customs_tariff_number_id' => 'getCustomsTariffNumberId',
        'default_loading_equipment_identifier_id' => 'getDefaultLoadingEquipmentIdentifierId',
        'default_price_calculation_type' => 'getDefaultPriceCalculationType',
        'default_storage_places' => 'getDefaultStoragePlaces',
        'define_individual_task_templates' => 'getDefineIndividualTaskTemplates',
        'expense_account_id' => 'getExpenseAccountId',
        'expense_account_number' => 'getExpenseAccountNumber',
        'expiration_days' => 'getExpirationDays',
        'invoicing_type' => 'getInvoicingType',
        'launch_date' => 'getLaunchDate',
        'loading_equipment_article_id' => 'getLoadingEquipmentArticleId',
        'long_text' => 'getLongText',
        'low_level_code' => 'getLowLevelCode',
        'manufacturer_id' => 'getManufacturerId',
        'manufacturer_name' => 'getManufacturerName',
        'margin_calculation_price_type' => 'getMarginCalculationPriceType',
        'minimum_stock_quantity' => 'getMinimumStockQuantity',
        'packaging_quantity' => 'getPackagingQuantity',
        'packaging_unit_base_article_id' => 'getPackagingUnitBaseArticleId',
        'packaging_unit_parent_article_id' => 'getPackagingUnitParentArticleId',
        'planned_working_time_per_unit' => 'getPlannedWorkingTimePerUnit',
        'price_calculation_parameters' => 'getPriceCalculationParameters',
        'primary_supply_source_id' => 'getPrimarySupplySourceId',
        'procurement_lead_days' => 'getProcurementLeadDays',
        'producer_type' => 'getProducerType',
        'production_article' => 'getProductionArticle',
        'production_bill_of_material_items' => 'getProductionBillOfMaterialItems',
        'production_configuration_rule' => 'getProductionConfigurationRule',
        'purchase_cost_center_id' => 'getPurchaseCostCenterId',
        'purchase_cost_center_number' => 'getPurchaseCostCenterNumber',
        'quantity_conversions' => 'getQuantityConversions',
        'rating_id' => 'getRatingId',
        'rating_name' => 'getRatingName',
        'record_item_group_name' => 'getRecordItemGroupName',
        'safety_stock_days' => 'getSafetyStockDays',
        'sales_bill_of_material_items' => 'getSalesBillOfMaterialItems',
        'sales_cost_center_id' => 'getSalesCostCenterId',
        'sales_cost_center_number' => 'getSalesCostCenterNumber',
        'sell_by_date' => 'getSellByDate',
        'sell_from_date' => 'getSellFromDate',
        'serial_number_required' => 'getSerialNumberRequired',
        'show_on_delivery_note' => 'getShowOnDeliveryNote',
        'status_id' => 'getStatusId',
        'supply_sources' => 'getSupplySources',
        'support_until_date' => 'getSupportUntilDate',
        'system_code' => 'getSystemCode',
        'tags' => 'getTags',
        'target_stock_quantity' => 'getTargetStockQuantity',
        'use_available_for_sales_channels' => 'getUseAvailableForSalesChannels',
        'use_sales_bill_of_material_item_prices' => 'getUseSalesBillOfMaterialItemPrices',
        'use_sales_bill_of_material_item_prices_for_purchase' => 'getUseSalesBillOfMaterialItemPricesForPurchase',
        'use_sales_bill_of_material_subitem_costs' => 'getUseSalesBillOfMaterialSubitemCosts'
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
        $this->setIfExists('article_number', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('fixed_purchase_quantity', $data ?? [], null);
        $this->setIfExists('internal_note', $data ?? [], null);
        $this->setIfExists('manufacturer_part_number', $data ?? [], null);
        $this->setIfExists('match_code', $data ?? [], null);
        $this->setIfExists('minimum_purchase_quantity', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('short_description1', $data ?? [], null);
        $this->setIfExists('short_description2', $data ?? [], null);
        $this->setIfExists('tax_rate_type', $data ?? [], null);
        $this->setIfExists('unit_id', $data ?? [], null);
        $this->setIfExists('unit_name', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('account_number', $data ?? [], null);
        $this->setIfExists('accounting_code_id', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('apply_cash_discount', $data ?? [], null);
        $this->setIfExists('article_alternative_quantities', $data ?? [], null);
        $this->setIfExists('article_calculation_prices', $data ?? [], null);
        $this->setIfExists('article_category_id', $data ?? [], null);
        $this->setIfExists('article_gross_weight', $data ?? [], null);
        $this->setIfExists('article_height', $data ?? [], null);
        $this->setIfExists('article_images', $data ?? [], null);
        $this->setIfExists('article_length', $data ?? [], null);
        $this->setIfExists('article_net_weight', $data ?? [], null);
        $this->setIfExists('article_prices', $data ?? [], null);
        $this->setIfExists('article_type', $data ?? [], null);
        $this->setIfExists('article_width', $data ?? [], null);
        $this->setIfExists('available_for_sales_channels', $data ?? [], null);
        $this->setIfExists('available_in_sale', $data ?? [], null);
        $this->setIfExists('average_delivery_time', $data ?? [], null);
        $this->setIfExists('barcode', $data ?? [], null);
        $this->setIfExists('batch_number_required', $data ?? [], null);
        $this->setIfExists('bill_of_material_part_delivery_possible', $data ?? [], null);
        $this->setIfExists('catalog_code', $data ?? [], null);
        $this->setIfExists('commission_rate', $data ?? [], null);
        $this->setIfExists('contract_billing_cycle', $data ?? [], null);
        $this->setIfExists('contract_billing_mode', $data ?? [], null);
        $this->setIfExists('country_of_origin_code', $data ?? [], null);
        $this->setIfExists('customer_article_numbers', $data ?? [], null);
        $this->setIfExists('customs_description', $data ?? [], null);
        $this->setIfExists('customs_tariff_number', $data ?? [], null);
        $this->setIfExists('customs_tariff_number_id', $data ?? [], null);
        $this->setIfExists('default_loading_equipment_identifier_id', $data ?? [], null);
        $this->setIfExists('default_price_calculation_type', $data ?? [], null);
        $this->setIfExists('default_storage_places', $data ?? [], null);
        $this->setIfExists('define_individual_task_templates', $data ?? [], null);
        $this->setIfExists('expense_account_id', $data ?? [], null);
        $this->setIfExists('expense_account_number', $data ?? [], null);
        $this->setIfExists('expiration_days', $data ?? [], null);
        $this->setIfExists('invoicing_type', $data ?? [], null);
        $this->setIfExists('launch_date', $data ?? [], null);
        $this->setIfExists('loading_equipment_article_id', $data ?? [], null);
        $this->setIfExists('long_text', $data ?? [], null);
        $this->setIfExists('low_level_code', $data ?? [], null);
        $this->setIfExists('manufacturer_id', $data ?? [], null);
        $this->setIfExists('manufacturer_name', $data ?? [], null);
        $this->setIfExists('margin_calculation_price_type', $data ?? [], null);
        $this->setIfExists('minimum_stock_quantity', $data ?? [], null);
        $this->setIfExists('packaging_quantity', $data ?? [], null);
        $this->setIfExists('packaging_unit_base_article_id', $data ?? [], null);
        $this->setIfExists('packaging_unit_parent_article_id', $data ?? [], null);
        $this->setIfExists('planned_working_time_per_unit', $data ?? [], null);
        $this->setIfExists('price_calculation_parameters', $data ?? [], null);
        $this->setIfExists('primary_supply_source_id', $data ?? [], null);
        $this->setIfExists('procurement_lead_days', $data ?? [], null);
        $this->setIfExists('producer_type', $data ?? [], null);
        $this->setIfExists('production_article', $data ?? [], null);
        $this->setIfExists('production_bill_of_material_items', $data ?? [], null);
        $this->setIfExists('production_configuration_rule', $data ?? [], null);
        $this->setIfExists('purchase_cost_center_id', $data ?? [], null);
        $this->setIfExists('purchase_cost_center_number', $data ?? [], null);
        $this->setIfExists('quantity_conversions', $data ?? [], null);
        $this->setIfExists('rating_id', $data ?? [], null);
        $this->setIfExists('rating_name', $data ?? [], null);
        $this->setIfExists('record_item_group_name', $data ?? [], null);
        $this->setIfExists('safety_stock_days', $data ?? [], null);
        $this->setIfExists('sales_bill_of_material_items', $data ?? [], null);
        $this->setIfExists('sales_cost_center_id', $data ?? [], null);
        $this->setIfExists('sales_cost_center_number', $data ?? [], null);
        $this->setIfExists('sell_by_date', $data ?? [], null);
        $this->setIfExists('sell_from_date', $data ?? [], null);
        $this->setIfExists('serial_number_required', $data ?? [], null);
        $this->setIfExists('show_on_delivery_note', $data ?? [], null);
        $this->setIfExists('status_id', $data ?? [], null);
        $this->setIfExists('supply_sources', $data ?? [], null);
        $this->setIfExists('support_until_date', $data ?? [], null);
        $this->setIfExists('system_code', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('target_stock_quantity', $data ?? [], null);
        $this->setIfExists('use_available_for_sales_channels', $data ?? [], null);
        $this->setIfExists('use_sales_bill_of_material_item_prices', $data ?? [], null);
        $this->setIfExists('use_sales_bill_of_material_item_prices_for_purchase', $data ?? [], null);
        $this->setIfExists('use_sales_bill_of_material_subitem_costs', $data ?? [], null);
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

        if (!is_null($this->container['fixed_purchase_quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['fixed_purchase_quantity'])) {
            $invalidProperties[] = "invalid value for 'fixed_purchase_quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['minimum_purchase_quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['minimum_purchase_quantity'])) {
            $invalidProperties[] = "invalid value for 'minimum_purchase_quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['article_gross_weight']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['article_gross_weight'])) {
            $invalidProperties[] = "invalid value for 'article_gross_weight', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['article_height']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['article_height'])) {
            $invalidProperties[] = "invalid value for 'article_height', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['article_length']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['article_length'])) {
            $invalidProperties[] = "invalid value for 'article_length', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['article_net_weight']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['article_net_weight'])) {
            $invalidProperties[] = "invalid value for 'article_net_weight', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['article_width']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['article_width'])) {
            $invalidProperties[] = "invalid value for 'article_width', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['commission_rate']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['commission_rate'])) {
            $invalidProperties[] = "invalid value for 'commission_rate', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['minimum_stock_quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['minimum_stock_quantity'])) {
            $invalidProperties[] = "invalid value for 'minimum_stock_quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['target_stock_quantity']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['target_stock_quantity'])) {
            $invalidProperties[] = "invalid value for 'target_stock_quantity', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
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
     * Gets article_number
     *
     * @return string|null
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
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean ean
     *
     * @return self
     */
    public function setEan($ean)
    {
        if (is_null($ean)) {
            throw new \InvalidArgumentException('non-nullable ean cannot be null');
        }
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets fixed_purchase_quantity
     *
     * @return float|null
     */
    public function getFixedPurchaseQuantity()
    {
        return $this->container['fixed_purchase_quantity'];
    }

    /**
     * Sets fixed_purchase_quantity
     *
     * @param float|null $fixed_purchase_quantity fixed_purchase_quantity
     *
     * @return self
     */
    public function setFixedPurchaseQuantity($fixed_purchase_quantity)
    {
        if (is_null($fixed_purchase_quantity)) {
            throw new \InvalidArgumentException('non-nullable fixed_purchase_quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($fixed_purchase_quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$fixed_purchase_quantity when calling Article., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['fixed_purchase_quantity'] = $fixed_purchase_quantity;

        return $this;
    }

    /**
     * Gets internal_note
     *
     * @return string|null
     */
    public function getInternalNote()
    {
        return $this->container['internal_note'];
    }

    /**
     * Sets internal_note
     *
     * @param string|null $internal_note internal_note
     *
     * @return self
     */
    public function setInternalNote($internal_note)
    {
        if (is_null($internal_note)) {
            throw new \InvalidArgumentException('non-nullable internal_note cannot be null');
        }
        $this->container['internal_note'] = $internal_note;

        return $this;
    }

    /**
     * Gets manufacturer_part_number
     *
     * @return string|null
     */
    public function getManufacturerPartNumber()
    {
        return $this->container['manufacturer_part_number'];
    }

    /**
     * Sets manufacturer_part_number
     *
     * @param string|null $manufacturer_part_number manufacturer_part_number
     *
     * @return self
     */
    public function setManufacturerPartNumber($manufacturer_part_number)
    {
        if (is_null($manufacturer_part_number)) {
            throw new \InvalidArgumentException('non-nullable manufacturer_part_number cannot be null');
        }
        $this->container['manufacturer_part_number'] = $manufacturer_part_number;

        return $this;
    }

    /**
     * Gets match_code
     *
     * @return string|null
     */
    public function getMatchCode()
    {
        return $this->container['match_code'];
    }

    /**
     * Sets match_code
     *
     * @param string|null $match_code match_code
     *
     * @return self
     */
    public function setMatchCode($match_code)
    {
        if (is_null($match_code)) {
            throw new \InvalidArgumentException('non-nullable match_code cannot be null');
        }
        $this->container['match_code'] = $match_code;

        return $this;
    }

    /**
     * Gets minimum_purchase_quantity
     *
     * @return float|null
     */
    public function getMinimumPurchaseQuantity()
    {
        return $this->container['minimum_purchase_quantity'];
    }

    /**
     * Sets minimum_purchase_quantity
     *
     * @param float|null $minimum_purchase_quantity minimum_purchase_quantity
     *
     * @return self
     */
    public function setMinimumPurchaseQuantity($minimum_purchase_quantity)
    {
        if (is_null($minimum_purchase_quantity)) {
            throw new \InvalidArgumentException('non-nullable minimum_purchase_quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($minimum_purchase_quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$minimum_purchase_quantity when calling Article., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['minimum_purchase_quantity'] = $minimum_purchase_quantity;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets short_description1
     *
     * @return string|null
     */
    public function getShortDescription1()
    {
        return $this->container['short_description1'];
    }

    /**
     * Sets short_description1
     *
     * @param string|null $short_description1 short_description1
     *
     * @return self
     */
    public function setShortDescription1($short_description1)
    {
        if (is_null($short_description1)) {
            throw new \InvalidArgumentException('non-nullable short_description1 cannot be null');
        }
        $this->container['short_description1'] = $short_description1;

        return $this;
    }

    /**
     * Gets short_description2
     *
     * @return string|null
     */
    public function getShortDescription2()
    {
        return $this->container['short_description2'];
    }

    /**
     * Sets short_description2
     *
     * @param string|null $short_description2 short_description2
     *
     * @return self
     */
    public function setShortDescription2($short_description2)
    {
        if (is_null($short_description2)) {
            throw new \InvalidArgumentException('non-nullable short_description2 cannot be null');
        }
        $this->container['short_description2'] = $short_description2;

        return $this;
    }

    /**
     * Gets tax_rate_type
     *
     * @return \kruegge82\weclapp\Model\TaxRateType|null
     */
    public function getTaxRateType()
    {
        return $this->container['tax_rate_type'];
    }

    /**
     * Sets tax_rate_type
     *
     * @param \kruegge82\weclapp\Model\TaxRateType|null $tax_rate_type tax_rate_type
     *
     * @return self
     */
    public function setTaxRateType($tax_rate_type)
    {
        if (is_null($tax_rate_type)) {
            throw new \InvalidArgumentException('non-nullable tax_rate_type cannot be null');
        }
        $this->container['tax_rate_type'] = $tax_rate_type;

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
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id account_id
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     * @deprecated
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number account_number
     *
     * @return self
     * @deprecated
     */
    public function setAccountNumber($account_number)
    {
        if (is_null($account_number)) {
            throw new \InvalidArgumentException('non-nullable account_number cannot be null');
        }
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets accounting_code_id
     *
     * @return string|null
     */
    public function getAccountingCodeId()
    {
        return $this->container['accounting_code_id'];
    }

    /**
     * Sets accounting_code_id
     *
     * @param string|null $accounting_code_id accounting_code_id
     *
     * @return self
     */
    public function setAccountingCodeId($accounting_code_id)
    {
        if (is_null($accounting_code_id)) {
            throw new \InvalidArgumentException('non-nullable accounting_code_id cannot be null');
        }
        $this->container['accounting_code_id'] = $accounting_code_id;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets apply_cash_discount
     *
     * @return bool|null
     */
    public function getApplyCashDiscount()
    {
        return $this->container['apply_cash_discount'];
    }

    /**
     * Sets apply_cash_discount
     *
     * @param bool|null $apply_cash_discount apply_cash_discount
     *
     * @return self
     */
    public function setApplyCashDiscount($apply_cash_discount)
    {
        if (is_null($apply_cash_discount)) {
            throw new \InvalidArgumentException('non-nullable apply_cash_discount cannot be null');
        }
        $this->container['apply_cash_discount'] = $apply_cash_discount;

        return $this;
    }

    /**
     * Gets article_alternative_quantities
     *
     * @return \kruegge82\weclapp\Model\ArticleAlternativeQuantity[]|null
     */
    public function getArticleAlternativeQuantities()
    {
        return $this->container['article_alternative_quantities'];
    }

    /**
     * Sets article_alternative_quantities
     *
     * @param \kruegge82\weclapp\Model\ArticleAlternativeQuantity[]|null $article_alternative_quantities article_alternative_quantities
     *
     * @return self
     */
    public function setArticleAlternativeQuantities($article_alternative_quantities)
    {
        if (is_null($article_alternative_quantities)) {
            throw new \InvalidArgumentException('non-nullable article_alternative_quantities cannot be null');
        }
        $this->container['article_alternative_quantities'] = $article_alternative_quantities;

        return $this;
    }

    /**
     * Gets article_calculation_prices
     *
     * @return \kruegge82\weclapp\Model\ArticleCalculationPrice[]|null
     */
    public function getArticleCalculationPrices()
    {
        return $this->container['article_calculation_prices'];
    }

    /**
     * Sets article_calculation_prices
     *
     * @param \kruegge82\weclapp\Model\ArticleCalculationPrice[]|null $article_calculation_prices article_calculation_prices
     *
     * @return self
     */
    public function setArticleCalculationPrices($article_calculation_prices)
    {
        if (is_null($article_calculation_prices)) {
            throw new \InvalidArgumentException('non-nullable article_calculation_prices cannot be null');
        }
        $this->container['article_calculation_prices'] = $article_calculation_prices;

        return $this;
    }

    /**
     * Gets article_category_id
     *
     * @return string|null
     */
    public function getArticleCategoryId()
    {
        return $this->container['article_category_id'];
    }

    /**
     * Sets article_category_id
     *
     * @param string|null $article_category_id article_category_id
     *
     * @return self
     */
    public function setArticleCategoryId($article_category_id)
    {
        if (is_null($article_category_id)) {
            throw new \InvalidArgumentException('non-nullable article_category_id cannot be null');
        }
        $this->container['article_category_id'] = $article_category_id;

        return $this;
    }

    /**
     * Gets article_gross_weight
     *
     * @return float|null
     */
    public function getArticleGrossWeight()
    {
        return $this->container['article_gross_weight'];
    }

    /**
     * Sets article_gross_weight
     *
     * @param float|null $article_gross_weight article_gross_weight
     *
     * @return self
     */
    public function setArticleGrossWeight($article_gross_weight)
    {
        if (is_null($article_gross_weight)) {
            throw new \InvalidArgumentException('non-nullable article_gross_weight cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($article_gross_weight)))) {
            throw new \InvalidArgumentException("invalid value for \$article_gross_weight when calling Article., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['article_gross_weight'] = $article_gross_weight;

        return $this;
    }

    /**
     * Gets article_height
     *
     * @return float|null
     */
    public function getArticleHeight()
    {
        return $this->container['article_height'];
    }

    /**
     * Sets article_height
     *
     * @param float|null $article_height article_height
     *
     * @return self
     */
    public function setArticleHeight($article_height)
    {
        if (is_null($article_height)) {
            throw new \InvalidArgumentException('non-nullable article_height cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($article_height)))) {
            throw new \InvalidArgumentException("invalid value for \$article_height when calling Article., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['article_height'] = $article_height;

        return $this;
    }

    /**
     * Gets article_images
     *
     * @return \kruegge82\weclapp\Model\ArticleImage[]|null
     */
    public function getArticleImages()
    {
        return $this->container['article_images'];
    }

    /**
     * Sets article_images
     *
     * @param \kruegge82\weclapp\Model\ArticleImage[]|null $article_images article_images
     *
     * @return self
     */
    public function setArticleImages($article_images)
    {
        if (is_null($article_images)) {
            throw new \InvalidArgumentException('non-nullable article_images cannot be null');
        }
        $this->container['article_images'] = $article_images;

        return $this;
    }

    /**
     * Gets article_length
     *
     * @return float|null
     */
    public function getArticleLength()
    {
        return $this->container['article_length'];
    }

    /**
     * Sets article_length
     *
     * @param float|null $article_length article_length
     *
     * @return self
     */
    public function setArticleLength($article_length)
    {
        if (is_null($article_length)) {
            throw new \InvalidArgumentException('non-nullable article_length cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($article_length)))) {
            throw new \InvalidArgumentException("invalid value for \$article_length when calling Article., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['article_length'] = $article_length;

        return $this;
    }

    /**
     * Gets article_net_weight
     *
     * @return float|null
     */
    public function getArticleNetWeight()
    {
        return $this->container['article_net_weight'];
    }

    /**
     * Sets article_net_weight
     *
     * @param float|null $article_net_weight article_net_weight
     *
     * @return self
     */
    public function setArticleNetWeight($article_net_weight)
    {
        if (is_null($article_net_weight)) {
            throw new \InvalidArgumentException('non-nullable article_net_weight cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($article_net_weight)))) {
            throw new \InvalidArgumentException("invalid value for \$article_net_weight when calling Article., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['article_net_weight'] = $article_net_weight;

        return $this;
    }

    /**
     * Gets article_prices
     *
     * @return \kruegge82\weclapp\Model\ArticlePriceWithoutArticleReference[]|null
     */
    public function getArticlePrices()
    {
        return $this->container['article_prices'];
    }

    /**
     * Sets article_prices
     *
     * @param \kruegge82\weclapp\Model\ArticlePriceWithoutArticleReference[]|null $article_prices article_prices
     *
     * @return self
     */
    public function setArticlePrices($article_prices)
    {
        if (is_null($article_prices)) {
            throw new \InvalidArgumentException('non-nullable article_prices cannot be null');
        }
        $this->container['article_prices'] = $article_prices;

        return $this;
    }

    /**
     * Gets article_type
     *
     * @return \kruegge82\weclapp\Model\ArticleType|null
     */
    public function getArticleType()
    {
        return $this->container['article_type'];
    }

    /**
     * Sets article_type
     *
     * @param \kruegge82\weclapp\Model\ArticleType|null $article_type article_type
     *
     * @return self
     */
    public function setArticleType($article_type)
    {
        if (is_null($article_type)) {
            throw new \InvalidArgumentException('non-nullable article_type cannot be null');
        }
        $this->container['article_type'] = $article_type;

        return $this;
    }

    /**
     * Gets article_width
     *
     * @return float|null
     */
    public function getArticleWidth()
    {
        return $this->container['article_width'];
    }

    /**
     * Sets article_width
     *
     * @param float|null $article_width article_width
     *
     * @return self
     */
    public function setArticleWidth($article_width)
    {
        if (is_null($article_width)) {
            throw new \InvalidArgumentException('non-nullable article_width cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($article_width)))) {
            throw new \InvalidArgumentException("invalid value for \$article_width when calling Article., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['article_width'] = $article_width;

        return $this;
    }

    /**
     * Gets available_for_sales_channels
     *
     * @return \kruegge82\weclapp\Model\DistributionChannel[]|null
     */
    public function getAvailableForSalesChannels()
    {
        return $this->container['available_for_sales_channels'];
    }

    /**
     * Sets available_for_sales_channels
     *
     * @param \kruegge82\weclapp\Model\DistributionChannel[]|null $available_for_sales_channels available_for_sales_channels
     *
     * @return self
     */
    public function setAvailableForSalesChannels($available_for_sales_channels)
    {
        if (is_null($available_for_sales_channels)) {
            throw new \InvalidArgumentException('non-nullable available_for_sales_channels cannot be null');
        }
        $this->container['available_for_sales_channels'] = $available_for_sales_channels;

        return $this;
    }

    /**
     * Gets available_in_sale
     *
     * @return bool|null
     */
    public function getAvailableInSale()
    {
        return $this->container['available_in_sale'];
    }

    /**
     * Sets available_in_sale
     *
     * @param bool|null $available_in_sale available_in_sale
     *
     * @return self
     */
    public function setAvailableInSale($available_in_sale)
    {
        if (is_null($available_in_sale)) {
            throw new \InvalidArgumentException('non-nullable available_in_sale cannot be null');
        }
        $this->container['available_in_sale'] = $available_in_sale;

        return $this;
    }

    /**
     * Gets average_delivery_time
     *
     * @return int|null
     */
    public function getAverageDeliveryTime()
    {
        return $this->container['average_delivery_time'];
    }

    /**
     * Sets average_delivery_time
     *
     * @param int|null $average_delivery_time average_delivery_time
     *
     * @return self
     */
    public function setAverageDeliveryTime($average_delivery_time)
    {
        if (is_null($average_delivery_time)) {
            throw new \InvalidArgumentException('non-nullable average_delivery_time cannot be null');
        }
        $this->container['average_delivery_time'] = $average_delivery_time;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string|null $barcode barcode
     *
     * @return self
     */
    public function setBarcode($barcode)
    {
        if (is_null($barcode)) {
            throw new \InvalidArgumentException('non-nullable barcode cannot be null');
        }
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets batch_number_required
     *
     * @return bool|null
     */
    public function getBatchNumberRequired()
    {
        return $this->container['batch_number_required'];
    }

    /**
     * Sets batch_number_required
     *
     * @param bool|null $batch_number_required batch_number_required
     *
     * @return self
     */
    public function setBatchNumberRequired($batch_number_required)
    {
        if (is_null($batch_number_required)) {
            throw new \InvalidArgumentException('non-nullable batch_number_required cannot be null');
        }
        $this->container['batch_number_required'] = $batch_number_required;

        return $this;
    }

    /**
     * Gets bill_of_material_part_delivery_possible
     *
     * @return bool|null
     */
    public function getBillOfMaterialPartDeliveryPossible()
    {
        return $this->container['bill_of_material_part_delivery_possible'];
    }

    /**
     * Sets bill_of_material_part_delivery_possible
     *
     * @param bool|null $bill_of_material_part_delivery_possible bill_of_material_part_delivery_possible
     *
     * @return self
     */
    public function setBillOfMaterialPartDeliveryPossible($bill_of_material_part_delivery_possible)
    {
        if (is_null($bill_of_material_part_delivery_possible)) {
            throw new \InvalidArgumentException('non-nullable bill_of_material_part_delivery_possible cannot be null');
        }
        $this->container['bill_of_material_part_delivery_possible'] = $bill_of_material_part_delivery_possible;

        return $this;
    }

    /**
     * Gets catalog_code
     *
     * @return string|null
     */
    public function getCatalogCode()
    {
        return $this->container['catalog_code'];
    }

    /**
     * Sets catalog_code
     *
     * @param string|null $catalog_code catalog_code
     *
     * @return self
     */
    public function setCatalogCode($catalog_code)
    {
        if (is_null($catalog_code)) {
            throw new \InvalidArgumentException('non-nullable catalog_code cannot be null');
        }
        $this->container['catalog_code'] = $catalog_code;

        return $this;
    }

    /**
     * Gets commission_rate
     *
     * @return float|null
     */
    public function getCommissionRate()
    {
        return $this->container['commission_rate'];
    }

    /**
     * Sets commission_rate
     *
     * @param float|null $commission_rate commission_rate
     *
     * @return self
     */
    public function setCommissionRate($commission_rate)
    {
        if (is_null($commission_rate)) {
            throw new \InvalidArgumentException('non-nullable commission_rate cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($commission_rate)))) {
            throw new \InvalidArgumentException("invalid value for \$commission_rate when calling Article., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['commission_rate'] = $commission_rate;

        return $this;
    }

    /**
     * Gets contract_billing_cycle
     *
     * @return \kruegge82\weclapp\Model\ContractChargeInterval|null
     */
    public function getContractBillingCycle()
    {
        return $this->container['contract_billing_cycle'];
    }

    /**
     * Sets contract_billing_cycle
     *
     * @param \kruegge82\weclapp\Model\ContractChargeInterval|null $contract_billing_cycle contract_billing_cycle
     *
     * @return self
     */
    public function setContractBillingCycle($contract_billing_cycle)
    {
        if (is_null($contract_billing_cycle)) {
            throw new \InvalidArgumentException('non-nullable contract_billing_cycle cannot be null');
        }
        $this->container['contract_billing_cycle'] = $contract_billing_cycle;

        return $this;
    }

    /**
     * Gets contract_billing_mode
     *
     * @return \kruegge82\weclapp\Model\ContractChargeIntervalType|null
     */
    public function getContractBillingMode()
    {
        return $this->container['contract_billing_mode'];
    }

    /**
     * Sets contract_billing_mode
     *
     * @param \kruegge82\weclapp\Model\ContractChargeIntervalType|null $contract_billing_mode contract_billing_mode
     *
     * @return self
     */
    public function setContractBillingMode($contract_billing_mode)
    {
        if (is_null($contract_billing_mode)) {
            throw new \InvalidArgumentException('non-nullable contract_billing_mode cannot be null');
        }
        $this->container['contract_billing_mode'] = $contract_billing_mode;

        return $this;
    }

    /**
     * Gets country_of_origin_code
     *
     * @return string|null
     */
    public function getCountryOfOriginCode()
    {
        return $this->container['country_of_origin_code'];
    }

    /**
     * Sets country_of_origin_code
     *
     * @param string|null $country_of_origin_code country_of_origin_code
     *
     * @return self
     */
    public function setCountryOfOriginCode($country_of_origin_code)
    {
        if (is_null($country_of_origin_code)) {
            throw new \InvalidArgumentException('non-nullable country_of_origin_code cannot be null');
        }
        $this->container['country_of_origin_code'] = $country_of_origin_code;

        return $this;
    }

    /**
     * Gets customer_article_numbers
     *
     * @return \kruegge82\weclapp\Model\CustomerSpecificArticleAttributes[]|null
     */
    public function getCustomerArticleNumbers()
    {
        return $this->container['customer_article_numbers'];
    }

    /**
     * Sets customer_article_numbers
     *
     * @param \kruegge82\weclapp\Model\CustomerSpecificArticleAttributes[]|null $customer_article_numbers customer_article_numbers
     *
     * @return self
     */
    public function setCustomerArticleNumbers($customer_article_numbers)
    {
        if (is_null($customer_article_numbers)) {
            throw new \InvalidArgumentException('non-nullable customer_article_numbers cannot be null');
        }
        $this->container['customer_article_numbers'] = $customer_article_numbers;

        return $this;
    }

    /**
     * Gets customs_description
     *
     * @return string|null
     */
    public function getCustomsDescription()
    {
        return $this->container['customs_description'];
    }

    /**
     * Sets customs_description
     *
     * @param string|null $customs_description customs_description
     *
     * @return self
     */
    public function setCustomsDescription($customs_description)
    {
        if (is_null($customs_description)) {
            throw new \InvalidArgumentException('non-nullable customs_description cannot be null');
        }
        $this->container['customs_description'] = $customs_description;

        return $this;
    }

    /**
     * Gets customs_tariff_number
     *
     * @return string|null
     * @deprecated
     */
    public function getCustomsTariffNumber()
    {
        return $this->container['customs_tariff_number'];
    }

    /**
     * Sets customs_tariff_number
     *
     * @param string|null $customs_tariff_number customs_tariff_number
     *
     * @return self
     * @deprecated
     */
    public function setCustomsTariffNumber($customs_tariff_number)
    {
        if (is_null($customs_tariff_number)) {
            throw new \InvalidArgumentException('non-nullable customs_tariff_number cannot be null');
        }
        $this->container['customs_tariff_number'] = $customs_tariff_number;

        return $this;
    }

    /**
     * Gets customs_tariff_number_id
     *
     * @return string|null
     */
    public function getCustomsTariffNumberId()
    {
        return $this->container['customs_tariff_number_id'];
    }

    /**
     * Sets customs_tariff_number_id
     *
     * @param string|null $customs_tariff_number_id customs_tariff_number_id
     *
     * @return self
     */
    public function setCustomsTariffNumberId($customs_tariff_number_id)
    {
        if (is_null($customs_tariff_number_id)) {
            throw new \InvalidArgumentException('non-nullable customs_tariff_number_id cannot be null');
        }
        $this->container['customs_tariff_number_id'] = $customs_tariff_number_id;

        return $this;
    }

    /**
     * Gets default_loading_equipment_identifier_id
     *
     * @return string|null
     */
    public function getDefaultLoadingEquipmentIdentifierId()
    {
        return $this->container['default_loading_equipment_identifier_id'];
    }

    /**
     * Sets default_loading_equipment_identifier_id
     *
     * @param string|null $default_loading_equipment_identifier_id default_loading_equipment_identifier_id
     *
     * @return self
     */
    public function setDefaultLoadingEquipmentIdentifierId($default_loading_equipment_identifier_id)
    {
        if (is_null($default_loading_equipment_identifier_id)) {
            throw new \InvalidArgumentException('non-nullable default_loading_equipment_identifier_id cannot be null');
        }
        $this->container['default_loading_equipment_identifier_id'] = $default_loading_equipment_identifier_id;

        return $this;
    }

    /**
     * Gets default_price_calculation_type
     *
     * @return \kruegge82\weclapp\Model\CalculationType|null
     */
    public function getDefaultPriceCalculationType()
    {
        return $this->container['default_price_calculation_type'];
    }

    /**
     * Sets default_price_calculation_type
     *
     * @param \kruegge82\weclapp\Model\CalculationType|null $default_price_calculation_type default_price_calculation_type
     *
     * @return self
     */
    public function setDefaultPriceCalculationType($default_price_calculation_type)
    {
        if (is_null($default_price_calculation_type)) {
            throw new \InvalidArgumentException('non-nullable default_price_calculation_type cannot be null');
        }
        $this->container['default_price_calculation_type'] = $default_price_calculation_type;

        return $this;
    }

    /**
     * Gets default_storage_places
     *
     * @return \kruegge82\weclapp\Model\OnlyId[]|null
     */
    public function getDefaultStoragePlaces()
    {
        return $this->container['default_storage_places'];
    }

    /**
     * Sets default_storage_places
     *
     * @param \kruegge82\weclapp\Model\OnlyId[]|null $default_storage_places default_storage_places
     *
     * @return self
     */
    public function setDefaultStoragePlaces($default_storage_places)
    {
        if (is_null($default_storage_places)) {
            throw new \InvalidArgumentException('non-nullable default_storage_places cannot be null');
        }
        $this->container['default_storage_places'] = $default_storage_places;

        return $this;
    }

    /**
     * Gets define_individual_task_templates
     *
     * @return bool|null
     */
    public function getDefineIndividualTaskTemplates()
    {
        return $this->container['define_individual_task_templates'];
    }

    /**
     * Sets define_individual_task_templates
     *
     * @param bool|null $define_individual_task_templates define_individual_task_templates
     *
     * @return self
     */
    public function setDefineIndividualTaskTemplates($define_individual_task_templates)
    {
        if (is_null($define_individual_task_templates)) {
            throw new \InvalidArgumentException('non-nullable define_individual_task_templates cannot be null');
        }
        $this->container['define_individual_task_templates'] = $define_individual_task_templates;

        return $this;
    }

    /**
     * Gets expense_account_id
     *
     * @return string|null
     */
    public function getExpenseAccountId()
    {
        return $this->container['expense_account_id'];
    }

    /**
     * Sets expense_account_id
     *
     * @param string|null $expense_account_id expense_account_id
     *
     * @return self
     */
    public function setExpenseAccountId($expense_account_id)
    {
        if (is_null($expense_account_id)) {
            throw new \InvalidArgumentException('non-nullable expense_account_id cannot be null');
        }
        $this->container['expense_account_id'] = $expense_account_id;

        return $this;
    }

    /**
     * Gets expense_account_number
     *
     * @return string|null
     * @deprecated
     */
    public function getExpenseAccountNumber()
    {
        return $this->container['expense_account_number'];
    }

    /**
     * Sets expense_account_number
     *
     * @param string|null $expense_account_number expense_account_number
     *
     * @return self
     * @deprecated
     */
    public function setExpenseAccountNumber($expense_account_number)
    {
        if (is_null($expense_account_number)) {
            throw new \InvalidArgumentException('non-nullable expense_account_number cannot be null');
        }
        $this->container['expense_account_number'] = $expense_account_number;

        return $this;
    }

    /**
     * Gets expiration_days
     *
     * @return int|null
     */
    public function getExpirationDays()
    {
        return $this->container['expiration_days'];
    }

    /**
     * Sets expiration_days
     *
     * @param int|null $expiration_days expiration_days
     *
     * @return self
     */
    public function setExpirationDays($expiration_days)
    {
        if (is_null($expiration_days)) {
            throw new \InvalidArgumentException('non-nullable expiration_days cannot be null');
        }
        $this->container['expiration_days'] = $expiration_days;

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
     * Gets launch_date
     *
     * @return int|null
     */
    public function getLaunchDate()
    {
        return $this->container['launch_date'];
    }

    /**
     * Sets launch_date
     *
     * @param int|null $launch_date launch_date
     *
     * @return self
     */
    public function setLaunchDate($launch_date)
    {
        if (is_null($launch_date)) {
            throw new \InvalidArgumentException('non-nullable launch_date cannot be null');
        }
        $this->container['launch_date'] = $launch_date;

        return $this;
    }

    /**
     * Gets loading_equipment_article_id
     *
     * @return string|null
     */
    public function getLoadingEquipmentArticleId()
    {
        return $this->container['loading_equipment_article_id'];
    }

    /**
     * Sets loading_equipment_article_id
     *
     * @param string|null $loading_equipment_article_id loading_equipment_article_id
     *
     * @return self
     */
    public function setLoadingEquipmentArticleId($loading_equipment_article_id)
    {
        if (is_null($loading_equipment_article_id)) {
            throw new \InvalidArgumentException('non-nullable loading_equipment_article_id cannot be null');
        }
        $this->container['loading_equipment_article_id'] = $loading_equipment_article_id;

        return $this;
    }

    /**
     * Gets long_text
     *
     * @return string|null
     */
    public function getLongText()
    {
        return $this->container['long_text'];
    }

    /**
     * Sets long_text
     *
     * @param string|null $long_text long_text
     *
     * @return self
     */
    public function setLongText($long_text)
    {
        if (is_null($long_text)) {
            throw new \InvalidArgumentException('non-nullable long_text cannot be null');
        }
        $this->container['long_text'] = $long_text;

        return $this;
    }

    /**
     * Gets low_level_code
     *
     * @return int|null
     */
    public function getLowLevelCode()
    {
        return $this->container['low_level_code'];
    }

    /**
     * Sets low_level_code
     *
     * @param int|null $low_level_code low_level_code
     *
     * @return self
     */
    public function setLowLevelCode($low_level_code)
    {
        if (is_null($low_level_code)) {
            throw new \InvalidArgumentException('non-nullable low_level_code cannot be null');
        }
        $this->container['low_level_code'] = $low_level_code;

        return $this;
    }

    /**
     * Gets manufacturer_id
     *
     * @return string|null
     */
    public function getManufacturerId()
    {
        return $this->container['manufacturer_id'];
    }

    /**
     * Sets manufacturer_id
     *
     * @param string|null $manufacturer_id manufacturer_id
     *
     * @return self
     */
    public function setManufacturerId($manufacturer_id)
    {
        if (is_null($manufacturer_id)) {
            throw new \InvalidArgumentException('non-nullable manufacturer_id cannot be null');
        }
        $this->container['manufacturer_id'] = $manufacturer_id;

        return $this;
    }

    /**
     * Gets manufacturer_name
     *
     * @return string|null
     * @deprecated
     */
    public function getManufacturerName()
    {
        return $this->container['manufacturer_name'];
    }

    /**
     * Sets manufacturer_name
     *
     * @param string|null $manufacturer_name manufacturer_name
     *
     * @return self
     * @deprecated
     */
    public function setManufacturerName($manufacturer_name)
    {
        if (is_null($manufacturer_name)) {
            throw new \InvalidArgumentException('non-nullable manufacturer_name cannot be null');
        }
        $this->container['manufacturer_name'] = $manufacturer_name;

        return $this;
    }

    /**
     * Gets margin_calculation_price_type
     *
     * @return \kruegge82\weclapp\Model\MarginCalculationPriceType|null
     */
    public function getMarginCalculationPriceType()
    {
        return $this->container['margin_calculation_price_type'];
    }

    /**
     * Sets margin_calculation_price_type
     *
     * @param \kruegge82\weclapp\Model\MarginCalculationPriceType|null $margin_calculation_price_type margin_calculation_price_type
     *
     * @return self
     */
    public function setMarginCalculationPriceType($margin_calculation_price_type)
    {
        if (is_null($margin_calculation_price_type)) {
            throw new \InvalidArgumentException('non-nullable margin_calculation_price_type cannot be null');
        }
        $this->container['margin_calculation_price_type'] = $margin_calculation_price_type;

        return $this;
    }

    /**
     * Gets minimum_stock_quantity
     *
     * @return float|null
     */
    public function getMinimumStockQuantity()
    {
        return $this->container['minimum_stock_quantity'];
    }

    /**
     * Sets minimum_stock_quantity
     *
     * @param float|null $minimum_stock_quantity minimum_stock_quantity
     *
     * @return self
     */
    public function setMinimumStockQuantity($minimum_stock_quantity)
    {
        if (is_null($minimum_stock_quantity)) {
            throw new \InvalidArgumentException('non-nullable minimum_stock_quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($minimum_stock_quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$minimum_stock_quantity when calling Article., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['minimum_stock_quantity'] = $minimum_stock_quantity;

        return $this;
    }

    /**
     * Gets packaging_quantity
     *
     * @return int|null
     */
    public function getPackagingQuantity()
    {
        return $this->container['packaging_quantity'];
    }

    /**
     * Sets packaging_quantity
     *
     * @param int|null $packaging_quantity packaging_quantity
     *
     * @return self
     */
    public function setPackagingQuantity($packaging_quantity)
    {
        if (is_null($packaging_quantity)) {
            throw new \InvalidArgumentException('non-nullable packaging_quantity cannot be null');
        }
        $this->container['packaging_quantity'] = $packaging_quantity;

        return $this;
    }

    /**
     * Gets packaging_unit_base_article_id
     *
     * @return string|null
     */
    public function getPackagingUnitBaseArticleId()
    {
        return $this->container['packaging_unit_base_article_id'];
    }

    /**
     * Sets packaging_unit_base_article_id
     *
     * @param string|null $packaging_unit_base_article_id packaging_unit_base_article_id
     *
     * @return self
     */
    public function setPackagingUnitBaseArticleId($packaging_unit_base_article_id)
    {
        if (is_null($packaging_unit_base_article_id)) {
            throw new \InvalidArgumentException('non-nullable packaging_unit_base_article_id cannot be null');
        }
        $this->container['packaging_unit_base_article_id'] = $packaging_unit_base_article_id;

        return $this;
    }

    /**
     * Gets packaging_unit_parent_article_id
     *
     * @return string|null
     */
    public function getPackagingUnitParentArticleId()
    {
        return $this->container['packaging_unit_parent_article_id'];
    }

    /**
     * Sets packaging_unit_parent_article_id
     *
     * @param string|null $packaging_unit_parent_article_id packaging_unit_parent_article_id
     *
     * @return self
     */
    public function setPackagingUnitParentArticleId($packaging_unit_parent_article_id)
    {
        if (is_null($packaging_unit_parent_article_id)) {
            throw new \InvalidArgumentException('non-nullable packaging_unit_parent_article_id cannot be null');
        }
        $this->container['packaging_unit_parent_article_id'] = $packaging_unit_parent_article_id;

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
     * Gets price_calculation_parameters
     *
     * @return \kruegge82\weclapp\Model\PriceCalculationParameterV1[]|null
     * @deprecated
     */
    public function getPriceCalculationParameters()
    {
        return $this->container['price_calculation_parameters'];
    }

    /**
     * Sets price_calculation_parameters
     *
     * @param \kruegge82\weclapp\Model\PriceCalculationParameterV1[]|null $price_calculation_parameters price_calculation_parameters
     *
     * @return self
     * @deprecated
     */
    public function setPriceCalculationParameters($price_calculation_parameters)
    {
        if (is_null($price_calculation_parameters)) {
            throw new \InvalidArgumentException('non-nullable price_calculation_parameters cannot be null');
        }
        $this->container['price_calculation_parameters'] = $price_calculation_parameters;

        return $this;
    }

    /**
     * Gets primary_supply_source_id
     *
     * @return string|null
     */
    public function getPrimarySupplySourceId()
    {
        return $this->container['primary_supply_source_id'];
    }

    /**
     * Sets primary_supply_source_id
     *
     * @param string|null $primary_supply_source_id primary_supply_source_id
     *
     * @return self
     */
    public function setPrimarySupplySourceId($primary_supply_source_id)
    {
        if (is_null($primary_supply_source_id)) {
            throw new \InvalidArgumentException('non-nullable primary_supply_source_id cannot be null');
        }
        $this->container['primary_supply_source_id'] = $primary_supply_source_id;

        return $this;
    }

    /**
     * Gets procurement_lead_days
     *
     * @return int|null
     */
    public function getProcurementLeadDays()
    {
        return $this->container['procurement_lead_days'];
    }

    /**
     * Sets procurement_lead_days
     *
     * @param int|null $procurement_lead_days procurement_lead_days
     *
     * @return self
     */
    public function setProcurementLeadDays($procurement_lead_days)
    {
        if (is_null($procurement_lead_days)) {
            throw new \InvalidArgumentException('non-nullable procurement_lead_days cannot be null');
        }
        $this->container['procurement_lead_days'] = $procurement_lead_days;

        return $this;
    }

    /**
     * Gets producer_type
     *
     * @return string|null
     */
    public function getProducerType()
    {
        return $this->container['producer_type'];
    }

    /**
     * Sets producer_type
     *
     * @param string|null $producer_type producer_type
     *
     * @return self
     */
    public function setProducerType($producer_type)
    {
        if (is_null($producer_type)) {
            throw new \InvalidArgumentException('non-nullable producer_type cannot be null');
        }
        $this->container['producer_type'] = $producer_type;

        return $this;
    }

    /**
     * Gets production_article
     *
     * @return bool|null
     */
    public function getProductionArticle()
    {
        return $this->container['production_article'];
    }

    /**
     * Sets production_article
     *
     * @param bool|null $production_article production_article
     *
     * @return self
     */
    public function setProductionArticle($production_article)
    {
        if (is_null($production_article)) {
            throw new \InvalidArgumentException('non-nullable production_article cannot be null');
        }
        $this->container['production_article'] = $production_article;

        return $this;
    }

    /**
     * Gets production_bill_of_material_items
     *
     * @return \kruegge82\weclapp\Model\BillOfMaterial[]|null
     */
    public function getProductionBillOfMaterialItems()
    {
        return $this->container['production_bill_of_material_items'];
    }

    /**
     * Sets production_bill_of_material_items
     *
     * @param \kruegge82\weclapp\Model\BillOfMaterial[]|null $production_bill_of_material_items production_bill_of_material_items
     *
     * @return self
     */
    public function setProductionBillOfMaterialItems($production_bill_of_material_items)
    {
        if (is_null($production_bill_of_material_items)) {
            throw new \InvalidArgumentException('non-nullable production_bill_of_material_items cannot be null');
        }
        $this->container['production_bill_of_material_items'] = $production_bill_of_material_items;

        return $this;
    }

    /**
     * Gets production_configuration_rule
     *
     * @return \kruegge82\weclapp\Model\ProductionArticleConfigurationRule|null
     */
    public function getProductionConfigurationRule()
    {
        return $this->container['production_configuration_rule'];
    }

    /**
     * Sets production_configuration_rule
     *
     * @param \kruegge82\weclapp\Model\ProductionArticleConfigurationRule|null $production_configuration_rule production_configuration_rule
     *
     * @return self
     */
    public function setProductionConfigurationRule($production_configuration_rule)
    {
        if (is_null($production_configuration_rule)) {
            throw new \InvalidArgumentException('non-nullable production_configuration_rule cannot be null');
        }
        $this->container['production_configuration_rule'] = $production_configuration_rule;

        return $this;
    }

    /**
     * Gets purchase_cost_center_id
     *
     * @return string|null
     */
    public function getPurchaseCostCenterId()
    {
        return $this->container['purchase_cost_center_id'];
    }

    /**
     * Sets purchase_cost_center_id
     *
     * @param string|null $purchase_cost_center_id purchase_cost_center_id
     *
     * @return self
     */
    public function setPurchaseCostCenterId($purchase_cost_center_id)
    {
        if (is_null($purchase_cost_center_id)) {
            throw new \InvalidArgumentException('non-nullable purchase_cost_center_id cannot be null');
        }
        $this->container['purchase_cost_center_id'] = $purchase_cost_center_id;

        return $this;
    }

    /**
     * Gets purchase_cost_center_number
     *
     * @return string|null
     * @deprecated
     */
    public function getPurchaseCostCenterNumber()
    {
        return $this->container['purchase_cost_center_number'];
    }

    /**
     * Sets purchase_cost_center_number
     *
     * @param string|null $purchase_cost_center_number purchase_cost_center_number
     *
     * @return self
     * @deprecated
     */
    public function setPurchaseCostCenterNumber($purchase_cost_center_number)
    {
        if (is_null($purchase_cost_center_number)) {
            throw new \InvalidArgumentException('non-nullable purchase_cost_center_number cannot be null');
        }
        $this->container['purchase_cost_center_number'] = $purchase_cost_center_number;

        return $this;
    }

    /**
     * Gets quantity_conversions
     *
     * @return \kruegge82\weclapp\Model\QuantityConversion[]|null
     */
    public function getQuantityConversions()
    {
        return $this->container['quantity_conversions'];
    }

    /**
     * Sets quantity_conversions
     *
     * @param \kruegge82\weclapp\Model\QuantityConversion[]|null $quantity_conversions quantity_conversions
     *
     * @return self
     */
    public function setQuantityConversions($quantity_conversions)
    {
        if (is_null($quantity_conversions)) {
            throw new \InvalidArgumentException('non-nullable quantity_conversions cannot be null');
        }
        $this->container['quantity_conversions'] = $quantity_conversions;

        return $this;
    }

    /**
     * Gets rating_id
     *
     * @return string|null
     */
    public function getRatingId()
    {
        return $this->container['rating_id'];
    }

    /**
     * Sets rating_id
     *
     * @param string|null $rating_id rating_id
     *
     * @return self
     */
    public function setRatingId($rating_id)
    {
        if (is_null($rating_id)) {
            throw new \InvalidArgumentException('non-nullable rating_id cannot be null');
        }
        $this->container['rating_id'] = $rating_id;

        return $this;
    }

    /**
     * Gets rating_name
     *
     * @return string|null
     * @deprecated
     */
    public function getRatingName()
    {
        return $this->container['rating_name'];
    }

    /**
     * Sets rating_name
     *
     * @param string|null $rating_name rating_name
     *
     * @return self
     * @deprecated
     */
    public function setRatingName($rating_name)
    {
        if (is_null($rating_name)) {
            throw new \InvalidArgumentException('non-nullable rating_name cannot be null');
        }
        $this->container['rating_name'] = $rating_name;

        return $this;
    }

    /**
     * Gets record_item_group_name
     *
     * @return string|null
     */
    public function getRecordItemGroupName()
    {
        return $this->container['record_item_group_name'];
    }

    /**
     * Sets record_item_group_name
     *
     * @param string|null $record_item_group_name record_item_group_name
     *
     * @return self
     */
    public function setRecordItemGroupName($record_item_group_name)
    {
        if (is_null($record_item_group_name)) {
            throw new \InvalidArgumentException('non-nullable record_item_group_name cannot be null');
        }
        $this->container['record_item_group_name'] = $record_item_group_name;

        return $this;
    }

    /**
     * Gets safety_stock_days
     *
     * @return int|null
     */
    public function getSafetyStockDays()
    {
        return $this->container['safety_stock_days'];
    }

    /**
     * Sets safety_stock_days
     *
     * @param int|null $safety_stock_days safety_stock_days
     *
     * @return self
     */
    public function setSafetyStockDays($safety_stock_days)
    {
        if (is_null($safety_stock_days)) {
            throw new \InvalidArgumentException('non-nullable safety_stock_days cannot be null');
        }
        $this->container['safety_stock_days'] = $safety_stock_days;

        return $this;
    }

    /**
     * Gets sales_bill_of_material_items
     *
     * @return \kruegge82\weclapp\Model\SalesBillOfMaterialArticleItem[]|null
     */
    public function getSalesBillOfMaterialItems()
    {
        return $this->container['sales_bill_of_material_items'];
    }

    /**
     * Sets sales_bill_of_material_items
     *
     * @param \kruegge82\weclapp\Model\SalesBillOfMaterialArticleItem[]|null $sales_bill_of_material_items sales_bill_of_material_items
     *
     * @return self
     */
    public function setSalesBillOfMaterialItems($sales_bill_of_material_items)
    {
        if (is_null($sales_bill_of_material_items)) {
            throw new \InvalidArgumentException('non-nullable sales_bill_of_material_items cannot be null');
        }
        $this->container['sales_bill_of_material_items'] = $sales_bill_of_material_items;

        return $this;
    }

    /**
     * Gets sales_cost_center_id
     *
     * @return string|null
     */
    public function getSalesCostCenterId()
    {
        return $this->container['sales_cost_center_id'];
    }

    /**
     * Sets sales_cost_center_id
     *
     * @param string|null $sales_cost_center_id sales_cost_center_id
     *
     * @return self
     */
    public function setSalesCostCenterId($sales_cost_center_id)
    {
        if (is_null($sales_cost_center_id)) {
            throw new \InvalidArgumentException('non-nullable sales_cost_center_id cannot be null');
        }
        $this->container['sales_cost_center_id'] = $sales_cost_center_id;

        return $this;
    }

    /**
     * Gets sales_cost_center_number
     *
     * @return string|null
     * @deprecated
     */
    public function getSalesCostCenterNumber()
    {
        return $this->container['sales_cost_center_number'];
    }

    /**
     * Sets sales_cost_center_number
     *
     * @param string|null $sales_cost_center_number sales_cost_center_number
     *
     * @return self
     * @deprecated
     */
    public function setSalesCostCenterNumber($sales_cost_center_number)
    {
        if (is_null($sales_cost_center_number)) {
            throw new \InvalidArgumentException('non-nullable sales_cost_center_number cannot be null');
        }
        $this->container['sales_cost_center_number'] = $sales_cost_center_number;

        return $this;
    }

    /**
     * Gets sell_by_date
     *
     * @return int|null
     */
    public function getSellByDate()
    {
        return $this->container['sell_by_date'];
    }

    /**
     * Sets sell_by_date
     *
     * @param int|null $sell_by_date sell_by_date
     *
     * @return self
     */
    public function setSellByDate($sell_by_date)
    {
        if (is_null($sell_by_date)) {
            throw new \InvalidArgumentException('non-nullable sell_by_date cannot be null');
        }
        $this->container['sell_by_date'] = $sell_by_date;

        return $this;
    }

    /**
     * Gets sell_from_date
     *
     * @return int|null
     */
    public function getSellFromDate()
    {
        return $this->container['sell_from_date'];
    }

    /**
     * Sets sell_from_date
     *
     * @param int|null $sell_from_date sell_from_date
     *
     * @return self
     */
    public function setSellFromDate($sell_from_date)
    {
        if (is_null($sell_from_date)) {
            throw new \InvalidArgumentException('non-nullable sell_from_date cannot be null');
        }
        $this->container['sell_from_date'] = $sell_from_date;

        return $this;
    }

    /**
     * Gets serial_number_required
     *
     * @return bool|null
     */
    public function getSerialNumberRequired()
    {
        return $this->container['serial_number_required'];
    }

    /**
     * Sets serial_number_required
     *
     * @param bool|null $serial_number_required serial_number_required
     *
     * @return self
     */
    public function setSerialNumberRequired($serial_number_required)
    {
        if (is_null($serial_number_required)) {
            throw new \InvalidArgumentException('non-nullable serial_number_required cannot be null');
        }
        $this->container['serial_number_required'] = $serial_number_required;

        return $this;
    }

    /**
     * Gets show_on_delivery_note
     *
     * @return bool|null
     */
    public function getShowOnDeliveryNote()
    {
        return $this->container['show_on_delivery_note'];
    }

    /**
     * Sets show_on_delivery_note
     *
     * @param bool|null $show_on_delivery_note show_on_delivery_note
     *
     * @return self
     */
    public function setShowOnDeliveryNote($show_on_delivery_note)
    {
        if (is_null($show_on_delivery_note)) {
            throw new \InvalidArgumentException('non-nullable show_on_delivery_note cannot be null');
        }
        $this->container['show_on_delivery_note'] = $show_on_delivery_note;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return string|null
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param string|null $status_id status_id
     *
     * @return self
     */
    public function setStatusId($status_id)
    {
        if (is_null($status_id)) {
            throw new \InvalidArgumentException('non-nullable status_id cannot be null');
        }
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets supply_sources
     *
     * @return \kruegge82\weclapp\Model\SupplySource[]|null
     */
    public function getSupplySources()
    {
        return $this->container['supply_sources'];
    }

    /**
     * Sets supply_sources
     *
     * @param \kruegge82\weclapp\Model\SupplySource[]|null $supply_sources supply_sources
     *
     * @return self
     */
    public function setSupplySources($supply_sources)
    {
        if (is_null($supply_sources)) {
            throw new \InvalidArgumentException('non-nullable supply_sources cannot be null');
        }
        $this->container['supply_sources'] = $supply_sources;

        return $this;
    }

    /**
     * Gets support_until_date
     *
     * @return int|null
     */
    public function getSupportUntilDate()
    {
        return $this->container['support_until_date'];
    }

    /**
     * Sets support_until_date
     *
     * @param int|null $support_until_date support_until_date
     *
     * @return self
     */
    public function setSupportUntilDate($support_until_date)
    {
        if (is_null($support_until_date)) {
            throw new \InvalidArgumentException('non-nullable support_until_date cannot be null');
        }
        $this->container['support_until_date'] = $support_until_date;

        return $this;
    }

    /**
     * Gets system_code
     *
     * @return string|null
     */
    public function getSystemCode()
    {
        return $this->container['system_code'];
    }

    /**
     * Sets system_code
     *
     * @param string|null $system_code system_code
     *
     * @return self
     */
    public function setSystemCode($system_code)
    {
        if (is_null($system_code)) {
            throw new \InvalidArgumentException('non-nullable system_code cannot be null');
        }
        $this->container['system_code'] = $system_code;

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
     * Gets target_stock_quantity
     *
     * @return float|null
     */
    public function getTargetStockQuantity()
    {
        return $this->container['target_stock_quantity'];
    }

    /**
     * Sets target_stock_quantity
     *
     * @param float|null $target_stock_quantity target_stock_quantity
     *
     * @return self
     */
    public function setTargetStockQuantity($target_stock_quantity)
    {
        if (is_null($target_stock_quantity)) {
            throw new \InvalidArgumentException('non-nullable target_stock_quantity cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($target_stock_quantity)))) {
            throw new \InvalidArgumentException("invalid value for \$target_stock_quantity when calling Article., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['target_stock_quantity'] = $target_stock_quantity;

        return $this;
    }

    /**
     * Gets use_available_for_sales_channels
     *
     * @return bool|null
     */
    public function getUseAvailableForSalesChannels()
    {
        return $this->container['use_available_for_sales_channels'];
    }

    /**
     * Sets use_available_for_sales_channels
     *
     * @param bool|null $use_available_for_sales_channels use_available_for_sales_channels
     *
     * @return self
     */
    public function setUseAvailableForSalesChannels($use_available_for_sales_channels)
    {
        if (is_null($use_available_for_sales_channels)) {
            throw new \InvalidArgumentException('non-nullable use_available_for_sales_channels cannot be null');
        }
        $this->container['use_available_for_sales_channels'] = $use_available_for_sales_channels;

        return $this;
    }

    /**
     * Gets use_sales_bill_of_material_item_prices
     *
     * @return bool|null
     */
    public function getUseSalesBillOfMaterialItemPrices()
    {
        return $this->container['use_sales_bill_of_material_item_prices'];
    }

    /**
     * Sets use_sales_bill_of_material_item_prices
     *
     * @param bool|null $use_sales_bill_of_material_item_prices use_sales_bill_of_material_item_prices
     *
     * @return self
     */
    public function setUseSalesBillOfMaterialItemPrices($use_sales_bill_of_material_item_prices)
    {
        if (is_null($use_sales_bill_of_material_item_prices)) {
            throw new \InvalidArgumentException('non-nullable use_sales_bill_of_material_item_prices cannot be null');
        }
        $this->container['use_sales_bill_of_material_item_prices'] = $use_sales_bill_of_material_item_prices;

        return $this;
    }

    /**
     * Gets use_sales_bill_of_material_item_prices_for_purchase
     *
     * @return bool|null
     */
    public function getUseSalesBillOfMaterialItemPricesForPurchase()
    {
        return $this->container['use_sales_bill_of_material_item_prices_for_purchase'];
    }

    /**
     * Sets use_sales_bill_of_material_item_prices_for_purchase
     *
     * @param bool|null $use_sales_bill_of_material_item_prices_for_purchase use_sales_bill_of_material_item_prices_for_purchase
     *
     * @return self
     */
    public function setUseSalesBillOfMaterialItemPricesForPurchase($use_sales_bill_of_material_item_prices_for_purchase)
    {
        if (is_null($use_sales_bill_of_material_item_prices_for_purchase)) {
            throw new \InvalidArgumentException('non-nullable use_sales_bill_of_material_item_prices_for_purchase cannot be null');
        }
        $this->container['use_sales_bill_of_material_item_prices_for_purchase'] = $use_sales_bill_of_material_item_prices_for_purchase;

        return $this;
    }

    /**
     * Gets use_sales_bill_of_material_subitem_costs
     *
     * @return bool|null
     */
    public function getUseSalesBillOfMaterialSubitemCosts()
    {
        return $this->container['use_sales_bill_of_material_subitem_costs'];
    }

    /**
     * Sets use_sales_bill_of_material_subitem_costs
     *
     * @param bool|null $use_sales_bill_of_material_subitem_costs use_sales_bill_of_material_subitem_costs
     *
     * @return self
     */
    public function setUseSalesBillOfMaterialSubitemCosts($use_sales_bill_of_material_subitem_costs)
    {
        if (is_null($use_sales_bill_of_material_subitem_costs)) {
            throw new \InvalidArgumentException('non-nullable use_sales_bill_of_material_subitem_costs cannot be null');
        }
        $this->container['use_sales_bill_of_material_subitem_costs'] = $use_sales_bill_of_material_subitem_costs;

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


