<?php

namespace Sensio\Bundle\HangmanBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class SensioHangmanExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        /*$config = current($configs);
        if (empty($config['word_length'])
                || !is_int($config['word_length'])) {
            $config['word_length'] = 8;
        }

        if (empty($config['dictionaries'])) {
            throw new \InvalidArgumentException('The SensionHangmanBundle bundle excepts a "dictionaries" array underthe "sension_hangman" configuration section in the main configuration file.');
        }*/

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }
}
