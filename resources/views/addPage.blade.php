@extends('layouts.app')
@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-flow~section-flow-summary~section-flow-template-installer~section-flo~67560caa-da74327255a921063014b93a350cde95232ab12445903cd4c054dd790b472f56.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-apps~section-apps-app-details~section-flow~section-flow-connector~sec~886ec812-d399c7a88b9def638f0e6090adbf93c63487fd48f111f883b928fd01a9f7724f.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow-summary~section-flow-v2-editor~section-flow-v2-list~section-flow-v2-run~s~d6dd756b-8f934264b5990bad39c9d00ea1bfb28899a1804c3fab899829947dd05d994554.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus~redirectLoop-52d01a3fab9db21035fb144d99b9fd68dc5421a80a1e6f66d2ceecc392714a2a.css" crossorigin="anonymous">
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

<div class="Polaris-Frame__ContextualSaveBar_14m7v Polaris-Frame-CSSAnimation--startFade_1gu4x"></div>
<main class="Polaris-Frame__Main_yj28s Polaris-Frame__Main--newDesignLanguage_129jf" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
<div class="Polaris-Frame__Content_xd1mk">
<div class="Polaris-Page_yisnh Polaris-Page--newDesignLanguage_1rik8">
<div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--hasNavigation_gfpa8 Polaris-Page-Header--hasActionMenu_1wx04 Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6">
<div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
<div class="Polaris-Page-Header__BreadcrumbWrapper_1tgwk Polaris-Page-Header--newDesignLanguage_1rik8">
<nav role="navigation"><a href="pages" data-polaris-unstyled="true" class="Polaris-Breadcrumbs__Breadcrumb_llsun Polaris-Breadcrumbs--newDesignLanguage_1rik8"><span class="Polaris-Breadcrumbs__ContentWrapper_1yvfo"><span class="Polaris-Breadcrumbs__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
</svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Pages</span></span></a></nav>
</div>
<div class="Polaris-Page-Header__TitleWrapper_bejfn">
<div>
<div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
<div class="Polaris-Header-Title_2qj8j">
<h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Add Page</h1>
</div>
</div>
</div>
</div>
<div class="Polaris-Page-Header__RightAlign_1ok1p">
<div class="Polaris-Page-Header__Actions_17m67">
<div class="Polaris-ActionMenu_1hlnt Polaris-ActionMenu--newDesignLanguage_1rik8">
<div class="Polaris-ActionMenu-Actions__ActionsLayout_w56ri Polaris-ActionMenu-Actions--newDesignLanguage_1rik8">
<div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--extraTight_1xh3x">
<div class="Polaris-ButtonGroup__Item_yiyol"><span class="Polaris-ActionMenu-SecondaryAction_1dl4i Polaris-ActionMenu-SecondaryAction--newDesignLanguage_1rik8"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M7.5 2A1.5 1.5 0 0 0 6 3.5V13a1 1 0 0 0 1 1h9.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 16.5 2h-9zm-4 4H4v10h10v.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 16.5v-9A1.5 1.5 0 0 1 3.5 6z"></path>
</svg></span></span><span class="Polaris-Button__Text_yj3uv">Duplicate</span></span></button></span></div>
<div class="Polaris-ButtonGroup__Item_yiyol"><span class="Polaris-ActionMenu-SecondaryAction_1dl4i Polaris-ActionMenu-SecondaryAction--newDesignLanguage_1rik8"><a href="https://akeneo-shop.myshopify.com/pages/faq" data-polaris-unstyled="true" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" target="_blank" rel="noopener noreferrer"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M17.928 9.628C17.837 9.399 15.611 4 10 4S2.162 9.399 2.07 9.628a1.017 1.017 0 0 0 0 .744C2.163 10.601 4.389 16 10 16s7.837-5.399 7.928-5.628a1.017 1.017 0 0 0 0-.744zM10 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-6a2 2 0 1 0 .002 4.001A2 2 0 0 0 9.999 8z"></path>
</svg></span></span><span class="Polaris-Button__Text_yj3uv">View page</span></span></a></span></div>
<div class="Polaris-ButtonGroup__Item_yiyol">
<div><span class="Polaris-ActionMenu-SecondaryAction_1dl4i Polaris-ActionMenu-SecondaryAction--newDesignLanguage_1rik8"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" tabindex="0" aria-controls="Polarispopover49" aria-owns="Polarispopover49" aria-expanded="false"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">More actions</span><span class="Polaris-Button__Icon_yj27d">
<div class="Polaris-Button__DisclosureIcon_j5n4l"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 8l5 5 5-5H5z"></path>
</svg></span></div>
</span></span></button></span></div>
</div>
</div>
</div>
</div>
<div class="Polaris-Page-Header__PaginationWrapper_x52mr">
<nav aria-label="Pagination">
<div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--segmented_150jh" data-buttongroup-segmented="true">
<div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--outline_1urzi Polaris-Button--disabled_hcuh9 Polaris-Button--iconOnly_viazp" aria-label="Previous" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414L8.414 10l4.293 4.293A.999.999 0 0 1 12 16z"></path>
</svg></span></span></span></button></div>
<div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--outline_1urzi Polaris-Button--disabled_hcuh9 Polaris-Button--iconOnly_viazp" aria-label="Next" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M8 16a.999.999 0 0 1-.707-1.707L11.586 10 7.293 5.707a.999.999 0 1 1 1.414-1.414l5 5a.999.999 0 0 1 0 1.414l-5 5A.997.997 0 0 1 8 16z"></path>
</svg></span></span></span></button></div>
</div>
</nav>
</div>
</div>
</div>
</div>
</div>
<div class="Polaris-Page__Content_xd1mk">
<div class="_1j4h2">
<form action="/addedPage" method="post">
    @csrf
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
<div class="Polaris-TextField_1spwi Polaris-TextField--hasValue_1mx8d Polaris-TextField--newDesignLanguage_1rik8">
    
    <input name="title" id="PolarisTextField1" value="3M MicroTouch™ Chassis 1123988" placeholder="Short sleeve t-shirt" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="false">

    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
