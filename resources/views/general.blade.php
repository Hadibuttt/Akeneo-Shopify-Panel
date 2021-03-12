@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@5.12.0/dist/styles.css" />
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
                                                                </svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Staff Account</span></span></a></nav>
                                        </div>
                                        <div class="Polaris-Page-Header__TitleWrapper_bejfn">
                                            <div>
                                                <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                    <div class="Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 Polaris-Header-Title--newDesignLanguage_1rik8">
                                                        <div class="Polaris-Header-Title_2qj8j">
                                                            <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">General</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                
<div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;margin-top: 40px;">
  <div class="Polaris-Layout">
    <div class="Polaris-Layout__AnnotatedSection">
      <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">
          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Store details</h2>
            <div class="Polaris-Layout__AnnotationDescription">
              <p>Shopify and your customers will use this information to contact you.</p>
            </div>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item">
                  <div class="">
                  
                  
                  
                  
                  
                  <div class="Polaris-FormLayout_1wntl">
            <div class="Polaris-FormLayout__Items_38lvu">
                
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Store Name</label></div>
                        </div>
                        
                        
                        <form action="inserted" method="post">
@csrf
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="StoreName" type="text" id="InventoryCardBarcode" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardBarcodeLabel" aria-invalid="false" aria-multiline="false" @foreach ($stores as $store)
                                        
                                     value="{{$store->StoreName}}" @endforeach>

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        <div role="group" class="Polaris-FormLayout--grouped_17srt">
            <div class="Polaris-FormLayout__Items_38lvu">
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardSkuLabel" for="InventoryCardSku" class="Polaris-Label__Text_yj3uv">Store contact email</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="StoreEmail" type="text" id="InventoryCardSku" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardSkuLabel" aria-invalid="false" aria-multiline="false" @foreach ($stores as $store)
                                        
                                    value="{{$store->StoreEmail}}" @endforeach>

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                        
                            <span class="Polaris-TextStyle--variationSubdued">We'll use this address if we need to contact you about your store.</span>
                            
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Sender email</label></div>
                        </div>
     
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="SenderEmail" type="text" id="InventoryCardSku" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardSkuLabel" aria-invalid="false" aria-multiline="false" @foreach ($stores as $store)
                                        
                                    value="{{$store->SenderEmail}}" @endforeach>

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                        
                        <span class="Polaris-TextStyle--variationSubdued">Your customers will see this address if you email them</span>
                            
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                                                                    <div class="">
                                                                       
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Store industry</label></div>
                        </div>
                                                                        <div class="Polaris-Select_ss8pm Polaris-Select--newDesignLanguage_1rik8">
                                                                            
                                                                            <select name="StoreIndustry" id="PolarisSelect1" class="Polaris-Select__Input_30ock" aria-invalid="false" onchange="selector(this)">
                                                                                <option value="clothing">Clothing</option>
                                                                                
                                                                                <option value="electronics">Electronics</option>
                                                                            </select>
                                                                           
                                                                            <div class="Polaris-Select__Content_xd1mk" aria-hidden="true" aria-disabled="false"><span class="Polaris-Select__SelectedOption_azu52" id="Polaris-Select__SelectedOption_azu52">Clothing</span><span class="Polaris-Select__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                            <path d="M10 16l-4-4h8l-4 4zm0-12l4 4H6l4-4z"></path>
                                                                                        </svg></span></span></div>
                                                                            <div class="Polaris-Select__Backdrop_1x2i2"></div>
                                                                        </div>
                                                                    </div>
                                                                 <script>
                                                            function selector(sel) 
                                                                {
                                document.getElementById('Polaris-Select__SelectedOption_azu52').innerHTML=sel.options[sel.selectedIndex].text;
                                                                }
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
        </div>
      </div>
    </div>
  </div>
  <div id="PolarisPortalsContainer"></div>
  <div id="PolarisPortalsContainer"></div>
</div>
 
                              
<div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;margin-top: 40px;">
  <div class="Polaris-Layout">
    <div class="Polaris-Layout__AnnotatedSection">
      <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">
          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Store address</h2>
            <div class="Polaris-Layout__AnnotationDescription">
              <p>This address will appear on your invoices. You can edit the address used to calculate shipping rates in your shipping settings.<br><br>

