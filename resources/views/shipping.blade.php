@extends('layouts.app')
@section('content')

<meta charset="utf-8">
    <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@5.12.0/dist/styles.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="never">
    <meta data-react-html="true" name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, user-scalable=no">
    <meta data-react-html="true" name="apple-mobile-web-app-capable" content="yes">
    <meta data-react-html="true" name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-flow~section-flow-summary~section-flow-template-installer~section-flo~67560caa-
da74327255a921063014b93a350cde95232ab12445903cd4c054dd790b472f56.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
                                <div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--hasNavigation_gfpa8 Polaris-Page-Header--hasActionMenu_1wx04 Polaris-Page-Header--mobileView_i07vm Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6" style="margin-bottom: 40px;" >
                                    <div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
                                        <div class="Polaris-Page-Header__BreadcrumbWrapper_1tgwk Polaris-Page-Header--newDesignLanguage_1rik8">
                                            <nav role="navigation"><a data-polaris-unstyled="true" class="Polaris-Breadcrumbs__Breadcrumb_llsun Polaris-Breadcrumbs--newDesignLanguage_1rik8" href="/settings"><span class="Polaris-Breadcrumbs__ContentWrapper_1yvfo"><span class="Polaris-Breadcrumbs__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                    <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                                                                </svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Products</span></span></a></nav>
                                        </div>
                                        <div class="Polaris-Page-Header__TitleWrapper_bejfn">
                                            <div>
                                                <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                    <div class="Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 Polaris-Header-Title--newDesignLanguage_1rik8">
                                                        <div class="Polaris-Header-Title_2qj8j">
                                                            <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Shipping and delivery</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                                <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                    <div class="Polaris-Header-Title_2qj8j">
                                                        
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                                
<div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
  <div class="Polaris-Layout">
    <div class="Polaris-Layout__AnnotatedSection">
      <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">
          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Delivery methods at checkout</h2>
            <div class="Polaris-Layout__AnnotationDescription">
              <p>Manage how customers receive their orders. Learn more about delivery methods.</p>
            </div>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item">
                  <div class="">
                    <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Shipping</h2>
            <p>Choose where you ship and how much you charge for shipping at checkout. Learn more about shipping rates.</p>
            
            
            
            
            
            <div>
      <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
           <h3 aria-label="Accounts" class="Polaris-Subheading">GENERAL SHIPPING RATES</h3>
        </div>
        <div class="Polaris-Stack__Item">
          <div class="Polaris-ButtonGroup">
            <div class="Polaris-ButtonGroup__Item Polaris-ButtonGroup__Item--plain"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Manage rates</span></span></button></div>
          </div>
        </div>
        
      </div>
      <div><span class="Polaris-TextStyle--variationSubdued">All products</span>
      <div style="padding-top: 10px;">
  <span style="margin-top: 10px;">Rates for</span>
  <div>
  <span class="Polaris-TextStyle--variationSubdued">Domestic</span>
 </div>
  <div>
  <span class="Polaris-TextStyle--variationSubdued">Rest of the World</span>
 </div>
 
  
  <div id="PolarisPortalsContainer"></div>
</div>
  <div id="PolarisPortalsContainer"></div>
</div>
  
  <div id="PolarisPortalsContainer"></div>
</div>
            
          </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="Polaris-Card__Section" style="padding-top: 10px">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item">
      <div class="Polaris-Stack ">
        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill" >
           <h3 aria-label="Accounts" class="Polaris-Subheading">CUSTOM SHIPPING RATES</h3>
        </div>
        <div class="Polaris-Stack__Item">
          <div class="Polaris-ButtonGroup">
            <div class="Polaris-ButtonGroup__Item Polaris-ButtonGroup__Item--plain"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Create New Profile</span></span></button></div>
          </div>
        </div>
        
      </div>
                 
              
        <p style="margin-top: 10px;">Create a shipping profile to add custom rates or destination restrictions for groups of products. Learn more about shipping profiles.</p>   
                 
                 
                 
                  </div>
