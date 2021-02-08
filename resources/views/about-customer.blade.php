@extends('layouts.app')
@section('content')
<?php use App\Models\orders; ?>

<style type="text/css" data-tag-name="trix-editor">
    trix-editor {
        display: block;
    }

    trix-editor:empty:not(:focus)::before {
        content: attr(placeholder);
        color: graytext;
        cursor: text;
    }

    trix-editor a[contenteditable=false] {
        cursor: text;
    }

    trix-editor img {
        max-width: 100%;
        height: auto;
    }

    trix-editor [data-trix-attachment] figcaption textarea {
        resize: none;
    }

    trix-editor [data-trix-attachment] figcaption textarea.trix-autoresize-clone {
        position: absolute;
        left: -9999px;
        max-height: 0px;
    }

    trix-editor [data-trix-attachment] figcaption[data-trix-placeholder]:empty::before {
        content: attr(data-trix-placeholder);
        color: graytext;
    }

    trix-editor [data-trix-cursor-target] {
        display: inline-block !important;
        width: 1px !important;
        padding: 0 !important;
        margin: 0 !important;
        border: none !important;
    }

    trix-editor [data-trix-cursor-target=left] {
        vertical-align: top !important;
        margin-left: -1px !important;
    }

    trix-editor [data-trix-cursor-target=right] {
        vertical-align: bottom !important;
        margin-right: -1px !important;
    }

</style>
<style type="text/css" data-tag-name="trix-toolbar">
    trix-toolbar {
        display: block;
    }

    trix-toolbar {
        white-space: nowrap;
    }

    trix-toolbar [data-trix-dialog] {
        display: none;
    }

    trix-toolbar [data-trix-dialog][data-trix-active] {
        display: block;
    }

    trix-toolbar [data-trix-dialog] [data-trix-validate]:invalid {
        background-color: #ffdddd;
    }