Your primary business location could affect which apps can be used on your store. Learn more about app compatibility</p>
            </div>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item">
                  <div class="">
                  
                  
                  
                  
                  
                  <div class="Polaris-FormLayout_1wntl">
            <div class="Polaris-FormLayout__Items_38lvu">
                
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Legal name of business</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="LegalName" id="InventoryCardBarcode" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardBarcodeLabel" aria-invalid="false" aria-multiline="false" @foreach ($stores as $store)
                                        
                                    value="{{$store->LegalName}}" @endforeach>

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="Polaris-FormLayout__Items_38lvu">
                
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Phone</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="Phone" id="InventoryCardBarcode" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardBarcodeLabel" aria-invalid="false" aria-multiline="false" @foreach ($stores as $store)
                                        
                                    value="{{$store->Phone}}" @endforeach>

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="Polaris-FormLayout__Items_38lvu">
                
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Streets</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="Streets" id="InventoryCardBarcode" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardBarcodeLabel" aria-invalid="false" aria-multiline="false" @foreach ($stores as $store)
                                        
                                    value="{{$store->Streets}}" @endforeach>

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="Polaris-FormLayout__Items_38lvu">
                
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Apartment, suite, etc. (optional)</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="Apartment" id="InventoryCardBarcode" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardBarcodeLabel" aria-invalid="false" aria-multiline="false" @foreach ($stores as $store)
                                        
                                    value="{{$store->Apartment}}" @endforeach>

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        <div role="group" class="Polaris-FormLayout--grouped_17srt">
            <div class="Polaris-FormLayout__Items_38lvu">
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardSkuLabel" for="InventoryCardSku" class="Polaris-Label__Text_yj3uv">City</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="City" id="InventoryCardSku" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardSkuLabel" aria-invalid="false" aria-multiline="false" @foreach ($stores as $store)
                                        
                                    value="{{$store->City}}" @endforeach>

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                       
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Postal / ZIP code</label></div>
                        </div>
     
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="ZipCode" id="InventoryCardSku" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardSkuLabel" aria-invalid="false" aria-multiline="false" @foreach ($stores as $store)
                                        
                                    value="{{$store->ZipCode}}" @endforeach>

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                                                                    <div class="">
                                                                       
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Country</label></div>
                        </div>
                                                                        <div class="Polaris-Select_ss8pm Polaris-Select--newDesignLanguage_1rik8">
                                                                            
                                                                            <select name="Country" class="Polaris-Select__Input_30ock" aria-invalid="false" onchange="selector2(this)">
                                                                                <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
                                                                            </select>
                                                                           
                                                                            <div class="Polaris-Select__Content_xd1mk" aria-hidden="true" aria-disabled="false"><span class="Polaris-Select__SelectedOption_azu52" id="Polaris-Select__SelectedOption_azu53">Pakistan</span><span class="Polaris-Select__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                            <path d="M10 16l-4-4h8l-4 4zm0-12l4 4H6l4-4z"></path>
                                                                                        </svg></span></span></div>
                                                                            <div class="Polaris-Select__Backdrop_1x2i2"></div>
                                                                        </div>
                                                                    </div>
                                                                 <script>
                                                            function selector2(sel) 
                                                                {
                                document.getElementById('Polaris-Select__SelectedOption_azu53').innerHTML=sel.options[sel.selectedIndex].text;
                                                                }
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
        </div>
      </div>
    </div>
  </div>
  <div id="PolarisPortalsContainer"></div>
  <div id="PolarisPortalsContainer"></div>
</div>
 
 
                              
