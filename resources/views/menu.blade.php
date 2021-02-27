@extends('layouts.app')
@section('content')

{{-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-flow~section-flow-summary~section-flow-template-installer~section-flo~67560caa-da74327255a921063014b93a350cde95232ab12445903cd4c054dd790b472f56.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-apps~section-apps-app-details~section-flow~section-flow-connector~sec~886ec812-d399c7a88b9def638f0e6090adbf93c63487fd48f111f883b928fd01a9f7724f.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow-summary~section-flow-v2-editor~section-flow-v2-list~section-flow-v2-run~s~d6dd756b-8f934264b5990bad39c9d00ea1bfb28899a1804c3fab899829947dd05d994554.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus~redirectLoop-52d01a3fab9db21035fb144d99b9fd68dc5421a80a1e6f66d2ceecc392714a2a.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@5.12.0/dist/styles.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus-7ef16ed3ca267fae1895131e2419f991293acca58903dd8fa535dfccb6d37c07.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow~section-flow-summary-d7573b2ea537d3e78f0e81a73fb8f01ab15911ddaded42fe8113529b8eda63a6.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~redirectLoop-397c5c84c3e19be74054e73232b51687a919eb05e9823b4fd9288f500e618db7.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin-5922f9e5df8c35d5e240a6eae550509b8bb11f1a0e54a31b63551788bb7cbd7f.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Admin-9c830cc9d44f554e374d96163ebcff1e11e0e5f67289567bb09426ad3cc86738.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/quickSearch-152d4093b196eb2a0b3adc64132a5b0c9c9560c61309458fff2a6b6cd75d0c38.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-6089ac47e6846d8fa846b0266537fde9cb2bf2dd2897dc99b49e10c4e8f065c9.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~GlimpseContainer~inventoryABCByProductReport~marketingTopTrafficSources~productdetails-c586b16555260251a2586bc10b130a0c783a0273895f1db379d7c915b22de34d.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~MobileCompatibleCollectionShow~collectiondetails~productdetails-782955f78b605054675906b78855c3121b05fe8a45ed0921cd6bd23a7393919b.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~productdetails-251d497266d613bfbbc2b83fef94a7e63d9b967571aa7c3530a75b23949b0d4b.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ManageProfile~MobileCompatibleCollectionShow~analyticsReportViewer~automaticdiscountdetails~collecti~9dd8907f-18e9d82e1bd2275259b9c7e4760b1e110397dea78420188bd809c26d526d36b1.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MobileCompatibleCollectionShow~collectiondetails~productdetails-e955e39878c1d7c105ddebb97aead2ae18151ed8cf7854d39430a718ffd78a96.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productdetails~productvariantdetails-393dbfbec3ea6c4212dbb51a09bde400f84ac1f7d4ad6ad96a0565e38f2dd33d.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productdetails-ef4076eba74ca7674df68628fe4a5cc62823970265e35b10b9f81e85f20191a8.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/PagePresence-566c4a11b98c08351e3cacb7f8595c0896a3b2d4e434e9dd8f5273832dfc2f13.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productVariantsCard-55bc3aa3a2c3b08780a34adf0a118544541432a987ce436cd862a2bc938a7c7a.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Metafields-f3f1c010d10e72f6b4c16b53deb419c8ea637b3c7bbe7978a12102265918d759.css" crossorigin="anonymous">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-25b8e6ce5ba4e27dc3ebd7c3be9c55caad6efad3d7f4ab3174250cf4fc3b9ce5.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-56d51c8cd7433d99fc28d8f3e29f79419679190c4096a55a796e449c43d83e87.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-4b83da42a10c62432faa4dd4e596ab4de5294526204d0289c7234e1301de1fc9.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/productVariantsCard-93d7d349e0362459bace6d8d2262222270058a4b0864f51622cdfa5f9e6afe12.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Metafields-6d391d4f9674c20d5dcf369c4f3f4ca30ea4cc774c804a8b2623d29344ff1bb2.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeModalHost~embeddedApp~embeddedapp~externalEditorActivity~purchaseShippingLabels~rep~b228dea6-205660eafbc42407def530ad994277bb4d02871c370b2a2682c7761992119463.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeModalHost~embeddedApp~embeddedapp~externalEditorActivity-4978a7ac65945f60b40bff82a5ea067d42811eb43c0686f8cb50d4b6e692b46e.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AppBridgeModalHost-deac695131b01d592593002e75fe3fcd805945afdfb6b20c444572df7cebdf68.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"> </script>
    
    <style type="text/css">

.cf:after { visibility: hidden; display: block; font-size: 0; content: " "; clear: both; height: 0; }
* html .cf { zoom: 1; }
*:first-child+html .cf { zoom: 1; }

/**
 * Nestable
 */

.dd { position: relative; display: block; margin: 0; padding: 0; max-width: 100%; list-style: none; font-size: 13px; line-height: 20px; }

.dd-list { display: block; position: relative; margin: 0; padding: 0; list-style: none; }
.dd-list .dd-list { padding-left: 30px; }
.dd-collapsed .dd-list { display: none; }

.dd-item,
.dd-empty,
.dd-placeholder { display: block; position: relative; margin: 0; padding: 0; min-height: 20px; font-size: 13px; line-height: 20px; }

.dd-handle { display: block; height: 30px; margin: 0px 0; padding: 5px 10px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
    background: #FFFFFF;
    -webkit-border-radius: 0px;
            border-radius: 0px;
    box-sizing: border-box; -moz-box-sizing: border-box;
}
.dd-handle:hover { color: #2ea8e5; background: #fff; }

.dd-item > button { display: block; position: relative; cursor: pointer; float: left; width: 25px; height: 20px; margin: 5px 0; padding: 0; text-indent: 100%; white-space: nowrap; overflow: hidden; border: 0; background: transparent; font-size: 12px; line-height: 1; text-align: center; font-weight: bold; }
.dd-item > button:before { content: '+'; display: block; position: absolute; width: 100%; text-align: center; text-indent: 0; }
.dd-item > button[data-action="collapse"]:before { content: '-'; }

.dd-placeholder,
.dd-empty { margin: 5px 0; padding: 0; min-height: 30px; background: #f2fbff; border: 1px dashed #b6bcbf; box-sizing: border-box; -moz-box-sizing: border-box; }
.dd-empty { border: 1px dashed #bbb; min-height: 100px; background-color: #e5e5e5;
    background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                      -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
    background-image:    -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                         -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
    background-image:         linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
                              linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
    background-size: 60px 60px;
    background-position: 0 0, 30px 30px;
}

.dd-dragel { position: absolute; pointer-events: none; z-index: 9999; }
.dd-dragel > .dd-item .dd-handle { margin-top: 0; }
.dd-dragel .dd-handle {
    -webkit-box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
            box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
}

/**
 * Nestable Extras
 */

.nestable-lists { display: block; clear: both; padding: 0px 0; width: 100%; border: 0; border-top: 0px solid #ddd; border-bottom: 2px solid #ddd; }

#nestable-menu { padding: 0; margin: 20px 0; }

#nestable-output,
#nestable2-output { width: 100%; height: 7em; font-size: 0.75em; line-height: 1.333333em; font-family: Consolas, monospace; padding: 5px; box-sizing: border-box; -moz-box-sizing: border-box; }


@media only screen and (min-width: 700px) {

    .dd { float: left; width: 100%; }
    .dd + .dd { margin-left: 2%; }

}

.dd-hover > .dd-handle { background: #2ea8e5 !important; }

/**
 * Nestable Draggable Handles
 */

.dd3-content { display: block; height: 30px; margin: 5px 0; padding: 5px 10px 5px 40px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
    background: #fafafa;
    background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
    background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
    background:         linear-gradient(top, #fafafa 0%, #eee 100%);
    -webkit-border-radius: 0px;
            border-radius: 0px;
    box-sizing: border-box; -moz-box-sizing: border-box;
}
.dd3-content:hover { color: #2ea8e5; background: #fff; }

.dd-dragel > .dd3-item > .dd3-content { margin: 0; }

.dd3-item > button { margin-left: 30px; }

.dd3-handle { position: absolute; margin: 0; left: 0; top: 0; cursor: pointer; width: 30px; text-indent: 100%; white-space: nowrap; overflow: hidden;
    border: 1px solid #aaa;
    background: #ddd;
    background: -webkit-linear-gradient(top, #ddd 0%, #bbb 100%);
    background:    -moz-linear-gradient(top, #ddd 0%, #bbb 100%);
    background:         linear-gradient(top, #ddd 0%, #bbb 100%);
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.dd3-handle:before { content: '≡'; display: block; position: absolute; left: 0; top: 3px; width: 100%; text-align: center; text-indent: 0; color: #fff; font-size: 20px; font-weight: normal; }
.dd3-handle:hover { background: #ddd; }

/**
 * Socialite
 */

.socialite { display: block; float: left; height: 35px; }

    </style> --}}

<div class="Polaris-Frame__ContextualSaveBar_14m7v Polaris-Frame-CSSAnimation--startFade_1gu4x"></div>
                    <main class="Polaris-Frame__Main_yj28s Polaris-Frame__Main--newDesignLanguage_129jf" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
                        <div class="Polaris-Frame__Content_xd1mk">
                            <div class="Polaris-Page_yisnh Polaris-Page--newDesignLanguage_1rik8">
                                <div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--hasNavigation_gfpa8 Polaris-Page-Header--hasActionMenu_1wx04 Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6">
                                    <div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
                                        <div class="Polaris-Page-Header__BreadcrumbWrapper_1tgwk Polaris-Page-Header--newDesignLanguage_1rik8">
                                            <nav role="navigation"><a href="/home" data-polaris-unstyled="true" class="Polaris-Breadcrumbs__Breadcrumb_llsun Polaris-Breadcrumbs--newDesignLanguage_1rik8"><span class="Polaris-Breadcrumbs__ContentWrapper_1yvfo"><span class="Polaris-Breadcrumbs__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                    <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                                                                </svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Pages</span></span></a></nav>
                                        </div>
                                        <div class="Polaris-Page-Header__TitleWrapper_bejfn">
                                            <div>
                                                <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                    <div class="Polaris-Header-Title_2qj8j">
                                                        <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Add Menu</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {!! Menu::render() !!}                        

                                {{-- <div class="Polaris-Frame__ContextualSaveBar_14m7v Polaris-Frame-CSSAnimation--startFade_1gu4x"></div>
                                <main class="Polaris-Frame__Main_yj28s Polaris-Frame__Main--newDesignLanguage_129jf" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
                                    <div class="Polaris-Frame__Content_xd1mk">
                                        <div class="Polaris-Page_yisnh Polaris-Page--newDesignLanguage_1rik8">
                                            <div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--hasNavigation_gfpa8 Polaris-Page-Header--hasActionMenu_1wx04 Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6">
                                                <div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
                                                    <div class="Polaris-Page-Header__BreadcrumbWrapper_1tgwk Polaris-Page-Header--newDesignLanguage_1rik8">
                                                        <nav role="navigation"><a href="/navigation" data-polaris-unstyled="true" class="Polaris-Breadcrumbs__Breadcrumb_llsun Polaris-Breadcrumbs--newDesignLanguage_1rik8"><span class="Polaris-Breadcrumbs__ContentWrapper_1yvfo"><span class="Polaris-Breadcrumbs__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                                                                            </svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Pages</span></span></a></nav>
                                                    </div>
                                                    <div class="Polaris-Page-Header__TitleWrapper_bejfn">
                                                        <div>
                                                            <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                                <div class="Polaris-Header-Title_2qj8j">
                                                                    <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Add Menu</h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Polaris-Page__Content_xd1mk">
                                                <div class="_1j4h2">
                                                    <form autocomplete="off" method="post">
                                                        <div class="Polaris-Layout_sl20u Polaris-Layout--newDesignLanguage_1rik8">
                                                            <div class="Polaris-Layout__Section_1b1h1"></div>
                                                            <div class="Polaris-Layout__Section_1b1h1">
                                                                <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                                                                    <div class="Polaris-Card__Section_1b1h1">
                                                                        <div class="Polaris-FormLayout_1wntl">
                                                                            <div class="Polaris-FormLayout__Item_yiyol">
                                                                                <div class="">
                                                                                    <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                        <div class="Polaris-Label_2vd36"><label id="PolarisTextField1Label" for="PolarisTextField1" class="Polaris-Label__Text_yj3uv">Title</label></div>
                                                                                    </div>
                                                                                    <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                                        <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                            <div class="Polaris-TextField_1spwi Polaris-TextField--hasValue_1mx8d Polaris-TextField--newDesignLanguage_1rik8"><input name="title" id="PolarisTextField1" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="false" placeholder="e.g. Sidebar menu">
                                                                                                <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8" id="Polaris-Card--newDesignLanguage_1rik8">
                                                                   
                                                                    <div class="Polaris-Card__Section_1b1h1">
                                                                        
                                                                        <h2 class="Polaris-Heading_1brcv">Menu items</h2>
                                                                    </div>
                                                                    
                                                                    <div class="Polaris-Card__Section_1b1h1" id="Polaris-Card__Section_1b1h1_emptybox">
                                                                    <div style="padding: 36px 32px; text-align: center;"><span class="Polaris-TextStyle--variationSubdued">This menu doesn’t have any items.</span></div>
                                                                    
                                                                    </div>
                                                                    
                                                                    <div class="Polaris-Card__Section_1b1h1" style="padding: 0;">
                                                                    
                                                                   
                                                                    
                                                                    </div>
                                                                    <div class="Polaris-Card__Section_1b1h1" style="padding: 0;">
                                                                       <div class="cf nestable-lists">
            
                    <div class="dd" id="nestable">
                        <ol class="dd-list dd-list-main">
                            <li class="dd-item" data-id="1">
                                <div class="dd-handle">Item 1</div>
                            </li>
                            <li class="dd-item" data-id="2">
                                <div class="dd-handle">Item 2</div>
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="3"><div class="dd-handle">Item 3</div></li>
                                    <li class="dd-item" data-id="4"><div class="dd-handle">Item 4</div></li>
                                    <li class="dd-item" data-id="5">
                                        <div class="dd-handle">Item 5</div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="6"><div class="dd-handle">Item 6</div></li>
                                            <li class="dd-item" data-id="7"><div class="dd-handle">Item 7</div></li>
                                            <li class="dd-item" data-id="8"><div class="dd-handle">Item 8</div></li>
                                        </ol>
                                    </li>
                                    <li class="dd-item" data-id="9"><div class="dd-handle">Item 9</div></li>
                                    <li class="dd-item" data-id="10"><div class="dd-handle">Item 10</div></li>
                                </ol>
                            </li>
                            <li class="dd-item" data-id="11">
                                <div class="dd-handle">Item 11</div>
                            </li>
                            <li class="dd-item" data-id="12">
                                <div class="dd-handle">Item 12</div>
                            </li>
                        </ol>
                    </div>
            
               
            
                </div>
                                                                    
                                                                    </div>
                                                                    <div class="Polaris-Card__Section_1b1h1" style="padding: 0;">
                                                                    
                                                                    <button class="Polaris-Button Polaris-Button--fullWidth" type="button" style="border: none;justify-content: flex-start; padding: 16px 20px" onclick="Display_Call()"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">
                                                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="height: 20px;"><path d="M3 3h1V1H2.5A1.5 1.5 0 001 2.5V4h2V3zM6 3h3V1H6v2zM11 3h3V1h-3v2zM9 19H6v-2h3v2zM11 19h3v-2h-3v2zM17 4V3h-1V1h1.5A1.5 1.5 0 0119 2.5V4h-2zM3 17v-1H1v1.5A1.5 1.5 0 002.5 19H4v-2H3zM16 17h1v-1h2v1.5a1.5 1.5 0 01-1.5 1.5H16v-2zM10 6a1 1 0 011 1v2h2a1 1 0 110 2h-2v2a1 1 0 11-2 0v-2H7a1 1 0 110-2h2V7a1 1 0 011-1zM1 9V6h2v3H1zM1 11v3h2v-3H1zM17 9V6h2v3h-2zM17 11v3h2v-3h-2z" fill="#2C6ECB"/></svg> 
                                                                     </span><span class="Polaris-TextStyle--variationStrong" style="margin-left: 10px; color: #2C6ED5;">Add Menu Item</span></span></button>
                                                                     
                                                                    </div>
                                                                </div>
                                                                <div></div>
                                                            </div>
            
                                                            <div class="Polaris-Layout__Section_1b1h1 Polaris-Layout__Section--secondary_1sx8i">
                                                               
            
            
            
                                                                <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                                                                    <div class="Polaris-Card__Header_z4uwg">
                                                                        <h2 class="Polaris-Heading_1brcv">Handle</h2>
                                                                    </div>
                                                                    <div class="Polaris-Card__Section_1b1h1">
                                                                        <div class="Polaris-TextContainer_szg8b"><span class="Polaris-TextStyle--variationSubdued">A handle is used to reference a menu in Liquid. e.g. a menu with the title “Sidebar menu” would have the handle sidebar-menu by default..</span>
                                                                           <input type="text" style="width: 100%; border: solid 1px #AEB4B9; height: 30px;border-radius: 3px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="Polaris-Layout__Section_1b1h1">
                                                                <div class="Polaris-PageActions_fcnua">
                                                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--spacingTight_1o4d6 Polaris-Stack--distributionEqualSpacing_x9cqm">
                                                                        <div class="Polaris-Stack__Item_yiyol">
                                                                            <div class="Polaris-ButtonGroup_yy85z">
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="Polaris-Stack__Item_yiyol">
                                                                        <a href="Navigation.html" style="text-decoration: none;color: #272223; margin-right: 20px;"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--default_7k9zs " type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Cancel</span></span></button></a><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs " type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button></div>
                                                                    </div>
                                                                </div>
                                                            </div><span class="Polaris-VisuallyHidden_yrtt5"><input type="submit"></span>
                                                        </div><span class="Polaris-VisuallyHidden_yrtt5"><button type="submit" aria-hidden="true" tabindex="-1">Submit</button></span>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                        <div id="PolarisPortalsContainer">
                            <div data-portal-id="popover-Polarisportal22"></div>
                            <div data-portal-id="tooltip-Polarisportal23"></div>
                            <div data-portal-id="popover-Polarisportal24"></div>
                            <div data-portal-id="tooltip-Polarisportal25"></div>
                            <div data-portal-id="tooltip-Polarisportal26"></div>
                            <div data-portal-id="tooltip-Polarisportal27"></div>
                            <div data-portal-id="tooltip-Polarisportal28"></div>
                            <div data-portal-id="tooltip-Polarisportal29"></div>
                            <div data-portal-id="tooltip-Polarisportal30"></div>
                            <div data-portal-id="tooltip-Polarisportal31"></div>
                            <div data-portal-id="tooltip-Polarisportal32"></div>
                            <div data-portal-id="popover-Polarisportal33"></div>
                            <div data-portal-id="tooltip-Polarisportal34"></div>
                            <div data-portal-id="popover-Polarisportal35"></div>
                            <div data-portal-id="tooltip-Polarisportal36"></div>
                            <div data-portal-id="popover-Polarisportal37"></div>
                            <div data-portal-id="tooltip-Polarisportal38"></div>
                            <div data-portal-id="tooltip-Polarisportal39"></div>
                            <div data-portal-id="tooltip-Polarisportal40"></div>
                            <div data-portal-id="tooltip-Polarisportal41"></div>
                            <div data-portal-id="modal-Polarisportal1">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal2">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal3">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal4">
                                <div></div>
                            </div>
                            <div data-portal-id="popover-Polarisportal42"></div>
                            <div data-portal-id="modal-Polarisportal5">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal6">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal7">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal8">
                                <div></div>
                            </div>
                            <div data-portal-id="popover-Polarisportal43"></div>
                            <div data-portal-id="modal-Polarisportal9">
                                <div></div>
                            </div>
                            <div data-portal-id="popover-Polarisportal44"></div>
                            <div data-portal-id="modal-Polarisportal10">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal11">
                                <div></div>
                            </div>
                            <div data-portal-id="popover-Polarisportal45"></div>
                            <div data-portal-id="popover-Polarisportal46"></div>
                            <div data-portal-id="popover-Polarisportal47"></div>
                            <div data-portal-id="modal-Polarisportal12">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal13">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal14">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal15">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal16">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal17">
                                <div></div>
                            </div>
                            <div data-portal-id="chromeless-remote-modal-Polarisportal18">
                                <div>
                                    <div></div>
                                </div>
                            </div>
                            <div data-portal-id="modal-Polarisportal19">
                                <div></div>
                            </div>
                            <div data-portal-id="modal-Polarisportal20">
                                <div></div>
                            </div>
                            <div data-portal-id="Polarisportal21">
                                <div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
                            </div>
                            <div data-portal-id="popover-Polarisportal48"></div>
                            <div data-portal-id="popover-Polarisportal49"></div>
                            <div data-portal-id="modal-Polarisportal52">
                                <div></div>
                            </div>
                            <div data-portal-id="popover-Polarisportal53"></div>
                            <div data-portal-id="popover-Polarisportal54"></div>
                            <div data-portal-id="popover-Polarisportal55"></div>
                            <div data-portal-id="popover-Polarisportal56"></div>
                        </div>
                    </div>
                </div>
            
                <!--Notes Editor-->
            
                <div id="PolarisPortalsContainer-for-Add-Notes" style="visibility: hidden;">
                    <div data-portal-id="popover-Polarisportal3"></div>
                    <div data-portal-id="modal-Polarisportal1">
                        <div></div>
                    </div>
                    <div data-portal-id="Polarisportal2">
                        <div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
                    </div>
                    <div data-portal-id="popover-Polarisportal8"></div>
                    <div data-portal-id="popover-Polarisportal9"></div>
                    <div data-portal-id="modal-Polarisportal113">
                        <div></div>
                    </div>
                    <div data-portal-id="modal-Polarisportal114">
                        <div>
                            <div class="Polaris-Modal-Dialog__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true">
                                <div>
                                    <div role="dialog" aria-labelledby="Polarismodal-header11" tabindex="-1" class="Polaris-Modal-Dialog_n3qgo">
                                        <div class="Polaris-Modal-Dialog__Modal_2v9yc">
                                            <div class="Polaris-Modal-Header_z4uwg">
                                                <div id="Polarismodal-header11" class="Polaris-Modal-Header__Title_2qj8j">
                                                    <h2 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">Add note</h2>
                                                </div><button class="Polaris-Modal-CloseButton_bl13t" aria-label="Close" onclick="Close_Call()"><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLighter_2s08r Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                            <path d="M11.414 10l6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                                        </svg></span></button>
            
                                            </div>
                                            <div class="Polaris-Modal__BodyWrapper_1kb1f">
                                                <div class="Polaris-Modal__Body_yjdx1 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj" data-polaris-scrollable="true">
                                                    <section class="Polaris-Modal-Section_1b1h1">
                                                        <div class="Polaris-TextContainer_szg8b">
                                                            <div class="">
                                                                <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                    <div class="Polaris-Label_2vd36">Name<label id="PolarisTextField7Label" for="PolarisTextField7" class="Polaris-Label__Text_yj3uv"></label></div>
                                                                </div>
                                                                <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                    <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                        <div class="Polaris-TextField_1spwi Polaris-TextField--multiline_1jgfe Polaris-TextField--newDesignLanguage_1rik8"><textarea id="PolarisTextField_ListElement" class="Polaris-TextField__Input_30ock" maxlength="5000" aria-labelledby="PolarisTextField7Label" aria-invalid="false" aria-multiline="true" style="height: 36px;border: 1px solid #C9CCCF; border-radius: 3px;"></textarea>
                                                                            <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                            <div aria-hidden="true" class="Polaris-TextField__Resizer_mlqsu">
                                                                                <div class="Polaris-TextField__DummyInput_1u3lq"><br></div>
                                                                                <div class="Polaris-TextField__DummyInput_1u3lq"><br></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                        </div>
                                                        <div class="Polaris-TextContainer_szg8b">
                                                            <div class="">
                                                                <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                    <div class="Polaris-Label_2vd36"><label id="PolarisTextField7Label" for="PolarisTextField7" class="Polaris-Label__Text_yj3uv">Page</label></div>
                                                                </div>
                                                                <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                                                                    <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                        <div class="Polaris-TextField_1spwi Polaris-TextField--multiline_1jgfe Polaris-TextField--newDesignLanguage_1rik8">
                                                                            <select style="height: 30px;width: 100%;border: 1px solid #C9CCCF;">
                                                                               <option>a</option>
                                                                               <option>a</option>
                                                                               <option>a</option>
                                                                                <optgroup>
                                                                                    <option>b</option>
                                                                                    <option>b</option>
                                                                                    <option>b</option>
                                                                                    <option>b</option>
                                                                                </optgroup>
                                                                            </select>
                                                                            
                                                                            <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                                                            <div aria-hidden="true" class="Polaris-TextField__Resizer_mlqsu">
                                                                                <div class="Polaris-TextField__DummyInput_1u3lq"><br></div>
                                                                                <div class="Polaris-TextField__DummyInput_1u3lq"><br></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="Polaris-Modal-Footer_z4ij5">
                                                <div class="Polaris-Modal-Footer__FooterContent_pymp5">
                                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentCenter_1rtaw">
                                                        <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt"></div>
                                                        <div class="Polaris-Stack__Item_yiyol">
                                                            <div class="Polaris-ButtonGroup_yy85z">
                                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Close_Call()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Cancel</span></span></button></div>
                                                                <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" id="Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Close_Call();"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button></div>
                                                                <script>
                                                                    
                                                                 $('#Polaris-Button--newDesignLanguage_1rik8').click(function()
                                                                                            {
                                                                     var str = $("#PolarisTextField_ListElement").val();
                                                                     if(str!=''){
                                                                     $('#Polaris-Card__Section_1b1h1_emptybox').hide()
                                                                     $( ".dd-list-main").append("<li class='dd-item' data-id='1'><div class='dd-handle'>Item 1</div></li>" 
                                                             )}
                                                                     else   {
                                                                         alert('No Value Found');
                                                                     }
                                                                 });
                                                                
                                                                </script>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Polaris-Backdrop_1x2i2"></div>
                    </div>
                    <div data-portal-id="modal-Polarisportal115">
                        <div></div>
                    </div>
                    <div data-portal-id="modal-Polarisportal116">
                        <div></div>
                    </div>
                    <div data-portal-id="modal-Polarisportal117">
                        <div></div>
                    </div>
                    <div data-portal-id="modal-Polarisportal118">
                        <div></div>
                    </div>
                    <div data-portal-id="modal-Polarisportal119">
                        <div></div>
                    </div>
                    <div data-portal-id="modal-Polarisportal120">
                        <div></div>
                    </div>
                    <div data-portal-id="popover-Polarisportal123"></div>
                    <div data-portal-id="popover-Polarisportal124"></div>
                    <div data-portal-id="modal-Polarisportal125">
                        <div></div>
                    </div>
                    <div data-portal-id="popover-Polarisportal127"></div>
                    <div data-portal-id="modal-Polarisportal128">
                        <div></div>
                    </div>
                    <div data-portal-id="tooltip-Polarisportal129"></div>
                    <div data-portal-id="popover-Polarisportal130"></div>
                    <div data-portal-id="tooltip-Polarisportal131"></div>
                    <div data-portal-id="popover-Polarisportal132"></div>
                    <div data-portal-id="tooltip-Polarisportal133"></div>
                    <div data-portal-id="popover-Polarisportal134"></div>
                    <div data-portal-id="popover-Polarisportal135"></div>
                    <div data-portal-id="tooltip-Polarisportal136"></div>
                    <div data-portal-id="popover-Polarisportal137"></div>
                    <div data-portal-id="popover-Polarisportal138"></div>
                </div>
            
                <!--Notes Editor-->
            <script>
                   function Display_Ad() {
                        document.getElementById('Account_div').style.visibility = "visible";
                    }
            
                    function Close_Ad() {
                        document.getElementById('Account_div').style.visibility = "hidden";
                    }
                    function Close_Call() {
                        var x = document.getElementById('PolarisPortalsContainer-for-Add-Notes').style.visibility = "hidden";
                    }
            
                    function Display_Call() {
                        var x = document.getElementById('PolarisPortalsContainer-for-Add-Notes').style.visibility = "visible";
                    }
            
                    function Close_Contact() {
                        var x = document.getElementById('PolarisPortalsContainer_for_Contact').style.visibility = "hidden";
                    }
            
                    function Display_Contact() {
                        var x = document.getElementById('PolarisPortalsContainer_for_Contact').style.visibility = "visible";
                    }
                    function Close_Shipping() {
                        var x = document.getElementById('PolarisPortalsContainer-Shipping').style.visibility = "hidden";
                    }
            
                    function Display_Shipping() {
                        var x = document.getElementById('PolarisPortalsContainer-Shipping').style.visibility = "visible";
                    }
                </script>
               
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="jquery.nestable.js"></script>
               <script>
            
            $(document).ready(function()
            {
            
                var updateOutput = function(e)
                {
                    var list   = e.length ? e : $(e.target),
                        output = list.data('output');
                    if (window.JSON) {
                        output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                    } else {
                        output.val('JSON browser support required for this demo.');
                    }
                };
            
                // activate Nestable for list 1
                $('#nestable').nestable({
                    group: 1
                })
                .on('change', updateOutput);
            
                // activate Nestable for list 2
                $('#nestable2').nestable({
                    group: 1
                })
                .on('change', updateOutput);
            
                // output initial serialised data
                updateOutput($('#nestable').data('output', $('#nestable-output')));
                updateOutput($('#nestable2').data('output', $('#nestable2-output')));
            
                $('#nestable-menu').on('click', function(e)
                {
                    var target = $(e.target),
                        action = target.data('action');
                    if (action === 'expand-all') {
                        $('.dd').nestable('expandAll');
                    }
                    if (action === 'collapse-all') {
                        $('.dd').nestable('collapseAll');
                    }
                });
            
                $('#nestable3').nestable();
            
            });
            </script>
                <style>
                    .tb_button {
                        padding: 1px;
                        cursor: pointer;
                        border-right: 1px solid #8b8b8b;
                        border-left: 1px solid #FFF;
                        border-bottom: 1px solid #fff;
                    }
            
                    .tb_button.hover {
                        border: 2px outset #def;
                        background-color: #f8f8f8 !important;
                    }
            
                    .ws_toolbar {
                        z-index: 100000
                    }
            
                    .ws_toolbar .ws_tb_btn {
                        cursor: pointer;
                        border: 1px solid #555;
                        padding: 3px
                    }
            
                    .tb_highlight {
                        background-color: yellow
                    }
            
                    .tb_hide {
                        visibility: hidden
                    }
            
                    .ws_toolbar img {
                        padding: 2px;
                        margin: 0px
                    }
                </style> --}}

                <br><br>

                <?php 
                use Harimayco\Menu\Facades\Menu;
                $public_menu = Menu::getByName('Testing');
                ?>
                
                
                <div class="nav-wrap">
                    <div class="btn-menu">
                        <span></span>
                    </div>
                    <nav id="mainnav" class="mainnav">
                
                        @if($public_menu)
                        <ul class="menu">
                            @foreach($public_menu as $menu)
                            <li class="">
                                <a href="{{ $menu['link'] }}" title="">{{ $menu['label'] }}</a>
                                @if( $menu['child'] )
                                <ul class="sub-menu">
                                    @foreach( $menu['child'] as $child )
                                        <li class=""><a href="{{ $child['link'] }}" title="">{{ $child['label'] }}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        @endif
                
                        </ul>
                    </nav>
                 </div>


@endsection

@push('scripts')
    {!! Menu::scripts() !!}
@endpush