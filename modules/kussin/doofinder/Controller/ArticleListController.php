<?php

namespace Kussin\Doofinder\Controller;

use OxidEsales\Eshop\Core\Registry;

class ArticleListController extends ArticleListController_parent
{

    public function getDoofinderFilterParams()
    {
        // LOAD CONFIG
        $oConfig = Registry::getConfig();

        // GET HASH ID
        $sSearchHashId = $oConfig->getConfigParam('sKussinDoofinderSearchHashId');

        // LAYER TYPE
        $sLayerType = $oConfig->getConfigParam('sKussinDoofinderFilterLayerType');

        // GET CATEGORY NAME
        $sEncodedCategoryName = urlencode(parent::getTitle());

        // BUILD SEARCH TERM
        $aSearchTerm = [
            'f[categories][]=' . $sEncodedCategoryName,
            'm=and',
            'q=' . $sEncodedCategoryName,
        ];

        return '/' . $sSearchHashId . '/' . $sLayerType . '/' . implode('&', $aSearchTerm);
    }

    public function getDoofinderUtmParams()
    {
        // LOAD CONFIG
        $oConfig = Registry::getConfig();

        // GET HASH ID
        $bEnabled = $oConfig->getConfigParam('blKussinDoofinderFilterUtmTrackingEnabled');

        if (!$bEnabled) {
            return '';
        }

        return implode('&', [
            'utm_source=oxideshop',
            'utm_medium=referral',
            'utm_campaign=doofinder',
            'utm_content=category_filter',
            'utm_term=' . urlencode(parent::getTitle()),
        ]);
    }
}