<div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;margin-top: 40px;">
  
    <div class="Polaris-Layout">
        <div class="Polaris-Layout__AnnotatedSection">
          <div class="Polaris-Layout__AnnotationWrapper">
            <div class="Polaris-Layout__Annotation">
              <div class="Polaris-TextContainer">
                <h2 class="Polaris-Heading">Site Identity</h2>
                <div class="Polaris-Layout__AnnotationDescription">
                  <p>Your logo </p>
                </div>
              </div>
            </div>
            <div class="Polaris-Layout__AnnotationContent">
              <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                  <div class="Polaris-FormLayout" style="margin-right: 0;">
                    
            <div role="group" class="Polaris-FormLayout--grouped_17srt">
                <div class="Polaris-FormLayout__Items_38lvu">
                    <div class="Polaris-FormLayout__Item_yiyol">
                      <div style="margin-bottom: 5px;">
                          <label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Site Logo</label>
                      </div>
                       <div>
      <div class="Polaris-Labelled--hidden">
        <div class="Polaris-Labelled__LabelWrapper">
          <div class="Polaris-Label"><label id="PolarisDropZone2Label" for="PolarisDropZone2" class="Polaris-Label__Text">Upload file</label></div>
        </div>
        <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeExtraLar" aria-disabled="false">
          <div class="Polaris-DropZone__Container">
            <div class="Polaris-DropZone-FileUpload">
              <div class="Polaris-Stack Polaris-Stack--vertical">
                <div class="Polaris-Stack__Item">
                  <div class="Polaris-DropZone-FileUpload__Button">Add file</div>
                </div>
                <div class="Polaris-Stack__Item"><span class="Polaris-TextStyle--variationSubdued">or drop files to upload</span></div>
              </div>
            </div>
          </div><span class="Polaris-VisuallyHidden"><input id="PolarisDropZone2" type="file" multiple="" autocomplete="off"></span>
        </div>
      </div>
      <div id="PolarisPortalsContainer"></div>
    </div>
                      <div style="margin-bottom: 5px; margin-top: 20px">
                          <label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Admin Logo</label>
                      </div>
                       <div>
      <div class="Polaris-Labelled--hidden">
        <div class="Polaris-Labelled__LabelWrapper">
          <div class="Polaris-Label"><label id="PolarisDropZone2Label" for="PolarisDropZone2" class="Polaris-Label__Text">Upload file</label></div>
        </div>
        <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeExtraLar" aria-disabled="false">
          <div class="Polaris-DropZone__Container">
            <div class="Polaris-DropZone-FileUpload">
              <div class="Polaris-Stack Polaris-Stack--vertical">
                <div class="Polaris-Stack__Item">
                  <div class="Polaris-DropZone-FileUpload__Button">Add file</div>
                </div>
                <div class="Polaris-Stack__Item"><span class="Polaris-TextStyle--variationSubdued">or drop files to upload</span></div>
              </div>
            </div>
          </div><span class="Polaris-VisuallyHidden"><input id="PolarisDropZone2" type="file" multiple="" autocomplete="off"></span>
        </div>
      </div>
      <div id="PolarisPortalsContainer"></div>
    </div>
                      <div style="margin-bottom: 5px; margin-top: 20px;">
                          <label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Favicon</label>
                      </div>
                       <div>
      <div class="Polaris-Labelled--hidden">
        <div class="Polaris-Labelled__LabelWrapper">
          <div class="Polaris-Label"><label id="PolarisDropZone2Label" for="PolarisDropZone2" class="Polaris-Label__Text">Upload file</label></div>
        </div>
        <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeExtraLar" aria-disabled="false">
          <div class="Polaris-DropZone__Container">
            <div class="Polaris-DropZone-FileUpload">
              <div class="Polaris-Stack Polaris-Stack--vertical">
                <div class="Polaris-Stack__Item">
                  <div class="Polaris-DropZone-FileUpload__Button">Add file</div>
                </div>
                <div class="Polaris-Stack__Item"><span class="Polaris-TextStyle--variationSubdued">or drop files to upload</span></div>
              </div>
            </div>
          </div><span class="Polaris-VisuallyHidden"><input id="PolarisDropZone2" type="file" multiple="" autocomplete="off"></span>
        </div>
      </div>
      <div id="PolarisPortalsContainer"></div>
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
      <div id="PolarisPortalsContainer"></div>
      <div id="PolarisPortalsContainer"></div>
    </div>
    <br>
    <br>

   <div class="Polaris-Layout">
    <div class="Polaris-Layout__AnnotatedSection">
      <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">
          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Standards and formats</h2>
            <div class="Polaris-Layout__AnnotationDescription">
              <p>Standards and formats are used to calculate product prices, shipping weights, and order times.</p>
            </div>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item">
                  <div class="">
                  
                  
                  
                  
                  
                  <div class="Polaris-FormLayout_1wntl">
                   <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                                                                    <div class="">
                                                                       
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Time zone</label></div>
                        </div>
                                                                        <div class="Polaris-Select_ss8pm Polaris-Select--newDesignLanguage_1rik8">
                                                                            
                                                                            <select name="TimeZone" class="Polaris-Select__Input_30ock" aria-invalid="false" onchange="selector3(this)">
                                                                                <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
	<option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
	<option value="-10:00">(GMT -10:00) Hawaii</option>
	<option value="-09:50">(GMT -9:30) Taiohae</option>
	<option value="-09:00">(GMT -9:00) Alaska</option>
	<option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
	<option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
	<option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
	<option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
	<option value="-04:50">(GMT -4:30) Caracas</option>
	<option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
	<option value="-03:50">(GMT -3:30) Newfoundland</option>
	<option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
	<option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
	<option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
	<option value="+00:00" selected="selected">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
	<option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
	<option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
	<option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
	<option value="+03:50">(GMT +3:30) Tehran</option>
	<option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
	<option value="+04:50">(GMT +4:30) Kabul</option>
	<option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
	<option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
	<option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
	<option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
	<option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
	<option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
	<option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
	<option value="+08:75">(GMT +8:45) Eucla</option>
	<option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
	<option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
	<option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
	<option value="+10:50">(GMT +10:30) Lord Howe Island</option>
	<option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
	<option value="+11:50">(GMT +11:30) Norfolk Island</option>
	<option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
	<option value="+12:75">(GMT +12:45) Chatham Islands</option>
	<option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
	<option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
                                                                            </select>
                                                                           
                                                                            <div class="Polaris-Select__Content_xd1mk" aria-hidden="true" aria-disabled="false"><span class="Polaris-Select__SelectedOption_azu52" id="Polaris-Select__SelectedOption_azu54">(GMT) Western Europe Time, London, Lisbon, Casablanca</span><span class="Polaris-Select__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                            <path d="M10 16l-4-4h8l-4 4zm0-12l4 4H6l4-4z"></path>
                                                                                        </svg></span></span></div>
                                                                            <div class="Polaris-Select__Backdrop_1x2i2"></div>
                                                                        </div>
                                                                    </div>
                                                                 <script>
                                                            function selector3(sel) 
                                                                {
                                document.getElementById('Polaris-Select__SelectedOption_azu54').innerHTML=sel.options[sel.selectedIndex].text;
                                                                }
                                                            </script>
                    </div>
                </div>
            
        <div role="group" class="Polaris-FormLayout--grouped_17srt">
            <div class="Polaris-FormLayout__Items_38lvu">
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="">
                            <div class="">

                                <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                    <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Unit system</label></div>
                                </div>
                                <div class="Polaris-Select_ss8pm Polaris-Select--newDesignLanguage_1rik8">
                                    
                                    <select name="UnitSystem" class="Polaris-Select__Input_30ock" aria-invalid="false" onchange="selector4(this)">

                                        <option value="Imperial System">Imperial System</option>
                                        <option value="Metric System">Metric System</option>
                                    </select>

                                    <div class="Polaris-Select__Content_xd1mk" aria-hidden="true" aria-disabled="false"><span class="Polaris-Select__SelectedOption_azu52" id="Polaris-Select__SelectedOption_azu555">Metric System</span><span class="Polaris-Select__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="M10 16l-4-4h8l-4 4zm0-12l4 4H6l4-4z"></path>
                                                </svg></span></span></div>
                                    <div class="Polaris-Select__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                            <script>
                                function selector4(sel) {

                                    document.getElementById('Polaris-Select__SelectedOption_azu555').innerHTML = sel.options[sel.selectedIndex].text;
                                }
                            </script>
                        </div>
                            
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="">
                            <div class="">

                                <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                                    <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Default weight unit</label></div>
                                </div>
                                <div class="Polaris-Select_ss8pm Polaris-Select--newDesignLanguage_1rik8">
                                    
                                    <select name="WeightUnit" class="Polaris-Select__Input_30ock" aria-invalid="false" onchange="selector5(this)">

                                        <option value="Kilo Gram(Kg)">Kilo Gram(Kg)</option>
                                        <option value="Gram(g)">Gram(g)</option>
                                    </select>

                                    <div class="Polaris-Select__Content_xd1mk" aria-hidden="true" aria-disabled="false"><span class="Polaris-Select__SelectedOption_azu52" id="Polaris-Select__SelectedOption_azu56">Kilo Gram(Kg)</span><span class="Polaris-Select__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="M10 16l-4-4h8l-4 4zm0-12l4 4H6l4-4z"></path>
                                                </svg></span></span></div>
                                    <div class="Polaris-Select__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                            <script>
                                function selector5(sel) {

                                    document.getElementById('Polaris-Select__SelectedOption_azu56').innerHTML = sel.options[sel.selectedIndex].text;
                                }
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
          </div>   
        </div>
      </div>
    </div>
  </div>
  <div id="PolarisPortalsContainer"></div>
  <div id="PolarisPortalsContainer"></div>