</div>
</div>
</div>
</div>
</div>
<div class="Polaris-FormLayout__Item_yiyol">
<div>
<div class="">
<div class="Polaris-Labelled__LabelWrapper_bf6ys">
<div class="Polaris-Label_2vd36"><label id="product-descriptionLabel" for="product-description" class="Polaris-Label__Text_yj3uv">Description</label></div>
</div>
<div class="_1d9Re">
<div class="_34UdZ">
<div class="_6Soky">
<div class="Polaris-Stack_32wu2 Polaris-Stack--noWrap_vecks">
<div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
<div class="Polaris-Stack_32wu2 Polaris-Stack--spacingExtraTight_gv6hw">
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--segmented_150jh" data-buttongroup-segmented="true">
<div class="Polaris-ButtonGroup__Item_yiyol">
<div><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" aria-pressed="false" tabindex="0" aria-describedby="PolarisTooltipContent1" aria-controls="Polarispopover2" aria-owns="Polarispopover2" aria-expanded="false"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M15.9 14.2c-.1 0-.3 0-.5-.1-.2 0-.3-.1-.4-.2-.2-.1-.3-.2-.4-.3s-.2-.3-.2-.4l-3.9-9.1V4h-.8v.1c-.6 1.3-1.2 2.8-1.9 4.4-.7 1.7-1.4 3.2-1.9 4.5l-.3.6c-.1.1-.3.3-.5.4-.1 0-.3.1-.5.1s-.4.1-.5.1H4v.8h4.6v-.8h-.1c-.4 0-.8-.1-1.1-.2s-.4-.2-.4-.3v-.3c0-.1.1-.3.1-.5l.3-.7c.1-.2.3-.8.5-1.2h3.498l1 2.6v.2s0 .1-.3.1c-.3.1-.6.1-1 .1h-.1v1h5v-.8h-.1zm-5-4.2H8.2l1.3-3.2 1.4 3.2z"></path>
</svg></span></span><span class="Polaris-Button__Icon_yj27d">
<div class="Polaris-Button__DisclosureIcon_j5n4l"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 8l5 5 5-5H5z"></path>
</svg></span></div>
</span></span></button></span></div>
</div>
<div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" aria-pressed="false" tabindex="0" aria-describedby="PolarisTooltipContent2"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M15.582 11.42c-.327-.546-.436-.656-.764-.874-.327-.327-.764-.436-1.2-.655-.436-.108-.873-.217-1.2-.217v-.218l1.09-.327c.328-.218.656-.327.874-.545a1.7 1.7 0 00.655-.873c.218-.327.218-.655.218-1.09 0-.874-.327-1.528-.982-1.965S12.528 4 11 4H5v.764c.218.11.436.11.545.218.218.11.436.218.436.327.11.108.11.326.11.544v8.4c0 .218 0 .436-.11.545s-.217.217-.435.326c-.11.11-.218.11-.436.11H5v.763h5.782c.764 0 1.527 0 2.182-.11.545-.11 1.09-.327 1.527-.655.437-.218.874-.545 1.092-.982.218-.327.327-.873.327-1.527 0-.436 0-.764-.328-1.31v.002zM8.818 4.763h1.418c.655 0 1.2.218 1.527.545.327.435.545.872.545 1.526 0 .764-.218 1.31-.655 1.745s-.982.656-1.855.656h-.982V4.764zm3.382 9.818c-.327.436-.873.655-1.527.655-.327 0-1.09-.11-1.418-.218-.218-.11-.327-.328-.436-.546V10.11h.763c.873 0 2.073.218 2.51.655.544.436.763 1.09.763 1.855 0 .873-.218 1.527-.655 1.964z"></path>
</svg></span></span></span></button></span></div>
<div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" aria-pressed="false" tabindex="0" aria-describedby="PolarisTooltipContent3"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M13.728 4L13.4 5.09c-.108 0-.435 0-.654.11-.327 0-.545.11-.655.11-.326.108-.544.217-.654.326l-.218.545-1.855 7.637v.218c0 .11 0 .218.11.327s.217.218.326.218c.108 0 .326.11.544.11.327.217.545.217.655.217l-.22 1.09H5l.217-1.09h.764s.546-.11.656-.11c.218-.108.436-.217.545-.326s.22-.326.22-.544l1.96-7.638v-.327c0-.11 0-.218-.11-.327 0-.11-.108-.11-.326-.218-.11-.11-.327-.11-.655-.218-.218 0-.436-.11-.545-.11L7.945 4h5.78z"></path>
</svg></span></span></span></button></span></div>
<div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" aria-pressed="false" tabindex="0" aria-describedby="PolarisTooltipContent4"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5.31 5.055l-1.01-.18V4h5.044v.875l-1.312.186v4.693c0 .993.208 1.726.625 2.2s1.042.71 1.874.71c.425 0 .79-.068 1.1-.205.296-.128.558-.328.76-.58.2-.25.345-.552.438-.906s.14-.75.14-1.19v-4.73l-1.334-.18V4H15.7v.875l-1.048.18v4.624c0 .695-.114 1.288-.342 1.778s-.54.89-.938 1.198c-.398.308-.87.534-1.416.676s-1.14.213-1.78.213c-.824 0-1.54-.074-2.15-.223s-1.117-.384-1.518-.704a2.92 2.92 0 01-.9-1.235c-.2-.502-.3-1.105-.3-1.808v-4.52zM14.455 16H15.7v-1.412H4.3V16h10.156z"></path>
</svg></span></span></span></button></span></div>
</div>
</div>
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--segmented_150jh" data-buttongroup-segmented="true">
<div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" aria-pressed="false" tabindex="0" aria-describedby="PolarisTooltipContent5"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M8 9h7a1 1 0 010 2H8a1 1 0 010-2zm0-4h7a1 1 0 010 2H8a1 1 0 010-2zm0 8h7a1 1 0 010 2H8a1 1 0 010-2zM6 6a1 1 0 11-2 0 1 1 0 012 0zm0 4a1 1 0 11-2 0 1 1 0 012 0zm0 4a1 1 0 11-2 0 1 1 0 012 0z"></path>
</svg></span></span></span></button></span></div>
<div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" aria-pressed="false" tabindex="0" aria-describedby="PolarisTooltipContent6"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M8.002 8.993h7a1 1 0 010 2h-7a1 1 0 010-2zm-4-2.521H4.7V4.53l-.65.15v-.53L4.705 4h.602v2.472h.697v.52h-2v-.52zm4-1.479h7a1 1 0 010 2h-7a1 1 0 010-2zm-3.315 5.481h1.35v.512H4.002v-.496l.343-.335.743-.734c.107-.112.185-.212.232-.3a.517.517 0 00.07-.258.362.362 0 00-.13-.304c-.086-.072-.208-.107-.367-.107-.113 0-.24.022-.38.063a2.53 2.53 0 00-.442.18v-.54c.154-.052.304-.09.45-.118.14-.026.28-.04.423-.04.34 0 .606.073.8.218.19.137.3.36.29.594a.828.828 0 01-.062.325 1.348 1.348 0 01-.217.337c-.076.088-.284.29-.625.602l-.44.406v-.004zm3.315 2.519h7a1 1 0 010 2h-7a1 1 0 010-2zm-3.12.647h-.328v-.503h.328c.152 0 .27-.028.354-.084.08-.05.13-.14.126-.237a.289.289 0 00-.126-.25.606.606 0 00-.354-.09c-.126 0-.25.015-.374.04-.14.03-.278.07-.413.12v-.52c.138-.038.28-.07.42-.09.14-.022.272-.033.4-.033.327 0 .58.066.764.2.178.124.28.33.273.548a.57.57 0 01-.158.42.777.777 0 01-.45.215c.22.036.39.118.506.246.12.14.183.322.175.506 0 .28-.096.493-.29.64-.19.147-.47.22-.838.22-.305 0-.608-.048-.897-.143v-.53c.13.062.27.108.42.14s.31.046.476.046c.14.007.278-.03.394-.108a.342.342 0 00.145-.29.42.42 0 00-.145-.342c-.097-.08-.234-.12-.41-.12h.002z"></path>
</svg></span></span></span></button></span></div>
<div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" tabindex="0" aria-describedby="PolarisTooltipContent7"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 4h10a1 1 0 010 2H5a1 1 0 010-2zm5 4c0-.552.44-1 .996-1h3.996a1 1 0 11.016 2H10.99A.99.99 0 0110 8zm1 2h4a1 1 0 010 2h-4a1 1 0 010-2zm-6 3h10a1 1 0 010 2H5a1 1 0 010-2zM4 9.48L8 7v5z"></path>
</svg></span></span></span></button></span></div>
<div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" tabindex="0" aria-describedby="PolarisTooltipContent8"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 4h10a1 1 0 010 2H5a1 1 0 010-2zm5 4c0-.552.44-1 .996-1h3.996a1 1 0 11.016 2H10.99A.99.99 0 0110 8zm1 2h4a1 1 0 010 2h-4a1 1 0 010-2zm-6 3h10a1 1 0 010 2H5a1 1 0 010-2zm3-3.52L4 7v5z"></path>
</svg></span></span></span></button></span></div>
</div>
</div>
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--segmented_150jh" data-buttongroup-segmented="true">
<div class="Polaris-ButtonGroup__Item_yiyol">
<div><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" aria-pressed="false" tabindex="0" aria-describedby="PolarisTooltipContent9" aria-controls="Polarispopover3" aria-owns="Polarispopover3" aria-expanded="false"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 4h4.003a1 1 0 010 2H5a1 1 0 010-2zM4 8c0-.552.454-1 1.01-1H13a1 1 0 11.009 2H4.995A.993.993 0 014 8zm1 2h6.006a1 1 0 010 2H5a1 1 0 010-2zm0 3h10.006a1 1 0 010 2H5a1 1 0 010-2z"></path>
</svg></span></span><span class="Polaris-Button__Icon_yj27d">
<div class="Polaris-Button__DisclosureIcon_j5n4l"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 8l5 5 5-5H5z"></path>
</svg></span></div>
</span></span></button></span></div>
</div>
<div class="Polaris-ButtonGroup__Item_yiyol">
<div><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" aria-pressed="false" tabindex="0" aria-describedby="PolarisTooltipContent10" aria-controls="Polarispopover4" aria-owns="Polarispopover4" aria-expanded="false"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M14.875 11.627c-.125 0-.25 0-.375-.118l-.75-.237-.125-.355L10.5 3h-.875v.236c-.5 1.064-1 2.245-1.5 3.664C7.5 8.318 7 9.5 6.5 10.682c0 .236-.125.355-.25.473 0 .118-.125.236-.375.355l-.75.236H5v.71h3.875v-.828H8.75c-.375 0-.625-.118-.875-.118-.25-.118-.375-.118-.375-.236v-.236c0-.118 0-.236.125-.473 0-.236.125-.355.25-.59.125-.12.375-.828.375-1.065H11l.875 2.364v.236s-.125 0-.25.118c-.25 0-.5.118-.875.118h-.125v.71H15v-.828h-.125zm-4.25-3.545h-2l1-2.482 1 2.482zm3.125 5.554h-7.5c-.75 0-1.25.473-1.25 1.182C5 15.408 5.5 16 6.25 16h7.5c.75 0 1.25-.473 1.25-1.182 0-.59-.5-1.182-1.25-1.182z"></path>
</svg></span></span><span class="Polaris-Button__Icon_yj27d">
<div class="Polaris-Button__DisclosureIcon_j5n4l"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 8l5 5 5-5H5z"></path>
</svg></span></div>
</span></span></button></span></div>
</div>
</div>
</div>
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--segmented_150jh" data-buttongroup-segmented="true">
<div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--disabled_hcuh9 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" disabled=""><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M14.588 12.824a.675.675 0 00-.206-.5l-1.53-1.53a.675.675 0 00-.5-.206.704.704 0 00-.528.236c.014.014.06.06.14.136.1.09.19.19.268.298a.59.59 0 01.12.39.675.675 0 01-.205.5.675.675 0 01-.5.205.6.6 0 01-.39-.12 2.51 2.51 0 01-.14-.11 5.895 5.895 0 01-.157-.16l-.136-.14a.711.711 0 00-.036 1.037l1.513 1.522a.686.686 0 00.5.2.713.713 0 00.5-.192l1.08-1.074a.667.667 0 00.207-.492zM9.42 7.64a.675.675 0 00-.206-.5L7.7 5.618a.675.675 0 00-.5-.206.715.715 0 00-.5.198L5.618 6.684a.674.674 0 00-.206.492c-.003.188.07.37.206.5l1.53 1.53a.677.677 0 00.5.198c.2.002.392-.08.528-.228l-.14-.136a3.344 3.344 0 01-.157-.158 1.437 1.437 0 01-.11-.14.583.583 0 01-.123-.39.675.675 0 01.206-.5.675.675 0 01.5-.205.6.6 0 01.39.12c.063.048.11.085.14.11.03.03.08.08.157.16l.136.14a.711.711 0 00.243-.537zM16 12.824c0 .588-.208 1.085-.625 1.492l-1.08 1.074c-.393.4-.934.622-1.495.61a2.018 2.018 0 01-1.5-.625l-1.513-1.522a2.03 2.03 0 01-.61-1.493c0-.603.215-1.115.647-1.536l-.648-.648c-.396.42-.95.656-1.53.648a2.046 2.046 0 01-1.5-.618l-1.53-1.53A2.045 2.045 0 014 7.176c0-.588.208-1.085.625-1.492l1.08-1.074c.393-.4.934-.622 1.495-.61.593 0 1.093.208 1.5.625l1.514 1.522c.407.407.61.904.61 1.493 0 .603-.215 1.115-.647 1.536l.648.648c.396-.42.95-.656 1.53-.648.587 0 1.087.206 1.5.618l1.53 1.53c.41.41.616.91.616 1.5z"></path>
</svg></span></span></span></button></div>
<div class="Polaris-ButtonGroup__Item_yiyol">
<div><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" aria-pressed="false" tabindex="0" aria-describedby="PolarisTooltipContent11" aria-controls="Polarispopover5" aria-owns="Polarispopover5" aria-expanded="false"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 4h10a1 1 0 010 2H5a1 1 0 010-2zm11 10c0 .552-.456 1-1.002 1H5.003c-.266 0-.52-.104-.71-.292S4 14.265 4.002 14h12z"></path>
<path d="M16 5.002v8.995c0 .266-.104.52-.292.71s-.443.293-.708.292V4c.552 0 1 .455 1 1v.002zm-12 0v8.995c0 .266.104.52.292.71s.443.293.708.292V4c-.552 0-1 .455-1 1v.002zM14.5 9h.5V8H5v1h9.5zm0 3h.5v-1H5v1h9.5z"></path>
<path d="M8 13.5v.5h1V6H8v7.5zm3 0v.5h1V6h-1v7.5z"></path>
</svg></span></span><span class="Polaris-Button__Icon_yj27d">
<div class="Polaris-Button__DisclosureIcon_j5n4l"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 8l5 5 5-5H5z"></path>
</svg></span></div>
</span></span></button></span></div>
</div>
<div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" tabindex="0" aria-describedby="PolarisTooltipContent12"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M16 14c0 .553-.456 1-1.002 1H5.003c-.266.002-.52-.103-.71-.29S4 14.265 4.002 14h12zm0-9c0-.55-.456-1-1.002-1H5.003c-.266 0-.52.105-.71.293S4 4.736 4.002 5h12z"></path>
<path d="M16 5.003v8.995c0 .266-.104.52-.292.71S15.265 15 15 15V4c.552 0 1 .456 1 1.002zm-12 0v8.995c0 .266.104.52.292.71S4.735 15 5 15V4c-.552 0-1 .456-1 1.002zM9 7.5a1.5 1.5 0 11-2.999.001A1.5 1.5 0 019 7.5z"></path>
<path d="M9.463 11.952L8 10.002l-3 4h10V9.8L13 7z"></path>
</svg></span></span></span></button></span></div>
<div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" tabindex="0" aria-describedby="PolarisTooltipContent13"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M5 6h7a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1V7a1 1 0 011-1z"></path>
<path d="M16 7v6l-5-3z"></path>
</svg></span></span></span></button></span></div>
<div class="Polaris-ButtonGroup__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" tabindex="0" aria-describedby="PolarisTooltipContent14"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M12.293 13.707l.707.707L14.414 13 7 5.586 5.586 7l.707.707z"></path>
<path d="M16 10a6 6 0 10-12 0 6 6 0 0012 0zM6 10c0-2.21 1.79-4 4-4s4 1.79 4 4-1.79 4-4 4-4-1.79-4-4z"></path>
</svg></span></span></span></button></span></div>
</div>
</div>
</div>
</div>
<div class="Polaris-Stack__Item_yiyol"><span><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--sizeSlim_1p6ue Polaris-Button--iconOnly_viazp" type="button" tabindex="0" aria-describedby="PolarisTooltipContent15"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M9 8.406L5.24 10.01 9 11.6V13l-5-2.334V9.34L9 7v1.406zm2 0V7l5 2.34v1.326L11 13v-1.4l3.76-1.59L11 8.405z"></path>
</svg></span></span></span></button></span></div>
</div>
</div>
</div>
<div class="_1K4u4">
<div id="product-description_parent">
</div><textarea id="description" class="_2LZUF" aria-hidden="true" style="display:;"></textarea>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Header_z4uwg">
<h2 class="Polaris-Heading_1brcv">Search engine listing preview</h2>
</div>
<div class="Polaris-Card__Section_1b1h1">
<p>Add a title and description to see how this product might appear in a search engine listing</p>
</div>
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-FormLayout_1wntl">
<div class="Polaris-FormLayout__Item_yiyol">
<div class="">
<div class="Polaris-Labelled__LabelWrapper_bf6ys">
<div class="Polaris-Label_2vd36"><label id="PolarisTextField15Label" for="PolarisTextField15" class="Polaris-Label__Text_yj3uv">Page title</label></div>
</div>
<div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
<div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
<div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
    
    <input name="SEOtitle" id="PolarisTextField15" placeholder="" class="Polaris-TextField__Input_30ock" aria-describedby="PolarisTextField15HelpText" aria-labelledby="PolarisTextField15Label" aria-invalid="false" aria-multiline="false" value="">

    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
