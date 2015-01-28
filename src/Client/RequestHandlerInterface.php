<?php

/**
 * @file
 * Contains \Triquanta\IziTravel\Client\RequestHandlerInterface.
 */

namespace Triquanta\IziTravel\Client;

/**
 * Defines an handler for making API requests.
 */
interface RequestHandlerInterface {

    /**
     * Executes an MTG API request.
     *
     * @param string $urlPath
     *   The API URL path relative to the API's base URL.
     * @param mixed[] $parameters
     *   Keys are query parameter names and values are parameter values.
     *
     * @return string
     *   The raw JSON string.
     *
     * @throws \Triquanta\IziTravel\Client\ClientException
     * @throws \Triquanta\IziTravel\Client\HttpRequestException
     * @throws \Triquanta\IziTravel\Client\ErrorResponseException
     */
    public function request($urlPath, array $parameters = []);

}
