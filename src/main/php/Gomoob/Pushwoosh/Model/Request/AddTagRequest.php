<?php

/**
 * gomoob/php-pushwoosh
 *
 * @copyright Copyright (c) 2014, GOMOOB SARL (http://gomoob.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
namespace Gomoob\Pushwoosh\Model\Request;

use Gomoob\Pushwoosh\Exception\PushwooshException;

/**
 * Class which represents Pushwoosh '/addTag' request.
 *
 * @author Juan Berzal (juanber84@gmail.com)
 */
class AddTagRequest extends AbstractRequest
{

    /**
     * The tag name.
     *
     * @var string
     */
    private $name;

    /**
     * The tag type, this attribute can take the following values :
     *  - 1 : integer 
     *  - 2 : string
     *  - 3 : list
     *  - 4 : date 
     *  - 5 : boolean 
     *  - 6 : price
     *  - 7 : version
     *
     * @var int
     */
    private $type;

    /**
     * The application_specific field, tru by default.
     *
     * @var string
     */
    private $applicationSpecific = true;

    /**
     * Utility function used to create a new instance of the <tt>AddTagRequest</tt>.
     *
     * @return \Gomoob\Pushwoosh\Model\Request\GetTagsRequest the new created instance.
     */
    public static function create()
    {
        return new AddtagRequest();
    }

    /**
     * Gets the tag name who try create.
     *
     * @return string the tag name.
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Gets the type of tag who try create.
     *
     * @return int.
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * {@inheritDoc}
     */
    public function isAuthSupported()
    {
        return true;
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
        if (!isset($this->applicationSpecific)) {
            throw new PushwooshException('The \'applicationSpecific\' property is not set !');
        }
    
        // The 'auth' parameter must have been set
        if (!isset($this->auth)) {
            throw new PushwooshException('The \'auth\' property is not set !');
        }

        $json = [
            'auth' => $this->auth,
            'tag' => [
                'name' => $this->name,
                'type' => $this->type,
                'application_specific' => $this->applicationSpecific
            ]
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

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }      
}
