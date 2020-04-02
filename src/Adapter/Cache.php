<?php

namespace Neko\Throttle\Adapter;

/**
 * Cache adapter
 */
class Cache extends \Neko\Throttle\Adapter
{

    /**
     * @var \Cache\ClientInterface
     */
    protected $redis;

    public function __construct(\Cache\ClientInterface $client)
    {
        $this->redis = $client;
    }


    public function set($key, $value, $ttl)
    {
        return $this->redis->set($key, (string) $value, "ex", $ttl);
    }

    /**
     * @return float
     */
    public function get($key)
    {
        return (float)$this->redis->get($key);
    }

    public function exists($key)
    {
        return (bool)$this->redis->exists($key);
    }

    public function del($key)
    {
        return (bool)$this->redis->del([$key]);
    }
}
