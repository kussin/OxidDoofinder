<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

use OxidEsales\Eshop\Application\Controller\SearchController;

/**
 * Module information
 */
$aModule = array(
    'id' => 'kussin/doofinder',
    'title' => 'Kussin | Doofinder Connector for OXID eShop',
    'description' => 'Doofinder Connector for OXID eShop',
    'thumbnail' => 'module.png',
    'version' => '1.1.1',
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
        array(
            'template' => 'page/details/inc/related_products.tpl',
            'block' => 'details_relatedproducts_crossselling',
            'file' => '/views/blocks/details_relatedproducts_crossselling.tpl'
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
        array(
            'group' => 'sKussinDoofinderSettings',
            'name' => 'sKussinDoofinderSearchHashId',
            'type' => 'str',
            'value' => '#f2b9',
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
    )
);