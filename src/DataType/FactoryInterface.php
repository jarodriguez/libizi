<?php

/**
 * @file
 * Contains \Triquanta\IziTravel\DataType\FactoryInterface.
 */

namespace Triquanta\IziTravel\DataType;

interface FactoryInterface
{

    /**
     * Creates a new instances from IZI Travel's API's JSON output.
     *
     * @param string $json
     *
     * @return static
     *
     * @throws \Triquanta\IziTravel\DataType\FactoryException
     */
    public static function createFromJson($json);

}