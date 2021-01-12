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
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/settingsNav-4637d299ffdf8efe672daffe75e816ef825ea8b49668d687cc1153a2b4008acf.css" crossorigin="anonymous">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-25b8e6ce5ba4e27dc3ebd7c3be9c55caad6efad3d7f4ab3174250cf4fc3b9ce5.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-56d51c8cd7433d99fc28d8f3e29f79419679190c4096a55a796e449c43d83e87.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-4b83da42a10c62432faa4dd4e596ab4de5294526204d0289c7234e1301de1fc9.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">

<div class="Polaris-Frame__ContextualSaveBar_14m7v Polaris-Frame-CSSAnimation--startFade_1gu4x"></div>
                    <main class="Polaris-Frame__Main_yj28s Polaris-Frame__Main--newDesignLanguage_129jf" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
                        <div class="Polaris-Frame__Content_xd1mk">
                            <div class="Polaris-Page_yisnh Polaris-Page--newDesignLanguage_1rik8">
                                <div class="Polaris-Page-Header_z4uwg Polaris-Page-Header--isSingleRow_172ur Polaris-Page-Header--noBreadcrumbs_bdstf Polaris-Page-Header--newDesignLanguage_1rik8 Polaris-Page-Header--mediumTitle_bfol6">
                                    <div class="Polaris-Page-Header__Row_375v7 Polaris-Page-Header__RowCondensed_1gexu">
                                        <div class="Polaris-Page-Header__TitleWrapper_bejfn">
                                            <div>
                                                <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                    <div class="Polaris-Header-Title_2qj8j">
                                                        <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Settings</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-Page__Content_xd1mk">
                                    <div class="Polaris-Layout_sl20u Polaris-Layout--newDesignLanguage_1rik8">
                                        <div class="Polaris-Layout__Section_1b1h1">
                                            <div class="Polaris-Card_yis1o Polaris-Card--newDesignLanguage_1rik8">
                                                <ul class="XYWZh" style="--med-width-rows:6;--max-width-rows:4">
                                                    <li class="_21VNU"><a href="/general" style="text-decoration: none;" aria-disabled="false" class="_3zeWe">
                                                            <div class="_2xj6B"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                        <path fill-rule="evenodd" d="M9.027 0a1 1 0 0 0-.99.859l-.37 2.598A6.993 6.993 0 0 0 5.742 4.57l-2.437-.98a1 1 0 0 0-1.239.428L.934 5.981a1 1 0 0 0 .248 1.287l2.066 1.621a7.06 7.06 0 0 0 0 2.222l-2.066 1.621a1 1 0 0 0-.248 1.287l1.132 1.962a1 1 0 0 0 1.239.428l2.438-.979a6.995 6.995 0 0 0 1.923 1.113l.372 2.598a1 1 0 0 0 .99.859h2.265a1 1 0 0 0 .99-.859l.371-2.598a6.995 6.995 0 0 0 1.924-1.112l2.438.978a1 1 0 0 0 1.238-.428l1.133-1.962a1 1 0 0 0-.249-1.287l-2.065-1.621a7.063 7.063 0 0 0 0-2.222l2.065-1.621a1 1 0 0 0 .249-1.287l-1.133-1.962a1 1 0 0 0-1.239-.428l-2.437.979a6.994 6.994 0 0 0-1.924-1.113L12.283.86a1 1 0 0 0-.99-.859H9.027zm1.133 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                                    </svg></span></div>
                                                            <div>
                                                                <p class="_1Xeiu">General</p>
                                                                <p class="_2f-D-">View and update your store details</p>
                                                            </div>
                                                        </a></li>
                                                    <li class="_21VNU"><a aria-disabled="false" class="_3zeWe">
                                                            <div class="_2xj6B"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                        <path d="M4.002 5L.55 6.76a.985.985 0 0 0-.549.9V18c0 .51.38.93.879.99l8.023 1a.997.997 0 0 0 1.068-.67L11.737 14h3.273c1.297 0 2.405-.84 2.814-2h.679c.828 0 1.497-.67 1.497-1.5V5H4.002zM5 10h10.01c.27 0 .509.1.709.31.19.18.289.42.289.69 0 .55-.449 1-.998 1h-3.992c-.429 0-.808.28-.948.68l-1.736 5.23-6.338-.79V8.27l2.006-1v1.74A1 1 0 0 0 5 10zm13.503-9H5.499c-.828 0-1.497.67-1.497 1.5V3H20v-.5c0-.83-.669-1.5-1.497-1.5z"></path>
                                                                    </svg></span></div>
                                                            <div>
                                                                <p class="_1Xeiu">Payments</p>
                                                                <p class="_2f-D-">Enable and manage your store's payment providers</p>
                                                            </div>
                                                        </a></li>
                                                    <li class="_21VNU"><a aria-disabled="false" class="_3zeWe">
                                                            <div class="_2xj6B"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                        <path fill-rule="evenodd" d="M1.5 2A1.5 1.5 0 0 0 0 3.5v11A1.5 1.5 0 0 0 1.5 16H2a3 3 0 1 0 6 0h4a3 3 0 1 0 6 0h.5a1.5 1.5 0 0 0 1.5-1.5v-3.361a1.5 1.5 0 0 0-.214-.772l-2.783-4.639A1.5 1.5 0 0 0 15.717 5H13V3.5A1.5 1.5 0 0 0 11.5 2h-10zM15 17a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM4 16a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm13.234-6H13V7h2.434l1.8 3z"></path>
                                                                    </svg></span></div>
                                                            <div>
                                                                <p class="_1Xeiu">Shipping and delivery</p>
                                                                <p class="_2f-D-">Manage how you ship orders to customers</p>
                                                            </div>
                                                        </a></li>
                                                    <li class="_21VNU"><a aria-disabled="false" class="_3zeWe">
                                                            <div class="_2xj6B"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                        <path fill-rule="evenodd" d="M4.5 0h11c.828 0 1.5.677 1.5 1.512v18.21a.2.2 0 0 1-.334.149l-1.664-1.515a.497.497 0 0 0-.67 0l-1.664 1.514a.497.497 0 0 1-.67 0l-1.663-1.514a.497.497 0 0 0-.67 0L8.002 19.87a.497.497 0 0 1-.67 0l-1.664-1.514a.497.497 0 0 0-.67 0l-1.664 1.559a.2.2 0 0 1-.334-.15V1.512C3 .677 3.672 0 4.5 0zm3 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm6.5 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-.293-4.793a1 1 0 0 0-1.414-1.414l-6 6a1 1 0 1 0 1.414 1.414l6-6z"></path>
                                                                    </svg></span></div>
                                                            <div>
                                                                <p class="_1Xeiu">Taxes</p>
                                                                <p class="_2f-D-">Manage how your store charges taxes</p>
                                                            </div>
                                                        </a></li>
                                                    <li class="_21VNU"><a aria-disabled="false" class="_3zeWe">
                                                            <div class="_2xj6B"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                        <path d="M10 0a1 1 0 0 1 1 1v2.032l-.001.021-.002.03A6.002 6.002 0 0 1 16 9c0 3.093.625 4.312 1.599 6.21l.034.068c.17.33-.07.722-.442.722H2.809a.496.496 0 0 1-.442-.722l.034-.068C3.375 13.312 4 12.093 4 9a6.002 6.002 0 0 1 5.003-5.918l-.002-.04A.835.835 0 0 1 9 3V1a1 1 0 0 1 1-1zm2 18a2 2 0 0 1-4 0h4z"></path>
                                                                    </svg></span></div>
                                                            <div>
                                                                <p class="_1Xeiu">Notifications</p>
                                                                <p class="_2f-D-">Manage notifications sent to you and your customers</p>
                                                            </div>
                                                        </a></li>
                                                    <li class="_21VNU"><a aria-disabled="false" class="_3zeWe">
                                                            <div class="_2xj6B"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                <path d="M14.363 5.22a4.22 4.22 0 1 1-8.439 0 4.22 4.22 0 0 1 8.439 0zM2.67 14.469c1.385-1.09 4.141-2.853 7.474-2.853 3.332 0 6.089 1.764 7.474 2.853.618.486.81 1.308.567 2.056l-.333 1.02A2.11 2.11 0 0 1 15.846 19H4.441a2.11 2.11 0 0 1-2.005-1.455l-.333-1.02c-.245-.748-.052-1.57.567-2.056z"></path>
                                                                    </svg></span></div>
                                                            <div>
                                                                <p class="_1Xeiu">Staff Area</p>
                                                                <p class="_2f-D-">Adding members with various rights.</p>
                                                            </div>
                                                        </a></li>
                                                    <li class="_21VNU"><a aria-disabled="false" class="_3zeWe">
                                                            <div class="_2xj6B"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                        <path d="M11.428 13.999L13 10.46l1.573 3.538h-3.145zm6.486 2.594l-4-9a1 1 0 0 0-1.828 0l-1.958 4.406H10c-1.276 0-2.24-.3-2.965-.716l.012-.012c1.292-1.443 1.777-3.536 1.94-5.272H10a1 1 0 1 0 0-2h-.942c-.015-.63-.058-1.051-.064-1.11a.998.998 0 0 0-1.103-.884 1.002 1.002 0 0 0-.885 1.103c0 .013.035.359.05.89H3a1 1 0 0 0 0 2h3.98c-.143 1.37-.515 2.922-1.42 3.935a4.165 4.165 0 0 1-.59-1.183.999.999 0 0 0-1.938.492c.118.474.373 1.07.778 1.679a4.17 4.17 0 0 1-.81.078 1 1 0 0 0 0 2c.857 0 1.629-.16 2.322-.467.962.734 2.253 1.303 3.932 1.435l-1.167 2.626a1.001 1.001 0 0 0 1.828.812l.625-1.406h4.922l.625 1.406a1 1 0 0 0 1.828-.812z"></path>
                                                                    </svg></span></div>
                                                            <div>
                                                                <p class="_1Xeiu">Store languages</p>
                                                                <p class="_2f-D-">Manage the languages your customers can view on your store</p>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div><noscript>
                <div class="MsTle">
                    <div class="_3pUpo">
                        <div class="Polaris-EmptyState_z7e24 Polaris-EmptyState--newDesignLanguage_1rik8 Polaris-EmptyState--withinPage_kguwn">
                            <div class="Polaris-EmptyState__Section_1b1h1">
                                <div class="Polaris-EmptyState__DetailsContainer_1a2i4">
                                    <div class="Polaris-EmptyState__Details_1bdkj">
                                        <div class="Polaris-TextContainer_szg8b">
                                            <p class="Polaris-DisplayText_1u0t8 Polaris-DisplayText--sizeMedium_5f35p">Turn on JavaScript to use Shopify</p>
                                            <div class="Polaris-EmptyState__Content_xd1mk">
                                                <p>Shopify requires a modern browser with JavaScript enabled to run.</p>
                                                <p>If JavaScript is disabled, enable it and refresh this page. If you have an older browser, upgrade to the latest version of Chrome, Safari, Firefox, or Edge.</p>
                                            </div>
                                        </div>
                                        <div class="Polaris-EmptyState__Actions_17m67">
                                            <div class="Polaris-Stack_32wu2 Polaris-Stack--spacingTight_1o4d6 Polaris-Stack--distributionCenter_60gbr Polaris-Stack--alignmentCenter_1rtaw">
                                                <div class="Polaris-Stack__Item_yiyol"><a data-polaris-unstyled="true" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" href="/admin/settings"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Refresh</span></span></a></div>
                                                <div class="Polaris-Stack__Item_yiyol"><a target="_blank" href="http://www.enable-javascript.com/" rel="noopener noreferrer" data-polaris-unstyled="true" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8"><span class="Polaris-Button__Content_xd1mk"><span class="Polaris-Button__Text_yj3uv">Learn more</span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Polaris-EmptyState__ImageContainer_wrfol"><img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/0644709e236fe1843b04f44e62f7c4f2.svg" srcSet="https://cdn.shopify.com/shopifycloud/web/assets/v1/0644709e236fe1843b04f44e62f7c4f2.svg 568w,https://cdn.shopify.com/shopifycloud/web/assets/v1/0644709e236fe1843b04f44e62f7c4f2.svg 1136w" alt="" role="presentation" class="Polaris-EmptyState__Image_2qgms" sizes="(max-width: 568px) 60vw" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </noscript>
            <div id="PolarisPortalsContainer">
                <div data-portal-id="popover-Polarisportal3"></div>
                <div data-portal-id="modal-Polarisportal1">
                    <div></div>
                </div>
                <div data-portal-id="Polarisportal2">
                    <div class="Polaris-Frame-ToastManager_1utvc" aria-live="polite"></div>
                </div>
                <div data-portal-id="popover-Polarisportal4"></div>
                <div data-portal-id="popover-Polarisportal5"></div>
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
    </script>

@endsection