<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\sub_categories;
use App\Models\cat_items;
use App\Models\products;


class SelectionController extends Controller
{
    public function getsubcategory(Request $request)
    {
        $query = $request->get('query');
        
        $data = sub_categories::where('cat_id', $query)->get();  
        $dat = array();
        $n = 0;


        if(count($data)!=0){
            foreach($data as $title)
            {
                $dat[$n] = '<option value='.$title->id.'>'.$title->subcat_title.'</option>';
                $n++;
            }
        
            return $dat;  
        }
        else
        {            
            $dat[$n] = "<option value=''>Collection Not Found</option>";          
            return $dat;
        }       
    }
    public function getcollection(Request $request)
    {
        $dat = array();
        $query = $request->get('query');
        $n = 0;
        $data = cat_items::where('subcat_id', $query)->get(); 
        if(count($data)!=0){
            
            
            foreach($data as $title)
            {
                $dat[$n] = '<option value='.$title->cat_item_id.'>'.$title->cat_item_title.'</option>';
                $n++;
            }
            return $dat;
        }       
        else
        {            
            $dat[$n] = "<option value=''>Collection Not Found</option>";          
            return $dat;
        }
             
    }
    
    public function getproduct(Request $request)
    {
        
        $query = $request->get('query');
        
        $data = products::where('pro_title', 'LIKE', "%{$query}%")->get();  
        
        $dat = array();
        $n = 0;


        if(count($data)!=0){
            
            foreach($data as $title)
            {
                $dat[$n] = '<li class="H789X _2v98I">
                <div class="_3GcfB">
                    <div class="_3AXBQ _2v98I" testid="Item-Wrapper"><a data-polaris-unstyled="true" aria-describedby="gid://shopify/Product/4799715246129" aria-label="3M MicroTouch™ Chassis 1123988" class="_1mXeM" tabindex="0" href="/admin/products/4799715246129"></a>
                        <div testid="Item-Content" class="_3vlzY" id="gid://shopify/Product/4799715246129">
                            <div class="_1OQnM" testid="LargerSelectionArea">
                                <div class="_3GtfQ" testid="LargerSelectionArea">
                                    <div class="_3IURJ"><span><label class="Polaris-Choice_j5gzq Polaris-Choice--labelHidden_14tn9" for="ResourceListItemCheckbox1"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="ResourceListItemCheckbox1" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Select: 3M MicroTouch™ Chassis 1123988</span></label></span></div>
                                </div>
                                <div class="h7HU2" testid="Media"><span class="Polaris-Thumbnail_15hj1 Polaris-Thumbnail--sizeMedium_5f35p"><img src="assets\img\$title->pro_img" alt="3M MicroTouch™ Chassis 1123988"></span></div>
                            </div>
                            
                                
                            
                            <div class="Go8ev">
                                <div class="jkDBs">
                                    <div class="_3Qht4">
                                        <div class="_1Koso" testid="ProductTitles"><span><a data-polaris-unstyled="true" class="addp"><span class="_3ffC6">'.$title->pro_title.'</span></a></span></div>
                                        <div class="_2rEIF"><span><a target="_blank" href="addProduct.html" rel="noopener noreferrer" data-polaris-unstyled="true" class="Polaris-Link_yj5sy" tabindex="0" aria-describedby="PolarisTooltipContent18"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8" aria-label="View on Online Store"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                            <path d="M17.928 9.628C17.837 9.399 15.611 4 10 4S2.162 9.399 2.07 9.628a1.017 1.017 0 0 0 0 .744C2.163 10.601 4.389 16 10 16s7.837-5.399 7.928-5.628a1.017 1.017 0 0 0 0-.744zM10 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-6a2 2 0 1 0 .002 4.001A2 2 0 0 0 9.999 8z"></path>
                                                        </svg></span></a></span></div>
                                    </div>
    
    
                                    <span class="_3ukpq">'.$title->type.'</span><span class="_3xV5X">'.$title->vendor.'</span>
                                    <div><span class="_19hkN">
                                            <div class="_5wVMc">
                                                <div><button type="button" class="_1iEvJ" tabindex="0" aria-controls="Polarispopover33" aria-owns="Polarispopover33" aria-expanded="false"><span>
                                                            <div class="Polaris-Stack_32wu2 Polaris-Stack--spacingNone_1b3d3 Polaris-Stack--distributionEqualSpacing_x9cqm Polaris-Stack--noWrap_vecks">
                                                                <div class="Polaris-Stack__Item_yiyol"><span class="Polaris-Badge_2qgie Polaris-Badge--statusSuccess_pc5rl"><span class="Polaris-VisuallyHidden_yrtt5">Success </span>'.$title->status.'</span></div>
                                                                <div class="Polaris-Stack__Item_yiyol">
                                                                    <div class="_310Yx _1rMSe"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                                                <path d="M5 8l5 5 5-5H5z"></path>
                                                                            </svg></span></div>
                                                                </div>
                                                            </div>
                                                        </span></button></div>
                                            </div>
                                        </span>
    
    
    
                                    </div>
                                    <div id="ProductListItem-Inventory" class="_1o243"><span class="_6kjm7">'.$title->stock.'</span> in stock</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>';
            $n++;
            }
        
            return $dat;  
        }
        else
        {            
            $dat[$n] = "Not Found";          
            return $dat;
        }
        
    }


