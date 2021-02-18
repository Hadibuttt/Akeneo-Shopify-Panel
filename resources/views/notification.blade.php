@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@5.12.0/dist/styles.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="never">
    <meta data-react-html="true" name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, user-scalable=no">
    <meta data-react-html="true" name="apple-mobile-web-app-capable" content="yes">
    <meta data-react-html="true" name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-flow~section-flow-summary~section-flow-template-installer~section-flo~67560caa-
    da74327255a921063014b93a350cde95232ab12445903cd4c054dd790b472f56.css" crossorigin="anonymous">
    
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
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~homeIndex-4c3b2b75713db5b54310dba1bd35990edc57395680a2e5d3de093e8b93106308.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/analyticsOnlineStoreSpeed~homeIndex~mtOverview~shippingSettingsIndex-a832e8799ccf7ad12d39484fb29d781f4c02ce3410ef2a6c93a8268bf4949823.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeIndex-04943142203a598dc1fbad624fe393383eee1ab4079ec1a5263708d26e9d2140.css" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-flow~section-flow-summary~section-flow-template-installer~section-flo~67560caa-3eaeb09e3922064089bc8e19d13c37cb59fe1dec56a6e92335b6ef3d23f066a8.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~internal~section-apps~section-apps-app-details~section-flow~section-flow-connector~sec~886ec812-757a46e8a40649312a90262625d89eb41cdb6d5283343835bd98511d9c77c68b.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow-summary~section-flow-v2-editor~section-flow-v2-list~section-flow-v2-run~s~d6dd756b-deb60a421b3b84dc56cd23a7e22caf9021c5964f957f78167eba8112fee3212b.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus~redirectLoop-7046775863a4bdd2a1aa2bef72416bae519484fb0fd5f3aee240c7f059136368.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-home~section-home-bfcm~section-roles-roles-details-44edda65477a61f535db353632d332c715acd81ad841acf56b739324b26c003c.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~error~plus-54eb9cf43be0e647521d1482e9d4e28530450d71879b132047544dd944b42cc0.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~section-flow~section-flow-summary-1672f81f83328d124c5fa5924b79543552d77552559dc6d8a388c4550d5d7c98.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin~redirectLoop-4a2792446a14395f5c907d6bca0f07d5d78750e8e2312dc61c4d784294f0d7e1.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Admin-1abf7f6d27fffeef5caa29a93066a52adc293e9ddb76bdeecba745877cf8dce8.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Admin-7ba320d7ac0786f63c92f57033edd2ce1e47275689592c34ead8ea31f820c0fe.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/quickSearch-9390605787f1aca51db967efb00584529b44860dc4d65aaadac5ac4f6959292b.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~homeIndex-a568decb1f900e72911993adbf6686e0b4c21522c045f05d5c6089ffdf29ec35.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/analyticsOnlineStoreSpeed~homeIndex~mtOverview~shippingSettingsIndex-da78a9067ef1b5727ca43d91c11c65cf89aab6840e535a711b93108c6944a8d6.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeIndex-dde6edcfbcf0dc8e012a2002ef812466cf90b6ff52c3b0b3e65c7cd8e1cbfbde.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeIndexQuery-5e694a9bfb2bcbf3be266758bae36c8777cfbfc41e0c177286b51542185c13c5.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeFeedQuery-3423073f4efd6843270f5712aa946fc72eb414dea36a75c99130591426d94a9c.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/LoginNotifications-3f434ba415e4f8810f9584cdc3c13c55bfff417f3b525bdd3af9bc20032a5936.js" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/runtime~main-3e5023cc56b09e0bd55a1fbf3c74675b9f687d038ebe312a1623ba77d8d496fb.js" integrity="sha256-PlAjzFawngvVWh+/PHRnW59ofQOOvjEqFiO6d9jUlvs=" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~internal~main~section-home~section-home-bfcm~section-storeadmin-storeapp~section-users-users-invite-cd4ce9f8036189e0c0aa95d98c6ee5bd84361b7ae31788c2756db1ef5a0dab23.js" integrity="sha256-zUzp+ANhieDAqpXZjG7lvYQ2G3rjF4jCdW2x71oNqyM=" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~error~internal~main~plus~redirectLoop-58ab7d6ac11e6504de41b994cd23a91fa7462926bbd7bb7b1cb583efb298720e.js" integrity="sha256-WKt9asEeZQTeQbmUzSOpH6dGKSa717t7HLWD77KYcg4=" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~error~main~plus-af8d18356a2f289fe602b730b5149dafeca99e07a1753cf2a1ee014c20fc7397.js" integrity="sha256-r40YNWovKJ/mArcwtRSdr+ypngehdTzyoe4BTCD8c5c=" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~main~section-storeadmin-storeapp-4bf5a3fa5177323a913e6f637e71feba60a677e5cccfdbbc7b8eb5e28efe46f2.js" integrity="sha256-S/Wj+lF3MjqRPm9jfnH+umCmd+XMz9u8e4614o7+RvI=" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~main-476663c23ea4da247cc9c9c59ccd0bbdbc4644ee4eeaeb38ceeea92e9509282d.js" integrity="sha256-R2Zjwj6k2iR8ycnFnM0LvbxGRO5O6us4zu6pLpUJKC0=" crossorigin="anonymous" defer=""></script>
    <script type="text/javascript" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/main-ee1c59db49bf7b1482a2777e2ec29d07b8e8f5e28eb22535d94980092aa2a873.js" integrity="sha256-7hxZ20m/exSCond+LsKdB7jo9eKOsiU12UmACSqiqHM=" crossorigin="anonymous" defer=""></script>
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-25b8e6ce5ba4e27dc3ebd7c3be9c55caad6efad3d7f4ab3174250cf4fc3b9ce5.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/adminnextfallback-56d51c8cd7433d99fc28d8f3e29f79419679190c4096a55a796e449c43d83e87.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-4b83da42a10c62432faa4dd4e596ab4de5294526204d0289c7234e1301de1fc9.js">
    <link rel="prefetch" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/homeOnboardingQuery-473cd660db2c2583292653f4ecd3c14bd0758fd2afbd1f1e09ccd5adcc25e5ed.js">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~Polaris-i18n-26b21506b29a1fe79ec2eea2e255f25895d9f76b333313f3ccbc3da90637d1fa.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/sift-9ace3cef3a9ea7c90452f97e7b6cd8b186f250e62cc6c09a9c69276a37452b99.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~MobileCompatibleCollectionShow~capitalAmendmentTermsDetails~capitalOfferAgreementDetails~col~2db63ec6-ffab1f20f407ff3e9a634d94225be0eca664cb86adf53192f1ab0b9392ee3657.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/shopify-encoders-524a3cd076301d7df31cc3aefefb03cfad40df70eeb2344fcb81bf7b30e3fec5.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-785b116924b00e6e8e93268ac907b8f5d5de8d0694983b884ecfbfc52584c7a2.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/TopBarDestinationsSwitcherNext-4b83da42a10c62432faa4dd4e596ab4de5294526204d0289c7234e1301de1fc9.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/switcherStoresQuery-ad78642d4a6704193332ec348feb613fc7af22d08a8cf12463696559bc4276da.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~f8378938-cd516d6de26f94d6ad007ab424d416d7ce1b3a2c992bba41542e44cc098b3b81.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~f8378938-7faf25b07e220cf6543321b9cf81f0ae89d36d5be2cc57ef6bb29c3ee602bf4a.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~ManageProfile~createReturnLabel~orderIndex~orderListCustomizable~purchaseShippingLabels~repl~b1108c18-1e6fd6cc77415cb352c5a5c65a57bfdf81e5547510d8e807266748e48a29de78.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/ExportCustomersModal~automaticDiscountResourceList~discountCodeResourceList~discountCodeResourceList~6dea9bb8-7f01b5ebcca3c842dedd47c50f6db297605ea36a9dc4f12300cdee83abd6a85e.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AddRemoveTagsModal~customerList~orderIndex~orderListCustomizable~productindex-fda696ce66ca26a8bba4df24358a97bda7d4e6c037cd64640758d90d35fe625c.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/AddRemoveTagsModal~customerList~orderIndex~orderListCustomizable~productindex-77a6e99e7819cefc5053c02227cfa9aab59d8a09b7749f214ddc2208b8d57505.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex~orderListCustomizable-bb5994fb2eb2db36c05d79a8a184d01cad35bc934b83be5fc3eb18a5bc31641e.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex~orderListCustomizable-359d33035782c3429b34064eb4821cb9a27dc8ab9e0c70516143f1edc8dd96bd.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex-e89dd14269d25fa43a92393346d6e274a678ccca1b182da8b77afedfb156e8c1.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderIndex-980546950c5a8e0d5bfcd63a6f5136765792cf2fa44395b859728ef0b9cbb7a8.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MarkAsFulfilled~PreparePickup~RequestFulfillment~order~orderListCustomizable-eb73ac2f705c26f4b077ad7b80c67a7fde64d756069671905b5c9e94bfc9713c.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MarkAsFulfilled~PreparePickup~RequestFulfillment~order~orderListCustomizable-76bb7272062131a55c7169090310c28073e4526022234844b4c3c76cb2796781.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/collectionList~orderListCustomizable~pagename-dad52d4461e0538d0492aa55890214f4e24b8576217d247c93e67210b20fa38c.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/collectionList~orderListCustomizable~pagename-ec2fbff94f59a561e0d962a5172df404bc9ba57e16a2b730572aa0486c636584.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderListCustomizable-0012c84793e04ec6a495a6569c8cbee6c37d7e7405ed7212bdc10f7d40ba98b2.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderListCustomizable-18f1ec7fa6025f27ac1a707556ddce33a0f61c3cb34079f18f7f9fd2bfa34bc6.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderListSavedSearchesQuery-c7b924b9d261bc42b4b5cbaf2288d4cb8cabfde8da4cbca3d5891e8de0aea831.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderListInitialQuery-feb3fe28c66b4f8ce2372a30341b88c2d1eb95486177d0d72d43e2b608e01d87.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderListDataQuery-55d207c8c574523e48a56870f6d0a3be71785c5433dd3de3587d9f0ddc93658d.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/upcomingShippingPickupsQuery-bf3534ad4d9f4771d38eb1dd877e426e21327fa0195fd0e8202074f2c7769e78.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~MarkAsFulfilled~MobileCompatibleCollectionShow~Timeline~analyticsCustomReportsIndex~analytic~229b8f0d-e9c2c0c1785fc5031ed2d8a9036ea971e23aa1d75f0e7ecea61525950527a81e.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~order-c7b83608b1b03d8aa80a0463dd2e2bffe9b139390f34861915c5926f1948e282.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~order-6b4f73bdeb2a8fdf3a4c9eea0f5b34bc48ea7f5b66b1928da64a7c4065a2d4d0.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MarkAsFulfilled~RequestFulfillment~draftOrderDetails~order-51b85e994c5ce67955bedb6fac2eb82eeb1073e1410cf0cab94308a1158fc209.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MarkAsFulfilled~RequestFulfillment~draftOrderDetails~order-290f4b70aecb2d66e3fec533cbe745d61054e4abca01a9dfc89de19938880b18.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/draftOrderDetails~order-8383e71ba40b85ca133a11217bb2ac827e44b8bb96a57d9f1fc2f1e1912fa57b.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/draftOrderDetails~order-872a5d9e303763482c2e3ac80ee4b17765268cf8dd7655825c81b611a828e9e4.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/order-a05d0a25eb0e131b0f197bf82b31e16acdbc8e52b5fe29ecfdaf5d5ece6a0c0a.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/order-13a4f7d0dcdba8dd619785bc7c861136e7eeed90509bd064605edc26ccd3044b.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/orderDetailsQuery-d392097f9ecf25f4909a0899eae0c27222c9e82cf73c0559fcbeb7ad5a6c64c8.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/PagePresence-566c4a11b98c08351e3cacb7f8595c0896a3b2d4e434e9dd8f5273832dfc2f13.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/PagePresence-7e8529d81a1322f65baa48c4c3f957aca94c6b9c692e6436fb80461dc7407128.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-6089ac47e6846d8fa846b0266537fde9cb2bf2dd2897dc99b49e10c4e8f065c9.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~AppBridgeAutoOpenModal~AppBridgeContextualSaveBar~AppBridgeLoading~AppBridgeModal~AppBridgeT~b6aabeaf-12b8971d1dcc0600882fd0efec7ab2f68c9f38a0ac8fb2935f4a2c62d1fdc047.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~ManageZonesModal~Timeline~VirtualizedOptionsList-98b566f7137c7c56dddb657752954a9310149230d46be1a890e46d358fe963d1.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/MobileCompatibleCollectionShow~ShopImagePicker~Timeline~collectiondetails~productdetails~productvari~e3f6d10c-5d43ae6d0d39226e94164d8d1af2a4d397ee597fa077cb332d4d4ac0769ac69b.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Timeline-3ad651feced71d6f13c6f4be8a50c6e0635902b191e41513d3408305beab609b.css">
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/Timeline-93d779d9c5db9c4af1bd985c2fc0fee9c4ab54e6c7a0557e80523af137e1ce6d.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/vendors~trix-b04d3fed7b47a768a56b15c9251a3391ab0f577c2e71d8d35393de4b655ecb90.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/bundledFlags-3546aea09b2181be15692dc02f1d9738a3fa1ea01cd8d49e33e2b259a5a30708.js"></script>
    <script charset="utf-8" src="https://cdn.shopify.com/shopifycloud/web/assets/v1/latest/EditCustomerContactInfoModal-7b1e2147ff0e93ef11765fc3494f438b89286981a9337322fe2d1ce60ae1e626.js"></script>
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
                                      
                                        <div class="Polaris-Page-Header__TitleWrapper_bejfn">
                                            <div>
                                                <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                    <div class="Polaris-Header-Title__TitleWithMetadataWrapper_pdqv7 Polaris-Header-Title--newDesignLanguage_1rik8">
                                                        <div class="Polaris-Header-Title_2qj8j">
                                                            <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Notification</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                                <div class="Polaris-Header-Title__TitleAndSubtitleWrapper_40sxf">
                                                    <div class="Polaris-Header-Title_2qj8j">
                                                        <h1 class="Polaris-Header-Title--newDesignLanguageTitle_1wh8d">Accounts</h1>
                                                         <div class="Polaris-Page-Header__PrimaryActionWrapper_w8or9" style="position: absolute;top: 10px;right: 0px;"><a data-polaris-unstyled="true" class="Polaris-Button_r99lw Polaris-Button--newDesignLanguage_1rik8 Polaris-Button--primary_7k9zs" href="menu.html"><span class="Polaris-Button__Content_xd1mk">    <span class="Polaris-Button__Text_yj3uv">Add Menu</span></span></a></div>
                                                        
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
            <h2 class="Polaris-Heading">Customers notifications</h2>
            <div class="Polaris-Layout__AnnotationDescription">
              <p>These notifications are automatically sent out to the customer. Click on the notification template to edit the content. See also the templates variables documentation.</p>
            </div>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
                <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">


                        <div class="Polaris-DataTable">
                            <div class="Polaris-DataTable__ScrollContainer">
                                <dl class="Polaris-DescriptionList">
                                    <dt class="Polaris-DescriptionList__Term">Orders</dt>
                                    <dd class="Polaris-DescriptionList__Description"></dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Order confirmation</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent automatically to the customer after they place their order.</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Order confirmation</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent automatically to the customer after they place their order.</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Order confirmation</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent automatically to the customer after they place their order.</dd>

                                </dl>
                                <div id="PolarisPortalsContainer"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
          </div> 
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
                <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">


                        <div class="Polaris-DataTable">
                            <div class="Polaris-DataTable__ScrollContainer">
                                <dl class="Polaris-DescriptionList">
                                    <dt class="Polaris-DescriptionList__Term">Shippping</dt>
                                    <dd class="Polaris-DescriptionList__Description"></dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Fulfillment request</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">
