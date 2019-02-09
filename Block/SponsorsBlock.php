<?php

/**
 * KaikMedia CompaniesModule
 *
 * @package    KaikmediaCompaniesModule
 * @author     Kaik <contact@kaikmedia.com>
 * @copyright  KaikMedia
 * @link       https://github.com/Kaik/KaikMediaCompanies.git
 */

namespace Kaikmedia\CompaniesModule\Block;

use Zikula\BlocksModule\AbstractBlockHandler;

/**
 * Class forums tree block.
 */
class SponsorsBlock extends AbstractBlockHandler
{
    /**
     * Display the block.
     */
    public function display(array $properties)
    {
//        $security = $this->get('zikula_dizkus_module.security');
//        // access throw component instance user
//        if (!$security->hasPermission(ACCESS_READ, false, ':block:bar', "$properties[bid]::")) {
//            return '';
//        }

        // check if template is set, if not, use the default block template
        $content     = empty($properties['content'])        ? ''                    : $properties['content'];
        $css         = empty($properties['css'])            ? ''                    : $properties['css'];
        $sponsorType = empty($properties['sponsorType'])    ? 0                     : $properties['sponsorType'];
        $template    = empty($properties['template'])       ? 'sponsors_default'    : $properties['template'];

        return $this->renderView("@KaikmediaCompaniesModule/Block/$template.html.twig", [
            'css'           => $css,
            'content'       => $content,
            'sponsorType'   => $sponsorType,
        ]);
    }

    public function getFormClassName()
    {
        return 'Kaikmedia\CompaniesModule\Form\Type\Block\SponsorsBlockType';
    }

    public function getFormTemplate()
    {
        return '@KaikmediaCompaniesModule/Block/sponsors.modify.html.twig';
    }
}
