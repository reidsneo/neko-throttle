<?php

namespace Neko\Throttle\Adapter;

use Phpfastcache\Helper\Psr16Adapter;

class APC extends \Neko\Throttle\Adapter
{
    
    public function __construct()
    {
        $defaultDriver = 'Files';
        $Psr16Adapter = new Psr16Adapter($defaultDriver);
        $this->cache = $Psr16Adapter;
    }
    
    public function set($key, $value, $ttl)
    {
        return $this->cache->set($key, (string) $value, "ex", $ttl);
    }

    /**
     * @return float
     */
    public function get($key)
    {
        return (float)$this->cache->get($key);
    }

    public function exists($key)
    {
        return (bool)$this->cache->has($key);
    }

    public function del($key)
    {
        return (bool)$this->cache->delete([$key]);
    }
}