<?php

namespace Kussin\Doofinder\Controller;

class SearchController extends SearchController_parent
{    

    public function render()
    {
        $homepageUrl = $this->getConfig()->getShopHomeURL();

        // Set HTTP status code 302 (Found)
        header("HTTP/1.1 302 Found");

        // Perform the redirection
        header("Location: $homepageUrl");
        exit;
    }
}