</style>
<link data-react-html="true" rel="mask-icon" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/e028fc80f1cd644ff3f327769b407fd9.svg" color="#000000">
    <link data-react-html="true" rel="shortcut icon" type="image/x-icon" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/favicon-default-0c50a58978abc08c03f89d0309d84583.ico">
    <link data-react-html="true" rel="apple-touch-icon" sizes="114x114" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/880ff53ad664c01602eed044dfc845bc.png">
    <link data-react-html="true" rel="apple-touch-icon" sizes="72x72" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/bf1183e480966acd13d3f2f31d8b0825.png">
    <link data-react-html="true" rel="apple-touch-icon" sizes="57x57" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/a618abade009db344f1f4d07b627c80a.png">
    <link data-react-html="true" rel="apple-touch-startup-image" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/f8d3dc0db81b583b99345bd3dd41aa94.png">
    <link data-react-html="true" rel="preconnect" href="//b.siftscience.com">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-flow~section-flow-summary~section-flow-template-installer~section-flo~67560caa-da74327255a921063014b93a350cde95232ab12445903cd4c054dd790b472f56.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-apps~section-apps-app-details~section-flow~section-flow-connector~sec~886ec812-d399c7a88b9def638f0e6090adbf93c63487fd48f111f883b928fd01a9f7724f.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow-summary~section-flow-v2-editor~section-flow-v2-list~section-flow-v2-run~s~d6dd756b-8f934264b5990bad39c9d00ea1bfb28899a1804c3fab899829947dd05d994554.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus~redirectLoop-52d01a3fab9db21035fb144d99b9fd68dc5421a80a1e6f66d2ceecc392714a2a.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus-7ef16ed3ca267fae1895131e2419f991293acca58903dd8fa535dfccb6d37c07.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow~section-flow-summary-d7573b2ea537d3e78f0e81a73fb8f01ab15911ddaded42fe8113529b8eda63a6.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~redirectLoop-397c5c84c3e19be74054e73232b51687a919eb05e9823b4fd9288f500e618db7.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin-5922f9e5df8c35d5e240a6eae550509b8bb11f1a0e54a31b63551788bb7cbd7f.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Admin-9ceb74cd499fe34830e27eafb97215384f6f5cc4745896d703719c9fd9856ff6.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/quickSearch-152d4093b196eb2a0b3adc64132a5b0c9c9560c61309458fff2a6b6cd75d0c38.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~f8378938-cd516d6de26f94d6ad007ab424d416d7ce1b3a2c992bba41542e44cc098b3b81.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AddRemoveTagsModal~customerList~orderIndex~orderListCustomizable~productindex-fda696ce66ca26a8bba4df24358a97bda7d4e6c037cd64640758d90d35fe625c.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/collectionList~customerList~productindex-f7f301d97f77e920185b5f9574adf4cb57a149bf67c5314d0fdf2906bb22b0cd.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerList-e913bdc7ed9fce6515e4e3c47875c156a5d18ff49cf66dfc642ed06890020a39.css" crossorigin="anonymous">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-25b8e6ce5ba4e27dc3ebd7c3be9c55caad6efad3d7f4ab3174250cf4fc3b9ce5.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-56d51c8cd7433d99fc28d8f3e29f79419679190c4096a55a796e449c43d83e87.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-1775364251ffa84d4c12896a4d732b1c229308eb9b9fc1971667b066c9d2700c.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-6089ac47e6846d8fa846b0266537fde9cb2bf2dd2897dc99b49e10c4e8f065c9.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-12b8971d1dcc0600882fd0efec7ab2f68c9f38a0ac8fb2935f4a2c62d1fdc047.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ImportCustomersModal-bfcfbdc1f4954dca1bf08e23a7d3cadd9c9d99f797f9c7c1841f9db0e9d12492.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ImportCustomersModal-e1cfa0a54cb9c18515074db0629260993d3dd6f54b4158dcbd129e0aa6a89a1b.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/CustomerImportDetailsQuery-669a55ea67e2b90a73464a7746447d7697ee98b8456a9051ae0c155cd9a3d684.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ExportCustomersModal~automaticDiscountResourceList~discountCodeResourceList~discountCodeResourceList~6dea9bb8-7f01b5ebcca3c842dedd47c50f6db297605ea36a9dc4f12300cdee83abd6a85e.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ExportCustomersModal-ca22a6b4d9de13b7a338b360a39a181d261b0b09e9df1501de909e09d84ed7e7.js">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Polaris-i18n-26b21506b29a1fe79ec2eea2e255f25895d9f76b333313f3ccbc3da90637d1fa.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/sift-9ace3cef3a9ea7c90452f97e7b6cd8b186f250e62cc6c09a9c69276a37452b99.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-6089ac47e6846d8fa846b0266537fde9cb2bf2dd2897dc99b49e10c4e8f065c9.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-12b8971d1dcc0600882fd0efec7ab2f68c9f38a0ac8fb2935f4a2c62d1fdc047.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ImportCustomersModal-bfcfbdc1f4954dca1bf08e23a7d3cadd9c9d99f797f9c7c1841f9db0e9d12492.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ImportCustomersModal-e1cfa0a54cb9c18515074db0629260993d3dd6f54b4158dcbd129e0aa6a89a1b.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/CustomerImportDetailsQuery-669a55ea67e2b90a73464a7746447d7697ee98b8456a9051ae0c155cd9a3d684.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/appBulkActionsQuery-d56fd899997944b43965241f4edcd44ff5ff83d415f8836469b256e3fbe3163a.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerCountQuery-0a51a5d61e043138637f6d70c32299de3e0f17210f01be4a09371c1a90391496.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/shopCustomerTags-8e50842c6ae8d150fdc2610552484d20f3c90f4f38f2a196275060dc18a4d1ce.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~MobileCompatibleCollectionShow~capitalAmendmentTermsDetails~capitalOfferAgreementDetails~col~2db63ec6-ffab1f20f407ff3e9a634d94225be0eca664cb86adf53192f1ab0b9392ee3657.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/shopify-encoders-524a3cd076301d7df31cc3aefefb03cfad40df70eeb2344fcb81bf7b30e3fec5.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-1775364251ffa84d4c12896a4d732b1c229308eb9b9fc1971667b066c9d2700c.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ExportCustomersModal~automaticDiscountResourceList~discountCodeResourceList~discountCodeResourceList~6dea9bb8-7f01b5ebcca3c842dedd47c50f6db297605ea36a9dc4f12300cdee83abd6a85e.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ExportCustomersModal-ca22a6b4d9de13b7a338b360a39a181d261b0b09e9df1501de909e09d84ed7e7.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/switcherStoresQuery-ad78642d4a6704193332ec348feb613fc7af22d08a8cf12463696559bc4276da.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ManageProfile~MobileCompatibleCollectionShow~analyticsReportViewer~automaticdiscountdetails~collecti~9dd8907f-18e9d82e1bd2275259b9c7e4760b1e110397dea78420188bd809c26d526d36b1.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ManageProfile~MobileCompatibleCollectionShow~analyticsReportViewer~automaticdiscountdetails~collecti~9dd8907f-dd169a8ecb9a3b3f6f652364ec87591b1dd0d20ed7e3c1af914535c83e9220a9.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerDetails-a50436296e1d8002c32d3767bd3054ec3b1204765840109a4266c3fedfcdf73b.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerDetails-88a38d38b924eeaf8207cdac880a8759b823166a6246c060703775b2e2cd9e04.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerDetailsQuery-ffdce6d5ca6e1dfe84777ced87d3966dccf015f04e2f771fb71cf9db3d4894d1.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/customerRecentOrdersQuery-65d61aa17c57e594794f491aba7f4f6eab2f1ea0f7fedd95a0dcbf46dc6e2584.js"></script>
    <script type="text/javascript" src="//checkout.shopifycs.com/dist/card_fields.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/PagePresence-566c4a11b98c08351e3cacb7f8595c0896a3b2d4e434e9dd8f5273832dfc2f13.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/PagePresence-7e8529d81a1322f65baa48c4c3f957aca94c6b9c692e6436fb80461dc7407128.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~ManageZonesModal~Timeline~VirtualizedOptionsList-98b566f7137c7c56dddb657752954a9310149230d46be1a890e46d358fe963d1.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MobileCompatibleCollectionShow~ShopImagePicker~Timeline~collectiondetails~productdetails~productvari~e3f6d10c-5d43ae6d0d39226e94164d8d1af2a4d397ee597fa077cb332d4d4ac0769ac69b.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Timeline-3ad651feced71d6f13c6f4be8a50c6e0635902b191e41513d3408305beab609b.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Timeline-2f0bbf42ec6cd662df37c816a0901e267ef43957d3adead158a9f1ac96272d4e.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ManageAddressesModal-99be3fb4055d1464dae653e71a6fdab93f2631dc17ea7b63cb40c20253a4db21.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ManageAddressesModal-da7c1261d471b857771faca784c65b77b56eedb1723cf3248549e167798e8125.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~trix-b04d3fed7b47a768a56b15c9251a3391ab0f577c2e71d8d35393de4b655ecb90.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~ManageProfile~createReturnLabel~orderIndex~orderListCustomizable~purchaseShippingLabels~repl~b1108c18-abd870affc8fff070a224ca320a03d5921bc0b17f347c593e5421697ee47a3b7.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex~orderListCustomizable-bb5994fb2eb2db36c05d79a8a184d01cad35bc934b83be5fc3eb18a5bc31641e.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex~orderListCustomizable-e5e0dec1fbf9286cb7b113d86a844a9be1a628880fe50e4f9294901a24dd8d38.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex-e89dd14269d25fa43a92393346d6e274a678ccca1b182da8b77afedfb156e8c1.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex-980546950c5a8e0d5bfcd63a6f5136765792cf2fa44395b859728ef0b9cbb7a8.js"></script>

