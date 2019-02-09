<?php

/**
 * KaikMedia CompaniesModule
 *
 * @package    KaikmediaCompaniesModule
 * @author     Kaik <contact@kaikmedia.com>
 * @copyright  KaikMedia
 * @link       https://github.com/Kaik/KaikMediaCompanies.git
 */

namespace Kaikmedia\CompaniesModule\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Implementation class for service definition loader using the DependencyInjection extension.
 */
class KaikmediaCompaniesExtension extends Extension
{
    /**
     * Loads service definition file containing persistent article handlers.
     * Responds to the app.config configuration parameter.
     *
     * @param array $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

        $loader->load('services.yml');
//        $loader->load('form_types.yml');
    }
}
