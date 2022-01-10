<?php

namespace Velhron\DadataBundle\Tests;

use JetBrains\PhpStorm\Pure;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;
use Velhron\DadataBundle\VelhronDadataBundle;

class TestingKernel extends Kernel
{
    /**
     * {@inheritdoc}
     */
    #[Pure]
    public function registerBundles(): array
    {
        return [
            new VelhronDadataBundle(),
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