<div class="Polaris-Frame__ContextualSaveBar_14m7v Polaris-Frame-CSSAnimation--startFade_1gu4x"></div>
                    <main class="Polaris-Frame__Main_yj28s Polaris-Frame__Main--newDesignLanguage_129jf" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
                        <div class="Polaris-Frame__Content_xd1mk">
                            <div class="Polaris-Page_yisnh Polaris-Page--newDesignLanguage_1rik8">
                                <div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--hasNavigation_gfpa8 Polaris-Page-Header--hasActionMenu_1wx04 Polaris-Page-Header--mobileView_i07vm Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6">
                                    <div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
                                        <div class="Polaris-Page-Header__BreadcrumbWrapper_1tgwk Polaris-Page-Header--newDesignLanguage_1rik8">
                                            <nav role="navigation"><a data-polaris-unstyled="true" class="Polaris-Breadcrumbs__Breadcrumb_llsun Polaris-Breadcrumbs--newDesignLanguage_1rik8" href="/customer"><span class="Polaris-Breadcrumbs__ContentWrapper_1yvfo"><span class="Polaris-Breadcrumbs__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                    <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                                                                </svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Customers</span></span></a></nav>
                                        </div>
                                        <?php 
                                        $c_id = request('id');
                                        ?>

@foreach ($order_details as $order_detail)
@if ($order_detail->order_id == $c_id)
                                        <div class="Polaris-Page-Header__TitleWrapper_bejfn">
                                            <div>
                                                <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                    <div class="Polaris-Header-Title_2qj8j">
                                                        <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">{{$order_detail->name}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Polaris-Page-Header__Row_375v7">
                                        <div class="Polaris-Page-Header__LeftAlign_1d6sz"></div>
                                        <div class="Polaris-Page-Header__RightAlign_1ok1p">
                                            <div class="Polaris-Page-Header__AdditionalNavigationWrapper_1kkex"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-Page__Content_xd1mk">
                                    <div class="Polaris-Layout_sl20u Polaris-Layout--newDesignLanguage_1rik8">
                                        <div class="Polaris-Layout__Section_1b1h1">
                                            <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                                                <div class="Polaris-Card__Section_1b1h1">
                                                    <div class="Polaris-Stack_32wu2">
                                                        <div class="Polaris-Stack__Item_yiyol">
                                                            <div class="YjyWS"><span aria-label="chawla kumar" role="img" class="Polaris-Avatar_z763p Polaris-Avatar--sizeMedium_5f35p Polaris-Avatar--hasImage_1hz8x"><img src="https://cdn.shopify.com/shopifycloud/shopify/assets/admin/customers/polaris/avatar-5-5abe0379a1916f259773e3f53a49aace8c1b79e0472f5649e4d240bd9d2f95fd.png" class="Polaris-Avatar__Image_2qgms" alt="" role="presentation"></span></div>
                                                        </div>
                                                        
                                                      
                                                    
                                                       
                                                                
                                                            
                                                        <div class="Polaris-Stack__Item_yiyol">
                                                            <div class="Polaris-TextContainer_szg8b Polaris-TextContainer--spacingTight_1o4d6">
                                                                <div class="_1qu9s">
                                                                    <h3 class="Polaris-Heading_1brcv">{{$order_detail->name}}</h3>
                                                                    <p><span class="Polaris-TextStyle--variationSubdued_1segu">{{$order_detail->city}}, {{$order_detail->state}}</span></p>
                                                                    <p><span class="Polaris-TextStyle--variationSubdued_1segu">Customer since {{$order_detail->created_at->format('l j F Y')}}</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="Polaris-Card__Section_1b1h1">
                                                    <div class="IiTKQ">
                                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--distributionFillEvenly_aehjo">
                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj">
                                                                    <div class="Polaris-Stack__Item_yiyol">
                                                                        <div class="Polaris-TextContainer_szg8b Polaris-TextContainer--spacingTight_1o4d6">
                                                                           <p><span class="Polaris-TextStyle--variationSubdued_1segu">Last Order</span></p>
                                                                            <h3 class="Polaris-Heading_1brcv"><span class="Polaris-TextStyle--variationStrong_rpyvj">{{$order_detail->created_at->toTimeString()}}</span></h3>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        @endforeach

                                                        @foreach ($order_items as $order_item)
                                                        @if ($order_item->order_id == $c_id)
                                                            
                                                        
                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj">
                                                                    <div class="Polaris-Stack__Item_yiyol">
                                                                        <div class="Polaris-TextContainer_szg8b Polaris-TextContainer--spacingTight_1o4d6">
                                                                            <p><span class="Polaris-TextStyle--variationSubdued_1segu">Total spent to date</span></p>
                                                                            <h3 class="Polaris-Heading_1brcv"><span class="Polaris-TextStyle--variationStrong_rpyvj">€{{$order_item->total}}</span></h3>
                                                                            <p>
                                                                                @foreach ($orders as $order)
                                                        @if ($order_item->order_id == $order->id)
         <span class="Polaris-TextStyle--variationSubdued_1segu"><?php echo $TotalOrders = orders::where('user_id',"$order->user_id")->count(); ?> orders</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                                            @endforeach
                                                         
                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj">
                                                                    <div class="Polaris-Stack__Item_yiyol">
                                                                        <div class="Polaris-TextContainer_szg8b Polaris-TextContainer--spacingTight_1o4d6">
                                                                            <p><span class="Polaris-TextStyle--variationSubdued_1segu">Average order value</span></p>
                                                                            <h3 class="Polaris-Heading_1brcv"><span class="Polaris-TextStyle--variationStrong_rpyvj">€{{$order_item->total/$TotalOrders}}</span></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                    @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                                                <div class="Polaris-Card__Header_z4uwg">
                                                    <h2 class="Polaris-Heading_1brcv">Orders placed</h2>
                                                </div>

                                                @foreach ($order_items as $order_item)
                                            @if ($order_item->order_id == $c_id)
                                                
                                           
                                                <div class="Polaris-Card__Section_1b1h1">
                                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj">
                                                        <div class="Polaris-Stack__Item_yiyol">
                                                            <div class="Polaris-Stack_32wu2 Polaris-Stack--distributionEqualSpacing_x9cqm">
                                                                @foreach ($orders as $order)
                                                                @if ($order->id == $c_id)
                                                                    
                                                                
                                                                    
                                                                
                                                                <div class="Polaris-Stack__Item_yiyol"><a data-polaris-unstyled="true" class="Polaris-Link_yj5sy" href="/orderdetails/{{$order_item->order_id}}">Order #{{$order_item->order_id}}</a></div>
                                                                <div class="Polaris-Stack__Item_yiyol"><span class="Polaris-TextStyle--variationSubdued_1segu">Created at {{$order_item->created_at->toTimeString()}}</span></div>
                                                                @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Stack__Item_yiyol">
                                                            <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingExtraTight_gv6hw">
                                                                <div class="Polaris-Stack__Item_yiyol"><span class="">€{{$order_item->total}} from this Order</span></div>
                                                                
                                                                @foreach ($orders as $order)
                                                                    
                                                                @if ($order->id == $c_id)
                                                                @if ($order->status == 0)

                                                                <div class="Polaris-Stack__Item_yiyol"><span class="Polaris-Badge_2qgie Polaris-Badge--statusAttention_i61kn Polaris-Badge--progressIncomplete_1jg92"><span class="Polaris-Badge__Pip_375sr"><span class="Polaris-VisuallyHidden_yrtt5">Attention Incomplete</span></span>Unfulfilled</span></div>
                                                                @else
                                                                <div class="Polaris-Stack__Item_yiyol"><span class="Polaris-Badge_2qgie Polaris-Badge--statusAttention_i61kn Polaris-Badge--progressIncomplete_1jg92"><span class="Polaris-Badge__Pip_375sr"><span class="Polaris-VisuallyHidden_yrtt5">Attention Incomplete</span></span>Fulfilled</span></div>
                                                                @endif
                                                               

                                                                @endif
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                        <div class="Polaris-Stack__Item_yiyol">
                                                            <div class="Polaris-Stack_32wu2 Polaris-Stack--distributionFillEvenly_aehjo">
                                                                <div class="Polaris-Stack__Item_yiyol">
                                                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--distributionLeading_rudtn">
                                                                        <div class="Polaris-Stack__Item_yiyol">
                                                                            <div class="awDZq _21KaY"><svg viewBox="0 0 20 20" class="_1nZTW _2QX6Y">
                                                                                    <path d="M2.5 1A1.5 1.5 0 0 0 1 2.5v15A1.5 1.5 0 0 0 2.5 19h15a1.5 1.5 0 0 0 1.5-1.5v-15A1.5 1.5 0 0 0 17.5 1h-15zm5 3.5c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zM16.499 17H3.497c-.41 0-.64-.46-.4-.79l3.553-4.051c.19-.21.52-.21.72-.01L9 14l3.06-4.781a.5.5 0 0 1 .84.02l4.039 7.011c.18.34-.06.75-.44.75z"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        @foreach ($products as $product)
                                                                            @if ($product->pro_title == $order_item->product_title)
                                                                                
                                                                            @foreach ($orders as $order)
                                                                            @if ($order->id == $c_id)     
                                                                        <div class="Polaris-Stack__Item_yiyol">
                                                                            <div class="hpLpp">
                                                                                <div class="Polaris-TextContainer_szg8b Polaris-TextContainer--spacingTight_1o4d6">
                                                                                    <p class="_1O65J"><a href="/orderdetails/{{$order_item->order_id}}"><button type="button" class="Polaris-Link_yj5sy">{{$product->pro_title}}</button></a></p>
                                                                                </div>
                                                                                @endif
                                                                        @endforeach
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="Polaris-Layout__Section_1b1h1 Polaris-Layout__Section--secondary_1sx8i">
                                            <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                                                <div class="Polaris-Card__Header_z4uwg">
                                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentBaseline_aupj5">
                                                        <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
                                                            <h2 class="Polaris-Heading_1brcv">Customer overview</h2>
                                                        </div>
                                                        <div class="Polaris-Stack__Item_yiyol">
                                                            <div class="Polaris-ButtonGroup_yy85z">
                                                                <div class="Polaris-ButtonGroup__Item_yiyol Polaris-ButtonGroup__Item--plain_1lavi"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--plain_2z97r" aria-label="Edit" type="button" onclick="Display_Contact()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Edit</span></span></button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach ($order_details as $order_detail)
                                                    @if ($order_detail->order_id == $c_id)
                                                        
                                                    
                                                <div class="Polaris-Card__Section_1b1h1">
                                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingExtraTight_gv6hw">
                                                        <div class="Polaris-Stack__Item_yiyol">{{$order_detail->email}}</div>
                                                    </div>
                                                </div>

                                                @endif
                                                @endforeach
                                                <div class="Polaris-Card__Section_1b1h1">
                                                    <div class="Polaris-Card__SectionHeader_1aytf">
                                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentBaseline_aupj5">
                                                            <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
                                                                <h3 aria-label="Default address" class="Polaris-Subheading_syouu">Default address</h3>
                                                            </div>
                                                            <div class="Polaris-Stack__Item_yiyol">
                                                                <div class="Polaris-ButtonGroup_yy85z">
                                                                    <div class="Polaris-ButtonGroup__Item_yiyol Polaris-ButtonGroup__Item--plain_1lavi"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--plain_2z97r" aria-label="Manage" type="button" onclick="Display_Shipping()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Manage</span></span></button></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @foreach ($order_details as $order_detail)
                                                    @if ($order_detail->order_id == $c_id)

                                                    <div class="Polaris-TextContainer_szg8b Polaris-TextContainer--spacingTight_1o4d6">
                                                        <div class="_2gzRy">
                                                            <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj">
                                                                <div class="Polaris-Stack__Item_yiyol">
                                                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingNone_1b3d3">
                                                                        <div class="Polaris-Stack__Item_yiyol"><span data-key="0">{{$order_detail->name}}<br></span></div>
                                                                        <div class="Polaris-Stack__Item_yiyol"><span data-key="2">{{$order_detail->address}}<br></span></div>
                                                                        <div class="Polaris-Stack__Item_yiyol"><span data-key="4">{{$order_detail->city}}, {{$order_detail->state}}<br></span></div>
                                                                        <div class="Polaris-Stack__Item_yiyol"><span data-key="5">+{{$order_detail->phone}}<br></span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                                                <div class="Polaris-Card__Header_z4uwg">
                                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentBaseline_aupj5">
                                                        <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt">
                                                            <h2 class="Polaris-Heading_1brcv">Email Marketing</h2>
                                                        </div>
                                                        <div class="Polaris-Stack__Item_yiyol">
                                                            <div class="Polaris-ButtonGroup_yy85z"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="Polaris-Card__Section_1b1h1">
                                                    <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                                        <div class="Polaris-Stack__Item_yiyol">
                                                            <div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingTight_1o4d6">
                                                                <div class="Polaris-Stack__Item_yiyol"><span class="Polaris-Badge_2qgie">Subscribed</span></div>
                                                                <div class="Polaris-Stack__Item_yiyol"><span class="Polaris-TextStyle--variationSubdued_1segu">Customer has provided their email.</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="Polaris-Layout__Section_1b1h1">
                                            <div class="_2qYe2">
                                                <h2 class="Polaris-Heading_1brcv">Timeline</h2>
                                               
                                            </div>
                                            <form action="/about-customer/{{$c_id}}/comment/added" method="post">
                                                @csrf
                                            <div class="pxnRY _1ErHn">
                                                <div class="PMONs _1ErHn _36KPg">
                                                    <div class="_167Be"><span aria-label="Avatar with initials D E" role="img" class="Polaris-Avatar_z763p Polaris-Avatar--sizeMedium_5f35p Polaris-Avatar--styleFour_16hgi Polaris-Avatar--hasImage_1hz8x"><img src="https://cdn.shopify.com/s/files/1/2850/4238/users/avatar_250x250_crop_center_a56f7106-bba0-474d-ad6c-8c62e3b62713_50x50@3x.png?v=1609587931" class="Polaris-Avatar__Image_2qgms" alt="" role="presentation"></span></div>
                                                    
                                                    <div class="_3isSS">
                                                        <div>
                                                            <div>
                                                                <div class="_3y343">
                                                                    <div class="zCLkB"><label for="TimelineEditor2" class="_3ujpI">Comment</label>
                                                                        
                                                                        <div class="_38_Ci">
                                                                            <trix-toolbar id="trix-toolbar-2" style="display: none;">
                                                                                <div class="trix-button-row">
                                                                                    <span class="trix-button-group trix-button-group--text-tools" data-trix-button-group="text-tools">
                                                                                      
                                                                                    </span>


                                                                                    <span class="trix-button-group trix-button-group--file-tools" data-trix-button-group="file-tools">
                                                                                        <button type="button" class="trix-button trix-button--icon trix-button--icon-attach" data-trix-action="attachFiles" title="Attach Files" tabindex="-1">Attach Files</button>
                                                                                    </span>

                                                                                    <span class="trix-button-group-spacer"></span>

                                                                                    <span class="trix-button-group trix-button-group--history-tools" data-trix-button-group="history-tools">
                                                                                        <button type="button" class="trix-button trix-button--icon trix-button--icon-undo" data-trix-action="undo" data-trix-key="z" title="Undo" tabindex="-1">Undo</button>
                                                                                        <button type="button" class="trix-button trix-button--icon trix-button--icon-redo" data-trix-action="redo" data-trix-key="shift+z" title="Redo" tabindex="-1">Redo</button>
                                                                                    </span>
                                                                                </div>

                                                                                <div class="trix-dialogs" data-trix-dialogs="">
                                                                                    <div class="trix-dialog trix-dialog--link" data-trix-dialog="href" data-trix-dialog-attribute="href">
                                                                                        <div class="trix-dialog__link-fields">
                                                                                            <input type="url" name="href" class="trix-input trix-input--dialog" placeholder="Enter a URL…" aria-label="URL" required="" data-trix-input="" disabled="disabled">
                                                                                            <div class="trix-button-group">
                                                                                                <input type="button" class="trix-button trix-button--dialog" value="Link" data-trix-method="setAttribute">
                                                                                                <input type="button" class="trix-button trix-button--dialog" value="Unlink" data-trix-method="removeAttribute">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </trix-toolbar>
                                                                            <div class="Polaris-TextField_1spwi Polaris-TextField--hasValue_1mx8d Polaris-TextField--newDesignLanguage_1rik8">
                                                                                <input name="comment" id="PolarisTextField12" class="Polaris-TextField__Input_30ock" required="" placeholder="Leave a comment.." aria-labelledby="PolarisTextField12Label" aria-invalid="false" aria-multiline="false">                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="_2Kd6e">
                                                                          
                                                                            </div>
                                                                            <div class="_14594">
                                                                                <div class="Polaris-ButtonGroup_yy85z">
                                                                                    <div class="Polaris-Stack__Item_yiyol">
                                                                                        <button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="submit"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Post</span></span></button></div>
                                                                                </div>
                                                                            </div>
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="_11mGF" id="TimelineEditor2HelpText">Only you and other staff can see comments</div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                <div class="GQL4J">
                                                    <div class="_2AMGd">
                                                        <div class="_1Dy_7">
                                                            <div class="_3JpYM mK7Dg">
                                                                <h3 aria-label="Yesterday" class="Polaris-Subheading_syouu">Comments</h3>
                                                            </div>
                                                            <ul class="_1A02w">
                        @if ($comment == 0)
                        <li class="_2uqdv">
                            <div class="qUtBd _3ohI1">
                                <div class="pUfF9">
                                    <div class="_1WAyL _2253w"></div>
                                    <p class="_2f2zg">No Comments to display!</p>
                                    <p class="_3NuG1">0:00</p>
                                </div>
                            </div>
                        </li>        
                        @else
                                                                @foreach ($comments as $comment)
                                                                <li class="_2uqdv">
                                                                    <div class="qUtBd _3ohI1">
                                                                        <div class="pUfF9">
                                                                            <div class="_1WAyL _2253w"></div>
                                                                            <p class="_2f2zg">{{$comment->comment}}</p>
                                                                            <p class="_3NuG1">{{$comment->created_at->format('i:s')}}</p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                @endforeach
@endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                            <div class="_1OP6w"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div id="PolarisPortalsContainer">
                <div data-portal-id="popover-Polarisportal7"></div>
                <div data-portal-id="modal-Polarisportal5">
                    <div></div>
                </div>
                <div data-portal-id="Polarisportal6">
                    <div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
                </div>
                <div data-portal-id="popover-Polarisportal14"></div>
                <div data-portal-id="popover-Polarisportal15"></div>
                <div data-portal-id="modal-Polarisportal16">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal17">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal18">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal19">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal20">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal21">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal22">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal23">
                    <div></div>
                </div>
                <div data-portal-id="modal-Polarisportal25">
                    <div></div>
                </div>
                <div data-portal-id="popover-Polarisportal26"></div>
                <div data-portal-id="modal-Polarisportal28">
                    <div></div>
                </div>
                <div data-portal-id="tooltip-Polarisportal38"></div>
                <div data-portal-id="popover-Polarisportal39"></div>
                <div data-portal-id="tooltip-Polarisportal40"></div>
                <div data-portal-id="popover-Polarisportal41"></div>
                <div data-portal-id="tooltip-Polarisportal42"></div>
                <div data-portal-id="popover-Polarisportal43"></div>
                <div data-portal-id="popover-Polarisportal44"></div>
                <div data-portal-id="tooltip-Polarisportal45"></div>
                <div data-portal-id="popover-Polarisportal46"></div>
                <div data-portal-id="popover-Polarisportal47"></div>
            </div>
        </div>
    </div>
    


    <!--Contact Editor-->

    <div id="PolarisPortalsContainer_for_Contact" style="visibility: hidden;">
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
            <div></div>
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
        <div data-portal-id="modal-Polarisportal142">
            <div>
                <div class="Polaris-Modal-Dialog__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true">
                    <div>
                        <div role="dialog" aria-labelledby="Polarismodal-header20" tabindex="-1" class="Polaris-Modal-Dialog_n3qgo">
                            <div class="Polaris-Modal-Dialog__Modal_2v9yc">
                                <div class="Polaris-Modal-Header_z4uwg">
                                    <div id="Polarismodal-header20" class="Polaris-Modal-Header__Title_2qj8j">
                                        <h2 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">Edit contact information</h2>
                                    </div><button class="Polaris-Modal-CloseButton_bl13t" aria-label="Close" onclick="Close_Contact()"><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLighter_2s08r Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="M11.414 10l6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                            </svg></span></button>
                                </div>
                                <div class="Polaris-Modal__BodyWrapper_1kb1f">
                                    <div class="Polaris-Modal__Body_yjdx1 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj" data-polaris-scrollable="true">
                                        <section class="Polaris-Modal-Section_1b1h1">
    
    <form method="post" action="/about-customer/{{$c_id}}/updated">
        @csrf
    <div class="Polaris-FormLayout_1wntl">
        <div role="group" class="Polaris-FormLayout--grouped_17srt">
            <div class="Polaris-FormLayout__Items_38lvu">
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="PolarisTextField12Label" for="PolarisTextField12" class="Polaris-Label__Text_yj3uv">Name</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8" style="border: 1px solid #AEB4B9;border-radius: 5px;">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--hasValue_1mx8d Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="name" id="PolarisTextField12" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField12Label" aria-invalid="false" aria-multiline="false" value="{{$detail->name}}">

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Polaris-FormLayout__Item_yiyol">
            <div class="">
                <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                    <div class="Polaris-Label_2vd36"><label id="PolarisTextField14Label" for="PolarisTextField14" class="Polaris-Label__Text_yj3uv">Email</label></div>
                </div>
                <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8" style="border: 1px solid #AEB4B9;border-radius: 5px;">
                    <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                        <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                            
                            <input name="email" id="PolarisTextField14" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField14Label" aria-invalid="false" aria-multiline="false" value="{{$detail->email}}">

                            <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><span class="Polaris-VisuallyHidden_yrtt5"><button type="submit" aria-hidden="true" tabindex="-1">Submit</button></span>

