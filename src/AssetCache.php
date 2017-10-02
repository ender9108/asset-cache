<?php
namespace EnderLab\Asset;

class AssetCache
{
    /**
     * @var string
     */
    private $cacheDir;
    /**
     * @var array
     */
    private $options;

    /**
     * AssetCache constructor.
     * @param string $cacheDir
     * @param array $options
     */
    public function __construct(string $cacheDir, array $options = [])
    {
        $this->cacheDir = $cacheDir;
        $this->options = $options;
    }
}