</div>
</div>
</div>
<div class="Polaris-Labelled__HelpText_8qj1a" id="PolarisTextField15HelpText">0 of 70 characters used</div>
</div>
</div>
<div class="Polaris-FormLayout__Item_yiyol">
<div class="">
<div class="Polaris-Labelled__LabelWrapper_bf6ys">
<div class="Polaris-Label_2vd36"><label id="PolarisTextField16Label" for="PolarisTextField16" class="Polaris-Label__Text_yj3uv">Description</label></div>
</div>
<div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
<div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
<div class="Polaris-TextField_1spwi Polaris-TextField--multiline_1jgfe Polaris-TextField--newDesignLanguage_1rik8">
    
    <textarea name="SEOdescription" id="PolarisTextField16" placeholder="" class="Polaris-TextField__Input_30ock" aria-describedby="PolarisTextField16HelpText" aria-labelledby="PolarisTextField16Label" aria-invalid="false" aria-multiline="true" style="height: 108px;"></textarea>

    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
    <div aria-hidden="true" class="Polaris-TextField__Resizer_mlqsu">
        <div class="Polaris-TextField__DummyInput_1u3lq"><br></div>
        <div class="Polaris-TextField__DummyInput_1u3lq"><br><br><br><br></div>
    </div>
</div>
</div>
</div>
<div class="Polaris-Labelled__HelpText_8qj1a" id="PolarisTextField16HelpText">0 of 320 characters used</div>
</div>
</div>
<div class="Polaris-FormLayout__Item_yiyol">
<div class="">
<div class="Polaris-Labelled__LabelWrapper_bf6ys">
<div class="Polaris-Label_2vd36"><label id="PolarisTextField17Label" for="PolarisTextField17" class="Polaris-Label__Text_yj3uv">URL and handle</label></div>
</div>
<div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
<div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
<div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
    <div class="Polaris-TextField__Prefix_10fbz" id="PolarisTextField17Prefix">https://akeneo-shop.myshopify.com/products/</div>
    
    <input name="SEOurl" id="PolarisTextField17" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField17Label PolarisTextField17Prefix" aria-invalid="false" aria-multiline="false" value="">

    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div></div>
