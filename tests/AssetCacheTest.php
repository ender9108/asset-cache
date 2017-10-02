<?php
namespace Tests\EnderLab;

use EnderLab\Asset\AssetCache;
use PHPUnit\Framework\TestCase;

class AssetCacheTest extends TestCase
{
    private $tmpDir = __DIR__.'/tmp/';

    protected function setUp()
    {
        //
    }

    protected function tearDown()
    {
        //
    }

    public function testInstance()
    {
        $asset = new AssetCache($this->tmpDir);
        $this->assertInstanceOf(AssetCache::class, $asset);
    }
}