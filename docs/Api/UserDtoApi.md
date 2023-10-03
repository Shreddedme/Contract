# Bankiru\PetClient\UserDtoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiUserIdDelete()**](UserDtoApi.md#apiUserIdDelete) | **DELETE** /api/v2/user/{id} | Removes the UserDto resource. |
| [**apiUserIdGet()**](UserDtoApi.md#apiUserIdGet) | **GET** /api/v2/user/{id} | Retrieves a UserDto resource. |
| [**apiUsercreatePost()**](UserDtoApi.md#apiUsercreatePost) | **POST** /api/v2/user/create | Creates a UserDto resource. |
| [**apiUsersGetCollection()**](UserDtoApi.md#apiUsersGetCollection) | **GET** /api/v2/users | Retrieves the collection of UserDto resources. |
| [**apiUserupdatePut()**](UserDtoApi.md#apiUserupdatePut) | **PUT** /api/v2/user/update | Replaces the UserDto resource. |


## `apiUserIdDelete()`

```php
apiUserIdDelete($id)
```

Removes the UserDto resource.

Removes the UserDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bankiru\PetClient\Api\UserDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | User identifier

try {
    $apiInstance->apiUserIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UserDtoApi->apiUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUserIdGet()`

```php
apiUserIdGet($id): \Bankiru\PetClient\Model\UserDtoJsonldRead
```

Retrieves a UserDto resource.

Retrieves a UserDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bankiru\PetClient\Api\UserDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | UserDto identifier

try {
    $result = $apiInstance->apiUserIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDtoApi->apiUserIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| UserDto identifier | |

### Return type

[**\Bankiru\PetClient\Model\UserDtoJsonldRead**](../Model/UserDtoJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsercreatePost()`

```php
apiUsercreatePost($userDtoJsonldWrite): \Bankiru\PetClient\Model\UserDtoJsonldRead
```

Creates a UserDto resource.

Creates a UserDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bankiru\PetClient\Api\UserDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userDtoJsonldWrite = new \Bankiru\PetClient\Model\UserDtoJsonldWrite(); // \Bankiru\PetClient\Model\UserDtoJsonldWrite | The new UserDto resource

try {
    $result = $apiInstance->apiUsercreatePost($userDtoJsonldWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDtoApi->apiUsercreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userDtoJsonldWrite** | [**\Bankiru\PetClient\Model\UserDtoJsonldWrite**](../Model/UserDtoJsonldWrite.md)| The new UserDto resource | |

### Return type

[**\Bankiru\PetClient\Model\UserDtoJsonldRead**](../Model/UserDtoJsonldRead.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersGetCollection()`

```php
apiUsersGetCollection($page, $itemsPerPage): \Bankiru\PetClient\Model\ApiUsersGetCollection200Response
```

Retrieves the collection of UserDto resources.

Retrieves the collection of UserDto resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bankiru\PetClient\Api\UserDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number
$itemsPerPage = 10; // int | The number of items per page

try {
    $result = $apiInstance->apiUsersGetCollection($page, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDtoApi->apiUsersGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **itemsPerPage** | **int**| The number of items per page | [optional] [default to 10] |

### Return type

[**\Bankiru\PetClient\Model\ApiUsersGetCollection200Response**](../Model/ApiUsersGetCollection200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUserupdatePut()`

```php
apiUserupdatePut($userJsonld): \Bankiru\PetClient\Model\UserJsonld
```

Replaces the UserDto resource.

Replaces the UserDto resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bankiru\PetClient\Api\UserDtoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userJsonld = new \Bankiru\PetClient\Model\UserJsonld(); // \Bankiru\PetClient\Model\UserJsonld | The updated UserDto resource

try {
    $result = $apiInstance->apiUserupdatePut($userJsonld);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDtoApi->apiUserupdatePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userJsonld** | [**\Bankiru\PetClient\Model\UserJsonld**](../Model/UserJsonld.md)| The updated UserDto resource | |

### Return type

[**\Bankiru\PetClient\Model\UserJsonld**](../Model/UserJsonld.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
