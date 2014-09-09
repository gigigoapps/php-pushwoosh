<?php

/**
 * gomoob/php-pushwoosh
 *
 * @copyright Copyright (c) 2014, GOMOOB SARL (http://gomoob.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
namespace Gomoob\Pushwoosh\Model\Notification;

/**
 * Class which represents specific Pushwoosh notification informations for Amazon Device Messaging.
 *
 * @author Baptiste GAILLARD (baptiste.gaillard@gomoob.com)
 */
class ADM
{
    private $banner;
    private $customIcon;
    private $header;
    private $icon;
    private $rootParams;
    private $sound;
    private $ttl;

    public function getBanner()
    {
        return $this->banner;

    }

    public function getCustomIcon()
    {
        return $this->customIcon;

    }

    public function getHeader()
    {
        return $this->header;

    }

    public function getIcon()
    {
        return $this->icon;

    }

    public function getRootParams()
    {
        return $this->rootParams;

    }

    public function getSound()
    {
        return $this->sound;

    }

    public function getTtl()
    {
        return $this->ttl;

    }

    public function setBanner($banner)
    {
        $this->banner = $banner;

    }

    public function setCustomIcon($customIcon)
    {
        $this->customIcon = $customIcon;

    }

    public function setHeader($header)
    {
        $this->header = $header;

    }

    public function setIcon($icon)
    {
        $this->icon = $icon;

    }

    public function setRootParams($rootParams)
    {
        $this->rootParams = $rootParams;
    }

    public function setSound($sound)
    {
        $this->sound = $sound;

    }

    public function setTtl($ttl)
    {
        $this->ttl = $ttl;

    }
}
