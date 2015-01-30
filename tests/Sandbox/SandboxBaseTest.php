<?php
namespace Sandbox;

class SandboxBaseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SandboxBase
     */
    protected $sandboxBase;

    public function setUp()
    {
        $this->sandboxBase = new SandboxBase();
    }

    public function testSandbox()
    {
        var_dump($this->sandboxBase->sandbox());
    }
}
