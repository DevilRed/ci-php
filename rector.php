<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;

return static function (RectorConfig $rectorConfig):
{
    $rectorConfig->paths([
        __DIR__ . '/.php-cs-fixer.dist.php',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    $rectorConfig->phpVersion(PhpVersion::PHP_83);
};
