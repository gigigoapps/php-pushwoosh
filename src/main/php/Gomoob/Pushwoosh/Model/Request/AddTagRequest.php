<?php

/**
 * gomoob/php-pushwoosh
 */
namespace Gomoob\Pushwoosh\Model\Request;

use Gomoob\Pushwoosh\Exception\PushwooshException;

/**
 * Class which represents Pushwoosh '/addTag' request.
 *

 */
class AddTagRequest extends AbstractRequest
{

    private $name;

    private $type;

    private $application_specific = true;

    public static function create()
    {
        return new AddtagRequest();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }    
    
    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        // The 'application' parameter must have been defined.
        if (!isset($this->name)) {
            throw new PushwooshException('The \'name\' property is not set !');
        }
    
        // The 'type' parameter must have been defined and must be valid.
        $this->checkType();
    
        // The 'hwid' parameter must have been defined.
        if (!isset($this->type)) {
            throw new PushwooshException('The \'type\' property is not set !');
        }
    
        // The 'application_specific' parameter must have been defined.
        if (!isset($this->application_specific)) {
            throw new PushwooshException('The \'application_specific\' property is not set !');
        }
    
        $json = [
            'name' => $this->name,
            'type' => $this->type,
            'application_specific' => $this->application_specific
        ];
    
        return $json;
    }

    private function checkType()
    {
        // The 'type' parameter must have been defined.
        if (!isset($this->type)) {
            throw new PushwooshException('The \'type\' property is not set !');
        }

        // The 'type' must be valid
        switch ($this->type) {
            case 1:
                break;
            case 2:
                break;
            case 3:
                break;
            case 4:
                break;
            case 5:
                break;
            case 6:
                break;
            case 7:
                break;
            // Invalid  type value
            default:
                throw new PushwooshException('The \'type\' value \'' . $this->type . '\' is invalid !');
                break;
        }
    }
}
