<?php
namespace EnderLab\Asset\Compressor;

interface Compressor
{
    public function compress(): bool;
    public function getErrors(): array;
}