Sent automatically to a third-party fulfillment service provider when order items are fulfilled.</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Shipping confirmation</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent automatically to the customer when their order is fulfilled (if you select this option).</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Shipping update</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent automatically to the customer if their fulfilled order’s tracking number is updated (if you select this option).</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Shipping update</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description"><input type="checkbox" style="height: 12px; margin: 0;margin-right: 3px;">Sent automatically to the customer if their fulfilled order’s tracking number is updated (if you select this option).</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Delivered</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description"><input type="checkbox" style="height: 12px; margin: 0;margin-right: 3px;">Sent to the customer automatically after orders with tracking information are delivered.</dd>

                                </dl>
                                <div id="PolarisPortalsContainer"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
          </div>  
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
                <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">


                        <div class="Polaris-DataTable">
                            <div class="Polaris-DataTable__ScrollContainer">
                                <dl class="Polaris-DescriptionList">
                                    <dt class="Polaris-DescriptionList__Term">Local delivery</dt>
                                    <dd class="Polaris-DescriptionList__Description"></dd>
                                    
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Out for delivery</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description"><input type="checkbox" style="height: 12px; margin: 0;margin-right: 3px;">Sent to the customer when their local order is out for delivery.</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Delivered</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description"><input type="checkbox" style="height: 12px; margin: 0;margin-right: 3px;">Sent to the customer when their local order is delivered.</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Missed delivery</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description"><input type="checkbox" style="height: 12px; margin: 0;margin-right: 3px;">Sent to the customer when they miss a local delivery.</dd>

                                </dl>
                                <div id="PolarisPortalsContainer"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
          </div>  
          <div class="Polaris-Card" >
            <div class="Polaris-Card__Section">
                <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">


                        <div class="Polaris-DataTable">
                            <div class="Polaris-DataTable__ScrollContainer">
                                <dl class="Polaris-DescriptionList">
                                    <dt class="Polaris-DescriptionList__Term">Local delivery</dt>
                                    <dd class="Polaris-DescriptionList__Description"></dd>
                                    
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Ready for pickup</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent to the customer manually through Point of Sale or admin. Lets the customer know their order is ready to be picked up.</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Pick Up</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent to the customer when the order is marked as picked up.</dd>

                                </dl>
                                <div id="PolarisPortalsContainer"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
          </div> 
          <div class="Polaris-Card" style="margin-bottom: 3rem;">
            <div class="Polaris-Card__Section">
                <div class="Polaris-FormLayout">
                    <div class="Polaris-FormLayout__Item">


                        <div class="Polaris-DataTable">
                            <div class="Polaris-DataTable__ScrollContainer">
                                <dl class="Polaris-DescriptionList">
                                    <dt class="Polaris-DescriptionList__Term">Customer</dt>
                                    <dd class="Polaris-DescriptionList__Description"></dd>
                                    
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Customer account invite</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent to the customer with account activation instructions. You can edit this email before you send it.</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Customer account welcome</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent automatically to the customer when they complete their account activation.</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Customer account password reset</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent automatically to the customer when they ask to reset their accounts password.</dd>
                                    <dt class="Polaris-DescriptionList__Term"><button class="Polaris-Button Polaris-Button--plain" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="text-align: left;">Contact customer</span></span></button></dt>
                                    <dd class="Polaris-DescriptionList__Description">Sent to the customer when you contact them from the orders or customers page. You can edit this email before you send it.</dd>

                                </dl>
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

@endsection