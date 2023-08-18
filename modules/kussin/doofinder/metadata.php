<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.0';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'wmdk/tracking',
    'title'        => 'KUSSIN | GTM Basic Integrator for OXID eShop 6.1.x',
    'description'  => array(
        'de' => 'Fügt den <a href="https://www.kussin.de/marketing/google-tag-manager-x-shopify-e-commerce-datalayer-einrichten/" target="_blank">GTM Code inkl. Data Layer</a> zu OXID eSales hinzu.',
        'en' => 'Adds <a href="https://www.kussin.de/marketing/google-tag-manager-x-shopify-e-commerce-datalayer-einrichten/" target="_blank">gtm code incl. data layer</a> to OXID eSales.',
    ),
    'thumbnail'    => 'module.png',
    'version'      => '0.1.0',
    'author'       => 'Daniel Kussin',
    'url'          => 'https://www.kussin.de',
    'email'        => 'daniel.kussin@kussin.de',

    'templates' => array(
        'wmdk_default.tpl' => 'wmdk/tracking/views/blocks/default.tpl',

        'wmdk_default_head.tpl' => 'wmdk/tracking/views/blocks/head.tpl',
        'wmdk_default_body.tpl' => 'wmdk/tracking/views/blocks/body.tpl',

        'wmdk_class_start.tpl' => 'wmdk/tracking/views/blocks/classes/start.tpl',
        'wmdk_class_search.tpl' => 'wmdk/tracking/views/blocks/classes/search.tpl',
        'wmdk_class_alist.tpl' => 'wmdk/tracking/views/blocks/classes/alist.tpl',
        'wmdk_class_manufacturerlist.tpl' => 'wmdk/tracking/views/blocks/classes/manufacturerlist.tpl',
        'wmdk_class_details.tpl' => 'wmdk/tracking/views/blocks/classes/details.tpl',
        'wmdk_class_basket.tpl' => 'wmdk/tracking/views/blocks/classes/basket.tpl',
        'wmdk_class_user.tpl' => 'wmdk/tracking/views/blocks/classes/user.tpl',
        'wmdk_class_payment.tpl' => 'wmdk/tracking/views/blocks/classes/payment.tpl',
        'wmdk_class_order.tpl' => 'wmdk/tracking/views/blocks/classes/order.tpl',
        'wmdk_class_thankyou.tpl' => 'wmdk/tracking/views/blocks/classes/thankyou.tpl',
        'wmdk_class_register.tpl' => 'wmdk/tracking/views/blocks/classes/register.tpl',
        'wmdk_class_account.tpl' => 'wmdk/tracking/views/blocks/classes/account.tpl',
        'wmdk_class_account_menu.tpl' => 'wmdk/tracking/views/blocks/classes/account-menu.tpl',
        'wmdk_class_content.tpl' => 'wmdk/tracking/views/blocks/classes/content.tpl',
        'wmdk_class_error404.tpl' => 'wmdk/tracking/views/blocks/classes/error-404.tpl',

        // Google Tag Manager
        'wmdk_google_tag_manager_default.tpl' => 'wmdk/tracking/google-tag-manager/default.tpl',
        'wmdk_google_tag_manager_noscript.tpl' => 'wmdk/tracking/google-tag-manager/no-script.tpl',
        'wmdk_google_tag_manager_thankyou.tpl' => 'wmdk/tracking/google-tag-manager/thankyou.tpl',
    ),
    
    'blocks' => array(
        array(
            'template'	=> 'layout/base.tpl',
            'block'		=> 'head_meta_robots',
            'file' 		=> '/views/blocks/head_meta_robots.tpl'
        ),
        array(
            'template'	=> 'layout/base.tpl',
            'block'		=> 'theme_svg_icons',
            'file' 		=> '/views/blocks/theme_svg_icons.tpl'
        ),
        array(
            'template'	=> 'layout/base.tpl',
            'block'		=> 'base_js',
            'file' 		=> '/views/blocks/base_js.tpl'
        ),
    ),

    'settings' => array(
        array('group' => 'sWmdkTrackingGoogleTagManagerSettings', 'name' => 'sWmdkTrackingGoogleTagManagerId', 'type' => 'str', 'value' => 'GTM-KLDD9DE'),
    )
);