</div>
 
                          
                            
<div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;margin-top: 40px;">
  <div class="Polaris-Layout">
    <div class="Polaris-Layout__AnnotatedSection">
      <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">
          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Store currency</h2>
            <div class="Polaris-Layout__AnnotationDescription">
              <p>This is the currency your products are sold in. After your first sale, currency is locked in and can’t be changed.</p>
            </div>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item">
                  <div class="">
                  
                  
                  
                  
                  
                  <div class="Polaris-FormLayout_1wntl">
            <div class="Polaris-FormLayout__Items_38lvu">
                
            
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                                                                    <div class="">
                                                                       
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Currency</label></div>
                        </div>
                                                                        <div class="Polaris-Select_ss8pm Polaris-Select--newDesignLanguage_1rik8">
                                                                            
                                                                            <select name="Currency" class="Polaris-Select__Input_30ock" aria-invalid="false" onchange="selector7(this)">
                                                                                <option value="Afganistan">Afghanistan</option>
   <option value="USD" selected="selected">United States Dollars</option>
	<option value="EUR">Euro</option>
	<option value="GBP">United Kingdom Pounds</option>
	<option value="DZD">Algeria Dinars</option>
	<option value="ARP">Argentina Pesos</option>
	<option value="AUD">Australia Dollars</option>
	<option value="ATS">Austria Schillings</option>
	<option value="BSD">Bahamas Dollars</option>
	<option value="BBD">Barbados Dollars</option>
	<option value="BEF">Belgium Francs</option>
	<option value="BMD">Bermuda Dollars</option>
	<option value="BRR">Brazil Real</option>
	<option value="BGL">Bulgaria Lev</option>
	<option value="CAD">Canada Dollars</option>
	<option value="CLP">Chile Pesos</option>
	<option value="CNY">China Yuan Renmimbi</option>
	<option value="CYP">Cyprus Pounds</option>
	<option value="CSK">Czech Republic Koruna</option>
	<option value="DKK">Denmark Kroner</option>
	<option value="NLG">Dutch Guilders</option>
	<option value="XCD">Eastern Caribbean Dollars</option>
	<option value="EGP">Egypt Pounds</option>
	<option value="FJD">Fiji Dollars</option>
	<option value="FIM">Finland Markka</option>
	<option value="FRF">France Francs</option>
	<option value="DEM">Germany Deutsche Marks</option>
	<option value="XAU">Gold Ounces</option>
	<option value="GRD">Greece Drachmas</option>
	<option value="HKD">Hong Kong Dollars</option>
	<option value="HUF">Hungary Forint</option>
	<option value="ISK">Iceland Krona</option>
	<option value="INR">India Rupees</option>
	<option value="IDR">Indonesia Rupiah</option>
	<option value="IEP">Ireland Punt</option>
	<option value="ILS">Israel New Shekels</option>
	<option value="ITL">Italy Lira</option>
	<option value="JMD">Jamaica Dollars</option>
	<option value="JPY">Japan Yen</option>
	<option value="JOD">Jordan Dinar</option>
	<option value="KRW">Korea (South) Won</option>
	<option value="LBP">Lebanon Pounds</option>
	<option value="LUF">Luxembourg Francs</option>
	<option value="MYR">Malaysia Ringgit</option>
	<option value="MXP">Mexico Pesos</option>
	<option value="NLG">Netherlands Guilders</option>
	<option value="NZD">New Zealand Dollars</option>
	<option value="NOK">Norway Kroner</option>
	<option value="PKR">Pakistan Rupees</option>
	<option value="XPD">Palladium Ounces</option>
	<option value="PHP">Philippines Pesos</option>
	<option value="XPT">Platinum Ounces</option>
	<option value="PLZ">Poland Zloty</option>
	<option value="PTE">Portugal Escudo</option>
	<option value="ROL">Romania Leu</option>
	<option value="RUR">Russia Rubles</option>
	<option value="SAR">Saudi Arabia Riyal</option>
	<option value="XAG">Silver Ounces</option>
	<option value="SGD">Singapore Dollars</option>
	<option value="SKK">Slovakia Koruna</option>
	<option value="ZAR">South Africa Rand</option>
	<option value="KRW">South Korea Won</option>
	<option value="ESP">Spain Pesetas</option>
	<option value="XDR">Special Drawing Right (IMF)</option>
	<option value="SDD">Sudan Dinar</option>
	<option value="SEK">Sweden Krona</option>
	<option value="CHF">Switzerland Francs</option>
	<option value="TWD">Taiwan Dollars</option>
	<option value="THB">Thailand Baht</option>
	<option value="TTD">Trinidad and Tobago Dollars</option>
	<option value="TRL">Turkey Lira</option>
	<option value="VEB">Venezuela Bolivar</option>
	<option value="ZMK">Zambia Kwacha</option>
	<option value="EUR">Euro</option>
	<option value="XCD">Eastern Caribbean Dollars</option>
	<option value="XDR">Special Drawing Right (IMF)</option>
	<option value="XAG">Silver Ounces</option>
	<option value="XAU">Gold Ounces</option>
	<option value="XPD">Palladium Ounces</option>
	<option value="XPT">Platinum Ounces</option>
                                                                            </select>
                                                                           
                                                                            <div class="Polaris-Select__Content_xd1mk" aria-hidden="true" aria-disabled="false"><span class="Polaris-Select__SelectedOption_azu52" id="Polaris-Select__SelectedOption_azu58">Pakistan</span><span class="Polaris-Select__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                            <path d="M10 16l-4-4h8l-4 4zm0-12l4 4H6l4-4z"></path>
                                                                                        </svg></span></span></div>
                                                                            <div class="Polaris-Select__Backdrop_1x2i2"></div>
                                                                        </div>
                                                                    </div>
                                                                 <script>
                                                            function selector7(sel) 
                                                                {
                                document.getElementById('Polaris-Select__SelectedOption_azu58').innerHTML=sel.options[sel.selectedIndex].text;
                                                                }
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
      </div>
    </div>
  </div>
  <div id="PolarisPortalsContainer"></div>
  <div id="PolarisPortalsContainer"></div>
