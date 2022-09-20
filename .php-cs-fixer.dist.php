<?php

$finder = PhpCsFixer\Finder::create()->in([
    __DIR__ . '/src',
    __DIR__ . '/tests/unit'
]);

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PSR12' => true
])->setFinder($finder);