</div>

<div class="Polaris-Layout__Section_1b1h1 Polaris-Layout__Section--secondary_1sx8i">
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Header_z4uwg">
<h2 class="Polaris-Heading_1brcv">Visibility</h2>
</div>
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingLoose_yte7q">
<div class="Polaris-Stack__Item_yiyol">
<fieldset class="Polaris-ChoiceList_ygfuw Polaris-ChoiceList--titleHidden_14zrw" id="PolarisChoiceList1" aria-invalid="false">
<legend class="Polaris-ChoiceList__Title_2qj8j">Visibility</legend>
<ul class="Polaris-ChoiceList__Choices_15o76">
<li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton1"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
    
    <input id="PolarisRadioButton1" name="visibility" type="radio" class="Polaris-RadioButton__Input_30ock" value="visible"><span class="Polaris-RadioButton__Backdrop_1x2i2">
        
    </span></span></span><span class="Polaris-Choice__Label_2vd36">Visible (Displays the Page)</span></label></li>
<li><label class="Polaris-Choice_j5gzq" for="PolarisRadioButton2"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-RadioButton_bsatr Polaris-RadioButton--newDesignLanguage_1rik8">
    
    <input id="PolarisRadioButton2" name="visibility" type="radio" class="Polaris-RadioButton__Input_30ock" value="hidden">
    
    <span class="Polaris-RadioButton__Backdrop_1x2i2"></span></span></span><span class="Polaris-Choice__Label_2vd36">Hidden</span></label></li>
</ul>
</fieldset>
</div>

</div>
</div>
</div>



<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Header_z4uwg">
<h2 class="Polaris-Heading_1brcv">Template</h2>
</div>
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-TextContainer_szg8b">
<p>Select a template for this page.</p>
<div class="">
<div class="Polaris-Labelled__LabelWrapper_bf6ys">
<div class="Polaris-Label_2vd36"><label id="PolarisSelect2Label" for="PolarisSelect2" class="Polaris-Label__Text_yj3uv">Template suffix</label></div>
</div>
<div class="Polaris-Select_ss8pm Polaris-Select--newDesignLanguage_1rik8"><select id="PolarisSelect2" class="Polaris-Select__Input_30ock" aria-invalid="false">
<option value="">page</option>
<option value="contact">page.contact</option>
</select>
<div class="Polaris-Select__Content_xd1mk" aria-hidden="true"><span class="Polaris-Select__SelectedOption_azu52">page</span><span class="Polaris-Select__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M10 16l-4-4h8l-4 4zm0-12l4 4H6l4-4z"></path>
</svg></span></span></div>
<div class="Polaris-Select__Backdrop_1x2i2"></div>
</div>
</div>
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
    <button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="submit"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button></div>
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

@endsection