</div>


 <div class="Polaris-Layout__Section_1b1h1">
<div class="Polaris-PageActions_fcnua">
<div class="Polaris-Stack_32wu2 Polaris-Stack--spacingTight_1o4d6 Polaris-Stack--distributionEqualSpacing_x9cqm">
<div class="Polaris-Stack__Item_yiyol">
<div class="Polaris-ButtonGroup_yy85z">

</div>
</div>
<div class="Polaris-Stack__Item_yiyol">
<button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs " type="submit"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button></div>
</form>

</div>
</div>
</div>    
                          
                           <script>
                                function showper()
                               {
                                   document.getElementById('Polaris-Manage').style.visibility= visible;
                               }
                                
                                </script>
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
            <br>
            <br>
            <br>
            <br>
        </div>
        
    </div>

<script>
        function Display_Ad() {
            document.getElementById('Account_div').style.visibility = "visible";
        }

        function Close_Ad() {
            document.getElementById('Account_div').style.visibility = "hidden";
        }

        function varient() {
            if (document.getElementById('varientCheckbox').checked == true) {
                document.getElementById('Polaris-ResourceList_r589e').style.display = "block";
            } else {
                document.getElementById('Polaris-ResourceList_r589e').style.display = "none";

            }
        }
    </script>


    <script>
        var loadFile = function(event) {
            var image1 = document.getElementById('output');
            var fi1 = document.getElementById("file1");
            var img1 = URL.createObjectURL(event.target.files[0]);
            image1.innerHTML = fi1.files.item(0).name;
            document.getElementById('Display1').style.backgroundImage = "url(" + img1 + ") no-repeat";
        };
        var loadFile1 = function(event) {
            var image2 = document.getElementById('output1');
            var fi2 = document.getElementById("file2");
            var img2 = URL.createObjectURL(event.target.files[0]);
            image2.innerHTML = fi2.files.item(0).name;
            document.getElementById('Display2').style.backgroundImage = "url(" + img2 + ") no-repeat";
        };
        var loadFile2 = function(event) {
            var image3 = document.getElementById('output2');
            var fi3 = document.getElementById("file3");
            var img3 = URL.createObjectURL(event.target.files[0]);
            image3.innerHTML = fi3.files.item(0).name;
            document.getElementById('Display3').style.backgroundImage = "url(" + img3 + ") no-repeat";
        };
        var loadFile3 = function(event) {
            var image4 = document.getElementById('output3');
            var fi4 = document.getElementById("file4");
            var img4 = URL.createObjectURL(event.target.files[0]);
            image4.innerHTML = fi4.files.item(0).name;
            document.getElementById('Display4').style.backgroundImage = "url(" + img4 + ") no-repeat";
        };
        var loadFile4 = function(event) {
            var image5 = document.getElementById('output4');
            var fi5 = document.getElementById("file5");
            var img5 = URL.createObjectURL(event.target.files[0]);
            image5.innerHTML = fi5.files.item(0).name;
            document.getElementById('Display5').style.backgroundImage = "url(" + img5 + ") no-repeat";
        };
    </script>

@endsection