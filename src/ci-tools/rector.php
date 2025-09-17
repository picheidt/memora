<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__.'/../app',
        __DIR__.'/../database',
        __DIR__.'/../routes',
        __DIR__.'/../tests',
        __DIR__.'/../config',
    ]);

    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::PHP_82,
        LaravelSetList::LARAVEL_120,
    ]);
};