    public function getcategory(Request $request)
    {
        
        $query = $request->get('query');
        
        $data = categories::where('cat_title', 'LIKE', "%{$query}%")->get();  
        
        $dat = array();
        $n = 0;


        if(count($data)!=0){
            
            foreach($data as $title)
            {
                $dat[$n] = '<tr class="_1Apqa _28DC1">
                <td class="_2ROf4 _3sidR">
                    <div class="iUISH">
                        <div class="_38hQr _1ORzt"><label class="Polaris-Choice_j5gzq Polaris-Choice--labelHidden_14tn9" for="gid://shopify/Order/2510027653169"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="gid://shopify/Order/2510027653169" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Select Order</span></label></div>
                    </div>
                </td>
                <td class="_2ROf4 _3k9ch" style="left: 64px;padding: 20px;">
                <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><span class="Polaris-Thumbnail Polaris-Thumbnail--sizeMedium"><img src="/assets/img/'.$title->cat_img.'" alt="Black choker necklace"></span>
<div id="PolarisPortalsContainer"></div>
</div>
                
                </td>
                
                <td class="_2ROf4">
                    <div class="">
                        <div title="Monday, November 02, 2020" style="font-weight: 500;color: #1D1F21;"><a href="" style="color: #1D1F21;">'.$title->cat_title.'</a></div>
                        <div title="Monday, November 02, 2020">'.$title->created_at.'</div>
                    </div>
                </td>
                
            </tr>';
            $n++;
            }
        
            return $dat;  
        }
        else
        {            
            $dat[$n] = "Not Found";          
            return $dat;
        }
     return $query;   
    }

    public function getsucategory(Request $request)
    {
        
        $query = $request->get('query');
        
        $data = sub_categories::where('subcat_title', 'LIKE', "%{$query}%")->get();  
        
        $dat = array();
        $n = 0;


        if(count($data)!=0){
            
            foreach($data as $title)
            {
                $dat[$n] = '<tr class="_1Apqa _28DC1">
                <td class="_2ROf4 _3sidR">
                    <div class="iUISH">
                        <div class="_38hQr _1ORzt"><label class="Polaris-Choice_j5gzq Polaris-Choice--labelHidden_14tn9" for="gid://shopify/Order/2510027653169"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="gid://shopify/Order/2510027653169" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Select Order</span></label></div>
                    </div>
                </td>
                <td class="_2ROf4 _3k9ch" style="left: 64px;padding: 20px;">
                <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><span class="Polaris-Thumbnail Polaris-Thumbnail--sizeMedium"><img src="/assets/img/'.$title->subcat_img.'" alt="Black choker necklace"></span>
                <div id="PolarisPortalsContainer"></div>
                </div>
                
                </td>
                
                <td class="_2ROf4">
                    <div class="">
                        <div title="Monday, November 02, 2020" style="font-weight: 500;color: #1D1F21;"><a href="" style="color: #1D1F21;">'.$title->subcat_title.'</a></div>
                        <div title="Monday, November 02, 2020">'.$title->created_at.'</div>
                    </div>
                </td>
                
            </tr>';
            $n++;
            }
        
            return $dat;  
        }
        else
        {            
            $dat[$n] = "Not Found";          
            return $dat;
        }
     return $query;   
    }



    public function getcoll(Request $request)
    {
        
        $query = $request->get('query');
        
        $data = cat_items::where('cat_item_title', 'LIKE', "%{$query}%")->get();  
        
        $dat = array();
        $n = 0;


        if(count($data)!=0){
            
            foreach($data as $title)
            {
                $dat[$n] = '<tr class="_1Apqa _28DC1">
                <td class="_2ROf4 _3sidR">
                    <div class="iUISH">
                        <div class="_38hQr _1ORzt"><label class="Polaris-Choice_j5gzq Polaris-Choice--labelHidden_14tn9" for="gid://shopify/Order/2510027653169"><span class="Polaris-Choice__Control_1u8vs"><span class="Polaris-Checkbox_1d6zr Polaris-Checkbox--newDesignLanguage_1rik8"><input id="gid://shopify/Order/2510027653169" type="checkbox" class="Polaris-Checkbox__Input_30ock" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop_1x2i2"></span><span class="Polaris-Checkbox__Icon_yj27d"><span class="Polaris-Icon_yj27d Polaris-Icon--newDesignLanguage_1rik8"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                </svg></span></span></span></span><span class="Polaris-Choice__Label_2vd36">Select Order</span></label></div>
                    </div>
                </td>
                <td class="_2ROf4 _3k9ch" style="left: 64px;padding: 20px;">
                <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><span class="Polaris-Thumbnail Polaris-Thumbnail--sizeMedium"><img src="/assets/img/'.$title->cat_item_img.'" alt="Black choker necklace"></span>
                <div id="PolarisPortalsContainer"></div>
                </div>
                
                </td>
                
                <td class="_2ROf4">
                    <div class="">
                        <div title="Monday, November 02, 2020" style="font-weight: 500;color: #1D1F21;"><a href="" style="color: #1D1F21;">'.$title->cat_item_title.'</a></div>
                        <div title="Monday, November 02, 2020">'.$title->created_at.'</div>
                    </div>
                </td>
                
            </tr>';
            $n++;
            }
        
            return $dat;  
        }
        else
        {            
            $dat[$n] = "Not Found";          
            return $dat;
        }
     return $query;   
    }




}
