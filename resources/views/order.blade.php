@extends('layouts.app')
@section('content')

<div class="Polaris-Frame__ContextualSaveBar Polaris-Frame-CSSAnimation--startFade"></div>
      <main class="Polaris-Frame__Main" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
        <div class="Polaris-Frame__Content">
            <div class="Polaris-Page__Content">
              <div class="Polaris-Layout"><a id="SkipToContentTarget" tabindex="-1"></a>
                <div class="Polaris-Layout__AnnotatedSection" style="margin-left: 60px">
                  <div class="Polaris-Layout__AnnotationWrapper">
                    <div class="Polaris-Layout__Annotation">
                   
                   <!--List with filter-->
                   <p style="font-size: 20px; margin-bottom: 20px; font-weight: 500" >Orders  <a href="addProduct.html" style=" font-weight: 500;  font-size: 18px; text-decoration: none; color: currentColor; text-align: right; margin-left: 800px;">Export</a>
                   
                   <button type="button" class="Polaris-Button Polaris-Button--sizeSlim" style="background: #008060; color: aliceblue; border-radius: 5px;margin-left: 20px;"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" style="font-weight: 500;">Add Product</span></span></button>
                   </p>
                   
                   <!--List with filter-->
                   <!--List with filter-->
                   <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
  <div class="Polaris-Card">
    <div>
      <div class="Polaris-Tabs__Wrapper">
        <ul role="tablist" class="Polaris-Tabs">
          <li class="Polaris-Tabs__TabContainer"><button id="all-customers" role="tab" type="button" tabindex="0" class="Polaris-Tabs__Tab Polaris-Tabs__Tab--selected" aria-selected="true" aria-controls="all-customers-content" aria-label="All customers" ><span class="Polaris-Tabs__Title">All</span></button></li>
          <li class="Polaris-Tabs__TabContainer"><button id="accepts-marketing" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" aria-controls="accepts-marketing-content"><span class="Polaris-Tabs__Title">Unfilled</span></button></li>
          <li class="Polaris-Tabs__TabContainer"><button id="repeat-customers" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" aria-controls="repeat-customers-content"><span class="Polaris-Tabs__Title">Unpaid</span></button></li>
          <li class="Polaris-Tabs__TabContainer"><button id="prospects" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" aria-controls="prospects-content"><span class="Polaris-Tabs__Title">Open</span></button></li>
        <li class="Polaris-Tabs__TabContainer"><button id="prospects" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" aria-controls="prospects-content"><span class="Polaris-Tabs__Title">Closed</span></button></li>
          <li class="Polaris-Tabs__DisclosureTab">
            <div><button type="button" class="Polaris-Tabs__DisclosureActivator" aria-label="More tabs" tabindex="0" aria-controls="Polarispopover2" aria-owns="Polarispopover2" aria-expanded="false"><span class="Polaris-Tabs__Title"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                      <path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path>
                    </svg></span></span></button></div>
          </li>
        </ul>
        <div class="Polaris-Tabs Polaris-Tabs__TabMeasurer">
          <li class="Polaris-Tabs__TabContainer"><button id="all-customersMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab Polaris-Tabs__Tab--selected" aria-selected="true"><span class="Polaris-Tabs__Title">All</span></button></li>
          <li class="Polaris-Tabs__TabContainer"><button id="accepts-marketingMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false"><span class="Polaris-Tabs__Title">Accepts marketing</span></button></li>
          <li class="Polaris-Tabs__TabContainer"><button id="repeat-customersMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false"><span class="Polaris-Tabs__Title">Repeat customers</span></button></li>
          <li class="Polaris-Tabs__TabContainer"><button id="prospectsMeasurer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false"><span class="Polaris-Tabs__Title">Prospects</span></button></li><button type="button" class="Polaris-Tabs__DisclosureActivator" aria-label="More tabs"><span class="Polaris-Tabs__Title"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                  <path d="M6 10a2 2 0 1 1-4.001-.001A2 2 0 0 1 6 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 12 10zm6 0a2 2 0 1 1-4.001-.001A2 2 0 0 1 18 10z"></path>
                </svg></span></span></button>
        </div>
      </div>
      <div class="Polaris-Tabs__Panel" id="all-customers-content" role="tabpanel" aria-labelledby="all-customers" tabindex="-1">
        
            
            
            <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:230px;">
  <div>
    <div class="Polaris-Card" >
      <div class="Polaris-ResourceList__ResourceListWrapper">
       
    
        <div class="Polaris-ResourceList__FiltersWrapper">
          <div class="Polaris-Filters">
            
            <div class="Polaris-Filters-ConnectedFilterControl__Wrapper">
              <div class="Polaris-Filters-ConnectedFilterControl Polaris-Filters-ConnectedFilterControl--right">
                <div class="Polaris-Filters-ConnectedFilterControl__CenterContainer">
                  <div class="Polaris-Filters-ConnectedFilterControl__Item">
                    <div class="Polaris-Labelled--hidden">
                      <div class="Polaris-Labelled__LabelWrapper">
                        <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Filter customers</label></div>
                      </div>
                      <div class="Polaris-Connected">
                        <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                          <div class="Polaris-TextField">
                            <div class="Polaris-TextField__Prefix" id="PolarisTextField2Prefix"><span class="Polaris-Filters__SearchIcon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414z" ></path>
                                  </svg></span></span></div><input id="PolarisTextField2" placeholder="Filter customers" class="Polaris-TextField__Input Polaris-TextField__Input--hasClearButton" aria-labelledby="PolarisTextField2Label PolarisTextField2Prefix" aria-invalid="false" aria-multiline="false" value="">
                            <div class="Polaris-TextField__Backdrop"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="Polaris-Filters-ConnectedFilterControl__RightContainer">
                  <div class="Polaris-Filters-ConnectedFilterControl__Item">
                    <div><button id="Activator-accountStatus" type="button" class="Polaris-Button" tabindex="0" aria-controls="Polarispopover1" aria-owns="Polarispopover1" aria-expanded="false"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Product Vender</span><span class="Polaris-Button__Icon">
                            <div class="Polaris-Button__DisclosureIcon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                  <path d="M5 8l5 5 5-5H5z"></path>
                                </svg></span></div>
                          </span></span></button></div>
                  </div>
                  <div class="Polaris-Filters-ConnectedFilterControl__Item">
                    <div><button id="Activator-taggedWith" type="button" class="Polaris-Button" tabindex="0" aria-controls="Polarispopover2" aria-owns="Polarispopover2" aria-expanded="false"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Tagged with</span><span class="Polaris-Button__Icon">
                            <div class="Polaris-Button__DisclosureIcon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                  <path d="M5 8l5 5 5-5H5z"></path>
                                </svg></span></div>
                          </span></span></button></div>
                  </div>
                  <div class="Polaris-Filters-ConnectedFilterControl__Item">
                    <div><button id="Activator-taggedWith" type="button" class="Polaris-Button" tabindex="0" aria-controls="Polarispopover2" aria-owns="Polarispopover2" aria-expanded="false"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Status</span><span class="Polaris-Button__Icon">
                            <div class="Polaris-Button__DisclosureIcon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                  <path d="M5 8l5 5 5-5H5z"></path>
                                </svg></span></div>
                          </span></span></button></div>
                  </div>
                </div>
                <div class="Polaris-Filters-ConnectedFilterControl__MoreFiltersButtonContainer">
                  <div class="Polaris-Filters-ConnectedFilterControl__Item">
                    <div><button type="button" class="Polaris-Button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">More filters</span></span></button></div>
                  </div>
                </div>
                 
                 
               
                 <div style=" margin-left: 10px; --top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><button type="button" class="Polaris-Button Polaris-Button--disabled" disabled=""><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Saved</span></span></button></div>
                 <div style=" margin-left: 10px; --top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><button type="button" class="Polaris-Button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Sort by</span></span></button></div>
              </div>
            </div>
          </div>
 
        </div>
      <div class="Polaris-Card">
        <div class="">
          <div class="Polaris-DataTable__Navigation"><button type="button" class="Polaris-Button Polaris-Button--disabled Polaris-Button--plain Polaris-Button--iconOnly" disabled="" aria-label="Scroll table left one column"><span class="Polaris-Button__Content"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                      <path d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414L8.414 10l4.293 4.293A.999.999 0 0 1 12 16z"></path>
                    </svg></span></span></span></button><button type="button" class="Polaris-Button Polaris-Button--plain Polaris-Button--iconOnly" aria-label="Scroll table right one column"><span class="Polaris-Button__Content"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                      <path d="M8 16a.999.999 0 0 1-.707-1.707L11.586 10 7.293 5.707a.999.999 0 1 1 1.414-1.414l5 5a.999.999 0 0 1 0 1.414l-5 5A.997.997 0 0 1 8 16z"></path>
                    </svg></span></span></span></button></div>
          <div class="Polaris-DataTable">
            <div class="Polaris-DataTable__ScrollContainer">
              <table class="Polaris-DataTable__Table">
                
                
                <thead>
                  <tr>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header" scope="col">
                    <label class="Polaris-Choice" for="PolarisCheckbox2"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input id="PolarisCheckbox2" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                    </svg></span></span></span></span>
                    Order
                    </label>
                    </th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header " scope="col" >Date</th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header " scope="col" style="text-align: ">Customer</th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header " scope="col">Total</th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header " scope="col">Payment</th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header " scope="col">Fullfilment</th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header " scope="col">Delivery Method</th>
                    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header " scope="col">Tags</th>
                  </tr>
                </thead>
                    <tbody>
                      <tr class="Polaris-DataTable__TableRow" style="text-align:center;">
                        <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn" scope="row">

                        <label class="Polaris-Choice" for="PolarisCheckbox1"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input id="PolarisCheckbox1" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                        <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                        </svg></span></span></span></span>
                        #1001
                        </label>

                        </th>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">Dec 6 at 3:46 pm</td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">No Customer</td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">$140</td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">
                            <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><span class="Polaris-Badge Polaris-Badge--statusWarning"><span class="Polaris-VisuallyHidden">Warning </span>Payment Pending</span>
                            <div id="PolarisPortalsContainer"></div>
                            </div>
                        </td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">
                            <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><span class="Polaris-Badge">Fulfilled</span>
                            <div id="PolarisPortalsContainer"></div>
                            </div>
                        </td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">5 items</td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">Standard Shipping</td>
                      </tr>
                      <tr class="Polaris-DataTable__TableRow">
                        <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn" scope="row">

                        <label class="Polaris-Choice" for="PolarisCheckbox1"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input id="PolarisCheckbox1" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                        <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                        </svg></span></span></span></span>
                        #1002
                        </label>

                        </th>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">Dec 6 at 3:46 pm</td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">No Customer</td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">$140</td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">
                            <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><span class="Polaris-Badge">Fulfilled</span>
                            <div id="PolarisPortalsContainer"></div>
                            </div>
                        </td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">
                            <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><span class="Polaris-Badge Polaris-Badge--statusAttention"><span class="Polaris-VisuallyHidden">Attention </span>Unfulfilled</span>
                            <div id="PolarisPortalsContainer"></div>
                            </div>
                        </td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop ">1 item</td>
                        <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop " style="text-decoration: line-through;">Standard Shipping</td>
                      </tr>
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>
           <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
  <div id="PolarisPortalsContainer"></div>
</div>
            
        
      </div>
      <div class="Polaris-Tabs__Panel Polaris-Tabs__Panel--hidden" id="accepts-marketing-content" role="tabpanel" aria-labelledby="accepts-marketing" tabindex="-1"></div>
      <div class="Polaris-Tabs__Panel Polaris-Tabs__Panel--hidden" id="repeat-customers-content" role="tabpanel" aria-labelledby="repeat-customers" tabindex="-1"></div>
      <div class="Polaris-Tabs__Panel Polaris-Tabs__Panel--hidden" id="prospects-content" role="tabpanel" aria-labelledby="prospects" tabindex="-1"></div>
    </div>
  </div>
</div>
                   
                   <!--List with filter-->
                   
                   
                    
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                    
                    
                    
      </main>
    </div>
  </div>
</div>
<div></div>



<div class="Polaris-Frame-ToastManager" aria-live="polite"></div>


@endsection