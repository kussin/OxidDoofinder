<?php

namespace Kussin\Doofinder\Controller;

use OxidEsales\Eshop\Core\Registry;

class ManufacturerListController extends ManufacturerListController_parent
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
        $sEncodedManufacturerName = urlencode(parent::getTitle());

        // BUILD SEARCH TERM
        $aSearchTerm = [
            'f[brand][]=' . $sEncodedManufacturerName,
            'm=and',
            'q=' . $sEncodedManufacturerName,
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
            'utm_content=manufacturer_filter',
            'utm_term=' . urlencode(parent::getTitle()),
        ]);
    }
}