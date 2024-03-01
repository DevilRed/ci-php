<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;
// use Symplify\EasyCodingStandard\ValueObject\Set\SetList;
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;

return ECSConfig::configure()
    ->withPaths([__DIR__ . '/src', __DIR__ . '/tests'])
    ->withRules([
        ArraySyntaxFixer::class,
    ])
    ->withPreparedSets(psr12: true);






