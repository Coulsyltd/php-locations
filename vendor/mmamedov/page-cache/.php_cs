<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('vendor')
    ->exclude('examples/cache')
    ->exclude('examples/log')
    ->exclude('tests/tmp')
    ->exclude('docs')
    ->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers(array('-psr0'))
    ->finder($finder)
;
