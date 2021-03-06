<?php
/**
 * DebitconnectexampleApi
 * PHP version 5
 *
 * @category Class
 * @package  VOP\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * V.O.P GmbH & Co. KG - Rest API
 *
 * Rest API-Endpoint
 *
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VOP\Rest\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use VOP\Rest\ApiException;
use VOP\Rest\Configuration;
use VOP\Rest\HeaderSelector;
use VOP\Rest\ObjectSerializer;

/**
 * DebitconnectexampleApi Class Doc Comment
 *
 * @category Class
 * @package  VOP\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DebitconnectexampleApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet
     *
     * @param  string $securitytoken securitytoken (required)
     * @param  string $id id (required)
     *
     * @throws \VOP\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \VOP\Rest\Model\GetExampleDocumentByIdResponseParameters
     */
    public function debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet($securitytoken, $id)
    {
        list($response) = $this->debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetWithHttpInfo($securitytoken, $id);
        return $response;
    }

    /**
     * Operation debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetWithHttpInfo
     *
     * @param  string $securitytoken (required)
     * @param  string $id (required)
     *
     * @throws \VOP\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \VOP\Rest\Model\GetExampleDocumentByIdResponseParameters, HTTP status code, HTTP response headers (array of strings)
     */
    public function debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetWithHttpInfo($securitytoken, $id)
    {
        $returnType = '\VOP\Rest\Model\GetExampleDocumentByIdResponseParameters';
        $request = $this->debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetRequest($securitytoken, $id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\VOP\Rest\Model\GetExampleDocumentByIdResponseParameters',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\VOP\Rest\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetAsync
     *
     * 
     *
     * @param  string $securitytoken (required)
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetAsync($securitytoken, $id)
    {
        return $this->debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetAsyncWithHttpInfo($securitytoken, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $securitytoken (required)
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetAsyncWithHttpInfo($securitytoken, $id)
    {
        $returnType = '\VOP\Rest\Model\GetExampleDocumentByIdResponseParameters';
        $request = $this->debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetRequest($securitytoken, $id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet'
     *
     * @param  string $securitytoken (required)
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGetRequest($securitytoken, $id)
    {
        // verify the required parameter 'securitytoken' is set
        if ($securitytoken === null || (is_array($securitytoken) && count($securitytoken) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $securitytoken when calling debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling debitconnectExampleGetExampleDocumentByIdSecuritytokenIdGet'
            );
        }

        $resourcePath = '/debitconnect/example/getExampleDocumentById/{securitytoken}/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($securitytoken !== null) {
            $resourcePath = str_replace(
                '{' . 'securitytoken' . '}',
                ObjectSerializer::toPathValue($securitytoken),
                $resourcePath
            );
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation debitconnectExampleGetExampleListSecuritytokenGet
     *
     * @param  string $securitytoken securitytoken (required)
     *
     * @throws \VOP\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \VOP\Rest\Model\GetExampleListResponseParameters
     */
    public function debitconnectExampleGetExampleListSecuritytokenGet($securitytoken)
    {
        list($response) = $this->debitconnectExampleGetExampleListSecuritytokenGetWithHttpInfo($securitytoken);
        return $response;
    }

    /**
     * Operation debitconnectExampleGetExampleListSecuritytokenGetWithHttpInfo
     *
     * @param  string $securitytoken (required)
     *
     * @throws \VOP\Rest\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \VOP\Rest\Model\GetExampleListResponseParameters, HTTP status code, HTTP response headers (array of strings)
     */
    public function debitconnectExampleGetExampleListSecuritytokenGetWithHttpInfo($securitytoken)
    {
        $returnType = '\VOP\Rest\Model\GetExampleListResponseParameters';
        $request = $this->debitconnectExampleGetExampleListSecuritytokenGetRequest($securitytoken);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\VOP\Rest\Model\GetExampleListResponseParameters',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\VOP\Rest\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation debitconnectExampleGetExampleListSecuritytokenGetAsync
     *
     * 
     *
     * @param  string $securitytoken (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function debitconnectExampleGetExampleListSecuritytokenGetAsync($securitytoken)
    {
        return $this->debitconnectExampleGetExampleListSecuritytokenGetAsyncWithHttpInfo($securitytoken)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation debitconnectExampleGetExampleListSecuritytokenGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $securitytoken (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function debitconnectExampleGetExampleListSecuritytokenGetAsyncWithHttpInfo($securitytoken)
    {
        $returnType = '\VOP\Rest\Model\GetExampleListResponseParameters';
        $request = $this->debitconnectExampleGetExampleListSecuritytokenGetRequest($securitytoken);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'debitconnectExampleGetExampleListSecuritytokenGet'
     *
     * @param  string $securitytoken (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function debitconnectExampleGetExampleListSecuritytokenGetRequest($securitytoken)
    {
        // verify the required parameter 'securitytoken' is set
        if ($securitytoken === null || (is_array($securitytoken) && count($securitytoken) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $securitytoken when calling debitconnectExampleGetExampleListSecuritytokenGet'
            );
        }

        $resourcePath = '/debitconnect/example/getExampleList/{securitytoken}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($securitytoken !== null) {
            $resourcePath = str_replace(
                '{' . 'securitytoken' . '}',
                ObjectSerializer::toPathValue($securitytoken),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
}
