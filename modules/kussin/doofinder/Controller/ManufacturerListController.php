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

        // GET CATEGORY NAME
        $sEncodedManufacturerName = urlencode(parent::getTitle());

        // BUILD SEARCH TERM
        $aSearchTerm = [
            'f[brand][]=' . $sEncodedManufacturerName,
            'm=and',
            'q=' . $sEncodedManufacturerName,
        ];

        return '/' . $sSearchHashId . '/fullscreen/' . implode('&', $aSearchTerm);
    }
}