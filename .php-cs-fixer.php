<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('bootstrap/cache')
    ->exclude('storage')
    ->exclude('vendor')
    ->notPath('*.php.cache');

return (new PhpCsFixer\Config())
    ->setFinder($finder)
    ->setRules([
        '@PER' => true,
    ]);
