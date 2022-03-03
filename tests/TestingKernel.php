<?php

namespace Gruzoveek\DadataBundle\Tests;

use JetBrains\PhpStorm\Pure;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;
use Gruzoveek\DadataBundle\GruzoveekDadataBundle;

class TestingKernel extends Kernel
{
    /**
     * {@inheritdoc}
     */
    #[Pure]
    public function registerBundles(): array
    {
        return [
            new GruzoveekDadataBundle(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/DependencyInjection/config.yaml');
    }
}
