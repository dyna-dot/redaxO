<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('watson')
    ->exclude('sprog')
    ->exclude('yform')
    ->exclude('yrewrite')
    ->exclude('fragments')
    ->exclude('releases')
    ->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'concat_without_spaces' => false,
        'return' => false,
        'empty_return' => false,
        'method_separation' => false,
        'no_empty_lines_after_phpdocs' => false,
        'phpdoc_no_package' => false,
        'phpdoc_to_comment' => false,
        'phpdoc_var_without_name' => false,
        'short_array_syntax' => true,
        'php4_constructor' => true,
    ])
    ->finder($finder)
;
