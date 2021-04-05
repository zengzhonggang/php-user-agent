<?php

namespace ZengZhongGang\PHPUserAgent;

use ZengZhongGang\PHPUserAgent\type\Browser;
use ZengZhongGang\PHPUserAgent\type\Device;
use ZengZhongGang\PHPUserAgent\type\Os;

class ZUserAgent
{
    /**
     * @var Os
     */
    private $os = null;
    /**
     * @var Device
     */
    private $device = null;
    /**
     * @var Browser
     */
    private $browser = null;

    private function __construct(string $user_agent_string)
    {
        $this->os = new Os($user_agent_string);
        $this->device = new Device($user_agent_string);
        $this->browser = new Browser($user_agent_string);
    }
    public static function analysis(string $user_agent_string)
    {
        return new self($user_agent_string);
    }

    public function isPC()
    {
        return $this->os->isPC();
    }

    public function isMobile()
    {
        return $this->os->isMobile();
    }

    public function isIos()
    {
        return $this->os->isIos();
    }

    public function isAndroid()
    {
        return $this->os->isAndroid();
    }

    public function isWindows()
    {
        return $this->os->isWindows();
    }

    public function isMac()
    {
        return $this->os->isMac();
    }

    public function getOs():Os
    {
        return $this->os;
    }

    public function getBrowser():Browser
    {
        return $this->browser;
    }

    public function getDevice():Device
    {
        return $this->device;
    }

}