</div>
</div>
</div>
<div class="Polaris-Card">
    <div class="Polaris-Card__Section">
        <div class="Polaris-FormLayout">
            <div class="Polaris-FormLayout__Item">
                
                    <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Local delivery</h2>
            <p>Deliver orders directly to local customers. Learn more about local delivery.</p>
            
        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill" >
           <h3 aria-label="Accounts" class="Polaris-Subheading">MANAGE DELIVERY BY LOCATION</h3>
        </div>
                </div>
            
            <div style="margin-top: 20px;">
                
                <span class=" Polaris-Thumbnail Polaris-Thumbnail--sizeMedium" style="margin: 0;height: 40px;width: 40px; padding: 9px;float: left;"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M18 8c0-4.42-3.58-8-8-8S2 3.58 2 8c0 .15 0 .29.01.44.13 3.55 1.99 7.62 7.13 11.29.51.36 1.21.36 1.72 0 5.14-3.67 7-7.74 7.13-11.29.01-.15.01-.29.01-.44zm-5.879 2.121a2.996 2.996 0 0 0 0-4.242 2.996 2.996 0 0 0-4.242 0 2.996 2.996 0 0 0 0 4.242 2.996 2.996 0 0 0 4.242 0z" fill="#5C5F62"></path></svg></span> <span > <h2 class="Polaris-Heading" style="margin-top: 10px;margin-bottom: 0;margin-left: 50px;">Online store dashboard<span class="Polaris-Badge" style="margin-left: 10px;">Fulfilled</span></h2><p style="margin-left: 50px;"><span class="Polaris-TextStyle--variationSubdued">H-28, Sector 63, 201301 Noida Uttar Pradesh, India</span></p></span>
                
                <button class="Polaris-Button Polaris-Button--plain" type="button" style="float: right;margin-top: -50px;"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Manage</span></span></button>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="Polaris-Card">
    <div class="Polaris-Card__Section">
        <div class="Polaris-FormLayout">
            <div class="Polaris-FormLayout__Item">
                
                    <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Local Pickup</h2>
            <p>Allow local customers to pick up their orders. Learn more about local pickup.</p>
            
        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill" >
           <h3 aria-label="Accounts" class="Polaris-Subheading">MANAGE PICKUP BY LOCATION</h3>
        </div>
                </div>
            
            <div style="margin-top: 20px;">
                
                <span class=" Polaris-Thumbnail Polaris-Thumbnail--sizeMedium" style="margin: 0;height: 40px;width: 40px; padding: 9px;float: left;"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M18 8c0-4.42-3.58-8-8-8S2 3.58 2 8c0 .15 0 .29.01.44.13 3.55 1.99 7.62 7.13 11.29.51.36 1.21.36 1.72 0 5.14-3.67 7-7.74 7.13-11.29.01-.15.01-.29.01-.44zm-5.879 2.121a2.996 2.996 0 0 0 0-4.242 2.996 2.996 0 0 0-4.242 0 2.996 2.996 0 0 0 0 4.242 2.996 2.996 0 0 0 4.242 0z" fill="#5C5F62"></path></svg></span> <span > <h2 class="Polaris-Heading" style="margin-top: 10px;margin-bottom: 0;margin-left: 50px;">Online store dashboard<span class="Polaris-Badge" style="margin-left: 10px;">Fulfilled</span></h2><p style="margin-left: 50px;"><span class="Polaris-TextStyle--variationSubdued">H-28, Sector 63, 201301 Noida Uttar Pradesh, India</span></p></span>
                
                <button class="Polaris-Button Polaris-Button--plain" type="button" style="float: right;margin-top: -50px;"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Manage</span></span></button>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
 
    <div class="Polaris-Layout__AnnotatedSection">
     
     
      <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">
          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Packages</h2>
            <div class="Polaris-Layout__AnnotationDescription">
              <p>The package sizes you use to ship your products. Weight and dimensions of the default package are used when calculating shipping rates at checkout.</p>
            </div>
          </div>
        </div>
        
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item" style="margin-top: 0;">
                  
                    
                    
                     <div class="Polaris-Stack ">
        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill" >
            <h2 class="Polaris-Heading">Saved packages</h2>
        </div>
        <div class="Polaris-Stack__Item">
          <div class="Polaris-ButtonGroup">
            <div class="Polaris-ButtonGroup__Item Polaris-ButtonGroup__Item--plain"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add Packages</span></span></button></div>
          </div>
        </div>
        
      </div>
            
            <div style="margin-top: 20px;">
                
                <span class=" Polaris-Thumbnail Polaris-Thumbnail--sizeMedium" style="margin: 0;height: 40px;width: 40px; padding: 9px;float: left;"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M19 5h-8V2h5.227c.382-.001.736.162.928.429L19 5zM3.773 2H9v3H1l1.845-2.571c.192-.267.546-.43.928-.429zM1 7v10.5A1.5 1.5 0 0 0 2.5 19h15a1.5 1.5 0 0 0 1.5-1.5V7H1zm2 2h6v4H3V9z" fill="#5C5F62"></path></svg></span> <span > <p class="" style="margin-top: 10px;margin-bottom: 0;margin-left: 50px;">Sample box</p><p style="margin-left: 50px;"><span class="Polaris-TextStyle--variationSubdued">22 × 13.6 × 4.3 cm, 0 kg</span></p></span>
                
                <button class="Polaris-Button Polaris-Button--plain" type="button" style="float: right;margin-top: -50px;"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Edit</span></span></button>
                </div>
                    
                    
                    
                  </div>
                </div>
              </div>
              
            <div class="Polaris-Card__Section">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item">
                 
            <div style="margin-top: 20px;">
                
                <span class=" Polaris-Thumbnail Polaris-Thumbnail--sizeMedium" style="margin: 0;height: 40px;width: 40px; padding: 9px;float: left;"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M19 5h-8V2h5.227c.382-.001.736.162.928.429L19 5zM3.773 2H9v3H1l1.845-2.571c.192-.267.546-.43.928-.429zM1 7v10.5A1.5 1.5 0 0 0 2.5 19h15a1.5 1.5 0 0 0 1.5-1.5V7H1zm2 2h6v4H3V9z" fill="#5C5F62"></path></svg></span> <span > <p class="" style="margin-top: 10px;margin-bottom: 0;margin-left: 50px;">Sample box</p><p style="margin-left: 50px;"><span class="Polaris-TextStyle--variationSubdued">22 × 13.6 × 4.3 cm, 0 kg</span></p></span>
                
                <button class="Polaris-Button Polaris-Button--plain" type="button" style="float: right;margin-top: -50px;"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Edit</span></span></button>
                </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          
          
          
          
          
          
          
        </div>
          </div>
          
          
          
        <div class="Polaris-Layout__AnnotatedSection">


          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__Annotation">
              <div class="Polaris-TextContainer">
                <h2 class="Polaris-Heading">Packing slips</h2>
                <div class="Polaris-Layout__AnnotationDescription">
                  <p>A printed list of items in a shipment that often goes inside a package.</p>
                </div>
              </div>
            </div>

            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item" style="margin-top: 0;">



                         <div class="Polaris-Stack ">
            <div class="Polaris-Stack__Item Polaris-Stack__Item--fill" >
                <h2 class="Polaris-Heading">Packing slip template</h2>
            </div>
            <div class="Polaris-Stack__Item">
              <div class="Polaris-ButtonGroup">
                <div class="Polaris-ButtonGroup__Item Polaris-ButtonGroup__Item--plain"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Edit</span></span></button></div>
              </div>
              
            </div>
            

          </div>


<p style="margin-top: 20px;">Customize the packing slips you can print when you’re fulfilling orders.</p>


                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
          
          
        <div class="Polaris-Layout__AnnotatedSection" style="margin-top: 0;">


          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__Annotation">
              <div class="Polaris-TextContainer">
                <h2 class="Polaris-Heading">Accounts and integrations</h2>
                
              </div>
            </div>

            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout" >
                    <div class="Polaris-FormLayout__Item" style="margin-top: 0;">



                         <div class="Polaris-Stack " style="margin-top: 0; padding-top: 0;">
            <div class="Polaris-Stack__Item Polaris-Stack__Item--fill" >
                <h2 class="Polaris-Heading">Carrier accounts and fulfillment services</h2>
            </div>
            <div class="Polaris-Stack__Item">
              <div class="Polaris-ButtonGroup">
                <div class="Polaris-ButtonGroup__Item Polaris-ButtonGroup__Item--plain"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Manage Integration</span></span></button></div>
              </div>
              
            </div>
            

          </div>


<p style="margin-top: 20px;">Connect and manage external shipping carrier accounts and fulfillment services. </p>


                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
  </div>
  <div id="PolarisPortalsContainer"></div>
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