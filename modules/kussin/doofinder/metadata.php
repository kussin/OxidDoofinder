<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

use OxidEsales\Eshop\Application\Controller\ArticleListController;
use OxidEsales\Eshop\Application\Controller\ManufacturerListController;
use OxidEsales\Eshop\Application\Controller\SearchController;
use OxidEsales\Eshop\Application\Controller\VendorListController;

/**
 * Module information
 */
$aModule = array(
    'id' => 'kussin/doofinder',
    'title' => 'Kussin | Doofinder Connector for OXID eShop',
    'description' => '<p><strong>Doofinder Connector for OXID eShop</strong></p>
        <p><strong>NOTE:</strong> The <a href="https://support.doofinder.com/search/layer-settings/create-a-layer#create-a-layer" 
        target="_blank">search input CSS selector for Doofinder</a> is: <code style="color: red;">form.kussin-doofinder input#searchParam</code></p>',
    'thumbnail' => 'module.png',
    'version' => '1.3.0',
    'author' => 'Daniel Kussin',
    'url' => 'https://www.kussin.de',
    'email' => 'daniel.kussin@kussin.de',

    'extend' => array(
        ArticleListController::class => Kussin\Doofinder\Controller\ArticleListController::class,
        ManufacturerListController::class => Kussin\Doofinder\Controller\ManufacturerListController::class,
        SearchController::class => Kussin\Doofinder\Controller\SearchController::class,
        VendorListController::class => Kussin\Doofinder\Controller\VendorListController::class,
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
        array(
            'template' => 'widget/locator/sort.tpl',
            'block' => 'widget_locator_sort',
            'file' => '/views/blocks/widget_locator_sort.tpl'
        ),
        array(
            'template' => 'page/details/inc/related_products.tpl',
            'block' => 'details_relatedproducts_crossselling',
            'file' => '/views/blocks/details_relatedproducts_crossselling.tpl'
        ),
    ),

    'settings' => array(
        array(
            'group' => 'sKussinDoofinderSettings',
            'name' => 'sKussinDoofinderSearchHashId',
            'type' => 'str',
            'value' => '#f2b9',
        ),
        array(
            'group' => 'sKussinDoofinderSettingsV1',
            'name' => 'blKussinDoofinderV1Enabled',
            'type' => 'bool',
            'value' => 0,
        ),
        array(
            'group' => 'sKussinDoofinderSettingsV1',
            'name' => 'sKussinDoofinderInstallationId',
            'type' => 'str',
            'value' => '12345678-abcd-0000-wxyz-123456789xyz',
        ),
        array(
            'group' => 'sKussinDoofinderSettingsV1',
            'name' => 'sKussinDoofinderZone',
            'type' => 'str',
            'value' => 'eu1',
        ),

        array(
            'group' => 'sKussinDoofinderSettingsV2',
            'name' => 'sKussinDoofinderInstallationScriptUrl',
            'type' => 'str',
            'value' => 'https://eu1-config.doofinder.com/2.x/12345678-abcd-0000-wxyz-123456789xyz.js',
        ),

        array(
            'group' => 'sKussinDoofinderRecommendationsSettings',
            'name' => 'blKussinDoofinderRecommendationsEnabled',
            'type' => 'bool',
            'value' => 0,
        ),
        array(
            'group' => 'sKussinDoofinderRecommendationsSettings',
            'name' => 'blKussinDoofinderRecommendationsSubheadingEnabled',
            'type' => 'bool',
            'value' => 0,
        ),
        array(
            'group' => 'sKussinDoofinderRecommendationsSettings',
            'name' => 'sKussinDoofinderRecommendationsHashId',
            'type' => 'str',
            'value' => 'aeb873e432c45219ebf63b36c78811f0',
        ),
        array(
            'group' => 'sKussinDoofinderRecommendationsSettings',
            'name' => 'iKussinDoofinderRecommendationsNumberOfProducts',
            'type' => 'str',
            'value' => 10,
        ),
        array(
            'group' => 'sKussinDoofinderRecommendationsSettings',
            'name' => 'sKussinDoofinderRecommendationsCurrencySymbol',
            'type' => 'str',
            'value' => '€',
        ),
        array(
            'group' => 'sKussinDoofinderRecommendationsSettings',
            'name' => 'sKussinDoofinderRecommendationsCurrencyFormat',
            'type' => 'str',
            'value' => '%v %S',
        ),
        array(
            'group' => 'sKussinDoofinderFilterSettings',
            'name' => 'blKussinDoofinderFilterEnabled',
            'type' => 'bool',
            'value' => 0,
        ),
        array(
            'group' => 'sKussinDoofinderFilterSettings',
            'name' => 'aKussinDoofinderFilterMapping',
            'type' => 'aarr', 'value' => array(
                'category' => 'categories',
                'manufacturer' => 'brand',
                'vendor' => 'vendor',
            )
        ),
        array(
            'group' => 'sKussinDoofinderFilterSettings',
            'name' => 'blKussinDoofinderFilterUtmTrackingEnabled',
            'type' => 'bool',
            'value' => 1,
        ),
    )
);