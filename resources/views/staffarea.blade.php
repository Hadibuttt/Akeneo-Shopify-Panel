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
                                            <nav role="navigation"><a data-polaris-unstyled="true" class="Polaris-Breadcrumbs__Breadcrumb_llsun Polaris-Breadcrumbs--newDesignLanguage_1rik8" href="staffaccount.html"><span class="Polaris-Breadcrumbs__ContentWrapper_1yvfo"><span class="Polaris-Breadcrumbs__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                    <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                                                                </svg></span></span><span class="Polaris-VisuallyHidden_yrtt5">Staff Account</span></span></a></nav>
                                        </div>
                                        <div class="Polaris-Page-Header__TitleWrapper_bejfn">
                                            <div>
                                                <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                    <div class="Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 Polaris-Header-Title--newDesignLanguage_1rik8">
                                                        <div class="Polaris-Header-Title_2qj8j">
                                                            <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Staff Accounts</h1>
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
            <h2 class="Polaris-Heading">Staff</h2>
            <div class="Polaris-Layout__AnnotationDescription">
              <p>Give staff access to your store by sending them an invitation. If you’re working with a designer, developer, or marketer, find out how to give collaborator access to your store.</p>
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
           
        <div role="group" class="Polaris-FormLayout--grouped_17srt">
            <div class="Polaris-FormLayout__Items_38lvu">
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">

                        <form action="successed" method="post">
                            @csrf

                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardSkuLabel" for="InventoryCardSku" class="Polaris-Label__Text_yj3uv">First Name</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="f_name" id="InventoryCardSku" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardSkuLabel" aria-invalid="false" aria-multiline="false" value="">

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Polaris-FormLayout__Item_yiyol">
                    <div class="">
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Last Name</label></div>
                        </div>
     
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="l_name" id="InventoryCardSku" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardSkuLabel" aria-invalid="false" aria-multiline="false" value="">

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
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
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Email</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input type="email" required="" name="email" id="InventoryCardBarcode" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardBarcodeLabel" aria-invalid="false" aria-multiline="false" value="">

                                    <div class="Polaris-TextField__Backdrop_1x2i2"></div>
                                </div>
                            </div>
                        </div><br>
                        <div class="Polaris-Labelled__LabelWrapper_bf6ys">
                            <div class="Polaris-Label_2vd36"><label id="InventoryCardBarcodeLabel" for="InventoryCardBarcode" class="Polaris-Label__Text_yj3uv">Password</label></div>
                        </div>
                        <div class="Polaris-Connected_wopc9 Polaris-Connected--newDesignLanguage_1rik8">
                            <div class="Polaris-Connected__Item_yiyol Polaris-Connected__Item--primary_rmh5m">
                                <div class="Polaris-TextField_1spwi Polaris-TextField--newDesignLanguage_1rik8">
                                    
                                    <input name="password" id="InventoryCardBarcode" class="Polaris-TextField__Input_30ock" aria-labelledby="InventoryCardBarcodeLabel" aria-invalid="false" aria-multiline="false" value="">

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
      </div>
    </div>
  </div>
  <div id="PolarisPortalsContainer"></div>
  <div id="PolarisPortalsContainer"></div>
