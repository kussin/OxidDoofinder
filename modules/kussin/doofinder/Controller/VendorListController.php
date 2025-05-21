<?php

namespace Kussin\Doofinder\Controller;

use OxidEsales\Eshop\Core\Registry;

class VendorListController extends VendorListController_parent
{

    public function getDoofinderFilterParams()
    {
        // LOAD CONFIG
        $oConfig = Registry::getConfig();

        // GET HASH ID
        $sSearchHashId = $oConfig->getConfigParam('sKussinDoofinderSearchHashId');

        // GET CATEGORY NAME
        $sEncodedVendorName = urlencode(parent::getTitle());

        // BUILD SEARCH TERM
        $aSearchTerm = [
            'f[brand][]=' . $sEncodedVendorName,
            'm=and',
            'q=' . $sEncodedVendorName,
        ];

        return '/' . $sSearchHashId . '/fullscreen/' . implode('&', $aSearchTerm);
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
            'utm_content=vendor_filter',
            'utm_term=' . urlencode(parent::getTitle()),
        ]);
    }
}