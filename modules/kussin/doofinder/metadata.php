<?php
/**
 * Metadata version
 */

use OxidEsales\Eshop\Application\Controller\SearchController;

$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id' => 'kussin/doofinder',
    'title' => 'Kussin | Doofinder Connector for OXID eShop',
    'description' => 'Doofinder Connector for OXID eShop',
    'thumbnail' => 'module.png',
    'version' => '0.0.1',
    'author' => 'Daniel Kussin',
    'url' => 'https://www.kussin.de',
    'email' => 'daniel.kussin@kussin.de',

    'extend' => array(
        SearchController::class => Kussin\Doofinder\Controller\SearchController::class,
    ),

    'blocks' => array(
        array(
            'template' => 'layout/base.tpl',
            'block' => 'base_js',
            'file' => '/views/blocks/base_js.tpl'
        ),
        array(
            'template' => 'widget/header/search.tpl',
            'block' => 'widget_header_search_form',
            'file' => '/views/blocks/widget_header_search_form.tpl'
        ),
    ),

    'settings' => array(
        array(
            'group' => 'sKussinDoofinderSettings',
            'name' => 'sKussinDoofinderInstallationId',
            'type' => 'str',
            'value' => '12345678-abcd-0000-wxyz-123456789xyz',
        ),
        array(
            'group' => 'sKussinDoofinderSettings',
            'name' => 'sKussinDoofinderZone',
            'type' => 'str',
            'value' => 'eu1',
        ),
    )
);