</div>
 
 
 
 
 
 <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
  <div class="Polaris-Layout">
    <div class="Polaris-Layout__AnnotatedSection">
      <div class="Polaris-Layout__AnnotationWrapper" style="margin-top: 40px;">
        <div class="Polaris-Layout__Annotation">
          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Permission Access</h2>
            <div class="Polaris-Layout__AnnotationDescription">
            </div>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
              <div class="Polaris-FormLayout">
                <div class="Polaris-FormLayout__Item">
                  <div class="">
                    
                   <div class="ui-stack" style="margin-top: 20px;">
                                      <div class="Polaris-ResourceList__CheckableButtonWrapper_1mxl4">
                                     
                                      
             <label class="Polaris-Choice" for="PolarisCheckboxvarient"><input type="checkbox" id="varientCheckbox" onchange="showper()"style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">This staff account will have full permissions</span></label>
             <div >
                 <div  id="Polaris-Manage"><hr>    
                 <div class="Polaris-TextContainer" style="margin-top: 20px;">
            <h2 class="Polaris-Heading">Manage Permission</h2>
            <div class="Polaris-Layout__AnnotationDescription">
            </div>
                     <div style="width: 33%; display:inline-block;float: left;">
                        <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                             
                            <input type="hidden" value="0" name="OrderPage">
                            <input name="OrderPage" value="1" type="checkbox" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()">
                            
                            <span class="Polaris-Choice__Label">Order</span></label>

                        </div>
                        
                        <div>
                            <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                               
                               <input type="hidden" value="0" name="OrderDetailsPage">
                               <input type="checkbox" name="OrderDetailsPage" value="1" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Order Details</span></label>
   
                           </div>
                        
                        <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                             
                            <input type="hidden" value="0" name="ProductPage">
                            <input name="ProductPage" type="checkbox" value="1" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()">
                            
                            <span class="Polaris-Choice__Label">Product</span></label>

                        </div> <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                            
                            <input type="hidden" value="0" name="AddProductPage">
                            <input type="checkbox" value="1" name="AddProductPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Add Product</span></label>

                        </div> <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                             
                            <input type="hidden" value="0" name="UpdateProductPage">
                            <input type="checkbox" value="1" name="UpdateProductPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Update Product</span></label>

                        </div>
                        
                        <div>
                            <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                                
                               <input type="hidden" value="0" name="GeneralPage">
                               <input type="checkbox" value="1" name="GeneralPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">General</span></label>
   
                           </div>

                           <div>
                            <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                                
                               <input type="hidden" value="0" name="StaffAccountPage">
                               <input type="checkbox" value="1" name="StaffAccountPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Staff Accounts</span></label>
   
                           </div>

                     </div>
                     <div style="width: 33%; display:inline-block;float: left;">
                       <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                            
                            <input type="hidden" value="0" name="CategoryPage">
                            <input type="checkbox" value="1" name="CategoryPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Category</span></label>

                        </div> <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                            
                            <input type="hidden" value="0" name="AddCategoryPage">
                            <input type="checkbox" value="1" name="AddCategoryPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Add Category</span></label>

                        </div> <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                            
                            <input type="hidden" value="0" name="UpdateCategoryPage">
                            <input type="checkbox" value="1" name="UpdateCategoryPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Update Category</span></label>

                        </div>

                        <div>
                            <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                               
                                <input type="hidden" value="0" name="CustomerPage"> 
                               <input type="checkbox" value="1" name="CustomerPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Customers</span></label>
   
                           </div>

                        <div>
                            <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                               
                                <input type="hidden" value="0" name="AboutCustomerPage">
                               <input type="checkbox" value="1" name="AboutCustomerPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">About Customers</span></label>
   
                           </div>

                           <div>
                            <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                                
                                <input type="hidden" value="0" name="SettingsPage"> 
                               <input type="checkbox" value="1" name="SettingsPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Settings</span></label>
   
                           </div>

                           <div>
                            <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                                
                                <input type="hidden" value="0" name="StaffAreaPage"> 
                               <input type="checkbox" value="1" name="StaffAreaPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Add Staff Accounts</span></label>
   
                           </div>

                     </div>
                     <div style="width: 33%; display:inline-block;">
                      <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                            
                            <input type="hidden" value="0" name="SubcategoryPage">
                            <input type="checkbox" value="1" name="SubcategoryPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Subcategory</span></label>

                        </div> <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                            
                            <input type="hidden" value="0" name="AddSubcategoryPage">
                            <input type="checkbox" value="1" name="AddSubcategoryPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Add Subcategory</span></label>

                        </div> <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                            
                            <input type="hidden" value="0" name="UpdateSubcategoryPage">
                            <input type="checkbox" value="1" name="UpdateSubcategoryPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Update Subcategory</span></label>

                        </div> <div>
                         <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                            
                            <input type="hidden" value="0" name="CollectionPage">
                            <input type="checkbox" value="1" name="CollectionPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Collection</span></label>

                        </div>

                        <div>
                            <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                               
                                <input type="hidden" value="0" name="AddCollectionPage"> 
                               <input type="checkbox" value="1" name="AddCollectionPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Add Collection</span></label>
   
                           </div>

                           <div>
                            <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                               
                                <input type="hidden" value="0" name="UpdateCollectionPage"> 
                               <input type="checkbox" value="1" name="UpdateCollectionPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Update Collection</span></label>
   
                           </div>

                           <div>
                            <label class="Polaris-Choice" for="PolarisCheckboxvarient">
                                
                                <input type="hidden" value="0" name="UpdateStaffAreaPage"> 
                               <input type="checkbox" value="1" name="UpdateStaffAreaPage" id="varientCheckbox" style="height: 15px; width:15px; border: solid 4px;" onclick="varient()"><span class="Polaris-Choice__Label">Update Staff Accounts</span></label>
   
                           </div>

                           

                           

                          


                     </div>
                     <div class="Polaris-Stack__Item_yiyol">
                        <button class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" type="submit"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Save</span></span></button></div>
                    </form>
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