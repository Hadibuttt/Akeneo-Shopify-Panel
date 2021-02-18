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
<nav role="navigation"><a href="/notification" data-polaris-unstyled="true" class="Polaris-Breadcrumbs__Breadcrumb_llsun Polaris-Breadcrumbs--newDesignLanguage_1rik8"><span class="Polaris-Breadcrumbs__ContentWrapper_1yvfo"><span class="Polaris-Breadcrumbs__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
</svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Pages</span></span></a></nav>
</div>



<div class="Polaris-Page-Header__TitleWrapper_bejfn">
<div>
<div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
    
    <form action="" method="post">
        @csrf
    
<div class="Polaris-Header-Title_2qj8j">
<h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d" style="margin-top: 4px;">Email</h1>
</div>
</div>
</div>
</div>




<div class="Polaris-Page-Header__RightAlign_1ok1p">
<div class="Polaris-Page-Header__Actions_17m67">
<div class="Polaris-ActionMenu_1hlnt Polaris-ActionMenu--newDesignLanguage_1rik8">
<div class="Polaris-ActionMenu-Actions__ActionsLayout_w56ri Polaris-ActionMenu-Actions--newDesignLanguage_1rik8">
<div class="Polaris-ButtonGroup_yy85z Polaris-ButtonGroup--extraTight_1xh3x">

<div class="Polaris-ButtonGroup__Item_yiyol"><span class="Polaris-ActionMenu-SecondaryAction_1dl4i Polaris-ActionMenu-SecondaryAction--newDesignLanguage_1rik8"><a href="https://akeneo-shop.myshopify.com/pages/faq" data-polaris-unstyled="true" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" target="_blank" rel="noopener noreferrer"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
<path d="M17.928 9.628C17.837 9.399 15.611 4 10 4S2.162 9.399 2.07 9.628a1.017 1.017 0 0 0 0 .744C2.163 10.601 4.389 16 10 16s7.837-5.399 7.928-5.628a1.017 1.017 0 0 0 0-.744zM10 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-6a2 2 0 1 0 .002 4.001A2 2 0 0 0 9.999 8z"></path>
</svg></span></span><span class="Polaris-Button__Text_yj3uv">View email</span></span></a></span></div>


<div class="Polaris-ButtonGroup__Item_yiyol">
<div><span class="Polaris-ActionMenu-SecondaryAction_1dl4i "><button type="submit" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8" type="button" tabindex="0" aria-controls="Polarispopover49" aria-owns="Polarispopover49" aria-expanded="false"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="Polaris-Page__Content_xd1mk">
<div class="_1j4h2">

<div class="Polaris-Layout_sl20u Polaris-Layout--newDesignLanguage_1rik8">
<div class="Polaris-Layout__Section_1b1h1"></div>
<div class="Polaris-Layout__Section_1b1h1">
<div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-FormLayout_1wntl">
<div class="Polaris-FormLayout__Item_yiyol">
<div class="">
<div class="Polaris-Labelled__LabelWrapper_bf6ys">
<div class="Polaris-Label_2vd36"><label id="PolarisTextField1Label" for="PolarisTextField1" class="Polaris-Label__Text_yj3uv">Email Title</label></div>
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
<div class="Polaris-Label_2vd36"><label id="product-descriptionLabel" for="product-description" class="Polaris-Label__Text_yj3uv">Email Description</label></div>
</div>
<div class="_1d9Re">

<div class="_1K4u4">
<div id="product-description_parent">
</div><textarea name="description" id="product-description" class="_2LZUF" aria-hidden="true" >



</textarea>
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
<h2 class="Polaris-Heading_1brcv">Liquid variables</h2>
</div>
<div class="Polaris-Card__Section_1b1h1">
<div class="Polaris-Stack_32wu2 Polaris-Stack--vertical_uiuuj Polaris-Stack--spacingLoose_yte7q">
<p>You can use liquid variables to output an accent colour and logo image in your templates. The available variables are:</p>
<ul style="padding-left: 20px;">
    <li style="background:#EBEEF0; margin-top:2px; width:100%;">shop.email_logo_url</li>
    <li style="background:#EBEEF0; margin-top:2px; width:100%;">shop.email_logo_width</li>
    <li style="background:#EBEEF0; margin-top:2px; width:100%;">shop.email_accent_color</li>
</ul>
</div>
</div>
</div>

</div>
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
</style>

    @endsection