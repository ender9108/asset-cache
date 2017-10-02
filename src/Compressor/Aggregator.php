<?php
namespace EnderLab\Asset\Compressor;

interface Aggregator
{
    public function aggregate(): string;
    public function getErrors(): array;
}