</section>
                                    </div>
                                </div>
                                <div class="Polaris-Modal-Footer_z4ij5">
                                    <div class="Polaris-Modal-Footer__FooterContent_pymp5">
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentCenter_1rtaw">
                                            <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt"></div>
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <div class="Polaris-ButtonGroup_yy85z">
                                                    <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Close_Contact()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Cancel</span></span></button></div>
                                                    <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="submit"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button>
                                                    </form></div>
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
        <div data-portal-id="popover-Polarisportal145"></div>
    </div>
    <!--Contact Editor-->
    <!--Shipping Editor-->
    <div id="PolarisPortalsContainer-Shipping" style="visibility: hidden;">
        <div data-portal-id="popover-Polarisportal3"></div>
        <div data-portal-id="modal-Polarisportal4">
            <div></div>
        </div>
        <div data-portal-id="modal-Polarisportal5">
            <div></div>
        </div>
        <div data-portal-id="modal-Polarisportal6">
            <div></div>
        </div>
        <div data-portal-id="modal-Polarisportal7">
            <div>
                <div class="Polaris-Modal-Dialog__Container_13mbo" data-polaris-layer="true" data-polaris-overlay="true">
                    <div>
                        <div role="dialog" aria-labelledby="Polarismodal-header5" tabindex="-1" class="Polaris-Modal-Dialog_n3qgo">
                            <div class="Polaris-Modal-Dialog__Modal_2v9yc">
                                <div class="Polaris-Modal-Header_z4uwg">
                                    <div id="Polarismodal-header5" class="Polaris-Modal-Header__Title_2qj8j">
                                        <h2 class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeSmall_7647q">Edit shipping address</h2>
                                    </div><button class="Polaris-Modal-CloseButton_bl13t" aria-label="Close" onclick="Close_Shipping()"><span class="Polaris-Icon_yj27d Polaris-Icon--colorInkLighter_2s08r Polaris-Icon--isColored_uhqnf Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                <path d="M11.414 10l6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                                            </svg></span></button>
                                </div>
                                <div class="Polaris-Modal__BodyWrapper_1kb1f">
                                    <div class="Polaris-Modal__Body_yjdx1 Polaris-Scrollable_1ed9o Polaris-Scrollable--vertical_uiuuj Polaris-Scrollable--hasBottomShadow_all2n Polaris-Scrollable--verticalHasScrolling_1n2r8" data-polaris-scrollable="true">
                                        <section class="Polaris-Modal-Section_1b1h1">
                                            
                                            <form method="post" action="/about-customer/{{$c_id}}/address/updated">
                                                @csrf
                                                <div class="Polaris-FormLayout_1wntl">
                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                        <div class="Polaris-FormLayout_1wntl">
                                                            <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                                <div class="Polaris-FormLayout__Items_38lvu">
                                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                                        <div class="Polaris-FormLayout_1wntl">
                                                                            <div role="group" class="Polaris-FormLayout--grouped_17srt">
                                                                                <div class="Polaris-FormLayout__Items_38lvu">
                                                                                    
                                                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                                                        <div class="">
                                                                                            <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                                <div class="Polaris-Label_2vd36"><label id="PolarisTextField3Label" for="PolarisTextField3" class="Polaris-Label__Text_yj3uv">Name</label></div>
                                                                                            </div>
                                                                                            <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8" style="border: 1px solid #AEB4B9;border-radius: 5px;">
                                                                                                <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                                    <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                                                                                        <input name="name" id="PolarisTextField3" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField3Label" aria-invalid="false" aria-multiline="false" value="{{$detail->name}}">
                                                                                                        <div class="Polaris-TextField__Backdrop_1x2i2"></div>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                        <div class="Polaris-FormLayout_1wntl">
                                                            <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                                <div class="Polaris-FormLayout__Items_38lvu">
                                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                                        <div role="combobox" aria-expanded="false" aria-owns="PolarisComboBox2" aria-controls="PolarisComboBox2" aria-haspopup="true" tabindex="-1">
                                                                            <div>
                                                                                <div class="">
                                                                                    <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                        <div class="Polaris-Label_2vd36"><label id="PolarisTextField5Label" for="PolarisTextField5" class="Polaris-Label__Text_yj3uv">Address</label></div>
                                                                                    </div>
                                                                                    <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8" style="border: 1px solid #AEB4B9;border-radius: 5px;">
                                                                                        <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                            <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                                                                                <input name="address" id="PolarisTextField5" autocomplete="no" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField5Label" aria-invalid="false" aria-multiline="false" value="{{$detail->address}}" tabindex="0" aria-controls="Polarispopover12" aria-owns="Polarispopover12" aria-expanded="false">
                                                                                                <div class="Polaris-TextField__Backdrop_1x2i2"></div>
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
                                                    </div>
                                                    
                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                        <div class="Polaris-FormLayout_1wntl">
                                                            <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                                <div class="Polaris-FormLayout__Items_38lvu">
                                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                                        <div class="">
                                                                            <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                <div class="Polaris-Label_2vd36"><label id="PolarisTextField7Label" for="PolarisTextField7" class="Polaris-Label__Text_yj3uv">City</label></div>
                                                                            </div>
                                                                            <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8" style="border: 1px solid #AEB4B9;border-radius: 5px;">
                                                                                <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                    <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input name="city" id="PolarisTextField7" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField7Label" aria-invalid="false" aria-multiline="false" value="{{$detail->city}}">
                                                                                        <div class="Polaris-TextField__Backdrop_1x2i2"></div>
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
                                                <div class="Polaris-FormLayout_1wntl">
                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                        <div class="Polaris-FormLayout_1wntl">
                                                            <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                                <div class="Polaris-FormLayout__Items_38lvu">
                                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                                        <div class="">
                                                                            <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                <div class="Polaris-Label_2vd36"><label id="PolarisSelect1Label" for="PolarisSelect1" class="Polaris-Label__Text_yj3uv">Country/Region</label></div>
                                                                            </div>
                                                                            
                                                                            <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8" style="border: 1px solid #AEB4B9;border-radius: 5px;">
                                                                                <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                    <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input name="state" id="PolarisTextField7" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField7Label" aria-invalid="false" aria-multiline="false" value="{{$detail->state}}">
                                                                                        <div class="Polaris-TextField__Backdrop_1x2i2"></div>
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
                                                <div class="Polaris-FormLayout_1wntl">
                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                        <div class="Polaris-FormLayout_1wntl">
                                                            <div role="group" class="Polaris-FormLayout--condensed_b60cb">
                                                                <div class="Polaris-FormLayout__Items_38lvu">
                                                                    <div class="Polaris-FormLayout__Item_yiyol">
                                                                        <div>
                                                                            <div class="">
                                                                                <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                                                                    <div class="Polaris-Label_2vd36"><label id="PolarisTextField8Label" for="PolarisTextField8" class="Polaris-Label__Text_yj3uv">Phone</label></div>
                                                                                </div>
                                                                                <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8" style="border: 1px solid #AEB4B9;border-radius: 5px;">
                                                                                    <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                                                                        <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8"><input name="phone" id="PolarisTextField8" placeholder="" class="Polaris-TextField__Input_30ock" aria-labelledby="PolarisTextField8Label" aria-invalid="false" aria-multiline="false" value="{{$detail->phone}}">
                                                                                            <div class="Polaris-TextField__Backdrop_1x2i2"></div>
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
                                                </div><span class="Polaris-VisuallyHidden_yrtt5"><button type="submit" aria-hidden="true" tabindex="-1">Submit</button></span>
                                            
                                        </section>
                                    </div>
                                </div>
                                <div class="Polaris-Modal-Footer_z4ij5">
                                    <div class="Polaris-Modal-Footer__FooterContent_pymp5">
                                        <div class="Polaris-Stack_32wu2 Polaris-Stack--alignmentCenter_1rtaw">
                                            <div class="Polaris-Stack__Item_yiyol Polaris-Stack__Item--fill_vpuzt"></div>
                                            <div class="Polaris-Stack__Item_yiyol">
                                                <div class="Polaris-ButtonGroup_yy85z">
                                                    <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" onclick="Close_Shipping()"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv" >Cancel</span></span></button></div>
                                                    <div class="Polaris-ButtonGroup__Item_yiyol"><button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="submit"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button>
                                                    </form></div>
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
        <div data-portal-id="modal-Polarisportal8">
            <div></div>
        </div>
        <div data-portal-id="modal-Polarisportal9">
            <div></div>
        </div>
        <div data-portal-id="modal-Polarisportal10">
            <div></div>
        </div>
        <div data-portal-id="modal-Polarisportal11">
            <div></div>
        </div>
        <div data-portal-id="modal-Polarisportal1">
            <div></div>
        </div>
        <div data-portal-id="Polarisportal2">
            <div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
        </div>
    </div>
    <!--Shipping Editor-->
    
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

@endsection