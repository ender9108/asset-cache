<?php
namespace EnderLab\MediaCache;


class MediaCache
{
    /**
     * @var string
     */
    private $cacheDir;

    public function __construct(string $cacheDir)
    {
        $this->cacheDir = $cacheDir;
    }
}