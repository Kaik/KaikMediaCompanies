<?php

/**
 * KaikMedia CompaniesModule
 *
 * @package    KaikmediaCompaniesModule
 * @author     Kaik <contact@kaikmedia.com>
 * @copyright  KaikMedia
 * @link       https://github.com/Kaik/KaikMediaCompanies.git
 */

namespace Kaikmedia\CompaniesModule;

use Zikula\Core\AbstractExtensionInstaller;

class CompaniesModuleInstaller extends AbstractExtensionInstaller
{
    public function install()
    {
        return true;
    }

    public function upgrade($oldversion)
    {
        return true;
    }

    public function uninstall()
    {
        return true;
    }
}
