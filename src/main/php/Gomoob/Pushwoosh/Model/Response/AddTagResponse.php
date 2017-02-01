<?php

namespace Gomoob\Pushwoosh\Model\Response;

/**
 * Class which represents Pushwoosh AddTag response.
 */
class AddTagResponse extends AbstractResponse
{

    private $response;

    /**
     * Utility function used to create a new instance from a JSON string.
     *
     * @param array $json a PHP array which contains the result of a 'json_decode' execution.
     *
     * @return \Gomoob\Pushwoosh\Model\Response\RegisterDeviceResponse the resulting instance.
     */
    public static function create(array $json)
    {
        $AddTagResponse = new AddTagResponse();
        $AddTagResponse->setStatusCode($json['status_code']);
        $AddTagResponse->setStatusMessage($json['status_message']);
        $AddTagResponse->setResponse($json['response']);

        return $AddTagResponse;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setResponse($response)
    {
        $this->response = $response;
    }    
}
