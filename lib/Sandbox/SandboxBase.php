<?php
namespace Sandbox;

use Sandbox\Promise\PromiseStuff;

class SandboxBase
{
    /**
     * @var PromiseStuff
     */
    protected $promise;

    public function __construct()
    {
        $this->promise = new PromiseStuff();
    }

    public function sandbox()
    {
        return $this->promise->handlePromise();
    }
}