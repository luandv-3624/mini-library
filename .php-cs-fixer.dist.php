<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/routes',
        __DIR__ . '/database',
        __DIR__ . '/resources/views',
    ])
    ->name('*.php')
    ->name('*.blade.php') // format luôn blade nếu muốn
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true, // chuẩn PSR12
        'array_syntax' => ['syntax' => 'short'],
        'single_quote' => true,
        'no_unused_imports' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'trailing_comma_in_multiline' => true,
        'phpdoc_align' => ['align' => 'left'],
        // Không có rule line_length trong PHP CS Fixer
        // Muốn giới hạn ký tự/dòng thì chỉnh trong VSCode
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder);
