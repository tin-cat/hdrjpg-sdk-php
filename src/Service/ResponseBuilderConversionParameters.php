<?php

namespace TinCat\HdrjpgSdkPhp\Service;

use Exception;
use TinCat\HdrjpgSdkPhp\Entity\ConversionParameters;
use TinCat\HdrjpgSdkPhp\Exception\ApiResponseException;

class ResponseBuilderConversionParameters extends ResponseBuilder
{
    public function buildFromData($data)
    {
        try {

            $conversionParameters = new ConversionParameters;
            $conversionParameters->width = intval($data['width']);
            $conversionParameters->height = intval($data['height']);
            $conversionParameters->quality = intval($data['quality']);
            $conversionParameters->baseQuality = intval($data['baseQuality']);
            $conversionParameters->gainmapQuality = intval($data['gainmapQuality']);

            return $conversionParameters;

        } catch (Exception $e) {
            throw new ApiResponseException('Error parsing API response ('.$e->getMessage().')');
        }
    }
}